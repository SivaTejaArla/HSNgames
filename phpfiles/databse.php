<?php
$db_server="localhost";
$db_username="root";
$db_password="";
$db_name="usercredentials";




$connect=mysqli_connect($db_server,
$db_username,
$db_password,
$db_name,
);
if($connect){

    echo "Connected";
}


?>
