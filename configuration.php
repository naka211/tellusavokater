<?php
class JConfig {
	public $offline = '0';
	public $offline_message = 'This site is down for maintenance.<br /> Please check back again soon.';
	public $display_offline_message = '1';
	public $offline_image = '';
	public $sitename = 'TELLUS Advokater';
	public $editor = 'tinymce';
	public $captcha = '0';
	public $list_limit = '20';
	public $root_user = '42';
	public $access = '1';
	public $dbtype = 'mysql';
	public $host = 'localhost';
	public $user = 'root';
	public $password = '';
	public $db = 'tellus';
	public $dbprefix = 'jos_';
	public $secret = 'fcJmZxVtOGGdX2Ms7C03';
	public $gzip = '0';
	public $error_reporting = 'default';
	public $helpurl = 'http://help.joomla.org/proxy/index.php?option=com_help&keyref=Help{major}{minor}:{keyref}';
	public $ftp_host = 'localhost';
	public $ftp_port = '21';
	public $ftp_user = 'tellusadvokater';
	public $ftp_pass = '';
	public $ftp_root = '/home/tellusadvokater/public_html';
	public $ftp_enable = '0';
	public $tmp_path = 'D:\\www\\htdocs\\tellus\\tmp';
	public $log_path = 'D:\\www\\htdocs\\tellus\\logs';
	public $live_site = '';
	public $force_ssl = '0';
	public $offset = 'UTC';
	public $lifetime = '150';
	public $session_handler = 'database';
	public $mailer = 'mail';
	public $mailfrom = 'tellus@tellusadvokater.dk';
	public $fromname = 'TELLUS Advokater';
	public $sendmail = '/usr/sbin/sendmail';
	public $smtpauth = '0';
	public $smtpuser = '';
	public $smtppass = '';
	public $smtphost = 'localhost';
	public $caching = '0';
	public $cachetime = '15';
	public $cache_handler = 'file';
	public $debug = '0';
	public $debug_lang = '0';
	public $MetaDesc = 'TELLUS Advokater. Jura på jysk!';
	public $MetaKeys = 'tellus, advokater, ejendomshandel, rådgivning';
	public $MetaTitle = '1';
	public $MetaAuthor = '1';
	public $MetaVersion = '0';
	public $robots = '';
	public $sef = '1';
	public $sef_rewrite = '0';
	public $sef_suffix = '1';
	public $unicodeslugs = '0';
	public $feed_limit = '10';
	public $feed_email = 'author';
	public $mailonline = '1';
	public $smtpsecure = 'none';
	public $smtpport = '25';
	public $MetaRights = '';
	public $sitename_pagetitles = '1';
	public $frontediting = '1';
	public $cookie_domain = '';
	public $cookie_path = '';
	public $asset_id = '1';
	public $memcache_persist = '1';
	public $memcache_compress = '0';
	public $memcache_server_host = 'localhost';
	public $memcache_server_port = '11211';
	public $memcached_persist = '1';
	public $memcached_compress = '0';
	public $memcached_server_host = 'localhost';
	public $memcached_server_port = '11211';
	public $proxy_enable = '0';
	public $proxy_host = '';
	public $proxy_port = '';
	public $proxy_user = '';
	public $proxy_pass = '';
	public $session_memcache_server_host = 'localhost';
	public $session_memcache_server_port = '11211';
	public $session_memcached_server_host = 'localhost';
	public $session_memcached_server_port = '11211';
	
	public $show_phone = '0';
	public $enable_phone = '1';
}