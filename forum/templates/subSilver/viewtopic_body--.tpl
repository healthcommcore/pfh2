<!--

-->
<table width="100%" cellspacing="1" cellpadding="3" border="0">
	<tr align="right">
		<td colspan="2" height="20"><span class="nav"><a href="{U_VIEW_OLDER_TOPIC}" class="navview">{L_VIEW_PREVIOUS_TOPIC}</a> :: <a href="{U_VIEW_NEWER_TOPIC}" class="navview">{L_VIEW_NEXT_TOPIC}</a> &nbsp;</span></td>
	</tr>
</table>
<table width="100%" cellspacing="2" cellpadding="2" border="0">

  <tr> 
	<td align="left" valign="bottom" colspan="2">
	 <a class="maintitle" href="{U_VIEW_TOPIC}">{TOPIC_TITLE}</a><br /> 
	  <span class="gensmall">&nbsp;<b>{PAGINATION}</b><br />
	  &nbsp; </span></td>
  </tr>
  
</table>

<table width="100%" cellspacing="2" cellpadding="2" border="0">
  <tr> 
	<td align="left" valign="top" nowrap="nowrap" height="35"><span class="nav"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" align="middle" /></a>&nbsp;&nbsp;&nbsp;<a href="{U_POST_REPLY_TOPIC}"><img src="{REPLY_IMG}" border="0" alt="{L_POST_REPLY_TOPIC}" align="middle" /></a>&nbsp;&nbsp;&nbsp;<a href="{U_VIEW_FORUM}" class="nav"><img src="/images/forum/forumTopics5.gif" width="122" height="24" border="0" alt="Back to {L_POST_FORUM_NAME} Topic list" align="middle" /></a></span></td>

  </tr>
</table>
<!--
	<td align="right" valign="middle" colspan="2"><span class="gensmall"><b>{PAGINATION}</b></span></td>

	<td align="left" valign="middle" width="100%"><span class="nav">&nbsp;&nbsp;&nbsp;<a href="{U_INDEX}" class="nav">{L_INDEX}</a> 
	  -> <a href="{U_VIEW_FORUM}" class="nav">{FORUM_NAME}</a></span></td>
	   class="catHead"
	   class="forumline"

-->

<!-- whole table border  class="forumline" -->
<table width="100%" cellspacing="1" cellpadding="8" border="0">

<!--  -->	{POLL_DISPLAY}
	<tr>
		<th class="thLeft" width="150" align="left" height="22" nowrap="nowrap">{L_AUTHOR}</th>
		<th class="thRight" align="left" nowrap="nowrap">{L_MESSAGE}</th>
	</tr>
	<!-- BEGIN postrow -->
	
<!--
 class="{postrow.ROW_CLASS}
 <br />{postrow.POSTER_JOINED}<br />{postrow.POSTER_POSTS}<br />{postrow.POSTER_FROM}
 
-->
	<tr> 
		<td align="left" class="spaceRow" height="28"><span class="name"><a name="{postrow.U_POST_ID}"></a><b>{postrow.POSTER_NAME}</b></span></td>
		<td align="left" class="spaceRow"><span class="postdetails">{L_POSTED} {postrow.POST_DATE} EST<span class="gen">&nbsp;</span>&nbsp; &nbsp;{L_POST_SUBJECT}: {postrow.POST_SUBJECT}</span></td>		
	</tr>
	<tr> <!-- class="postdetails" -->
		<td  align="left" valign="top" class="row3"><span class="name">{postrow.POSTER_RANK}<br />{postrow.RANK_IMAGE}{postrow.POSTER_AVATAR}<br /></span><br /></td>
		<td class="row3" width="100%" height="28" valign="top"><span class="postbody">{postrow.MESSAGE}{postrow.SIGNATURE}</span><span class="gensmall">{postrow.EDITED_MESSAGE}</span></td>
	</tr>
<!--
				<td valign="top" nowrap="nowrap">{postrow.QUOTE_IMG} {postrow.EDIT_IMG} {postrow.DELETE_IMG} {postrow.IP_IMG}</td>
