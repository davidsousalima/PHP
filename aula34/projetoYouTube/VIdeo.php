<?php
	require_once 'AcoesVideo.php';
	class Video implements AcoesVideo{
		//Atributos...
		private $titulo;
		private $avalicao;
		private $view;
		private $curtida;
		private $reproduzindo;
		//Métodos Abstratos...
		public function play(){
			$this->reproduzindo = true;
		}
		public function pause(){
			$this->reproduzindo = false;
		}
		public function like(){
			$this->curtida++;
		}
		//Métodos Especiais...
		public function __construct($titulo){
			$this->titulo = $titulo;
			$this->avalicao = 1;
			$this->view = 0;
			$this->curtida = 0;
			$this->reproduzindo = false;
		}
		public function getTitulo(){
			return $this->titulo;
		}
		public function setTitulo($titulo){
			$this->titulo = $titulo;
		}
		public function getAvalicao(){
			return $this->avalicao;
		}
		public function setAvaliacao($avalicao){
			$this->avalicao = $avalicao;
		}
		public function getView(){
			return $this->view;
		}
		public function setView($view){
			$this->view = $view;
		}
		public function getCurtida(){
			return $this->curtido;
		}
		public function setCurtida($curtida){
			$this->curtida = $curtida;
		}
		public function getReproduzindo(){
			return $this->reproduzindo;
		}
		public function setReproduzindo($reproduzindo){
			$this->reproduzindo = $reproduzindo;
		}

	}
?>
