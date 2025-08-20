<?php
session_start();
if ($_SESSION['role'] != 'lecturer') {
    die("Access denied");
}
include "config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_POST['student_id'];
    $unit = $_POST['unit'];
    $marks = $_POST['marks'];

    $sql = "INSERT INTO results (student_id, unit, marks) VALUES ('$student_id', '$unit', '$marks')";
    if (mysqli_query($conn, $sql)) {
        echo "Result added successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<h2>Enter Student Results</h2>
<form method="POST">
    <label>Student ID:</label>
    <input type="number" name="student_id" required><br>
    <label>Unit:</label>
    <input type="text" name="unit" required><br>
    <label>Marks:</label>
    <input type="number" name="marks" required><br>
    <input type="submit" value="Save Result">
</form>
