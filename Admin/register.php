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

    <?php include 'database.php' ?>


</head>
<body class="crm_body_bg">

    
<!--/ menu  -->
    <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_box mb_30">
                            <div class="row justify-content-center">
                                <div class="col-lg-4">
                                    <!-- sign_in  -->
                                    <div class="modal-content cs_modal">
                                        <div class="modal-header theme_bg_1 justify-content-center">
                                            <h5 class="modal-title text_white">Vendor Register</h5>
                                        </div>
                                        <div class="modal-body">
                                            <form method='POST'>
                                                <div class="form-group">
                                                    <input type="text" name="vname" class="form-control" placeholder="Username">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="vemail" class="form-control" placeholder="Email">
                                                </div>
                                                 <div class="form-group">
                                                    <input type="text" name="vcontact" class="form-control" placeholder="Contact Number">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="vpassword" class="form-control" placeholder="Password">
                                                </div>
                                               
                                                <div class="form-group">
                                                     
                                                   <select class="nice_Select" name="area">
                                                         <option selected="">Select Area</option>
                                                   <?php 
                                                    $query = 'Select * from area_table';
                                                    $result = mysqli_query($conn,$query);

                                                    while($row = mysqli_fetch_assoc($result)){
                                                        echo "<option value='".$row['aid']."'>".$row['aname']."</option>";
                                                    }
                                                   
                                                   ?>
                                                    
                                                       
                                                   </select>
                                                </div>
                                                <div class="form-group cs_check_box">
                                                    <input type="checkbox" id="check_box" class="common_checkbox">
                                                    
                                                </div>
                                                <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
                                               
                                                <p>Need an account? <a data-toggle="modal" data-target="#sing_up" data-dismiss="modal" href="login.php">Log in</a></p>
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
                                <a href="#"> <i class="ti-heart"></i> </a><a href="#"> DashboardPack</a></p>
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

    if(isset($_POST['submit'])){
        $name = $_POST['vname'];
        $email = $_POST['vemail'];
        $contact = $_POST['vcontact'];
        $password = $_POST['vpassword'];
        $area = $_POST['area'];

        $image = '';
        $status = 'active';

        $email_check = "SELECT * FROM vendor_registration WHERE vemail = '$email'";
        $result = mysqli_query($conn,$email_check);
        $row = mysqli_num_rows($result);
        if($row > 0){
            echo "<script>alert('Email already exist')</script>";
        }
        else{
            
            $sql = "INSERT INTO vendor_registration(vname,vemail,vcontact,vpassword,vimage,varea,vstatus) VALUES ('$name','$email','$contact','$password','$image','$area','$status')";
            $result = mysqli_query($conn,$sql);
            
            if($result){
                echo "<script>alert('Registration Successful');location.href='login.php'</script>";
                
            }
            else{
                echo "<script>alert('Registration Failed')</script>";
            }
        }
        
        
    }

?>

</html>