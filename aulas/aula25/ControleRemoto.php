<?php
	require_once 'Controlador.php';
	class ControleRemoto implements Controlador{
		//atributos
		private $volume;
		private $ligado;
		private $tocando;

		//Métodos Especiais
		public function __construct(){
			$this->volume = 50;
			$this->ligado = false;
			$this->tocando = false;
		}
		private function getVolume(){
			return $this->volume;
		}
		private function setVolume($v){
			$this->volume = $v;
		}
		private function getLigado(){
			return $this->ligado;
		}
		private function setLigado($l){
			$this->ligado = $l;
		}
		private function getTocando(){
			return $this->tocando;
		}
		private function setTocando($t){
			$this->tocando = $t;
		}
		public function ligar(){
			$this->setLigado(true);
		}
		public function desligar(){
			$this->setLigado(false);
		}
		public function abrirMenu(){
			echo "<br>Esta ligado?:" .($this->getLigado())?"SIM":"NÂO";
			echo "<br>Está tocando?:".($this->getVolume())?"SIM":"NÃO";
			echo "<br>Volume: ".($this->getVolume());
			for($i = 0;$i < $this->getVolume();$i+=10){
				echo "|";
			}
			echo "<br>";
		}
		public function fecharMenu(){
			echo "Fechando Menu...";
		}
		public function maisVolume(){
			if ($this->getLigado()) {
				$this->setVolume($this->getVolume() + 5);
			}else{
				echo "<p>Erro! Não posso aumentar o volume</p>";
			}
		}
		public function menosVolume(){
			if ($this->getLigado()) {
				$this->setVolume($this->getVolume() - 5);
			}else{
				echo "<p>Erro! Não posso </p>";
			}
		}
		public function ligarMudo(){
			if ($this->getLigado() and $this->getVolume() > 0){
				$this->setVolume(0);
			}
		}
		public function desligarMudo(){
			if($this->getLigado() and $this->getVolume() == 0){
				$this->setVolume(50);
			}
		}
		public function pause(){
			if ($this->getLigado() and !($this->getTocando())) {
				$this->setTocando(true);
			}
		}
		public function play(){
			if ($this->getLigado() and $this->getTocando()) {
				$this->setTocando(false);
			}
		}
	}

?>