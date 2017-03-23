<?
// ======================================================================================
// EMAIL CONTENT
$allEmails=array(
    // Import Day welcome email
    "WelcomeEmail"=>array(
        "subject"->"Welcome to Partnership for Health!",
        "msgBody"=>"<b>Hello [FIRSTNAME]!</b><br><br>It's time to get started with <i>Partnership for Health!</i> This is a one-of-a-kind Web site, created just for childhood cancer survivors. It has great health tips, resources, quizzes, and more. You'll also get access to the PFH forum, a unique community of other survivors of childhood cancer. Help and support with smoking issues are all just a click away, and there is even more to explore!<br><br>We have assigned you a temporary username and password for the site. The name and password are the same:<br><br><b>Name:</b> [USERNAME]<br><b>Password:</b> [PASSWORD]<br><br>Your first step in using the PFH Web site will be to change your username a password to things that are more meaningful to you.<br><br>So check out <a href=\"http://www.pfhonline.org/logonFirst.php?userID=[USERID]\">Partnership for Health</a>!<br><br><br><span style=\"font-size:9pt;\">If the links above are not clickable, copy and paste the following Web address into your Web browser's address bar: <b>http://www.pfhonline.org</b></span><br>&nbsp;"),
    // Standard Reminder
    "Standard-Reminder_precon1"=>array(
        "subject"->"Welcome to Partnership for Health!",
        "msgBody"=>"<b>Hello, [FIRSTNAME]!</b><br><br>We hope you're enjoying Partnership for Health and everything it has to offer! To get the most out of the site, be sure to check out:<ul><li>your <a href=\"http://www.pfhonline.org/you_profile1.php\">Personal Health Profile</a>, tailored to what you said about yourself in the survey</li><li><a href=\"http://www.pfhonline.org/health_bodyguy.php\">Your Body</a>, an interactive tool that explains the connection between smoking and late effects</li></ul>Thanks for being a part of Partnership for Health. Come back and visit often!<br><br><br><span style=\"font-size:9pt;\">If the links above are not clickable, copy and paste the following Web address into your Web browser's address bar:<br><br><b>http://www.pfhonline.org</b></span><br>&nbsp;"),
    "Standard-Reminder_contem1"=>array(
        "subject"->"Welcome to Partnership for Health!",
        "msgBody"=>"<b>Hello, [FIRSTNAME]!</b><br><br>We hope you're enjoying Partnership for Health and everything it has to offer! To get the most out of the site, be sure to check out:<ul><li>your <a href=\"http://www.pfhonline.org/you_profile1.php\">Personal Health Profile</a>, tailored to what you said about yourself in the survey</li><li><a href=\"http://www.pfhonline.org/health_bodyguy.php\">Your Body</a>, an interactive tool that explains the connection between smoking and late effects</li></ul>Thanks for being a part of Partnership for Health. Come back and visit often!<br><br><br><span style=\"font-size:9pt;\">If the links above are not clickable, copy and paste the following Web address into your Web browser's address bar:<br><br><b>http://www.pfhonline.org</b></span><br>&nbsp;"),
    "Standard-Reminder_prep1"=>array(
        "subject"->"Welcome to Partnership for Health!",
        "msgBody"=>"<b>Hello, [FIRSTNAME]!</b><br><br>We hope you're enjoying Partnership for Health and everything it has to offer! To get the most out of the site, be sure to check out:<ul><li>your <a href=\"http://www.pfhonline.org/you_profile1.php\">Personal Health Profile</a>, tailored to what you said about yourself in the survey</li><li><a href=\"http://www.pfhonline.org/health_bodyguy.php\">Your Body</a>, an interactive tool that explains the connection between smoking and late effects</li><li><a href=\"http://www.pfhonline.org/health_dependency.php\">Are You Dependent on Cigarettes?</a>, a quick quiz to help you see whether or not you are addicted to the nicotine in cigarettes</li><li>our <a href=\"http://www.pfhonline.org/health_pharmo.php\">Quit-smoking Medications quiz</a> to help you figure out which quit-smoking medication might be right for you</li></ul>Thanks for being a part of Partnership for Health. Come back and visit often!<br><br><br><span style=\"font-size:9pt;\">If the links above are not clickable, copy and paste the following Web address into your Web browser's address bar:<br><br><b>http://www.pfhonline.org</b></span><br>&nbsp;"),
    "Standard-Reminder_action1"=>array(
        "subject"->"Welcome to Partnership for Health!",
        "msgBody"=>"<b>Hello, [FIRSTNAME]!</b><br><br>We hope you're enjoying Partnership for Health and everything it has to offer! To get the most out of the site, be sure to check out:<ul><li>your <a href=\"http://www.pfhonline.org/you_profile1.php\">Personal Health Profile</a>, tailored to what you said about yourself in the survey</li><li><a href=\"http://www.pfhonline.org/health_bodyguy.php\">Your Body</a>, an interactive tool that explains the connection between smoking and late effects</li><li><a href=\"http://www.pfhonline.org/health_dependency.php\">Are You Dependent on Cigarettes?</a>, a quick quiz to help you see whether or not you are addicted to the nicotine in cigarettes</li><li>our <a href=\"http://www.pfhonline.org/health_pharmo.php\">Quit-smoking Medications quiz</a> to help you figure out which quit-smoking medication might be right for you</li></ul>Thanks for being a part of Partnership for Health. Come back and visit often!<br><br><br><span style=\"font-size:9pt;\">If the links above are not clickable, copy and paste the following Web address into your Web browser's address bar:<br><br><b>http://www.pfhonline.org</b></span><br>&nbsp;"),
    // Never_1, First never logged in email
    "Never_1"=>array(
        "subject"=>"Come check out Partnership for Health!",
        "msgBody"=>"Hello [FIRSTNAME]!<br><br>Come on by and check out Partnership for Health! It's your chance to get up-to-date health information created just for people who had serious illnesses during childhood. There's a whole community of PFH members who are already taking steps toward a healthier future, and you can be a part of it!<br><br>Everything is just a click away at <a href=\"http://www.pfhonline.org/logonFirst.php?userID=[USERID]\">www.pfhonline.org</a>. Here's your personal info to get started using the site:<br><br>login: <b>[USERNAME]</b><br>password: <b>[PASSWORD]</b><br><br><br><span style=\"font-size:9pt;\">If the link above is not clickable, copy and paste the following Web address into your Web browser's address bar.<br><br><b>http://www.pfhonline.org</b></span><br>&nbsp;"),
    // Never_2, Second no recent login reminder (after 5 weeks of no logins)
    "Never_2"=>array(
        "subject"=>"Don't miss out on Partnership for Health!",
        "msgBody"=>"Hello [FIRSTNAME]!<br><br>We notice that you haven't had a chance to visit Partnership for Health. Try to come by sometime &#150; you'll like what you see! It's a one-of-a-kind Web site, with great health information for mind and body.<br><br>Everything is just a click away at <a href=\"http://www.pfhonline.org/logonFirst.php?userID=[USERID]\">www.pfhonline.org</a>. Here's your personal info to get started using the site:<br><br>login: <b>[USERNAME]</b><br>password: <b>[PASSWORD]</b><br><br>If you're having difficulty getting to the site or finding your way around, please <a href=\"mailto:pfh@hcc-web.org\">send an email</a> to Katie, our PFH Peer Counselor. She'll help you troubleshoot, so you can explore everything the site has to offer.<br><br><br><span style=\"font-size:9pt;\">If the link above is not clickable, copy and paste the following Web address into your Web browser's address bar.<br><br><b>http://www.pfhonline.org</b></span><br>&nbsp;"),
    // Newsletter emails
    "News"=>array(
        "subject"=>"", // Variable
        "msgBody"=>"Hello [FIRSTNAME],<br><br>We've got new information on the Partnership for Health Web site that may interest you! Come on back and check out:<ul><li>[NEWSCOPY]</li></ul><br><br><span style=\"font-size:9pt;\">If the links above are not clickable, copy and paste the following Web address into your Web browser's address bar.<br><br><b>http://www.pfhonline.org</b></span><br>&nbsp;")
    );
