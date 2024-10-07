<?php
    // Include the functions file
    include 'Assign1SetB2i.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $inputString = $_REQUEST['inputString'];
        $operation = $_REQUEST['operation'];

        switch ($operation) {
            case 'cv':
                $vowelCount = countVowels($inputString);
                echo "<h3>Vowel Count: $vowelCount</h3>";
                break;
            
            case 'so':
                $vowelOccurrences = showVowelOccurrences($inputString);
                echo "<h3>Vowel Occurrences:</h3>";
                foreach ($vowelOccurrences as $vowel => $count) {
                    echo "$vowel: $count<br>";
                }
                break;

            case 'cp':
                $isPalindrome = checkPalindrome($inputString);
                if($isPalindrome==true){
                    echo "<h3>The string is a palindrome.</h3>";
                }
                else{
                    echo "<h3>The string is not a palindrome.</h3>";
                }
                break;
        }
    }
    ?>