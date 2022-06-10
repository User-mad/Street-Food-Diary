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
                                    <h3 class="m-0">Add Blog</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="card-body">
                               
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Blog Title</label>
                                            
                                     <input type="text" name="blogtitle" class="form-control" id="inputEmail4" placeholder="">
                                        </div>
                                        
                                    </div>
                                      <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress">Blog Description</label>
                                           <textarea class="form-control"  rows="4" name="bdescription" id="maxlength-textarea" placeholder=""></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress">Blog Image</label>
                                          <input type="file" name="blogimage"  class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                                    
                                    <button type="submit" name="submit" class="btn btn-primary">Add Blog </button>
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
        $vendorid=$_SESSION['v_id'];
        $title = $_POST['blogtitle'];
        $bdescription = $_POST['bdescription'];

        
        $blog_image = $_FILES['blogimage']['name'];
        $tmp_name = $_FILES['blogimage']['tmp_name'];
        $path = "C:/xampp/htdocs/Street/blog_images".$stall_image;
        move_uploaded_file($tmp_name,$path);

        $query = "INSERT INTO `blog`(`vendor_id`,`b_title`, `b_description`, `b_image`,`b_date`) VALUES ('$vendorid','$title','$bdescription','$blog_image',now())";
        $result = mysqli_query($conn,$query);
        if($result)
        {
            echo "<script>alert('Blog Added Successfully');</script>";
        }
        else
        {
            echo "<script>alert('Error');</script>";
        }
    }


include 'abottom.php';
?>