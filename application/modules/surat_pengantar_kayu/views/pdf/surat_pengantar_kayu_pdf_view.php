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
  <font size="11"><u>SURAT PENGANTAR KAYU</u> </font><br />
  <font size="10"> No : <?php echo $no_surat ?></font> </b>
  </div>  
<p align="justify">Yang bertanda tangan di bawah ini,   <?php echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lurah  ":" Kepala Desa  "; ?><?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?> menerangkan bahwa : </p>
 		<table width="100%">
			<tr>
			  <td width="10%" >&nbsp;</td>
		    <td width="24%" >Nama </td><td width="66%">: <?php echo $nama; ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Tempat, Tgl lahir </td><td>: <?php echo $tmp_lahir . ", ".$tgl_lahir; ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Jenis kelamin </td><td>: <?php echo $this->cm->jk($jk); ?></td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Agama </td><td>: <?php echo $agama; ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Pekerjaan </td><td>: <?php echo $pekerjaan; ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Alamat </td><td>: <?php echo $alamat. "  Rt $rt Rw $rw "; 
			 if($dusun <> "") { 
      
      echo ($desa2->bentuk_lembaga == "Kelurahan")?" Lingkungan ":" Dusun ";
      echo $dusun; 
      }  ?></td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >No. KTP / NIK </td><td>: <?php echo $nik; ?> </td></tr>
		</table>
  
<p>Yang tersebut namanya diatas, benar memiliki kayu bantalan yang 
	terdiri dari kayu campuran yang berasal dari <?php echo $asal_kayu ?> 
untuk selanjutnya akan diangkut ke <?php echo $tempat_pengiriman ?> dengan menggunakan <br>
</p>
<table width="100%">
  <tr>
    <td width="10%"  >&nbsp;</td>
  <td width="24%"  >Kendaraan </td><td width="66%">: <?php echo $jenis_kendaraan; ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Nomor Polisi </td><td>: <?php echo $nomor_polisi; ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Volume Kayu </td><td>: <?php echo $volume_kayu; ?> m  </td></tr>
			
</table><br /> 
  
<p>
Demikian surat pengantar ini dibuat dan diberikan kepada yang
bersangkutan untuk dipergunakan sebagaimana perlunya, dan kepada pihak yang berwenang dimohon bantuannya.

</p>
<br />
 <?php
$this->load->view("ttd_pdf");
?>
</body>

</html>