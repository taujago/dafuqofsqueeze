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
$this->load->view("kop_surat");

	?>


<!-- <table border="0" width="100%">
	<tr>
		<td valign="top" align="right"> <img src="<?php echo base_url()."assets/images/$desa2->logo" ?>" width="100" height="128" /> </td>
		<td valign="top" width="70%">
			<center>
			<h1> PEMERINTAH <?php echo strtoupper($desa2->kota); ?> </h1>
			<h1> KECAMATAN <?php echo strtoupper($desa2->kecamatan); ?> </h1>
			<h1> <?php echo strtoupper($desa2->bentuk_lembaga. " ".$desa2->kecamatan); ?> </h1>
			<h3><?php echo $desa2->alamat . " " . $desa2->kodepos ?></h3>
			</center>

		</td>
	</tr>
	<tr><td colspan="2"><hr/></td></tr>
</table> -->

<!--<br />
<br />
<br />
<center>
		<span id="judulsurat">SURAT KETERANGAN BEPERGIAN </span><br />
     	<span id="nomor_surat"> No : <?php echo $no_surat ?> </span>
<br /><br /><br /> </center>-->


<div align="center">
  <b> 
  <font size="11"><u>SURAT KETERANGAN BEPERGIAN</u> </font><br />
  <font size="10"> No : <?php echo $no_surat ?></font> </b>
  </div>
<p align="justify">Yang bertanda tangan di bawah ini,   <?php echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lurah  ":" Kepala Desa  "; ?><?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?> menerangkan bahwa : </p>
<?php 
	$arr_hubungan = $this->cm->arr_hubungan;
?>
 	<table width="100%">
			<tr><td width="29%"  >Nama </td><td width="71%">: <?php echo $nama; ?> </td></tr>
			<tr><td  >Tempat, Tgl lahir </td><td>: <?php echo $tmp_lahir . ", ".$tgl_lahir; ?> </td></tr>
			<tr><td >Jenis kelamin </td><td>: <?php echo strtoupper($this->cm->jk($jk)); ?></td></tr>
			<tr><td >Agama </td><td>: <?php echo $agama; ?> </td></tr>
			<tr><td >Pekerjaan </td><td>: <?php echo strtoupper($pekerjaan); ?> </td></tr>
			<tr><td >Alamat </td><td>: <?php echo $alamat. " Rt $rt Rw $rw "; 
			if($dusun <> "") { 
			
			echo ($desa2->bentuk_lembaga == "Kelurahan")?" Lingkungan ":" Dusun ";
			echo $dusun; 
			} 
			?></td></tr>
			<tr><td >No. KTP / NIK </td><td>: <?php echo $nik; ?> </td></tr>
			<tr><td >Kedudukan dalam keluarga </td><td>: <?php echo $arr_hubungan[$hubungan]; ?> </td></tr>
			<tr><td  >Alamat yang dituju </td><td>: <?php echo $alamat_tujuan; ?> </td></tr>
			<tr><td  >Jenis Kendaraan </td><td>: <?php echo $kendaraan; ?> </td></tr>
			<tr><td  >Maksud </td><td>: <?php echo $maksud; ?> </td></tr>
			<tr><td >Tanggal berangkat </td><td>: <?php echo flipdate($tgl_berangkat); ?> </td></tr>
			<tr><td >Tanggal pulang </td><td>: <?php echo flipdate($tgl_pulang); ?> </td></tr>
</table>
 
 

<br /><br />
Pengikut : 
<br /><br />
<table width="100%" border="0" cellpadding="3" class="tabel">
<tr><th width="5%" align="center"><strong>No. </strong></th>
<th width="23%" align="center"><strong>Nama </strong></th>
<th width="21%" align="center"><strong>NIK </strong></th>
<th width="7%" align="center"><strong>Umur</strong></th>
<th width="9%" align="center"><strong>JK</strong></th>
<th width="35%" align="center"><strong>Hubungan Keluarga </strong></th>
</tr>
<?php 
$baris = 3;$i=0;
	 
if($record->num_rows() > 0 ) {	
	
	$arr_hubungan = $this->cm->arr_hubungan;
	
	foreach($record->result() as $row) :
		$baris--;
		$i++;
		echo "<tr>
		<td>$i</td> <td>$row->nama </td><td>$row->nik </td><td>$row->umur th </td> <td>$row->jk </td>
		<td>".$arr_hubungan[$row->hubungan]."</td>

		</tr>";
	endforeach;	
}
for($x=0; $x<$baris; $x++) {
	$i++;
	echo "<tr>
		<td>$i</td> <td> </td><td> </td><td> </td> <td> </td>
		<td> </td>

		</tr>";
}
 
?>
</table>

<p>Demikianlah surat keterangan ini dibuat dan diberikan kepada yang 
bersangkutan untuk dipergunakan sebagaimana mestinya.</p>	
 

 

<br />
 <?php
$this->load->view("ttd_pdf");
?>

<!-- </div> end of wrap -->
</body>

</html>