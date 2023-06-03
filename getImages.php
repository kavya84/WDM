<?php

header('Content-Type: application/json; charset=utf-8');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");

include_once 'dbfun.php';
$link=connect();
$viewdtls = mysqli_query($link, "SELECT * from images");


$rows = array();
    while($row = mysqli_fetch_assoc($viewdtls)) {
        $rows[] = $row;
    }
    print json_encode($rows);

    
?>


