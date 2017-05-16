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
  <font size="11"><u>SURAT KETERANGAN KEHILANGAN </u> </font><br />
  <font size="10"> No : <?php echo $no_surat ?></font> </b>
</div>  
<p align="justify">Yang bertanda tangan di bawah ini,   <?php echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lurah  ":" Kepala Desa  "; ?><?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?> menerangkan bahwa : </p>
 		<table width="100%">
			<tr>
			  <td width="10%" >&nbsp;</td>
		    <td width="24%" >Nama </td><td width="66%">: <?php echo $nama; ?> </td></tr>
			<tr>
			<br>
			  <td >&nbsp;</td>
		    <td >Tempat, Tgl lahir </td><td>: <?php echo $tmp_lahir . ", ".$tgl_lahir; ?> </td></tr>
			<!-- <tr>
			  <td >&nbsp;</td>
		    <td >Jenis kelamin </td><td>: <?php echo $this->cm->jk($jk); ?></td></tr> -->
			<br>
			<tr>
			  <td >&nbsp;</td>
		    <td >Agama </td><td>: <?php echo $agama; ?> </td></tr>
			<!-- <tr>
			  <td >&nbsp;</td>
		    <td >Pekerjaan </td><td>: <?php echo $pekerjaan; ?> </td></tr> -->
			<br>
			<tr>
			  <td >&nbsp;</td>
		    <td >Alamat </td><td>: <?php echo $alamat. "  RT $rt RW $rw "; 
			 if($dusun <> "") { 
      
      echo ($desa2->bentuk_lembaga == "Kelurahan")?" Lingkungan ":" Dusun ";
      echo $dusun; 
      }  ?></td></tr>
			<br>
			<tr>
			  <td >&nbsp;</td>
		    <td >NIK </td><td>: <?php echo $nik; ?> </td></tr>
		</table>
  
 <p align="justify">Nama orang tersebut di atas adalah benar benar warga Desa <?php echo ucwords(strtolower($desa2->desa));  ?> yang <?php echo $kehilangan;  ?> nya hilang, <?php echo $ket_surat; ?>
 </p>
  
<p align="justify">Demikian surat ini kami buat dengan mengingat sumpah jabatan, atas perhatiannya disampaikan terima kasih.
</p>
<br />
 <?php
$this->load->view("ttd_pdf");
?>
</body>

</html>