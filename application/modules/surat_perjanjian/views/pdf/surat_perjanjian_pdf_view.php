 <style>
* {
  font-size:10px;
}
p {
  margin:0px;
}

 .style1 {
	font-size: 12px;
	font-weight: bold;
}
</style>    

<html>
	<head>
		<title>
			<?php echo   $title; ?>
		</title>

 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/print_style.css"></head>

<body>
<?php 
  $desa2 = $this->cm->data_desa();

  ?>
  <p align="center" class="style1"><u>SURAT PERJANJIAN DAMAI</u></p>
<p>Yang bertanda tangan dibawah ini masing-masing
</p>

<table width="100%" border="0">

  <tr>
    <td width="4%">&nbsp;</td>
    <td width="24%">Nama Lengkap </td>
    <td width="1%">:</td>
    <td width="71%"><?php echo $pihak1_nama; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    
    <td>Tempat, Tanggal Lahir </td>
    <td>:</td>
    <td><?php echo $pihak1_tempat_lahir; ?>, <?php echo flipdate($pihak1_tanggal_lahir); ?></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
   
    <td>Agama</td>
    <td>:</td>
    <td><?php echo $pihak1_agama; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
   
    <td>Pekerjaan</td>
    <td>:</td>
    <td><?php echo $pihak1_pekerjaan; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Alamat</td>
    <td>:</td>
    <td><?php echo $pihak1_desa; ?> RT. <?php echo $pihak1_rt; ?> RW. <?php echo $pihak1_rw; ?> KECAMATAN <?php echo $pihak1_kecamatan; ?> <?php echo $pihak1_kota; ?></td>
  </tr>
 
</table>
<p>
Disebut sebagai <strong>pihak I (satu)</strong>
</p>
<table width="100%" border="0">
  <tr>
    <td width="4%">&nbsp;</td>
    <td width="24%">Nama Lengkap </td>
    <td width="1%">:</td>
    <td width="71%"><?php echo $pihak2_nama; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    
    <td>Tempat, Tanggal Lahir </td>
    <td>:</td>
    <td><?php echo $pihak2_tempat_lahir; ?>, <?php echo flipdate($pihak2_tanggal_lahir); ?></td>
  </tr>
 
  <tr>
    <td>&nbsp;</td>
   
    <td>Agama</td>
    <td>:</td>
    <td><?php echo $pihak2_agama; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
   
    <td>Pekerjaan</td>
    <td>:</td>
    <td><?php echo $pihak2_pekerjaan; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Alamat</td>
    <td>:</td>
    <td><?php echo $pihak2_desa; ?> RT. <?php echo $pihak2_rt; ?> RW. <?php echo $pihak2_rw; ?> KECAMATAN <?php echo $pihak2_kecamatan; ?> <?php echo $pihak2_kota; ?></td>
  </tr>
 
</table>
<p>Disebut sebagai <strong>pihak I I(dua)</strong></p>
<p>Sehubungan dengan terjadinya <?php echo $kasus; ?> antara pihak ke I dan pihak ke II maka dibuat suatu perjanjian kedua belah pihak dengan rincian sebagai berikut :
<?php echo $isi_perjanjian;?>
Demikian perjanjian ini dibuat denga sesadar-sadarnya tanpa ada unsur paksaan tanpa paksaan apapun jua. </p>
<table width="100%" border="0">
  <tr>
    <td><div align="center">PIHAK I (SATU) </div></td>
    <td><div align="center">PIHAK II (DUA) </div></td>
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
    <td width="50%"><div align="center"><u><?php echo $pihak1_nama; ?></u></div></td>
    <td width="50%"><div align="center"><u><?php echo $pihak2_nama; ?></u></div></td>
  </tr>
</table>
<br><br>
<table width="263" border="0">
  <tr>
    <td width="257">SAKSI</td>
  </tr>
</table>
<br>
<table width="100%" border="0">
  <tr>
    <td width="3%">1.</td>
    <td width="36%"><?php echo $saksi1;?></td>
    <td width="61%">(......................................)</td>
  </tr>
  <tr>
    <td>2.</td>
    <td><?php echo $saksi2;?></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(......................................)</td>
  </tr>
  <tr>
    <td>3.</td>
    <td><?php echo $saksi3;?></td>
    <td>(......................................)</td>
  </tr>
  <tr>
    <td>4.</td>
    <td><?php echo $saksi4;?></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(......................................)</td>
  </tr>
</table>
<br>
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