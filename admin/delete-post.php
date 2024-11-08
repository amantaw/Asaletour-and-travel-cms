<?php

include("includes/db1.php");

if(isset($_GET['mid'])) {
  $id = $_GET['mid'];
  $query = "DELETE FROM post WHERE mid = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'post Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: viewpost.php');
}

?>
