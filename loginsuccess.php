<?php
include 'connection.php';

//here user_name and pass_word is input name

$use_rname=$_REQUEST['user_name'];
$pas_sword=$_REQUEST['pass_word'];

//here username is db field name,$use_rname is upper given variable name
//here password is db field name,$pas_sword is upper given variable name

$sql ="SELECT * FROM adminid WHERE username='$use_rname' AND password='$pas_sword'";

$query=mysqli_query($con,$sql);
$check=mysqli_fetch_array($query);

if(isset($check)){
    //echo "success";
    header('location:adminpage.php');

}else{
    echo "Invalid username or password";
}

//close connection
mysqli_close($con);
?>