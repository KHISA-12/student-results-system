<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'lecturer') {
    header("Location: login.php");
    exit();
}
echo "Welcome Lecturer: " . $_SESSION['username'];
?>
