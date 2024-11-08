<?php
ob_start();

$db['db_host'] = "localhost:3307";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "ast";

foreach($db as $key => $value){
    define(strtoupper($key),$value);
}

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

?>