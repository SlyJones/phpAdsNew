<?php // $Revision: 1.7 $

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


// Set translation strings
$GLOBALS['strHome'] = "Accueil";
$GLOBALS['date_format'] = "%d/%m/%Y";
$GLOBALS['time_format'] = "%H:%i:%S";
$GLOBALS['strMySQLError'] = "Erreur MySQL:";
$GLOBALS['strAdminstration'] = "Administration";
$GLOBALS['strAddClient'] = "Ajouter un nouveau client";
$GLOBALS['strModifyClient'] = "Modifier client";
$GLOBALS['strDeleteClient'] = "Supprimer client";
$GLOBALS['strViewClientStats'] = "Voir les statistiques du client";
$GLOBALS['strClientName'] = "Client";
$GLOBALS['strContact'] = "Contact";
$GLOBALS['strEMail'] = "EMail";
$GLOBALS['strViews'] = "Affichages";
$GLOBALS['strClicks'] = "Clics";
$GLOBALS['strTotalViews'] = "Total des affichages";
$GLOBALS['strTotalClicks'] = "Total des clics";
$GLOBALS['strCTR'] = "Pourcentage de clics";
$GLOBALS['strTotalClients'] = "Total clients";
$GLOBALS['strActiveClients'] = "Clients actifs";
$GLOBALS['strActiveBanners'] = "Bandeaux actifs";
$GLOBALS['strLogout'] = "Se d�connecter";
$GLOBALS['strCreditStats'] = "Statistiques des cr�dits";
$GLOBALS['strViewCredits'] = "Cr�dits d'affichages";
$GLOBALS['strClickCredits'] = "Cr�dits de clics";
$GLOBALS['strPrevious'] = "Pr�c�dent";
$GLOBALS['strNext'] = "Suivant";
$GLOBALS['strNone'] = "Aucun";
$GLOBALS['strViewsPurchased'] = "Nb d'affichages maximal";
$GLOBALS['strClicksPurchased'] = "Nb de clics maximal";
$GLOBALS['strDaysPurchased'] = "Nb de jours d'affichage";
$GLOBALS['strHTML'] = "HTML";
$GLOBALS['strAddSep'] = "Remplissez SOIT les champs ci-dessus SOIT ceux ci-dessous !";
$GLOBALS['strTextBelow'] = "Texte sous le bandeau";
$GLOBALS['strSubmit'] = "Valider la publicit�";
$GLOBALS['strUsername'] = "Nom d'utilisateur";
$GLOBALS['strPassword'] = "Mot de passe";
$GLOBALS['strBannerAdmin'] = "Administration de bandeaux pour";
$GLOBALS['strNoBanners'] = "Pas de bandeaux trouv�s";
$GLOBALS['strBanner'] = "Bandeau";
$GLOBALS['strCurrentBanner'] = "Bandeau courant";
$GLOBALS['strDelete'] = "Supprimer";
$GLOBALS['strAddBanner'] = "Ajouter un nouveau bandeau";
$GLOBALS['strModifyBanner'] = "Modifier ce bandeau";
$GLOBALS['strModifyBannerAcl'] = "Modifier les contr�les d'acc�s du bandeau";
$GLOBALS['strURL'] = "Li� � l'URL (avec http://)";
$GLOBALS['strKeyword'] = "Mot cl�";
$GLOBALS['strWeight'] = "Poids";
$GLOBALS['strAlt'] = "Alt-Texte";
$GLOBALS['strUsername'] = "Nom d'utilisateur";
$GLOBALS['strPassword'] = "Mot de passe";
$GLOBALS['strAccessDenied'] = "Acc�s interdit";
$GLOBALS['strPasswordWrong'] = "Le mot de passe est incorrect";
$GLOBALS['strNotAdmin'] = "Cette op�ration n'est pas autoris�e";
$GLOBALS['strClientAdded'] = "Le client a �t� ajout�.";
$GLOBALS['strClientModified'] = "Le client a �t� modifi�.";
$GLOBALS['strClientDeleted'] = "Le client a �t� supprim�.";
$GLOBALS['strBannerAdmin'] = "Administration de bandeaux";
$GLOBALS['strBannerAdded'] = "Le bandeau a �t� ajout�.";
$GLOBALS['strBannerModified'] = "Le bandeau a �t� modifi�.";
$GLOBALS['strBannerDeleted'] = "Le bandeau a �t� supprim�.";
$GLOBALS['strBannerChanged'] = "Le bandeau a �t� chang�.";
$GLOBALS['strStats'] = "Statistiques";
$GLOBALS['strDailyStats'] = "Statistiques journali�res";
$GLOBALS['strDetailStats'] = "Statistiques d�taill�es";
$GLOBALS['strCreditStats'] = "Statistiques des cr�dits";
$GLOBALS['strActive'] = "actif";
$GLOBALS['strActivate'] = "Activer";
$GLOBALS['strDeActivate'] = "D�sactiver";
$GLOBALS['strAuthentification'] = "Authentification";
$GLOBALS['strGo'] = "Aller";
$GLOBALS['strLinkedTo'] = "li� �";
$GLOBALS['strBannerID'] = "ID Bandeau";
$GLOBALS['strClientID'] = "ID Client";
$GLOBALS['strMailSubject'] = "Bilan publicitaire";
$GLOBALS['strMailSubjectDeleted'] = "Publicit�s d�sactiv�es";
$GLOBALS['strMailHeader'] = "Cher {contact},\n";
$GLOBALS['strMailBannerStats'] = "vous trouverez ci-dessous les statistiques des bandeaux publicitaires pour {clientname}:";
$GLOBALS['strMailFooter'] = "Cordialement,\n   {adminfullname}";
$GLOBALS['strLogMailSent'] = "[phpAds] Statistiques envoy�es avec succ�s.";
$GLOBALS['strLogErrorClients'] = "[phpAds] Une erreur a eu lieu en tentant de r�cup�rer les clients de la base de donn�es.";
$GLOBALS['strLogErrorBanners'] = "[phpAds] Une erreur a eu lieu en tentant de r�cup�rer les bandeaux de la base de donn�es.";
$GLOBALS['strLogErrorViews'] = "[phpAds] Une erreur a eu lieu en tentant de r�cup�rer les nombres d'affichages de la base de donn�es.";
$GLOBALS['strLogErrorClicks'] = "[phpAds] Une erreur a eu lieu en tentant de r�cup�rer les affichages/clics de la base de donn�es.";
$GLOBALS['strLogErrorDisactivate'] = "[phpAds] Une erreur a eu lieu en tentant de d�sactiver un bandeau.";
$GLOBALS['strRatio'] = "Pourcentage de clics";
$GLOBALS['strChooseBanner'] = "Veuillez choisir le type de bandeau.";
$GLOBALS['strMySQLBanner'] = "Bandeau stock� dans MySQL";
$GLOBALS['strWebBanner'] = "Bandeau stock� sur le Serveur Web";
$GLOBALS['strURLBanner'] = "Bandeau r�cup�r� par une URL";
$GLOBALS['strHTMLBanner'] = "Bandeau HTML";
$GLOBALS['strNewBannerFile'] = "Fichier du bandeau";
$GLOBALS['strNewBannerURL'] = "URL du bandeau (avec http://)";
$GLOBALS['strWidth'] = "Largeur";
$GLOBALS['strHeight'] = "Hauteur";
$GLOBALS['strTotalViews7Days'] = "Total des affichages pour les 7 derniers jours";
$GLOBALS['strTotalClicks7Days'] = "Total des clics pour les 7 derniers jours";
$GLOBALS['strAvgViews7Days'] = "Nombre moyen d'affichages pour les 7 derniers jours";
$GLOBALS['strAvgClicks7Days'] = "Nombre moyen de clics pour les 7 derniers jours";
$GLOBALS['strTopTenHosts'] = "Top 10 des machines clientes";
$GLOBALS['strClientIP'] = "IP du client";
$GLOBALS['strUserAgent'] = "Expression rationnelle du navigateur";
$GLOBALS['strWeekDay'] = "Jour de la semaine (0 - 6)";
$GLOBALS['strDomain'] = "Domaine (sans le point)";
$GLOBALS['strSource'] = "Source";
$GLOBALS['strTime'] = "Horaire";
$GLOBALS['strAllow'] = "Permettre";
$GLOBALS['strDeny'] = "Refuser";
$GLOBALS['strResetStats'] = "R�initialiser les statistiques";
$GLOBALS['strExpiration'] = "Expiration";
$GLOBALS['strNoExpiration'] = "Pas de date d'expiration";
$GLOBALS['strDaysLeft'] = "Jours restants";
$GLOBALS['strEstimated'] = "Date d'expiration estim�e";
$GLOBALS['strConfirm'] = "Etes vous s�r ?";
$GLOBALS['strBannerNoStats'] = "Pas de statistiques pour ce bandeau !";
$GLOBALS['strWeek'] = "Semaine";
$GLOBALS['strWeeklyStats'] = "Statistiques hebdomadaires";
$GLOBALS['strWeekDay'] = "Jour de la semaine";
$GLOBALS['strDate'] = "Date";
$GLOBALS['strCTRShort'] = "% clics";
$GLOBALS['strDayShortCuts'] = array("Di","Lu","Ma","Me","Je","Ve","Sa");
$GLOBALS['strShowWeeks'] = "Nb max de semaines � afficher";
$GLOBALS['strAll'] = "tout";
$GLOBALS['strAvg'] = "Moy.";
$GLOBALS['strHourly'] = "Vues/Clics par heure";
$GLOBALS['strTotal'] = "Total";
$GLOBALS['strUnlimited'] = "Illimit�";
$GLOBALS['strSave'] = "Enregistrer";
$GLOBALS['strUp'] = "Haut";
$GLOBALS['strDown'] = "Bas";
$GLOBALS['strSaved'] = "enregistr�!";
$GLOBALS['strDeleted'] = "effac�!";  
$GLOBALS['strMovedUp'] = "remont�!";
$GLOBALS['strMovedDown'] = "descendu";
$GLOBALS['strUpdated'] = "mis � jour";
$GLOBALS['strLogin'] = "Login";
$GLOBALS['strPreferences'] = "Pr�f�rences";
$GLOBALS['strAllowClientModifyInfo'] = "Permettre � cet utilisateur de modifier ses propres param�tres";
$GLOBALS['strAllowClientModifyBanner'] = "Permettre � cet utilisateur de modifier ses banni�res";
$GLOBALS['strAllowClientAddBanner'] = "Permettre � cet utilisateur d'ajouter des banni�res";
$GLOBALS['strLanguage'] = "Langue";
$GLOBALS['strDefault'] = "Par d�faut";
$GLOBALS['strErrorViews'] = "Vous devez indiquer le nombre d'affichages ou cocher la case 'illimit�' !";
$GLOBALS['strErrorNegViews'] = "Nombre d'affichage n�gatif non autoris�";
$GLOBALS['strErrorClicks'] =  "Vous devez indiquer le nombre de clics ou cocher la case 'illimit�' !";
$GLOBALS['strErrorNegClicks'] = "Nombre de clics n�gatif non autoris�";
$GLOBALS['strErrorDays'] = "Vous devez indiquer le nombre de jours de la campagne ou cocher la case 'illimit�' !";
$GLOBALS['strErrorNegDays'] = "Nombre de jours n�gatif non autoris�";
$GLOBALS['strTrackerImage'] = "Image traceur:";

