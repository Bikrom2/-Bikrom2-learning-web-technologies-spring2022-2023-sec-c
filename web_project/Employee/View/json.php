<?php 

    $user = $_POST['user'];
   // $event = $_POST['event'];

    $data = json_decode($user);
   // $data = json_decode($event);
    sleep(1);
    

    $user = ['username'=>'Bikrom', 'age'=>'22', 'birth'=>'Rangpur', 'nationlity' =>'Bangladesh'];
    $data = json_encode($user);
    // $event =['enentname'=>'Coxsbazer ', 'price'=>'Price: 5000tk'];
    // $data = json_encode($event);
    echo $data;
?>