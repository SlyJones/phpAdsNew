<?php // $Revision: 1.26 $

/************************************************************************/
/* phpAdsNew 2                                                          */
/* ===========                                                          */
/*                                                                      */
/* Copyright (c) 2001 by the phpAdsNew developers                       */
/* http://sourceforge.net/projects/phpadsnew                            */
/*                                                                      */
/*                                                                      */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/


// Set text direction and characterset
$GLOBALS['phpAds_TextDirection']  = "ltr";
$GLOBALS['phpAds_TextAlignRight'] = "right";
$GLOBALS['phpAds_TextAlignLeft']  = "left";


// Date & time configuration
$GLOBALS['date_format']    = "%m/%d/%Y";
$GLOBALS['time_format']    = "%H:%i:%S";
$GLOBALS['minute_format']  = "%H:%M";
$GLOBALS['month_format']   = "%m/%Y";
$GLOBALS['day_format']     = "%m/%d";
$GLOBALS['week_format']    = "%W/%Y";
$GLOBALS['weekiso_format'] = "%V/%G";


// Set translation strings
$GLOBALS['strHome'] = "Home";
$GLOBALS['strMySQLError'] = "SQL Error:";
$GLOBALS['strAdminstration'] = "Administration";
$GLOBALS['strAddClient'] = "Add new advertiser";
$GLOBALS['strModifyClient'] = "Modify advertiser";
$GLOBALS['strDeleteClient'] = "Delete advertiser";
$GLOBALS['strViewClientStats'] = "View advertisers statistics";
$GLOBALS['strClientName'] = "Advertiser";
$GLOBALS['strContact'] = "Contact";
$GLOBALS['strEMail'] = "E-mail";
$GLOBALS['strViews'] = "AdViews";
$GLOBALS['strClicks'] = "AdClicks";
$GLOBALS['strTotalViews'] = "Total AdViews";
$GLOBALS['strTotalClicks'] = "Total AdClicks";
$GLOBALS['strCTR'] = "Click-Through Ratio";
$GLOBALS['strTotalClients'] = "Total advertisers";
$GLOBALS['strActiveClients'] = "Active advertisers";
$GLOBALS['strActiveBanners'] = "Active banners";
$GLOBALS['strLogout'] = "Logout";
$GLOBALS['strCreditStats'] = "Credit Stats";
$GLOBALS['strViewCredits'] = "Adview credits";
$GLOBALS['strClickCredits'] = "Adclick credits";
$GLOBALS['strPrevious'] = "Previous";
$GLOBALS['strNext'] = "Next";
$GLOBALS['strNone'] = "None";
$GLOBALS['strViewsPurchased'] = "AdViews purchased";
$GLOBALS['strClicksPurchased'] = "AdClicks purchased";
$GLOBALS['strDaysPurchased'] = "AdDays purchased";
$GLOBALS['strHTML'] = "HTML";
$GLOBALS['strAddSep'] = "Fill in EITHER the fields above OR the field below!";
$GLOBALS['strTextBelow'] = "Text below image";
$GLOBALS['strSubmit'] = "Submit ad";
$GLOBALS['strUsername'] = "Username";
$GLOBALS['strPassword'] = "Password";
$GLOBALS['strBannerAdmin'] = "Banner administration for";
$GLOBALS['strNoBanners'] = "No banners found";
$GLOBALS['strBanner'] = "Banner";
$GLOBALS['strCurrentBanner'] = "Current banner";
$GLOBALS['strDelete'] = "Delete";
$GLOBALS['strAddBanner'] = "Add new banner";
$GLOBALS['strModifyBanner'] = "Modify banner";
$GLOBALS['strURL'] = "Linked to URL (incl. http://)";
$GLOBALS['strKeyword'] = "Keyword";
$GLOBALS['strWeight'] = "Weight";
$GLOBALS['strAlt'] = "Alt text";
$GLOBALS['strAccessDenied'] = "Access denied";
$GLOBALS['strPasswordWrong'] = "The password is not correct";
$GLOBALS['strNotAdmin'] = "You may not have enough privileges";
$GLOBALS['strClientAdded'] = "The advertiser has been added.";
$GLOBALS['strClientModified'] = "The advertiser has been modified.";
$GLOBALS['strClientDeleted'] = "The advertiser has been deleted.";
$GLOBALS['strBannerAdmin'] = "Banner administration";
$GLOBALS['strBannerAdded'] = "The banner has been added.";
$GLOBALS['strBannerModified'] = "The banner has been modified.";
$GLOBALS['strBannerDeleted'] = "The banner has been deleted";
$GLOBALS['strBannerChanged'] = "The banner has been changed";
$GLOBALS['strStats'] = "Statistics";
$GLOBALS['strDailyStats'] = "Daily statistics";
$GLOBALS['strDetailStats'] = "Detailed statistics";
$GLOBALS['strCreditStats'] = "Credit statistics";
$GLOBALS['strActive'] = "active";
$GLOBALS['strActivate'] = "Activate";
$GLOBALS['strDeActivate'] = "Deactivate";
$GLOBALS['strAuthentification'] = "Authentication";
$GLOBALS['strGo'] = "Go";
$GLOBALS['strLinkedTo'] = "linked to";
$GLOBALS['strBannerID'] = "Banner ID";
$GLOBALS['strClientID'] = "Client ID";
$GLOBALS['strMailSubject'] = "Advertiser Report";
$GLOBALS['strMailSubjectDeleted'] = "Deactivated Ads";
$GLOBALS['strMailHeader'] = "Dear {contact},\n";
$GLOBALS['strMailBannerStats'] = "Below you will find the banner statistics for {clientname}:";
$GLOBALS['strMailFooter'] = "Regards,\n   {adminfullname}";
$GLOBALS['strLogMailSent'] = "[phpAds] Statistics successfully sent.";
$GLOBALS['strLogErrorClients'] = "[phpAds] An error occurred while trying to fetch the clients from the database.";
$GLOBALS['strLogErrorBanners'] = "[phpAds] An error occurred while trying to fetch the banners from the database.";
$GLOBALS['strLogErrorViews'] = "[phpAds] An error occurred while trying to fetch the adviews from the database.";
$GLOBALS['strLogErrorClicks'] = "[phpAds] An error occurred while trying to fetch the adclicks from the database.";
$GLOBALS['strLogErrorDisactivate'] = "[phpAds] An error occurred while trying to disactivate a banner.";
$GLOBALS['strRatio'] = "Click-Through Ratio";
$GLOBALS['strChooseBanner'] = "Please choose the type of the banner";
$GLOBALS['strMySQLBanner'] = "Local banner (SQL)";
$GLOBALS['strWebBanner'] = "Local banner (Webserver)";
$GLOBALS['strURLBanner'] = "External banner";
$GLOBALS['strHTMLBanner'] = "HTML banner";
$GLOBALS['strNewBannerFile'] = "New banner file";
$GLOBALS['strNewBannerURL'] = "New banner URL (incl. http://)";
$GLOBALS['strWidth'] = "Width";
$GLOBALS['strHeight'] = "Height";
$GLOBALS['strTotalViews7Days'] = "Total AdViews in past 7 days";
$GLOBALS['strTotalClicks7Days'] = "Total AdClicks in past 7 days";
$GLOBALS['strAvgViews7Days'] = "Average AdViews in past 7 days";
$GLOBALS['strAvgClicks7Days'] = "Average AdClicks in past 7 days";
$GLOBALS['strTopTenHosts'] = "Top ten requesting hosts";
$GLOBALS['strClientIP'] = "Client IP";
$GLOBALS['strUserAgent'] = "Browser";
$GLOBALS['strWeekDay'] = "Weekday";
$GLOBALS['strDomain'] = "Domain";
$GLOBALS['strSource'] = "Source";
$GLOBALS['strTime'] = "Time";
$GLOBALS['strAllow'] = "Allow";
$GLOBALS['strDeny'] = "Deny";
$GLOBALS['strResetStats'] = "Reset statistics";
$GLOBALS['strExpiration'] = "Expiration";
$GLOBALS['strNoExpiration'] = "No expiration date set";
$GLOBALS['strDaysLeft'] = "Days left";
$GLOBALS['strEstimated'] = "Estimated expiration";
$GLOBALS['strConfirm'] = "Are you sure?";
$GLOBALS['strBannerNoStats'] = "No statistics available for this banner!";
$GLOBALS['strWeek'] = "Week";
$GLOBALS['strWeeklyStats'] = "Weekly statistics";
$GLOBALS['strWeekDay'] = "Weekday";
$GLOBALS['strDate'] = "Date";
$GLOBALS['strCTRShort'] = "CTR";
$GLOBALS['strDayShortCuts'] = array("Su","Mo","Tu","We","Th","Fr","Sa");
$GLOBALS['strShowWeeks'] = "Max. weeks to display";
$GLOBALS['strAll'] = "all";
$GLOBALS['strAvg'] = "Avg.";
$GLOBALS['strHourly'] = "Views/Clicks by hour";
$GLOBALS['strTotal'] = "Total";
$GLOBALS['strUnlimited'] = "Unlimited";
$GLOBALS['strUp'] = "Up";
$GLOBALS['strDown'] = "Down";
$GLOBALS['strSave'] = "Save";
$GLOBALS['strSaved'] = "was saved!";
$GLOBALS['strDeleted'] = "was deleted!";
$GLOBALS['strMovedUp'] = "was moved up";
$GLOBALS['strMovedDown'] = "was moved down";
$GLOBALS['strUpdated'] = "was updated";
$GLOBALS['strLogin'] = "Login";
$GLOBALS['strPreferences'] = "Preferences";
$GLOBALS['strAllowClientModifyInfo'] = "Allow this user to modify his own advertiser information";
$GLOBALS['strAllowClientModifyBanner'] = "Allow this user to modify his own banners";
$GLOBALS['strAllowClientAddBanner'] = "Allow this user to add his own banners";
$GLOBALS['strLanguage'] = "Language";
$GLOBALS['strDefault'] = "Default";
$GLOBALS['strErrorViews'] = "You must enter the number of views or select the unlimited box !";
$GLOBALS['strErrorNegViews'] = "Negative views are not allowed";
$GLOBALS['strErrorClicks'] =  "You must enter the number of clicks or select the unlimited box !";
$GLOBALS['strErrorNegClicks'] = "Negative clicks are not allowed";
$GLOBALS['strErrorDays'] = "You must enter the number of days or select the unlimited box !";
$GLOBALS['strErrorNegDays'] = "Negative days are not allowed";
$GLOBALS['strTrackerImage'] = "Tracker image:";

