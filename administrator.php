<?php
	/*
	*	PHP CONTENT DESCRIPTION
	*/
	require_once("./core/database/php/controller/storageController.php");
	$storage = new StorageController();

	require_once("./core/database/php/model/componentPage.php");
?>

<!-- HTML CONTENT DESCRIPTION -->
<!DOCTYPE html>
<html lang="<?php echo $componentPage['lang'];?>">
<head>

	<meta charset="<?php echo $componentPage['metaCharset'];?>">
	<?php
		foreach($componentPage['metaContent'] as $meta){?>
			<meta name="<?php echo $meta['name'];?>" content="<?php echo $meta['content'];?>">
	<?php } ?>
	<title><?php echo $componentPage['title'];?></title>
	<?php
		foreach($componentPage["cssContent"] as $css){?>
			<link rel="stylesheet" href="<?php echo $css;?>" type="text/css">
	<?php } ?>
	<link rel="icon" type="x-image/jpg" href="./public/image/logo/brand.jpg">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
	<script src="./public/js/showHide.js" type="text/javascript"></script>
	<script src="./public/js/slider.js" type="text/javascript"></script>
	<script type="text/javascript">
		const showHide = new ShowHide();
		const slider = new Slider();
	</script>

</head>
<body>
	<div class="w3-row">
		<div class="layout-2">
			<div class="w3-container"></div>
			<?php require_once("./layout/administrator/navbar.php"); ?>
		</div>
		<div class="layout-8">
			<?php
				if(isset($_GET["p"])){
					$loadPage = "404";
					if(file_exists("./layout/administrator/" . $_GET["p"] . ".php")){
						$loadPage = $_GET["p"];
					}
					require_once("./layout/administrator/" . $loadPage . ".php");
				}
				else{
					$loadPage = "home";
					require_once("./layout/administrator/" . $loadPage . ".php");
				}

				require_once("./layout/administrator/footer.php");
			?>
		</div>
	</div>
</body>
</html>
<!-- HTML CONTENT DESCRIPTION -->