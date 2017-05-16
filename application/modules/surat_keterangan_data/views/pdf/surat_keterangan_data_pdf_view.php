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

	?>

<!-- <div id="wrap" style="width:1024; margin:0px auto" >  -->
 <?php 
 $this->load->view("kop_surat");
 ?>
 <div align="center">
  <b> 
  <font size="11"><u>SURAT KETERANGAN</u></font><br />
  <font size="10">&nbsp;&nbsp;&nbsp; No : <?php echo $no_surat ?></font> </b>
</div>
<p>Yang bertanda tangan di bawah ini
<?php echo ($desa2->bentuk_lembaga == "Kelurahan")?"Lurah":"Kepala Desa"; ?>
   <?php echo  ucwords(strtolower(" ".$desa2->desa." kecamatan ". $desa2->kecamatan ."  ". $desa2->kota)) ; ?> menerangkan bahwa : </p>

 
	  <table width="100%">
			<tr>
			  <td width="10%" >&nbsp;</td>
		    <td width="20%" >Nama </td><td width="70%">: <?php echo $nama; ?> </td></tr>
			<tr>
			  <td  >&nbsp;</td>
		    <td  >Tempat, Tgl lahir </td><td>: <?php echo $tmp_lahir . ", ".tgl_indo($tgl_lahir); ?> </td></tr>
			<tr>
			<td >&nbsp;</td>
		    <td >Jenis kelamin </td><td>: <?php echo strtoupper($this->cm->jk($jk)); ?> </td></tr>
			<tr>
			<td >&nbsp;</td>
		    <td >No. KK </td><td>: <?php echo $no_kk; ?> </td></tr>
			<tr>
			 <td >&nbsp;</td>
		    <td >No. KTP / NIK </td><td>: <?php echo $nik; ?> </td></tr>
			<tr>
			 <td >&nbsp;</td>
		    <td >Agama </td><td>: <?php echo $agama; ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Pekerjaan </td><td>: <?php echo strtoupper($pekerjaan); ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
			  <tr>
			  <td >&nbsp;</td>
		    <td >Status Kawin </td><td>: <?php echo strtoupper($this->cm->status_kawin($status_kawin)); ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Alamat </td><td>: <?php echo $alamat. "  Rt $rt Rw $rw "; 
			 if($dusun <> "") { 
      
      echo ($desa2->bentuk_lembaga == "Kelurahan")?" Lingkungan ":" Dusun ";
      echo $dusun; 
      }  ?></td></tr>
			
</table>
      <p align="justify"><br>
        <br>Benar oknum tersebut diatas adalah warga  <?php echo ucwords(strtolower($desa2->bentuk_lembaga. " ".$desa2->desa." Kecamatan ". $desa2->kecamatan. " ".$kota))  ?> dan merupakan pemilik <?php echo $data; ?> dengan identias sebagai berikut.  </p>
       

         <table width="100%">
			<tr>
			  <td width="10%" >&nbsp;</td>
		    <td width="20%" >No Kartu </td><td width="70%">: <?php echo $no_kartu; ?> </td></tr>
			<tr>
			  <td  >&nbsp;</td>
		    <td  >Nama </td><td>: <?php echo $nama_kartu; ?> </td></tr>
			<tr>
			<td >&nbsp;</td>
		    <td >Alamat</td><td>: <?php echo $alamat_kartu; ?> </td></tr>
			<tr>
			<td >&nbsp;</td>
		    <td>Tanggal Lahir </td><td>: <?php echo tgl_indo(flipdate($tgl_lahir_kartu)); ?> </td></tr>
			<tr>
			 <td >&nbsp;</td>
		    <td >Fase Tingkat <?php echo $fase_kartu; ?> </td><td>: <?php echo $rumah_sakit; ?> </td></tr>
			
</table>
<p>
Demikian surat keterangan ini dibuat untuk dipergunakan sebagaimana mestinya.</p>
<?php
$this->load->view("ttd_pdf");
?>
      </div>
</body>

</html>