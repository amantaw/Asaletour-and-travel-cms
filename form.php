<?php
session_start();
include('admin/includes/db.php');

if (isset($_POST['submit'])) {
  $fname = $_POST['fname'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $query = "INSERT INTO comm(fname, email,message) VALUES ('$fname', '$email', '$message')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Message Sent Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: contact.php');

}

?>