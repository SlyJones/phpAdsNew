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



/*********************************************************/
/* Determine the AdViews left before expiration          */
/*********************************************************/

function adviews_left ($clientID)
{
	global $phpAds_tbl_clients, $strUnlimited;
	
	$client_query="
		SELECT
			views
		FROM
			$phpAds_tbl_clients
		WHERE 
			clientID = ".$clientID;
	
	$res_client = db_query($client_query);
	
	if (mysql_num_rows($res_client) == 1)
	{
		$row = mysql_fetch_array($res_client);
		$views = $row[views];
		
		if ($views == -1)
			$views = $strUnlimited;
			
		return ($views);
	}
}



/*********************************************************/
/* Determine the AdClicks left before expiration         */
/*********************************************************/

function adclicks_left ($clientID)
{
	global $phpAds_tbl_clients, $strUnlimited;
	
	$client_query="
		SELECT
			clicks
		FROM
			$phpAds_tbl_clients
		WHERE 
			clientID = ".$clientID;
	
	$res_client = db_query($client_query);
	
	if (mysql_num_rows($res_client) == 1)
	{
		$row = mysql_fetch_array($res_client);
		$clicks = $row[clicks];
		
		if ($clicks == -1)
			$clicks = $strUnlimited;
			
		return ($clicks);
	}
}



/*********************************************************/
/* Estimate time before expiration                       */
/*********************************************************/
/*                                                       */
/* Copyright (c) 2001 by Martin Braun <martin@braun.cc>  */
/*                                                       */
/* this function calculates the estimated end of a       */
/* clients credits in clicks or views based on used      */
/* views and clicks, the time from the first to the last */
/* view and click and the current date. If the client    */
/* has an expiration date this one will have priority.   */
/*                                                       */
/* The return value is an array which returns a ready to */
/* use string with expiration and left days contents     */
/* based on language string settings, a string with the  */
/* date und an integer value with the amount of days     */
/* left for alternate usage                              */
/*                                                       */
/* Usage:                                                */
/* list($desc,$enddate,$daysleft)=days_left($clientID)   */
/*                                                       */
/* This function will temporarily not work properly, if  */
/* statistics are reset or the amount of the credit in   */
/* views or clicks or left days is modified              */
/*********************************************************/

