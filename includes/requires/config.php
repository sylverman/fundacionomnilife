<?php 
$site_url_root = "http://apps.thlink.mx/fundacionomnilife/";
define("SITE_URL_ROOT", "http://apps.thlink.mx/fundacionomnilife/");
define("SITE_NAME", "Fundación gente que cuida a la gente");
$site_path_root = "/var/www/fundacionomnilife/";

$arPaths[] = get_include_path();

//$arPaths[] = $site_path_root."includes/classes/";
//$arPaths[] = $site_path_root."includes/";
$arPaths[] = $site_path_root."includes/requires/";
$arPaths[] = $site_path_root."templates/default/layout/";
//$arPaths[] = $site->config["local_root"]."templates/universidadvirtual/pages/";
//$arPaths[] = $site->config["local_root"]."templates/".$site->config["template"]."/layout/";
//$arPaths[] = $site->config["local_root"]."templates/".$site->config["template"]."/modules/";
 
$sMergedPaths = implode(PATH_SEPARATOR,$arPaths);
set_include_path($sMergedPaths);

	
$dbConfig = array(
	"user" => "root",
	"password" => "root",
	"db" => "autos",
	"host" => "localhost",
	"port" => "3306"
);
?>