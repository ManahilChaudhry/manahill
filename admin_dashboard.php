<?php
session_start();
include "db.php";

if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "navbar.php"; ?>

<h2>Admin Dashboard</h2>
<a href="logout.php">Logout</a>

<table>
<tr>
    <th>ID</th>
    <th>Service</th>
    <th>Name</th>
    <th>Date</th>
    <th>Time</th>
    <th>Cost</th>
</tr>

<?php
$r = mysqli_query($conn, "SELECT * FROM bookings");
while ($row = mysqli_fetch_assoc($r)) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['service']}</td>
        <td>{$row['name']}</td>
        <td>{$row['date']}</td>
        <td>{$row['time']}</td>
        <td>{$row['cost']}</td>
    </tr>";
}
?>
</table>

</body>
</html>
