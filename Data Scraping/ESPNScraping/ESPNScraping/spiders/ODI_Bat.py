import scrapy
 
class ODIBatting(scrapy.Spider):
    name = "ODIBatting"
 
    def start_requests(self):       #pass the url that the table we need belongs to
        urls = [
            'http://stats.espncricinfo.com/sl/engine/records/averages/batting.html?class=2;current=2;id=8;type=team',
        ]
        for url in urls:
            yield scrapy.Request(url=url, callback=self.parse)
 
    def parse(self, response):
        for row in response.xpath('//*[@class="engineTable"]//tbody/tr'):       #getting data from espn stat records ODI bowling line by line
            
            yield {
                'Player Name' : row.xpath('td[1]//text()').extract_first(),
                'Year Span' : row.xpath('td[2]//text()').extract_first(),
                'No of Matches' : row.xpath('td[3]//text()').extract_first(),
                'Innings': row.xpath('td[4]//text()').extract_first(),
                'NO' : row.xpath('td[5]//text()').extract_first(),          #resuest the text values in the table data cells
                'Runs' : row.xpath('td[6]//text()').extract_first(),
                'Highest Score' : row.xpath('td[7]//text()').extract_first(),
                'Average' : row.xpath('td[8]//text()').extract_first(),
                'BF' : row.xpath('td[9]//text()').extract_first(),
                'Strike Rate' : row.xpath('td[10]//text()').extract_first(),
                'Hundreds' : row.xpath('td[11]//text()').extract_first(),
                'Fifties' : row.xpath('td[12]//text()').extract_first(),
                'Zeros' : row.xpath('td[13]//text()').extract_first(),
                'Fours' : row.xpath('td[14]//text()').extract_first(),
                'Sixes' : row.xpath('td[15]//text()').extract_first(),
            }