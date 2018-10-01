<html>

<body>

    <link rel="stylesheet" href="style.css">
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


echo "<h1> <u>Receipt</u></h1>";
$item1 = $_POST["item1"];
$item2 = $_POST["item2"];
$item3 = $_POST["item3"];

$shipping = $_POST["shipping"];
$shippingCost = 0;
if ($shipping == "Seven Day")
{
    $shippingCost = 0;
}
else if($shipping == "Over Night")
{
    $shippingCost = 50.00;
}
else
{
    $shippingCost = 5.00;
}
$total = ($item1 * .50) + ($item2) + ($item3 * 3) + $shippingCost;
echo "<table id='table'>";
echo "<tr>". "<th></th>" . "<th>Quantity</th>" . "<th>Cost Per item</th>" . "<th>Sub Total</th>";
echo "<tr>" . "<th>Item 1</th>" . "<td align='center'>$item1</td>" . "<td align='center'> $0.50</td>" . "<td align='center'>$" . $item1 * .50 . "</td>";
echo "<tr>" . "<th>Item 2</th>" . "<td align='center'>$item2</td>" . "<td align='center'> $1.00</td>" . "<td align='center'>$" . $item2  . "</td>";
echo "<tr>" . "<th>Item 3</th>" . "<td align='center'>$item3</td>" . "<td align='center'> $3.00</td>" . "<td align='center'>$" . $item3 * 3 . "</td>";
echo "<tr>" . "<th>Shipping</th>" . "<td align='center'>$shipping</td>" . "<td></td>" . "<td align='center'>$shippingCost</td>";
echo "<tr>" . "<th>Total</th>" ."<td></td>" . "<td></td>" . "<td align = 'center'> $$total</td>";
echo "</table>";

 ?>
 </body>
</html>
