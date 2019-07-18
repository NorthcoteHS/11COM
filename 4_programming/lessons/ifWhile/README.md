# ifWhile

This lesson introduces you to two important concepts in "control flow" (how your program makes decisions): if statements and while loops.

## If statements

One of the most fundamental concepts in programming, an `if` statement lets you run a block of code *only if* a certain condition is met. For example, the code below will display `Yay!` if the number `x` is greater than 10:

```js
var x = 1;
if (x > 10) {
    alert('Yay!');
}
else if (x > 5) {
    alert('Almost there!');
}
else {
    alert('Not quite!');
}
```

Note that each "block" of code is enclosed in **braces `{}`**, which tells JavaScript that it is attached to the `if` statement above it. We also indent any code inside the function (with 4 spaces) to visually separate it.

The statement `else if` essentially performs another if statement, but only if the first condition *wasn't* true. `else` will run if none of the previous conditions were true.

### Nested if statements

If statements, like any other blocks of code, can be "nested" - meaning you can have an if statement inside another if statement. Consider this example:

```js
// Setup info.
var gender = 'f';
var married = true;

// Determine the person's title.
if (gender == 'm') {
    var title = 'Mr.';
} else if (gender == 'f') {
    if (married) {
        var title = 'Mrs.';
    } else {
        var title = 'Ms.';
    }
}
```

Here the program considers the first if statement, which does not succeed because `gender` is not `'m'`. It then goes into the `else if` (where the gender matches), and does another if statement, checking the value of `married`. The end result is a title of `'Mrs.'`.

You may also notice that we have "condensed" the syntax a bit, by putting `else`/`else if` on the same line as the closing brace `}` of the previous statement. This is simply a stylistic change, and does not affect the execution of the script.

## While loops

A loop is a way of repeating a block of code multiple times. It is like an `if` statement - it has a condition that it checks, and it will only run its code if the condition is true.

Unlike an `if`, it will keep running its block of code until the condition isn't true, checking each time it finishes. For example, the code below will display 1 to 9, then `Done!`:

```js
var x = 1;
while (x < 10) {
    alert(x);
    x = x + 1;
}
alert('Done!');
```

Like `if` statements, notice that the block of code performed by the `while` statement is enclosed in braces and indented with four spaces. As the code runs, `x` increases with each loop and eventually causes the `x < 10` check to fail, ending the while loop.

### Infinite loops

While loops should always change the value of the variable they're checking, so that eventually the while loop can finish. Consider this code:

```js
while (true) {
    alert('Oh no!');
}
```

This program will never end, and it would cause your program to crash. **Do not write infinite loops!** If you look at our first example, the line `x = x + 1` prevented it from being infinite.

## Exercises

In your GH folder, **pull from upstream** to get the latest changes. Then find *this folder* (`GH/3_programming/lessons/ifWhile/`), open `ifWhile.html`, and create the following functions in the `<script>` block:

1. `max(a,b)`: **Returns** the larger of the two values, using an if statement.
2. `max3(a,b,c)`: **Returns** the largest of the three values, using nested if statements.
3. `numToWord(x)`: Takes a digit (0-9) and **returns** the digit as a word (in English), using a series of if/else if statements.
4. `countdown(x)`: Takes a positive integer and counts down to 0, **logging** each value (using `console.log()`).
5. `halver(x)`: Takes a positive number and repeatedly divides by 2, until it is less than 1. **Returns** the end result (a value between 0-1).
