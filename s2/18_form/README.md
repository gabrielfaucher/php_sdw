# Exercise 18 (forms)

**Create two files: `oefening18_form.html` and `oefening18_verwerk.php`**

## HTML

Create a form that contains the following elements:
- a normal text field
- a password field
- a large text field (textarea)
- a checkbox
- a selection list
- a submit button

**Make sure every element has a unique `name` attribute**
**Make sure the form's `action` attribute points to `oefening18_verwerk.php`'s url**
**Make sure the form sends it's data using the HTTP POST method**

## PHP

**Show the contens of the GET superglobal in a table using a `foreach` loop**

Make sure you try the following tests:
- send a form with a checked checkbox
- send a form with an unchecked checkbox (it should **not** be shown in the results)
- refresh the page (after you sent form data)

**Make the forms method HTTP POST, and replace the GET superglobal with the POST superglobal**
Make sure you try the following tests:
- send a form with data
- refresh the page after you sent the form data (you should get a warning)
