<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Surat Keterangan Lahir</title>
<style type="text/css">
 *{
  font-size:11px;
 }
 
 .judul {
    font-size:14px;
  font-weight:bold;
  }
</style>
</head>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/print_style.css">
  <?php 
  $desa = $this->cm->data_desa();
$desa2 = $this->cm->data_desa();
  ?>

<body>

<p align="center">

  <span class="judul"><u>SURAT PERNYATAAN</u> </span><br />

</p>
<p>Yang bertanda tangan dibawah ini
</p>
<table width="100%"  class="label">
  
  <tr>
    <td  width="4%" >1.</td>
    <td  width="30%" >Nama Lengkap </td>
    <td  width="66%" >: <strong><?php echo $bapak_nama; ?></strong></td>
  </tr>
  <tr>
    <td>2.</td>
    <td >NIK</td>
    <td >: <?php echo $bapak_nik; ?></td>
  </tr>
  <tr>
    <td>3.</td>
    <td >Tempat, Tanggal Lahir </td>
    <td >: <?php echo $bapak_tmp_lahir;?>, <?php echo flipdate($bapak_tgl_lahir); ?></td>
  </tr>
  <tr>
    <td>4.</td>
    <td >Pekerjaan</td>
    <td >: <?php echo strtoupper($bapak_pekerjaan); ?></td>
  </tr>
  <tr>
    <td>5.</td>
    <td >Alamat</td>
    <td >: <?php echo $bapak_alamat; ?>, RT.<?php echo $bapak_rt; ?>/<?php echo $bapak_rw; ?> <?php echo $bapak_desa; ?></td>
  </tr>
</table>
<p>Adalah orang tua dari (Bagi yang belum dewasa)</p>
<table width="100%"  class="label">
  
  <tr>
    <td  width="4%" >1.</td>
    <td  width="30%" >Nama Lengkap </td>
    <td  width="66%" >: <strong><?php echo $nama; ?></strong></td>
  </tr>
  <tr>
    <td>2.</td>
    <td >NIK</td>
    <td >: <?php echo $nik; ?></td>
  </tr>
  <tr>
    <td>3.</td>
    <td >Tempat, Tanggal Lahir </td>
    <td >: <?php echo $tmp_lahir;?>, <?php echo ($tgl_lahir); ?></td>
  </tr>
 
  <tr>
    <td>4.</td>
    <td >Alamat</td>
    <td >: <?php echo $bapak_alamat; ?>, RT.<?php echo $bapak_rt; ?>/<?php echo $bapak_rw; ?> <?php echo $bapak_desa; ?></td>
  </tr>
</table>
<p>Dengan ini menyatakan bahwa data yang tercantum sebagaimana yang tertulis pada formulir pelaporan kelahiran (F.2-01) dan kelengkapan persyaratan serta bukti dukung lainnya adalah keadaan yang <strong><i>sebenarnya</i></strong>, dan apabila dikemudian hari ternyata seluruh data dan persyaratan serta bukti dukung lainnya tersebut tidak benar, maka saya bersedia dituntut dimuka pengadilan sesuai dengan ketentuan perundang-undangan yang berlaku. </p>
<p>
  
</p>
<?php  if($desa2->bentuk_lembaga=="Kelurahan")  {  ?>
<table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="4%">&nbsp;</td>
    <td width="57%"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal)); ?></td>
    <td width="57%">&nbsp;</td>
    <td width="57%">&nbsp;</td>
    <td width="57%">&nbsp;</td>
    <td width="4%" align="left">&nbsp;</td>
    <td width="39%" align="left"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal)); ?></td>
  </tr> <?php 
    if($ttd <> "kepala") {  ?> 
 
  <tr>
    <td>an</td>
    <td>LURAH</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">a.n. </td>
    <td align="left">LURAH </td>
  </tr> <?php   }   
    ?>
  <tr>
    <td>&nbsp;</td>
    <td><?php echo strtoupper($ttd_jabatan) ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left"><?php echo strtoupper($ttd_jabatan) ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><u><?php echo $ttd_nama; ?></u></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left"><u><?php echo $ttd_nama; ?></u></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>NIP. <?php echo  $nip; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
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
    <td width="7%">&nbsp;</td>
    <td width="7%">&nbsp;</td>
    <td width="42%">&nbsp;</td>
    <td width="44%" align="center"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal)); ?></td>
  </tr>
  <?php 
    if($ttd <> "kepala") {  ?> 
  <tr>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="left"><div align="center">Yang membuat pernyataan </div></td>
  </tr> <?php } ?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left"><div align="center"></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><strong><u><?php echo $bapak_nama; ?></strong></u></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><u><center></center></u></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<?php }  ?>
</body>
</html>