<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_POST['student_id'];
    $course_id = $_POST['course_id'];
    $marks = $_POST['marks'];

    $sql = "INSERT INTO results (student_id, course_id, marks) 
            VALUES ('$student_id', '$course_id', '$marks')";
    if (mysqli_query($conn, $sql)) {
        echo "Result added successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Add Result</title></head>
<body>
    <h2>Add Result</h2>
    <form method="POST">
        Student ID: <input type="number" name="student_id"><br><br>
        Course ID: <input type="number" name="course_id"><br><br>
        Marks: <input type="number" name="marks"><br><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
