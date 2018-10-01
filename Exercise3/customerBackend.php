<?php

$item1 = $_POST["item1"];
$item2 = $_POST["item2"];
$item3 = $_POST["item3"];
$total = ($item1 * .50) + ($item) + ($item3 * 3);
//table formatting
echo "<table>";
echo "<tr>". "<th></th>" . "<th>Quantity</th>" . "<th>Cost Per item</th>" . "<th>Sub Total</th>";
echo "<tr>" . "<th>Item 1</th>" . "<td align='center'>$item1</td>" . "<td align='center'> $0.50</td>" . "<td align='center'>" . $item1 * .50 . "</td>";
echo "<tr>" . "<th>Item 2</th>" . "<td align='center'>$item2</td>" . "<td align='center'> $1.00</td>" . "<td align='center'>" . $item2  . "</td>";
echo "<tr>" . "<th>Item 3</th>" . "<td align='center'>$item3</td>" . "<td align='center'> $3.00</td>" . "<td align='center'>" . $item3 * 3 . "</td>";
echo "<tr>" . "<th>Total</th>" ."<td></td>" . "<td></td>" . "<td align = 'center'> $$total</td>";
echo "</table>";

 ?>
