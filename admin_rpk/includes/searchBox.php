<form name="form1" method="POST" action="user-search.php">
<input type="hidden" name="submitAction" value="searchUsers">
<table border=2 cellpadding=16 cellspacing=0>
<tr bgcolor="#FFFFFF">
    <td><span class="searchTitle">Search for participant by:</span><br><br>

    <table border=0 cellpadding=3 cellspacing=0>
    <tr>
        <td valign="top">&nbsp;</td>
        <td valign="top">&nbsp;&nbsp;&nbsp;</td>
        <td valign="top">&nbsp;</td>
            <td valign="top"><b>Specific Value</b></td>
        <td valign="top"><i>OR&#133;</i></td>
            <td valign="top"><b>Range</b></td>
        <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
    </tr>
   <tr bgcolor="#E4F4E8">
        <td valign="top"><input type="checkbox" name="searchBy_startdate" value=1<? if ($_POST["searchBy_startdate"]==1) echo " checked"; ?>> <b>Start (import) date</b></td>
        <td valign="top">&nbsp;&nbsp;&nbsp;</td>
        <td valign="top"><input type="radio" name="startdateCHOICE" value=1<? if ($_POST["startdateCHOICE"]==1) echo " checked"; ?>></td>
            <td valign="top"><input type="text" name="startdate1" value="<? echo $_POST["startdate1"] ? $_POST["startdate1"] : "(mm/dd/yy)"; ?>" size=18 onFocus="this.select();"></td>
        <td valign="top" align="right"><input type="radio" name="startdateCHOICE" value=2<? if ($_POST["startdateCHOICE"]==2) echo " checked"; ?>></td>
            <td valign="top"><input type="text" name="startdateRANGE1" value="<? echo $_POST["startdateRANGE1"] ? $_POST["startdateRANGE1"] : "FROM (mm/dd/yy)"; ?>" size=18 onFocus="this.select();"></td>
        <td valign="top"><b>&#150;</b></td>
            <td valign="top"><input type="text" name="startdateRANGE2" value="<? echo $_POST["startdateRANGE2"] ? $_POST["startdateRANGE2"] : "TO (mm/dd/yy)"; ?>" size=18 onFocus="this.select();"></td>
    </tr> 
    <tr>
        <td valign="top"><input type="checkbox" name="searchBy_id" value=1<? if ($_POST["searchBy_id"]==1) echo " checked"; ?>> <b>ID number</b></td>
        <td valign="top">&nbsp;&nbsp;&nbsp;</td>
        <td valign="top"><input type="radio" name="idCHOICE" value=1<? if ($_POST["idCHOICE"]==1) echo " checked"; ?>></td>
            <td valign="top"><input type="text" name="id1" value="<?=$_POST["id1"]?>" size=18 onFocus="this.select();"></td>
        <td valign="top" align="right"><input type="radio" name="idCHOICE" value=2<? if ($_POST["idCHOICE"]==2) echo " checked"; ?>></td>
            <td valign="top"><input type="text" name="idRANGE1" value="<?=$_POST["idRANGE1"]?>" size=18 onFocus="this.select();"></td>
        <td valign="top">&#150;</td>
            <td valign="top"><input type="text" name="idRANGE2" value="<?=$_POST["idRANGE2"]?>" size=18 onFocus="this.select();"></td>
    </tr>
    
    
    
    <tr bgcolor="#E4F4E8">
        <td valign="top"><input type="checkbox" name="searchBy_name" value=1<? if ($_POST["searchBy_name"]==1) echo " checked"; ?>> <b>Name</b></td>
        <td valign="top">&nbsp;&nbsp;&nbsp;</td>
                   <td valign="top" colspan="4">(First)<input type="text" name="name1" value="<?=$_POST["name1"]?>" size=18 onFocus="this.select();"> 
            
            (Last)<input type="text" name="name2" value="<?=$_POST["name2"]?>" size=18 onFocus="this.select();"></td>
        
        <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
    </tr>
    
    
    <tr>
        <td valign="top"><input type="checkbox" name="searchBy_username" value=1<? if ($_POST["searchBy_username"]==1) echo " checked"; ?>> <b>Username</b></td>
        <td valign="top">&nbsp;&nbsp;&nbsp;</td>
        <td valign="top">&nbsp;</td>
            <td valign="top"><input type="text" name="username1" value="<?=$_POST["username1"]?>" size=18 onFocus="this.select();"></td>
                   <td valign="top" align="right">&nbsp;</td>
            <td valign="top">&nbsp;</td>
        <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
    </tr>
    
    
    
    
    <tr bgcolor="#E4F4E8">
        <td valign="top"><input type="checkbox" name="searchBy_stage" value=1<? if ($_POST["searchBy_stage"]==1) echo " checked"; ?>> <b>Current Stage</b></td>
        <td valign="top">&nbsp;&nbsp;&nbsp;</td>
        <td valign="top"><input type="radio" name="stageCHOICE" value=1<? if ($_POST["stageCHOICE"]==1) echo " checked"; ?>></td>
            <td valign="top"><select name="stage1" size=1><option value=1<? if ($_POST["stage1"]=="1") echo " selected"; ?>>precontemplation</option><option value=2<? if ($_POST["stage1"]=="2") echo " selected"; ?>>contemplation</option><option value=3<? if ($_POST["stage1"]=="3") echo " selected"; ?>>preparation</option><option value=4<? if ($_POST["stage1"]=="4") echo " selected"; ?>>action</option></select></td>
        <td valign="top" align="right"><input type="radio" name="stageCHOICE" value=2<? if ($_POST["stageCHOICE"]==2) echo " checked"; ?>></td>
            <td valign="top"><select name="stageRANGE1" size=1><option value=1<? if ($_POST["stageRANGE1"]=="1") echo " selected"; ?>>precontemplation</option><option value=2<? if ($_POST["stageRANGE1"]=="2") echo " selected"; ?>>contemplation</option><option value=3<? if ($_POST["stageRANGE1"]=="3") echo " selected"; ?>>preparation</option><option value=4<? if ($_POST["stageRANGE1"]=="4") echo " selected"; ?>>action</option></select></td>
        <td valign="top"><b>&#150;</b></td>
            <td valign="top"><select name="stageRANGE2" size=1><option value=1<? if ($_POST["stageRANGE2"]=="1") echo " selected"; ?>>precontemplation</option><option value=2<? if ($_POST["stageRANGE2"]=="2") echo " selected"; ?>>contemplation</option><option value=3<? if ($_POST["stageRANGE2"]=="3") echo " selected"; ?>>preparation</option><option value=4<? if ($_POST["stageRANGE2"]=="4") echo " selected"; ?>>action</option></select></td>
    </tr>
    <!-- <tr>
        <td valign="top"><input type="checkbox" name="searchBy_session" value=1<? if ($_POST["searchBy_session"]==1) echo " checked"; ?>> <b>Session</b></td>
        <td valign="top">&nbsp;&nbsp;&nbsp;</td>
        <td valign="top"><input type="radio" name="sessionCHOICE" value=1<? if ($_POST["sessionCHOICE"]==1) echo " checked"; ?>></td>
            <td valign="top"><select name="session1" size=1>
            <? for ($j=1; $j<12; $j++) { ?>
            <option value=<?=$j?><? if ($_POST["session1"]==$j) echo " selected"; ?>><?=$j?></option>
            <? } ?>
            </select></td>
        <td valign="top" align="right"><input type="radio" name="sessionCHOICE" value=2<? if ($_POST["sessionCHOICE"]==2) echo " checked"; ?>></td>
            <td valign="top"><select name="sessionRANGE1" size=1>
            <? for ($j=1; $j<=12; $j++) { ?>
            <option value=<?=$j?><? if ($_POST["sessionRANGE1"]==$j) echo " selected"; ?>><?=$j?></option>
            <? } ?>
            </select></td>
        <td valign="top"><b>&#150;</b></td>
            <td valign="top"><select name="sessionRANGE2" size=1>
            <? for ($j=1; $j<=12; $j++) { ?>
            <option value=<?=$j?><? if ($_POST["sessionRANGE2"]==$j) echo " selected"; ?>><?=$j?></option>
            <? } ?>
            </select></td>
    </tr>
    <tr bgcolor="#E4F4E8">
        <td valign="top"><input type="checkbox" name="searchBy_isLogged" value=1<? if ($_POST["searchBy_isLogged"]==1) echo " checked"; ?>><b>Ever logged in</b></td>
        <td valign="top">&nbsp;&nbsp;&nbsp;</td>
        <td valign="top"><input type="radio" name="isLoggedCHOICE" value=2<? if ($_POST["isLoggedCHOICE"]==2) echo " checked"; ?>></td>
            <td valign="top">Yes <input type="radio" name="isLoggedCHOICE" value=1<? if ($_POST["isLoggedCHOICE"]==1) echo " checked"; ?>> No</td>
        <td valign="top" align="right">&nbsp;</td>
            <td valign="top">&nbsp;</td>
        <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
    </tr> -->
    <tr>
        <td colspan=8 align="right"><br><input type="submit" value="Search" style="background:#FFFF00; color:#0066CC; font-size:10pt; font-weight:bold;"></td>
    </tr>
    </table></td>
</tr>
</table>
</form><br><br>

