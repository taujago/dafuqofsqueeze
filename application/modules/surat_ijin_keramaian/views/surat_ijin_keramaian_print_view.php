<html>
	<head>
		<title>
			<?php echo   $title; ?>
		</title>

 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/print_style.css">


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


<br />
<br />
<br />
<center>
<?php 
$arr_status_kawin = $this->cm->arr_status_kawin;
?>
		<span id="judulsurat">SURAT PENGANTAR UNTUK MEMPEROLEH IJIN KERAMAIAN </span><br />
     	<span id="nomor_surat"> No : <?php echo $no_surat ?> </span>
<br /><br /><br /> </center>

<p>Yang bertanda tangan di bawah ini menerangkan bahwa : </p>
<div style="margin-left:100px;">
		<table>
			<tr><td class="label">Nama </td><td>: <?php echo $nama; ?> </td></tr>
			<tr><td class="label">Tempat, Tgl lahir </td><td>: <?php echo $tmp_lahir . ", ".$tgl_lahir; ?> </td></tr>
			<tr><td class="label">Jenis kelamin </td><td>: <?php echo $jk; ?> </td></tr>
			<tr><td class="label">Agama </td><td>: <?php echo $agama; ?> </td></tr>
			<tr><td class="label">Pekerjaan </td><td>: <?php echo $pekerjaan; ?> </td></tr>
			<tr><td class="label">Alamat </td><td>: <?php echo $alamat. " Rt $rt Dusun $dusun "; ?> </td></tr>
			<tr><td class="label">No. KTP / NIK </td><td>: <?php echo $nik; ?> </td></tr>
		</table>
</div>
 
 

<p>
Orang tersebut di atas, benar adalah penduduk  <?php echo "$desa2->bentuk_lembaga $desa2->desa" ?>
 dan akan mengadakan kegiatan  <?php echo $nama_acara ?> 
</p>	
<p>Yang akan dilaksanakan pada : </p> 

 <div style="margin-left:100px;">
		<table>
			<tr><td class="label">Hari </td><td>: <?php echo $this->am->hari($tgl_mulai); ?> </td></tr>
			<tr><td class="label">Tanggal </td><td>: <?php echo flipdate($tgl_mulai); ?> </td></tr>
			<tr>
			  <td class="label">Sampai dengan  </td><td> </td></tr>
			<tr><td class="label">Tanggal </td><td>: <?php echo flipdate($tgl_selesai); ?> </td></tr>
			<tr><td class="label">Bertempat di </td><td>: <?php echo $tempat_acara; ?> </td></tr>
		 
		</table>
</div>
<p>
	Sehubungan dengan hal tersebut, maka dimohonkan kiranya pihak yang
	berwajib untuk menerbitkan izin keramaian pada acara tersebut diatas, 
	sepanjang yang bersangkutan atau penanggung jawab kegiatan memenuhi persyaratan untuk 
	mendapatkan ijin keramaian dari kepolisian sektor <?php echo $desa2->kecamatan ?>
</p>
<p>
	Demikian Surat Pengantar Memperoleh Izin Keramaian ini dibuat dan diberikan 
	kepada yang bersangkutan untuk dipergunakan sebagaimana mestinya.
</p>
 

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
	</center>
</div>
<br /> <br /><br />
<div style="clear:both;"> </div>
<p>
	Catatan: Surat pengantar ini tidak berlaku Sebagai Surat Izin Keramaian.
</p>
<!-- </div> end of wrap -->
</body>

</html>