<script language="JavaScript" type="text/javascript">
<!--
// bbCode control by
// subBlue design
// www.subBlue.com

// Startup variables
var imageTag = false;
var theSelection = false;

// Check for Browser & Platform for PC & IE specific bits
// More details from: http://www.mozilla.org/docs/web-developer/sniffer/browser_type.html
var clientPC = navigator.userAgent.toLowerCase(); // Get client info
var clientVer = parseInt(navigator.appVersion); // Get browser version

var is_ie = ((clientPC.indexOf("msie") != -1) && (clientPC.indexOf("opera") == -1));
var is_nav = ((clientPC.indexOf('mozilla')!=-1) && (clientPC.indexOf('spoofer')==-1)
                && (clientPC.indexOf('compatible') == -1) && (clientPC.indexOf('opera')==-1)
                && (clientPC.indexOf('webtv')==-1) && (clientPC.indexOf('hotjava')==-1));
var is_moz = 0;

var is_win = ((clientPC.indexOf("win")!=-1) || (clientPC.indexOf("16bit") != -1));
var is_mac = (clientPC.indexOf("mac")!=-1);

// Helpline messages
b_help = "{L_BBCODE_B_HELP}";
i_help = "{L_BBCODE_I_HELP}";
u_help = "{L_BBCODE_U_HELP}";
q_help = "{L_BBCODE_Q_HELP}";
c_help = "{L_BBCODE_C_HELP}";
l_help = "{L_BBCODE_L_HELP}";
o_help = "{L_BBCODE_O_HELP}";
p_help = "{L_BBCODE_P_HELP}";
w_help = "{L_BBCODE_W_HELP}";
a_help = "{L_BBCODE_A_HELP}";
s_help = "{L_BBCODE_S_HELP}";
f_help = "{L_BBCODE_F_HELP}";

// Define the bbCode tags
bbcode = new Array();
bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]');
imageTag = false;

// Shows the help messages in the helpline window
function helpline(help) {
	document.post.helpbox.value = eval(help + "_help");
}


// Replacement for arrayname.length property
function getarraysize(thearray) {
	for (i = 0; i < thearray.length; i++) {
		if ((thearray[i] == "undefined") || (thearray[i] == "") || (thearray[i] == null))
			return i;
		}
	return thearray.length;
}

// Replacement for arrayname.push(value) not implemented in IE until version 5.5
// Appends element to the array
function arraypush(thearray,value) {
	thearray[ getarraysize(thearray) ] = value;
}

// Replacement for arrayname.pop() not implemented in IE until version 5.5
// Removes and returns the last element of an array
function arraypop(thearray) {
	thearraysize = getarraysize(thearray);
	retval = thearray[thearraysize - 1];
	delete thearray[thearraysize - 1];
	return retval;
}


function checkForm() {

	formErrors = false;    

	if (document.post.message.value.length < 2) {
		formErrors = "{L_EMPTY_MESSAGE}";
	}

	if (formErrors) {
		alert(formErrors);
		return false;
	} else {
		bbstyle(-1);
		//formObj.preview.disabled = true;
		//formObj.submit.disabled = true;
		return true;
	}
}

function emoticon(text) {
	var txtarea = document.post.message;
	text = ' ' + text + ' ';
	if (txtarea.createTextRange && txtarea.caretPos) {
		var caretPos = txtarea.caretPos;
		caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? caretPos.text + text + ' ' : caretPos.text + text;
		txtarea.focus();
	} else {
		txtarea.value  += text;
		txtarea.focus();
	}
}

function bbfontstyle(bbopen, bbclose) {
	var txtarea = document.post.message;

	if ((clientVer >= 4) && is_ie && is_win) {
		theSelection = document.selection.createRange().text;
		if (!theSelection) {
			txtarea.value += bbopen + bbclose;
			txtarea.focus();
			return;
		}
		document.selection.createRange().text = bbopen + theSelection + bbclose;
		txtarea.focus();
		return;
	}
	else if (txtarea.selectionEnd && (txtarea.selectionEnd - txtarea.selectionStart > 0))
	{
		mozWrap(txtarea, bbopen, bbclose);
		return;
	}
	else
	{
		txtarea.value += bbopen + bbclose;
		txtarea.focus();
	}
	storeCaret(txtarea);
}


