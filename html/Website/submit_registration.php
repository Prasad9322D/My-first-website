<?php
// Database connection parameters
$host = "localhost";
$user = "root";
$password = "";
$database = "test";

// Create connection
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from form submission
$name = $_POST['name'];
$email = $_POST['email'];
$course = $_POST['course'];

// Sanitize data to prevent SQL injection
$rname = mysqli_real_escape_string($conn, $name);
$email = mysqli_real_escape_string($conn, $email);
$course = mysqli_real_escape_string($conn, $course);
// SQL INSERT statement
$sql = "INSERT INTO registrationTable (name, email, course) VALUES ('$name', '$email', '$course')";

// Execute the INSERT statement
if (mysqli_query($conn, $sql)) {
    echo "Registration successful";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>