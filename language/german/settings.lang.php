<?php // $Revision: 1.16 $

/************************************************************************/
/* phpAdsNew 2                                                          */
/* ===========                                                          */
/*                                                                      */
/* Copyright (c) 2001 by the phpAdsNew developers                       */
/* http://sourceforge.net/projects/phpadsnew                            */
/* Translations by Stefan Morgenroth (dandra@users.sf.net)              */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/



// Installer translation strings
$GLOBALS['strInstall']					= "Installation";
$GLOBALS['strChooseInstallLanguage']	= "W�hle die Sprache f�r die Installation";
$GLOBALS['strLanguageSelection']		= "Sprachauswahl";
$GLOBALS['strDatabaseSettings']			= "Datenbankeinstellungen";
$GLOBALS['strAdminSettings']			= "Administratoreinstellungen";
$GLOBALS['strAdvancedSettings']			= "Erweiterte Einstellungen";
$GLOBALS['strOtherSettings']			= "Sonstige Einstellungen";

$GLOBALS['strWarning']					= "Warnung";
$GLOBALS['strFatalError']				= "Ein fataler Fehler ist aufgetreten";
$GLOBALS['strAlreadyInstalled']			= "phpAdsNew ist bereits auf diesem System installiert. Zur Konfiguration bitte das <a href='settings-index.php'>Einstellungsinterface</a> nutzen.";
$GLOBALS['strCouldNotConnectToDB']		= "Es kann keine Verbindung zu Datenbank hergestellt werden. Bitte �berpr�fe die vorgenommenen Einstellungen";
$GLOBALS['strCreateTableTestFailed']	= "Der gew�hlte User hat keine Rechte eine Datenbankstruktur zu erstellen bzw. zu ver�ndern. Bitte kontaktiere den Datenbankadministrator.";
$GLOBALS['strUpdateTableTestFailed']	= "Der gew�hlte User hat keine Rechte eine Datenbankstruktur zu erstellen bzw. zu ver�ndern. Bitte kontaktiere den Datenbankadministrator.";
$GLOBALS['strTablePrefixInvalid']		= "Die Tabellennamensvorgabe enth�lt ung�ltige Zeichen";
$GLOBALS['strTableInUse']				= "The database which you specified is already used for phpAdsNew, please use a different table prefix, or read the manual for upgrading instructions.";
$GLOBALS['strMayNotFunction']			= "Bevor fortgefahren werden kann, m�ssen die folgenden Probleme beseitigt werden:";
$GLOBALS['strIgnoreWarnings']			= "Ignoriere Warnungen";
$GLOBALS['strWarningPHPversion']		= "phpAdsNew ben�tigt mindestens PHP 3.0.8 oder neuer, um korrekt zu funktionieren. Aktuell genutzte Version {php_version}.";
$GLOBALS['strWarningRegisterGlobals']	= "Die PHP Konfigurations-Variable register_globals mu� aktiviert werden.";
$GLOBALS['strWarningMagicQuotesGPC']	= "Die PHP Konfigurations-Variable magic_quotes_gpc mu� aktiviert werden.";
$GLOBALS['strWarningMagicQuotesRuntime']= "Die PHP Konfigurations-Variable magic_quotes_runtime mu� aktiviert werden.";
$GLOBALS['strConfigLockedDetected']		= "phpAdsNew hat festgestellt, da� die Datei <b>config.inc.php</b> vom Server nicht ver�ndert werden kann (keine Schreibrechte). <br>Der Vorgang kann nicht forgesetzt werden bis die Schreib-Lese-Rechte f�r diese Datei freigegeben wurden. <br>Bitte lies die beiliegende Dokumentation, um zu erfahren, wie dies funktioniert.";
$GLOBALS['strCantUpdateDB']  			= "Es ist z.Z. nicht m�glich ein Update der Datenbank durchzuf�hren. Wenn dennoch fortgefahren wird, werden alle existierenden Banner, Statistiken und Clients unwiderruflich gel�scht!";
$GLOBALS['strTableNames']				= "Tabellennamen";
$GLOBALS['strTablesPrefix']				= "Tabellennamenvorgabe";
$GLOBALS['strTablesType']				= "Tabellentyp";

