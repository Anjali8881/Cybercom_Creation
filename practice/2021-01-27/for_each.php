<?php

$food = array('Helathy'=>
                          array('Salad','vegetable','soup'),
              'Unhealthy'=>
                          array('Maggi','Pizza','Burger'));
foreach($food as $element => $inner_array){
    echo "<b>".$element."</b><br>";
    foreach($inner_array as $item){
        echo $item."<br>";
    }
}

?>