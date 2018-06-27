<?php
header('Content-Type: text/html; charset=UTF-8');

function __autoload($class_name){
    require_once '../modelo/'.$class_name.'.php';
}

$email = $_POST['email'];
$senha = $_POST['senha'];

$l = new Login();

if($l->login($email, $senha)){
    echo '1';
    setcookie("login",$email);

    //if(isset($_COOKIE['login']))
}else{
    echo '0';
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
}

