import sys
class Counter:
    def __init__(self, name, page_number=0):
      self.name = name
      self.page_number = page_number
      self.post = 0

    def countPage(self) -> None:
       self.page_number += 1

    def countPost(self) -> None:
       self.post += 1

    def printCount(self) -> None:
       print(self.name, "Page:", self.page_number, " Post: ", self.post)

   #  def printCount(self, total=30) -> None:
   #    count=self.post
   #    suffix = self.name
   #    bar_len = 30
   #    filled_len = int(round(bar_len * count / float(total)))
   #    percents = round(100.0 * count / float(total), 1)
   #    bar = '=' * filled_len + '-' * (bar_len - filled_len)
   #    sys.stdout.write('[%s] %s%s ...%s\r' % (bar, percents, '%', suffix))
   #    sys.stdout.flush()  # As suggested by Rom Ruben
   #    print(self.name, "Page:", self.page_number, " Post: ", self.post)


    def errorOnPage(self):
       print("Error on ","Page:", self.page_number, " Post: ", self.post)


if __name__=="__main__":
   counter = Counter("DNA", 1)