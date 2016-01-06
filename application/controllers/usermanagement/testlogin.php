<?php

if (isset($_POST["username"]) && isset($_POST["password"])){
    //check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die('Sorry Request must be Ajax POST');     //exit script outputting json data
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
    Die('Something wrong Try again later');
}


