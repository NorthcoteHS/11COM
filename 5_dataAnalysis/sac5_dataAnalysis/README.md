# SAC 5 Tips and Tricks

Here are a few techniques you may find very useful for SAC 5!

## Converting CSV text into a 2d array

CSV data generally represents tables of information - multiple rows and columns.
This data is called "2-dimensional" - there is more than one value vertically, multiplied by more than one value horizontally.
We could refer to any single "cell" in the table using its row and column number, e.g. Row 5 Column 3.

When you first read a CSV file in JavaScript, it is just a long string of text, with commas and newlines.
To work with the data as intended (pulling out rows and columns), we need to convert it to a "2d array".

Here's how that works:

```js
// Assuming we have read a text file into the variable 'str', and that it looks something like:
// 'This,Is,A,CSV\n1,2,3,4\n5,6,7,8\n'

// STEP 1: Split the string into rows by finding each newline '\n'.
var data = str.split('\n');

// Now data looks like:
// ['This,Is,A,CSV', '1,2,3,4', '5,6,7,8']

// STEP 2: Loop through each row, and split it into an array of columns.
for (var i=0; i<data.length; i++) {
    data[i] = data[i].split(',');
}

// Now data looks like:
// [['This', 'Is', 'A', 'CSV'], ['1', '2', '3', '4'], ['5', '6', '7', '8']]

// We can now access each value in the array, do calculations, etc.
// For instance, this will alert 'CSV' (1st row, 4th column):
alert(data[0][3]);
```

## Calculations on 2d arrays

Once you have data in a 2d array, you may want to do some calculations.
Remember, you can access any cell you want using its row and column number.
For instance, `data[4][1]` gets the 5th row, 2nd column (note: we always count starting at 0 with arrays!).

One common pattern is to get the average of an entire column:

```js
// Assume that we have a variable called data, it is a 2d array,
// and its first row is a "header row" (with titles for each column).
// Also assume we want to take the average of column 2.

// To add up all the column values, we create a "sum" variable and start it at 0.
var sum = 0;

// Loop through each row (Note we start at i=1 to skip the header row).
for (var i=1; i<data.length; i++) {
    // Add the value of this row's column 2 to the sum.
    sum += data[i][1];
}

// Calculate the average by dividing the sum by # of rows.
var average = sum / data.length;
```

If you wanted to only add *certain* rows (e.g. filtering based on another column), it would look like:

```js
// Assume again we have a 2d array called data, we want the average of column 2,
// but only for rows where column 1 matches the name "Jeff".

// Again we initialise sum, but also n, to keep track of the number of matches.
var sum = 0;
var n = 0;

for (var i=1; i<data.length; i++) {
    if (data[i][0] == 'Jeff') {
        // Increase the sum and n.
        sum += data[i][1];
        n++;
    }
}

// Calculate average using n (not data.length).
var average = sum / n;
```

## Displaying data in HTML

To display text directly on a webpage, the best practice is to:

1. Create a "target" element, generally a `<div>`, where you will insert the text.
2. In JavaScript, create an empty string (e.g. `str = '';`).
3. In JavaScript, keep adding to the string until it has the entire message you want to display.
4. Use `document.getElementById()` to put your text inside the HTML element.

For example:

```html
<!DOCTYPE html>
<html>
  <body>
    <h1>Welcome! The text below is made by JS.</h1>
    <div id="target"></div>

    <script>
      // Build the HTML string.
      var str = '';
      str += 'Some text to display.';
      str += 'More text - this will appear on the same line.';
      str += 'You can add any HTML you want, e.g. <br>Line breaks (to display on a new line).';
      str += '<p>Or format things more correctly using paragraphs!</p>';
      str += '<p>Again, any HTML you want. An example image: <img src="https://bit.ly/2qnNUEo"></p>';

      // Display the string on the webpage.
      document.getElementById('target').innerHTML = str;
    </script>
  </body>
</html>
```
