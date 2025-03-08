 <?php

$students = array("John", "Jane", "Bob", "Alice");

function getStudentName($index) {
    global $students;
    return $students[$index];
}

?>