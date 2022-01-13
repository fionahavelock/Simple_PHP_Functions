<?php
//A program that outputs a yearly balance plus interest until the user has over £10,000 in his account.

//the balance in your account
$balance = intval($_POST ['balance']);
//the increasing interest percentage
$interest=0.1;
//time in years
$year=1;

while ($balance<=10001)
{
    
    $balance*=(1+$interest);
    echo "at the end of year ".$year." you will have &pound ".round($balance)."<br>";
    $year++;
}


?>