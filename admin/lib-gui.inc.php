<?php // $Revision: 1.6 $

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



// Define defaults
$phpAds_Message = '';
$phpAds_NavDone = False;



/*********************************************************/
/* Show navigation                                       */
/*********************************************************/

function phpAds_ShowNav($ID, $extra="")
{
	global $phpAds_table_back_color;
	global $pages;
	global $strNavigation;
	global $phpAds_Message, $phpAds_NavDone;
	
	$phpAds_NavDone = True;
	
	if ($ID != "")
	{
		$sections = explode(".", $ID);
		$sectionID = "";
		
		echo "<b>$strNavigation</b><br>";
		echo "<img src='images/break.gif' height='1' width='160' vspace='4'><br>";
		
		for ($i=0; $i<count($sections)-1; $i++)
		{
			$sectionID .= $sections[$i];
			list($filename, $title) = each($pages["$sectionID"]);
			$sectionID .= ".";
			
			if ($i==0)
			{
				echo "<img src='images/caret-t.gif' width='11' height='7'>&nbsp;";
				echo "<a href=$filename>$title</a>";
				echo "<br>"; 
				echo "<img src='images/break.gif' height='1' width='160' vspace='4'><br>";
			}
			else
			{
				echo "<img src='images/caret-u.gif' width='11' height='7'>&nbsp;";
				echo "<a href=$filename>$title</a>";
				echo "<br>"; 
			}
		}
		
		list($filename, $title) = each($pages["$ID"]);
		echo "<img src='images/caret-u.gif' width='11' height='7'>&nbsp;";
		echo "$title<br>";
		echo "<img src='images/break.gif' height='1' width='160' vspace='4'><br>";
		
		if ($extra!="") echo $extra;
	}
	else
	{
		echo "&nbsp;";
	}
	
	?>
		</td>
    <td width="1" bgcolor="#888888"><img src="images/spacer.gif" width="1" height="20"></td>
    <td width="30">&nbsp;</td>
    <td valign="top" width="100%">
	<table width="600" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>
	<?
	
	if ($phpAds_Message != '')
	{
		echo "<table border='0' cellpadding='1' cellspacing='1' width='100%'><tr><td bgcolor='#000088'>";
			echo "<table border='0' cellpadding='5' cellspacing='0' width='100%'>";
			echo "<tr bgcolor='#EEEEEE'>";
			echo "<td width='20' valign='top'><img src='images/info.gif' hspace='3'></td>";
			echo "<td valign='top'><b>$phpAds_Message</b></td>";
			echo "</tr></table>";
		echo "</td></tr></table>";
		echo "<br><br>";
	}
}



/*********************************************************/
/* Show page header                                      */
/*********************************************************/

function phpAds_PageHeader($title = false)
{
	global $pages, $phpAds_name, $phpAds_main_back_color, $phpAds_table_border_color, $phpAds_my_header, $strLogout, $phpAds_CharSet;

	header ("Content-Type: text/html".($phpAds_CharSet != "" ? "; charset=".$phpAds_CharSet : ""));

?>
<html>
	<head>
		<title><?echo $title;?></title>
		<meta http-equiv='Content-Type' content='text/html<? echo $phpAds_CharSet != "" ? "; charset=".$phpAds_CharSet : "" ?>'>
		<meta name='author" content='phpAdsNew - http://sourceforge.net/projects/phpadsnew'>
		<link rel='stylesheet' href='interface.css'>
		<script language='JavaScript' src='interface.js'></script>
	</head>
	
<body bgcolor='#FFFFFF' text='#000000' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>
<table width='100%' height='100%' border='0' cellspacing='0' cellpadding='0'>
  <tr><td colspan='6' class='location' height='32' bgcolor='#003399'>&nbsp;</td></tr>
  <tr>
  	<td colspan='6' class='location' height='32' bgcolor='#003399'>
	  <span class='phpAdsNew'>&nbsp;&nbsp;&nbsp;<?echo $phpAds_name;?>&nbsp;&nbsp;&nbsp;</span>
	  <?echo $title!=""?"[ ".$title." ]":"";?>
    </td>
  </tr>
  <tr bgcolor='#000066'><td colspan='6' class='topnav' height='20' align='right'>&nbsp;</td></tr>
  <tr> 
    <td height='30' width='15' bgcolor='#EEEEEE'><img src='images/spacer.gif' width='15' height='30'></td>
    <td height='30' width='160' bgcolor="#EEEEEE"><img src='images/spacer.gif' width='160' height='30'></td>
    <td height='30' width='1' bgcolor="#888888"><img src='images/spacer.gif' width='1' height='30'></td>
    <td height='30' width='30'><img src='images/spacer.gif' width='30' height='30'></td>
    <td height='30' width='100%'>&nbsp;</td>
    <td height='30' width='20'><img src='images/spacer.gif' width='20' height='30'></td>
  </tr>
  <tr> 
    <td width='15' bgcolor='#EEEEEE'>
		<script language='JavaScript'>
		<!--
			// Workaround for GUI rendering in Netscape and IE for Mac
			// This needs to be fixed before final release --Niels
			if(document.all){
				height=document.body.offsetHeight-6;
			} else {
				height=window.innerHeight;
			}

			document.write ("<img src='images/spacer.gif' width='15' height='");
			document.write (height - 174);
			document.write ("'>");
		//-->
		</script>
		<noscript>&nbsp;</noscript>
	</td>
	<td width='160' bgcolor='#EEEEEE' valign='top' class='nav'>
<?
}



