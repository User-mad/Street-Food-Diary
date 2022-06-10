<?php
include 'atop.php';
?>
<br>
<div class="main_content_iner ">
        <div class="container-fluid p-0 sm_padding_15px">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="dashboard_header mb_50">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dashboard_header_title">
                                    <h3>View Blog </h3>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

            <?php 

                $vid = $_SESSION['v_id'];
                

                $sql = "SELECT * FROM `blog` WHERE `vendor_id` = '$vid'";
                $result = mysqli_query($conn, $sql);
                
            ?>
            <?php

                while($r = mysqli_fetch_array($result))
                {
            ?>

                <div class="col-lg-6">
                    <div class="card_box box_shadow position-relative mb_30">
                        <div class="white_box_tittle">
                            <div class="main-title2 ">
                                <h4 class="mb-2 nowrap ">Blog Title:<?php echo $r['b_title'] ?></h4>
                                
                                <h6 class="mb-2 nowrap ">Blog Date:<?php echo $r['b_date'] ?></h6>
                            </div>
                        </div>
                        <div class="box_body">
                            <p class="f-w-400 ">
                            
                            Description: <?php echo $r['b_description'] ?> </p>
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