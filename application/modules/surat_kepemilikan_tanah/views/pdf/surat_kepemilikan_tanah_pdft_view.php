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
  <font size="11"><u>SURAT KETERANGAN KEPEMILIKAN TANAH</u> </font><br />
  <font size="10"> No : <?php echo $no_surat ?></font> </b>
  </div>  


<p align="justify">Yang bertanda tangan di bawah ini,   <?php echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lurah  ":" Kepala Desa  "; ?><?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?> menerangkan bahwa : </p>
 		<table width="100%">
			<tr>
			  <td width="10%" >&nbsp;</td>
		    <td width="26%" >Nama </td><td width="64%">: <?php echo $nama; ?> </td></tr>
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
  
<p>Yang tersebut namanya di atas benar - benar memiliki sebidang tanah <?php echo $jenis_tanah ?> 
	yang terletak di  <?php echo $alamat_tanah ?>
</p>	


 
		<table width="100%" border="0">
			<tr>
			  <td width="10%">&nbsp;</td>
		    <td width="26%">Blok </td><td width="64%">: <?php echo $blok; ?> </td></tr>
			<tr>
			  <td>&nbsp;</td>
		    <td>Persil </td>
        <td>: <?php echo $persil; ?> </td></tr>
			<tr>
			  <td>&nbsp;</td>
		    <td>Luas tanah </td>
		    <td>: <?php echo $luas; ?> m<sup><font size="8px">2</font></sup></td></tr>
			
</table><br /><br />
		Yang ditinggali sejak <?php echo flipdate($dimiliki_sejak) ?> 
<p>Dan sampai sekarang pada waktu keterangan ini dibuat masih tetap 
atas namanya dan tidak menjadi perselisihan / sengketa 
dengan pihak lain baik mengenai hak maupun batas - batasnya.</p>

		Dengan batasan - batasan : <br>
<table width="100%">
<tr>
  <td width="10%" class="label">&nbsp;</td>
  <td width="26%" class="label">Selatan </td><td width="64%">: <?php echo $batas_selatan; ?> </td></tr>
			<tr>
			  <td>&nbsp;</td>
		    <td>Utara </td><td>: <?php echo $batas_utara; ?> </td></tr>
			<tr>
			  <td>&nbsp;</td>
		    <td>Barat </td><td>: <?php echo $batas_barat; ?> </td></tr>
			<tr>
			  <td>&nbsp;</td>
		    <td>Timur </td><td>: <?php echo $batas_timur; ?> </td></tr>
			
</table>
 
<br /><br />
 

Demikian surat keterangan ini dibuat dan diberikan kepada yang bersangkutan 
untuk dipergunakan sebagaimana mestinya 

<br />
<br />
   <?php
$this->load->view("ttd_pdf");
?>
</body>

</html>