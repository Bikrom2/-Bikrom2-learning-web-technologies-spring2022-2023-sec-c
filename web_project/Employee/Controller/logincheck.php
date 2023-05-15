<?php 
	session_start();
	require_once('../models/userModel.php');

	if(isset($_REQUEST['submit'])){

	$Email = $_REQUEST['email'];
	$Password= $_REQUEST['password'];

	if ($Email == null || $Password == null) {
		echo "invalid email/password <br>";
	}else{
		// $file = fopen('../File/user.txt', 'r');
		// while (!feof($file)) {
		// 		$line = fgets($file);
		// 		$user = explode('|', $line);
				
				
	// 			if($Email == trim($user[1]) && 
    //             $Password == trim($user[2])){

					$_SESSION["name"]=$user[0];
					
					
	 				setcookie('status', 'true', time()+3600, '/');
	// 				header('location: ../View/home.php');
	// 			}
	// 			else{
	// 				 echo"Please enter write password";
	// 			}
				
					
				
	// 		}
	// 		echo "invalid user!";
	// 	}
	// }

			$status = auth($Email, $Password);
		//	return $status;
			if($status){
				$_SESSION['flag'] = "true";
				header('location: ../View/home.php');
			}else{
				echo "invalid user";
			}
		}

		}else{

		header('location: index.php');
		}



	?>