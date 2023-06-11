<?php
	class Lutador{
		//Atributos...
		private $nome;
		private $nacionalidade;
		private $idade;
		private $altura;
		private $peso;
		private $categoria;
		private $vitorias;
		private $derrotas;
		private $empates;
		//Métodos ...
		public function apresentacao(){
			Echo "<p>CHEGOU A HORA! O Lutador:</p>".$this->getNome();
			Echo "Veio diretamente de ".$this->getNacionalidade();
			Echo "Tem ".$this->getIdade() ."anos e pesa ".$this->getPeso()."KG";
			Echo "<br>Ele tem ".$this->getVitorias()."vitorias";
			Echo $this->getDerrotas()." derrotas e ".$this->Empate()."empates ";
		}
		public function status(){
			echo "<p>".$this->getNome()." é um peso ".$this->getCategoria();
			echo " e ja ganhou ".$this->getVitorias()." vezes, ";
			echo "perdeu ".$this->getDerrotas()." vezes e ";
			echo "empatou ".$this->getEmpate()."vezes!";
		}
		public function ganharLuta(){
			$this->setVitorias($this->getVitorias() + 1);
		}
		public  function perderLuta(){
			$this->setDerrotas($this->getDerrotas() + 1);
		}
		public function empatarLuta(){
			$this->setEmpate($this->getEmpate() + 1);
		}
		//Métodos Especiais...
		public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
			$this->nome = $no;
			$this->nacionalidade = $na;
			$this->idade = $id;
			$this->altura = $al;
			$this->setPeso($pe);
			$this->vitorias = $vi;
			$this->derrotas = $de;
			$this->empate = $em;
		}
		public function getNome(){
			return $this->nome;
		}
		public function setNome($nome){
			$this->nome = $nome;
		}
		public function getNacionalidade(){
			return $this->nacionalidade;
		}
		public function setNacionalidade($na){
			$this->nacionalidade = $na;
		}
		public function getIdade(){
			return $this->idade;
		}
		public function setIdade($idade){
			$this->idade = $idade;
		}
		public function getAltura(){
			return $this->altura;
		}
		public function setAltura($altura){

		}
		public function getPeso(){
			return $this->peso;
		}
		public function setPeso($peso){
			$this->peso = $peso;
			$this->setCategoria();
		}
		public function getCategoria(){
			return $this->categoria;
		}
		private function setCategoria(){
			if ($this->peso < 52.2) {
				$this->categoria = "Inválido!";
			}elseif($this->peso <= 70.3){
				$this->categoria = "Leve";
			}elseif($this->peso <= 83.9){
				$this->categoria = "Médio";
			}elseif ($this->peso <= 120.2) {
				$this->categoria = "Pesado";
			}else{
				$this->categoria = "Invalido!";
			}
		}
		public function getVitorias(){
			return $this->vitorias;
		}
		public function setVitorias($vitorias){
			$this->vitorias = $vitorias;
		}
		public function getDerrotas(){
			return $this->derrotas;
		}
		public function setDerrotas($derrotas){
			$this->derrotas = $derrotas;
		}
		public function getEmpate(){
			return $this->empate;
		}
		public function setEmpate($empate){
			$this->empate = $empate;
		}
	}

?>