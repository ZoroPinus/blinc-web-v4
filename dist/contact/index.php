<?php
include("../connect/session_check.php");

$txt_title = 'Work with us';
$txt_p = 'Let our company provide your business a successfully customized built with an innovative software solution for your projects.';
$contact_title = 'Need something specific?';
$contact_sub = 'Let\'s discuss your next dream project';
$contact_email = 'admin@bitshareslabs.com';
$subjectform = '';

$phl_occupation = 'Occupation';
$phl_company = 'Company';

if (isset($_GET["type"])) {
    $type = $_GET["type"];
    $result = explode("|", $type);
    if ($result[0] == "internship") {
        $txt_title = 'Join our internship program today.';
        $txt_p = 'Let our company help you gain valuable hands-on experience in your field of interest, build your professional network, and explore career options.';
        $contact_title = 'Ready for a challenge?';
        $contact_sub = 'Unlock your potential with hands-on experience.';
        $contact_email = 'internship@bitshareslabs.com';
        $phl_occupation = 'Course / Program';
        $phl_company = 'School - Location';

        if ($result[1] == "webdev") {
            $subjectform = "Web Development Internship Program";
        } else if ($result[1] == "mobiledev") {
            $subjectform = "Mobile Development Internship Program";
        } else if ($result[1] == "creativedesign") {
            $subjectform = "Creative Designer Internship Program";
        } else if ($result[1] == "socmed") {
            $subject = "Social Media Specialist Internship Program";
        } else {
            $subjectform = '';
        }
    } else if ($result[0] == "employment") {
        $txt_title = 'Join our team today';
        $txt_p = 'Let our company help you grow your career, develop your skills, and work on exciting projects that make a difference.';
        $contact_title = 'Be part of something bigger than yourself.';
        $contact_sub = 'Innovate, collaborate, and grow with us!';
        $contact_email = 'bitshareslabs@gmail.com';
        $phl_occupation = 'Course / Program';
        $phl_company = 'School - Location';

        if ($result[1] == "webdev") {
            $subjectform = "Web Development Employment";
        } else if ($result[1] == "mobiledev") {
            $subjectform = "Mobile Development Employment";
        } else if ($result[1] == "creativedesign") {
            $subjectform = "Creative Designer Employment";
        } else if ($result[1] == "socmed") {
            $subjectform = "Social Media Specialist Employment";
        } else if ($result[1] == "va") {
            $subjectform = "Virtual Assistant Employment";
        } else if ($result[1] == "customersup") {
            $subjectform = "Customer Support Employment";
        } else {
            $subjectform = '';
        }
    } else {
        $txt_title = 'Work with us';
        $txt_p = 'Let our company provide your business a successfully customized built with an innovative software solution for your projects.';
        $contact_title = 'Need something specific?';
        $contact_sub = 'Let\'s discuss your next dream project';
        $contact_email = 'admin@bitshareslabs.com';
        $subject = '';
    }
}
?> <?php
// define variables and set to empty values

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "../../vendor/autoload.php";

