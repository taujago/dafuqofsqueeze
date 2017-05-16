<html>
	<head>
		<title>
			<?php echo   $title; ?>
		</title>

 
 <style>
* {
	font-size:8px;
}
p {
	margin:0px;
}
</style>		</head>

<body>
	<?php 
	$desa2 = $this->cm->data_desa();

	?>

 
<?php  $this->load->view("kop_surat"); ?>
 <div align="center">
  <b> 
  <font size="11"><u>SURAT KETERANGAN HILANG SURAT TANAH</u> </font><br />
  <font size="10"> No : <?php echo $no_surat ?></font> </b>
  </div>  


<p align="justify">Yang bertanda tangan di bawah ini,   <?php echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lurah  ":" Kepala Desa  "; ?><?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?> menerangkan bahwa : </p><table width="100%" border="0">
  <tr>
    <td width="9%">&nbsp;</td>
    <td width="19%"><span class="label">Nama Lengkap</span></td>
    <td width="72%">: <?php echo $nama; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="label">Umur</span></td>
    <td> : <?php echo $umur; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="label">Jenis Kelamin</span></td>
    <td>: <?php echo $this->cm->jk($jk); ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="label">Pekerjaan</span></td>
    <td>: <?php echo $pekerjaan; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="label">Alamat</span></td>
    <td>: <?php echo $alamat ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="label">No. KTP / NIK </span></td>
    <td>: <?php echo $nik; ?></td>
  </tr>
</table>
<p>Berdasarkan surat pengantar dari RT <?php echo $rt_surat; ?> No. Reg : <?php echo $no_surat_rt; ?> bahwa nama tersebut di atas benar telah mengalami kehilangan surat tanah </p>
<p>Dengan rincian surat sebagai berikut </p>
<table width="100%" border="0">
  <tr>
    <td width="9%">&nbsp;</td>
    <td width="19%">Ukuran</td>
    <td width="72%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Panjang</td>
    <td>: <?php echo $panjang ?> Meter</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Lebar </td>
    <td> : <?php echo $lebar ?> Meter </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">Dengan saksi - saksi batas sebagai berikut : </td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>Utara </td>
    <td>: <?php echo $batas_utara ?></td>
  </tr>
   <tr>
     <td>&nbsp;</td>
     <td>Timur</td>
     <td>: <?php echo $batas_timur; ?></td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td>Selatan</td>
     <td>: <?php echo $batas_selatan; ?></td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td>Barat</td>
     <td>: <?php echo $batas_barat; ?></td>
   </tr>
</table>
<p><br>
Catatan : Apabila dikemudian hari terbukti saya telah memberi keterangan yang tidak benar, maka saya bersedia dituntut di muka hukum dan bersedia dikenakan sanksi sesuai hukum yang berlaku</p>
<p>Demikian surat pernyataan ini saya buat dengan sebenar-benarnya agar dapat ditindak lanjuti </p>
<p> <br /><br />
  <br />
    <?php
$this->load->view("ttd_pdf");
?>
</body>

</html>