<?php // $Revision: 1.2 $

/************************************************************************/
/* phpAdsNew 2                                                          */
/* ===========                                                          */
/*                                                                      */
/* Copyright (c) 2000-2002 by the phpAdsNew developers                  */
/* For more information visit: http://www.phpadsnew.com                 */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/



// Include required files
require ("config.php");
require ("lib-statistics.inc.php");
require ("lib-invocation.inc.php");


// Register input variables
phpAds_registerGlobal (
	 'trackername'
	,'description'
	,'move'
	,'submit'
);


// Security check
phpAds_checkAccess(phpAds_Admin);



/*********************************************************/
/* Process submitted form                                */
/*********************************************************/

if (isset($submit))
{ 
	// If ID is not set, it should be a null-value for the auto_increment
	
	if (empty($trackerid))
	{
		$trackerid = "null";
	}
	
	$new_tracker = $trackerid == 'null';
	
	phpAds_dbQuery(
		"REPLACE INTO ".$phpAds_config['tbl_trackers'].
		" (trackerid".
		",trackername".
		",description".
		",clientid)".
		" VALUES".
		" (".$trackerid.
		",'".$trackername."'".
		",'".$description."'".
		",".$clientid.")"
	) or phpAds_sqlDie();
	
	// Get ID of tracker
	if ($trackerid == "null")
		$trackerid = phpAds_dbInsertID();
	
	if (isset($move) && $move == 't')
	{
		// We are moving a client to a tracker
		// Update banners
		$res = phpAds_dbQuery(
			"UPDATE ".$phpAds_config['tbl_banners'].
			" SET trackerid=".$trackerid.
			" WHERE trackerid=".$clientid
		) or phpAds_sqlDie();
		
		// Force priority recalculation
		$new_tracker = false;
	}
	
	Header("Location: tracker-campaigns.php?clientid=".$clientid."&trackerid=".$trackerid);
	exit;
}




/*********************************************************/
/* HTML framework                                        */
/*********************************************************/

if ($trackerid != "")
{
	if (isset($Session['prefs']['advertiser-trackers.php'][$clientid]['listorder']))
		$navorder = $Session['prefs']['advertiser-trackers.php'][$clientid]['listorder'];
	else
		$navorder = '';
	
	if (isset($Session['prefs']['advertiser-trackers.php'][$clientid]['orderdirection']))
		$navdirection = $Session['prefs']['advertiser-trackers.php'][$clientid]['orderdirection'];
	else
		$navdirection = '';
	
	
	// Get other trackers
	$res = phpAds_dbQuery(
		"SELECT *".
		" FROM ".$phpAds_config['tbl_trackers'].
		" WHERE clientid = ".$clientid.
		phpAds_getTrackerListOrder ($navorder, $navdirection)
	) or phpAds_sqlDie();
	
	while ($row = phpAds_dbFetchArray($res))
	{
		phpAds_PageContext (
			phpAds_buildName ($row['trackerid'], $row['trackername']),
			"tracker-invocation.php?clientid=".$clientid."&trackerid=".$row['trackerid'],
			$trackerid == $row['trackerid']
		);
	}
	
	phpAds_PageShortcut($strClientProperties, 'advertiser-edit.php?clientid='.$clientid, 'images/icon-advertiser.gif');
	//phpAds_PageShortcut($strTrackerHistory, 'stats-tracker-history.php?clientid='.$clientid.'&trackerid='.$trackerid, 'images/icon-statistics.gif');
	
	
	$extra  = "\t\t\t\t<form action='tracker-modify.php'>"."\n";
	$extra .= "\t\t\t\t<input type='hidden' name='trackerid' value='$trackerid'>"."\n";
	$extra .= "\t\t\t\t<input type='hidden' name='clientid' value='$clientid'>"."\n";
	$extra .= "\t\t\t\t<input type='hidden' name='returnurl' value='tracker-invocation.php'>"."\n";
	$extra .= "\t\t\t\t<br><br>"."\n";
	$extra .= "\t\t\t\t<b>$strModifyTracker</b><br>"."\n";
	$extra .= "\t\t\t\t<img src='images/break.gif' height='1' width='160' vspace='4'><br>"."\n";
	$extra .= "\t\t\t\t<img src='images/icon-duplicate-tracker.gif' align='absmiddle'>&nbsp;<a href='tracker-modify.php?clientid=".$clientid."&trackerid=".$trackerid."&duplicate=true&returnurl=tracker-invocation.php'>$strDuplicate</a><br>"."\n";
	$extra .= "\t\t\t\t<img src='images/break.gif' height='1' width='160' vspace='4'><br>"."\n";
	$extra .= "\t\t\t\t<img src='images/icon-move-tracker.gif' align='absmiddle'>&nbsp;$strMoveTo<br>"."\n";
	$extra .= "\t\t\t\t<img src='images/spacer.gif' height='1' width='160' vspace='2'><br>"."\n";
	$extra .= "\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."\n";
	$extra .= "\t\t\t\t<select name='moveto' style='width: 110;'>"."\n";
	
	$res = phpAds_dbQuery(
		"SELECT *".
		" FROM ".$phpAds_config['tbl_clients'].
		" WHERE clientid != ".$clientid
	) or phpAds_sqlDie();
	
	while ($row = phpAds_dbFetchArray($res))
		$extra .= "\t\t\t\t\t<option value='".$row['clientid']."'>".phpAds_buildName($row['clientid'], $row['clientname'])."</option>\n";
	
	$extra .= "\t\t\t\t</select>&nbsp;\n";
	$extra .= "\t\t\t\t<input type='image' src='images/".$phpAds_TextDirection."/go_blue.gif'><br>\n";
	$extra .= "\t\t\t\t<img src='images/break.gif' height='1' width='160' vspace='4'><br>\n";
	$extra .= "\t\t\t\t<img src='images/icon-recycle.gif' align='absmiddle'>\n";
	$extra .= "\t\t\t\t<a href='tracker-delete.php?clientid=$clientid&trackerid=$trackerid&returnurl=advertiser-trackers.php'".phpAds_DelConfirm($strConfirmDeleteTracker).">$strDelete</a><br>\n";
	$extra .= "\t\t\t\t</form>\n";
	
	
	phpAds_PageHeader("4.1.4.4", $extra);
		echo "<img src='images/icon-advertiser.gif' align='absmiddle'>&nbsp;".phpAds_getClientName(phpAds_getTrackerParentClientID($trackerid));
		echo "&nbsp;<img src='images/".$phpAds_TextDirection."/caret-rs.gif'>&nbsp;";
		echo "<img src='images/icon-tracker.gif' align='absmiddle'>&nbsp;<b>".phpAds_getTrackerName($trackerid)."</b><br><br><br>";
		phpAds_ShowSections(array("4.1.4.2", "4.1.4.3", "4.1.4.4"));
}
else
{
	if (isset($move) && $move == 't')
	{
		// Convert client to tracker
		
		phpAds_PageHeader("4.1.4.4");
			echo "<img src='images/icon-advertiser.gif' align='absmiddle'>&nbsp;".phpAds_getClientName($clientid);
			echo "&nbsp;<img src='images/".$phpAds_TextDirection."/caret-rs.gif'>&nbsp;";
			echo "<img src='images/icon-tracker.gif' align='absmiddle'>&nbsp;<b>".$strUntitled."</b><br><br><br>";
			phpAds_ShowSections(array("4.1.4.4"));
	}
	else
	{
		// New tracker
		
		phpAds_PageHeader("4.1.4.1");
			echo "<img src='images/icon-advertiser.gif' align='absmiddle'>&nbsp;".phpAds_getClientName($clientid);
			echo "&nbsp;<img src='images/".$phpAds_TextDirection."/caret-rs.gif'>&nbsp;";
			echo "<img src='images/icon-tracker.gif' align='absmiddle'>&nbsp;<b>".$strUntitled."</b><br><br><br>";
			phpAds_ShowSections(array("4.1.4.1"));
	}
}

