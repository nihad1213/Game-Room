<?php include_once('header.php'); ?>
<main>
<div class="footer-links-text">
        <div class="footer-links-header">
            <h1>Contact-Us</h1>
        </div>

        <div class="footer-links-header">
            <h3>Address:</h3>
        </div>

        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d333.5880145480367!2d-119.75317296881077!3d36.73579411094664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1saz!2saz!4v1713430029550!5m2!1saz!2saz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="footer-links-paragraph">
            <p>
                4300 E Kings Canyon Rd California
            </p>
        </div>

        <div class="footer-links-header">
            <h3>Phone Number 1:</h3>
        </div>

        <div class="footer-links-paragraph">
            <p><a class="contact" href="tel:+123456789">+123 456 789</a></p>
        </div>

        <div class="footer-links-header">
            <h3>Phone Number 2:</h3>
        </div>
        
        <div class="footer-links-paragraph">
            <p><a class="contact" href="tel:+321654987">+321 654 987</a></p>
        </div>
        
        <div class="footer-links-header">
            <h3>Mail Address:</h3>
        </div>

        <div class="footer-links-paragraph">
            <p><a class="contact" href="mailto:game.room@gmail.com">game.room@gmail.com</a></p>
        </div>

        <div class="footer-links-header">
            <h3>Send Message to Us:</h3>
        </div>

        <div class="footer-links-paragraph">
            <form action="contact-us.php">
                <div class="contact-us-form">
                    <div>
                        <div>
                            <label for="name">Name:</label>
                        </div>

                        <div>
                            <input type="text" placeholder="Enter your Name" required>
                        </div>
                    </div>

                    <div>
                        <div>
                            <label for="mail">Mail:</label>
                        </div>

                        <div>
                            <input type="mail" placeholder="Enter your Mail" required>
                        </div>
                    </div>

                    <div>
                        <div>
                            <label for="mail">Phone Number:</label>
                        </div>

                        <div>
                            <input type="tel"  placeholder="Enter your Phone Number" required>
                        </div>
                    </div>

                    <div>
                        <div>
                            <label for="message">Message:</label>
                        </div>

                        <div>
                            <textarea name="message" cols="85" rows="10" placeholder="Enter your text here" required></textarea>  
                        </div>
                    </div>
                </div>

                <div class="captcha">
                    <div class="captcha-img">
                        <img src="../captcha/captcha-generator.php" alt="captcha-img">
                    </div>

                    <form action="contact-us.php">
                        <div>
                            <label for="captcha-input">Write Characters Shown in Image:</label>
                        </div>
                        
                        <input type="text">
                        
                        <div class="captcha-submit">
                            <button class="captcha-button" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </form>
        </div>
</div>
</main>
<?php include_once('footer.php'); ?>