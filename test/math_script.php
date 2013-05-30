<?PHP
print "<h1 style=text-align:center>Takes the price of two items adds them together to
give you the subtotal, tax, and then the total w/tax included.(Round function utilized)</h1>";

$item1 = 15.75;
$item2 = 12.99;
$tax = .05;

$subtotal = $item1 + $item2;
$taxtotal = ($item1 + $item2) * $tax;

$total = $subtotal +$taxtotal;

$total = round($total, 2);


print "item1: $item1</br>
item2: $item2;</br>
Subtotal: $subtotal</br>
Tax: $taxtotal </br>
Total: $total";
?>