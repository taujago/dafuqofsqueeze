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
<br />
<br />
<center>
		<span id="judulsurat">SURAT PENGANTAR KAYU </span><br />
     	<span id="nomor_surat"> No : <?php echo $no_surat ?> </span>
<br /><br /><br /> </center>

<p>Yang bertandatanga di bawah ini menerangkan bahwa : </p>
<div style="margin-left:100px;">
		<table>
			<tr><td class="label">Nama </td><td>: <?php echo $nama; ?> </td></tr>
			<tr><td class="label">Tempat, Tgl lahir </td><td>: <?php echo $tmp_lahir . ", ".$tgl_lahir; ?> </td></tr>
			<tr><td class="label">Jenis kelamin </td><td>: <?php echo $jk; ?> </td></tr>
			<tr><td class="label">Agama </td><td>: <?php echo $agama; ?> </td></tr>
			<tr><td class="label">Pekerjaan </td><td>: <?php echo $pekerjaan; ?> </td></tr>
			<tr><td class="label">Alamat </td><td>: <?php echo $alamat. "Rt $rt Rw $rw $dusun "; ?> </td></tr>
			<tr><td class="label">No. KTP / NIK </td><td>: <?php echo $nik; ?> </td></tr>
		</table>
</div>
 
<p>Yang tersebut namanya diatas, benar memiliki kayu bantalan yang 
	terdiri dari kayu campuran yang berasal dari <?php echo $asal_kayu ?> 
	untuk selanjutnya akan diangkut ke <?php echo $tempat_pengiriman ?>
</p>	



<div style="margin-left:100px;">
	Dengan menggunakan : 
		<table>
			<tr><td class="label">Kendaraan </td><td>: <?php echo $jenis_kendaraan; ?> </td></tr>
			<tr><td class="label">Nomor Polisi </td><td>: <?php echo $nomor_polisi; ?> </td></tr>
			<tr><td class="label">Volume Kahyu </td><td>: <?php echo $volume_kayu; ?> m<sup>3</sup> </td></tr>
			
		</table><br /><br />
		 </div>
 
<p>
Demikian surat pengantar ini dibuat dan diberikan kepada yang
bersangkutan untuk dipergunakansebagaimana perlunya, dan kepada pihak yang berwenang dimohon bantuannya.

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

 
</body>

</html>