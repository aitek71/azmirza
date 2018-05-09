<?php
	$component404 = array(
		"title" => "404 NOT FOUND",
		"description" => "Halaman yang anda cari tidak ditemukan.",
		"homeButton" => "$route/administrator.php"
	);
?>

<!-- 404 NOT FOUND PAGE -->
<div class="w3-display-container w3-display-topleft w3-display-topright w3-display-bottomleft, w3-display-bottomright w3-light-grey">
	<div class="w3-display-middle">
		<div class="w3-card w3-white _404-container w3-text-grey w3-center">

			<div class="w3-row w3-padding w3-border-bottom">
				<span class="w3-xlarge"><?php echo $component404['title'];?></span>
			</div>

			<div class="w3-row w3-padding">
				<p><?php echo $component404['description'];?></p>
				<p>
					<button class="w3-btn w3-blue w3-round" onclick="location.assign('<?php echo $component404['homeButton'];?>')"><span class="fa fa-home"></span> Halaman utama</button>
				</p>
			</div>

		</div>
	</div>
</div>
<!-- 404 NOT FOUND PAGE -->