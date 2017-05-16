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
		<span id="judulsurat">SURAT KETERANGAN USAHA </span><br />
     	<span id="nomor_surat"> No : <?php echo $no_surat ?> </span>
<br /><br /><br /> </center>

<p>Yang bertanda tangan di bawah ini, Kepala <?php echo $desa2->bentuk_lembaga. " ".$desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota  ?> menerangkan bahwa : </p>
<div style="margin-left:100px;">
		<table width="778">
			<tr><td width="131" class="label">Nama </td><td width="635">: <?php echo $nama; ?> </td></tr>
			<tr>
			  <td class="label">Umur</td>
			  <td>: <?php echo $umur; ?> Tahun </td></tr>
			<tr><td class="label">Pekerjaan </td><td>: <?php echo $pekerjaan; ?> </td></tr>
			<tr><td class="label">Alamat </td><td>: <?php echo $alamat; ?> </td></tr>
			<tr><td class="label">No. KTP / NIK </td><td>: <?php echo $nik; ?> </td></tr>
		</table>
</div> 
<bR /><BR />
<p>Nama tersebut di atas benar memiliki usaha <?php echo $jenis_usaha; ?> yang terletak di lingkungan <?php echo $alamat_usaha; ?> RT <?php echo $ex_rt; ?> Dusun <?php echo $dusun; ?> Desa <?php echo $desa2->desa; ?> </p>
<p>
	Demikianlah surat keterangan ini dibuat dan diberikan kepada yang 
	bersangkutan untuk dipergunakan sebagaimana mestinya.
	</p>


<p><br />
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