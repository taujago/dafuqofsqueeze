<html>
	<head>
		<title>
			<?php echo   $title; ?>
		</title>

  <style>
* {
	font-size:10px;
}
</style> 


</head>

<body>
	<?php 
	$desa2 = $this->cm->data_desa();

	?>

 
<?php 
$this->load->view("kop_surat");
?><!--<center>
		<span id="judulsurat">SURAT KETERANGAN BELUM PERNAH MENIKAH </span><br />
     	<span id="nomor_surat"> No : <?php echo $no_surat ?> </span>
<br /><br /><br /> </center>-->
<div align="center"><b><font size="11"><u>SURAT KETERANGAN BELUM PERNAH MENIKAH</u> </font><br />
  <font size="10"> No : <?php echo $no_surat ?></font> </b>
</div>

<p align="justify">Yang bertanda tangan di bawah ini,   <?php echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lurah  ":" Kepala Desa  "; ?><?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?> menerangkan bahwa : </p>
 
		<table border="0"  width="100%" >
			<tr><td width="26%" >Nama </td><td width="74%">: <?php echo $nama; ?> </td></tr>
			<tr><td  >Tempat, Tgl lahir </td><td>: <?php echo $tmp_lahir . ", ".$tgl_lahir; ?> </td></tr>
			<tr><td  >Jenis kelamin </td><td>: <?php echo strtoupper($this->cm->jk($jk)); ?></td></tr>
			<tr><td >Agama </td><td>: <?php echo $agama; ?> </td></tr>
			<tr><td  >Pekerjaan </td><td>: <?php echo strtoupper($pekerjaan); ?> </td></tr>
			<tr><td >Alamat </td><td>: <?php echo $alamat. " Rt $rt Rw $rw "; 
			 if($dusun <> "") { 
      
      echo ($desa2->bentuk_lembaga == "Kelurahan")?" Lingkungan ":" Dusun ";
      echo $dusun; 
      } 
			?></td></tr>
			<tr><td >No. KTP / NIK </td><td>: <?php echo $nik; ?> </td></tr>
</table>
 
 
<p>Orang yang tersebut diatas adalah penduduk <?php echo ucwords(strtolower($desa2->bentuk_lembaga. " ".$desa2->desa))  ?> dan sepanjang pengetahuan kami bahwa orang tersebut diatas  BELUM PERNAH MENIKAH. </p>	
<p>
	Demikianlah surat keterangan ini dibuat dan diberikan kepada yang  bersangkutan untuk dipergunakan sebagaimana mestinya.
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
 <?php
$this->load->view("ttd_pdf");
?>
<!-- </div> end of wrap -->
</body>

</html>