<?php
function processStrings($strings)
{

    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];


    foreach ($strings as $string) {

        $vowelCount = 0;
        for ($i = 0; $i < strlen($string); $i++) {
            if (in_array($string[$i], $vowels)) {
                $vowelCount++;
            }
        }

        $reversedString = strrev($string);

        echo "Original String: $string\n";
        echo "Reversed String: $reversedString\n";
        echo "Vowel Count: $vowelCount\n";
        echo "-------------------------\n";
    }
}

$inputStrings = ["Hello", "World", "PHP", "Programming"];
processStrings($inputStrings);
