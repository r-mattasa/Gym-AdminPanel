<?php
include 'DB_Connect.php';
  if(isset($_POST) && count($_POST)){
	$action  = mysql_real_escape_string($_POST['action']);
	$gname   = mysql_real_escape_string($_POST['groupname']);
	
	
	if(isset($_POST['item_id']))
		$item_id = mysql_real_escape_string($_POST['item_id']);	

	if($action == "done"){
		// Add code to save data into mysql
            
$sql = "INSERT INTO tb_group (name)VALUES ($gname)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
echo json_encode(
			array(
				"success" => "1",
				
				"gname"   => htmlentities($gname),
				
			)
		);
	}
	else if($action == "delete"){
		// Add code to remove record from database
		echo json_encode(
			array(
				"success" => "1",
				"item_id"  => $item_id					
			)	 
		);
	}
  }else{
	echo json_encode(
		array(
			"success" => "0",
			"item_id"  => "No POST data set"					
		)	 
	);
  }
?>