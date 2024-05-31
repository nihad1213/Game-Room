<?php include_once('../../config/connection.php'); ?>
<?php session_start(); ?>
<?php 
    $object = new Database();
    $pdo = $object->connect();
?>
<?php include_once('header.php'); ?> 
    <main>
        <?php include_once('side-bar.php'); ?>

        <div class="main-page">
            <div class="main-page-header">
                <h2>Send Messages</h2>
            </div>

            <div class="board">
                <form action="send-message.php" method="POST">
                    <label>Message: </label>
                    <br><textarea name="message-text" placeholder="Enter your Message" rows="10" cols="30"></textarea>
                    <br>
                    <div class="add-action">
                        <button type="submit" class="btn btn-success" name="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
<?php include_once('footer.php'); ?>

    <?php
        // PHP script for sending emails
        require '../../vendor/autoload.php';
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        // Check if the form is submitted
        if (isset($_POST['submit'])) {
            // Retrieve message from the form
            $message = $_POST['message-text'];

            try {
                // Create a PHPMailer instance
                $mail = new PHPMailer(true);

                // SMTP settings
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'nihad.nemetli@gmail.com'; // Your Gmail username
                $mail->Password   = 'vedlfyztnzeidysh'; // Your Gmail password
                $mail->SMTPSecure = 'ssl';
                $mail->Port       = 465;
                
                // Sender
                $mail->setFrom("nihad.nemetli@gmail.com", "GameRoom");

                // Fetch all subscribers' emails
                $statement = $pdo->prepare("SELECT * FROM `subscribers`");
                $statement->execute();

                while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                    // Add each subscriber's email as a recipient
                    $mail->addAddress($row['subscriberMail']);
                }

                // Email content
                $mail->isHTML(true);
                $mail->Subject = 'Mail From GameRoom';
                $mail->Body    = $message;

                // Send email
                $mail->send();
                echo '<script>alert("Message sent successfully.");</script>';
            } catch (Exception $e) {
                echo '<script>alert("Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '");</script>';
            }
        }
    ?>

</body>
</html>
