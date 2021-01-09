<?php 

require_once('../phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$firstname = $_POST['$firstname'];
$surname = $_POST['surname'];
$message = $_POST['message'];
$showName = $_POST['showName'];

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
$mail->isHTML(true);
$mail->Subject = ''.$firstname . ' ' .$surname .' оставил заявку, его сообщение:';

if(isset($_FILES['photo'])) { 
                if($_FILES['photo']['error'] == 0){ 
                        $mail->AddAttachment($_FILES['photo']['tmp_name'], $_FILES['photo']['name']); 
                } 
         } 

$mail->Body    = ''.$message.'<br><br>Показать имя: ' .$showName;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Ошибка при отправке сообщения. Попробуйте чуть позже.';
} else {
    header('location: thank-you.html');
}
?>
