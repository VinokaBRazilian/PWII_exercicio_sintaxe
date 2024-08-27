<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 14</title>
    <link href="bootstrap.min.css" rel="stylesheet"/>

</head>
<body>

<p> <a href="exercicio13.php"> Exercicio 13 </a> </p>

<br>
<h1> Exercicio 14 - Números Pares com for</h1>



<?php 

$numero = 1;

for($i=$numero;$i<=50;$i++)
{
$resto = $numero%2;

if($resto == 0)
{
echo "Numero par encontrado: $numero <br>";

}

$numero++;

}


?>

<script src="bootstrap.bundle.min.js"><script/>
</body>
</html>