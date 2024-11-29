<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insertdata</title>
</head>
<body>
    <?php 

        $link = mysqli_connect("localhost","root","","restaurant");
        if($link ===false){
            die("could not connect");
        }
        $sql= "INSERT INTO adminid(username,password) VALUES('akhila123','admin@123')";

        if(mysqli_query($link,$sql)){
            echo "Data inserted successfully";
        }else{
            echo "Could not able to execute $sql." .mysqli_error($link);
        }

        //close connection
        mysqli_close($link)
    ?>
</body>
</html>