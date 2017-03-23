<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumborder">
  <tr>
        <th colspan="2" class="forumtitle" width="600">&nbsp;&nbsp;</th>
        <th width="50" class="forumtitle">&nbsp;{L_TOPICS}&nbsp;</th>
        <th width="50" class="forumtitle">&nbsp;{L_POSTS}&nbsp;</th>
        <th class="forumtitle" width="75">&nbsp;{L_LASTPOST}&nbsp</th>
  </tr>
  <!-- BEGIN catrow -->
  <tr height="14">
        <td colspan="2"><br /><span class="cattitle">{catrow.CAT_DESC}</span></td>
        <td colspan="3" align="right">&nbsp;</td>
  </tr>
  <!-- BEGIN forumrow -->
  <tr>
        <td class="icon" align="center" valign="middle" height="50"><img src="{catrow.forumrow.FORUM_FOLDER_IMG}" alt="{catrow.forumrow.L_FORUM_FOLDER_ALT}" title="{catrow.forumrow.L_FORUM_FOLDER_ALT}" /></td>
        <td class="row1" width="100%" height="50"><span class="forumlink"> <a href="{catrow.forumrow.U_VIEWFORUM}" class="forumlink">{catrow.forumrow.FORUM_NAME}</a><br />
          </span> <span class="gen2">{catrow.forumrow.FORUM_DESC}<br />
          </span>
        <td class="row2" align="center" valign="middle" height="50"><span class="gensmall">{catrow.forumrow.TOPICS}</span></td>
        <td class="row2" align="center" valign="middle" height="50"><span class="gensmall">{catrow.forumrow.POSTS}</span></td>
        <td class="row2" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall">{catrow.forumrow.LAST_POST}</span></td>
  </tr>
  <!-- END forumrow -->
  <!-- END catrow -->
</table><br />



<table width="100%" cellspacing="0" border="0" align="center" cellpadding="2">
  <tr>
        <td align="left"><span class="gensmall"><a href="{U_MARK_READ}" class="gensmall">{L_MARK_FORUMS_READ}</a></span></td>
        <td align="right"><span class="gensmall">{S_TIMEZONE}</span></td>
  </tr>
</table>

<br />

<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumborder">
  <tr>
        <td class="forumtitle" colspan="2"><span class="cattitle"><a href="{U_VIEWONLINE}" class="noonline">{L_WHO_IS_ONLINE}</a></span></td>
  </tr>
  <tr>
        <td class="icon" align="center" valign="middle" rowspan="2"><img src="templates/cleanLegacy/images/whosonline.gif" alt="{L_WHO_IS_ONLINE}" /></td>
        <td class="row1" align="left" width="100%"><span class="gen2">{TOTAL_POSTS}<br />{TOTAL_USERS}<br />{NEWEST_USER}</span>
        </td>
  </tr>
  <tr>
        <td class="row1" align="left"><span class="gen2">{TOTAL_USERS_ONLINE} &nbsp; [ {L_WHOSONLINE_ADMIN} ] &nbsp; [ {L_WHOSONLINE_MOD} ]<br />{RECORD_USERS}<br />{LOGGED_IN_USER_LIST}</span></td>
  </tr>
</table>

<table width="100%" cellpadding="1" cellspacing="1" border="0">
<tr>
        <td align="left" valign="top"><span class="gen2"></span></td>
</tr>
</table>



<br clear="all" />

<table cellspacing="3" border="0" cellpadding="0">
  <tr>
        <td width="20"><img src="templates/cleanLegacy/images/folder_new.gif" alt="{L_NEW_POSTS}"/></td>
        <td><span class="gensmall">{L_NEW_POSTS}</span></td>
        <td>&nbsp;&nbsp;</td>
        <td width="20"><img src="templates/cleanLegacy/images/folder.gif" alt="{L_NO_NEW_POSTS}" /></td>
        <td><span class="gensmall">{L_NO_NEW_POSTS}</span></td>
        <td>&nbsp;&nbsp;</td>
        <td width="20"><img src="templates/cleanLegacy/images/folder_lock.gif" alt="{L_FORUM_LOCKED}" /></td>
        <td><span class="gensmall">{L_FORUM_LOCKED}</span></td>
  </tr>
</table> <br />