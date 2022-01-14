<?php
<<<<<<< HEAD
    $username = 'hoanglong100601@gmail.com';
    $pass = 'amiqitczkypkzzfs';

=======
    $username = 'namtien.2610@gmail.com';
    $pass = 'nncyijrbyylaiqln';
    //khai bao 
    
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
>>>>>>> aaa4b8a0de792f95a3f94c6522209cc2add24cbe
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

<<<<<<< HEAD
=======
//Load Composer's autoloader
>>>>>>> aaa4b8a0de792f95a3f94c6522209cc2add24cbe


require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
<<<<<<< HEAD
 function sendEmailForAccountActive($email,$link){
=======
    //2.su dung thư viện này để gửi Email(localhost) tới 1 tài khoản bất kì
 function sendEmailForAccountActive($email,$link){
    //Create an instance; passing true enables exceptions
>>>>>>> aaa4b8a0de792f95a3f94c6522209cc2add24cbe
    global $username;
    global $pass;
$mail = new PHPMailer(true);

try {
<<<<<<< HEAD

    $mail->SMTPDebug = 0;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = $username;                     
    $mail->Password   = $pass;                              
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;      
    $mail->CharSet = 'UTF-8';                             

    $mail->setFrom('hoanglong100601@gmail.com','Hahalolo');
    $mail->addAddress($email);     
    $mail->Subject = '[Netflix]Kích hoạt tài khoản của bạn';
    $mail->Body    = 'Chào mừng bạn đến với Hahalolo.Để sử dụng tài khoản,'.$link;
=======
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $username;                     //SMTP username dong vai tro gui thu
    $mail->Password   = $pass;                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;      
    $mail->CharSet = 'UTF-8';                              //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

    //Recipients
    $mail->setFrom('namtien.2610@gmail.com','Hahalolo');
    $mail->addAddress($email);     //Add a recipient    //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = '[Netflix]Kích hoạt tài khoản của bạn';
    $mail->Body    = 'Chào mừng bạn đến với Netflix.Để sử dụng tài khoản,'.$link;
>>>>>>> aaa4b8a0de792f95a3f94c6522209cc2add24cbe
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