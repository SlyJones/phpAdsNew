<?php // $Revision: 1.3 $

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
require ("lib-storage.inc.php");
require ("lib-statistics.inc.php");


// Security check
phpAds_checkAccess(phpAds_Admin);



/*********************************************************/
/* Main code                                             */
/*********************************************************/

if (isset($zoneid) && $zoneid != '')
{
	if (isset($moveto_x) && $moveto != '')
	{
		// Move the zone
		$res = phpAds_dbQuery("UPDATE ".$phpAds_config['tbl_zones']." SET affiliateid = '".$moveto."' WHERE zoneid = '".$zoneid."'") or phpAds_sqlDie();
		
		Header ("Location: ".$returnurl."?affiliateid=".$moveto."&zoneid=".$zoneid);
		exit;
	}
	elseif (isset($duplicate) && $duplicate == 'true')
	{
		// Duplicate the zone
		
		$res = phpAds_dbQuery("
			SELECT
		   		*
			FROM
				".$phpAds_config['tbl_zones']."
			WHERE
				zoneid = ".$zoneid."
		") or phpAds_sqlDie();
		
		
		if ($row = phpAds_dbFetchArray($res))
		{
			// Remove bannerid
			unset($row['zoneid']);
	   		$values = array();
			
			while (list($name, $value) = each($row))
				$values[] = $name." = '".addslashes($value)."'";
			
	   		$res = phpAds_dbQuery("
		   		INSERT INTO
		   			".$phpAds_config['tbl_zones']."
				SET
					".implode(", ", $values)."
	   		") or phpAds_sqlDie();
			
			$new_zoneid = phpAds_dbInsertID();
			
			Header ("Location: ".$returnurl."?affiliateid=".$affiliateid."&zoneid=".$new_zoneid);
			exit;
		}
	}
}

Header ("Location: ".$returnurl."?affiliateid=".$affiliateid."&zoneid=".$zoneid);

?>