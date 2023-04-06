<?php
    require_once 'Animal.php';
    class Manifero extends Animal{
        protected $corPelo;
        public function emitirSom(){
            echo "<p>Som de Manifero<p/>";
        }
    }
?>