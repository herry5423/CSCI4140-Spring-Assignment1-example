<?php 
$url = "https://webinstagram.s3.amazonaws.com/image.jpg";
echo $url;
$image = file_get_contents($url);

header('Content-type: image/png'); 
echo $image; 
?>