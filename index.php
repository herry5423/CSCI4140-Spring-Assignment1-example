<html>
<head>
<title>Hello PHP!</title>
</head>
<body>
<img src="image.jpg">
<?php
require('./vendor/autoload.php');

function thumbnailImage($imagePath)
{
    echo get_included_files();
    echo getcwd();
    $img = new Imagick($imagePath);
    header('Content-Type: image/'.$img->getImageFormat());
    echo $img;
}

thumbnailImage('image.jpg');

?>
</body>
</html>
