<?php 
    include("classes/user.php");

    DB::config("localhost", "root", "", "aut");
    DB::connect();

    $user = new User();
    $data = $user->getAll();
    var_dump($data);


     echo "persona";

     
?>