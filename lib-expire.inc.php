<?php

/************************************************************************/
/* phpAdsNew 2                                                          */
/* ===========                                                          */
/* $Name:  $ $Revision: 1.3 $													*/
/*                                                                      */
/* Copyright (c) 2001 by Niels Leenheer			                        */
/* http://sourceforge.net/projects/phpadsnew                            */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/



// Define constants
define (phpAds_Clicks, 1);
define (phpAds_Views, 2);



/*********************************************************/
/* Check the expiration of a client				         */
/*********************************************************/

function phpAds_expire ($clientID, $type=0)
{
	global $phpAds_tbl_clients, $phpAds_tbl_banners, $phpAds_warn_limit;
	
	// Get client information
	$clientresult = db_query("SELECT *, UNIX_TIMESTAMP(expire) as timestamp FROM $phpAds_tbl_clients WHERE clientID=$clientID");
	
	if ($client = mysql_fetch_array ($clientresult))
	{
		// Decrement views
		if (($client["views"] > 0) and ($type == phpAds_Views))
		{
			$client["views"] = $client["views"] - 1;
			
			// Mail warning - preset is reached
			if ($client["views"] == $phpAds_warn_limit)
				warn_mail($client);
			
			db_query("UPDATE $phpAds_tbl_clients SET views=views-1 WHERE clientID=$clientID");
		}
		
		// Decrement clicks
		if (($client["clicks"] > 0) and ($type == phpAds_Clicks))
		{
			$client["clicks"] = $client["clicks"] - 1;
			
			db_query("UPDATE $phpAds_tbl_clients SET clicks=clicks-1 WHERE clientID=$clientID");
		}
		
		// Check view count and de-activate banner if needed
		if ($client["views"] == 0 || $client["clicks"] == 0 || ($client["timestamp"] < time() && $client["timestamp"] > 0))
			db_query("UPDATE $phpAds_tbl_clients SET active='false' WHERE clientID=$clientID");
	}
}

?>