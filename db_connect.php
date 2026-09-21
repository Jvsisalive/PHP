<?php
// 1. Define Database Credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_db";
// 2. Create the connection
$conn = mysqli_connect($servername, $usern
ame, $password, $dbname);
// 3. Check connection
if (!$conn) {
die("Connection failed: " . mysqli_con
nect_error());
}
echo "Connected successfully!";
?>