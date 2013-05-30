<?PHP

$team1 = $_POST['team1'];
$team2 = $_POST['team2'];
$result;

if ($team1 > $team2)
	{$result = "Team 1";}
elseif ($team1 < $team2)
	{$result = "Team 2";}
else 
	{$result = "No ONE";}

print "$result WINS!!!!";

?>