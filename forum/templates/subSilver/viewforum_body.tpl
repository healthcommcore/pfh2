
<form method="post" action="{S_POST_DAYS_ACTION}">


<!-- BEGIN switch_admin_view_only -->
<!-- END switch_admin_view_only -->


  <table width="100%" cellspacing="2" cellpadding="0" border="0" align="center">
 	<tr>
	<td align="left" valign="middle" width="50"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" vspace="5" /></a></td> 	
 	<td align="right" valign="middle" nowrap="nowrap"><span class="gensmall"><b>{PAGINATION}</b></span></td>
	</tr>
  </table>	
	<!-- width="23" height="26" ---- width="19" height="18"
	{topicrow.NEWEST_POST_IMG}
	-->
  <table border="0" cellpadding="5" cellspacing="1" width="100%" class="forumline">
	<tr> 
	  <th align="center" height="18" class="thCornerL" nowrap="nowrap"></th>
	  <th width="75" align="left" class="thTop" nowrap="nowrap">{L_TOPICS}&nbsp;</th>
	  <th width="30" align="center" class="thTop" nowrap="nowrap">&nbsp;{L_REPLIES}&nbsp;</th>
	  <th width="100" align="center" class="thTop" nowrap="nowrap">&nbsp;{L_AUTHOR}&nbsp;</th>
	  <th align="left" class="thCornerR" nowrap="nowrap">{L_LASTPOST}&nbsp;</th>
	</tr>
	<!-- BEGIN topicrow -->
	<tr> 
	  <td class="row1" align="center" valign="top" width="20" nowrap="nowrap"><span class="gensmall">{topicrow.STATIC_UP_URL}<img src="{topicrow.TOPIC_FOLDER_IMG}" width="20" height="23" alt="{topicrow.L_TOPIC_FOLDER_ALT}" title="{topicrow.L_TOPIC_FOLDER_ALT}" />{topicrow.STATIC_DOWN_URL}</span></td>
	  <td class="row1" width="100%" align="left" valign="top"><span class="topictitle">{topicrow.TOPIC_TYPE}<a href="{topicrow.U_VIEW_TOPIC}" class="topictitle">{topicrow.TOPIC_TITLE}</a></span><span class="gensmall"><br />
		{topicrow.GOTO_PAGE}</span></td>
	  <td class="row2" align="center" valign="top"><span class="postdetails">{topicrow.REPLIES}</span></td>
	  <td class="row3" align="center" valign="top"><span class="name">{topicrow.TOPIC_AUTHOR}</span></td>
	  <td class="row3Right" align="left" valign="top" nowrap="nowrap"><span class="postdetails">{topicrow.LAST_POST_TIME}<br />by {topicrow.LAST_POST_AUTHOR}</span></td>
	</tr>
	<!-- END topicrow -->
	<!--  {topicrow.LAST_POST_IMG} -->
	<!-- BEGIN switch_no_topics -->
	<tr> 
	  <td class="row1" colspan="5" height="30" align="center" valign="middle"><span class="gen">{L_NO_TOPICS}</span></td>
	</tr>
	<!-- END switch_no_topics -->

	
  </table>

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
			<td  align="left">
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
