<?php
// Define an array of students with their names and grades
$students = [
    ["name" => "John", "grade" => 90],
    ["name" => "Alice", "grade" => 85],
    // Add more students if needed
];

// Loop through the array to get each student's name, grade, and print them out
foreach ($students as $student) {
    echo "Student: " . $student["name"] . ", Grade: " . $student["grade"] . "\n";
}
?>
