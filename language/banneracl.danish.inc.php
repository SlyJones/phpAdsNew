<?
// Danish doc file for Banner ACL administration
?>
<BR>
<table border="0" width="100%">
	<TR>
		<TD bgcolor="#CCCCCC">
			<table width="100%" cellspacing="1" cellpadding="5">
				<tr> 
					<td bgcolor="#FFFFFF"><b>Titel</b></td>
					<td bgcolor="#FFFFFF"><b>Argument</b></td>
					<td bgcolor="#FFFFFF"><b>Beskrivelse</b></td>
				</tr>
				<tr> 
					<td bgcolor="#FFFFFF">Klient IP</td>
					<td bgcolor="#FFFFFF">IP net/mask: f.eks. 127.0.0.1/255.255.255.0</td>
					<td bgcolor="#FFFFFF">Vis kun banner for specifik IP-region.</td>
				</tr>
				<tr> 
					<td bgcolor="#FFFFFF">User agent regexp</td>
					<td bgcolor="#FFFFFF">Regular expression der matcher "user agent", f.eks. ^Mozilla/4.? </td>
		 			<td bgcolor="#FFFFFF">Vis kun banner for specifikke browsere.</td>
				</tr>
				<tr> 
					<td bgcolor="#FFFFFF">Ugedag (0-6)</td>
					<td bgcolor="#FFFFFF">Dag p� ugen, fra 0 = s�ndag til 6 = l�rdag</td>
					<td bgcolor="#FFFFFF">Vis kun banner p� en specifik ugedag.</td>
				</tr>
				<tr>
					<td bgcolor="#FFFFFF">Dom�ne</td>
					<td bgcolor="#FFFFFF">Dom�ne suffix (f.eks. .jp, .edu, eller google.com)</td>
					<td bgcolor="#FFFFFF">Vis kun banner for et specifikt dom�ne.</td>
				</tr>
				<tr>
					<td bgcolor="#FFFFFF">Kilde</td>
					<td bgcolor="#FFFFFF">Navn p� kildeside</td>
					<td bgcolor="#FFFFFF">Vis kun banner p� specielle sider.</td>
				</tr>
                <tr> 
                    <td bgcolor="#FFFFFF">Tid (0-23)</td>
                    <td bgcolor="#FFFFFF">Tid p� dagen, fra 0 = midnat til 23</td>
                    <td bgcolor="#FFFFFF">Vis kun banner p� et specielt tidspunkt.</td>
                </tr>
			</table>
		</TD>
	</TR>
</table>
<p>Hvis du f.eks. kun vil vise dette banner i weekenderne, tilf�jes der to ACL'er:</p>
<ul>
	<li>Ugedag (0-6), <? echo $strAllow; ?>, argument 6 (for l�rdag)</li>
	<li>Ugedag  (0-6), <? echo $strAllow; ?>, argument 0 (for s�ndag)</li>
  <li>Ugedag (0-6), <? echo $strDeny; ?>, argument * (for alle dage)</li>
</ul>
Bem�rk at den sidste ACL beh�ver ikke at v�re en &quot;Ugedag&quot;. Enhver <? echo $strDeny; ?> *
ACL ville v�re nok til at n�gte en reklame hvis en associeret <? echo $strAllow; ?> ikke allerede var blevet matchet.

<p>For at vise et banner mellem kl. 17 og 20:</p>
<ul>
  <li>Tid, <? echo $strAllow; ?>, argument 17</li>
  <li>Tid, <? echo $strAllow; ?>, argument 18</li>
	<li>Tid, <? echo $strAllow; ?>, argument 19</li>
  <li>Tid, <? echo $strDeny; ?>, argument * (for ethvert tidspunkt)</li>
</ul>
<?
// EOF Danish doc file for Banner ACL administration
?>
