<?php
    require("../../models/DB/Db.class.php");
    $db = new Db();
    $dbh = $db->getPurePodo();
    include("../../models/PHPAuth/Config.php");
    include("../../models/PHPAuth/Auth.php");

    $config = new PHPAuth\Config($dbh);
    $auth   = new PHPAuth\Auth($dbh, $config);


$email = "mbckchamathsilva@gmail.com";
$password = "ucsc@123!@#AB";
$repeatpassword = "ucsc@123!@#A";


    echo '<pre>';

    $result = $auth->login($email,$password);
    var_dump($result);
    setcookie('authID',$result["hash"],$result["expire"]);

    echo '<br>';


