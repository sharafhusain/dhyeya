import requests
import time
from datetime import datetime
from bs4 import BeautifulSoup
import sys
import conn
from conn import connector
from conn import curser



category_list = """<div>
    <h3>Exams Conducted By UPSC - IAS, IPS, IFoS, CAPF, CDS, NDA, SCRA, IES</h3>
    <h3><a href="https://www.dhyeyaias.com/exams/upsc-pre">UPSC IAS (Pre.) Exam</a></h3>
    <h3><a href="https://www.dhyeyaias.com/exams/upsc-mains">UPSC IAS (Mains) Exam</a></h3>
    <h3><a href="https://www.dhyeyaias.com/exams/upsc-interview">UPSC IAS (Interview) Exam</a></h3>

    <h3>Exams Conducted by State PCS</h3>
    <h3><a href="https://www.dhyeyaias.com/uppsc">Uttar Pradesh Public Service Commission (UPPSC)</a></h3>
    <h3><a href="https://www.dhyeyaias.com/BPSC">Bihar Public Service Commission (BPSC)</a></h3>
    <h3><a href="https://www.dhyeyaias.com/JPSC">Jharkhand Public Service Commision</a></h3>
    <h3><a href="https://www.dhyeyaias.com/MPPSC">Madhya Pradesh Public Service Commission (MPPSC)</a></h3>
    <h3><a href="https://www.dhyeyaias.com/CGPSC">Chhattisgarh Public Service Commission (CGPSC)</a></h3>
    <h3><a href="https://www.dhyeyaias.com/RPSC">Rajasthan Public Service Commission (RPSC)</a></h3>
</div>"""


soup = BeautifulSoup(category_list, 'html.parser')
# return parent id
# completed


def save_parent_category(title):

    category_query = "INSERT INTO categories (category_type, `level`, category_slug) VALUES(%s,%s,%s);"
    category_val = ["exam", 1, title]
    curser.execute(category_query, category_val)

    parent_category_id = curser.lastrowid

    # translation
    category_trans_query = "insert into category_translations (category_id,locale,category_name) values(%s,%s,%s)"
    category_trans_val = [parent_category_id, "en", title]
    curser.execute(category_trans_query, category_trans_val)

    connector.commit()

    return parent_category_id

# return sub category id
# completed


def save_sub_category(parent_id, title, page_url):
    response = requests.get(page_url)
    category_page = BeautifulSoup(response.content, "html.parser")
    category_description = category_page.find(id="page-title").text
    category_slug = page_url.split("/")[-1]

    img_url = category_page.select(".field-item img")[0]["src"]
    img_name = img_url.split("/")[-1]

    with open(conn.filesave_path+img_name, "wb") as saveimg:
        saveimg.write(requests.get(img_url).content)
        saveimg.closed

    category_query = "INSERT INTO categories (category_id,category_type,level,category_slug) VALUES(%s,%s,%s,%s);"
    category_val = [parent_id, "exam", 2, category_slug]
    curser.execute(category_query, category_val)

    sub_category_id = curser.lastrowid

    # translation
    category_trans_query = "insert into category_translations (category_id, locale, category_name, description, image) values(%s,%s,%s,%s,%s)"
    category_trans_val = [sub_category_id, "en",
                          title, category_description, img_name]
    curser.execute(category_trans_query, category_trans_val)

    post_links = category_page.select(".field-item > ul li a")
    # post_links = category_page.select(".field-item ul:first-of-type")[0]#.select(".field-item ul:first-of-type li a")
    # post_links = category_page.select(".field-item > ul")#.select(".field-item ul:first-of-type li a")
    # print(post_links)
    # print()
    # print()
    # return

    post_count = 0
    print("Saveing Post")
    for i in post_links:
        post_count += 1
        save_post_(sub_category_id, i["href"])
        print("Post Saved: ", post_count, end="\r")
    print("Saved Post= ", post_count)

    connector.commit()

    return sub_category_id


def save_post_(sub_category_id, post_page_url):

    post_Data = requests.get(post_page_url)

    post_soup = BeautifulSoup(post_Data.text, 'html.parser')
    post_title = post_soup.find(id="page-title")
    post_description = post_soup.find(class_="field-item")
    if (bool(post_description) == False):
        return
    if (post_title):
        post_title = post_title.text
    else:
        return

    if (sys.getsizeof(post_title) > 190):
        post_title = post_title[0:(len(post_title)//2)]+"..."

    # print(post_description)
    # break

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

        # img_removed = post_description.find("img").decompose()

        # to save file from the filename
        with open(conn.filesave_path+img_name, "wb") as saveimg:
            saveimg.write(requests.get(img_url).content)
            saveimg.closed

    # POST TABLE
    post_sql = "insert into posts (post_type,status,user_id, slug, created_at,updated_at) values(%s,%s,%s,%s,%s,%s)"
    post_val = ["exam", "active",
                "1", post_slug, parsed_date, parsed_date]
    curser.execute(post_sql, post_val)

    post_id = curser.lastrowid

    # Category Pivot Table
    category_pivot_sql = "INSERT INTO category_post (post_id, category_id) VALUES(%s,%s);"
    category_pivot_val = [post_id, sub_category_id]
    curser.execute(category_pivot_sql, category_pivot_val)

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

def seed_exam_module():
    cats = soup.find_all("h3")
    sub_cat_id = 0
    parent_category_id = 0

    for cat in cats:
        if (cat.find("a")):
            # Sub Categories and Posts Creation
            sub_cat_id = save_sub_category(
                parent_category_id, cat.text, cat.a["href"])
            pass
        else:
            pass
            # Parent Category Section
            parent_category_id = save_parent_category(cat.text)

        print(parent_category_id, "-->", sub_cat_id)


if __name__=="__main__":
    seed_exam_module()
