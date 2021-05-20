import requests
import pandas as pd
from bs4 import BeautifulSoup as bs
from time import sleep
'''
#TO FIND BEER TYPE, SHOULD BE SIMILAR FOR FINDING NAME/RATING/REVIEWS
r = requests.get("https://www.beeradvocate.com/beer/profile/23222/183727/")

soup = bs(r.content, "html.parser")


beer_name = soup.select("dl.beerstats")[0].select("dd a b")[0].get_text()
print(beer_name)
'''
'''
#To get the values of each beer in the list for each brewery
r = requests.get("https://www.beeradvocate.com/beer/profile/28743/")
soup = bs(r.content, "html.parser")

beer_list = soup.select("tbody tr")
beer_count = 0

for beer in beer_list:
    beer_count += 1

print(beer_count)
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
        '''
        for beer in range(0,len(non_link_list), 6 ):
            abv_list.append(f"{non_link_list[beer+2]}")
            ratings_count_list.append(f"{non_link_list[beer+3]}")
            avg_rating_list.append(f"{non_link_list[beer+3]}")
        '''
        for beer in range(0,19, 6 ):
            print(beer)
            abv_list.append(f"{non_link_list[beer+2].get_text()}")
            ratings_count_list.append(f"{non_link_list[beer+3].get_text()}")
            avg_rating_list.append(f"{non_link_list[beer+4].get_text()}")

        '''
        #This works to get all beer names
        new_list = soup_2.select("tbody tr a > b")
        for b in new_list:
            print(b.get_text())
            tap_list.append(b.get_text())
        '''
        #beer_name = new_list.select("b").get_text()
        #print(beer_name)
        #for beer in new_list:
            #beer.find()
        #for b in new_list:
        #    print(len(b))
        #sleep(0.5)
        print(abv_list)
        print(ratings_count_list)
        print(avg_rating_list)
    return [tap_list,type_list]


beers_and_types = beer_lists(brewery_urls[0:1])
print(len(beers_and_types[0]))
print(len(beers_and_types[1]))

#To get the brewery links from listing of all breweries https://www.beeradvocate.com/place/list/?start=0&c_id=US&brewery=Y&sort=name
'''
track_counter = 0
print('starting...')
while track_counter < 120:
    r = requests.get(f"https://www.beeradvocate.com/place/list/?start={track_counter}&c_id=US&brewery=Y&sort=name")
    soup = bs(r.content, "html.parser")
    brewery_list = soup.select("tbody tr td")

    for brewery in brewery_list[3:42:2]:
        name = brewery.select("a").get_text()
        print(name)
    track_counter += 20
'''