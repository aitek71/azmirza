<?php
	$navbarComponent = array(
		"navbarBrand" => array(
			"label" => "Azmirza",
			"source" => "brand.jpg",
			"link" => "$route/administrator.php"
		),
		"navbarContent" => array(
			array(
				"link" => "$route/administrator.php?p=guest",
				"label" => "Kelolah Buku Tamu",
				"icon" => "fa fa-book",
				"color" => "w3-text-purple"
			),
			array(
				"link" => "$route/administrator.php?p=project",
				"label" => "Kelolah Proyek",
				"color" => "w3-text-blue",
				"icon" => "fa fa-briefcase"
			),
			array(
				"link" => "$route/administrator.php?p=contact",
				"label" => "Kelolah Kontak",
				"color" => "w3-text-green",
				"icon" => "fa fa-phone"
			),
			array(
				"link" => "$route/administrator.php?p=join",
				"label" => "Kelolah Daftar Kerja",
				"color" => "w3-text-red",
				"icon" => "fa fa-users"
			),
			array(
				"link" => "$route/administrator.php?p=setting",
				"label" => "Kelolah Website",
				"color" => "w3-text-teal",
				"icon" => "fa fa-globe"
			)
		),
		"navbarContentExtra" => array(
			array(
				"link" => "$route/administrator.php?p=user",
				"label" => "Pengguna",
				"icon" => "fa fa-user"
			),
			array(
				"link" => "$route/administrator.php?logout=1",
				"label" => "Keluar",
				"icon" => "fa fa-sign-out"
			)
		)
	);

	$navbarBrand = $navbarComponent["navbarBrand"];
	$navbarContent = $navbarComponent["navbarContent"];
	$navbarContentExtra = $navbarComponent["navbarContentExtra"];
?>

<div class="w3-sidebar w3-card layout-2 w3-display-container" id="siderbar">
	<div class="w3-bar-block w3-text-dark-grey">

		<div class="w3-bar-item pointer w3-padding-16 w3-center w3-border-bottom" onclick="location.assign('<?php echo $navbarBrand['link'];?>')">
			<img src="./public/image/logo/<?php echo $navbarBrand['source'];?>" alt="<?php echo $navbarBrand['label'];?>">
		</div>

		<?php
			foreach($navbarContent as $content) {?>
				<div onclick="location.assign('<?php echo $content['link'];?>')" class="w3-bar-item w3-border-bottom w3-border-light-grey pointer w3-hover-light-grey">
					<span class="<?php echo $content['color'];?> <?php echo $content['icon'];?>"></span>
					<span><?php echo $content['label'];?></span>
				</div>
		<?php } ?>

	</div>

	<div class="w3-display-bottomleft w3-display-bottomright w3-border-top">
		<div class="w3-padding w3-row w3-text-dark-grey w3-center">
			
		<?php
			foreach($navbarContentExtra as $content) {?>
				<div class="w3-col m6 s6">
					<div class="w3-hover-dark-grey w3-padding" onclick="location.assign('<?php echo $content['link'];?>')">
						<span class="<?php echo $content['icon'];?>"></span><br>
						<span><?php echo $content['label'];?></span>
					</div>
				</div>
		<?php } ?>

		</div>
	</div>
</div>