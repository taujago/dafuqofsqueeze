<?php
function download($filename){
		header( "Content-type: application/force-download");  
    	header( "Content-Disposition: inline; filename=\"" . $filename . "\"");
		header( "Expires: Mon, 1 Jul 1999 01:00:00 GMT"); 
    	header( "Cache-Control: no-cache, must-revalidate, post-check=0, pre-check=0");
	}

//$f = fopen("tmp/".$_GET[outfile],"r");
//$data =  //fread($f,sizeof("tmp/".$_GET[outfile]));
$file="tmp/".$_GET[outfile];
$data=file_get_contents($file);

download($_GET[outfile]);
echo $data;
unlink($file);
?>