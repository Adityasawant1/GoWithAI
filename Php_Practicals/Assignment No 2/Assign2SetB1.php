<?php
    $str1 = $_POST['t1'];
    $str2 = $_POST['t2'];
    $o = $_POST['o'];

    switch ($o) {
        case "ce":
            if ($str1 == $str2) {
                echo "<p>The strings are equal using == operator.</p>";
            } else {
                echo "<p>The strings are not equal using == operator.</p>";
            }
            break;

        case "cs":
            $comparison = strcmp($str1, $str2);
            if ($comparison == 0) {
                echo "<p>The strings are equal using strcmp function.</p>";
            } else if($comparison>0) {
                echo "<p>The first strings is greater using strcmp function.</p>";
            }
            else if($comparison<0){
                echo "<p>The Second strings is greater using strcmp function.</p>";
            }
            break;

        case "a":
            // $appendedString = $str1 . $str2;
            echo "<p>Appended String: </p>".$str1.$str2;
            break;

        case "r":
            $pos = $_POST['p'];
            if ($pos >= 0 && $pos <= strlen($str1)) {
                $fp = substr($str1, 0, $pos);
                $sp = substr($str1, $pos);
                $revstr = strrev($sp);
                $rstr = $fp . $revstr;
                echo "<p>String after reversing from position $pos: $rstr</p>";
            } else {
                echo "<p>Invalid position for reversing.</p>";
            }
            break;

        default:
            echo "<p>Invalid o.</p>";
    }
