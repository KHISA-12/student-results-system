<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'student') {
    header("Location: login.php");
    exit();
}
echo "Welcome Student: " . $_SESSION['username'];
?>
