<?php
if(isset($_SESSION['lang'])){
	$lang=$_SESSION['lang'].'/';
	$lang_menu=$_SESSION['lang'];
    $f='';
    $link_array=array('am', 'ru', 'en');
	$url = $_SERVER['REQUEST_URI'];
	$url = explode('/', $url);
	$folder_name=$url[2];
	$lng_folder='';
	if(isset($url[3])){
		$file_name=$url[3];
	}
	else{
		$file_name='';
	}
	foreach ($link_array as $value) {
		if($value==$folder_name){
			$lang="../".$_SESSION['lang'].'/';
			$lang_menu=$value;
			$lng_folder='../';
            $f='../';
            if(!empty($url[2])){
			   $lang="../".$value.'/';
            }
		break;
		}
		else{
			$lang=$_SESSION['lang'].'/';
			$lng_folder='';
			$f='';
		}
	}
}
else{
	$lang='en/';
	$lang_menu='en';
	$f='';
	echo $lang;
	$link_array=array('am', 'ru', 'en');
	$url = $_SERVER['REQUEST_URI'];
	$url = explode('/', $url);
	$folder_name=$url[2];
	$lng_folder='';

	$file_name='';
	if(isset($url[3])){
		$file_name=$url[3];
	}
	else{
		$file_name='';
	}
	foreach ($link_array as $value) {
		if($value==$folder_name){
			$lang='';
			$lang_menu=$value;
		   $lng_folder='../';
           $f='../';
		break;
		}
		else{
		    $lng_folder='';
			$lang='en/';
		}
	}
}

// if(isset($_SESSION['active_menu'])){
// 	$active_menu=$_SESSION['active_menu'];
// }
// else{
// 	$active_menu='';
// }

// ------------for active menu---------------------
    $url_active = $_SERVER['REQUEST_URI'];
	$url_active = explode('/', $url_active);
	$file_active=end($url_active);
	$link_active=explode('.', $file_active)[0];
	echo $link_active;
?>
