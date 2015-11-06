<?php
//error_reporting(E_ALL);
error_reporting(E_STRICT);

date_default_timezone_set('America/Montevideo');

require_once('class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail = new PHPMailer();

$body = '<p>Su Usuario es:' . $recuperar[0]['username'] . ' <br><br>' .
        'Su Contrasena es:' . $recuperar[0]['senha'] . ' </p>';
$body = preg_replace('/\\\\/', '', $body);

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host = "mail.yourdomain.com"; // SMTP server
$mail->SMTPDebug = 2;                     // enables SMTP debug information (for testing)
// 1 = errors and messages
// 2 = messages only
$mail->SMTPAuth = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port = 465;                   // set the SMTP port for the GMAIL server
$mail->Username = "ifburguer@gmail.com";  // GMAIL username
$mail->Password = "hamburguesa";            // GMAIL password

$mail->SetFrom('ifburguer@gmail.com', 'IfBurguer');

$mail->AddReplyTo("ifburguer@gmail.com", "IfBurguer");

$mail->Subject = "Recupera Contrsena IFBurguer";

$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$address = $recuperar[0]['email'];
$mail->AddAddress($address, $recuperar[0]['nome']);

//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if (!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo 'Hemos enviado un correo a su casilla de Email, con las inormaciones necesarias para el ingreso al sitio';
    echo '<META http-equiv="refresh" content="3;URL=index.php?Controller=LoginController&Action=entrar">';
}
?>
