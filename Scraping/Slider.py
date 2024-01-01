import requests
from datetime import datetime
from utils.conn import *
from utils.Paginate import *
from utils.Counter import *
from utils.HelperFunctions import *
from utils.downloadableContent import *
from utils.ORM_for_BS import *
import time



def seedSlider():
    soup = getSoup('https://www.dhyeyaias.com/')
    imgs = soup.select("#slider img")

    for img in imgs:
        new_name = img["src"].split("/")[-1]

        save_attachment(new_name,img["src"])

        slider_sql = "insert into sliders (created_at) values(%s)"
        slider_val = [datetime.fromtimestamp(time.time())]
        curser.execute(slider_sql, slider_val)

        slider_id = curser.lastrowid

        slider_hi_sql = "insert into slider_translations (slider_id, locale, image) values(%s,%s,%s)"
        slider_hi_val = [slider_id, "hi", new_name]
        curser.execute(slider_hi_sql, slider_hi_val)

        slider_en_sql = "insert into slider_translations (slider_id, locale, image) values(%s,%s,%s)"
        slider_en_val = [slider_id, "en", new_name]
        curser.execute(slider_en_sql, slider_en_val)

        connector.commit()

if __name__=="__main__":
    seedSlider()
