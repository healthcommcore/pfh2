<?
include("includes/site-functions.php");
$sectionID="other";
$errMsg="";

// connect to database
$mysqlID=dbConnect();


//$sql="INSERT INTO PFHUserInfo (firstName,lastName,username,password,email,startdate,gender,treatmentRadiation,treatmentChemotherapy,treatmentSurgery,treatmentUnknown,smokingIncreasesProblems,isAddicted,friendsSmoke,stage) VALUES(";

// LOAD USER SPECS
//$resultID=mysql_query("SELECT * FROM PFHUserInfo WHERE LENGTH(contentViewed)<255",$mysqlID);
//if ($resultID) {
//    if (mysql_num_rows($resultID)>0) {
//        $specs=mysql_fetch_array($resultID,MYSQL_ASSOC);
//        $HTTP_POST_VARS=$specs;
//        $HTTP_POST_VARS["userID"]=$specs["id"];
//    }
//}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title></title>
    
    <link rel="stylesheet" href="includes/styles-n.css" type="text/css">
    <style type="text/css">
    @import url(includes/styles-ie.css);
    </style>
</head>


<body bgcolor="#D9E6A8">
<?
$resultID=mysql_query("SELECT * FROM PFHUserInfo WHERE LENGTH(contentViewed)<255",$mysqlID);
if ($resultID) {
    if (mysql_num_rows($resultID)>0) {
        while ($specs=mysql_fetch_array($resultID,MYSQL_ASSOC)) {
            $zeroPad="";
            for ($i=0; $i<(255-strlen($specs["contentViewed"])); $i++) {
                $zeroPad.="0";
            }
?>
            <?=$specs["id"]?>: <?=$specs["contentViewed"]?><span style="color:#CC0000;"><?=$zeroPad?></span><br>
<?
            $newVAL=$specs["contentViewed"].$zeroPad;
            $resultID_TMP=mysql_query("UPDATE PFHUserInfo SET contentViewed=\"".$newVAL."\" WHERE (id=".$specs["id"].")",$mysqlID);
        }
    }
}
?>

</body>
</html>
<? dbClose(); ?>

