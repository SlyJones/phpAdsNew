<?
// english doc file for Banner ACL administration
?>
<BR>
<table border="0" width="100%">
	<TR>
		<TD bgcolor="#CCCCCC">
			<table width="100%" cellspacing="1" cellpadding="5">
				<tr> 
					<td bgcolor="#FFFFFF"><b>Tytu�</b></td>
					<td bgcolor="#FFFFFF"><b>Argument</b></td>
					<td bgcolor="#FFFFFF"><b>Opis</b></td>
				</tr>
				<tr> 
					<td bgcolor="#FFFFFF">IP Klienta</td>
					<td bgcolor="#FFFFFF">Sie�/maska IP: ip.ip.ip.ip/maska.maska.maska.maska, np. 127.0.0.1/255.255.255.0</td>
					<td bgcolor="#FFFFFF">Wy�wietla banner tylko dla konkretnych region�w IP.</td>
				</tr>
				<tr> 
					<td bgcolor="#FFFFFF">Nazwa przegl�darki</td>
					<td bgcolor="#FFFFFF">Nazwa podana przez przegl�dark�, np. ^Mozilla/4.? </td>
		 			<td bgcolor="#FFFFFF">Wy�wietla banner tylko dla konkretnych przegl�darek.</td>
				</tr>
				<tr> 
					<td bgcolor="#FFFFFF">Dzie� Tygodnia (0-6)</td>
					<td bgcolor="#FFFFFF">Dzie� tygodnia, od 0 = Niedziala do 6 = Sobota</td>
					<td bgcolor="#FFFFFF">Display banner only on a specific day of the week.</td>
				</tr>
				<tr>
					<td bgcolor="#FFFFFF">Domena</td>
					<td bgcolor="#FFFFFF">Ko�c�wka domeny (np. .jp, .edu, .pl, lub google.com)</td>
					<td bgcolor="#FFFFFF">Wy�wietla banner tylko dla niekt�rych domen.</td>
				</tr>
				<tr>
					<td bgcolor="#FFFFFF">�r�d�o</td>
					<td bgcolor="#FFFFFF">Nazwa strony �r�d�owej</td>
					<td bgcolor="#FFFFFF">Wy�wietla banner tylko na niekt�rych stronach.</td>
				</tr>
                <tr> 
                    <td bgcolor="#FFFFFF">Czas (0-23)</td>
                    <td bgcolor="#FFFFFF">Godzina dnia, od 0 = p�noc do 23 = 23:00</td>
                    <td bgcolor="#FFFFFF">Wy�wietlaj banner tylko w pewne godziny dnia.</td>
                </tr>
			</table>
		</TD>
	</TR>
</table>
<p>Na przyk�ad je�li chcesz wy�wietla� banner tylko w weekendy, powiniene� doda� dwa wpisy ACL:</p>
<ul>
	<li>Dzie� tygodnia (0-6), <? echo $strAllow; ?>, argument 6 (dla Soboty)</li>
	<li>Dzie� tygodnia (0-6), <? echo $strAllow; ?>, argument 0 (dla Niedzieli)</li>
    <li>Dzie� tygodnia (0-6), <? echo $strDeny; ?>, argument * (dla ka�dego dnia)</li>
</ul>
Zauwa�, �e ostatni wpis nie musia� by� &quot;Dzie� tygodnia&quot;. Ka�de ACL <? echo $strDeny; ?> *
wystarczy�oby aby uniemo�liwi� wy�wietlanie bannera, je�li odpowiedni <? echo $strAllow; ?> nie by�by jeszcze pozytywnie zweryfikowany.

<p>Aby pokaza� banner mi�dzy godzin� 17 i 20:</p>
<ul>
    <li>Czas, <? echo $strAllow; ?>, argument 17</li>  (17:00 - 17:59)
    <li>Czas, <? echo $strAllow; ?>, argument 18</li>  (18:00 - 18:59)
	<li>Czas, <? echo $strAllow; ?>, argument 19</li>  (19:00 - 19:59)
    <li>Czas, <? echo $strDeny; ?>, argument * (dla dowolnego czasu)</li>
</ul>
<?
// EOF english doc file for Banner ACL administration
?>
