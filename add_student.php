<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reg_no = $_POST['reg_no'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $year = $_POST['year'];

    $sql = "INSERT INTO students (reg_no, name, course, year) 
            VALUES ('$reg_no', '$name', '$course', '$year')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Student added successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>
    <h2>Add Student</h2>
    <form method="POST">
        <label>Reg No:</label><input type="text" name="reg_no" required><br><br>
        <label>Name:</label><input type="text" name="name" required><br><br>
        <label>Course:</label><input type="text" name="course" required><br><br>
        <label>Year:</label><input type="number" name="year" required><br><br>
        <button type="submit">Add Student</button>
    </form>
</body>
</html>
