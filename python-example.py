# The excellent 'requests' library is used in this example, but pycurl could easily be substituted.
# You could also just use plain old urllib2, but it's just more annoying that way.
# To get 'requests', head on over to http://python-requests.org or just run `pip install requests`

import requests 

filename = 'filename.txt'
username = 'test15'
password = 'test15'
file_id = '12345'

r = requests.get('http://localhost:8000/api/files/', auth=(username, password)) # Grab all of the user's files
# print r.content

r = requests.get('http://localhost:8000/api/files/19810/', auth=(username, password)) # Grab one specific file
# print r.content
