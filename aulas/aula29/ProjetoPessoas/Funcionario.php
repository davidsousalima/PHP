<?php
	require_once 'Pessoa.php';
	class Funcionario extends Pessoa{
		private $trabalhando;
		private $setor;

		public function mudarTrabalho(){
			$this->trabalhando = ! $this->trabalhando;
		}

		public function getTrabalhando(){
			return $this->trabalhando;
		}
		public function setTrabalhando($trabalhando){
			$this->trabalhando = $trabalhando;
		}
		public function getSetor(){
			return $this->setor;
		}
		public function setSetor($setor){
			$this->setor = $setor;
		}
	}
?>