// New strings for version 2
$GLOBALS['strNavigation'] 				= "Navigation";
$GLOBALS['strShortcuts'] 				= "Shortcuts";
$GLOBALS['strDescription'] 				= "Description";
$GLOBALS['strClients'] 					= "Advertisers";
$GLOBALS['strID']				 		= "ID";
$GLOBALS['strOverall'] 					= "Overall";
$GLOBALS['strTotalBanners'] 			= "Total banners";
$GLOBALS['strToday'] 					= "Today";
$GLOBALS['strThisWeek'] 				= "This week";
$GLOBALS['strThisMonth'] 				= "This month";
$GLOBALS['strBasicInformation'] 		= "Basic information";
$GLOBALS['strContractInformation'] 		= "Contract information";
$GLOBALS['strLoginInformation'] 		= "Login information";
$GLOBALS['strPermissions'] 				= "Permissions";
$GLOBALS['strGeneralSettings']			= "General settings";
$GLOBALS['strSaveChanges']		 		= "Save Changes";
$GLOBALS['strCompact']					= "Compact";
$GLOBALS['strVerbose']					= "Verbose";
$GLOBALS['strOrderBy']					= "order by";
$GLOBALS['strShowAllBanners']	 		= "Show all banners";
$GLOBALS['strShowBannersNoAdClicks']	= "Show banners without AdClicks";
$GLOBALS['strShowBannersNoAdViews']		= "Show banners without AdViews";
$GLOBALS['strShowAllClients'] 			= "Show all advertisers";
$GLOBALS['strShowClientsActive'] 		= "Show advertisers with active banners";
$GLOBALS['strShowClientsInactive']		= "Show advertisers with inactive banners";
$GLOBALS['strSize']						= "Size";

