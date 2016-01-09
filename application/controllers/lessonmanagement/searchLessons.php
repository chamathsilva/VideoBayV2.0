<?php
require("../../models/DB/Db.class.php");
$db = new Db();

if (!isset($_POST["key"])){
    $keyWord == "AAdsfsdfdsfsdfsdiJIAHIHISHADHSDHSHUDNSUCBNSBCKSJBCKJSBCKJSBNCKSBCBK";

}

$keyWord = filter_var($_POST["key"],FILTER_SANITIZE_STRING);


//$keyWord = "ALGO";

//make case insensitive
$keyWord =strtolower($keyWord);;

// search by lesson name or description
$lessons1=  $db->query("SELECT * FROM lesson WHERE LOWER(description) LIKE '%".$keyWord."%' OR LOWER(name) LIKE '%".$keyWord."%' ");

//search by lesson subject
$lessons2=  $db->query("SELECT * FROM lesson INNER JOIN subjects ON lesson.lesson_id=subjects.lesson_id WHERE LOWER(subjects.subject) LIKE '%".$keyWord."%'");


/*

foreach ($lessons1 as $row) {
    $id = $row['lesson_id'];
    $name = $row['name'];
    $src_path = 'data/uploaded_lessons/'.$id.'/slides/1.jpg';

    echo '<div class="col-lg-3 col-md-4 col-xs-6 ">';
    echo '<a onclick="myFunction('.$id.')" class="thumbnail" href="../lessonsplay/lessonPlay2.php?id='."$id".'" >';
    echo '<img class="img-responsive" src='."$src_path".' alt="">';
    //echo '<h6>basic configurations</h6>';
    echo '<h4>'."$name".'</h4>';
    echo'</a>';
    echo'</div>';

}

foreach ($lessons2 as $row) {
    $id = $row['lesson_id'];
    $name = $row['name'];
    $src_path = 'data/uploaded_lessons/'.$id.'/slides/1.jpg';

    echo '<div class="col-lg-3 col-md-4 col-xs-6 ">';
    echo '<a onclick="myFunction('.$id.')" class="thumbnail" href="../lessonsplay/lessonPlay2.php?id='."$id".'" >';
    //echo '<img class="img-responsive" src='."$src_path".' alt="">';
    echo '<h6>basic configurations</h6>';
    echo '<h4>'."$name".'</h4>';
    echo'</a>';
    echo'</div>';

}
*/

echo "hello wiorld";


?>


