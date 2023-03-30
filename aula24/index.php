<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exemplo Prático com Objetos</title>
</head>
<body>
	<pre>
	<?php
	 require_once 'ContaBanco.php';
	 $p1 = new ContaBanco();//jubileu
	 $p2 = new ContaBanco();//Creuza
	 $p1->AbrirConta("CC");
	 $p1->setNumConta(1111);
	 $p1->setDono("Jubileu");
	 $p2->AbrirConta("CP");
	 $p2->setNumConta(2222);
	 $p2->setDono("Creuza");

	 $p1->Depositar(300);
	 $p2->Depositar(500);

	 $p2->Sacar(100);

	 $p1->PagarMensal();
	 $p2->PagarMensal();

	 $p2->Sacar(1000);

	 $p1->FechaConta();
	 $p2->FechaConta();

	 $p1->Sacar(338);
	 $p2->Sacar(538);

	 $p1->FechaConta();
	 $p1->FechaConta();
	 
	 print_r($p1);
	 print_r($p2);
	?>
	</pre>
</body>
</html>