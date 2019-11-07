<?php
require_once("config.php");

use Cliente\Cadastro;

$cad =  new Cadastro();

$cad->setNome("djalma santos");
$cad->setEmail("apsiqueira23@gmail.com");
$cad->setSenha("123456");
echo"<br>";

//$cad->registrarVenda();
//echo $cad;

?>