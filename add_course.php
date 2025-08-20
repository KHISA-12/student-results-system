<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $code = $_POST['code'];
    $name = $_POST['name'];
    $lecturer_id = $_POST['lecturer_id'];

    $sql = "INSERT INTO courses (code, name, lecturer_id) 
            VALUES ('$code', '$name', '$lecturer_id')";
    if (mysqli_query($conn, $sql)) {
        echo "Course added successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Add Course</title></head>
<body>
    <h2>Add Course</h2>
    <form method="POST">
        Code: <input type="text" name="code"><br><br>
        Name: <input type="text" name="name"><br><br>
        Lecturer ID: <input type="number" name="lecturer_id"><br><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
