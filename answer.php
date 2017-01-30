<?php require_once("../include/session.php"); ?>
<?php require_once("../include/functions.php");?>
<?php require_once("../include/db_connection.php");?>
<?php
	
	$query = "SELECT * FROM question";
	$result = mysqli_query($conn, $query);
	
	if(!$result){
		die("Unable to fetch data from the database");
	}
	$question = mysqli_fetch_assoc($result);


	if(isset($_POST['submit'])){
		if(empty($_POST['name']) && empty($_POST['answer'])){
			echo "you cannot sumbit an empty file";
		}else{
			$question_id = $question['id'];
			$name = $_POST['name'];
			$answer = $_POST['answer'];
			// removing mysqli string send by user to prevent mysqli injection
			$name = mysqli_real_escape_string($conn, $name);
			$answer = mysqli_real_escape_string($conn, $answer);
			
			$query = "INSERT INTO answer ";
			$query .= "(question_id, name, answer ) ";
			$query .= " VALUE ({$question_id}, '{$name}', '{$answer}') "; 
				
			$result = mysqli_query($conn, $query);
			if(!$result){
				die("Unable to submit an answer");
			}else{
				echo "Than you for submitting an answer on our platform";
				//redirect_to('index.php');
			}
		}
	}else{
		echo "you did not submit any form";
	}
?>









<html>
<head>
  <title> Q and A Storm</title>
  
</head>
<body>
 <div class="header">
     <h2> QUestion And Anwser Storm Group</h2>
 </div>
  <div>
		Search Bar
  </div>
  <div>
	Answer to question <?php echo $question['Name']; ?>
	<form action="answer.php" method="POST">
		Name:<br/>
		<input type="text" name="name" value=""><br/>
		Answer:<br/>
		<textarea  name="answer" rows="15" cols="15" ></textarea><br/><br/>
		<input type="submit" name="submit" value="Submit an Answer"/>
	</form>
  </div>