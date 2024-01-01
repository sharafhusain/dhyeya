from datetime import datetime
from utils.conn import *
from utils.HelperFunctions import *
from utils.downloadableContent import *
from utils.Paginate import *
from utils.Counter import *
from utils.ORM_for_BS import *
import requests
from bs4 import BeautifulSoup
import sys

config = {
    "counter" : Counter("Perfect 7"),
    "pagination" : Paginate("https://www.dhyeyaias.com/magazine/perfect-7"),
    "attachmentSavingPath" : "/storage/media",
    "title_tag" : {"selectorType":"element_id","value":"page-title"},
    "description_tag" : {"selectorType":"element_id","value":"block-system-main"},
    "excerpt_meta_name" : "twitter:description",
    "keywords_meta_name" : "keywords",
    "date_css_selector" : {"selectorType":"css_selector","value":".views-table tr .viewdate"} ,
    "post_type" : "download",
}



# getting the parent post id from the database
curser.execute("select * from categories where `category_slug` = 'magazine';")
primary_category_id = curser.fetchall()[0][0]

# creating this here cos parent id nothing to do with the kurukshetra or yojana
# kurukshetra = save_category(curser,primary_category_id,"Kurukshetra Magazine Monthly Gist","kurukshetra-monthly-gist",2)
# yojana = save_category(curser,primary_category_id,"Yojana Magazine Monthly Gist","yojana-monthly-gist",2)

sub_category_id = save_category(curser,primary_category_id,"perfect-7",2)
connector.commit()


def savePosts(postUrls, **kwargs):
    for url in postUrls:
        try:
            en_post = getSoup("https://dhyeyaias.com"+url)
            hasEnglishContent = hasContent(en_post, kwargs["description_tag"])

            if hasEnglishContent:
                en_title = getElement(en_post, kwargs["title_tag"])
                en_description = getElement(en_post, kwargs["description_tag"])
                en_excerpt = getMeta(en_post, kwargs["excerpt_meta_name"])
                en_img_url = getImageUrl(en_description)
                en_img_name = getSlug(en_img_url)
                parsed_date = datetime.now()
                keywords = getMeta(en_post, kwargs["keywords_meta_name"])
                slug = getSlug(url)
                saveImage(en_img_url)
                setDownloadableContent(curser, en_description, kwargs["attachmentSavingPath"])


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
            
        except Exception as e:
            print("Could not save Page: ", e, end="\n")
            print()
            

        if hasEnglishContent:
            post_id = save_post(curser, kwargs["post_type"], slug, parsed_date)
            save_post_translation(curser, "en", post_id,
                                  en_title.text, en_description, en_img_name)
            seoId = save_seo(curser, post_id, keywords, parsed_date)
            save_seo_translation(curser, seoId, "en", en_excerpt)

            pdf_link = getElementWithMatchingHref(en_description)
            pdf_name = getSlug(pdf_link)
            saveDownloadableContent(curser,pdf_link)
            attachmentId = save_post_attachment(curser,post_id,pdf_name)
            save_post_attachment_translation(curser, "en", attachmentId,pdf_name,pdf_name)

            sync_category_and_post(curser,post_id, sub_category_id)
            print("English Saved.", end=" ")

        if hasHindiContent:
            save_post_translation(curser, "hi", post_id,hi_title.text, hi_description, hi_img_name)
            save_seo_translation(curser, seoId, "hi", hi_excerpt)

            pdf_link_hi = getElementWithMatchingHref(hi_description,"dhyeyaias.com/hindi/sites/default/files/")
            pdf_name_hi = getSlug(pdf_link_hi)
            saveDownloadableContent(curser, pdf_link_hi)
            save_post_attachment_translation(curser, "hi", attachmentId,pdf_name_hi,pdf_name_hi)
            print("Hindi Saved.", end=" ")


        connector.commit()
        kwargs["counter"].countPost()
        kwargs["counter"].printCount()


# To iterate through all pages
def seed7():
    counter,paginator =  config["counter"],config["pagination"]

    # iterating throgh pages
    while (paginator.hasPage()):
        counter.countPage()
        pageUrl = paginator.naxtPage()
        page = getSoup(pageUrl)
        anchors = getElement(page, {"selectorType":"css_selector","value":"td.views-field-title"})
        url_list = [x.a["href"] for x in anchors]

        savePosts(url_list,**config)


if __name__=="__main__":
    seed7()
