import requests
from bs4 import BeautifulSoup
from datetime import datetime
from utils.conn import filesave_path


def getMeta(soup, metaName):
        keywords = soup.find("meta", {"name": metaName})

        if keywords:
                return keywords.text
        else:
                return None

    
def getElement(soup, selectorType_and_value={}):
        selectorType = selectorType_and_value["selectorType"]
        value = selectorType_and_value["value"]

        if selectorType == "element_id":
                element = soup.find(id=value)
        elif selectorType == "element_class":
                element = soup.find(class_=value)
        elif selectorType == "css_selector":
                element = soup.select(value)
        else:
                raise ValueError("Please provide key [css_selector ,element_id or element_class].")
        if element:
                return element
        else:
                return None  

def getDate(archiveSoup, indexNo,data):
        string_date = getElement(archiveSoup,data)
        string_date = string_date[indexNo].text.strip()
        parsed_date = datetime.strptime(string_date, "%d %b %Y")
        return parsed_date

def getSlug(url):
     img_name = url.split("/")[-1] if url else None
     return img_name

def getImageUrl(post_description_soup):
    img_tag = post_description_soup.find("img")
    img_url = img_tag["src"] if img_tag else None
    post_description_soup.find("img").decompose()
    return img_url

def saveImage(url):
    img_name = getSlug(url)
    with open(filesave_path+img_name, "wb") as saveimg:
        saveimg.write(requests.get(url).content)
        saveimg.closed

def saveFeaturedImage(curser, url):
    img_name = getSlug(url)
    content_sql = "insert into downloadable_content (url, save_path) values(%s,%s)"
    content_val = [url, "/storage/media/"]
    curser.execute(content_sql, content_val)

def saveDownloadableContent(curser, url):
    content_sql = "insert into downloadable_content (url, save_path) values(%s,%s)"
    content_val = [url, "/storage/media/"]
    curser.execute(content_sql, content_val)
        
def hasContent(soup, dictionary):
       return soup != None and (getElement(soup,dictionary) != None)