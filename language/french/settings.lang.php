<?php // $Revision: 2.3 $

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



// Installer translation strings
$GLOBALS['strInstall']				= "Installer";
$GLOBALS['strChooseInstallLanguage']		= "Choisissez la langue pour la proc�dure d'installation";
$GLOBALS['strLanguageSelection']		= "S�lection de la langue";
$GLOBALS['strDatabaseSettings']			= "Param�tres de la base de donn�es";
$GLOBALS['strAdminSettings']			= "Param�tres de l'administrateur";
$GLOBALS['strAdvancedSettings']			= "Param�tres avanc�s";
$GLOBALS['strOtherSettings']			= "Autres param�tres";

$GLOBALS['strWarning']				= "Alerte";
$GLOBALS['strFatalError']			= "Une erreur fatale est survenue";
$GLOBALS['strAlreadyInstalled']			= $phpAds_productname." est d�j� install� sur ce syst�me. Si vous souhaitez le configurer, allez � <a href='settings-index.php'>l'interface de param�trage</a>";
$GLOBALS['strCouldNotConnectToDB']		= "Impossible de se connecter � la base de donn�es, veuillez v�rifier les param�tres que vous avez entr�s";
$GLOBALS['strCreateTableTestFailed']		= "L'utilisateur que vous avez sp�cifi� n'a pas la permission de cr�er ou de mettre � jour la structure de la base de donn�es. Veuillez contacter l'administrateur de la base.";
$GLOBALS['strUpdateTableTestFailed']		= "L'utilisateur que vous avez sp�cifi� n'a pas la permission de mettre � jour la structure de la base de donn�es. Veuillez contacter l'administrateur de la base.";
$GLOBALS['strTablePrefixInvalid']		= "Le pr�fixe des tables contient des caract�res invalides";
$GLOBALS['strTableInUse']			= "La base de donn�es que vous avez sp�cifi�e est d�j� utilis�e pour ".$phpAds_productname.". Veuillez utiliser un pr�fixe de table diff�rent, ou lire le manuel pour les instructions de mise � jour.";
$GLOBALS['strTableWrongType']			= "Le type de table que vous avez s�lectionn� n'est pas support� par votre installation de ".$phpAds_dbmsname;
$GLOBALS['strMayNotFunction']			= "Avant de continuer, merci de corriger ce probl�me potentiel::";
$GLOBALS['strIgnoreWarnings']			= "Ignorer les avertissement";
$GLOBALS['strWarningPHPversion']		= $phpAds_productname." requiert  PHP 4.0 (ou plus) pour fonctionner correctement. Vous utilisez actuellement {php_version}.";
$GLOBALS['strWarningDBavailable']               = "La version de PHP que vous utilisez n'a pas le support n�cessaire pour se connecter � une base de donn�es ".$phpAds_dbmsname.". Vous devez activer l'extension ".$phpAds_dbmsname." dans PHP avant de pouvoir continuer.";
$GLOBALS['strWarningRegisterGlobals']		= "La variable de configuration globale PHP <i>register_globals</i> doit �tre activ�e.";
$GLOBALS['strWarningMagicQuotesGPC']		= "La variable de configuration globale PHP <i>magic_quotes_gpc</i> doit �tre activ�e.";
$GLOBALS['strWarningMagicQuotesRuntime']  	= "La variable de configuration globale PHP <i>magic_quotes_runtime</i> doit �tre d�sactiv�e.";
$GLOBALS['strWarningFileUploads']		= "La variable de configuration globale PHP <i>file_uploads</i> doit �tre activ�e.";
$GLOBALS['strWarningTrackVars']			= "La variable de configuration globale PHP <i>track_vars</i> doit �tre activ�e.";
$GLOBALS['strWarningPREG']			= "La version de PHP que vous utilisez n'a pas le support pour l'utilisation des PCRE (Expression r�guli�res compatibles Perl). Vous devez activer l'extension PCRE avant de pouvoir continuer.";
$GLOBALS['strConfigLockedDetected']		= $phpAds_productname." a d�tect� que votre fichier <b>config.inc.php</b> n'est pas inscriptible par le serveur.<br> Vous ne pouvez pas continuez tant que vous ne changerez pas les permissions d'�criture sur ce fichier. <br>Veuillez lire la documentation fournie si vous ne savez pas comment le faire.";
$GLOBALS['strCantUpdateDB']  			= "Il n'est actuellement pas possible de mettre � jour la base de donn�es. Si vous d�cidez de continuer, toutes les banni�res existantes, les statistiques, et les annonceures seront supprim�s.";
$GLOBALS['strTableNames']			= "Nom de la base";
$GLOBALS['strTablesPrefix']			= "Pr�fixe des noms des tables";
$GLOBALS['strTablesType']			= "Type de table";

