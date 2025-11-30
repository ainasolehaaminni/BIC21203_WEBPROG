<?php
$conn = new mysqli("localhost", "root", "", "Lab_5b");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['update'])) {
    $matric   = $_POST['matric'];
    $name     = $_POST['name'];
    $password = $_POST['password'];
    $role     = $_POST['role'];

    $sql = "UPDATE users SET name='$name', password='$password', role='$role' WHERE matric='$matric'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully. <a href='display.php'>Back to Users</a>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
