Project Setup :

configure .env
php arisan migrate
php artisan db:seed --class=ProductSeeder


1. Laravel Logic
----------------

Ques : 
Basic Eloquent Query: Write a Laravel Eloquent query to retrieve all records from a table named 'products' where the 'price' is less than 50.

Answer Route :

For Total Products :
http://127.0.0.1:8000/product-count

Products For Price Less than 50:
http://127.0.0.1:8000/product-altered

-----------------------------------------------------------------------------------------------------------------------------------------------------

Ques :
Simple Form Handling: Create a Laravel route that displays a form with a single input field. Upon form submission, validate and print the submitted value.

Answer Route :

http://127.0.0.1:8000/form

-----------------------------------------------------------------------------------------------------------------------------------------------------

2. Practical Problem Solving

Ques :
File Validation in Laravel: Extend the file upload script from the previous example. Add validation to check if the file size is less than 2MB and display appropriate error messages.

Answer Route :

http://127.0.0.1:8000/file-upload

-----------------------------------------------------------------------------------------------------------------------------------------------------


3. Core PHP Logic

1. Sum of Even Numbers: Write a PHP function that takes an array of integers and returns the sum of all even numbers in the array.

File Name : sum_of_all_even_numbers.php

Code :

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
?>

-----------------------------------------------------------------------------------------------------------------------------------------------------

2. Array Search: Write a PHP script to search for a specific element in an array. If the element is found, return its index; otherwise, return -1.

File Name : specific_element_in_an_array.php

Code :

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

-----------------------------------------------------------------------------------------------------------------------------------------------------

IQ Test Questions in PHP:

String Reversal: Write a PHP function to reverse a given string.

File Name : reverse_a_string.php

Code :

<?php

function reverseString($inputString) {
    return strrev($inputString);
}

$inputString = "Hello, World!";
$reversedString = reverseString($inputString);

echo "Original String: $inputString\n";
echo "Reversed String: $reversedString";

?>

-----------------------------------------------------------------------------------------------------------------------------------------------------

Ques :
Basic Arithmetic Operations: Create a PHP script that takes two numbers as parameters and performs basic arithmetic operations (addition, subtraction, multiplication, and
division).

File Name : calculator.php