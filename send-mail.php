<?php
    $username = 'namtien.2610@gmail.com';
    $pass = 'nncyijrbyylaiqln';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;




require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
   
 function sendEmailForAccountActive($email,$link){
  
    global $username;
    global $pass;
$mail = new PHPMailer(true);

try {

    $mail->SMTPDebug = 0;                     
    $mail->isSMTP();                                         
    $mail->Host       = 'smtp.gmail.com';                 
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = $username;                    
    $mail->Password   = $pass;                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;      
    $mail->CharSet = 'UTF-8';                              


    $mail->setFrom('namtien.2610@gmail.com','Hahalolo');
    $mail->addAddress($email);    
    
    $mail->isHTML(true);                             
    $mail->Subject = 'Kích hoạt tài khoản của bạn';
    $mail->Body    = 'Chào mừng bạn đến với Hahalolo. Để sử dụng tài khoản,'.$link;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

   if($mail->send()){
       return true;
   }
   
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
   return false;
 }
?>