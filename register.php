




<?php 
   
   require("includes/config.php");
   require("includes/header.php");
 
   

    
   try {


   	    

	   	//inserting data 
	   if(isset($_POST['submit'])) {
		   

	   	    $name     = $_POST['name'];
	   	    $email    = $_POST['email'];
	   	    $password = $_POST['password'];
            $img_name = $_FILES['img']['name']; 
	   	    
            
	   	    $dir = 'users_img/' . $img_name;
            
	   	    //now moving the image to the direction
	   	    if(move_uploaded_file($_FILES['img']['tmp_name'],$dir)) {
	   	    	echo "success";
	   	    }


	   	    $ins ="INSERT INTO users(username,email,password,user_img)
		    VALUES(:username,:email,:password,:x)";

		    $inss = $conn->prepare($ins);
		    $inss->execute(array(
		   	':username' => $name,
		   	':email'    => $email,
		   	':password' => $password,
		   	':x'        => $img_name
		   )); 	   



           $last = $conn->lastInsertId();

		   $sel ="SELECT username,user_img FROM users WHERE id ='$last'"; 
		   $sel_run = $conn->query($sel);
           $xyz = $sel_run->fetch(PDO::FETCH_OBJ); 

		   $img_se = "<img class='img' src='users_img/".$xyz->user_img."' />";
		


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
		    <label for="exampleInputPassword1">Email</label>
		    <input type="email" class="form-control" id="exampleInputPassword1" name="email">
		  </div>

		   <div class="form-group">
		    <label for="exampleInputPassword1">Parola</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
		  </div>
		   <div class="form-group">
		    <label for="exampleInputPassword1">Avatar</label>
		    <input type="hidden" class="form-control" id="exampleInputPassword1" name="hidden" size=1000000>
		    <input type="file" class="form-control" id="exampleInputPassword1" placeholder="password" name="img">
		  </div>


		   

		  <input type="submit" class="btn btn-primary" name="submit" value="Kaydol">
		  <br>
		  <?php echo  "<a id = 'a' href='login.php'><h6 id='p'>ZATEN ÜYE MİSİN? ŞİMDİ GİRİŞ YAP</h6></a>"; ?>
		</form>
	 </div>
		

</body>	

<?php require("includes/footer.php");?>