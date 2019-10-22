# php

PHP (short for PHP: Hypertext Preprocessor) is a server-side scripting language.
It's kind of like JavaScript, but it runs on the server *before* the webpage is sent to the user.
**The user never sees the PHP code** - it stays on the server, and the user only sees the result.

PHP allows us to run commands directly on the server, for instance querying an SQL database or reading/writing files.
Since the end user cannot view the code, it means we can do more secure operations that involve passwords, etc., without worrying *as* much.

## Syntax

At its core, a PHP file (e.g. `index.php`) is identical to HTML.
If you take any HTML file and change its extension to `.php`, you have created a PHP file!
(Though now you can't open it in your browser directly - PHP files need to be served by a web server, e.g. Apache).

What PHP adds is the ability to create `<?php ... ?>` blocks, where you can execute arbitrary code inside the HTML.
For instance, this code injects the date into an HTML `<h1>` element:

```php
<!DOCTYPE html>
<html>
  <body>
    <h1>Today's date is: <?php echo date('d/m/Y'); ?></h1>
  </body>
</html>
```

## Purpose

The purpose of PHP is to generate HTML pages.
Each `<?php ... ?>` block allows you to run some code on the server before sending the HTML to the user.
To add to the HTML that will be sent to the user, we use the PHP command `echo`, as seen above.

We can use standard programming techniques, e.g. for loops and if statements, to create more complex HTML.
For instance, this PHP produces the HTML shown below it:

```php
<!DOCTYPE html>
<html>
  <body>
    <?php
      echo "<ul>";
      for ($i=0; $i < 5; $i++) {
        echo "<li>Item " . $i+1 . "</li>";
      }
      echo "</ul>";
    ?>
  </body>
</html>
```

(The above PHP produces:)

```html
<!DOCTYPE html>
<html>
  <body>
    <ul>
      <li>Item 1</li>
      <li>Item 2</li>
      <li>Item 3</li>
      <li>Item 4</li>
      <li>Item 5</li>
    </ul>
  </body>
</html>
```

Notice a few differences from JavaScript:

1. Variables **must always start with $**. For instance `$i`, `$myVar`, etc.
2. To join strings we use the `.` character, not `+`.
3. `echo` is not a typical function - it does not have brackets around its arguments.

Other than that, a lot of the principles are the same as JS!
Loops, if statements, functions, and more follow the same basic patterns.

## Testing

PHP can be difficult to test, because it requires a PHP server.
Soon we will look at testing using XAMPP - for now, an easy alternative is to use an online testing resource.

For this lesson, use [PhpFiddle](http://phpfiddle.org/).
It does not require signing up - simply visit the page, navigate to the "Code-Space" tab, and paste in your code.
Run using the "Run - F9" button, and see the results!

## Exercises

Make a **new folder** for this lesson named `php`, and make the following files:

1. `helloWorld.php`: Create a basic HTML structure. In the body, create an `<h1>` then use PHP (`<?php ... ?>`) to echo `Hello, World!` inside of the `<h1>`.
    - Test your code using [PhpFiddle](http://phpfiddle.org/) or XAMPP!
2. `helloLoop.php`: Create a PHP file that displays 10 items in an **ordered list**, using a PHP for loop.
3. `timesTable.php`: Create a PHP file that displays a proper times table for the numbers 1-10. It should have 100 cells (10 rows by 10 columns), with the product of each combo of numbers.

When finished, submit all components to MyNH.
