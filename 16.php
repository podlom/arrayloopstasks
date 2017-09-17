<?php

$array = [
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8,
    9,
];

//echo ' <pre>' . print_r($array, 1) . '</pre><br>';

foreach ($array as $key => $value) {
    echo $value;
    if ($value % 3 == 0){
        echo'<br>';
    }else{
        echo ", ";
    }
    
}

?>





