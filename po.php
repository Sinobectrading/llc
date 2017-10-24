<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST,GET');
header('Access-Control-Allow-Credentials:true'); 
header("Content-Type: application/json;charset=utf-8"); 

include_once 'db.php';	
include_once 'func.php';


if (isset($_POST["povalue"])) {
	// $value = strtolower(filterName($_POST["povalue"]));
	// echo '{"success":true,"message":'.$value.'}';
	$po = strtolower(filterName($_POST["povalue"]));
}
// $po = strtolower(filterName("8070004986"));
	$querypo = "SELECT * FROM po WHERE ag=:ponumber";
		$stmtpo = $conn->prepare($querypo);
		$stmtpo->bindParam(':ponumber', $po, PDO::PARAM_STR);

	$stmtpo->execute();

	
	if( $stmtpo->rowCount() > 0){
		$result = $stmtpo->fetchAll();
		foreach($result as $s){
			$array = json_encode($s); 
			echo '{"success":true,"result":'.$array.'}';
		}
	}
 
	if ( $stmtpo->rowCount() ==0 ) {
		echo '{"success":false,"message":"PO number does not exist!"}';
	} 
 	
?>