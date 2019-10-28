# phpSql

Now for the fun part: combining PHP with SQL.

## Template

To make things easier, I have provided a PHP template in two parts:

1. [`db.php`](./db.php): Include this in the same directory as your project, and change the `$dbname` variable inside it.
2. [`template.php`](./template.php): Use this as a template for your PHP pages - notice the `require db.php` at the top of the file.

These templates will give you access to the `query()` function, which is custom-built (by me!) to send any SQL query you write directly to your database.
As an example, this gets all rows from a table called `students` and stores them into an array named `$students`:

```php
<?php
$students = query("SELECT * FROM students;");
?>
```

The response from `query()` is an array with all matching rows.
You can use PHP for loops, etc. to loop through each row, or access values individually like so:

```php
<?php
$students = query("SELECT * FROM students;");

// $students is an array - the following lines display:
//  1. The entire array,
//  2. The first row in the array, and
//  3. The 'firstName' field of the first row.
echo $students;
echo $students[0];
echo $students[0]['firstName'];
?>
```

### Demo

There is a [`demo.php`](./demo.php) file included in this folder to showcase 3 useful tasks:

1. Displaying the output of an SQL query as an HTML table.
2. Adding data to an SQL table using `INSERT INTO`.
3. Storing the output of an SQL query into a JavaScript variable.

## Usage (with XAMPP)

To get this working on **your computer**:

1. Make sure you have XAMPP installed and running (or some other web server).

2. Find your XAMPP's `htdocs` folder:
    - Windows: Default location is `C:\xampp\htdocs\`
    - Mac: In XAMPP, go to the "Volumes" tab, make sure it's mounted, and it should appear as an external drive.
        - See [here](https://stackoverflow.com/a/45547331/4080966) for more information.

3. Create a folder for your current project, e.g. `phpSql`.

4. In the folder, copy [`db.php`](./db.php) and [`template.php`](./template.php).

5. Modify both files for your project. Make sure you create/set up your SQL databases too!

6. When you're ready to try them out, visit (in your web browser): `localhost/phpSql/` (or whatever you have named your project).

7. Profit!

## Exercises

Make a **new folder** for this lesson **inside your XAMPP htdocs folder** named `phpSql`, copy in `db.php`, and make the following files:

1. `showTable.php`: Using `demo.php` as a reference, create a program that displays *your own* SQL table as an HTML table.
    - Use the Classes table we created in class, which listed your 6 classes, teacher names, etc.
    - Remember to update the code from `demo.php` to reference your own table, and use the correct column names.
    - Make sure you've also updated `db.php` with your DB's name!
2. Start experimenting! See what you can do with your database.

When finished, submit all components to MyNH.
