<?php session_start();?>
<?php include_once('header.php');?>
<main>
    <div class="footer-links-text">
        <div class="footer-links-header">
            <h1>Sell Your Video Games and Consoles</h1>
        </div>

        <?php 
            if(isset($_SESSION['wrong-file-type'])) {
                echo $_SESSION['wrong-file-type'];
                unset($_SESSION['wrong-file-type']);
            }
        ?>

        <div class="footer-links-paragraph">
            <form class="upload" action="send-image.php" method="POST" enctype="multipart/form-data">
                <input type="name" placeholder="Enter your Name" name="name" required><br><br>
                <input type="email" placeholder="Enter your Mail" name="mail" required><br>
                <div class="captcha">
                    <div class="captcha-img">
                        <img src="../captcha/captcha-generator.php?rand=<?php echo rand();?>" alt="captcha-img" id="captcha-img">
                        <span><a href="javascript: refreshCaptcha()">Can't See? Refresh Image</a></span>
                    </div>
                        <div>
                            <label for="captcha-input">Write Characters Shown in Image:</label>
                        </div>
                        <input type="text" name="captcha">
                </div>
                <input type="file" name="files[]" multiple>
                <button type="submit" name="submit">Upload Images</button>
            </form>
        </div>
    </div>
</main>
<script src="../assets/script/refresh-captcha.js"></script>
<?php include_once('footer.php');?>