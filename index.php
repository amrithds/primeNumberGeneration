<?php

require_once 'NumberHelper.php';

$countOfPrimeNumber = getopt(null, array("count:"));

if(empty($countOfPrimeNumber) || !isset($countOfPrimeNumber['count'])){
      echo "Count parameter is required.";
      exit(0);
}

if(! is_numeric($countOfPrimeNumber['count']) ||  $countOfPrimeNumber['count'] < 1){
    echo "Invalid count parameter.";
    exit(0);
}

$numberHelper = new NumberHelper();

$primeNumbers = $numberHelper->getPrimeNumbers($countOfPrimeNumber['count']);
$table = $numberHelper->mutiplyTable($primeNumbers);
$numberHelper->printTable($table, $primeNumbers);


//Total complexity of  problem
// log n for generating prime numbers
// n log n to generate multiply table
//n* n for printing array
//Total = log n + n logn + n*n = n * n