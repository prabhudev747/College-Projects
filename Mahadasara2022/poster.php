<?php
include('navbar.php');
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="lightbox.min.css">
	<script src="lightbox-plus-jquery.min.js"></script>
	<title>Gallery</title>
	<style>
		.gallery{
			margin: 10px 50px;
		}
		
		.gallery img{
			transition: 1s;
			padding:5px;
			width:350px;
			
		}
		
		.gallery img:hover{
			filter: grayscale(100%);
			transform: scale(1.1);
		}
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device_width, intial-scale=1.0">
</head>
<body style="bg-color:#f7e6ff;">
    <center>
    <div class="gallery">
        <?php

$rdi = new RecursiveDirectoryIterator('poster', FilesystemIterator::SKIP_DOTS);
$rii = new RecursiveIteratorIterator($rdi);




foreach ($rii as $di) {
   $img_name="poster/".$di->getFilename();

   ?>
        <a href="<?php echo $img_name?>" data-lightbox="mygallery"><img src="<?php echo $img_name?>" height="262px"></a>
    	
    	<?php
}


?>
        
    </div>
    </center>
    <div style="background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%); color:white;height:30px;padding-top:6px">
	<center><p>For Queries : mahadasara2022@mitmysore.in <br /></p></center>
	</div>
</body>
</html>
