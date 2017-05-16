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
  <font size="11"><u>SURAT KETERANGAN TIDAK MAMPU</u> </font><br />
  <font size="10"> No : <?php echo $no_surat ?></font> </b>
</div>  
<p align="justify">Yang bertanda tangan di bawah ini :</p>
 		<table width="100%">
			<tr>
			  <td width="6%" >&nbsp;</td>
		    <td width="28%" >Nama </td>
		    <td width="66%">: <?php echo $ttd_nama; ?> </td>
			</tr>
			
			<!-- <tr>
			  <td >&nbsp;</td>
		    <td >Jenis kelamin </td><td>: <?php echo $this->cm->jk($jk); ?> -->
			<br>
			<tr>
			  <td >&nbsp;</td>
			  <td >Jabatan</td>
			  <td>: <?php echo ucwords(strtolower ($ttd_jabatan)); ?> <?php echo ucwords(strtolower($desa2->desa));?></td>
		  </tr>
		 
		</table>
		<p>
		Menerangkan dengan Sesungguhnya :
		</p>
		
		
		<table width="100%">
			<tr>
			  <td width="6%" >&nbsp;</td>
		    <td width="28%" >Nama </td>
		    <td width="66%">: <?php echo $nama; ?> </td>
			</tr>
			
			<!-- <tr>
			  <td >&nbsp;</td>
		    <td >Jenis kelamin </td><td>: <?php echo $this->cm->jk($jk); ?> -->
			<br>
			<tr>
			  <td >&nbsp;</td>
			  <td >Tempat, Tgl lahir </td>
			  <td>: <?php echo $tmp_lahir . ", ".$tgl_lahir; ?></td>
		  </tr>
		  <br>
			<tr>
			  <td >&nbsp;</td>
			  <td >Jenis Kelamin </td>
			  <td>: <?php echo strtoupper($this->cm->jk($jk)); ?></td>
		  </tr>
		  <br>
			<tr>
			  <td >&nbsp;</td>
			  <td >Pekerjaan</td>
			  <td>: <?php echo strtoupper ($pekerjaan); ?></td>
		  </tr>
		  <br>
			<tr>
			  <td >&nbsp;</td>
		    <td >Agama </td><td>: <?php echo $agama; ?> </td></tr>
			<!-- <tr>
			  <td >&nbsp;</td>
		    <td >Pekerjaan </td><td>: <?php echo $pekerjaan; ?> </td></tr> -->
			<br>
			<tr>
			  <td >&nbsp;</td>
		    <td >Alamat </td><td>: <?php echo $alamat. "  RT $rt RW $rw "; 
			 if($dusun <> "") { 
      
      echo ($desa2->bentuk_lembaga == "Kelurahan")?" Lingkungan ":" Dusun ";
      echo $dusun; 
      }  ?></td></tr>
			<br>
			<tr>
			  <td >&nbsp;</td>
		    <td >No KTP/NIK </td><td>: <?php echo $nik; ?> </td></tr>
		</table>
  
 <p align="justify">Bahwa yang tersebut namanya diatas benar Warga Desa Kami dan menurut pengamatan kami yang bersangkutan benar <strong><i>"tidak mampu dan atau kurang mampu"</i></strong>.
 </p>
  
<p align="justify">Demikian surat keterangan  ini  dibuat  dengan  sebenar-benarnya, dan  diberikan kepada yang bersangkutan untuk dipergunakan sebagaimana mestinya.
</p>
<br />
 <?php
$this->load->view("ttd_pdf");
?>
</body>

</html>