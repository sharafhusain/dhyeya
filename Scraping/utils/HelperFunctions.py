# from utils.conn import filesave_path as path
# from conn import filesave_path as path
import requests
from bs4 import BeautifulSoup


def save_attachment(attachment_name, attachment_url):
    # to save file from the filename
    try:

        with open("../public/storage/media/"+attachment_name, "wb") as saveimg:
            saveimg.write(requests.get(attachment_url).content)
            saveimg.closed
    except:
        print("Attachment Cannot be saved!")


def save_post_translation(curser, locale, post_id, post_title, post_description, img_name):
    # POST TRANSLATION TABLE
    post_en_sql = "insert into post_translations (post_id,locale,title,image,description) values(%s,%s,%s,%s,%s)"
    post_en_val = [post_id, locale, post_title,
                   img_name, str(post_description)]
    curser.execute(post_en_sql, post_en_val)


def save_post(curser, post_type, post_slug, parsed_date):
    # POST TABLE
    post_sql = "insert into posts (post_type,status,user_id, slug, created_at,updated_at) values(%s,%s,%s,%s,%s,%s)"
    post_val = [post_type, "active", "1", post_slug, parsed_date, parsed_date]
    curser.execute(post_sql, post_val)
    post_id = curser.lastrowid
    return post_id


def save_post_attachment(curser,  post_id, file_slug,parsed_date=None, type="pdf"):

    # POST ATTACHMENT TABLE
    post_sql = "INSERT INTO post_attachments (`type`, slug, post_id,created_at,updated_at) VALUES(%s,%s,%s,%s,%s)"
    post_val = [type, file_slug, post_id,parsed_date,parsed_date]
    curser.execute(post_sql, post_val)
    post_attachments_id = curser.lastrowid
    return post_attachments_id


def save_post_attachment_translation(curser, locale, post_attachments_id, filename, title=None):
    # POST ATTACHMENT TRANSLATION TABLE
    post_en_sql = "INSERT INTO post_attachment_translations (post_attachment_id,filename, locale, title) VALUES(%s,%s,%s,%s)"
    post_en_val = [post_attachments_id, filename, locale, title if title else filename]
    curser.execute(post_en_sql, post_en_val)


def save_seo(curser, post_id, keywords, parsed_date):
    # SEO TABLE
    seo_sql = "insert into seofields (objectable_type,objectable_id,keywords, created_at,updated_at) values(%s,%s,%s,%s,%s)"
    seo = ["App\Models\Post", post_id, keywords, parsed_date, parsed_date]
    curser.execute(seo_sql, seo)
    seo_id = curser.lastrowid
    return seo_id


def save_seo_translation(curser, seo_id, locale, excerpt):
    # SEO TRANSLATION TABLE
    seo_en_sql = "insert into seofield_translations (seofield_id,locale, excerpt) values(%s,%s,%s)"
    seo_en_val = [seo_id, locale, excerpt]
    curser.execute(seo_en_sql, seo_en_val)
    return curser


def save_category(curser, parent_id, category_slug, level,category_type="download"):
    # Category TABLE
    category_query = "INSERT INTO categories (category_id,category_type,level,category_slug) VALUES(%s,%s,%s,%s);"
    category_val = [parent_id, category_type, level, category_slug]
    curser.execute(category_query, category_val)
    category_id = curser.lastrowid
    return category_id

def save_category_translation(curser, category_id, title, locale, category_description=None, img_name=None):
    # Category Translation TABLE
    category_trans_query = "insert into category_translations (category_id, locale, category_name, description, image) values(%s,%s,%s,%s,%s)"
    category_trans_val = [category_id, locale, title, category_description, img_name]
    curser.execute(category_trans_query, category_trans_val)


def sync_category_and_post(curser, post_id, category_id):
    # Category Pivot Table
    category_pivot_sql = "INSERT INTO category_post (post_id, category_id) VALUES(%s,%s);"
    category_pivot_val = [post_id, category_id]
    curser.execute(category_pivot_sql, category_pivot_val)


def soup_string_finder(soup, stringOrArrayofSting, element_type_contains_string="a", nthElement=1):
    count = 1

    for element in soup.findAll(element_type_contains_string):
        # if element is not null
        if (element.get_text()):
            # if element contains string
            if (type(stringOrArrayofSting) == str):
                if (stringOrArrayofSting in element.get_text()):
                    if (nthElement == count):
                        return element
                    count += 1

            # if passed a Array of values
            else:
                for singleString in stringOrArrayofSting:
                    if (singleString in element.get_text()):
                        if (nthElement == count):
                            return element
                        count += 1
    return None


def delete_element_contains_string(soup, string="Download", element_type_contains_string="a", with_parent_div=False):
    """This element delete soup element that contains a string"""

    element = soup_string_finder(soup, string, element_type_contains_string)

    if (element == None):
        return -1

    if (with_parent_div and element != None):
        for parent_div in element.parents:
            if (parent_div.name == "div"):
                parent_div.decompose()
                return 0

    element.decompose()
    return 0


def fetchAllPostUrls(pagesoup,selector=".views-table tr a"):
    if pagesoup==None : return []
    
    anchors = pagesoup.select(selector)
    urls = []
    for i in anchors:
        urls.append(i["href"])
    return urls


def getSoup(url):
    responce = requests.get(url)
    return BeautifulSoup(responce.text, 'html.parser') if responce.ok else None
    
# 
def getElementWithMatchingHref(soup:BeautifulSoup, expression:str="dhyeyaias.com/sites/default/files/"):
    anchors = soup.select("a")
    for anchor in anchors:
        if anchor["href"].find(expression) != -1:
            return anchor["href"]



if __name__=="__main__":
    print(getElementWithMatchingHref())
