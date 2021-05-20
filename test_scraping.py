import pandas as pd
import requests
from bs4 import BeautifulSoup as bs
from time import sleep

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
    brewery_list = []
    
    for brewery in breweries:
        rr = requests.get(f"https://www.beeradvocate.com{brewery}")
        soup_2 = bs(rr.content, "html.parser")
        new_list = soup_2.select("tbody tr a")
        non_link_list = soup_2.select("tbody tr td")
        brewery_name = soup_2.find("h1").get_text()
        print(brewery_name)
        
        for beer_type in range(0,len(new_list),2):
            brewery_list.append(f"{brewery_name}")
            tap_list.append(f"{new_list[beer_type].get_text()}")
            type_list.append(f"{new_list[beer_type+1].get_text()}")
        
        for beer in range(0,len(non_link_list), 6 ):
            abv_entry = non_link_list[beer+2].get_text()
            if ',' in abv_entry:
                abv_entry = abv_entry.replace(',','')
            abv_entry = float(abv_entry)
            
            
            ratings_count_entry = non_link_list[beer+3].get_text()
            if ',' in ratings_count_entry:
                ratings_count_entry = ratings_count_entry.replace(',','')
            ratings_count_entry = int(ratings_count_entry)
            
            
            avg_rating_entry = non_link_list[beer+4].get_text()
            if ',' in avg_rating_entry:
                avg_rating_entry = avg_rating_entry.replace(',','')
            avg_rating_entry = float(avg_rating_entry)
            
            
            abv_list.append(f"{abv_entry}")
            ratings_count_list.append(f"{ratings_count_entry}")
            avg_rating_list.append(f"{avg_rating_entry}")
        

        #trying to do the archived lists
        rr = requests.get(f"https://www.beeradvocate.com{brewery}?view=beers&show=arc")
        soup_2 = bs(rr.content, "html.parser")
        new_list = soup_2.select("tbody tr a")
        non_link_list = soup_2.select("tbody tr td")

        for beer_type in range(0,len(new_list),2):
            brewery_list.append(f"{brewery_name}")
            tap_list.append(f"{new_list[beer_type].get_text()}")
            type_list.append(f"{new_list[beer_type+1].get_text()}")
        
        for beer in range(0,len(non_link_list), 6 ):
            abv_entry = non_link_list[beer+2].get_text()
            if ',' in abv_entry:
                abv_entry = abv_entry.replace(',','')
            abv_entry = float(abv_entry)
            
            
            ratings_count_entry = non_link_list[beer+3].get_text()
            if ',' in ratings_count_entry:
                ratings_count_entry = ratings_count_entry.replace(',','')
            ratings_count_entry = int(ratings_count_entry)
            
            
            avg_rating_entry = non_link_list[beer+4].get_text()
            if ',' in avg_rating_entry:
                avg_rating_entry = avg_rating_entry.replace(',','')
            avg_rating_entry = float(avg_rating_entry)
            
            
            abv_list.append(f"{abv_entry}")
            ratings_count_list.append(f"{ratings_count_entry}")
            avg_rating_list.append(f"{avg_rating_entry}")
        print(len(tap_list))
        sleep(0.2)
    return [brewery_list, tap_list,type_list, abv_list, ratings_count_list, avg_rating_list]

beers_and_types = beer_lists(brewery_urls[0:10])

print(len(beers_and_types[0]))
print(len(beers_and_types[1]))
print(len(beers_and_types[2]))
print(len(beers_and_types[3]))
print(len(beers_and_types[4]))
print(len(beers_and_types[5]))
