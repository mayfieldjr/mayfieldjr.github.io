<?PHP
$email = $_POST['email'];
$file = "file2.php";

file_put_contents($file, $email . PHP_EOL, FILE_APPEND);

header("location: ./thank_you.php");

?>