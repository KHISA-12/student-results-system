<?php
include 'config.php';

$result = mysqli_query($conn, "SELECT * FROM students");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
</head>
<body>
    <h2>All Students</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Reg No</th>
            <th>Name</th>
            <th>Course</th>
            <th>Year</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['reg_no']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['course']; ?></td>
                <td><?php echo $row['year']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
