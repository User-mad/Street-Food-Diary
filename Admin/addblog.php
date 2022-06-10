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
                               
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Blog Title</label>
                                            
                                     <input type="text" class="form-control" id="inputEmail4" placeholder="">
                                        </div>
                                        
                                    </div>
                                      <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress">Blog Description</label>
                                           <textarea class="form-control" maxlength="225" rows="3" name="maxlength-textarea" id="maxlength-textarea" placeholder=""></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress">Blog Image</label>
                                          <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                                    
                                    <button type="submit" class="btn btn-primary">Add Blog </button>
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
include 'abottom.php';
?>