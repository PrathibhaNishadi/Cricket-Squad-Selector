import scrapy
 
class ODIBowling(scrapy.Spider):
    name = "ODIBowling"

    def start_requests(self):       #pass the url that the table we need belongs to
        urls = [
            'http://stats.espncricinfo.com/sl/engine/records/averages/bowling.html?class=2;current=2;id=8;type=team',
        ]
        for url in urls:
            yield scrapy.Request(url=url, callback=self.parse)
 
    def parse(self, response):
        for row in response.xpath('//*[@class="engineTable"]//tbody/tr'): #getting data from espn stat records ODI bowling line by line
            
            yield {
                'Player Name' : row.xpath('td[1]//text()').extract_first(),
                'Year Span' : row.xpath('td[2]//text()').extract_first(),
                'Matches': row.xpath('td[3]//text()').extract_first(),
                'Innings' : row.xpath('td[4]//text()').extract_first(),
                'Overs' : row.xpath('td[5]//text()').extract_first(),
                'Maidens' : row.xpath('td[6]//text()').extract_first(),     #resuest the text values in the table data cells
                'Runs' : row.xpath('td[7]//text()').extract_first(),
                'Wickets' : row.xpath('td[8]//text()').extract_first(),
                'BBI' : row.xpath('td[9]//text()').extract_first(),
                'BBM' : row.xpath('td[10]//text()').extract_first(),
                'Average' : row.xpath('td[11]//text()').extract_first(),
                'Econ' : row.xpath('td[12]//text()').extract_first(),
                'Stike Rate' : row.xpath('td[13]//text()').extract_first(),
                'Five Wickets' : row.xpath('td[14]//text()').extract_first(),
                'Ten Wickets' : row.xpath('td[15]//text()').extract_first(),
                'Ct' : row.xpath('td[16]//text()').extract_first(),
                'St' : row.xpath('td[17]//text()').extract_first(),
            }