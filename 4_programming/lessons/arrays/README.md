# arrays

We saw arrays at the start of the course, when you made your Magic 8-Ball in App Inventor (remember choosing a random response from a list?). We'll take some time now to talk about them a bit more formally.

In JavaScript, an array is a variable that can have multiple items inside. For instance, imagine a shopping list with 6 items - we could write that as 6 separate variables:

```js
var shopping1 = 'Eggs';
var shopping2 = 'Bananas';
var shopping3 = 'Yogurt';
var shopping4 = 'Cereal';
var shopping5 = 'Bread';
var shopping6 = 'Pizza';
```

But it is much easier and more useful to combine all six strings into a single array:

```js
var shopping = ['Eggs', 'Bananas', 'Yogurt', 'Cereal', 'Bread', 'Pizza'];
```

### Creating arrays: `[]`

An array is defined like any other variable (`var name = value;`), but to create the array value we use square brackets and separate each item with a comma:

```js
var myList = [145, 'test', 3.14];
```

Notice that each item in the array can have any value - they do not all have to be strings (or numbers).

### Accessing items: `array[index]`

Arrays are made up of multiple items. Often we want to use ("access") a single item from an array. For instance, we could display the first item of our shopping list from earlier:

```js
var item1 = shopping[0];
alert(item1);           // Will display 'Eggs'.
```

Notice that we access an array item by using the array's name, followed by square brackets and a number. That number is called the *index*, and requires a bit more explanation.

#### The index

The index is the item number that we want to access from inside our array. The only trick is that the index *always counts from 0*. That means our first item is index 0, second item is 1, etc.

### Getting the length: `array.length`

To get the length of an array (i.e. the number of items), use the `.length` property of your array:

```js
var nItems = shopping.length;
alert(nItems);          // Will display '6'.
```

### Adding items to an array: `array.push(item)`

To add a new item onto the *end* of an array, use the `.push()` method of your array:

```js
shopping.push('Ice cream');     // Becomes the 7th item.
alert(shopping[6]);             // Will display 'Ice cream'.
```

Note, this increases the length of your array by 1.

### Removing items from an array: `array.splice(index, amount)`

To remove a specific item or items from an array, use `.splice()` with the index and quantity to remove:

```js
shopping.splice(2,1);   // Removes the third item ('Yogurt').
alert(shopping[2]);     // Will display 'Cereal' (the new third item).
```

Note, this decreases the length of your array.

### Changing items in an array

This can be done the same way as accessing the item, but then assigning it a new value:

```js
shopping[0] = 'Chocolate';
alert(shopping[0]);         // Will display 'Chocolate'.
```

Now, as a result of all the changes we have made, our shopping list looks like:

```js
shopping = ['Chocolate', 'Bananas', 'Cereal', 'Bread', 'Pizza', 'Ice cream'];
```


## Advanced usage

### Accessing a range of items: `array.slice(start, end)`

You can pull out a smaller "sub-array" of items from your array by using the `.slice()` method:

```js
first2 = shopping.slice(0,2);   // Contains ['Chocolate', 'Bananas'].
middle3 = shopping.slice(1,4);  // Contains ['Bananas', 'Cereal', 'Bread'].
```

Note that the second index needs to be 1 *greater than* the last item you want - e.g. `shopping.slice(0,2)` only pulls out items 0 and 1.

#### Negative indices with slice

You can use a negative index to count backwards from the end of the array:

```js
secondLast = shopping.slice(-2,-1);
alert(secondLast);                  // Will display 'Pizza'.
```

Note that negative indices count from -1 (last item) downward, so the second-last would be -2, etc.

#### Ommitting the end index with slice

There are even more advanced options that involve omitting the end index - this will take all values from the start index to the end of the array:

```js
from3 = shopping.slice(3);      // Contains ['Chocolate', 'Bananas', 'Cereal'].
last2 = shopping.slice(-2);     // Contains ['Pizza', 'Ice cream'].
```

#### Other methods

There's plenty more that can be done with arrays! Check out the [JS arrays intro](https://www.w3schools.com/js/js_arrays.asp), [JS array methods](https://www.w3schools.com/js/js_array_methods.asp), and [array sorting](https://www.w3schools.com/js/js_array_sort.asp) on W3Schools.

## Exercises

In your GH folder, **pull from upstream** to get the latest changes. Then find *this folder* (`GH/3_programming/lessons/arrays/`), open `arrays.html`, and create the following functions in the `<script>` block:

1. `classRoll()`: This function has multiple steps. It should:
    - Create the following array: `roll = ['Jessica', 'Emily', 'Jordan', 'Kayley', 'Bruce', 'Michael', 'Everett', 'Lisa', 'Sam', 'Noah'];`
    - Log the array (using `console.log()`).
    - Students take turns each week cleaning the class guinea pig cage. Alert (using `alert()`) the name of the third student on the roll, so they know it's their turn.
    - Log the length of the array.
    - Then, add `'James'` to the end of the roll, and log the new roll.
    - `'Jordan'` changed schools. Remove him, and log the new roll.
    - `'Michael'` prefers to go by 'Mike'. Change his name, and log the new roll.
    - (Challenge) Alphabetise the roll and log.
    - (Challenge) Reverse the array and log.
    - (Challenge) Log the name of a random student in the class (not tested).
    - (Challenge) Split the array into two, each with 5 students (one with the first half of the class, the other with the second), and log like `console.log(list1, list2)`.