// New strings for version 2
$GLOBALS['strNavigation'] 				= "Navigation";
$GLOBALS['strShortcuts'] 				= "Raccourcis";
$GLOBALS['strDescription'] 				= "Description";
$GLOBALS['strClients'] 					= "Clients";
$GLOBALS['strID']				 		= "Identifiant";
$GLOBALS['strOverall'] 					= "G�n�ral";
$GLOBALS['strTotalBanners'] 			= "Total bandeaux";
$GLOBALS['strToday'] 					= "Aujourd'hui";
$GLOBALS['strThisWeek'] 				= "Cette semaine";
$GLOBALS['strThisMonth'] 				= "Ce mois";
$GLOBALS['strBasicInformation'] 		= "Informations g�n�rales";
$GLOBALS['strContractInformation'] 		= "Informations contractuelles";
$GLOBALS['strLoginInformation'] 		= "Informations de connexion";
$GLOBALS['strPermissions'] 				= "Autorisations";
$GLOBALS['strGeneralSettings']			= "Param�tres g�n�raux";
$GLOBALS['strSaveChanges']		 		= "Enregistrer les modifications";
$GLOBALS['strCompact']					= "R�sum�";
$GLOBALS['strVerbose']					= "Complet";
$GLOBALS['strOrderBy']					= "tri�s par";
$GLOBALS['strShowAllBanners']	 		= "Afficher tous les bandeaux";
$GLOBALS['strShowBannersNoAdClicks']	= "Afficher les bandeaux sans clics";
$GLOBALS['strShowBannersNoAdViews']		= "Afficher les bandeaux non vus";
$GLOBALS['strShowAllClients'] 			= "Afficher tous les clients";
$GLOBALS['strShowClientsActive'] 		= "Afficher les clients actifs";
$GLOBALS['strShowClientsInactive']		= "Afficher les clients inactifs";
$GLOBALS['strSize']						= "Taille";

