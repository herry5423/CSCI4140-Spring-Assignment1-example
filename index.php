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
$dbopts = parse_url(getenv('DATABASE_URL'));
$app->register(new Csanquer\Silex\PdoServiceProvider\Provider\PDOServiceProvider('pdo'),
               array(
                'pdo.server' => array(
                   'driver'   => 'pgsql',
                   'user' => $dbopts["user"],
                   'password' => $dbopts["pass"],
                   'host' => $dbopts["host"],
                   'port' => $dbopts["port"],
                   'dbname' => ltrim($dbopts["path"],'/')
                   )
               )
);

$app->get('/db/', function() use($app) {
  $st = $app['pdo']->prepare('SELECT name FROM test_table');
  $st->execute();

  $names = array();
  while ($row = $st->fetch(PDO::FETCH_ASSOC)) {
    $app['monolog']->addDebug('Row ' . $row['name']);
    $names[] = $row;
  }

  return $app['twig']->render('database.twig', array(
    'names' => $names
  ));
});
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