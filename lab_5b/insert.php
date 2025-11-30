<?php
include("db.php");

if (isset($_POST['submit'])) {
    $matric   = $_POST['matric'];
    $name     = $_POST['name'];
    $password = $_POST['password'];
    $role     = $_POST['role'];

    $sql = "INSERT INTO users (matric, name, password, role) 
            VALUES ('$matric', '$name', '$password', '$role')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Registration successful!</p>";
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }
}
?>
