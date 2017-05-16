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

 
<?php //$this->load->view("kop_surat"); ?>
<br>

<center>
		<span id="judulsurat">SURAT KETERANGAN MENDIRIKAN BANGUNAN </span><br />
     	<span id="nomor_surat"> No : <?php echo $no_surat ?> </span>
<br /><br /></center>
<p>Diberikan keterangan ini kepada : </p>
<table width="100%" border="0">
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
    <td>: <?php echo $jk; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="label">Pekerjaan</span></td>
    <td>: <?php echo $pekerjaan; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="label">Alamat</span></td>
    <td>: <?php echo $alamat; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="label">No. KTP / NIK </span></td>
    <td>: <?php echo $nik; ?></td>
  </tr>
</table>
<p>&nbsp;</p>
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
<p>&nbsp;</p>
<p> Catatan : Apabila dikemudian hari terbukti saya telah memberi keterangan yang tidak benar, maka saya bersedia dituntut di muka hukum dan bersedia dikenakan sanksi sesuai hukum yang berlaku</p>
<p>Demikian surat pernyataan ini saya buat dengan sebenar-benarnya agar dapat ditindak lanjuti </p>
<p> <br /><br /><br />
</p><div style="float:right; width:400px;">
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