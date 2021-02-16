<?php

    for($i=1;$i<=3;$i++)
    {
        for($j=1;$j<=$i;$j++)
        {
            echo"* ";
        }
        echo"\n";
    }

    echo"\n\n";

    for($i=1;$i<=3;$i++)
    {
        for($j=3;$j>=$i;$j--)
        {
            echo 4-$j." ";
        }
        echo"\n";
    }

    echo"\n\n";

    $ch="A";
    for($i=1;$i<=3;$i++)
    {
        for($j=1;$j<=$i;$j++)
        {
            echo$ch." ";
            $ch++;
        }
        echo"\n";
    }

?>