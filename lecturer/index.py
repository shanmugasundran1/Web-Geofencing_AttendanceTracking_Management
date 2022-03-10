import mysql.connector
from scipy import stats
import sys

receiveVal = (sys.argv[1])
dataVal = (sys.argv[1])

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="attendanceum"
)

mycursor = mydb.cursor()
sql = "SELECT week, attendance_count FROM analysis_data WHERE course_id = %s AND attendance_count != %s"
valNew = (receiveVal, '0')
mycursor.execute(sql,valNew)
myresult = mycursor.fetchall()

x = []
y = []

for i in myresult:
  x.append(i[0])
  y.append(i[1])

print(x)
print(y)

slope, intercept, r, p, std_err = stats.linregress(x, y)

def myfunc(x):
  return slope * x + intercept

newcursor = mydb.cursor()

for k in range(len(x)+1,15):
    speed = myfunc(k)
    test = int(speed)
    print(test)
    sql = "UPDATE analysis_data SET attendance_count = %s WHERE course_id = %s AND week = %s"
    val = (test,dataVal,k)
    newcursor.execute(sql,val)
    mydb.commit()

    