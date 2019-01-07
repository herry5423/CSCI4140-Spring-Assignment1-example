<html>
<head>
<title>Hello PHP!</title>
<script src="<?php

header('Content-type: image/jpeg');

$image = new Imagick('image.jpg');

// If 0 is provided as a width or height parameter,
// aspect ratio is maintained
$image->thumbnailImage(100, 0);

echo $image;

?>"></script>

</html>
