<?php

function sum($numberA, $numberB) {
    $sum = $numberA + $numberB;
    return $sum;
}

function sub($numberA, $numberB) {
    $sub = $numberA - $numberB;
    return $sub;
}

function multiply($numberA, $numberB) {
    $sum = $numberA * $numberB;
    return $sum;
}

function divide($numberA, $numberB) {
    $sum = $numberA / $numberB;
    return $sum;
}

$numberA = 10;
$numberB = 5;

$result1 = sum($numberA, $numberB);
$result2 = sub($numberA, $numberB);
$result3 = multiply($numberA, $numberB);
$result4 = divide($numberA, $numberB);

echo "Sum of numbers: $result1" . ' ' . "Substraction of numbers: $result2" . ' ' . "Multiplication of numbers: $result3" . ' ' . "Division of numbers: $result4";
// echo "Substraction of numbers: $result2";
// echo "Multiplication of numbers: $result3";
// echo "Division of numbers: $result4";
