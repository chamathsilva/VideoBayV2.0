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
$repeatpassword = "ucsc@123!@#AB";

$params = array("A" => "apple","B" => "orange", "C" => "how");

    echo '<pre>';

    $result= $auth->register($email,$password,$repeatpassword ,$params);
    var_dump($result);

    echo '<br>';
