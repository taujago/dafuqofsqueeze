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

 

<div align="center"><b><u>SURAT IZIN MENDIRIKAN BANGUNAN</u> 
</b>
</div>
<br>
<table width="100%" border="0">
  <tr>
    <td width="10%">Nomor</td>
    <td width="1%">:</td>
    <td width="89%"><?php echo $no_surat ?></td>
  </tr>
  <tr>
    <td>Sifat</td>
    <td>:</td>
    <td><?php echo $sifat ?></td>
  </tr>
  <tr>
    <td>Lampran</td>
    <td>:</td>
    <td><?php echo $lampiran ?> Berkas </td>
  </tr>
  <tr>
    <td>Perihal</td>
    <td>:</td>
    <td><?php echo $hal ?></td>
  </tr>
</table>

<table width="100%" border="0">
  <tr>
    <td width="75%">&nbsp;</td>
    <td width="25%"><center>Kepada</center></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><center>Yth : Camat <?php echo strtoupper($desa2->kecamatan); ?></center></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><center>di</center></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><center>Tempat</center></td>
  </tr>
</table>
<p align="justify">Berdasarkan permohonan Saudara    menerangkan bahwa <?php echo $nama; ?> pada tanggal <?php echo tgl_indo(flipdate($tanggal)); ?> kami menerangkan dengan sesungguhnya bahwa : </p>
<table width="100%">
			<tr>
			  <td width="98" class="label">&nbsp;</td>
		    <td width="147" class="label">Nama Lengkap </td>
		    <td width="753">: <?php echo $nama; ?> </td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
			  <td class="label">Umur</td>
			  <td>: <?php echo $umur; ?> Tahun </td></tr>
		
			<tr>
			  <td class="label">&nbsp;</td>
		    <td class="label">Alamat </td><td>: <?php echo $alamat; ?> </td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
		    <td class="label">No. KTP / NIK </td><td>: <?php echo $nik; ?> </td></tr>
</table>
 
 
<p>Adalah warga Desa <?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?>
 mengajukan permohonan surat izin mendirikan bangunan (IMB) <?php echo $jenis_usaha; ?> yang beralamat di <?php echo $jenis_usaha; ?>.</p>
<p>Pada prinsipnya kami tidak keberatan kepada yang bersangkutan diberikan rekomendasi surat izin mendirikan bangunan (IMB) </p>
<p>Demikianlah surat rekomendasi izin mendirikan bangunan (IMB) dibuat untuk dipergunakan sebagaimna mestinya </p>
<p>&nbsp;</p>
<p><br />
  <?php
$this->load->view("ttd_pdf");
?>
<br /> <br /><br />

 
</body>

</html>