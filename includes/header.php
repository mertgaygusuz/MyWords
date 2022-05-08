<?php 
  
 include('config.php');
 define('QUERY','query.php');

  
  session_start();

?>


<!DOCTYPE html>
<html>
	<head>
		<title>MyWords</title>
		<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">
		<link rel="stylesheet" href="dist/css/bootstrap.min.css" />
        <link href="styles/starter-template.css" rel="stylesheet">
        <link rel="stylesheet" href="styles/style_flip.css" />
		<link rel="stylesheet" href="styles/style.css" />
	</head>
	<body>
	 <div class="conatiner">
		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		  <a class="navbar-brand" href="index.php"><img src="img/mywordsadmin.png"/></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		 
		      <?php     

		        if (isset($_SESSION['user'])) {
		        	echo '<ul class="navbar-nav mr-auto"> <li class="nav-item active">
					        <a class="nav-link bold" href="create.php"><span>Kart Oluştur</span></a>
					      </li>
					      </ul>';
				    

		        	 echo "<li class='nav-item dropdown'><div>

		                   <a class='nav-link dropdown-toggle' href='#' id='dropdown01' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>". $_SESSION['user']."</a>
			               <div class='dropdown-menu' aria-labelledby='dropdown01'>
			                   <a class='dropdown-item' href='logout.php'>Oturumu Kapat</a>
			        </div>
		      </li>
		      
		          ";
		          
		        }else if (!isset($_SESSION['user'])) {
		        	echo ' <div class="collapse navbar-collapse" id="navbarsExampleDefault">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link bold" href="login.php">Oturum Aç <span class="sr-only">(current)</span></a>
		      </li>
		      </div>
		      ';
 
		        }

		        
		      

		         



		        ?>
		        
		     
       
		    
		   
		  
	    </nav>

	 </div>

	

<?php require("footer.php");?>	
 


