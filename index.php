<?php
//ini_set('error_reporting', 'E_ALL ^ E_NOTICE');
require_once 'file.class.php';
require_once 'image.class.php';
require_once 'mymain.class.php';
require_once 'checkcode.class.php';
$checkCode = new CheckCode();
$code = $checkCode->discernCheckCode();
if (strlen($code) == 4) {
    echo "识别成功";
} else {
    echo "识别失败";
}
echo $code;
?>
<img src="./image/temp.jpg"/>