
<?php

require_once("../../persistencia/AnimalDAO.php");
require_once("../dominio/Animal.php");

$banco = new AnimalDAO;
$animal = new Animal;

$animal->pegarDados();
$animal->validarDados();



$banco->inserir($animal);

foreach ($banco->selecionarTodos() as $registro) {
	echo "Codigo : ". $registro["codigo"] . " | Nome : ". $registro["nome"] ." | idade : ". $registro["idade"] ." | sexo : ". $registro["sexo"] ." <br /> ";
};



?>