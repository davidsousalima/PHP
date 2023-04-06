<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13 - POO</title>
</head>
<body>
    <?php
        require_once 'Animal.php';
        require_once 'Manifero.php';
        require_once 'Lobo.php';
        require_once 'Cachorro.php';
        $c1 = new Cachorro();
        $c1->emitirSom();
        $c1->reagirFrase("Ola");//Abanar e latir
        $c1->reagirFrase("Vai Apanhar");//Rosnar

        $c1->reagirHora(11,45);//Abanar
        $c1->reagirHora(21,00);//ignorar

        $c1->reagirDono(true);//Abanar
        $c1->reagirDono(false);//Rosnar e latir

        $c1->reagirIdade(2, 12.5);//Latir
        $c1->reagirIdade(17, 4.5);//Rosnar
    ?>
</body>
</html>