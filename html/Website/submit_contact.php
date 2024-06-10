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
$message = $_POST['message'];

// Sanitize data to prevent SQL injection
$name = mysqli_real_escape_string($conn, $name);
$email = mysqli_real_escape_string($conn, $email);
$message = mysqli_real_escape_string($conn, $message);
// SQL INSERT statement
$sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

// Execute the INSERT statement
if (mysqli_query($conn, $sql)) {
    echo " Your Message send successful";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>