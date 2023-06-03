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
$noofbeds= $data->noofbeds;
$noofbaths= $data->noofbaths;
$totalsqft= $data->totalsqft;
$gas= $data->gas;
$electricity= $data->electricity;
$water= $data->water;
$homeass= $data->homeass;
$parkingid= $data->parkingid;
$bno= $data->bno;

$link=connect();
if($bno!=''){
$query="update apartments set noofbeds='$noofbeds',noofbaths='$noofbaths',totalsqft='$totalsqft',gas='$gas',electricity='$electricity',water='$water',homeass='$homeass',parkingid='$parkingid',bno='$bno' where id='$id'";
mysqli_query($link, $query) or die(json_encode(["error"=> mysqli_error($link)]));

$result=["success"=>"apartments updated successfully"];

echo json_encode($result);
}
