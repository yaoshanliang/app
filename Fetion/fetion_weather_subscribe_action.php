<?php

	if(isset($_POST['s_province']) && isset($_POST['s_city']) && isset($_POST['s_county']) && isset($_POST['telephone']))
	{
		$s_province = $_POST['s_province'];
		$s_city = $_POST['s_city'];
		$s_county = $_POST['s_county'];
		echo $s_province.$s_city.$s_county;
		require_once ('PHPFetion.php');
		require_once('fetion_config.php');
			$content = "1323";
			$fetion = new PHPFetion($fetion_me, $fetion_pw);
			$fetion->send($fetion_me, $content);
			
			echo "Request has been executed,however success is depend on your password.";
		
	}
?>
