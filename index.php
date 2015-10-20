<?php 
require("includes/requires/config.php");
function load_page($current_page) {
	global $current_sec, $current_sub;
	if ($current_page == "home") {
		include("templates/default/pages/home.php");
	} else if(file_exists("content/pages/".$current_page.".php")){
		include("content/pages/".$current_page.".php");	
	} else {
		include("templates/default/pages/404.php");
	}
}
if(isset($_GET["sub"])){
	$current_sub = $_GET["sub"];
	$current_sec = $_GET["sec"];
	$current_page = $current_sub;
} else if(isset($_GET["sec"])) {
	$current_sec = $_GET["sec"];
	$current_page = $current_sec;
} else {
	$current_page = "home";
}
load_page($current_page);
?>