<?php // $Revision: 1.11 $

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


// Set character-set
$GLOBALS['phpAds_CharSet'] = "koi8-r";


// Set translation strings
$GLOBALS['strHome'] = "������� ��������";
$GLOBALS['date_format'] = "%d/%m/%Y";
$GLOBALS['time_format'] = "%H:%i:%S";
$GLOBALS['strMySQLError'] = "MySQL-Error:";
$GLOBALS['strAdminstration'] = "�����������������";
$GLOBALS['strAddClient'] = "�������� �������";
$GLOBALS['strModifyClient'] = "�������� �������";
$GLOBALS['strDeleteClient'] = "������� �������";
$GLOBALS['strViewClientStats'] = "���������� ���������� �������";
$GLOBALS['strClientName'] = "������";
$GLOBALS['strContact'] = "�������";
$GLOBALS['strEMail'] = "EMail";
$GLOBALS['strViews'] = "�������";
$GLOBALS['strClicks'] = "������";
$GLOBALS['strTotalViews'] = "����� �������";
$GLOBALS['strTotalClicks'] = "����� ������";
$GLOBALS['strCTR'] = "Click-Through Ratio";
$GLOBALS['strTotalClients'] = "����� ��������";
$GLOBALS['strActiveClients'] = "�������� ��������";
$GLOBALS['strActiveBanners'] = "�������� ��������";
$GLOBALS['strLogout'] = "�����";
$GLOBALS['strCreditStats'] = "���������� ��������";
$GLOBALS['strViewCredits'] = "������� �� �������";   
$GLOBALS['strClickCredits'] = "������� �� ������";
$GLOBALS['strPrevious'] = "����������";
$GLOBALS['strNext'] = "���������";
$GLOBALS['strNone'] = "���";
$GLOBALS['strViewsPurchased'] = "������� �������";
$GLOBALS['strClicksPurchased'] = "������� ������";
$GLOBALS['strDaysPurchased'] = "������� ����";
$GLOBALS['strHTML'] = "HTML";
$GLOBALS['strAddSep'] = "��������� ���� ���� ��� ���� ����!";
$GLOBALS['strTextBelow'] = "����� ��� ���������";
$GLOBALS['strSubmit'] = "��������� ������";
$GLOBALS['strUsername'] = "�����";
$GLOBALS['strPassword'] = "������";
$GLOBALS['strBannerAdmin'] = "�������������� ������� ���";
$GLOBALS['strBannerAdminAcl'] = "�������� ���������� ���";
$GLOBALS['strNoBanners'] = "��� ��������";
$GLOBALS['strBanner'] = "������";
$GLOBALS['strCurrentBanner'] = "������� ������";
$GLOBALS['strDelete'] = "�������";
$GLOBALS['strAddBanner'] = "�������� ����� ������";
$GLOBALS['strModifyBanner'] = "�������� ������";
$GLOBALS['strModifyBannerAcl'] = "�������� ��������� ����������";
$GLOBALS['strURL'] = "URL (� http://)";
$GLOBALS['strKeyword'] = "�������� ����� (��������� � �������)";
$GLOBALS['strWeight'] = "���";
$GLOBALS['strAlt'] = "Alt-T����";
$GLOBALS['strUsername'] = "�����";
$GLOBALS['strPassword'] = "������";
$GLOBALS['strAccessDenied'] = "������ �����ݣ�";
$GLOBALS['strPasswordWrong'] = "������ ������ �������";
$GLOBALS['strNotAdmin'] = "��������, � ��� ��� ���� �������";
$GLOBALS['strClientAdded'] = "������ ��������.";
$GLOBALS['strClientModified'] = "������ ����Σ�.";
$GLOBALS['strClientDeleted'] = "������ ������.";
$GLOBALS['strBannerAdmin'] = "����������������� ��������";
$GLOBALS['strBannerAdded'] = "������ ��������.";
$GLOBALS['strBannerModified'] = "������ ����Σ�.";
$GLOBALS['strBannerDeleted'] = "������ ���̣�";
$GLOBALS['strBannerChanged'] = "������ ����Σ�";
$GLOBALS['strStats'] = "����������";
$GLOBALS['strDailyStats'] = "���������� �� ����";
$GLOBALS['strDetailStats'] = "��������� ����������";
$GLOBALS['strCreditStats'] = "���������� �� ��������";
$GLOBALS['strActive'] = "�������";
$GLOBALS['strActivate'] = "������������";
$GLOBALS['strDeActivate'] = "��������������";
$GLOBALS['strAuthentification'] = "������";
$GLOBALS['strGo'] = "��ۣ�!";
$GLOBALS['strLinkedTo'] = "������";
$GLOBALS['strBannerID'] = "Banner-ID";
$GLOBALS['strClientID'] = "Client ID";
$GLOBALS['strMailSubject'] = "��ޣ� � �������";
$GLOBALS['strMailSubjectDeleted'] = "���������������� �������";
$GLOBALS['strMailHeader'] = "������� ".$client["contact"].",\n";
$GLOBALS['strMailBannerStats'] = "����� �� ������ ���������� ������� ".$client["clientname"].":";
$GLOBALS['strMailFooter'] = "� ���������� �����������,\n   $phpAds_admin_fullname";
$GLOBALS['strLogMailSent'] = "[phpAds] ���������� ������� ����������.";
$GLOBALS['strLogErrorClients'] = "[phpAds] ������ ������� � ���� ������ ���������� � ��������.";
$GLOBALS['strLogErrorBanners'] = "[phpAds] ������ ������� � �� ��������.";
$GLOBALS['strLogErrorViews'] = "[phpAds] ������ ������� � �� �������.";
$GLOBALS['strLogErrorClicks'] = "[phpAds] ������ ������� � �� ������.";
$GLOBALS['strLogErrorDisactivate'] = "[phpAds] ������ ����������� �������.";
$GLOBALS['strRatio'] = "������� ��������������";
$GLOBALS['strChooseBanner'] = "�������� ��� �������.";
$GLOBALS['strMySQLBanner'] = "������ � ������ ���������� ���������� �� ������";
$GLOBALS['strURLBanner'] = "������ ����� ���-�� � ��������";
$GLOBALS['strHTMLBanner'] = "��������� ������";
$GLOBALS['strNewBannerFile'] = "���� ������� �� �����";
$GLOBALS['strNewBannerURL'] = "URL ������� (� http://)";
$GLOBALS['strWidth'] = "������";
$GLOBALS['strHeight'] = "������";
$GLOBALS['strTotalViews7Days'] = "����� ������� �� ������";
$GLOBALS['strTotalClicks7Days'] = "����� ������ �� ������";
$GLOBALS['strAvgViews7Days'] = "� ������� ������� �� ������";
$GLOBALS['strAvgClicks7Days'] = "� ������� ������ �� ������";
$GLOBALS['strTopTenHosts'] = "Top ten ������� ��������������� �������";
$GLOBALS['strConfirmDeleteClient'] = "�� ������������� ������ ������� ����� �������?";
$GLOBALS['strClientIP'] = "IP �������";
$GLOBALS['strUserAgent'] = "regexp ������ User-agent";
$GLOBALS['strWeekDay'] = "���� ������ (0 - 6) ((� �����������))";
$GLOBALS['strDomain'] = "����� (��� ����� � ������)";
$GLOBALS['strSource'] = "��������";
$GLOBALS['strTime'] = "�����";
$GLOBALS['strAllow'] = "������ ������ ���";
$GLOBALS['strDeny'] = "������ ������ ���";
$GLOBALS['strConfirmResetStats'] = "�� ������������� ������ �������� ���������� ��� ����� ������� ?";
$GLOBALS['strExpiration'] = "Expiration";
$GLOBALS['strNoExpiration'] = "No expiration date set";
$GLOBALS['strDaysLeft'] = "�������� ����";
$GLOBALS['strEstimated'] = "Estimated expiration";
$GLOBALS['strConfirm'] = "�� ������� ?";
$GLOBALS['strBannerNoStats'] = "��� ���������� ��� ����� �������!";
$GLOBALS['strWeek'] = "������";
$GLOBALS['strWeeklyStats'] = "������������ ����������";
$GLOBALS['strWeekDay'] = "���� ������";
$GLOBALS['strDate'] = "����";
$GLOBALS['strCTRShort'] = "CTR";
$GLOBALS['strDayShortCuts'] = array("��","��","��","��","��","��","��");
$GLOBALS['strShowWeeks'] = "����. ����� ������������ ������";
$GLOBALS['strAll'] = "���";
$GLOBALS['strAvg'] = "�������";
$GLOBALS['strHourly'] = "����������/������ �� �����";
$GLOBALS['strTotal'] = "�����";
$GLOBALS['strUnlimited'] = "�� ����������";
$GLOBALS['strSave'] = "���������";
$GLOBALS['strUp'] = "�����";
$GLOBALS['strDown'] = "����";
$GLOBALS['strSaved'] = "��� ��������!";
$GLOBALS['strDeleted'] = "��� ������!";  
$GLOBALS['strMovedUp'] = "��� ��������� ����";
$GLOBALS['strMovedDown'] = "��� ��������� ����";
$GLOBALS['strUpdated'] = "��� ��������";
$GLOBALS['strACL'] = "ACL";
$GLOBALS['strNoMoveUp'] = "�� ���� ����������� ������ ��� ����";
$GLOBALS['strACLAdd'] = "�������� ����� $strACL";
$GLOBALS['strACLExist'] = "������������ $strACL:";
$GLOBALS['strLogin'] = "Login";
$GLOBALS['strPreferences'] = "������������";
$GLOBALS['strAllowClientModifyInfo'] = "��������� ����� ������������ ������������� ����������� ���������� ������";
$GLOBALS['strAllowClientModifyBanner'] = "��������� ����� ������������ �������������� ����������� �������";
$GLOBALS['strAllowClientAddBanner'] = "��������� ����� ������������ ��������� ����� �������";
$GLOBALS['strLanguage'] = "����";
$GLOBALS['strDefault'] = "�� ���������";
$GLOBALS['strErrorViews'] = "�� ������ ������ ����� ������� ��� ������� '�� ����������' !";
$GLOBALS['strErrorNegViews'] = "������������� ����� ������� �� ���������";
$GLOBALS['strErrorClicks'] =  "�� ������ ������ ����� ������ ��� ������� '�� ����������' !";
$GLOBALS['strErrorNegClicks'] = "������������� ����� ������ �� ���������";
$GLOBALS['strErrorDays'] = "�� ������ ������ ����� ���� ��� ������� '�� ����������' !";
$GLOBALS['strErrorNegDays'] = "������������� ����� ���� �� ���������";
$GLOBALS['strTrackerImage'] = "Tracker image:";

