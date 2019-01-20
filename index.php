<html>

<body>
<?php 
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
?>

</body>
</html>