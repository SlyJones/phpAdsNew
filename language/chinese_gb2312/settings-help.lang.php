<?php // $Revision: 2.0 $

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
        ����".$phpAds_dbmsname."���ݿ��������.
		";
		
$GLOBALS['phpAds_hlp_dbuser'] = "
        ".$phpAds_productname."��Ҫ���ṩ�û�������ȡ".$phpAds_dbmsname."���ݿ������.
		";
		
$GLOBALS['phpAds_hlp_dbpassword'] = "
        ".$phpAds_productname."��Ҫ���ṩ��������ȡ".$phpAds_dbmsname."���ݿ������.
		";
		
$GLOBALS['phpAds_hlp_dbname'] = "
        ".$phpAds_productname."��Ҫ���ṩ���ݿ�������ȡ".$phpAds_dbmsname."���ݿ������.
		";
		
$GLOBALS['phpAds_hlp_persistent_connections'] = "
        �������ӵ�ʹ�ÿ��Ժܴ�����".$phpAds_productname."���ٶȺͼ�С�������ĸ��ء� 
		������һ��ȱ�㣬�����һ�����������վ�㣬��ô�������ĸ��ػ��ʹ����ͨ����Ҫ���ӵĿ죬��ܿ�ﵽ���صĸ��ء�
		ʹ����ͨ���ӻ�����������Ҫ�������վ��ķ�������Ӳ��������������
		���".$phpAds_productname."ʹ����̫�����Դ����Ӧ���Ȳ鿴������á�
		";
		
$GLOBALS['phpAds_hlp_insert_delayed'] = "
        ".$phpAds_dbmsname." �ڲ������ݵ�ʱ��Ҫ�������ݿ⡣���վ���кܶ�ķ����ߣ� 
		�ܿ���".$phpAds_productname."����ȴ��ܳ���ʱ����ܲ���һ�������ݣ���Ϊ���ݿ���Ȼ�������� 
		�����ʹ���ӳٲ��룬�㲻��Ҫ�ȴ�����һ��ʱ��֮��������ݱ�û�������߳�ʹ�ã������лᱻ���뵽���ݱ��С� 
		";
		
$GLOBALS['phpAds_hlp_compatibility_mode'] = "
        �����������".$phpAds_productname."��������������Ʒ��ʱ�������⣬��ѡ����ܰ���������ݿ�ļ���ģʽ��
		���������ʹ�ñ��ص���ģʽ�������ݿ�ļ���ģʽ�Ѿ��򿪣� 
		".$phpAds_productname."Ӧ�ñ������ݿ�����״̬��".$phpAds_productname."����ǰһ�¡� 
		��ѡ����һЩ������С������ȱʡ״̬�ǹرյġ�
		";
		
$GLOBALS['phpAds_hlp_table_prefix'] = "
        ���".$phpAds_productname."ʹ�õ����ݿ�������������������,�����ݿ��һ��ǰ׺��һ���ȽϺõ�ѡ��
		�������ͬһ�����ݿ���ʹ��".$phpAds_productname."�Ķ����װ�汾����Ҫ��֤���ǰ׺�����еİ�װ�汾����Ψһ�ġ�
		";
		
$GLOBALS['phpAds_hlp_tabletype'] = "
        ".$phpAds_dbmsname."֧�ֶ������ݱ����͡�ÿ�����ݿⶼ�ж��е����������е��ܹ��ܴ����".$phpAds_productname."�������ٶȡ�
		MyISAM��ȱʡ�����ݱ����Ͳ��ҿ�����".$phpAds_dbmsname."�����а�װ�汾��ʹ�á��������͵����ݱ���ܲ�������ķ�������ʹ�á�
		";
		
$GLOBALS['phpAds_hlp_url_prefix'] = "
        ".$phpAds_productname."��Ҫ֪�����Լ�����ҳ��������λ�ò�������������������ṩ".$phpAds_productname."��װĿ¼��URL��ַ�� 
        ���磺  http://www.your-url.com/".$phpAds_productname.".
		";
		
$GLOBALS['phpAds_hlp_my_header'] =
$GLOBALS['phpAds_hlp_my_footer'] = "
        ������ҳ�Ķ��ļ��͵��ļ���·��(e.g.: /home/login/www/header.htm)�����ڹ���Ա�����ÿ��ҳ������Ӷ��͵��ļ��� 
        ����Է��ı�����html�ļ�(�����ʹ�����ļ���ʹ��html���룬�벻Ҫʹ���� &lt;body> or &lt;html>�ı��)��
		";
		
