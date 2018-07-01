<?php
header('Content-Type: text/html; charset=UTF-8');

function __autoload($class_name){
    require_once '../modelo/'.$class_name.'.php';
}

$cpf = $_POST['cpf'];

$p = new Participantes($cpf);

$p->setInscrito(1);

$p->update($cpf);

header('Location: ../visao/inscrito.php');