<?php
	//if(isset($_POST['telephone']))
	{
		$content = 'Name:'.$_POST['name_card'];
		$content .= 'TEL:'.$_POST['telephone_card'];
		$content .= 'Email:'.$_POST['email_card'];
		$content .= 'Adress:'.$_POST['address_card'];
		$SRC = "https://chart.googleapis.com/chart?cht=qr&chs=256x256&choe=UTF-8&chld=L|2&chl=".$content;
		echo '<img src ='. $SRC .'>';

	}
?>
