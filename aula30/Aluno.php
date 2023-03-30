<?php
	require_once 'Pessoa.php';
	class Aluno extends Pessoa{
		//atributo...
		private $matricula;
		private $curso;
		//metodos...
		public  function PagarMensalidade(){
			echo "<p>Pagando mensalidade do aluno {$this->getNome()}</p>";
		}
		//metodos especias...
		public function getMatricula(){
			return $this->matricula;
		}
		public function setMatricula($matricula){
			$this->matricula = $matricula;
		}
		public function getCurso(){
			return $this->curso;
		}
		public function setCurso($curso){
			$this->curso = $curso;
		}
	}
?>