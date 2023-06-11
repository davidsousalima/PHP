<?php
    abstract class Animal{
        //Atributos...
        protected $peso;
        protected $idade;
        protected $membros;
        //Métodos Abstratos...
        abstract public function Locomover();
        abstract public function Alimentar();
        abstract public function EmitirSom();
        //Métodos Especias...
        public function getPeso(){
            return $this->peso;
        }
        public function setPeso($peso){
            $this->peso = $peso;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function setIdade($idade){
            $this->idade = $idade;
        }
        public function getMembros(){
            return $this->membros;
        }
        public function setMembros($membros){
            $this->membros = $membros;
        }
    }
?>