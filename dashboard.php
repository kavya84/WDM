<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-type: application/json; charset=utf-8');

include_once 'dbfun.php';
$managers=countrecords("managers");
$pools=countrecords("pools");
$gardens=countrecords("gardens");
$apartments=countrecords("apartments");
$services=countrecords("services");
$visitors=countrecords("visitors");
$buildings=countrecords("buildings");
$residents=countrecords("residents");

echo json_encode(["managers"=>$managers,"pools"=>$pools,"gardens"=>$gardens,"apartments"=>$apartments,
"services"=>$services,"visitors"=>$visitors,"buildings"=>$buildings,"residents"=>$residents]);
?>