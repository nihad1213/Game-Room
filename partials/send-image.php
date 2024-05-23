<?php
    if(isset($_POST['submit'])){
        // Count total files
         $countfiles = count($_FILES['files']['name']);

        // Looping through all files
        for($i=0;$i<$countfiles;$i++){
            $filename = $_FILES['files']['name'][$i];

            // Upload file
        move_uploaded_file($_FILES['files']['tmp_name'][$i],'../uploads/'.$filename);
        }
    echo "Files uploaded successfully";
}
?>
