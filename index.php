<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="index.css">


    
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


    
        <!-- Carousel Wrapper -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      
            <!-- Indicators -->
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            
            <!-- Carousel Slides -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="project_images/image3.jpg" class="d-block w-100 img-fluid" alt="Slide 1">
                <div class="carousel-caption">
                  <h3 class="centered" style="color: orangered">“A restaurant is a fantasy—a kind of living fantasy in which diners are the most important members of the cast.”</h3>
                </div>
              </div>
              <div class="carousel-item">
                <img src="project_images/image2.jpg" class="d-block w-100 img-fluid" alt="Slide 2">
                <div class="carousel-caption">
                  <h3 style="color: orangered">“Eating is a necessity, but cooking is an art.”</h3>
                </div>
              </div>
              <div class="carousel-item">
                <img src="project_images/image1.jpg" class="d-block w-100 img-fluid" alt="Slide 3">
                <div class="carousel-caption">
                  <h3 style="color: orangered">“There is no love sincerer than the love of food.”</h3>
                </div>
              </div>
            </div>
            
            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
    </div>
   
    




    <div class="container-fluid topmargin">
        <div class="row">
            <div class="col-lg-6 margin zoom">
                <img style="border-radius: 40px 40px 40px 40px; box-shadow: 20px 20px 20px;" class="img-fluid mx-auto d-block bottommargin topmargin" src="project_images/serve.jpeg" alt="img_error" width="500px">
            </div>
            <div class="col-lg-6">
                <h4 class="head">WELCOME TO RESTAURANT</h4><br>
                <p class="welcome">A restaurant is a business that prepares and serves food and drinks to customers. Meals are generally served and eaten on the premises, but many restaurants also offer take-out and food delivery services. Restaurants vary greatly in appearance and offerings, including a wide variety of cuisines and service models ranging from inexpensive fast-food restaurants and cafeterias to mid-priced family restaurants, to high-priced luxury establishments.
                Early eating establishments recognizable as restaurants in the modern sense emerged in Song dynasty China during the 11th and 12th centuries. In large cities, such as Kaifeng and Hangzhou, food catering establishments catered to merchants who travelled between cities. Probably growing out of tea houses and taverns which catered to travellers, Kaifeng's restaurants blossomed into an industry that catered to locals as well as people from other regions of China.</p> <br> 
                <button class="btn btn-warning mx-auto d-block"><a class="link" style="color: orangered;" href="">Read More</a></button>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row welcome">
            
            <h3 class="topmargin head">Our Master Chefs</h3> <br>
            <div class="col-lg-3">
                <div class="card zoom topmargin">
                    <img src="project_images/chef1.png" height="200px" width="200px" class="rounded-circle mx-auto d-block">
                </div>
                <div class="card-body">
                    <center>
                        <h5 class="card-title topmargin">MARTIN</h5>
                    </center><br/>
                    <p class="card-text">Most famous chef in the world. The ultra-famous and TV personality is well-known celebrity chef.</p><br>
                </div>
                <div class="card-footer"><br>
                    <center>
                        <button class="btn btn-warning"><a class="link" style="color: orangered;" href="">View profile</a></button>
                    </center>
                </div>
            </div>
            <div class="col-lg-3 hovers">
                <div class="card zoom topmargin">
                    <img src="project_images/chef2.webp" height="200px" width="200px" class=" rounded-circle mx-auto d-block image">
                </div>
                <div class="card-body">
                    <center>
                        <h5 class="card-title topmargin">SANJEEV KAPOOR</h5>
                    </center><br/>
                    <p class="card-text">Most famous chef in the world. The ultra-famous and TV personality is well-known celebrity chef.</p><br>
                </div>
                <div class="card-footer"><br>
                    <center>
                        <button class="btn btn-warning"><a class="link" style="color: orangered;" href="">View profile</a></button>
                    </center>
                </div>
            </div>
            <div class="col-lg-3 hovers">
                <div class="card zoom topmargin">
                    <img src="project_images/chef3.png" height="200px" width="200px" class="rounded-circle mx-auto d-block image">
                </div>
                <div class="card-body">
                    <center>
                        <h5 class="card-title topmargin">VINAY KUMAR</h5>
                    </center><br/>
                    <p class="card-text">Most famous chef in the world. The ultra-famous and TV personality is well-known celebrity chef.</p><br>
                </div>
                <div class="card-footer"><br>
                    <center>
                        <button class="btn btn-warning"><a class="link" style="color: orangered;" href="">View profile</a></button>
                    </center>
                </div>
            </div>
            <div class="col-lg-3 hovers">
                <div class="card zoom topmargin">
                    <img src="project_images/chef4.png" height="200px" width="200px" class="rounded-circle mx-auto d-block image">
                </div>
                <div class="card-body">
                    <center>
                        <h5 class="card-title topmargin">RAVINDER BOGAL</h5>
                    </center><br/>
                    <p class="card-text">Most famous chef in the world. The ultra-famous and TV personality is well-known celebrity chef.</p><br>
                </div>
                <div class="card-footer"><br>
                    <center>
                        <button class="btn btn-warning"><a class="link" style="color: orangered;" href="">View profile</a></button>
                    </center><br>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row topmargin">
            <div class="col-lg-3">
                <div class="zoom bottommargin">
                    <img src="project_images/food1.jpg" class="img-fluid mx-auto d-block" style="height: 200px; width: 250px;">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="zoom bottommargin">
                    <img src="project_images/food2.jpg" class="img-fluid mx-auto d-block" style="height: 200px; width: 250px;">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="zoom bottommargin">
                    <img src="project_images/food3.jpg" class="img-fluid mx-auto d-block" style="height: 200px; width: 250px;">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="zoom bottommargin">
                    <img src="project_images/food4.jpg" class="img-fluid mx-auto d-block" style="height: 200px; width: 250px;">
                </div>
            </div>
        </div>

        

        <div class="row">
                <div class="col-lg-3">
                    <div class="zoom bottommargin">
                        <img src="project_images/food5.jpg" class="img-fluid mx-auto d-block" style="height: 200px; width: 250px;">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="zoom bottommargin">
                        <img src="project_images/food6.jpg" class="img-fluid mx-auto d-block" style="height: 200px; width: 250px;">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="zoom bottommargin">
                        <img src="project_images/food7.jpg" class="img-fluid mx-auto d-block" style="height: 200px; width: 250px;">
                    </div>
                </div>
                <div class="col-lg-3 bottommargin">
                    <div class="zoom">
                        <img src="project_images/food8.jpg" class="img-fluid mx-auto d-block" style="height: 200px; width: 250px;">
                    </div>
                </div>
        </div>

    </div>





    <div class="container-fluid topmargin">
        <div class="row welcome">
            <h4 class="our_services head">OUR SERVICES</h4>
            <div class="col-lg-3">
                <div class="card">
                    <div class="zoom topmargin">
                        <center><img src="project_images/master_chef.png" class="mx-auto d-block img-fluid" style="height: 100px; width: 100px;"></center>
                    </div>
                </div>
                <div class="card-body">
                    <center>
                        <h5 class="card-title topmargin">MASTER CHEFS</h5>
                    </center><br>
                    <P class="card-text text-center">Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita ameta diam</P>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="zoom topmargin">
                        <center><img src="project_images/qualiyty_food.png" class="mx-auto d-block img-fluid" style="height: 100px; width: 100px;"></center>
                    </div>
                </div>
                <div class="card-body">
                    <center>
                        <h5 class="card-title topmargin">QUALITY FOOD</h5>
                    </center><br>
                    <P class="card-text text-center">Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita ameta diam</P>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="zoom topmargin">
                        <center><img src="project_images/online_order.webp" class="mx-auto d-block img-fluid" style="height: 100px; width: 100px;"></center>
                    </div>
                </div>
                <div class="card-body">
                    <center>
                        <h5 class="card-title topmargin">ONLINE ORDER</h5>
                    </center><br>
                    <P class="card-text text-center">Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita ameta diam</P>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="zoom topmargin">
                        <center><img src="project_images/247_service" class="mx-auto d-block img-fluid" style="height: 100px; width: 100px;"></center>
                    </div>
                </div>
                <div class="card-body">
                    <center>
                        <h5 class="card-title topmargin">24/7 SERVICES</h5>
                    </center><br>
                    <P class="card-text text-center">Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita ameta diam</P>
                </div>
            </div>
    
        </div>
    </div>


    <div class="container-fluid topmargin" style=" padding-bottom: 40px;">

        <div class="container" style="padding-top: 50px;">
        
            <div class="row welcome">

                    <div class="col-lg-6">
                        <img src="project_images/customerreview.png" alt="" height="150px" width="300px">
                        <h1 class="topmargin" style="color: orangered;"><b>Hear from our Customers</b></h1><br>
                        <p style="text-align: center; color: rgb(9, 9, 9);">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <button type="submit" class="btn btn-warning mx-auto d-block bottommargin"><a class="link" style="color: orangered" href="">Read more</a></button>
                    </div>

                    <div class="col-lg-6">
                        <div class="container">
                            
                            <div class="row">
                                <div class="" style="border-radius: 20px 0px 20px 0px;  box-shadow: 0px 20px 30px #24242466; ">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. <br>
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <img src="project_images/cus1.jfif" class="rounded-circle" alt="image error" height="50px" width="50px">
                                        </div>
                                        <div class="col-lg-11">
                                            <h6 style="color: orangered;"><br>--MARIA LOPUS</h6>
                                        </div>
                                    </div>
                                </div>
                            </div><br> <br>
                            <div class="row">
                                <div class="" style="border-radius: 20px 0px 20px 0px;  box-shadow: 0px 20px 30px #24242466; ">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. <br>
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <img src="project_images/cus2.jpg" class="rounded-circle" alt="image error" height="50px" width="50px">
                                        </div>
                                        <div class="col-lg-11">
                                            <h6 style="color: orangered;"><br>--ALEXANDRA FERNANDUS</h6>
                                        </div>
                                    </div>
                                </div>
                            </div><br><br>
                            <div class="row">
                                <div class="" style=" border-radius: 20px 0px 20px 0px;  box-shadow: 0px 20px 30px #24242466; ">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. <br>
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <img src="project_images/cus3.jpeg" class="rounded-circle" alt="image error" height="50px" width="50px">
                                        </div>
                                        <div class="col-lg-11">
                                            <h6 style="color: orangered;"><br>--FREDRIC WILSON</h6>
                                        </div>
                                    </div>
                                </div>
                            </div><br><br>

                        </div>
                        
                    </div>
            
            </div>

        </div>

    </div>

    <div class='container-fluid'>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 zoom">
                    <img class="img-fluid mx-auto d-block topmargin" src="project_images/bookseat.jpg" alt="img_error" width="400px" height='200px' style="border-radius: 40px 40px 40px 40px; box-shadow: 20px 20px 20px;"/>
                </div>

                <div class="col-lg-6">
                    <div class="container">
                        <h2 class="bookseat head topmargin">Book Your Seats!!!</h2>
                        <form class="topmargin bottommargin form-control" action="bookseat_database.php" method="post" style= "background-color: rgb(251, 227, 122); box-shadow: 20px 20px 20px; border: none; margin-top: 5px; border-radius: 20px 20px 20px 20px;">
                                <div class="form-group">
                                        <label class="label">Name</label>
                                        <div class="input-group">
                                        <input type="text" name="name" class="form-control" placeholder="Enter name" required>
                                        </div>
                                </div>

                                    <div class="form-group">
                                        <label class="label">Email</label>
                                        <div class="input-group">
                                        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="label">Mobile</label>
                                        <div class="input-group">
                                        <input type="phone" name="phone" class="form-control" placeholder="Enter mobile number" required>
                                        </div>
                                    </div>

                                    

                                        


                                    <div class="form-group topmargin">
                                    <input class="btn btn-warning mx-auto d-block" type="submit" name="submit">
                                    </div>
           
                        </form>
                    </div>  
                </div>
            </div>
        </div>
    </div>

    






    
    <div class="container">
        <div class="row topmargin">
            <div class="col-lg-3">
                <div class="zoom bottommargin">
                    <img src="project_images/customer1.jpeg" class="img-fluid mx-auto d-block" style="height: 200px; width: 250px;">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="zoom bottommargin">
                    <img src="project_images/customer2.png" class="img-fluid mx-auto d-block" style="height: 200px; width: 250px;">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="zoom bottommargin">
                    <img src="project_images/customer3.jpg" class="img-fluid mx-auto d-block" style="height: 200px; width: 250px;">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="zoom bottommargin">
                    <img src="project_images/customer4.webp" class="img-fluid mx-auto d-block" style="height: 200px; width: 250px;">
                </div>
            </div>
        </div>

        

        <div class="row">
                <div class="col-lg-3">
                    <div class="zoom bottommargin">
                        <img src="project_images/customer5.jpg" class="img-fluid mx-auto d-block" style="height: 200px; width: 250px;">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="zoom bottommargin">
                        <img src="project_images/customer6.avif" class="img-fluid mx-auto d-block" style="height: 200px; width: 250px;">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="zoom bottommargin">
                        <img src="project_images/customer7.avif" class="img-fluid mx-auto d-block" style="height: 200px; width: 250px;">
                    </div>
                </div>
                <div class="col-lg-3 bottommargin">
                    <div class="zoom">
                        <img src="project_images/customer8.jpg" class="img-fluid mx-auto d-block" style="height: 200px; width: 250px;">
                    </div>
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
              <a class="link footerlink" href="index.php">>Home</a> <br><br>
              <a class="link footerlink" href="about.php">>About</a><br><br>
              <a class="link footerlink" href="menu.php">>Menu</a><br><br>
              <a class="link footerlink" href="contact.php">>Contact</a>
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