
<form method="post" action="{S_POST_DAYS_ACTION}">

<!--  
  <table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr> 
	  <td align="left" valign="bottom" colspan="2"><a class="maintitle" href="{U_VIEW_FORUM}">{FORUM_NAME}</a><br /><span class="gensmall"><b>{L_MODERATOR}: {MODERATORS}<br /><br />{LOGGED_IN_USER_LIST}</b></span></td>
	  <td align="right" valign="bottom" nowrap="nowrap"><span class="gensmall"><b>{PAGINATION}</b></span></td>
	</tr>
	<tr> 
	  <td align="left" valign="middle" width="50"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" /></a></td>
	  <td align="left" valign="middle" class="nav" width="100%"><span class="nav">&nbsp;&nbsp;&nbsp;<a href="{U_INDEX}" class="nav">{L_INDEX}</a> -> <a class="nav" href="{U_VIEW_FORUM}">{FORUM_NAME}</a></span></td>
	  <td align="right" valign="bottom" class="nav" nowrap="nowrap"><span class="gensmall"><a href="{U_MARK_READ}">{L_MARK_TOPICS_READ}</a></span></td>
	</tr>
	<tr>
	  <td align="right" colspan="3"><span class="nav">{PAGE_NUMBER}</span></td>
	</tr>
  </table>
-->


<!-- 
move to viewforum.php  page_header.php

$topic_mod = '';

if ( $is_auth['auth_mod'] )
{
<a href="{U_PRIVATEMSGS}" class="mainmenu"><img src="templates/subSilver/images/icon_mini_message.gif" width="12" height="13" border="0" alt="{PRIVATE_MESSAGE_INFO}" hspace="3" />{PRIVATE_MESSAGE_INFO}</a>
}
-->

<!-- BEGIN switch_admin_view_only -->
<a href="{U_PRIVATEMSGS}" class="mainmenu"><img src="templates/subSilver/images/icon_mini_message.gif" width="12" height="13" border="0" alt="{PRIVATE_MESSAGE_INFO}" hspace="3" />{PRIVATE_MESSAGE_INFO}</a>
<!-- END switch_admin_view_only -->

<br />


  <table width="100%" cellspacing="2" cellpadding="0" border="0" align="center">
 	<tr>
	<td align="left" valign="middle" width="50"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" vspace="5" /></a></td> 	
 	<td align="right" valign="middle" nowrap="nowrap"><span class="gensmall"><b>{PAGINATION}</b></span></td>
	</tr>
  </table>	
	<!-- TOPIC_FOLDER_IMG}" width="23" height="26" ---- width="19" height="18"
		gotopage
	{topicrow.NEWEST_POST_IMG}
	-->
  <table border="0" cellpadding="5" cellspacing="1" width="100%" class="forumline">
	<tr> 
	  <th align="center" height="18" class="thCornerL" nowrap="nowrap"></th>
	  <th width="75" align="left" class="thTop" nowrap="nowrap">{L_TOPICS}&nbsp;</th>
	  <th width="30" align="center" class="thTop" nowrap="nowrap">&nbsp;{L_REPLIES}&nbsp;</th>
	  <th width="100" align="center" class="thTop" nowrap="nowrap">&nbsp;{L_AUTHOR}&nbsp;</th>
	  <!--<th width="50" align="center" class="thTop" nowrap="nowrap">&nbsp;{L_VIEWS}&nbsp;</th>-->
	  <th align="left" class="thCornerR" nowrap="nowrap">{L_LASTPOST}&nbsp;</th>
	</tr>
	<!-- BEGIN topicrow -->
	<tr> 
	  <td class="row1" align="center" valign="top" width="20"><img src="{topicrow.TOPIC_FOLDER_IMG}" width="20" height="23" alt="{topicrow.L_TOPIC_FOLDER_ALT}" title="{topicrow.L_TOPIC_FOLDER_ALT}" /></td>
	  <td class="row1" width="100%" align="left" valign="top"><span class="topictitle">{topicrow.TOPIC_TYPE}<a href="{topicrow.U_VIEW_TOPIC}" class="topictitle">{topicrow.TOPIC_TITLE}</a></span><span class="gensmall"><br />
		{topicrow.GOTO_PAGE}</span></td>
	  <td class="row2" align="center" valign="top"><span class="postdetails">{topicrow.REPLIES}</span></td>
	  <td class="row3" align="center" valign="top"><span class="name">{topicrow.TOPIC_AUTHOR}</span></td>
	  <!--<td class="row2" align="center" valign="middle"><span class="postdetails">{topicrow.VIEWS}</span></td>-->
	  <td class="row3Right" align="left" valign="top" nowrap="nowrap"><span class="postdetails">{topicrow.LAST_POST_TIME}<br />by {topicrow.LAST_POST_AUTHOR}</span></td>
	</tr>
	<!-- END topicrow -->
	<!--  {topicrow.LAST_POST_IMG} -->
	<!-- BEGIN switch_no_topics -->
	<tr> 
	  <td class="row1" colspan="5" height="30" align="center" valign="middle"><span class="gen">{L_NO_TOPICS}</span></td>
	</tr>
	<!-- END switch_no_topics -->

<!--
	<tr> 
	  <td class="catBottom" align="center" valign="middle" colspan="6" height="28"><span class="genmed">{L_DISPLAY_TOPICS}:&nbsp;{S_SELECT_TOPIC_DAYS}&nbsp; 
		<input type="submit" class="liteoption" value="{L_GO}" name="submit" />
		</span></td>
	</tr>
-->
	
  </table>
