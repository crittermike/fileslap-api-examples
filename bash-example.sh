# upload filename.txt to joeuser's Fileslap account
curl -u joeuser:pass123 -F "file=@filename.txt" http://fileslap.com/api/files/

# grab info for all of the joeuser's files
curl -u joeuser:pass123 http://fileslap.com/api/files/

# grab info for one specific file belonging to joeuser (the one with the ID of 12345)
curl -u joeuser:pass123 http://fileslap.com/api/files/12345/

# delete one specific file belonging to joeuser (the one with the ID of 5678)
curl -u joeuser:pass123 http://fileslap.com/api/files/5678/
