<?php
include "connection.php";
$sql="SELECT * FROM menu_items";
$result=mysqli_query($con,$sql);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    
<div class="container topmargin">
        <h3 class="head">DOSA VARIETIES</h3>
            <div class="row text-center">
                <div class="col-lg-3">

                <?php
                while($row=mysqli_fetch_array($result))
                {
                ?>

                    <div class="card zoom">
                        <img src="uploads/<?php echo $row['item_image']?>" class="card-img-top img-fluid" style="height: 200px;">
                    </div>
                    <div class="card-body welcome">
                        <center>
                            <h5 class="card-title"><?php echo $row['item_name']?></h5>
                        </center>
                            <P class="card-text"><?php echo $row['item_desc']?></P>
                            <P class="card-text"><?php echo $row['item_price']?></P>
                    </div>
                    <div class="card-footer">
                        <center>
                            <button class="btn btn-warning mx-auto d-block topmargin bottommargin"><a class="link" style="color: orangered;" href="">Order Now</a></button>
                        </center>
                    </div>
                




                <?php    
                }
                ?>
                </div>      

                

            </div>

    </div>
</body>
</html>