from datetime import datetime
from utils.conn import *
from utils.HelperFunctions import *
from utils.downloadableContent import *
from utils.ORM_for_BS import *
import time

def seedGalary():
    content = """<html>
   <head>
   </head>
   <body class="" style="">
      <div id="albumizrTag">
         <div class="inner"></div>
      </div>
      <div id="thumbContainer" class="scroller" style="overflow: hidden; padding: 0px; margin-left: 596.5px; width: 1903px;">
         <div class="jspContainer" style="width: 1903px; height: 62px;">
            <div class="jspPane" style="padding: 0px; top: 0px; left: 0px; width: 1903px;">
               <div data-url="//albumizr.com/ia/f6c505b4bea10dcaddf2171619408b36.jpg" class="th" style="overflow: hidden; display: inline-block; width: 37px; height: 50px;"><img src="//albumizr.com/ia/f6c505b4bea10dcaddf2171619408b36.jpg" style=""></div>
               <div data-url="//albumizr.com/ia/f842a67a487aeef9d9b85646c4623da2.jpg" class="th selected" style="overflow: hidden; display: inline-block; width: 66px; height: 50px;"><img src="//albumizr.com/ia/f842a67a487aeef9d9b85646c4623da2.jpg" style=""></div>
               <div data-url="//albumizr.com/ia/e4051f7f101d392da5f124e9230a7ce4.jpg" class="th" style="overflow: hidden; display: inline-block; width: 80px; height: 45px;"><img src="//albumizr.com/ia/e4051f7f101d392da5f124e9230a7ce4.jpg" style=""></div>
               <div data-url="//albumizr.com/ia/e1b724956a41fcab8498fb302c0e69c3.jpg" class="th" style="overflow: hidden; display: inline-block; width: 80px; height: 45px;"><img src="//albumizr.com/ia/e1b724956a41fcab8498fb302c0e69c3.jpg" style=""></div>
               <div data-url="//albumizr.com/ia/dd77e547b4597ef5cf5b83e8ad410de2.jpg" class="th" style="overflow: hidden; display: inline-block; width: 80px; height: 45px;"><img src="//albumizr.com/ia/dd77e547b4597ef5cf5b83e8ad410de2.jpg" style=""></div>
               <div data-url="//albumizr.com/ia/8100eb4932f0537a0ace43a87c72ddc0.jpg" class="th" style="overflow: hidden; display: inline-block; width: 80px; height: 45px;"><img src="//albumizr.com/ia/8100eb4932f0537a0ace43a87c72ddc0.jpg" style=""></div>
               <div data-url="//albumizr.com/ia/c9400ea0ed2fa8e5f484806f8ed0d10b.jpg" class="th" style="overflow: hidden; display: inline-block; width: 80px; height: 45px;"><img src="//albumizr.com/ia/c9400ea0ed2fa8e5f484806f8ed0d10b.jpg" style=""></div>
               <div data-url="//albumizr.com/ia/ff459780c86469a89fef73d990f3920f.jpg" class="th" style="overflow: hidden; display: inline-block; width: 80px; height: 45px;"><img src="//albumizr.com/ia/ff459780c86469a89fef73d990f3920f.jpg" style=""></div>
               <div data-url="//albumizr.com/ia/b599dcaf15254aceb63abbe826c8a8cf.jpg" class="th" style="overflow: hidden; display: inline-block; width: 80px; height: 45px;"><img src="//albumizr.com/ia/b599dcaf15254aceb63abbe826c8a8cf.jpg" style=""></div>
            </div>
         </div>
      </div>
   </body>
</html>"""
    soup = BeautifulSoup(content, 'html.parser')
    imgs = soup.select(".th")

    for index,img in enumerate(imgs):
        url = "https://"+img["data-url"][2:]
        img_slug = url.split("/")[-1]
        save_attachment(img_slug,url)
        gallery_sql = "insert into galleries (image,created_at) values(%s,%s)"
        gallery_val = [img_slug,datetime.fromtimestamp(time.time())]
        curser.execute(gallery_sql, gallery_val)
        connector.commit()
        print("Img:"+str(index)+"/"+str(len(imgs)))


if __name__=="__main__":
    seedGalary()
