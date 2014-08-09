<h3>This area is for anyone to send messages through fetion</h3>
<form target = "fetion_user_form"  id = "send_to_user_form" method = "post" action = "./Fetion/fetion_user_send.php"  >
	</br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	Your phone number&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="text" name = "sender_phone_number"></br>

	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	Your fetion password
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="password" name = "sender_fetion_password"></br>

	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	Recipient's phone number&nbsp&nbsp
	<input type="text" name = "recipient_phone_number">
	</br></br>

	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<textarea name = "send_to_user_textarea" rows="13" cols="80"></textarea>
	</br></br>

	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type = "submit" value = "  <==send==>  ">
	
</form>
</br>
<iframe  name = "fetion_user_form" width="600" frameborder="0"></iframe><!--让表单提交，目标刷新页是iframe-->
