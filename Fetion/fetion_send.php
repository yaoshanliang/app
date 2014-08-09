<?php
	if(isset($_POST['send_to_myself_textarea']) && isset($_POST['password']))
	{
		require_once ('PHPFetion.php');
		require_once('fetion_config.php');
		if($_POST['password'] == $fetion_pw)
		{
			$content = $_POST['send_to_myself_textarea'];
			
			
			$fetion = new PHPFetion($fetion_me, $fetion_pw);
			$fetion->send($fetion_me, $content);
			echo "<h2>Successfully send..</h2>";
		
		}
		else
		{
			echo "<h2>Password error !!!</h2>";
		}
	}

?>
