<?php
/*Get number and assign to variable*/
$Number = $_POST ['inputNumber'];
$inputNumber = $_POST ['inputNumber'];//should be user input - needed for output message
//Set variable called factorial to 1
$factorial = 1;
//call function to calculate factorial value and pass number and factorial to function as a parameters
    function calculateFactorial( $factorial, $inputNumber)
    {
        //if number greater than zero 
        if ( $inputNumber > 0 ) {
             //while loop to calculate facorial
             while($inputNumber>1)
             {
				 //Multiply the factorial by the user number
                 $factorial=$factorial*$inputNumber;
                 /*Store this number as the new factorial variable on each iteration, "x" meaning "*", the output result on each iteration*/
				 echo($inputNumber . " x ");
                 //Reduce (decrement) the user number by 1 on each iteration
				 $inputNumber--;
             }
              //show factorial total formatted in output example below.
              echo ($inputNumber. " the factorial of " . $Number." is:" .$factorial.".");
			  
 
         }
        //else statement if the number is less than 1
        else if ( $inputNumber < 1 ) {
 
             echo "You have not entered a positive whole number greater than 0.";
         }
 
    }
//Show factorial result with global scope – out with the function
calculateFactorial( $factorial, $inputNumber);

?>
