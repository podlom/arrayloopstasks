<?php
$rows=5;
$cols=7;
$colors = array(
        'red',
        'yellow',
        'blue',
        'gray',
        'maroon',
        'brown',
        'green',
);
$cntColors = count($colors);
?>

<table ellspacing="0" border="1" >
    <?php
    for ($i=0;$i<$rows;$i++){?>
        <tr>
            <?php
            for ($j=0;$j<$cols;$j++){
                $value = rand();
                $color =$colors[rand(0,($cntColors - 1))];
                ?>
                <td style="background-color:<?php echo $color;?>"><?php echo $value;?></td>
            <?php }?>
        </tr>
   <?php }?>
</table>




