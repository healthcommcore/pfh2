<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
	<td colspan="2" class="maintitle">{L_INDEX}</td>
	</tr>
<tr>
<td valign="bottom" class="gensmall">
{CURRENT_TIME}<br />
<a href="{U_INDEX}" class="nav">{L_INDEX}</a></td>
<td align="right" valign="bottom" class="gensmall">
<!--
<a href="{U_SEARCH_UNANSWERED}">{L_SEARCH_UNANSWERED}</a><br />
<a href="{U_SEARCH_NEW}">{L_SEARCH_NEW}</a><br />
<a href="{U_MARK_READ}"><strong>{L_MARK_FORUMS_READ}</strong></a>
-->
&nbsp;</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="ttb">
	<tr>
		<td><img src="templates/fiapple/images/tt12_l.gif" width="10" height="12" alt="" /></td>
		<td class="tt12bkg"><img src="images/spacer.gif" width="200" height="12" alt="" /></td>
		<td><img src="templates/fiapple/images/tt12_r.gif" width="10" height="12" alt="" /></td>
	</tr>
</table>
<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">
<tr>
<th colspan="2">{L_FORUM}</th>
<th>{L_TOPICS}</th>
<th>{L_POSTS}</th>
<th>{L_LASTPOST}</th>
</tr>
<!-- BEGIN catrow -->
<tr>
<td class="cat" colspan="5"><a href="{catrow.U_VIEWCAT}">{catrow.CAT_DESC}</a><img src="images/spacer.gif" alt="" width="280" height="12" /></td>
</tr>
<!-- BEGIN forumrow -->
<tr>
<td class="row1" height="45"><img src="{catrow.forumrow.FORUM_FOLDER_IMG}" alt="{catrow.forumrow.L_FORUM_FOLDER_ALT}" title="{catrow.forumrow.L_FORUM_FOLDER_ALT}" /></td>
<td class="row1" width="100%"><a href="{catrow.forumrow.U_VIEWFORUM}" class="nav">{catrow.forumrow.FORUM_NAME}</a><br />
<span class="genmed">{catrow.forumrow.FORUM_DESC}<br />
</span><span class="gensmall">{catrow.forumrow.L_MODERATOR} {catrow.forumrow.MODERATORS}</span></td>
<td class="row2" align="center"><span class="gensmall">{catrow.forumrow.TOPICS}</span></td>
<td class="row2" align="center"><span class="gensmall">{catrow.forumrow.POSTS}</span></td>
<td class="row2" align="center" nowrap="nowrap"><span class="gensmall">{catrow.forumrow.LAST_POST}</span></td>
</tr>
<!-- END forumrow -->
<!-- END catrow -->
</table>
<table border="0" cellpadding="0" cellspacing="0" class="ttb">
	<tr>
		<td><img src="templates/fiapple/images/tb12_l.gif" width="10" height="12" alt="" /></td>
		<td class="tb12bkg"><img src="images/spacer.gif" width="200" height="12" alt="" /></td>
		<td><img src="templates/fiapple/images/tb12_r.gif" width="10" height="12" alt="" /></td>
	</tr>
</table>
<br />
<table border="0" cellpadding="0" cellspacing="0" class="ttb">
<tr> 
<td><img src="templates/fiapple/images/tt12_l.gif" width="10" height="12" alt="" /></td>
<td class="tt12bkg"><img src="images/spacer.gif" width="200" height="12" alt="" /></td>
<td><img src="templates/fiapple/images/tt12_r.gif" width="10" height="12" alt="" /></td>
</tr>
</table>
<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">
<tr>
<td class="cat" colspan="2"><a href="{U_VIEWONLINE}">{L_WHO_IS_ONLINE}</a></td>
</tr>
<tr>
<td class="row1"><img src="templates/fiapple/images/whosonline.gif" alt="{L_WHO_IS_ONLINE}" width="40" height="30" title="{L_WHO_IS_ONLINE}" />
<td class="row1" width=100%><span class="gensmall">{TOTAL_USERS_ONLINE}</span></td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="ttb">
	<tr>
		<td><img src="templates/fiapple/images/tb12_l.gif" width="10" height="12" alt="" /></td>
		<td class="tb12bkg"><img src="images/spacer.gif" width="200" height="12" alt="" /></td>
		<td><img src="templates/fiapple/images/tb12_r.gif" width="10" height="12" alt="" /></td>
	</tr>
</table>
<!-- BEGIN switch_user_logged_out -->
<br />

<!--
<form method="post" action="{S_LOGIN_ACTION}">
<table border="0" cellpadding="0" cellspacing="0" class="ttb">
<tr> 
<td><img src="templates/fiapple/images/tt12_l.gif" width="10" height="12" alt="" /></td>
<td class="tt12bkg"><img src="images/spacer.gif" width="200" height="12" alt="" /></td>
<td><img src="templates/fiapple/images/tt12_r.gif" width="10" height="12" alt="" /></td>
</tr>
</table>
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
<tr>
<td class="cat">{L_LOGIN_LOGOUT}</td>
</tr>
<tr>
<td class="row1" align="center">
<table border="0" cellspacing="0" cellpadding="2">
<tr> 
<td class="gensmall">{L_USERNAME}:&nbsp;</td>
<td><input class="post" type="text" name="username" size="10" /></td>
<td class="gensmall">&nbsp;&nbsp;&nbsp;{L_PASSWORD}:</td>
<td><input class="post" type="password" name="password" size="10" maxlength="32" /></td>
<td class="gensmall">&nbsp;&nbsp;&nbsp;{L_AUTO_LOGIN}</td>
<td><input class="text" type="checkbox" name="autologin" /></td>
<td>&nbsp;&nbsp;<input type="submit" class="mainoption" name="login" value="{L_LOGIN}" /></td>
</tr>
</table>
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
</form>
-->

<!-- END switch_user_logged_out -->
<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td class="nav"><a href="{U_INDEX}">{L_INDEX}</a></td>
</tr>
</table>
<br />
<!--
<table border="0" align="center" cellpadding="0" cellspacing="3">
<tr>
<td><img src="{FORUM_NEW_IMG}" alt="{L_NEW_POSTS}" title="{L_NEW_POSTS}" /></td>
<td class="gensmall">{L_NEW_POSTS}</td>
<td>&nbsp;</td>
<td><img src="{FORUM_IMG}" alt="{L_NO_NEW_POSTS}" title="{L_NO_NEW_POSTS}" /></td>
<td class="gensmall">{L_NO_NEW_POSTS}</td>
<td>&nbsp;</td>
<td><img src="{FORUM_LOCKED_IMG}" alt="{L_FORUM_LOCKED}" title="{L_FORUM_LOCKED}" /></td>
<td class="gensmall">{L_FORUM_LOCKED}</td>
</tr>
</table>
-->