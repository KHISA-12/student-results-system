<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $staff_no = $_POST['staff_no'];
    $dept = $_POST['dept'];

    $sql = "INSERT INTO lecturers (staff_no, name, dept) 
            VALUES ('$staff_no', '$name', '$dept')";
    if (mysqli_query($conn, $sql)) {
        echo "Lecturer added successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Add Lecturer</title></head>
<body>
    <h2>Add Lecturer</h2>
    <form method="POST">
        Staff No: <input type="text" name="staff_no"><br><br>
        Name: <input type="text" name="name"><br><br>
        Department: <input type="text" name="dept"><br><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