if ($trackerid != "" || (isset($move) && $move == 't'))
{
	// Edit or Convert
	// Fetch exisiting settings
	// Parent setting for converting, tracker settings for editing
	if ($trackerid != "") $ID = $trackerid;
	if (isset($move) && $move == 't')
		if (isset($clientid) && $clientid != "") $ID = $clientid;

	$res = phpAds_dbQuery(
		"SELECT *".
		" FROM ".$phpAds_config['tbl_trackers'].
		" WHERE trackerid=".$ID
	) or phpAds_sqlDie();
	
	$row = phpAds_dbFetchArray($res);
	
}
else
{
	// New tracker
	$res = phpAds_dbQuery(
		"SELECT clientname".
		" FROM ".$phpAds_config['tbl_clients'].
		" WHERE clientid=".$clientid
	);
	
	if ($client = phpAds_dbFetchArray($res))
		$row['trackername'] = $client['clientname'].' - ';
	else
		$row["trackername"] = '';
	
	
	$row["trackername"] .= $strDefault;
}



/*********************************************************/
/* Main code                                             */
/*********************************************************/

$tabindex = 1;

echo "<br><br>";
echo "<input type='hidden' name='move' value='".(isset($move) ? $move : '')."'>"."\n";

echo "<table border='0' width='100%' cellpadding='0' cellspacing='0'>"."\n";
// START CODE
echo "<table border='0' width='550' cellpadding='0' cellspacing='0'>";
echo "<tr><td height='25'><img src='images/icon-generatecode.gif' align='absmiddle'>&nbsp;<b>".$GLOBALS['strTrackercode']."</b></td>";

// Show clipboard button only on IE
if (strpos ($HTTP_SERVER_VARS['HTTP_USER_AGENT'], 'MSIE') > 0 &&
	strpos ($HTTP_SERVER_VARS['HTTP_USER_AGENT'], 'Opera') < 1)
{
	echo "<td height='25' align='right'><img src='images/icon-clipboard.gif' align='absmiddle'>&nbsp;";
	echo "<a href='javascript:phpAds_CopyClipboard(\"bannercode\");'>".$GLOBALS['strCopyToClipboard']."</a></td></tr>";
}
else
	echo "<td>&nbsp;</td>";

echo "<tr height='1'><td colspan='2' bgcolor='#888888'><img src='images/break.gif' height='1' width='100%'></td></tr>";
echo "<tr><td colspan='2'><textarea name='bannercode' class='code-gray' rows='6' cols='55' style='width:550;' readonly>".htmlspecialchars(phpAds_GenerateTrackerCode())."</textarea></td></tr>";
echo "</table><br>";
//phpAds_ShowBreak();
echo "<br>";
// END CODE
echo "<tr><td height='10' colspan='3'>&nbsp;</td></tr>"."\n";
echo "<tr height='1'><td colspan='3' bgcolor='#888888'><img src='images/break.gif' height='1' width='100%'></td></tr>"."\n";
echo "</table>"."\n";

/*********************************************************/
/* HTML framework                                        */
/*********************************************************/

phpAds_PageFooter();

?>