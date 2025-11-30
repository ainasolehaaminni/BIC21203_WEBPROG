<?php
$conn = new mysqli("localhost", "root", "", "Lab_5b");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$matric = $_GET['matric'];

$sql = "DELETE FROM users WHERE matric='$matric'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully. <a href='display.php'>Back to Users</a>";
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