$GLOBALS['phpAds_hlp_content_gzip_compression'] = "
		����GZIP����ѹ�����Ἣ��ļ�Сÿ�ι���Աҳ���ʱ���͸�����������ݡ� 
		PHP�汾����4.0.5����װ��GZIP����ģ��������ô˹��ܡ�
		";
		
$GLOBALS['phpAds_hlp_language'] = "
        ѡ��".$phpAds_productname."ʹ�õ�ȱʡ���ԡ�������Խ�����������Ա�Ϳͻ������ȱʡ���ԡ� 
        ��ע�⣺�����Ϊ�ӹ���Ա����Ϊÿһ���ͻ����ò�ͬ�����Ժ��Ƿ�����ͻ��޸������Լ����������á�
		";
		
$GLOBALS['phpAds_hlp_name'] = "
        ��ָ���˳��������. ���ַ������ڹ���Ա�Ϳͻ����������ҳ������ʾ. 
		���Ϊ��(ȱʡ),����ʾһ��".$phpAds_productname."��ͼ��.
		";
		
$GLOBALS['phpAds_hlp_company_name'] = "
        ���������".$phpAds_productname."���͵��ӵ��ʼ���ʱ��ʹ�õġ�
		";
		
$GLOBALS['phpAds_hlp_override_gd_imageformat'] = "
        ".$phpAds_productname."ͨ��Ҫ���GD���Ƿ�װ��֧������ͼƬ��ʽ. ���Ǽ���п��ܲ�׼ȷ���ߴ���,
		һЩ�汾��PHP��������֧�ֵ�ͼƬ��ʽ. ���".$phpAds_productname."�Զ����ͼƬ��ʽʧ��,
		������ƶ���ȷ��ͼƬ��ʽ. ���ܵ�ֵ:none, png, jpeg, gif.
		";
		
$GLOBALS['phpAds_hlp_p3p_policies'] = "
        �����������".$phpAds_productname."'P3P��˽����',�����򿪴�ѡ��. 
		";
		
$GLOBALS['phpAds_hlp_p3p_compact_policy'] = "
        ���Բ����Ǻ�cookieһ���͵�. ȱʡ��������:'CUR ADM OUR NOR STA NID', 
		����Internet Explorer 6 ����".$phpAds_productname."ʹ�õ�cookie.
		�����Ը��Ĵ������Է������Լ�����˽����.
		";
		
$GLOBALS['phpAds_hlp_p3p_policy_location'] = "
        �������ʹ��������˽����,�������ƶ����Ե�λ��.
		";
		
$GLOBALS['phpAds_hlp_log_beacon'] = "
		�źŵ���С�Ĳ��ɼ���ͼƬ,���Է����ڹ����ʾ��ҳ����.��������˴�ѡ��,
		".$phpAds_productname."��ʹ�ô��źŵ�����������ʾ�Ĵ���. 
		������ر��˴�ѡ��,������ʾ�������ڷ��͵�ʱ�����, ������������ȫ׼ȷ, 
		��Ϊһ���Ѿ����͵Ĺ�治һ��������ʾ����Ļ��. 
		";
		
$GLOBALS['phpAds_hlp_compact_stats'] = "
        ��ͳ��,".$phpAds_productname."ʹ�����൱�㷺�ļ�¼,�ǳ���ϸ���Ƕ����ݿ������Ҫ��ܸ�.
		����һ�������ߺܶ��վ��,����һ���ܴ������. Ϊ�˽���������,".$phpAds_productname."Ҳ֧��һ���µ�ͳ�Ʒ�ʽ:
		���ͳ��ģʽ,�����ݿ������Ҫ��СһЩ,���ǲ��Ǻ���ϸ.���ͳ��ģʽͳ��ÿСʱ�ķ������͵����,
		�������Ҫ����ϸ����Ϣ,����Ҫ�رռ��ͳ��ģʽ.
		";
		
$GLOBALS['phpAds_hlp_log_adviews'] = "
        ͨ�����еķ�����������¼,����������ռ�������������,���Թرմ�ѡ��.
		";
		
$GLOBALS['phpAds_hlp_block_adviews'] = "
		���һ��������ˢ��ҳ��,ÿ��".$phpAds_productname."�����¼������. 
		��ѡ��������֤����ָ����ʱ�����ڶ�һ�����Ķ�η��ʽ���¼һ�η�����.
		��:��������ô�ֵΪ300��,".$phpAds_productname."����5�����ڴ˹��Դ˷�����û����ʾ���ż�¼�÷�����.
		��ѡ�����<i>ʹ���źŵƼ�¼������</i>���ú����������cookies��ʱ���������.
		";
		
