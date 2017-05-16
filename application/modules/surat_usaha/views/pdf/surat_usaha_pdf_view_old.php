<html>
	<head>
		<title>
			<?php echo   $title; ?>
		</title>

 
  <style>
* {
	font-size:8px;
}
p {
	margin:0px;
}
</style> 		</head>

<body>
	<?php 
	$desa2 = $this->cm->data_desa();
 
$this->load->view("kop_surat");
?>
 <div align="center">
  <b> 
  <font size="11"><u>SURAT KETERANGAN USAHA</u> </font><br />
  <font size="10"> No : <?php echo $no_surat ?></font> </b>
  </div>  
<p align="justify">Yang bertanda tangan di bawah ini,   <?php echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lurah  ":" Kepala Desa  "; ?><?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?> menerangkan bahwa : </p>

<table width="100%">
			<tr>
			  <td width="98" class="label">&nbsp;</td>
		    <td width="147" class="label">Nama </td><td width="753">: <b><?php echo $nama; ?></b> </td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
			  <td class="label">Umur</td>
			  <td>: <?php echo $umur; ?> Tahun </td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
		    <td class="label">Pekerjaan </td><td>: <?php echo $pekerjaan; ?> </td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
		    <td class="label">Alamat </td><td>: <?php echo $alamat; ?><!-- , Dusun <?php echo $dusun; ?> Rt <?php echo $rt; ?> Rw <?php echo $rw; ?> --> </td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
		    <td class="label">No. KTP / NIK </td><td>: <?php echo $nik; ?> </td></tr>
</table>
<p>
Memang benar nama  yang tersebut diatas penduduk warga Desa  <?php echo $alamat; ?> Dusun <?php echo $dusun; ?> Rt <?php echo $rt; ?> Rw <?php echo $rw; ?>, <?php echo ucwords(strtolower(" Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?>.
</p> 
 
<p>Memang benar nama  yang tersebut diatas penduduk&nbsp; warga  <?php echo $alamat; ?> RT <?php echo $ex_rt; ?><?php  if($ex_id_dusun <> "") {  echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lingkungan ":" Dusun "; echo $ex_id_dusun; }  ?> Desa <?php echo ucwords(strtolower($desa2->desa)); ?>, sekarang berdomisili di  <?php echo $alamat_usaha; ?> RT <?php echo $ex_rt; ?><?php  if($ex_id_dusun <> "") {  echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lingkungan ":" Dusun "; echo $ex_id_dusun; }  ?> Desa <?php echo ucwords(strtolower($desa2->desa)); ?></p>
<p>Mempunyai usaha :  <b><?php echo $jenis_usaha; ?></b></p>
<p>
Yang berlokasi di <?php echo $alamat_usaha; ?> RT <?php echo $ex_rt; ?><?php  if($ex_id_dusun <> "") {  echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lingkungan ":" Dusun "; echo $ex_id_dusun; }  ?> Desa <?php echo ucwords(strtolower($desa2->desa)); ?>.</p>
<p>Demikian surat keterangan  Usaha ini dibuat atas dasar sebenarnya untuk dipergunakan sebagai mana mestinya<strong></strong><br />
</p>


<br />
 <?php
$this->load->view("ttd_pdf");
?>
<br /> <br /><br />

 
</body>

</html>