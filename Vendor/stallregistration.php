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
                                    <h3 class="m-0">Stall Registration</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="card-body">
                               
                                <form method="POST">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Stall Name</label>
                                            <input type="text" name="stall_name" class="form-control" placeholder="">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Stall Category</label>
                                     
                                            <select class="form-control" name="stall_category">
                                                <option selected="">Select Category</option>
                                                   <?php 
                                                    $query = 'Select * from stall_category_table';
                                                    $result = mysqli_query($conn,$query);

                                                    while($row = mysqli_fetch_assoc($result))
                                                    {
                                                        echo "<option value='".$row['category_id']."'>".$row['category_name']."</option>";
                                                    }
                                                   
                                                   ?>
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Stall Description</label>
                                           <textarea class="form-control"  rows="4" name="stall_description"  placeholder=""></textarea>
                                    </div>
                                    <div class="form-row">

                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Stall Address Line 1</label>
                                            <input type="text" class="form-control" name="address_line_1" placeholder="Address line1">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Stall Address Line 2</label>
                                            <input type="text" class="form-control" name="address_line_2" placeholder="Address line2">
                                        </div>
                                    
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Stall Address Line 3</label>
                                            <input type="text" class="form-control" name="address_line_3" placeholder="Address line3">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Stall Address Area</label>

                                                <select name="area_id" class="form-control">
                                                    <option selected="">Select Area</option>
                                                    <?php 
                                                        $query = 'Select * from area_table';
                                                        $result = mysqli_query($conn,$query);

                                                        while($row = mysqli_fetch_assoc($result))
                                                        {
                                                            echo "<option value='".$row['aid']."'>".$row['aname']."</option>";
                                                        }
                                                    
                                                    ?>
                                                </select>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Opening Time</label>
                                        
                                        <input type="time" class="form-control" name="opening_time" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputState">Closing Time</label>
                                            
                                            <input type="time" class="form-control" name="closing_time" >
                                        </div>
                                    </div>                               
                                    <button type="submit" name="submit" class="btn btn-primary">Register </button>
                                </form>
                            </div>
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




    $stall_name = $_POST['stall_name'];
    $stall_category = $_POST['stall_category'];
    $stall_description = $_POST['stall_description'];
    $address_line_1 = $_POST['address_line_1'];
    $address_line_2 = $_POST['address_line_2'];
    $address_line_3 = $_POST['address_line_3'];
    $opening_time = $_POST['opening_time'];
    $closing_time = $_POST['closing_time'];
    $area_id = $_POST['area_id'];
    $user_id = $_SESSION['v_id'];
    $query = "INSERT INTO stall_registration (vendor_id,stall_name,description,opening_time,closing_time,registration_date,status,address_line_1,address_line_2,address_line_3,area_id,stall_category_id) VALUES ('$user_id','$stall_name','$stall_description','$opening_time','$closing_time',NOW(),'1','$address_line_1','$address_line_2','$address_line_3','$area_id','$stall_category')";
    $result = mysqli_query($conn,$query);
    if($result)
    {
        echo"  <script> swal('Success!', 'Stall Register Successfully', 'success')
            .then((value) => {location.href='stallregistration.php'}); </script>";
    }
    else
    {
        echo"  <script> swal('Sorry!', 'Something Went Wrong', 'error')
            .then((value) => {location.href='stallregistration.php'}); </script>";
    }
}


include 'abottom.php';
?>