<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/style.css">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $inicio =isset($_GET["n1"])?$_GET["n1"]:0;
            $final =isset($_GET["n2"])?$_GET["n2"]:0;
            $incremento =isset($_GET["n3"])?$_GET["n3"]:0;
			if($inicio > $final){
				while($inicio >= $final){
					echo " $inicio <br> ";
					$inicio -=$incremento;
				}
			}else{
				while($inicio<= $final){
					echo "$inicio <br>";
					$inicio +=$incremento;
				}
			}
            /*for ( ; $inicio <= $final ; $inicio += $incremento ) {
                echo "$inicio <br>";
            }
			*/
        ?>
		<br>
		<a href="javascript:history.go(-1)">Volta</a>
    </div>
</body>
</html>