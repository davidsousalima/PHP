<?php
	require_once 'Lutador.php';
	class Luta{
		//Atributos...
		private $desafiado;
		private $desafiante;
		private $rounds;
		private $aprovada;
		//Metodos Publicos...
		public function marcarLuta($l1, $l2){
			if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)) {
				$this->aprovada = true;
				$this->desafiado = $l1;
				$this->desafiante = $l2;
			}else{
				$this->aprovada = false;
				$this->desafiado = null;
				$this->desafiante = null;
			}
		}
		public function Luta(){
			if ($this->getAprovada()) {
				$this->desafiado->apresentacao();
				$this->desafiante->apresentacao();
				$vencedor = rand(0,2);
				switch ($vencedor) {
					case 0://Empate...
						echo "<p>Empate!</p>";
						$this->desafiado->empatarLuta();
						$this->desafiante->empatarLuta();
						break;
					
					case 1://Ganhou Desafiado...
						echo "<p>{$this->desafiado->getNome()} venceu!</p>";
						$this->desafiado->ganharLuta();
						$this->desafiante->perderLuta();
						break;
					case 2://Ganhou Desafiante...
						echo "<p>{$this->desafiante->getNome()} venceu!</p>";
						$this->desafiante->ganharLuta();
						$this->desafiado->perderLuta();
						break;
				}
			}else{
				echo "<p>Luta não pode acontence</p>";
			}
		}
		//Métodos Especiais...
		public function getDesafiado(){
			return $this->desafiado;
		}
		public function setDesafiado($desafiado){
			$this->desafiado = $desafiado;
		}
		public function getDesafiante($desafiante){
			return $this->desafiante;
		}
		public function getRounds(){
			return $this->rounds;
		}
		public function setRounds($rounds){
			$this->rounds = $rounds;
		}
		public function getAprovada(){
			return $this->aprovada;
		}
		public function setAprovada($aprovada){
			$this->aprovada = $aprovada;
		}
	}
?>