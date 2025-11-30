<?php
$conn = new mysqli("localhost", "root", "", "Lab_5b");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$matric = $_GET['matric']; // get matric from URL
$sql = "SELECT * FROM users WHERE matric='$matric'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update User</title>
</head>
<body>
    <h2>Update User</h2>
    <form action="update.php" method="post">
        <input type="hidden" name="matric" value="<?php echo $row['matric']; ?>">
               <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>
        Role: 
        <select name="role">
            <option value="lecturer" <?php if($row['role']=="lecturer") echo "selected"; ?>>Lecturer</option>
            <option value="student" <?php if($row['role']=="student") echo "selected"; ?>>Student</option>
        </select><br><br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>
