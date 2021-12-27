<?php

    // Tạo SESSION: mặc định mỗi phiên làm việc có thời hạn 24phut
    session_start();

    

$db_user = "root";
$db_pass = "";
$db_name = "netflix";

$db = new PDO('mysql:host=localhost:85;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
?>
