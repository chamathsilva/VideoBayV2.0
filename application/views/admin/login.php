<?php
    require("../../models/DB/Db.class.php");
    $db = new Db();
    $dbh = $db->getPurePodo();
    include("../../models/PHPAuth/Config.php");
    include("../../models/PHPAuth/Auth.php");

    $config = new PHPAuth\Config($dbh);
    $auth   = new PHPAuth\Auth($dbh, $config);



$email = "mbcsdskchamathssilva@gmail.com";
$password = "cucsc@123!@#AB";
    $repeatpassword = "ucsc@123!@#A";
    $remember = "1";


    echo '<pre>';

    $result = $auth->login($email,$password,$remember);

    //if login deatile correct create session
    if (!$result['error']){
        setcookie('authIDD',$result["hash"],$result["expire"],'/');
    }
    var_dump($result);

    echo '<br>';



