<?php
session_start();
include 'config.php';

// Get form input
$username = $_POST['username'];
$password = $_POST['password'];

// Check in database
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);

    $_SESSION['username'] = $row['username'];
    $_SESSION['role'] = $row['role'];

    // Redirect based on role
    if ($row['role'] == 'admin') {
        header("Location: dashboard_admin.php");
    } elseif ($row['role'] == 'lecturer') {
        header("Location: dashboard_lecturer.php");
    } else {
        header("Location: dashboard_student.php");
    }
} else {
    echo "Invalid username or password.";
}
?>
