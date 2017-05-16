<?php
 
	ini_set('max_execution_time', 0);
	$tmp_file = $_GET['tmp_file'];

	if(file_exists("tmp_restore/$tmp_file")) {
		// echo "file ada ";
		$a = system("restore.bat tmp_restore/$tmp_file");
		echo ($a)?"1":"0";
	}
	else {
		echo "0";
	}


	 
	 
?>