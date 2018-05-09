<?php
	$sliderComponent = array(
		"controller" => array(
			array(
				"item" => 1,
				"icon" => "fa fa-angle-left"
			),
			array(
				"item" => -1,
				"icon" => "fa fa-angle-right"
			)
		),
		"content" => array(
			array(
				"source" => "1.jpg",
				"title" => "Example Slider 1",
				"description" => "Example Description Slider 1"
			),
			array(
				"source" => "2.jpg",
				"title" => "Example Slider 2",
				"description" => "Example Description Slider 2"
			),
			array(
				"source" => "3.jpg",
				"title" => "Example Slider 3",
				"description" => "Example Description Slider 3"
			)
		)
	);

	$sliderController = $sliderComponent['controller'];
	$sliderContent = $sliderComponent['content'];

	$recentProjectComponent = array(
		"heading" => "Proyek Terbaru",
		"projectContent" => array(
			array(
				"idProject" => 1,
				"source" => "_404.png",
				"title" => "Example Project 1",
				"description" => "Ini example desciption text data sebanyak 10 kata ddd dadd dd ddd dd",
				"status" => 1
			),
			array(
				"idProject" => 1,
				"source" => "_404.png",
				"title" => "Example Project 1",
				"description" => "Ini example desciption text data sebanyak 10 kata ddd dadd dd ddd dd",
				"status" => 0
			),
			array(
				"idProject" => 1,
				"source" => "_404.png",
				"title" => "Example Project 1",
				"description" => "Ini example desciption text data sebanyak 10 kata ddd dadd dd ddd dd",
				"status" => 0
			),
			array(
				"idProject" => 1,
				"source" => "_404.png",
				"title" => "Example Project 1",
				"description" => "Ini example desciption text data sebanyak 10 kata ddd dadd dd ddd dd",
				"status" => 1
			),
			array(
				"idProject" => 1,
				"source" => "_404.png",
				"title" => "Example Project 1",
				"description" => "Ini example desciption text data sebanyak 10 kata ddd dadd dd ddd dd",
				"status" => 0
			),
			array(
				"idProject" => 1,
				"source" => "_404.png",
				"title" => "Example Project 1",
				"description" => "Ini example desciption text data sebanyak 10 kata ddd dadd dd ddd dd",
				"status" => 1
			),
			array(
				"idProject" => 1,
				"source" => "_404.png",
				"title" => "Example Project 1",
				"description" => "Ini example desciption text data sebanyak 10 kata ddd dadd dd ddd dd",
				"status" => 0
			),
			array(
				"idProject" => 1,
				"source" => "_404.png",
				"title" => "Example Project 1",
				"description" => "Ini example desciption text data sebanyak 10 kata ddd dadd dd ddd dd",
				"status" => 1
			)
		),
		"loadHeading" => "Tampilkan lebih banyak",
		"loadButton" => array(
			"color" => "w3-green",
			"icon" => "fa fa-angle-down"
		)
	);

	$recentProjectHeading = $recentProjectComponent["heading"];
	$recentProjectContent = $recentProjectComponent["projectContent"];
	$recentProjectLoadHeading = $recentProjectComponent["loadHeading"];
	$recentProjectLoadButton = $recentProjectComponent["loadButton"];
?>

<!-- HOME PAGE -->
<div class="w3-row">

	<div class="w3-display-container">
	<?php
		foreach($sliderContent as $content){?>
			<div class="w3-display-container slider w3-animate-opacity">
				<img src="./public/image/slider/<?php echo $content['source'];?>" class="image-responsive">
				<div class="w3-display-topleft w3-display-topright w3-display-bottomleft w3-display-bottomright">
					<div class="w3-display-middle w3-center w3-text-white">
						<h1 class="font-responsive-h1"><?php echo $content['title'];?></h1>
						<p class="font-responsive-p"><?php echo $content['description'];?></p>
					</div>
				</div>
			</div>
	<?php } ?>
		<div class="w3-padding-16 w3-center w3-margin-bottom w3-display-bottommiddle">
			<?php 
				$counter = 0;
				foreach($sliderContent as $content){?>
					<span class="w3-bottombar w3-padding pointer margin-flex dotslider w3-border-green"></span>
			<?php } ?>
		</div>
	</div>

</div>

<div class="w3-container w3-light-grey">
	<div class="w3-padding-16 w3-center">
		<span class="font-responsive-h3 w3-text-dark-grey"><?php echo $recentProjectHeading;?></span>
	</div>

	<div class="w3-row">
		
		<?php
			foreach($recentProjectContent as $project){?>
			<div class="w3-col l3 m3 s12">
				<div class="w3-padding w3-margin w3-border-bottom w3-white pointer">
					<div class="w3-display-container">
						<img src="./public/image/project/<?php echo $project['source'];?>" class="image-responsive">
						<?php
							if($project["status"] == 1){?>
								<span class="w3-padding w3-blue w3-display-bottomleft">Selesai</span>
							<?php } else { ?>
								<span class="w3-padding w3-red w3-display-bottomleft">Proses</span>
						<?php } ?>
					</div>
					<?php
						if($project["status"] == 1){?>
							<div class="font-responsive-p-thumbnail w3-padding-16 w3-text-blue">Example Project 1</div>
						<?php } else { ?>
							<div class="font-responsive-p-thumbnail w3-padding-16 w3-text-red">Example Project 1</div>
					<?php } ?>
					<div class="font-responsive-p-thumbnail-description w3-text-dark-grey">Ini example desciption text data sebanyak 10 kata ddd dadd dd ddd dd</div>
				</div>
			</div>
		<?php } ?>

	</div>

	<div class="w3-padding-16 w3-center">
		<span class="w3-block w3-margin-bottom font-responsive-h4 w3-text-dark-grey"><?php echo $recentProjectLoadHeading;?></span>
		<button class="w3-card w3-circle w3-btn <?php echo $recentProjectLoadButton['color'];?>">
			<span class="w3-xxlarge <?php echo $recentProjectLoadButton['icon'];?>"></span>
		</button>
	</div>
</div>

<script type="text/javascript">
	slider.controlSlider("slider", "dotslider", 0);
	setInterval(function() {slider.controlSlider("slider", "dotslider", 1)}, 3000);
</script>
<!-- HOME PAGE -->