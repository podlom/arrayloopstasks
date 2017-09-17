<?php
$res1=1;
$A = [];
$number = rand(10, 20);
for ($i = 0; $i < $number; $i++) {
    $A[$i] = rand(-100, 100);
}
echo '<p>Given array:</p><pre>' . var_export($A, 1) . '</pre>';
echo '<hr>';
echo '<p>Елементы больше 0, с непарным индексом:</p>';

foreach ($A as $key => $value) {
    if ($key % 2 == 0) {
        if ($value > 0) {
            $res1 *= $value;
        }
    }elseif($value > 0){
        echo $value.'<br>';
    }
}
echo '<hr>';
echo '<p>Произведение елементов больше 0, с парным индексом:</p>'.$res1;
echo '<hr>';

?>





