<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 8</title>
    <link href="bootstrap.min.css" rel="stylesheet"/>

</head>
<body>

<p> <a href="exercicio7.php"> Exercicio 7 </a> </p>
<p> <a href="exercicio9.php"> Exercicio 9 </a> </p>

<br>
<h1> Exercicio 8 - Verificação de Ano Bissexto</h1>



<?php 

$ano = 2024;

$div4 = $ano%4;

$div100 = $ano%100;

$div400 = $ano%400;

if($div400 == 0)
{
    echo "Resultado = O ano é bissexto";
}
else
if($div4 == 0)
{

if($div100 > 0)
{
echo "Resultado = O ano é bissexto";
}else

echo "Resultado = O ano não é bissexto";

}
else

echo "Resultado = O ano não é bissexto";

?>

<script src="bootstrap.bundle.min.js"><script/>
</body>
</html>