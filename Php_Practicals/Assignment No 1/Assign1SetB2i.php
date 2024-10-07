<?php
function countVowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    $string = strtolower($string);
    $length = 0;

    while (isset($string[$length])) {
        $length++;
    }

    for ($i = 0; $i < $length; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if ($string[$i] == $vowels[$j]) {
                $count++;
            }
        }
    }

    return $count;
}

function showVowelOccurrences($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $occurrences = ['a' => 0, 'e' => 0, 'i' => 0, 'o' => 0, 'u' => 0];
    $string = strtolower($string);
    $length = 0;

    while (isset($string[$length])) {
        $length++;
    }

    for ($i = 0; $i < $length; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if ($string[$i] == $vowels[$j]) {
                $occurrences[$vowels[$j]]++;
            }
        }
    }

    return $occurrences;
}


function checkPalindrome($string) {
    $length = 0;

    while (isset($string[$length])) {
        $length++;
    }

    for ($i = 0, $j = $length - 1; $i < $j; $i++, $j--) {
        if ($string[$i] != $string[$j]) {
            return false;
        }
    }

    return true;
}
?>
