<?php
include 'config.php';
$result = mysqli_query($conn, "SELECT * FROM lecturers");
?>
<!DOCTYPE html>
<html>
<head><title>Lecturers</title></head>
<body>
    <h2>All Lecturers</h2>
    <table border="1" cellpadding="8">
        <tr><th>ID</th><th>Staff No</th><th>Name</th><th>Department</th></tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['staff_no'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['dept'] ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
