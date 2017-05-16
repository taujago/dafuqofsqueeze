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
		<span id="judulsurat">SURAT PERNYATAAN </span><br />
     	<span id="nomor_surat"> </span>
<br /><br /></center>
<p>Yang bertanda tangan di bawah ini : </p>
<table width="100%" border="0">
  <tr>
    <td width="19%"><span class="label">Nama Lengkap</span></td>
    <td width="72%">: <?php echo $nama; ?></td>
  </tr>
  <tr>
    <td><span class="label">Umur</span></td>
    <td> : <?php echo $umur; ?></td>
  </tr>
  <tr>
    <td><span class="label">Pekerjaan</span></td>
    <td>: <?php echo $pekerjaan; ?></td>
  </tr>
  <tr>
    <td><span class="label">Alamat</span></td>
    <td>: <?php echo $alamat; ?></td>
  </tr>
  <tr>
    <td><span class="label">No. KTP </span></td>
    <td>: <?php echo $nik; ?></td>
  </tr>
</table>
<p>Bahwa Sdr. <?php echo $pemilik_nama2 ?> benar memiliki / menguasai sebidang tanah yang terletak di <?php echo $alamat_tanah ?> RT <?php echo $rt_tanah  ?> Dusun <?php echo $dusun." ". $desa2->bentuk_lembaga." ". $desa2->desa ?> yang digarap sejak tahun <?php echo $tahun_tanah ?> dan sampai saat ini, belum pernah dibuatkan surat garapan  / penguasaan lahannya. </p>
<p>Dengan ukuran sebagai berikut : </p>
<table width="100%" border="0">
  <tr>
    <td width="10%">Panjang</td>
    <td width="17%">:<?php echo $panjang ?> Meter </td>
    <td width="12%">Luas </td>
    <td width="61%">: <?php echo ($panjang * $lebar) ?> Meter</td>
  </tr>
  <tr>
    <td>Lebar</td>
    <td>:<?php echo $lebar ?> Meter</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>Batas - batas : </p>
<table width="100%" border="0">
  <tr>
    <td width="19%">Ukuran</td>
    <td width="72%">&nbsp;</td>
  </tr>
  <tr>
    <td>Panjang</td>
    <td>: <?php echo $panjang ?> Meter</td>
  </tr>
  <tr>
    <td>Lebar </td>
    <td> : <?php echo $lebar ?> Meter </td>
  </tr>
  <tr>
    <td colspan="2">Dengan saksi - saksi batas sebagai berikut : </td>
  </tr>
   <tr>
    <td>Sebelah Utara berbatasan dengan </td>
    <td>: <?php echo $batas_utara ?></td>
  </tr>
   <tr>
     <td>Sebelah Timur berbatasan dengan </td>
     <td>: <?php echo $batas_timur; ?></td>
   </tr>
   <tr>
     <td>Sebelah Selatan berbatasan dengan </td>
     <td>: <?php echo $batas_selatan; ?></td>
   </tr>
   <tr>
     <td>Sebelah Barat berbatasan dengan </td>
     <td>: <?php echo $batas_barat; ?></td>
   </tr>
</table>
<p>Apabila dikemudian hari saya terbukti memberi keterangan yang tidak benar, maka saya bersedia dituntut di muka hukum dan bersedia dikenakan sanksi hukum yang berlaku tanpa melibatkan pihak pemerintah. </p>
<p>Demikian surat pernyataan ini saya buat dengan sebenar - benarnya agar dapat dipergunakan sebagaimana mestinya. </p>
<p>&nbsp;</p>
<p>&nbsp; </p>
<table width="40%" border="0" align="right">
  <tr>
    <td><?php echo $ttd_jabatan." ".$desa2->bentuk_lembaga." ".$desa2->desa; ?> </td>
  </tr>
  <tr>
    <td>Yang membuat pernyataan </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><?php echo $nama; ?></td>
  </tr>
</table>
<table width="20%" border="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<p><br />
  <br /><br />
</p>
<p>
  <!--<div style="float:right; width:400px;">
	<center>
		<?php echo $desa2->desa.", ". flipdate($tanggal); ?><br />
		<?php echo $ttd_jabatan." ".$desa2->bentuk_lembaga." ".$desa2->desa; ?>  <br /><br />
		<br /><br />
		<?php echo $ttd_nama ?>
  </center>
</div>-->
  <br /> 
</p>
<p>Para Saksi <br />
</p>
<table width="100%" border="0">
<tr>
	    <td width="2%">1.</td>
	    <td width="21%"><?php echo $saksi_1; ?> </td>
	    <td width="25%">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; )</td>
	    <td width="2%">3.</td>
	    <td width="26%"><?php echo $saksi_3; ?></td>
	    <td width="24%">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; )</td>
      </tr>
	  <tr>
	    <td>2</td>
	    <td><?php echo $saksi_2; ?></td>
	    <td>(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; )</td>
	    <td>4.</td>
	    <td><?php echo $saksi_4; ?></td>
	    <td>(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; )</td>
      </tr>
</table>
	<p>&nbsp;</p>
	<table width="100%" border="0">
	  <tr>
	    <td width="41%">&nbsp;</td>
	    <td width="59%"> Tanggal : <?php echo flipdate($tanggal) ?></td>
      </tr>
	  <tr>
	    <td>&nbsp;</td>
	    <td>Nomor : <?php echo $no_surat ?></td>
      </tr>
	  <tr>
	    <td>&nbsp;</td>
	    <td>Mengetahui : </td>
      </tr>
	  <tr>
	    <td>&nbsp;</td>
	    <td><?php echo $ttd_jabatan." ".$desa2->bentuk_lembaga." ".$desa2->desa ?></td>
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
	    <td>&nbsp;</td>
	    <td><u><?php echo $ttd_nama ?></u></td>
      </tr>
	  <tr>
	    <td>&nbsp;</td>
	    <td>&nbsp;</td>
      </tr>
</table>
	<p>&nbsp;</p>
</body>

</html>