/*********************************************************/
/* Show page footer                                      */
/*********************************************************/

function phpAds_PageFooter()
{
	global $phpAds_my_footer, $strLogout, $strPreferences;
			?>
			</tr>
      </table>
    </td>
    <td width='20'>&nbsp;</td>
  </tr>
  <tr> 
    <td width='15' bgcolor='#EEEEEE' height='10'><img src='images/spacer.gif' width='15' height='20'></td>
    <td width='160' bgcolor='#EEEEEE' height="10"><img src='images/spacer.gif' width='160' height='20'></td>
    <td width='1' bgcolor='#888888' height="10"><img src='images/spacer.gif' width='1' height='20'></td>
    <td width='30' height='10'><img src='images/spacer.gif' width='30' height='20'></td>
    <td height='10' width='100%'>&nbsp;</td>
    <td width='20' height='10'><img src='images/spacer.gif' width='20' height='20'></td>
  </tr>
  <tr bgcolor='#003399'> 
    <td colspan='6' class='topnav' height='20' align='right'>
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <?
	  	if (phpAds_isUser(phpAds_Client) && phpAds_isAllowed(phpAds_ModifyInfo))
		{
			print "<a href='client-edit.php'><img src='images/go.gif' border='0'></a>&nbsp;&nbsp;";
			print "<a href='client-edit.php' class='topnav'>$strPreferences</a>";
		}
	  ?>
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
	  <a href='logout.php'><img src='images/go.gif' border='0'></a>&nbsp;&nbsp;<a href='logout.php' class='topnav'><?print $strLogout;?></a>
	  &nbsp;&nbsp;&nbsp;
	</td>
  </tr>
  <tr> 
    <td colspan='6' class='topnav' height='20' bgcolor='#CCCCCC'>&nbsp;&nbsp;&nbsp;phpAdsNew 2.0beta2</td>
  </tr>
</table>
<?
if (!empty($phpAds_my_footer))
{
	include ($phpAds_my_footer);
}
?>
</body>
</html>
<?
} 



/*********************************************************/
/* Show a messagebox                                     */
/*********************************************************/

function phpAds_ShowMessage($message)
{
	global $phpAds_Message;
	
	$phpAds_Message = $message;
}



/*********************************************************/
/* Show a the last SQL error and die                      */
/*********************************************************/

function mysql_die()
{
	global $strMySQLError;
    global $phpAds_last_query;
	global $phpAds_NavDone;
	
	if ($phpAds_NavDone == False) phpAds_ShowNav(0);
	
	echo "<table border='0' cellpadding='1' cellspacing='1' width='100%'><tr><td bgcolor='#FF0000'>";
		echo "<table border='0' cellpadding='5' cellspacing='0' width='100%'>";
		echo "<tr bgcolor='#EEEEEE'>";
		echo "<td width='20' valign='top'><img src='images/error.gif' hspace='3'></td>";
		echo "<td valign='top'>";
		echo "<b>$strMySQLError</b><br>";
		echo mysql_error()."<br><br>";
		echo "<b>SQL Query:</b><br>";
		echo "$phpAds_last_query<br>";
		echo "</td>";
		echo "</tr></table>";
	echo "</td></tr></table>";
	echo "<br><br>";
	
	// die
	phpAds_PageFooter();
	exit;
}



/*********************************************************/
/* Display a custom error message and die                */
/*********************************************************/

function php_die($title="Error", $message="Unkown error")
{
	global $phpAds_NavDone;
	
	if ($phpAds_NavDone == False) phpAds_ShowNav(0);
	
	echo "<table border='0' cellpadding='1' cellspacing='1' width='100%'><tr><td bgcolor='#FF0000'>";
		echo "<table border='0' cellpadding='5' cellspacing='0' width='100%'>";
		echo "<tr bgcolor='#EEEEEE'>";
		echo "<td width='20' valign='top'><img src='images/error.gif' hspace='3'></td>";
		echo "<td valign='top'>";
		echo "<b>$title</b><br>";
		echo "$message<br>";
		echo "</td>";
		echo "</tr></table>";
	echo "</td></tr></table>";
	echo "<br><br>";
	
	// die
	phpAds_PageFooter();
	exit;
}

?>
