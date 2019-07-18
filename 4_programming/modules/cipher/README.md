# cipher

A *cipher* is one of the most basic ways to encrypt data. Encryption hides the meaning of information so that only those who know how to decrypt it can use it. You use encryption every day: signing in to websites, accessing the school's wi-fi, paying for things online or at the store, etc. Encryption is also used to keep corporate, military and government secrets.

A cipher is used to disguise written information by encoding the text though a series of defined steps. There are many types of ciphers, but today we'll focus on one: a caesar cipher. A caesar cipher encodes each letter in a message by replacing it with one a fixed number of letters later in the alphabet.

**Example:** If I offset every letter by one, a becomes b, b becomes c, c becomes d, ... y becomes z, z becomes a. So "The enemy approaches from the west at 6 o'clock!" becomes "Uif fofnz bqqspbdift gspn uif xftu bu 7 p'dmpdl!".

Notice that spaces and punctuation are left as they appear in the original text. Digits are shifted by the same offset (ex. 0 becomes 1, 1 becomes 2, ... 9 becomes 0).

Your task is to create a program that will encode a message (input by the user) with a caesar cipher, like the example above. It should display the encoded message at the end. Go for gold: allow the user to set the offset.

## Steps

1. Open Brackets. In your GH folder, **pull from upstream** to get the latest changes, then create a new file.

    - Save the new file as `cipher.html` in *this directory* (`GH/4_programming/modules/cipher/`).
    - Fill out the basic structure of the HTML from memory, or use a template or past project.

2. Create an `<input>` element to get the phrase from the user.

3. Create a button to perform the correct operation.

    - To make the button "do" something, you will need to add an `onclick` attribute and write a JavaScript function for it to call.
    - In your JS function, you will need to get the contents of the input and perform the logic to convert each letter.

4. Work on the logic...

    - Start simple: Create an empty string, and make a for loop to read the input string one character at a time and add it to the end of the empty string.
        - This should produce a string that is exactly the same as the original string.
    - Now try to "shift" each character up by one (a->b, b->c, etc) before adding it to the empty string.
        - To do this, you must first convert each character to its ASCII (number) value, increase that number by 1, and convert back to a character.
        - Read in the resources below to understand ASCII and how to convert between characters and ASCII codes.

5. Display the result to the user.

    - Start with `alert()` (the easiest way to display information).
    - Once that's working, try instead to display the result somewhere in your HTML body (using a `<p>` or `<input>` element).

6. You're done the basic task! Now try adding features, for instance:

    - Translate automatically (as you type)!
    - Move the "cipher" logic into its own function that receives a string as input and returns a string as output.
    - Add a "decode" option that lets you decode text that has been encoded already.
    - Let the user choose the number of characters to shift by.
    - Support "wrap-around", so that letters stay within the alphabet (e.g. x->y, y->z, z->a).
    - Implement a more advanced type of cipher.

## Resources

| Requirement | Resource |
|-------------|----------|
| Input elements | <ul><li>[Different input types (W3Schools)](https://www.w3schools.com/tags/att_input_type.asp)</li></ul> |
| Buttons     | <ul><li>[Button tag (W3Schools)](https://www.w3schools.com/tags/tag_button.asp)</li><li>[onclick event (W3Schools)](https://www.w3schools.com/tags/ev_onclick.asp)</li></ul> |
| Getting contents | <ul><li>[getElementById() (W3Schools)](https://www.w3schools.com/jsref/met_document_getelementbyid.asp)</li><li>[Input text value property (W3Schools)](https://www.w3schools.com/jsref/prop_text_value.asp)</li></ul> |
| ASCII       | <ul><li>[ASCII table and description](http://www.asciitable.com/)</li><li>[Character -> ASCII code (`charCodeAt()`)](https://www.w3schools.com/jsref/jsref_charcodeat.asp)</li><li>[ASCII code -> character (`String.fromCharCode()`)](https://www.w3schools.com/jsref/jsref_fromcharcode.asp)</li></ul> |
| String manipulation | <ul><li>[JS string methods (W3Schools)](https://www.w3schools.com/js/js_string_methods.asp)</li><li>to get the first letter, try `str[0]` or `str.charAt(0)`</li></ul> |
| For loops   | <ul><li>[JS for loop (W3Schools)](https://www.w3schools.com/js/js_loop_for.asp)</li><li>[Looping through each character in a string (StackOverflow)](https://stackoverflow.com/a/1967132/4080966)</li></ul> |
| Displaying results | <ul><li>[JavaScript popup boxes (alert) (W3Schools)](https://www.w3schools.com/js/js_popup.asp)</li><li>[DOM innerHTML property](https://www.w3schools.com/jsref/prop_html_innerhtml.asp)</li></ul> |

## Extensions

- Try creating a decoder - input a message in code and use the program to determine the original message. Much harder if you don't know the offset!

- Research another type of cipher, such as a Vigenere or Rail Fence cipher. Create a program that endodes using that cipher

- If you are interested in Encryption and ciphers, research the Lorenz cipher and Enigma machine - used in Nazi Germany to send encoded messages. The Allies broke these codes at Blechley Park during World War II, which contributed greatly to the outcome of the war.

## Assessment

| Level  | Expectations |
|--------|--------------|
| Bronze   | Correctly substitutes letters with an offset of one, missing one or more silver feature (case-sensitivity, wrap-around or treatment of non-alphaetic characters) |
| Silver   | Correctly encodes message, including case-sensitivity, wrap-around (z becomes a) and treatment of non-alphabetic characters |
| Gold     | Correctly encodes message, and allows the user to set the offset (beware of large offsets) |
| Diamond  | Implementing a more advanced type of cipher (try a Vigenere or Rail Fence Cipher) |

- **Note:** all code should be commented and you should have no redundant code

Remember to commit each time you've made a major change to your code, and to push to GitHub frequently.
