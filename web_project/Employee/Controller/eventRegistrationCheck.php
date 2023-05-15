<?php 
	session_start();
    
    require_once('../models/eventModel.php');
    if(isset($_REQUEST['submit'])){
        
    $Name = $_REQUEST['name'];
	$Email = $_REQUEST['email'];
    $Phone = $_REQUEST['phone'];
	$Nid = $_REQUEST['nid'];
    $Passport = $_REQUEST['passport'];
    $Address = $_REQUEST['address'];
	$count=0;
    
	
	

	if(empty($Name) || strlen($Name)<3){
		echo "invalid username <br>";
	}
    else{
        $count++;
    }
    if(empty($Address) || strlen($Address)<3){
		echo "invalid address <br>";
	}
    else{
        $count++;
    }

    if(empty($Passport) || strlen($Passport)<3){
		echo "invalid passport number <br>";
	}
    else{
        $count++;
    }
    if(empty($Nid) || strlen($Nid)<3){
		echo "invalid nid number <br>";
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
    if(empty($Phone) ||   strlen($Phone) < 11 ){

       echo "Phone Number should be  11 characters in length! <br>";
        
        }
        else{
            $count++;
           
        }
        if($count ==6){
            $status=addEvent($Name,$Phone,$Email,$Passport,$Address,$Nid);
            if($status){
                header('location: ../View/home.php');
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
	
	//}
    ?>