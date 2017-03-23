
<form action="{S_PROFILE_ACTION}" {S_FORM_ENCTYPE} method="post">

{ERROR_BOX}

<table width="90%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr> 
		<td align="left"><span class="nav2"><a href="{U_INDEX}" class="nav2">{L_INDEX}</a></span></td>
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
<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
	<tr> 
		<th class="thHead" colspan="2" height="25" valign="middle">{L_REGISTRATION_INFO}</th>
	</tr>
	<tr> 
		<td class="row2" colspan="2"><span class="notesmall">{L_ITEMS_REQUIRED}</span></td>
	</tr>
	<!-- BEGIN switch_namechange_disallowed -->
	<tr> 
		<td class="row1" width="38%"><span class="note">{L_USERNAME}: *</span></td>
		<td class="row2"><input type="hidden" name="username" value="{USERNAME}" /><span class="note"><b>{USERNAME}</b></span></td>
	</tr>
	<!-- END switch_namechange_disallowed -->
	<!-- BEGIN switch_namechange_allowed -->
	<tr> 
		<td class="row1" width="38%"><span class="note">{L_USERNAME}: *</span></td>
		<td class="row2"><input type="text" class="post" style="width:200px" name="username" size="25" maxlength="25" value="{USERNAME}" /></td>
	</tr>
	<!-- END switch_namechange_allowed -->
	<tr> 
		<td class="row1"><span class="note">{L_EMAIL_ADDRESS}: *</span></td>
		<td class="row2"><input type="text" class="post" style="width:200px" name="email" size="25" maxlength="255" value="{EMAIL}" /></td>
	</tr>
	<!-- BEGIN switch_edit_profile -->
	<tr> 
	  <td class="row1"><span class="note">{L_CURRENT_PASSWORD}: *</span><br />
		<span class="notesmall">{L_CONFIRM_PASSWORD_EXPLAIN}</span></td>
	  <td class="row2"> 
		<input type="password" class="post" style="width: 200px" name="cur_password" size="25" maxlength="32" value="{CUR_PASSWORD}" />
	  </td>
	</tr>
	<!-- END switch_edit_profile -->
	<tr> 
	  <td class="row1"><span class="note">{L_NEW_PASSWORD}: *</span><br />
		<span class="notesmall">{L_PASSWORD_IF_CHANGED}</span></td>
	  <td class="row2"> 
		<input type="password" class="post" style="width: 200px" name="new_password" size="25" maxlength="32" value="{NEW_PASSWORD}" />
	  </td>
	</tr>
	<tr> 
	  <td class="row1"><span class="note">{L_CONFIRM_PASSWORD}: * </span><br />
		<span class="notesmall">{L_PASSWORD_CONFIRM_IF_CHANGED}</span></td>
	  <td class="row2"> 
		<input type="password" class="post" style="width: 200px" name="password_confirm" size="25" maxlength="32" value="{PASSWORD_CONFIRM}" />
	  </td>
	</tr>
	<!-- Visual Confirmation -->
	<!-- BEGIN switch_confirm -->
	<tr>
		<td class="row1" colspan="2" align="center"><span class="notesmall">{L_CONFIRM_CODE_IMPAIRED}</span><br /><br />{CONFIRM_IMG}<br /><br /></td>
	</tr>
	<tr> 
	  <td class="row1"><span class="note">{L_CONFIRM_CODE}: * </span><br /><span class="notesmall">{L_CONFIRM_CODE_EXPLAIN}</span></td>
	  <td class="row2"><input type="text" class="post" style="width: 200px" name="confirm_code" size="6" maxlength="6" value="" /></td>
	</tr>
	<!-- END switch_confirm -->
	<tr> 
	  <td class="catSides" colspan="2" height="28">&nbsp;</td>
	</tr>
	<tr> 
	  <th class="thSides" colspan="2" height="25" valign="middle">{L_PROFILE_INFO}</th>
	</tr>
	<tr> 
	  <td class="row2" colspan="2"><span class="notesmall">{L_PROFILE_INFO_NOTICE}</span></td>
	</tr>
	<tr> 
	  <td class="row1"><span class="note">{L_ICQ_NUMBER}:</span></td>
	  <td class="row2"> 
		<input type="text" name="icq" class="post"style="width: 100px"  size="10" maxlength="15" value="{ICQ}" />
	  </td>
	</tr>
	<tr> 
	  <td class="row1"><span class="note">{L_AIM}:</span></td>
	  <td class="row2"> 
		<input type="text" class="post"style="width: 150px"  name="aim" size="20" maxlength="255" value="{AIM}" />
	  </td>
	</tr>
	<tr> 
	  <td class="row1"><span class="note">{L_MESSENGER}:</span></td>
	  <td class="row2"> 
		<input type="text" class="post"style="width: 150px"  name="msn" size="20" maxlength="255" value="{MSN}" />
	  </td>
	</tr>
	<tr> 
	  <td class="row1"><span class="note">{L_YAHOO}:</span></td>
	  <td class="row2"> 
		<input type="text" class="post"style="width: 150px"  name="yim" size="20" maxlength="255" value="{YIM}" />
	  </td>
	</tr>
	<tr> 
	  <td class="row1"><span class="note">{L_WEBSITE}:</span></td>
	  <td class="row2"> 
		<input type="text" class="post"style="width: 200px"  name="website" size="25" maxlength="255" value="{WEBSITE}" />
	  </td>
	</tr>
	<tr> 
	  <td class="row1"><span class="note">{L_LOCATION}:</span></td>
	  <td class="row2"> 
		<input type="text" class="post"style="width: 200px"  name="location" size="25" maxlength="100" value="{LOCATION}" />
	  </td>
	</tr>
	<tr> 
	  <td class="row1"><span class="note">{L_OCCUPATION}:</span></td>
	  <td class="row2"> 
		<input type="text" class="post"style="width: 200px"  name="occupation" size="25" maxlength="100" value="{OCCUPATION}" />
	  </td>
	</tr>
	<tr> 
	  <td class="row1"><span class="note">{L_INTERESTS}:</span></td>
	  <td class="row2"> 
		<input type="text" class="post"style="width: 200px"  name="interests" size="35" maxlength="150" value="{INTERESTS}" />
	  </td>
	</tr>
	<tr> 
	  <td class="row1"><span class="note">{L_SIGNATURE}:</span><br /><span class="notesmall">{L_SIGNATURE_EXPLAIN}<br /><br />{HTML_STATUS}<br />{BBCODE_STATUS}<br />{SMILIES_STATUS}</span></td>
	  <td class="row2"> 
		<textarea name="signature"style="width: 300px"  rows="6" cols="30" class="post">{SIGNATURE}</textarea>
	  </td>
	</tr>
	<tr> 
	  <td class="catSides" colspan="2" height="28">&nbsp;</td>
	</tr>
	<tr> 
	  <th class="thSides" colspan="2" height="25" valign="middle">{L_PREFERENCES}</th>
	</tr>
	<tr> 
	  <td class="row1"><span class="note">{L_PUBLIC_VIEW_EMAIL}:</span></td>
	  <td class="row2"> 
		<input type="radio" name="viewemail" value="1" {VIEW_EMAIL_YES} />
		<span class="note">{L_YES}</span>&nbsp;&nbsp; 
		<input type="radio" name="viewemail" value="0" {VIEW_EMAIL_NO} />
		<span class="note">{L_NO}</span></td>
	</tr>
	<tr> 
	  <td class="row1"><span class="note">{L_HIDE_USER}:</span></td>
	  <td class="row2"> 
		<input type="radio" name="hideonline" value="1" {HIDE_USER_YES} />
		<span class="note">{L_YES}</span>&nbsp;&nbsp; 
		<input type="radio" name="hideonline" value="0" {HIDE_USER_NO} />
		<span class="note">{L_NO}</span></td>
	</tr>
	<tr> 
	  <td class="row1"><span class="note">{L_NOTIFY_ON_REPLY}:</span><br />
		<span class="notesmall">{L_NOTIFY_ON_REPLY_EXPLAIN}</span></td>
	  <td class="row2"> 
		<input type="radio" name="notifyreply" value="1" {NOTIFY_REPLY_YES} />
		<span class="note">{L_YES}</span>&nbsp;&nbsp; 
		<input type="radio" name="notifyreply" value="0" {NOTIFY_REPLY_NO} />
		<span class="note">{L_NO}</span></td>
	</tr>
	<tr> 
	  <td class="row1"><span class="note">{L_NOTIFY_ON_PRIVMSG}:</span></td>
	  <td class="row2"> 
		<input type="radio" name="notifypm" value="1" {NOTIFY_PM_YES} />
		<span class="note">{L_YES}</span>&nbsp;&nbsp; 
		<input type="radio" name="notifypm" value="0" {NOTIFY_PM_NO} />
		<span class="note">{L_NO}</span></td>
	</tr>
	<tr> 
	  <td class="row1"><span class="note">{L_POPUP_ON_PRIVMSG}:</span><br /><span class="notesmall">{L_POPUP_ON_PRIVMSG_EXPLAIN}</span></td>
	  <td class="row2"> 
		<input type="radio" name="popup_pm" value="1" {POPUP_PM_YES} />
		<span class="note">{L_YES}</span>&nbsp;&nbsp; 
		<input type="radio" name="popup_pm" value="0" {POPUP_PM_NO} />
		<span class="note">{L_NO}</span></td>
	</tr>
	<tr> 
	  <td class="row1"><span class="note">{L_ALWAYS_ADD_SIGNATURE}:</span></td>
	  <td class="row2"> 
		<input type="radio" name="attachsig" value="1" {ALWAYS_ADD_SIGNATURE_YES} />
		<span class="note">{L_YES}</span>&nbsp;&nbsp; 
		<input type="radio" name="attachsig" value="0" {ALWAYS_ADD_SIGNATURE_NO} />
		<span class="note">{L_NO}</span></td>
	</tr>
	<tr> 
	  <td class="row1"><span class="note">{L_ALWAYS_ALLOW_BBCODE}:</span></td>
	  <td class="row2"> 
		<input type="radio" name="allowbbcode" value="1" {ALWAYS_ALLOW_BBCODE_YES} />
		<span class="note">{L_YES}</span>&nbsp;&nbsp; 
		<input type="radio" name="allowbbcode" value="0" {ALWAYS_ALLOW_BBCODE_NO} />
		<span class="note">{L_NO}</span></td>
	</tr>
	<tr> 
	  <td class="row1"><span class="note">{L_ALWAYS_ALLOW_HTML}:</span></td>
	  <td class="row2"> 
		<input type="radio" name="allowhtml" value="1" {ALWAYS_ALLOW_HTML_YES} />
		<span class="note">{L_YES}</span>&nbsp;&nbsp; 
		<input type="radio" name="allowhtml" value="0" {ALWAYS_ALLOW_HTML_NO} />
		<span class="note">{L_NO}</span></td>
	</tr>
	<tr> 
	  <td class="row1"><span class="note">{L_ALWAYS_ALLOW_SMILIES}:</span></td>
	  <td class="row2"> 
		<input type="radio" name="allowsmilies" value="1" {ALWAYS_ALLOW_SMILIES_YES} />
		<span class="note">{L_YES}</span>&nbsp;&nbsp; 
		<input type="radio" name="allowsmilies" value="0" {ALWAYS_ALLOW_SMILIES_NO} />
		<span class="note">{L_NO}</span></td>
	</tr>
	<tr> 
	  <td class="row1"><span class="note">{L_BOARD_LANGUAGE}:</span></td>
	  <td class="row2"><span class="notesmall">{LANGUAGE_SELECT}</span></td>
	</tr>
	<tr> 
	  <td class="row1"><span class="note">{L_BOARD_STYLE}:</span></td>
	  <td class="row2"><span class="notesmall">{STYLE_SELECT}</span></td>
	</tr>
	<tr> 
	  <td class="row1"><span class="note">{L_TIMEZONE}:</span></td>
	  <td class="row2"><span class="notesmall">{TIMEZONE_SELECT}</span></td>
	</tr>
	<tr> 
	  <td class="row1"><span class="note">{L_DATE_FORMAT}:</span><br />
		<span class="notesmall">{L_DATE_FORMAT_EXPLAIN}</span></td>
	  <td class="row2"> 
		<input type="text" name="dateformat" value="{DATE_FORMAT}" maxlength="14" class="post" />
	  </td>
	</tr>
	<!-- BEGIN switch_avatar_block -->
	<tr> 
	  <td class="catSides" colspan="2" height="28">&nbsp;</td>
	</tr>
	<tr> 
	  <th class="thSides" colspan="2" height="12" valign="middle">{L_AVATAR_PANEL}</th>
	</tr>
	<tr> 
		<td class="row1" colspan="2"><table width="70%" cellspacing="2" cellpadding="0" border="0" align="center">
			<tr> 
				<td width="65%"><span class="notesmall">{L_AVATAR_EXPLAIN}</span></td>
				<td align="center"><span class="notesmall">{L_CURRENT_IMAGE}</span><br />{AVATAR}<br /><input type="checkbox" name="avatardel" />&nbsp;<span class="notesmall">{L_DELETE_AVATAR}</span></td>
			</tr>
		</table></td>
	</tr>
	<!-- BEGIN switch_avatar_local_upload -->
	<tr> 
		<td class="row1"><span class="note">{L_UPLOAD_AVATAR_FILE}:</span></td>
		<td class="row2"><input type="hidden" name="MAX_FILE_SIZE" value="{AVATAR_SIZE}" /><input type="file" name="avatar" class="post" style="width:200px" /></td>
	</tr>
	<!-- END switch_avatar_local_upload -->
	<!-- BEGIN switch_avatar_remote_upload -->
	<tr> 
		<td class="row1"><span class="note">{L_UPLOAD_AVATAR_URL}:</span><br /><span class="notesmall">{L_UPLOAD_AVATAR_URL_EXPLAIN}</span></td>
		<td class="row2"><input type="text" name="avatarurl" size="40" class="post" style="width:200px" /></td>
	</tr>
	<!-- END switch_avatar_remote_upload -->
	<!-- BEGIN switch_avatar_remote_link -->
	<tr> 
		<td class="row1"><span class="note">{L_LINK_REMOTE_AVATAR}:</span><br /><span class="notesmall">{L_LINK_REMOTE_AVATAR_EXPLAIN}</span></td>
		<td class="row2"><input type="text" name="avatarremoteurl" size="40" class="post" style="width:200px" /></td>
	</tr>
	<!-- END switch_avatar_remote_link -->
	<!-- BEGIN switch_avatar_local_gallery -->
	<tr> 
		<td class="row1"><span class="note">{L_AVATAR_GALLERY}:</span></td>
		<td class="row2"><input type="submit" name="avatargallery" value="{L_SHOW_GALLERY}" class="liteoption" /></td>
	</tr>
	<!-- END switch_avatar_local_gallery -->
	<!-- END switch_avatar_block -->
	<tr>
		<td class="catBottom" colspan="2" align="center" height="28">{S_HIDDEN_FIELDS}<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="{L_RESET}" name="reset" class="liteoption" /></td>
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
