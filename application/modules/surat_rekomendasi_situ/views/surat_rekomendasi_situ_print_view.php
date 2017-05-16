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

 

<?php 
$this->load->view("kop_surat");
?>


<br />
<center>
<span id="judulsurat">R E K O M E N D A S I </span><br />
     	<span id="nomor_surat"> No : <?php echo $no_surat ?> </span>
<br /><br /><br /> </center>

<p>Yang bertanda tangan di bawah ini, Kepala <?php echo $desa2->bentuk_lembaga. " ".$desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota  ?> menerangkan bahwa : </p>
<div style="margin-left:100px;">
		<table width="778">
			<tr>
			  <td width="131" class="label">Nama Lengkap</td><td width="635">: <?php echo $nama; ?> </td></tr>
			<tr>
			  <td class="label">Nama Toko/CV/PT</td>
			  <td>: <?php echo $nama_usaha; ?></td></tr>
			<tr><td class="label">Pekerjaan </td><td>: <?php echo $pekerjaan; ?> </td></tr>
			<tr><td class="label">Alamat </td><td>: <?php echo $alamat; ?> </td></tr>
			<tr><td class="label">No. KTP / NIK </td><td>: <?php echo $nik; ?> </td></tr>
		</table>
</div> 
<bR /><BR />
<p>Berdasarkan permohonan nama tersebut di atas perihal rekomendasi untuk mendapatkan &quot;SURAT IZIN TEMPAT USAHA&quot; (SITU) dan SURAT IZIN USAHA PERDAGANGAN yang terletak di lingkungan <?php echo $alamat_usaha; ?> RT  <?php echo $ex_rt; ?> Dusun <?php echo $dusun; ?> Desa <?php echo $desa2->desa." Kecamatan $desa2->kecamatan $desa2->kota"; ?> </p>
<p>Setelah kami teliti, kami menyetujui dan mendukung sepanjang memenuhi syarat - syarat sbb:</p>
<ol>
  <li>Tidak bertentangan dengan peraturan / perundangan yang berlaku.</li>
  <li>Tidak merugikan pihak lain, tidak memperdagangkan barang-barang terlarang.</li>
  <li>Mentaati ketentuan yang berlaku dan tidak bertentangan dengan usaha yang dilaksanakan termasuk Putusan Desa. </li>
  <li>Rekomendasi ini berlaku sebagai pengantar untuk diteruskan ke Kantor Kecamatan. </li>
  <li>Rekomendasi ini dengan sendirinya batal apabila melanggar point-point tersebut di atas.</li>
</ol>
<p>Demikian Rekomendasi ini dibuat dan diberikan kepada yang bersangkutan agar dapat dipergunakan sebagaimana mestinya. </p>
<p><br />
  <br /><br />
</p>
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
	</center>
</div>
<br /> <br /><br />

 
</body>

</html>