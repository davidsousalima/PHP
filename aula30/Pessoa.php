<?php
	abstract class Pessoa{
		//Atributos...
		private $nome;
		private $idade;
		private $sexo;
		//Métodos ...
		public  final function fazerAniversario(){
			$this->idade++;
		}
		//Métodos Especias...
		public function getNome(){
			return $this->nome;
		}
		public function setNome($nome){
			$this->nome = $nome;
		}
		public function getIdade(){
			return $this->idade;
		}
		public function setIdade($idade){
			$this->idade = $idade;
		}
		public function getSexo(){
			return $this->sexo;
		}
		public function setSexo($sexo){
			$this->sexo = $sexo;
		}

	} 
?>