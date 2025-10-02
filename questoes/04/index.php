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
        <h2>Questão 04: Tinta para Pintura</h2>
    </header>

    <main>
<?php
echo "Digite o tamanho da área a ser pintada em metros quadrados: ";
$area = (float) readline();

$lata = 18;
$preco = 80;
$cobertura = 54;

$quantidade = ceil($area / $cobertura);
$total = $quantidade * $preco;

echo "Você precisará de $quantidade latas de tinta.\n";
echo "Preço total: R$ $total\n";
?>
     
    </main>
</body>


</html>