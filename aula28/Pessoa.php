<?php
	class Pessoa{
		//Atributos...
		private $nome;
		private $idade;
		private $sexo;
		//Métodos...
		public function fazerAniver(){
			$this->idade++;
		}
		//Métodos Especiais...
		public function __construct($nome, $idade, $sexo){
			$this->nome = $nome;
			$this->idade = $idade;
			$this->sexo = $sexo;
		}
		public function getNome(){
			return $this->nome;
		}
		public function setNome($n){
			$this->nome = $n;
		}
		public function getIdade(){
			return $this->idade;
		}
		public function setIdade($i){
			$this->idade = $i;
		}
		public function getSexo(){
			return $this->sexo;
		}
		public function setSexo($s){
			$this->sexo = $s;
		}
		
	}
?>