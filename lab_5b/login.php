<?php
session_start();

$conn = new mysqli("localhost", "root", "", "Lab_5b");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$error = "";

if (isset($_POST['login'])) {
    $matric   = $_POST['matric'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE matric='$matric' AND password='$password'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows == 1) {
        $_SESSION['matric']   = $matric;
        $_SESSION['loggedin'] = true;   // 👈 add this line
        header("Location: display.php");
        exit();
    } else {
        $error = "Invalid username or password, try login again."; 
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login Page</h2>
    <?php if (!empty($error)) echo "<p>$error</p>"; ?>
    <form action="login.php" method="post">
        <label for="matric">Matric:</label>
        <input type="text" name="matric" id="matric" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>
        <input type="submit" name="login" value="Login">
    </form>

    <p><a href="register.html">Register</a> here if you have not.</p>
</body>
</html>
