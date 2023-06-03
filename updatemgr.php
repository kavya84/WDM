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
$id=$data->id;
$name= $data->name;
$phone= $data->phone;
$email= $data->email;

$link=connect();
if($name!=''){
$query="update managers set name='$name',phone='$phone',email='$email' where id='$id'";
mysqli_query($link, $query) or die(json_encode(["error"=> mysqli_error($link)]));

$result=["success"=>"manager updated"];

echo json_encode($result);
}
