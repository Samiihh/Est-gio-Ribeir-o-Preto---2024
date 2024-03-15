<?php
function fibonacci_sequence($n) {
    $fib_seq = array(0, 1);
    while ($fib_seq[count($fib_seq) - 1] < $n) {
        $fib_seq[] = $fib_seq[count($fib_seq) - 1] + $fib_seq[count($fib_seq) - 2];
    }
    return $fib_seq;
}

function is_in_fibonacci_sequence($num, $fib_seq) {
    return in_array($num, $fib_seq);
}

$num = readline("Digite um número para ver se pertence à  Fibonacci: ");

$fib_seq = fibonacci_sequence($num);
if (is_in_fibonacci_sequence($num, $fib_seq)) {
    echo "O número $num pertence à sequência de Fibonacci.\n";
} else {
    echo "O número $num não pertence à sequência de Fibonacci.\n";
}
?>
