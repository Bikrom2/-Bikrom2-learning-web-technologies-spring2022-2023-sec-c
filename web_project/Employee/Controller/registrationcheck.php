<?php 
	session_start();
    
    require_once('../models/userModel.php');
    if(isset($_REQUEST['submit'])){
    $Name = $_REQUEST['name'];
	$Email = $_REQUEST['email'];
	$Password = $_REQUEST['password'];
	$count=0;
    
	
	

	if(empty($Name) || strlen($Name)<3){
		echo "invalid username <br>";
	}
    else{
        $count++;
    }


    
    if(empty($Email) || !filter_var($Email, FILTER_VALIDATE_EMAIL)){
        echo "invalid email <br>";
    }
    else{
        $count++;
    }
    if(empty($Password) ||   strlen($Password) < 8 ){

       echo "Password should be at least 8 characters in length! <br>";
        
        }
        else{
            $count++;
           
        }
        if($count ==3){
            $status=addUser($Name,$Email,$Password);
            if($status){
                header('location: ../View/index.php');
            }
else{
    echo "Registration is not successfull. PLease Try again!!";
}


        }
        else{
            echo "Please Try Again!!";
        }

    // if($count == 3){
	// 	$data = $Name."|".$Email."|".$Password."\r\n";
	// 	$file = fopen('../File/user.txt', 'a');
	// 	fwrite($file, $data);

	// 		if($fname == "create"){
	// 			header('location: ../View/index.php');	
	// 		}else{
	// 			header('location: ../View/index.php');
		//	}
	
	}
    ?>