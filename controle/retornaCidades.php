<?php
header('Content-Type: text/html; charset=UTF-8');

function __autoload($class_name){
    require_once '../modelo/'.$class_name.'.php';
}

$uf = $_POST['uf'];

$c = new Cidade();

$res = $c->findEst($uf);

echo '<select id="Cidade" name="Cidade" class="form-control">';
foreach($res as $r){
    echo '<option value="'.$r->idCidade.'">'.$r->Nome.'</option>';
}
echo '</select>';