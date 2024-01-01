class Paginate:
    def __init__(self, baseUrl, pageNumber=0, ascending=True, maxPage=500):

        self.baseUrl = baseUrl
        self.ascending = ascending
        self.pageNumber = pageNumber
        self.pageCount = 0
        self.maxPage = maxPage
        self.status = "Active"

    def naxtPage(self):
        if self.maxPage == self.pageCount:
            self.status = "Inactive"
        if self.pageNumber == 0 and self.ascending == True:
            self.pageNumber += 1
            self.pageCount += 1
            return self.baseUrl

        if self.ascending == True:
            nextUrl = self.baseUrl+"?page=" + str(self.pageNumber)
            self.pageCount += 1
            self.pageNumber += 1
            return nextUrl
        
        elif self.ascending == False and self.pageNumber > 0:
            nextUrl = self.baseUrl+"?page=" + str(self.pageNumber)
            self.pageCount += 1
            self.pageNumber -= 1
            return nextUrl

        if self.pageNumber == 0 and self.ascending == False and self.status == "Active":
            self.status = "Inactive"
            return self.baseUrl
        
    def hasPage(self):
         return self.status == "Active"


if __name__ == "__main__":
    url = Paginate(
        "https://www.dhyeyaias.com/current-affairs/daily-current-affairs", 10, True)
    for i in range(30):
        if url.hasPage():
            print(url.naxtPage())
