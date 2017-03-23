
<table width="100%" cellspacing="2" cellpadding="2" border="0">
  <tr>
        <td align="left" valign="bottom" colspan="2"><a class="maintitle" href="{U_VIEW_TOPIC}"><span class="topictitle1">{TOPIC_TITLE}</span></a><br />
          <span class="gen2"><a href="{U_VIEW_OLDER_TOPIC}" >{L_VIEW_PREVIOUS_TOPIC}</a> - <a href="{U_VIEW_NEWER_TOPIC}">{L_VIEW_NEXT_TOPIC}</a></span><br /><br />
          <span class="topictitle1">Back to: <a href="{U_VIEW_FORUM}" class="maintitle">{FORUM_NAME}</a></span></td>
  </tr>
</table>

<table width="100%" cellspacing="2" cellpadding="2" border="0">
  <tr>
        <td align="right" valign="bottom" nowrap="nowrap"><span class="nav"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" align="middle" /></a>&nbsp;&nbsp;&nbsp;<a href="{U_POST_REPLY_TOPIC}"><img src="{REPLY_IMG}" border="0" alt="{L_POST_REPLY_TOPIC}" align="middle" /></a></span></td>
  </tr>
</table>

<table class="forumborder" width="100%" cellspacing="1" cellpadding="3" border="0">
        {POLL_DISPLAY}

        <!-- BEGIN postrow -->
        <tr width="100%">
        	<td width="100%" class="{postrow.ROW_CLASS}" align="left" valign="middle">
            	<table width="100%">
                <tr width="100%">
                <td valign="middle">
                <a name="{postrow.U_POST_ID}"></a>{postrow.POSTER_AVATAR}
                </td>

                <td class="{postrow.ROW_CLASS}" align="left" valign="middle">
                <b>{postrow.POSTER_NAME}<br />{postrow.PROFILE_IMG}</b>
            	</td>

                <td width="80%" class="{postrow.ROW_CLASS}" align="right" valign="middle">
                {postrow.WWW_IMG}
                </td>
                </tr>
                </table>
            </td>

        </tr>

         <tr>
        	<td class="{postrow.ROW_CLASS}" align="left" valign="middle">
            	<table>
                <tr>
                <td valign="top">
                <div class="gen2">{postrow.MESSAGE} {postrow.EDITED_MESSAGE}<br />{postrow.SIGNATURE}</div>
                </td>
                </tr>
                </table>
            </td>
        </tr>

        <tr>
        	<td class="{postrow.ROW_CLASS}" align="right" valign="top">
      		{postrow.QUOTE_IMG} {postrow.EDIT_IMG} {postrow.DELETE_IMG} {postrow.IP_IMG}
            </td>
        </tr>

        <tr height="30">
        <td height="30">
        </td>
        </tr>

        <!-- END postrow -->
        <tr align="right">
                <td class="menu" colspan="2" height="28"><table cellspacing="0" cellpadding="0" border="0">
                        <tr><form method="post" action="{S_POST_DAYS_ACTION}">
                                <td align="right" class="menu"><span class="gensmall">{L_DISPLAY_POSTS}: {S_SELECT_POST_DAYS}&nbsp;{S_SELECT_POST_ORDER}&nbsp;<input type="submit" value="{L_GO}" class="liteoption" name="submit" /></span></td>
                        </form></tr>
                </table></td>
        </tr>
</table>

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
  <tr>

        <td align="left" valign="top" nowrap="nowrap"><span class="gensmall">{S_TIMEZONE}</span>
        <td align="right" valign="middle" nowrap="nowrap"><span class="nav"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" align="middle" /></a>&nbsp;&nbsp;&nbsp;<a href="{U_POST_REPLY_TOPIC}"><img src="{REPLY_IMG}" border="0" alt="{L_POST_REPLY_TOPIC}" align="middle" /></a></span></td>
          </td>
  </tr>
  <tr>
        <td align="left" colspan="3"><span class="gen2">{PAGE_NUMBER}<br />{PAGINATION}</span></td>
  </tr>
</table>

<table width="100%" cellspacing="2" border="0" align="center">
  <tr>
        <td width="40%" valign="top" nowrap="nowrap" align="left"><span class="gensmall">{S_WATCH_TOPIC}</span><br />
          &nbsp;<br />
          {S_TOPIC_ADMIN}</td>
        <td align="right" valign="top" nowrap="nowrap">{JUMPBOX}<span class="gensmall">{S_AUTH_LIST}</span></td>
  </tr>
</table>