<div class="maintitle">{L_SMILEY_TITLE}</div>
<br />
<div class="genmed">{L_SMILEY_TEXT}</div>
<br />
<form method="post" action="{S_SMILEY_ACTION}">
<table cellspacing="1" cellpadding="4" border="0" align="center" class="forumline">
<tr> 
<th>{L_CODE}</th>
<th>{L_SMILE}</th>
<th>{L_EMOT}</th>
<th colspan="2">{L_ACTION}</th>
</tr>
<!-- BEGIN smiles -->
<tr> 
<td class="{smiles.ROW_CLASS}">{smiles.CODE}</td>
<td class="{smiles.ROW_CLASS}" align="center"><img src="{smiles.SMILEY_IMG}" alt="{smiles.CODE}" title="{smiles.CODE}" /></td>
<td class="{smiles.ROW_CLASS}">{smiles.EMOT}</td>
<td class="{smiles.ROW_CLASS}"><a href="{smiles.U_SMILEY_EDIT}">{L_EDIT}</a></td>
<td class="{smiles.ROW_CLASS}"><a href="{smiles.U_SMILEY_DELETE}">{L_DELETE}</a></td>
</tr>
<!-- END smiles -->
<tr> 
<td class="cat" colspan="5" align="center">{S_HIDDEN_FIELDS} 
<input type="submit" name="add" value="{L_SMILEY_ADD}" class="mainoption" />
&nbsp;&nbsp; 
<input class="button" type="submit" name="import_pack" value="{L_IMPORT_PACK}" />
&nbsp;&nbsp; 
<input class="button" type="submit" name="export_pack" value="{L_EXPORT_PACK}" />
</td>
</tr>
</table>
</form>
<br />