<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST");
header("Allow: GET, POST");

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $res = array();
    $item = array(
        $_POST['dato1'] ?? 'nada',
        $_POST['dato2'] ?? 'nada2'
    );  
    array_push($res, $item);
    array_push($res, $item);
    echo json_encode($res);
}