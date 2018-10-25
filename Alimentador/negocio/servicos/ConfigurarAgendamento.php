<?php

require_once("../../persistencia/AgendamentoDAO.php");
require_once("../dominio/Agendamento.php");

$banco = new AgendamentolDAO;
$agendamento = new Agendamento;

$agendamento->pegarDados();
$agendamento->validarDados();



$banco->inserir($agendamento);

foreach ($banco->selecionarTodos() as $registro) {
	echo "Codigo : ". $registro["codigo"] . " | hora : ". $registro["hora"] ." | dia : ". $registro["dia"] ." | racao : ". $registro["racao"] ." <br /> ";
};



?>