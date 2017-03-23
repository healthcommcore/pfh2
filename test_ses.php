<?
session_start();

echo  $_SESSION["stageID"]."<br>"; 
echo  $_SESSION["userID"]."<br>";
echo  $_SESSION["mstnContent"]."<br>";
echo  $_SESSION["sessID"]."SESSION<br>";
print_r( $_SESSION) ."<br>";

?>