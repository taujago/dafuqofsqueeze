<html>
	<head>
		<title>
			<?php echo   $title; ?>
		</title>

 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/print_style.css">


		</head>

<body>
	<?php 
$desa = $this->cm->data_desa();
$desa2 = $this->cm->data_desa();
$this->load->view("kop_surat");

	?>
  <div align="center">
  <b> 
  <font size="11"><u>SURAT PERSETUJUAN MEMPELAI </u> </font>
  </b>
</div>  


<p align="justify">Yang Bertanda tangan dibawah ini:</p>
<table width="100%" border="0">
 <tr>
    <td width="3%">I.</td>
    <td width="49%"><u>Calon Suami </u></td>
    <td width="2%"></td>
    <td width="46%"></td>
  </tr>
  <tr>
    <td width="3%">&nbsp;</td>
    <td width="49%">Nama Lengkap </td>
    <td width="2%">:</td>
    <td width="46%"><?php echo $suami_nama; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Bin</td>
    <td>:</td>
    <td><?php echo $ayah_suami_nama; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
   
    <td>Tempat, Tanggal Lahir </td>
    <td>:</td>
    <td><?php echo $suami_tempat_lahir; ?>, <?php echo flipdate($suami_tanggal_lahir); ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
   
    <td>Warga Negara </td>
    <td>:</td>
    <td><?php echo $ayah_suami_warga_negara; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
   
    <td>Agama</td>
    <td>:</td>
    <td><?php echo $suami_agama; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    
    <td>Pekerjaan</td>
    <td>:</td>
    <td><?php echo $suami_pekerjaan; ?></td>
  </tr>
 
  <tr>
    <td>&nbsp;</td>
    
    <td>Alamat </td>
    <td>:</td>
    <td><?php echo $suami_desa; ?> RT. <?php echo $suami_rt; ?> RW. <?php echo $suami_rw; ?> KECAMATAN <?php echo $suami_kecamatan; ?> <?php echo $suami_kota; ?> </td>
  </tr>
</table>

<table width="100%" border="0">
 <tr>
    <td width="3%">II.</td>
    <td width="49%"><u>Calon Istri </u></td>
    <td width="2%"></td>
    <td width="46%"></td>
  </tr>
  <tr>
    <td width="3%">&nbsp;</td>
    <td width="49%">Nama Lengkap </td>
    <td width="2%">:</td>
    <td width="46%"><?php echo $calon_nama; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Bin</td>
    <td>:</td>
    <td><?php echo $calon_ayah; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
   
    <td>Tempat, Tanggal Lahir </td>
    <td>:</td>
    <td><?php echo $calon_tmp_lahir; ?>, <?php echo flipdate($calon_tgl_lahir); ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
   
    <td>Warga Negara </td>
    <td>:</td>
    <td><?php echo $calon_warga_negara; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
   
    <td>Agama</td>
    <td>:</td>
    <td><?php echo $ibu_suami_agama; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    
    <td>Pekerjaan</td>
    <td>:</td>
    <td><?php echo $calon_pekerjaan; ?></td>
  </tr>
 
  <tr>
    <td>&nbsp;</td>
    
    <td>Alamat </td>
    <td>:</td>
    <td><?php echo $calon_tmp_tinggal; ?> </td>
  </tr>
</table>


<p>Menyatakan dengan sesungguhnya bahwa atas dasar  suka rela, dengan kesadaran sendiri, tanpa paksaan dari siapapun juga, setuju  untuk melangsungkan pernikahan.</p>
<p>Demikian surat persetujuan  ini di buat untuk digunakan seperlunya.</p>
<table width="100%" border="0">
  <tr>
    <td width="65%">&nbsp;</td>
    <td width="35%"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal_surat)); ?></td>
  </tr>
</table>
<p></p>
<table width="100%" border="0">
  <tr>
    <td><div align="center">I. Calon Suami </div></td>
    <td><div align="center">II. Calon Istri </div></td>
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
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"><?php echo $suami_nama; ?></div></td>
    <td><div align="center"><?php echo $calon_nama; ?></div></td>
  </tr>
</table>
<p>&nbsp;</p>
<?php 
	$arr_hubungan = $this->cm->arr_hubungan;
?>
<br />

</body>

</html>