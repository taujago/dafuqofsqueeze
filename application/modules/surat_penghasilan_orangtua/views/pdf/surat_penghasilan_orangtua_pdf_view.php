<html>
	<head>
		<title>
			<?php echo   $title; ?>
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
  <font size="11"><u>SURAT KETERANGAN PENGHASILAN ORANG TUA</u> </font><br />
  <font size="10"> No : <?php echo $no_surat ?></font> </b>
  </div>  
<p>Yang bertanda tangan di bawah ini  : </p>
 
		<table width="100%" >
			<tr>
			  <td width="10%" >&nbsp;</td>
		    <td width="20%" >Nama </td><td width="70%">: <?php echo $ayah_nama; ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Tempat, Tgl lahir </td><td>: <?php echo $ayah_tmp_lahir . ", ".$ayah_tgl_lahir; ?> </td></tr>
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
          if($ayah_dusun <> "") { 
			echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lingkungan ":" Dusun "; 
      echo  $ayah_dusun ;}  ?></td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >No. KTP / NIK </td><td>: <?php echo $ayah_nik; ?> </td></tr>
 	</table>
 

<p> adalah orang tua dari:
</p>
 
		<table width="100%">
			<tr>
			  <td width="10%" >&nbsp;</td>
		    <td width="20%" >Nama </td><td width="70%">: <?php echo $nama; ?> </td></tr>
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
      } 
			?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >No. KTP / NIK </td><td>: <?php echo $nik; ?> </td></tr>
		</table>
 


<p>
	Dengan ini menyatakan dengan sebenarnya bahwa penghasilan saya  sebulan <?php echo  rupiah($penghasilan) ?>
</p>
<p>
Demikian surat keterangan ini dibuat dan diberikan kepada yang  
bersangkutan untuk dipergunakan sebagaimana mestinya.</p>
<br />
 <?php
$this->load->view("ttd_pdf");
?>
<!-- </div> end of wrap -->
</body>

</html>