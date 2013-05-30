<?PHP
print "<h1 style=text-align:center>Takes the yearly payment, calculate interest, and subtracts
from the amount that's currently owed each year until the debt owed equals zero.</h1>";

$year = 1;
$current_owed = 400000;
$annual_interest = .05;
$yearly_payment = 50000;

print "<h1>House Payment Calculator</h1>";

while($current_owed > 0){
print "Year $year You owe $current_owed</br>";
$current_owed = (($current_owed * $annual_interest) + $current_owed) - $yearly_payment;

$year++;
}

print " Year $year HOUSE IS PAID OFF!!!";
?>