<?php
	class Caneta{
		var $modelo;
		var $cor;
		var $ponta;
		var $carga;
		var $tampada;
		function rabiscar(){
			if ($this->tampada == true) {
				echo "ERRO!Não posso rabiscar!";
			}else{
				echo "<p>Estou rabiscando...</p>";
			}
		}
		function tampar(){
			$this->tampada = true;
			if ($this->tampada == 1) {
				$this->tampada = "verdadeiro";
			}else{
				$this->tampada = "falso";
			}
		}
		function destampar(){
			$this->tampada = false;
		}
	}
?>