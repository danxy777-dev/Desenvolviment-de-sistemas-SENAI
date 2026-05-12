<?php

$nomes = ["João", "Maria", "Carlos", "Ana", "Pedro"];
$emails = ["joao@email.com", "maria@email.com", "carlos@email.com", "ana@email.com", "pedro@email.com"];

for ($i = 0; $i < count($nomes); $i++) {
    echo $nomes[$i] . " - " . $emails[$i] . "<br>";
}

?>