<?php


// $outfile="simdik_backupdb_".date("dmY_his").".sql";
$outfile = $_GET['outfile'];
$tmp_dir="tmp/";
$x = @system("backup.bat $outfile");

// $x= file_get_contents($tmp_dir.$outfile);
// echo $x;
?>

 