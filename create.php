<?php
include 'db_connect.php';

$Accessname = $_POST['Accessname'];
$password  = $_POST['password'];

$sql = "INSERT INTO ella (Accessname, password)
        VALUES ('$Accessname', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>