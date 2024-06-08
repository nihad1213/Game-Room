<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['captcha']) && $_POST['captcha'] != '') {
        if (strcasecmp($_SESSION['captcha'], $_POST['captcha']) != 0) {
            // CAPTCHA validation failed
            echo '<script>alert("CAPTCHA verification failed. Message not sent."); window.location.replace("sell-video-games.php");</script>';
            exit(); // Stop further execution
        }
    } else {
        // CAPTCHA input not provided
        echo '<script>alert("CAPTCHA input is missing. Message not sent."); window.location.replace("sell-video-games.php");</script>';
        exit(); // Stop further execution
    }
    // Email sending
    if (isset($_POST['submit']) && isset($_POST['mail']) && isset($_POST['name'])) {
        
        // Form data
        $name = $_POST['name'];
        $email = $_POST['mail'];

        // Instantiate PHPMailer
        $mail = new PHPMailer(true);

        try {
            // SMTP settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = '';
            $mail->Password   = '';
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;

            // Sender and recipient
            $mail->setFrom($email, $name);
            $mail->addAddress("");
            $mail->addReplyTo($email, $name);

            // File handling
            $allowed_extensions = array('png', 'jpeg');
            $embedded_images = [];
            if (isset($_FILES['files']) && is_array($_FILES['files']['name'])) {
                foreach ($_FILES['files']['name'] as $key => $filename) {
                    $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
                    if (($_FILES['files']['type'][$key] == "image/png" || $_FILES['files']['type'][$key] == "image/jpeg") && in_array(strtolower($file_extension), $allowed_extensions)) {
                        $destination = '../send-games/' . $filename;
                        move_uploaded_file($_FILES['files']['tmp_name'][$key], $destination);
                        
                        if (time() - filemtime($destination) > 10) {
                            unlink($destination);
                        } else {
                            // Generate a unique Content ID for the embedded image
                            $cid = 'image_' . $key;
                            $mail->addEmbeddedImage($destination, $cid);
                            $embedded_images[$cid] = $destination;
                        }
                    } else {
                        $_SESSION['wrong-file-type'] = "<div style='color: #FF0000;'>Only .png, .jpeg file extensions allowed</div>";
                        header('Location: sell-video-games.php');
                        exit;
                    }
                }
            }

            // Email content
            $mail->isHTML(true);
            $mail->Subject = 'Mail From ' . $name;
            $mail->Body    = "This is a message from $name. <br><br>";

            foreach ($embedded_images as $cid => $path) {
                $mail->Body .= "<img src=\"cid:$cid\"><br><br>";
            }

            $mail->send();

            foreach ($embedded_images as $path) {
                unlink($path);
            }

            echo '<script>alert("Message sent successfully."); window.location.replace("sell-video-games.php    ");</script>';
            exit();
        } catch (Exception $e) {
            echo '<script>alert("Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '"); window.location.replace("contact-us.php");</script>';
            exit();
        }
    } else {
        echo '<script>alert("Invalid form submission. Message not sent."); window.location.replace("contact-us.php");</script>';
        exit();
    }
} else {
    header("Location: sell-video-games.php");
    exit();
}
?>