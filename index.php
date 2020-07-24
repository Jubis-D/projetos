<html>
<head>
<title>Array</title>
</head>
<body>
<?php
# array.php

$valores[]=23;
$valores[]=35;
$valores[]="teste";

echo "Conteúdo do array valores[]: $valores[0] - $valores[1] - $valores[2]<br>";

$estados = array("SP","MG","RJ","RS","SC","PR","DF","ES","AM","AC","PA");
echo "$estados[0] - $estados[1] - $estados[2] <p>";

foreach($estados as $valor){
    echo "$valor - ";
}

?>

</body>
</html>