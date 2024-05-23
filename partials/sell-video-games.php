<?php include_once('header.php');?>
<main>
    <div class="footer-links-text">
        <div class="footer-links-header">
            <h1>Sell Your Video Games and Consoles</h1>
        </div>

        <div class="footer-links-paragraph">
            <form class="upload" action="send-image.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="files[]" multiple>
                <button type="submit" name="submit">Upload Images</button>
            </form>
        </div>
    </div>
</main>
<?php include_once('footer.php');?>