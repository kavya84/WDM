<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-type: application/json; charset=utf-8');

include_once 'dbfun.php';

// Takes raw data from the request
$json = file_get_contents('php://input');
// Converts it into a PHP object
$data = json_decode($json);

$bno= $data->bno;
$ldate= $data->ldate;
$tdate= $data->tdate;

$link=connect();
if($bno!=''){
$query="insert into buildings(bno,laundrydate,trashdate) values('$bno','$ldate','$tdate')";
mysqli_query($link, $query) or die(json_encode(["error"=> mysqli_error($link)]));

$result=["success"=>"Building registered successfully"];

echo json_encode($result);
}
