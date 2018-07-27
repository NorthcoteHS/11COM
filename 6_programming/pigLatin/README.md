# pigLatin

Your task is to translate text (given by the user) to Pig Latin. Pig Latin is an argot (a secret language) that is formed by changing English words according to the following rules:
1. Words beginning with a vowel have the letters "ay" added to the end.
2. Words beginning with a consonent have all the letters before the first vowel moved to the end, then "ay" is added to the end.

Example: "Pig Latin is truly the language of intellectuals." translates to "igPay atinLay isay ulytray ethay anguagelay ofay intellectualsay."

Your program should be able to translate single words to Pig Latin. As an extension, try to have it translate full sentences!

## Steps

1. Always start by copying and renaming `template.html` for the current module.

    - Name the file `pigLatin.html` in this module's directory.

2. Create an `<input>` element to get the phrase from the user.

3. Create a button to perform the correct operation.

    - To make the button "do" something, you will need to add an `onclick` attribute and write a JavaScript function for it to call.
    - In your JS function, you will need to get the contents of the input and perform the logic to convert it to Pig Latin.

4. Work on the logic...

    - Start simple: try *always* removing the first letter and adding "ay" to the end.
    - Now work on only removing the first letter if it's a vowel (a,e,i,o,u)
    - Consider this: What will your program do if the user inputs a string with more than one word (eg. "Mario Kart")? It could...
        - Translate it to "ario KartMay" (this is a bronze-level solution)
        - Tell the user they've made a mistake, and ask them to retry
        - Translate all of the words in the string to Pig Latin (hard)
        - Something else...?

5. Display the result to the user.

    - Start with `alert()` (the easiest way to display information).
    - Once that's working, try instead to display the result somewhere in your HTML body (using a `<p>` or `<input>` element).

6. You're done the basic task! Now try adding features, for instance:

    - Translate automatically (as you type)!
    - Move the "Pig Latin" logic into its own function that receives a string as input and returns a string as output.
    - Work on the more advanced logic: handling vowels and multiple words.

## Resources

| Requirement | Resource |
|-------------|----------|
| Input elements | <ul><li>[Different input types (W3Schools)](https://www.w3schools.com/tags/att_input_type.asp)</li></ul> |
| Buttons     | <ul><li>[Button tag (W3Schools)](https://www.w3schools.com/tags/tag_button.asp)</li><li>[onclick event (W3Schools)](https://www.w3schools.com/tags/ev_onclick.asp)</li></ul> |
| Getting contents | <ul><li>[getElementById() (W3Schools)](https://www.w3schools.com/jsref/met_document_getelementbyid.asp)</li><li>[Input text value property (W3Schools)](https://www.w3schools.com/jsref/prop_text_value.asp)</li></ul> |
| String manipulation | <ul><li>[JS string methods (W3Schools)](https://www.w3schools.com/js/js_string_methods.asp) - especially `slice()`</li><li>to get the first letter, try `str[0]` or `str.charAt(0)`</li><li>to work on each word separately, try `str.split(' ')`</li></ul> |
| Displaying results | <ul><li>[JavaScript popup boxes (alert) (W3Schools)](https://www.w3schools.com/js/js_popup.asp)</li><li>[DOM innerHTML property](https://www.w3schools.com/jsref/prop_html_innerhtml.asp)</li></ul> |

## Assessment

| Level  | Expectations |
|--------|--------------|
| Bronze | Accurately chooses whether to move the first letter to the end, and adds the "ay" |
| Silver | Correctly translates words beginning with more than one consonent, and handles input of more than one word |
| Gold   | Correctly translates strings of more than one word |

- **Note:** all code should be commented and you should have no redundant code

Remember to commit each time you've made a major change to your code, and to push to GitHub frequently.
