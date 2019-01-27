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

// Start the session  
// session_start();  





$db = parse_url(getenv("DATABASE_URL"));
echo "hello ,db user:";
echo $db["user"];

$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    ltrim($db["path"], "/")
));

// $pdo->query(‘INSERT INTO mytable (Name, Passwords) VALUES (:name, :passwords)’);
// $pdo->bind('Name','name');
// $pdo->bind('Passwords','passwords');
// $pdo->execute();






	// $image = file_get_contents($url);
	// $img = new Imagick();
	// $img -> readImageBlob($image);	
	
	// $matrix = [
 //        [-1, 0, -1],
 //        [0,  5,  0],
 //        [-1, 0, -1],
 //    ];
    
    // -------filter------- 
    // $kernel = ImagickKernel::fromMatrix($matrix);
    // $strength = 1;
    // $kernel->scale($strength, Imagick::NORMALIZE_KERNEL_VALUE);
    // $kernel->addUnityKernel(1 - $strength);

    // $img->filter($kernel);
	#$img -> resizeImage(320,240,Imagick::FILTER_LANCZOS,1);
    // header("Content-Type: image/png");
    // $color = 'white';
    // $width = 50;
    // $height = 20;
    // $img->borderImage($color,$width,$height);

    // echo '<img src="data:image/jpg;base64,'.base64_encode($img->getImageBlob()).'" alt="" />';
    // echo $img->getImageBlob();
?>

</body>
</html>