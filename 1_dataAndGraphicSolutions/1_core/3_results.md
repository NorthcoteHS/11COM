# Data and Graphic Solutions

## Core 3: Results

Congratulations, you have a survey and have begun collecting results!
Now we need to start analysing.

### Getting the data

First step is getting the raw data from Google Forms:

- Go to the "Edit" area of your survey page
- Export the data (Responses tab -> ... -> Download responses (.csv))
- Unzip:
  - Mac: Double-click on the file
  - Windows: Right click -> Extract all
  - Both: Delete the original .zip when done
- Move the file to your project folder (you should have some folder like `11COM\SAC1\`)
- Rename it so it's clear what it is (include "raw" in the name)

| To submit |
|---|
| 1. Raw data (.csv) |

### Testing your hypothesis

Look at your data.
Then look at your hypothesis.
Now back to your data.

There are some steps you'll have to take to understand your data, before you can answer your hypothesis.
Fortunately Google Forms does some of that work for us -
if you're lucky, some (or most, or all) of your answers might have easy-to-understand visualisations already.
Even so, you need to know how to get meaning from your raw data.

There are a few common techniques we use to "manipulate" data:

- formulas
- frequency tables
- filtering/grouping
- validation
- multiple spreadsheets (tabs)

Which ones you use will depend on your data and what you want to find out.
Some examples:

##### Formulas

If you asked "Rate on a scale from 1 to 5...", you may want to find out the average response and the variability by using formulas like:

  ```
  =AVERAGE(D2:D15)
  =STDEVA(D2:D15)
  ```

##### Frequency tables

If you had a multiple choice question, you might want to find out how common each answer is using a frequency table.
You could do this manually by creating a new table (e.g. in a new tab) with each option listed, and record the frequency
(number of responses) for each:

> | Favourite colour | Frequency | % Frequency |
> |---|---|---|
> | Green | 15 | 68% |
> | Purple | 2 | 9% |
> | Orange | 5 | 23% |

##### Filtering/grouping

If you suspect one value might depend on another, you may want to filter your results based on the first category
(e.g. filter by gender) and create smaller tables based on those groups.

You might end up with one table for boys, one table for girls, and one for other.
Then you could do your analyses (formulas, frequency tables, etc.) on each separate group and compare.

##### Correlations

Another way to test if one value depends on another is a correlation.
You're welcome to look up instructions on how to calculate a correlation between two sets of data.
An easy way to start is often by visualising with a scatterplot.

##### Validation

You may notice that some of your data seems invalid, for instance unusually low or high ages.
It's often necessary to clean up our data and remove suspicious values - this is part of "validation".

It's your choice whether to remove a participant entirely, or just exclude the pieces of data from them that are suspicious.
You may be able to include their other data, and only exclude them from analyses that use the variables affected.

#### Your job

Your job is to manipulate your data, using at least one of the methods above, until you are satisfied that you have answered your hypothesis.
Also write a *brief* description of one of your manipulations.

Then, write an answer to your hypothesis - were you right or wrong?
How do you know?
Is there anything that makes the answer still unclear?

| To submit |
|---|
| 2. Manipulated data (submit as .xlsx, even if using a different program!) |
| 3. Brief description of one manipulation |
| 4. Was your hypothesis correct? (Yes/No/Hard to say) |
| 5. Analysis - how do you know it was correct or not? (Convince me) |

### Planning your infographic

Core 4 will be about creating your infographic.
Before we get there, I want you to think briefly about what you'll want on it.
Are there any tables, graphs, images, or anything else you'll want to display?

Summarise those components briefly - e.g.:

> On my infographic, I will want a pie chart showing overall colour preference,
> separate pie charts showing gender diferences,
> a bar chart showing people's ratings of different colours, and a picture of the most popular colour.
> I'll also have text describing the results.

Make sure you have done **all** manipulations necessary so that you can create those visualisations.
Then you're done!

**Note:** You may get more survey results over the next few days.
Make sure to check back before starting Core 4 to update with any new data.

| To submit |
|---|
| 6. Summary of planned graphics |
| 7. Have you done all necessary manipulations? (Yes/no) |