$GLOBALS['strMonth'] 					= array("Janvier","F�vrier","Mars","Avril","Mai","Juin","Juillet", "Ao�t", "Septembre", "Octobre", "Novembre", "Decembre");
$GLOBALS['strDontExpire']				= "Ne pas d�sactiver ce client selon la date";
$GLOBALS['strActivateNow'] 				= "Activer ce client imm�diatement";
$GLOBALS['strExpirationDate']			= "Date d'expiration";
$GLOBALS['strActivationDate']			= "Date d'activation";

$GLOBALS['strMailClientDeactivated'] 	= "Vos bandeaux sont d�sactiv�s car";
$GLOBALS['strMailNothingLeft'] 			= "\nSi vous souhaitez prolonger votre pr�sence sur notre site, nous vous remercions de bien vouloir nous contacter.";
$GLOBALS['strClientDeactivated']		= "Ce client n'est pas actif actuellement car";
$GLOBALS['strBeforeActivate']			= "la date de d�but de la campagne n'est pas encore atteinte";
$GLOBALS['strAfterExpire']				= "la date de fin de la campagne a �t� atteinte";
$GLOBALS['strNoMoreClicks']				= "le nombre de clics maximal souhait� a �t� atteint";
$GLOBALS['strNoMoreViews']				= "le nombre d'affichages maximal souhait� a �t� atteint";

