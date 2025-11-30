<?php
include 'sessioncheck.php';
include 'db.php';

// Connect to database
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "Lab_5b";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT matric, name, role FROM users";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Users Data</title>
</head>
<body>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Matric</th>
            <th>Name</th>
            <th>Level</th>
            <th>Action</th> <!-- 👈 One Action column -->
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['matric']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['role']; ?></td>
                    <td>
                        <a href="updateform.php?matric=<?php echo $row['matric']; ?>">Update</a> | 
                        <a href="delete.php?matric=<?php echo $row['matric']; ?>">Delete</a>
                    </td>
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='4'>No data found</td></tr>";
        }
        ?>
    </table>
</body>
</html>
