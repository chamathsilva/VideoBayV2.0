<?php

require_once("../../controllers/DBfunctions/DbFunctions.php");
/**
 * Created by IntelliJ IDEA.
 * User: chamathsilva
 * Date: 1/9/16
 * Time: 5:12 AM
 */
d(getTpoicsById("108"),"getTpoicsById");

?>

$result = $db->query("INSERT INTO history (lesson_id,user_id,time_stamp) VALUES (:lid, :uid, CURRENT_TIMESTAMP) ON DUPLICATE KEY UPDATE `time_stamp` = CURRENT_TIMESTAMP",array("lid" => $lesson_id,"uid" => $userId));