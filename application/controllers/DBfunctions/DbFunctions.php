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




    d(test(),"hello");
    d(seletAll("users"),"hello2");