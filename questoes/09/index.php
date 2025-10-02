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
        <h2>Questão 09: Dias de Vida</h2>
    </header>

    <main>

<?php
echo "Digite seu nome: ";
$nome = readline();

echo "Digite sua idade em anos: ";
$idade = (int) readline();

$dias = $idade * 365;

echo $nome . ", você já viveu aproximadamente " . $dias . " dias.\n";
?>

    </main>
</body>


</html>