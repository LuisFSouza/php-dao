<?php

require_once("config.php");

//$lipe = new Usuario();
//$lipe->loadById(2);
//echo $lipe;

//$lista = Usuario::search('li');
//echo json_encode($lista);

//$usuario = new Usuario();
//$usuario->login('lipe', '123');

//echo $usuario;

//$aluno = new Usuario("marchi", "1234");
//$aluno->insert();

//echo $aluno;

//$usuario = new Usuario();

//$usuario->loadById(2);

//$usuario->update("joao", "234");

//echo $usuario;

$usuario = new Usuario();

$usuario->loadById(2);

$usuario->delete();