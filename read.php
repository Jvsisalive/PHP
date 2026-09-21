<?php
include 'db_connect.php';
$sql = "SELECT id, first_name, last_name 
FROM students";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// Loop through each row of data
while($row = mysqli_fetch_assoc($resul
t)) {
echo "ID: " . $row["id"] . " - 
Name: " . 
$row["first_name"] . "<br>";
    }
} else {
echo "0 results found";
}
?>