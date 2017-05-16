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
  <font size="11"><u>SURAT KETERANGAN ASAL-USUL MEMPELAI</u> </font><br />
  <font size="10"> No : <?php echo $no_surat_asal_usul ?></font> </b>
  </div>  


<p align="justify">Kami yang bertanda tangan di bawah ini,   <?php echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lurah  ":" Kepala Desa  "; ?><?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?> menerangkan dengan sesungguhnya bahwa : </p>
<table width="100%" border="0">
 
  <tr>
    <td width="6%">&nbsp;</td>
    <td width="46%">Nama Lengkap </td>
    <td width="2%">:</td>
    <td width="46%"><?php echo $suami_nama; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
   
    <td>Tempat, Tanggal Lahir </td>
    <td>:</td>
    <td><?php echo $suami_tempat_lahir; ?>, <?php echo flipdate($suami_tanggal_lahir); ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Jenis Kelamin </td>
    <td>:</td>
    <td><?php echo strtoupper($this->cm->jk($suami_jk)); ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
   
    <td>Warga Negara </td>
    <td>:</td>
    <td><?php echo $suami_warga_negara; ?></td>
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
    <td>Bin/Binti</td>
    <td>:</td>
    <td><?php echo $ayah_suami_nama; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    
    <td>Alamat Tinggal </td>
    <td>:</td>
    <td><?php echo $suami_desa; ?> RT. <?php echo $suami_rt; ?> RW. <?php echo $suami_rw; ?> KECAMATAN <?php echo $suami_kecamatan; ?> <?php echo $suami_kota; ?> </td>
  </tr>
</table>

<p>Yang bersangkutan tersebut diatas adalah benar-benar anak kandung atas pernikahan :</p>
<table width="100%" border="0">
 <tr>
    <td width="6%">&nbsp;</td>
    <td width="46%"><u>AYAH</u></td>
    <td width="2%"></td>
    <td width="46%"></td>
  </tr>
  <tr>
    <td width="6%">&nbsp;</td>
    <td width="46%">Nama Lengkap </td>
    <td width="2%">:</td>
    <td width="46%"><?php echo $ayah_suami_nama; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
   
    <td>Tempat, Tanggal Lahir </td>
    <td>:</td>
    <td><?php echo $ayah_suami_tempat_lahir; ?>, <?php echo flipdate($ayah_suami_tanggal_lahir); ?></td>
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
    <td><?php echo $ayah_suami_agama; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    
    <td>Pekerjaan</td>
    <td>:</td>
    <td><?php echo $ayah_suami_pekerjaan; ?></td>
  </tr>
 
  <tr>
    <td>&nbsp;</td>
    
    <td>Alamat </td>
    <td>:</td>
    <td><?php echo $ayah_suami_desa; ?> RT. <?php echo $ayah_suami_rt; ?> RW. <?php echo $ayah_suami_rw; ?> KECAMATAN <?php echo $ayah_suami_kecamatan; ?> <?php echo $ayah_suami_kota; ?> </td>
  </tr>
</table>

<table width="100%" border="0">
 <tr>
    <td width="6%">&nbsp;</td>
    <td width="46%"><u>IBU</u></td>
    <td width="2%"></td>
    <td width="46%"></td>
  </tr>
  <tr>
    <td width="6%">&nbsp;</td>
    <td width="46%">Nama Lengkap </td>
    <td width="2%">:</td>
    <td width="46%"><?php echo $ibu_suami_nama; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
   
    <td>Tempat, Tanggal Lahir </td>
    <td>:</td>
    <td><?php echo $ibu_suami_tempat_lahir; ?>, <?php echo flipdate($ibu_suami_tanggal_lahir); ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
   
    <td>Warga Negara </td>
    <td>:</td>
    <td><?php echo $ibu_suami_warga_negara; ?></td>
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
    <td><?php echo $ibu_suami_pekerjaan; ?></td>
  </tr>
 
  <tr>
    <td>&nbsp;</td>
    
    <td>Alamat </td>
    <td>:</td>
    <td><?php echo $ibu_suami_desa; ?> RT. <?php echo $ibu_suami_rt; ?> RW. <?php echo $ibu_suami_rw; ?> KECAMATAN <?php echo $ibu_suami_kecamatan; ?> <?php echo $ibu_suami_kota; ?> </td>
  </tr>
</table>


<p>Demikian surat ini dibuat supaya dapat dipergunakan sebagaimana mestinya </p>

<!-- <table width="100%" border="0">
  <tr>
    <td width="50%">Suami</td>
    <td width="50%">Istri</td>
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
    <td><u><?php echo $suami_nama; ?></u></td>
    <td><u><?php echo $istri_nama; ?></u></td>
  </tr>
  <tr>
    <td>Pelaksana Nikah </td>
    <td>Wali Nikah </td>
  </tr>
</table> -->
  
<p>&nbsp;</p>
<?php 
	$arr_hubungan = $this->cm->arr_hubungan;
?>
<br />
<?php  if($desa2->bentuk_lembaga=="Kelurahan")  {  ?>
<table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="50%">&nbsp;</td>
    <td width="3%" align="left">&nbsp;</td>
    <td width="47%" align="left"><?php echo $desa2->desa.", ". flipdate($tanggal_surat); ?></td>
  </tr>
  <?php 
		if($ttd <> "kepala") {  ?>
  <tr>
    <td>&nbsp;</td>
    <td align="center">a.n. </td>
    <td align="left">LURAH </td>
  </tr>
  <?php   } 	
	  ?>
  <tr>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left"><?php echo strtoupper($ttd_jabatan) ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left"><u><?php echo $ttd_nama; ?></u></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left"><table width="100%" border="0" cellpadding="0">
     
      <tr>
        <td align="left">NIP. <?php echo  $nip; ?></td>
      </tr>
    </table></td>
  </tr>
</table>
<?php }  else { ?>
<table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="44%">&nbsp;</td>
    <td width="6%">&nbsp;</td>
    <td width="50%" align="center"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal_surat)); ?></td>
  </tr>
  <?php 
		if($ttd <> "kepala") {  ?>
  <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">a.n. KEPALA DESA </td>
  </tr>
  <?php } ?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><?php echo strtoupper($ttd_jabatan) ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><u><?php echo $ttd_nama; ?></u></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><?php if($ttd == "sek") {  ?><table width="100%" border="0" cellpadding="0">
        
        <tr>
          <td align="center"><?php if(empty($nip)) 
                  echo '';
                else
                  echo 'NIP. ', ($nip);?></td>
        </tr>
    </table>      <?php }  ?></td>
  </tr>
</table>
<?php }  ?>
</body>

</html>