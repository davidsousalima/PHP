<?php
	require_once 'Pessoa.php';
	require_once 'Publicacao.php';
	class Livro implements Publicacao{
		private $titulo;
		private $autor;
		private $totpaginas;
		private $pagatual;
		private $aberto;
		private $leitor;
		//Métodos...
		public function Detalhes(){
			echo "<hr>";
			echo "Livro ".$this->titulo." escrito por ".$this->autor;
			echo "<br>Página: ".$this->totpaginas." atual ".$this->pagatual;
			echo "<br>Sendo lido por {$this->leitor->getNome()}";
		}
		//Métodos Especiais...
		public function __construct($autor, $titulo, $totpaginas, $leitor){
			$this->titulo = $titulo;
			$this->autor = $autor;
			$this->totpaginas = $totpaginas;
			$this->aberto = false;
			$this->pagatual = 0;
			$this->leitor = $leitor;
		}
		public function getTitulo(){
			return $this->titulo;
		}
		public function setTitulo(){
			$this->titulo = $titulo;
		}
		public function getAutor(){
			return $this->autor;
		}
		public function setAutor(){
			$this->autor = $autor;
		}
		public function getTotPaginas(){
			return $this->paginas;
		}
		public function setTotPagina(){
			$this->totpaginas = $totpaginas;
		}
		public function getPagAtual(){
			return $this->pagatual;
		}
		public function setPagAtual($pagatual){
			$this->pagatual = $pagatual;
		}
		public function getAberto(){
			return $this->aberto;
		}
		public function setAberto(){
			$this->aberto = $aberto;
		}
		public function getLeitor(){
			return $this->leitor;
		}
		public function setLeitor(){
			$this->leitor = $leitor;
		}
		public function Abrir(){
			$this->aberto = true;
		}
		public function Fechar(){
			$this->aberto = false;
		}
		public function AvancarPag(){
			$this->pagatual++;
		}
		public function VoltarPag(){
			$this->pagatual--;
		}
		public function Folhear(){
			if ($p >$this->totpaginas) {
				$this->pagatual = 0;
			}else{
				$this->pagatual = $p;
			}
		}

		
	}
?>