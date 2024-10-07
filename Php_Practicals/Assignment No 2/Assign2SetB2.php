<?php
        $email = $_POST['email'];

        $parts = explode('@', $email);

        if (count($parts) != 2) {
            echo "<p>Invalid email: The @ symbol must appear exactly once.</p>";
        } 
        else 
        {
            $lp = $parts[0];
            $dp = $parts[1];

            if (!preg_match('/^[a-zA-Z][a-zA-Z0-9._-]*$/', $lp)) {
                echo "<p>Invalid email: The local part must not start with a digit, underscore, dot, or any special character.</p>";
            } 
            else 
            {
                if (!preg_match('/^([a-zA-Z0-9-]+\.){1,2}[a-zA-Z]{2,}$/', $dp)) {
                    echo "<p>Invalid email: The domain part must have at least one dot, and at most two dots after the @ symbol.</p>";
                } 
                else
                {
                    echo "<p>Valid email address.</p>";
                }
            }
        }