<?php // $Revision: 1.18 $

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
include ("lib-cache.inc.php");


// Open a connection to the database
phpAds_dbConnect();

if (isset($clientID) && !isset($clientid))	$clientid = $clientID;
if (isset($bannerID) && !isset($bannerid))	$bannerid = $bannerID;

if (isset($bannerid) && !isset($what))
{
	$res = phpAds_dbQuery("
		SELECT
			b.contenttype, i.contents
		FROM
			".$phpAds_config['tbl_banners']." AS b,
			".$phpAds_config['tbl_images']." AS i
		WHERE
			b.bannerid = $bannerid AND
			b.filename = i.filename AND
			b.storagetype = 'sql'
		");
	
	if(phpAds_dbNumRows($res) == 0)
	{
		if ($phpAds_config['default_banner_url'] != "")
		{
			Header("Location: ".$phpAds_config['default_banner_url']);
		}
	}
	else
	{
		$row = phpAds_dbFetchArray($res);
		
		if ($row['contenttype'] == 'swf')
		{
			Header("Content-type: application/x-shockwave-flash; name=".microtime()."\n");
			echo $row['contents'];
		}
		else
		{
			Header("Content-type: image/".$row['contenttype']."; name=".microtime());
			echo $row['contents'];
		}
	}
}
else
{
	// Fetch a banner
	
	if (!isset($what))
		$what = '';
	
	if (!isset($clientid))
		$clientid = 0;
	
	if (!isset($source))
		$source = '';
	
	
	$row = phpAds_fetchBanner($what, $clientid, 0, $source, false);
	
	if (is_array($row))
	{
		if(!empty($row["bannerid"]))
		{
			// Log this impression
			phpAds_prepareLog ($row["bannerid"], $row["clientid"], $row["zoneid"]);
			
			// Send P3P Headers
			if ($phpAds_config['p3p_policies'])
			{
				$p3p_header = '';
				
				if (isset($phpAds_config['p3p_policy_location']) && 
				    $phpAds_config['p3p_policy_location'] != '')
					$p3p_header .= " policyref=\"".$phpAds_config['p3p_policy_location']."\"";
				
				if ($phpAds_config['p3p_compact_policy'] != '')
					$p3p_header .= " CP=\"".$phpAds_config['p3p_compact_policy']."\"";
				
				if ($p3p_header != '')
					header ("P3P: $p3p_header");
			}
			
			$url = parse_url($phpAds_config['url_prefix']);
			SetCookie("bannerNum", $row["bannerid"], 0, $url["path"]);
			if(isset($n)) SetCookie("banID[$n]", $row["bannerid"], 0, $url["path"]);
			
			if ($row['zoneid'] != 0)
			{
				SetCookie("zoneNum", $row["zoneid"], 0, $url["path"]);
				if(isset($n)) SetCookie("zoneID[$n]", $row["zoneid"], 0, $url["path"]);
			}
			
			
			if ($row["format"] == "url")
			{
				// URL
				
				// Replace standard variables
				$row['banner'] = str_replace ('{timestamp}', time(), $row['banner']);
				$row['url']    = str_replace ('{timestamp}', time(), $row['url']);
				
				
				// Determine cachebuster
				if (eregi ('\{random(:([1-9])){0,1}\}', $row['banner'], $matches))
				{
					if ($matches[1] == "")
						$randomdigits = 8;
					else
						$randomdigits = $matches[2];
					
					$randomnumber = sprintf ('%0'.$randomdigits.'d', mt_rand (0, pow (10, $randomdigits) - 1));
					$row['banner'] = str_replace ($matches[0], $randomnumber, $row['banner']);
				}
				
				if (eregi ('\{random(:([1-9])){0,1}\}', $row['url'], $matches))
				{
					if (!isset($randomnumber) || $randomnumber == '')
					{
						if ($matches[1] == "")
							$randomdigits = 8;
						else
							$randomdigits = $matches[2];
						
						$randomnumber = sprintf ('%0'.$randomdigits.'d', mt_rand (0, pow (10, $randomdigits) - 1));
					}
					
					$row['url'] = str_replace ($matches[0], $randomnumber, $row['url']);
				}
				
				// Store destination URL
				SetCookie("destNum", $row['url'], 0, $url["path"]);
				if(isset($n)) SetCookie("destID[$n]", $row['url'], 0, $url["path"]);
				
				// Redirect to the banner
				Header("Location: ".$row['banner']);
			}
			elseif ($row["format"] == "web")
			{
				// WEB
				
				// Store destination URL
				SetCookie("destNum", $row['url'], 0, $url["path"]);
				if(isset($n)) SetCookie("destID[$n]", $row['url'], 0, $url["path"]);
				
				// Redirect to the banner
				Header("Location: ".$row['banner']);
			}
			else
			{
				// SQL
				
				// Store destination URL
				SetCookie("destNum", $row['url'], 0, $url["path"]);
				if(isset($n)) SetCookie("destID[$n]", $row['url'], 0, $url["path"]);
				
				// Load the banner from the database
				$res = phpAds_dbQuery("
					SELECT
						b.contenttype, i.contents
					FROM
						".$phpAds_config['tbl_banners']." AS b,
						".$phpAds_config['tbl_images']." AS i
					WHERE
						b.bannerid = ".$row['bannerid']." AND
						b.filename = i.filename AND
						b.storagetype = 'sql'
				");
				
				if ($row = phpAds_dbFetchArray($res))
				{
					Header("Content-type: image/".$row['contenttype']."; name=".microtime());
					echo $row['contents'];
				}
			}
		}
		else
		{
			Header( "Content-type: image/$row[format]");
			echo $row["banner"];
		}
	}
	else
	{
		if ($phpAds_config['p3p_policies'])
		{
			$p3p_header = '';
			
			if ($phpAds_config['p3p_policy_location'] != '')
				$p3p_header .= " policyref=\"".$phpAds_config['p3p_policy_location']."\"";
			
			if ($phpAds_config['p3p_compact_policy'] != '')
				$p3p_header .= " CP=\"".$phpAds_config['p3p_compact_policy']."\"";
			
			if ($p3p_header != '')
				header ("P3P: $p3p_header");
		}
		
		SetCookie("bannerNum", "DEFAULT", 0, $url["path"]);
		if(isset($n)) SetCookie("banID[$n]", "DEFAULT", 0, $url["path"]);
		
		Header ("Location: ".$phpAds_config['default_banner_url']);
	}
}

phpAds_dbClose();

?>
