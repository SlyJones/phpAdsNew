<?php // $Revision: 1.8 $

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
phpAds_checkAccess(phpAds_Admin);



/*********************************************************/
/* Main code                                             */
/*********************************************************/

// Banner
if (isset($bannerID) && $bannerID != '')
{
    // Delete stats for this banner
	phpAds_deleteStats($bannerID);
	
	// Return to campaign statistics
	Header("Location: stats-campaign.php?campaignID=$campaignID");
}


// Campaign
elseif (isset($campaignID) && $campaignID != '')
{
	// Get all banners for this client
	$idresult = phpAds_dbQuery(" SELECT
								bannerID
							  FROM
							  	".$phpAds_config['tbl_banners']."
							  WHERE
								clientID = $campaignID
		  				 ");
	
	// Loop to all banners for this client
	while ($row = phpAds_dbFetchArray($idresult))
	{
		// Delete stats for the banner
		phpAds_deleteStats($row['bannerID']);
	}
	
	// Return to campaign statistics
	Header("Location: stats-campaign.php?campaignID=$campaignID");
}


// Client
elseif (isset($clientID) && $clientID != '')
{
	// Get all banners for this client
	$idresult = phpAds_dbQuery("
		SELECT
			b.bannerID
		FROM
			".$phpAds_config['tbl_banners']." AS b,
			".$phpAds_config['tbl_clients']." AS c
		WHERE
			c.parent = $clientID AND
			c.clientID = b.clientID
	");
	
	// Loop to all banners for this client
	while ($row = phpAds_dbFetchArray($idresult))
	{
		// Delete stats for the banner
		phpAds_deleteStats($row['bannerID']);
	}
	
	// Return to campaign statistics
	Header("Location: stats-client.php?clientID=$clientID");
}


// All
elseif (isset($all) && $all == 'true')
{
    phpAds_dbQuery("DELETE FROM ".$phpAds_config['tbl_adviews']) or phpAds_sqlDie();
    phpAds_dbQuery("DELETE FROM ".$phpAds_config['tbl_adclicks']) or phpAds_sqlDie();
    phpAds_dbQuery("DELETE FROM ".$phpAds_config['tbl_adstats']) or phpAds_sqlDie();
	
	// Return to campaign statistics
	Header("Location: stats-index.php");
}
?>
