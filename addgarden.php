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

$plantid= $data->plantid;
$plantname= $data->plantname;
$planttype= $data->planttype;
$lastmdate= $data->lastmdate;
$nextsdate= $data->nextsdate;
$mpersonid= $data->mpersonid;

$link=connect();
if($plantname!=''){
$query="insert into gardens(plantid,plantname,planttype,lastmdate,nextsdate,mpersonid) values('$plantid','$plantname','$planttype','$lastmdate','$nextsdate','$mpersonid')";
mysqli_query($link, $query) or die(json_encode(["error"=> mysqli_error($link)]));

$result=["success"=>"Garden registered successfully"];

echo json_encode($result);
}
