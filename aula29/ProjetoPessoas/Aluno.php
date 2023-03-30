<?php
	require_once 'Pessoa.php';
	class Aluno extends Pessoa{
		private $mat;
		private $curso;

		public function cancelarMat(){
			echo "<p>Matricula será cancelada</p>";
		}

		public function getMat(){
			return $this->mat;
		}
		public function setMat($matricula){
			$this->mat = $matricula;
		}
		public function getCurso(){
			return $this->curso;
		}
		public function setCurso($curso){
			$this->curso = $curso;
		}
	}
?>