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

<div id="wrap" style="width:1024; margin:0px auto" > 

 <?php 
$this->load->view("kop_surat");
?>
<br />
<br />
<center>
		<span id="judulsurat">SURAT KETERANGAN KEPEMILIKAN TANAH </span><br />
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
 
<p>Yang tersebut namanya di atas benar - benar memiliki sebidang tanah <?php echo $jenis_tanah ?> 
	yang terletak di  <?php echo $alamat_tanah ?>
</p>	


<div style="margin-left:100px;">
		<table>
			<tr><td class="label">Blok </td><td>: <?php echo $blok; ?> </td></tr>
			<tr><td class="label">Persil </td><td>: <?php echo $persil; ?> </td></tr>
			<tr><td class="label">Luas tanah </td><td>: <?php echo $luas; ?> </td></tr>
			
		</table><br /><br />
		Yang ditinggali sejak <?php echo flipdate($dimiliki_sejak) ?> <br /><br />
<p>Dan sampai sekarang pada waktu keterangan ini dibuat masih tetap 
atas namanya dan tidak menjadi perselisihan / sengketa 
dengan pihak lain baik mengenai hak maupun batas - batasnya.</p>

		Dengan batasan - batasan : 
		<table>
			<tr><td class="label">Selatan </td><td>: <?php echo $batas_selatan; ?> </td></tr>
			<tr><td class="label">Utara </td><td>: <?php echo $batas_utara; ?> </td></tr>
			<tr><td class="label">Barat </td><td>: <?php echo $batas_barat; ?> </td></tr>
			<tr><td class="label">Timur </td><td>: <?php echo $batas_timur; ?> </td></tr>
			
		</table>
</div>
<br /><br />
 

Demikian surat keterangan ini dibuat dan diberikan kepada yang bersangkutan 
untuk dipergunakan sebagaimana mestinya 

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

</div> <!-- end of wrap -->
</body>

</html>