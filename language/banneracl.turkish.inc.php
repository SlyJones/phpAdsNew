<?
// english doc file for Banner ACL administration
?>
<BR>
<table border="0" width="100%">
	<TR>
		<TD bgcolor="#CCCCCC">
			<table width="100%" cellspacing="1" cellpadding="5">
				<tr> 
					<td bgcolor="#FFFFFF"><b>Ba�l�k</b></td>
					<td bgcolor="#FFFFFF"><b>De�er</b></td>
					<td bgcolor="#FFFFFF"><b>A��klama</b></td>
				</tr>
				<tr> 
					<td bgcolor="#FFFFFF">M��teri IP</td>
					<td bgcolor="#FFFFFF">IP net/mask: ip.ip.ip.ip/mask.mask.mask.mask, �rnek: 127.0.0.1/255.255.255.0</td>
					<td bgcolor="#FFFFFF">Banner� belirtilen IP grubuna g�sterir.</td>
				</tr>
				<tr> 
					<td bgcolor="#FFFFFF">Taray�c� regexp</td>
					<td bgcolor="#FFFFFF">Taray�c� tan�yabilen regular expression, �rne�in ^Mozilla/4.? </td>
		 			<td bgcolor="#FFFFFF">Banner� belirtilen kritere uyan taray�c�lara g�sterir.</td>
				</tr>
				<tr> 
					<td bgcolor="#FFFFFF">G�nler (0-6)</td>
					<td bgcolor="#FFFFFF">Haftan�n g�nleri, 0 = Pazar, 6 = Cumartesi</td>
					<td bgcolor="#FFFFFF">Banner� belirtilen g�nlerde g�sterir.</td>
				</tr>
				<tr>
					<td bgcolor="#FFFFFF">Alanad�</td>
					<td bgcolor="#FFFFFF">�rne�in .jp, .edu, google.com)</td>
					<td bgcolor="#FFFFFF">Banner� belirtilen �lkelere veya alan adlar�na g�sterir.</td>
				</tr>
				<tr>
					<td bgcolor="#FFFFFF">Kaynak</td>
					<td bgcolor="#FFFFFF">Kaynak sayfan�n ad�</td>
					<td bgcolor="#FFFFFF">Banner� belirtilen sayfalarda g�sterir.</td>
				</tr>
                <tr> 
                    <td bgcolor="#FFFFFF">Saat (0-23)</td>
                    <td bgcolor="#FFFFFF">G�n�n saatleri, 0 = geceyar�s�,  23 = Gece 11</td>
                    <td bgcolor="#FFFFFF">Banner� g�n�n belirtilen saatlerinde g�sterir.</td>
                </tr>
			</table>
		</TD>
	</TR>
</table>
<p>�rne�in bu banner� sadece hafta sonlar� g�stermek istiyorsunuz, bu durumda 2 adet ACL eklemelisiniz:</p>
<ul>
	<li>G�nler (0-6), <? echo $strAllow; ?>, de�er 6 (Cumartesi ��in)</li>
	<li>G�nler (0-6), <? echo $strAllow; ?>, de�er 0 (Pazar ��in)</li>
    <li>G�nler (0-6), <? echo $strDeny; ?>, de�er * (Di�er G�nler ��in)</li>
</ul>
<!--Note that the last entry need not have been &quot;Weekday&quot;.  Any <? echo $strDeny; ?> *
ACL would suffice to deny any ad if an associated <? echo $strAllow; ?> had not already been matched.-->

<p>Banner� ak�am 5 ve ak�am 8 aras� g�stermek i�in:</p>
<ul>
    <li>Saat, <? echo $strAllow; ?>, de�er 17</li>  (17:00 - 17:59)
    <li>Saat, <? echo $strAllow; ?>, de�er 18</li>  (18:00 - 18:59)
	<li>Saat, <? echo $strAllow; ?>, de�er 19</li>  (19:00 - 19:59)
    <li>Saat, <? echo $strDeny; ?>, de�er * (di�er t�m saatler)</li>
</ul>
<?
// EOF english doc file for Banner ACL administration
?>
