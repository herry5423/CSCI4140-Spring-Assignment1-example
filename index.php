<?php 
$image = new Imagick(); 
$image->newImage(100, 100, new ImagickPixel('red')); 
$image->setImageFormat('png'); 

header('Content-type: image/png'); 
echo $image; 
?>