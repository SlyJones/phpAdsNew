<?php // $Revision: 1.2 $

/************************************************************************/
/* phpAdsNew 2                                                          */
/* ===========                                                          */
/*                                                                      */
/* Copyright (c) 2001 by Niels Leenheer                                 */
/* http://sourceforge.net/projects/phpadsnew                            */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/



// Include required files
require ("config.php");


// Security check
phpAds_checkAccess(phpAds_Admin);



/*********************************************************/
/* Main code                                             */
/*********************************************************/

if ($value == "true")
	$value = "false";
else
	$value = "true";

$res = db_query("
	UPDATE
		$phpAds_tbl_banners
	SET
		active = '$value'
	WHERE
		bannerID = $bannerID
	") or mysql_die();

Header("Location: banner-client.php?clientID=$clientID&message=".urlencode($strBannerChanged));

?>
