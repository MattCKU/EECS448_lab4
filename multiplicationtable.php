<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

echo "<table>";

for($x = 1; $x <= 100; $x++)
{
    echo "<tr>";
    for($y = 1; $y <= 100; $y++)
    {
        echo "<td>". $x * $y . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
