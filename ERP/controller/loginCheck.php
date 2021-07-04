<?php
	    if(isset($_POST['submit'])){

        $username= $_POST['username'];
		$password= $_POST['password'];
	}else{
		echo "invalid request";
	}

		if($username != '' && $password != '')
		{
           header('location: ../view/home.php');
		}else
		{
			echo "null value found";
		}

			$file = fopen('usersinformation.txt', 'r'); //file read.
			while(!feof($file)) //loop for checking multiple name one by one.
			{
				$data = fgets($file); //file chek one by one
			    $user = explode('|', $data); //line break
			    $username = $user[0];
			    $password = [1];
			}
			
			if(trim($user[0]) == $username && trim($user[1]) == $password){
					header('location: ../view/home.php');
			}

			//Remember me

				$username=$_POST['username'];       
				$password=$_POST['password'];
				if(isset($_POST['submit']))	
				{		
				if($username==$user[0] && $password==$user[1])		
				{		

			if($_POST['remember'] == true){
				setcookie('username',$username,time()+56747,'/');
				setcookie('password',$password,time()+56747,'/');
				header('location: ../view/home.php');
			}
			header('location: ../view/home.php');
		}
			else{
				
	            echo "Cookies Not Set";
			
			}
		}
			
	
	
?>