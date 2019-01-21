<html>

<body>
<?php 
//report all errors
error_reporting(E_ALL) ;

$url = "https://webinstagram.s3.amazonaws.com/image.jpg";
#$image = file_get_contents($url);

#header('Content-type: image/png'); 
#echo '<img src="'.$url.'">';
?>
<p>
	<img src="<?php echo $url ?>" >
</p>
<?php 
	$image = file_get_contents($url);
	$img = new Imagick();
	$img -> readImageBlob($image);	
	$img -> resizeImage(320,240,Imagick::FILTER_LANCZOS,1);
    // header("Content-Type: image/png");
    echo '<img src="data:image/jpg;base64,'.base64_encode($img->getImageBlob()).'" alt="" />';
    // echo $img->getImageBlob();
?>

<?php 
	$image = file_get_contents($url);
	$im = new Imagick ();
	$img -> readImageBlob($image);
	echo $img -> writeImage('/tmp/tempimg.jpg');
	$in = "/app/images/image.jpg";
	$iout = "/app/images/temp.jpg";
	unlink($iout);
	echo exec("/usr/bin/convert $in -resize 50% $iout");	
	// echo '<img src="data:image/jpg;base64,'.base64_encode($imgg->getImageBlob()).'" alt="" />';
?>
<div align="center"><img src="<? echo $iout; ?>" /></div>

</body>
</html>