function bbstyle(bbnumber) {
	var txtarea = document.post.message;

	txtarea.focus();
	donotinsert = false;
	theSelection = false;
	bblast = 0;

	if (bbnumber == -1) { // Close all open tags & default button names
		while (bbcode[0]) {
			butnumber = arraypop(bbcode) - 1;
			txtarea.value += bbtags[butnumber + 1];
			buttext = eval('document.post.addbbcode' + butnumber + '.value');
			eval('document.post.addbbcode' + butnumber + '.value ="' + buttext.substr(0,(buttext.length - 1)) + '"');
		}
		imageTag = false; // All tags are closed including image tags :D
		txtarea.focus();
		return;
	}

	if ((clientVer >= 4) && is_ie && is_win)
	{
		theSelection = document.selection.createRange().text; // Get text selection
		if (theSelection) {
			// Add tags around selection
			document.selection.createRange().text = bbtags[bbnumber] + theSelection + bbtags[bbnumber+1];
			txtarea.focus();
			theSelection = '';
			return;
		}
	}
	else if (txtarea.selectionEnd && (txtarea.selectionEnd - txtarea.selectionStart > 0))
	{
		mozWrap(txtarea, bbtags[bbnumber], bbtags[bbnumber+1]);
		return;
	}
	
	// Find last occurance of an open tag the same as the one just clicked
	for (i = 0; i < bbcode.length; i++) {
		if (bbcode[i] == bbnumber+1) {
			bblast = i;
			donotinsert = true;
		}
	}

	if (donotinsert) {		// Close all open tags up to the one just clicked & default button names
		while (bbcode[bblast]) {
				butnumber = arraypop(bbcode) - 1;
				txtarea.value += bbtags[butnumber + 1];
				buttext = eval('document.post.addbbcode' + butnumber + '.value');
				eval('document.post.addbbcode' + butnumber + '.value ="' + buttext.substr(0,(buttext.length - 1)) + '"');
				imageTag = false;
			}
			txtarea.focus();
			return;
	} else { // Open tags
	
		if (imageTag && (bbnumber != 14)) {		// Close image tag before adding another
			txtarea.value += bbtags[15];
			lastValue = arraypop(bbcode) - 1;	// Remove the close image tag from the list
			document.post.addbbcode14.value = "Img";	// Return button back to normal state
			imageTag = false;
		}
		
		// Open tag
		txtarea.value += bbtags[bbnumber];
		if ((bbnumber == 14) && (imageTag == false)) imageTag = 1; // Check to stop additional tags after an unclosed image tag
		arraypush(bbcode,bbnumber+1);
		eval('document.post.addbbcode'+bbnumber+'.value += "*"');
		txtarea.focus();
		return;
	}
	storeCaret(txtarea);
}

// From http://www.massless.org/mozedit/
function mozWrap(txtarea, open, close)
{
	var selLength = txtarea.textLength;
	var selStart = txtarea.selectionStart;
	var selEnd = txtarea.selectionEnd;
	if (selEnd == 1 || selEnd == 2) 
		selEnd = selLength;

	var s1 = (txtarea.value).substring(0,selStart);
	var s2 = (txtarea.value).substring(selStart, selEnd)
	var s3 = (txtarea.value).substring(selEnd, selLength);
	txtarea.value = s1 + open + s2 + close + s3;
	return;
}

// Insert at Claret position. Code from
// http://www.faqts.com/knowledge_base/view.phtml/aid/1052/fid/130
function storeCaret(textEl) {
	if (textEl.createTextRange) textEl.caretPos = document.selection.createRange().duplicate();
}

//-->
</script>

