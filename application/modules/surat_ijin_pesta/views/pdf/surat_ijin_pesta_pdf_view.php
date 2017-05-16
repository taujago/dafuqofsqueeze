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
  <font size="11"><u>SURAT PENGANTAR MOHON IJIN PESTA </u> </font><br />
  <font size="10"> No : <?php echo $no_surat ?></font> </b>
</div>
	<p align="justify">Yang bertanda tangan di bawah ini,   <?php echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lurah  ":" Kepala Desa  "; ?><?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?> menerangkan bahwa : </p>
 		<table width="100%">
			<tr>
			  <td width="6%" >&nbsp;</td>
		    <td width="20%" >Nama </td>
		    <td width="74%">: <?php echo $nama; ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Tempat, Tgl lahir </td><td>: <?php echo $tmp_lahir . ", ".$tgl_lahir; ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Jenis kelamin </td><td>: <?php echo strtoupper($this->cm->jk($jk)); ?> </td></tr>
			<tr>
			  <td>&nbsp;</td>
		    <td>Agama </td><td>: <?php echo $agama; ?> </td></tr>
			<tr>
			  <td>&nbsp;</td>
		    <td>Pekerjaan </td><td>: <?php echo $pekerjaan; ?></td>
			</tr>
			<tr>
			  <td>&nbsp;</td>
		    <td>Alamat </td><td>: <?php echo $alamat. " RT $rt RW $rw "; 
			echo ($desa2->bentuk_lembaga == "Kelurahan")?" Lingkungan ":" DUSUN ";
			echo $dusun;
			?> </td></tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>Acara</td>
			  <td>: <?php echo $acara; ?></td>
		  </tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>Undangan</td>
			  <td>: <?php echo $undangan; ?></td>
		  </tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>Hiburan</td>
			  <td>: <?php echo $hiburan; ?></td>
		  </tr>
			
		</table>
  


<p>Demikianlah surat keterangan ini dibuat dan diberikan kepada yang 
bersangkutan untuk dipergunakan sebagaimana mestinya.	</p>


<p>&nbsp;</p>
<p><br />
  <br /><br />
 <?php
$this->load->view("ttd_pdf");
?>

<!-- </div> end of wrap -->
</body>

</html>