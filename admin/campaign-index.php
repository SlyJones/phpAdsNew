<?php // $Revision: 1.9 $

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
require ("lib-gd.inc.php");


// Security check
phpAds_checkAccess(phpAds_Admin);



/*********************************************************/
/* HTML framework                                        */
/*********************************************************/

if($campaignid == "") $campaignid = 0;

$res = phpAds_dbQuery("
	SELECT
		*
	FROM
		".$phpAds_config['tbl_clients']."
	WHERE
		parent > 0
	") or phpAds_sqlDie();

$extra = '';

while ($row = phpAds_dbFetchArray($res))
{
	if ($campaignid == $row['clientid'])
		$extra .= "&nbsp;&nbsp;&nbsp;<img src='images/box-1.gif'>&nbsp;";
	else
		$extra .= "&nbsp;&nbsp;&nbsp;<img src='images/box-0.gif'>&nbsp;";
	
	$extra .= "<a href=campaign-index.php?campaignid=".$row['clientid'].">".phpAds_buildClientName ($row['clientid'], $row['clientname'])."</a>";
	$extra .= "<br>"; 
}
$extra .= "<img src='images/break.gif' height='1' width='160' vspace='4'><br>";

$extra .= "<br><br><br><br><br>";
$extra .= "<b>$strShortcuts</b><br>";
$extra .= "<img src='images/break.gif' height='1' width='160' vspace='4'><br>";
$extra .= "<img src='images/icon-client.gif' align='absmiddle'>&nbsp;<a href=client-edit.php?clientid=".phpAds_getParentID ($campaignid).">$strModifyClient</a><br>";
$extra .= "<img src='images/break.gif' height='1' width='160' vspace='4'><br>";
$extra .= "<img src='images/icon-edit.gif' align='absmiddle'>&nbsp;<a href=campaign-edit.php?campaignid=$campaignid>$strModifyCampaign</a><br>";
$extra .= "<img src='images/break.gif' height='1' width='160' vspace='4'><br>";
$extra .= "<img src='images/icon-statistics.gif' align='absmiddle'>&nbsp;<a href=stats-campaign.php?campaignid=$campaignid>$strStats</a><br>";
$extra .= "<img src='images/break-el.gif' height='1' width='160' vspace='4'><br>";
$extra .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='images/icon-weekly.gif' align='absmiddle'>&nbsp;<a href=stats-weekly.php?campaignid=$campaignid>$strWeeklyStats</a><br>";
$extra .= "<img src='images/break.gif' height='1' width='160' vspace='4'><br>";

phpAds_PageHeader("4.1.5", $extra);
phpAds_ShowSections(array("4.1.5", "4.1.4"));

if (isset($message))
	phpAds_ShowMessage($message);



/*********************************************************/
/* Main code                                             */
/*********************************************************/



?>

<img src='images/icon-client.gif' align='absmiddle'>&nbsp;<?php echo phpAds_getParentName($campaignid);?>
&nbsp;<img src='images/caret-rs.gif'>&nbsp;
<img src='images/icon-campaign.gif' align='absmiddle'>&nbsp;<b><?php echo phpAds_getClientName($campaignid);?></b><br>

<br><br>
<br><br>
<br><br>

<table border='0' width='100%' cellpadding='0' cellspacing='0'>
	<tr><td height='25'>
		<img src='images/icon-banner-stored.gif' align='absmiddle'>&nbsp;<a href='banner-edit.php?campaignid=<?php echo $campaignid; ?>'><?php echo $strAddBanner;?></a>&nbsp;&nbsp;&nbsp;&nbsp;
	</td></tr>
	<tr><td height='1' bgcolor='#888888'><img src='images/break.gif' height='1' width='100%'></td></tr>
</table>


<br><br>



<?php

$res = phpAds_dbQuery("
	SELECT
		*
	FROM
		".$phpAds_config['tbl_banners']."
	WHERE
		clientid = $campaignid
	") or phpAds_sqlDie();

if (phpAds_dbNumRows($res) == 0)
{
	echo "$strNoBanners<br>";
}
else
{
	echo "<table border='0' width='100%' cellpadding='0' cellspacing='0'>";
	
	while ($row = phpAds_dbFetchArray($res))
	{
	
		echo "<tr>";
		echo "<td height='25' colspan='5'>";
		
		if ($row['active'] == 't')
		{
			if ($row['format'] == 'html')
			{
				echo "<img src='images/icon-banner-html.gif' align='absmiddle'>";
			}
			elseif ($row['format'] == 'url')
			{
				echo "<img src='images/icon-banner-url.gif' align='absmiddle'>";
			}
			else
			{
				echo "<img src='images/icon-banner-stored.gif' align='absmiddle'>";
			}
		}
		else
		{
			if ($row['format'] == 'html')
			{
				echo "<img src='images/icon-banner-html-d.gif' align='absmiddle'>";
			}
			elseif ($row['format'] == 'url')
			{
				echo "<img src='images/icon-banner-url-d.gif' align='absmiddle'>";
			}
			else
			{
				echo "<img src='images/icon-banner-stored-d.gif' align='absmiddle'>";
			}
		}
		
		echo "&nbsp;<b>".phpAds_buildBannerName ($row['bannerid'], $row['description'], $row['alt'])."</b>";
		
		echo "</td></tr>";
		
		echo "<tr><td height='1' colspan='5' bgcolor='#888888'><img src='images/break.gif' height='1' width='100%'></td></tr>";
		
		echo "<tr><td height='10' colspan='5' bgcolor='#F6F6F6'>&nbsp;</td></tr>";
		echo "<tr>";
		echo "<td bgcolor='#F6F6F6'>&nbsp;&nbsp;&nbsp;&nbsp;</td>";
	   	echo "<td bgcolor='#F6F6F6' colspan='4' align='left'>";
	   	echo phpAds_buildBannerCode ($row['bannerid'], $row['banner'], $row['active'], $row['format'], $row['width'], $row['height'], $row['bannertext']);
	    echo "</td>";
		echo "</tr>";
		
		echo "<tr><td height='10' colspan='5' bgcolor='#F6F6F6'>&nbsp;</td></tr>";
		echo "<tr><td bgcolor='#F6F6F6'>&nbsp;&nbsp;&nbsp;&nbsp;</td>";
		echo "<td height='25' bgcolor='#F6F6F6' align='left'>";
		echo "&nbsp;$strSize: <b>".$row['width']."x".$row['height']."</b></td>";
		echo "<td height='25' bgcolor='#F6F6F6' align='left'>";
		echo "$strWeight: <b>".$row['weight']."</b></td>";
		echo "<td height='25' bgcolor='#F6F6F6' align='left'>";
		echo "$strKeyword: <b>".$row['keyword']."</b></td>";
		echo "<td height='25' bgcolor='#F6F6F6' align='left'>";
		echo $row['url']."&nbsp;</td></tr>";
		
		echo "<tr><td height='1' colspan='5' bgcolor='#888888'><img src='images/break.gif' height='1' width='100%'></td></tr>";
		
		echo "<tr>";
		echo "<td height='25' colspan='5' align='right'>";
		
		if ($row["active"] == "t")
		{
			echo "<img src='images/icon-deactivate.gif' align='absmiddle'>&nbsp;<a href='banner-activate.php?campaignid=$campaignid&bannerid=".$row["bannerid"]."&value=".$row["active"]."'>";
			echo $strDeActivate;
		}
		else
		{
			echo "<img src='images/icon-activate.gif' align='absmiddle'>&nbsp;<a href='banner-activate.php?campaignid=$campaignid&bannerid=".$row["bannerid"]."&value=".$row["active"]."'>";
			echo $strActivate;
		}
		
		echo "</a>&nbsp;&nbsp;&nbsp;&nbsp;";
		
		echo "<img src='images/icon-edit.gif' align='absmiddle'>&nbsp;<a href='banner-edit.php?campaignid=$campaignid&bannerid=".$row["bannerid"]."'>$strModifyBanner</a>&nbsp;&nbsp;&nbsp;&nbsp;";
		
		if ($phpAds_config['acl'])
			echo "<img src='images/icon-acl.gif' align='absmiddle'>&nbsp;<a href='banner-acl.php?campaignid=$campaignid&bannerid=".$row["bannerid"]."'>$strModifyBannerAcl</a>&nbsp;&nbsp;&nbsp;&nbsp;";
		echo "<img src='images/icon-recycle.gif' align='absmiddle'>&nbsp;<a href='banner-delete.php?campaignid=$campaignid&bannerid=".$row["bannerid"]."'".phpAds_DelConfirm($strConfirmDeleteBanner).">$strDelete</a>";
		
		echo "</td></tr>";
		
		echo "<tr><td height='35' colspan='5' bgcolor='#FFFFFF'>&nbsp;</td></tr>";
	}
	
	echo "</table>";
	echo "<br>";
}



echo "<table border='0' width='100%' cellpadding='0' cellspacing='0'>";
echo "<tr><td height='25' colspan='2'><b>$strCreditStats</b></td></tr>";
echo "<tr><td height='1' colspan='2' bgcolor='#888888'><img src='images/break.gif' height='1' width='100%'></td></tr>";

list($desc,$enddate,$daysleft)=days_left($campaignid);
$adclicksleft = adclicks_left($campaignid);
$adviewsleft  = adviews_left($campaignid);

echo "<tr><td height='25'>$strViewCredits: <b>$adviewsleft</b></td>";
echo "<td height='25'>$strClickCredits: <b>$adclicksleft</b></td></tr>";
echo "<tr><td height='1' colspan='2' bgcolor='#888888'><img src='images/break-el.gif' height='1' width='100%'></td></tr>";
echo "<tr><td height='25' colspan='2'>$desc</td></tr>";

echo "<tr><td height='1' colspan='2' bgcolor='#888888'><img src='images/break.gif' height='1' width='100%'></td></tr>";
echo "</table>";



/*********************************************************/
/* HTML framework                                        */
/*********************************************************/

phpAds_PageFooter();

?>
