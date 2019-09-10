# fileIO

Now that we know about `.txt` and `.csv` files, let's learn to read and write them in JavaScript!

## Writing text

Browsers are designed for security - which means they have very little access to files on your computer.
We will not be able to "automatically" read/write files.
However, you have probably been on a website that "prompts" you to download a file - which is what we'll learn to do.

Rather than coding everything ourselves, we will use an open-source library named `FileSaver.js`.
This project is available on [GitHub](https://github.com/eligrey/FileSaver.js/) and [NPM](https://www.npmjs.com/package/file-saver/v/1.3.2), where it has over 500k downloads/week.
To use it in our programs we must:

1. [Download FileSaver.js](https://github.com/eligrey/FileSaver.js/raw/master/dist/FileSaver.js).
2. Put the file in the same directory as our program.
3. In our HTML, before our own `<script>` we must include `FileSaver.js` (`./` means to look in the current directory):

    ```html
    <!DOCTYPE html>
    <html>
      <body>
        ... Some HTML ...

        <script src="./FileSaver.js"></script>
        <script>
          // Your code here.
        </script>
      </body>
    </html>
    ```

### Using FileSaver

Once you have included `FileSaver.js`, your code gains access to a new function: `saveAs()`.
This function is a bit like `alert()` - you give it information and it outputs (except to a file)!

Unfortunately, since `saveAs()` can save lots of different types of data, there's one extra step we must take.
`saveAs()` requires its input to be a `Blob`: this is a special JavaScript format for storing file-based information.
Here's an example:

```js
var blob = new Blob(['Testing...'], {type: "text/plain;charset=utf-8"});
saveAs(blob, 'test.txt');
```

Notice that `saveAs()` takes two arguments: the Blob and the filename you want to create.

**Special trick:** In your code, put this function inside your `<script>` and you'll never have to worry about Blobs again (just call `saveText()` instead of `saveAs()`):

```js
function saveText(text, filename) {
    var blob = new Blob([text], {type: "text/plain;charset=utf-8"});
    saveAs(blob, 'test.txt');
}
```

Then you can use `saveText()` like so:

```js
saveText('This is a message', 'file.txt');
```

#### Recap

That's all for saving files!
To recap:

1. Include `FileSaver.js` as a script.
2. In your own `<script>`, copy and paste `saveText()` from above.
3. Create a string to output, e.g. `var str = 'This is a test.';`
4. Send the string and a filename to `saveText()`, e.g. `saveText(str, 'test.txt');`
    - If you want to write a CSV, just make sure to use a `.csv` file extension!

### Newlines

If you want your text to take up multiple lines, you need to include newlines in the string.
You may have noticed this isn't easy to do:

```js
// This won't work!
var str = 'This is
a
test';
```

The key is to use "escape characters".
There are certain characters we can't easily put in strings (like newlines, quotes, tabs, etc).
Each of these has a special "escape character", starting with a backslash:

- `\n`: Newline
- `\r`: Carriage return (On Windows, newlines need to be `\r\n` - don't ask why!)
- `\t`: Tab
- `\"`: Quotation mark (in case you're already using double-quotes to create the string)
- `\\`: Backslash (it needs both or it gets confused!)

So to create that same string above:

```js
var str = 'This is\na\ntest';
// Or on Windows:
var str = 'This is\r\na\r\ntest';
```

## Reading text

Reading text has its own set of complications.
First, we need a way for the user to "give" us a file.
There is an HTML element for that: `<input type="file">`.
This shows up as a button which says "Choose File (there's no easy way to change its appearance).

It's useful to give this element an `id` and an `onchange` handler, which will let us access the file:

<img width="200px" src="fileInput.png" align="right">

```html
<input id="inputfile" type="file" onchange="readFile()">
```

### Accessing the file (JavaScript)

Now in our JavaScript, we can set up a function to read the data when a file is chosen:

```js
function readFile() {
    // Get reference to the file input box.
    var inputfile = document.getElementById('inputfile');

    // Check that a file was selected.
    if (inputfile.files && inputfile.files[0]) {
        // Start the file reader and tell it to run "receiveData" when finished.
        var reader = new FileReader();
        reader.onload = function () { receiveData(reader.result); };
        reader.readAsText(inputfile.files[0]);
    }
}
function receiveData(text) {
    // The file's contents are all stored in text.
    // You can now use them as you like, for instance:
    alert(text);
}
```

There's some complicated code there, but **here's the trick:**
Just copy and paste both functions into your `<script>` block, and program whatever you want to do with the text inside of `receiveData()`!
If you like you can rename the functions (just remember to rename them everywhere, including on the HTML `<input>` element).

## Working with CSV

Remember CSV?
It has a number of values, separated by commas.
It would be useful to know how to work with those!

### Converting to CSV (from array)

The main thing to use here is `.join()`.
This lets you convert an array into a string, with whatever character you want (i.e. `,`) in between:

```js
var myArray = [1, 2, 5, 11, 13];
var csvString = myArray.join(',');
// csvString is now: '1,2,5,11,13'
```

You can then send that string to `saveText()` and make a file!

### Converting from CSV (to array)

If you have a CSV string and want to get the data back out, use `.split()`:

```js
var csvString = '1,2,5,11,13';
var myArray = csvString.split(',');
// myArray is now: ['1', '2', '5', '11', '13'] (notice that they're still strings!)
```

As mentioned, note that the result will still be a string - so if you're doing any math, remember to `parseFloat()` them first!

## Advanced usage

For an example of more advanced usage of file input/output, take a look at `index.html` in this directory.

In particular, this file saves data as a "JSON" format, and is able to restore the data into the exact same state.
This could be useful for game save files, etc.

## Exercises

Make a **new folder** for this lesson named `fileIO`, and make the following HTML files:

1. `helloFile.html`: Writes *only* the message `Hello, World!` to a text file named `helloFile.txt`.
2. `helloMessage.html`: Lets the user type any message (using an `<input>` or `prompt()`) and saves it to a text file named `helloMessage.txt`.
3. `readMessage.html`: Reads any message from a text file and displays it (using `alert()` or `.innerHTML`).
4. `csvOut.html`: Lets the user enter multiple values (using multiple `<input>`s or `prompt()`s) and saves the result as a CSV file.
5. `rowAverage.html`: Reads a CSV file, splits it into an array, computes the average, and displays it (using `alert()` or `.innerHTML`). Remember to use `parseFloat()`!
6. `multiAverage.html`: Challenge! Read a multi-line CSV, and compute and display the average for each row (multiple displays)!
7. `columnAverage.html`: Extra challenge! Read a multi-line CSV **with header**, and compute the average of the second column (make sure it's numeric). For an even better program, allow the user to specify which column to average!

When finished, submit all components to MyNH.
