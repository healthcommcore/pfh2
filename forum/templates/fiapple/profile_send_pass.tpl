<form action="{S_PROFILE_ACTION}" method="post">
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
	<td class="maintitle">{L_SEND_PASSWORD}</td>
</tr>
<tr>
<td class="nav"><a href="{U_INDEX}">{L_INDEX}</a> &raquo; {L_SEND_PASSWORD}</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="ttb">
<tr> 
<td><img src="templates/fiapple/images/tt12_l.gif" width="10" height="12" alt="" /></td>
<td class="tt12bkg"><img src="images/spacer.gif" width="200" height="12" alt="" /></td>
<td><img src="templates/fiapple/images/tt12_r.gif" width="10" height="12" alt="" /></td>
</tr>
</table>
<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
<tr>
<th colspan="2">{L_SEND_PASSWORD}</th>
</tr>
<tr>
<td class="row2" colspan="2"><span class="gensmall">{L_ITEMS_REQUIRED}</span></td>
</tr>
<tr>
<td nowrap="nowrap" class="row1">&nbsp;&nbsp;<span class="explaintitle">{L_USERNAME}:</span> *</td>
<td class="row2" width="100%">
<input type="text" class="post" style="width: 200px" name="username" size="25" maxlength="40" value="{USERNAME}" />
</td>
</tr>
<tr>
<td nowrap="nowrap" class="row1">&nbsp;&nbsp;<span class="explaintitle">{L_EMAIL_ADDRESS}:</span> *</td>
<td class="row2">
<input type="text" class="post" style="width: 200px" name="email" size="25" maxlength="255" value="{EMAIL}" />
</td>
</tr>
<tr>
<td class="cat" colspan="2" align="center">{S_HIDDEN_FIELDS} 
<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />
&nbsp;&nbsp; 
<input type="reset" value="{L_RESET}" name="reset" class="button" />
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="ttb">
<tr> 
<td><img src="templates/fiapple/images/tb12_l.gif" width="10" height="12" alt="" /></td>
<td class="tb12bkg"><img src="images/spacer.gif" width="200" height="12" alt="" /></td>
<td><img src="templates/fiapple/images/tb12_r.gif" width="10" height="12" alt="" /></td>
</tr>
</table>
<table width="100%" cellspacing="2" cellpadding="2" border="0">
	<tr>
		<td class="nav"><a href="{U_INDEX}">{L_INDEX}</a> &raquo; {L_SEND_PASSWORD}</td>
	</tr>
</table>
</form>