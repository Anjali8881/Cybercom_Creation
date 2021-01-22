<?php

    $totalmarks = 600;

    if($totalmarks > 100 && $totalmarks < 200)
    {
        echo "Very poor";
    }
    else if($totalmarks > 200 && $totalmarks < 500)
    {
        echo "Average";
    }

    else if($totalmarks > 500 && $totalmarks < 700)
    {
        echo "Good";
    }

    else
    {
        echo "Excellent";
    }

?>