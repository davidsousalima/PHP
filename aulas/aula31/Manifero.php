<?php
    require_once 'Animal.php';
    class Manifero extends Animal{
        //Atributos...
        private $corPelo;
        //Métodos Abstratos...
        public function Locomover(){
            echo "Correndo!...";
        }
        public function Alimentar(){
            echo "Mamando!...";
        }
        public function EmitirSom(){
            echo "Som de manifero!...";
        }
        //Metodos Especias...
        public function getCorPelo(){
            return $this->corPelo;
        }
        public function setCorPelo($corPelo){
            $this->corPelo = $corPelo;
        }
    }
    
?>