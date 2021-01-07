<?php
 
if ( isset($_POST["submit"]) ) {

$to = "thenail314@yandex.ru";

$subject = "Новый материал для музея п. Мариец";

$charset = "utf-8";
$headerss ="Content-type: text/html; charset=$charset\r\n";
$headerss.="MIME-Version: 1.0\r\n";

$msg = "Имя: ".$_POST["name"]."\n";
$msg .= "Сообщение: ".$_POST["message"]."\n";

mail($to, $subject, $msg, $headerss);

print "<script>alert(\"Сообщение успешно отправлено!\");window.location = window.location.href</script>";

}

?>