<?php 
function filterName($field){
	// Sanitize user name
	$field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    // Validate user name
	if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z0-9-_]+$/")))){
		return $field;
	}
	else{
		return FALSE;
	}
}   

?>