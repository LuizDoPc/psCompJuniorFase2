<?php
header('Content-Type: text/html; charset=UTF-8');

function __autoload($class_name){
    require_once '../modelo/'.$class_name.'.php';
}

$nome = $_POST['Nome'];
$cpf = $_POST['CPF'];
$rg = $_POST['RG'];
$ufrg = $_POST['ufRG'];
$telefone = $_POST['telefone'];
$email = $_POST['Email'];
$logradouro = $_POST['Logradouro'];
$numero = $_POST['Numero'];
$bairro = $_POST['Bairro'];
$cep = $_POST['CEP'];
$complemento = $_POST['Complemento'];
$nasc = $_POST['Nascimento'];
$insc = $_POST['Inscrito'];
$estado = $_POST['Estado'];
$cidade = $_POST['Cidade'];


$p = new Participante();

$p->setNome($nome);
$p->setRG($rg);
$p->setUfRG($ufrg);
$p->setTelefone($telefone);
$p->setEmail($email);
$p->setLogradouro($logradouro);
$p->setNumero($numero);
$p->setBairro($bairro);
$p->setCEP($cep);
$p->setComplemento($complemento);
$p->setNascimento($nasc);
$p->setInscrito($insc);
$p->setEstadoIdEstado($estado);
$p->setCidadeIdCidade($cidade);

$p->update($cpf);

header('Location: ../visao/');