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
</style> 

		</head>

<body>
	<?php 
	$desa2 = $this->cm->data_desa();

	?>

<!-- <div id="wrap" style="width:1024; margin:0px auto" >  -->
 <?php 
$this->load->view("kop_surat");
?>
 <div align="center">
  <b> 
  <font size="11"><u>SURAT KETERANGAN PENDUDUK SEMENTARA</u> </font><br />
  <font size="10"> No : <?php echo $no_surat ?></font> </b>
</div>  
<p align="justify">Yang bertanda tangan di bawah ini,   <?php echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lurah  ":" Kepala Desa  "; ?><?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?> menerangkan bahwa : </p>
 		<table width="100%">
			<tr>
			  <td width="10%" class="label">&nbsp;</td>
		    <td width="20%" class="label">Nama </td><td width="70%">: <?php echo $nama; ?> </td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
		    <td class="label">Tempat, Tgl lahir </td><td>: <?php echo $tmp_lahir . ", ".$tgl_lahir; ?> </td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
		    <td class="label">Jenis kelamin </td><td>: <?php echo $this->cm->jk($jk); ?></td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
		    <td class="label">Agama </td><td>: <?php echo $agama; ?> </td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
		    <td class="label">Pekerjaan </td><td>: <?php echo $pekerjaan; ?> </td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
		    <td class="label">Alamat </td><td>: <?php echo $alamat. "  Rt $rt Rw $rw "; 
			 if($dusun <> "") { 
      
      echo ($desa2->bentuk_lembaga == "Kelurahan")?" Lingkungan ":" Dusun ";
      echo $dusun; 
      }  ?></td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
		    <td class="label">No. KTP / NIK </td><td>: <?php echo $nik; ?> </td></tr>
		</table>

 
 

 
<p align="justify">
	Orang tersebut di atas, benar adalah penduduk 
	<?php echo ucwords(strtolower($desa2->bentuk_lembaga. " ".$desa2->desa))  ?> berdomisili sesuai alamat diatas, 
	sementara kartu tanda penduduk  (KTP) yang asli masih dalam proses penyelesaian.</p>
<p align="justify">
Demikianlah surat keterangan ini dibuat dan diberikan kepada yang
bersangkutan untuk dipergunakan sebagaimana mestinya.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

 <?php
$this->load->view("ttd_pdf");
?>
<!-- </div> end of wrap -->
</body>

</html>