$newsletterSubjects=array(
    3=>"Visit pfhonline.org this week for new information",
    5=>"See what's new on Partnership for Health!",
    7=>"Want to know what's happening on Partnership for Health? ",
    9=>"We've got new info for you on pfhonline.org!",
    11=>"There's more to see on Partnership for Health",
    13=>"Come on back to Partnership for Health for new info!",
    15=>"pfhonline.org has more new stuff for you");
// ======================================================================================



// ======================================================================================
// CONNECT TO DATABASE (4)
$mysqlID=mysql_connect("hccweb4.dfci.harvard.edu","scripts","scripts");
mysql_select_db("publicWebserver",$mysqlID);
// --------------------------------------------------------------------------------------

// --------------------------------------------------------------------------------------
// Look up all users who have NEVER logged in
$allRecipients=array();
$allFlagged=array();
$numRecords=0;
$resultID=mysql_query("SELECT * FROM PFHUserInfo WHERE (importDate>0) AND (LENGTH(studyID)>0) AND (isLogged<1) AND (startdate<1)",$mysqlID);
if ($resultID) {
    if (mysql_num_rows($resultID)>0) {
        while ($specs=mysql_fetch_array($resultID,MYSQL_ASSOC)) {
            $timePassed=time()-$specs["importDate"];
            $specs["weekNum"]=floor($timePassed/(86400*7));
            // grab only those participants who have been in the project for a specific number of weeks
            $validWeekNums=array(0,1,2,3,4,5,7,9,11,13,15,17,19,21,23);
            if (in_array($specs["weekNum"],$validWeekNums)) {
                // grab only those participants within a day (24 hours) of an importDate anniversary-week
                if (($timePassed-($specs["weekNum"]*(86400*7)))<86400) {
                    if (ereg("^[^@]+@[^.]+.",$specs["email"])) {
                        // email checked out
                        $allRecipients[]=$specs;
                    } else {
                        // email failed
                        $allFlagged[]=$specs;
                    }
                    $numRecords++;
                }
            }
        }
    }
}
// --------------------------------------------------------------------------------------

