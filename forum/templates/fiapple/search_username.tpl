<script language="javascript" type="text/javascript">
<!--
function refresh_username(selected_username)
{
	opener.document.forms['post'].username.value = selected_username;
	opener.focus();
	window.close();
}
//-->
</script>
<form method="post" name="search" action="{S_SEARCH_ACTION}">
<table width="100%" border="0" cellspacing="0" cellpadding="10" align="center">
<tr>
<td><table border="0" cellpadding="0" cellspacing="0" class="ttb">
<tr> 
<td><img src="templates/fiapple/images/tt12_l.gif" width="10" height="12" alt="" /></td>
<td class="tt12bkg"><img src="images/spacer.gif" width="200" height="12" alt="" /></td>
<td><img src="templates/fiapple/images/tt12_r.gif" width="10" height="12" alt="" /></td>
</tr>
</table> 
<table width="100%" class="forumline" cellpadding="4" cellspacing="1" border="0">
<tr> 
<th>{L_SEARCH_USERNAME}</th>
</tr>
<tr> 
<td align="center" valign="top" class="row1"><br /> <input type="text" name="search_username" value="{USERNAME}" class="post" /> 
&nbsp; <input type="submit" name="search" value="{L_SEARCH}" class="button" /> 
<br /> <span class="gensmall">{L_SEARCH_EXPLAIN}</span><br /> 
<!-- BEGIN switch_select_name -->
{L_UPDATE_USERNAME}<br /> <select name="username_list">{S_USERNAME_OPTIONS}
</select> &nbsp; <input type="submit" class="button" onclick="refresh_username(this.form.username_list.options[this.form.username_list.selectedIndex].value);return false;" name="use" value="{L_SELECT}" /> 
<br /> 
<!-- END switch_select_name -->
<br /></td>
</tr>
<tr> 
<td align="center" class="row2"><a class="genmed" href="javascript:window.close();">{L_CLOSE_WINDOW}</a></td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="ttb">
<tr> 
<td><img src="templates/fiapple/images/tb12_l.gif" width="10" height="12" alt="" /></td>
<td class="tb12bkg"><img src="images/spacer.gif" width="200" height="12" alt="" /></td>
<td><img src="templates/fiapple/images/tb12_r.gif" width="10" height="12" alt="" /></td>
</tr>
</table></td>
</tr>
</table>
</form>