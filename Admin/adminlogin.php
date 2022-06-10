<!DOCTYPE html>
<html lang="zxx">


<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Analytic</title>

    <!-- <link rel="icon" href="img/favicon.png" type="image/png"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />
    <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
    <!-- datatable CSS -->
     <!-- scrollabe  -->
     <link rel="stylesheet" href="vendors/scroll/scrollable.css" />

    <!-- menu css  -->
    <link rel="stylesheet" href="css/metisMenu.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">

    <?php 
    
    session_start();
    include 'database.php' 
    
    ?>


</head>
<body class="crm_body_bg">
    
</br></br></br>
</br></br></br>

<div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="row justify-content-center">
                            <div class="col-lg-4">
                                <!-- sign_in  -->
                                <div class="modal-content cs_modal">
                                    <div class="modal-header justify-content-center theme_bg_1">
                                        <h5 class="modal-title text_white">Admin Log-in</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST">
                                            <div class="form-group">
                                                <input type="text" name="aemail" class="form-control" placeholder="Enter your email">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="apassword" class="form-control" placeholder="Password">
                                            </div>
                                            <button type="submit" name="alogin" class="btn btn-primary btn-block">Log in</button>
                                            
                                            <div class="text-center">
                                                <a href="#" data-toggle="modal" data-target="#forgot_password" data-dismiss="modal" class="pass_forget_btn">Forget Password?</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

            
<!-- footer part -->
   
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_iner text-center">
                            <p>2020 © Influence - Designed by
                                <a href="#"> <i class="ti-heart"></i> </a><a href="#"> DashboardPack</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

  <!-- footer  -->
  <!-- jquery slim -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="js/popper.min.js"></script>
  <!-- bootstarp js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- sidebar menu  -->
  <script src="js/metisMenu.js"></script>
  
  <!-- scrollabe  -->
  <script src="vendors/scroll/perfect-scrollbar.min.js"></script>
  <script src="vendors/scroll/scrollable-custom.js"></script>
  
  <!-- custom js -->
  <script src="js/custom.js"></script>
  </body>

  <?php 
  
    if(isset($_POST['alogin']))
    {
        $email = $_POST['aemail'];
        $password = $_POST['apassword'];

        $query = "SELECT * FROM admin_login WHERE a_email = '$email' AND a_password = '$password'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        $count = mysqli_num_rows($result);

        if($count == 1)
        {
            $_SESSION['a_id'] = $row['a_id'];
           
            $_SESSION['a_email'] = $row['a_email'];
           
            echo "<script>alert('Login Successful');location.href='addarea.php'</script>";
        }
        else
        {
            echo "<script>alert('Email or Password is incorrect')</script>";
        }
    }

  ?>

  
</html>
