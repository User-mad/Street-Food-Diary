<!DOCTYPE html>
<html lang="zxx">


<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Vendor Site</title>

    <link rel="icon" href="img/mini_logo.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />
    <!-- gijgo css -->
    <link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

    <!-- date picker -->
     <link rel="stylesheet" href="vendors/datepicker/date-picker.css" />

     <link rel="stylesheet" href="vendors/vectormap-home/vectormap-2.0.2.css" />
     
     <!-- scrollabe  -->
     <link rel="stylesheet" href="vendors/scroll/scrollable.css" />
    <!-- datatable CSS -->
    <link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />
    <!-- text editor css -->
    <link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />
    <!-- morris css -->
    <link rel="stylesheet" href="vendors/morris/morris.css">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

    <!-- menu css  -->
    <link rel="stylesheet" href="css/metisMenu.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">

    <script type="text/javascript" src="js/jquery.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
    <?php
        session_start();
        include 'database.php';
        if(!isset($_SESSION['v_id'])){
            header("location:vendorlogin.php");
        }
        $vid = $_SESSION['v_id'];
        $sql = "SELECT * FROM `vendor_registration` WHERE `vid` = '$vid'";
        $result = mysqli_query($conn, $sql);
        $r = mysqli_fetch_array($result);
        $vname = $r['vname'];

    ?>

</head>
<body class="crm_body_bg">
    


<!-- main content part here -->
 
 <!-- sidebar  -->
<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a class="large_logo" href="index.html"></a>
        <a class="small_logo" href="index.html"></a>
        <br>
        <br>

        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
       
        <h4 class="menu-text"><span>STALL</span> <i class="fas fa-ellipsis-h"></i> </h4>
        <li>
            <a href="vmanagestall.php" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="img/menu-icon/3.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Manage Stall </span>
                </div>
            </a>
        </li>
        
        <li>
            <a href="stallregistration.php" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="img/menu-icon/2.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Register Stall </span>
                </div>
            </a>
        </li>
       
       <li class="">
             <a href="detailstall.php" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="img/menu-icon/5.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>View Menu</span>
                </div>
            </a>
            
        </li>
        <li class="">
             <a href="viewreview.php" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="img/menu-icon/5.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>View Reviews </span>
                </div>
            </a>
            
        </li>
        <h4 class="menu-text"><span>MANAGE BLOGS</span> <i class="fas fa-ellipsis-h"></i> </h4>

        <li>
            <a href="addblog.php" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="img/menu-icon/3.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Add Blog </span>
                </div>
            </a>
        </li>
        
        <li class="">
             <a href="viewblog.php" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="img/menu-icon/5.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>View Blog </span>
                </div>
            </a>
            
        </li>
        
      </ul>
</nav>
 <!--/ sidebar  -->


<section class="main_content dashboard_part large_header_bg">
        <!-- menu  -->
    <div class="container-fluid no-gutters">
        <div class="row">
            <div class="col-lg-12 p-0 ">
                <div class="header_iner d-flex justify-content-between align-items-center">
                    <div class="sidebar_icon d-lg-none">
                        <i class="ti-menu"></i>
                    </div>
                    <label class="switch_toggle d-none d-lg-block" for="checkbox">
                      
                       
                    </label>

                    <div class="header_right d-flex justify-content-between align-items-center">
                        <div class="header_notification_warp d-flex align-items-center">
                            
                        </div>
                        <div class="profile_info">
                            <img src="img/client_img.png" alt="#">
                            <div class="profile_info_iner">
                                <div class="profile_author_name">
                                    <p>Vendor </p>
                                    <h5><?php 
                                    echo $vname;
                                    ?></h5>
                                </div>
                                <div class="profile_info_details">
                                    <a href="#">My Profile </a>
                                    
                                    <a href="logout.php">Log Out </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>