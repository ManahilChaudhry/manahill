<?php
$conn = mysqli_connect("localhost", "root", "", "service_booking");
if (!$conn) {
    die("Database connection failed");
}
