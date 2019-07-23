# inputOutput

To write any program that can interact with a user, we need to be able to get **input** from them and display **output** to them.
Input and output are two of the four main components of any program:

- Input
- Output
- Storage
- Processing

## Output

The most basic programs display output without any input, storage, or processing.
For instance, the very first program most beginners write displays ["Hello, World!"](https://en.wikipedia.org/wiki/%22Hello,_World!%22_program) without any user interaction.

There are many forms of computer output - for instance:

- Text
- Sound
- Video
- Email and text messages
- Notification/reminder
- Vibration (phone or game controller)
- Paper (printer)

All of these can be programmed.
For our purposes, let's start small: text output.

### Text output

In JavaScript, there are three main ways of displaying text output:

1. `alert()`: Displays text in a popup alert box.
  **This is our main method for now**.
2. `console.log()`: Displays text in the console.
  **This is useful for debugging**, but is not a reasonable way of communicating with a user.
3. Changing the `.innerHTML` of an HTML element.
  We will explore this method in a later lesson.

`alert()` will be our first JavaScript command.
But first, we need to learn how to run JS code.

#### Running code

To run a single command, launch a browser (Chrome or Firefox) and open the **Console**, by doing one of:

1. Press *Ctrl+Shift+J* (*Cmd+Shift+J* on Mac), or
2. Right-click on any webpage, choose "Inspect", then switch to the Console tab, or
3. Look for "Developer Tools" or "Browser Console" in your browser's tools/menu.

You should see a window with a blank prompt (notice the single `>` or `>>`):

```
>
```

Now let's try it out - put the following command after the `>`:

```js
alert('Hello, world!');
```

Press enter, and you should see a popup appear on your webpage. Congratulations!
If it didn't work, make sure you have copied precisely - *everything matters*.
You need the brackets `()`, quotation marks `''`, and `alert` must be all lower-case.

#### A note about syntax

"Syntax" is the way we write things.
Computers often need very precise syntax - they can be picky, because they do *exactly* what we tell them to do.

In JavaScript, there are a few details you should know:

- Case matters: `alert` is not the same as `Alert` or `ALERT`
- All commands, like `alert()`, are called "functions". The brackets `()` on the end are how we *run* the function, and also tell it any information it must know.
    - For instance, `alert()` on its own will create a blank popup, and `alert('test')` will make a popup that says `test`
    - Typing `alert`, with no brackets, *will not* create any popup!
- We need to use quotation marks `''` any time we want to say a word or phrase - just like in a book!
    - The quotation marks can be single `''` or double `""`, but they need to match
- The semicolon `;` at the end of each line is not necessary, but it is best practice to include it

## Input

The other side of the equation is input.
There are two main methods in JavaScript:

1. `prompt()`: Creates a popup like `alert()`, with an extra text input.
  **This is our main method for now**.
2. Getting the `.value` of HTML `<input>` elements.
  We will explore this method in a later lesson.

We use `prompt()` just like `alert()`:

```js
prompt('What is your name?');
```

Try it out! Notice the text box where the user can enter their input.

### Storage

Input isn't very useful without storage.
We want to keep track of what a user inputs, so we can use it later.

The main form of storage in every programming language is **variables**.
These are similar to variables in maths: we give them a name and they have a value.
Each time we first create a variable, we use the special `var` keyword:

```js
var x = 1;
```

**Unlike** maths variables, we can change the value of a programming variable, and we always know what its value is (they are not "unknowns").
For instance, these commands are perfectly valid:

```js
var x = 1;
x = 5;
x = x + 1;
```

At the end of the third line, `x` is now `6` (`5 + 1`).
Notice we are not setting up "equations": we use the equals sign `=` strictly to **assign** a value to the variable on the left side.

### Storing input

Back to our input.
We can store the user's name, which they give us in our `prompt()`, into a variable:

```js
var name = prompt('What is your name?');
```

Again, the right side produces a value, and we use `=` to store that value into the variable `name`.

We can take it one step further, and display their name *back* to them:

```js
alert('Your name is:');
alert(name);
```

Notice that we don't put quotation marks around our variables, e.g. `name` - otherwise we would be literally saying the word "name"!
We want to output the *contents* of our variable.

## Creating a program

So far we've been running our commands in the Console.
This is great for testing, but it's not a real *program*.
A program is a file with a series of commands that can be saved and run together.

JavaScript runs on webpages, which are written in a separate language, HTML (HyperText Markup Language).
So to create our own program, we need to learn some basic HTML.

### Basic HTML structure

For our purposes, you can copy and paste this basic template for all your JS projects:

```html
<!DOCTYPE html>
<html>
    <head></head>
    <body>

        <script>
            // Your JS goes here!
        </script>
    </body>
</html>
```

The **very first thing** you should do when starting a new file is to save it.
Your file name **must** end with `.html`, for instance `helloWorld.html`.
This will give your text editor all the nice colouring and auto-completion, and will make the file open in your browser.

Try it now - copy the code above, go to your text editor, and make a new file called `helloWorld.html`.
Paste in the code from above, and replace `// Your JS goes here!` with `alert('Hello, world!');`:

```html
<!DOCTYPE html>
<html>
    <head></head>
    <body>

        <script>
            alert('Hello, world!');
        </script>
    </body>
</html>
```

Save the file, run it, and see if you get the popup!

## Conclusion

In this lesson, we learned about:

- running code in the Console
- `alert()`
- syntax: case, brackets, quotes, and semicolons
- `prompt()`
- variables
- using variables with input and output
- creating a basic website to run JS code

It's been a lot - congratulations on making it through!

## Exercises

Make a new folder for this lesson, e.g. `inputOutput`, and make the following HTML files (copy the template above as a starting point for each):

1. `helloWorld.html`: If you haven't already, make the helloWorld example from "Creating a program".
2. `helloUser.html`: Transfer the code from "Storing input" to make a program that asks a user their name and says hello to them (using their name).
3. `helloInfo.html`: Ask the user several pieces of information (name, age, favourite sport, anything!). Store each into a separate variable, then alert the info back to them.

When finished, submit all components to MyNH.
