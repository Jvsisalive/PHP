<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>ella</title>
</head>
<body>
<?php
include 'db_connect.php';  
?>

<div class="m-10">
    <h1 class="text-2x1 front-bold mb-4">My First PHP page</h1>
<form action="create.php" method="post">
    <input type="text" name="Accessname" >
    <input type="password" name="password" >

    <input type="submit" value="submit" class="border bg-blue-500 text-white px-4 py-2 rounded-sm hover">
</form>
</div>
<div class="mb-4">
<?php
if (isset($_GET['created']) && $_GET ['created'] == 1){
    echo '<p class="text-green-500 mb-4">Record created successfully!</p>';
} else if (isset($_GET['created']) && $_GET ['created'] == 0) {
    echo '<p class="text-green-500 mb-4"> Error creating record.</p>';
    };
?>
</div>
<div class="m-10">
    <table class="table-auto border-collapse border border-grey-300">
        <tr class="bg-grey-200">
            <th class="border-gray-300 px-4 py-2">id</th>
            <th class="border-gray-300 px-4 py-2">Accessname</th>
            <th class="border-gray-300 px-4 py-2">password</th>
            <th class="border-gray-300 px-4 py-2">Action</th>
</tr>

</div>
<div>
<?php
$sql = "SELECT * FROM ella";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Loop through each row of data
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . " - Name: " . $row["Accessname"] . "<br>";
    }
} else {
    echo "0 results found";
}
?>
</div>
</body>
</html>
