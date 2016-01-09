<?php

function readConfigFile($id,$name){

    require("../../models/DB/Db.class.php");
    $db = new Db();
//$name=$_FILES['files']['name'][0];
    $lineCount=0;
    $newLine=0;
    $myfile = fopen("uploads/$id/$name", "r") or die("Unable to open file!");

    while(!feof($myfile)){
        //get the return line from the fgets
        $currentLine = fgets($myfile);
        echo "$currentLine";
        if(trim($currentLine) != ''){
            $currentLine = explode(',', $currentLine);

            if (!((empty($currentLine[1])))) {

                $time = explode(':', $currentLine[1]);
                $hours = $time[0];
                $minites = $time[1];
                $seconds = $time[2];
                $endTime = $hours * 3600 + $minites * 60 + $seconds;

            }

            if ($newLine == 0) {
                $no_of_slides = $db->query("UPDATE lesson SET no_of_slides=$currentLine[0] WHERE (lesson_id=$id)");

                //if succesfuly added the number of slides
                if ($no_of_slides) {
#                   echo " no of slides added successfully";
                    $newLine++;
                }
                else {
                    die (" no of slides added not successed ");
                }
            }
            else if ($newLine == 1) {

                $config_data = $db->query("INSERT INTO configdata(lesson_id, slide_id, start_time,end_time) VALUES
(:lid,:sid,:st,:et)", array("lid" => $id, "sid" => $currentLine[0], "st" => 0, "et" => $endTime));

                if ($config_data) {
                    if (!((empty($currentLine[2])))) {

                        $subt = $db->query("INSERT INTO subtitles(lesson_id, slide_id, sub_title,start_time) VALUES
(:leid,:slid,:sut,:sat)", array("leid" => $id, "slid" => $currentLine[0], "sut" => $currentLine[2], "sat" =>0));
                    }
                    $oldEndTime = $endTime;
                    $newstartTime = $oldEndTime + 1;
#echo " config data added successfully";
                    $newLine++;
                }
                else {
                    echo " config data added not successed ";
                }
            }
            else {
                $config_data = $db->query("INSERT INTO configdata(lesson_id, slide_id, start_time,end_time) VALUES
(:lid,:sid,:st,:et)", array("lid" => $id, "sid" => $currentLine[0], "st" => $newstartTime, "et" => $endTime));

                if ($config_data) {
                    if (!((empty($currentLine[2])))) {

                        $subt = $db->query("INSERT INTO subtitles(lesson_id, slide_id, sub_title,start_time) VALUES
(:leid,:slid,:sut,:sat)", array("leid" => $id, "slid" => $currentLine[0], "sut" => $currentLine[2], "sat" => $newstartTime));

                    }
                    $oldEndTime = $endTime;
                    $newstartTime = $oldEndTime + 1;
                    #echo " config data added successfully";
                    $newLine++;
                }
                else {
                    die(" config data added not successed ");
                }
            }
        }
        else{
            #echo "There was a blank line at line number <br />";
        }
    }

    fclose($myfile);


}


?>