$GLOBALS['strMonth'] 					= array("January","February","March","April","May","June","July", "August", "September", "October", "November", "December");
$GLOBALS['strDontExpire']				= "Don't expire this campaign on a specific date";
$GLOBALS['strActivateNow'] 				= "Activate this campaign immediately";
$GLOBALS['strExpirationDate']			= "Expiration date";
$GLOBALS['strActivationDate']			= "Activation date";

$GLOBALS['strMailClientDeactivated'] 	= "The following banners have been disabled because";
$GLOBALS['strMailNothingLeft'] 			= "If you would like to continue advertising on our website, please feel free to contact us.\nWe'd be glad to hear from you.";
$GLOBALS['strClientDeactivated']		= "This campaign is currently not active because";
$GLOBALS['strBeforeActivate']			= "the activation date has not yet been reached";
$GLOBALS['strAfterExpire']				= "the expiration date has been reached";
$GLOBALS['strNoMoreClicks']				= "the amount of AdClicks purchased are used";
$GLOBALS['strNoMoreViews']				= "the amount of AdViews purchased are used";

$GLOBALS['strBanners'] 					= "Banners";
$GLOBALS['strCampaigns']				= "Campaigns";
$GLOBALS['strCampaign']					= "Campaign";
$GLOBALS['strModifyCampaign']			= "Modify campaign";
$GLOBALS['strName']						= "Name";
$GLOBALS['strBannersWithoutCampaign']	= "Banners without a campaign";
$GLOBALS['strMoveToNewCampaign']		= "Move to a new campaign";
$GLOBALS['strCreateNewCampaign']		= "Create new campaign";
$GLOBALS['strEditCampaign']				= "Edit campaign";
$GLOBALS['strEdit']						= "Edit";
$GLOBALS['strCreate']					= "Create";
$GLOBALS['strUntitled']					= "Untitled";

