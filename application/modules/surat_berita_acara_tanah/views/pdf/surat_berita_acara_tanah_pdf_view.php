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
 <div align="center">
  <b> 
  <font size="10">BERITA ACARA PENYELESAIAN  
  <br><u>MASALAH SENGKETA TANAH DI <?php echo strtoupper($alamat_tanah. " RT $rt_tanah , DUSUN $id_dusun_tanah"); ?>
  </u> </font><br />
  <font size="9"> No : <?php echo $no_surat ?></font> </b>
  </div>


<p>Pada hari ini tanggal, <?php echo  $this->am->hari($tanggal). " " . flipdate($tanggal); ?>, telah diadakan pertemuan antara Sdr. <?php echo $nama_1 ?> dan Sdr. <?php echo $nama_2 ?>. <?php echo $isi_surat ?></p>
<p>Adapun yang hadir dalam rapat tersebut terlampir dalam daftar hadir. </p>
<p>Demikianlah berita acara ini dibuat, agar dapat digunakan sebagaimana mestinya </p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><br />
  <?php
$this->load->view("ttd_pdf");
?>

<!-- </div> end of wrap -->
</body>

</html>