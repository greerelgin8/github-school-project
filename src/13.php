<?php

// Function to generate a random number between 1 and 10
function get_random_number() {
    return mt_rand(1, 10);
}

// Function to generate a random string of length $length
function get_random_string($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $string = '';
    for ($i = 0; $i < $length; $i++) {
        $string .= $characters[mt_rand(0, strlen($characters) - 1)];
    }
    return $string;
}

// Function to generate a random date between $start and $end
function get_random_date($start, $end) {
    $difference = $end->diff($start);
    $days = $difference->days + 1;
    return $start->add(new DateInterval('P' . mt_rand(0, $days) . 'D'));
}

// Function to generate a random boolean value
function get_random_boolean() {
    return (bool)mt_rand(0, 1);
}

?>