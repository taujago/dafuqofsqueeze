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

<!-- <div id="wrap" style="width:1024; margin:0px auto" >  -->
 <?php 
 $this->load->view("kop_surat");
 ?>

<! 

<br />
<br />
<br />
<center>
		<span id="judulsurat">SURAT KETERANGAN DOMISILI</span><br />
     	<span id="nomor_surat"> No : <?php echo $no_surat ?> </span>
<br /><br /><br /> </center>

<p>Yang bertanda tangan di bawah ini kepala <?php echo  $desa2->bentuk_lembaga." ".$desa2->desa." kecamatan ". $desa2->kecamatan ." kabupaten ". $desa2->kota ; ?> menerangkan bahwa : </p>
<p>Berdasarkan Surat Keterangan Domisii RT <?php echo $surat_rt; ?> Nomor : <?php echo $surat_nomor; ?> Tanggal : <?php echo flipdate($surat_tanggal); ?> bahwa : </p>
<p><center>
 <u><?php echo $surat_bahwa; ?></u> 

</center></p>  
<p>Bangunan Perusahaan tersebut diatas adalah benar berdomisili di Lingkungan : </p>
<div style="margin-left:100px;">
 
<table width="542">
<tr>
  <td width="122" class="label">Jalan </td><td width="408">: <?php echo $b_jalan; ?> </td></tr>
			<tr>
			  <td class="label">RT / Dusun </td><td>: <?php echo $surat_rt." / ".$dusun; ?> </td></tr>
			<tr>
			  <td class="label">Desa  </td><td>: <?php echo $desa2->desa; ?> </td></tr>
			<tr>
			  <td class="label">Kecamatan  </td><td>: <?php echo $desa2->kecamatan; ?> </td></tr>
		</table>
</div>
 
 

<p>Demikian surat keterangan ini dibuat dan diberikan kepada yang bersangkutan agar dapat dipergunakan sebagaimana mestinya.</p>	
 

 

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

<!-- </div> end of wrap -->
</body>

</html>