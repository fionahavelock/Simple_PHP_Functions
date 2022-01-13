<?php
//A program that outputs a yearly balance plus interest for 20 years.
//get balance from user
$balance = intval($_POST ['balance']);
//set variable
$year = 1;



//do the calculation
for($year; $year <21; $year++)
{
    $Total = $balance*1.1;
    $balance++;
    
//display the result
echo ("After year number ".$year. " your balance is ". round($Total). "<br>");
    
}

?>