<!-- BEGIN privmsg_extensions -->
<table border="0" cellspacing="0" cellpadding="0" align="center" width="100%">
  <tr> 
	<td valign="top" align="center" width="100%"> 
	  <table height="40" cellspacing="2" cellpadding="2" border="0">
		<tr valign="middle"> 
		  <td>{INBOX_IMG}</td>
		  <td><span class="cattitle">{INBOX_LINK}&nbsp;&nbsp;</span></td>
		  <td>{SENTBOX_IMG}</td>
		  <td><span class="cattitle">{SENTBOX_LINK}&nbsp;&nbsp;</span></td>
		  <td>{OUTBOX_IMG}</td>
		  <td><span class="cattitle">{OUTBOX_LINK}&nbsp;&nbsp;</span></td>
		  <td>{SAVEBOX_IMG}</td>
		  <td><span class="cattitle">{SAVEBOX_LINK}&nbsp;&nbsp;</span></td>
		</tr>
	  </table>
	</td>
  </tr>
</table>

<br clear="all" />
<!-- END privmsg_extensions -->

<form action="{S_POST_ACTION}" method="post" name="post" onsubmit="return checkForm(this)">

{POST_PREVIEW_BOX}
{ERROR_BOX}

<!-- 
<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr> 
		<td align="left"><span  class="nav"><a href="{U_INDEX}" class="nav">{L_INDEX}</a>
		<!-- BEGIN switch_not_privmsg --> 
		-> <a href="{U_VIEW_FORUM}" class="nav">{FORUM_NAME}</a></span></td>
		<!-- END switch_not_privmsg -->
	</tr>
</table>


class="forumline"
 bgcolor="#FFFFFF"
 
 <a href="/forum/viewforum.php?f=1"><img src="/images/forum/forumTopics5.gif" width="122" height="24" border="0" alt="Back to Topic list" vspace="0" align="left" /></a>
-->

<table width="100%" cellspacing="0" cellpadding="2"  border="0">
	<tr>
		<td align="right"><a href="{U_VIEW_FORUM}" class="nav"><img src="/images/forum/forumTopics5.gif" width="122" height="24" border="0" alt="Back to {L_POST_FORUM_NAME} Topic list" align="left" /></a><br /><br /><br /><span class="thHead" align="right"><b>{L_POST_A}</b></span><br />
<table border="0" cellpadding="3" cellspacing="1" width="100%" >
<!-- 	<tr> 
		<th class="thHead" colspan="2" height="25"><b>{L_POST_A}</b></th>
	</tr>
 -->
 <!-- BEGIN switch_username_select -->
	<tr> <!--  class="row1"  class="row2"  -->
		<td><span class="gen"><b>{L_USERNAME}</b></span></td>
		<td><span class="genmed"><input type="text" class="post" tabindex="1" name="username" size="25" maxlength="25" value="{USERNAME}" /></span></td>
	</tr>
	<!-- END switch_username_select -->
	<!-- BEGIN switch_privmsg -->
	<tr> 
		<td ><span class="gen"><b></b></span></td>
		<td ><span class="genmed"><input type="hidden"  class="post" name="username"  tabindex="1" value="katie" /></span></td>
	</tr>
	<!-- END switch_privmsg -->

<!-- {L_USERNAME}

	<tr> 
		<td ><span class="gen"><b>{L_USERNAME}</b></span></td>
		<td ><span class="genmed"><input type="text"  class="post" name="username" maxlength="25" size="25" tabindex="1" value="{USERNAME}" />&nbsp;<input type="submit" name="usersubmit" value="{L_FIND_USERNAME}" class="liteoption" onClick="window.open('{U_SEARCH_USER}', '_phpbbsearch', 'HEIGHT=250,resizable=yes,WIDTH=400');return false;" /></span></td>
	</tr>

-->

</table>
		
		</td>
		<td rowspan="4">
		<table width="100%" border="0" cellspacing="8" cellpadding="0">
		  <tr> 
			<td><!-- space line above smiles -->&nbsp;</td>
		  </tr>
<!--  -->
		  <tr> 
			<td valign="top" align="left"> <br />
			  <table width="100" border="0" cellspacing="0" cellpadding="8">
				<tr align="center"> 
				  <td colspan="{S_SMILIES_COLSPAN}" class="gensmall"><br /><b>{L_EMOTICONS}</b></td>
				</tr>
				<!-- BEGIN smilies_row -->
				<tr align="center" valign="middle"> 
				  <!-- BEGIN smilies_col -->
				  <td><a href="javascript:emoticon('{smilies_row.smilies_col.SMILEY_CODE}')"><img src="{smilies_row.smilies_col.SMILEY_IMG}" border="0" alt="{smilies_row.smilies_col.SMILEY_DESC}" title="{smilies_row.smilies_col.SMILEY_DESC}" /></a></td>
				  <!-- END smilies_col -->
				</tr>
				<!-- END smilies_row -->
				<!-- BEGIN switch_smilies_extra -->
				<tr align="center"> 
				  <td colspan="{S_SMILIES_COLSPAN}">