$GLOBALS['strInstallWelcome']			= "Willkommen zu phpAdsNew";
$GLOBALS['strInstallMessage']			= "Vor der Nutzung von phpAdsNew ist es notwendig, es zu konfigurieren und <br>die Datenbank anzulegen. Klick <b>Fortsetzen</b>.";
$GLOBALS['strInstallSuccess']			= "<b>Die Installation von phpAdsNew ist nun abgeschlossen.</b><br><br>Damit die Funktionalit�t von phpAdsNew sichergestellt ist, mu� sichergestellt sein, da� die Wartungs- bzw. Servicedatei t�glich aufgerufen wird. Informationen dazu finden Sie in der Dokumentation.<br><br>Klick <b>Fortsetzen</b>, um zur Konfigurationsseite zu gelangen, wo weitere Einstellungen gemacht werden k�nnen. Nach editieren der config.inc.php, mu� sichergestellt sein, da� sie  anschlie�end zur Sicherheit ausreichend vor fremden Zugriff gesichert wird.";
$GLOBALS['strInstallNotSuccessful']		= "<b>Die Installation von phpAdsNew war nicht erfolreich</b><br><br>Einige Teile des Installationsprozesses konnten nicht abgeschlossen werden. Es ist m�glich, da� es sich um ein tempor�res Problem handelt. In dem Fall klicke <b>Fortsetzen</b> und beginne mit dem ersten Schritt des Installationprozesses. F�r weitere Informationen zur Fehlernachricht und wie der Fehler beseitigt werden kann, kann die Dokumentation zu Rate gezogen werden.";
$GLOBALS['strErrorOccured']				= "Der nachfolgende Fehler ist aufgetreten:";
$GLOBALS['strErrorInstallDatabase']		= "Die Datenbankstruktur konnte nicht angelegt werden.";
$GLOBALS['strErrorInstallConfig']		= "Die Konfigurationsdatei oder die Datenbank konnte nicht aktualisiert werden.";
$GLOBALS['strErrorInstallDbConnect']	= "Es war nicht m�glich eine Verbindung mit der Datenbank herzustellen.";

$GLOBALS['strUrlPrefix']				= "URL Vorgabe";

$GLOBALS['strProceed']					= "Fortsetzen &gt;";
$GLOBALS['strRepeatPassword']			= "Wiederhole Passwort";
$GLOBALS['strNotSamePasswords']			= "Passworte sind nicht identisch";
$GLOBALS['strInvalidUserPwd']			= "Ung�ltiger Username oder Passwort";

$GLOBALS['strUpgrade']					= "Upgrade/Aktualisierung";
$GLOBALS['strSystemUpToDate']			= "Das System ist Up-To-Date. Eine Aktualisierung ist derzeit nicht notwendig. <br>Klicken <b>Fortsetzen</b>, um zu Homepage zu gelangen.";
$GLOBALS['strSystemNeedsUpgrade']		= "Die Datenbankstruktur und die Konfigurationsdatei sollten aktualisiert werden, um die Funktionsf�higkeit zu gew�hrleisten. Klicke <b>Fortsetzen</b>, um die Aktualisierungsprozess zu beginnen. <br>Bitte etwas Geduld!! Die Aktualisierung kann einige Minuten dauern.";
$GLOBALS['strSystemUpgradeBusy']		= "Systemaktualisierung l�uft, bitte warten...";
$GLOBALS['strServiceUnavalable']		= "Der Dienst ist zeitweise nicht verf�gbar. Systemupgrade l�uft...";

$GLOBALS['strConfigNotWritable']		= "Die Datei <b>config.inc.php</b> ist nicht beschreibbar";





/*********************************************************/
/* Configuration translations                            */
/*********************************************************/

// Global

$GLOBALS['strChooseSection']			= "Abschnitt schlie�en";
$GLOBALS['strDayFullNames'] 			= array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Sonnabend");
$GLOBALS['strEditConfigNotPossible']    = "Es ist nicht m�glich diese Einstellungen zu bearbeiten, weil die Konfigurationsdatei aus Sicherheitsgr�nden gesperrt/schreibgesch�tzt wurde. "."Wenn Ver�nderungen gemacht werden sollen, dann mu� der Schreibschutz der Datei config.inc.php vorher aufgehoben werden.";
$GLOBALS['strEditConfigPossible']		= "Es ist m�glich, die Einstellung zu bearbeiten, da die Konfigurationsdatei nicht gesperrt/schreibgesch�tzt ist, allerdings k�nnten sich dadurch Sicherheitsl�cher �ffnen. "."Wenn das System abgesichert werden soll, so mu� die Datei config.inc.php gesperrt/schreibgesch�tzt werden.";



// Database
$GLOBALS['strDatabaseSettings']			= "Datenbankeinstellungen";

