<?php // $Revision: 2.1 $

/************************************************************************/
/* phpAdsNew 2                                                          */
/* ===========                                                          */
/*                                                                      */
/* Copyright (c) 2000-2002 by the phpAdsNew developers                  */
/* For more information visit: http://www.phpadsnew.com                 */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/



// Include required files
include ("lib-settings.inc.php");


// Register input variables
phpAds_registerGlobal ('ignore_hosts', 'warn_limit', 'admin_email_headers', 'log_beacon', 'compact_stats', 'log_adviews', 
					   'log_adclicks', 'block_adviews', 'block_adclicks', 'warn_admin', 'warn_client', 'qmail_patch', 
					   'auto_clean_tables', 'auto_clean_userlog', 'auto_clean_tables_interval', 
					   'auto_clean_userlog_interval', 'geotracking_stats', 'log_hostname', 'log_source', 'log_iponly');


// Security check
phpAds_checkAccess(phpAds_Admin);


$errormessage = array();
$sql = array();

if (isset($HTTP_POST_VARS) && count($HTTP_POST_VARS))
{
	if (isset($ignore_hosts))
	{
		if (trim($ignore_hosts) != '')
		{
			$ignore_hosts = explode("\n",
				trim(ereg_replace("[[:blank:]\n\r]+", "\n",
				stripslashes($ignore_hosts))));
			
			phpAds_SettingsWriteAdd('ignore_hosts', $ignore_hosts);
		}
		else
			phpAds_settingsWriteAdd('ignore_hosts', array());
	}
	
	
	if (isset($warn_limit))
	{
		if (!is_numeric($warn_limit) || $warn_limit <= 0)
			$errormessage[2][] = $strWarnLimitErr;
		else
			phpAds_SettingsWriteAdd('warn_limit', $warn_limit);
	}
	
	if (isset($admin_email_headers))
	{
		$admin_email_headers = trim(ereg_replace("\r?\n", "\\r\\n", $admin_email_headers));
		phpAds_SettingsWriteAdd('admin_email_headers', $admin_email_headers);
	}
	
	if (isset($log_beacon))
		phpAds_SettingsWriteAdd('log_beacon', $log_beacon);
	if (isset($log_adviews))
		phpAds_SettingsWriteAdd('log_adviews', $log_adviews);
	if (isset($log_adclicks))
		phpAds_SettingsWriteAdd('log_adclicks', $log_adclicks);
	
	if (isset($geotracking_stats))
		phpAds_SettingsWriteAdd('geotracking_stats', $geotracking_stats);
	if (isset($log_source))
		phpAds_SettingsWriteAdd('log_source', $log_source);
	if (isset($log_hostname))
		phpAds_SettingsWriteAdd('log_hostname', $log_hostname);
	if (isset($log_iponly))
		phpAds_SettingsWriteAdd('log_iponly', $log_iponly);
	
	if (isset($compact_stats))
		phpAds_SettingsWriteAdd('compact_stats', $compact_stats);
	
	if (isset($block_adviews))
		phpAds_SettingsWriteAdd('block_adviews', $block_adviews);
	if (isset($block_adclicks))
		phpAds_SettingsWriteAdd('block_adclicks', $block_adclicks);
	
	if (isset($warn_admin))
		phpAds_SettingsWriteAdd('warn_admin', $warn_admin);
	if (isset($warn_client))
		phpAds_SettingsWriteAdd('warn_client', $warn_client);
	if (isset($qmail_patch))
		phpAds_SettingsWriteAdd('qmail_patch', $qmail_patch);
	
	if (isset($auto_clean_tables))
		phpAds_SettingsWriteAdd('auto_clean_tables', $auto_clean_tables);
	
	if (isset($auto_clean_userlog))
		phpAds_SettingsWriteAdd('auto_clean_userlog', $auto_clean_userlog);
	
	if (isset($auto_clean_tables_interval))
	{
		if (!is_numeric($auto_clean_tables_interval) || $auto_clean_tables_interval <= 2)
			$errormessage[4][] = $strAutoCleanErr ;
		else
			phpAds_SettingsWriteAdd('auto_clean_tables_interval', $auto_clean_tables_interval);
	}
	
	if (isset($auto_clean_userlog_interval))
	{
		if (!is_numeric($auto_clean_userlog_interval) || $auto_clean_userlog_interval <= 2)
			$errormessage[4][] = $strAutoCleanErr ;
		else
			phpAds_SettingsWriteAdd('auto_clean_userlog_interval', $auto_clean_userlog_interval);
	}
	
	if (!count($errormessage))
	{
		if (phpAds_SettingsWriteFlush())
		{
			header("Location: settings-banner.php");
			exit;
		}
	}
}



