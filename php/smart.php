<?php 

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

// $mail->SMTPDebug = 3;                         	// Включить  отладочный вывод

$mail->isSMTP();                                	// установить SMTP
$mail->Host = 'smtp.gmail.com'; 					// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                      		// включить SMTP аутентификацию
$mail->Username = 'bikwal3269@gmail.com';  					// Наш логин
$mail->Password = 'qwsd45891';               		// Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                          // Включить шифрование TLS, "ssl"
$mail->Port = 465;                                   // используемый TCP порт 
 
$mail->setFrom('bikwal3269@gmail.com');   		// От кого письмо 
$mail->addAddress('bikwal32@gmail.com');     		// На какой адрес отправить
//$mail->addAddress('ellen@example.com');           // на другие адреса
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');      // Добавить вложение-файл
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // вложение- картинка
$mail->isHTML(true);                                 // Формат письма HTML

$mail->Subject = 'Данные';
$mail->Body    = '
		Пользователь оставил данные <br> 
	Имя: ' . $name . ' <br>
	Номер телефона: ' . $phone . '<br>
	E-mail: ' . $email . '';

if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>