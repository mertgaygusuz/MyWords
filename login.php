




<?php 
   

   require("includes/config.php");
   require("includes/header.php");
   
   
    
   try {
	   	//giriş yapmak için veri seçiyoruz
        
        if(isset($_POST['submit'])) {

        //sorguyu yazıyoruz
   	    $sel = "SELECT * FROM users WHERE username=:username AND password=:password";

   	    //verilerimizi sorguluyoruz
   	    $sel_run = $conn->prepare($sel);


   	    //verileri ilerletiyoruz
   	    $sel_run->execute(array(
   	    	':username' => $_POST['name'],
   	    	':password' => $_POST['password']
   	    ));
        $fetch = $sel_run->fetch(PDO::FETCH_ASSOC);
        $_SESSION['id'] = $fetch['id'];


        //sonucu sayıyoruz
   	    $count = $sel_run->rowCount();

   	    if ($count > 0) {


   	    	echo "done";
   	    	//oturumun kullanıcı için geri çağrılması
   	    	$_SESSION['user'] = $_POST['name'];
           
   	    	echo " hi " . $_SESSION['user'];
          
   	    	 
          
          

           $stmt ="SELECT username,user_img FROM users WHERE username=:username AND password=:password";
          $run_stmt = $conn->prepare($stmt);
          $run_stmt->execute(array(
            ':username' => $_POST['name'],
            ':password' => $_POST['password']


          ));
          
          $run_stmt_count = $run_stmt->rowCount(); 
          if($run_stmt_count > 0) {
            $fetch_stmt = $run_stmt->fetch(PDO::FETCH_ASSOC);
            $imgx =  "<img class='img' src='users_img/".$fetch_stmt['user_img']."'/>";
            
            $_SESSION['my_img'] = $imgx;
            


            header('location:create.php');
           
          }else {
            echo "err:";
          }

   	    }else {
   	    	echo "failure";
   	    }


       


	}   
	   
   } catch (PDOException $e) {
	   	echo "err is : " . $e->getMessage();
	}

   
   



?>


<body>
	 <div class="conatiner">
	 	<form enctype="multipart/form-data" action="" method="POST">
		  <div class="form-group">
		    <label for="exampleInputEmail1" >Kullanıcı Adı</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
		    <small id="emailHelp" class="form-text text-muted"></small>
		  </div>
		  
		   <div class="form-group">
		    <label for="exampleInputPassword1">Parola</label>
		    <input type="password" class="form-control" id="exampleInputPassword1"  name="password">
		  </div>
		  <input type="submit" class="btn btn-primary" name="submit" value="Giriş Yap">
		  <br>
		  
		</form>
	 </div>
		

</body>	

