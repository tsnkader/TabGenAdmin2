<?php 
	//php code for resetting password
	$token = $_POST['token'];
	$user_id = $_POST['user_id'];
	$new_password=$_POST['new_password'];
	//echo "UserID: ".$user_id;
	
	include('connect_db.php');
	include('ConnectAPI.php');
	include('tabgen_php_functions.php');
	
	$url="http://".IP.":8065/api/v1/users/update_password_forcefully";
	$data=json_encode(array("user_id"=>$user_id,"new_password"=>$new_password));
	$resetPassword = new ConnectAPI();
	$result = $resetPassword->sendPostDataWithToken($url,$data,$token);
	if($resetPassword->httpResponseCode==404){
		echo json_encode(array("status"=>false,"message"=>"Unable to connect api for resetting password."));
	}
	else if($resetPassword->httpResponseCode==200){
		echo json_encode(array("status"=>true,"message"=>"Under Development...."));
	}
	else{
		$decoded_res = json_decode($result);
		echo json_encode(array("status"=>true,"message"=>$decoded_res->message));
	}
?>