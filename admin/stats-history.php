<?php // $Revision: 1.5 $

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


// Security check
phpAds_checkAccess(phpAds_Admin+phpAds_Client);



/*********************************************************/
/* HTML framework                                        */
/*********************************************************/

if (phpAds_isUser(phpAds_Admin))
{
	phpAds_PageHeader("2.2");
	phpAds_ShowSections(array("2.1", "2.4", "2.2", "2.3"));
}
else
{
	phpAds_PageHeader("1");
}

echo "<br><br>";



/*********************************************************/
/* Main code                                             */
/*********************************************************/

if (!isset($limit) || $limit=='') $limit = '7';


if ($phpAds_config['compact_stats']) 
{
	$begin = date('Ymd', mktime(0, 0, 0, date('m'), date('d') - $limit + 1, date('Y')));
	$end   = date('Ymd', mktime(0, 0, 0, date('m'), date('d') + 1, date('Y')));
	
	$result = phpAds_dbQuery("
		SELECT
			sum(views) AS sum_views,
			sum(clicks) AS sum_clicks,
			DATE_FORMAT(day, '$date_format') AS date_formatted,
			DATE_FORMAT(day, '%Y%m%d') AS date
		FROM
			".$phpAds_config['tbl_adstats']."
		WHERE
			day >= $begin AND day < $end
		GROUP BY
			day
		LIMIT 
			$limit
	");
	
	while ($row = phpAds_dbFetchArray($result))
	{
		$stats[$row['date']] = $row;
	}
}
else
{
	$begin = date('YmdHis', mktime(0, 0, 0, date('m'), date('d') - $limit + 1, date('Y')));
	$end   = date('YmdHis', mktime(0, 0, 0, date('m'), date('d') + 1, date('Y')));
	
	$result = phpAds_dbQuery("
		SELECT
			COUNT(*) AS sum_views,
			DATE_FORMAT(t_stamp, '$date_format') AS date_formatted,
			DATE_FORMAT(t_stamp, '%Y%m%d') AS date
		FROM
			".$phpAds_config['tbl_adviews']."
		WHERE
			t_stamp >= $begin AND t_stamp < $end
		GROUP BY
			date
		LIMIT 
			$limit
	");
	
	while ($row = phpAds_dbFetchArray($result))
	{
		$stats[$row['date']]['sum_views'] = $row['sum_views'];
		$stats[$row['date']]['sum_clicks'] = '0';
		$stats[$row['date']]['date_formatted'] = $row['date_formatted'];
	}
	
	
	$result = phpAds_dbQuery("
		SELECT
			COUNT(*) AS sum_clicks,
			DATE_FORMAT(t_stamp, '$date_format') AS date_formatted,
			DATE_FORMAT(t_stamp, '%Y%m%d') AS date
		FROM
			".$phpAds_config['tbl_adclicks']."
		WHERE
			t_stamp >= $begin AND t_stamp < $end
		GROUP BY
			date
		ORDER BY
			date DESC
		LIMIT 
			$limit
	");
	
	while ($row = phpAds_dbFetchArray($result))
	{
		$stats[$row['date']]['sum_clicks'] = $row['sum_clicks'];
		$stats[$row['date']]['date_formatted'] = $row['date_formatted'];
	}
}


echo "<table border='0' width='100%' cellpadding='0' cellspacing='0'>";
echo "<tr bgcolor='#FFFFFF' height='25'>";
echo "<td align='left' nowrap height='25'><b>$strDays</b></td>";
echo "<td align='left' nowrap height='25'><b>$strViews</b></td>";
echo "<td align='left' nowrap height='25'><b>$strClicks</b></td>";
echo "<td align='left' nowrap height='25'><b>$strCTRShort</b>&nbsp;&nbsp;</td>";
echo "</tr>";

echo "<tr><td height='1' colspan='4' bgcolor='#888888'><img src='images/break.gif' height='1' width='100%'></td></tr>";


$totalviews  = 0;
$totalclicks = 0;


$today = time();

for ($d=0;$d<$limit;$d++)
{
	$key = date ("Ymd", $today - ((60 * 60 * 24) * $d));
	$text = date (str_replace ("%", "", $date_format), $today - ((60 * 60 * 24) * $d));
	
	if (isset($stats[$key]))
	{
		$views  = $stats[$key]['sum_views'];
		$clicks = $stats[$key]['sum_clicks'];
		$text   = $stats[$key]['date_formatted'];
		$ctr	= phpAds_buildCTR($views, $clicks);
		
		$totalviews  += $views;
		$totalclicks += $clicks;
		
		$available = true;
	}
	else
	{
		$views  = '-';
		$clicks = '-';
		$ctr	= '-';
		$available = false;
	}
	
	$bgcolor="#FFFFFF";
	$d % 2 ? 0: $bgcolor= "#F6F6F6";
	
	echo "<tr>";
	
	echo "<td height='25' bgcolor='$bgcolor'>&nbsp;".$text."</td>";
	
	echo "<td height='25' bgcolor='$bgcolor'>".$views."</td>";
	echo "<td height='25' bgcolor='$bgcolor'>".$clicks."</td>";
	echo "<td height='25' bgcolor='$bgcolor'>".$ctr."</td>";
	echo "</tr>";
	
	echo "<tr><td height='1' colspan='4' bgcolor='#888888'><img src='images/break.gif' height='1' width='100%'></td></tr>";
}

if ($totalviews > 0 || $totalclicks > 0)
{
	echo "<tr>";
	echo "<td height='25'>&nbsp;</td>";
	echo "<td height='25'>&nbsp;</td>";
	echo "<td height='25'>&nbsp;</td>";
	echo "<td height='25'>&nbsp;</td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td height='25'>&nbsp;<b>$strTotal</b></td>";
	echo "<td height='25'>".$totalviews."</td>";
	echo "<td height='25'>".$totalclicks."</td>";
	echo "<td height='25'>".phpAds_buildCTR($totalviews, $totalclicks)."</td>";
	echo "</tr>";
	
	echo "<tr><td height='1' colspan='4' bgcolor='#888888'><img src='images/break.gif' height='1' width='100%'></td></tr>";
	
	echo "<tr>";
	echo "<td height='25'>&nbsp;<b>$strAverage</b></td>";
	echo "<td height='25'>".number_format (($totalviews / $d), $phpAds_config['percentage_decimals'])."</td>";
	echo "<td height='25'>".number_format (($totalclicks / $d), $phpAds_config['percentage_decimals'])."</td>";
	echo "<td height='25'>&nbsp;</td>";
	echo "</tr>";
	
	echo "<tr><td height='1' colspan='4' bgcolor='#888888'><img src='images/break.gif' height='1' width='100%'></td></tr>";
}

echo "<tr>";
echo "<form action='stats-history.php'>";
echo "<td height='35' colspan='4' align='right'>";
	echo $strHistory.":&nbsp;&nbsp;";
	echo "<select name='limit' onChange=\"this.form.submit();\">";
	echo "<option value='7' ".($limit==7?'selected':'').">7 ".$strDays."</option>";
	echo "<option value='14' ".($limit==14?'selected':'').">14 ".$strDays."</option>";
	echo "<option value='21' ".($limit==21?'selected':'').">21 ".$strDays."</option>";
	echo "<option value='28' ".($limit==28?'selected':'').">28 ".$strDays."</option>";
	echo "</select>&nbsp;";
	echo "<input type='image' src='images/go_blue.gif' border='0' name='submit'>";
echo "</td>";
echo "</form>";
echo "</tr>";
echo "</table>";

echo "<br><br>";



/*********************************************************/
/* HTML framework                                        */
/*********************************************************/

phpAds_PageFooter();

?>
