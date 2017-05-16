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
		<span id="judulsurat">SURAT KETERANGAN CERAI </span><br />
     	<span id="nomor_surat"> No : <?php echo $no_surat ?> </span>
<br /><br /><br /> </center>

<p>Yang bertanda tangan di bawah ini menerangkan bahwa : </p>
<div style="margin-left:100px;">
		<table>
			<tr><td class="label">Nama </td><td>: <?php echo $laki_nama; ?> </td></tr>
			<tr><td class="label">Tempat, Tgl lahir </td><td>: <?php echo $laki_tmp_lahir . ", ".$laki_tgl_lahir; ?> </td></tr>
			<tr><td class="label">Jenis kelamin </td><td>: <?php echo $laki_jk; ?> </td></tr>
			<tr><td class="label">Agama </td><td>: <?php echo $laki_agama; ?> </td></tr>
			<tr><td class="label">Pekerjaan </td><td>: <?php echo $laki_pekerjaan; ?> </td></tr>
			<tr><td class="label">Alamat </td><td>: <?php echo $laki_alamat. "Rt $laki_rt Rw $laki_rw $laki_dusun "; ?> </td></tr>
			<tr><td class="label">No. KTP / NIK </td><td>: <?php echo $laki_nik; ?> </td></tr>
		</table>
		Yang selanjutnya disebut sebagai PIHAK PERTAMA 
</div>
 

<p>SELANJUTNYA </p>
<div style="margin-left:100px;">
		<table>
			<tr><td class="label">Nama </td><td>: <?php echo $perempuan_nama; ?> </td></tr>
			<tr><td class="label">Tempat, Tgl lahir </td><td>: <?php echo $perempuan_tmp_lahir . ", ".$perempuan_tgl_lahir; ?> </td></tr>
			<tr><td class="label">Jenis kelamin </td><td>: <?php echo $perempuan_jk; ?> </td></tr>
			<tr><td class="label">Agama </td><td>: <?php echo $perempuan_agama; ?> </td></tr>
			<tr><td class="label">Pekerjaan </td><td>: <?php echo $perempuan_pekerjaan; ?> </td></tr>
			<tr><td class="label">Alamat </td><td>: <?php echo $perempuan_alamat. "Rt $perempuan_rt Rw $perempuan_rw $perempuan_dusun "; ?> </td></tr>
			<tr><td class="label">No. KTP / NIK </td><td>: <?php echo $perempuan_nik; ?> </td></tr>
		</table>
		Yang selanjutnya disebut sebagai PIHAK KEDUA 
</div>

<p>Menerangkan dengan sebenarnya bahwa kami keduabelah pihak yang 
tersebut diatas, sudah sama - sama sepakat untuk saling membersihkan diri atas
 hubungan suami istri kami (cerai) melalui jalan musyawarah yang juga telah disetujui oleh 	
 kedua rumpung
	</p>
<p>
	<ol>
		<li> Bahwa diantara kami kedua belah pihak sudah tidak ada lagi saling kecocokan dan sudah tidak hidup dalam satu rumah lagi sejak beberapa bulan terakhir.</lli>
		<li>Kami keduabelah pihak sepakat untuk tidak saling menghalangi apabila dikemudian hari kami sama - sama menemukan jodoh untuk mengadakan perkawinan kembali.</li>	
	</ol>
</p>
 <p>
 	Demikianlah surat keterangan ini dibuat dan diberikan kepada yang berkepentingan. Surat pernyataan ini kami buat dalam keadaan 
 	sehat jasmani dan rohani serta ikhlas dalam membuat kesepakatan ini tanpa ada bujukan ataupun paksaan dari siapapun juga.
 </p>

<br /><br /><br />
<!--
<div style="float:right; width:400px;">
	<center>
		<?php echo $desa2->desa.", ". flipdate($tanggal); ?><br />
		<?php echo $ttd_jabatan." ".$desa2->bentuk_lembaga ?>  <br /><br />
		<br /><br />
		<?php echo $ttd_nama ?>
	</center>
</div> 
<br /> <br /><br /> -->
  
<table width="100%" border=0 >
<tr><td></td><td align="center"><?php echo $desa2->desa.", ". flipdate($tanggal); ?> </td>
<tr><td aligh="center" valign="top" width="50%"> 
	<center>
	PIHAK KEDUA <br /><br /><br /><br /> 
	<?php echo $perempuan_nama; ?>
	</center>
</td>
	<td aligh="center" valign="top" width="50%"> 
	<center>	PIHAK PERTAMA <br /><br /><br /><br /><?php echo $laki_nama; ?>
	</center></td>

	
</tr>
</table>

<center>
	Mengetahui, <br />

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
 
</body>

</html>