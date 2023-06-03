<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Headers:*");

include_once 'dbfun.php';

$id=$_GET["id"];

$link=connect();
if($id!=''){
$query="delete from residents where id='$id'";
mysqli_query($link, $query) or die(json_encode(["error"=> mysqli_error($link)]));

$result=["success"=>"resident deleted successfully"];

echo json_encode($result);
}
