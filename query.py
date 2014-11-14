import urllib
import json
import csv

link = "https://api.angel.co/1/search?query=ucla&type=User"
f = urllib.urlopen(link)
fil = f.read() # contain JSON 
j = json.loads(fil)
writer = csv.writer(file('data.csv','wb'))
for x in j:
	writer.writerow([x['id'],x['pic'],x['url'],x['name'],x['type']])