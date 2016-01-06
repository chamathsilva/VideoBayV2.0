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




    d(test(),"hello");
    d(seletAll("users"),"hello2");