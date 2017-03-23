<?
include("includes/site-functions.php");
$sectionID="other";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title></title>
    
    <script language="javascript" src="includes/site-functions.js"></script>
    <link rel="stylesheet" href="includes/styles-n_<?=$sectionID?>.css" type="text/css">
    <link rel="stylesheet" href="includes/styles-n.css" type="text/css">
    <style type="text/css">
    @import url(includes/styles-ie_<?=$sectionID?>.css);
    @import url(includes/styles-ie.css);
    </style>
</head>


<body bgcolor="#D9E6A8">
<table border=0 cellpadding=0 cellspacing=0 width=770>
<tr>
    <td width=770 valign="top"><a href="index.php"><img src="images/admin_770x100.gif" width=770 height=100 border=0 alt=""></a><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=592>
        <tr>
            <td width=15><img src="/images/blank.gif" width=15 height=1 border=0 alt=""></td>
            <td width=755 valign="top" class="column2Text"><img src="/images/blank.gif" width=755 height=1 border=0 alt=""><br>

            
            <ul>
            <li><a href="edit-users.php">edit users</a></li>
<!--            <li><a href="edit-pages.php">edit pages</a></li> -->
            <li><a href="edit-email.php">preview emails</a></li>
            <li><a href="edit-ads.php">preview ads</a></li>
            <li><a href="import-users.php">import user data</a></li>
            <li><a href="user-search.php">search users</a></li>
            <li><a href="http://hccweb1.dfci.harvard.edu/awstats/awstats.pl?config=hccweb1" target="_blank">server logs</a></li>
            <li><a href="showHistory.php">individual user logs</a></li>
            </ul><br>

            <? $footerWidth=360; ?>
            <? include("includes/footer.php"); ?>
            &nbsp;</td>
        </tr></table>
    &nbsp;</td>
</tr>
</table>

</body>
</html>
