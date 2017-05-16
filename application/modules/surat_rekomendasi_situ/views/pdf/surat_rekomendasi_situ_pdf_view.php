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

	?>

 

<?php 
$this->load->view("kop_surat");
?>
 <div align="center">
  <b> 
  <font size="11"><u>SURAT REKOMENDASI TEMPAT USAHA</u> </font><br />
  <font size="10"> No : <?php echo $no_surat ?></font> </b>
  </div>  
<p align="justify">Yang bertanda tangan di bawah ini,   <?php echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lurah  ":" Kepala Desa  "; ?><?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?> menerangkan bahwa : </p>
 
		<table width="100%">
			<tr>
			  <td width="79"  class="label">&nbsp;</td>
			  <td width="98"   class="label">Nama Lengkap</td><td width="821">: <?php echo $nama; ?> </td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
			  <td class="label">Nama Toko/CV/PT</td>
			  <td>: <?php echo $nama_usaha; ?></td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
		    <td class="label">Pekerjaan </td><td>: <?php echo $pekerjaan; ?> </td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
		    <td class="label">Alamat </td><td>: <?php echo $alamat; ?> </td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
		    <td class="label">No. KTP / NIK </td><td>: <?php echo $nik; ?> </td></tr>
		</table>
 
 

<p align="justify">Berdasarkan permohonan nama tersebut di atas perihal rekomendasi untuk mendapatkan  SURAT IZIN TEMPAT USAHA  (SITU) dan SURAT IZIN USAHA PERDAGANGAN yang terletak di lingkungan <?php echo $alamat_usaha; ?> RT  <?php echo $ex_rt; ?> <?php  if($dusun <> "") {  echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lingkungan ":" Dusun "; echo $dusun; }  ?> Desa <?php echo ucwords(strtolower($desa2->desa." Kecamatan $desa2->kecamatan $desa2->kota")); ?> </p>
<p align="jutify">Setelah kami teliti, kami menyetujui dan mendukung sepanjang memenuhi syarat - syarat sbb:</p>
<ol>
  <li>Tidak bertentangan dengan peraturan / perundangan yang berlaku.</li>
  <li>Tidak merugikan pihak lain, tidak memperdagangkan barang-barang terlarang.</li>
  <li>Mentaati ketentuan yang berlaku dan tidak bertentangan dengan usaha yang dilaksanakan termasuk Putusan Desa. </li>
  <li>Rekomendasi ini berlaku sebagai pengantar untuk diteruskan ke Kantor Kecamatan. </li>
  <li>Rekomendasi ini dengan sendirinya batal apabila melanggar point-point tersebut di atas.</li>
</ol>
<p align="justify">Demikian rekomendasi ini dibuat dan diberikan kepada yang bersangkutan agar dapat dipergunakan sebagaimana mestinya. </p>
<p><br />
  <?php
$this->load->view("ttd_pdf");
?>
</body>

</html>