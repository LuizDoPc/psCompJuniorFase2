<?php
header('Content-Type: text/html; charset=UTF-8');

function __autoload($class_name){
    require_once '../modelo/'.$class_name.'.php';
}

session_start();

unset($_SESSION['cpf']);

header('Location: ../visao/index.php');