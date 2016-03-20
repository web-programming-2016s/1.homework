<?php
	// table.php
	
	//getting our config
	require_once("../../config.php");
	
	//create connection
	$mysql = new mysqli("localhost", $db_username, $db_password, "webpr2016_angcas");

/*
		IF THERE IS ?DELETE=ROW_ID in the url
	*/
	if(isset($_GET["delete"])){
		
		echo "Deleting row with id:".$_GET["delete"];
		
		// NOW() = current date-time
		$stmt = $mysql->prepare("UPDATE for_homework_table SET deleted=NOW() WHERE id = ?");
		
		echo $mysql->error;
		
		//replace the ?
		$stmt->bind_param("i", $_GET["delete"]);
		
		if($stmt->execute()){
			echo "deleted successfully";
		}else{
			echo $stmt->error;
		}
		
		//closes the statement, so others can use connection
		$stmt->close();
		
	}
	

	//SQL sentence
	$stmt = $mysql->prepare("SELECT id, recipient, message, created FROM for_homework_table ORDER BY created DESC LIMIT 10");
	
	//if error in sentence
	echo $mysql->error;
	
	//variables for data for each row we will get
	$stmt->bind_result($id, $recipient, $message, $created);
	
	//query
	$stmt->execute();
	
	$table_html = "";
	
	//add smth to string .=
	$table_html .= "<table>";
		$table_html .= "<tr>";
			$table_html .= "<th>ID</th>";
			$table_html .= "<th>Recipient</th>";
			$table_html .= "<th>Message</th>";
			$table_html .= "<th>Created</th>";
			$table_html .= "<th>Delete ?</th>";
		$table_html .= "</tr>";
	
	// GET RESULT 
	//we have multiple rows
	while($stmt->fetch()){
		
		//DO SOMETHING FOR EACH ROW
		//echo $id." ".$message."<br>";
		$table_html .= "<tr>"; //start new row
			$table_html .= "<td>".$id."</td>"; //add columns
			$table_html .= "<td>".$recipient."</td>";
			$table_html .= "<td>".$message."</td>";
			$table_html .= "<td>".$created."</td>";
			$table_html .= "<td>
								<a href='?delete=".$id."'>X</a>
							</td>";
			
		$table_html .= "</tr>"; //end row
	}
	$table_html .= "</table>";
	echo $table_html;
	
	
	
?>
<a href="homework%201%20idea%20created.php">app</a>