<?php // $Revision: 1.8 $

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



// Settings help translation strings
$GLOBALS['phpAds_hlp_dbhost'] = "
	Sp�cifiez l'adresse du serveur de donn�es MySQL (Ex: sql.monsite.fr).
";
		
$GLOBALS['phpAds_hlp_dbuser'] = "
	Sp�cifiez le nom d'utilisateur avec lequel phpAdsNew peut se connecter � la base MySQL.
";
		
$GLOBALS['phpAds_hlp_dbpassword'] = "
	Sp�cifiez le mot de passe avec lequel phpAdsNew peut se connecter � la base MySQL.
";
		
$GLOBALS['phpAds_hlp_dbname'] = "
	Sp�cifiez le nom de la base dans laquelle phpAdsNew doit stocker ses donn�es.
";

$GLOBALS['phpAds_hlp_persistent_connections'] = "
	L'utilisation de connections persistantes peut acc�l�rer consid�rablement phpAdsNew, et peut m�me diminuer
	la charge du serveur. N�anmoins, il y a un point n�gatif: sur des sites avec un grand nombre de visiteurs,
	la charge du serveur peut augmenter, et �tre sup�rieur � celle sans l'utilisation des connections
	persistantes. Utiliser ou ne pas utiliser cette option d�pend du nombre de visiteurs, et du mat�riel
	que vous utilisez. Si phpAdsNew utilise trop de ressources, vous devriez regarder d'abord cette option.
";

$GLOBALS['phpAds_hlp_insert_delayed'] = "
	MySQL bloque la table lorsque l'on ins�re des donn�es. Si vous avez beaucoup de visiteurs, il est possible
	que phpAdsNew soit oblig� d'attendre avant d'ins�rer une nouvelle ligne, parce que la table est d�j�
	bloqu�e. Quand vous utilisez les insertions retard�es, vous n'avez pas � attendre, et la ligne sera ins�r�e
	plus tard, lorsque la table ne sera plus utilis�e.
";

$GLOBALS['phpAds_hlp_compatibility_mode'] = "
        If you are having problem integrating phpAdsNew with another thirth-party product it 
	might help to turn on the database compatibility mode. If you are using local mode 
	invocation and the database compatibility is turned on phpAdsNew should leave 
	the state of the database connection exectly the same as it was before phpAdsNew ran. 
	This option is a bit slower (only slightly) and therefore turned off by default.
";

$GLOBALS['phpAds_hlp_table_prefix'] = "
	Si la base de donn�es que phpAdsNew utilise est partag�e par plusieurs produits, il est int�ressant d'ajouter
	un pr�fixe aux noms des tables de phpAdsNew. Si vous utilisez plusieurs phpAdsNew avec la m�me base
	de donn�es, vous devez choisir un pr�fixe qui est unique � chaque installation de phpAdsNew.
";

$GLOBALS['phpAds_hlp_tabletype'] = "
	MySQL supporte plusieurs types de table. Chacun de ces types a des propri�t�s particuli�res, et certains
	peuvent acc�l�rer phpAdsNew consid�rablement. MyISAM est le type par d�faut, et est pr�sent dans
	toutes les installations MySQL. Les autres types de tables peuvent ne pas �tre pr�sents sur votre serveur.
";

$GLOBALS['phpAds_hlp_url_prefix'] = "
	phpAdsNew a besoin de savoir o� il est situ� sur le serveur, afin de fonctionner correctement.
	Vous devez sp�cifier l'Url du r�pertoire dans lequel phpAdsNew est install�, par exemple:
	http://www.monsite.fr/phpAdsNew
";

