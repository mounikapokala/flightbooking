<?php
//Connecting to database ("localhost",'username','password',"database name")
$link=mysqli_connect("localhost",'root','',"flight_booking");

if(mysqli_connect_error()){
    die('Error Unable to Connect'.mysqli_connect_error());
    echo"Error";
}




?>