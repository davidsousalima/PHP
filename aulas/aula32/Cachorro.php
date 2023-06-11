<?php
    require_once 'Lobo.php';
    class Cachorro extends Lobo{
        public function emitirSom(){
            echo "<p>Au !Au !Au !<p>";
        }
        function reagirFrase($frase){
            if ($frase == "Toma comida" or $frase == "Ola") {
                echo "<p>Abanar e Latir!</p>";
            }else{
                echo "<p>Rosnar!</p>";
            }
        }
        function reagirHora($hora, $min){
            if ($hora<12) {
                echo "<p>Abanar</p>";
            }elseif ($hora >= 18) {
                echo "<p>Ignorar</p>";
            }else{
                echo "<p>Abanar e Latir!</p>";
            }
        }
        function reagirDono($dono){
            if ($dono == true) {
                echo "<P>Abanar</p>";
            } else {
                echo "<p>Rosnar!</p>";
            }
            
        }
        function reagirIdade($idade, $peso){
            if ($idade<5) {
                if ($peso<10) {
                    echo "<p>Abanar</p>";
                }else{
                    echo "<p>Latir</p>";
                }
            } else {
                if ($peso < 10) {
                    echo "<p>Rosnar</p>";
                } else {
                    echo "<p>Ignorar</p>";
                }
                
            }
            
        }
    }
?>