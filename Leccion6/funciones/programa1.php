<?php

function suma($a, $b) {
    $c = $a + $b;
    return $c;
}
function resta($a, $b) {
    $c = $a - $b;
    return $c;
}

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = suma($n1, $n2);
$n4 = resta($n1, $n2);
echo "Sumar: $n1 + $n2 =$n3";
echo "<br>";
echo "Restar: $n1 - $n2 =$n4";
?>