<!--
  <table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">

	<tr> 
	  <td align="left" valign="middle" width="50"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" /></a></td>
	  <td align="left" valign="middle" width="100%"><span class="nav">&nbsp;&nbsp;&nbsp;<a href="{U_INDEX}" class="nav">{L_INDEX}</a> -> <a class="nav" href="{U_VIEW_FORUM}">{FORUM_NAME}</a></span></td>
	  <td align="right" valign="middle" nowrap="nowrap"><span class="gensmall">{S_TIMEZONE}</span><br /><span class="nav">{PAGINATION}</span> 
		</td>
	</tr>

	<tr>
	  <td align="right" colspan="3"><span class="nav">{PAGE_NUMBER}</span></td>
	</tr>
  </table>
-->
  <table width="100%" cellspacing="2" cellpadding="0" border="0" align="center">
 	<tr>
	<td align="left" valign="middle" width="50"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" vspace="5" /></a></td> 	
 	<td align="right" valign="middle" nowrap="nowrap"><span class="gensmall"><b>{PAGINATION}</b></span></td>
	</tr>

  	<tr>
	  <td align="left" colspan="3"><br /><span class="nav">{PAGE_NUMBER}</span></td>
	</tr>
 	<tr>
	<td><br /><br />
	<table width="204" cellspacing="0" cellpadding="6" border="1">
		<tr>
			<td width="20" align="left">
	<table width="100%" align="center" cellspacing="4" cellpadding="0" border="0">
		<tr>
			<td width="20" align="left"><img src="{FOLDER_NEW_IMG}" alt="{L_NEW_POSTS}" width="20" height="23" /></td>
			<td class="gensmall">{L_NEW_POSTS}</td>
		</tr>
		<tr>
			<td width="20" align="center"><img src="{FOLDER_IMG}" alt="{L_NO_NEW_POSTS}" width="20" height="23" /></td>
			<td class="gensmall">{L_NO_NEW_POSTS}</td>
		</tr>
		<tr>
			<td width="20" align="center"><img src="{FOLDER_HOT_NEW_IMG}" alt="{L_NEW_POSTS_HOT}" width="20" height="23" /></td>
			<td class="gensmall">{L_NEW_POSTS_HOT}</td>
		</tr>
		<tr>
			<td width="20" align="center"><img src="{FOLDER_HOT_IMG}" alt="{L_NO_NEW_POSTS_HOT}" width="20" height="23" /></td>
			<td class="gensmall">{L_NO_NEW_POSTS_HOT}</td>
		</tr>
  </table></td>
		</tr>
  </table>	
	</td> 	
	</tr>
  </table>
</form>

<!-- 

<form method="post" action="adminsend.php">
<b>Send Email To admin</b><br>
Your Email: <input name="email" type="text" /><br />
Message: <br />
<textarea name= "form" rows="10" cols="50">
</textarea><br />
<input type="submit" />
</form>
<br />

-->


  
  
<!--   

<img src="/images/forum/legend3.gif" border="0" alt="Legend" width="194" height="110">

		<table width="100%" align="center" cellspacing="3" cellpadding="0" border="0">
			<tr>
		<th colspan="8" valign="top" nowrap="nowrap">
This legend is for testing dynamic images 
		</th>
	</tr>
			<tr>
				<td width="20" align="left"><img src="{FOLDER_NEW_IMG}" alt="{L_NEW_POSTS}" width="19" height="18" /></td>
				<td class="gensmall">{L_NEW_POSTS} <font color="#CC0033">PFH</font></td>
				<td>&nbsp;&nbsp;</td>
				<td width="20" align="center"><img src="{FOLDER_IMG}" alt="{L_NO_NEW_POSTS}" width="19" height="18" /></td>
				<td class="gensmall">{L_NO_NEW_POSTS} <font color="#CC0033">PFH</font></td>
				<td>&nbsp;&nbsp;</td>
				<td width="20" align="center"><img src="{FOLDER_ANNOUNCE_IMG}" alt="{L_ANNOUNCEMENT}" width="19" height="18" /></td>
				<td class="gensmall">{L_ANNOUNCEMENT}</td>
			</tr>
			<tr> 
				<td width="20" align="center"><img src="{FOLDER_HOT_NEW_IMG}" alt="{L_NEW_POSTS_HOT}" width="19" height="18" /></td>
				<td class="gensmall">{L_NEW_POSTS_HOT} <font color="#CC0033">MEMBER</font></td>
				<td>&nbsp;&nbsp;</td>
				<td width="20" align="center"><img src="{FOLDER_HOT_IMG}" alt="{L_NO_NEW_POSTS_HOT}" width="19" height="18" /></td>
				<td class="gensmall">{L_NO_NEW_POSTS_HOT} <font color="#CC0033">MEMBER</font></td>
				<td>&nbsp;&nbsp;</td>
				<td width="20" align="center"><img src="{FOLDER_STICKY_IMG}" alt="{L_STICKY}" width="19" height="18" /></td>
				<td class="gensmall">{L_STICKY}</td>
			</tr>

			<tr>
				<td class="gensmall"><img src="{FOLDER_LOCKED_NEW_IMG}" alt="{L_NEW_POSTS_LOCKED}" width="19" height="18" /></td>
				<td class="gensmall">{L_NEW_POSTS_LOCKED}</td>
				<td>&nbsp;&nbsp;</td>
				<td class="gensmall"><img src="{FOLDER_LOCKED_IMG}" alt="{L_NO_NEW_POSTS_LOCKED}" width="19" height="18" /></td>
				<td class="gensmall">{L_NO_NEW_POSTS_LOCKED}</td>
			</tr>

 		</table>

 -->		