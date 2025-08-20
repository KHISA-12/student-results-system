<?php
include 'config.php';
$result = mysqli_query($conn, "SELECT * FROM results");
?>
<!DOCTYPE html>
<html>
<head><title>Results</title></head>
<body>
    <h2>All Results</h2>
    <table border="1" cellpadding="8">
        <tr><th>ID</th><th>Student ID</th><th>Course ID</th><th>Marks</th></tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['student_id'] ?></td>
            <td><?= $row['course_id'] ?></td>
            <td><?= $row['marks'] ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
