<?php
    $large = $_POST['ls'];
    $small = $_POST['ss'];
    $replace = $_POST['rs'];

    if (preg_match("/^$small/i", $large)) {
        echo "<p>The small string appears at the start of the large string.</p>";
    } else {
        echo "<p>The small string does not appear at the start of the large string.</p>";
    }

    $replacedString = str_replace($small, $replace, $large);
    echo "<p>String after replacement: $replacedString</p>";

    $words = preg_split('/ /', $large);
    echo "<p>Words in the large string:</p>";
   
    foreach ($words as $word) {
        echo "$word<br>";
    }