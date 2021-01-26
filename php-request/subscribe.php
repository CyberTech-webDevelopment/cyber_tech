<?php
require_once "../classes/DB.class.php";
$db=new DB();
$db->tblName='subscribe';
$message_result="";
if(!empty($_POST['email'])){
    $email=$_POST['email'];
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message_result = "Invalid email format";
    }
    else{
    	$condition=array( 
    		            'email'=>$email,
    		       );
    	$result_row=$db->checkRow($condition);
	    if($result_row){
	        $message_result="Email already exists in the database";
	    }
        else{
			$data=array(
				        'email'=>$email,
			      );
			$insert_email=$db->insert($data);
		
			if($insert_email){
			  $message_result="<p>You seccessfully subscribe</p>";
			}
        }
    }
}
else{
    $message_result="Fill in email field";
}
 echo $message_result;
?>