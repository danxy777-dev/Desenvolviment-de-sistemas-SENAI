<?php
$produtos = [
    ["nome" => "Notebook", "preco" => 3500],
    ["nome" => "Celular", "preco" => 2000],
    ["nome" => "Tablet", "preco" => 1500]
];

$total = 0;

foreach ($produtos as $produto) {
    echo $produto["nome"] . " - R$ " . $produto["preco"] . "<br>";
    
    $total += $produto["preco"]; // soma ao total
}

echo "<br>Total: R$ " . $total;
?>