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
                                    <h3 class="m-0">Add Area</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="card-body">
                               
                                <form method="POST">
                                    
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress">Area Zipcode</label>
                                       <input type="text" name="azipcode" class="form-control" maxlength="6" required placeholder="">
                                    </div>
                                </div>  
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress">Area Name</label>
                                       <input type="text" name="aname" class="form-control" required placeholder="">
                                    </div>
                                </div>          
                                    
                                    <button type="submit" name="submit" class="btn btn-primary">Add Area</button><br><br>
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

        $zipcode = $_POST['azipcode'];
        $name = $_POST['aname'];

        $area_check = "SELECT * FROM area_table WHERE a_zipcode = '$zipcode'";
        $area_check_query = mysqli_query($conn, $area_check);
        $area_check_num = mysqli_num_rows($area_check_query);

        if($area_check_num > 0)
        {
            echo "<script>alert('Area already exists')</script>";
        }
        else
        {
            $sql = "INSERT INTO `area_table`(`a_zipcode`, `aname`) VALUES ('$zipcode','$name')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "<script>alert('Area Added Successfully');</script>";
            }
            else{
                echo "<script>alert('Area Not Added');</script>";
            }
    }
}


include 'abottom.php';
?>