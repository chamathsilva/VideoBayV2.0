<?php

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
        case 'text/plain':
            break;
        default:
            die('Unsupported File Please upload txt file!'); //output error
    }
}
else {
    die('Something wrong with upload! Is "upload_max_filesize" set correctly?');
}


$UploadDirectory = '../../../data/uploads/';
$File_Name = strtolower($_FILES['FileInput1']['name']);

if(!file_exists($UploadDirectory)){
    mkdir($UploadDirectory,0755, true);
}
if (move_uploaded_file($_FILES['FileInput1']['tmp_name'], $UploadDirectory . $File_Name)) {
    //  die('Success! File Uploaded.');

} else {
    die('error uploading File!');
}

$readFile = fopen("$UploadDirectory/$File_Name", "r") or die("Unable to open file!");
while(!feof($readFile)) {
    $line = fgets($readFile);
    if (trim($line) != '') {
        $line = explode(',', $line);
        for ($i = 0; $i < 4; $i++) {
            echo $line[$i];
            echo "<br>";
        }

    }
}

?>