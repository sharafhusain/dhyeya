import requests
from datetime import datetime
from utils.conn import *
from utils.Paginate import *
from utils.Counter import *
from utils.HelperFunctions import *
from utils.downloadableContent import *
from utils.ORM_for_BS import *
import re

# getting the parent post id from the database
curser.execute("select * from posts where `post_type` = 'daily-pre-pare';")
post_id = curser.fetchall()[0][0]

counter = Counter("Daily Prepare")
pagination = Paginate("https://dhyeyaias.com/current-affairs/daily-pre-pare",5, False)
attachmentSavingPath = "/storage/media/"

def saveAttachment(en_url, hi_url=None):
        print(getSlug(en_url), getSlug(hi_url))
        en_slug = getSlug(en_url)
        saveSingleDownloadableContent(curser,attachmentSavingPath,en_url)
        string_date = re.search("\d+-[a-zA-Z]*-\d+", en_slug)
        parsed_date = datetime.strptime(string_date.group(), "%d-%B-%Y")

        post_attachments_id = save_post_attachment(curser,  post_id, en_slug,parsed_date, type="pdf")
        save_post_attachment_translation(curser, "en", post_attachments_id, en_slug)

        if hi_url:
            hi_slug = getSlug(hi_url)
            saveSingleDownloadableContent(curser,attachmentSavingPath,hi_url)
            save_post_attachment_translation(curser, "hi", post_attachments_id, hi_slug)

        connector.commit()

def seed():
    while (pagination.hasPage()):
        enPageUrl = pagination.naxtPage() 
        hiPageUrl = enPageUrl.replace("https://dhyeyaias.com/", "https://dhyeyaias.com/hindi/")
        en_page = getSoup(enPageUrl)
        hi_page = getSoup(hiPageUrl)
        en_attachmentsUrls = fetchAllPostUrls(en_page) 
        hi_attachmentsUrls = fetchAllPostUrls(hi_page) 
        for en_attachment in en_attachmentsUrls:
            en_date = re.search("\d+-[a-zA-Z]*-\d+", en_attachment).group()
            found = False
            for hi_attachment in hi_attachmentsUrls:
                hi_date = re.search("\d+-[a-zA-Z]*-\d+", hi_attachment).group()
                if en_date == hi_date:
                    saveAttachment(en_attachment, hi_attachment)
                    found = True
                    break
            if not found:
                 saveAttachment(en_attachment)

if __name__=="__main__":
    seed()