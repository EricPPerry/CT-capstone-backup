import requests
import pandas as pd
from bs4 import BeautifulSoup as bs
from time import sleep

URL = 'https://www.beeradvocate.com/'
LOGIN_ROUTE = '/community/login/login'


r = requests.session()
#token = r.get(URL).cookies
#print(token)

HEADERS = {'User-Agent':'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'origin':URL, 'referer':URL+LOGIN_ROUTE, 'cookie':'xf_session=f2ffc3a38139b851061e04f92740a6d2'}

login_payload = {
  'login': 'ericpaperry^%^40gmail.com',
  'register': '0',
  'password': 'lolzors',
  'cookie_check': '1',
  '_xfToken': '',
  'redirect': 'https^%^3A^%^2F^%^2Fwww.beeradvocate.com^%^2Fplace^%^2Flist^%^2F^%^3Fstart^%^3D0^%^26c_id^%^3DUS^%^26brewery^%^3DY^%^26sort^%^3Dname'
}

login_req = r.post(URL + LOGIN_ROUTE, headers=HEADERS, data=login_payload)
print(login_req)





'''
#To get the name/url for each brewery
r = requests.get("https://www.beeradvocate.com/articles/18442/top-50-most-rated-breweries-on-beeradvocate-for-2020/")
soup = bs(r.content, "html.parser")

beer_list = soup.select("ol li")
beer_count = 0
brewery_urls = []
for beer in beer_list:
    #print(beer.get_text().split(',')[0])
    link = beer.find("a")
    brewery_urls.append(link['href'])
'''


cookies = login_req.cookies

track_counter = 0
print('starting...')
while track_counter < 120:
    #r = requests.get(f"https://www.beeradvocate.com/place/list/?start={track_counter}&c_id=US&brewery=Y&sort=name")
    #soup = bs(r.content, "html.parser")

    soup = bs(r.get(f"https://www.beeradvocate.com/place/list/?start={track_counter}&c_id=US&brewery=Y&sort=name").text, 'html.parser')

    #brewery_list = soup.find_all("div", attrs={"class":"mainContent"})
    #brewery_list = soup.select("div#content div div div div div div tbody")

    brewery_table = soup.select("table")

    print(soup)

    #for brewery in brewery_table[3:42:2]:
        #name = brewery.select("a").get_text()
        #print(name)

    track_counter += 120





'''

def beer_lists(breweries):
    tap_list = []
    type_list = []
    abv_list = []
    ratings_count_list = []
    avg_rating_list = []

    for brewery in breweries:
        rr = requests.get(f"https://www.beeradvocate.com{brewery}")
        soup_2 = bs(rr.content, "html.parser")
        new_list = soup_2.select("tbody tr a")
        non_link_list = soup_2.select("tbody tr td")
        print(non_link_list)
        for beer_type in range(0,len(new_list),2):
            tap_list.append(f"{new_list[beer_type].get_text()}")
            type_list.append(f"{new_list[beer_type+1].get_text()}")

        for beer in range(0,19, 6 ):
            print(beer)
            abv_list.append(f"{non_link_list[beer+2].get_text()}")
            ratings_count_list.append(f"{non_link_list[beer+3].get_text()}")
            avg_rating_list.append(f"{non_link_list[beer+4].get_text()}")


        print(abv_list)
        print(ratings_count_list)
        print(avg_rating_list)
    return [tap_list,type_list]


beers_and_types = beer_lists(brewery_urls[0:1])
print(len(beers_and_types[0]))
print(len(beers_and_types[1]))
'''
#To get the brewery links from listing of all breweries https://www.beeradvocate.com/place/list/?start=0&c_id=US&brewery=Y&sort=name
