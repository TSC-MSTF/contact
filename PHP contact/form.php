<meta http-equiv="refresh" content="2;URL= yönlenecek url">

<?
require("class.phpmailer.php");

$mail = new PHPMailler();

$mail->IsSMTP();
$mail->Host     ="smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "sentaks.yazilim@gmail.com";
$mail->Password = "şifree";
$mail->CharSet  = "Utf-8";
$mail->Port     = 587;
$mail->From     = "sentaks.yazilim@gmail.com";
$mail->Fromname = "";
$mail->AddAdress("mail adress");
$mail->$Subject = $_POST["adsoyad"];
$mail->Body     = implode("     ",$_POST);
if(!$mail->Send())
{
    echo "Mesaj Gönderilemedi <p>";
    echo "Mailer Error: " . $mail->ErrorInfo;
    exit; 
}

echo '<script type="text/javascript">alert("E Postanız Başarı ile Gnderilmiştir.");</script';

?>