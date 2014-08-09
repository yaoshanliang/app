<?php
	if(!empty($_POST['sender_phone_number']) && !empty($_POST['sender_fetion_password']) && !empty($_POST['recipient_phone_number']) && !empty($_POST['send_to_user_textarea']))
	{
		require_once ('PHPFetion.php');
		
		$content = $_POST['send_to_user_textarea'];
		$sender_phone_number = $_POST['sender_phone_number'];
		$sender_fetion_password = $_POST['sender_fetion_password'];
		$recipient_phone_number = $_POST['recipient_phone_number'];
		$fetion = new PHPFetion($sender_phone_number, $sender_fetion_password);
		$fetion->send($recipient_phone_number, $content);
		
		echo "Request has been executed,however success is depend on your password.";
		
	}
	else
	{
		echo "Please fill in all the blanks";
	}
?>
