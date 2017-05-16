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
<script type="text/javascript">
 
</script>
	<?php 
	$desa2 = $this->cm->data_desa();

	?>

<!-- <div id="wrap" style="width:1024; margin:0px auto" >  -->
 <?php 
$this->load->view("kop_surat");
?>

<div align="center">
  <b> 
  <font size="11"><u>SURAT PENGANTAR UNTUK MEMPEROLEH IZIN KERAMAIAN</u> </font><br />
  <font size="10"> No : <?php echo $no_surat ?></font> </b>
</div>  

<p align="justify">Yang bertanda tangan di bawah ini,   <?php echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lurah  ":" Kepala Desa  "; ?><?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?> menerangkan bahwa : </p>
 		<table width="100%">
			<tr>
			  <td width="10%" >&nbsp;</td>
		    <td width="26%" >Nama </td><td width="64%">: <?php echo $nama; ?> </td></tr>
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
 
 
 

<p>
Orang tersebut di atas, benar adalah penduduk  <?php echo ucwords(strtolower($desa2->bentuk_lembaga. " ". $desa2->desa)) ?>
 dan akan mengadakan kegiatan  <?php echo $nama_acara ?> 
</p>	
<p>Yang akan dilaksanakan pada : </p> 

 		<table width="100%">
			<tr>
			  <td width="10%" >&nbsp;</td>
		    <td width="26%" >Hari </td><td width="64%">: <?php echo $this->am->hari($tgl_mulai); ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Tanggal </td><td>: <?php echo flipdate($tgl_mulai); ?> </td></tr>
			<tr>
			  <td  >&nbsp;</td>
			  <td  >Sampai dengan  </td><td> </td></tr>
			<tr>
			  <td  >&nbsp;</td>
		    <td  >Tanggal </td><td>: <?php echo flipdate($tgl_selesai); ?> </td></tr>
			<tr>
			  <td  >&nbsp;</td>
		    <td  >Bertempat di </td><td>: <?php echo $tempat_acara; ?> </td></tr>
		 
		</table>
 
<p align="justify">
	Sehubungan dengan hal tersebut, maka dimohonkan kiranya pihak yang
	berwajib untuk menerbitkan izin keramaian pada acara tersebut diatas, 
	sepanjang yang bersangkutan atau penanggung jawab kegiatan memenuhi persyaratan untuk 
	mendapatkan ijin keramaian dari kepolisian sektor <?php echo ucwords(strtolower($desa2->kecamatan)) ?></p>
<p align="justify">
	Demikian Surat Pengantar Memperoleh Izin Keramaian ini dibuat dan diberikan 
	kepada yang bersangkutan untuk dipergunakan sebagaimana mestinya.</p>
 

<div align="justify"><br />
  <br />
  <br />
 
  <?php
$this->load->view("ttd_pdf");
?>
  <br /> 
  <br />
  <br />
</div>
<div style="clear:both;"> </div>
<p>
	Catatan: Surat pengantar ini tidak berlaku Sebagai Surat Izin Keramaian.
</p>
<!-- </div> end of wrap -->
</body>

</html>