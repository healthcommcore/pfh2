<?php

$_SESSION=true;

session_start();


print_r($_SESSION);

$_SESSION["test1"]="It works";

$_SESSION["test2"]="It works yes";


$_SESSION["test3"]="Yes it works";

print_r($_SESSION);

?>

<a href="testSess2.php">GO</a>