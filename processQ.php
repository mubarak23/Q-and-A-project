<?php require_once("../include/session.php"); ?>
<?php require_once("../include/functions.php");?>
<?php require_once("../include/db_connection.php");?>
<?php

// check if the form has ben submitted
if(isset($_POST['submit'])){

	 if(empty($_POST["name"]) && empty($_POST["question"])){
		 echo "All field cannot be blank";
	 }else{
		 
		$name = $_POST["name"];
		$question = $_POST["question"];
		
    $query = "INSERT INTO question ";
	$query .= "(name, question) ";
   	$query .= " VALUE ('{$name}', '{$question}') ";   

   
   $result = mysqli_query($conn, $query);
   // check if there was an error with our query
	 }
   if($result){
	   //success
	   // in a production enviroment
	   //redirect to another page
		$_SESSION['message'] = "thank for submitting your question herer";
		redirect_to("index.php");
   }else{
	   // failure
	   
	   die("Database query failed. " . mysqli_error($conn));
   }
		
	//Step 5: closing the database 
  mysqli_close($conn);	 
	  
	 
}else{
	redirect_to("index.php");
} 
	


?>