<?php // $Revision: 1.5 $

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


// Register input variables
phpAds_registerGlobal ('expand', 'collapse', 'hideinactive', 'listorder', 'orderdirection');


// Security check
phpAds_checkAccess(phpAds_Admin);



/*********************************************************/
/* HTML framework                                        */
/*********************************************************/

phpAds_PageHeader("4.1");
phpAds_ShowSections(array("4.1", "4.2", "4.3"));



/*********************************************************/
/* Get preferences                                       */
/*********************************************************/

if (!isset($hideinactive))
{
	if (isset($Session['prefs']['advertiser-index.php']['hideinactive']))
		$hideinactive = $Session['prefs']['advertiser-index.php']['hideinactive'];
	else
		$hideinactive = ($phpAds_config['gui_hide_inactive'] == 't');
}

if (!isset($listorder))
{
	if (isset($Session['prefs']['advertiser-index.php']['listorder']))
		$listorder = $Session['prefs']['advertiser-index.php']['listorder'];
	else
		$listorder = '';
}

if (!isset($orderdirection))
{
	if (isset($Session['prefs']['advertiser-index.php']['orderdirection']))
		$orderdirection = $Session['prefs']['advertiser-index.php']['orderdirection'];
	else
		$orderdirection = '';
}

if (isset($Session['prefs']['advertiser-index.php']['nodes']))
	$node_array = explode (",", $Session['prefs']['advertiser-index.php']['nodes']);
else
	$node_array = array();



/*********************************************************/
/* Main code                                             */
/*********************************************************/

// Get clients & campaign and build the tree
if (phpAds_isUser(phpAds_Admin))
{
	$res_clients = phpAds_dbQuery(
		"SELECT *".
		" FROM ".$phpAds_config['tbl_clients'].
		phpAds_getClientListOrder ($listorder, $orderdirection)
	) or phpAds_sqlDie();
	
	$res_campaigns = phpAds_dbQuery(
		"SELECT *".
		" FROM ".$phpAds_config['tbl_campaigns'].
		phpAds_getCampaignListOrder ($listorder, $orderdirection)
	) or phpAds_sqlDie();
}
else
{
	$res_clients = phpAds_dbQuery(
		"SELECT *".
		" FROM ".$phpAds_config['tbl_clients'].
		" WHERE clientid=".$Session['clientid'].
		phpAds_getClientListOrder ($listorder, $orderdirection)
	) or phpAds_sqlDie();
	
	$res_campaigns = phpAds_dbQuery(
		"SELECT *".
		" FROM ".$phpAds_config['tbl_campaigns'].
		" WHERE clientid=".$Session['clientid'].
		phpAds_getCampaignListOrder ($listorder, $orderdirection)
	) or phpAds_sqlDie();
}

while ($row_clients = phpAds_dbFetchArray($res_clients))
{
	$clients[$row_clients['clientid']] = $row_clients;
	$clients[$row_clients['clientid']]['expand'] = 0;
	$clients[$row_clients['clientid']]['count'] = 0;
	$clients[$row_clients['clientid']]['hideinactive'] = 0;
}

while ($row_campaigns = phpAds_dbFetchArray($res_campaigns))
{
		$campaigns[$row_campaigns['campaignid']] = $row_campaigns;
		$campaigns[$row_campaigns['campaignid']]['expand'] = 0;
		$campaigns[$row_campaigns['campaignid']]['count'] = 0;
}


