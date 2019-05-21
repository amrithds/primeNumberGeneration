<?php
include 'NumberHelper.php';

//get valid prime numbers

$numberHelper = new NumberHelper();

$numbers = $numberHelper->getPrimeNumbers(-1);

if($numbers !== false){
    echo 'Failed Invalid input'."\n";
}

$numbers = $numberHelper->getPrimeNumbers(1);

if($numbers !== [2]){
    echo 'Failed $numbers !== [2]'."\n";
}

$numbers = $numberHelper->getPrimeNumbers(10);

if($numbers !== [2,3,5, 7, 11, 13, 17, 19, 23, 29]){
    echo 'Failed for input 10'."\n";
}

//multiply table test
$table = $numberHelper->mutiplyTable(2);

if($table !== false){
    echo 'Failed mutiplyTable for invalid input 2'."\n";
}

$table = $numberHelper->mutiplyTable([2,3]);

if($table !== [[4,6], [6,9]]){
    echo 'Failed mutiplyTable for input [2,3]'."\n";
}