# HelloWorld

["Hello, World!"](https://en.wikipedia.org/wiki/%22Hello,_World!%22_program) is the first program of almost every programmer. It is one of the most basic programs you can write, and simply displays the text "Hello, World!" to a screen (or other output).

You, too, wrote a sort of "Hello World" with your first App Inventor program, HelloCodi. That app did more than just display text, however - it had a button that responded by playing a sound! We're going to reel it back a bit and take a look at a true "Hello World" in App Inventor, as well as a more advanced version, and look at how we could make a similar program for the web.

## The HelloWorld app (App Inventor)

In the directory `ai/`, you will find three `.aia` files and a screenshot directory. These are three different takes on "Hello World" - Bronze is the simplest version possible, Silver adds a level of challenge, and Gold is much more complex. The `.aia` files can be imported directly into App Inventor, using `Projects -> Import project (.aia) from my computer...`. The screenshot directory has images of each app in action.

You can think of Bronze, Silver, and Gold as "Below, At, and Above Level". Use these as a mental guide when creating your own apps and programs, and remember to always challenge yourself to go beyond the "simplest version".

Before going further, test these apps in App Inventor by following these steps:

1. Create a new folder on your computer called `helloWorld` inside your 11COM directory (if you haven't made a dedicated directory for 11COM already, make one now!).
2. Download all three app files from `ai/*.aia` to your new folder, and import the apps into App Inventor.
3. Launch your emulator and test all three versions of the app (you can keep the emulator running while you change projects!).

## Porting to helloWorld.html

**Your task** is to port the different versions of HelloWorld into HTML. Porting means adapting code from one language or platform to another.

> But we don't know how to write HTML!

Yes, that's correct, and that is the purpose of this module! In the `web/` directory you will find `helloWorld.gold.html`. This is a port of the Gold version of the app, with all of the extra features added. What you must do is *trim down* the code in `helloWorld.gold.html` until you have something that reproduces the Silver and Bronze versions. You should follow these steps:

1. Download `web/helloWorld.gold.html` to your `helloWorld` directory.
2. Copy and paste two copies of the file, and rename them `helloWorld.silver.html` and `helloWorld.bronze.html`.
3. Open `helloWorld.bronze.html` in your browser and your text editor. Notice in your browser that it still has the full Gold functionality!
4. Look at the HTML code in your editor and see how much you can trim away to get the most basic, simple version of "Hello World" that you can. Whenever you save changes in the editor, you can refresh in the browser (F5) to see the new result.
5. Repeat the process for `helloWorld.silver.html`, but only trim it down to the point where you have a button, and clicking it once displays "Hello World".
6. Save them, show your teacher, and you're done!

## Resources

If you get stuck, there are a few resources available:

- [template.html](/resources/template.html) is a bare-bones HTML file with nothing added except a few comments. It's a great starting point for any new HTML file.
- [htmlGuide.html](/resources/htmlGuide.html) has a brief example of almost every type of HTML element you could want to use!
- [W3Schools](https://www.w3schools.com/) is an excellent site for learning HTML, CSS, JavaScript, and more!
- [StackOverflow](https://stackoverflow.com/) is a programmer's best friend - millions of users asking and answering every programming question you could imagine.
- Your browser's Inspector/Developer Tools (F12 on Chrome) lets you analyse and pick apart any webpage, which can be great for learning how they work.
