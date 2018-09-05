1. Searched Google for "average height by country"
	https://en.wikipedia.org/wiki/List_of_average_human_height_worldwide
	https://ourworldindata.org/human-height
	http://www.averageheight.co/
	- Wikipedia seems best, but it's not a reliable source
	- OurWorldInData: more a focus on historic data (only goes up to 1980s)
	- AverageHeight.co: looks alright, but not too authentic

2. No luck. Tried searching instead for "australia average height by year"
	http://search.abs.gov.au/s/search.html?query=height&collection=abs&form=simple&profile=_default
	https://www.smh.com.au/national/global-study-of-tallest-people-shows-australians-are-going-up-in-the-world-20160729-gqg8v4.html
	https://elifesciences.org/articles/13410/figures
	http://www.ncdrisc.org/data-downloads-height.html
	- found a few articles on ABS, but nothing useful
	- then an article on The Sydney Morning Herald, which linked a global height analysis of 200 countries
	- the article doesn't directly link its data, but has it hosted on ncdrisc.org (as a CSV)
	- eLife is a peer-reviewed journal, seems reasonably authentic (and data is sourced from various national surveys)

3. Searched "average rainfall by country"
	http://www.nationmaster.com/country-info/stats/Geography/Average-rainfall-in-depth/Mm-per-year
	https://data.worldbank.org/indicator/AG.LND.PRCP.MM
	- much easier than height - second link was WorldBank, a trustworthy source (first link didn't cite sources)
	- data can be exported as CSV, XML, or XLSX
	- the match is good, because height info is for 1996 births, and we can take rainfall from 1997 (year after birth) and 2014 (when height was measured)!

4. Raw data has been submitted to "data/1_raw/"

5. To analyse the data, I prepared it into a useable form:
	- made a new file for the prepared data by copying one of the Excel files and renaming to "height-rainfall.xlsx"
	- opened the new file and the other file I wanted to merge in (had to "Enable Editing" on both)
	- in the other file, right-clicked on the tab I wanted to copy (from the rainfall data) and chose "Move or copy" to the new book
	- closed everything except for "height-rainfall.xlsx"

6. Still working on preparing data:
	- made a new sheet for my combined data and renamed all three sheets (Combined, Rainfall, Height)
	- copied 4 columns from the Rainfall tab into Combined: countries, country codes, 1997 rainfall, and 2014 rainfall
	- selected all data in "Combined" and clicked on "Format as Table" (in the Home ribbon) - *this is **very** useful*! (lets you sort, filter, etc)
	- renamed the table to Combined, and formatted Height data as a table as well, to make things easier
	- the height data is complicated - it doesn't have all countries, it has multiple rows per country for different years, and men/women in different rows
	- one option would be to filter (using the Excel table feature) "Year of Birth" to 1996, and manually copy into Combined
	- instead, I used a bit of Excel magic (see the "Uniq" column and the VLOOKUP equations in Combined)

7. Prepared data has been submitted to "data/2_prepared/"

8. Manipulated data to look for trends:
	- filtered out any rows with "(Blanks)" or "#N/A" for rainfall or height
	- sorted data by rainfall for largest to smallest
	- if required, I could have *at this point* selected only the top 20 countries by rainfall or height
	- compared 1997 and 2014 rainfall - it's suspicious that 1997 rainfall and 2014 rainfall are exactly equal for all countries except South Sudan (and a few that had no readings)
	- calculated average height of male and female
	- found a ratio of "height per mm rain", assuming constant rainfall from 1996-2014
	- also calculated height difference between male and female, and compared to mm rain
	- copied comparisons into a separate tab, to get the Mean and Standard Deviation (to see if they are meaningful)

9. Manipulated data has been submitted to "data/3_manipulated/"

10. Created data visualisations:
	- copied 3 columns from "Combined" into a new sheet: Country, Rainfall mm (2014), and Average Height
	- selected all data and chose Insert -> Recommended Charts -> Scatter
	- edited the chart's title
	- clicked on the chart, chose "Chart Elements", enabled Axis Titles, and gave appropriate names
	- copied the chart (Ctrl+C), opened MS Paint, pasted, and saved as a .png image
	- for the second visualisation, copied the "Combined-Comparisons" tab, selected the Means, and added a "Column" chart
	- added error bars based on +/- 1 SD
	- added proper title, axis labels, scale, etc.
	- copied to MS Paint and saved

11. Visualisations have been submitted to "data/4_visualisations/"

Overall, the whole process took approx. 2 hours, including this write-up.
