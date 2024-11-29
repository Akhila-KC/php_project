<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/style_1.css">

    <link rel="shortcut icon" href="assets/images/favicon.icon" />

  

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



  </head>
  <body>


    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +91 8086598805 </li>
          </ul>

          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                    
              </div>
            </li>

            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="index.php" data-toggle="dropdown" aria-expanded="false">

                <!-- </button> -->

                <img class="img-xs rounded-circle" src="project_images/logo_new.png" alt="Profile image">
          
                <i class="fa fa-caret-square-o-down" style="font-size:20px"></i>
              </a>
               
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">


     
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="project_images/logo_new.png" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">Justeat Restaurant</p>
                </div>
                
                <a class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>

            </li>
          </ul>
          
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <!--   <i class="mdi mdi-menu"></i> -->
            <i class="fa fa-bars"></i>

          </button>

        </div>
      </nav>
      <!-- partial -->
      <!-- Section-1 End -->



      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
      
      <!--Nav Start-->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="index.php" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="project_images/logo_new.png" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Just Eat</p>
                  <p class="designation">Restaurant</p>
                </div>
              </a>
            </li>


            <li class="nav-item nav-category">Menus</li>
            <li class="nav-item">
              <a class="nav-link" href="adminpage.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
    

       
            
            <li class="nav-item">
              <a class="nav-link" href="add_menu.php">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Add Menu</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view_menu.php">
                <i class="menu-icon typcn typcn-user-outline"></i>
                <span class="menu-title">View Menu</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view_bookseat.php">
                <i class="menu-icon typcn typcn-user-outline"></i>
                <span class="menu-title">Seat Booking</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="view_cus_query.php">
                <i class="menu-icon typcn typcn-user-outline"></i>
                <span class="menu-title">Customer Query</span>
              </a>
            </li>

            
           
          </ul>
        </nav>
        <!--Nav End--->



      
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Dashboard</h4>
                  
                </div>
              </div>


              <div class="col-md-12">
                <div class="page-header-toolbar">
                 
                  <div class="filter-wrapper">
                    <div class="dropdown toolbar-item">
                     
                      <div class="dropdown-menu" aria-labelledby="dropdownsorting">
                        <a class="dropdown-item" href="#">Last Day</a>
                        <a class="dropdown-item" href="#">Last Month</a>
                        <a class="dropdown-item" href="#">Last Year</a>
                      </div>
                    </div>
                   
                  </div>


                 
                </div>
              </div>
            </div>




            <!-- Page Title Header Ends-->
           
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  

            
                  <div class="col-md-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <h4 class="card-title mb-0">Dashboard</h4>
                          <br>           
                        </div>


      <!--Content--->
 <div class="content-wrapper d-flex align-items-center auth-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-6 mx-auto">
              <div class="auto-form-wrapper">

                <!-- <h1>Welcome to Dashboard</h1> -->



        <form action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="label">Food Name</label>
                    <div class="input-group">
                      <input type="text" name="item-name" class="form-control" placeholder="Enter food name" required>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="label">Food Image</label>
                    <div class="input-group">
                      <input type="file" name="item-image" class="form-control" placeholder="Upload image" required>
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label class="label">Food description</label>
                    <div class="input-group">
                      <textarea name="item-desc" class="form-control" placeholder="Enter Description" required></textarea>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="label">Food Price</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="item-price" placeholder="Enter Food price" required>
                    </div>
                  </div>

                    


                  <div class="form-group">
                  <input type="submit" name="btn_upload" class="btn btn-primary mx-auto d-block">
                    <center><a href="view_menu.php">click to edit </a></center>
                  </div>
           
                </form>


              </div></div></div></div>

    



<!----------------------------------->

                      </div>
                    </div>
                  </div>


                </div>
              </div>



          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © justeat restaurant 2024</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> <a href="#"></a> </span>
            </div>
          </footer>
        

         
       </div>
      </div>
    </div></div>  

  </div>


    <!-- plugins:js -->
    <script src="js/vendor.bundle.base.js"></script>
    
    <script src="js/vendor.bundle.addons.js"></script>

    <script src="js/off-canvas.js"></script>

    <script src="js/misc.js"></script>
    
    <script src="js/dashboard.js"></script>
 <!--  
    <script src="assets/js/shared/jquery.cookie.js" type="text/javascript"></script>  -->


  </body>
</html>


<?php 

$link = mysqli_connect("localhost","root","","restaurant");
if($link ===false){
    die("could not connect");
}

if(isset($_POST["btn_upload"])){
    $name=$_FILES["item-image"]["name"];
    $target_dir="uploads/";
    $extensions_arr=array("jpg","jpeg","png","gif");
    $foodname=$_POST["item-name"];
    $fooddescription=$_POST["item-desc"];
    $foodprice=$_POST["item-price"];


    $sql= "INSERT INTO menu_items(item_name,item_desc,item_price,item_image) VALUES('$foodname','$fooddescription','$foodprice','$name')";

    
    move_uploaded_file($_FILES["item-image"]["tmp_name"],"uploads/".$name);



    if(mysqli_query($link,$sql)){
        echo "<script>
        alert('Data inserted successfully');
        window.location.href='view_menu.php';
        </script>";
    }else{
        echo "Could not able to execute $sql." .mysqli_error($link);
    }

    
//close connection
    mysqli_close($link);
}
?>



