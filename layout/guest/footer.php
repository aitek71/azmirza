<?php
	$footerComponent = array(
		"copyright" => "copyright &copy; <br>PT. Azmirza Mitra Informatika.",
		"socialContent" => array(
			array(
				"link" => "http://www.facebook.com",
				"icon" => "fa fa-facebook"
			),
			array(
				"link" => "http://www.twitter.com",
				"icon" => "fa fa-twitter"
			),
			array(
				"link" => "http://www.youtube.com",
				"icon" => "fa fa-youtube"
			)
		)
	);

	$socialContent = $footerComponent["socialContent"];
?>
<div class="w3-margin-top w3-topbar w3-border-red">
	<div class="w3-container w3-row">

		<div class="w3-col m3 s12">
			<div class="w3-padding desktop">
				<span class="font-responsive-p-thumbnail-description w3-text-dark-grey">
					<?php echo $footerComponent['copyright'];?>
				</span>
			</div>
			<div class="w3-padding mobile w3-center">
				<span class="font-responsive-p-thumbnail-description w3-text-dark-grey">
					<?php echo $footerComponent['copyright'];?>
				</span>
			</div>
		</div>

		<div class="w3-col m9 desktop">
			<div class="w3-row">
				<?php
					foreach($socialContent as $social){?>
						<span onclick="location.assign('<?php echo $social['link'];?>')" class="w3-right w3-padding w3-padding-16 pointer">
							<span class="<?php echo $social['icon'];?>"></span>
						</span>
				<?php } ?>
			</div>
		</div>

	</div>
</div>