// New strings for version 2
$GLOBALS['strNavigation'] 			= "Navigation";
$GLOBALS['strShortcuts'] 				= "Shortcuts";
$GLOBALS['strDescription'] 			= "Description";
$GLOBALS['strClients'] 				= "Clients";
$GLOBALS['strID']				 		= "ID";
$GLOBALS['strOverall'] 				= "Overall";
$GLOBALS['strTotalBanners'] 			= "Total banners";
$GLOBALS['strToday'] 					= "Today";
$GLOBALS['strThisWeek'] 				= "This week";
$GLOBALS['strThisMonth'] 				= "This month";
$GLOBALS['strBasicInformation'] 		= "Basic information";
$GLOBALS['strContractInformation'] 	= "Contract information";
$GLOBALS['strLoginInformation'] 		= "Login information";
$GLOBALS['strPermissions'] 			= "Permissions";
$GLOBALS['strGeneralSettings']		= "General settings";
$GLOBALS['strSaveChanges']		 	= "Save Changes";
$GLOBALS['strCompact']				= "Compact";
$GLOBALS['strVerbose']				= "Verbose";
$GLOBALS['strOrderBy']				= "order by";
$GLOBALS['strShowAllBanners']	 		= "Show all banners";
$GLOBALS['strShowBannersNoAdClicks']	= "Show banners without AdClicks";
$GLOBALS['strShowBannersNoAdViews']	= "Show banners without AdViews";
$GLOBALS['strShowAllClients'] 		= "Show all clients";
$GLOBALS['strShowClientsActive'] 		= "Show clients with active banners";
$GLOBALS['strShowClientsInactive']	= "Show clients with inactive banners";
$GLOBALS['strSize']					= "Size";

$GLOBALS['strMonth'] 				= array("January","February","March","April","May","June","July", "August", "September", "October", "November", "December");
$GLOBALS['strDontExpire']			= "Don't expire this client on a specific date";
$GLOBALS['strActivateNow'] 			= "Activate this client immediately";
$GLOBALS['strExpirationDate']		= "Expiration date";
$GLOBALS['strActivationDate']		= "Activation date";

$GLOBALS['strMailClientDeactivated'] 	= "Your banners have been disabled because";
$GLOBALS['strMailNothingLeft'] 			= "If you would like to continue advertising on our website, please feel free to contact us. We'd be glad to hear from you.";
$GLOBALS['strClientDeactivated']	= "This client is currently not active because";
$GLOBALS['strBeforeActivate']		= "the activation date has not yet been reached";
$GLOBALS['strAfterExpire']			= "the expiration date has been reached";
$GLOBALS['strNoMoreClicks']			= "the amount of AdClicks purchased are used";
$GLOBALS['strNoMoreViews']			= "the amount of AdViews purchased are used";

?>
