<html>
<head>
<title>Hello PHP!</title>
<script src="<?php

header('Content-type: image/jpeg');

$image = new Imagick('image.jpg');
$echo("hello");
// If 0 is provided as a width or height parameter,
// aspect ratio is maintained
$image->setbackgroundcolor('rgb(64, 64, 64)');
$image->thumbnailImage(100,100, true,true);


echo $image;

?>"></script>

</html>