// --------------------------------------------------------------------------------------
// DISCONNECT FROM DATABASE
mysql_close($mysqlID);
// ======================================================================================



// ======================================================================================
// CONNECT TO DATABASE (2)
$mysqlID=mysql_connect("hccweb2.dfci.harvard.edu","scripts","scripts");
mysql_select_db("publicWebserver",$mysqlID);
// --------------------------------------------------------------------------------------

// --------------------------------------------------------------------------------------
// report NO RECORDS FOUND
if ($numRecords==0) {
    $resultID=mysql_query("INSERT INTO PFHEmailSYSLOG (timestamp,sysMsg) VALUES (".time().",\"SEARCHING: participants who have NEVER logged in&#133; no records found\")",$mysqlID);
    exit();
}
// --------------------------------------------------------------------------------------

// --------------------------------------------------------------------------------------
// report ALL FLAGGED for inspection
reset($allFlagged);
if (count($allFlagged)>0) $resultID=mysql_query("INSERT INTO PFHEmailSYSLOG (timestamp,sysMsg) VALUES (".time().",\"SEARCHING: participants who have NEVER logged in&#133; found&#133; incomplete e-mail addresses\")",$mysqlID);
while (list($k,$v)=each($allFlagged)) {
    $weekNum=$v["weekNum"];
    $emailCode="News";
    if ($weekNum==0) $emailCode="WelcomeEmail";
    if ($weekNum==1) $emailCode="Standard_Reminder";
    if ($weekNum==2) $emailCode="Never_1";
    if ($weekNum==4) $emailCode="Never_2";
    $sql="INSERT INTO PFHEmail (userID,studyID,firstName,lastName,email,username,dateSent,code,failed,notes) VALUES (";
    $sql.=$v["id"].",";
    $sql.="\"".$v["studyID"]."\",";
    $sql.="\"".$v["firstName"]."\",";
    $sql.="\"".$v["lastName"]."\",";
    $sql.="\"".$v["email"]."\",";
    $sql.="\"".$v["username"]."\",";
    $sql.=time().",";
    $sql.="\"".$emailCode."\",";
    $sql.="1,";
    $sql.="\"incomplete e-mail address\")";
    $resultID=mysql_query($sql,$mysqlID);
}
// --------------------------------------------------------------------------------------

// --------------------------------------------------------------------------------------
// report ALL SUCCESSFUL RECIPIENTS
reset($allRecipients);
if (count($allRecipients)>0) $resultID=mysql_query("INSERT INTO PFHEmailSYSLOG (timestamp,sysMsg) VALUES (".time().",\"SEARCHING: participants who have NEVER logged in&#133; found&#133; sending reminders\")",$mysqlID);
while (list($k,$v)=each($allRecipients)) {
    $weekNum=$v["weekNum"];
    $emailCode="News";
    if ($weekNum==0) $emailCode="WelcomeEmail";
    if ($weekNum==1) $emailCode="Standard_Reminder";
    if ($weekNum==2) $emailCode="Never_1";
    if ($weekNum==4) $emailCode="Never_2";
    $emailTo="joe_charbonneau@dfci.harvard.edu";
//    $emailTo=trim($v["email"]);
    $emailTxt=$allEmails[$emailCode]["msgBody"];
    $emailTxt=ereg_replace("\[FIRSTNAME\]",ucfirst($v["firstName"]),$emailTxt);
    $emailTxt=ereg_replace("\[USERNAME\]",$v["username"],$emailTxt);
    $emailTxt=ereg_replace("\[PASSWORD\]",$v["password"],$emailTxt);
    $emailTxt=ereg_replace("\[USERID\]",$v["id"],$emailTxt);
    if ($emailCode=="News") {
        if ($weekNum<16) $allEmails[$emailCode]["subject"]=$newsletterSubjects[$weekNum];
        if ($weekNum>16) $allEmails[$emailCode]["subject"]=$newsletterSubjects[$weekNum-14];
        $emailTxt=ereg_replace("\[NEWSCOPY\]","",$emailTxt);
    }
    $emailSubject=$allEmails[$emailCode]["subject"];
    $sql="INSERT INTO PFHEmail (userID,studyID,firstName,lastName,email,username,dateSent,code) VALUES (";
    $sql.=$v["id"].",";
    $sql.="\"".$v["studyID"]."\",";
    $sql.="\"".$v["firstName"]."\",";
    $sql.="\"".$v["lastName"]."\",";
    $sql.="\"".$v["email"]."\",";
    $sql.="\"".$v["username"]."\",";
    $sql.=time().",";
    $sql.="\"".$emailCode."\")";
    $resultID=mysql_query($sql,$mysqlID);
    include("includes/email.php");
}
// --------------------------------------------------------------------------------------

// --------------------------------------------------------------------------------------
// DISCONNECT FROM DATABASE
mysql_close($mysqlID);
// ======================================================================================


echo "ok";
exit();
?>
