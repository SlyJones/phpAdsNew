<?php // $Id: settings.lang.php,v 1.7 2001/11/13 22:34:09 ciaccia Exp $

/************************************************************************/
/* phpPgAds                                                             */
/* ========                                                             */
/*                                                                      */
/* Copyright (c) 2001 by the phpPgAds developers                        */
/* http://sourceforge.net/projects/phppgads                             */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/



// Installer translation strings
$GLOBALS['strInstall']					= "Installazione";
$GLOBALS['strChooseInstallLanguage']	= "Scegli la lingua per il processo di installazione";
$GLOBALS['strLanguageSelection']		= "Selezione Lingua";
$GLOBALS['strDatabaseSettings']			= "Impostazioni Database";
$GLOBALS['strAdminSettings']			= "Impostazioni Amministratore";
$GLOBALS['strAdvancedSettings']			= "Impostazioni Avanzate";
$GLOBALS['strOtherSettings']			= "Altre Impostazioni";

$GLOBALS['strWarning']					= "Attenzione";
$GLOBALS['strFatalError']				= "Si &egrave; verificato un errore fatale";
$GLOBALS['strAlreadyInstalled']			= "phpPgAds &egrave; gi&agrave; installato su questo sistema. Se vuoi configurarlo utilizza l'interfaccia delle <a href='settings-index.php'>impostazioni</a>";
$GLOBALS['strCouldNotConnectToDB']		= "Impossibile connettersi al database, controlla i parametri immessi";
$GLOBALS['strCreateTableTestFailed']	= "L'utente specificato non ha i permessi necessari a creare o modificare la struttura del database, contatta l'amministratore di sistema.";
$GLOBALS['strUpdateTableTestFailed']	= "L'utente specificato non ha i permessi necessari a modificare la struttura del database, contatta l'amministratore di sistema.";
$GLOBALS['strTablePrefixInvalid']		= "Il prefisso delle tabelle contiene caratteri non validi";
$GLOBALS['strMayNotFunction']			= "Prima di continuare, correggi questi potenziali problemi:";
$GLOBALS['strIgnoreWarnings']			= "Ignora avvertimenti";
$GLOBALS['strWarningPHPversion']		= "phpPgAds richiede PHP 3.0.8 or pi&ugrave; recente per funzionare. La versione utilizzata &egrave; {php_version}.";
$GLOBALS['strWarningRegisterGlobals']	= "La variabile di configurazione del PHP register_globals deve essere abilitata.";
$GLOBALS['strWarningMagicQuotesGPC']	= "La variabile di configurazione del PHP magic_quotes_gpc deve essere abilitata.";
$GLOBALS['strWarningMagicQuotesRuntime']= "La variabile di configurazione del PHP magic_quotes_runtime deve essere disabilitata.";
$GLOBALS['strConfigLockedDetected']		= "Il file <b>config.inc.php</b> non pu� essere modificato dal server.<br> Non sar&agrave; possibile procedere finch&eacute; non verranno modificati i permessi del file. <br>Leggi la documentazione formita se non sai come comportarti.";
$GLOBALS['strCantUpdateDB']  			= "Non &egrave; possibile aggiornare il database. Se decidi di continuare, tutti i banner, i clienti e le statistiche seranno eliminati.";
$GLOBALS['strTableNames']				= "Nomi delle tabelle";
$GLOBALS['strTablesPrefix']				= "Prefisso delle tabelle";
$GLOBALS['strTablesType']				= "Tipo di tabelle";

$GLOBALS['strInstallWelcome']			= "Benvenuti in phpPgAds";
$GLOBALS['strInstallMessage']			= "Before you can use phpPgAds it needs to be configured and <br> the database needs to be created. Click <b>Proceed</b> to continue.";
$GLOBALS['strInstallSuccess']			= "<b>The installation of phpPgAds is now complete.</b><br><br>In order for phpPgAds to function correctly you also need
										   to make sure the maintenance file is run every day. More information about this subject can be found in the documentation.
										   <br><br>Click <b>Proceed</b> to go the configuration page, where you can 
										   set up more settings. Please do not forget to lock the config.inc.php file when you are finished to prevent security
										   breaches.";
$GLOBALS['strInstallNotSuccessful']		= "<b>The installation of phpPgAds was not succesful</b><br><br>Some portions of the install process could not be completed.
										   It is possible these problems are only temporarily, in that case you can simply click <b>Proceed</b> and return to the
										   first step of the install process. If you want to know more on what the error message below means, and how to solve it, 
										   please consult the supplied documentation.";
