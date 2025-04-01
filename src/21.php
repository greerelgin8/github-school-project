<?php
    function generateRandomString($length = 16) {
        $characters = str_repeat(chr(65 + rand(0, 25)), $length);
        shuffle($characters);
        return implode('', $characters);
    }

    echo generateRandomString();
?>
