from pyclbr import Class
import requests
from conn import connector
from conn import curser
from datetime import datetime
from bs4 import BeautifulSoup
from HelperFunctions import *
import sys


# getting the parent post id from the database
# curser.execute("select * from categories where `category_slug` = 'upsc-toppers-answer-copies';")
curser.execute("select * from categories where `category_slug` = 'syllabus';")
primary_category_id = curser.fetchall()[0][0]


def save_post(sub_category_id, post_page_url, page_title):

    post_Data = requests.get(post_page_url)

    post_soup = BeautifulSoup(post_Data.text, 'html.parser')
    post_description = post_soup.find(class_="field-item")

    post_slug = post_page_url.split("/")[-1]
    parsed_date = datetime.now()
    keywords = post_soup.find("meta", {"name": "keywords"})["content"]

    if (post_soup.find("meta", {"name": "twitter:description"})):
        excerpt = post_soup.find(
            "meta", {"name": "twitter:description"})["content"]
    else:
        excerpt = post_soup.find("meta", {"name": "description"})["content"]

    img_name = "Not Available"

    if (post_description.find("img")):
        img_url = post_description.find("img")["src"]
        img_name = post_description.find("img")["src"].split("/")[-1]
        HelperClass.save_attachment(img_name,img_url)
        post_description.find("img").decompose()

    HelperClass.delete_element_contains_string(post_soup,"Click Here to Download","a",True)
    contains_pdf = False
    download_link = HelperClass.soup_string_finder(post_soup,"Download","a")
    if(download_link):
        contains_pdf = True
        pdf_link = download_link["href"]
        pdf_name = pdf_link.split("/")[-1]
        if(len(pdf_name)>190):
            pdf_name = (pdf_name[:100]+".pdf")
            print(pdf_name)
        HelperClass.save_attachment(pdf_name, pdf_link)

    try:
        HelperClass.delete_element_contains_string(post_soup,"Download","a",True)
        HelperClass.delete_element_contains_string(post_soup,"to Main Page","a")
    except:
        pass

    post_id = HelperClass.save_post_with_translation(curser,"download",post_slug,parsed_date,page_title, post_description, img_name)

    if(contains_pdf):
        HelperClass.save_post_attachment(curser,pdf_name, post_slug, post_id)
    HelperClass.save_seo(curser,post_id, keywords, excerpt,parsed_date)
    HelperClass.sync_category_and_post(curser,post_id, sub_category_id)
    print("Cat ID",sub_category_id,"Exam Syllabus Saved Title = ",page_title)
    connector.commit()

def seed_Exam_Syllabus():
    page_url = "https://www.dhyeyaias.com/download/syllabus"
    responce = requests.get(page_url)
    soup = BeautifulSoup(responce.text, "html.parser")
    uls  = soup.select(".field-items ul")
    for ul in uls:
        sub_category_title = ul.find_previous_sibling("h2").get_text()
        sub_category_id = HelperClass.save_category(curser,primary_category_id,sub_category_title,sub_category_title,2)
        connector.commit()
        for link in ul.find_all("a"):
            page_title = link.get_text()
            save_post(sub_category_id,link["href"], page_title)
            save_post(1,link["href"], page_title)


if(__name__ == "__main__"):
    seed_Exam_Syllabus()
