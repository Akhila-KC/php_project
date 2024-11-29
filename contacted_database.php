<?php 

        $link = mysqli_connect("localhost","root","","restaurant");
        if($link ===false){
            die("could not connect");
        }

        $a=$_POST["name"];
        $d=$_POST["query"];
        $b=$_POST["email"];
        $c=$_POST["phone"];


        $sql= "INSERT INTO contact(cus_name,cus_query,cus_email,cus_phone) VALUES('$a','$d','$b','$c')";

        if(mysqli_query($link,$sql)){
            echo "<script>
        alert('Thankyou for your valuable time! We will respond to your query soon!!');
        window.location.href='contact.php';
        </script>";
        }else{
            echo "Could not able to execute $sql." .mysqli_error($link);
        }

        //close connection
        mysqli_close($link)
?>