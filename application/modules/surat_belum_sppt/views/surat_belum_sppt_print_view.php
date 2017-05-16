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


<!-- 
<table border="0" width="100%">
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
		<span id="judulsurat">SURAT KETERANGAN BELUM MEMPUNYAI SPPT </span><br />
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
			<tr><td class="label">Alamat </td><td>: <?php echo $alamat. "Rt $rt Rw $rw $dusun "; ?> </td></tr>
			<tr><td class="label">No. KTP / NIK </td><td>: <?php echo $nik; ?> </td></tr>
		</table>
</div>
 
<p>Yang tersebut namanya di atas benar - benar memiliki sebidang tanah <?php echo $jenis_tanah ?> 
	yang terletak di sebelah <?php echo $batas_utara ?>
</p>	


<div style="margin-left:100px;">
		<table>
			<tr><td class="label">Blok </td><td>: <?php echo $blok; ?> </td></tr>
			<tr><td class="label">Persil </td><td>: <?php echo $persil; ?> </td></tr>
			<tr><td class="label">Luas tanah </td><td>: <?php echo $luas; ?> </td></tr>
			
		</table>
		yang ditinggali sejak <?php echo flipdate($dimiliki_sejak) ?> <br /><br />
		Dengan batasan - batasan : 
		<table>
			<tr><td class="label">Selatan </td><td>: <?php echo $batas_selatan; ?> </td></tr>
			<tr><td class="label">Utara </td><td>: <?php echo $batas_utara; ?> </td></tr>
			<tr><td class="label">Barat </td><td>: <?php echo $batas_barat; ?> </td></tr>
			<tr><td class="label">Timur </td><td>: <?php echo $batas_timur; ?> </td></tr>
			
		</table>
</div>
<br /><br />

adalah benar BELUM MEMPUNYAI SPPT dengan pertimbangan <?php echo $alasan; ?>
<br /><br/>

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
		echo "<br />".$nip_sekretaris;
		}
		?>
	</center>
</div>
<br /> <br /><br />

</div> <!-- end of wrap -->
</body>

</html>