$GLOBALS['strErrorOccured']				= "The following error occured:";
$GLOBALS['strErrorInstallDatabase']		= "The database structure could not be created.";
$GLOBALS['strErrorInstallConfig']		= "The configuration file or database could not be updated.";
$GLOBALS['strErrorInstallDbConnect']	= "It was not possible to open a connection to the database.";

$GLOBALS['strUrlPrefix']				= "Prefisso dell'URL";

$GLOBALS['strProceed']					= "Procedi &gt;";
$GLOBALS['strInstallDatabase']			= "Database structure installation";
$GLOBALS['strFunctionAlreadyExists']	= "Function %s already exists";
$GLOBALS['strFunctionInAllDotSqlErr']	= "Can't create a function from 'all.sql'";
$GLOBALS['strFunctionClickProceed']		= "Would you like to overwrite existing functions?";
$GLOBALS['strYes']						= "Yes";
$GLOBALS['strNo']						= "No";
$GLOBALS['strDatabaseCreated']			= "Database structure successfully created:";
$GLOBALS['strTableCreated']				= "Table <b>%s</b> successfully created";
$GLOBALS['strSequenceCreated']			= "Sequence <b>%s</b> successfully created";
$GLOBALS['strIndexCreated']				= "Index <b>%s</b> successfully created";
$GLOBALS['strFunctionCreated']			= "Function <b>%s</b> successfully created";
$GLOBALS['strFunctionReplaced']			= "Function <b>%s</b> successfully replaced";
$GLOBALS['strUnknownStatementExec']		= "Unknown statement executed";
$GLOBALS['strAdminPasswordSetup']		= "Admin Password Setup";
$GLOBALS['strRepeatPassword']			= "Repeat Password";
$GLOBALS['strNotSamePasswords']			= "Passwords did not match";
$GLOBALS['strInvalidUserPwd']			= "Invalid username or password";
$GLOBALS['strInstallCompleted']			= "Installation completed";
$GLOBALS['strInstallCompleted2']		= "Click <b>Proceed</b> go to configuration page and set up the other settings.";

$GLOBALS['strUpgrade']					= "Upgrade";
$GLOBALS['strSystemUpToDate']			= "Your system is up to date, no upgrade needed at the moment. <br>Click on <b>Proceed</b> to go to home page.";
$GLOBALS['strSystemNeedsUpgrade']		= "The database structure and configuration file need to be upgraded in order to function correctly. Click <b>Proceed</b> to start the upgrade process. <br>Please be patient, the upgrade can take up to a couple of minutes.";
$GLOBALS['strSystemUpgradeBusy']		= "System upgrade in progress, please wait...";
$GLOBALS['strServiceUnavalable']		= "The service is temporarily unavailable. System upgrade in progress";
$GLOBALS['strDownloadConfig']			= "Download your <b>config.inc.php</b> and upload it to your server, then click <b>Proceed</b>.";
$GLOBALS['strDownload']					= "Download";

$GLOBALS['strConfigNotWritable']		= "Your config.inc.php file is not writable";

// Settings translation strings
$GLOBALS['strChooseSection']			= "Choose Section";

$GLOBALS['strDbHost']					= "Database hostname";
$GLOBALS['strDbUser']					= "Database username";
$GLOBALS['strDbPassword']				= "Database password";
$GLOBALS['strDbName']					= "Database name";
$GLOBALS['strPersistentConnections']	= "Use persistent connections";
$GLOBALS['strInsertDelayed']			= "Use delayed inserts";
$GLOBALS['strCompatibilityMode']		= "Use database compatibility mode";
$GLOBALS['strCantConnectToDb']			= "Can't connect to database";

$GLOBALS['strAdminUsername']			= "Admin's username";
$GLOBALS['strAdminFullName']			= "Admin's full name";
$GLOBALS['strAdminEmail']				= "Admin's email address";
$GLOBALS['strAdminEmailHeaders']		= "Mail Headers for the reflection of the sender of the daily ad reports";
$GLOBALS['strAdminNovice']				= "Admin's delete actions need confirmation for safety";
$GLOBALS['strOldPassword']				= "Old Password";
$GLOBALS['strNewPassword']				= "New Password";
$GLOBALS['strInvalidUsername']			= "Invalid username";
$GLOBALS['strInvalidPassword']			= "Invalid password";

$GLOBALS['strGuiSettings']				= "User Interface Configuration";
$GLOBALS['strMyHeader']					= "My Header";
$GLOBALS['strMyFooter']					= "My Footer";
$GLOBALS['strTableBorderColor']			= "Table Border Color";
$GLOBALS['strTableBackColor']			= "Table Back Color";
$GLOBALS['strTableBackColorAlt']		= "Table Back Color (Alternative)";
$GLOBALS['strMainBackColor']			= "Main Back Color";
$GLOBALS['strAppName']					= "Application Name";
$GLOBALS['strCompanyName']				= "Company Name";
$GLOBALS['strOverrideGD']				= "Override GD Imageformat";
$GLOBALS['strTimeZone']					= "Time Zone";