$GLOBALS['strBanners'] 					= "Bandeau";
$GLOBALS['strCampaigns']				= "Campagnes";
$GLOBALS['strCampaign']					= "Campagne";
$GLOBALS['strName']						= "Nom";
$GLOBALS['strBannersWithoutCampaign']	= "Bandeau sans campagne";
$GLOBALS['strMoveToNewCampaign']		= "D�placer vers une nouvelle campagne";
$GLOBALS['strCreateNewCampaign']		= "Cr�er une nouvelle campagne";
$GLOBALS['strEditCampaign']				= "Editer la campagne";
$GLOBALS['strEdit']						= "Editer";
$GLOBALS['strCreate']					= "Cr�er";
$GLOBALS['strUntitled']					= "Sans-Nom";

$GLOBALS['strTotalCampaigns'] 			= "Total campagnes";
$GLOBALS['strActiveCampaigns'] 			= "Campagnes Actives";

$GLOBALS['strLinkedTo']					= "li� �";
$GLOBALS['strSendAdvertisingReport']	= "Envoyer un rapport publicitaire par e-mail";
$GLOBALS['strNoDaysBetweenReports']		= "Nombre de jours entre les rapports";
$GLOBALS['strSendDeactivationWarning']  = "Envoyer un avertissement quand la campagne est d�sactiv�e";

$GLOBALS['strWarnClientTxt']			= "Le nombre de Clic ou Visualisation est en train de passer sous {limit} pour vos banni�res. ";
$GLOBALS['strViewsClicksLow']			= "Vues/clics sont bas";

$GLOBALS['strDays']						= "Jours";
$GLOBALS['strHistory']					= "Historique";
$GLOBALS['strAverage']					= "Moyenne";
$GLOBALS['strDuplicateClientName']		= "Le nom d'utilisateur saisi existe d�j�, merci d'en choisir un nouveau.";
$GLOBALS['strAllowClientDisableBanner'] = "Autoriser cette utilisateur � d�sactiver ces propres bandeaux";
$GLOBALS['strAllowClientActivateBanner'] = "Autoriser cette utilisateur � activer ces propres bandeaux";

$GLOBALS['strGenerateBannercode']		= "G�nerer le Code Bandeau";
$GLOBALS['strChooseInvocationType']		= "Merci de choisir le type d'appel du bandeau";
$GLOBALS['strGenerate']					= "G�n�rer";
$GLOBALS['strParameters']				= "Param�tres";
$GLOBALS['strUniqueidentifier']			= "Identifiant Unique";
$GLOBALS['strFrameSize']				= "Taille Frame";
$GLOBALS['strBannercode']				= "Code Bandeau";

