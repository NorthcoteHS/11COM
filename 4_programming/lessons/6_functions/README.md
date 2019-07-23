# functions

So far we have learned a few basic commands, like `alert()` and `prompt()`, that end with brackets and let us pass values to them inside the brackets. These commands that end with brackets are called **functions**.

You can think of functions as "black boxes" - you send them information, they *do something* with it, and send some information back out:

![Black box](./Blackbox3D.png "Black box")

JavaScript has many *built-in* functions, like `alert()` and `getElementById()`. There is nothing special about these - they are simply functions that someone else already created. You can create your own functions that work the exact same way!

### Creating functions: `function`

The following code uses the `function` command to create a function called `hello()` that says "Hello, World!":

```js
function hello() {
    alert('Hello, World!');
}
```

The "syntax" (the way the command written) is very important. When creating a function you must start with `function`, then the name you want to give it, followed by brackets `()`. Then you use braces `{}` to enclose all of the code that belongs to the function.

Notice that the code above *creates* the function, but doesn't call it. If you run the code, it won't do anything! But once it's created, you can call a function by using its name:

```js
function hello() {
    alert('Hello, World!');
}

hello();
```

### Input and output

As the "black box" picture above indicates, a function can receive input variables, and can also send an output variable when it is finished:

```js
function add(x,y) {
    // This function has two inputs (x and y) and outputs their sum.
    return x + y;
}

z = add(3,4);   // z will get the value 7.
```

### Extra resources

If you would like to explore functions further, you can try the Codecademy lessons on functions: [Codecademy JavaScript: Functions](https://www.codecademy.com/courses/learn-javascript-functions/lessons/functions/exercises/intro-to-functions) (only do Steps 1-7, stop at "Function Expressions").

## Exercises (Normal)

Make a new folder for this lesson, e.g. `functions`, and make a **single** HTML file `functions.html` with the following functions (copy the template HTML in `resources` as a starting point):

1. `hooray()`: Displays "Hooray!" in an alert box.
2. `subtract(x,y)`: Takes two numbers as input, and returns their difference.
3. `double(x)`: Takes one number as input, and returns the number times two.
4. `excited(word)`: Takes one string as input, and returns the string with an exclamation mark added to the end.
5. `stringJoin(str1, str2)`: Takes two strings as input, and returns the two strings joined with a space between them.
6. `birthday(name)`: Displays "Happy birthday, [name]!" in an alert box (using the provided name). No return value.

**Note:**
- Your `functions.html` will *define* each function.
- If you run the file, it won't produce any output unless you actually *call* the functions, which is fine!
- You can (and should!) test your functions by calling them, either at the bottom of your `<script>` or in the Console.

## Exercises (Auto-tester)

*These instructions are designed for users comfortable with Git. If you get these working, go back and try the auto-tester exercises in past lessons!*

In your GH folder, **pull from upstream** to get the latest changes. Then find *this folder* (`GH/3_programming/lessons/functions/`), open `functions.html`, and create the following functions in the `<script>` block:

1. `hooray()`: Displays "Hooray!" in an alert box.
2. `subtract(x,y)`: Takes two numbers as input, and returns their difference.
3. `double(x)`: Takes one number as input, and returns the number times two.
4. `excited(word)`: Takes one string as input, and returns the string with an exclamation mark added to the end.
5. `stringJoin(str1, str2)`: Takes two strings as input, and returns the two strings joined with a space between them.
6. `birthday(name)`: Displays "Happy birthday, [name]!" in an alert box (using the provided name). No return value.

**Note:**
- Your `functions.html` will *define* each function.
- If you run the file, it won't produce any output unless you actually *call* the functions, which is fine!
- You can (and should!) test your functions by calling them, either at the bottom of your `<script>` or in the Console.