function days_left($clientID)
{
	global $phpAds_db, $phpAds_tbl_banners, $phpAds_tbl_clients, $phpAds_tbl_adviews, $phpAds_tbl_adclicks, $date_format;
    global $phpAds_tbl_adstats, $phpAds_compact_stats;
	
	// uses the following language settings:
	global $strExpiration, $strNoExpiration, $strDaysLeft, $strEstimated;
	
	// preset return values
	$estimated_end = "-";
	$days_left="-";
	$description="";
	$absolute=0;
	
	// get client record
	$client_query="
		SELECT
			views,
			clicks,                                     
			DATE_FORMAT(expire, '".$date_format."') as expire,
			TO_DAYS(expire)-TO_DAYS(NOW()) as days_left
		FROM
			$phpAds_tbl_clients
		WHERE 
			clientID = ".$clientID;
	$res_client = db_query($client_query) or mysql_die() ;
	if ( mysql_num_rows($res_client)==1)
	{
		$row_client = mysql_fetch_array($res_client);
		
		$rawexpire=$row_client["expire"];
		
		// handle things when client works with credit days
		if ( $row_client["expire"] )
		{
			$days_left = sprintf("%d",$row_client["days_left"]);
			$estimated_end = $row_client["expire"];
			$absolute = 1;
  		}
		else // client has (had) credits in views/clicks
		{
            // Note: only one of these queries will run.  It will not get the
            // true total if some are in verbose stats format and some are in compact
			
            // get views
            $view_query="
				SELECT
					count(*) as total_views,
					MAX(TO_DAYS(v.t_stamp))-TO_DAYS(NOW()) as days_since_last_view,
					TO_DAYS(NOW())-MIN(TO_DAYS(v.t_stamp)) as days_since_start
				FROM
					$phpAds_tbl_adviews AS v, 
					$phpAds_tbl_banners AS b 
				WHERE
					b.clientID = $clientID 
					AND
					b.bannerID = v.bannerID";
			
			if ($phpAds_compact_stats) {
            	$view_query="
                	SELECT
                    	SUM(views) as total_views,
                        MAX(TO_DAYS(day))-TO_DAYS(NOW()) as days_since_last_view,
                        TO_DAYS(NOW())-MIN(TO_DAYS(day)) as days_since_start
                    FROM
                    	$phpAds_tbl_adstats AS v
                        LEFT JOIN $phpAds_tbl_banners AS b USING (bannerID)
                    WHERE
                    	b.clientID = $clientID";
            }
			
			$res_views = db_query($view_query) or mysql_die() ;
			if ( mysql_num_rows($res_views)==1 )
			{
				$row_views = mysql_fetch_array($res_views);
				// calculate estimated end of views
				if ($row_views["days_since_start"] == 0 || $row_views["days_since_start"] == null )
				{
					// to avoid division by zero
					$row_views["days_since_start"]=1;
				}
				if ( $row_views["total_views"] > 0 )
				{
					$days_left = sprintf("%d",$row_client["views"]/($row_views["total_views"]/$row_views["days_since_start"]));
					// get clicks
					$click_query="
						SELECT
							count(*) as total_clicks,
							MAX(TO_DAYS(c.t_stamp))- TO_DAYS(NOW()) as days_since_last_click,
							TO_DAYS(NOW())-MIN(TO_DAYS(c.t_stamp)) as days_since_start
						FROM
							$phpAds_tbl_adclicks AS c, 
							$phpAds_tbl_banners AS b 
						WHERE 
							b.clientID = $clientID
							AND
							b.bannerID = c.bannerID";
					
                    if ($phpAds_compact_stats) 
                    {
                    	$view_query="
                        	SELECT
                            	SUM(clicks) as total_clicks,
                                MAX(TO_DAYS(day))-TO_DAYS(NOW()) as days_since_last_click,
                                TO_DAYS(NOW())-MIN(TO_DAYS(day)) as days_since_start
                            FROM
                            	$phpAds_tbl_adstats
                                LEFT JOIN $phpAds_tbl_banners USING (bannerID)
                            WHERE
                            	clientID = $clientID AND
                                clicks > 0";
                    }
					
					$res_clicks = db_query($click_query) or mysql_die() ;
					if ( mysql_num_rows($res_clicks)==1)
					{
						$row_clicks = mysql_fetch_array($res_clicks);
						// all credits finished already?
						if ( $row_client["views"]==0 && $row_client["clicks"]==0  )
						{
							$days_left = $row_views["days_since_last_view"]>$row_clicks["days_since_last_click"]?$row_views["days_since_last_view"]:$row_clicks["days_since_last_click"];
							$absolute = 1;
						}
						else
						{
							// calculate estimated end of clicks
							if ( $row_clicks["total_clicks"] > 0 && $row_clicks["days_since_start"] > 0 )
							{
								$click_days_left = $row_client["clicks"]/($row_clicks["total_clicks"]/$row_clicks["days_since_start"]);
								$days_left = sprintf("%d",max(strval($days_left),$click_days_left));
							}
						}
					}
					$estimated_end = strftime($date_format,mktime(0,0,0,date("m"),date("d")+$days_left,date("Y")));
				}
			}
		}
	}
	
	// build return value
	$ret_val = array();
	$days_left = $days_left>0?$days_left:0;
	if (my_substr_count($rawexpire,"0")==8)
	{
		$ret_val[] = $strExpiration.": ".$strNoExpiration;
	} else
	{
		if ( $absolute )
		{
			$ret_val[] = $strExpiration.": ".$estimated_end." (".$strDaysLeft.": ".$days_left.")";
		}
		else
		{
			$ret_val[] = $strEstimated.": ".$estimated_end." (".$strDaysLeft.": ".$days_left.")";
		}
		$ret_val[]=$estimated_end;
		$ret_val[]=$days_left;
	}
	return $ret_val;
}



/*********************************************************/
/* PHP3 replacement for substr_count()                   */
/*********************************************************/

function my_substr_count($string,$search) 
{ 
    $temp = str_replace($search,$search."a",$string); 
    return strlen($temp)-strlen($string); 
} 

?>