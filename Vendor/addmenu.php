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
                                    <h3 class="m-0">Add Menu Item</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="card-body">
                               
                                <form method="POST" enctype='multipart/form-data'>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Item Category</label>
                                            
                                            <select id="category" name="category_id" class="form-control">
        	                                    <option value="">Select Category</option>
                                             </select>
                                                                                        
                                         
                                        </div>
                                       
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Item Name</label>
                                            <select id="item"  name="item_id" class="form-control" > 
                                                <option value="">Select Item</option>
                                            </select>
                                        </div>
                                    </div>
                                    <script type="text/javascript" src="js/jquery.js"></script>
                                    <script type="text/javascript">
                                            $(document).ready(function()
                                            {
                                                function loadData(type, category_id)
                                                {
                                                    $.ajax({
                                                        url : "data.php",
                                                        type : "POST",
                                                        data: {type : type, id : category_id},
                                                        success : function(data){
                                                            if(type == "itemData"){
                                                                $("#item").html(data);
                                                            }else{
                                                                $("#category").append(data);
                                                            }
                                                            
                                                        }
                                                    });
                                                }

                                                loadData();
                                                $("#category").on("change",function(){
                                                    var category = $("#category").val();

                                                    if(category != ""){
                                                        loadData("itemData", category);
                                                    }else{
                                                        $("#item").html("");
                                                    }

                                                    
                                                })
                                            });
                                    </script>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Item Image</label>
                                            <input type="file" class="form-control-file" name="item_image">
                                        </div>
                                    </div>
                                
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Item Price</label>
                                        <input type="text" class="form-control" name="item_price" placeholder="">
                                        </div>
                                    </div>                                    
                                     
                                    <button type="submit" name="submit" class="btn btn-primary">Add Item </button><br><br>
                                    Need a new item? <a href="requestitem.php">Request Here</a>
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
    $stall_id = $_GET['id'];

    $cateory_id = $_POST['category_id'];
    $item_id = $_POST['item_id'];
    $item_price = $_POST['item_price'];

    //image upload
    $target_dir = "C:\\xampp\\htdocs\\Street\\item_images\\";
    $target_file = $target_dir.basename($_FILES["item_image"]["name"]);
    $filename = $_FILES["item_image"]["name"];
    

   
    //code to check if the menu item is already exist
    $sql_check = "SELECT * FROM menu_registration WHERE stall_id = '$stall_id' AND name_id = '$item_id'";
    $result_check = mysqli_query($conn, $sql_check);
    $row_check = mysqli_fetch_assoc($result_check);

    if($row_check > 0)
    {
        echo"  <script> swal('Error!', 'Menu Item Already Exist', 'error');</script>";
    }
    else
    {
        move_uploaded_file($_FILES["item_image"]["name"], "C:\\xampp\\htdocs\\Street\\item_images\\");

        $sql = "INSERT INTO `menu_registration`(`stall_id`,`category_id`, `name_id`, `item_image`, `item_price`) VALUES ('$stall_id','$cateory_id','$item_id','$filename','$item_price')";
        $result = mysqli_query($conn,$sql);
        if($result)
        {
            echo"  <script> swal('Success', 'Menu Item Added Successfull! ', 'success')
            .then((value) => {location.href='addmenu.php?id=$stall_id'}); </script>";
        }
        else
        {
            echo"  <script> swal('Sorry!', 'Menu Item Not Added! ', 'error')
                    .then((value) => {location.href='addmenu.php?id=$stall_id'}); </script>";
        }
    }

}

include 'abottom.php';
?>