<?php
include 'db_connect.php';
$new_name = "Jonathan";
$student_id = 1;
// Write the UPDATE Query
$sql = "UPDATE students 
        SET first_name='$new_name' 
        WHERE id=$student_id";
if (mysqli_query($conn, $sql)) {
echo "Record updated successfully";
} else {
echo "Error updating record: " . mysql
i_error($conn);
}
?>