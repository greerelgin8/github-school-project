
<?php

// Connect to the database
$conn = mysqli_connect("localhost", "username", "password", "database");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the input from the user
$input = $_POST["input"];

// Query the database for a result based on the input
$result = mysqli_query($conn, "SELECT * FROM users WHERE username='" . $input . "'");

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
    // Print the result
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["username"] . "\n";
    }
} else {
    echo "No results found.";
}

// Close the database connection
mysqli_close($conn);
?>