import requests
import time
from datetime import datetime
from bs4 import BeautifulSoup
import conn
import re
from conn import connector
from conn import curser


page_count_to_print = 0
post_count_to_print = 0
page = 0

# getting the parent post id from the database
curser.execute("select * from posts where `post_type` = 'air-debate';")
post_id = curser.fetchall()[0][0]
# curser.execute("select * from posts where `post_type` = 'air-debate';")
# post_id = 1


def save_air_debate(page):
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
            print("Page: ", page_count_to_print," Total Post: ", post_count_to_print, end="\r")

            post_sn_number += 1
            url = i.a["href"]
            post_url = "https://dhyeyaias.com"+url
            post_Data = requests.get(post_url)

            post_soup = BeautifulSoup(post_Data.text, 'html.parser')


            post_title = post_soup.find(id="page-title").text.replace('“','').replace('”','').replace("(AIR Debate) Topic:","")

            matching = re.search('\d{2} [A-Za-z]+ \d{4}', post_title)
            if(matching != None):
                post_title = post_title.replace(matching.group(), "")

            string_date = page.select(
                ".views-table tr .viewdate")[post_sn_number].text.strip()
            parsed_date = datetime.strptime(string_date, "%d %b %Y")

            post_meta_key = post_soup.select(
                ".field-item ul li:nth-child(1)")[0].text
            post_meta_val = post_soup.select(
                ".field-item ul li:nth-child(2)")[0].text
            # audio_url = post_soup.find("source")["src"]
            audio_url = post_soup.find("audio")["src"]
            audio_name = audio_url.split("/")[-1]
            attachment_slug = url.split("/")[-1]
        except Exception as e:
            print("Could not save Page: ", page_count_to_print,
                " Post: ", post_count_to_print,e, end="\n")
            print()
            continue

        # Post_Attachment
        attachment_sql = "insert into post_attachments (type, post_id,created_at,updated_at,slug) values(%s,%s,%s,%s,%s)"
        attachment_val = ["mp3", post_id, parsed_date, parsed_date, attachment_slug]
        curser.execute(attachment_sql, attachment_val)

        attachment_id = curser.lastrowid

        # to save file from the filename
        with open(conn.filesave_path+audio_name, "wb") as saving_audio:
            saving_audio.write(requests.get(audio_url).content)
            saving_audio.close

        # Post_Attachment_Translation
        attachment_en_sql = "insert into post_attachment_translations (post_attachment_id,filename, title,locale) values(%s,%s,%s,%s)"
        attachment_en_val = [attachment_id,audio_name, post_title, "en"]
        curser.execute(attachment_en_sql, attachment_en_val)

        # Post_Attachment_Meta
        attachment_meta_sql = "insert into post_attachment_ms (post_attachment_id) values(%s)"
        attachment_meta_val = [attachment_id]
        curser.execute(attachment_meta_sql, attachment_meta_val)

        attachment_meta_id = curser.lastrowid

        # Post_Attachment_Meta_Translation
        attachment_meta_trans_sql = "insert into post_attachment_m_translations (`post_attachment_m_id`,`locale`,`key`,`val`) values(%s,%s,%s,%s)"
        attachment_meta_trans_val = [
            attachment_meta_id, "en", post_meta_key.replace("Topic of Discussion:", ""), post_meta_val.replace("Expert Panel:", "")]
        curser.execute(attachment_meta_trans_sql, attachment_meta_trans_val)

        connector.commit()
        # print("Created------>")

def seed_air_debate():
    print("Air Debate")
    currentPage = 'https://www.dhyeyaias.com/current-affairs/AIR-Debate'  # ?page=1
    pageCount = 0
    response = requests.get(currentPage)
    page = BeautifulSoup(response.text, 'html.parser')

    # iterating throgh pages
    while (page.find(class_="pager-next")):
        page = BeautifulSoup(response.text, 'html.parser')
        pageCount += 1
        currentPage = "https://www.dhyeyaias.com/current-affairs/AIR-Debate?page=" + \
            str(pageCount)
        response = requests.get(currentPage)
        save_air_debate(page)
    print("Air Debate Seeding completed: Total Pages => ",
          page_count_to_print, "Total Post => ", post_count_to_print)


if __name__ == "__main__":
    seed_air_debate()
