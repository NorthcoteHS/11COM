# calculator

Your task is to create a simple calculator that asks the user for two numbers and an operation (+, -, x, ÷), and computes and outputs the result.

## Steps

1. Always start by copying and renaming `template.html` for the current module.

    - Name the file `calculator.html` in this module's directory.

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
