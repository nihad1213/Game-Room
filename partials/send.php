<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // CAPTCHA validation
    if (isset($_POST['captcha']) && $_POST['captcha'] != '') {
        if (strcasecmp($_SESSION['captcha'], $_POST['captcha']) != 0) {
            // CAPTCHA validation failed
            echo '<script>alert("CAPTCHA verification failed. Message not sent."); window.location.replace("contact-us.php");</script>';
            exit(); // Stop further execution
        }
    } else {
        // CAPTCHA input not provided
        echo '<script>alert("CAPTCHA input is missing. Message not sent."); window.location.replace("contact-us.php");</script>';
        exit(); // Stop further execution
    }

    // Email sending
    if (isset($_POST['submit']) && isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['message'])) {
        // Form data
        $name = $_POST['name'];
        $email = $_POST['mail'];
        $message = $_POST['message'];

        // Instantiate PHPMailer
        $mail = new PHPMailer(true);

        try {
            // SMTP settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'nihad.nemetli@gmail.com'; // Your Gmail username
            $mail->Password   = 'vedlfyztnzeidysh'; // Your Gmail password
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;

            // Sender and recipient
            $mail->setFrom($email, $name);
            $mail->addAddress("nihad.nemetli@gmail.com"); // Recipient's email
            $mail->addReplyTo($email, $name);

            // Email content
            $mail->isHTML(true);
            $mail->Subject = 'Mail From ' . $name;
            $mail->Body    = $message;

            // Send email
            $mail->send();
            echo '<script>alert("Message sent successfully."); window.location.replace("contact-us.php");</script>';
            exit();
        } catch (Exception $e) {
            echo '<script>alert("Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '"); window.location.replace("contact-us.php");</script>';
            exit();
        }
    } else {
        // Invalid form submission
        echo '<script>alert("Invalid form submission. Message not sent."); window.location.replace("contact-us.php");</script>';
        exit();
    }
} else {

    header("Location: contact-us.php");
    exit();
}
?>