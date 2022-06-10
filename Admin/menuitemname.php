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
                               
                                <form method="POST">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Item Name</label>
                                            <input type="text" name="item_name" class="form-control" id="inputEmail4" placeholder="">
                                    
                                        </div>
                                        
                                    </div>
                                    
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress">Item Description</label>
                                        <textarea class="form-control" rows="5" name="item_description" id="maxlength-textarea" placeholder=""></textarea>
                                    
                                    </div>
                                </div>    
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress">Item Category</label>
                                        
                                        <select class="form-control" name="item_category">
                                                         
                                            <option selected="">Select Category</option>
                                                   
                                                   <?php 
                                                    $query = 'Select * from menu_item_category';
                                                    $result = mysqli_query($conn,$query);

                                                    while($row = mysqli_fetch_assoc($result)){
                                                        echo "<option value='".$row['item_category_id']."'>".$row['item_category_name']."</option>";
                                                    }
                                                   
                                                   ?>
                                                    
                                                       
                                        </select>
                                    </div>
                                </div>                                
                                     
                                    
                                    <button type="submit" name="submit" class="btn btn-primary">Add Item </button><br><br>
                               
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

if(isset($_POST['submit'])){

        $item_name = $_POST['item_name'];
        $item_description = $_POST['item_description'];
        $item_category = $_POST['item_category'];
        
        $item_check = "SELECT * FROM menu_item_name WHERE item_name = '$item_name'";
        $item_check_query = mysqli_query($conn, $item_check);
        $item_check_num = mysqli_num_rows($item_check_query);

        if($item_check_num > 0)
        {
            echo"  <script> swal('Sorry!', 'Item Already Exist', 'error')
            .then((value) => {location.href='menuitemname.php'}); </script>";
        }
        else
        {
            $sql = "INSERT INTO `menu_item_name`(`item_name`, `item_category`, `item_description`) VALUES ('$item_name','$item_category','$item_description')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo"  <script> swal('Success', 'Item Added Successfull! ', 'success')
                .then((value) => {location.href='menuitemname.php'}); </script>";
            }
            else{
                echo"  <script> swal('Sorry!', 'Fail to Add', 'error')
            .then((value) => {location.href='menuitemname.php'}); </script>";
            }
    }

}


include 'abottom.php';
?>