<?php

/*The program starts by asking the administrator to enter their username and password.*/
/*Code will ask for user name and password using variables and POST, then there will be an if statement to run the code if the username and passowrd is correct, otherwise an else statement will ask the user to re-enter the credentials*/


$username = $_POST ['username'];
$password = $_POST ['password'];


 //hardcoded variables for testing
 if ($username =='name' AND $password=='123') {
     /*The program then welcomes the administrator and presents a menu offering 2 choices*/
    echo "Welcome user, you have logged in!";
     
    echo "Please choose one of the following options";
     
     $link_address1 = 'generateusername.html';
echo "<a href='$link_address1'>Index Page</a>";

$link_address2 = 'calculatefactorial.html';
echo "<a href='$link_address2'>Page 2</a>";
         

        
}  else {
    echo "Please enter your credentials again";
} 





?>