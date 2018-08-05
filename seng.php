<?php 
if (!empty($_POST{'name'}) AND !empty($_POST{'email'}) AND !empty($_POST{'message'}) AND !empty($_POST{'phone'})) {
	$headers = 'From'
	$theme = 'Новое сообщение';
	$letter = 'Данные сообщения:\r\n';
	$letter .= 'Имя:'.'$_POST{'name'}.\r\n';
	$letter .= 'Email'.'$_POST{'email'}.\r\n';
	$letter .= 'Телефон'.'$_POST{'phone'}.\r\n';
	if(mail('2makcim97@mail.ru', $theme, $letter );
		header('location:/thankyou.php')
}else {
	header('location:/')
}
else{
	header('location:/')
}