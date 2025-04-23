<?php
// Set up your database credentials here
$servername = "localhost";
$username = "root"; // or replace with your MySQL username
$password = ""; // or replace with your MySQL password

// Create a connection to the database
$conn = new mysqli($servername, $username, $password);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["username"] . "</td><td>" . $row["password"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No users found.";
}

$conn->close();
?>
