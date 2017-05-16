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
  <font size="11"><u>SURAT KETERANGAN USAHA</u></font><br />
  <font size="10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No : <?php echo $no_surat ?></font> </b>
</div>  
<p>Yang bertanda tangan di bawah ini : </p>
 

		<table width="100%">
			<tr>
			  <td width="30" class="label">&nbsp;</td>
		    <td width="135" class="label">Nama </td>
		    <td width="911">: <?php echo $ttd_nama; ?> </td>
			</tr>
			<tr>
			  <td class="label">&nbsp;</td>
			  <td class="label">Jabatan</td>
			  <td>: <?php echo $ttd_jabatan; ?>  </td></tr>
			
		</table>
		<p>Menerangkan bahwa</p>
 <table width="100%">
			<tr>
			  <td width="30" class="label">&nbsp;</td>
		    <td width="135" class="label">Nama </td>
		    <td width="911">: <?php echo $nama; ?> </td>
			</tr>
			<tr>
			  <td class="label">&nbsp;</td>
			  <td class="label">Tanggal Lahir/ Umur</td>
			  <td>: <?php echo $tgl_lahir; ?>/ <?php echo $umur; ?> Tahun </td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
		    <td class="label">Pekerjaan </td><td>: <?php echo strtoupper ($pekerjaan); ?> </td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
		    <td class="label">Alamat </td><td>: <?php echo $alamat; ?> </td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
		    <td class="label">No. KTP / NIK </td><td>: <?php echo $nik; ?> </td></tr>
</table>
<p>
Adalah benar  memiliki usaha dengan identitas usaha sebagai berikut :
</p>
 <table width="100%">
			<tr>
			  <td width="30" class="label">&nbsp;</td>
		    <td width="135" class="label">Jenis Usaha </td>
		    <td width="911">: <?php echo $jenis_usaha; ?> </td>
			</tr>
			<tr>
			  <td class="label">&nbsp;</td>
			  <td class="label">Lama Usaha </td>
			  <td>: <?php echo $lama; ?> Tahun </td>
   </tr>
			<tr>
			  <td class="label">&nbsp;</td>
			  <td class="label">Luas Tempat Usaha </td>
			  <td>: <?php echo $luas; ?> <?php echo $satuan; ?></td>
   </tr>
			<tr>
			  <td class="label">&nbsp;</td>
			  <td class="label">Tempat Usaha </td>
			  <td>: <?php echo $alamat_usaha; ?>, DUSUN <?php echo $ex_id_dusun; ?> RT <?php echo $ex_rt; ?>  RW <?php echo $ex_rw_manual; ?></td>
   </tr>
			
		</table>

<p>
	Demikianlah surat keterangan ini dibuat dan diberikan kepada yang 
	bersangkutan untuk dipergunakan sebagaimana mestinya.
</p>


<p><br />
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php
$this->load->view("ttd_pdf");
?>

</body>

</html>