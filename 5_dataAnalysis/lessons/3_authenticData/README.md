# authenticData

**Note:** This lesson is incomplete!

Now our goal is to access *real* data from the Internet and analyse it.
Your job is to find some authentic data and begin looking for patterns.

## Secondary data

In Unit 1 Outcome 1 (Data and Graphic Solutions), the focus was on you collecting your own data to analyse.
This was called primary data - information that you collected for that specific purpose.

Here, our focus is now on secondary data - gathering data from existing sources.
As soon as we rely on outside sources, it is important to ensure the data is authentic.

### Authentic sources

The most reliable sources of authentic data are generally from government departments:

- Australian [Bureau of Meteorology (BOM)](http://www.bom.gov.au/climate/data/)
- [Australian Bureau of Statistics](https://www.abs.gov.au/)
- [Data Vic](https://data.vic.gov.au/)
- [Data.gov.au](https://data.gov.au/)

## Exercises

Make a **new folder** for this lesson named `authenticData`, and:

1. Visit the [Bureau of Meteorology](http://www.bom.gov.au/climate/data/) and:

    - Retrieve all **daily rainfall** data for the Preston Reservoir (Station #086096).
    - On the page that displays the results for 2019, click the "All years of data" link in the top right.
    - This should give you a zip file resembling `IDCJAC0009_086096_1800.zip`.
    - Extract the zip file: you will find a CSV inside, resembling `IDCJAC0009_086096_1800_Data.csv`.
    - Use your previous HTML/JS programs to read the CSV and compute the average of Column 6, Rainfall amount (millimetres).
    - Open the CSV in Excel - notice that you computed the average of a lot of data (over 40k days)!
    - Also notice that the first 7 months of 1910 have no data - try **changing** your HTML/JS programs to account for empty cells, and recalculate the average.
        - (Empty cells should not be added to the total or count toward the # of entries to divide by)
    - Submit the original average, updated average, and updated code to MyNH.

When finished, submit all components to MyNH.
