<?php

if (isset($_POST["username"]) && isset($_POST["password"])){
    //check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        //exit script outputting json data
        $output = json_encode(array("typee" => 1, "resultt" => 'Sorry Request must be Ajax POST'));
        Die($output);
    }

    // Data base connetion and Auth class
    require("../../models/DB/Db.class.php");
    $db = new Db();
    $dbh = $db->getPurePodo();
    include("../../models/PHPAuth/Config.php");
    include("../../models/PHPAuth/Auth.php");

    $config = new PHPAuth\Config($dbh);
    $auth   = new PHPAuth\Auth($dbh, $config);


    //Sanitize input data using PHP filter_var().
    $email    = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    $remember = isset($_POST["remember"]);

    $result = $auth->login($email,$password,$remember);


    if ($result['error']){
        $output = json_encode(array("typee" => 1, "resultt" => $result['message'] ));
    }else{
        setcookie('authIDD',$result["hash"],$result["expire"],'/');
        $output = json_encode(array("typee" => 0, "resultt" => 'application/views/user/homePage.php'));
    }

    Die($output);

}else{
    $output = json_encode(array("typee" => 1, "resultt" => 'Something wrong Try again later'));
    Die($output);
}