$GLOBALS['strDayFullNames'] = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");

$GLOBALS['strIgnoreHosts']				= "Ignore Hosts";
$GLOBALS['strWarnLimit']				= "Warn Limit";
$GLOBALS['strWarnLimitErr']				= "Warn Limit should be a positive integer";
$GLOBALS['strBeginOfWeek']				= "Begin of Week";
$GLOBALS['strPercentageDecimals']		= "Percentage Decimals";
$GLOBALS['strCompactStats']				= "Use Compact Stats";
$GLOBALS['strLogAdviews']				= "Log Adviews";
$GLOBALS['strLogAdclicks']				= "Log Adclicks";
$GLOBALS['strReverseLookup']			= "Reverse DNS Lookup";
$GLOBALS['strWarnAdmin']				= "Warn Admin";
$GLOBALS['strWarnClient']				= "Warn Client";

$GLOBALS['strAllowedBannerTypes']		= "Allowed banner types";
$GLOBALS['strTypeSqlAllow']				= "Allow SQL stored banners";
$GLOBALS['strTypeWebAllow']				= "Allow Webserver stored banners";
$GLOBALS['strTypeUrlAllow']				= "Allow URL banners";
$GLOBALS['strTypeHtmlAllow']			= "Allow HTML banners";
$GLOBALS['strTypeWebSettings']			= "Web banners configuration";
$GLOBALS['strTypeWebMode']				= "Storing method";
$GLOBALS['strTypeWebModeLocal']			= "Local mode (stored in a local directory)";
$GLOBALS['strTypeWebModeFtp']			= "FTP mode (stored on a external FTP server)";
$GLOBALS['strTypeWebDir']				= "Local mode Web banner directory";
$GLOBALS['strTypeWebFtp']				= "FTP mode Web banner server";
$GLOBALS['strTypeWebUrl']				= "Public URL of local directory / FTP server";
$GLOBALS['strTypeHtmlSettings']			= "HTML banners configuration";
$GLOBALS['strTypeHtmlAuto']				= "Automatically change HTML banners in order to force click logging";
$GLOBALS['strTypeHtmlPhp']				= "Allow PHP expressions to be executed from within a HTML banner";

$GLOBALS['strBannerRetrieval']			= "Banner retrieval method";
$GLOBALS['strRetrieveRandom']			= "Random banner retrieval (default)";
$GLOBALS['strRetrieveNormalSeq']		= "Normal sequental banner retrieval";
$GLOBALS['strWeightSeq']				= "Weight based sequential banner retrieval";
$GLOBALS['strFullSeq']					= "Full sequential banner retrieval";
$GLOBALS['strDefaultBannerUrl']			= "Default Banner URL";
$GLOBALS['strDefaultBannerTarget']		= "Default Banner Target";
$GLOBALS['strUseConditionalKeys']		= "Use conditional keywords";
$GLOBALS['strUseMultipleKeys']			= "Use multiple keywords";
$GLOBALS['strUseAcl']					= "Use display limitations";

$GLOBALS['strZonesSettings']			= "Zones Settings";
$GLOBALS['strZoneCache']				= "Cache zones, this should speed things up when using zones";
$GLOBALS['strZoneCacheLimit']			= "Time between cache updates (in seconds)";
$GLOBALS['strZoneCacheLimitErr']		= "Time between cache updates should be a positive integer";

$GLOBALS['strP3PSettings']				= "P3P Settings";
$GLOBALS['strUseP3P']					= "Use P3P Policies";
$GLOBALS['strP3PCompactPolicy']			= "P3P Compact Policy";
$GLOBALS['strP3PPolicyLocation']		= "P3P Policy Location";

$GLOBALS['strClientWelcomeMessage']		= "Client Welcome Message";
$GLOBALS['strClientWelcomeEnabled']		= "Enable client welcome message";
$GLOBALS['strClientWelcomeText']		= "Client Welcome text<br>(HTML tags allowed)";

$GLOBALS['strDefaultBannerWeight']		= "Default banner weight";
$GLOBALS['strDefaultCampaignWeight']	= "Default campaign weight";

$GLOBALS['strDefaultBannerWErr']		= "Default banner weight should be a positive integer";
$GLOBALS['strDefaultCampaignWErr']		= "Default campaign weight should be a positive integer";

?>