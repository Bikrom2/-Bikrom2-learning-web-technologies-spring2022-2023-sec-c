<?php 
    require_once('db.php');


    function addVisa($Name,$Phone,$Email,$Passport,$Nid){
        $con = getConnection();
        $sql = "insert into visas(name,phone,email,passport,nid) values ('$Name','$Phone','$Email','$Passport','$Nid')";
        $status = mysqli_query($con, $sql);
        return $status;



        
    }


?>