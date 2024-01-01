import requests
from utils.conn import connector
from utils.conn import curser
from datetime import datetime
from bs4 import BeautifulSoup
from utils.HelperFunctions import *
from utils.ORM_for_BS import *

curser.execute("select * from posts where `post_type` = 'book_section';")
parent_post_id = curser.fetchall()[0][0]

def seedBooks():
    urlList = [
         ["https://dhyeyaias.com/sites/default/files/books/BIOLOGY.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/JEEV-VIGYAN.jpg","UPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/Contemporary-world.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/SAMKALEEN-VISHVA.jpg","UPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/Disaster-Managment-1.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/AAPDA-PARBANDHAN.jpg","UPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/ECOLOGY-AND-ENVIRONMENT.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/PARYAVARAN-AUR-PARISTITHI.jpg","UPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/Economy-and-Social-Geography-Of-India-and-World.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/BHARAT-AUR-VISHWA-KA-ARTHIK-EVAM-SAMAJIK-BHUGOL.jpg","UPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/ETHICS-INTEGRITY-AND-APTITUDE.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/Nitishastra,-Satyanishtha-Evam-Abhivriti.jpg","UPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/Governance.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/SHASAN.jpg","UPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/History-of-Ancient-India.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/PRACHEEN-BHARAT-KA-ITIHAS.jpg","UPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/INDIA-AND-WORLD.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/Bharat-Aur-Vishwa.jpg","UPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/Internal-Security.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/AANTRIK-SURKSHA.jpg","UPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/PHYSICAL-GEOGRAPHY-OF-INDIA-AND-WORLD.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/Bhaarat-Aur-Vishv-Ka-Bhautik-Bhoogol.jpg","UPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/PHYSICS-AND-CHEMISTRY.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/BHUTIK-EVAM-RASYEN-VIGYAN.jpg","UPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/Science-and-Technology-Advance.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/VIGYAN-AUR-PRODHOGIKI-BHAG-2.jpg","UPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/Science-and-Technology-Fundamentals.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/VIGYAN-AUR-PRODHOGIKI-BHAG-1.jpg","UPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/History-of-Medieval-India.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/MADHYAKALEEN-BHARAT-KA-ITIHAAS.jpg","UPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/History-of-Modern-India.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/AADHUNIK-BHARAT-KA-ITIHAS.jpg","UPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/INDIA-AFTER-INDEPENDENCE.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/SWATANTRA-KE-PACHCHAT-BHARAT.jpg","UPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/Indian-Art-and-Culture.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/Bhartiya-Kala-Evam-Sanskriti.jpg","UPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/INDIAN-ECONOMY.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/BHARTIYA-ARTHVYAVASTHA.jpg","UPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/INDIAN-POLITY-AND-CONSTITUTION.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/Bnartiya-Rajvyavastha.jpg","UPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/Indian-Society-and-Social-issues.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/Bhartiya-Samaaj-aur-samajik-muddey.jpg","UPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/SOCIAL-JUSTICE.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/SAMAJIK-NIYAY.jpg","UPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/World-History.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/VISHVA-KA-ITIHAS.jpg","UPSC"],
        #  /* ---------------------------------------------------------- */
         ["https://dhyeyaias.com/sites/default/files/books/UPPCS-UTTAR-PRADESH-COMPREHENSIVE-BOOK-FOR-PRELIMINARY-EXAM.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/UPPSC-Samagr-Avlokan.jpg","UP-PCS"],
         ["https://dhyeyaias.com/sites/default/files/books/UP-CIVIL-SERVICES-BOOK-2023-PAPER-5.jpg","https://dhyeyaias.com/sites/default/files/books/UP-CIVIL-SERVICES-BOOK-2023-PAPER-5.jpg","UP-PCS"],
         ["https://dhyeyaias.com/sites/default/files/books/UPPSC-Paper-6.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/UPPCS-Mains-Paper-VI.jpg","UP-PCS"],
         ["https://dhyeyaias.com/hindi/sites/default/files/books/UPPCS-Kala-aur-Sanskrati.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/UPPCS-Kala-aur-Sanskrati.jpg","UP-PCS"],
         ["https://dhyeyaias.com/hindi/sites/default/files/books/UPPCS-Mains-Paper-V.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/UPPCS-Mains-Paper-V.jpg","UP-PCS"],
         ["https://dhyeyaias.com/hindi/sites/default/files/books/UPPSC-Indian-Polity-Hindi.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/UPPSC-Indian-Polity-Hindi.jpg","UP-PCS"],
         ["https://dhyeyaias.com/hindi/sites/default/files/books/UPPSC-Jeev-Vigiyan.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/UPPSC-Jeev-Vigiyan.jpg","UP-PCS"],
         ["https://dhyeyaias.com/hindi/sites/default/files/books/UPPSC-Physical-Geography-World-India-and-Uttar-Pradesh-Hindi.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/UPPSC-Physical-Geography-World-India-and-Uttar-Pradesh-Hindi.jpg","UP-PCS"],
         ["https://dhyeyaias.com/hindi/sites/default/files/books/UPPSC-Social-and-Economic-Geography-World-India-and-Uttar-Pradesh-Hindi.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/UPPSC-Social-and-Economic-Geography-World-India-and-Uttar-Pradesh-Hindi.jpg","UP-PCS"],
        #   ----------------------------------------------------------- 
         ["https://dhyeyaias.com/sites/default/files/books/BPSC-ECONOMY-AND-GEOGRAPHY-%E2%80%8BCOVERING-MAINS-SYLLABUS-THROUGH-QUESTION-ANSWER-FORMAT.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/BPSC-ARTHAVYAVASTHA-AUR-BHOOGOL.jpg","BPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/BPSC-Essay.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/BPSC-Nibandhon-mein-Dakshata-Ek-Saragarbhit-Sandarshika.jpg","BPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/BPSC-MODERN-INDIAN-HISTORY-AND-ART-AND-CULTURE.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/BPSC-Adhunik-Bharat.jpg","BPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/BPSC-ECONOMY-AND-GEOGRAPHY-%E2%80%8BCOVERING-MAINS-SYLLABUS-THROUGH-QUESTION-ANSWER-FORMAT.jpg","https://dhyeyaias.com/sites/default/files/books/BPSC-ECONOMY-AND-GEOGRAPHY-%E2%80%8BCOVERING-MAINS-SYLLABUS-THROUGH-QUESTION-ANSWER-FORMAT.jpg","BPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/BPSC-International-Relations.jpg","https://dhyeyaias.com/sites/default/files/books/BPSC-International-Relations.jpg","BPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/BPSC-INTERNATIONAL-RELATIONSHIP-AND-CONTEMPORARY-AFFAIRS.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/BPSC-ANTARRAASHTREEY-SAMBANDH-AUR-SAMASAAMAYIK-GHATANAAKRAM.jpg","BPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/BPSC-MODERN-INDIAN-HISTORY-AND-ART-AND-CULTURE-PAPER-1.jpg","https://dhyeyaias.com/sites/default/files/books/BPSC-MODERN-INDIAN-HISTORY-AND-ART-AND-CULTURE-PAPER-1.jpg","BPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/BPSC-POLITY-AND-CONSTITUTION-%E2%80%8BCOVERING-MAINS-SYLLABUS-THROUGH-QUESTION-ANSWER-FORMAT.jpg","https://dhyeyaias.com/sites/default/files/books/BPSC-POLITY-AND-CONSTITUTION-%E2%80%8BCOVERING-MAINS-SYLLABUS-THROUGH-QUESTION-ANSWER-FORMAT.jpg","BPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/BPSC-POLITY-AND-CONSTITUTION.jpg","https://dhyeyaias.com/sites/default/files/books/BPSC-POLITY-AND-CONSTITUTION.jpg","BPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/BPSC-SCIENCE-AND-TECHNOLOGY-%E2%80%8BCOVERING-MAINS-SYLLABUS-THROUGH-QUESTION-ANSWER-FORMAT.jpg","https://dhyeyaias.com/sites/default/files/books/BPSC-SCIENCE-AND-TECHNOLOGY-%E2%80%8BCOVERING-MAINS-SYLLABUS-THROUGH-QUESTION-ANSWER-FORMAT.jpg","BPSC"],
         ["https://dhyeyaias.com/sites/default/files/books/BPSC-SCIENCE-AND-TECHNOLOGY.jpg","https://dhyeyaias.com/sites/default/files/books/BPSC-SCIENCE-AND-TECHNOLOGY.jpg","BPSC"],
         ["https://dhyeyaias.com/hindi/sites/default/files/books/BPSC-VIGYAAN-EVAM-PRAUDYOGIKEE.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/BPSC-VIGYAAN-EVAM-PRAUDYOGIKEE.jpg","BPSC"],
         ["https://dhyeyaias.com/hindi/sites/default/files/books/BPSC-General-Studies-Mains-Special-Hindi.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/BPSC-General-Studies-Mains-Special-Hindi.jpg","BPSC"],
         ["https://dhyeyaias.com/hindi/sites/default/files/books/BPSC-BIHAAR-SAMAGR-AVALOKAN.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/BPSC-BIHAAR-SAMAGR-AVALOKAN.jpg","BPSC"],
         ["https://dhyeyaias.com/hindi/sites/default/files/books/BPSC-BHARATIYA-SAMVIDHAN-EVAM-RAJVYAVASTHA.jpg","https://dhyeyaias.com/hindi/sites/default/files/books/BPSC-BHARATIYA-SAMVIDHAN-EVAM-RAJVYAVASTHA.jpg","BPSC"],
    ]
    count = 1
    for data in urlList:
        en_slug = getSlug(data[0])
        hi_slug = getSlug(data[1])
        title = data[2]
        parsed_date = datetime.now()
        post_attachments_id = save_post_attachment(curser,  parent_post_id, en_slug,parsed_date, type="pdf")
        save_post_attachment_translation(curser, "en", post_attachments_id, en_slug,title)
        save_attachment(en_slug,data[0])
        save_post_attachment_translation(curser, "hi", post_attachments_id, hi_slug,title)
        save_attachment(hi_slug,data[1])
        connector.commit()
        print('saved:47/'+str(count), end="\r")
        count += 1

if __name__=="__main__":
    seedBooks()