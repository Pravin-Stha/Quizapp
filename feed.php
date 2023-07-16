<?php
include_once 'dbConnection.php';

$ref = @$_GET['q'];
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$subject = mysqli_real_escape_string($con, $_POST['subject']);
$id = uniqid();
$date = date("Y-m-d");
$time = date("h:i:sa");
$feedback = mysqli_real_escape_string($con, $_POST['feedback']);

$query = "INSERT INTO feedback (id, name, email, subject, feedback, date, time) VALUES ('$id', '$name', '$email', '$subject', '$feedback', '$date', '$time')";

$result = mysqli_query($con, $query);

if ($result) {
    header("Location: $ref?q=Thank you for your valuable feedback");
} else {
    die("Error: " . mysqli_error($con));
}
?>
