import requests
import mysql.connector
from utils.Paginate import *
from utils.Counter import *
from datetime import datetime
from utils.conn import connector
from utils.conn import curser
from utils.HelperFunctions import *
from utils.downloadableContent import *
from utils.ORM_for_BS import *

counter = Counter("Daily News Analysis")
pagination = Paginate("https://www.dhyeyaias.com/current-affairs/daily-current-affairs")
attachmentSavingPath = "/storage/media/download/dna/"
title_tag = {"selectorType":"element_id","value":"page-title"}
description_tag = {"selectorType":"element_class","value":"field-item"}
excerpt_meta_name = "twitter:description"
keywords_meta_name = "keywords"
date_css_selector = {"selectorType":"css_selector","value":".views-table tr .viewdate"}
post_type = "child-of-daily-current-affairs"

def savePosts(postUrls,archivePageSoup=None):
    for index,url in enumerate(postUrls):
        try:
            en_post = getSoup("https://dhyeyaias.com"+url)
            hasEnglishContent = hasContent(en_post, description_tag)

            if hasEnglishContent:
                en_title = getElement(en_post,title_tag)
                en_description = getElement(en_post,description_tag)
                en_excerpt = getMeta(en_post,excerpt_meta_name)
                en_img_url = getImageUrl(en_description)
                en_img_name = getSlug(en_img_url)
                parsed_date = getDate(archivePageSoup,index,date_css_selector)
                keywords = getMeta(en_post,keywords_meta_name)
                slug = getSlug(url)
                saveImage(en_img_url)
                setDownloadableContent(curser,en_description,attachmentSavingPath)

            hi_post = getSoup("https://dhyeyaias.com//hindi/current-affairs/articles/"+getSlug(url))
            hasHindiContent = hasContent(hi_post, description_tag)

            if hasHindiContent:
                hi_title = getElement(hi_post,title_tag)
                hi_description = getElement(hi_post,description_tag)
                hi_excerpt = getMeta(hi_post,excerpt_meta_name)
                hi_img_url = getImageUrl(hi_description)
                hi_img_name = getSlug(hi_img_url)
                saveImage(hi_img_url)
                setDownloadableContent(curser,hi_description,attachmentSavingPath)

        except requests.HTTPError as e:
            print(e, end="\n")
            continue
        # except Exception as e:
        #     print("Could not save Page: ",e, end="\n")
        #     print()
        #     continue

        if hasEnglishContent:
            post_id = save_post(curser,post_type,slug,parsed_date)
            save_post_translation(curser,"en", post_id,en_title.text,en_description,en_img_name)
            seoId = save_seo(curser,post_id,keywords,parsed_date)
            save_seo_translation(curser,seoId, "en", en_excerpt)
            print("English Saved.", end=" ")


        if hasHindiContent:
            save_post_translation(curser,"hi", post_id,hi_title.text,hi_description,hi_img_name)
            save_seo_translation(curser,seoId, "hi", hi_excerpt)
            print("Hindi Saved.", end=" ")

        connector.commit()
        counter.countPost()
        counter.printCount()


def seed_news_analysis():
    while (pagination.hasPage()):
        counter.countPage()
        pageUrl = pagination.naxtPage()
        print(pageUrl)
        archivePageSoup = getSoup(pageUrl)
        if archivePageSoup == None:
            print("Fail to fetch Url")
            break
        postUrls = fetchAllPostUrls(archivePageSoup)
        savePosts(postUrls, archivePageSoup)

if __name__== "__main__":
    seed_news_analysis()
    # savePosts(["/current-affairs/daily-current-affairs/security-challenges-in-the-indian-ocean"])