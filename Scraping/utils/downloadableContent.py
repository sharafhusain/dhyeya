import requests
from utils.ORM_for_BS import *

def saveDownloadableContent(curser, path, urls=[]):
    for url in urls[1:]:
        saveSingleDownloadableContent(curser,path,url)

def saveSingleDownloadableContent(curser, path, url):
    content_sql = "insert into downloadable_content (url, save_path) values(%s,%s)"
    content_val = [url, path]
    curser.execute(content_sql, content_val)

def setTagAttribute(tags=[], attribute="src", path=None):
    for tag in tags:
        slug = getSlug(tag[attribute])
        tag[attribute] = path+slug

def setDownloadableContent(curser,soup, path, tag="img"):
    tags = soup.select(tag)
    urls = [i["src"] for i in tags]
    saveDownloadableContent(curser, path,urls)
    setTagAttribute(tags,path=path)

