<?php // $Revision: 1.13 $

/************************************************************************/
/* phpAdsNew 2                                                          */
/* ===========                                                          */
/*                                                                      */
/* Copyright (c) 2001 by the phpAdsNew developers                       */
/* http://sourceforge.net/projects/phpadsnew                            */
/*                                                                      */
/* Translation by Rachim Tamsjadi. Please send corrections              */
/* to tamsjadi@icqmail.com                                              */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/



// Installer translation strings
$GLOBALS['strInstall']				= "Instalasi";
$GLOBALS['strChooseInstallLanguage']		= "Silakan pilih bahasanya prosedur instalasi program";
$GLOBALS['strLanguageSelection']		= "Pilihan bahasa";
$GLOBALS['strDatabaseSettings']			= "Setingan Database";
$GLOBALS['strAdminSettings']			= "Setingan Administrator";
$GLOBALS['strAdvancedSettings']			= "Setingan tingkat lanjutan";
$GLOBALS['strOtherSettings']			= "Setingan lain-lain";

$GLOBALS['strWarning']				= "Peringatan";
$GLOBALS['strFatalError']			= "Telah terjadi fatal error";
$GLOBALS['strAlreadyInstalled']			= "phpAdsNew sudah terinstal di sistem ini. Bila Anda ingin konfigurasikan phpAdsNew silakan buka <a href='settings-index.php'>settings interface</a>";
$GLOBALS['strCouldNotConnectToDB']		= "Gagal dalam koneksi ke database. Silakan recheck setingan yang Anda telah spesifikasikan";
$GLOBALS['strCreateTableTestFailed']		= "User yang Anda pilih tidak miliki izin untuk create atau update struktur database. Silakan hubungi database administrator.";
$GLOBALS['strUpdateTableTestFailed']		= "User yang Anda pilih tidak miliki izin untuk update struktur database. Silakan hubungi database administrator.";
$GLOBALS['strTablePrefixInvalid']		= "Table prefix mengandung karakter invalid";
$GLOBALS['strTableInUse']			= "Database yang Anda pilih telah dipakai untuk phpAdsNew. Silakan pilih table prefix lain atau baca buku panduan untuk instruksi upgrade.";
$GLOBALS['strMayNotFunction']			= "Sebelum Anda lanjut silakan koreksi masalah potensional sebagai berikut:";
$GLOBALS['strIgnoreWarnings']			= "Abaikan Peringatan";
$GLOBALS['strWarningPHPversion']		= "Untuk berfungsi dengan baik phpAdsNew mendasarkan PHP 3.0.8 atau versi lebih tinggi. Versi PHP dalam sistem Anda adalah {php_version}.";
$GLOBALS['strWarningRegisterGlobals']		= "Variable register_globals dalam konfigurasi PHP perlu diubah ke On.";
$GLOBALS['strWarningMagicQuotesGPC']		= "Variable magic_quotes_gpc dalam konfigurasi PHP perlu diubah ke On.";
$GLOBALS['strWarningMagicQuotesRuntime']	= "Variable magic_quotes_runtime dalam konfigurasi PHP perlu diubah ke Off.";
$GLOBALS['strConfigLockedDetected']		= "phpAdsNew telah mendedeksi bahwa file <b>config.inc.php</b> di sistem Anda tidak bisa ditulis oleh server.<br> Untuk lanjutkan instalasi permission dari file tersebut perlu diubah terlebih dahulu. <br>Silakan baca dokumentasi yang dilampirkan bila Anda tidak tahu caranya.";
$GLOBALS['strCantUpdateDB']  			= "Database pada saat ini tidak bisa di-update. Bila instalasi dilanjut seluruh banner, statistik dan Client akan terhapus.";
$GLOBALS['strTableNames']			= "Table Names";
$GLOBALS['strTablesPrefix']			= "Table names prefix";
$GLOBALS['strTablesType']			= "Table type";

$GLOBALS['strInstallWelcome']			= "Selamat Datang di phpAdsNew";
$GLOBALS['strInstallMessage']			= "Sebelum phpAdsNew bisa berfungsi dengan baik program perlu dikonfigurasi dan <br> sebuah database perlu dibuat. Klik <b>Lanjut</b> untuk lanjut.";
$GLOBALS['strInstallSuccess']			= "<b>Instalasi program phpAdsNew sudah selesai.</b><br><br>Untuk menjamin program phpAdsNew tetap berfungsi dengan baik silakan periksa kembali
										   supaya file maintenance dijalankan pada setiap hari. Informasi lebih lanjut tentang hal ini bisa diketemukan dalam dokumentasi.
										   <br><br>Klik <b>Lanjut</b> untuk lanjut ke halaman konfigurasi dan setingan yang lebih luas. Jangan lupa kunci kembali file konfigurasi config.inc.php setelah Anda selesai untuk menghindar terjadinya kelemahan pada sistem pengamanan program.";


