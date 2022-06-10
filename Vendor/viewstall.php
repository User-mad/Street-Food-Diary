<?php
include 'atop.php';
$sid=$_GET['id'];
$sql = "SELECT * FROM `stall_registration` WHERE `stall_id` = '$sid'";
$result = mysqli_query($conn, $sql);
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
                                    <h3 class="m-0">List Stall Details </h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="QA_section">
                                <div class="white_box_tittle list_header">
                                    <h4></h4>
                                    <div class="box_right d-flex lms_block">
                                        <div class="serach_field_2">
                                            <div class="search_inner">
                                                <form Active="#">
                                                   
                                                   
                                                </form>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
        
                                <div class="QA_table mb_30">
                                    <!-- table-responsive -->
                                    <table class="table lms_table_active ">
                                        <thead>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Stall Name</th>
                                                <th scope="col">Category </th>
                                                <th scope="col">Area </th>
                                                <th scope="col">Opening Time </th>
                                                <th scope="col">Closing Time </th>
                                                <th scope="col">Status</th>
                                                <th scope="col"></th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                


                while($r = mysqli_fetch_array($result))
                {

                        $categoryid = $r['stall_category_id'];
                        $areaid = $r['area_id'] ;

                        $sql2 = "SELECT * FROM `stall_category_table` WHERE `category_id` = '$categoryid'";
                        $result2 = mysqli_query($conn, $sql2);
                        $r2 = mysqli_fetch_array($result2);
                        $categoryname = $r2['category_name'];

                        $sql3 = "SELECT * FROM `area_table` WHERE `aid` = '$areaid'";
                        $result3 = mysqli_query($conn, $sql3);
                        $r3 = mysqli_fetch_array($result3);
                        $areaname = $r3['aname'];

                        $status ="";
                        if($r['status']==1)
                        {
                            $status="Active";
                        }
                        else{
                            $status = "Inactive";
                        }
                  
                ?>
                                            <tr>
                                                <td><?php echo $r['stall_id'] ?></td>
                                                <td><?php echo $r['stall_name'] ?></td>
                                                <td><?php echo $categoryname; ?></td>
                                                <td><?php echo $areaname; ?></td>
                                                <td><?php echo $r['opening_time'] ?></td>
                                                <td><?php echo $r['closing_time'] ?></td>
                                                <td><?php echo $status; ?></td>
                                                <td><a href="#" class="status_btn">Disable</a></td>
                                            </tr>
                                            
                                      <?php
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
include 'abottom.php';
?>