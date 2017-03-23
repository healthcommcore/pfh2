
<form action="{S_MODCP_ACTION}" method="post">
  <table width="90%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr> 
	  <td align="left" class="nav2"><a href="{U_INDEX}" class="nav2">{L_INDEX}</a></td>
	</tr>
  </table>
<br />
<table border="0" cellpadding="0" cellspacing="0" width="90%" align="center" style="margin:0px;padding:0px;">
              <tr> 
                <td width="1%" align="left" class="content-top"><img name="topleft" src="templates/Skaidon/images/table/top-left.jpg" width="6" height="6" border="0" id="topleft" alt="" /></td>
                <td class="content-top"></td>
                <td width="1%" align="right" class="content-top"><img name="topright" src="templates/Skaidon/images/table/top-right.jpg" width="6" height="6" border="0" id="topright" alt="" /></td>
              </tr>
              <tr> 
                <td class="content-left"></td>
                <td class="c-middle">
  <table width="100%" cellpadding="4" cellspacing="1" border="0" class="forumline">
	<tr> 
	  <th height="25" class="thHead"><b>{MESSAGE_TITLE}</b></th>
	</tr>
	<tr> 
	  <td class="row1"> 
		<table width="100%" border="0" cellspacing="0" cellpadding="1">
		  <tr> 
			<td>&nbsp;</td>
		  </tr>
		  <tr> 
			<td align="center"><span class="gen">{L_MOVE_TO_FORUM} &nbsp; {S_FORUM_SELECT}<br /><br />
			  <input type="checkbox" name="move_leave_shadow" checked="checked" />{L_LEAVESHADOW}<br />
			  <br />
			  {MESSAGE_TEXT}</span><br />
			  <br />
			  {S_HIDDEN_FIELDS} 
			  <input class="mainoption" type="submit" name="confirm" value="{L_YES}" />
			  &nbsp;&nbsp; 
			  <input class="liteoption" type="submit" name="cancel" value="{L_NO}" />
			</td>
		  </tr>
		  <tr> 
			<td>&nbsp;</td>
		  </tr>
		</table>
	  </td>
	</tr>
  </table>
		</td>
                <td class="content-right"></td>
              </tr>
              <tr> 
                <td width="1%" align="left" class="content-bottom"><img name="bottomleft" src="templates/Skaidon/images/table/bottom-left.jpg" width="6" height="6" border="0" id="bottomleft" alt="" /></td>
                <td class="content-bottom"></td>
                <td width="1%" align="right" class="content-bottom"><img name="bottomright" src="templates/Skaidon/images/table/bottom-right.jpg" width="6" height="6" border="0" id="bottomright" alt="" /></td>
              </tr>
            </table>
</form>
