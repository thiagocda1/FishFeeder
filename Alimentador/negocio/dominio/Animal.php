
<?php 

class Animal {

	public $codigo;
	public $nome;
	public $sexo;
	public $idade;
	
	public function pegarDados(){
		
		$this->nome = $_GET["nome"];
		$this->sexo = $_GET["sexo"];
		$this->idade = $_GET["idade"];
	}
	
	public function validarDados(){
	}

}

?>