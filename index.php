<?php

ini_set('error_reporting', 'E_ALL ^ E_NOTICE');
require_once 'file.class.php';
require_once 'image.class.php';
$filearray = File::getFileName("./image/data");
//$checkArray = array();
//foreach ($filearray as $value) {
//    $image = new YImage(imagecreatefromjpeg("./image/data/$value.jpg"));
//    $image->quzhao();
//    echo $str = implode('', $image->getDataAray());
//    echo $str. "---" . $value;
//    if ($checkArray[$str]) {
//        echo "-------------- " . $checkArray[$str];
//    }
//    $checkArray[$str] = $value;
//
//    echo "<br/>";
//}
$length = count($filearray);
for ($x = 0; $x < $length; $x++) {
    $image = new YImage(imagecreatefromjpeg("./image/data/$filearray[$x].jpg"));
    $image->quzhao();
    for ($y = $x + 1; $y < $length; $y++) {
        $image1 = new YImage(imagecreatefromjpeg("./image/data/$filearray[$y].jpg"));
        $image1->quzhao();
        if ($image->compare1($image1->getDataAray())) {
            echo "success$filearray[$x]=>$filearray[$y]";
        }
    }
    echo "<br/>";
}


//foreach ($filearray as $value) {
//
//    $im = imagecreatefromjpeg("./image/$value.jpg");
//    //"http://210.42.38.26:81/jwc_glxt/ValidateCode.aspx");
//
//    $newimage = imagecreate(10, 14);
//    //imagecopy($newimage, $im, 0, 0, 5, 5, 10, 14);
//    //imagecopy($newimage, $im, 0, 0, 17, 5, 10, 14);
//    //imagecopy($newimage, $im, 0, 0, 28, 5, 10, 14);
//    imagecopy($newimage, $im, 0, 0, 40, 5, 10, 14);
//    $image = new YImage($newimage);
//    $image->quzhao();
//    $value = $value + 66;
//    YImageTool::save($newimage, "./image/data/$value.jpg");
//}
?>