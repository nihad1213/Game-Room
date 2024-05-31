<?php session_start(); ?>
<?php include_once('../config/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Bootstrap link start-->
     <link
         href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
         rel="stylesheet"
         integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
         crossorigin="anonymous"
      />
      <script
         src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
         crossorigin="anonymous"
      ></script>
    <!--Bootstrap link ends-->
    
    <!--Font Awesome link starts-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!--Font Awesome link ends-->

    <!--Favicon link starts-->
     <link rel="shortcut icon" href="assets/icons/admin.png" type="image/x-icon">
    <!--Favicon link ends-->

    <!--CSS link starts-->
     <link rel="stylesheet" href="assets/style/style.css ">
    <!--CSS link ends partials/adminpanel.php-->
    <title>Admin Login</title>
</head>
 
<body>
    <form action="" method="post">
        <div class="login-box">
            <h1><strong>Admin Login</strong></h1>
            
            <?php
                if (isset($_SESSION['pass-didnt-match'])) {
                    echo $_SESSION['pass-didnt-match'];
                    unset($_SESSION['pass-didnt-match']);
                }

                if (isset($_SESSION['admin-doesnt-exists'])) {
                    echo $_SESSION['admin-doesnt-exists'];
                    unset($_SESSION['admin-doesnt-exists']);
                }
            ?>
            
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" name="adminName" placeholder="Enter the admin Username" required>
            </div>

            <div class="textbox">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <input type="email" name="adminEmail" placeholder="Enter the admin Email" required>
            </div>
 
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" name="adminPassword" placeholder="Enter the admin Password" required>
            </div>
 
            <input class="button" type="submit" name="submit" value="Log in">
        </div>
    </form>
</body>
</html>

<?php 
    $connection = mysqli_connect("localhost","root","", "gameroom");

    if (isset($_POST['submit']) || isset($_POST['adminName']) || isset($_POST['adminPassword']) || isset($_POST['adminEmail'])) {
        $adminName = $_POST['adminName'];
        $adminPassword = $_POST['adminPassword'];
        $adminEmail = $_POST['adminEmail'];

        $sql = "SELECT * FROM admins WHERE adminName = '$adminName' AND adminEmail = '$adminEmail'
            AND adminPassword = md5('$adminPassword')";

        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);


        if ($row == True) {
            header('Location: http://localhost/Game-Room/adminpanel/partials/adminpanel.php');
        } else {
            $_SESSION['admin-doesnt-exists'] = "<div style='color: #FF0000;'>Admin Doesn't Exists</div>";
        }

        
    }
?>
