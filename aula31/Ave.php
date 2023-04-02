<?php
    require_once 'Animal.php';
    class Ave extends Animal{
        //Atributos...
        private $corPena;
        //Metodos Abstratos...
        public function Locomover(){
            echo "<p>Voando!...</p>";
        }
        public function Alimentar(){
            echo "<p>Comendo Frutas!...</p>";
        }
        public function EmitirSom(){
            echo "<p>Som de Ave!...</p>";
        }
        //Metodos Especias...
        public function getCorPena(){
            return $this->corPena;
        }
        public function setCorPena($corPena){
            $this->corPena = $corPena;
        }
        //Metodos...
        public function fazerNinho(){
            echo "COnstruiu um ninho!";
        }
    }
?>