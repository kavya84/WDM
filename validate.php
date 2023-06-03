<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Headers: *");
header('Content-type: application/json; charset=utf-8');

include_once 'dbfun.php';

// Takes raw data from the request
$json = file_get_contents('php://input');
// Converts it into a PHP object
$data = json_decode($json);
$userid= $data->userid;
$pwd= $data->pwd;

if($userid!=''){
    $record=single("users","userid='$userid' and pwd='$pwd'");
    if(empty($record)){
        $result=["found"=>false];
        echo json_encode($result);
    }else{
        $result=["found"=>true,"user"=>$record];
        echo json_encode($result);
    }
}
?>