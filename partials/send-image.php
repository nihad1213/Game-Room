<?php
if(isset($_POST['submit'])){
    // Number of files
    $countfiles = count($_FILES['files']['name']);

    // Loop for adding multiple files
    for($i=0; $i<$countfiles; $i++) {
        $filename = $_FILES['files']['name'][$i];
        // Upload file
        move_uploaded_file($_FILES['files']['tmp_name'][$i], '../send-games/'.$filename);
    }

    echo "Files processed successfully";
    header('Location: sell-video-games.php');
    exit; // Ensure script stops executing after redirection
}
?>