$GLOBALS['phpAds_hlp_log_adclicks'] = "
        ͨ�����еĵ����������¼,����������ռ������������,���Թرմ�ѡ��.
		";
		
$GLOBALS['phpAds_hlp_block_adclicks'] = "
		���һ�������ߵ��һ������˶��,ÿ��".$phpAds_productname."�����¼�����.
		��ѡ��������֤����ָ����ʱ�����ڶ�һ�����Ķ�ε������¼һ�ε����. 
		��:��������ô�ֵΪ300��,".$phpAds_productname."����5�����ڴ˷�����û�е�����˹��ż�¼�õ����.
		��ѡ��������������cookies��ʱ���������.
		";
		
$GLOBALS['phpAds_hlp_reverse_lookup'] = "
        ".$phpAds_productname."ȱʡ����¼ÿ�������ߵ�IP��ַ. ���������".$phpAds_productname.
		"��¼����,����Ҫ�򿪴�ѡ��.����������ѯ������Ҫһ����ʱ��;���ܼ������в�����ٶ�.
		";
		
$GLOBALS['phpAds_hlp_proxy_lookup'] = "
		һЩ�û�ʹ�ô�������������ʻ�����.�ڴ������,".$phpAds_productname."����¼�����������IP��ַ����������,
		�������û���. ��������ô�ѡ��,".$phpAds_productname."������ͨ������������������û�����ʵIP��ַ��������. 
		��������ҵ��û�����ʵ��ַ,��ʹ�ô���������ĵ�ַ. ��ѡ��ȱʡ��û������,��Ϊ���ܼ����ٶ�.
		";
		
$GLOBALS['phpAds_hlp_ignore_hosts'] = "
        ����������¼�ض�������ķ������͵����,�����԰����Ǽ�����б�. ����������˷���������ѯ,
		���������������IP��ַ,������ֻ��ʹ��IP��ַ. ��Ҳ����ʹ��ͨ���(Ҳ����'*.altavista.com'����'192.168.*').
		";
		
$GLOBALS['phpAds_hlp_begin_of_week'] = "
        �Ժܶ�����˵����һ��һ�ܵĿ�ʼ,����������������������Ϊһ�ܵĿ�ʼ.
		";
		
$GLOBALS['phpAds_hlp_percentage_decimals'] = "
        ָ����ʾͳ�����ݵ�ҳ������ݾ�ȷ��С����֮��λ.
		";
		
$GLOBALS['phpAds_hlp_warn_admin'] = "
        ���һ����Ŀֻʣ�����޵ķ������͵��������,".$phpAds_productname." �ܹ��������ʼ���������.��ѡ��ȱʡ�Ǵ򿪵�.
		";
		
$GLOBALS['phpAds_hlp_warn_client'] = "
        ���һ���ͻ���ĳ����Ŀֻʣ�����޵ķ������͵��������".$phpAds_productname."�ܹ��������ʼ������ѿͻ�.��ѡ��ȱʡ�Ǵ򿪵�.
		";
		
$GLOBALS['phpAds_hlp_qmail_patch'] = "
		qmail��һЩ�汾��Ϊ�ܵ�һ��bug��Ӱ��,���".$phpAds_productname."���͵ĵ����ʼ����ʼ�������������ʾ�ʼ�ͷ.
		��������ô�ѡ��,".$phpAds_productname."��ʹ��qmail���ݸ�ʽ�����͵����ʼ�.
		";
		
$GLOBALS['phpAds_hlp_warn_limit'] = "
        ".$phpAds_productname."��ʼ���;�������ʼ��ķ�ֵ,ȱʡ��100.
		";
		
$GLOBALS['phpAds_hlp_allow_invocation_plain'] = 
$GLOBALS['phpAds_hlp_allow_invocation_js'] = 
$GLOBALS['phpAds_hlp_allow_invocation_frame'] = 
$GLOBALS['phpAds_hlp_allow_invocation_xmlrpc'] = 
$GLOBALS['phpAds_hlp_allow_invocation_local'] = 
$GLOBALS['phpAds_hlp_allow_invocation_interstitial'] = 
$GLOBALS['phpAds_hlp_allow_invocation_popup'] = "
		��Щ������������������ʹ�õĵ��÷�ʽ.���ĳ�����÷�ʽͣ��,�����ٳ����ڵ��ô���/���������ҳ��.
		��Ҫ:���÷�ʽ���ͣ�ú󽫼�������,����˵ԭ�еĴ��뻹�ǿ��Լ���ʹ��,
		ֻ���ڲ������ô����ʱ����ʹ��.
		";
		
