<?php
function __autoload($classname) {
	$file = "classes/".$classname.".class.php";
	clearstatcache();
	if (file_exists($file)) {
		require_once($file);
	} else {
		echo "No fue encontrada la ruta ".$file;
	}
}	

?>