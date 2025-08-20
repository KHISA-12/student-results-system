<?php
include 'config.php';
$result = mysqli_query($conn, "SELECT * FROM courses");
?>
<!DOCTYPE html>
<html>
<head><title>Courses</title></head>
<body>
    <h2>All Courses</h2>
    <table border="1" cellpadding="8">
        <tr><th>ID</th><th>Code</th><th>Name</th><th>Lecturer ID</th></tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['code'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['lecturer_id'] ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
