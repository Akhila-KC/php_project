<?php
include 'connection.php';
//function for getting data from database

function get_all_data($con){
    //get_all_data is a userdefined function not predefined, &stored
    $get_data=mysqli_query($con,"SELECT * FROM menu_items"); //$get_data is an array execution query oneline
    
    if(mysqli_num_rows($get_data)>0){
        //$get_data here checking >0 if >0 checking next level,$get_data is array
        echo '<table class="table-responsive text-center" border="2px solid black" width="100%" height="450px" style="background-color:8b8b92 ;   border: none; margin-top: 5px; border-radius: 10px 10px 10px 10px; padding-top: 50px;">
        <tr>
            <th>Item Name</th>
            <th>Food Image</th>
            <th>Item description</th>
            <th>Item Price</th>
            <th>Action</th>
        </tr>';
        while($row=mysqli_fetch_array($get_data)){
            //row is a array 
            
        echo '<tr>
             <td>'.$row['item_name'].'</td>
             <td><img src="uploads/'.$row['item_image'].'" width="150" height="150"></td>
             <td>'.$row['item_desc'].'</td>
             <td>'.$row['item_price'].'</td>
             
             <td>
             <button class="btn btn-primary"><a style="text-decoration: none; color: white;" href="update.php?updat='.$row['id'].'">Edit</a></button>
             <button class="btn btn-danger"><a style="text-decoration: none; color: white;" href="delete.php?del='.$row['id'].'">Delete</a></button>
             </td>
             </tr>';
        }
        echo '</table>';
    }else{
        echo "<h3>No record found. Please some records.</h3>";
    }
}
?>

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
            <div class="col-lg-12 mx-auto">
              <div class="auto-form-wrapper">

                        <?php
              //calling get_all_data function
                            get_all_data($con);
                          ?>



        <!-- <form action="#">
                  <div class="form-group">
                    <label class="label">LR No</label>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="LR No">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          
                           <i class="fa fa-check-circle-o"></i>
                        </span>
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="label">Date Of Parcel Arrived</label>
                    <div class="input-group">
                      <input type="Date" class="form-control" placeholder="Date Of Parcel Arrived">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fa fa-check-circle-o"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label class="label">Name</label>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Name of Parcel">
                      <div class="input-group-append">
                        <span class="input-group-text">
                         <i class="fa fa-check-circle-o"></i>
                        </span>
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="label">Quantity</label>
                    <div class="input-group">
                      <input type="number" class="form-control" placeholder="Quantity">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fa fa-check-circle-o"></i>
                        </span>
                      </div>
                    </div>
                  </div>

                    <div class="form-group">
                    <label class="label">Payment Topay/Paid</label>
                    <div class="input-group">
                      <select class="form-control">
                        <option>Topay</option>
                        <option>Paid</option>
                      </select>
                      <div class="input-group-append">
                        <span class="input-group-text">
                         <i class="fa fa-check-circle-o"></i>
                        </span>
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="label">Amount</label>
                    <div class="input-group">
                      <input type="number" class="form-control" placeholder="Amount">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fa fa-check-circle-o"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                 

                 <div class="form-group">
                    <label class="label">Report</label>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Report">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fa fa-check-circle-o"></i>
                        </span>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <button class="btn btn-primary submit-btn btn-block">Submit</button>
                  </div>
           
                </form> -->


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