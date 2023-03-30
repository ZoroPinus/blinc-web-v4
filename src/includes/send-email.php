<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "../../vendor/autoload.php";

    

    if(!empty($_POST)){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $occupation = $_POST['occupation'];
        $company = $_POST['company'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $subject = $_POST['subject'];
        $message = $_POST['msg_content'];
        $toemail = '';

        if(str_contains($subject,"Employment")){
            // $toemail='bitshareslabs@gmail.com';
            $toemail='shairameadumanew@gmail.com';
        }else if(str_contains($subject,"Internship")){
            $toemail='zor0pinusan@gmail.com';
            // $toemail='internship@bitshareslabs.com';
        }else{
            $toemail='devteamblinc@gmail.com';
            // $toemail='admin@bitshareslabs.com';
        }        
        
        $mail = new PHPMailer(true);

    }

   
    try {
        //Enable SMTP debugging.
        $mail->SMTPDebug = 3;
        //Set PHPMailer to use SMTP.
        $mail->isSMTP();
        //Set SMTP host name                      
        $mail->Host = "smtp.gmail.com";
        //Set this to true if SMTP host requires authentication to send email
        $mail->SMTPAuth = true;
        //Provide username and password
        $mail->Username = "devteamblinc@gmail.com";
        $mail->Password = "pmoznkzgycobrfxq";
        //If SMTP requires TLS encryption then set it
        $mail->SMTPSecure = "tls";
        //Set TCP port to connect to
        $mail->Port = 587;
    
        $mail->setFrom($email,$fname);
        $mail->addAddress($toemail,"Bitshares Labs Website");
        //compose
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $body = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>'.$subject.'</title>
        </head>
        <body>
            <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f2f2f2;">
                <tr>
                    <td align="center">
                        <table cellpadding="0" cellspacing="0" width="600" style="background-color:#ffffff;border-collapse: collapse;border:1px solid #cccccc;">
                            <tr>
                                <td style="padding: 20px 0 30px 0; text-align:center;">
                                    <img src="../images/blinc/team-logo.png" alt="Company Logo" width="200">
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 20px;">
                                    <h1 style="font-size:24px;font-weight:bold;color:#333333;margin:0;">'.$subject.'</h1>
                                    <p style="font-size:16px;color:#666666;margin:20px 0;">A new submission has been received through the Contact Us form:</p>
                                    <ul style="font-size:16px;color:#666666;margin:20px 0;padding-left: 0;">
                                        <li><strong>Name:</strong> '.$fname.' '.$lname.'</li>
                                        <li><strong>Email:</strong> '.$email.'</li>
                                        <li><strong>Phone:</strong> '.$contact.'</li>
                                        <li><strong>Occupation:</strong> '.$occupation.'</li>
                                        <li><strong>Company:</strong> '.$company.'</li>
                                        <li><strong>Message:</strong>'.$message.'</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 20px; font-size:14px; color:#999999; text-align:center;">
                                    This email was sent to you from Bitshareslabs Website.
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </body>
        </html>        
        ';
        $mail->Body = $body;
        echo $body;
        $mail->send();
        echo "Mail has been sent successfully!";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>