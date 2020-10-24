<?php
require_once "db.config.php";
$fname = $lname = $country = $city = $email = $phone = $subject = $message ='';

$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$subject = mysqli_real_escape_string($conn, $_POST['subject']);
$message = mysqli_real_escape_string($conn, $_POST['message']);

// insert into table appointments
$sql = "INSERT INTO appointment (fname, email, phone, subject, message ) VALUES ('$fname', '$email', '$phone', '$subject', '$message')";

$result = mysqli_query($conn, $sql);

header("Location: ../index.php?appointment=success");
exit();
