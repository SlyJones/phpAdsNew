<?php // $Revision: 1.5 $

/************************************************************************/
/* phpAdsNew 2                                                          */
/* ===========                                                          */
/*                                                                      */
/* Copyright (c) 2001 by Niels Leenheer <niels@creatype.nl>             */
/* http://sourceforge.net/projects/phpadsnew                            */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/



// Figure out our location
if (strlen(__FILE__) > strlen(basename(__FILE__)))
    define ('phpAds_path', substr(__FILE__, 0, strpos(__FILE__, 'maintenance') - 1));
else
    define ('phpAds_path', '.');


// Include required files
require (phpAds_path."/config.inc.php");
require (phpAds_path."/lib-db.inc.php");
require (phpAds_path."/lib-dbconfig.inc.php");
require (phpAds_path."/lib-cache.inc.php");
require (phpAds_path."/admin/lib-statistics.inc.php");

// Set time limit and ignore user abort
if (!get_cfg_var ('safe_mode')) 
{
	set_time_limit (300);
	ignore_user_abort(1);
}


// Make database connection and load config
phpAds_dbConnect();
phpAds_LoadDbConfig();


// Load language strings
require("../language/".$phpAds_config['language']."/default.lang.php");


$adminreport = "";

include ("maintenance-reports.php");
include ("maintenance-activation.php");

if ($adminreport != "")
{
	// mail admin report to admin
}

?>