$GLOBALS['strTotalCampaigns'] 			= "Total campaigns";
$GLOBALS['strActiveCampaigns'] 			= "Active campaigns";

$GLOBALS['strLinkedTo']					= "linked to";
$GLOBALS['strSendAdvertisingReport']	= "Send an advertising report via e-mail";
$GLOBALS['strNoDaysBetweenReports']		= "Number of days between reports";
$GLOBALS['strSendDeactivationWarning']  = "Send a warning when a campaign is deactivated";

$GLOBALS['strWarnClientTxt']			= "The Clicks or Views left for your banners are getting below {limit}. \nYour banners will be disabled when there are no Clicks or Views left. ";
$GLOBALS['strViewsClicksLow']			= "Ad views/clicks are low";

$GLOBALS['strDays']						= "Days";
$GLOBALS['strHistory']					= "History";
$GLOBALS['strAverage']					= "Average";
$GLOBALS['strDuplicateClientName']		= "The username you provided already exists, please enter a different username.";
$GLOBALS['strAllowClientDisableBanner'] = "Allow this user to deactivate his own banners";
$GLOBALS['strAllowClientActivateBanner'] = "Allow this user to activate his own banners";

$GLOBALS['strGenerateBannercode']		= "Generate Bannercode";
$GLOBALS['strChooseInvocationType']		= "Please choose the type of banner invocation";
$GLOBALS['strGenerate']					= "Generate";
$GLOBALS['strParameters']				= "Parameters";
$GLOBALS['strUniqueidentifier']			= "Unique identifier";
$GLOBALS['strFrameSize']				= "Frame size";
$GLOBALS['strBannercode']				= "Bannercode";

$GLOBALS['strSearch']					= "Search";
$GLOBALS['strNoMatchesFound']			= "No matches were found";

$GLOBALS['strNoViewLoggedInInterval']   = "No views were logged during the span of this report";
$GLOBALS['strNoClickLoggedInInterval']  = "No clicks were logged during the span of this report";
$GLOBALS['strMailReportPeriod']			= "This report includes statistics from {startdate} up to {enddate}.";
$GLOBALS['strMailReportPeriodAll']		= "This report includes all statistics up to {enddate}.";
$GLOBALS['strNoStatsForCampaign'] 		= "There are no statistics available for this campaign";
$GLOBALS['strFrom']						= "From";
$GLOBALS['strTo']						= "to";
$GLOBALS['strMaintenance']				= "Maintenance";
$GLOBALS['strCampaignStats']			= "Campaign statistics";
$GLOBALS['strClientStats']				= "Advertiser statistics";
$GLOBALS['strErrorOccurred']			= "An error occurred";
$GLOBALS['strAdReportSent']				= "Advertiser report sent";

$GLOBALS['strAutoChangeHTML']			= "Change HTML in order to log AdClicks";

$GLOBALS['strZones']					= "Zones";
$GLOBALS['strAddZone']					= "Create zone";
$GLOBALS['strModifyZone']				= "Modify zone";
$GLOBALS['strAddNewZone']				= "Add new zone";

$GLOBALS['strOverview']					= "Overview";
$GLOBALS['strEqualTo']					= "is equal to";
$GLOBALS['strDifferentFrom']			= "is different from";
$GLOBALS['strAND']						= "AND";  // logical operator
$GLOBALS['strOR']						= "OR"; // logical operator
$GLOBALS['strOnlyDisplayWhen']			= "Only display this banner when:";

$GLOBALS['strStatusText']				= "Status text";