$GLOBALS['phpAds_hlp_con_key'] = "
        ".$phpAds_productname."����һ��ʹ��ֱ��ѡȡ��ʽ��ǿ��Ĺ��ѡ��ϵͳ.
		������ϸ����Ϣ��ο��û��ֲ�. ͨ����ѡ��,���������������ؼ���.���ѡ��ȱʡ�Ǵ򿪵�.
		";
		
$GLOBALS['phpAds_hlp_mult_key'] = "
        ���������ʹ��ֱ��ѡȡ��ʽ����ʾ���,������Ϊÿ�����ָ��һ�������ؼ���.
		��������ָ������ؼ���,�������ô�ѡ��.���ѡ��ȱʡ�Ǵ򿪵�.
		";
		
$GLOBALS['phpAds_hlp_acl'] = "
        �����û��ʹ�÷�������ѡ��,�����Թرմ�ѡ��,�⽫ʹ".$phpAds_productname."�ٶ���΢�ӿ�.
		";
		
$GLOBALS['phpAds_hlp_default_banner_url'] = 
$GLOBALS['phpAds_hlp_default_banner_target'] = "
        ���".$phpAds_productname."�������ӵ����ݿ������,���߲����ҵ����ϵĹ��,�����ݿ�������߱�ɾ��,
		������ʾ�κζ���.һЩ�û����������������������ʾһ��ָ����ȱʡ���.��ָ����ȱʡ��潫������¼,
		������ݿ����Ծ������õĹ��,��ָ����ȱʡ���Ҳ������ʹ��.���ѡ��ȱʡ�ǹرյ�.
		";
		
$GLOBALS['phpAds_hlp_zone_cache'] = "
        ���������ʹ�ð�λ,����������".$phpAds_productname."�ڻ������д�Ź����Ϣ,�����������Ժ�ʹ��.
		�⽫ʹ".$phpAds_productname."�ٶ���΢��һЩ, ��Ϊ������Ҫ��ȡ��λ�͹�����Ϣ��ѡ����ȷ�Ĺ��, 
        ".$phpAds_productname." ����Ҫ���ش˻�����,���ѡ��ȱʡ�Ǵ򿪵�.
		";
		
$GLOBALS['phpAds_hlp_zone_cache_limit'] = "
        ���������ʹ�û���İ�λ,�������е���Ϣ���ܹ���,����".$phpAds_productname."ż����Ҫ�ؽ�������, 
		��ѡ���������ָ��һ�������������������,������ʲôʱ�򻺴���Ӧ�����¼���. ��:��������ô���Ϊ600,
		�����������������10����(600��),�����������ؽ�.
		";
		
$GLOBALS['phpAds_hlp_type_sql_allow'] = 
$GLOBALS['phpAds_hlp_type_web_allow'] = 
$GLOBALS['phpAds_hlp_type_url_allow'] = 
$GLOBALS['phpAds_hlp_type_html_allow'] = 
$GLOBALS['phpAds_hlp_type_txt_allow'] = "
        ".$phpAds_productname."����ʹ�ò�ͬ���͵Ĺ��,�ò�ͬ�ķ�ʽ��Ź��.ͷ����ѡ�������ڱ��ش�Ź��.
		������ʹ�ù���Ա�������ϴ����,".$phpAds_productname."����SQL���ݿ������ҳ�������ϴ�Ź��.
		��Ҳ���԰ѹ�������ⲿ��ҳ������,����ʹ��HTML������������ɹ��.
		";
		
$GLOBALS['phpAds_hlp_type_web_mode'] = "
        �������ʹ�ô������ҳ�������ϵĹ��,����Ҫ���ô�����.��������ڱ���Ŀ¼��Ź��,�Ѵ�ѡ������Ϊ<i>����Ŀ¼</i>.
		�������ѹ���ŵ����FTP��������,�Ѵ�ѡ������Ϊ<i>�ⲿFTP������</i>.
		��һЩ�ض�����ҳ��������,�������������ڱ��ص���ҳ��������ʹ��FTPѡ��.
		";
		
