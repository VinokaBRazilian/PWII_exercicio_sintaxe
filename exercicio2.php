<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
    <link href="bootstrap.min.css" rel="stylesheet"/>

</head>
<body>

<p> <a href="index.php"> Exercicio 1 </a> </p>
<p> <a href="exercicio3.php"> Exercicio 3 </a> </p>


<br>
<h1> Exercicio 2 - Idade</h1>

<?php

$anoNascimento = 2004;
$anoAtual = 2024;
$idade = $anoAtual - $anoNascimento;

echo "Resultado = $idade";





?>

<script src="bootstrap.bundle.min.js"><script/>
</body>
</html>