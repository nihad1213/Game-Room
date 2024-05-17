<?php
session_start();

define('CAPTCHA_FONT', 'atwriter.ttf');
define('CAPTCHA_WIDTH', 200);
define('CAPTCHA_HEIGHT', 65);
define('CAPTCHA_SIZE', 8);
define('captchaCharacters', 'qwertyuiopasdfghjklzxcvbnm');
define('captchaTextColor', '1b3aa0');
define('CAPTCHA_FONT_SIZE', CAPTCHA_HEIGHT * 0.5);

//Initial value of Code
$captchaCode = '';

$count = 0;

//Create Captcha code with random Characters
while ($count < CAPTCHA_SIZE) {
    $captchaCode .= substr(
        captchaCharacters,
        mt_rand(0, strlen(captchaCharacters) - 1),
        1
    );
    $count++;
}

//Create image for width and height
$captchaImage = imagecreatetruecolor(CAPTCHA_WIDTH, CAPTCHA_HEIGHT);

//BackgroundColor
$backgroundColor = imagecolorallocate($captchaImage, 255, 255, 255);
imagefill($captchaImage, 0, 0, $backgroundColor);

//Text(Code) Color
$textColor = imagecolorallocate($captchaImage, 27, 58, 160);

//TextBox
$textBox = imagettfbbox(
    CAPTCHA_FONT_SIZE,
    0,
    CAPTCHA_FONT,
    $captchaCode
);

//Calculate the total width of the text
$textWidth = $textBox[4] - $textBox[0];

//Position (x, y) where some text should be placed within a captcha image
$x = (CAPTCHA_WIDTH - $textWidth) / 2;
$y = (CAPTCHA_HEIGHT + CAPTCHA_FONT_SIZE) / 2; // Adjusted Y-coordinate

//Bend factor
$bend = 0.1; // Adjust the bend factor as needed

//Write text to image with bend effect
imagettftext(
    $captchaImage,
    CAPTCHA_FONT_SIZE,
    0,
    $x,
    $y,
    $textColor,
    CAPTCHA_FONT,
    $captchaCode
);

//Apply bend effect
$bendImage = imagecreatetruecolor(CAPTCHA_WIDTH, CAPTCHA_HEIGHT);
imagefill($bendImage, 0, 0, $backgroundColor);

//Apply bend effect to the image
for ($i = 0; $i < CAPTCHA_WIDTH; $i++) {
    imagecopy(
        $bendImage,
        $captchaImage,
        $i,
        round($bend * sin($i * 5 * M_PI / CAPTCHA_WIDTH) * CAPTCHA_HEIGHT),
        $i,
        0,
        1,
        CAPTCHA_HEIGHT  
    );
}

header('Content-Type: image/jpeg');
header("Cache-Control: no-store, no-cache, must-revalidate");
imagejpeg($bendImage);
imagedestroy($captchaImage);
imagedestroy($bendImage);

$_SESSION['captcha'] = $captchaCode;
?>