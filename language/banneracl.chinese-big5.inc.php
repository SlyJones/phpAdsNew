<?
// english doc file for Banner ACL administration
?>
<BR>
<table border="0" width="100%">
	<TR>
		<TD bgcolor="#CCCCCC">
			<table width="100%" cellspacing="1" cellpadding="5">
				<tr> 
					<td bgcolor="#FFFFFF"><b>����</b></td>
					<td bgcolor="#FFFFFF"><b>�Ѽ�</b></td>
					<td bgcolor="#FFFFFF"><b>����</b></td>
				</tr>
				<tr> 
					<td bgcolor="#FFFFFF">�ϥΪ̨ӷ���} (Client IP)</td>
					<td bgcolor="#FFFFFF">IP������}/�l�����B�n�Gip.ip.ip.ip/mask.mask.mask.mask�A�p 127.0.0.1/255.255.255.0�C</td>
					<td bgcolor="#FFFFFF">��ϥΪ̨ӷ���m�ŦX������}�Ϭq�ɤ~�����s�i�C</td>
				</tr>
				<tr> 
					<td bgcolor="#FFFFFF">�ϥΪ��s���� (User agent regexp)</td>
					<td bgcolor="#FFFFFF">�ϥμзǱԭz�y��(Regular expression)�Ӥ��ϥΪ̪��s���������A^Mozilla/4.? �C</td>
		 			<td bgcolor="#FFFFFF">��ϥΪ��s���������ŦX�]�w�ɤ~�����s�i�C</td>
				</tr>
				<tr> 
					<td bgcolor="#FFFFFF">�P�� (Weekday 0-6)</td>
					<td bgcolor="#FFFFFF">�P�������C�@�ѡA0 �N��P����A6 �N��P�����C</td>
					<td bgcolor="#FFFFFF">�u�b�]�w����Ѥ~�����s�i�C</td>
				</tr>
				<tr>
					<td bgcolor="#FFFFFF">����W�� (Domain)</td>
					<td bgcolor="#FFFFFF">����W�ٵ����A�p�Gjp�B.edu �� google.com�C</td>
					<td bgcolor="#FFFFFF">��ϥΪ̨ӷ�����W�ٲŦX�]�w�ɤ~�����s�i�C</td>
				</tr>
				<tr>
					<td bgcolor="#FFFFFF">�ӷ��N�X (Source)</td>
					<td bgcolor="#FFFFFF">�U�����۩w���ӷ��N�X�C</td>
					<td bgcolor="#FFFFFF">��������ӷ��N�X�ŦX�]�w�ɤ~�����s�i�C</td>
				</tr>
                <tr> 
                    <td bgcolor="#FFFFFF">�ɶ� (Time 00-23)</td>
                    <td bgcolor="#FFFFFF">�̤G�Q�|�p�ɨ�ɶ��A00 �N��ȩ]�A23 �N��ߤW�Q�@�I�C</td>
                    <td bgcolor="#FFFFFF">�u�b�]�w���ɶ��~�����s�i�C</td>
                </tr>
			</table>
		</TD>
	</TR>
</table>
<p>�|�Ҩ����A�p�G�z�u�Q�n�b�g���ɦA�����s�i�A�z�i�H�[�J��ձ�������G</p>
<ul>
	<li>�P�� (Weekday 0-6)�A<? echo $strAllow; ?>�A�Ѽ� 6 (�N��P����)</li>
	<li>�P�� (Weekday 0-6)�A<? echo $strAllow; ?>, �Ѽ� 0 (�N��P����)</li>
    <li>�P�� (Weekday 0-6), <? echo $strDeny; ?>, �Ѽ� * (�N���ӬP��)</li>
</ul>
�b�o�ӨҤl���A�z�ä��ݭn�S�O�[�J�̫�@�աu�P�� (Weekday 0-6)�v����������]�w�A
�]����P�@��������������������ŦX�ɡA�N�|�۰ʥ[�J�W�z�̫�@�檺��������C

<p>�t�~�@�ӨҤl�A�p�G�n�b�C�ѱߤW���I��K�I�����s�i�A�n�[�J�p�U����������]�w�G</p>
<ul>
    <li>�ɶ� (Time)�A<? echo $strAllow; ?>�A�Ѽ� 17</li>  (�ߤW 5:00 ��ߤW 5:59)
    <li>�ɶ� (Time)�A<? echo $strAllow; ?>�A�Ѽ� 18</li>  (�ߤW 6:00 ��ߤW 6:59)
    <li>�ɶ� (Time)�A<? echo $strAllow; ?>�A�Ѽ� 19</li>  (�ߤW 7:00 ��ߤW 7:59)
    <li>�ɶ� (Time)�A<? echo $strDeny; ?>�A�Ѽ� * (���)</li>
</ul>
<?
// EOF english doc file for Banner ACL administration
?>
