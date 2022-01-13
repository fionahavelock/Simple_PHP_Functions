<?php

/*Create a program that asks the user to make two inputs, first name and surname. Then the program takes the user input and creates a membership ID in the format JSmith2439.
The program will generate the username for the name by taking the first letter of the first name, the full second name and a randomly generated four digit number. This should be assigned to a variable*/

    
//variables
/*Get first name and surname and assign to variables
call create username function passing first name and surname as parameters*/
$firstname = $_POST ['firstname'];
$lastname = $_POST ['lastname'];

//function and result
echo "Your username is:"; 
echo "<br>";
//assign first character of first name to variable
echo ucfirst($firstname [0]);
//assign surname to variable
echo ucfirst(strtolower($lastname));
//assign randomly generated number to variable and show newly generated username
echo(rand(1000 , 9999) . "<br>");



?>