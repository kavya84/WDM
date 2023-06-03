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
$opentime= $data->opentime;
$closetime= $data->closetime;
$lastclean= $data->lastclean;
$nextclean= $data->nextclean;
$mpersonid= $data->mpersonid;

$link=connect();
if($opentime!=''){
$query="update pools set opentime='$opentime',closetime='$closetime',lastclean='$lastclean',nextclean='$nextclean',mpersonid='$mpersonid' where id='$id'";
mysqli_query($link, $query) or die(json_encode(["error"=> mysqli_error($link)]));

$result=["success"=>"pool updated successfully"];

echo json_encode($result);
}
