import requests
import mysql.connector
import time
from datetime import datetime
from bs4 import BeautifulSoup
import conn
from conn import connector
from conn import curser

page = 0

page_count_to_print = 0
post_count_to_print = 0


def save_test_series(page):
    table = page.find(class_="views-table")
    global post_sn_number
    global post_count_to_print
    global page_count_to_print
    if(table == None):
        print("skipping Page NO: "+str(page_count_to_print))
        return
    page_count_to_print += 1
    post_sn_number = -1
    for i in table.findAll("tr")[1:]:
        try:
            post_count_to_print += 1
            print("Page: ", page_count_to_print,
                " Total Post: ", post_count_to_print, end="\r")
            post_sn_number += 1
            url = i.a["href"]
            post_url = "https://dhyeyaias.com"+url
            post_Data = requests.get(post_url)

            post_soup = BeautifulSoup(post_Data.text, 'html.parser')
            post_title = post_soup.find(id="page-title").text.replace('Info-paedia : ','')
            post_description = post_soup.select("div.field-item")[0]

            post_slug = url.split("/")[-1]
            string_date = page.select(
                ".views-table tr .viewdate")[post_sn_number].text.strip()
            parsed_date = datetime.strptime(string_date, "%d %b %Y")
            keywords = post_soup.find("meta", {"name": "keywords"})["content"]
            excerpt = post_soup.find("meta", {"name": "description"})["content"]

            img_url = post_soup.select("figure.field-item")[0].find("img")["src"]
            img_name = img_url.split("/")[-1]

            with open(conn.filesave_path+img_name, "wb") as saveimg:
                saveimg.write(requests.get(img_url).content)
                saveimg.closed
        except:
            print("Could not save Page: ", page_count_to_print,
                " Post: ", post_count_to_print, end="\n")
            print()
            continue

        # POST TABLE
        post_sql = "insert into posts (post_type,status,user_id, slug, created_at,updated_at) values(%s,%s,%s,%s,%s,%s)"
        post_val = ["child-of-Info-paedia", "active",
                    "1", post_slug, parsed_date, parsed_date]
        curser.execute(post_sql, post_val)

        post_id = curser.lastrowid

        # POST TRANSLATION TABLE
        post_en_sql = "insert into post_translations (post_id,locale,title,image,description) values(%s,%s,%s,%s,%s)"
        post_en_val = [post_id, "en", post_title,
                       img_name, str(post_description)]
        curser.execute(post_en_sql, post_en_val)

        # SEO TABLE
        seo_sql = "insert into seofields (objectable_type,objectable_id,keywords, created_at,updated_at) values(%s,%s,%s,%s,%s)"
        seo = ["App\Models\Post", post_id, keywords, parsed_date, parsed_date]
        curser.execute(seo_sql, seo)

        seo_id = curser.lastrowid

        # SEO TRANSLATION TABLE
        seo_en_sql = "insert into seofield_translations (seofield_id,locale, excerpt,created_at,updated_at) values(%s,%s,%s,%s,%s)"
        seo_en_val = [seo_id, "en", excerpt, parsed_date, parsed_date]
        curser.execute(seo_en_sql, seo_en_val)

        connector.commit()


def seed_test_series(number_of_pages="ALL"):
    print("Test Series")
    currentPage = 'https://www.dhyeyaias.com/test-series'
    test_count = 0
    response = requests.get(currentPage)
    page = BeautifulSoup(response.text, 'html.parser')

    heads = page.find(class_="field-item").findAll("h1")
    for i in heads:
        print(i.)

    # # iterating throgh Test Series
    while (page.find(class_="pager-next")):
        page = BeautifulSoup(response.text, 'html.parser')
        test_count += 1
        response = requests.get(currentPage)
        save_test_series(page)
        if (str(test_count) == str(number_of_pages)):
            break

    print("Info Peadia Seeding completed: Total Pages => ",
          page_count_to_print, "Total Post => ", post_count_to_print)
seed_test_series()
