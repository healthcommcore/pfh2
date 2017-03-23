<?php
session_start();
?>
<html>

<head>

</head>


<body>

HI

<?php


echo "yse";

echo "<br> ".$_SESSION["test1"];

echo "<br> ".$_SESSION["test2"];


echo "<br> ".$_SESSION["test3"]."<br>";

print_r($_SESSION);

?>
<br>
Kill session then reprint<br>

<?php
session_destroy();

foreach ($_COOKIE[] as $name => $value) {
       setcookie ($name, "", time() - 3600);
   }

foreach($_SESSION AS $key=>$val){
unset($_SESSION[$key]);	
	
}


echo "<br> ".session_id()."<br>";

//echo "yse";

//echo "<br> ".$_SESSION["test1"];

//echo "<br> ".$_SESSION["test2"];


//echo "<br> ".$_SESSION["test3"]."<br>";

//print_r($_SESSION);

?>


</body>

</html>



