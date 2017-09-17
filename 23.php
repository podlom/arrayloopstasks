<?php
$chislo = 1223;
$sum = 0;

$array = str_split (  $chislo ,  1  );

foreach ($array as $key => $value) {
    $sum+=$value;
}
echo 'Строка: '.$chislo.'<br>';
//echo '<p>Масив:</p><pre>' . var_export($array, 1) . '</pre><br>';
echo 'Сума чисел в строке: '.$sum;



?>





