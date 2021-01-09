<?php 

require_once('../phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$surname = $_POST['surname'];
$message = $_POST['message'];
$showName = $_POST['showName'];
// $photo = $_POST['photo']; // new

//$mail->SMTPDebug = 3;

$mail->isSMTP();
$mail->Host = 'smtp.yandex.ru';
$mail->SMTPAuth = true;
$mail->Username = 'mariecmuseum@yandex.ru';
$mail->Password = 'P1ssw0rD';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('mariecmuseum@yandex.ru'); // отправитель
$mail->addAddress('thenail314@yandex.ru');     // получатель 
// $mail->addAttachment( $photo ); // new
// $email->AddAttachment( $file_to_attach , 'NameOfFile.pdf' );
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Название вложения
$mail->isHTML(true);

$mail->Subject = ''.$name . ' ' .$surname .' оставил заявку, его сообщение:';
$mail->Body    = ''.$message.'<br><br>Показать имя: ' .$showName;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Ошибка при отправке сообщения. Попробуйте чуть позже.';
} else {
    header('location: thank-you.html');
}
?>
