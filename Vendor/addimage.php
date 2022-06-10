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
                                    <h3 class="m-0">Add Stall Image</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
    
                            <form method="POST" enctype="multipart/form-data">
                                
                                <div class="form-group row">
                                     <div class="col-sm-4">Image</div>
                                    <div class="col-sm-8">
                                        <div class="form-check">
                                            <input type="file" name="stall_image" class="form-control-file" id="exampleFormControlFile1">
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

$stall_id = $_GET['id'];

if(isset($_POST['submit'])){
   
    
    $path = "C:\\xampp\\htdocs\\Street\\stall_images\\";

    $target_file_0 = $path.basename($_FILES["stall_image"]["name"]);

    $stall_image = $_FILES['stall_image']['name'];
    
    move_uploaded_file($_FILES['stall_image']['tmp_name'],"C:\\xampp\\htdocs\\Street\\stall_images\\".$_FILES['stall_image']['name']);
    
    $query = "INSERT INTO stall_images(stall_id,image) VALUES('$stall_id','$stall_image')";
    $result = mysqli_query($conn,$query);
    if($result)
    {
        

        echo"  <script> swal('Success', 'Image Added Successfull! ', 'success')
            .then((value) => {location.href='addimage.php?id=$stall_id'}); </script>";
    }
    else
    {
        echo"  <script> swal('Sorry!', 'Image Not Added! ', 'error')
            .then((value) => {location.href='addimage.php?id=$stall_id'}); </script>";
    }
}


include 'abottom.php';
?>