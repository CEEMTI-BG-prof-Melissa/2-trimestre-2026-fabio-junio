<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Operações Aritiméticas</title>
</head>
    <body>  
<?php
$preco = 120;
$quantidade = 3;
$desconto = 30;
$parcelas = 2;
$um = $preco * $quantidade;
$dois = $um - $desconto;
$tres = $dois / $parcelas;
$quatro = $dois + 15;
$cinco = $dois % 2;
echo "Valor total da compra: R$ $um <br>";
echo "Valor após o desconto: R$ $dois <br>";
echo "Valor de cada parcela: R$ $tres <br>";
echo "Valor com taxa de 15: R$ $quatro <br>";
echo "Resto da divisão por 2: $cinco <br>";
?>
    </body>
</html>
