<style>
    .weekend {
        font-weight: 900;
    }
    .current {
        font-weight: 800;
        font-style:  oblique;
        color: #0ea20f;
    }
    .other {
        font-style:  normal;
        color: #4d3ea2;
    }

</style>

<?php

$array = [
    'Monday' =>'Понедельник',
    'Tuesday' =>'Вторник',
    'Wednesday' =>'Среда',
    'Thursday' =>'Четвер',
    'Friday' =>'Пятница',
    'Saturday' =>'Субота',
    'Sunday' =>'Воскресенье',
];
//echo '<p>Масив дней недели :</p><pre>' . var_export($array, 1) . '</pre><br>';

$day = date("l");

foreach ($array as $key => $value) {
    if ($key == 'Saturday' or $key =='Sunday'){

        echo '<p class="weekend" >'.$value.'</p>';

    }else{
        echo '<p class ="other">'.$value.'</p>';
    }
    
}

?>





