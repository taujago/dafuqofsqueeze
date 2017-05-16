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

 
<?php $this->load->view("kop_surat"); ?>
<br>

<center>
		<span id="judulsurat">SURAT KETERANGAN MENDIRIKAN BANGUNAN </span><br />
     	<span id="nomor_surat"> No : <?php echo $no_surat ?> </span>
<br /><br /></center>
Diberikan keterangan ini kepada : 

<div style="margin-left:100px;">
	  <table width="666">
			<tr><td width="115" class="label">Nama </td><td width="539">: <?php echo $nama; ?> </td></tr>
			<tr>
			  <td class="label">Umur </td><td>: <?php echo $umur; ?> </td></tr>
			<tr><td class="label">Pekerjaan </td><td>: <?php echo $pekerjaan; ?> </td></tr>
			<tr><td class="label">Alamat </td><td>: <?php echo $alamat; ?> </td></tr>
			<tr><td class="label">No. KTP / NIK </td><td>: <?php echo $nik; ?> </td></tr>
		</table>
</div>
 
<p>Dimana nama tersebut akan membangun sebuah rumah tempat tinggal di atas tanah perwatasan sendiri, yang terletak di lingkungan <?php echo $alamat_bangunan; ?> RT <?php echo $rt_bangunan; ?> Dusun <?php echo $dusun; ?> Desa <?php echo $desa2->desa; ?> dengan ukuran sebagai berikut : </p>
<table width="100%" border="0">
  <tr>
    <td width="3%" valign="top">1.</td>
    <td width="24%" valign="top">Perwatasan</td>
    <td width="1%" valign="top">:</td>
    <td width="72%" valign="top"><table width="100%" border="0">
      <tr>
        <td width="11%">Panjang</td>
        <td width="1%">:</td>
        <td width="88%"><?php echo $perwatasan_panjang; ?> Meter</td>
      </tr>
      <tr>
        <td>Lebar</td>
        <td>:</td>
        <td><?php echo $perwatasan_lebar; ?> Meter</td>
      </tr>
      <tr>
        <td>Luas</td>
        <td>:</td>
        <td><?php echo ($perwatasan_panjang*$perwatasan_lebar); ?> Meter</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top">2. </td>
    <td valign="top">Bangunan</td>
    <td valign="top">:</td>
    <td valign="top"><table width="100%" border="0">
      <tr>
        <td width="11%">Panjang</td>
        <td width="1%">:</td>
        <td width="88%"><?php echo $panjang; ?> Meter</td>
      </tr>
      <tr>
        <td>Lebar</td>
        <td>:</td>
        <td><?php echo $lebar; ?> Meter</td>
      </tr>
      <tr>
        <td>Luas</td>
        <td>:</td>
        <td><?php echo ($panjang*$lebar); ?> Meter</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top">3.</td>
    <td valign="top">Peruntukan Bangunan</td>
    <td valign="top">:</td>
    <td valign="top"><?php echo $peruntukan_bangunan; ?></td>
  </tr>
  <tr>
    <td valign="top">4.</td>
    <td valign="top">Sifat Bangunan</td>
    <td valign="top">:</td>
    <td valign="top"><?php echo $sifat_bangunan; ?></td>
  </tr>
  <tr>
    <td valign="top">5. </td>
    <td valign="top">Bahan Bangunan</td>
    <td valign="top">:</td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
    <td valign="top">a. Dasar</td>
    <td valign="top">:</td>
    <td valign="top"><?php echo $bahan_dasar; ?></td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
    <td valign="top">b. Lantai</td>
    <td valign="top">:</td>
    <td valign="top"><?php echo $bahan_lantai; ?></td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
    <td valign="top">c. Dinding</td>
    <td valign="top">:</td>
    <td valign="top"><?php echo $bahan_dinding; ?></td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
    <td valign="top">d. Rangka</td>
    <td valign="top">:</td>
    <td valign="top"><?php echo $bahan_rangka; ?></td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
    <td valign="top">e. Kasau</td>
    <td valign="top">:</td>
    <td valign="top"><?php echo $bahan_kasau; ?></td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
    <td valign="top">f. Atap</td>
    <td valign="top">:</td>
    <td valign="top"><?php echo $bahan_atap; ?></td>
  </tr>
  <tr>
    <td valign="top">6. </td>
    <td valign="top">Biaya Membangun</td>
    <td valign="top">:</td>
    <td valign="top"><?php echo rupiah($biaya); ?></td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" valign="top">BATAS - BATAS </td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
    <td valign="top">- Sebelah Utara dengan</td>
    <td valign="top">:</td>
    <td valign="top"><?php echo $batas_utara; ?></td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
    <td valign="top">- Sebelah Selatan dengan</td>
    <td valign="top">:</td>
    <td valign="top"><?php echo $batas_selatan; ?></td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
    <td valign="top">- Sebelah Timur dengan</td>
    <td valign="top">:</td>
    <td valign="top"><?php echo $batas_timur ?></td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
    <td valign="top">- Sebelah Barat dengan</td>
    <td valign="top">:</td>
    <td valign="top"><?php echo $batas_barat ?></td>
  </tr>
</table>
<p>Surat keterangan ini kami buat dan kami berikan kepada yang bersangkutan sesuai dengan permohonannya, guna untuk melengkapi persyaratan Izin Mendirikan Bangunan (IMB) pada Kantor Bupati Kepala Daerah Kutai Timur setelah mendapatkan pengesahan dari Kepala Wilayah Kecamatan <?php echo $desa2->kecamatan ?></p>
<p>Demikian surat keterangan ini diberikan kepada Sdr. <?php echo $nama; ?> dan bilamana dikemudian hari terjadi kekeliruan akan diperbaiki sebagaimana mestinya</p>
<p> <br /><br /><br />
</p><div style="float:right; width:400px;">
	<center>
		<?php echo $desa2->desa.", ". flipdate($tanggal); ?><br />
		<?php echo $ttd_jabatan." ".$desa2->bentuk_lembaga ?>  <br /><br />
		<br /><br />
		<?php echo $ttd_nama ?>
	</center>
</div>
<br /> <br /><br />

 
</body>

</html>