<span style="color:#c82c37">|</span>

class="{postrow.ROW_CLASS}"
class="{postrow.ROW_CLASS}"
-->
	<tr> 
		<td class="spaceRow" align="left" valign="middle"><span class="nav"><a href="#top" class="nav">{L_BACK_TO_TOP}</a></span></td>
		<td class="spaceRow" width="100%" height="28" valign="middle" nowrap="nowrap">
<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td width="75">{postrow.EDIT_IMG}</td>
		<td width="90">{postrow.DELETE_IMG}</td>
		<td width="135">{postrow.PM_IMG}</td>
	</tr><!-- sid <a href="privmsg.php?mode=post&u=4" title="Send private message to Administrator or Moderator"><img src="templates/subSilver/images/lang_english/icon_pm.gif" alt="Send private message to Katie" title="Send private message" border="0" /></a>  width="335" -->
</table></td>
	</tr>

	<tr> <!-- clear row -->
		<td colspan="2" height="15"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<!-- END postrow -->
</table>

<!-- 
 {postrow.PM_IMG}

-->


<!--
	<tr align="center"> 
		<td class="catBottom" colspan="2" height="28"><table cellspacing="0" cellpadding="0" border="0">
			<tr><form method="post" action="{S_POST_DAYS_ACTION}">
				<td align="center"><span class="gensmall">{L_DISPLAY_POSTS}: {S_SELECT_POST_DAYS}&nbsp;{S_SELECT_POST_ORDER}&nbsp;<input type="submit" value="{L_GO}" class="liteoption" name="submit" /></span></td>
			</form></tr>
		</table></td>
	</tr>
-->


<table width="100%" cellspacing="2" cellpadding="2" border="0">
  <tr>
	<td align="right" valign="middle" colspan="2"><span class="gensmall"><b>{PAGINATION}</b></span></td>
  </tr> 
  <tr> 
	<td align="left" valign="bottom" nowrap="nowrap"><span class="nav"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" align="middle" /></a>&nbsp;&nbsp;&nbsp;<a href="{U_POST_REPLY_TOPIC}"><img src="{REPLY_IMG}" border="0" alt="{L_POST_REPLY_TOPIC}" align="middle" /></a>&nbsp;&nbsp;&nbsp;<a href="{U_VIEW_FORUM}" class="nav"><img src="/images/forum/forumTopics5.gif" width="122" height="24" border="0" alt="Back to {L_POST_FORUM_NAME} Topic list" align="middle" /></a></span></td><!-- {FORUM_NAME} need FORUM_IMG  L_alt  -->
	<td align="right" valign="middle" colspan="2"><span class="gensmall"></span></td>
  </tr>
  <tr>
	<td align="left"><span class="nav"><br />{PAGE_NUMBER}</span></td>
  </tr>  
</table>

<br />
	  {S_TOPIC_ADMIN}
<br />


<!-- 
<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
  <tr> 
	<td align="left" valign="middle" nowrap="nowrap"><span class="nav"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" align="middle" /></a>&nbsp;&nbsp;&nbsp;<a href="{U_POST_REPLY_TOPIC}"><img src="{REPLY_IMG}" border="0" alt="{L_POST_REPLY_TOPIC}" align="middle" /></a></span></td>
	<td align="left" valign="middle" width="100%"><span class="nav">&nbsp;&nbsp;&nbsp;<a href="{U_INDEX}" class="nav">{L_INDEX}</a> 
	  -> <a href="{U_VIEW_FORUM}" class="nav">{FORUM_NAME}</a></span></td>
	<td align="right" valign="top" nowrap="nowrap"><span class="gensmall">{S_TIMEZONE}</span>
	
	<br /><span class="nav">{PAGINATION}</span> 
	  </td>
  </tr>
  <tr>
	<td align="left" colspan="3"><span class="nav">{PAGE_NUMBER}</span></td>
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
 -->