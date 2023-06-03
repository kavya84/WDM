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
$id= $data->id;
$descr= $data->descr;
$priority= $data->priority;
$apartment= $data->apartment;
$building= $data->building;
$mpersonid= $data->mpersonid;
$status= $data->status;

$link=connect();
if($descr!=''){
$query="update services set descr='$descr',priority='$priority',apartment='$apartment',building='$building',mpersonid='$mpersonid',status='$status' where id='$id'";
mysqli_query($link, $query) or die(json_encode(["error"=> mysqli_error($link)]));

$result=["success"=>"service updated successfully"];

echo json_encode($result);
}
