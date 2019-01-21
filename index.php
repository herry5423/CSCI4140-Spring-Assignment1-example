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
	
	$matrix = [
        [-1, 0, -1],
        [0,  5,  0],
        [-1, 0, -1],
    ];
     
    $kernel = ImagickKernel::fromMatrix($matrix);
    $strength = 0.5;
    $kernel->scale($strength, Imagick::NORMALIZE_KERNEL_VALUE);
    $kernel->addUnityKernel(1 - $strength);

    $img->filter($kernel);
	#$img -> resizeImage(320,240,Imagick::FILTER_LANCZOS,1);
    // header("Content-Type: image/png");
    echo '<img src="data:image/jpg;base64,'.base64_encode($img->getImageBlob()).'" alt="" />';
    // echo $img->getImageBlob();
?>

</body>
</html>