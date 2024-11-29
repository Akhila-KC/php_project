<?php
//create connection
$con=mysqli_connect("localhost","root","","restaurant");

//check connection
if(!$con){
    die("connection failed:".mysql_connect_error());
}
?>