<!-- 				  <span  class="nav"><a href="{U_MORE_SMILIES}" onclick="window.open('{U_MORE_SMILIES}', '_phpbbsmilies', 'HEIGHT=300,resizable=yes,scrollbars=yes,WIDTH=250');return false;" target="_phpbbsmilies" class="nav">{L_MORE_SMILIES}</a></span>
 -->			
				  </td>
				</tr>
				<!-- END switch_smilies_extra -->
			  </table>
			<span class="forumTextSMALL">Click on a face to include it in your message.<br /><br />Each face will translate into text in the box on the left. After you click <b>Submit</b>, the face you chose will appear in your post.</span></td>
		  </tr>
		  </table>
		  </td>
	</tr><!--  New Topic: Subject/Topic: switch_inline -->
	<tr>
		<td><span class="gen"><b>{L_SUBJECT}:</b></span> <br /><span class="gen"> 
		<input type="text" name="subject" size="35" maxlength="60" style="width:400px" tabindex="2" class="post" value="{SUBJECT}" />
		</span></td>
	</tr>
	<!-- BEGIN switch_privmsg -->
	<tr>
		<td><input type="hidden" name="subject"  tabindex="2" class="post" value="{USERNAME}" /></td>
	</tr>
	<!-- END switch_privmsg -->
	<tr><!-- <b>Your Message:</b> -->
		<td><br /><span class="gen"><b>{L_MESSAGE_BODY}:</b><br />
			  <textarea name="message" rows="10" cols="30" wrap="virtual" style="width:400px" tabindex="3" class="post" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);">{MESSAGE}</textarea></span></td>
	</tr>
	<tr>
		<td align="center" valign="top" nowrap>
		<table cellspacing="0" cellpadding="1" border="0">
		  <!-- BEGIN switch_signature_checkbox -->
		  <tr> 
			<td> 
			  <input type="checkbox" name="attach_sig" {S_SIGNATURE_CHECKED} />
			</td>
			<td><span class="gen">{L_ATTACH_SIGNATURE}</span></td>
		  </tr>
		  <!-- END switch_signature_checkbox -->

		  <!-- BEGIN switch_delete_checkbox -->
		  <tr> 
			<td> 
			  <input type="checkbox" name="delete" />
			</td>
			<td><span class="gen">{L_DELETE_POST}</span></td>
		  </tr>
		  <!-- END switch_delete_checkbox -->
		  <!-- BEGIN switch_type_toggle -->
		  <tr> 

			<td colspan="2">&nbsp;<span class="gen">{S_TYPE_TOGGLE}</span></td>
		  </tr>
		  <!-- END switch_type_toggle -->
		</table><br />
		{S_HIDDEN_FORM_FIELDS}<input type="submit" tabindex="5" name="preview" class="mainoption" value="{L_PREVIEW}" />&nbsp;&nbsp;<input type="submit" accesskey="s" tabindex="6" name="post" class="mainoption" value="{L_SUBMIT}" />&nbsp;&nbsp;<input type="button" tabindex="7" class="mainoption" value="Cancel" onClick="document.location='viewforum.php?f=1';" />&nbsp;</td>
	</tr>
		
<!-- 
	<tr>
		<td colspan="2" align="right" height="60" valign="bottom">
		{TOPIC_REVIEW_BOX}
		</td>
		<td></td>
	</tr>
 -->
	<tr>
		<td colspan="2" align="right" height="60" valign="bottom"><span class="nav"><i>Be sure to read up on our <a href="/policies2.php" class="navview">forum rules and regulations</a>.</i></span><img src="/images/blank.gif" width="20" height="10" border="0" alt=""></td>
	</tr>
</table>

</form>

<!-- 

 class="catBottom"

-->
<br />
<br />
<br />


<!-- 

