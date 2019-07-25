# receipt

Your task is to create a basic program to generate a receipt for products purchased. It should have an input field for the user to enter an item and price, a submit button to add a single item, and a "Finish" option to complete the purchase. Each item and price should be saved into arrays. At the end, display the items and prices as well as a total on the webpage. Format this in a readable way.

#### Example:

```
    Item:   avocado   Price:  2
    (Click Submit)
    Item:   avocado   Price:  2
    (Click Submit)
    Item:   avocado   Price:  2
    (Click Submit)
    Item:   bread     Price:  2.50
    (Click Submit)
    Item:   bananas   Price:  1.50
    (Click Submit)
    Item:   yogurt    Price:  4
    (Click Submit)
    Item:   hommus    Price:  7
    (Click Submit)
    (Click Finish)

    Thank you for shopping :)

    avocado             $2.00
    avocado             $2.00
    avocado             $2.00
    bread               $2.50
    bananas             $1.50
    yogurt              $4.00
    hommus              $7.00
                       ------
    Total              $21.00

    Please come again!
```

## Steps

> Note: These steps are written assuming an HTML approach, with `<input>` and `<button>` elements. To adapt to pure JS, try using:
>
>   - a loop
>   - 2x `prompt()` (for item name and price)
>   - check the item name for the keyword "quit" to finish
>   - display the result in an alert

1. Always start by opening Brackets, creating a new file, and saving it.

    - Save the new file as `receipt.html`.
    - Fill out the basic structure of the HTML from memory, or use a template or past project.

2. Create two `<input>` elements to get the item name and price, and two `<button>` elements to submit an item and to finish.

3. Create an area on the screen to display the result (using a `<div>` or any more complicated HTML you may decide on).

4. In your JavaScript, you will need to create two functions (for your Submit and Finish buttons), and two arrays (for a list of item names and prices).

    - Your arrays need to live **outside** your functions, at the start of your script block:
    ```html
    <script>
      var array1 = [];
      var array2 = [];

      function submit() {
        // Program your submit function...
      }
      // ...
    </script>
    ```
    - If you define your arrays at the start of your script, they are still available inside your functions, but will maintain their values between function calls.
    - (This is called "scope". Any variables you define inside your functions disappear as soon as the function finishes.)

5. Inside your Submit function, get the values of the two `<input>`s and append them to the corresponding arrays.

6. Determine the total by adding the prices together - tricky! It needs to work no matter how many items the user has added to the list.

7. Inside your Finish function, you will need to add each item to the output display.

    - One option: create an empty string `var str = ''`, then use a for loop to loop through each item and add its name and price to the string (like `str = str + 'New text to add'`).
    - To add a new line between each entry, use the HTML line break `<br>` - for instance, `str = str + 'New text to add<br>'`.
    - When the for loop finishes, add the final lines with the total price.
    - Then change the `innerHTML` of your output `<div>` to equal the string you've just created.

8. Use the resources below if you get stuck!

## Resources

| Requirement | Resource |
|-------------|----------|
| Input elements | <ul><li>[Different input types (W3Schools)](https://www.w3schools.com/tags/att_input_type.asp)</li></ul> |
| Buttons     | <ul><li>[HTML button element](https://www.w3schools.com/tags/tag_button.asp)</li><li>[Button onclick event (linking to functions)](https://www.w3schools.com/jsref/event_onclick.asp)</li></ul> |
| Getting HTML content | <ul><li>[getElementById() (W3Schools)](https://www.w3schools.com/jsref/met_document_getelementbyid.asp)</li><li>[Input text value property (W3Schools)](https://www.w3schools.com/jsref/prop_text_value.asp)</li><li>[Getting dropdown selection value (W3Schools)](https://www.w3schools.com/jsref/prop_select_value.asp)</li></ul> |
| Variables            | <ul><li>[JS Variables](https://www.w3schools.com/js/js_assignment.asp)</li><li>[JS Assignment Operators](https://www.w3schools.com/js/js_assignment.asp)</li><li>[JS variable scope](https://www.w3schools.com/js/js_scope.asp)</li></ul> |
| Arrays               | <ul><li>[JavaScript arrays](https://www.w3schools.com/js/js_arrays.asp) (look at "Creating" and "Access the Elements")</li></ul> |
| For loops            | <ul><li>[JS for loop (W3Schools)](https://www.w3schools.com/js/js_loop_for.asp)</li><li>[Looping through each character in a string (StackOverflow)](https://stackoverflow.com/a/1967132/4080966)</li></ul> |
| String manipulation  | <ul><li>[JS Operators (scroll to "string operators")](https://www.w3schools.com/js/js_operators.asp)</li><li>[String concatenation (or simply use `str1 + str2`)](https://www.w3schools.com/jsref/jsref_concat_string.asp)</li><li>[JS string methods (W3Schools)](https://www.w3schools.com/js/js_string_methods.asp)</li></ul> |
| Displaying results   | <ul><li>[JavaScript output summary (W3Schools)](https://www.w3schools.com/js/js_output.asp)</li><li>Option 1: [JS alert box](https://www.w3schools.com/js/js_popup.asp)</li><li>Option 2: [Changing HTML content](https://www.w3schools.com/js/js_htmldom_html.asp)</li><li>Option 3: [console.log](https://www.w3schools.com/jsref/met_console_log.asp)</li></ul> |
| General     | <ul><li>[StackOverflow](https://stackoverflow.com/)</li><li>[W3Schools](https://www.w3schools.com/)</li><li>[CSS-Tricks](https://css-tricks.com/)</li><li>[Course Resources](/resources/)</li></ul> |

## Extensions

- Instead of creating separate arrays for items and prices, try creating an array of arrays, where each element contains both the name of the item and the price (ex. [['bananas', 2.5], ['yogurt', 4], ['bread', 2]])
- Be diligent about your formatting. Make everything line up vertically. Include dollar signs and .00 after whole number prices. This may be tedious! (You will need to use a Monospaced font in your CSS styles).
- allow the user to specify how many of the same item they are buying, e.g.:
    ```
    Item:   avocado   Price:  2     Quantity: 4
    (Click Submit)
    Item:   bread     Price:  2.50  Quantity: 1
    (Click Submit)
    (Click Finish)
    ```
    could look like this on the receipt:
    ```
    avocado 4 @ $2       $8.00
    bread 1 @ $2.50      $2.50
                        ------
    Total               $10.50
    ```

## Assessment

| Level  | Expectations |
|--------|--------------|
| Bronze   | Generates an array of prices from user input, displays them and gives a total. |
| Silver   | Stores separate arrays of items and numbers and presents a formatted receipt. |
| Gold     | Implements one or more of the challenges. |

- **Note:** all code should be commented and you should have no redundant code.

Remember to commit each time you've made a major change to your code, and to push to GitHub frequently.
