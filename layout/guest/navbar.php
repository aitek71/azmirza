<?php
	$componentNavbar = array(
		"navbarBrand" => array(
			"link" => "$route",
			"source" => "./public/image/logo/brand.jpg",
			"label" => "Azmirza"
		),
		"navbarButtonSide" => array(
			"idTarget" => "sidebar",
			"icon" => "fa fa-navicon"
		),
		"navbarButtonSideClose" => array(
			"idTarget" => "sidebar",
			"icon" => "fa fa-times",
		),
		"navbarLeftMenu" => array(
			array(
				"link" => "$route/guest.php?p=project",
				"label" => "Proyek",
				"color" => "w3-text-blue",
				"icon" => "fa fa-briefcase"
			),
			array(
				"link" => "$route/guest.php?p=contact",
				"label" => "Kontak",
				"color" => "w3-text-green",
				"icon" => "fa fa-phone"
			),
			array(
				"link" => "$route/guest.php?p=join",
				"label" => "Daftar Kerja",
				"color" => "w3-text-red",
				"icon" => "fa fa-users"
			)
		),
		"navbarRightMenu" => array(
			array(
				"link" => "$route/guest.php?p=login",
				"label" => "Masuk",
				"color" => "w3-dark-grey",
				"icon" => "fa fa-sign-in"
			)
		)
	);

	$navbarBrand = $componentNavbar["navbarBrand"];
	$navbarLeftMenu = $componentNavbar["navbarLeftMenu"];
	$navbarRightMenu = $componentNavbar["navbarRightMenu"];

	$navbarButtonSide = $componentNavbar["navbarButtonSide"];
	$navbarButtonSideClose = $componentNavbar["navbarButtonSideClose"];
?>

<!-- NAVBAR COMPONENT -->
<div class="w3-card">
	<div class="w3-block">

		<div class="w3-row w3-container w3-bar desktop">
			<ul class="w3-left">
				<img src="<?php echo $navbarBrand['source'];?>" alt="<?php echo $navbarBrand['label'];?>" onclick="location.assign('<?php echo $navbarBrand['link'];?>')" class="pointer">
			</ul>

			<ul class="w3-left">
				<?php
					foreach($navbarLeftMenu as $leftItem){?>
						<li class="w3-bar-item pointer" onclick="location.assign('<?php echo $leftItem['link'];?>')">
							<span class="<?php echo $leftItem['icon'];?> <?php echo $leftItem['color'];?>"></span>
							<span><?php echo $leftItem['label'];?></span>
						</li>
				<?php } ?>
			</ul>

			<ul class="w3-right">
				<?php
					foreach($navbarRightMenu as $rightItem){?>
						<li class="w3-bar-item pointer <?php echo $rightItem['color'];?> w3-round" onclick="location.assign('<?php echo $rightItem['link'];?>')">
							<span><?php echo $rightItem['label'];?></span>
							<span class="<?php echo $rightItem['icon'];?>"></span>
						</li>
				<?php } ?>
			</ul>
		</div>

		<div class="w3-row mobile">
			<button class="w3-left w3-button w3-white w3-hover-light-grey" onclick="showHide.show('<?php echo $navbarButtonSide['idTarget'];?>')">
				<span class="<?php echo $navbarButtonSide['icon'];?>">
			</button>
			<span class="w3-left w3-button w3-white w3-hover-white">
				<?php echo $navbarBrand["label"];?>
			</span>

			<div class="w3-sidebar w3-bar-block w3-card w3-animate-opacity w3-display-container w3-hide" id="<?php echo $navbarButtonSide['idTarget'];?>">
				<div class="w3-bar-item w3-center w3-padding-16 w3-border-bottom">
					<img src="<?php echo $navbarBrand['source'];?>" alt="<?php echo $navbarBrand['label'];?>" onclick="location.assign('<?php echo $navbarBrand['link'];?>')" class="pointer">
				</div>

				<button class="w3-btn w3-display-topright w3-red" onclick="showHide.hide('<?php echo $navbarButtonSideClose['idTarget'];?>')">
					<span class="<?php echo $navbarButtonSideClose['icon'];?>"></span>
				</button>

				<?php
					foreach($navbarLeftMenu as $leftItem){?>
						<li class="w3-bar-item pointer w3-border-bottom w3-border-light-grey" onclick="location.assign('<?php echo $leftItem['link'];?>')">
							<span class="<?php echo $leftItem['icon'];?> <?php echo $leftItem['color'];?>"></span>
							<span><?php echo $leftItem['label'];?></span>
						</li>
				<?php } 
					foreach($navbarRightMenu as $rightItem){?>
						<li class="w3-bar-item pointer" onclick="location.assign('<?php echo $rightItem['link'];?>')">
							<span class="<?php echo $rightItem['icon'];?> <?php echo $rightItem['color'];?>"></span>
							<span><?php echo $rightItem['label'];?></span>
						</li>
				<?php } ?>
			</div>
		</div>

	</div>
</div>
<!-- NAVBAR COMPONENT -->