$GLOBALS['phpAds_hlp_type_web_dir'] = "
        ָ��һ��Ŀ¼,".$phpAds_productname."��Ҫ���ϴ��Ĺ�渴�Ƶ���Ŀ¼.��Ŀ¼PHP������дȨ��,
		����˵��������Ҫ�޸Ĵ�Ŀ¼��UNIXȨ��(chmod).ָ����Ŀ¼��������ҳ��������'�ĵ���Ŀ¼'��,
		��ҳ�������������ֱ�ӷ������ļ�.��Ҫָ����β��б��(/).�����ڰѴ�ŷ�ʽ����Ϊ<i>����Ŀ¼</i>ʱ����Ҫ���ô�ѡ��.
		";
		
$GLOBALS['phpAds_hlp_type_web_ftp_host'] = "
		��������ô�ŷ�ʽΪ<i>�ⲿFTP������</i>,����Ҫָ��FTP��������IP��ַ��������,��ʹ".$phpAds_productname."
		�ܹ����ϴ��Ĺ�渴�Ƶ��˷�������.
		";
      
$GLOBALS['phpAds_hlp_type_web_ftp_path'] = "
		��������ô�ŷ�ʽΪ<i>�ⲿFTP������</i>,����Ҫָ���ⲿFTP��������Ŀ¼,��ʹ".$phpAds_productname."
		�ܹ����ϴ��Ĺ�渴�Ƶ���Ŀ¼.
		";
      
$GLOBALS['phpAds_hlp_type_web_ftp_user'] = "
		��������ô�ŷ�ʽΪ<i>�ⲿFTP������</i>,����Ҫָ���ⲿFTP���������û���,��ʹ".$phpAds_productname."
		�ܹ����ӵ��ⲿFTP������.
		";
      
$GLOBALS['phpAds_hlp_type_web_ftp_password'] = "
		��������ô�ŷ�ʽΪ<i>�ⲿFTP������</i>,����Ҫָ���ⲿFTP������������,��ʹ".$phpAds_productname."
		�ܹ����ӵ��ⲿFTP������.
		";
      
$GLOBALS['phpAds_hlp_type_web_url'] = "
        ���������ҳ�������ϴ�Ź��,".$phpAds_productname."��Ҫ֪��������ָ����Ŀ¼�Ĺ����ķ��ʵ�ַ.
		��Ҫָ����β��б��(/).
		";
		
$GLOBALS['phpAds_hlp_type_html_auto'] = "
        ����򿪴�ѡ��,".$phpAds_productname."���Զ��޸�HTML�������Լ�¼�����.
		���Ǽ�ʹ��ѡ���,��Ȼ���Զ�ÿ�����ͣ�ô˹���. 
		";
		
$GLOBALS['phpAds_hlp_type_html_php'] = "
        ����ʹ".$phpAds_productname."��HTML��������ִ��PHP����,��ѡ��ȱʡ�ǹرյ�.
		";
		
$GLOBALS['phpAds_hlp_admin'] = "
        ���������Ա���û���. ͨ�����û��������Ե�¼������Ա����.
		";
		
$GLOBALS['phpAds_hlp_admin_pw'] =
$GLOBALS['phpAds_hlp_admin_pw2'] = "
        ���������Ա������. ͨ�����û��������Ե�¼������Ա����.����Ҫ�������������������.
		";
		
$GLOBALS['phpAds_hlp_pwold'] = 
$GLOBALS['phpAds_hlp_pw'] = 
$GLOBALS['phpAds_hlp_pw2'] = "
        �޸ľ�����,����Ҫ���������������. ��Ҳ��Ҫ��������������,�Ա����������.
		";
		
$GLOBALS['phpAds_hlp_admin_fullname'] = "
        ָ������Ա��ȫ��,����ͨ�������ʼ�����ͳ�Ʊ���.
		";
		
$GLOBALS['phpAds_hlp_admin_email'] = "
        ����Ա�ĵ����ʼ���ַ,������Ϊ�����˵�ַͨ�������ʼ�����ͳ�Ʊ���.
		";
		
$GLOBALS['phpAds_hlp_admin_email_headers'] = "
        �������޸�".$phpAds_productname."���͵����ʼ����ʼ�ͷ.
		";
		
$GLOBALS['phpAds_hlp_admin_novice'] = "
        ���������ɾ���ͻ�,��Ŀ,���,�����ߺͰ�λ��ʱ��õ�һ��������Ϣ,���ô�ѡ��Ϊtrue.
		";
		
