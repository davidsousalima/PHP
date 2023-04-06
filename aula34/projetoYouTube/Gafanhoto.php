<?php
	require_once 'Pessoa.php';
	class Gafanhoto extends Pessoa{
		//Atributo...
		private $login;
		private $totAssintido;
		//Métodos...
		public function viuMaisUm(){
			$this->totAssintido++;
		}
		//Metodos Especias...
		public function __construct($nome, $idade, $sexo, $login){
			parent::__construct($nome, $idade, $sexo);
			$this->login = $login;
			$this->totAssintido = 0;
		}
	}
?>