$GLOBALS['strSearch']					= "Recherche";
$GLOBALS['strNoMatchesFound']			= "Pas de r�ponse";

$GLOBALS['strNoViewLoggedInInterval']   = "Pas de visualisations logg�es pendant le temps du rapport";
$GLOBALS['strNoClickLoggedInInterval']  = "Pas de clics logg�s pendant le temps du rapport";
$GLOBALS['strMailReportPeriod']			= "Ce rapport inclut toutes les statistiques du {startdate} jusqu'au {enddate}.";
$GLOBALS['strMailReportPeriodAll']		= "Ce rapport inclut toutes les statistiques jusqu'au {enddate}.";
$GLOBALS['strNoStatsForCampaign'] 		= "Il n'y a pas de statistiques disponibles pour cette campagne";
$GLOBALS['strFrom']						= "Du";
$GLOBALS['strTo']						= "A";
$GLOBALS['strMaintenance']				= "Maintenance";
$GLOBALS['strCampaignStats']			= "Statistiques Campagne";
$GLOBALS['strClientStats']				= "Statistiques Client";
$GLOBALS['strErrorOccurred']			= "Une erreur est survenue";
$GLOBALS['strAdReportSent']				= "Rapport envoy�";

$GLOBALS['strAutoChangeHTML']			= "Changer HTML pour logger les Clics";

$GLOBALS['strZones']					= "Zones";
$GLOBALS['strAddZone']					= "Cr�er une zone";
$GLOBALS['strModifyZone']				= "Modifier une zone";
$GLOBALS['strAddNewZone']				= "Ajouter une nouvelle zone";

$GLOBALS['strOverview']					= "Aper�u";
$GLOBALS['strEqualTo']					= "est �gal �";
$GLOBALS['strDifferentFrom']			= "est diff�rent de ";
$GLOBALS['strAND']						= "ET";  // logical operator
$GLOBALS['strOR']						= "OU"; // logical operator
$GLOBALS['strOnlyDisplayWhen']			= "Afficher uniquement ce bandeau quand :";

$GLOBALS['strStatusText']				= "Texte de statut";

$GLOBALS['strConfirmDeleteClient']		= "Voulez-vous vraiment supprimer ce client ?";
$GLOBALS['strConfirmDeleteCampaign']	= "Voulez vous vraiment effacer cette campagne ?";
$GLOBALS['strConfirmDeleteBanner']		= "Voulez vous vraiment effacer ce bandeau ?";
$GLOBALS['strConfirmResetStats']		= "Voulez vous vraiment r�initialiser toutes les stats ?";
$GLOBALS['strConfirmResetCampaignStats']= "Voulez vous vraiment r�initialiser les stats pour cette campagne ?";
$GLOBALS['strConfirmResetClientStats']	= "Voulez-vous r�ellement r�initialiser les stats de ce client ?";
$GLOBALS['strConfirmResetBannerStats']	= "Voulez vous vraiment r�initialiser les stats pour ce bandeau ?";

$GLOBALS['strClientsAndCampaigns']		= "Clients & Campagnes";
$GLOBALS['strCampaignOverview']			= "Aper�u Campagne";
$GLOBALS['strReports']					= "Rapports";
$GLOBALS['strShowBanner']				= "Voir la banni�re";

$GLOBALS['strIncludedBanners']			= "Bandeaux li�s";
$GLOBALS['strProbability']				= "Probabilit�";
$GLOBALS['strInvocationcode']			= "Code d'invocation";
$GLOBALS['strSelectZoneType']			= "Merci de choisir le type de bandeaux li�s";
$GLOBALS['strBannerSelection']			= "S�lection bandeau";
$GLOBALS['strInteractive']				= "Interactif";
$GLOBALS['strRawQueryString']			= "Chaine d'interrogation manuelle";

$GLOBALS['strBannerWeight']				= "Poids de la Banni�re";
$GLOBALS['strCampaignWeight']			= "Poids de la Campagne";

