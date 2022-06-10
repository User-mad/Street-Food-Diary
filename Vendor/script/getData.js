$(document).ready(function(){
	console.log("Hi");  	
	$("#employee").change(function() {    
		var id = $(this).find(":selected").val();
		var dataString = 'empid='+ id; 
		console.log(dataString);   
		$.ajax({
			url: "menudata.php",
			type : "POST",
		
			data: dataString,  
			cache: false,
			success: function(empData) {
				console.log(empdata);
			   if(empData) {
					$("#errorMassage").addClass('hidden').text("");
					$("#recordListing").removeClass('hidden');							
					$("#itemId").text(empData.menu_id);
					$("#itemName").text(empData.stall_id);
					$("#itemCategory").text(empData.category_id);
					$("#itemPrice").text("$"+empData.item_price);					
				} else {
					$("#recordListing").addClass('hidden');	
					$("#errorMassage").removeClass('hidden').text("No record found!");
				}   	
			} 
		});
 	}) 
});
console.log("Hii");