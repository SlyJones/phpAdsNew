<?php // $Revision: 1.2 $

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



// Figure out our location
define ('phpAds_path', '.');



/*********************************************************/
/* Include required files                                */
/*********************************************************/

require	(phpAds_path."/config.inc.php"); 
require (phpAds_path."/lib-db.inc.php");

if (($phpAds_config['log_adviews'] && !$phpAds_config['log_beacon']) || $phpAds_config['acl'])
{
	require (phpAds_path."/lib-remotehost.inc.php");
	
	if ($phpAds_config['log_adviews'] && !$phpAds_config['log_beacon'])
		require (phpAds_path."/lib-log.inc.php");
	
	if ($phpAds_config['acl'])
		require (phpAds_path."/lib-acl.inc.php");
}

require	(phpAds_path."/lib-view-main.inc.php");
require (phpAds_path."/lib-cache.inc.php");



/*********************************************************/
/* Java-encodes text                                     */
/*********************************************************/

function enjavanate ($str, $limit = 60)
{
	$str   = str_replace("\r", '', $str);
	
	print "var phpadsbanner = '';\n\n";
	
	while (strlen($str) > 0)
	{
		$line = substr ($str, 0, $limit);
		$str  = substr ($str, $limit);
		
		$line = str_replace('\\', "\\\\", $line);
		$line = str_replace('\'', "\\'", $line);
		$line = str_replace("\r", '', $line);
		$line = str_replace("\n", "\\n", $line);
		$line = str_replace("\t", "\\t", $line);
		$line = str_replace('<', "<'+'", $line);
		
		print "phpadsbanner += '$line';\n";
	}
	
	print "\ndocument.write(phpadsbanner);\n";
}



/*********************************************************/
/* Main code                                             */
/*********************************************************/

header("Content-type: application/x-javascript");
require("lib-cache.inc.php");

if (isset($clientID) && !isset($clientid)) $clientid = $clientID;
if (isset($withText) && !isset($withtext)) $withtext = $withText;

if (!isset($what)) $what = '';
if (!isset($clientid)) $clientid = 0;
if (!isset($target)) $target = '';
if (!isset($source)) $source = '';
if (!isset($withtext)) $withtext = '';
if (!isset($context)) $context = '';

if (!isset($layerstyle) || empty($layerstyle)) $layerstyle = 'geocities';

// Get the banner
$output = view_raw ($what, $clientid, $target, $source, $withtext, $context);

// Create unique id
$uniqid = substr(md5(uniqid('')), 0, 8);

require(phpAds_path.'/misc/layerstyles/'.$layerstyle.'/layerstyle.inc.php');

enjavanate(phpAds_getLayerHTML($output, $uniqid));

phpAds_putLayerJS($output, $uniqid);

?>

if (typeof phpAds_adlayers == 'undefined')
	phpAds_adlayers = new Array();

phpAds_adlayers[phpAds_adlayers.length] = '<?php echo $uniqid; ?>';

function phpAds_adlayers_onscroll()
{	
	var x, func;
	
	for (x = 0; x < phpAds_adlayers.length; x++)
	{
		func = 'phpAds_adlayers_place_' + phpAds_adlayers[x];
		
		eval('if (typeof ' + func + ' == \'function\') '+func+'();')
	}
		
	if (phpAds_geopop_previous_onscroll)
		phpAds_geopop_previous_onscroll();
}
if (typeof phpAds_adlayers_onscroll_replaced == 'undefined')
{
	phpAds_geopop_previous_onscroll = document.body.onscroll;
	document.body.onscroll = phpAds_adlayers_onscroll;
	
	phpAds_adlayers_onscroll_replaced = true;
}


function phpAds_adlayers_onresize()
{	
	var x, func;
	
	for (x = 0; x < phpAds_adlayers.length; x++)
	{
		func = 'phpAds_adlayers_place_' + phpAds_adlayers[x];
		
		eval('if (typeof ' + func + ' == \'function\') '+func+'();')
	}
		
	if (phpAds_geopop_previous_onresize)
		phpAds_geopop_previous_onresize();
}
if (typeof phpAds_adlayers_onresize_replaced == 'undefined')
{
	phpAds_geopop_previous_onresize = document.body.onresize;
	document.body.onresize = phpAds_adlayers_onresize;
	
	phpAds_adlayers_onresize_replaced = true;
}
