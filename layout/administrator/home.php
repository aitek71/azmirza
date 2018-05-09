<?php
	$dashboardComponent = array(
		"dashboardHeading" => array(
			"label" => "Dashboard",
			"icon" => "fa fa-dashboard"
		),
		"dashboardBukuTamuToday" => array(
			"heading" => array(
				array(
					"label" => "No",
					"width" => "5%"
				),
				array(
					"label" => "Nama Lengkap",
					"width" => "15%"
				),
				array(
					"label" => "E-Mail",
					"width" => "15%"
				),
				array(
					"label" => "Judul",
					"width" => "20%"
				),
				array(
					"label" => "Deskrpsi",
					"width" => "35%"
				),
				array(
					"label" => "Aksi",
					"width" => "10%"
				)
			)
		)
	);

	$dashboardHeading = $dashboardComponent["dashboardHeading"];
	$dashboardBukuTamuToday = $dashboardComponent["dashboardBukuTamuToday"];
?>
<div class="w3-container w3-padding-16 w3-padding">
	
	<div class="w3-row w3-text-dark-grey w3-border-bottom w3-margin">
		<span class="font-responsive-h4">
			<span class="<?php echo $dashboardHeading['icon'];?>"></span>
			<?php echo $dashboardHeading['label'];?>
		</span>
	</div>

	<div class="w3-row">
		<div class="w3-col m4">
			<div class="w3-margin w3-border-bottom w3-card w3-purple">
				<div class="w3-padding">
					<span class="w3-xlarge">0</span>
				</div>
				<div class="w3-padding w3-border-top">
					<span>Jumlah Buku Tamu</span>
				</div>
			</div>
		</div>
		<div class="w3-col m4">
			<div class="w3-margin w3-border-bottom w3-card w3-blue">
				<div class="w3-padding">
					<span class="w3-xlarge">0</span>
				</div>
				<div class="w3-padding w3-border-top">
					<span>Jumlah Buku Tamu</span>
				</div>
			</div>
		</div>
		<div class="w3-col m4">
			<div class="w3-margin w3-border-bottom w3-card w3-red">
				<div class="w3-padding">
					<span class="w3-xlarge">0</span>
				</div>
				<div class="w3-padding w3-border-top">
					<span>Jumlah Buku Tamu</span>
				</div>
			</div>
		</div>
	</div>

	<div class="w3-margin">
		<table class="w3-table-all">
			<thead>
				<tr>
					<?php 
						$thead = $dashboardBukuTamuToday["heading"];
						$i = 0;
						for($i = 0; $i < count($thead) - 1; $i++){?>
							<th width="<?php echo $thead[$i]['width'];?>" class="w3-border-right"><?php echo $thead[$i]["label"];?></th>
					<?php }
					?>
					<th width="<?php echo $thead[$i]['width'];?>"><?php echo $thead[$i]["label"];?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>

</div>