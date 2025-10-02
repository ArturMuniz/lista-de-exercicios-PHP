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
        <h2>Questão 10: Calculando as Horas</h2>
    </header>

    <main>
<?php
echo "Digite o tempo de duração do evento em segundos: ";
$segundos = (int) readline();

$horas = intdiv($segundos, 3600);
$segundos = $segundos % 3600;

$minutos = intdiv($segundos, 60);
$segundos = $segundos % 60;

echo "Duração: " . $horas . "h " . $minutos . "m " . $segundos . "s\n";
?>

     
    </main>
</body>


</html>