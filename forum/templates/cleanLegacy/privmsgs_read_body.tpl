
<table cellspacing="2" cellpadding="2" border="0" align="left">
  <tr align="left">

        <td valign="middle"><span class="cattitle">{INBOX} | </span></td>

        <td valign="middle"><span class="cattitle">{SENTBOX} | </span></td>

        <td valign="middle"><span class="cattitle">{OUTBOX} | </span></td>

        <td valign="middle"><span class="cattitle">{SAVEBOX}</span></td>
  </tr>
</table>

<br clear="all" />

<form method="post" action="{S_PRIVMSGS_ACTION}">
<table width="100%" cellspacing="2" cellpadding="2" border="0">
  <tr>
          <td align="right" valign="middle">{REPLY_PM_IMG}</td>
  </tr>
</table>

<table border="0" cellpadding="4" cellspacing="1" width="100%" class="forumborder">
        <tr>
          <td class="row2"><span class="genmed">{L_FROM}:</span></td>
          <td width="100%" class="row2" colspan="2"><span class="genmed">{MESSAGE_FROM}</span></td>
        </tr>
        <tr>
          <td class="row2"><span class="genmed">{L_SUBJECT}:</span></td>
          <td width="100%" class="row2"><span class="genmed">{POST_SUBJECT}</span></td>
          <td nowrap="nowrap" class="row2" align="right"> {QUOTE_PM_IMG} {EDIT_PM_IMG}</td>
        </tr>
        <tr>
          <td valign="top" colspan="3" class="row1"><span class="postbody">{MESSAGE}</span></td>
        </tr>
        <tr>
          <td class="menu" colspan="3" height="28" align="right"> {S_HIDDEN_FIELDS}
                <input type="submit" name="save" value="{L_SAVE_MSG}" class="liteoption" />
                &nbsp;
                <input type="submit" name="delete" value="{L_DELETE_MSG}" class="liteoption" />
          </td>
        </tr>
  </table>
  <table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
        <tr>
          <td align="left" valign="top"><span class="gensmall">{S_TIMEZONE}</span></td>
          <td align="right">{REPLY_PM_IMG}</td>
        </tr>
  </table>
</form>

<table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
  <tr>
        <td valign="top" align="right"><span class="gensmall">{JUMPBOX}</span></td>
  </tr>
</table>