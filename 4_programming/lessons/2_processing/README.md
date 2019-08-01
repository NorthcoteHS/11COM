# processing

To interact with a user we need input and output.
But usually, between when we're given input and when we send output, we need to make some decisions about what to do - this is called processing.

## Math operations

The most basic processing we can do are math operations like `+`, `-`, `*` (multiply), and `/` (divide).
Using these we can create new variables, or even output directly:

```js
var x = 5;
var y = x + 1;
alert(y);       // Displays 6.
alert(x+1);     // Also displays 6!
```

You can also do complex math, including using brackets etc.
Some math needs to be done using the special `Math` library, like `Math.pow()`, which raises a number to an exponent.

```js
alert(1+5-3*2/6);   // Displays 5.
alert(1+(5-3)*2/4); // Displays 2.
alert(Math.pow(5,2));   // Displays 25. (5^2 = 25).
```

See the W3Schools [JS arithmetic](https://www.w3schools.com/js/js_arithmetic.asp) and [JS Math Object](https://www.w3schools.com/js/js_math.asp) for more advanced math operations.

## String operations

The other main type of data we work with are strings.
These can contain any text, which we enclose with quotation marks:

```js
var x = 'Hello';  // We can use single quotes...
var y = "World";  // Or double quotes (they just have to match!).
alert(x);         // Displays 'Hello'.
alert('Hello');   // Also displays 'Hello'.
```

Notice when we use a variable (like `alert(x)`) we don't put quotes around its name.
We use quotes to "literally" say whatever's inside - `alert("x")` would literally display the letter x, instead of what's stored in the variable `x`.

We can join multiple strings together using the `+` symbol (same symbol as addition!):

```js
var x = 'Hello';
var y = 'World';
var z = x + y;
alert(z);           // Displays 'HelloWorld'.
alert(x + y);       // Also displays 'HelloWorld'.
alert(x + 'World'); // Also displays 'HelloWorld'.
alert(x + ' ' + y); // Displays 'Hello World' (notice the space!).
```

### String methods

There are many built-in tools that we can use with strings - a few examples:

*Important note: In programming we **always** count from 0.
For instance, we say the first letter in a string is at "index 0", second is "index 1", third is "index 2", etc.*

```js
var x = 'This is a test';
alert( x.length );          // Displays 14 (number of characters in x).
alert( x[0] );              // Displays 'T' (the first letter).
alert( x.indexOf('is') );   // Displays 2 ('is' first occurs at index 2).
alert( x.slice(10, 14) );   // Displays 'test' (characters 10 to 13).
alert( x.toUpperCase() );   // Displays 'THIS IS A TEST'.
alert( x.toLowerCase() );   // Displays 'this is a test'.
alert( x.concat('!!') );    // Displays 'This is a test!!' (same as + '!!').
alert('  a test '.trim());  // Displays 'a test' (outside spaces are removed).
```

You can read more on the W3Schools [JS string methods](https://www.w3schools.com/js/js_string_methods.asp).

### Strings to numbers

It's very common that we need to convert strings to numbers.
In fact, every time we use `prompt()` to get input, the result is a string - and doing math with strings doesn't work:

```js
var x = prompt('Enter a number');   // Imagine the user enters 1.
alert(x + 2);                       // This would display '12', instead of 3!
```

So we need to mentally *keep track* of what variables are strings vs numbers, and convert them whenever necessary.
We can convert a string into a whole number (integer) using `parseInt()`, or a decimal number using `parseFloat()`:

```js
var x = '1';
var y = parseInt(x);
alert(x + 1);                 // Displays '11' (no good).
alert(y + 1);                 // Displays 2 (success!).
alert(parseInt(x) + 1);       // Also displays 2.
alert(parseInt('2.9'));       // Displays 2 (parseInt rounds down).
alert(parseFloat('2.9'));     // Displays 2.9.
alert(parseFloat('2.9') + 5); // Displays 7.9.
```

## More processing

This was only the tip of the iceberg.
There is practically no limit to the amount of processing tasks you can program in JavaScript (or any programming language).

In this lesson, you learned how to manipulate numbers and strings before outputting them.
The next step, in Lesson 3, will be to have the computer **make decisions** using if statements and while loops.

## Exercises

Make a new folder for this lesson, e.g. `processing`, and make the following HTML files (copy the template HTML in `resources` as a starting point for each):

1. `yell.html`: Ask the user for any sentence, and alert it back to them in ALL CAPS.
2. `stringCombine.html`: Ask the user for three separate strings, then:
    - Combine all three strings into a single string and alert it back to them.
    - Combine all three strings again, but in reverse order (3 2 1) and all lower-case, and alert it.
    - Alert the combined length of all three strings (as a single number).
3. `funMath.html`: Ask the user for 5 numbers, then:
    - Make sure to convert each one from a string into a number! (will you use `parseInt()` or `parseFloat()`?)
    - Assuming the numbers are named `a` `b` `c` `d` `e` (they can be named differently):
    - Alert `a + b + c + d + e`
    - Alert `a + b - c / d * e`
    - Alert `(a + b) * c / (d - e)`
    - Alert `Math.pow(a, b)`
    - Alert `Math.pow(a+b-c, d / e)`
    - Yes, you should see 5 prompts and 5 alert popups when it's all done!

When finished, submit all components to MyNH.
