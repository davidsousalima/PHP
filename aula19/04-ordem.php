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
        <pre>
        <?php
             $v =array(2=>"A",5=> "J",0=> "M",3=> "X",4=> "K");
             echo "O vetor tem ".count($v). " elementos";
             print_r($v);
             krsort($v);
             print_r($v);
        ?>
        </pre>
    </div>
</body>
</html>