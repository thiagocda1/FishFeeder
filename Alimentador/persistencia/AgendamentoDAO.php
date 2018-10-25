<?php

require_once("DBMySQL.php");
require_once("../../negocio/dominio/Agendamento.php");

class AgendamentoDAO extends DBMySQL {

	public function inserir($agendamento){	
		$this->query("INSERT INTO agendamento (hora, dia, racao) VALUES ('".$agendamento->hora."','".$agendamento->dia."','".$agendamento->racao."');" );
	}
	
	public function selecionarTodos(){
		return $this->select("SELECT codigo, hora, dia, racao FROM agendamento;");
	}

}

?>