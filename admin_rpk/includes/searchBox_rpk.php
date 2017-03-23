<form name="form1" method="POST" action="user-search_rpk.php">
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
        <td valign="top"><input type="checkbox" name="searchBy_startdate" value=1<? if ($HTTP_POST_VARS["searchBy_startdate"]==1) echo " checked"; ?>> <b>Start date</b></td>
        <td valign="top">&nbsp;&nbsp;&nbsp;</td>
        <td valign="top"><input type="radio" name="startdateCHOICE" value=1<? if ($HTTP_POST_VARS["startdateCHOICE"]==1) echo " checked"; ?>></td>
            <td valign="top"><input type="text" name="startdate1" value="<? echo $HTTP_POST_VARS["startdate1"] ? $HTTP_POST_VARS["startdate1"] : "(mm/dd/yy)"; ?>" size=18 onFocus="this.select();"></td>
        <td valign="top" align="right"><input type="radio" name="startdateCHOICE" value=2<? if ($HTTP_POST_VARS["startdateCHOICE"]==2) echo " checked"; ?>></td>
            <td valign="top"><input type="text" name="startdateRANGE1" value="<? echo $HTTP_POST_VARS["startdateRANGE1"] ? $HTTP_POST_VARS["startdateRANGE1"] : "FROM (mm/dd/yy)"; ?>" size=18 onFocus="this.select();"></td>
        <td valign="top"><b>&#150;</b></td>
            <td valign="top"><input type="text" name="startdateRANGE2" value="<? echo $HTTP_POST_VARS["startdateRANGE2"] ? $HTTP_POST_VARS["startdateRANGE2"] : "TO (mm/dd/yy)"; ?>" size=18 onFocus="this.select();"></td>
    </tr>
    <tr>
        <td valign="top"><input type="checkbox" name="searchBy_id" value=1<? if ($HTTP_POST_VARS["searchBy_id"]==1) echo " checked"; ?>> <b>ID number</b></td>
        <td valign="top">&nbsp;&nbsp;&nbsp;</td>
        <td valign="top"><input type="radio" name="idCHOICE" value=1<? if ($HTTP_POST_VARS["idCHOICE"]==1) echo " checked"; ?>></td>
            <td valign="top"><input type="text" name="id1" value="<?=$HTTP_POST_VARS["id1"]?>" size=18 onFocus="this.select();"></td>
        <td valign="top" align="right"><input type="radio" name="idCHOICE" value=2<? if ($HTTP_POST_VARS["idCHOICE"]==2) echo " checked"; ?>></td>
            <td valign="top"><input type="text" name="idRANGE1" value="<?=$HTTP_POST_VARS["idRANGE1"]?>" size=18 onFocus="this.select();"></td>
        <td valign="top">&#150;</td>
            <td valign="top"><input type="text" name="idRANGE2" value="<?=$HTTP_POST_VARS["idRANGE2"]?>" size=18 onFocus="this.select();"></td>
    </tr>
    <tr bgcolor="#E4F4E8">
        <td valign="top"><input type="checkbox" name="searchBy_name" value=1<? if ($HTTP_POST_VARS["searchBy_name"]==1) echo " checked"; ?>> <b>Name</b></td>
        <td valign="top">&nbsp;&nbsp;&nbsp;</td>
        <td valign="top">&nbsp;</td>
            <td valign="top"><input type="text" name="name1" value="<?=$HTTP_POST_VARS["name1"]?>" size=18 onFocus="this.select();"></td>
        <td valign="top" align="right">&nbsp;</td>
            <td valign="top">&nbsp;</td>
        <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
    </tr>
    <tr>
        <td valign="top"><input type="checkbox" name="searchBy_username" value=1<? if ($HTTP_POST_VARS["searchBy_username"]==1) echo " checked"; ?>> <b>Username</b></td>
        <td valign="top">&nbsp;&nbsp;&nbsp;</td>
        <td valign="top">&nbsp;</td>
            <td valign="top"><input type="text" name="username1" value="<?=$HTTP_POST_VARS["username1"]?>" size=18 onFocus="this.select();"></td>
        <td valign="top" align="right">&nbsp;</td>
            <td valign="top">&nbsp;</td>
        <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
    </tr>
    <tr bgcolor="#E4F4E8">
        <td valign="top"><input type="checkbox" name="searchBy_stage" value=1<? if ($HTTP_POST_VARS["searchBy_stage"]==1) echo " checked"; ?>> <b>Current Stage</b></td>
        <td valign="top">&nbsp;&nbsp;&nbsp;</td>
        <td valign="top"><input type="radio" name="stageCHOICE" value=1<? if ($HTTP_POST_VARS["stageCHOICE"]==1) echo " checked"; ?>></td>
            <td valign="top"><select name="stage1" size=1><option value=1<? if ($HTTP_POST_VARS["stage1"]=="1") echo " selected"; ?>>precontemplation</option><option value=2<? if ($HTTP_POST_VARS["stage1"]=="2") echo " selected"; ?>>contemplation</option><option value=3<? if ($HTTP_POST_VARS["stage1"]=="3") echo " selected"; ?>>preparation</option><option value=4<? if ($HTTP_POST_VARS["stage1"]=="4") echo " selected"; ?>>action</option></select></td>
        <td valign="top" align="right"><input type="radio" name="stageCHOICE" value=2<? if ($HTTP_POST_VARS["stageCHOICE"]==2) echo " checked"; ?>></td>
            <td valign="top"><select name="stageRANGE1" size=1><option value=1<? if ($HTTP_POST_VARS["stageRANGE1"]=="1") echo " selected"; ?>>precontemplation</option><option value=2<? if ($HTTP_POST_VARS["stageRANGE1"]=="2") echo " selected"; ?>>contemplation</option><option value=3<? if ($HTTP_POST_VARS["stageRANGE1"]=="3") echo " selected"; ?>>preparation</option><option value=4<? if ($HTTP_POST_VARS["stageRANGE1"]=="4") echo " selected"; ?>>action</option></select></td>
        <td valign="top"><b>&#150;</b></td>
            <td valign="top"><select name="stageRANGE2" size=1><option value=1<? if ($HTTP_POST_VARS["stageRANGE2"]=="1") echo " selected"; ?>>precontemplation</option><option value=2<? if ($HTTP_POST_VARS["stageRANGE2"]=="2") echo " selected"; ?>>contemplation</option><option value=3<? if ($HTTP_POST_VARS["stageRANGE2"]=="3") echo " selected"; ?>>preparation</option><option value=4<? if ($HTTP_POST_VARS["stageRANGE2"]=="4") echo " selected"; ?>>action</option></select></td>
    </tr>
    <tr>
        <td valign="top"><input type="checkbox" name="searchBy_session" value=1<? if ($HTTP_POST_VARS["searchBy_session"]==1) echo " checked"; ?>> <b>Session</b></td>
        <td valign="top">&nbsp;&nbsp;&nbsp;</td>
        <td valign="top"><input type="radio" name="sessionCHOICE" value=1<? if ($HTTP_POST_VARS["sessionCHOICE"]==1) echo " checked"; ?>></td>
            <td valign="top"><select name="session1" size=1>
            <? for ($j=1; $j<12; $j++) { ?>
            <option value=<?=$j?><? if ($HTTP_POST_VARS["session1"]==$j) echo " selected"; ?>><?=$j?></option>
            <? } ?>
            </select></td>
        <td valign="top" align="right"><input type="radio" name="sessionCHOICE" value=2<? if ($HTTP_POST_VARS["sessionCHOICE"]==2) echo " checked"; ?>></td>
            <td valign="top"><select name="sessionRANGE1" size=1>
            <? for ($j=1; $j<=12; $j++) { ?>
            <option value=<?=$j?><? if ($HTTP_POST_VARS["sessionRANGE1"]==$j) echo " selected"; ?>><?=$j?></option>
            <? } ?>
            </select></td>
        <td valign="top"><b>&#150;</b></td>
            <td valign="top"><select name="sessionRANGE2" size=1>
            <? for ($j=1; $j<=12; $j++) { ?>
            <option value=<?=$j?><? if ($HTTP_POST_VARS["sessionRANGE2"]==$j) echo " selected"; ?>><?=$j?></option>
            <? } ?>
            </select></td>
    </tr>
    <tr bgcolor="#E4F4E8">
        <td valign="top"><input type="checkbox" name="searchBy_isLogged" value=1<? if ($HTTP_POST_VARS["searchBy_isLogged"]==1) echo " checked"; ?>><b>Ever logged in</b></td>
        <td valign="top">&nbsp;&nbsp;&nbsp;</td>
        <td valign="top"><input type="radio" name="isLoggedCHOICE" value=2<? if ($HTTP_POST_VARS["isLoggedCHOICE"]==2) echo " checked"; ?>></td>
            <td valign="top">Yes <input type="radio" name="isLoggedCHOICE" value=1<? if ($HTTP_POST_VARS["isLoggedCHOICE"]==1) echo " checked"; ?>> No</td>
        <td valign="top" align="right">&nbsp;</td>
            <td valign="top">&nbsp;</td>
        <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
    </tr>
    <tr>
        <td colspan=8 align="right"><br><input type="submit" value="Search" style="background:#FFFF00; color:#0066CC; font-size:10pt; font-weight:bold;"></td>
    </tr>
    </table></td>
</tr>
</table>
</form><br><br>

