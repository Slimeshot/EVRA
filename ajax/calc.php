<?php

	$recepient = "slimeshot@mail.ru";
	$siteName = "Evro Blast";

		$calcName = $_POST['calcName'];
		$calcPhone = $_POST['calcPhone'];
		$disk = $_POST['disk'];
		$color = $_POST['color'];
		$palitra = $_POST['palitra'];
		$cheked = $_POST['cheked'];
		$sum = $_POST['sum'];
	$message = "Имя: $calcName \nТелефон: $calcPhone \nРазмер диска: $disk \nКол-во цветов: $color \nПалитра цветов: $palitra \nЭкспресс: $cheked \nСумма: $sum руб.";

	$pagetitle = "Заявка с сайта \"$siteName\"";
	$send = mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

	if ($send == "true") {
			echo "Ваша заявка отправлена. Мы ответим вам в ближайшее время.\r\n";
		} else {
			echo "Не удалось отправить, попробуйте снова!";
		}


?>