<table border="1" cellpadding="3" cellspacing="1" width="100%" class="forumline">

	<tr> 
	  <td class="row1" valign="top">&nbsp;</td>
	  
	  <td class="row2" valign="top"><span class="gen"> <span class="genmed"> </span> 
		<table width="450" border="0" cellspacing="0" cellpadding="2">

		  <tr> 
			<td colspan="9"><span class="gen"> 
			  <textarea name="message" rows="15" cols="35" wrap="virtual" style="width:450px" tabindex="3" class="post" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);">{MESSAGE}</textarea>
			  </span></td>
		  </tr>
		</table>
		</span></td>
	</tr>
	<tr> 
	  <td class="row1" valign="top"><span class="gen"><b>{L_OPTIONS}</b></span><br /><span class="gensmall">{HTML_STATUS}<br />{BBCODE_STATUS}<br />{SMILIES_STATUS}</span></td>
	  <td class="row2"><span class="gen"> </span> 
		<table cellspacing="0" cellpadding="1" border="0">
		  <!-- BEGIN switch_html_checkbox -->
		  <tr> 
			<td> 
			  <input type="checkbox" name="disable_html" {S_HTML_CHECKED} />
			</td>
			<td><span class="gen">{L_DISABLE_HTML}</span></td>
		  </tr>
		  <!-- END switch_html_checkbox -->
		  <!-- BEGIN switch_bbcode_checkbox -->
		  <tr> 
			<td> 
			  <input type="checkbox" name="disable_bbcode" {S_BBCODE_CHECKED} />
			</td>
			<td><span class="gen">{L_DISABLE_BBCODE}</span></td>
		  </tr>
		  <!-- END switch_bbcode_checkbox -->
		  <!-- BEGIN switch_smilies_checkbox -->
		  <tr> 
			<td> 
			  <input type="checkbox" name="disable_smilies" {S_SMILIES_CHECKED} />
			</td>
			<td><span class="gen">{L_DISABLE_SMILIES}</span></td>
		  </tr>
		  <!-- END switch_smilies_checkbox -->
		  <!-- BEGIN switch_signature_checkbox -->
		  <tr> 
			<td> 
			  <input type="checkbox" name="attach_sig" {S_SIGNATURE_CHECKED} />
			</td>
			<td><span class="gen">{L_ATTACH_SIGNATURE}</span></td>
		  </tr>
		  <!-- END switch_signature_checkbox -->
		  <!-- BEGIN switch_notify_checkbox -->
		  <tr> 
			<td> 
			  <input type="checkbox" name="notify" {S_NOTIFY_CHECKED} />
			</td>
			<td><span class="gen">{L_NOTIFY_ON_REPLY}</span></td>
		  </tr>
		  <!-- END switch_notify_checkbox -->
		  <!-- BEGIN switch_delete_checkbox -->
		  <tr> 
			<td> 
			  <input type="checkbox" name="delete" />
			</td>
			<td><span class="gen">{L_DELETE_POST}</span></td>
		  </tr>
		  <!-- END switch_delete_checkbox -->
		  <!-- BEGIN switch_type_toggle -->
		  <tr> 
			<td></td>
			<td><span class="gen">{S_TYPE_TOGGLE}</span></td>
		  </tr>
		  <!-- END switch_type_toggle -->
		</table>
	  </td>
	</tr>
	{POLLBOX} 
	<tr> 
	  <td class="catBottom" colspan="2" align="center" height="28"> {S_HIDDEN_FORM_FIELDS}<input type="submit" tabindex="5" name="preview" class="mainoption" value="{L_PREVIEW}" />&nbsp;<input type="submit" accesskey="s" tabindex="6" name="post" class="mainoption" value="{L_SUBMIT}" /></td>
	</tr>
  </table>

  <table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
	<tr> 
	  <td align="right" valign="top"><span class="gensmall">{S_TIMEZONE}</span></td>
	</tr>
  </table>

 orig form end -->


<!--

<table width="100%" cellspacing="2" border="0" align="center">
  <tr> 
	<td valign="top" align="right">{JUMPBOX}</td>
  </tr>
</table>
 -->

<!-- 
{TOPIC_REVIEW_BOX}
 -->
 