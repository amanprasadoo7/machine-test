<!-- Write a PHP function that takes an array of integers and returns
the sum of all even numbers in the array. -->

<?php

function sumOfEvenNumbers($numbers) {
    $sum = 0;

    foreach ($numbers as $number) {
        if ($number % 2 === 0) {
            $sum += $number;
        }
    }

    return $sum;
}

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$result = sumOfEvenNumbers($numbers);

echo "Sum of even numbers: $result";
