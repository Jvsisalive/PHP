<?php
include 'db_connect.php';
$student_id = 1;
// Write the DELETE Query
$sql = "DELETE FROM students 
        WHERE id=$student_id";
if (mysqli_query($conn, $sql)) {
echo "Record deleted successfully";
} else {
echo "Error deleting record: " . mysql
i_error($conn);
}
?>