$GLOBALS['strInstallNotSuccessful']		= "<b>Instalasi program phpAdsNew tidak selesai dengan sukses.</b><br><br>Ada bagian dalam proses instalasi yang tidak komplit.
										   Ada kemungkinan bahwa masalah ini hanya timbul dalam waktu terbatas. Bila begitu silakan klik <b>Lanjut</b> untuk kembali ke
										   tingkat pertama pada proses instalasi. Bila diperlukan informasi lebih lanjut tentang error message dibawah ini dan cara untuk mengatasinya 
										   silakan belajari dokumentasi yang disediakan.";
$GLOBALS['strErrorOccured']			= "Telah terjadi Error sebagai berikut:";
$GLOBALS['strErrorInstallDatabase']		= "Struktur database tidak bisa dibangun.";
$GLOBALS['strErrorInstallConfig']		= "File konfigurasi atau database tidak bisa di-update.";
$GLOBALS['strErrorInstallDbConnect']		= "Gagal membuka koneksi ke database.";

$GLOBALS['strUrlPrefix']			= "Prefix URL";

$GLOBALS['strProceed']				= "Lanjut &gt;";
$GLOBALS['strRepeatPassword']			= "Ulangi Kata Sandi";
$GLOBALS['strNotSamePasswords']			= "Kata Sandi tidak sama";
$GLOBALS['strInvalidUserPwd']			= "Username atau Kata Sandi salah ";

$GLOBALS['strUpgrade']				= "Upgrade";
$GLOBALS['strSystemUpToDate']			= "Sistem Anda sudah up to date dan untuk sementara waktu tidak perlu di-update. <br>Klik <b>Lanjut</b> untuk lanjut ke homepage.";
$GLOBALS['strSystemNeedsUpgrade']		= "Struktur database dan file konfigurasi perlu di-upgrade untuk berfungsi semestinya. Klik <b>Lanjut</b> untuk mulai proses upgrade. <br>Mohon kesabaran, proses upgrade bisa berlanjut berberapa menit.";
$GLOBALS['strSystemUpgradeBusy']		= "Upgrade sistem dalam proses, silakan tunggu...";
$GLOBALS['strServiceUnavalable']		= "Fungsi ini untuk sementara tidak dapat digunakan. Upgrade sistem dalam proses";

$GLOBALS['strConfigNotWritable']		= "File config.inc.php tidak bisa ditulis";





/*********************************************************/
/* Configuration translations                            */
/*********************************************************/

// Global
$GLOBALS['strChooseSection']			= "Pilih Bagian";
$GLOBALS['strDayFullNames'] 			= array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
$GLOBALS['strEditConfigNotPossible']    	= "Gagal meng-edit setingan ini dikarenakan file konfigurasi dikunci guna menjaga keamanan sistem. ".
										  "Untuk perubahan file config.inc.php perlu di un-lock terlebih dahulu.";
$GLOBALS['strEditConfigPossible']		= "File konfigurasi terbuka untuk di-edit sehubungan file tersebut pada saat ini tidak dikunci. Ingat bahwa hal ini bisa menimbulkan kecerobohan dalam keamanan sistem. ".
										  "Bila Anda ingin mengamankan sistem, silakan kunci kembali file config.inc.php";



// Database
$GLOBALS['strDatabaseSettings']			= "Setingan dari Database";
$GLOBALS['strDatabaseServer']			= "Server dari Database";
$GLOBALS['strDbHost']				= "Hostname dari Database";
$GLOBALS['strDbUser']				= "Username dari Database";
$GLOBALS['strDbPassword']			= "Password dari Database";
$GLOBALS['strDbName']				= "Nama dari Database";

$GLOBALS['strDatabaseOptimalisations']		= "Optimalisasi Database";
$GLOBALS['strPersistentConnections']		= "Gunakan koneksi persistent";
$GLOBALS['strInsertDelayed']			= "Gunakan delayed inserts";
$GLOBALS['strCompatibilityMode']		= "Gunakan database compatibility mode";
$GLOBALS['strCantConnectToDb']			= "Tidak bisa konekt ke database";



