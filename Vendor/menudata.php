<?php
 include 'database.php';


if($_REQUEST['empid']) {

	$sql1 = "Select * from menu_registration as mr, menu_item_category as mc,menu_item_name as mn  where stall_id ='".$_REQUEST['empid']."' and mr.category_id = mc.item_category_id and mr.name_id=mn.item_name_id ";
	//$sql = "SELECT * FROM menu_registration WHERE stall_id ='".$_REQUEST['empid']."'";
	
	$resultSet = mysqli_query($conn, $sql1);	
	$empData = array();
	while( $emp = mysqli_fetch_array($resultSet) ) {
		$empData += $emp;
		
	}
	echo json_encode($empData);
	
} else {
	echo 0;	
}
?>
