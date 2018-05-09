<?php
	require_once("../controller/storageController.php");
	$storage = new StorageController();
	if (isset($_POST)) {
		$currentData = $storage->getDatabase("../../json/componentBukuTamu.json");
		if ($currentData == null) {
			
		}
	}
?>