<?php
session_start();
if ($_SESSION['role'] != 'student') {
    die("Access denied");
}
include "config.php";

// Get student ID by username (assuming username = reg_no for students)
$username = $_SESSION['username'];
$get_student = mysqli_query($conn, "SELECT id FROM students WHERE reg_no='$username'");
$student = mysqli_fetch_assoc($get_student);

if ($student) {
    $student_id = $student['id'];
    $results = mysqli_query($conn, "SELECT * FROM results WHERE student_id='$student_id'");
} else {
    die("No student record found. Please ask admin to register you.");
}
?>

<h2>Your Results</h2>
<table border="1" cellpadding="10">
    <tr>
        <th>Unit</th>
        <th>Marks</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($results)) { ?>
        <tr>
            <td><?php echo $row['unit']; ?></td>
            <td><?php echo $row['marks']; ?></td>
        </tr>
    <?php } ?>
</table>

