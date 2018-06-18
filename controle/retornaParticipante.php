<?php
header('Content-Type: text/html; charset=UTF-8');

function __autoload($class_name){
    require_once '../CLASSES/'.$class_name.'.php';
}


$p = new Participante($_GET['id']);