$GLOBALS['phpAds_hlp_my_header'] =
$GLOBALS['phpAds_hlp_my_footer'] = "
	Vous pouvez mettre ici le chemin vers les fichiers d'en-t�te (ou de pied de page) (Par exemple:
	/home/login/www/header.htm) afin d'avoir des en-t�tes ou des pieds de page sur chaque page de l'interface
	d'administration. Vous pouvez mettre ou bien du texte ou bien de l'html (si vous souhaitez utilisez de
	l'html dans un ou dans ces deux fichiers, veuillez a ne pas mettre de tags comme &lt;body&gt; ou &lt;html&gt;). [NDT:
	les fichiers d'en-t�te et de pied de page seront inclus juste apr�s la balise &lt;body&gt; de la page].
";

$GLOBALS['phpAds_hlp_content_gzip_compression'] = "
	By enabling GZIP content compression you will get a big decrease of the data which 
	is sent to the browser each time a page of the administrator interface is opened. 
	To enable this feature you need to have at least PHP 4.0.5 with the GZIP extention installed.
";
		
$GLOBALS['phpAds_hlp_language'] = "
	Sp�cifiez la langue que vous souhaitez utiliser. Cette langue sera utilis�e par d�faut pour l'interface
	d'administration, et celle de gestion des publicit�s. Veuillez noter que vous pourrez toujours choisir
	une langue diff�rente pour chaque annonceur, ou que vous pourrez autoriser certains d'entres eux � la changer
	par eux-m�mes.
";

$GLOBALS['phpAds_hlp_name'] = "
	Sp�cifiez le nom que vous voulez utiliser pour cette application. Ce nom sera affich� sur toutes les pages
	des interfaces d'administration et de gestion des publicit�s. Si vous laissez ce champ vide (par d�faut), un
	logo phpAdsNew sera affich� � la place.
";

$GLOBALS['phpAds_hlp_company_name'] = "
	Ce nom est utilis� dans les emails envoy�s par phpAdsNew.
";

$GLOBALS['phpAds_hlp_override_gd_imageformat'] = "
	Normalement, phpAdsNew d�tecte automatiquement si la librairie GD est install�e, et quels formats elle
	supporte. Toutefois, il est possible que la d�tection ne se fasse pas ou soit fauss�e, car certaines versions
	de PHP n'autorisent pas la d�tection des types d'images support�s. Si phpAdsNew ne parvient pas � d�tecter
	automatiquement ces formats, vous pouvez sp�cifier directement le bon format. Les valeurs autoris�es sont:
	none, png, jpeg, gif.
";

$GLOBALS['phpAds_hlp_p3p_policies'] = "
	Si vous souhaitez activer la politique de respect de la vie priv�e P3P de phpAdsNew, vous devez utiliser
	cette option. 
";

$GLOBALS['phpAds_hlp_p3p_compact_policy'] = "
	La politique compacte est envoy�e avec les cookies. Ce r�glage par d�faut autorise Internet Explorer 6 �
	accepter les cookies de phpAdsNew. Si vous voulez, vous pouvez modifier ce param�tre afin qu'il corresponde
	� votre propre politique de respect de la vie priv�e.
";

$GLOBALS['phpAds_hlp_p3p_policy_location'] = "
	Si vous utilisez une politique compl�te de respect de la vie priv�e, vous pouvez indiquer l'emplacement de
	votre chartre.
";

$GLOBALS['phpAds_hlp_log_beacon'] = "
	Beacons are small invisible images which are placed on the page where the banner 
	also is displayed. If you turn this feature on phpAdsNew will use this beacon image 
	to count the number of impressions the banner has recieved. If you turn this feature 
	off the impression will be counted during delivery, but this is not entirely accurate, 
	because a delivered banner doesn�t always have to be displayed on the screen. 
";
		
$GLOBALS['phpAds_hlp_compact_stats'] = "
	Traditionnellement, phpAdsNew utilise une journalisation assez intensive, qui est extr�mement d�taill�e,
	mais qui aussi demande beaucoup au niveau serveur SQL. Cela peut se r�v�ler un gros probl�me sur des sites
	avec un grand nombre de visiteurs. Pour s'affranchir de ce probl�me, phpAdsNew supporte aussi un nouveau type
	de statistiques, les statistiques compactes, qui sont beaucoup moins demandantes question serveur SQL, mais qui
	aussi sont moins d�taill�es. Les statistiques compactes ne journalisent que les statistiques quotidiennes.
	Si vous avez besoin des statistiques heure par heure, d�sactivez cette option.
";

$GLOBALS['phpAds_hlp_log_adviews'] = "
	Normalement, tous les affichages sont journalis�s. Si vous ne voulez pas de statistiques concernant les
	affichages, d�sactivez cette option.
";

$GLOBALS['phpAds_hlp_block_adviews'] = "
	If a visitor reloads a page an AdView will be logged by phpAdsNew every time. 
	This feature is used to make sure that only one AdView is logged for each unique 
	banner for the number of seconds you specify. For example: if you set this value 
	to 300 seconds, phpAdsNew will only log AdViews if the same banner isn�t already 
	shown to the same visitor in the last 5 minutes. This feature only works when <i>Use 
	beacons to log AdViews</i> is enabled and if the browser accepts cookies.
";
		
$GLOBALS['phpAds_hlp_log_adclicks'] = "
	Normalement, tous les clics sont journalis�s. Si vous ne voulez pas de statistiques concernant les
	clics, d�sactivez cette option.
";

$GLOBALS['phpAds_hlp_block_adclicks'] = "
	If a visitor clicks multiple times on a banner an AdClick will be logged by phpAdsNew 
	every time. This feature is used to make sure that only one AdClick is logged for each 
	unique banner for the number of seconds you specify. For example: if you set this value 
	to 300 seconds, phpAdsNew will only log AdClicks if the visitor didn�t click on the same 
	banner in the last 5 minutes. This feature only works when the browser accepts cookies.
";
		
$GLOBALS['phpAds_hlp_reverse_lookup'] = "
	Par d�faut, phpAdsNew journalise l'adresse IP de chaque visiteur. Si vous pr�f�rez que phpAdsNew journalise
	plut�t le nom d'h�te, choisissez cette option. La r�solution invers�e prend du temps; cela ralentira
	phpAdsNew.
";

$GLOBALS['phpAds_hlp_proxy_lookup'] = "
	Some users are using a proxy server to access the internet. In that case 
	phpAdsNew will log the IP address or the hostname of the proxy server 
	instead of the user. If you enable this feature phpAdsNew will try to 
	find the ip address or hostname of the user behind the proxy server. 
	If it is not possible to find the exact address of the user it will use 
	the address of the proxy server instead. This option is not enable by default, 
	because it will slow logging down.
";
		
$GLOBALS['phpAds_hlp_ignore_hosts'] = "
	Si vous ne voulez pas compter les clics et les affichages de certaines machines, vous pouvez les entrer
	ci-contre. Si vous avez activ� la requ�te DNS invers�e, vous pouvez entrer des adresses IP et des noms de
	domaines, autrement vous ne pouvez entrer que des adresses IP. Vous pouvez aussi utiliser des jokers
	(Ex: '*.altavista.fr' ou '192.168.*').
";

$GLOBALS['phpAds_hlp_begin_of_week'] = "
	Pour la plupart des gens, la semaine commence le Lundi, mais si vous souhaitez commencer chaque semaine un
	Dimanche, vous pouvez.
";

$GLOBALS['phpAds_hlp_percentage_decimals'] = "
	Sp�cifiez combien les pages de statistiques devront afficher de d�cimales dans leurs pourcentages.
";

$GLOBALS['phpAds_hlp_warn_admin'] = "
	phpAdsNew peut vous envoyer un email si une campagne n'a plus qu'un nombre limit� de clics ou d'affichages
	restants. Cette option est activ�e par d�faut.
";

$GLOBALS['phpAds_hlp_warn_client'] = "
	phpAdsNew peut envoyer � l'annonceur un email si une de ses campagnes n'a plus qu'un nombre limit� de clics
	ou d'affichages restants. Cette option est activ�e par d�faut.
";

$GLOBALS['phpAds_hlp_qmail_patch'] = "
	Some versions of qmail are affected by a bug, which causes e-mail sent by 
	phpAdsNew to show the headers inside the body of the e-mail. If you enable 
	this setting, phpAdsNew will send e-mail in a qmail compatible format.
";
		
$GLOBALS['phpAds_hlp_warn_limit'] = "
	La limite en dessous de laquelle phpAdsNew commence � envoyer les messages d'avertissement. La valeur est
	de 100 par d�faut.
";

$GLOBALS['phpAds_hlp_allow_invocation_plain'] = 
$GLOBALS['phpAds_hlp_allow_invocation_js'] = 
$GLOBALS['phpAds_hlp_allow_invocation_frame'] = 
$GLOBALS['phpAds_hlp_allow_invocation_xmlrpc'] = 
$GLOBALS['phpAds_hlp_allow_invocation_local'] = 
$GLOBALS['phpAds_hlp_allow_invocation_interstitial'] = 
$GLOBALS['phpAds_hlp_allow_invocation_popup'] = "
	These settings allows you to control which invocation types are allowed.
	If one of these invocation types are disabled they will not be available
	in the invocationcode / bannercode generator. Important: the invocation methods
	will still work if disabled, but they are not available for generation.
";

$GLOBALS['phpAds_hlp_con_key'] = "
	phpAdsNew inclut une puissante m�thode de s�lection des banni�res. Pour plus d'informations, reportez vous
	� la documentation. Avec cette option, vous pouvez activer les mots cl�s conditionnels. Cette option
	est activ�e par d�faut.
";

$GLOBALS['phpAds_hlp_mult_key'] = "
	Pour chaque banni�re, vous pouvez sp�cifier un ou plusieurs mots cl�s. Cette option est n�cessaire si vous
	souhaitez sp�cifier plus d'un mot cl�. Cette option est activ�e par d�faut.
";

$GLOBALS['phpAds_hlp_acl'] = "
	Si vous n'utilisez pas les limites d'affichages des banni�res, vous pouvez d�sactiver le contr�le de ces limites
	� chaque affichage, cela acc�l�rera phpAdsNew.
";

$GLOBALS['phpAds_hlp_default_banner_url'] = 
$GLOBALS['phpAds_hlp_default_banner_target'] = "
	Si phpAdsNew ne peut pas se connecter au serveur de donn�es, ou ne peut pas trouver une banni�re correspondant
	� la requ�te, par exemple si la base de donn�es a plant�, ou si elle a �t� supprim�, cela n'affichera rien.
	Certains utilisateurs pr�f�rent sp�cifier une banni�re par d�faut, qui sera affich�e dans ces situations.
	La banni�re par d�faut sp�cifi�e ici ne sera pas compt�e, et ne sera pas utilis�e tant qu'il restera des
	banni�res actives. Cette option est d�sactiv�e par d�faut.
";

$GLOBALS['phpAds_hlp_zone_cache'] = "
	Si vous utilisez des zones, ce param�tre permet � phpAdsNew de stocker les informations sur les banni�res
	dans un cache, qui sera ensuite r�utilis�. Cela acc�l�re un peu phpAdsNew, car plut�t que de r�cup�rer toutes
	les informations de la zone, de r�cup�rer les banni�res, et de s�lectionner la bonne, phpAdsNew a juste
	besoin de lire le cache. Cette option est activ�e par d�faut.
";

$GLOBALS['phpAds_hlp_zone_cache_limit'] = "
	Si vous utilisez le cachage des zones, les informations pr�sentes dans le cache peuvent se p�rimer.
	De temps en temps, phpAdsNew a besoin de reconstruire le cache, afin que les nouvelles banni�res soient incluses.
	Ce param�tre vous laisse d�cider quand un cache doit �tre reconstruit, en sp�cifiant son �ge maximum.
	Par exemple, si vous mettez ici 600, le cache sera reconstruit � chaque fois qu'il aura plus de 10 minutes
	(600 secondes).
";

$GLOBALS['phpAds_hlp_type_sql_allow'] = 
$GLOBALS['phpAds_hlp_type_web_allow'] = 
$GLOBALS['phpAds_hlp_type_url_allow'] = 
$GLOBALS['phpAds_hlp_type_html_allow'] = "
	phpAdsNew peut utiliser diff�rents types de banni�res et les stocker de diff�rentes fa�ons.
	Les deux premi�res options sont utilis�es pour le stockage local des banni�res.
	Vous pouvez utilisez l'interface d'administration pour uploader une banni�re, et phpAdsNew
	la stockera dans une base SQL (Option 1), ou sur un serveur Web (Option 2).
	Vous pouvez aussi utiliser des banni�res stock�es sur des serveurs Web externes (Option 3),
	ou utiliser du HTML pour g�n�rer une banni�re (Option 4). Vous pouvez d�sactiver n'importe laquelle
	de ces m�thodes de stockage, en modifiant ces param�tres. Par d�faut, tous les types de banni�res
	sont autoris�s.
	Si vous d�sactivez un certain type de banni�re alors qu'il en existe encore de ce type, phpAdsNew les
	utilisera toujours, mais ne permettra plus leur cr�ation.
";

$GLOBALS['phpAds_hlp_type_web_mode'] = "
	Si vous souhaitez utiliser des banni�res stock�es sur un serveur Web, vous devez configurer
	ce param�tre. Pour stocker les banni�res sur un r�pertoire local accessible par PHP, choisissez
	'r�pertoire local', et pour les stocker plut�t sur un serveur FTP externe, choisissez 'serveur
	FTP externe'. Sur certains serveurs vous pouvez pr�f�rer l'utilisation de l'option FTP, m�me si celui ci
	est situ� sur le serveur local.
";

$GLOBALS['phpAds_hlp_type_web_dir'] = "
	Sp�cifiez le r�pertoire o� phpAdsNew a besoin de copier les banni�res upload�es.
	Ce r�pertoire DOIT �tre inscriptible par PHP, cela peut signifier que vous soyez oblig�
	de changer les permissions UNIX de ce r�pertoire (chmod). Le r�pertoire que vous sp�cifiez ici DOIT
	�tre situ� sous la racine du serveur Web, ce qui veut dire qu le serveur Web doit servir les fichiers
	de ce r�pertoire librement. N'ajoutez pas un slash (/) final au chemin du r�pertoire.
	Vous n'avez besoin de configurer cette option que si vous avez activ� le stockage en mode local.
";

$GLOBALS['phpAds_hlp_type_web_ftp_host'] = "
	If you set the storing method to <i>External FTP server</i> you need to
        specify the IP address or domain name of the FTP server where phpAdsNew needs 
	to copy the uploaded banners to.
";
      
$GLOBALS['phpAds_hlp_type_web_ftp_path'] = "
	If you set the storing method to <i>External FTP server</i> you need to
        specify the directory on the external FTP server where phpAdsNew needs 
	to copy the uploaded banners to.
";
      
$GLOBALS['phpAds_hlp_type_web_ftp_user'] = "
	If you set the storing method to <i>External FTP server</i> you need to
        specify the username which phpAdsNew must use in order to connect to the
	external FTP server.
";
      
$GLOBALS['phpAds_hlp_type_web_ftp_password'] = "
	If you set the storing method to <i>External FTP server</i> you need to
        specify the password which phpAdsNew must use in order to connect to the
	external FTP server.
";
      
$GLOBALS['phpAds_hlp_type_web_url'] = "
	Si vous stockez les banni�re sur un serveur Web (local ou FTP), phpAdsNew doit connaitre
	l'Url publique associ�e avec le r�pertoire que vous avez sp�cifi� pr�c�demment.
	N'ajoutez pas un slash (/) final au chemin du r�pertoire.
";

$GLOBALS['phpAds_hlp_type_html_auto'] = "
	Si cette option est activ�e, phpAdsNew modifiera automatiquement les banni�res HTML, afin
	de permettre le comptage des clics. N�anmoins, m�me si cette option est activ�e, il sera possible
	de la d�sactiver pour certaines banni�res.
";

$GLOBALS['phpAds_hlp_type_html_php'] = "
	Il est possible de laisser phpAdsNew ex�cuter du code PHP inclus dans des banni�res HTML.
	Cette option est d�sactiv�e par d�faut.
";

$GLOBALS['phpAds_hlp_admin'] = "
	Le nom d'utilisateur de l'administrateur: vous pouvez sp�cifier ici le nom d'utilisateur que
	vous devez utiliser pour entrer dans l'interface d'administration.";

$GLOBALS['phpAds_hlp_pwold'] = 
$GLOBALS['phpAds_hlp_pw'] = 
$GLOBALS['phpAds_hlp_pw2'] = "
        To change the administrator password, you can need to specify the old
	password above. Also you need to specify the old password twice, to
	prevent typing errors.
";

$GLOBALS['phpAds_hlp_admin_fullname'] = "
	Sp�cifiez ici le nom complet de l'administrateur. Ce param�tre est utilis� pour signer les
	statistiques envoy�es par email.
";

$GLOBALS['phpAds_hlp_admin_email'] = "
	L'adresse email de l'administrateur. Ce param�tre est utilis� comme 'from-address'
	dans les emails de statistiques.
";

$GLOBALS['phpAds_hlp_admin_email_headers'] = "
	Vous pouvez ajouter des en-t�tes email que phpAdsNew ajoutera � tout mail sortant.
";

$GLOBALS['phpAds_hlp_admin_novice'] = "
	Si vous souhaitez recevoir un avertissement lors de l'effacement d'annonceurs, de campagnes, ou
	de banni�res. Il est tr�s vivement conseill� de laisser cette option activ�e.
";

$GLOBALS['phpAds_hlp_client_welcome'] = 
$GLOBALS['phpAds_hlp_client_welcome_msg'] = "
	Si vous activez cette option, un message de bienvenue sera affich� sur la premi�re page qu'un annonceur
	voit apr�s s'�tre connect�. Vous pouvez le personnaliser, en �ditant le fichier 'admin/templates/welcome.html'.
	Choses que vous pourriez vouloir �crire par exemple: le nom de votre entrepris, les informations concernant
	les contacts, le logo de votre entreprise, un lien vers les tarifs des publicit�s, etc...
";

$GLOBALS['phpAds_hlp_updates_frequency'] = "
		If you want to check for new versions of phpAdsNew you can enable this feature. 
		It is possible the specify the interval in which phpAdsNew makes a connection to 
		the update server. If a new version is found a dialog box will pop up with additional 
		information about the update.
";
		
$GLOBALS['phpAds_hlp_userlog_email'] = "
		If you want to keep a copy of all outgoing e-mail messages send by phpAdsNew you 
		can enable this feature. The e-mail messages are stored in the userlog.
";
		
$GLOBALS['phpAds_hlp_userlog_priority'] = "
		To ensure the priority calculation ran correct, you can save a report about 
		the hourly calculation. This report includes the predicted profile and how much 
		priority is assigned to all banners. This information might be useful if you 
		want to submit a bugreport about the priority calculations. The reports are 
		stored inside the userlog.
";
		
$GLOBALS['phpAds_hlp_default_banner_weight'] = "
		If you want to use a higher default banner weight you can specify the desired weight here. 
		This settings is 1 by default.
";
		
$GLOBALS['phpAds_hlp_default_campaign_weight'] = "
		If you want to use a higher default campaign weight you can specify the desired weight here. 
		This settings is 1 by default.
";
		
$GLOBALS['phpAds_hlp_gui_show_campaign_info'] = "
		If this option is enabled extra information about each campain will be shown on the 
		<i>Campaign overview</i> page. The extra information includes the number of AdViews remaining, 
		the number of AdClicks remaining, activation date, expiration date and the priority settings.
";
		
$GLOBALS['phpAds_hlp_gui_show_banner_info'] = "
		If this option is enabled extra information about each banner will be shown on the 
		<i>Banner overview</i> page. The extra information includes the destination URL, keywords, 
		size and the banner weight.
";
		
$GLOBALS['phpAds_hlp_gui_show_campaign_preview'] = "
		If this option is enabled a preview of all banners will be shown on the <i>Banner overview</i> 
		page. If this option is disabled it is still possible to show a preview of each banner by click 
		on the triangle next to each banner on the <i>Banner overview</i> page.
";
		
$GLOBALS['phpAds_hlp_gui_show_banner_html'] = "
		If this option is enabled the actual HTML banner will be shown instead of the HTML code. This 
		option is disabled by default, because the HTML banners might conflict with the user interface. 
		If this option is still possible to view the actual HTML banner, by clicking on the <i>Show banner</i>
		button next to the HTML code.
";
		
$GLOBALS['phpAds_hlp_gui_show_banner_preview'] = "
		If this option is enabled a preview will be shown at the top of the <i>Banner properties</i>, 
		<i>Delivery option</i> and <i>Linked zones</i> pages. If this option is disabled it is still 
		possible to view the banner, by clicking on the <i>Show banner</i> button at the top of the pages.
";
		
$GLOBALS['phpAds_hlp_gui_hide_inactive'] = "
		If this option is enabled all inactive banners, campaigns and advertisers will be hidden from the
		<i>Advertisers & Campaigns</i> and <i>Campaign overview</i> pages. If this option is enabled it is
		still possible to view the hidden items, by clicking on the <i>Show all</i> button on the bottom
		of the page.
";

?>