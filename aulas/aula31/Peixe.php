<?php
    require_once 'Animal.php';
    class Peixe extends Animal{
        //Atributos...
        private $corEscama;
        //Metodos Abstratos...
        public function Locomover(){
            echo "Nadando!...";
        }
        public function Alimentar(){
            echo "Comendo Substancias";
        }
        public function EmitirSom(){
            echo "peixe não emitir som!..";
        }
        //Metodos Espeicias...
        public function getCorEscama(){
            return $this->corEscama;
        }
        public function setCorEscama($corEscama){
            $this->corEscama = $corEscama;
        }
        //Metodos...
        public function SoltarBolha(){
            echo "Soltou uma bolha!...";
        }
    }
?>