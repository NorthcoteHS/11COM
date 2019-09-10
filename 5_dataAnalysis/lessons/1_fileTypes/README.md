# fileTypes

The next step in data analysis is to be able to read and write files.
When we gather large amounts of data we typically use files that we can store and manipulate.

Before we can learn to program with files, we need to know what kind of files we'll be working with.

## File formats

Think of the sort of files you have on your computer.
There are executable files (`.exe`, `.msi`, `.dmg`, `.app`), audio and video files (`.mp3`, `.mp4`, `.mkv`), productivity files (Excel, Word, etc.), zip files, text files, and more.
The first thing you may notice is that the extension (e.g. `.docx`) tells us what kind of file it is.

Each of these files is stored as a series of 1s and 0s (binary).
Some of them are very hard to interpret (e.g. zip files and other "binary" files), but some are quite easy.
The ones that can be plainly read are called "plaintext", and will appear as regular text when you open them in a program like Notepad or TextEdit.
The two main types of plaintext files we'll look at are `.txt` and `.csv`.

### TXT files

These are the most basic plaintext file.
They can have any text inside them, with no special formatting.
As an example:

```
This is a plaintext file.
I could make notes:
  - Bullets and indents help me organise.
  - But they're simply regular characters (spaces and hyphens).
  - Notice there's no bold, underlines, or fonts (just a default system font)!
```

To create a `.txt` file, you can open Notepad or TextEdit and save (in TextEdit you need to convert to plaintext first - instructions [here](https://www.techjunkie.com/textedit-plain-text-mode/)).
Or you can go to your destination folder, right-click, and choose New -> Text document.

**Note about hidden extensions:** If you don't see the `.txt` extension on the final file, it means your operating system is set to hide them.
**Turn this feature off!**
Instructions for Windows [here](https://www.howtogeek.com/205086/beginner-how-to-make-windows-show-file-extensions/).

### CSV files

These are simply plaintext files that use commas to store data in a certain way.
CSV stands for "Comma-Separated Values", and is a way we can store a list (or table) of data.
For instance, we could store the temperature for each day in the week:

```
14,12,14,12,15,19,17
```

But the data doesn't need to be numbers - we could store anything, like names of movies:

```
Iron Man,The Incredible Hulk,Iron Man 2,Thor,Captain America: The First Avenger,Marvel's The Avengers
```

Notice that the commas work very nicely to separate the items.
The list above has 6 items ("columns"), which we can count easily.
We do run into problems if an item needs to contain a `,` - but we'll discuss that further below.

You can create a `.csv` file the same way you make a text file, but when naming it, use `.csv` as the extension (instead of `.txt`).
This is where you need to be able to see the extensions - if they're hidden, you may end up with a file like `myfile.csv.txt`!

For this lesson, make sure you always edit CSV files in Notepad/TextEdit (not Excel).

#### Multiple rows

The main purpose for CSV files is to store multiple rows of data, or a "table".
These often have a header row that says what each column contains.
For instance, this CSV file shows a table with 5 rows (including 1 header row), and 3 columns on each row:

```
Name,Age,Favourite Colour
Paul,16,Blue
Mary,12,Green
James,13,Purple
Christine,17,Red
```

Notice that the "columns" don't line up visually, but each row has the same number of columns (3).
That way we know that James' age is 13 and Christine's favourite colour is red.

#### Special cases

In CSV files, there are two potential problems: when items need to contain a `,` or a newline.
The official solution is to put quotation marks around each item (or just the items with those special characters):

```
"A Fistful of Dollars","For a Few Dollars More","The Good, the Bad and the Ugly"
```

Of course, then things get tricky if an item is supposed to have quotes inside it.
There is a solution (we use `\"`, known as an "escape character"), but you likely won't encounter that rare situation.

## Exercises

Make a **new folder** for this lesson named `fileTypes`, and make the following files (use Notepad, TextEdit, or Brackets):

1. `helloWorld.txt`: A plaintext file with only the words "Hello, World!" (no quotes).
2. `shortStory.txt`: Another plaintext file with a few lines of text. If you need inspiration, try a [story from here](https://randomtextgenerator.com/)!
3. `numbers.csv`: A CSV file with one row of at least 10 numbers. We will use this file in the next lesson (`fileIO`)!
4. `table.csv`: A CSV file with at least 4 columns and 10 rows. It *must* include a header row, and at least one of the columns must be numeric (like the age example).

When finished, submit all components to MyNH.
