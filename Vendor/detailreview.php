<?php
include 'atop.php';
?>
<br>

<?php

$sid = $_GET['id'];
?>
<div class="main_content_iner ">
        <div class="container-fluid p-0 sm_padding_15px">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="dashboard_header mb_50">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dashboard_header_title">
                                    <h3>Detailed Review </h3>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <?php

                    $sql = "SELECT * FROM `review` WHERE `stall_id` = '$sid'";
                    $result = mysqli_query($conn, $sql);

                    while($r = mysqli_fetch_array($result))
                    {
                        $unm = "select * from user_register where uid = '$r[user_id]'";
                        $res = mysqli_query($conn, $unm);
                        $row = mysqli_fetch_array($res);
                        $name = $row['uname'];
                
                ?>



                <div class="col-lg-6">
                    <div class="card_box box_shadow position-relative mb_30">
                        <div class="white_box_tittle">
                            <div class="main-title2 ">
                                <h4 class="mb-2 nowrap ">Review Title:<?php echo $r['title'] ?></h4>
                                <h4 class="mb-2 nowrap ">Review By:<?php echo $name; ?> </h4>
                                <h6 class="mb-2 nowrap ">Review Date:<?php echo $r['date'] ?></h6>
                            </div>
                        </div>
                        <div class="box_body">
                            <p class="f-w-400 ">
                           
                            Description:<?php echo $r['description'] ?></p>
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