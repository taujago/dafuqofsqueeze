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

 
 <?php 
$this->load->view("kop_surat");
?>
 <div align="center">
  <b> 
  <font size="11"><u>SURAT KETERANGAN KEPEMILIKAN RUMAH</u> </font><br />
  <font size="10"> No : <?php echo $no_surat ?></font> </b>
  </div>  


<p align="justify">Yang bertanda tangan di bawah ini,   <?php echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lurah  ":" Kepala Desa  "; ?><?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?> menerangkan bahwa : </p>
 		<table width="100%">
			<tr>
			  <td width="41">&nbsp;</td>
		    <td width="131">Nama </td><td width="826">: <?php echo $nama; ?> </td></tr>
			<tr>
			  <td>&nbsp;</td>
		    <td>Tempat, Tgl lahir </td><td>: <?php echo $tmp_lahir . ", ".$tgl_lahir; ?> </td></tr>
			<tr>
			  <td>&nbsp;</td>
		    <td>Jenis kelamin </td><td>: <?php echo $this->cm->jk($jk); ?></td></tr>
			<tr>
			  <td>&nbsp;</td>
		    <td>Agama </td><td>: <?php echo $agama; ?> </td></tr>
			<tr>
			  <td>&nbsp;</td>
		    <td>Pekerjaan </td><td>: <?php echo $pekerjaan; ?> </td></tr>
			<tr>
			  <td>&nbsp;</td>
		    <td>Alamat </td><td>: <?php echo $alamat. "  Rt $rt Rw $rw "; 
			 if($dusun <> "") { 
      
      echo ($desa2->bentuk_lembaga == "Kelurahan")?" Lingkungan ":" Dusun ";
      echo $dusun; 
      }  ?></td></tr>
			<tr>
			  <td>&nbsp;</td>
		    <td>No. KTP / NIK </td><td>: <?php echo $nik; ?> </td></tr>
		</table>
 		<p>Yang bersangkutan diatas benar memiliki SEBUAH RUMAH yang beralamat <?php echo $alamat_rumah ?> yang ditinggalinya selama <?php echo $ditinggali_sejak ?> tahun hingga sekarang.
 </p>
<p>Demikian surat keterangan ini dibuat dan diberikan kepada yang bersangkutan 
          untuk dipergunakan sebagaimana mestinya <br />
</p>
<p>&nbsp;</p>

<p><br />
  <br />
    <?php
$this->load->view("ttd_pdf");
?>

</body>

</html>