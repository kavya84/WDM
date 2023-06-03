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
$name= $data->name;
$phone= $data->phone;
$email= $data->email;
$apartment= $data->apartment;
$vehicleno= $data->vehicleno;

$link=connect();
if($name!=''){
$query="insert into residents(id,name,phone,email,apartment,vehicleno) values('$id','$name','$phone','$email','$apartment','$vehicleno')";
mysqli_query($link, $query) or die(json_encode(["error"=> mysqli_error($link)]));

$result=["success"=>"Resident registered successfully"];

echo json_encode($result);
}
