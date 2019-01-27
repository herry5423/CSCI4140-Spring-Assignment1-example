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
// Set handler to overide SESSION  
session_set_save_handler(  
array($this, "_open"),  
array($this, "_close"),  
array($this, "_read"),  
array($this, "_write"),  
array($this, "_destroy"),  
array($this, "_gc")  
); 

// Start the session  
session_start();  





$db = parse_url(getenv("DATABASE_URL"));
echo "hello ,db user:";
echo $db["user"];

$db->query(‘INSERT INTO mytable (Name, Passwords) VALUES (:name, :passwords)’);
$db->bind('Name','name');
$db->bind('Passwords','passwords');
$db->execute();

$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    ltrim($db["path"], "/")
));




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