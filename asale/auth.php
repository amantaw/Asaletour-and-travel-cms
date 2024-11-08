<?php 

//include config.php to connect to the database
	include("admin/includes/db.php"); 
	
	//start session
    session_start();
{
		// Define $myusername and $mypassword
	$magaca=$_POST['mohammedasale'];
	$furaha=$_POST['mohammedasale'];
	
	// To protect MySQL injection
	$magaca= mysqli_real_escape_string( $mysqli,$magaca);
	$furaha = mysqli_real_escape_string( $mysqli, $furaha);

    $fetch=mysqli_query( $mysqli, "select id from user where username='$magaca' and password= '$furaha'");
    $count=mysqli_num_rows($fetch);
    if($count!="")
    {
    $_SESSION['login_username']=$magaca;
	 header("location: viewpost.php");
    }
    else
    {
	   header('Location: login.php');
	}

}
?>