<?

$mysqlID=mysql_connect("hccweb4.dfci.harvard.edu","scripts","scripts");
mysql_select_db("publicWebserver",$mysqlID);

$allUsers=array();
$resultID=mysql_query("SELECT * FROM PFHUserInfo WHERE (username!=\"\") AND (password!=\"\") AND (email LIKE \"%@%\") AND (email NOT LIKE \"%@pfhonline.org%\")",$mysqlID);
if ($resultID) {
    if (mysql_num_rows($resultID)>0) {
        while ($specs=mysql_fetch_array($resultID,MYSQL_ASSOC)) {
            $allUsers[$specs["username"]]=array($specs["password"],$specs["email"]);
        }
    }
}


mysql_select_db("PFH3",$mysqlID);

$userID=10;
reset($allUsers);
while (list($k,$v)=each($allUsers)) {
    if ($k!="pfh3") {
        $username=$k;
        $password=md5($v[0]);
        $email=$v[1];
        $sql="INSERT INTO phpbb_users (user_id,username,user_password,user_regdate,user_timezone,user_style,user_lang,user_dateformat,user_viewemail,user_attachsig,user_allowhtml,user_allowbbcode,user_allowavatar,user_notify,user_rank,user_email) VALUES (".$userID.",\"".$username."\",\"".$password."\",".time().",-5.00,1,\"english\",\"D M d, Y g:i A\",0,0,0,0,0,0,3,\"".$email."\")";
        $resultID=mysql_query($sql,$mysqlID);
        $userID++;
if (!$result) {
   echo mysql_error()."<br>\n";
}
    }
}

mysql_close($mysqlID);


echo "ok";


?>
     