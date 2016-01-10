<?php


if($_POST){
    //check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {

        $output = json_encode(array( //create JSON data
            'type'=>'error',
            'text' => 'Sorry Request must be Ajax POST'
        ));
        die($output); //exit script outputting json data
    }

    require("../../models/DB/Db.class.php");
    $db = new Db();

    $dbh = $db->getPurePodo();
    include("../../models/PHPAuth/Config.php");
    include("../../models/PHPAuth/Auth.php");

    $config = new PHPAuth\Config($dbh);
    $auth   = new PHPAuth\Auth($dbh, $config);

    $uid  = filter_var($_POST["uid"], FILTER_SANITIZE_STRING);
    $newemail   = filter_var($_POST["newemail"], FILTER_SANITIZE_STRING);
    $currentPassword   = filter_var($_POST["currentPassword"], FILTER_SANITIZE_STRING);


    $result = $auth->changeEmail($uid,$newemail,$currentPassword);



    if (!$result['error']){
        $output = json_encode(array( //create JSON data
            'type'=>'text',
            'text' => "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong>".$result['message']."</div>"
        ));
    }else{
        $output = json_encode(array( //create JSON data
            'type'=>'error',
            'text' => "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Warning!</strong>".$result['message']."</div>"
        ));
    }

    die($output);

}


