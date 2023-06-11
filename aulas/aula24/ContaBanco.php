<?php
 	class ContaBanco{
 		//Atributos
 		public $numconta;
 		protected $tipo;
 		private $dono;
 		private $saldo;
 		private $status;
 		//Métodos
 		public function AbrirConta($t){
 			$this->setTipo($t);
 			$this->setStatus(true);
 			if ($t == "CC") {
 				$this->saldo = 50;
 			}else if($t == "CP"){
 				$this->saldo = 150;
 			}
 		}
 		public function FechaConta(){
 			if ($this->saldo > 0) {
 				echo "<p>Conta com dinheiro,não posso fechá-la!</p>";
 			}else if($this->saldo < 0){
 				echo "<p>Conta em débido!Impossivel encerrar!</p>";
 			}else{
 				$this->setStatus(false);
 				echo "<p>Conta de {$this->getDono()} fechada com sucesso!</p>";
 			}
 		}
 		public function Depositar($v){

 			if ($this->status == true) {
 				$this->setSaldo($this->getSaldo() + $v);
 				echo "<p>Deposito de R$ $v na conta {$this->getDono()}</p>";
 			}else{
 				echo "<p>Conta fechada. Impossivel depositar!</p>";
 			}
 		}
 		public function Sacar($v){
 			if ($this->status == true) {
 				if ($this->saldo >= $v) {
 					$this->setSaldo($this->getSaldo() - $v);
 					echo "<p>Saque de R$ $v autorizado na conta de {$this->getDono()}</p>";
 				}else{
 					echo "<p>Saldo insufiente para saque!</p>";
 				}
 			}else{
 				echo "<p>Não posso sacar de uma conta fechada</p>";
 			}
 		}
 		public function PagarMensal(){
 			if($this->getTipo()){
 				$v = 12;
 			}else if($this->tipo = "CP"){
 				$v = 20;
 			}
 			if($this->getSaldo()){
 				$this->setSaldo($this->getSaldo() - $v);
 				echo "<p>Mensalidade de R$ $v debitada na conta de {$this->getDono()}</p>";
 			}else{
 				echo "<p>Problemas com à conta. Não posso cobrar!</p>";
 			}
 		}

 		//Métodos Especiais
 		public function __construct(){
 			$this->saldo = 0;
 			$this->status = false;
 			echo "<p>Conta criada com sucesso!</p>";
 		}
 		public function setNumConta($n){
 			$this->numconta = $n;
 		} 
 		public function getNumConta(){
 			return $this->numconta;
 		}
 		public function setTipo($t){
 			$this->tipo = $t;
 		}
 		public function getTipo(){
 			return $this->tipo;
 		}
 		public function setDono($d){
 			$this->dono = $d;
 		}
 		public function getDono(){
 			return $this->dono;
 		}
 		public function setSaldo($s){
 			$this->saldo = $s;
 		}
 		public function getSaldo(){
 			return $this->saldo;
 		}
 		public function setStatus($st){
 			$this->status = $st;
 		}
 		public function getStatus(){
 			return $this->status;
 		}

 	}
?>