$GLOBALS['strConfirmDeleteClient'] 		= "Do you really want to delete this advertiser?";
$GLOBALS['strConfirmDeleteCampaign']	= "Do you really want to delete this campaign?";
$GLOBALS['strConfirmDeleteBanner']		= "Do you really want to delete this banner?";
$GLOBALS['strConfirmDeleteZone']		= "Do you really want to delete this zone?";
$GLOBALS['strConfirmDeleteAffiliate']	= "Do you really want to delete this publisher?";

$GLOBALS['strConfirmResetStats']		= "Do you really want to reset all stats?";
$GLOBALS['strConfirmResetCampaignStats']= "Do you really want to reset stats for this campaign?";
$GLOBALS['strConfirmResetClientStats']	= "Do you really want to reset stats for this advertiser?";
$GLOBALS['strConfirmResetBannerStats']	= "Do you really want to reset stats for this banner?";

$GLOBALS['strClientsAndCampaigns']		= "Advertisers & Campaigns";
$GLOBALS['strCampaignOverview']			= "Campaign overview";
$GLOBALS['strReports']					= "Reports";
$GLOBALS['strShowBanner']				= "Show banner";

$GLOBALS['strIncludedBanners']			= "Linked banners";
$GLOBALS['strProbability']				= "Probability";
$GLOBALS['strInvocationcode']			= "Invocationcode";
$GLOBALS['strSelectZoneType']			= "Please choose the type of linking banners";
$GLOBALS['strBannerSelection']			= "Banner selection";
$GLOBALS['strInteractive']				= "Interactive";
$GLOBALS['strRawQueryString']			= "Raw querystring";

$GLOBALS['strBannerWeight']				= "Banner weight";
$GLOBALS['strCampaignWeight']			= "Campaign weight";

$GLOBALS['strZoneCacheOn']				= "Zone caching is turned on";
$GLOBALS['strZoneCacheOff']				= "Zone caching is turned off";
$GLOBALS['strCachedZones']				= "Cached zones";
$GLOBALS['strSizeOfCache']				= "Size of cache";
$GLOBALS['strAverageAge']				= "Average age";
$GLOBALS['strRebuildZoneCache']			= "Rebuild zone cache";
$GLOBALS['strKiloByte']					= "KB";
$GLOBALS['strSeconds']					= "seconds";
$GLOBALS['strExpired']					= "Expired";

$GLOBALS['strModifyBannerAcl'] 			= "Display limitations";
$GLOBALS['strACL'] 						= "Limit";
$GLOBALS['strNoMoveUp'] 				= "Can't move up first row";
$GLOBALS['strACLAdd'] 					= "Add new limitation";
$GLOBALS['strNoLimitations']			= "No limitations";

$GLOBALS['strLinkedZones']				= "Linked Zones";
$GLOBALS['strNoZonesToLink']			= "There are no zones available to which this banner can be linked";
$GLOBALS['strNoZones']					= "There are currently no zones defined";
$GLOBALS['strNoClients']				= "There are currently no advertisers defined";
$GLOBALS['strNoStats']					= "There are currently no statistics available";
$GLOBALS['strNoAffiliates']				= "There are currently no publishers defined";

$GLOBALS['strCustom']					= "Custom";

$GLOBALS['strSettings'] 				= "Settings";

$GLOBALS['strAffiliates']				= "Publishers";
$GLOBALS['strAffiliatesAndZones']		= "Publishers & Zones";
$GLOBALS['strAddAffiliate']				= "Create publisher";
$GLOBALS['strModifyAffiliate']			= "Modify publisher";
$GLOBALS['strAddNewAffiliate']			= "Add new publisher";

$GLOBALS['strCheckAllNone']				= "Check all / none";

$GLOBALS['strAllowAffiliateModifyInfo'] = "Allow this user to modify his own publisher information";
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
$GLOBALS['strAffiliateProperties']		= "Publisher properties";
$GLOBALS['strBannerOverview']			= "Banner overview";
$GLOBALS['strBannerProperties']			= "Banner properties";
$GLOBALS['strCampaignProperties']		= "Campaign properties";
$GLOBALS['strClientProperties']			= "Advertiser properties";
$GLOBALS['strZoneOverview']				= "Zone overview";
$GLOBALS['strZoneProperties']			= "Zone properties";
$GLOBALS['strAffiliateOverview']		= "Publisher overview";
$GLOBALS['strLinkedBannersOverview']	= "Linked banners overview";

