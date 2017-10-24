<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST,GET');
header('Access-Control-Allow-Credentials:true'); 
header("Content-Type: application/json;charset=utf-8"); 

include 'db.php';	
include_once 'func.php';

if (isset($_POST["cidvalue"])) {
	$cid = strtolower(filterName($_POST["cidvalue"]));
}

	$querycid = "SELECT * FROM customer WHERE cid=:clientid";
		$stmtcid = $conn->prepare($querycid);
		$stmtcid->bindParam(':clientid', $cid, PDO::PARAM_STR);

	$stmtcid->execute();

	// $result = $stmt->fetchAll();
	if( $stmtcid->rowCount() > 0){
		echo '{"success":true, "message":""}';
	}
 
	if ( $stmtcid->rowCount() ==0 ) {
		echo '{"success":false,"message":"Customer ID does not exist!"}';
	} 
 	
?>