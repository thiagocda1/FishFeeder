<?php

require_once("DBMySQL.php");
require_once("../../negocio/dominio/Animal.php");

class AnimalDAO extends DBMySQL {

	public function inserir($animal){	
		$this->query("INSERT INTO animais (nome, idade, sexo) VALUES ('".$animal->nome."','".$animal->idade."','".$animal->sexo."');" );
	}
	
	public function selecionarTodos(){
		return $this->select("SELECT codigo, nome, idade, sexo FROM animais;");
	}

}

?>