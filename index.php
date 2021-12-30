<?php

require_once("config.php");

//$lipe = new Usuario();
//$lipe->loadById(2);
//echo $lipe;

//$lista = Usuario::search('li');
//echo json_encode($lista);

$usuario = new Usuario();
$usuario->login('lipe', '123');

echo $usuario;