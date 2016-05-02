<?php
	require_once("../../../config.php");
	
	//the variable does not exists in the URL
	if(!isset($_GET["edit"])){
		
		//redirect user
		echo "redirect";
		
		header("Location: table.php");
		exit(); //dont execute further 
		
		}else{
			echo"User want to edit row:".$_GET["edit"];
			
			//ask for latest data for single row 
			$mysql = new mysqli("localhost", $db_username, $db_password, "webpr2016_kriluh");
			
			$mysgl-> prepeare ("SELECT recipient, message, sender FROM message_sample WHERE id=?")
			echo $mysgl->error;
			
			//replace the ? mark
			$stmt->bind_param("i", $_GET["edit"]);
			
			//bind result data
			$stmt->bind_result($recipient, $message, $sender)
			
			//we have only one row of data
			if($stmt->fetch()){
				
				//we had data
				echo $recipient." ".$message." ".$sender." ".
			
		}
		
	}

?>
<br>
<a href="table.php">table</a>
<h2> public_html/web/1.homework </h2>

<form method="get">

	<input disabled name="edit" value="<?=$id;?>"><br><br>
	
	<label for="to">to:* <label>
	<input type="text" name="to" value="<?php echo $recipient; ?>"><br><br>
	
	<label for="message">Message:* <label>
	<input type="text" name="message" value="<?=$message;?>"><br><br>
	
	<!-- This is the save button-->
	<input type="submit" value="Save to DB">

<form>

<p>Idea</p>

<?php
	
		}
		
	}

?>

<?php
	
		}
		
	}

?>

<?php
	//check if there is variable in the URL
	if(isset($_GET["mood"])){
		

			echo "Mood: ".$_GET["mood"]."<br>";

		}
	

?>









<link href="css/stylecss" rel="stylesheet">

<form>
  Enter a date:
  <input type="date" name="day" max="date("Y/m/d")"><br>
  Your name: <textarea name="name" rows="1" cols="40"></textarea><br>
  Comment: <textarea name="comment" rows="3" cols="60"></textarea><br>
  Choose Mood:
<input type="radio" name="mood" value="angry">Red
<input type="radio" name="mood" value="ok">Green
<input type="radio" name="mood" value="sad">Blue
<input type="radio" name="mood" value="happy">Yellow<br>



<input type="submit">






</form>