$GLOBALS['strDatabaseServer']			= "Datenbank Server";
$GLOBALS['strDbHost']					= "Datenbank Hostname";
$GLOBALS['strDbUser']					= "Datenbank Username";
$GLOBALS['strDbPassword']				= "Datenbank Passwort";
$GLOBALS['strDbName']					= "Datenbankname";

$GLOBALS['strDatabaseOptimalisations']	= "Datenbankoptimierung";
$GLOBALS['strPersistentConnections']	= "St�ndige Dantenbankverbindung nutzen (persistent)";
$GLOBALS['strInsertDelayed']			= "Verz�gerte Inserts (Einf�gungen) nutzen";
$GLOBALS['strCompatibilityMode']		= "Nutze Datenbank Kompatibilit�ts Mode";
$GLOBALS['strCantConnectToDb']			= "Es kann keine Verbindung zur Datenbank aufgebaut werden";



// Invocation and Delivery
$GLOBALS['strInvocationAndDelivery']	= "Einf�ge- und Verteilungseinstellungen";

$GLOBALS['strKeywordRetrieval']			= "Schl�sselwort erhalten";
$GLOBALS['strBannerRetrieval']			= "Banner Einblendungsmethode";
$GLOBALS['strRetrieveRandom']			= "Zuf�llige Bannereinblendung (Standard)";
$GLOBALS['strRetrieveNormalSeq']		= "Normal sequentielle Bannereinblendung";
$GLOBALS['strWeightSeq']				= "Gewichtet sequentielle Bannereinblendung";
$GLOBALS['strFullSeq']					= "Volle sequentielle Bannereinblendung";
$GLOBALS['strUseConditionalKeys']		= "Nutze bedingte Schl�sselw�rter";
$GLOBALS['strUseMultipleKeys']			= "Nutze multiple Schl�sselw�rter";
$GLOBALS['strUseAcl']					= "Nutze Einblendungsbegrenzungen (ACL)";

$GLOBALS['strZonesSettings']			= "Zonen Einstellungen";
$GLOBALS['strZoneCache']				= "Cache Zonen, dies sollte die Geschwindigkeit bei Zonennutzung erh�hen";
$GLOBALS['strZoneCacheLimit']			= "Zeit zwischen Cache Updates (in Sekunden)";
$GLOBALS['strZoneCacheLimitErr']		= "Zeit zwischen Cache Updates sollte eine positive ganze Zahl sein";

$GLOBALS['strP3PSettings']				= "P3P Einstellungen";
$GLOBALS['strUseP3P']					= "Nutze P3P Policies";
$GLOBALS['strP3PCompactPolicy']			= "P3P Compact Policy";
$GLOBALS['strP3PPolicyLocation']		= "P3P Policy Ort";



// Banner Settings
$GLOBALS['strBannerSettings']			= "Bannereinstellungen";

$GLOBALS['strTypeHtmlSettings']			= "HTML-Banner Konfiguration";
$GLOBALS['strTypeHtmlAuto']				= "Automatisch HTML-Banner anpassen, um ein Adclick Loggen zu erm�glichen";
$GLOBALS['strTypeHtmlPhp']				= "Erlaube die Ausf�hrung von PHP-Funktionen innerhalb eines HTML-Banners";

$GLOBALS['strTypeWebSettings']			= "Webbanner Konfiguration";
$GLOBALS['strTypeWebMode']				= "Speichermethode";
$GLOBALS['strTypeWebModeLocal']			= "Local Mode (in einem lokalen Verzeichnis gespeichert)";
$GLOBALS['strTypeWebModeFtp']			= "FTP Mode (auf einem externen FTP-Server gespeichert)";
$GLOBALS['strTypeWebDir']				= "Local Mode Webbanner Verzeichnis";
$GLOBALS['strTypeWebFtp']				= "FTP Mode Webbanner Server";
$GLOBALS['strTypeWebUrl']				= "�ffentliche URL des lokalen Verzeichnisses / FTP-Servers";

$GLOBALS['strDefaultBanners']			= "Standard Banner";
$GLOBALS['strDefaultBannerUrl']			= "Standard Banner-URL";
$GLOBALS['strDefaultBannerTarget']		= "Standard Banner Klick-Ziel";



// Statistics Settings
$GLOBALS['strStatisticsSettings']		= "Statistikeinstellungen";

$GLOBALS['strStatisticsFormat']			= "Statistik Format";
$GLOBALS['strLogBeacon']				= "Nutze &gt;beacons&lt; (Pixel), um AdViews zu loggen";
$GLOBALS['strCompactStats']				= "Nutze kompakte Statistik";
$GLOBALS['strLogAdviews']				= "Log AdViews";
$GLOBALS['strLogAdclicks']				= "Log AdClicks";

