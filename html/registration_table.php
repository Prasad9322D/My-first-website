<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";/* put your database name here */

/* Create connection */
$conn = mysqli_connect($servername, $username, $password, $database);
/* Check connection */
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/* sql query to create table */
$sql = "CREATE TABLE registrationTable
(
name VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL,
course VARCHAR(255) NOT NULL
)";

if (mysqli_query($conn, $sql)) 
{
    echo "Table Registration Table created successfully";
}
 else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
