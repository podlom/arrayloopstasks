<?php
$chislo = 4446455;
$find = 5;
$num = 0;

$array = str_split (  $chislo ,  1  );

foreach ($array as $key => $value) {
    if ($value == $find ) {
        $num+=1;
    }
}

echo 'Строка '.$chislo.'<br>';
echo 'Искомое число '.$find.'<br>';
//echo '<p>Масив:</p><pre>' . var_export($array, 1) . '</pre><br>';
echo 'Число вхождений '.$num;



?>





