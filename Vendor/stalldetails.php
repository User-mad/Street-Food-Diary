<?php

include 'database.php';

if($_REQUEST['empid']) {

    $sql = "SELECT * FROM stall_registration WHERE stall_id ='".$_REQUEST['empid']."'";
    $resultSet = mysqli_query($conn, $sql);	
    $empData = array();
    while( $emp = mysqli_fetch_assoc($resultSet) ) {
        $empData = $emp;
    }
    echo json_encode($empData);
} else {
    echo 0;	
}


?>