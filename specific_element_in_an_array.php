<!-- Write a PHP script to search for a specific element in an array. If the
element is found, return its index; otherwise, return -1. -->

<?php


function searchElement($array, $element) {
    $index = array_search($element, $array);

    return ($index !== false) ? $index : -1;
}

$myArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$searchElement = 5;

$result = searchElement($myArray, $searchElement);

if ($result !== -1) {
    echo "Element $searchElement found at index $result.";
} else {
    echo "Element $searchElement not found in the array.";
}