$GLOBALS['strGlobalHistory']			= "Global history";
$GLOBALS['strBannerHistory']			= "Banner history";
$GLOBALS['strCampaignHistory']			= "Campaign history";
$GLOBALS['strClientHistory']			= "Advertiser history";
$GLOBALS['strAffiliateHistory']			= "Publisher history";
$GLOBALS['strZoneHistory']				= "Zone history";
$GLOBALS['strLinkedBannerHistory']		= "Linked banner history";

$GLOBALS['strMoveTo']					= "Move to";
$GLOBALS['strDuplicate']				= "Duplicate";

$GLOBALS['strMainSettings']				= "Main settings";
$GLOBALS['strAdminSettings']			= "Administration settings";

$GLOBALS['strApplyLimitationsTo']		= "Apply limitations to";
$GLOBALS['strWholeCampaign']			= "Whole campaign";
$GLOBALS['strZonesWithoutAffiliate']	= "Zones without publisher";
$GLOBALS['strMoveToNewAffiliate']		= "Move to new publisher";

$GLOBALS['strNoBannersToLink']			= "There are currently no banners available which can be linked to this zone";
$GLOBALS['strNoLinkedBanners']			= "There are no banners available which are linked to this zone";

$GLOBALS['strAdviewsLimit']				= "AdViews limit";

$GLOBALS['strTotalThisPeriod']			= "Total this period";
$GLOBALS['strAverageThisPeriod']		= "Average this period";
$GLOBALS['strLast7Days']				= "Last 7 days";
$GLOBALS['strDistribution']				= "Distribution";
$GLOBALS['strOther']					= "Other";
$GLOBALS['strUnknown']					= "Unknown";

$GLOBALS['strWelcomeTo']				= "Welcome to";
$GLOBALS['strEnterUsername']			= "Enter your username and password to log in";

$GLOBALS['strBannerNetwork']			= "Banner network";
$GLOBALS['strMoreInformation']			= "More information...";
$GLOBALS['strChooseNetwork']			= "Choose the banner network you want to use";
$GLOBALS['strRichMedia']				= "Richmedia";
$GLOBALS['strTrackAdClicks']			= "Track AdClicks";
$GLOBALS['strYes']						= "Yes";
$GLOBALS['strNo']						= "No";
$GLOBALS['strUploadOrKeep']				= "Do you wish to keep your <br>existing image, or do you <br>want to upload another?";
$GLOBALS['strCheckSWF']					= "Check for hard-coded links inside the Flash file";
$GLOBALS['strURL2']						= "URL";
$GLOBALS['strTarget']					= "Target";
$GLOBALS['strConvert']					= "Convert";
$GLOBALS['strCancel']					= "Cancel";

$GLOBALS['strConvertSWFLinks']			= "Convert Flash links";
$GLOBALS['strConvertSWF']				= "<br>The Flash file you just uploaded contains hard-coded urls. phpAdsNew won't be ".
										  "able to track the number of AdClicks for this banner unless you convert these ".
										  "hard-coded urls. Below you will find a list of all urls inside the Flash file. ".
										  "If you want to convert the urls, simply click <b>Convert</b>, otherwise click ".
										  "<b>Cancel</b>.<br><br>".
										  "Please note: if you click <b>Convert</b> the Flash file ".
									  	  "you just uploaded will be physically altered. <br>Please keep a backup of the ".
										  "original file. Regardless of in which version this banner was created, the resulting ".
										  "file will need the Flash 4 player (or higher) to display correctly.<br><br>";

$GLOBALS['strSourceStats']				= "Source Stats";
$GLOBALS['strSelectSource']				= "Select the source you want to view:";

$GLOBALS['strMonths']					= "Months";
$GLOBALS['strWeeks']					= "Weeks";
$GLOBALS['strDailyHistory']				= "Daily history";
$GLOBALS['strWeeklyHistory']			= "Weekly history";
$GLOBALS['strMonthlyHistory']			= "Monthly history";

$GLOBALS['strUserLog']					= "User log";
$GLOBALS['strUserLogDetails']			= "User log details";
$GLOBALS['strAction']					= "Action";
$GLOBALS['strDetails']					= "Details";
$GLOBALS['strNoActionsLogged']			= "No actions are logged";
$GLOBALS['strDeleteLog']				= "Delete Log";
$GLOBALS['strUser']						= "User";

$GLOBALS['strCampaignSelection']		= "Campaign selection";
$GLOBALS['strMatchingBanners']			= "{count} matching banners";
$GLOBALS['strNoCampaignsToLink']		= "There are currently no campaigns available which can be linked to this zone";
$GLOBALS['strNoZonesToLinkToCampaign']  = "There are no zones available to which this campaign can be linked";

?>
