<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-type: application/json; charset=utf-8');

include_once 'dbfun.php';

$json = file_get_contents('php://input');
$data = json_decode($json);

$userid= $data->userid;
$uname= $data->uname;
$pwd= $data->pwd;
$role= $data->role;
$phone= $data->phone;


$link=connect();
if($userid!=''){
$query="insert into users(userid,uname,phone,pwd,role) values('$userid','$uname','$phone','$pwd','$role')";
mysqli_query($link, $query) or die(json_encode(["error"=> mysqli_error($link)]));


$result=["success"=>"user registered"];

echo json_encode($result);
}
