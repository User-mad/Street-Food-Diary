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
                                    <h3 class="m-0">Stall Registration</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="card-body">
                               
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Stall Name</label>
                                            <input type="email" class="form-control" id="inputEmail4" placeholder="">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Stall Category</label>
                                     <select id="inputState" class="form-control">
                                                <option selected="">Choose...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Stall Description</label>
                                           <textarea class="form-control" maxlength="225" rows="3" name="maxlength-textarea" id="maxlength-textarea" placeholder=""></textarea>
                                    </div>
                                     <div class="form-row">
                                    <div class="form-group col-md-6">
                                            <label for="inputEmail4">Stall Address Line 1</label>
                                            <input type="text" class="form-control" id="inputEmail4" placeholder="Address line1">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Stall Address Line 2</label>
                                            <input type="text" class="form-control" id="inputEmail4" placeholder="Address line2">
                                        </div>
                                    
                                    </div>
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                            <label for="inputEmail4">Stall Address Line 3</label>
                                            <input type="text" class="form-control" id="inputEmail4" placeholder="Address line3">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Stall Address Area</label>
                                             <select id="inputState" class="form-control">
                                                <option selected="">Choose...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                             <label for="inputState">Opening Time</label>
                                        
                                <input type="time" class="form-control" name="inputTime" id="inputTime">
                                        </div>
                                        <div class="form-group col-md-6">
                                             <label for="inputState">Closing Time</label>
                                            
                                <input type="time" class="form-control" name="inputTime" id="inputTime">
                         
                                        </div>
                                    </div>

                                   

                                   
                                     
                                    
                                    <button type="submit" class="btn btn-primary">Register </button>
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