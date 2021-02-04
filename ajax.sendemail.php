<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'lib/Exception.php';
require 'lib/PHPMailer.php';
require 'lib/SMTP.php';

$path_to_folder = 'http://www.toolboxdesign.com.sg/demo/custom-ecard/';


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                          // Enable verbose debug output
    //Server settings
    // $mail->isSMTP();                                            // Send using SMTP
    // $mail->Host       = 'mail.toolart.sg';                    // Set the SMTP server to send through
    // $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    // $mail->Username   = 'enquiry@toolart.sg';                     // SMTP username
    // $mail->Password   = '2ARTtoolart!';                               // SMTP password
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    // $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($_POST['senderEmail'], $_POST['senderName']);
    $mail->addAddress($_POST['recipientEmail']);                    // Add a recipient

    // Content
    $mail->isHTML(true);                                            // Set email format to HTML

    $mail->Subject = 'Festive Greetings From ' . $_POST['senderName'];

    $mail->Body    = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1989/xhtml"><head><meta http-equiv="content-type" content="text/html; charset=utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title></title> <!--[if IEMobile 7]><style></style><![endif]--> <!--[if gte mso 9]><style></style><![endif]--><style type="text/css">#outlook a{padding:0}body{width:100% !important;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;margin:0;padding:0;font-family:Arial;font-size:10px}.ExternalClass{width:100%}.ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div{line-height:100%}#backgroundTable{margin:0;padding:0;width:500px;line-height:100% !important}img{outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;border-style:none;display:block}a img{border:none;outline:none;border-style:none;display:block}.image_fix{display:block}p{margin:1em 0}h1,h2,h3,h4,h5,h6{color:black !important}h1 a,h2 a,h3 a,h4 a,h5 a,h6 a{color:blue !important}h1 a:active,h2 a:active,h3 a:active,h4 a:active,h5 a:active,h6 a:active{color:red !important}h1 a:visited,h2 a:visited,h3 a:visited,h4 a:visited,h5 a:visited,h6 a:visited{color:purple !important}table td{border-collapse:collapse;margin:0;padding:0}table{border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;border-spacing:0}Bring inline: Yes. */ a{color:#A5D500;outline:none;border-style:none}@media only screen and (max-device-width: 480px){a[href^="tel"],a[href^="sms"]{text-decoration:none;color:black;cursor:default}.mobile_link a[href^="tel"],.mobile_link a[href^="sms"]{text-decoration:default;color:orange !important;pointer-events:auto;cursor:default}}@media only screen and (min-device-width: 768px) and (max-device-width: 1025px){a[href^="tel"],a[href^="sms"]{text-decoration:none;color:blue;cursor:default}.mobile_link a[href^="tel"],.mobile_link a[href^="sms"]{text-decoration:default;color:orange !important;pointer-events:auto;cursor:default}}@media only screen and (-webkit-min-device-pixel-ratio: 2){}@media only screen and (-webkit-device-pixel-ratio:.75){}@media only screen and (-webkit-device-pixel-ratio:1){}@media only screen and (-webkit-device-pixel-ratio:1.5){}@media only screen and (max-width: 480px){table[id="canspamBar"] td{font-size:14px !important}table[id="canspamBar"] td a{display:block !important;margin-top:10px !important}}</style></head><body><center> <br><table id="backgroundTable" width="500" border="0" cellpadding="0" cellspacing="0" style="border:1px solid #ccc;"><tr><td><table width="500" border="0" cellpadding="0" cellspacing="0"><tr><td width="500" height="500" style="line-height:500px;"> 
    <img style="display: block;" class="image_fix" src="' . $path_to_folder . $_POST['image_url'] .'" width="500" height="500" alt="">
    </td></tr></table></td></tr></table> <br><table>
    <tr>
        <td width="500" height="100" style="line-height:100px; text-align: center;"> 
<<<<<<< HEAD
            <a style="background: black !important; color: white !important; padding: 10px 20px !important; text-decoration: none !important;" href="http://toolboxdesign.com.sg/demo/custom-ecard/">SEND YOUR OWN E-CARD</a>
=======
            <a style="color: black !important; padding: 10px 20px !important; text-decoration: none !important;" href="http://toolboxdesign.com.sg/demo/custom-ecard/">SEND AN ECARD TO SOMEONE SPECIAL !

            </a>
>>>>>>> demo

        </td>
    </tr>
</table></center></body></html>';


    $mail->send();

    echo 'Message has been sent';

} catch (Exception $e) {

    echo "Message could not be sent. Mailer Error: { $mail->ErrorInfo }";

}

?>