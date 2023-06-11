<?php
	require_once 'Aluno.php';
	class Bolsista extends Aluno{
		//Atributo...
		private $bolsa;
		//metodos...
		public function renovarBolsa(){
			echo "<p>Bolsa renovada</p>";
		}
		public function PagarMensalidade(){
			echo "<p>{$this->getNome()} é bolsista! Entao paga com desconto </p>";
		}
		//metodos especiais...
		public function getBolsa(){
			return $this->bolsa;
		}
		public function setBolsa($bolsa){
			$this->bolsa = $bolsa;
		}
	}
?>