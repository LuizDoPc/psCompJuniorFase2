<?php
header('Content-Type: text/html; charset=UTF-8');

function __autoload($class_name){
    require_once '../modelo/'.$class_name.'.php';
}

$email = $_POST['Emaillogin'];
$senha = $_POST['Senhalogin'];

$l = new Login();

$p = new Participantes();
$res = $p->findEmail($email);

session_start();

if($l->fazLogin($email, $senha)){
    $_SESSION['cpf'] = $res->CPF;
    header('Location: ../visao/inscrito.php');
}else{
    unset($_SESSION['cpf']);
    header('Location: ../visao/index.php');
}

