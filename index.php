<?php require_once("../include/session.php"); ?>
<?php require_once("../include/functions.php");?>
<?php require_once("../include/db_connection.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Q and Q Storm</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand em-text" href="index.html">Q and A Storm</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="aboutus.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
 
	<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
       <div class="container">
		  <div class='row'>
			<div class="col-md-6">
				<h1>Q and A <span class="em-text">Storm</span></h1>
				<p>Million a waiting to answer you question online</p>
			</div>
			<div class="col-md-6">
				<p><a class="btn btn-primary btn-lg" href="#" role="button">Submit your question here &raquo;</a></p>
			</div>
		  </div>
       </div>
	  </div>
	  <section>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
										<?php
					// section one pu;; the question from the database
						$query = "SELECT * FROM question LIMIT 3";
						$result = mysqli_query($conn, $query);
						
						if(!$result){
							die("Unable to fetch data from the database");
						}
						
					?>
				 
					 <ul>
						<?php while($question = mysqli_fetch_assoc($result)){
							 
						 ?>
							<li><?php echo $question["Name"] . "<br/>";?></li>
							<li><?php echo $question["Question"] . "<br/>";  ?></li>
							<li><a href="answer.php?question=<?php echo $question['id'] ?>">Anwser</a></li>
						 <?php
						 } ?>
						<li></li>
					 </ul>	
 
				</div>
			</div>
		</div>
	  </section>
    
	  <section id="middle">
		<div class="container">
			<div class="col-md-4">
				<img src="img/blogging.jpg" class="demo">
				<h2>Submit a Question</h2>
				<p>The best place to drop your worrying question and have them answer, no matter the 
				kind of question you ask. the answer will be provided to you by passionate user of this 
				website.</p>
				<a href="#" class="btn btn-default">Submit Question</a>
			</div>
			<div class="col-md-4">
				<img src="img/e-book.jpg" class="demo">
				<h2>Submit a Question</h2>
				<p>The best place to drop your worrying question and have them answer, no matter the 
				kind of question you ask. the answer will be provided to you by passionate user of this 
				website.</p>
				<a href="#" class="btn btn-default">Submit Question</a>
			</div>
			<div class="col-md-4">
				<img src="img/devices.jpg" class="demo">
				<h2>Submit a Question</h2>
				<p>The best place to drop your worrying question and have them answer, no matter the 
				kind of question you ask. the answer will be provided to you by passionate user of this 
				website.</p>
				<a href="#" class="btn btn-default">Submit Question</a>
			
			</div>
		</div>
	  </section>
	  
	  <section id="feature">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h1>Q and Q Feature</h1>
					<ul>
						<li> <i class="glyphicon glyphicon-ok"></i> Submit Question</li>
						<li> <i class="glyphicon glyphicon-ok"></i> Provide Answer To Question</li>
						<li> <i class="glyphicon glyphicon-ok"></i> Send Us Feedback</li>
					</ul>
				</div>
				<div class="col-md-4 col-md-offset-2">
					<img class="big logo" src="img/home-office.jpg"/>
				</div>
			</div>
		</div>
	  </section>
	  
	  <footer>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xs-12">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Privacy Policy</a></li>
					</ul>
				</div>
				<div class="col-md-6 col-xs-12">
					<p>Copyright &copy; 2015 All Right Reserved</p>
				</div>
			</div>
		</div>
	  </footer>

    <!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>