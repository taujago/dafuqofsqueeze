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
		<span id="judulsurat">BERITA ACARA PENYELESAIAN </span><br />
        <span id="judulsurat">MASALAH SENGKETA TANAH DI <?php echo strtoupper($alamat_tanah. " RT $rt_tanah , $dusun"); ?> </span>
     	 
<br /><br /><br /> </center>

<p>Pada hari ini tanggal, <?php echo  $this->am->hari($tanggal). " " . flipdate($tanggal); ?>, akan diadakan pertemuan antara Sdr. <?php echo $nama_1 ?> dan Sdr. <?php echo $nama_2 ?>. <?php echo $isi_surat ?></p>
<p>Adapun yang hadir dalam rapat tersebut terlampir dalam daftar hadir. </p>
<p>Demikianlah berita acara ini dibuat, agar dapat dgiunakan sebagaimana mestinya </p>
<table width="100%" border="0">
  <tr>
    <td width="50%">&nbsp;</td>
    <td width="50%"><?php echo $desa2->desa.", ".flipdate($tanggal); ?></td>
  </tr>
  <tr>
    <td>Kaur Pemerintahan, </td>
    <td>Notulis</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><u><?php echo $kaur_pemerintahan;  ?></u></td>
    <td><u><?php echo $notulis;  ?></u></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center">Mengetahui,</td>
  </tr>
  <tr>
    <td colspan="2" align="center"><?php if($ttd<>"kepala") {
      echo "a.n. Kepala ". $desa2->bentuk_lembaga."<br />";
    }
    
    echo $ttd_jabatan." ".$desa2->bentuk_lembaga  ?></td>
  </tr>
  <tr>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center"><u><?php echo "<u>$ttd_nama </u>";
    if($ttd=="sek") {
    echo "<br />NIP : ".$nip_sekretaris;
    }
    ?></u></td>
  </tr>
  <tr>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<div style="margin-left:100px;"></div>
</body>

</html>