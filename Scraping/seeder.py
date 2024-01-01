import threading
from ScraperTamplate import seed
from utils.Counter import Counter
from utils.Paginate import Paginate
from DNA2 import seed_news_analysis
from BookSection import seedBooks
from Slider import seedSlider
from Galler import seedGalary

brainBooster = {
    "counter" : Counter("Brain Booster"),
    "pagination" : Paginate("https://dhyeyaias.com/brain-booster"),
    "attachmentSavingPath" : "/storage/media/download/brain_booster",
    "title_tag" : {"selectorType":"element_id","value":"page-title"},
    "description_tag" : {"selectorType":"element_class","value":"field-item"},
    "excerpt_meta_name" : "twitter:description",
    "keywords_meta_name" : "keywords",
    "date_css_selector" : {"selectorType":"css_selector","value":".views-table tr .viewdate"} ,
    "post_type" : "child-of-brain-booster",
}

infoPedia = {
    "counter" : Counter("Info-pedia"),
    "pagination" : Paginate("https://dhyeyaias.com/current-affairs/Info-pedia"),
    "attachmentSavingPath" : "/storage/media/download/infopedia",
    "title_tag" : {"selectorType":"element_id","value":"page-title"},
    "description_tag" : {"selectorType":"element_class","value":"field-item"},
    "excerpt_meta_name" : "description",
    "keywords_meta_name" : "keywords",
    "date_css_selector" : {"selectorType":"css_selector","value":".views-table tr .viewdate"} ,
    "post_type" : "child-of-Info-paedia",
}

dailyStatic = {
    "counter" : Counter("Daily Static MCQs"),
    "pagination" : Paginate("https://www.dhyeyaias.com/daily-static-mcqs"),
    "attachmentSavingPath" : "/storage/media/download/mcq",
    "title_tag" : {"selectorType":"element_id","value":"page-title"},
    "description_tag" : {"selectorType":"element_class","value":"field-item"},
    "excerpt_meta_name" : "description",
    "keywords_meta_name" : "keywords",
    "date_css_selector" : {"selectorType":"css_selector","value":".views-table tr .viewdate"} ,
    "post_type" : "child-of-daily-static-mcqs",
}

dailymcq = {
    "counter" : Counter("Daily Current MCQs"),
    "pagination" : Paginate("https://www.dhyeyaias.com/current-affairs/daily-mcqs"),
    "attachmentSavingPath" : "/storage/media/download/mcq",
    "title_tag" : {"selectorType":"element_id","value":"page-title"},
    "description_tag" : {"selectorType":"element_class","value":"field-item"},
    "excerpt_meta_name" : "description",
    "keywords_meta_name" : "keywords",
    "date_css_selector" : {"selectorType":"css_selector","value":".views-table tr .viewdate"},
    "post_type" : "child-of-daily-mcqs",
}



# t1 = threading.Thread(target=seed, kwargs=infoPedia)
# t2 = threading.Thread(target=seed, kwargs=brainBooster)
# t3 = threading.Thread(target=seed_news_analysis)
# t4 = threading.Thread(target=seed,kwargs=dailyStatic)
# t5 = threading.Thread(target=seed,kwargs=dailymcq)
# t6 = threading.Thread(target=seedBooks)
# t7 = threading.Thread(target=seedSlider)
t8 = threading.Thread(target=seedGalary)

# t2.start()
# t1.start()
# t3.start()
# t4.start()
# t5.start()
# t6.start()
# t7.start()
t8.start()

# t2.join()
# t1.join()
# t3.join()
# t4.join()
# t5.join()
# t6.join()
# t7.join()
t8.join()

print("Completed!")
