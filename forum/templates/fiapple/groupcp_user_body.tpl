<table width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
	<td class="maintitle">{L_USERGROUPS}</td>
</tr>
<tr>
<td class="nav"><a href="{U_INDEX}">{L_INDEX}</a> &raquo; {L_USERGROUPS}</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="ttb">
	<tr>
		<td><img src="templates/fiapple/images/tt12_l.gif" width="10" height="12" alt="" /></td>
		<td class="tt12bkg"><img src="images/spacer.gif" width="200" height="12" alt="" /></td>
		<td><img src="templates/fiapple/images/tt12_r.gif" width="10" height="12" alt="" /></td>
	</tr>
</table>
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
<!-- BEGIN switch_groups_joined -->
<tr>
<th colspan="2">{L_GROUP_MEMBERSHIP_DETAILS}</th>
</tr>
<!-- BEGIN switch_groups_member -->
<tr>
<td class="row1" width="30%">{L_YOU_BELONG_GROUPS}</td>
<td class="row2" align="right" width="70%">
<form method="get" action="{S_USERGROUP_ACTION}">
<table width="90%" cellspacing="0" cellpadding="0" border="0">
<tr>
<td width="40%" class="gensmall">{GROUP_MEMBER_SELECT}</td>
<td align="center" width="30%">
<input type="submit" value="{L_VIEW_INFORMATION}" class="button" />{S_HIDDEN_FIELDS}</td>
</tr>
</table>
</form>
</td>
</tr>
<!-- END switch_groups_member -->
<!-- BEGIN switch_groups_pending -->
<tr>
<td class="row1">{L_PENDING_GROUPS}</td>
<td class="row2" align="right">
<form method="get" action="{S_USERGROUP_ACTION}">
<table width="90%" cellspacing="0" cellpadding="0" border="0">
<tr>
<td width="40%" class="gensmall">{GROUP_PENDING_SELECT}</td>
<td align="center" width="30%">
<input type="submit" value="{L_VIEW_INFORMATION}" class="button" />{S_HIDDEN_FIELDS}</td>
</tr>
</table>
</form>
</td>
</tr>
<!-- END switch_groups_pending -->
<!-- END switch_groups_joined -->
<!-- BEGIN switch_groups_remaining -->
<tr>
<th colspan="2">{L_JOIN_A_GROUP}</th>
</tr>
<tr>
<td class="row1">{L_SELECT_A_GROUP}</td>
<td class="row2" align="right"><form method="get" action="{S_USERGROUP_ACTION}">
<table width="90%" cellspacing="0" cellpadding="0" border="0">
<tr>
<td width="40%" class="gensmall">{GROUP_LIST_SELECT}</td>
<td align="center" width="30%">
<input type="submit" value="{L_VIEW_INFORMATION}" class="button" />{S_HIDDEN_FIELDS}</td>
</tr>
</table>
</form>
</td>
</tr>
<!-- END switch_groups_remaining -->
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
<td class="nav"><a href="{U_INDEX}">{L_INDEX}</a> &raquo; {L_USERGROUPS}</td>
</tr>
<tr>
	<td><br />
		{JUMPBOX}</td>
</tr>
</table>