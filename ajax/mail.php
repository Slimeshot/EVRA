<?php

	$recepient = "slimeshot@mail.ru";
	$siteName = "Evro Blast";

		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
	$message = "Имя: $name \nТелефон: $phone \nEmail: $email";

	$pagetitle = "Заявка с сайта \"$siteName\"";
	$send = mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

	if ($send == "true") {
			echo "Ваша заявка отправлена. Мы ответим вам в ближайшее время.\r\n";
		} else {
			echo "Не удалось отправить, попробуйте снова!";
		}


?>