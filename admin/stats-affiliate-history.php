<?php // $Revision: 1.6 $

/************************************************************************/
/* phpAdsNew 2                                                          */
/* ===========                                                          */
/*                                                                      */
/* Copyright (c) 2001 by the phpAdsNew developers                       */
/* http://sourceforge.net/projects/phpadsnew                            */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/



// Include required files
require ("config.php");
require ("lib-statistics.inc.php");
require ("lib-expiration.inc.php");


// Security check
phpAds_checkAccess(phpAds_Admin+phpAds_Affiliate);



/*********************************************************/
/* Affiliate interface security                          */
/*********************************************************/

if (phpAds_isUser(phpAds_Affiliate))
{
	$affiliateid = phpAds_getUserID();
}



/*********************************************************/
/* HTML framework                                        */
/*********************************************************/

if (phpAds_isUser(phpAds_Admin))
{
	$extra = '';
	
	$res = phpAds_dbQuery("
	SELECT
		*
	FROM
		".$phpAds_config['tbl_affiliates']."
	") or phpAds_sqlDie();
	
	while ($row = phpAds_dbFetchArray($res))
	{
		if ($affiliateid == $row['affiliateid'])
			$extra .= "&nbsp;&nbsp;&nbsp;<img src='images/box-1.gif'>&nbsp;";
		else
			$extra .= "&nbsp;&nbsp;&nbsp;<img src='images/box-0.gif'>&nbsp;";
		
		$extra .= "<a href=stats-affiliate-history.php?affiliateid=".$row['affiliateid'].">".phpAds_buildAffiliateName ($row['affiliateid'], $row['name'])."</a>";
		$extra .= "<br>"; 
	}
	$extra .= "<img src='images/break.gif' height='1' width='160' vspace='4'><br>";
	
	
	phpAds_PageHeader("2.4.1", $extra);
		echo "<img src='images/icon-affiliate.gif' align='absmiddle'>&nbsp;<b>".phpAds_getAffiliateName($affiliateid)."</b><br><br><br>";
		phpAds_ShowSections(array("2.4.1", "2.4.2"));
}
else
{
	phpAds_PageHeader("1.2");
		echo "<img src='images/icon-affiliate.gif' align='absmiddle'>&nbsp;<b>".phpAds_getAffiliateName($affiliateid)."</b><br><br><br>";
		phpAds_ShowSections(array("1.1", "1.2"));
}



/*********************************************************/
/* Main code                                             */
/*********************************************************/

$idresult = phpAds_dbQuery (" 
	SELECT
		zoneid
	FROM
		".$phpAds_config['tbl_zones']."
	WHERE
		affiliateid = ".$affiliateid."
");

if (phpAds_dbNumRows($idresult) > 0)
{
	while ($row = phpAds_dbFetchArray($idresult))
	{
		$zoneids[] = "zoneid = ".$row['zoneid'];
	}
	
	$lib_history_where     = "(".implode(' OR ', $zoneids).")";
	$lib_history_params    = array ('affiliateid' => $affiliateid);
	
	include ("lib-history.inc.php");
}



/*********************************************************/
/* HTML framework                                        */
/*********************************************************/

phpAds_PageFooter();

?>