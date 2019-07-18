# calculator

Your task is to create a simple calculator that asks the user for two numbers and an operation (+, -, x, ÷), and computes and outputs the result.

## Steps

1. Open Brackets. In your GH folder, **pull from upstream** to get the latest changes, then create a new file.

    - Save the new file as `calculator.html` in *this directory* (`GH/4_programming/modules/calculator/`).
    - Fill out the basic structure of the HTML from memory, or use a template or past project.

2. Create three `<input>` elements to get the two numbers and the operation from the user.

    - How will you tell the users what each input does?
    - How will they choose the operation? Will they choose from a dropdown? Or maybe type in the word 'plus', or the symbol '+'?

3. Create a button to perform the correct operation and compute the result.

    - To make the button "do" something, you will need to add an `onclick` attribute and write a JavaScript function for it to call.
    - In your JS function, you will need to get the contents of each input, and use if statements to perform the correct operation.

4. Display the result to the user.

    - How will you display it? An alert box is easy, but it would look nicer for the answer to actually be displayed on the page.
    - Remember to indicate what the number means, like `The answer is: `

5. Use the resources below to guide you through the process.

## Resources

| Requirement | Resource |
|-------------|----------|
| Input elements | <ul><li>[Different input types (W3Schools)](https://www.w3schools.com/tags/att_input_type.asp)</li></ul> |
| Dropdowns   | <ul><li>[HTML select element](https://www.w3schools.com/tags/tag_select.asp)</li></ul> |
| Buttons     | <ul><li>[Button tag (W3Schools)](https://www.w3schools.com/tags/tag_button.asp)</li><li>[onclick event (W3Schools)](https://www.w3schools.com/tags/ev_onclick.asp)</li></ul> |
| Getting contents | <ul><li>[getElementById() (W3Schools)](https://www.w3schools.com/jsref/met_document_getelementbyid.asp)</li><li>[Input text value property (W3Schools)](https://www.w3schools.com/jsref/prop_text_value.asp)</li><li>[Getting dropdown selection value (W3Schools)](https://www.w3schools.com/jsref/prop_select_value.asp)</li></ul> |
| Displaying results | <ul><li>[JavaScript popup boxes (alert) (W3Schools)](https://www.w3schools.com/js/js_popup.asp)</li><li>[DOM innerHTML property](https://www.w3schools.com/jsref/prop_html_innerhtml.asp)</li></ul> |

## Assessment

| Level  | Expectations |
|--------|--------------|
| Bronze | Successfully adds, subtracts, multiplies, and divides two numbers |
| Silver | Displays the result on the page rather than as an alert |
| Gold   | More operations, multiple numbers, error-proofing, etc. |

- **Note:** all code should be commented and you should have no redundant code.

Remember to commit each time you've made a major change to your code, and to push to GitHub frequently.

## A note about plagiarism

As you program this module (and others), you may be tempted to search online for a solution you can copy. For instance, code like this is easy to find:

![Online Code](./online_code.png "Online Calculator Code")

This is **not** an appropriate submission. Using a pre-built solution like this:

  - doesn't solve the original problem description (enter two numbers and an operation)
  - is much more complicated than your task
  - doesn't use any of the techniques or conventions we have learned
    - for instance, all of that "onclick" code should be inside functions in a `<script>` block
  - doesn't result in you learning much, or applying the skills you have learned

Please keep that in mind as you program. There is sometimes a fine line in coding between using resources and plagiarising - but what you create must be your own, it should use what you have learned, and you should understand it fully.
