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
require	("config.inc.php"); 
require ("lib-db.inc.php");
require ("lib-expire.inc.php");
require ("lib-log.inc.php");

if ($phpAds_config['acl'])
	require ("lib-acl.inc.php");

require	("view.inc.php"); 


// Set header information
require("lib-cache.inc.php");


if (isset($clientID) && !isset($clientid))	$clientid = $clientID;
if (isset($withText) && !isset($withtext))  $withtext = $withText;

if (!isset($what)) 		$what = '';
if (!isset($clientid)) 	$clientid = 0;
if (!isset($target)) 	$target = '_top';
if (!isset($source)) 	$source = '';
if (!isset($withtext)) 	$withtext = '';
if (!isset($context)) 	$context = '';


// Get the banner
$banner = view_raw ($what, $clientid, $target, $source, $withtext, $context);

// Build HTML
echo "<html>\n";
echo "<head>\n";
echo "<title>".($banner['alt'] ? $banner['alt'] : 'Advertisement')."</title>\n";

if (isset($refresh) && $refresh != '')
	echo "<meta http-equiv='refresh' content='".$refresh."'>\n";

if (isset($resize) && $resize == 1)
{
	echo "<script language='JavaScript'>\n";
	echo "<!--\n";
	echo "\tfunction phpads_adjustframe(frame) {\n";
	echo "\t\tif (document.all) {\n";
    echo "\t\t\tparent.document.all[frame.name].width = ".$banner['width'].";\n";
    echo "\t\t\tparent.document.all[frame.name].height = ".$banner['height'].";\n";
  	echo "\t\t}\n";
  	echo "\t\telse if (document.getElementById) {\n";
    echo "\t\t\tparent.document.getElementById(frame.name).width = ".$banner['width'].";\n";
    echo "\t\t\tparent.document.getElementById(frame.name).height = ".$banner['height'].";\n";
  	echo "\t\t}\n";
	echo "\t}\n";
	echo "// -->\n";
	echo "</script>\n";
}

echo "</head>\n";

if (isset($resize) && $resize == 1)
	echo "<body leftmargin='0' topmargin='0' marginwidth='0' marginheight='0' style='background-color:transparent' onload=\"phpads_adjustframe(window);\">\n";
else
	echo "<body leftmargin='0' topmargin='0' marginwidth='0' marginheight='0' style='background-color:transparent'>\n";

echo $banner['html'];
echo "\n</body>\n";

echo "</html>\n";

?> 
             