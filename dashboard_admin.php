<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Welcome Admin: <?php echo $_SESSION['username']; ?></h2>

    <h3>Menu</h3>
    <ul>
        <li><a href="add_student.php">Add Student</a></li>
        <li><a href="view_students.php">View Students</a></li>
        <li><a href="add_lecturer.php">Add Lecturer</a></li>
        <li><a href="view_lecturers.php">View Lecturers</a></li>
        <li><a href="add_course.php">Add Course</a></li>
        <li><a href="view_courses.php">View Courses</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>