$GLOBALS['strInstallWelcome']			= "Bienvenue sur ".$phpAds_productname;
$GLOBALS['strInstallMessage']			= "Avant de pouvoir utiliser ".$phpAds_productname.", il est n�cessaire de le configurer et la base de donn�es doit �tre cr�e. Cliquez sur <b>Continuer</b> pour poursuivre.";
$GLOBALS['strInstallSuccess']			= "<b>L'installation de ".$phpAds_productname." est maintenant compl�te.</b><br><br>Afin que ".$phpAds_productname." fonctionne correctement, vous devez aussi faire en sorte que le fichier de
						   maintenance est ex�cut� chaque heure. Vous trouverez plus d'informations � ce sujet dans la documentation.
						   <br><br>Cliquez sur <b>Continuer</b> pour aller � la page de configuration, o� vous pourrez
						   param�trer un peu plus ".$phpAds_productname.". Veuillez � ne pas oublier de prot�ger en �criture config.inc.php lorsque vous aurez fini, afin de refermer des failles potentielles de s�curit�.";

$GLOBALS['strUpdateSuccess']			= "<b>La mise � niveau de ".$phpAds_productname." est r�ussie.</b><br><br>Afin que ".$phpAds_productname." fonctionne correctement, vous devez aussi faire en sorte que le fichier de
						   maintenance est ex�cut� chaque heure (pr�c�demment c'�tait chaque jour). Vous trouverez plus d'informations � ce sujet dans la documentation.
						   <br><br>Cliquez sur <b>Continuer</b> pour aller � la page de configuration, o� vous pourrez
						   param�trer un peu plus ".$phpAds_productname.". Veuillez � ne pas oublier de prot�ger en �criture config.inc.php lorsque vous aurez fini, afin de refermer des failles potentielles de s�curit�.";
$GLOBALS['strInstallNotSuccessful']		= "<b>L'installation de ".$phpAds_productname." a �chou�e</b><br><br>Certaines partie du processus d'installation n'ont pas pu �tre r�alis�es.
						   Il est possible que ces probl�mes ne soient que temporaires; dans ce cas vous pouvez simplement cliquer sur <b>Continuer</b> et retourner
						   � la premi�re �tape du processus d'installation. Si vous voulez en savoir plus sur la signification du message d'erreur ci-dessous, et comment r�soudre le probl�me,
						   veuillez consulter la documentation fournie.";
$GLOBALS['strErrorOccured']			= "L'erreur suivante est survenue:";
$GLOBALS['strErrorInstallDatabase']		= "La structure de la base de donn�es n'a pas pu �tre cr�e.";
$GLOBALS['strErrorInstallConfig']		= "Le fichier de configuration, ou la base de donn�es n'a pas pu �tre mis � jour.";
$GLOBALS['strErrorInstallDbConnect']		= "Il n'a pas �t� possible d'ouvrir une connexion avec la base donn�es.";

$GLOBALS['strUrlPrefix']			= "Pr�fixe d'Url";

$GLOBALS['strProceed']				= "Continuer &gt;";
$GLOBALS['strRepeatPassword']			= "R�p�ter le mot de passe";
$GLOBALS['strNotSamePasswords']			= "Les mots de passe ne correspondent pas";
$GLOBALS['strInvalidUserPwd']			= "Nom d'utilisateur, ou mot de passe invalide";

$GLOBALS['strUpgrade']				= "Mise � niveau";
$GLOBALS['strSystemUpToDate']			= "Votre syst�me est d�j� � jour, et aucune mise � niveau n'est n�cessaire pour le moment. <br>Cliquez sur <b>Continuer</b> pour aller � la page d'accueil.";
$GLOBALS['strSystemNeedsUpgrade']               = "La structure de la base de donn�es et le fichier de configuration doivent �tre mis � jour pour fonctionner correctement. Cliquez sur <b>Continuer</b> pour commencer le processus de mise � jour. <br><br>Suivant la version � laquelle vous �tes, et la quantit� de statistiques pr�sentes dans la base, cette op�ration peut provoquer une grande charge sur le serveur SQL. Merci d'�tre patient. Cette mise � jour peut prendre jusqu'� plusieurs minutes.";
$GLOBALS['strSystemUpgradeBusy']		= "Mise � jour du syst�me en cours, merci de patienter...";
$GLOBALS['strSystemRebuildingCache']		= "Reconstruction du cache, merci de patienter...";
$GLOBALS['strServiceUnavalable']		= "Le service est temporairement indisponible. Mise � jour du syst�me en cours";

$GLOBALS['strConfigNotWritable']		= "Votre fichier config.inc.php n'est pas inscriptible";





/*********************************************************/
/* Configuration translations                            */
/*********************************************************/

// Global
$GLOBALS['strChooseSection']			= "Choisissez une section";
$GLOBALS['strDayFullNames'] 			= array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
$GLOBALS['strEditConfigNotPossible']		= "Il n'est pas possible d'�diter ces r�glages, car le fichier de configuration est bloqu� pour des raisons de s�curit�. ".
						  "Si vous voulez faire des changements, vous devez d'abord d�bloquer le fichier config.inc.php.";
$GLOBALS['strEditConfigPossible']		= "Il est possible d'�diter tous les param�tres, car le fichier de configuration n'est pas bloqu�, mais cela peut entra�ner des failles de s�curit�. ".
						  "Si vous voulez s�curiser votre syst�me, vous devez bloquer le fichier config.inc.php.";



// Database
$GLOBALS['strDatabaseSettings']			= "Param�tres de la base de donn�es";
$GLOBALS['strDatabaseServer']			= "Serveur base de donn�es";
$GLOBALS['strDbLocal']				= "Se connecter au serveur local en utilisant les sockets"; // Pg only
$GLOBALS['strDbHost']				= "Adresse serveur";
$GLOBALS['strDbPort']				= "Num�ro de port du serveur de la base de donn�es";
$GLOBALS['strDbUser']				= "Nom d'utilisateur";
$GLOBALS['strDbPassword']			= "Mot de passe";
$GLOBALS['strDbName']				= "Nom de la base";

$GLOBALS['strDatabaseOptimalisations']		= "Options de la base de donn�es";
$GLOBALS['strPersistentConnections']		= "Utiliser des connexions persistantes";
$GLOBALS['strInsertDelayed']			= "Utiliser des 'INSERT' retard�s";
$GLOBALS['strCompatibilityMode']		= "Utiliser le mode de compatibilit� base de donn�es";
$GLOBALS['strCantConnectToDb']			= "Impossible de se connecter � la base de donn�es";



// Invocation and Delivery
$GLOBALS['strInvocationAndDelivery']		= "Param�tres d'invocation et de distribution";

$GLOBALS['strAllowedInvocationTypes']		= "Types d'invocation autoris�s";
$GLOBALS['strAllowRemoteInvocation']		= "Autoriser l'invocation distante";
$GLOBALS['strAllowRemoteJavascript']		= "Autoriser l'invocation distante avec Javascript";
$GLOBALS['strAllowRemoteFrames']		= "Autoriser l'invocation distante avec Frames";
$GLOBALS['strAllowRemoteXMLRPC']		= "Autoriser l'invocation distante avec XML-RPC";
$GLOBALS['strAllowLocalmode']			= "Autoriser le mode local";
$GLOBALS['strAllowInterstitial']		= "Autoriser les interstitiels";
$GLOBALS['strAllowPopups']			= "Autoriser les popups";

$GLOBALS['strUseAcl']				= "Evaluer les limitations de distribution lors de la distribution";

$GLOBALS['strDeliverySettings']                 = "Param�tres de distribution";
$GLOBALS['strCacheType']			= "Type de cache de distribution";
$GLOBALS['strCacheFiles']			= "Fichiers";
$GLOBALS['strCacheDatabase']                    = "Base de donn�es";
$GLOBALS['strCacheShmop']			= "M�moire partag�e (shmop)";
$GLOBALS['strCacheSysvshm']			= "M�moire partag�e (sysvshm)";
$GLOBALS['strExperimental']			= "Experimental";
$GLOBALS['strKeywordRetrieval']			= "S�lection des banni�res par mots cl�s";
$GLOBALS['strBannerRetrieval']			= "M�thode de s�lection des banni�res";
$GLOBALS['strRetrieveRandom']			= "S�lection al�atoire des banni�res (par d�faut)";
$GLOBALS['strRetrieveNormalSeq']		= "S�lection s�quentielle normale des banni�res";
$GLOBALS['strWeightSeq']			= "S�lection bas�e sur le poids des banni�res";
$GLOBALS['strFullSeq']				= "S�lection s�quentielle totale des banni�res";
$GLOBALS['strUseConditionalKeys']		= "Autoriser l'utilisation d'op�rateurs logiques lors de la s�lection directe";
$GLOBALS['strUseMultipleKeys']			= "Autoriser les mots cl�s multiples lors de la s�lection directe";

$GLOBALS['strZonesSettings']			= "R�cup�ration des zones";
$GLOBALS['strZoneCache']			= "Cacher les zones; cela peut acc�l�rer ".$phpAds_productname." lorsque l'on utilise les zones";
$GLOBALS['strZoneCacheLimit']			= "D�lai entre les mises � jour du cache (en secondes)";
$GLOBALS['strZoneCacheLimitErr']		= "Le d�lai entre les mises � jour du cache DOIT �tre un entier positif";

$GLOBALS['strP3PSettings']			= "Politique de respect de la vie priv�e P3P";
$GLOBALS['strUseP3P']				= "Utiliser la politique P3P";
$GLOBALS['strP3PCompactPolicy']			= "Politique compacte P3P";
$GLOBALS['strP3PPolicyLocation']		= "Emplacement de la politique P3P";



// Banner Settings
$GLOBALS['strBannerSettings']			= "Param�tres des banni�res";

$GLOBALS['strAllowedBannerTypes']		= "Types de banni�res autoris�s";
$GLOBALS['strTypeSqlAllow']			= "Autoriser les banni�res locales (SQL)";
$GLOBALS['strTypeWebAllow']			= "Autoriser les banni�res locales (Serveur Web)";
$GLOBALS['strTypeUrlAllow']			= "Autoriser les banni�res externes";
$GLOBALS['strTypeHtmlAllow']			= "Autoriser les banni�res HTML";
$GLOBALS['strTypeTxtAllow']			= "Autoriser les publicit�s textuelles";

$GLOBALS['strTypeWebSettings']			= "Configuration des banni�res locales (Serveur Web)";
$GLOBALS['strTypeWebMode']			= "M�thode de stockage";
$GLOBALS['strTypeWebModeLocal']			= "R�pertoire local";
$GLOBALS['strTypeWebModeFtp']			= "Serveur FTP externe";
$GLOBALS['strTypeWebDir']			= "R�pertoire local";
$GLOBALS['strTypeWebFtp']			= "Server Web de banni�re en mode FTP";
$GLOBALS['strTypeWebUrl']			= "Url publique";
$GLOBALS['strTypeFTPHost']			= "Serveur FTP";
$GLOBALS['strTypeFTPDirectory']			= "R�pertoire sur le serveur";
$GLOBALS['strTypeFTPUsername']			= "Nom d'utilisateur";
$GLOBALS['strTypeFTPPassword']			= "Mot de passe";
$GLOBALS['strTypeFTPErrorDir']			= "Le r�pertoire sur le serveur FTP distant n'existe pas";
$GLOBALS['strTypeFTPErrorConnect']		= "Impossible de se connecter au serveur FTP distant, le nom d'utilisateur ou le mot de passe ne sont pas correct";
$GLOBALS['strTypeFTPErrorHost']			= "Le nom de machine du serveur FTP distant est incorrect";
$GLOBALS['strTypeDirError']			= "Le r�pertoire local n'existe pas";

$GLOBALS['strDefaultBanners']			= "Banni�re par d�faut";
$GLOBALS['strDefaultBannerUrl']			= "Url de l'image par d�faut";
$GLOBALS['strDefaultBannerTarget']		= "Url de destination par d�faut";

$GLOBALS['strTypeHtmlSettings']			= "Options des banni�res HTML";
$GLOBALS['strTypeHtmlAuto']			= "Automatiquement modifier les banni�re HTML, afin de forcer le comptage des clicks";
$GLOBALS['strTypeHtmlPhp']			= "Autoriser l'ex�cution des expressions PHP dans les banni�res HTML";


// Host information and Geotargeting
$GLOBALS['strHostAndGeo']			= "Informations sur la machine distante, et suivi g�ographique";

$GLOBALS['strRemoteHost']			= "Machine distante";
$GLOBALS['strReverseLookup']			= "Essaye de d�terminer le nom de machine du visiteur si celui-ci n'est pas donn� par le serveur";
$GLOBALS['strProxyLookup']			= "Essaye de d�terminer l'adresse IP r�elle du visiteur si il utilise un serveur proxy";

$GLOBALS['strGeotargeting']			= "D�termination de la position g�ographique";
$GLOBALS['strGeotrackingType']			= "Type de base de donn�es de suivi g�ographique";
$GLOBALS['strGeotrackingLocation']		= "Emplacement de la base de donn�es de suivi g�ographique";
$GLOBALS['strGeoStoreCookie']			= "Stocker le r�sultat du positionnement g�ographique dans un cookie pour s'y r�f�rencer plus tard";


// Statistics Settings
$GLOBALS['strStatisticsSettings']		= "Param�tres des statistiques";

$GLOBALS['strStatisticsFormat']			= "Format des statistiques";
$GLOBALS['strCompactStats']			= "Utiliser des statistiques compactes";
$GLOBALS['strLogAdviews']			= "Journaliser les affichages ";
$GLOBALS['strLogAdclicks']			= "Journaliser les clics";
$GLOBALS['strLogSource']			= "Journaliser le param�tre 'source' sp�cifi� lors de l'invocation";
$GLOBALS['strGeoLogStats']			= "Journaliser le pays d'origine du visiteur dans les statistiques";
$GLOBALS['strLogHostnameOrIP']			= "Journaliser le nom de machine, ou l'adresse IP du visiteur";
$GLOBALS['strLogIPOnly']			= "Journaliser uniquement l'adresse IP du visteur, m�me si le nom de sa machine est connu";
$GLOBALS['strLogIP']				= "Journaliser l'adresse IP du visiteur";
$GLOBALS['strLogBeacon']			= "Utiliser des balises invisibles pour compter les affichages (plus pr�cis, recommand�)";

$GLOBALS['strRemoteHosts']			= "Machines distantes";
$GLOBALS['strIgnoreHosts']			= "Ne pas compter les statistiques des visiteurs utilisant l'une des adresse IP ou nom de machine suivante:";
$GLOBALS['strBlockAdviews']			= "Protection contre les entr�es multiples dans le journal (sec.)";
$GLOBALS['strBlockAdclicks']			= "Protection contre les entr�es multiples dans le journal (sec.)";


$GLOBALS['strEmailWarnings']			= "Avertissements par Email";
$GLOBALS['strAdminEmailHeaders']		= "En-t�tes Mail utilis�es lors de l'envoi d'un avertissement";
$GLOBALS['strWarnLimit']			= "Limite d'avertissement";
$GLOBALS['strWarnLimitErr']			= "La limite d'avertissement DOIT �tre un entier positif";
$GLOBALS['strWarnAdmin']			= "Avertir l'administrateur";
$GLOBALS['strWarnClient']			= "Avertir l'annonceur";
$GLOBALS['strQmailPatch']			= "Utiliser le patch qmail";

$GLOBALS['strAutoCleanTables']			= "Purger automatiquement la base de donn�es";
$GLOBALS['strAutoCleanStats']			= "Purger automatiquement les statistiques";
$GLOBALS['strAutoCleanUserlog']			= "Purger le journal utilisateur";
$GLOBALS['strAutoCleanStatsWeeks']		= "Age maximum des statistiques <br>(en semaines, au minimum 3)";
$GLOBALS['strAutoCleanUserlogWeeks']		= "Age maximum des journaux utilisateurs <br>(en semaines, au minimum 3)";
$GLOBALS['strAutoCleanErr']			= "L'age maximal doit �tre au moins de 3 semaines";
$GLOBALS['strAutoCleanVacuum']			= "VACUUM ANALYZE (analyse vapeur) des tables chaque nuit"; // only Pg


// Administrator settings
$GLOBALS['strAdministratorSettings']		= "Param�tres administrateur";

$GLOBALS['strLoginCredentials']			= "Accr�ditations de connexion";
$GLOBALS['strAdminUsername']			= "Nom d'utilisateur de l'administrateur";
$GLOBALS['strOldPassword']			= "Ancien mot de passe";
$GLOBALS['strNewPassword']			= "Nouveau mot de passe";
$GLOBALS['strInvalidUsername']			= "Nom d'utilisateur invalide";
$GLOBALS['strInvalidPassword']			= "Mot de passe invalide";

$GLOBALS['strBasicInformation']			= "Informations de base";
$GLOBALS['strAdminFullName']			= "Nom complet de l'administrateur";
$GLOBALS['strAdminEmail']			= "Adresse mail de l'administrateur";
$GLOBALS['strCompanyName']			= "Nom de l'organisation";

$GLOBALS['strAdminCheckUpdates']		= "V�rifier l'existence de mises � jour";
$GLOBALS['strAdminCheckEveryLogin']		= "A chaque connexion";
$GLOBALS['strAdminCheckDaily']			= "Chaque jour";
$GLOBALS['strAdminCheckWeekly']			= "Chaque semaine";
$GLOBALS['strAdminCheckMonthly']		= "Chaque mois";
$GLOBALS['strAdminCheckNever']			= "Jamais";

$GLOBALS['strAdminNovice']			= "Les actions de suppression par l'administrateur n�cessitent des confirmation par s�curit�";
$GLOBALS['strUserlogEmail']			= "Journaliser tous les messages mail sortants";
$GLOBALS['strUserlogPriority']			= "Journaliser chaque heure les calculs de priorit�";
$GLOBALS['strUserlogAutoClean']			= "Journaliser les nettoyages automatiques de la base de donn�es";


// User interface settings
$GLOBALS['strGuiSettings']			= "Configuration de l'interface utilisateur";

$GLOBALS['strGeneralSettings']			= "Param�tres g�n�raux";
$GLOBALS['strAppName']				= "Nom de l'application";
$GLOBALS['strMyHeader']				= "Mon en-t�te";
$GLOBALS['strMyFooter']				= "Mon pied de page";
$GLOBALS['strGzipContentCompression']		= "Utiliser la compression GZIP du contenu";

$GLOBALS['strClientInterface']			= "Interface de l'annonceur";
$GLOBALS['strClientWelcomeEnabled']		= "Montrer � l'annonceur un message de bienvenue";
$GLOBALS['strClientWelcomeText']		= "Message de bienvenue<br>(HTML autoris�)";



// Interface defaults
$GLOBALS['strInterfaceDefaults']		= "Valeurs par d�faut de l'interface";

$GLOBALS['strInventory']			= "Administration";
$GLOBALS['strShowCampaignInfo']			= "Montrer les infos suppl�mentaires de la campagne sur la page <i>Aper�u de la campagne</i>";
$GLOBALS['strShowBannerInfo']			= "Montrer les infos suppl�mentaires de la banni�re sur la page <i>Aper�u de la banni�re</i>";
$GLOBALS['strShowCampaignPreview']		= "Montrer un aper�u de toutes les banni�res sur la page <i>Aper�u des banni�res</i>";
$GLOBALS['strShowBannerHTML']			= "Montrer la banni�re actuelle, plut�t que du code HTML brut pour l'aper�u des banni�res HTML";
$GLOBALS['strShowBannerPreview']		= "Montrer l'aper�u de la banni�re au sommet des pages qui concernent les banni�res";
$GLOBALS['strHideInactive']			= "Cacher les �l�ments inactifs dans toutes les pages d'aper�us";
$GLOBALS['strGUIShowMatchingBanners']		= "Montrer les banni�res correspondantes sur les pages <i>Banni�res li�es</i>";
$GLOBALS['strGUIShowParentCampaigns']		= "Montrer les campagnes parentes sur les pages <i>Banni�res li�es</i>";
$GLOBALS['strGUILinkCompactLimit']		= "Cacher les banni�res et les campagnes non li�es sur les pages <i>Banni�res li�es</i> quand il y a plus de";

$GLOBALS['strStatisticsDefaults'] 		= "Statistiques";
$GLOBALS['strBeginOfWeek']			= "Premier jour de la semaine";
$GLOBALS['strPercentageDecimals']		= "Nombre de d�cimales des pourcentages";

$GLOBALS['strWeightDefaults']			= "Poids par d�faut";
$GLOBALS['strDefaultBannerWeight']		= "Poids par d�faut des banni�res";
$GLOBALS['strDefaultCampaignWeight']		= "Poids par d�faut des campagnes";
$GLOBALS['strDefaultBannerWErr']		= "Le poids par d�faut des banni�res DOIT �tre un entier positif";
$GLOBALS['strDefaultCampaignWErr']		= "Le poids par d�faut des campagnes DOIT �tre un entier positif";



// Not used at the moment
$GLOBALS['strTableBorderColor']			= "Couleur de la bordure de la table";
$GLOBALS['strTableBackColor']			= "Couleur d'arri�re-plan de la table";
$GLOBALS['strTableBackColorAlt']		= "Couleur d'arri�re-plan de la table (Alternatif)";
$GLOBALS['strMainBackColor']			= "Couleur principale d'arri�re-plan";
$GLOBALS['strOverrideGD']			= "Outrepasser le format d'Image GD";
$GLOBALS['strTimeZone']				= "Fuseau horaire";

?>