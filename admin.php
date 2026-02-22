<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>

<h2>All Appointments</h2>

<table border="1">
<tr>
    <th>ID</th><th>Name</th><th>Email</th>
    <th>Service</th><th>Date</th><th>Time</th><th>Action</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM appointments");
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
    <td><?= $row['id']; ?></td>
    <td><?= $row['name']; ?></td>
    <td><?= $row['email']; ?></td>
    <td><?= $row['service']; ?></td>
    <td><?= $row['appointment_date']; ?></td>
    <td><?= $row['appointment_time']; ?></td>
    <td>
        <a href="delete.php?id=<?= $row['id']; ?>">Delete</a>
    </td>
</tr>
<?php } ?>
</table>

</body>
</html>
