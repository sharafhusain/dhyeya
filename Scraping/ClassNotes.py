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

# getting the parent post id from the database
curser.execute("select * from categories where `category_slug` = 'Class-Notes';")
primary_category_id = curser.fetchall()[0][0]

def saveClassNotes(sub_category_id, post_page_url, page_title):

    post_soup = getSoup(post_page_url)
    post_description = post_soup.find(class_="field-item")

    # if (sys.getsizeof(post_title) > 190):
    #     post_title = post_title[0:(len(post_title)//2)]+"..."

    post_slug = getSlug(post_page_url)
    parsed_date = datetime.now()
    keywords = getMeta(post_soup, "keywords")
    excerpt = getMeta(post_soup, "twitter:description")

    if (post_description.find("img")):
        img_url = getImageUrl(post_soup)
        img_name = getSlug(img_url)
        saveImage(img_url)

    download_link = soup_string_finder(post_soup,"Click Here to Download","a")["href"]
    download_file_name = getSlug(download_link)
    save_attachment(download_file_name, download_link)

    if(soup_string_finder(post_soup,"Click Here to Download")):
        delete_element_contains_string(post_soup,"Click Here to Download","a",True)

    if(soup_string_finder(post_soup,"हिंदी माध्यम में एनसीईआरटी किताबें")):
        delete_element_contains_string(post_soup,"हिंदी माध्यम में एनसीईआरटी किताबें","a",True)


    if(soup_string_finder(post_soup,"Back to Main Page")):
        delete_element_contains_string(post_soup,"Back to Main Page","a")


    post_id = save_post(curser, "download", post_slug, parsed_date)
    save_post_translation(curser, "en", post_id, page_title, post_description, img_name)
    seoId = save_seo(curser, post_id, keywords, parsed_date)
    save_seo_translation(curser, seoId, "en", excerpt)


    save_post_attachment(curser,post_id,download_file_name,post_id)
    sync_category_and_post(curser,post_id, sub_category_id)
    connector.commit()
    print("Saved.")


def seed_class_notes():
    page_url = "https://www.dhyeyaias.com/Class-Notes"
    soup = getSoup(page_url)
    uls  = soup.select(".field-items ul")
    for ul in uls:
        sub_category_title = ul.find_previous_sibling("h2").string
        # (curser, parent_id, category_slug, level,category_type="download"
        sub_category_id = save_category(curser,primary_category_id,sub_category_title,2)
        save_category_translation(curser, sub_category_id, sub_category_title, "en")
        connector.commit()
        print(sub_category_title)
        for link in ul.find_all("a"):
            page_title = link.get_text()
            saveClassNotes(sub_category_id,link["href"], page_title)

if __name__=="__main__":
    seed_class_notes()