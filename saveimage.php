<?php $frames = array(
    imagecreatefrompng($_POST['imgData1']),
    imagecreatefrompng($_POST['imgData2']),
    imagecreatefrompng($_POST['imgData3']),
    imagecreatefrompng($_POST['imgData4']),
    imagecreatefrompng($_POST['imgData5']),
    imagecreatefrompng($_POST['imgData6']),
    imagecreatefrompng($_POST['imgData7']),
    imagecreatefrompng($_POST['imgData8']),
    imagecreatefrompng($_POST['imgData9']),
    imagecreatefrompng($_POST['imgData10']),
    imagecreatefrompng($_POST['imgData11']),
    imagecreatefrompng($_POST['imgData12']),
    imagecreatefrompng($_POST['imgData13']),
    imagecreatefrompng($_POST['imgData14']),
    imagecreatefrompng($_POST['imgData15']),
);

$durations = array(15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,);

include_once 'gifcreator.php';
use GifCreator\GifCreator;
$gc = new GifCreator();
$gc->create($frames, $durations, 0);
$gifBinary = $gc->getGif();
file_put_contents('animated_picture.gif', $gifBinary);

?>