// Invocation and Delivery
$GLOBALS['strInvocationAndDelivery']		= "Setingan Invocation dan Delivery";

$GLOBALS['strKeywordRetrieval']			= "Retrieval Keyword";
$GLOBALS['strBannerRetrieval']			= "Metode retrieval banner";
$GLOBALS['strRetrieveRandom']			= "Retrieval banner secara random (default)";
$GLOBALS['strRetrieveNormalSeq']		= "Retrieval banner secara Normal sequental";
$GLOBALS['strWeightSeq']			= "Retrieval banner secara Weight based sequential";
$GLOBALS['strFullSeq']				= "Retrieval banner secara Full sequential";
$GLOBALS['strUseConditionalKeys']		= "Gunakan conditional keywords";
$GLOBALS['strUseMultipleKeys']			= "Gunakan multiple keywords";
$GLOBALS['strUseAcl']				= "Gunakan display limitations";

$GLOBALS['strZonesSettings']			= "Retrieval Zona";
$GLOBALS['strZoneCache']			= "Zona Cache, fungsi ini dipakai untuk memperlancar proses jika fungsi zona digunakan";
$GLOBALS['strZoneCacheLimit']			= "Waktu meng-update cache (dalam detik)";
$GLOBALS['strZoneCacheLimitErr']		= "Waktu antara cache updates, perlu angka positive integer";

$GLOBALS['strP3PSettings']			= "Gunakan P3P Privacy Policies";
$GLOBALS['strUseP3P']				= "Gunakan P3P Policies";
$GLOBALS['strP3PCompactPolicy']			= "Gunakan P3P Compact Policy";
$GLOBALS['strP3PPolicyLocation']		= "Gunakan P3P Policy Location";



// Banner Settings
$GLOBALS['strBannerSettings']			= "Setingan Banner";

$GLOBALS['strAllowedBannerTypes']		= "Tipe banner yang diperbolekan";
$GLOBALS['strTypeSqlAllow']			= "Izinkan banner yang disimpan dalam database SQL";
$GLOBALS['strTypeWebAllow']			= "Izinkan banner yang disimpan pada Webserver";
$GLOBALS['strTypeUrlAllow']			= "Izinkan URL banner";
$GLOBALS['strTypeHtmlAllow']			= "Izinkan HTML banner";

$GLOBALS['strTypeWebSettings']			= "Konfigurasi Web banner";
$GLOBALS['strTypeWebMode']			= "Metode Penyimpanan";
$GLOBALS['strTypeWebModeLocal']			= "Local mode (disimpan dalam direktori lokal)";
$GLOBALS['strTypeWebModeFtp']			= "FTP mode (disimpan pada external FTP server)";
$GLOBALS['strTypeWebDir']			= "Direktori Local mode Web banner";
$GLOBALS['strTypeWebFtp']			= "FTP mode Web banner server";
$GLOBALS['strTypeWebUrl']			= "URL publik di direktori lokal / FTP server";
$GLOBALS['strTypeFTPHost']			= "FTP Host";
$GLOBALS['strTypeFTPDirectory']			= "Host directory";
$GLOBALS['strTypeFTPUsername']			= "Login";
$GLOBALS['strTypeFTPPassword']			= "Password";

$GLOBALS['strDefaultBanners']			= "Banner Default";
$GLOBALS['strDefaultBannerUrl']			= "Default Banner URL";
$GLOBALS['strDefaultBannerTarget']		= "Default Banner Target";

$GLOBALS['strTypeHtmlSettings']			= "HTML banner options";
$GLOBALS['strTypeHtmlAuto']			= "Automatically change HTML banners in order to force click logging";
$GLOBALS['strTypeHtmlPhp']			= "Izinkan PHP expressions dieksekusi dalam banner HTML";



// Statistics Settings
$GLOBALS['strStatisticsSettings']		= "Setingan Statistik";

$GLOBALS['strStatisticsFormat']			= "Format Statistik";
$GLOBALS['strLogBeacon']			= "Gunakan beacons untuk me-log Adviews";
$GLOBALS['strCompactStats']			= "Gunakan Compact Stats";
$GLOBALS['strLogAdviews']			= "Log Adviews";
$GLOBALS['strBlockAdviews']			= "Multiple log protection (sec.)";
$GLOBALS['strLogAdclicks']			= "Log Adclicks";
$GLOBALS['strBlockAdclicks']			= "Multiple log protection (sec.)";

