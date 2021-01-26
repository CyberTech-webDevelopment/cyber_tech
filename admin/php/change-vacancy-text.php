<?php
require_once "../../classes/DB.class.php";
$msg='';
if(isset($_POST['change_text'])){
	$text=$_POST['change_text'];
	$response=$_POST['response'];

	$db=new DB();
    $db->tblName='message_response_vacancy';

    $data=array( $response=>$text);
    $conditions=array( 'id'=>1 );
	$update_message=$db->update($data,$conditions);
	if($update_message){
		$msg='Text succesfully chanched';
	}
	echo $msg;
}
?>