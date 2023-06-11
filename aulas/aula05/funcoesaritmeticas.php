<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/style.css">
    <title>Funções Aritmeticas em PHP</title>
    <style>
        h2{
            font:15pt Arial ;
            color:#171559;
            font-weight:bold;
        }
    </style>
</head>
<body>
    <div>
        <?php
            $v1 =$_GET["x"];
            $v2 =$_GET["y"];
            echo "<h2>Valores recebidos: $v1 e $v2</h2>";
            echo "O valor absluto de $v2 e ".abs($v2);
            echo "<br>O valor de $v1<sup>$v2</sup> e ".pow($v1,$v2);
            echo "<br>A raiz de $v1 e ".sqrt($v1);
            echo "<br>O valor de $v2 arrendondado e ".round($v2);
            echo "<br>A parte inteira de $v2 e ".intval($v2);
            echo "<br>O valor de $v1 em moeda e R$".number_format($v1,2,",",".")
        ?>
    </div>
</body>
</html>