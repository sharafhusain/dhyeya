# import time
# import threading
from datetime import datetime
# def func(tName):
#     for i in range(10):
#         time.sleep(3)
#         print(tName," hello")


# t1 = threading.Thread(target=func, args=("Thread 1",))
# t2 = threading.Thread(target=func, args=("Thread 2",))
# t1.start()
# t2.start()
# t1.join()
# t2.join()
# import sys


# def progress(count, total, suffix=''):
#     bar_len = 30
#     filled_len = int(round(bar_len * count / float(total)))

#     percents = round(100.0 * count / float(total), 1)
#     bar = '=' * filled_len + '-' * (bar_len - filled_len)

#     sys.stdout.write('[%s] %s%s ...%s\r' % (bar, percents, '%', suffix))
#     # sys.stdout.flush()  # As suggested by Rom Ruben

# import time
# for i in range(100):
#     time.sleep(0.5)
#     progress(i,100,"loading "+str(i))

# print("https://dhyeyaias.com/current-affairs/daily-pre-pare".replace("https://dhyeyaias.com/", "https://dhyeyaias.com/hindi/"))



print(datetime.strptime("28-June-2023", "%d-%B-%Y"))