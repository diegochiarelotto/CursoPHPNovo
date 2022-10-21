<?php
/*FOREACH*/
    // $arr = ['Nome01','Nome02','Nome03','Nome04'];

    
    // foreach ($arr as $key => $value) {
    //    echo 'O número da pos é '.$key.' e o valor é '.$value;
    //    echo '<hr>';
    // }

    /*FOR*/
    $arr = ['Nome01','Nome02','Nome03','Nome04'];

    $total = count($arr);

    for($i = 0; $i < $total; $i++ ){
        echo $arr[$i];
        echo '<br/>';
    }
?>
