import mysql.connector

# host="localhost"
# user="dhyeyaias"
# password="Wntechs@2023"
# database="dhyeyaias"
auth_plugin="mysql_native_password"
filesave_path = "../public/storage/media/"



host = "localhost"
user = "root"
password = "123456"
database = "dhyeya_beta_exported"
# filesave_path = "public/storage/media/"

connector = mysql.connector.connect(
    host = host,
    user = user,
    password = password,
    database = database,
    auth_plugin = auth_plugin
)

curser = connector.cursor()
