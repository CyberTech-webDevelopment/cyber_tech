<?php
 $db_name='cyber_tech';
 $host="localhost";
 $password="cyberTech@dec";
 $user="cyber-tech";

$con = mysqli_connect($host, $user, $password, $db_name);
if (!$con) {
    die('error_get_last() ' . mysql_error());
}
else{
	mysqli_query($con,"SET NAMES 'utf8'");	
// echo 'connent';

}

?>