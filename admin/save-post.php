<?php
session_start();
include('includes/db.php');

if (isset($_POST['save-post'])) {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $image  = $_FILES['image'];
  $image_name=$image['name']; 
  $image_tmp_name=$image['tmp_name'];
  $destination="images/".$image_name;
  move_uploaded_file($image_tmp_name , $destination);
  $query = "INSERT INTO post(title, description,image) VALUES ('$title', '$description', '$image_name')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Post Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: viewpost.php');

}

?>