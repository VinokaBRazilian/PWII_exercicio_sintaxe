<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 9</title>
    <link href="bootstrap.min.css" rel="stylesheet"/>

</head>
<body>

<p> <a href="exercicio8.php"> Exercicio 8 </a> </p>
<p> <a href="exercicio10.php"> Exercicio 10 </a> </p>

<br>
<h1> Exercicio 9 - Verificação de Tamanho de Senha</h1>



<?php 

$senha = "Password";

if(strlen($senha) >= 8)
{
echo "Resultado = A senha é válida";
}
else
echo "Resultado = A senha nao contem 8 caracteres";

?>

<script src="bootstrap.bundle.min.js"><script/>
</body>
</html>