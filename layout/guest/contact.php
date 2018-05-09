<?php
	$contactComponent = array(
		"headingBukuTamu" => "Buku Tamu",
		"headingContactUs" => "Kontak Kami",

		"bukuTamuForm" => "formBukuTamu",
		"bukuTamuContent" => array(
			array(
				"label" => "Nama Lengkap",
				"type" => "text",
				"name" => "fullName",
				"length" => "30"
			),
			array(
				"label" => "E-Mail",
				"type" => "email",
				"name" => "email",
				"length" => "30"
			),
			array(
				"label" => "No Telepon",
				"type" => "number",
				"name" => "phoneNumber",
				"length" => "13"
			),
			array(
				"label" => "Subyek",
				"type" => "text",
				"name" => "subject",
				"length" => 255
			),
			array(
				"label" => "Deskripsi",
				"type" => "textarea",
				"name" => "description",
				"length" => "1000"
			)
		),
		"bukuTamuButton" => array(
			"icon" => "fa fa-send",
			"label" => "Kirim"
		)
	);

	$headingBukuTamu = $contactComponent["headingBukuTamu"];
	$bukuTamuContent = $contactComponent["bukuTamuContent"];
	$bukuTamuButton = $contactComponent["bukuTamuButton"];

	$headingContactUs = $contactComponent["headingContactUs"];
?>

<div class="w3-container">
	<div class="w3-row w3-padding-16">
		
		<div class="w3-col m6 s12">
			<div class="w3-padding w3-margin">

				<div class="font-responsive-h4 w3-margin-bottom w3-border-bottom"><?php echo $headingBukuTamu;?></div>
				
				<form id="<?php echo $contactComponent['bukuTamuForm'];?>">
					<?php
						foreach($bukuTamuContent as $content){?>
							<section class="w3-row w3-margin-bottom">
								<label><?php echo $content["label"];?></label>
								<?php
									if($content["type"] == "textarea"){?>
										<textarea class="w3-input w3-border w3-round" name="<?php echo $content['name'];?>" id="<?php echo $content['name'];?>" maxlength="<?php echo $content['length'];?>"></textarea>
									<?php } else{ ?>
										<input class="w3-input w3-border w3-round" type="<?php echo $content['type'];?>" maxlength="<?php echo $content['length'];?>" name="<?php echo $content['name'];?>" id="<?php echo $content['name'];?>">
									<?php } ?>
							</section>
					<?php } ?>
					<button type="button" class="w3-btn w3-blue w3-round" onclick="formBukuTamu('<?php echo $contactComponent['bukuTamuForm'];?>')">
						<span class="<?php echo $bukuTamuButton['icon'];?>"></span>
						<span><?php echo $bukuTamuButton['label'];?></span>
					</button>
				</form>

			</div>
		</div>

		<div class="w3-col m6 s12">
			<div class="w3-padding w3-margin">

				<div class="font-responsive-h4 w3-margin-bottom w3-border-bottom"><?php echo $headingContactUs;?></div>

			</div>
		</div>

	</div>
</div>

<script type="text/javascript">
	function formBukuTamu (formID) {
		let fullName, email, phoneNumber, subject, description;
		let formElement = document.getElementById(formID);
		fullName = document.getElementById("fullName");
		email = document.getElementById("email");
		phoneNumber = document.getElementById("phoneNumber");
		subject = document.getElementById("subject");
		description = document.getElementById("description");

		let atpost, dotpost;
		atpost = email.value.indexOf("@");
		dotpost = email.value.lastIndexOf(".");

		if (formElement.value == "" || fullName.value == "" || email.value == "" || phoneNumber.value == "" || subject.value == "" || description.value == "") {
			alert("Harap isi seluruh form");
		}
		else if(atpost<1 || dotpost<atpost+2 || dotpost+2>=email.length){
			alert("Format email tidak benar");
		}
		else if(phoneNumber.value.length >= 13 || phoneNumber.value.length <= 10){
			alert("Format nomor telepon maksimal 13 karakter");
		}
		else{
			let formData = new FormData();
			formData.append("fullName", fullName);
			formData.append("email", email);
			formData.append("phoneNumber", phoneNumber);
			formData.append("subject", subject);
			formData.append("description", description);

			$.ajax({
				type: "POST",
				url: "http://localhost/azmirza/core/database/php/model/insertBukuTamu.php",
				data: formData,
                contentType: false,
                processData: false,
				success: function(response){
					
				}
			});
		}
	}
</script>