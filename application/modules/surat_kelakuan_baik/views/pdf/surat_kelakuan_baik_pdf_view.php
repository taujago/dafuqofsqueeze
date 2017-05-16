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
.judul {
	font-weight:bold;
}

#kop {
	text-align:center;
	
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
  <font size="11"><u>SURAT KETERANGAN KELAKUAN BAIK</u> </font><br />
  <font size="10"> No : <?php echo $no_surat ?></font> </b>
  </div>  




<p align="justify">Yang bertanda tangan di bawah ini,   <?php echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lurah  ":" Kepala Desa  "; ?><?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?> menerangkan bahwa : </p>
 
		<table width="100%" align="left">
			<tr>
			  <td width="7%">&nbsp;</td>
		    <td width="19%">Nama </td>
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
			 if($dusun <> "") { 
      
      echo ($desa2->bentuk_lembaga == "Kelurahan")?" Lingkungan ":" Dusun ";
      echo $dusun; 
      }  ?></td></tr>
			<tr>
			  <td>&nbsp;</td>
		    <td>No. KTP / NIK </td><td>: <?php echo $nik; ?> </td></tr>
 		</table>
 
  
<p align="left">Selanjutnya kami juga mengetahui bahwa orang tersebut diatas benar- benar 
  membutuhkan surat keterangan 
  kelakuan baik untuk dipakai sebagai pelengkap berkas di dalam pengurusan administrasi.<br>
  <br>Demikian surat pengantar ini dibuat dan diberikan kepada
  yang bersangkutan untuk dipergunakan sebagaimana mestinya.	<br>
  <br>
   <?php
$this->load->view("ttd_pdf");
?>
<!-- </div> end of wrap -->
</body>

</html>