$GLOBALS['strEmailWarnings']			= "E-Mail Warnungen";
$GLOBALS['strAdminEmailHeaders']		= "Mailkopf zur Wiedergabe des Senders der t�glichen Werbeberichte";
$GLOBALS['strWarnLimit']				= "Limitwarnung";
$GLOBALS['strWarnLimitErr']				= "Limitwarnung sollte eine positive ganze Zahl sein";
$GLOBALS['strWarnAdmin']				= "Adminwarnung";
$GLOBALS['strWarnClient']				= "Kundenwarnung";

$GLOBALS['strRemoteHosts']				= "Remote Hosts";
$GLOBALS['strIgnoreHosts']				= "Ignoriere Hosts";
$GLOBALS['strReverseLookup']			= "Reverse DNS Lookup";
$GLOBALS['strProxyLookup']				= "Proxy Lookup";



// Administrator settings
$GLOBALS['strAdministratorSettings']	= "Administratoreinstellungen";

$GLOBALS['strLoginCredentials']			= "Login Beglaubigungen";
$GLOBALS['strAdminUsername']			= "Admins Username";
$GLOBALS['strOldPassword']				= "Altes Passwort";
$GLOBALS['strNewPassword']				= "Neues Passwort";
$GLOBALS['strInvalidUsername']			= "Ung�ltiger Username";
$GLOBALS['strInvalidPassword']			= "Ung�ltiges Passwort";

$GLOBALS['strBasicInformation']			= "Basis Information";
$GLOBALS['strAdminFullName']			= "Admins voller Vor-,Nachname";
$GLOBALS['strAdminEmail']				= "Admins E-Mail Adresse";
$GLOBALS['strCompanyName']				= "Unternehmensname";

$GLOBALS['strAdminNovice']				= "Die Admin L�schvorg�nge ben�tigen zur Sicherheit eine Best�tigung";



// User interface settings
$GLOBALS['strGuiSettings']				= "User Interface Konfiguration";

$GLOBALS['strGeneralSettings']			= "Haupteinstellungen";
$GLOBALS['strAppName']					= "Applikationsname";
$GLOBALS['strMyHeader']					= "Mein Header";
$GLOBALS['strMyFooter']					= "Mein Footer";

$GLOBALS['strClientInterface']			= "Kundenumgebung";
$GLOBALS['strClientWelcomeEnabled']		= "Aktiviere Kunden Willkommen Nachricht";
$GLOBALS['strClientWelcomeText']		= "Kunden Willkommen Text<br>(HTML-Tags erlaubt)";



// Interface defaults
$GLOBALS['strInterfaceDefaults']		= "Umgebungsstandard";

$GLOBALS['strStatisticsDefaults'] 		= "Statistiken";
$GLOBALS['strBeginOfWeek']				= "Beginn der Woche";
$GLOBALS['strPercentageDecimals']		= "Prozentuell";

$GLOBALS['strWeightDefaults']			= "Standard Gewichtung";
$GLOBALS['strDefaultBannerWeight']		= "Standard Bannergewichtung";
$GLOBALS['strDefaultCampaignWeight']	= "Standard Kampagnengewichtung";
$GLOBALS['strDefaultBannerWErr']		= "Standard Bannergewichtung sollte eine positive ganze Zahl sein";
$GLOBALS['strDefaultCampaignWErr']		= "Standard Kampagnengewichtung sollte eine positive ganze Zahl sein";

$GLOBALS['strAllowedBannerTypes']		= "Erlaubte Bannertypen";
$GLOBALS['strTypeSqlAllow']				= "Erlaube in Datenbank gespeicherte Banner";
$GLOBALS['strTypeWebAllow']				= "Erlaube auf Webserver gespeicherte Banner";
$GLOBALS['strTypeUrlAllow']				= "Erlaube URL verkn�pfte Banner";
$GLOBALS['strTypeHtmlAllow']			= "Erlaube HTML-Banner";



// Not used at the moment
$GLOBALS['strTableBorderColor']			= "Tabellenrahmenfarbe";
$GLOBALS['strTableBackColor']			= "Tabellenhintergrundfarbe";
$GLOBALS['strTableBackColorAlt']		= "Tabellenhintergrundfarbe (alternativ)";
$GLOBALS['strMainBackColor']			= "Seiten Haupthintergrundfarbe";
$GLOBALS['strOverrideGD']				= "�berschreiben des GD-Bildformats";
$GLOBALS['strTimeZone']					= "Zeitzone";

?>