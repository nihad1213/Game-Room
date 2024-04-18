<?php
session_start();

/**
 * captchaImage - hold variables and function to create captcha image
 * @FONT: path of font
 * @CAPTCHA_CODE: initial value of capthca code
 * @CAPTHCA_WIDTH: width of image
 * @CAPTHCA_HEIGHT: height of iamge
 * @CAPTCHA_SIZE: total charecters of capthca code
 */
class captchaImage {
    protected $FONT = 'atwriter.ttf';
    protected $CAPTCHA_CODE = '';
    protected $CAPTCHA_WIDTH = 130;
    protected $CAPTCHA_HEIGHT = 65;

    protected $CAPTCHA_SIZE = 6;
}

?>