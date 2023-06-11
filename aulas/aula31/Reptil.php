<?php
    require_once 'Animal.php';
    class Reptil extends Animal{
        //Atributos...
        private $corEscama;
        //Metodos Abstratos...
        public function Locomover(){
            echo "Rastejando!...";
        }
        public function Alimentar(){
            echo "Comendo Vegetais!...";
        }
        public function EmitirSom(){
            echo "Som de Réptil!...";
        }
         //Metodos Especias...
         public function getCorEscama(){
            return $this->corEscama;
        }
        public function setCorEscama($corEscama){
            $this->corEscama = $corEscama;
        }
    }
?>