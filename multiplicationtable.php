<?php

echo <table style="width:100%">

function multiplicationtable($x,$y)
{
    for($i = 0; $i < 100; $i++ )
    {
        echo <tr>
        for($j = 0; $j < 100; $j++)
        {
            echo <td> $i * $j;
        }
    }
}

multiplicationtable(100,100);

?>
