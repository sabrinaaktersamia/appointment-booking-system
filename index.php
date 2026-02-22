<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Online Appointment Booking</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Book an Appointment</h2>

<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Service:
    <select name="service">
        <option>Consultation</option>
        <option>Support</option>
        <option>Maintenance</option>
    </select><br><br>

    Date: <input type="date" name="date" required><br><br>
    Time: <input type="time" name="time" required><br><br>

    <button name="submit">Book</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    mysqli_query($conn, "INSERT INTO appointments 
        VALUES('', '$name', '$email', '$date', '$time', '$service')");
    echo "<p>Appointment booked successfully!</p>";
}
?>

</body>
</html>
