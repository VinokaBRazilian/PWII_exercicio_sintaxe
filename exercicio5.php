<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
    <link href="bootstrap.min.css" rel="stylesheet"/>

</head>
<body>

<p> <a href="exercicio4.php"> Exercicio 4 </a> </p>
<p> <a href="exercicio6.php"> Exercicio 6 </a> </p>

<br>
<h1> Exercicio 5 - Verificação de Faixa Etária</h1>



<?php 

$idade = 30;

if ($idade < 13)
{
    echo "Resultado = Criança";
}
else
if ($idade > 12 && $idade < 18)
{
    echo "Resultado = Adolescente";
}
else
if ($idade > 17 && $idade <65)
{
echo "Resultado = Adulto";
}
else

echo "Resultado = Idoso";







?>

<script src="bootstrap.bundle.min.js"><script/>
</body>
</html>