$GLOBALS['strEmailWarnings']			= "Warning E-mail";
$GLOBALS['strAdminEmailHeaders']		= "Mail Header untuk mengidentifikasikan laporan harian dari server pengirim";
$GLOBALS['strWarnLimit']			= "Warn Limit";
$GLOBALS['strWarnLimitErr']			= "Warn Limit harus angka positive integer";
$GLOBALS['strWarnAdmin']			= "Warn Admin";
$GLOBALS['strWarnClient']			= "Warn Client";
$GLOBALS['strQmailPatch']			= "Enable qmail patch";

$GLOBALS['strRemoteHosts']			= "Remote hosts";
$GLOBALS['strIgnoreHosts']			= "Ignore Hosts";
$GLOBALS['strReverseLookup']			= "Reverse DNS Lookup";
$GLOBALS['strProxyLookup']			= "Proxy Lookup";



// Administrator settings
$GLOBALS['strAdministratorSettings']		= "Setingan Administrator";

$GLOBALS['strLoginCredentials']			= "Data umum untuk Login";
$GLOBALS['strAdminUsername']			= "Username dari Admin";
$GLOBALS['strOldPassword']			= "Kata Sandi lama";
$GLOBALS['strNewPassword']			= "Kata Sandi baru";
$GLOBALS['strInvalidUsername']			= "Username tidak berlaku";
$GLOBALS['strInvalidPassword']			= "Kata Sandi tidak berlaku";

$GLOBALS['strBasicInformation']			= "Informasi dasar";
$GLOBALS['strAdminFullName']			= "Nama lengkap Admin";
$GLOBALS['strAdminEmail']			= "Alamat e-mail Admin";
$GLOBALS['strCompanyName']			= "Nama perusahaan";

$GLOBALS['strAdminNovice']			= "Pemakaian tombol Delete oleh Admin perlu konfirmasi demi keamanan";
$GLOBALS['strUserlogEmail']			= "Log all outgoing email messages";
$GLOBALS['strUserlogPriority']			= "Log hourly priority calculations";


// User interface settings
$GLOBALS['strGuiSettings']			= "Interface Konfigurasi bagi User";

$GLOBALS['strGeneralSettings']			= "Setingan Umum";
$GLOBALS['strAppName']				= "Nama Aplikasi";
$GLOBALS['strMyHeader']				= "Header kami";
$GLOBALS['strMyFooter']				= "Footer kami";
$GLOBALS['strGzipContentCompression']		= "Use GZIP content compression";

$GLOBALS['strClientInterface']			= "Interface Client";
$GLOBALS['strClientWelcomeEnabled']		= "Aktifkan Client welcome message";
$GLOBALS['strClientWelcomeText']		= "Client Welcome text<br>(HTML tags diizinkan)";



// Interface defaults
$GLOBALS['strInterfaceDefaults']		= "Defaults dari Interface";

$GLOBALS['strInventory']			= "Inventory";
$GLOBALS['strShowCampaignInfo']			= "Show extra campaign info on <i>Campaign overview</i> page";
$GLOBALS['strShowBannerInfo']			= "Show extra banner info on <i>Banner overview</i> page";
$GLOBALS['strShowCampaignPreview']		= "Show preview of all banners on <i>Banner overview</i> page";
$GLOBALS['strShowBannerHTML']			= "Show actual banner instead of plain HTML code for HTML banner preview";
$GLOBALS['strShowBannerPreview']		= "Show banner preview at the top of pages which deals with banners";

$GLOBALS['strStatisticsDefaults'] 		= "Statistik";
$GLOBALS['strBeginOfWeek']			= "Awal dari minggu";
$GLOBALS['strPercentageDecimals']		= "Desimal Persentase";

$GLOBALS['strWeightDefaults']			= "Default weight";
$GLOBALS['strDefaultBannerWeight']		= "Default banner weight";
$GLOBALS['strDefaultCampaignWeight']		= "Default campaign weight";
$GLOBALS['strDefaultBannerWErr']		= "Default banner weight perlu angka positive integer";
$GLOBALS['strDefaultCampaignWErr']		= "Default campaign weight perlu angka positive integer";



// Not used at the moment
$GLOBALS['strTableBorderColor']			= "Table Border Color";
$GLOBALS['strTableBackColor']			= "Table Back Color";
$GLOBALS['strTableBackColorAlt']		= "Table Back Color (Alternative)";
$GLOBALS['strMainBackColor']			= "Main Back Color";
$GLOBALS['strOverrideGD']			= "Override GD Imageformat";
$GLOBALS['strTimeZone']				= "Zona Waktu";

?>