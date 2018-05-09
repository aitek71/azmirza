<?php
	// PHP COMPONENT PAGE
	$dataComponentPage = $storage->getDatabase(array(
		"fileName" => "./core/database/json/componentPage"
	));

	$pageID = "home";
	if(isset($_POST["p"])){
		$pageID = $_POST["p"];
	}

	foreach($dataComponentPage as $currentPage){
		if($currentPage->id == $pageID){
			$dataComponentPage = $currentPage;
			break;
		}
		continue;
	}

	$componentPage = array(
		"lang" => "en",
		"metaCharset" => "utf-8",
		"metaContent" => array(
			array(
				"name" => "description",
				"content" => $dataComponentPage->description
			),
			array(
				"name" => "keywords",
				"content" => $dataComponentPage->keywords
			),
			array(
				"name" => "author",
				"content" => "Andy Maulana Yusuf"
			),
			array(
				"name" => "viewport",
				"content" => "width=device-width, initial-scale=1.0"
			),
		),
		"title" => $dataComponentPage->title,
		"cssContent" => array(
			"./public/css/w3.css",
			"./public/css/main.css",
			"./public/fonts/font-awesome.min.css"
		)
	);
	// PHP COMPONENT PAGE
?>