<?php // $Revision: 1.1 $

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
include ("lib-settings.inc.php");


// Security check
phpAds_checkAccess(phpAds_Admin);


$errormessage = array();
$sql = array();

if (isset($HTTP_POST_VARS) && count($HTTP_POST_VARS))
{
	if (isset($begin_of_week))
		phpAds_SettingsWriteAdd('begin_of_week', $begin_of_week);
	if (isset($percentage_decimals))
		phpAds_SettingsWriteAdd('percentage_decimals', $percentage_decimals);
	if (isset($default_banner_weight))
		phpAds_SettingsWriteAdd('default_banner_weight', $default_banner_weight);
	if (isset($default_campaign_weight))
		phpAds_SettingsWriteAdd('default_campaign_weight', $default_campaign_weight);
	if (isset($type_sql_allow))
		phpAds_SettingsWriteAdd('type_sql_allow', $type_sql_allow);
	if (isset($type_web_allow))
		phpAds_SettingsWriteAdd('type_web_allow', $type_web_allow);
	if (isset($type_url_allow))
		phpAds_SettingsWriteAdd('type_url_allow', $type_url_allow);
	if (isset($type_html_allow))
		phpAds_SettingsWriteAdd('type_html_allow', $type_html_allow);
	
	if (!count($errormessage))
	{
		if (phpAds_SettingsWriteFlush())
		{
			header("Location: $PHP_SELF");
			exit;
		}
	}
}



/*********************************************************/
/* HTML framework                                        */
/*********************************************************/

phpAds_PrepareHelp();
phpAds_PageHeader("5.2");
phpAds_ShowSections(array("5.1", "5.2"));
phpAds_SettingsSelection("admin", "defaults");



/*********************************************************/
/* Cache settings fields and get help HTML Code          */
/*********************************************************/

phpAds_StartSettings();
phpAds_AddSettings('start_section', "2.3.1");
phpAds_AddSettings('select', 'begin_of_week',
	array($strBeginOfWeek, array($strDayFullNames[0], $strDayFullNames[1])));
phpAds_AddSettings('break', '');
phpAds_AddSettings('select', 'percentage_decimals',
	array($strPercentageDecimals, array(0, 1, 2, 3)));
phpAds_AddSettings('end_section', '');


phpAds_AddSettings('start_section', "2.3.2");
phpAds_AddSettings('text', 'default_banner_weight',
	array($strDefaultBannerWeight, 12));
phpAds_AddSettings('break', '');
phpAds_AddSettings('text', 'default_campaign_weight',
	array($strDefaultCampaignWeight, 12));
phpAds_AddSettings('end_section', '');

phpAds_AddSettings('start_section', "2.3.3");
phpAds_AddSettings('checkbox', 'type_sql_allow', $strTypeSqlAllow);
phpAds_AddSettings('checkbox', 'type_web_allow', $strTypeWebAllow);
phpAds_AddSettings('checkbox', 'type_url_allow', $strTypeUrlAllow);
phpAds_AddSettings('checkbox', 'type_html_allow', $strTypeHtmlAllow);
phpAds_AddSettings('end_section', '');
phpAds_EndSettings();



/*********************************************************/
/* Main code                                             */
/*********************************************************/

?>
<form name="settingsform" method="post" action="<?php echo $PHP_SELF;?>">
<?php

phpAds_FlushSettings();

?>
</form>
<?php



/*********************************************************/
/* HTML framework                                        */
/*********************************************************/

phpAds_PageFooter();

?>