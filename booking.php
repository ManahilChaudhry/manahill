<?php
$service = $_GET['service'] ?? '';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Book Service</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "navbar.php"; ?>

<form action="save_booking.php" method="POST">
    <h2>Book <?php echo htmlspecialchars($service); ?> Service</h2>
    <input type="hidden" name="service" value="<?php echo $service; ?>">

    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="phone" placeholder="Phone" required>
    <textarea name="address" placeholder="Address" required></textarea>
<?php
$service = $_GET['service'] ?? '';

$subservices = [
    "Home" => ["Cleaning", "Plumbing", "Electrical", "Painting"],
    "Appliance" => ["AC Repair", "Refrigerator Repair", "Washing Machine Repair", "Microwave Repair"],
    "Vehicle" => ["Car Servicing", "Bike Maintenance", "Oil Change"],
    "Beauty" => ["Haircut", "Makeup", "Skincare"],
    "IT" => ["Laptop Repair", "PC Setup", "Mobile Repair", "Networking"]
];

$service_subservices = $subservices[$service] ?? [];
?>

  <select name="subservice" required>
    <option value="">Select Sub-Service</option>
    <?php foreach($service_subservices as $sub) {
        echo "<option>$sub</option>";
    } ?>
</select>

    <input type="date" name="date"
        min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" required>

    <input type="time" name="time" required>

    <button type="submit">Book Now</button>
</form>

</body>
</html>
