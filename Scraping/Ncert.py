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

samplePaylode = {
    # "counter" : Counter("Brain Booster"),
    # "pagination" : Paginate("https://dhyeyaias.com/brain-booster"),
    "attachmentSavingPath" : "/storage/media/",
    "title_tag" : {"selectorType":"element_id","value":"page-title"},
    "description_tag" : {"selectorType":"element_class","value":"field-item"},
    "excerpt_meta_name" : "twitter:description",
    "keywords_meta_name" : "keywords",
    # "date_css_selector" : {"selectorType":"css_selector","value":".views-table tr .viewdate"} ,
    "post_type" : "download",
}
curser.execute("select * from categories where `category_slug` = 'NCERT-Books';")
primary_category_id = curser.fetchall()[0][0]


def saveNcert(sub_category_id, url,title=None, **kwargs):
    en_post = getSoup("https://www.dhyeyaias.com"+url)
    hi_post = getSoup("https://www.dhyeyaias.com/hindi"+url)

    hasEnglishContent = hasContent(en_post, kwargs["description_tag"])
    hasHindiContent = hasContent(hi_post, kwargs["description_tag"])

    if hasEnglishContent:
        post_slug = getSlug(url)
        parsed_date = datetime.now()
        keywords = getMeta(en_post, kwargs["keywords_meta_name"])

        en_title = title if title else getElement(en_post, kwargs["title_tag"]).text
        if (sys.getsizeof(en_title) > 190):en_title = en_title[0:(len(en_title)//2)]+"..."
        en_description = getElement(en_post, kwargs["description_tag"])
        en_excerpt = getMeta(en_post, kwargs["excerpt_meta_name"])
        en_img_url = getImageUrl(en_description)
        en_img_name = getSlug(en_img_url)
        saveImage(en_img_url)

    if hasHindiContent:
        hi_title = title if title else getElement(hi_post, kwargs["title_tag"]).text
        if (sys.getsizeof(hi_title) > 190):hi_title = hi_title[0:(len(hi_title)//2)]+"..."
        hi_description = getElement(hi_post, kwargs["description_tag"])
        hi_excerpt = getMeta(hi_post, kwargs["excerpt_meta_name"])
        hi_img_url = getImageUrl(hi_description)
        hi_img_name = getSlug(hi_img_url)
        saveImage(hi_img_url)



    # delete_element_contains_string(post,"Click Here to Download","a",True)
    download_link = soup_string_finder(en_post,"Click Here to Download","a")
    # To Change Download Link Class
    if(download_link):
        for parent_div in download_link.parents:
            if(parent_div.name == "div"):
                parent_div["style"] = []
                download_link["class"] = ["btn", "btn-ex-blue", "btn-sm"]
                download_link.find("font")["color"] = []
                break


    # delete_element_contains_string(post,"Click Here to Download","a",True)
    download_link_hi = soup_string_finder(hi_post,"एनसीईआरटी पुस्तक डाउनलोड करने के लिए यहां क्लिक करें","a")
    # To Change Download Link Class
    if(download_link_hi):
        for parent_div in download_link_hi.parents:
            if(parent_div.name == "div"):
                parent_div["style"] = []
                download_link_hi["class"] = ["btn", "btn-ex-blue", "btn-sm"]
                download_link_hi.find("font")["color"] = []
                break

    if hasEnglishContent:
        post_id = save_post(curser, kwargs["post_type"], post_slug, parsed_date)
        save_post_translation(curser, "en", post_id, en_title, en_description, en_img_name)
        seoId = save_seo(curser, post_id, keywords, parsed_date)
        save_seo_translation(curser, seoId, "en", en_excerpt)
        print("English Saved.")

    if hasHindiContent:
        save_post_translation(curser, "hi", post_id, hi_title, hi_description, hi_img_name)
        save_seo_translation(curser, seoId, "hi", hi_excerpt)
        print("Hindi Saved.")

    sync_category_and_post(curser,post_id, sub_category_id)
    connector.commit()


def seedNcert():
    en_archive_url = "https://www.dhyeyaias.com/NCERT-Books"
    en_soup = getSoup(en_archive_url)
    en_posts_uls  = en_soup.select(".field-items ul")

    for en in en_posts_uls:
        en_cat_title = en.find_previous_sibling("h2").string
        sub_category_id = save_category(curser,primary_category_id,en_cat_title,2)
        save_category_translation(curser, sub_category_id, en_cat_title, "en")
        connector.commit()

        posts_urls = fetchAllPostUrls(en,"ul a")
        a_tags = getElement(en,{"selectorType":"css_selector","value":"ul a"} )

        url_list = [x.replace("https://www.dhyeyaias.com", "") for x in posts_urls]
        titles = [x.text for x in a_tags]


        for url, title in zip(url_list,titles):
            saveNcert(sub_category_id,url, title,**samplePaylode)

if __name__=="__main__":
    seedNcert()
