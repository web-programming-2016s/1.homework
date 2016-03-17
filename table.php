<?php require_once ("header.php"); ?>

<?php
	// table.php
	
	//getting our config
	require_once("../../../config.php");
	
	//create connection
	$mysql = new mysqli("localhost", $db_username, $db_password, "webpr2016_piekos");
	
	/*
		IF THERE IS ?DELETE=ROW_ID in the url
	*/

if(isset($_GET ["delete"])){

		echo "Deleting row with id: ".$_GET["delete"];

			// NOW () = current date-time
		$stmt = $mysql->prepare("UPDATE homework SET deleted=NOW() WHERE id = ?");

		//replace the ?

		$stmt->bind_param ("i", $_GET["delete"]);
		
		if($stmt->execute()) {
			echo "deleted succesfully";
		}else {
				echo $stmt->error;
		}

		// closes the statement, so others can use connection

		$stmt->close();

	}


	//SQL sentence
	$stmt = $mysql->prepare("SELECT id, utility, amount, deadline, paid FROM homework WHERE deleted IS NULL ORDER BY deadline DESC LIMIT 10");
	
//WHERE deleted IS NULL show only those that are not deleted

	//if error in sentence
	echo $mysql->error;
	
	//variables for data for each row we will get
	$stmt->bind_result($id, $utility, $amount, $deadline, $paid );
	
	//query
	$stmt->execute();
	
	$table_html = "";
	
	//add smth to string .=
	$table_html .= "<table class='table table-striped'>";
		$table_html .= "<tr>";
			$table_html .= "<th>ID</th>";
			$table_html .= "<th>Utility</th>";
			$table_html .= "<th>Amount</th>";
			$table_html .= "<th>Deadline</th>";
			$table_html .= "<th>Delete ?</th>";
		$table_html .= "</tr>";
	
	// GET RESULT 
	//we have multiple rows
	while($stmt->fetch()){
		
		//DO SOMETHING FOR EACH ROW
		//echo $id." ".$message."<br>";
		$table_html .= "<tr>"; //start new row
			$table_html .= "<td>".$id."</td>"; //add columns
			$table_html .= "<td>".$utility."</td>";
			$table_html .= "<td>".$amount."</td>";
			$table_html .= "<td>".$deadline."</td>";
			$table_html .= "<td>".$paid."</td>";
			$table_html .= "<td>
			<a class='btn btn-danger' href= '?delete=" .$id."'>X</a></td>";
		$table_html .= "</tr>"; //end row

	}
	$table_html .= "</table>";

	
	
	


?>

<?php require_once("header.php"); ?>

	<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="#">Brand</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		
		  <ul class="nav navbar-nav">
			
			<li>
				<a href="application.php">
					Application page
				</a>
			</li>
			
			
			<li class="active">
				<a href="table.php">
					Table
				</a>
			</li>
			
		  </ul> 
		  
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<div class="container">

		<h1> List of standing payments </h1>

<?php 	echo $table_html; ?>

  
	</div>
  
  </body>
</html>









	</body>
</html>