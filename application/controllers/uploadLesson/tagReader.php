<?php
//function to get,read and insert tags to data base table
function tagRows($lessonID,$row){
    global $db;

//    require_once("../../models/DB/Db.class.php");
//    $db = new Db();

    //if the field is not empty read it
    if(trim($row) != ''){
        $lines = explode(',', $row);
        //insert all subjects separated with comma into the searchtags table with correcponding lesson id
        foreach($lines as $line){
            $tag = $db->query("INSERT INTO searchtags(lesson_id, tag) VALUES (:ld,:tg)",array("ld"=>$lessonID,"tg"=>$line));

            if(!($tag)){
                die("Tags Not Added Successfully");
            }
        }
        unset($lines);
    }

}

?>