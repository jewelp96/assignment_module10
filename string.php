<?php

$strings = ["Hello", "World", "PHP", "Programming"];

// Function to count the number of vowels in a string
function countVowels($string) {
    // Convert the string to lowercase to handle both uppercase and lowercase vowels
    $lowercaseString = strtolower($string);
    // Count the number of vowels (a, e, i, o, u)
    $vowelCount = preg_match_all('/[aeiou]/', $lowercaseString);
    return $vowelCount;
}

// Iterate over each string in the array
foreach ($strings as $string) {
    // Count the vowels in the string
    $vowelCount = countVowels($string);
    // Reverse the string
    $reversedString = strrev($string);
    // Print the original string, vowel count, and reversed string
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}

?>
