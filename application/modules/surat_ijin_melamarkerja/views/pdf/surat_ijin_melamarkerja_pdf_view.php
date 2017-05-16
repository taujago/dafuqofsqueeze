<html>
	<head>
		<title>
			SURAT IJIN ORANGTUA MELAMAR PEKERJAAN
		</title>

 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/print_style.css">


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
  <font size="11"><u>SURAT IZIN ORANG TUA MELAMAR PEKERJAAN</u> </font><br />
  <font size="10"> No : <?php echo $no_surat ?></font> </b>
  </div>  

<p>Yang bertanda tangan di bawah ini  : </p>
 
		<table width="100%">
			<tr>
			  <td width="10%" >&nbsp;</td>
		    <td width="28%" >Nama </td><td width="62%">: <?php echo $ayah_nama; ?> </td></tr>
			<tr>
			  <td  >&nbsp;</td>
		    <td  >Tempat, Tgl lahir </td><td>: <?php echo $ayah_tmp_lahir . ", ".$ayah_tgl_lahir; ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Jenis kelamin </td><td>: <?php echo $this->cm->jk($ayah_jk); ?></td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Agama </td><td>: <?php echo $ayah_agama; ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Pekerjaan </td><td>: <?php echo $ayah_pekerjaan; ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Alamat </td><td>: <?php echo $ayah_alamat. "  Rt $ayah_rt Rw $ayah_rw "; 
		  if($dusun <> "") { 
      
      echo ($desa2->bentuk_lembaga == "Kelurahan")?" Lingkungan ":" Dusun ";
      echo $dusun; 
      }  ?></td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >No. KTP / NIK </td><td>: <?php echo $ayah_nik; ?> </td></tr>
		</table>
 
 
 


<p>Menyatakan dengan sebenarnya tidak keberatan dan memberikan izin kepada anak kami yang bernama:
</p>
 
		<table width="100%">
			<tr>
			  <td width="10%" >&nbsp;</td>
		    <td width="28%" >Nama </td><td width="62%">: <?php echo $nama; ?> </td></tr>
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
			  <td>&nbsp;</td>
		    <td>Alamat </td><td>: <?php echo $alamat. "  Rt $rt Rw $rw "; 
			 if($dusun <> "") { 
      
      echo ($desa2->bentuk_lembaga == "Kelurahan")?" Lingkungan ":" Dusun ";
      echo $dusun; 
      }  ?></td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >No. KTP / NIK </td><td>: <?php echo $nik; ?> </td></tr>
		</table>
 

<p>
Untuk melamar pekerjaan pada <?php echo $alamat_perusahaan ." sebagai $melamar_sebagai" ?><br>
Demikian surat izin ini kami buat dengan sebenarnya tanpa ada paksaan dan tekanan dari siapapun juga.
</p>	
 
<p align="right"><br />
    <?php
$this->load->view("ttd_pdf");
?>
</body>

</html>