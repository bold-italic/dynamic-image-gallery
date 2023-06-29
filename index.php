<?php
	$config = [
			   'gallery_name' => 'Dynamic Image Gallery',
			   'unsplash_categories' => ['Travel','Nature','Film','Experimental'],
			   'photographer'  => [
			   		['local_images' => '01.jpg', 'name' => 'Sascha Bosshard', 'href' => 'https://unsplash.com/@thesaboo'],
			   		['local_images' => '02.jpg', 'name' => 'Shiqi Zhao', 'href' => 'https://unsplash.com/@alger19'],
			   		['local_images' => '03.jpg', 'name' => 'Diane Theresa Hendrick', 'href' => 'https://unsplash.com/@artemisdesign'],
			   		['local_images' => '04.jpg', 'name' => 'Simon Williams', 'href' => 'https://unsplash.com/@simowilliams']
			   ]
 			  ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $config['gallery_name'] ?></title>
	<link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet">
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<h1><?= $config['gallery_name'] ?></h1>
	<div id="gallery">
		<?php foreach($config['unsplash_categories'] as $categories): ?>
        	<div>
        		<h2><?= $categories ?></h2>
        		<img src="https://source.unsplash.com/category/<?= $categories ?>/300x200" alt="<?= $categories ?> image">
        	</div>
		<?php endforeach ?>
	</div>
	<h1><?= count($config['photographer']) ?> Large Images</h1>
	<div id="large-images">
		<?php foreach($config['photographer'] as $images): ?>
        	<img src="images/<?= $images['local_images'] ?>" alt="<?= $images['name'] ?>">
			<h3 class="photographer"><a href="<?= $images['href'] ?>"><?= $images['name'] ?></a></h3>
		<?php endforeach ?>
	</div>
</body>
</html>
