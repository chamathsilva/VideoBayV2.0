<?php
    require("../../models/DB/Db.class.php");
    $db = new Db();


    //for debug
    function d($v,$t)
        {
            echo '<pre>';
            echo '<h1>' . $t. '</h1>';
            var_dump($v);
            echo '</pre>';
        }


    function test(){
        global $db;
        $result_set = $db->query("SELECT * FROM users");
        return $result_set;
    }

    //return all rows given table
    function seletAll($table){
        global $db;
        $result_set = $db->query("SELECT * FROM "."$table");
        return $result_set;
    }


    //for index page
    function getTotalpages(){
        global $db;
        $item_per_page = 4; //need to put this configuration file
        $lessons = $db->query("SELECT COUNT(*) FROM lesson");
        $get_total_rows = $lessons[0]["COUNT(*)"];
        //break total records into pages
        $total_pages = ceil($get_total_rows/$item_per_page);
        return $total_pages;
    }


    //lesson play releted functions
    function getLessonById($lesson_id){
        global $db;
        $lessons = $db->query("SELECT * FROM lesson WHERE lesson_id = :lid ",array("lid" => $lesson_id));
        return $lessons[0];
    }

    function getAllBySortOrder($lesson_id){
        global $db;
        $sliddata = $db->query("SELECT * FROM configdata WHERE lesson_id = :lid ORDER BY slide_id",array("lid" => $lesson_id));
        return $sliddata;
    }

    function getTpoicsById($lesson_id){
        global $db;
        $topic = $db->query("SELECT * FROM subtitles WHERE lesson_id = :lid ORDER BY slide_id",array("lid" => $lesson_id));
        return $topic;
    }

    // update resent view
    // update user history
    // update statistic

    function insertresentLesson($lesson_id,$userId){
        global $db;
        $result = $db->query("UPDATE recentlesson SET lesson_id = :lid WHERE user_id = :uid",array("lid" => $lesson_id,"uid" => $userId));
        $result = $db->query("INSERT INTO history (lesson_id,user_id,time_stamp) VALUES (:lid, :uid, CURRENT_TIMESTAMP) ON DUPLICATE KEY UPDATE `time_stamp` = CURRENT_TIMESTAMP",array("lid" => $lesson_id,"uid" => $userId));
        $result = $db->query("INSERT INTO viewcount (lesson_ID,v_date,view_count) VALUES(:lid, CURRENT_TIMESTAMP,1) ON DUPLICATE KEY UPDATE view_count = view_count+1",array("lid" => $lesson_id));
        return $result;

    }

    function selet(){
        global $db;
        $topic = $db->query("SELECT * FROM subtitles WHERE lesson_id = :lid ORDER BY slide_id",array("lid" => $lesson_id));
        return $topic;

    }






    //d(getLessonById("108"),"getLessonById");
    //d(test(),"hello");
    //d(seletAll("users"),"hello2");
    //d(getAllBySortOrder("108"),"getAllBySortOrder");
    //d(getTpoicsById("108"),"getTpoicsById");
    //d(insertresentLesson("108","18"),"insertresentLesson");