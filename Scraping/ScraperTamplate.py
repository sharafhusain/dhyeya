import requests
import mysql.connector
from datetime import datetime
from utils.conn import connector
from utils.conn import curser
from utils.HelperFunctions import *
from utils.Paginate import *
from utils.Counter import *
from utils.downloadableContent import *
from utils.ORM_for_BS import *

# samplePaylode = {
#     "counter" : Counter("Brain Booster"),
#     "pagination" : Paginate("https://dhyeyaias.com/brain-booster"),
#     "attachmentSavingPath" : "/storage/media/download/brain_booster",
#     "title_tag" : {"selectorType":"element_id","value":"page-title"},
#     "description_tag" : {"selectorType":"element_class","value":"field-item"},
#     "excerpt_meta_name" : "twitter:description",
#     "keywords_meta_name" : "keywords",
#     "date_css_selector" : {"selectorType":"css_selector","value":".views-table tr .viewdate"} ,
#     "post_type" : "child-of-brain-booster",
# }

def seed(**kwargs):
    while (kwargs["pagination"].hasPage()):
        kwargs["counter"].countPage()
        pageUrl = kwargs["pagination"].naxtPage()
        print(pageUrl)
        archivePageSoup = getSoup(pageUrl)
        if archivePageSoup == None:
            print("Fail to fetch Archive Url:"+pageUrl)
            continue
        postUrls = fetchAllPostUrls(archivePageSoup)
        savePosts(postUrls, archivePageSoup, **kwargs)


def savePosts(postUrls, archivePageSoup, **kwargs):
    for index, url in enumerate(postUrls):
        try:
            en_post = getSoup("https://dhyeyaias.com"+url)
            hasEnglishContent = hasContent(en_post, kwargs["description_tag"])

            if hasEnglishContent:
                en_title = getElement(en_post, kwargs["title_tag"])
                en_description = getElement(en_post, kwargs["description_tag"])
                en_excerpt = getMeta(en_post, kwargs["excerpt_meta_name"])
                en_img_url = getImageUrl(en_description)
                en_img_name = getSlug(en_img_url)
                parsed_date = getDate(
                    archivePageSoup, index, kwargs["date_css_selector"])
                keywords = getMeta(en_post, kwargs["keywords_meta_name"])
                slug = getSlug(url)
                saveImage(en_img_url)
                setDownloadableContent(
                    curser, en_description, kwargs["attachmentSavingPath"])

            hi_post = getSoup("https://dhyeyaias.com//hindi/"+url)
            hasHindiContent = hasContent(hi_post, kwargs["description_tag"])

            if hasHindiContent:
                hi_title = getElement(hi_post, kwargs["title_tag"])
                hi_description = getElement(hi_post, kwargs["description_tag"])
                hi_excerpt = getMeta(hi_post, kwargs["excerpt_meta_name"])
                hi_img_url = getImageUrl(hi_description)
                hi_img_name = getSlug(hi_img_url)
                saveImage(hi_img_url)
                setDownloadableContent(
                    curser, hi_description, kwargs["attachmentSavingPath"])

        except requests.HTTPError as e:
            print(e, end="\n")
            
        # except Exception as e:
        #     print("Could not save Page: ", e, end="\n")
        #     print()
            

        if hasEnglishContent:
            post_id = save_post(curser, kwargs["post_type"], slug, parsed_date)
            save_post_translation(curser, "en", post_id,
                                  en_title.text, en_description, en_img_name)
            seoId = save_seo(curser, post_id, keywords, parsed_date)
            save_seo_translation(curser, seoId, "en", en_excerpt)
            print("English Saved.", end=" ")

        if hasHindiContent:
            save_post_translation(curser, "hi", post_id,
                                  hi_title.text, hi_description, hi_img_name)
            save_seo_translation(curser, seoId, "hi", hi_excerpt)
            print("Hindi Saved.", end=" ")

        connector.commit()
        kwargs["counter"].countPost()
        kwargs["counter"].printCount()

if __name__ == "__main__":
    seed(**samplePaylode)
