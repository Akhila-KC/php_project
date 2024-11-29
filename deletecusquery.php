<?php
require 'connection.php';

if(isset($_GET['del'])){
    $userid=$_GET['del'];
    $delete_user=mysqli_query($con,"DELETE FROM `contact` WHERE id='$userid'");
    if($delete_user){
        echo "<script>
        alert('Data deleted');
        window.location.href='view_cus_query.php';
        </script>";

    }else{
        echo "oops something went wrong!";
    }
}else{
    echo "<h1>error</h1>";
}
?>