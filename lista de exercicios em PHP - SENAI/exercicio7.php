<?php
$produto = [
    "nome" => "Notebook",
    "preco" => 3500,
    "marca" => "Dell",
    "estoque" => 10
];

foreach ($produto as $chave => $valor) {
    echo $chave . ": " . $valor . "<br>";
}
?>