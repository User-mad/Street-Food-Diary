<?php
include 'atop.php';
?>
<br>
<div class="main_content_iner overly_inner ">
        <div class="container-fluid p-0 ">
            <!-- page title  -->
            <div class="row">
              
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Add Stall Payement Services</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">  
                            <form method="POST">
                                 
                                <div class="form-group row">
                                     <div class="col-sm-4">Payement Services</div>
                                    <div class="col-sm-8">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="p_cash" value="1" >
                                            <label class="form-check-label" >Cash</label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="checkbox" class="form-check-input" name="p_scan" value="2" >
                                            <label class="form-check-label" >Scan & Pay</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>

                            </form>
                        
                        
                        </div>
                    </div>
                </div>
                 
            </div>
        </div>
    </div>
    
                
<br>
<br>


<?php

if(isset($_POST['submit']))
{
    $stall_id = $_GET['id'];
    $p_c = $_POST['p_cash'];
    $p_s = $_POST['p_scan'];
    if($p_c)
    {
        $p_cash = 1;
    }
    else
    {
        $p_cash = 0;
    }
    if($p_s)
    {
        $p_scan = 1;
    }
    else
    {
        $p_scan = 0;
    }
    $sqlcheck = "Select * from payment_service where stall_id = '$stall_id'";
    $resultcheck = mysqli_query($conn,$sqlcheck);
    if(mysqli_num_rows($resultcheck) > 0)
    {
        $sql1 = "Update payment_service set cash_service = '$p_cash', scan_pay = '$p_scan' where stall_id = '$stall_id'";
        $result1 = mysqli_query($conn,$sql1);
        echo"  <script> swal('Success!', 'Payement Services Updated', 'success');</script>";

    }
    else
    {
        $sql = "INSERT INTO `payment_service`(`stall_id`,`cash_service`,`scan_pay`) VALUES ('$stall_id','$p_cash','$p_scan')";
    $result = mysqli_query($conn,$sql);
    
    if($result){
        echo"  <script> swal('Success!', 'Payement Services Added', 'success');</script>";
    }
    else
    {
        echo"  <script> swal('Error!', 'Payement Services Not Added', 'error');</script>";
    }
    
       
    }

    
}

include 'abottom.php';
?>