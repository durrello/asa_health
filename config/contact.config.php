<?php
require_once "db.config.php";
$fname = $lname = $country = $city = $email = $phone = $subject = $message ='';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// insert into table appointments
$sql = "INSERT INTO contact (name, email, subject, message ) VALUES ('$name', '$email', '$subject', '$message')";

$result = mysqli_query($conn, $sql);

header("Location: ../index.php?contact=success");
exit();