/*********************************************************/
/* HTML framework                                        */
/*********************************************************/

phpAds_PrepareHelp();
phpAds_PageHeader("5.1");
phpAds_ShowSections(array("5.1", "5.3", "5.4", "5.2"));
phpAds_SettingsSelection("stats");



/*********************************************************/
/* Cache settings fields and get help HTML Code          */
/*********************************************************/

// Change ignore_hosts into a string, so the function handles it good
$phpAds_config['ignore_hosts'] = join("\n", $phpAds_config['ignore_hosts']);

phpAds_StartSettings();
phpAds_AddSettings('start_section', "1.4.1");
phpAds_AddSettings('select', 'compact_stats',
	array($strCompactStats, array($strVerbose, $strCompact)));
phpAds_AddSettings('break', '');
phpAds_AddSettings('checkbox', 'log_adviews',
	array($strLogAdviews, array('block_adviews')));
phpAds_AddSettings('checkbox', 'log_adclicks',
	array($strLogAdclicks, array('block_adclicks')));

phpAds_AddSettings('break', 'large');
phpAds_AddSettings('checkbox', 'log_source', $strLogSource);

if ($phpAds_config['geotracking_type'] > 0)
	phpAds_AddSettings('checkbox', 'geotracking_stats', $strGeoLogStats);

if (isset($HTTP_SERVER_VARS['REMOTE_HOST']) || $phpAds_config['reverse_lookup'])
{
	phpAds_AddSettings('checkbox', 'log_hostname', $strLogHostnameOrIP);
	phpAds_AddSettings('checkbox+', 'log_iponly', $strLogIPOnly);
}
else
	phpAds_AddSettings('checkbox', 'log_hostname', $strLogIP);

phpAds_AddSettings('break', 'large');
phpAds_AddSettings('checkbox', 'log_beacon', $strLogBeacon);
phpAds_AddSettings('end_section', '');

phpAds_AddSettings('start_section', "1.4.4");
phpAds_AddSettings('text', 'ignore_hosts',
	array($strIgnoreHosts, 35, 'textarea'));
phpAds_AddSettings('break', '');
phpAds_AddSettings('text', 'block_adviews',
	array($strBlockAdviews, 12, 'text', 5, 'log_adviews'));
phpAds_AddSettings('break', '');
phpAds_AddSettings('text', 'block_adclicks',
	array($strBlockAdclicks, 12, 'text', 5, 'log_adclicks'));
phpAds_AddSettings('end_section', '');


phpAds_AddSettings('start_section', "1.4.3");
phpAds_AddSettings('text', 'warn_limit',
	array($strWarnLimit, 12));
phpAds_AddSettings('break', '');
phpAds_AddSettings('checkbox', 'warn_admin', $strWarnAdmin);
phpAds_AddSettings('checkbox', 'warn_client', $strWarnClient);
phpAds_AddSettings('break', '');
phpAds_AddSettings('text', 'admin_email_headers',
	array($strAdminEmailHeaders, 35, 'textarea', 5));
phpAds_AddSettings('break', '');
phpAds_AddSettings('checkbox', 'qmail_patch', $strQmailPatch);
phpAds_AddSettings('end_section', '');

phpAds_AddSettings('start_section', "1.4.5");
//phpAds_AddSettings('checkbox', 'auto_clean_tables_vacuum', $strAutoCleanVacuum);

phpAds_AddSettings('checkbox', 'auto_clean_tables',
	array($strAutoCleanStats, array('auto_clean_tables_interval')));
phpAds_AddSettings('break', '');
phpAds_AddSettings('text', 'auto_clean_tables_interval',
	array($strAutoCleanStatsWeeks, 25, 'text', 1, 'auto_clean_tables'));
phpAds_AddSettings('break', 'large');

phpAds_AddSettings('checkbox', 'auto_clean_userlog',
	array($strAutoCleanUserlog, array('auto_clean_userlog_interval')));
phpAds_AddSettings('break', '');
phpAds_AddSettings('text', 'auto_clean_userlog_interval',
	array($strAutoCleanUserlogWeeks, 25, 'text', 1, 'auto_clean_userlog'));
phpAds_AddSettings('end_section', '');
phpAds_EndSettings();



/*********************************************************/
/* Main code                                             */
/*********************************************************/

?>
<form name="settingsform" method="post" action="<?php echo $HTTP_SERVER_VARS['PHP_SELF'];?>">
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