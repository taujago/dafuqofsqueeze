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
 
<center>
<?php 
$arr_status_kawin = $this->cm->arr_status_kawin;

$status_duda = ($jk=="L")?"DUDA":"JANDA";

?>
	<div align="center">
  <b> 
  <font size="11"><u>SURAT KETERANGAN <?php echo $status_duda; ?></u> </font><br />
  <font size="10"> No : <?php echo $no_surat ?></font> </b>
  </div>	

<p>Yang bertanda tangan di bawah ini menerangkan bahwa : </p>
 
		<table width="100%">
			<tr>
			  <td width="8%">&nbsp;</td>
		    <td width="18%">Nama </td>
		    <td width="74%">: <?php echo $nama; ?> </td></tr>
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
			echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lingkungan ":" Dusun "; echo " $dusun "; ?></td></tr>
			<tr>
			  <td>&nbsp;</td>
		    <td>No. KTP / NIK </td><td>: <?php echo $nik; ?> </td></tr>
		</table>
 
 
 

<p align="justify">
Bahwa warga tersebut diatas adalah benar warga kami yang bertempat tinggal di  <?php echo $alamat ?> 
berstatus sebagai   <?php echo $status_duda; ?>. 
<br>
Demikianlah surat keterangan ini dibuat dan diberikan kepada yang 
bersangkutan untuk dipergunakan sebagaimana mestinya.	</p>

 

<p><br />
  <br />
  <br>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>  <br />
  <br />
   <?php
$this->load->view("ttd_pdf");
?>
</body>

</html>