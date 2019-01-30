<html>

<body>
<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//report all errors

$url = "https://webinstagram.s3.amazonaws.com/image.jpg";
#$image = file_get_contents($url);

#header('Content-type: image/png'); 
#echo '<img src="'.$url.'">';
?>
<p>
	<img src="<?php echo $url ?>" >
</p>

<?php 

$number_of_days = 30;
$date_of_expiry = time() + 60 * 60 * 24 * $number_of_days;

// setcookie( "userlogin", "anonymous", $date_of_expiry, "/" );
echo "Welcome back to the site: " . $_COOKIE["userlogin"] ;

// $db = parse_url(getenv("DATABASE_URL"));
// echo "hello ,db user:";
// echo $db["user"];

// $pdo = new PDO("pgsql:" . sprintf(
//     "host=%s;port=%s;user=%s;password=%s;dbname=%s",
//     $db["host"],
//     $db["port"],
//     $db["user"],
//     $db["pass"],
//     ltrim($db["path"], "/")
// ));

// // Just an example, you can also apply it on upload images or other infos
// $sql = "INSERT INTO MyUsers (id,name,passwords) VALUES (3,'John','zxc123');";

// if ($pdo->query($sql) == TRUE)
// {
// 	echo "Table MyGuests created successfully";
// } else {
//     echo "Error creating table: ";
// }




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