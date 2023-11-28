<!-- Write a PHP function to reverse a given string. -->

<?php

function reverseString($inputString) {
    return strrev($inputString);
}

$inputString = "Hello, World!";
$reversedString = reverseString($inputString);

echo "Original String: $inputString\n";
echo "Reversed String: $reversedString";

?>
