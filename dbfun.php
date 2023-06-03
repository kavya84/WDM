<?php

include_once 'dbcon.php';
ob_start();
session_start();
function connect(){
    $link= mysqli_connect(HOST, USER, PASSWORD, DBNAME) or die("Error ". mysqli_connect_error());
    return $link;
}

function allrecords($table){
    $link=connect();
    $result=mysqli_query($link, "SELECT * FROM $table") or die("Error ". mysqli_error($link));
    $rows=[];
    while($row=mysqli_fetch_assoc($result))
    {
        $rows[]=$row;
    }
    mysqli_close($link);
    return $rows;
}

function single($table,$condition){
    $link=connect();
    $result=mysqli_query($link, "SELECT * FROM $table WHERE $condition") 
            or die("Error ". mysqli_error($link));
    $row=mysqli_fetch_assoc($result);
    mysqli_close($link);
    return $row;
}

function findall($table,$condition){
    $link=connect();
    $result=mysqli_query($link, "SELECT * FROM $table WHERE $condition") 
            or die("Error ". mysqli_error($link));
    $rows=[];
    while($row=mysqli_fetch_assoc($result))
    {
        $rows[]=$row;
    }
    mysqli_close($link);
    return $rows;
}

function countrecords($table){
    $link=connect();
    $result=mysqli_query($link, "SELECT count(*) as total FROM $table") or die("Error ". mysqli_error($link));    
    $row=mysqli_fetch_assoc($result);    
    mysqli_close($link);
    return $row["total"];
}



