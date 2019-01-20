 <?php
 		error_log($image = new Imagick());
 		$image->newImage(100,100,new ImagickPixel('red'));
 		$image->setImageFormat('png');
 		
		echo $image;
        /*** a file that does not exist ***/
        #$url = "https://webinstagram.s3.amazonaws.com/image.jpg";
        #echo $url;
        #$image = file_get_contents($url);
 ?>