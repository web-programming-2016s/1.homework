<?php
	//table.php
	//getting our config
	require_once("../../config.php");
	
	//create connection
	$mysql = new mysqli("localhost", $db_username, $db_password, "webpr2016_nicole");
	
	//SQL sentence
	$stmt = $mysql->prepare("SELECT id, goals, date, FROM homework ORDER BY date DESC LIMIT 10");
	
	//if error in sintence
	echo $mysql->error;
	
	//variables for data for each row we will get
	$stmt->bind_result($id, $goals, $date);

	//quiery
	$stmt->execute();
	
	$table_html = "";
	
	//add sth to string .=
	$table_html .= "<table>"; //start new table
		$table_html .= "<tr>"; 
			$table_html .= "<th>ID</th>";
			$table_html .= "<th>Achivements</th>";
			$table_html .= "<th>Date</th>";
	$table_html .= "</th>"; 
	
	
	//GET RESULT
	//we have multiple rows
	while($stmt->fetch()){
		
		//DO SOMETHING FOR EACH ROW
		//echo $id." ".$message."<br>";
		
		$table_html .= "<table>"; //start new row
		$table_html .= "<tr>"; //add columns
			$table_html .= "<td>".$id."</td>";
			$table_html .= "<td>".$goals."</td>";
			$table_html .= "<td>".$date."</td>";
		$table_html .= "</th>"; //end row
	}	
	$table_html .= "</table>"; //end table
	echo $table_html;

	
?>

<a href="app.php">Back</a>	
