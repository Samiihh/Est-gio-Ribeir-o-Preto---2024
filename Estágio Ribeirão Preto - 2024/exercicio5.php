<?php
function inverter_string($string) {
    $inverted_string = "";
    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $inverted_string .= $string[$i];
    }
    return $inverted_string;
}

// String fornecida pelo usuário
$string_original = readline("Digite uma string para inverter: ");

// Chamando a função para inverter a string
$string_invertida = inverter_string($string_original);

// Exibindo a string invertida
echo "String invertida: $string_invertida\n";
?>
