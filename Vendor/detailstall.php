<?php
include 'atop.php';
$vid = $_SESSION['v_id'];
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
                                    <h3 class="m-0">List Menu </h3>
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
                                                    <div class="">
                                                    <select id="employee" class="form-control" >
                                                   
                                                        <option value="" selected="selected">Select Stall Name</option>
                                                        <?php
                                                        $sql = "SELECT * FROM `stall_registration` WHERE `vendor_id` = '$vid'";
                                                        $result = mysqli_query($conn, $sql);
                                                        while($r = mysqli_fetch_array($result))
                                                        {
                                                            $stallid = $r['stall_id'];
                                                            $stallname = $r['stall_name'];
                                                        
                                                      
                                                        ?>
                                                        <option value="<?php echo $stallid; ?>"><?php echo $stallname; ?></option>
                                                        <?php 
                                                    echo "<script>console.log('$stallid')</script>" ;    
                                                   
                                                        }	?>
                                                    </select>
                                                    </div>
                                                   
                                                </form>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
        
                                <div class="QA_table mb_30">
                                    <!-- table-responsive -->
                                    <table class="table lms_table_active " id="recordListing">
                                        <thead>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Status</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td id="itemId"></td>
                                                <td id="itemName"></td>
                                                <td id="itemCategory"></td>
                                                <td id="itemPrice"></td>
                                               <td></td>
                                            </tr>
                                            
                                            
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

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	console.log("Hi");  	
	$("#employee").change(function() {    
		var id = $(this).find(":selected").val();
		var dataString = 'empid='+ id; 
		console.log(dataString);   
		$.ajax({
			url: "menudata.php",
            
            dataType: "json",
			data: dataString,  
			cache: false,
			success: function(empData) {
				console.log(empData);
			   if(empData) {
                   console.log(empData);
					$("#errorMassage").addClass('hidden').text("");
					$("#recordListing").removeClass('hidden');							
					$("#itemId").text(empData.menu_id);
					$("#itemName").text(empData.item_name);
					$("#itemCategory").text(empData.item_category_name);
					$("#itemPrice").text("₹"+empData.item_price);					
				} else {
					$("#recordListing").addClass('hidden');	
					$("#errorMassage").removeClass('hidden').text("No record found!");
				}   	
			} 
		});
 	}) 
});
console.log("Hii");
</script>
<?php
include 'abottom.php';
?>