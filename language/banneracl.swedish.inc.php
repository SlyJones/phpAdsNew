<?
// Swedish doc file for Banner ACL administration
?>
<BR>
<table border="0" width="100%">
	<TR>
		<TD bgcolor="#CCCCCC">
			<table width="100%" cellspacing="1" cellpadding="5">
				<tr> 
					<td bgcolor="#FFFFFF"><b>Titel</b></td>
					<td bgcolor="#FFFFFF"><b>Argument</b></td>
					<td bgcolor="#FFFFFF"><b>Beskrivning</b></td>
				</tr>
				<tr> 
					<td bgcolor="#FFFFFF">Klient-IP</td>
					<td bgcolor="#FFFFFF">IP-n�t/mask: ip.ip.ip.ip/mask.mask.mask.mask, for example 127.0.0.1/255.255.255.0</td>
					<td bgcolor="#FFFFFF">Visa enbart banner f�r den angivna IP-regionen.</td>
				</tr>
				<tr> 
					<td bgcolor="#FFFFFF">Anv�ndaragent regexp</td>
					<td bgcolor="#FFFFFF">Regelbundet uttryck som matchar en anv�ndaragent, till exempel ^Mozilla/4.? </td>
		 			<td bgcolor="#FFFFFF">Visar enbart bannern f�r utvalda webbl�sare.</td>
				</tr>
				<tr> 
					<td bgcolor="#FFFFFF">Veckodag (0-6)</td>
					<td bgcolor="#FFFFFF">Veckodag, fr�n 0 = s�ndag till 6 = l�rdag</td>
					<td bgcolor="#FFFFFF">Visa enbart banner p� vissa veckodagar.</td>
				</tr>
				<tr>
					<td bgcolor="#FFFFFF">Dom�n</td>
					<td bgcolor="#FFFFFF">Dom�n-avslut (t.ex. .jp, .edu eller google.com)</td>
					<td bgcolor="#FFFFFF">Visa bannrar f�r utvalda dom�ner.</td>
				</tr>
				<tr>
					<td bgcolor="#FFFFFF">K�lla</td>
					<td bgcolor="#FFFFFF">Namn p� webbsidan</td>
					<td bgcolor="#FFFFFF">Visar enbart bannern p� utvalda sidor.</td>
				</tr>
                <tr> 
                    <td bgcolor="#FFFFFF">Tid (0-23)</td>
                    <td bgcolor="#FFFFFF">Tid p� dygnet, fr�n 0 = midnatt till 23</td>
                    <td bgcolor="#FFFFFF">Visar enbart bannern under de valda tidpunkterna.</td>
                </tr>
			</table>
		</TD>
	</TR>
</table>
<p>Till exempel, om du enbart vill visa bannern p� helgen, beh�ver du l�gga till tv� ACL-kommandon:</p>
<ul>
	<li>Veckodag (0-6), <? echo $strAllow; ?>, argument 6 (f�r l�rdag)</li>
	<li>Veckodag (0-6), <? echo $strAllow; ?>, argument 0 (f�r s�ndag)</li>
    <li>Veckodag (0-6), <? echo $strDeny; ?>, argument * (f�r alla andra dagar)</li>
</ul>
Det sista kommandot beh�vde inte varit en &quot;veckodag&quot;.  Alla <? echo $strDeny; ?> *
ACL r�cker f�r att banner ej ska visas om inte n�gon <? echo $strAllow; ?> redan har matchat och till�tit att annonsen visas.

<p>F�r att visa bannern mellan 17 och 20:</p>
<ul>
    <li>Tid, <? echo $strAllow; ?>, argument 17</li>
    <li>Tid, <? echo $strAllow; ?>, argument 18</li>
	<li>Tid, <? echo $strAllow; ?>, argument 19</li>
    <li>Tid, <? echo $strDeny; ?>, argument * (f�r �vriga tider)</li>
</ul>
<?
// EOF Swedish doc file for Banner ACL administration
?>