// Get the banners for each campaign
$res_banners = phpAds_dbQuery("
	SELECT 
		bannerid,
		campaignid,
		alt,
		description,
		active,
		storagetype
	FROM 
		".$phpAds_config['tbl_banners']."
		".phpAds_getBannerListOrder ($listorder, $orderdirection)."
	") or phpAds_sqlDie();

while ($row_banners = phpAds_dbFetchArray($res_banners))
{
	if (isset($campaigns[$row_banners['campaignid']]))
	{
		$banners[$row_banners['bannerid']] = $row_banners;
		$campaigns[$row_banners['campaignid']]['count']++;
	}
	
/* CANNOT HAVE BANNERS WITHOUT ADVERTISERS ANYMORE...

	if (isset($clients[$row_banners['campaignid']]))
	{
		$clients[$row_banners['campaignid']]['count']++;
	}
*/

}



// Add ID found in expand to expanded nodes
if (isset($expand) && $expand != '')
{
	switch ($expand)
	{
		case 'all' :	$node_array   = array();
						if (isset($clients)) while (list($key,) = each($clients)) $node_array[] = $key;
						if (isset($campaigns)) while (list($key,) = each($campaigns)) $node_array[] = $key;
						break;
						
		case 'none':	$node_array   = array();
						break;
						
		default:		$node_array[] = $expand;
						break;
	}
}


$node_array_size = sizeof($node_array);
for ($i=0; $i < $node_array_size;$i++)
{
	if (isset($collapse) && $collapse == $node_array[$i])
		unset ($node_array[$i]);
	else
	{
		if (isset($clients[$node_array[$i]]))
			$clients[$node_array[$i]]['expand'] = 1;
		if (isset($campaigns[$node_array[$i]]))
			$campaigns[$node_array[$i]]['expand'] = 1;
	}
}



// Build Tree
$clientshidden = 0;

if (isset($banners) && is_array($banners) && count($banners) > 0)
{
	// Add banner to campaigns
	reset ($banners);
	while (list ($bkey, $banner) = each ($banners))
		if ($hideinactive == false || $banner['active'] == 't')
			$campaigns[$banner['campaignid']]['banners'][$bkey] = $banner;
	
	unset ($banners);
}

if (isset($campaigns) && is_array($campaigns) && count($campaigns) > 0)
{
	reset ($campaigns);
	while (list ($ckey, $campaign) = each ($campaigns))
	{
		if (!isset($campaign['banners']))
			$campaign['banners'] = array();
		
		if ($hideinactive == false || $campaign['active'] == 't' && 
		   (count($campaign['banners']) != 0 || count($campaign['banners']) == $campaign['count']))
			$clients[$campaign['clientid']]['campaigns'][$ckey] = $campaign;
		else
			$clients[$campaign['clientid']]['hideinactive']++;
	}
	
	unset ($campaigns);
}

if (isset($clients) && is_array($clients) && count($clients) > 0)
{
	reset ($clients);
	while (list ($key, $client) = each ($clients))
	{
		if (!isset($client['campaigns']))
			$client['campaigns'] = array();
		
		if (isset($client['campaigns']) && count($client['campaigns']) == 0 && $client['hideinactive'] > 0)
		{
			$clientshidden++;
			unset($clients[$key]);
		}
	}
}



echo "\t\t\t\t<img src='images/icon-advertiser-new.gif' border='0' align='absmiddle'>&nbsp;\n";
echo "\t\t\t\t<a href='advertiser-edit.php' accesskey='".$keyAddNew."'>".$strAddClient_Key."</a>&nbsp;&nbsp;\n";
phpAds_ShowBreak();



echo "\t\t\t\t<br><br>\n";
echo "\t\t\t\t<table border='0' width='100%' cellpadding='0' cellspacing='0'>\n";	

echo "\t\t\t\t<tr height='25'>\n";
echo "\t\t\t\t\t<td height='25' width='40%'>\n";
echo "\t\t\t\t\t\t<b>&nbsp;&nbsp;<a href='advertiser-index.php?listorder=name'>".$GLOBALS['strName']."</a>";

if (($listorder == "name") || ($listorder == ""))
{
	if  (($orderdirection == "") || ($orderdirection == "down"))
	{
		echo " <a href='advertiser-index.php?orderdirection=up'>";
		echo "<img src='images/caret-ds.gif' border='0' alt='' title=''>";
	}
	else
	{
		echo " <a href='advertiser-index.php?orderdirection=down'>";
		echo "<img src='images/caret-u.gif' border='0' alt='' title=''>";
	}
	echo "</a>";
}

echo "</b>\n";
echo "\t\t\t\t\t</td>\n";
echo "\t\t\t\t\t<td height='25'>\n";
echo "\t\t\t\t\t\t<b><a href='advertiser-index.php?listorder=id'>".$GLOBALS['strID']."</a>";

if ($listorder == "id")
{
	if  (($orderdirection == "") || ($orderdirection == "down"))
	{
		echo " <a href='advertiser-index.php?orderdirection=up'>";
		echo "<img src='images/caret-ds.gif' border='0' alt='' title=''>";
	}
	else
	{
		echo " <a href='advertiser-index.php?orderdirection=down'>";
		echo "<img src='images/caret-u.gif' border='0' alt='' title=''>";
	}
	echo "</a>";
}

echo "</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n";
echo "\t\t\t\t\t</td>\n";
echo "\t\t\t\t\t<td height='25'>&nbsp;</td>\n";
echo "\t\t\t\t\t<td height='25'>&nbsp;</td>\n";
echo "\t\t\t\t\t<td height='25'>&nbsp;</td>\n";
echo "\t\t\t\t</tr>\n";

echo "\t\t\t\t<tr height='1'>\n";
echo "\t\t\t\t\t<td colspan='5' bgcolor='#888888'><img src='images/break.gif' height='1' width='100%'></td>\n";
echo "\t\t\t\t</tr>\n";


if (!isset($clients) || !is_array($clients) || count($clients) == 0)
{
	echo "\t\t\t\t<tr height='25' bgcolor='#F6F6F6'>\n";
	echo "\t\t\t\t\t<td height='25' colspan='5'>.&nbsp;&nbsp;".$strNoClients."</td>\n";
	echo "\t\t\t\t</tr>\n";
	
	echo "\t\t\t\t<tr>\n";
	echo "\t\t\t\t\t<td colspan='5' bgcolor='#888888'><img src='images/break.gif' height='1' width='100%'></td>\n";
	echo "\t\t\t\t<tr>\n";
}
else
{
	$i=0;
	for (reset($clients);$key=key($clients);next($clients))
	{
		$client = $clients[$key];
		
		echo "\t\t\t\t<tr height='25' ".($i%2==0?"bgcolor='#F6F6F6'":"").">\n";
		
		// Icon & name
		echo "\t\t\t\t\t<td height='25'>\n";
		if (isset($client['campaigns']))
		{
			if ($client['expand'] == '1')
				echo "\t\t\t\t\t\t<a href='advertiser-index.php?collapse=".$client['clientid']."'><img src='images/triangle-d.gif' align='absmiddle' border='0'></a>\n";
			else
				echo "\t\t\t\t\t\t<a href='advertiser-index.php?expand=".$client['clientid']."'><img src='images/".$phpAds_TextDirection."/triangle-l.gif' align='absmiddle' border='0'></a>\n";
		}
		else
			echo "\t\t\t\t\t\t<img src='images/spacer.gif' height='16' width='16' align='absmiddle'>\n";
			
		echo "\t\t\t\t\t\t<img src='images/icon-advertiser.gif' align='absmiddle'>\n";
		echo "\t\t\t\t\t\t<a href='advertiser-edit.php?clientid=".$client['clientid']."'>".$client['clientname']."</a>\n";
		echo "\t\t\t\t\t</td>\n";
		
		// ID
		echo "\t\t\t\t\t<td height='25'>".$client['clientid']."</td>\n";
		
		// Button 1
		echo "\t\t\t\t\t<td height='25'>";
		if (($client['count'] == 0 && $client['expand'] == '1') || !isset($client['campaigns']))
			echo "<a href='campaign-edit.php?clientid=".$client['clientid']."'><img src='images/icon-campaign-new.gif' border='0' align='absmiddle' alt='$strCreate'>&nbsp;$strCreate</a>&nbsp;&nbsp;&nbsp;&nbsp;";
		else
			echo "&nbsp;";
		echo "</td>\n";
		
		// Button 2
		echo "\t\t\t\t\t<td height='25'>";
		echo "<a href='advertiser-campaigns.php?clientid=".$client['clientid']."'><img src='images/icon-overview.gif' border='0' align='absmiddle' alt='$strOverview'>&nbsp;$strOverview</a>&nbsp;&nbsp;";
		echo "</td>\n";
		
		// Button 3
		echo "\t\t\t\t\t<td height='25'>";
		echo "<a href='advertiser-delete.php?clientid=".$client['clientid']."&returnurl=advertiser-index.php'".phpAds_DelConfirm($strConfirmDeleteClient)."><img src='images/icon-recycle.gif' border='0' align='absmiddle' alt='$strDelete'>&nbsp;$strDelete</a>&nbsp;&nbsp;&nbsp;&nbsp;";
		echo "</td>\n";

		echo "\t\t\t\t</tr>\n";
		
		
		if (isset($client['campaigns']) && sizeof ($client['campaigns']) > 0 && $client['expand'] == '1')
		{
			$campaigns = $client['campaigns'];
			
			for (reset($campaigns);$ckey=key($campaigns);next($campaigns))
			{
				// Divider
				echo "\t\t\t\t<tr height='1'>\n";
				echo "\t\t\t\t\t<td ".($i%2==0?"bgcolor='#F6F6F6'":"")."><img src='images/spacer.gif' width='1' height='1'></td>\n";
				echo "\t\t\t\t\t<td colspan='5' bgcolor='#888888'><img src='images/break-l.gif' height='1' width='100%'></td>\n";
				echo "\t\t\t\t</tr>\n";
				
				// Icon & name
				echo "\t\t\t\t<tr height='25' ".($i%2==0?"bgcolor='#F6F6F6'":"").">\n";
				echo "\t\t\t\t\t<td height='25'>\n";
				echo "\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n";
				
				if (isset($campaigns[$ckey]['banners']))
				{
					if ($campaigns[$ckey]['expand'] == '1')
						echo "\t\t\t\t\t\t<a href='advertiser-index.php?collapse=".$campaigns[$ckey]['campaignid']."'><img src='images/triangle-d.gif' align='absmiddle' border='0'></a>\n";
					else
						echo "\t\t\t\t\t\t<a href='advertiser-index.php?expand=".$campaigns[$ckey]['campaignid']."'><img src='images/".$phpAds_TextDirection."/triangle-l.gif' align='absmiddle' border='0'></a>\n";
				}
				else
					echo "\t\t\t\t\t\t<img src='images/spacer.gif' height='16' width='16' align='absmiddle'>&nbsp;\n";
				
				
				if ($campaigns[$ckey]['active'] == 't')
					echo "\t\t\t\t\t\t<img src='images/icon-campaign.gif' align='absmiddle'>&nbsp;\n";
				else
					echo "\t\t\t\t\t\t<img src='images/icon-campaign-d.gif' align='absmiddle'>&nbsp;\n";
				
				echo "\t\t\t\t\t\t<a href='campaign-edit.php?clientid=".$client['clientid']."&campaignid=".$campaigns[$ckey]['campaignid']."'>".$campaigns[$ckey]['campaignname']."</td>\n";
				echo "\t\t\t\t\t</td>\n";
				
				// ID
				echo "\t\t\t\t\t<td height='25'>".$campaigns[$ckey]['campaignid']."</td>\n";
				
				// Button 1
				echo "\t\t\t\t\t<td height='25'>";
				if ($campaigns[$ckey]['expand'] == '1' || !isset($campaigns[$ckey]['banners']))
					echo "<a href='banner-edit.php?clientid=".$client['clientid']."&campaignid=".$campaigns[$ckey]['campaignid']."'><img src='images/icon-banner-new.gif' border='0' align='absmiddle' alt='$strCreate'>&nbsp;$strCreate</a>&nbsp;&nbsp;&nbsp;&nbsp;";
				else
					echo "&nbsp;";
				echo "</td>\n";
				
				// Button 2
				echo "\t\t\t\t\t<td height='25'>";
				echo "<a href='campaign-banners.php?clientid=".$client['clientid']."&campaignid=".$campaigns[$ckey]['campaignid']."'><img src='images/icon-overview.gif' border='0' align='absmiddle' alt='$strOverview'>&nbsp;$strOverview</a>&nbsp;&nbsp;";
				echo "</td>\n";
				
				// Button 3
				echo "\t\t\t\t\t<td height='25'>";
				echo "<a href='campaign-delete.php?clientid=".$client['clientid']."&campaignid=".$campaigns[$ckey]['campaignid']."&returnurl=advertiser-index.php'".phpAds_DelConfirm($strConfirmDeleteCampaign)."><img src='images/icon-recycle.gif' border='0' align='absmiddle' alt='$strDelete'>&nbsp;$strDelete</a>&nbsp;&nbsp;&nbsp;&nbsp;";
				echo "</td>\n";
				echo "\t\t\t\t</tr>\n";
				
				
				if ($campaigns[$ckey]['expand'] == '1' && isset($campaigns[$ckey]['banners']))
				{
					$banners = $campaigns[$ckey]['banners'];
					for (reset($banners);$bkey=key($banners);next($banners))
					{
						$name = $strUntitled;
						if (isset($banners[$bkey]['alt']) && $banners[$bkey]['alt'] != '') $name = $banners[$bkey]['alt'];
						if (isset($banners[$bkey]['description']) && $banners[$bkey]['description'] != '') $name = $banners[$bkey]['description'];
						
						$name = phpAds_breakString ($name, '30');
						
						// Divider
						echo "\t\t\t\t<tr height='1'>\n";
						echo "\t\t\t\t\t<td ".($i%2==0?"bgcolor='#F6F6F6'":"")."><img src='images/spacer.gif' width='1' height='1'></td>\n";
						echo "\t\t\t\t\t<td colspan='4' bgcolor='#888888'><img src='images/break-l.gif' height='1' width='100%'></td>\n";
						echo "\t\t\t\t</tr>\n";
						
						// Icon & name
						echo "\t\t\t\t<tr height='25' ".($i%2==0?"bgcolor='#F6F6F6'":"").">\n";
						echo "\t\t\t\t\t<td height='25'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
						
						if ($banners[$bkey]['active'] == 't' && $campaigns[$ckey]['active'] == 't')
						{
							if ($banners[$bkey]['storagetype'] == 'html')
								echo "<img src='images/icon-banner-html.gif' align='absmiddle'>";
							elseif ($banners[$bkey]['storagetype'] == 'txt')
								echo "<img src='images/icon-banner-text.gif' align='absmiddle'>";
							elseif ($banners[$bkey]['storagetype'] == 'url')
								echo "<img src='images/icon-banner-url.gif' align='absmiddle'>";
							else
								echo "<img src='images/icon-banner-stored.gif' align='absmiddle'>";
						}
						else
						{
							if ($banners[$bkey]['storagetype'] == 'html')
								echo "<img src='images/icon-banner-html-d.gif' align='absmiddle'>";
							elseif ($banners[$bkey]['storagetype'] == 'txt')
								echo "<img src='images/icon-banner-text-d.gif' align='absmiddle'>";
							elseif ($banners[$bkey]['storagetype'] == 'url')
								echo "<img src='images/icon-banner-url-d.gif' align='absmiddle'>";
							else
								echo "<img src='images/icon-banner-stored-d.gif' align='absmiddle'>";
						}
						
						echo "&nbsp;<a href='banner-edit.php?clientid=".$client['clientid']."&campaignid=".$campaigns[$ckey]['clientid']."&bannerid=".$banners[$bkey]['bannerid']."'>".$name."</a></td>\n";
						
						// ID
						echo "\t\t\t\t\t<td height='25'>".$banners[$bkey]['bannerid']."</td>\n";
						
						// Empty
						echo "\t\t\t\t\t<td>&nbsp;</td>\n";
						
						// Button 2
						echo "\t\t\t\t\t<td height='25'>";
						echo "<a href='banner-acl.php?clientid=".$client['clientid']."&campaignid=".$campaigns[$ckey]['clientid']."&bannerid=".$banners[$bkey]['bannerid']."'><img src='images/icon-acl.gif' border='0' align='absmiddle' alt='$strACL'>&nbsp;$strACL</a>&nbsp;&nbsp;&nbsp;&nbsp;";
						echo "</td>\n";
						
						// Button 1
						echo "\t\t\t\t\t<td height='25'>";
						echo "<a href='banner-delete.php?clientid=".$client['clientid']."&campaignid=".$campaigns[$ckey]['clientid']."&bannerid=".$banners[$bkey]['bannerid']."&returnurl=advertiser-index.php'".phpAds_DelConfirm($strConfirmDeleteBanner)."><img src='images/icon-recycle.gif' border='0' align='absmiddle' alt='$strDelete'>&nbsp;$strDelete</a>&nbsp;&nbsp;&nbsp;&nbsp;";
						echo "</td>\n";
						echo "\t\t\t\t</tr>\n";
					}
				}
			}
		}
		
/* CANNOT HAVE BANNERS WITHOUT ADVERTISERS ANYMORE...

		if ($client['count'] > 0)
		{
			// Divider
			echo "\t\t\t\t<tr height='1'>\n";
			echo "\t\t\t\t\t<td ".($i%2==0?"bgcolor='#F6F6F6'":"")."><img src='images/spacer.gif' width='1' height='1'></td>\n";
			echo "\t\t\t\t\t<td colspan='5' bgcolor='#888888'><img src='images/break-l.gif' height='1' width='100%'></td>\n";
			echo "\t\t\t\t</tr>\n";
			
			echo "\t\t\t\t<tr height='25' ".($i%2==0?"bgcolor='#F6F6F6'":"").">\n";
			echo "\t\t\t\t\t<td height='25'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo "<img src='images/icon-campaign.gif' align='absmiddle'>&nbsp;";
			echo "$strBannersWithoutCampaign</td>\n";
			echo "\t\t\t\t\t<td height='25'>&nbsp;-&nbsp;</td>\n";
			echo "\t\t\t\t\t<td height='25' colspan='3'>";
			echo "<a href='campaign-edit.php?clientid=".$client['clientid']."&move=t'>";
			echo "<img src='images/".$phpAds_TextDirection."/icon-update.gif' border='0' align='absmiddle' alt='$strMoveToNewCampaign'>&nbsp;$strMoveToNewCampaign</a>&nbsp;&nbsp;";
			echo "</td>\n";
			echo "\t\t\t\t</tr>\n";
		}
*/
		
		echo "\t\t\t\t<tr height='1'>\n";
		echo "\t\t\t\t\t<td colspan='5' bgcolor='#888888'><img src='images/break.gif' height='1' width='100%'></td>\n";
		echo "\t\t\t\t</tr>\n";
		$i++;
	}
}

echo "\t\t\t\t<tr>\n";
echo "\t\t\t\t\t<td height='25' colspan='3' align='".$phpAds_TextAlignLeft."' nowrap>";

if ($hideinactive == true)
{
	echo "&nbsp;&nbsp;<img src='images/icon-activate.gif' align='absmiddle' border='0'>";
	echo "&nbsp;<a href='advertiser-index.php?hideinactive=0'>".$strShowAll."</a>";
	echo "&nbsp;&nbsp;|&nbsp;&nbsp;".$clientshidden." ".$strInactiveAdvertisersHidden;
}
else
{
	echo "&nbsp;&nbsp;<img src='images/icon-hideinactivate.gif' align='absmiddle' border='0'>";
	echo "&nbsp;<a href='advertiser-index.php?hideinactive=1'>".$strHideInactiveAdvertisers."</a>";
}

echo "</td>\n";
echo "\t\t\t\t\t<td height='25' colspan='2' align='".$phpAds_TextAlignRight."' nowrap>";
echo "<img src='images/triangle-d.gif' align='absmiddle' border='0'>";
echo "&nbsp;<a href='advertiser-index.php?expand=all' accesskey='".$keyExpandAll."'>".$strExpandAll."</a>";
echo "&nbsp;&nbsp;|&nbsp;&nbsp;";
echo "<img src='images/".$phpAds_TextDirection."/triangle-l.gif' align='absmiddle' border='0'>";
echo "&nbsp;<a href='advertiser-index.php?expand=none' accesskey='".$keyCollapseAll."'>".$strCollapseAll."</a>&nbsp;&nbsp;";
echo "</td>\n";
echo "\t\t\t\t</tr>\n";

echo "\t\t\t\t</table>\n";



// total number of clients
$res_clients 		  = phpAds_dbQuery("SELECT count(*) AS count FROM ".$phpAds_config['tbl_clients']) or phpAds_sqlDie();
$res_campaigns 		  = phpAds_dbQuery("SELECT count(*) AS count FROM ".$phpAds_config['tbl_campaigns']) or phpAds_sqlDie();
$res_active_campaigns = phpAds_dbQuery("SELECT count(*) AS count FROM ".$phpAds_config['tbl_campaigns']." WHERE active='t'");
$res_total_banners 	  = phpAds_dbQuery("SELECT count(*) AS count FROM ".$phpAds_config['tbl_banners']);
$res_active_banners   = phpAds_dbQuery("SELECT count(*) AS count FROM ".$phpAds_config['tbl_banners']." as b, ".$phpAds_config['tbl_campaigns']." as c WHERE b.campaignid=c.campaignid AND c.active='t' AND b.active='t'");


echo "\t\t\t\t<br><br><br><br>\n";
echo "\t\t\t\t<table width='100%' border='0' align='center' cellspacing='0' cellpadding='0'>\n";
echo "\t\t\t\t<tr>\n";
echo "\t\t\t\t\t<td height='25' colspan='3'>&nbsp;&nbsp;<b>".$strOverall."</b></td>\n";
echo "\t\t\t\t</tr>\n";
echo "\t\t\t\t<tr height='1'>\n";
echo "\t\t\t\t\t<td colspan='4' bgcolor='#888888'><img src='images/break.gif' height='1' width='100%'></td>\n";
echo "\t\t\t\t</tr>\n";

echo "\t\t\t\t<tr>\n";
echo "\t\t\t\t\t<td height='25'>&nbsp;&nbsp;".$strTotalBanners.": <b>".phpAds_dbResult($res_total_banners, 0, "count")."</b></td>\n";
echo "\t\t\t\t\t<td height='25'>".$strTotalCampaigns.": <b>".phpAds_dbResult($res_campaigns, 0, "count")."</b></td>\n";
echo "\t\t\t\t\t<td height='25'>".$strTotalClients.": <b>".phpAds_dbResult($res_clients, 0, "count")."</b></td>\n";
echo "\t\t\t\t</tr>\n";

echo "\t\t\t\t<tr height='1'>\n";
echo "\t\t\t\t\t<td colspan='4' bgcolor='#888888'><img src='images/break-el.gif' height='1' width='100%'></td>\n";
echo "\t\t\t\t</tr>\n";

echo "\t\t\t\t<tr>\n";
echo "\t\t\t\t\t<td height='25'>&nbsp;&nbsp;".$strActiveBanners.": <b>".phpAds_dbResult($res_active_banners, 0, "count")."</b></td>\n";
echo "\t\t\t\t\t<td height='25'>".$strActiveCampaigns.": <b>".phpAds_dbResult($res_active_campaigns, 0, "count")."</b></td>\n";
echo "\t\t\t\t\t<td height='25'>&nbsp;</td>\n";
echo "\t\t\t\t</tr>\n";

echo "\t\t\t\t<tr height='1'>\n";
echo "\t\t\t\t\t<td colspan='3' bgcolor='#888888'><img src='images/break.gif' height='1' width='100%'></td>\n";
echo "\t\t\t\t</tr>\n";

echo "\t\t\t\t</table>\n";
echo "\t\t\t\t<br><br>\n";



/*********************************************************/
/* Store preferences                                     */
/*********************************************************/

$Session['prefs']['advertiser-index.php']['hideinactive'] = $hideinactive;
$Session['prefs']['advertiser-index.php']['listorder'] = $listorder;
$Session['prefs']['advertiser-index.php']['orderdirection'] = $orderdirection;
$Session['prefs']['advertiser-index.php']['nodes'] = implode (",", $node_array);

phpAds_SessionDataStore();



/*********************************************************/
/* HTML framework                                        */
/*********************************************************/

phpAds_PageFooter();

?>