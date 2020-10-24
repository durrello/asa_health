<?php
require_once "db.config.php";
$fname = $lname = $country = $city = $email = $phone = $subject = $message ='';

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$subject = mysqli_real_escape_string($conn, $_POST['subject']);
$message = mysqli_real_escape_string($conn, $_POST['message']);

// insert into table appointments
$sql = "INSERT INTO contact (name, email, subject, message ) VALUES ('$name', '$email', '$subject', '$message')";

$result = mysqli_query($conn, $sql);

header("Location: ../index.php?contact=success");
exit();
