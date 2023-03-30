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
			for($i = 1;$i <= 10;$i++){
				echo " $i ";
			}
			echo "<br>";
			for($c = 10;$c >=1;$c--){
				echo " $c ";
			}
			echo "<br>";
			for($v = 0 ;$v <= 50; $v+=5){
				echo " $v ";
			}
			echo "<br>";
			for($d = 20;$d >= 0;$d-=2){
				echo "$d ";
			}
		?>
    </div>
</body>
</html>