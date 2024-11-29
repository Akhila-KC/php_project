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
    <title>menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="menu.css">
    <style type="text/css">
        .zoom{
        overflow: hidden; /*hide overflow of child element*/
    }
    .zoom img{
        transition: transform .9s ease; /*speed*/
    }
    .zoom:hover img{
        transform: scale(1.2);
    }
    .navtext:hover{
        background-color: rgb(251, 227, 122);
    }
    
    </style>
</head>
<body>

<div>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
                <center>
                    <a href="" class="d-flex d-block link">
                        <img class="img-fluid" src="project_images/logo_new.png" alt="logo" width="60px" height="50px">&nbsp;&nbsp;&nbsp;
                        <img class="img-fluid" src="project_images/resname.png" alt="logo" width="200px" height="100px">
                    </a>
                </center>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a style="color: orangered; font-family: cursive; font-size: 20px;" class="nav-link active navtext" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a style="color: orangered; font-family: cursive; font-size: 20px;" class="nav-link navtext" href="about.php">About</a>
                  </li>
                  <li class="nav-item">
                    <a style="color: orangered; font-family: cursive; font-size: 20px;" class="nav-link navtext" href="menu.php">Menu</a>
                  </li>
                  <li class="nav-item">
                    <a style="color: orangered; font-family: cursive; font-size: 20px;" class="nav-link navtext" href="contact.php">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a style="color: orangered; font-family: cursive; font-size: 20px;" class="nav-link navtext" href="login.php">Login</a>
                  </li>

                  
                </ul>
                
              </div>
            </div>
        </nav>
    </div>



    <div class="container-fluid trynew"><br><br><br><br><br><br><br><br><br><br><br>
        <h1 class="head">"Wanna Try Something New Today"</h1><br><br><br>
        <h1 class="head">"Go through it!!!"</h1><br><br><br>
    </div>



    

  

    <div class="container topmargin text-center">
        <h3 class="head">OUR MENU</h3>
            <div class="row text-center">
                <div class="col-lg-4">

                </div>
                <div class="col-lg-4">

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
                            <P class="card-text">Price:<?php echo $row['item_price']?></P>
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
                <div class="col-lg-4">

                </div>     

                

            </div>

    </div>


  



    <div class="container-fluid footer">
        <div class="row">
            <div class="col-lg-3">
              <h5 class="text-center topmargin">RESTAURANT</h5><br><br>
              A restaurant is a business that prepares and serves food and drinks to customers.Meals are generally served and eaten on the premises, but many restaurants also offer take-out and food delivery services. <br>
              
            </div>
            <div class="col-lg-3" style="text-align: center;">
              <h6 class="topmargin">QUICK LINKS</h6><br>
              <a class="link footerlink" href="index.html">>Home</a> <br><br>
              <a class="link footerlink" href="about.html">>About</a><br><br>
              <a class="link footerlink" href="menu.html">>Menu</a><br><br>
              <a class="link footerlink" href="contact.html">>Contact</a>
            </div>
            <div class="col-lg-3" style="text-align: center;">
              <h6 class="topmargin">QUICK LINKS</h6><br>
              <a class="link footerlink" href="">>Home Delivery</a> <br><br>
              <a class="link footerlink" href="">>Best Food Prices</a><br><br>
              <a class="link footerlink" href="">>Quickly Suppy</a><br><br>
              <a class="link footerlink" href="">>Online Ordering</a>
            </div>
            <div class="col-lg-3" style="text-align: center;">
                <h6 class="topmargin">CONTACT US</h6>
                Rajiv Gandhi Bypass, First floor, <br>
                Town plasa <br>
                Karuvambram, Manjeri, 676121 <br><br>
                phone:7611888444, 9749888333 <br><br>
                mail:frsamjri@gmail.com <br><br><br>
                <i class="fa fa-facebook rounded-circle"></i>&nbsp;&nbsp;
                <i class="fa fa-instagram rounded-circle"></i>&nbsp;&nbsp;
                <i class="fa fa-youtube-play rounded-circle"></i>&nbsp;&nbsp;
                <i class="fa fa-whatsapp rounded-circle"></i>
            </div>
        </div>
        <div class="row topmargin">
            <div class="col-lg">
                <p class="text-center">@2023Restaurants.AllRightsReserved</p>
            </div>
        </div>
    </div>


</body>
</html>
