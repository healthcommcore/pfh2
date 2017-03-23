<?php
/***************************************************************************
*                    $RCSfile: functions_static_topics.php,v $
*                            -------------------
*   copyright            : (C) 2003 Nivisec.com
*   email                : support@nivisec.com
*
*   $Id: functions_static_topics.php,v 1.1.1.1 2003/07/04 05:25:51 nivisec Exp $
*
*
***************************************************************************/

/***************************************************************************
*
*   This program is free software; you can redistribute it and/or modify
*   it under the terms of the GNU General Public License as published by
*   the Free Software Foundation; either version 2 of the License, or
*   (at your option) any later version.
*
**************************************************************************/

// Include the language file
include($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/lang_static_topics.' . $phpEx);
$template->assign_vars(array(
'L_SUBMIT' => $lang['Submit'],
'L_MAKE_STATIC' => $lang['Use_Static'],
'L_MOVE_UP' => $lang['Move_Up'],
'L_MOVE_DOWN' => $lang['Move_Down']
));

/**
* @return string
* @param topic_id int
* @param switch_id int
* @desc Switches the static_id of topic_id and switch_id topics
*/

function static_topic_move($topic_id, $switch_id)
{
	global $db, $lang;
	
	//Get the id's for the switch
	$sql = 'SELECT st.*, t.topic_title FROM ' . TOPICS_STATIC_TABLE . ' st, ' . TOPICS_TABLE . " t
		   WHERE st.topic_id = $topic_id
		   AND t.topic_id = st.topic_id";
	if (!$result = $db->sql_query($sql)) message_die(GENERAL_ERROR, $lang['Error_Static_Topic_Table'], '', __LINE__, __FILE__, $sql);
	$row1 = $db->sql_fetchrow($result);

	$sql = 'SELECT st.*, t.topic_title FROM ' . TOPICS_STATIC_TABLE . ' st, ' . TOPICS_TABLE . " t
		   WHERE st.topic_id = $switch_id
		   AND t.topic_id = st.topic_id";
	if (!$result = $db->sql_query($sql)) message_die(GENERAL_ERROR, $lang['Error_Static_Topic_Table'], '', __LINE__, __FILE__, $sql);
	$row2 = $db->sql_fetchrow($result);
	
	//Update row1 on the switch
	$sql = 'UPDATE ' . TOPICS_STATIC_TABLE . '
		   SET static_id = ' . $row2['static_id'] . '
		   WHERE topic_id = ' . $row1['topic_id'];
	if (!$db->sql_query($sql)) message_die(GENERAL_ERROR, $lang['Error_Static_Topic_Table'], '', __LINE__, __FILE__, $sql);
	//Update row2 on the switch
	$sql = 'UPDATE ' . TOPICS_STATIC_TABLE . '
		   SET static_id = ' . $row1['static_id'] . '
		   WHERE topic_id = ' . $row2['topic_id'];
	if (!$db->sql_query($sql)) message_die(GENERAL_ERROR, $lang['Error_Static_Topic_Table'], '', __LINE__, __FILE__, $sql);
	
	//printf($lang['Switched_Topics'], $row1['topic_title'], $row2['topic_title']);
	return(sprintf($lang['Switched_Topics'], $row1['topic_title'], $row2['topic_title']));
}

/**
* @return array
* @param topic_id int
* @desc Builds and returns a list of all topics and their static number in the forum_id for $topic_id
*/
function static_topic_build_list($topic_id)
{
	global $db, $lang;
	
	// Select our list of topic ids from the static list
	$sql = 'SELECT st.* FROM ' . TOPICS_STATIC_TABLE . ' st, ' . TOPICS_TABLE . " t
		   WHERE t.topic_id = $topic_id
		   AND st.forum_id = t.forum_id
		   ORDER BY st.static_id DESC";
	if (!$result = $db->sql_query($sql)) message_die(GENERAL_ERROR, $lang['Error_Static_Topic_Table'], '', __LINE__, __FILE__, $sql);
	return($db->sql_fetchrowset($result));
}

/**
 * @return array
 * @param topic_id int
 * @desc returns an array of key up and down that includes the next and prev topic ids, or -1 if none exists
 */
function static_get_up_and_down($topic_id)
{
	global $db, $lang;
	
	$rowset = static_topic_build_list($topic_id);
	$end_loop = false;
	$i = 0;
	$rval_array = array(); //Returns up and down topic ids
	
	// Go till the end or we find our match
	while(!$end_loop)
	{
		if ($i > count($rowset))
		{
			$end_loop = true;
		}
		if ($rowset[$i]['topic_id'] == $topic_id)
		{
			$rval_array['up'] = ($i > 0) ? $rowset[$i-1]['topic_id'] : -1;
			$rval_array['down'] = ($i < (count($rowset) - 1)) ? $rowset[$i+1]['topic_id'] : -1;
			$end_loop = true;
		}
		$i++;
	}
	
	return($rval_array);
}

/**
* @return int
* @desc Returns the current max number of static_id
*/
function static_topic_get_max()
{
	global $db, $lang;
	
	// Select the max # from our static list
	$sql = 'SELECT MAX(st.static_id) as max_static FROM ' . TOPICS_STATIC_TABLE . ' st';
	if (!$result = $db->sql_query($sql)) message_die(GENERAL_ERROR, $lang['Error_Static_Topic_Table'], '', __LINE__, __FILE__, $sql);
	$row = $db->sql_fetchrow($result);
	return(max(1, intval($row['max_static'])));
}

/**
* @return void
* @param forum_id int
* @desc Syncs up the topics in each forum assigning static_ids if missing
*/
function static_sync($forum_id)
{
	global $db;
	
	$max = static_topic_get_max();
	$static_topic_sql = '';
	
	// A bug in mysql preventing topic selection?  Have to use 2 queries
	$sql = 'SELECT topic_id FROM ' . TOPICS_STATIC_TABLE . "
		WHERE forum_id = $forum_id";
	if (!$result = $db->sql_query($sql)) message_die(GENERAL_ERROR, $lang['Error_Static_Topic_Table'], '', __LINE__, __FILE__, $sql);
	while ($row = $db->sql_fetchrow($result))
	{
		$static_topic_sql .= ($static_topic_sql != '') ? ', ' . $row['topic_id'] : $row['topic_id'];
	}
	
	// Find the topics not present already
	$static_topic_and = ($static_topic_sql != '') ? "AND topic_id NOT IN ($static_topic_sql)" : '';
	$sql = 'SELECT topic_id FROM ' . TOPICS_TABLE . "
		WHERE forum_id = $forum_id
		$static_topic_and";
	if (!$result = $db->sql_query($sql)) message_die(GENERAL_ERROR, $lang['Error_Static_Topic_Table'], '', __LINE__, __FILE__, $sql);
	while ($row = $db->sql_fetchrow($result))
	{
		$max++;
		$sql = 'INSERT INTO ' . TOPICS_STATIC_TABLE . '
			(topic_id, forum_id, static_id)
			VALUES
			(' . $row['topic_id'] . ", $forum_id, $max)";
		if (!$db->sql_query($sql)) message_die(GENERAL_ERROR, $lang['Error_Static_Topic_Table'], '', __LINE__, __FILE__, $sql);
	}
	return;
}
?>