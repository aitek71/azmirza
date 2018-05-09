<?php
	/*
	*	FOR ADMINISTRATOR YOU MUST USE THE POST METHOD TO ACCESS ALL
	*	DATA FROM DATABASE
	*/

	// INCLUDE ROUTE
	require_once("routeController.php");

	// MAIN CLASS
	class StorageController{

		// CONSTRUCTOR
		function __construct(){}

		// CREATE DATABASE
		function createDatabase($scheme){
			$return = false;
			$newFile = fopen($scheme["fileName"] . ".json", $scheme["accessType"]);
			if(fwrite($newFile, $scheme["data"])){
				$return = true;
			}
			fclose($newFile);
			return $return;
		}
		// GET DATABASE
		function getDatabase($scheme){
			$return = null;
			if(file_exists($scheme["fileName"] . ".json")){
				$getFile = file_get_contents($scheme["fileName"] . ".json");
				$getData = json_decode($getFile);
				$return = $getData;
			}
			return $return;
		}
		// REMOVE DATABASE
		function removeDatabase($scheme){
			$return = false;
			if(file_exists($scheme["fileName"] . ".json")){
				unlink($scheme["fileName"] . ".json");
				$return = true;
			}
			return $return;
		}
		// RENAME DATABASE
		function renameDatabase($scheme){
			$return = false;
			if(file_exists($scheme["oldFileName"] . ".json")){
				rename($scheme["oldFileName"] . ".json", $scheme["newFileName"] . ".json");
				$return = true;
			}
			return $return;
		}

	}
?>