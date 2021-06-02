<?php

        //require 'PHPMailer/PHPMailerAutoload.php';
        require 'PHPMailer/mail_credentials.php';
//Mail sending class
class Mail{
    
    private $sender_name;
    private $sender_mail;
    private $subject;
    private  $body;
    
    //For subscribers Only
    private $user_mail;
    
    //Contactor's name and mail
    private $contactor_mail;
    private $contactor_name;
    
    //function that sends the mail using phpmailer
    public function send_mail($sender_name, $sender_mail, $subject, $body ){
        //Setting the user data for encapsulation
        $this->sender_name = $sender_name;
        $this->sender_mail = $sender_mail;
        $this->subject = $subject;
        $this->body = $body;
        //End of Data Encapsulation
              
        $mail = new PHPMailer;

       // $mail->SMTPDebug = ;                               // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';        // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = EMAIL;                 // SMTP username
        $mail->Password = PASS;                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
   
        $mail->setFrom(EMAIL, $this->sender_name.'alabamahub600@gmail.com'); // Sender
        $mail->addAddress('alabamahub600@gmail.com', 'C.E.O of Alabama proprty hub');     // Add a recipient
//        $mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo($this->sender_mail, 'Sender Email');
//        $mail->addCC('cc@example.com');
//        $mail->addBCC('bcc@example.com');
//
//        $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments(Files that can be image or pdfs)
//        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
         $mail->isHTML(FALSE);                                  // Set email format to HTML

        $mail->Subject = $this->subject;
        $mail->Body    = $this->body;
        $mail->AltBody = $this->body;

        if(!$mail->send()) {
           $_POST['msg'] = 'We are sorry, Your Message could not be sent. Please Try Again!';
           echo 'Mailer Error: ' . $mail->ErrorInfo;
            
        } else {
            //echo 'Message has been sent';
           $_POST['msg'] = 'Message has been sent';
        }
        
        
    }
    
    //function that sends subscribers mail
    public function reset_pass_ver_code($user_email, $verification_code){
        //Setting the user data for encapsulation
        
        $this->user_mail = $user_email;
        //End of Data Encapsulation
              
        $mail = new PHPMailer;

       // $mail->SMTPDebug = ;                               // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';        // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = EMAIL;                 // SMTP username
        $mail->Password = PASS;                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        
        $mail->setFrom(EMAIL, 'alabamahub600@gmail.com'); // Sender
        $mail->addAddress($this->user_email);     // Add a recipient
//        $mail->addAddress('ellen@example.com');               // Name is optional
        //$mail->addReplyTo($this->user_email, 'User\'s Email');
//        $mail->addCC('cc@example.com');
//        $mail->addBCC('bcc@example.com');
//
//        $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments(Files that can be image or pdfs)
//        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
         $mail->isHTML(TRUE);                                  // Set email format to HTML

        $mail->Subject = 'Password reset verification code'; 
        $mail->Body    = 'Dear client, this is your verification code: <Strong><u>' . $verification_code . '</u></Strong>Thank You';
        $mail->AltBody = strip_tags('insert the code given into Alabama reset password page: <Strong><u>' . $subscriber_mail . '</u></Strong>Thank You');

        if(!$mail->send()) {
           $_POST['msg'] = 'We are sorry, Unable to generate reset password code. Please Try Again!';
           return FALSE;
           //echo 'Mailer Error: ' . $mail->ErrorInfo;
            
        } else {
            //echo 'Message has been sent';
           $_POST['msg'] = 'verification code have been sent to your email' ;
           return true;
        } 
        
        
    }
    
    //functions that sends contact
      //function that sends subscribers mail
    public function contact($contactor_mail, $contactor_name){
        //Setting the user data for encapsulation
        
        $this->contactor_mail = $contactor_mail;
        $this->contactor_name = $contactor_name;
        
        //End of Data Encapsulation
              
        $mail = new PHPMailer;

       // $mail->SMTPDebug = ;                               // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';        // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = EMAIL;                 // SMTP username
        $mail->Password = PASS;                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        
        $mail->setFrom(EMAIL, 'alabamahub600@gmail.com'); // Sender
        $mail->addAddress('alabamahub600@gmail.com', 'C.E.O of Niyisun Nigeria Limited');     // Add a recipient
//        $mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo($this->contactor_mail, 'Contactor\'s Email');
//        $mail->addCC('cc@example.com');
//        $mail->addBCC('bcc@example.com');
//
//        $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments(Files that can be image or pdfs)
//        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
         $mail->isHTML(TRUE);                                  // Set email format to HTML

        $mail->Subject = 'PLEASE I NEED YOUR COMPANY\'S SERVICE'; 
        $mail->Body    = 'Hi, My Name is: ' .  $contactor_name .' Please, I\'m in need of your service.<br>You can contact me with this mail: <Strong><u>' .  $this->contactor_mail . '</u></Strong> Thank You';
        $mail->AltBody = strip_tags('Hi, My Name is:' .  $contactor_name .'<Strong><u> Please, I\'m in need of your service.<br>You can contact me with this mail: ' .$contactor_mail . '</u></Strong> Thank You');

        if(!$mail->send()) {
           $_POST['msg'] = 'Sorry, Unable to Contact The Admin. Please Try Again!';
           //echo 'Mailer Error: ' . $mail->ErrorInfo;
            
        } else {
            //echo 'Message has been sent';
           $_POST['msg'] = 'We\'ve Sent your Message, you\'ll be contacted very soon';
        } 
        
        
    }
    
}

