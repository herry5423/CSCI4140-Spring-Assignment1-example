<html>
<head>
<title>Hello PHP!</title>
</head>
<body>
<?php

function thumbnailImage($imagePath)
{
    echo $imagePath;
    $img = new Imagick($imagePath);
    header('Content-Type: image/'.$img->getImageFormat());
    echo $img;
}

thumbnailImage('image.jpg');

?>
</body>
</html>
