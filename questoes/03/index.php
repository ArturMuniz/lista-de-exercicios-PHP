<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF--8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Exercícios PHP</title>
    <link rel="stylesheet" href="./../../styles.css">
</head>

<body>

    <header>
        <h2>Questão 03: Horas trabalhadas</h2>
    </header>

    <main>

<?php

echo "Digite quanto você ganha por hora: ";
$valorHora = (float) readline();


echo "Digite o número de horas trabalhadas no mês: ";
$horasTrabalhadas = (int) readline();

// Calcula o salário
$salario = $valorHora * $horasTrabalhadas;


echo "Seu salário neste mês é: R$ " . number_format($salario, 2, ",", ".") . "\n";
?>

     
    </main>
</body>


</html>