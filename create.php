<?php require('includes/config.php'); ?>
<?php require('includes/header.php'); ?>


<?php 
  
		
		            	
	 


  //kullanıcının oturum açıp açmadığından emin oluyoruz
  if(isset($_SESSION['user'])) {
  	
  	


  	if (isset($_POST['submit'])) {


	   	//img adını alıyoruz
	   	$img_name = $_FILES['img']['name'];

	    //dir değişkenine alıyoruz
	   	$dir = 'sets_img/' . basename($img_name);
	    

	    //sorguyu yazıyoruz
	   	$words = "INSERT INTO words (title,term,defination,sentence,words_id,img) VALUES (:title,:term,:defination,:sentence,:words_id,:img)";

	    //sorguyu soruyoruz
	    $words_run = $conn->prepare($words);
 
	    //değerleri çekiyoruz
	    $words_run->execute(array (
	     ':title'      => $_POST['title'],
	     ':term'       => $_POST['term'],
	     ':defination' => $_POST['defination'],
         ':sentence'   => $_POST['sentence'],
	     ':words_id'    => $_SESSION['id'],
	     ':img'        => $_FILES['img']['name']

	    ));
        
	    //imgyi taşıyoruz

		    if(move_uploaded_file($_FILES['img']['tmp_name'], $dir)) {
		    } else {
		    	echo "Hatalı Kayıt ";
		    }
	

	   } else if (!isset($_SESSION['my_img']) OR isset($_POST['submit'])) {

	  	    
	  	 	//header("location:login.php");
	   	echo 'not a member';
	  	 

	  }

  } 
  
   
   //setlere veri ekliyoruz
  

   

   


?>




	 <div class="conatiner">
	 	<form enctype="multipart/form-data" action="" method="POST">
		  <span class="form-group" style="white-space:nowrap" >
		    <label for="exampleInputEmail1" >Başlık</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
		    <small id="emailHelp" class="form-text text-muted"></small>
		  </span>

		  <div class="form-group">
		    <label for="exampleInputEmail1" >Kelime</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="term">
		    <small id="emailHelp" class="form-text text-muted"></small>
		  </div>
		  
		  <div class="form-group">
		    <label for="exampleInputPassword1">Anlamı</label>
		    <input type="text" class="form-control" id="exampleInputPassword1" name="defination">
		  </div>
          <div class="form-group">
		    <label for="exampleInputPassword1">Örnek Cümle</label>
		    <input type="text" class="form-control" id="exampleInputPassword1" name="sentence">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Fotoğraf</label>
		    <input type="hidden" name = "hidden" class="form-control" id="exampleInputPassword1" size=100000>
		    <input type="file" class="form-control" id="exampleInputPassword1" name="img">
		  </div>

		  <input type="submit" class="btn btn-primary" name="submit" value="Ekle">
		  <br>
		  
		</form>
	 </div>
		

