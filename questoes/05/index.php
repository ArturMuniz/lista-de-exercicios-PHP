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
        <h2>Questão 05: Maior de Três Números</h2>
    </header>

    <main>

   <?php
echo "Digite o primeiro número: ";
$n1 = (float) readline();

echo "Digite o segundo número: ";
$n2 = (float) readline();

echo "Digite o terceiro número: ";
$n3 = (float) readline();

$maior = $n1;

if ($n2 > $maior) {
    $maior = $n2;
}

if ($n3 > $maior) {
    $maior = $n3;
}

echo "O maior número é: $maior\n";
?>

     
    </main>
</body>


</html>