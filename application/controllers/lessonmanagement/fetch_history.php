<?php
require("../../models/DB/Db.class.php");
$db = new Db();
$item_per_page = 4;
session_start();

//sanitize post value
$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);

//throw HTTP error if page number is not valid
if(!is_numeric($page_number)){
    header('HTTP/1.1 500 Invalid page number!');
    exit();
}

//get current starting point of records
$position = ($page_number * $item_per_page);

$user_id = $_SESSION["user"];

//Limit our results within a specified range.

$lessons = $db->query("SELECT * FROM history WHERE user_id = :uid ORDER BY time_stamp DESC LIMIT :pos,:item" ,array("uid" => $user_id, "pos" => $position, "item" => $item_per_page));



foreach ($lessons as $row) {
    $id = $row['lesson_id'];
    $name = $row['lesson_name'];
    $src_path = '../../../data/uploaded_lessons/'.$id.'/slides/1.jpg';
    $date = $row['time_stamp'];

    echo '<div class="col-lg-3 col-md-4 col-xs-6 text2">';
    echo '<a onclick="myFunction('.$id.')" class="thumbnail" href="../lessonsplay/lessonPlay2.php?id='."$id".'" >';
    echo '<img class="img-responsive" src='."$src_path".' alt="">';
    echo '<h4>'."$name"."  $date".'</h4></a><span style="margin-right:10px;float:right" class="btn btn-danger btn-sm" onclick = "deletehistory('.$id.')" > <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </span>'.'</h4>';

    echo'</a>';
    echo'</div>';

}




?>

