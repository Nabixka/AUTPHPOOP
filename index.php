<?php 
    include("classes/user.php");

    DB::config("localhost", "root", "", "aut");
    DB::connect();

    $user = new User();
    $data = $user->getAll();
    var_dump($data);



    //DB::config("localhost", "root", "", "aut");
    //var_dump(DB::connect());
    //$user_model = new User();
    //$users = getAll();
    //$user = getById(1);



?>