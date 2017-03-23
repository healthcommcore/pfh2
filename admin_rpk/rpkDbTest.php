<?


include("includes/site-functions.php");


// connect to database
$mysqlID=dbConnect();

$sql="SELECT * FROM PFHUserInfo";

$resultID=mysql_query($sql, $mysqlID);

$namez=array();

if(!$resultID){
	
echo "nogoz".mysql_error($mysqlID);
}else{

 while ($specs=mysql_fetch_array($resultID,MYSQL_ASSOC)) {
 	
 	$namez[]=$specs[username];

 	
 }
 
 print_r($namez);
 
}

?>