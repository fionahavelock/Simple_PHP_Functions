<?php

$number=5;//temporarily hardcoded for testing
$userInput =5;//hard coded but should be user input - needed for output message
$factorial = 1;

function calculateFactorial($number, $factorial, $userInput)//needed to pass variables in to function
{
 
     if ( $number > 0 ) {
 
             while($number>1)
             {
				 
                 $factorial=$factorial*$number;
                 
				 echo($number . " x ");//output result on each iteration
				 $number--;
             }
 
              echo ($number. " the factorial of " . $userInput ." is:  " .$factorial.".");
			  
 
         }
    else if ( $number < 1 ) {
 
             echo "You have not entered a positive whole number greater than 0.";
         }
 
}
//return factorial total to global scope
echo "The factorial of".$userInput. "is".calculateFactorial($number, $factorial, $userInput);


?>