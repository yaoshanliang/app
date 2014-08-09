<?php
	if(isset($_POST['telephone']))
	{
		$content = 'TEL:'.$_POST['telephone'];
		$SRC = "https://chart.googleapis.com/chart?cht=qr&chs=256x256&choe=UTF-8&chld=L|2&chl=".$content;
		echo '<img src ='. $SRC .'>';
	}
?>
