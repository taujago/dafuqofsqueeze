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
	<?php 
	$desa2 = $this->cm->data_desa();
 
 $this->load->view("kop_surat");
 ?>
<div align="center">
  <b> 
  <font size="11"><u>SURAT KETERANGAN DOMISILI BANGUNAN</u> </font><br />
  <font size="10"> No : <?php echo $no_surat ?></font> </b>
  </div>
<p>Yang bertanda tangan di bawah ini kepala <?php echo  ucwords(strtolower($desa2->bentuk_lembaga." ".$desa2->desa." kecamatan ". $desa2->kecamatan ."  ". $desa2->kota)) ; ?> menerangkan bahwa : </p>
<p>Berdasarkan Surat Keterangan Domisili RT <?php echo $surat_rt; ?> Nomor : <?php echo $surat_nomor; ?> Tanggal : <?php echo flipdate($surat_tanggal); ?> bahwa : </p>
<p><center><u><?php echo $surat_bahwa; ?></u> 

</center></p>  
<p>Bangunan  tersebut diatas adalah benar berdomisili di lingkungan : </p>
  
<table width="100%">
<tr>
  <td width="10%"   >&nbsp;</td>
  <td width="16%"   >Jalan </td><td width="74%"  >: <?php echo $b_jalan; ?> </td></tr>
			<tr>
			  <td  >&nbsp;</td>
			  <td  >RT / Dusun </td><td>: <?php echo $surat_rt." / ".$id_dusun; ?> </td></tr>
			<tr>
			  <td  >&nbsp;</td>
			  <td  >Desa  </td><td>: <?php echo ucwords(strtolower($desa2->desa)); ?> </td></tr>
			<tr>
			  <td  >&nbsp;</td>
			  <td  >Kecamatan  </td><td>: <?php echo ucwords(strtolower($desa2->kecamatan)); ?> </td></tr>
</table>
  
 

<p>Demikian surat keterangan ini dibuat dan diberikan kepada yang bersangkutan agar dapat dipergunakan sebagaimana mestinya.</p>	
 

 

<p><br />
</p>
<p>&nbsp;</p>
<p><br />
  <br />
    <?php
$this->load->view("ttd_pdf");
?>
</body>

</html>