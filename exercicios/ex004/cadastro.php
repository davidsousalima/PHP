<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
           //var_dump($_REQUEST); =  $_GET + $_POST + $_COOKIE
           $nome =$_GET["nome"] ?? "ERRO!";
           $sobrenome =$_GET["sobrenome"] ?? "nenhum dado foi encontrado";
           echo "<p>É um prazer te conhecer,<strong>$nome $sobrenome</strong>!Este é o meu site!</p>";
        ?>
    </main>
    <a href="javascript:history.go(-1)">Volta</a>
</body>
</html>