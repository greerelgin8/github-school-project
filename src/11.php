<?php
$students = array("Alice", "Bob", "Charlie", "David", "Eve");
$grades = array(90, 75, 62, 88, 93);
foreach ($students as $student) {
    echo "$student: ";
    foreach ($grades as $grade) {
        if ($grade >= 70) {
            echo "Passed";
        } else {
            echo "Failed";
        }
    }
}
?>