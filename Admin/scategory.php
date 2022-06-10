<?php
include 'atop.php';
?>
<br>
<div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Stall Category</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="QA_section">
                                <div class="white_box_tittle list_header">
                                    <h4>Table</h4>
                                    <form method="POST">
                                        <div class="box_right d-flex lms_block">
                                            <div class="serach_field_2">
                                                <div class="search_inner">
                                                    
                                                        <div class="search_field">
                                                            <input type="text" name="category_name" placeholder="Add Stall categroy name">
                                                        </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                            <div class="add_button ml-10">
                                                <button type="submit" name="submit" class="btn btn-primary">Add New</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
        
                                <div class="QA_table mb_30">
                                    <!-- table-responsive -->
                                    <table class="table lms_table_active ">
                                        <thead>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Category Name</th>
                                                <th scope="col">Status</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php  
                                                $i = 1;
                                                $sql = "SELECT * FROM stall_category_table";
                                                $result = mysqli_query($conn, $sql);
                                                while($row = mysqli_fetch_assoc($result))
                                                {
                                                    $id = $row['category_id'];
                                                    $name = $row['category_name'];
                                                
                                                    echo '<tr>
                                                    <th scope="row">'.$i.'</th>
                                                    <td>'.$name.'</td>                                   
                                                    </tr>';
                                                    $i++;
                                                }
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    
                </div>
            </div>
        </div>
    </div>

<br>
<br>


<?php

if(isset($_POST['submit']))
{

    $stall_category = $_POST['category_name'];
        
    $stall_category_check = "SELECT * FROM stall_category_table WHERE category_name = '$stall_category'";
    $stall_category_check_query = mysqli_query($conn, $menu_category_check);
    $stall_category_check_num = mysqli_num_rows($menu_category_check_query);

    if($stall_category_check_num > 0)
    {
        echo"  <script> swal('Sorry!', 'Category Already Exist', 'error')
        .then((value) => {location.href='scategory.php'}); </script>";
    }
    else
    {
        $sql = "INSERT INTO stall_category_table (category_name) VALUES ('$stall_category')";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo"  <script> swal('Success!', 'Category Added Successfully', 'success')
            .then((value) => {location.href='scategory.php'}); </script>";
        }
        else
        {
            echo"  <script> swal('Sorry!', 'Something Went Wrong', 'error')
            .then((value) => {location.href='scategory.php'}); </script>";
        }
    }

}




include 'abottom.php';
?>