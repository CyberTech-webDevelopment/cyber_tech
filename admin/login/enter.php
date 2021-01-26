<?php 
	session_start();
	require_once "../../classes/DB.class.php";
	if(!empty($_POST['login']) && !empty($_POST['password'])){
		$login=$_POST['login'];
		$password=$_POST['password'];
		$password=md5($password);

		$db=new DB();
		$db->tblName='admin';
		$conditions = array(
					'login' => $login,
					'password' =>$password
			);
		$check_row = $db->checkRow($conditions);
			
			if($check_row){
				$_SESSION['login']=$login;
				echo "Successful login";
				?>
				<script> 
				setTimeout(function(){
					location.href="../tables/client-table.php"
					},1000)
				</script>
				<?php
			}
			else{
			echo "Invalid login or password";
			}
	}
	else{
		echo "Fill the form";
	}
?>