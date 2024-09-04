<?php
$from_mail1 = 'noreply@yodgroup.pl';
$subject1 = "Temat wiadomosci";
$to_mail1 = "biuro.it@yodgroup.pl";


$message1= "Tresc wiadomosci";


require("./email/class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();


$mail->Mailer = 'smtp';

$mail->Host = 'wn01.webd.pl';

$mail->SMTPAuth =true;

$mail->Username = $from_mail1;


$mail->Password = "fafqfwq#53gFS3$";

$mail->Port = 465;



$mail->CharSet = "UTF-8";


$mail->From=$from_mail1;

$mail->FromName= "ja";

$mail->Sender=$mail->From;

$mail->AddReplyTo($mail->From);

$mail->ConfirmReadingTo=$from_mail1;

$mail->AddAddress($to_mail1);


//$mail->AddBCC("biuro@yodgroup.pl", $name = '') ;


//$subject1=iconv("utf-8", "ISO-8859-2", $subject1); // konwertuje z 1 na 2

$mail->Subject = $subject1;

$mail->SetLanguage("pl");

$mail->IsHTML(false);

/*
$mail->AddEmbeddedImage('./email/images_v1/Your_Own_Dimension.jpg', 'Your_Own_Dimension', 'Your_Own_Dimension.jpg'); //logo bez tla, tlo biale

$mail->AddEmbeddedImage('./email/images_v1/Yod_Studio_.jpg', 'Yod_Studio_', 'Yod_Studio_.jpg'); //logo bez tla, tlo biale

$mail->AddEmbeddedImage('./email/images_v1/3D.jpg', '3D', '3D.jpg'); //logo bez tla, tlo biale

$mail->AddEmbeddedImage('./email/images_v1/logo.jpg', 'logo', 'logo.jpg'); //logo bez tla, tlo biale


$mail->AddEmbeddedImage('./email/images_v1/Logo_Yod_Studio.jpg', 'Logo_Yod_Studio', 'Logo_Yod_Studio.jpg'); //logo bez tla, tlo biale

*/
////////////////////////////
//$message1=iconv("utf-8", "ISO-8859-2", $message1); // konwertuje z utf-8 na windows-1250
/////////////////////////////////////////

//$mail->Body =file_get_contents('./fowner/session/emails/wiadomosc1a.html').$message1.file_get_contents('./fowner/session/emails/wiadomosc1b.html');
$mail->Body = $message1;


$mail->AltBody=$message1;

if(!$mail->Send())
{
echo "Wiadomości NIE wysłano do ".$to_mail1;

}
else
{
  
echo "Wiadomość wysłano poprawnie do ".$to_mail1;

$from_mail1= "";
$subject1= "";
$message1= "";
$to_mail1= "";

}

?>