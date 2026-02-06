<?php

$carrinho = [
    ["id" => 1, "nome" => "SSD 512GB", "preco" => 280.00, "quantidade" => 1],
    ["id" => 2, "nome" => "Memória RAM 8GB", "preco" => 150.00, "quantidade" => 2],
    ["id" => 3, "nome" => "Cabo HDMI 2.0", "preco" => 25.00, "quantidade" => 4],
    ["id" => 4, "nome" => "Mouse Gamer", "preco" => 120.00, "quantidade" => 1],
    ["id" => 5, "nome" => "Teclado Mecânico", "preco" => 350.00, "quantidade" => 1],
    ["id" => 6, "nome" => "Fonte 600W", "preco" => 420.00, "quantidade" => 1],
    ["id" => 7, "nome" => "HD Externo 1TB", "preco" => 390.00, "quantidade" => 1],
    ["id" => 8, "nome" => "Headset USB", "preco" => 180.00, "quantidade" => 2],
];

echo "<h2>Resumo do Pedido:</h2>";


$subtotalCompra = 0;

foreach ($carrinho as $item) {
    $nome = $item["nome"];
    $quantidade = $item["quantidade"];
    $preco = $item["preco"];
    $subtotal = $quantidade * $preco;

    echo "$nome <br>";
    echo "Quantidade: $quantidade <br>";
    echo "Subtotal: R$" . number_format($subtotal, 2, ',', '.') . "<br><br>";


    $subtotalCompra += $subtotal;  
}

echo "<hr>";

$desconto = 0;

if ($subtotalCompra >= 100000000) {
    $desconto = $subtotalCompra * 0.10;
    $totalFinal = $subtotalCompra - $desconto;
} else {
    $desconto = 0;
    $totalFinal = $subtotalCompra;
}


echo "Subtotal da compra: R$" . number_format($subtotalCompra, 2, ',', '.') . "<br>";
echo "Desconto".($desconto<=0?" não" : "") ." aplicado (10%): R$" . number_format($desconto, 2, ',', '.') . "<br>";
echo "Total final a pagar: R$" . number_format($totalFinal, 2, ',', '.');
