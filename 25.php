<?php
$maxkey=0;
$minkey=0;
$max=0;
$min=100;
$A = [];
$number = rand(10, 20);
for ($i = 0; $i < $number; $i++) {
    $A[$i] = rand(-100, 100);
}
echo '<p>Given array:</p><pre>' . var_export($A, 1) . '</pre>';
echo '<hr>';

foreach ($A as $key => $value) {
    if ($value > $max ) {
        $max = $value;
        $maxkey = $key;
    }
    if ($value < $min ) {
        $min = $value;
        $minkey = $key;
    }
}

echo 'Максимальный елемент:'.$max.' '.'Номер:'.$maxkey.'<br>';
echo 'Минимальный елемент:'.$min.' '.'Номер:'.$minkey;
echo '<hr>';

$A[$maxkey]=$min;
$A[$minkey]=$max;

echo '<p>New array:</p><pre>' . var_export($A, 1) . '</pre>';

?>





