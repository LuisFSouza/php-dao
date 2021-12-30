<?php

require_once("config.php");

$lipe = new Usuario();
$lipe->loadById(2);
echo $lipe;