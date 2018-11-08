<?php 

class Agendamento {

	public $codigo;
	public $hora;
	public $dia;
	public $racao;
	
	public function pegarDados(){
		
		$this->hora = $_GET["hora"];
		$this->dia = $_GET["dia"];
		$this->racao = $_GET["racao"];
	}
	
	public function validarDados(){
	}

}

?>