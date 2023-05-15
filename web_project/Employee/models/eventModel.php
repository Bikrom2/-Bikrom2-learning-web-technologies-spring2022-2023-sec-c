<?php 
    require_once('db.php');


    function addEvent($Name,$Phone,$Email,$Passport,$Address,$Nid){
        $con = getConnection();
        $sql = "insert into events(name,phone,email,passport,address,nid) values ('$Name','$Phone','$Email','$Passport','$Address','$Nid')";
        $status = mysqli_query($con, $sql);
        return $status;



        
    }


?>