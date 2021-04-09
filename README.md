# PHP

PHP

Project – Login Page

Project brief
Create a HTML webpage login form that asks a user for their login details.
This then prints their login details to a text document, the password must be encrypted using PHP to secure the data that’s captured. 
Create an error message if the input of the password does not contain a numeric value. Use CSS to design the page


Pseudo Code – 

Build a HTML page to include a Title ‘Login Page’
Create Form in CSS
Two boxes in the form 
First box asking for user name, Placeholder in the entry box ‘Username’
Second box asking for the password. Placeholder is ‘Must include a number’
Create submit button
On submit we need an if/else statement
PHP
Create two variables, one for the password and one for the username
IF the password contains letters and numbers
ECHO ‘Thankyou, I have received your login details’
Create a new variable and encrypt the password
Create a text document ‘loginpage,text’
Print this username and the encrypted password to the text document 
ELSE
ECHO ‘Please makesure you password contains at least one numeric value’
END
