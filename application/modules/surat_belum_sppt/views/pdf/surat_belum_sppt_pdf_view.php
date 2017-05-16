<html>
	<head>
		<title>
			<?php echo   $title; ?>
		</title>

<style>
body{
margin:0px;
}
</style>
		</head>

<body>
	<?php 
	$desa2 = $this->cm->data_desa();
$this->load->view("kop_surat");
?>
<div align="center">
  <b> 
  <font size="11"><u>SURAT KETERANGAN BELUM MEMPUNYAI SPPT</u> </font><br />
  <font size="10"> No : <?php echo $no_surat ?></font> </b>
  </div>

<p align="justify">Yang bertanda tangan di bawah ini,   <?php echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lurah  ":" Kepala Desa  "; ?><?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?> menerangkan bahwa : </p>
 
		<table width="100%">
			<tr><td width="21%" >Nama </td><td width="79%">: <?php echo $nama; ?> </td></tr>
			<tr><td  >Tempat, Tgl lahir </td><td>: <?php echo $tmp_lahir . ", ".$tgl_lahir; ?> </td></tr>
			<tr><td  >Jenis kelamin </td><td>: <?php echo strtoupper($this->cm->jk($jk)); ?></td></tr>
			<tr><td >Agama </td><td>: <?php echo $agama; ?> </td></tr>
			<tr><td >Pekerjaan </td><td>: <?php echo strtoupper($pekerjaan); ?> </td></tr>
			<tr><td  >Alamat </td><td>: <?php echo $alamat. " Rt $rt Rw $rw "; 
		  if($dusun <> "") { 
      
      echo ($desa2->bentuk_lembaga == "Kelurahan")?" Lingkungan ":" Dusun ";
      echo $dusun; 
      } 
			?></td></tr>
			<tr><td  >No. KTP / NIK </td><td>: <?php echo $nik; ?> </td></tr>
		</table>
<br><br>

Yang tersebut namanya di atas benar - benar memiliki sebidang tanah <?php echo $jenis_tanah ?> 
	yang terletak di sebelah <?php echo $batas_utara ?>
<br>
<br>
<table width="100%">
			<tr><td width="21%"  >Blok </td><td width="79%">: <?php echo $blok; ?> </td></tr>
			<tr><td  >Persil </td><td>: <?php echo $persil; ?> </td></tr>
			<tr><td >Luas tanah </td><td>: <?php echo $luas; ?>m<sup>2</sup>  </td></tr>
			<tr><td >Alamat tanah </td><td>: <?php echo $alamat_tanah; ?> </td></tr>
			
</table><br>

		yang ditinggali sejak <?php echo flipdate($dimiliki_sejak) ?> <br /><br />
		Dengan batasan - batasan : <br><br>

<table width="100%">
  <tr><td width="21%" >Selatan </td><td width="79%">: <?php echo $batas_selatan; ?> </td></tr>
			<tr><td  >Utara </td><td>: <?php echo $batas_utara; ?> </td></tr>
			<tr><td  >Barat </td><td>: <?php echo $batas_barat; ?> </td></tr>
			<tr><td  >Timur </td><td>: <?php echo $batas_timur; ?> </td></tr>
			
</table>
 
<br /><br />

adalah benar BELUM MEMPUNYAI SPPT dengan pertimbangan <?php echo $alasan; ?>
<br /><br/>

Demikian surat keterangan ini dibuat dan diberikan kepada yang bersangkutan 
untuk dipergunakan sebagaimana mestinya 

<br /><br /><br />
 <?php
$this->load->view("ttd_pdf");
?>
<!-- </div> end of wrap -->
</body>

</html>