$fname = $fname = $email = $contact = $subject = $occupation = $company = $toemail = $message = "";
$postData = $statusMsg = $valErr = '';
$status = 'error';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = test_input($_POST["fname"]);
    $lname = test_input($_POST["lname"]);
    $email = test_input($_POST["email"]);
    $contact = test_input($_POST["contact"]);
    $subject = test_input($_POST["subject"]);
    $occupation = test_input($_POST["occupation"]);
    $company = test_input($_POST["company"]);
    $message = test_input($_POST["msg_content"]);

    $secretKey = '6LcVCRclAAAAAACNext3hG01KGeJbCGjJAIb0ULi';

    if (str_contains($subject, "Employment")) {
        // $toemail='bitshareslabs@gmail.com';
        $toemail = 'shairameadumanew@gmail.com';
    } else if (str_contains($subject, "Internship")) {
        $toemail = 'zor0pinusan@gmail.com';
        // $toemail='internship@bitshareslabs.com';
    } else {
        $toemail = 'devteamblinc@gmail.com';
        // $toemail='admin@bitshareslabs.com';
    }

    if (empty($fname)) {
        $valErr .= 'Please enter your name.<br/>';
    }
    if (empty($toemail) || filter_var($toemail, FILTER_VALIDATE_EMAIL) === false) {
        $valErr .= 'Please enter a valid email.<br/>';
    }
    if (empty($subject)) {
        $valErr .= 'Please enter subject.<br/>';
    }
    if (empty($message)) {
        $valErr .= 'Please enter your message.<br/>';
    }

    if (empty($valErr)) {


        if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $_POST['g-recaptcha-response']);
            $responseData = json_decode($verifyResponse);
            if ($responseData->success) {

                try {
                    $mail = new PHPMailer(true);
                    //Enable SMTP debugging.
                    // $mail->SMTPDebug = 2;
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

                    $mail->setFrom($email, $fname);
                    $mail->addAddress($toemail, "Bitshares Labs Website");
                    //compose
                    $mail->isHTML(true);
                    $mail->Subject = $subject;
                    $body = '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <title>' . $subject . '</title>
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
                                            <h1 style="font-size:24px;font-weight:bold;color:#333333;margin:0;">' . $subject . '</h1>
                                            <p style="font-size:16px;color:#666666;margin:20px 0;">A new submission has been received through the Contact Us form:</p>
                                            <ul style="font-size:16px;color:#666666;margin:20px 0;padding-left: 0;">
                                                <li><strong>Name:</strong> ' . $fname . ' ' . $lname . '</li>
                                                <li><strong>Email:</strong> ' . $email . '</li>
                                                <li><strong>Phone:</strong> ' . $contact . '</li>
                                                <li><strong>Occupation:</strong> ' . $occupation . '</li>
                                                <li><strong>Company:</strong> ' . $company . '</li>
                                                <li><strong>Message:</strong>' . $message . '</li>
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
                    $mail->send();
                    $status = 'success';
                    $statusMsg = 'Thank you! Your contact request has submitted successfully, we will get back to you soon.';
                    $postData = '';
                } catch (Exception $e) {
                    $statusMsg = $e;
                }
            } else {
                $statusMsg = 'Robot verification failed, please try again.';
            }
        } else {
            $statusMsg = 'Please check on the reCAPTCHA box.';
        }
    } else {
        $statusMsg = '<p>Please fill all the mandatory fields:</p>' . trim($valErr, '<br/>');
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function IsInjected($str)
{
    $injections = array(
        '(\n+)',
        '(\r+)',
        '(\t+)',
        '(%0A+)',
        '(%0D+)',
        '(%08+)',
        '(%09+)'
    );

    $inject = join('|', $injections);
    $inject = "/$inject/i";

    if (preg_match($inject, $str)) {
        return true;
    } else {
        return false;
    }
}
?> <!DOCTYPE html><html lang="en"><head> <?php include('../includes/header.php'); ?> </head><body> <?php include('../includes/header_nav.php'); ?> <div class="wrapall mt-5"><!-- PROJECTS CONTENT HERE --><section><div class="container h-100 mt-5"><div class="contact-section row d-flex align-items-center mb-5"><div class="contact-details col-lg-6 col-sm-12 p-5"><div class="contact-text row"><h2 class="contact-title"> <?php echo $txt_title ?> </h2><p class="contact-desc mt-4"> <?php echo $txt_p ?> </p></div><div class="contact-phone-email row p-5"><div class="contact-phone col-md-6 col-sm-12"><div class="row"><div class="contact-icon col-2 d-flex justify-content-end"><img src="../images/icons/icon-phone.webp" style="height: 32px" alt="phone-icon"></div><div class="col-10 ps-5"><p class="sub-title">Phone</p><p class="sub-desc">(074) 244 5185</p></div></div></div><div class="contact-email col-md-6 col-sm-12"><div class="row"><div class="contact-icon col-2 d-flex justify-content-end"><img src="../images/icons/icon-email.webp" alt="email-icon"></div><div class="col-10 ps-5"><p class="sub-title">Email</p><p class="sub-desc"> <?php echo $contact_email ?> </p></div></div></div></div><div class="contact-social row"><div class="col-6 pt-3"><button type="button" onclick="parent.open('https://www.facebook.com/bitshareslabs')" class="contact-btn contact-btn-facebook">Facebook</button></div><div class="col-6 pt-3"><button type="button" onclick="parent.open('https://twitter.com/bitshareslabs')" class="contact-btn contact-btn-twitter">Twitter</button></div><div class="col-6 pt-3"><button type="button" onclick="parent.open('https://www.instagram.com/bitshareslabs/')" class="contact-btn contact-btn-instagram">Instagram</button></div><div class="col-6 pt-3"><button type="button" onclick="parent.open('https://www.linkedin.com/company/bitshareslabs')" class="contact-btn contact-btn-linkedin">Linkedin</button></div><div class="col-12 pt-3"><button type="button" onclick="parent.open('https://medium.com/@bitshareslabs')" class="contact-btn contact-btn-medium">Medium</button></div></div><div class="row contact-address mt-5 pt-4"><div class="row"><div class="contact-icon col-2 d-flex justify-content-end"><img src="../images/icons/icon-location.webp" style="height: 32px" alt="lcoation-icon"></div><div class="col-10"><p>Unit 2 BLINC Business Center, Orchids St., San Luis Village, Baguio City, Philippines 2600</p></div></div></div></div><div class="contact-map col-lg-6 col-sm-12 d-flex justify-content-center p-5"><div id="map" class="map"></div></div></div></div></section><section><div class="h-100 gradient-bg"><div class="form-section row d-flex justify-content-center mt-5"><div class="form-text col-md-5 col-sm-12"><h2 class="form-title"> <?php echo $contact_title ?> </h2><p class="form-desc mt-5"> <?php echo $contact_sub ?> </p></div><div class="form-container col-md-7 col-sm-12"><form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"><div class="form-contents row p-5"><div class="form-input col-lg-6 col-sm-12 form-floating p-2"><input type="text" class="form-control" placeholder="First Name" id="firstName" name="fname" required> <label for="firstName" class="form-label">First Name</label></div><div class="form-input col-lg-6 col-sm-12 form-floating p-2"><input type="text" class="form-control" placeholder="Last Name" id="LastName" name="lname" required> <label for="LastName" class="form-label">Last Name</label></div><div class="form-input col-lg-6 col-sm-12 form-floating p-2"><input type="text" class="form-control" placeholder="Email" id="email" name="email" required> <label for="email" class="form-label">Email</label></div><div class="form-input col-lg-6 col-sm-12 form-floating p-2"><input type="tel" pattern="[0-9]{11}" maxlength="11" class="form-control" placeholder="Contact" id="contact" name="contact" required> <label for="contact" class="form-label">Contact</label></div><div class="form-input col-lg-6 col-sm-12 form-floating p-2"><input type="text" class="form-control" placeholder="<?php echo $phl_occupation ?>" name="occupation" id="occupation"> <label for="occupation" class="form-label"><?php echo $phl_occupation ?></label></div><div class="form-input col-lg-6 col-sm-12 form-floating p-2"><input type="text" class="form-control" placeholder="<?php echo $phl_company ?>" name="company" id="company"> <label for="company" class="form-label"><?php echo $phl_company ?></label></div><div class="form-input col-lg-12 col-sm-12 form-floating p-2"><input type="text" class="form-control" placeholder="Subject" id="subject" value="<?php echo $subjectform ?>" name="subject" required> <label for="subject" class="form-label">Subject</label></div><div class="form-input col-lg-12 col-sm-12 form-floating p-2"><textarea type="text" class="form-control" placeholder="Message" id="message" style="height: 20rem" name="msg_content" required></textarea> <label for="message" class="form-label text-a">Message</label></div></div><div class="form-button row ps-5 pe-5 pb-5"><div class="g-recaptcha" data-sitekey="6LcVCRclAAAAAPa1tGtmgjyXkWfmVa9UUkNqv5FJ"></div><button type="submit" name="submit" value="Submit" class="default-btn">Submit Message</button><h1><?php echo $statusMsg ?></h1></div></form></div></div></div></section><!-- Includes --> <?php include('../includes/footer.php'); ?> </div><script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALrmo-mLnhrrz5qvYIIihbiAeNvp120lE&callback=initMap&v=weekly" defer="defer"></script><script type="text/javascript" src="../js/global.js"></script><script type="text/javascript" src="../js/map.js"></script><script type="text/javascript">AOS.init();</script></body></html>