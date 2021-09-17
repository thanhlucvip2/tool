import os,sys,json,requests
from time import sleep
token_tds = "TDSQfiATMyVmdlNnI6IiclZXZzJCLiAXa2NWdshmbhhGdiojIyV2c1Jye"
info_tds=requests.get('https://traodoisub.com/api/?fields=profile&access_token='+token_tds).json()

if "success" in info_tds:
  user=info_tds['data']['user']
  xu=int(info_tds['data']['xu'])
  print("đăng nhập thànhc công")
else:
  print('\033[1;31mToken Không Hợp Lệ')
  exit()
token_facebook = "EAAAAZAw4FxQIBANr9wfZCldRrZB1ieFfbNZBxN54ZBYgIdpaIdzY8tvuLinuamlvkRUq8JZCU10IDrPcfGdGo2Wn87FLLsDrPb7XrgWpOjQ3PCYQBHgYkbz4bJETZBpZBZAX8b4GRwEurtNC8qdZB75K4cDFE6osldLHQHiPc1APLiqkC6JsmL7UNs"
check_fb=requests.get('https://graph.facebook.com/me/?access_token='+token_facebook).json()
if "id" in check_fb:
  idfb=check_fb['id']
  namefb=check_fb['name']
  đặt_nick = requests.get('https://traodoisub.com/api/?fields=run&id='+str(idfb)+'&access_token='+token_tds).json()
  if "success" in đặt_nick:
    print ('\033[1;32m Đang Chạy Facebook: '+namefb)
    sleep(1)
  else:
    print ('\033[1;31m Cấu Hình Thất Bại Facebook: '+namefb)
else:
  print('\033[1;31m Token Die or Văng Acc')
os.system('clear')
print ('\033[1;32m Tên Tài Khoản: \033[1;33m'+user)
print ('\033[1;32m Số Xu Hiện Tại: \033[1;33m'+str(xu))
print ('\033[1;32m Facebook : \033[1;33m'+namefb)
print ('\033[1;32m ID Facebook: \033[1;33m'+str(idfb))
get_like=requests.get('https://traodoisub.com/api/?fields=follow&access_token='+token_tds).json()
# for get in get_like:
#     id_like = get['id']
#     print(id_like)

while (True):
  get_like=requests.get('https://traodoisub.com/api/?fields=follow&access_token='+token_tds).json()
  for get in get_like:
    id_like = get['id']
    lam_nv=requests.post('https://graph.facebook.com/'+str(id_like)+'/subscribers?access_token='+token_facebook)
    done_like=requests.get('https://traodoisub.com/api/coin/?type=FOLLOW&id='+str(id_like)+'&access_token='+token_tds).json()
    print (done_like)
    print("ngừng 5 giây")
    sleep(5)
