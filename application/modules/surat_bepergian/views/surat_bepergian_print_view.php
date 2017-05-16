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

<br />
<br />
<br />
<center>
		<span id="judulsurat">SURAT KETERANGAN BEPERGIAN </span><br />
     	<span id="nomor_surat"> No : <?php echo $no_surat ?> </span>
<br /><br /><br /> </center>

<p>Yang bertanda tangan di bawah ini menerangkan bahwa : </p>
<?php 
	$arr_hubungan = $this->cm->arr_hubungan;
?>
<div style="margin-left:100px;">
		<table>
			<tr><td class="label">Nama </td><td>: <?php echo $nama; ?> </td></tr>
			<tr><td class="label">Tempat, Tgl lahir </td><td>: <?php echo $tmp_lahir . ", ".$tgl_lahir; ?> </td></tr>
			<tr><td class="label">Jenis kelamin </td><td>: <?php echo $jk; ?> </td></tr>
			<tr><td class="label">Agama </td><td>: <?php echo $agama; ?> </td></tr>
			<tr><td class="label">Pekerjaan </td><td>: <?php echo $pekerjaan; ?> </td></tr>
			<tr><td class="label">Alamat </td><td>: <?php echo $alamat. " Rt $rt   $dusun "; ?> </td></tr>
			<tr><td class="label">No. KTP / NIK </td><td>: <?php echo $nik; ?> </td></tr>
			<tr><td class="label">Kedudukan dalam keluarga </td><td>: <?php echo $arr_hubungan[$hubungan]; ?> </td></tr>
			<tr><td class="label">Alamat yang dituju </td><td>: <?php echo $alamat_tujuan; ?> </td></tr>
			<tr><td class="label">Maksud </td><td>: <?php echo $maksud; ?> </td></tr>
			<tr><td class="label">Tanggal berangkat </td><td>: <?php echo flipdate($tgl_berangkat); ?> </td></tr>
			<tr><td class="label">Tanggal pulang </td><td>: <?php echo flipdate($tgl_pulang); ?> </td></tr>
		</table>
</div>
 

<br /><br />
Pengikut : 
<br /><br />

<?php 
$baris = 3;$i=0;
	echo '<table width="100%" class="tabel">';
	echo '<tr><th>No. </th><th>Nama </th><th>Umur</th><th>JK</th><th>Hubungan Keluarga </th></tr>';
if($record->num_rows() > 0 ) {	
	
	$arr_hubungan = $this->cm->arr_hubungan;
	
	foreach($record->result() as $row) :
		$baris--;
		$i++;
		echo "<tr>
		<td>$i</td> <td>$row->nama </td><td>$row->umur th </td> <td>$row->jk </td>
		<td>".$arr_hubungan[$row->hubungan]."</td>

		</tr>";
	endforeach;	
}
for($x=0; $x<$baris; $x++) {
	$i++;
	echo "<tr>
		<td>$i</td> <td> </td><td> </td> <td> </td>
		<td> </td>

		</tr>";
}
echo '</table>';
?>


<p>Demikianlah surat keterangan ini dibuat dan diberikan kepada yang 
bersangkutan untuk dipergunakan sebagaimana mestinya.</p>	
 

 

<br /><br /><br />
<div style="float:right; width:400px;">
	<center>
	<?php echo $desa2->desa.", ". flipdate($tanggal); ?><br />
		<?php 
		if($ttd<>"kepala") {
			echo "a.n. Kepala ". $desa2->bentuk_lembaga."<br />";
		}
		
		echo $ttd_jabatan." ".$desa2->bentuk_lembaga ?>  <br /><br />
		<br /><br />
		<?php echo "<u>$ttd_nama </u>";
		if($ttd=="sek") {
		echo "<br />NIP : ".$nip_sekretaris;
		}
		?>
</div>
<br /> <br /><br />

 
</body>

</html>