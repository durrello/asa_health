<?php
require_once "db.config.php";
$fname = $lname = $country = $city = $email = $phone = $subject = $message ='';

$fname = $_POST['fname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// insert into table appointments
$sql = "INSERT INTO appointment (fname, email, phone, subject, message ) VALUES ('$fname', '$email', '$phone', '$subject', '$message')";

$result = mysqli_query($conn, $sql);

header("Location: ../index.php?appointment=success");
exit();
