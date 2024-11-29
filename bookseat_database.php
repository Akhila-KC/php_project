<?php 

        $link = mysqli_connect("localhost","root","","restaurant");
        if($link ===false){
            die("could not connect");
        }

        $a=$_POST["name"];
        $b=$_POST["email"];
        $c=$_POST["phone"];


        $sql= "INSERT INTO bookseat(customer_name,customer_email,customer_phone) VALUES('$a','$b','$c')";

        if(mysqli_query($link,$sql)){
            echo "<script>
        alert('Your seat is now booked');
        window.location.href='index.php';
        </script>";
            
        }else{
            echo "Could not able to execute $sql." .mysqli_error($link);
        }

        //close connection
        mysqli_close($link)
?>