<?php
	session_start();

	if(isset($_POST['submit'])){

		$username= $_POST['username'];
		$password= $_POST['password'];
		$email= $_POST['email'];
		

		if($username != '' && $password != '' && $email != ''){
			$user =['username'=> $username, 'password'=>$password, 'email'=>$email];
			$user = $username."|" .$password."|" .$email;
			$file = fopen('usersinformation.txt', 'a');
			fwrite($file, $user);
			fclose($file);
			//$_SESSION['user'] = $user;
			header('location: ../view/login.php');
		}else{
			echo "null value found...";
		}
	}else{
		echo "invalid request...";
	}
	if (strlen($password)>8) {
		header('location: ../view/login.php');
	}else{
      header('location: ../view/registration.php?msg=password_error');
	} 

	
?>
<?php
	$filename = $_FILES['image']['name'];
	$filesize = $_FILES['image']['size'];
	$filetemp = $_FILES['image']['tmp_name'];
	$location = '../images/' .$filename;
	if(move_uploaded_file($filetemp, $location)){
		echo "succesfull";
	}else{
		echo "error";
	}
	
?>

