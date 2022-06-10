<?php

	$conn = mysqli_connect("localhost","root","","street") or die("Connection failed");

	if($_POST['type'] == ""){
		$sql = "SELECT * FROM menu_item_category";

		$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

		$str = "";
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['item_category_id']}'>{$row['item_category_name']}</option>";
		}
	}else if($_POST['type'] == "itemData"){

		$sql = "SELECT * FROM menu_item_name WHERE item_category = {$_POST['id']}";

		$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

		$str = "";
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['item_name_id']}'>{$row['item_name']}</option>";
		}
	}

	echo $str;
 ?>
