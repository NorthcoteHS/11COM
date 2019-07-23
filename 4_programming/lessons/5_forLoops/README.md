# forLoops

Before trying this lesson, make sure you have practised [while loops](../ifWhile#while-loops), which let you repeat a block of code over and over again, checking each time whether a condition is still true.

It can be *very* useful to repeat a block of code a specific number of times, and to have a counter telling us which loop number we're on. This can be done using while loops:

```js
// Log the numbers from 0 to 9 by looping.
var counter = 0;
while (counter < 10) {
    console.log(counter);
    counter++;
}
```

But there is another type of loop, the *for loop*, that is specifically designed for this purpose:

```js
// Log the numbers from 0 to 9 by looping.
for (var counter = 0; counter < 10; counter++) {
    console.log(counter);
}
```

### For loop syntax

A for loop is basically a while loop with three pieces in the brackets instead of one:
    1. An initialiser (`var counter = `) that runs only *once* at the start,
    2. A test (`counter < 10`) that runs before each loop (*this is the same as in the while loop*), and
    3. An iteration statement (`counter++`) that runs after each loop.

If you compare the while and for loops above, you should see how all three statements are present in both.

The for loop structure actually allows a lot of creative uses, but in general we use it to count between two numbers:

```js
// Loop from 5 to 7.
for (var i=5; i<8; i++) {
    console.log(i);     // Displays 5, 6, 7.
}

// Loop from 1 to 9 in steps of 2.
for (var i=1; i<10; i+=2) {
    console.log(i);     // Displays 1, 3, 5, 7, 9.
}

// Loop from 10 to 1 in steps of -1 (counting down).
for (var i=10; i>0; i--) {
    console.log(i);     // Displays 10, 9, 8, 7, 6, 5, 4, 3, 2, 1.
}
```

Note that we often use the variable `i` in for loops (short for `index`), and we use the `++` and `+=` shorthands for increasing its value.

### Using arrays

One of the most important uses of a for loop is in dealing with arrays:

```js
// Loop through each item in a list.
var shopping = ['Eggs', 'Bananas', 'Yogurt', 'Cereal', 'Bread', 'Pizza'];
for (var i=0; i<shopping.length; i++) {
    console.log(shopping[i]);   // Displays Eggs, Bananas, Yogurt, ...
}
```

Here we let `i` start at 0 and count up until one less than `shopping.length`, using it as an "index" into the array at each step.

## Exercises (Normal)

Make a new folder for this lesson, e.g. `forLoops`, and make the following HTML files (copy the template HTML in `resources` as a starting point for each):

1. `countup.html`: Uses a for loop to count up from 1 to 10, alerting each value.
2. `countdown.html`: Uses a for loop to count down from `x` to 1, alerting each value, then alerts BLASTOFF!
3. `goodDog.html`: Creates the array `dogs = ['Spot', 'Rex', 'Bob', 'Rufus'];`, then loops through the array and alerts a statement calling each dog a good boy. Specifically, it should say "[name] is a good boy!" for each name.
4. `squareNumbers.html`: Creates an array called `squares`, and loops through each number from 1 to `x`, adding its square to the array (use `Math.pow(value,2)` to get the square). When finished, alerts the array.
    - For example, if the function receives 4, it should alert the array `[1, 4, 9, 16]`.

When finished, submit all components to MyNH.

## Exercises (Auto-tester)

*These instructions are designed for return visitors who have already learned functions.*

In your GH folder, **pull from upstream** to get the latest changes. Then find *this folder* (`GH/3_programming/lessons/forLoops/`), open `forLoops.html`, and create the following functions in the `<script>` block:

1. `countup()`: Uses a for loop to count up from 1 to 10, **logging** each value (using `console.log()`).
2. `countdown(x)`: Uses a for loop to count down from `x` to 1, **logging** each value, then **logs** BLASTOFF!
3. `goodDog()`: Creates the array `dogs = ['Spot', 'Rex', 'Bob', 'Rufus'];`, then loops through the array and **logs** a statement calling each dog a good boy. Specifically, it should say "[name] is a good boy!" for each name.
4. `squareNumbers(x)`: Creates an array called `squares`, and loops through each number from 1 to `x`, adding its square to the array (use `Math.pow(value,2)` to get the square). When finished, **returns** the array.
    - For example, if the function receives 4, it should return the array `[1, 4, 9, 16]`.
