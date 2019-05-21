<?php

/**
 *
 * @author amrith
 *
 */

class NumberHelper
{

    /**
     * get prime numbers
     *
     * @param int $count
     * @return number[]|array time complexity of log $count
     *         space complexity of $count to hold prime values
     */
    public function getPrimeNumbers($count)
    {
        // validate
        if ($count < 1) {
            return false;
        }

        if ($count === 1) {
            return [
                2
            ];
        }

        $total = 1;
        $primeNumbers = [];
        // odd prime number starts from
        $i = 3;
        while ($total < $count) {

            $isPrime = true;

            foreach ($primeNumbers as $primeNumber) {
                // break when prime number is greater than half of next number
                if ($primeNumber * 2 > $i) {
                    break;
                }

                // break if not prime
                if (($i % $primeNumber) === 0) {
                    $isPrime = false;
                    break;
                }
            }

            // add to array if number is prime
            if ($isPrime) {
                $primeNumbers[] = $i;
                $total ++;
            }

            $isPrime = true;

            // get next odd number
            $i += 2;
        }

        // add 2 to other prime numbers
        return array_merge([
            2
        ], $primeNumbers);
    }

    /**
     * mutiple the numbers and create table
     *
     * @param array $numbers
     * @return array|number n*log n time complexity since only half of table values are calculated
     */
    public function mutiplyTable($numbers)
    {
        if(!is_array($numbers)){
            return false;
        }

        $arrayLength = count($numbers);
        $table = [];
        // since value are repeating copy similar column and row values and avoid duplicate calculations
        for ($i = 0; $i < $arrayLength; $i ++) {
            for ($j = $i; $j < $arrayLength; $j ++) {
                $table[$i][$j] = $table[$j][$i] = $numbers[$i] * $numbers[$j];
            }
        }

        return $table;
    }

    /**
     * print table in console
     *
     * @param array[][] $table
     *
     * n*n to print 2-d array
     */
    public function printTable($table, $numbers)
    {
        $arrayLength = count($table);

        // print header
        echo '  | ';
        // print number in header
        for ($i = 0; $i < count($numbers); $i ++) {
            echo $numbers[$i] . '  ';
        }
        echo "\n";

        // print ---- in header
        for ($i = 0; $i < count($numbers); $i ++) {
            echo '-----';
        }
        echo "\n";

        // print multiplied prime numbers numbers
        for ($i = 0; $i < $arrayLength; $i ++) {
            for ($j = 0; $j < $arrayLength; $j ++) {
                // print y axis
                if ($j === 0) {
                    echo $numbers[$i] . ' | ';
                }
                echo $table[$i][$j] . "  ";
            }
            echo "\n";
        }
    }
}

?>