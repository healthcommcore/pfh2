
<script language="javascript" type="text/javascript">
<!--
function emoticon(text) {
        text = ' ' + text + ' ';
        if (opener.document.forms['post'].message.createTextRange && opener.document.forms['post'].message.caretPos) {
                var caretPos = opener.document.forms['post'].message.caretPos;
                caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? text + ' ' : text;
                opener.document.forms['post'].message.focus();
        } else {
        opener.document.forms['post'].message.value  += text;
        opener.document.forms['post'].message.focus();
        }
}
//-->
</script>

<table width="100%" border="0" cellspacing="0" cellpadding="10">
        <tr>
                <td><table width="100%" border="0" cellspacing="1" cellpadding="4" class="forumborder">
                        <tr>
                                <th class="forumtitle">{L_EMOTICONS}</th>
                        </tr>
                        <tr bgcolor="#FFFFFF">
                                <td bgcolor="#FFFFFF"><table class="forumborder" width="100" border="0" cellspacing="0" cellpadding="5">
                                        <!-- BEGIN smilies_row -->
                                        <tr bgcolor="#FFFFFF" align="center" valign="middle">
                                                <!-- BEGIN smilies_col -->
                                                <th class="forumtitle"><a href="javascript:emoticon('{smilies_row.smilies_col.SMILEY_CODE}')"><img src="{smilies_row.smilies_col.SMILEY_IMG}" border="0" alt="{smilies_row.smilies_col.SMILEY_DESC}" title="{smilies_row.smilies_col.SMILEY_DESC}" /></a></th>
                                                <!-- END smilies_col -->
                                        </tr>
                                        <!-- END smilies_row -->
                                        <!-- BEGIN switch_smilies_extra -->
                                        <tr align="center">
                                                <td colspan="{S_SMILIES_COLSPAN}"><span class="nav"><a href="{U_MORE_SMILIES}" onclick="open_window('{U_MORE_SMILIES}', 250, 300);return false" target="_smilies" class="nav">{L_MORE_SMILIES}</a></td>
                                        </tr>
                                        <!-- END switch_smilies_extra -->
                                </table></td>
                        </tr>
                        <tr>
                                <td align="center"><br /><span class="genmed"><a href="javascript:window.close();" class="gen2">{L_CLOSE_WINDOW}</a></span></td>
                        </tr>
                </table></td>
        </tr>
</table>