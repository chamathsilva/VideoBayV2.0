<?php
require_once("configReader.php");
require_once("../../models/DB/Db.class.php");
$db = new Db();
if (!isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
    die();
}

if (isset($_FILES["FileInput1"]) && $_FILES["FileInput1"]["error"] == UPLOAD_ERR_OK) {

    //check if this is an ajax request
    if (!isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
        die();
    }
    //allowed file type Server side check
    switch (strtolower($_FILES['FileInput1']['type'])) {
        //allowed file types
        case 'video/mp4':
            break;
        default:
            die('Unsupported File Please upload mp4 file!'); //output error
    }
}
else {
    die('Something wrong with upload! Is "upload_max_filesize" set correctly?');
}


if (isset($_FILES["files"])) {

//check if this is an ajax reques
    if (!isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
        die();
    }
    //$myFile = $_FILES['FileInput2'];
//allowed file type Server side check
    foreach($_FILES['files']['name'] as $i=>$name) {

        switch (strtolower($_FILES['files']['type'][$i])) {

//allowed file types
            case 'image/png':
                break;
            default:
                die('Unsupported File Please upload png file!'); //output error
        }
    }
}
else {
    die('Something wrong with upload! Is "upload_max_filesize" set correctly?');
}


if (isset($_FILES["FileInput3"]) && $_FILES["FileInput3"]["error"] == UPLOAD_ERR_OK) {

    //check if this is an ajax request
    if (!isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
        die();
    }
    //allowed file type Server side check

    switch (strtolower($_FILES['FileInput3']['type'])) {

        //allowed file types
        case 'text/plain':
        break;
        default:
            die('Unsupported File Please upload txt file!'); //output error
    }
} else {
    die('Something wrong with upload! Is "upload_max_filesize" set correctly?');
}


$lesson_name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
$description = filter_var($_POST["description"], FILTER_SANITIZE_STRING);
$lecturer = filter_var($_POST["lecturer"], FILTER_SANITIZE_STRING);

$lessons = $db->query("INSERT INTO lesson(name, description, lecture) VALUES (:nam,:des,:lec)",array("nam"=>$lesson_name,"des"=>$description,"lec"=>$lecturer));
$lessonID=$db->lastInsertId();
echo $lessonID;

$UploadDirectory1 = 'uploads/' . $lessonID . '/' . 'videos/';
$UploadDirectory2 = 'uploads/'.$lessonID.'/'.'slides/';
$UploadDirectory3 = 'uploads/'.$lessonID.'/';

$File_Name = strtolower($_FILES['FileInput1']['name']);
$NewFileName = "1.mp4";

if(!file_exists($UploadDirectory1)){
    mkdir($UploadDirectory1,0755, true);
}
if (move_uploaded_file($_FILES['FileInput1']['tmp_name'], $UploadDirectory1 . $NewFileName)) {
    //  die('Success! File Uploaded.');

} else {
    die('error uploading File!');
}

if(!file_exists($UploadDirectory2)){
    mkdir($UploadDirectory2);
}

foreach($_FILES['files']['name'] as $i=>$name) {
    $File_Name = strtolower($_FILES['files']['name'][$i]);

    $NewFileName = $File_Name;

    if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $UploadDirectory2 . $NewFileName)) {
//  die('Success! File Uploaded.');

    } else {
        die('error uploading File!');
    }

}


$File_Name = strtolower($_FILES['FileInput3']['name']);
$NewFileName = $File_Name;

if(!file_exists($UploadDirectory3)){
    mkdir($UploadDirectory3);
}

if (move_uploaded_file($_FILES['FileInput3']['tmp_name'], $UploadDirectory3 . $NewFileName)) {
    //  die('Success! File Uploaded.');

} else {
    die('error uploading File!');
}


readConfigFile($lessonID,$NewFileName);

$sub=$_POST["subject"];
$use=$_POST["users"];

$k=0;
$r=0;
for($k=0;$k<4;$k++){
    if(isset($sub[$k])){
        $lsnsub = $db->query("INSERT INTO subjects(lesson_id, subject) VALUES (:ld,:su)",array("ld"=>$lessonID,"su"=>$sub[$k]));
    }
}
for($r=0;$r<4;$r++){
    if(isset($use[$r])){
        $lsus = $db->query("INSERT INTO lessonusers(lesson_id, lsnuser) VALUES (:lud,:lusr)",array("lud"=>$lessonID,"lusr"=>$use[$r]));
    }
}


?>