
from bs4 import BeautifulSoup
import requests

def main():
    url = requests.get("https://oldschool.runescape.wiki/w/Dagannoth_(Lighthouse)")
    soup = BeautifulSoup(url.text, 'html.parser')
    
    headers = soup.find_all("h3")
    for heading in headers:
        if "Seeds" in heading.text:
            drop_container_parent = heading
            seeds_table = drop_container_parent.findNext("dl").find("table")
    
    seeds = seeds_table.find_all("tr")
    for i, seed in enumerate(seeds):
        print(seed.text)

if __name__ == "__main__":
    main()