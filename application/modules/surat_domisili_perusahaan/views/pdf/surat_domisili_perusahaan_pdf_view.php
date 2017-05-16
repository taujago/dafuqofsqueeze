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
  <font size="11"><u>SURAT KETERANGAN DOMISILI PERUSAHAAN</u> </font><br />
  <font size="10"> No : <?php echo $no_surat ?></font> </b>
  </div>
<p align="justify">Yang bertanda tangan di bawah ini,   <?php echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lurah  ":" Kepala Desa  "; ?><?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?> menerangkan bahwa : </p>
<table width="100%">
  <tr>
    <td width="98" class="label">&nbsp;</td>
    <td width="147" class="label">Nama </td>
    <td width="753">: <b><?php echo $nama; ?> </b></td>
  </tr>
  <tr>
    <td class="label">&nbsp;</td>
    <td class="label">Tempat Tanggal Lahir </td>
    <td>:  <b><?php echo $tempat_lahir; ?>, <?php echo flipdate($tanggal_lahir); ?></b></td>
  </tr>
  <tr>
    <td class="label">&nbsp;</td>
    <td class="label">Jenis Kelamin  </td>
    <td>: <b><?php echo  $jk; ?></b> </td>
  </tr>
  <tr>
    <td class="label">&nbsp;</td>
    <td class="label">Pekerjaan  </td>
    <td>: <b><?php echo  $pekerjaan; ?></b> </td>
  </tr>
   <tr>
    <td class="label">&nbsp;</td>
    <td class="label">Alamat  </td>
    <td>: <b><?php echo  $alamat; ?></b> </td>
  </tr>
 
 
</table>
<p>Bahwa memang benar saat ini mempunyai usaha sebagai berikut : </p>

<table width="100%">
			<tr>
			  <td width="98" class="label">&nbsp;</td>
		    <td width="147" class="label">Nama Perusahan  </td>
		    <td width="753">: <b><?php echo $nama_perusahaan; ?></b> </td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
			  <td class="label">Jenis Usaha </td>
			  <td>: <?php echo $jenis_usaha; ?> </td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
		    <td class="label">Alamat Usaha  </td>
		    <td>: <?php echo $alamat_usaha; ?> </td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
		    <td class="label">No. Telepon  </td>
		    <td>: <?php echo $telp; ?> </td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
		    <td class="label">Status Bangunan </td>
		    <td>: <?php echo $status_bangunan; ?> </td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
		    <td class="label">No. Akte Pendirian Perusahaan </td>
		    <td>: <?php echo $akta; ?> </td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
		    <td class="label">SK Pengesahan </td>
		    <td>: <?php echo $sk; ?> </td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
		    <td class="label">Penanggung Jawab</td>
		    <td>: <?php echo $pj; ?> </td></tr>
</table>
 
 
<p>Demikianlah surat keterangan domisili perusahaan ini dibuat sebagaimana dengan sebenarnya agar dapat dipergunakan sebagaiamana mestinya  </p>
<p>&nbsp;</p>
<br />
  <?php
$this->load->view("ttd_pdf");
?>

 
</body>

</html>