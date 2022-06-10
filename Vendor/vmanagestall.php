<?php
include 'atop.php';




?>
<br>
<div class="main_content_iner overly_inner ">
        <div class="container-fluid p-0 ">
            <!-- page title  -->
            <div class="row"> 
                
                <?php 

                $vid = $_SESSION['v_id'];
                

                $sql = "SELECT * FROM `stall_registration` WHERE `vendor_id` = '$vid'";
                $result = mysqli_query($conn, $sql);
                
             ?>
             <?php
                


                while($r = mysqli_fetch_array($result))
                {
                    $sql2 = "SELECT aname FROM `area_table` WHERE `aid` = '$r[area_id]'";
                    $result2 = mysqli_query($conn, $sql2);
                    $r2 = mysqli_fetch_array($result2);
                 
                ?>
                    <div class="col-xl-4 ">
                        <div class="white_card card_height_100 mb_30 social_media_card">
                            <div class="white_card_header">
                                <div class="main-title">
                                    <h3 class="m-0">Stall: <code><?php echo $r['stall_name'] ?></code></h3>
                                    <span>Area Name: <code><?php echo $r2['aname'] ?></code></span>
                                    <span>Average Reviews: <code>9/10</code> </span>
                                </div>
                            </div>
                            <div class="media_thumb ml_25">
                                <br>
                                <img src="img/media.svg" alt="">
                            </div>
                            <br>
                            <div class="media_card_body">
                                <br>
                            
                                <div class="media_card_list">
                        
                                <div class="lodo_right"> <a href="viewstall.php?id=<?php echo $r['stall_id']; ?>" class="mark_complete">View Stall  </a>  </div>
                                   

                                    <div class="lodo_right"> <a href="addmenu.php?id=<?php echo $r['stall_id'] ?>" class="mark_complete">Add Menu</a>  </div>

                                    <div class="lodo_right"> <a href="addimage.php?id=<?php echo $r['stall_id'] ?>" class="mark_complete">Add Images</a>  </div>

                                        <div class="lodo_right"> <a href="addpservices.php?id=<?php echo $r['stall_id'] ?>" class="mark_complete">Add P-Services</a>  </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
                
            </div>
        </div>
    </div>
    
                
<br>
<br>


<?php
include 'abottom.php';
?>