$GLOBALS['strZoneCacheOn']				= "Cache de Zone activ�";
$GLOBALS['strZoneCacheOff']				= "Cache de Zone d�sactiv�";
$GLOBALS['strCachedZones']				= "Zones dans le cache";
$GLOBALS['strSizeOfCache']				= "Taille du cache";
$GLOBALS['strAverageAge']				= "Age moyen";
$GLOBALS['strRebuildZoneCache']			= "Reconstruire le cache zone";
$GLOBALS['strKiloByte']					= "KB";
$GLOBALS['strSeconds']					= "secondes";
$GLOBALS['strExpired']					= "Expir�";

$GLOBALS['strModifyBannerAcl'] 			= "Afficher les limitations";
$GLOBALS['strACL'] 						= "Limite";
$GLOBALS['strNoMoveUp'] 				= "ne pas monter la premi�re ligne";
$GLOBALS['strACLAdd'] 					= "Ajouter une nouvelle limitation";
$GLOBALS['strNoLimitations']			= "Pas de limitations";

$GLOBALS['strLinkedZones']				= "Zones li�es";
$GLOBALS['strNoZonesToLink']			= "Il n'y a pas de zones disponibles auxquelles ce bandeau peut �tre attach�";
$GLOBALS['strNoZones']					= "There are currently no zones defined";
$GLOBALS['strNoClients']				= "There are currently no clients defined";
$GLOBALS['strNoStats']					= "There are currently no statistics available";

$GLOBALS['strCustom']					= "Personnalis�";

$GLOBALS['strSettings'] 				= "Settings";

$GLOBALS['strAffiliates']				= "Affiliates";
$GLOBALS['strAffiliatesAndZones']		= "Affiliates & Zones";
$GLOBALS['strAddAffiliate']				= "Create affiliate";
$GLOBALS['strModifyAffiliate']			= "Modify affiliate";
$GLOBALS['strAddNewAffiliate']			= "Add new affiliate";

$GLOBALS['strCheckAllNone']				= "Check all / none";

$GLOBALS['strAllowAffiliateModifyInfo'] = "Allow this user to modify his own affiliate information";
$GLOBALS['strAllowAffiliateModifyZones'] = "Allow this user to modify his own zones";
$GLOBALS['strAllowAffiliateLinkBanners'] = "Allow this user to link banners to his own zones";
$GLOBALS['strAllowAffiliateAddZone'] = "Allow this user to define new zones";
$GLOBALS['strAllowAffiliateDeleteZone'] = "Allow this user to delete existing zones";

$GLOBALS['strPriority']					= "Priority";
$GLOBALS['strHighPriority']				= "Show banners in this campaign with high priority.<br>
										   If you use this option phpAdsNew will try to distribute the 
										   number of AdViews evenly over the course of the day.";
$GLOBALS['strLowPriority']				= "Show banner in this campaign with low priority.<br>
										   This campaign is used to show the left over AdViews which 
										   aren't used by high priority campaigns.";
$GLOBALS['strTargetLimitAdviews']		= "Limit the number of AdViews to";
$GLOBALS['strTargetPerDay']				= "per day.";
$GLOBALS['strRecalculatePriority']		= "Recalculate priority";

$GLOBALS['strProperties']				= "Properties";
$GLOBALS['strAffiliateProperties']		= "Affiliate Properties";
$GLOBALS['strBannerOverview']			= "Banner Overview";
$GLOBALS['strBannerProperties']			= "Banner Properties";
$GLOBALS['strCampaignProperties']		= "Campaign Properties";
$GLOBALS['strClientProperties']			= "Client Properties";
$GLOBALS['strZoneOverview']				= "Zone Overview";
$GLOBALS['strZoneProperties']			= "Zone Properties";

$GLOBALS['strGlobalHistory']			= "Global History";

$GLOBALS['strMoveTo']					= "Move to";
$GLOBALS['strDuplicate']				= "Duplicate";

$GLOBALS['strMainSettings']				= "Main settings";
$GLOBALS['strAdminSettings']			= "Administration settings";

$GLOBALS['strApplyLimitationsTo']		= "Apply limitations to";
$GLOBALS['strWholeCampaign']			= "Whole campaign";
$GLOBALS['strZonesWithoutAffiliate']	= "Zones without affiliate";
$GLOBALS['strMoveToNewAffiliate']		= "Move to new affiliate";

$GLOBALS['strNoBannersToLink']			= "There are currently no banners available which can be linked to this zone";

$GLOBALS['strAdviewsLimit']				= "AdViews limit";

?>