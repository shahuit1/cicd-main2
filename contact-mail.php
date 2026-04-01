<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Create an instance; passing `true` enables exceptions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize input
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $description = $_POST['description'];

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF;  // Disable verbose debug output
        $mail->isSMTP();                     // Send using SMTP
        $mail->Host       = 'smtp.yandex.com'; // Set the SMTP server to send through
        $mail->SMTPAuth   = true;            // Enable SMTP authentication
        $mail->Username   = 'tmr_test@voxtrongroup.com'; // SMTP username
        $mail->Password   = 'Root123$%67'; // SMTP password (App Password if 2FA is enabled)
        $mail->SMTPSecure = 'tls'; // Enable TLS encryption
        $mail->Port       = 587;             // TCP port to connect to

        // Recipients
        $mail->setFrom('tmr_test@voxtrongroup.com', 'Business Logo Design');
        $mail->addAddress('hello@businesslogodesign.us', 'Business Logo Design');

        // Content
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'New Business Logo Design Query Submission';
        // $imageUrl = 'https://businesslogodesign.us/assets/images/logo.svg';
        // $imageData = base64_encode(file_get_contents('assets/images/logo.svg'));
        // <img src='$imageUrl' alt='Business Logo Design' style='max-width: 200px; height: auto;'>
        $mail->Body = "
        <div style='font-family: Arial, sans-serif; color: #333; line-height: 1.6; background: #f4f4f4; padding: 20px; max-width: 600px; margin: auto;'>
            <div style='background: #120336; color: #fff; padding: 20px; text-align: center;'>
                <h2 style='margin: 0;'>Business Logo Design</h2>
            </div>
            <div style='background: #ffffff; padding: 20px; border-top: 5px solid #120336;'>
                <p style='margin: 0;'><strong>Name:</strong> $name</p>
                <p style='margin: 0;'><strong>Email:</strong> <a href='mailto:$email' style='color: #e32730; text-decoration: none;'>$email</a></p>
                <p style='margin: 0;'><strong>Phone:</strong> <a href='tel:$phonenumber' style='color: #e32730; text-decoration: none;'>$phonenumber</a></p>
                <p style='margin: 0;'><strong>Description:</strong> $description</p>
            </div>
            <div style='background: #120336; color: #fff; text-align: center; padding: 10px; font-size: 12px;'>
                <p style='margin: 0;'>This email was sent from Business Logo Design.</p>
            </div>
        </div>";

        // Send the email
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            header('Location: https://businesslogodesign.us?submitted=1');
            exit(); // It's a good practice to use exit() after a header redirect to ensure no further code is executed
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