$GLOBALS['phpAds_hlp_client_welcome'] = "
		����򿪴�ѡ��,ÿ���ͻ���¼�����ҳ����ʾһ����ӭ��Ϣ.������ͨ���޸�admin/templatesĿ¼�µ�
		welcome.html�ļ����޸Ĵ���Ϣ.��������Ҫ��������Ϣ��:����˾������,��ϵ��Ϣ,����˾��ͼ��,һ�����۸�ҳ�����ӵ�.
		";

$GLOBALS['phpAds_hlp_client_welcome_msg'] = "
		����༭welcome.html�ļ�,������������ָ��һЩ����.���������������������,welcome.html�ļ���������.
		������������html���.
		";
		
$GLOBALS['phpAds_hlp_updates_frequency'] = "
		�������鿴".$phpAds_productname."�İ汾,���������ô�ѡ��.����ָ��".$phpAds_productname."��������������
		����������ʱ����.����ҵ��°汾,�����������˴�������Ϣ��һ���Ի��� 
		";
		
$GLOBALS['phpAds_hlp_userlog_email'] = "
		������뱣��".$phpAds_productname."���͵����е����ʼ���Ϣ��һ������,���������ô�ѡ��.�����ʼ���Ϣ���������û���¼��.
		";
		
$GLOBALS['phpAds_hlp_userlog_priority'] = "
		Ϊ�˱�֤����Ȩ�������ȷ,������Ϊÿ��Сʱ�ļ��㱣��һ�ݱ���. ����������Ԥ���������ÿ�������������Ȩ.
		�����Ϣ�������ύһ��bug�����ʱ��Ƚ�����. ������������û���¼��.
		";
		
$GLOBALS['phpAds_hlp_default_banner_weight'] = "
		�������ʹ��һ��ȱʡ���ߵĹ��Ȩֵ,������������ָ����������Ȩֵ.���ѡ��ȱʡ����Ϊ1.
		";
		
$GLOBALS['phpAds_hlp_default_campaign_weight'] = "
		�������ʹ��һ��ȱʡ���ߵ���ĿȨֵ,������������ָ����������Ȩֵ.���ѡ��ȱʡ����Ϊ1.
		";
		
$GLOBALS['phpAds_hlp_gui_show_campaign_info'] = "
		����򿪴�ѡ��,ÿ����Ŀ�Ķ������Ϣ����<i>��Ŀ����</i>ҳ������ʾ. ������Ϣ�����������Ĵ���,������Ĵ���,
		��������,ʧЧ���ں�Ȩֵ����.
		";
		
$GLOBALS['phpAds_hlp_gui_show_banner_info'] = "
		����򿪴�ѡ��,ÿ�����Ķ������Ϣ����<i>�������</i>ҳ������ʾ. ������Ϣ����Ŀ��URL,�ؼ���,�ߴ��Ȩֵ.
		";
		
$GLOBALS['phpAds_hlp_gui_show_campaign_preview'] = "
		����򿪴�ѡ��,<i>�������</i>ҳ�潫��ʾ���й���Ԥ��.����رմ�ѡ��,��<i>�������</i>ҳ����
		ÿ�������������ͼ��,Ҳ������ʾÿ������Ԥ��.
		";
		
$GLOBALS['phpAds_hlp_gui_show_banner_html'] = "
		����ʾʵ�ʵ�HTML���,������HTML����.��ѡ��ȱʡ�ǹرյ�,��ΪHTML���������û��Ľ����ͻ.
		����رմ�ѡ��,���HTML��������<i>��ʾ���</i>��ť,Ҳ������ʾʵ�ʵ�HTML���.
		";
		
$GLOBALS['phpAds_hlp_gui_show_banner_preview'] = "
		����򿪴�ѡ��,��<i>�������</i>,<i>����ѡ��</i>��<i>���ӹ��</i>ҳ��,����ʾ����Ԥ��.
		����رմ�ѡ��,���ҳ�涥����<i>��ʾ���</i>��ť,Ҳ���Կ�������Ԥ��.
		";
		
$GLOBALS['phpAds_hlp_gui_hide_inactive'] = "
		������ô�ѡ��,����ͣ�õĹ��,��Ŀ,�ͻ�����<i>�ͻ�&��Ŀ</i>��<i>��Ŀ����</i>ҳ�汻����. 
		�����ô�ѡ��,���Ծɿ��Ե��ҳ��ײ���<i>��ʾ����</i>��ť���鿴���ص���Ŀ.
		";
		
?>