<?php
session_start();
if(!empty($_POST['lng'])){
	$lang=$_POST['lng'];
	$_SESSION['lang']=$lang;
}
if(!empty($_POST['active_menu'])){
	$_SESSION['active_menu']=$_POST['active_menu'];

}

?>