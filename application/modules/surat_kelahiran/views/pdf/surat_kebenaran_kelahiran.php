<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Surat Keterangan Lahir</title>
<style type="text/css">
 *{
  font-size:10px;
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

  <span class="judul">SURAT PERNYATAAN TANGGUNG JAWAB MUTLAK (SPTJM) <br> KEBENARAN DATA KELAHIRAN</span><br />

</p>
<p>Yang bertanda tangan dibawah ini
</p>
<table width="100%"  class="label">
  
  <tr>
    <td  width="4%" >a.</td>
    <td  width="30%" >Nama Lengkap </td>
    <td  width="66%" >: <strong><?php echo $bapak_nama; ?></strong></td>
  </tr>
  <tr>
    <td>b.</td>
    <td >NIK</td>
    <td >: <?php echo $bapak_nik; ?></td>
  </tr>
  <tr>
    <td>c.</td>
    <td >Tempat, Tanggal Lahir </td>
    <td >: <?php echo $bapak_tmp_lahir;?>, <?php echo flipdate($bapak_tgl_lahir); ?></td>
  </tr>
  <tr>
    <td>d.</td>
    <td >Pekerjaan</td>
    <td >: <?php echo strtoupper($bapak_pekerjaan); ?></td>
  </tr>
  <tr>
    <td>e.</td>
    <td >Alamat</td>
    <td >: <?php echo $bapak_alamat; ?>, RT.<?php echo $bapak_rt; ?>/<?php echo $bapak_rw; ?> <?php echo $bapak_desa; ?></td>
  </tr>
</table>
<p>Menyatakan bahwa</p>
<table width="100%"  class="label">
  
  <tr>
    <td  width="4%" >a.</td>
    <td  width="30%" >Nama Lengkap </td>
    <td  width="66%" >: <strong><?php echo $nama; ?></strong></td>
  </tr>
  <tr>
    <td>b.</td>
    <td >NIK</td>
    <td >: <?php echo $nik; ?></td>
  </tr>
  <tr>
    <td>c.</td>
    <td >Tempat, Tanggal Lahir </td>
    <td >: <?php echo $tmp_lahir;?>, <?php echo ($tgl_lahir); ?></td>
  </tr>
  <tr>
    <td>d.</td>
    <td >Anak ke </td>
    <td >: <?php echo $anak_ke;?></td>
  </tr>
 
  <tr>
    <td>e.</td>
    <td >Alamat</td>
    <td >: <?php echo $bapak_alamat; ?>, RT.<?php echo $bapak_rt; ?>/<?php echo $bapak_rw; ?> <?php echo $bapak_desa; ?></td>
  </tr>
</table>
<p>Adalah anak kandung dari</p>
<table width="100%"  class="label">
  
  <tr>
    <td  width="4%" >a.</td>
    <td  width="30%" >Nama Lengkap </td>
    <td  width="66%" >: <strong><?php echo $ibu_nama; ?></strong></td>
  </tr>
  <tr>
    <td>b.</td>
    <td >NIK</td>
    <td >: <?php echo $ibu_nik; ?></td>
  </tr>
  <tr>
    <td>c.</td>
    <td >Tempat, Tanggal Lahir </td>
    <td >: <?php echo $ibu_tmp_lahir;?>, <?php echo flipdate($ibu_tgl_lahir); ?></td>
  </tr>
  <tr>
    <td>d.</td>
    <td >Pekerjaan</td>
    <td >: <?php echo strtoupper($ibu_pekerjaan); ?></td>
  </tr>
  <tr>
    <td>e.</td>
    <td >Alamat</td>
    <td >: <?php echo $ibu_alamat; ?>, RT.<?php echo $ibu_rt; ?>/<?php echo $ibu_rw; ?> <?php echo $ibu_desa; ?></td>
  </tr>
</table>
<p>Yang lahir dengan penolong kelahiran</p>
<table width="100%"  class="label">
  
  <tr>
    <td  width="4%" >a.</td>
    <td  width="30%" >Nama Lengkap </td>
    <td  width="66%" >: <strong><?php echo $penolong_nama; ?></strong></td>
  </tr>
  <tr>
    <td>b.</td>
    <td >NIK</td>
    <td >: <?php echo $penolong_nik; ?></td>
  </tr>
  <tr>
    <td>c.</td>
    <td >Pekerjaan</td>
    <td >: <?php echo strtoupper($penolong_kelahiran); ?></td>
  </tr>
  <tr>
    <td>d.</td>
    <td >Alamat</td>
    <td >: <?php echo $penolong_alamat; ?></td>
  </tr>
</table>
<p>Demikian surat pernyataan ini saya buat dengan sebenar-benarnya dan apabila dikemudian hari ternyata pernyataan saya ini tidak benar, maka saya bersedia diproses secara hukum sesuai dengan peraturan perundang-undangan dan dokumen yang diterbitkan akibat dari pernyataan ini menjadi tidak sah. </p>
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
    <td width="28%"><div align="center">Saksi I </div></td>
    <td width="19%">&nbsp;</td>
    <td width="46%" align="center"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal)); ?></td>
  </tr>
 
  <tr>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="left"><div align="center">Saya yang menyatakan </div></td>
  </tr>
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
    <td align="center"><strong><u><?php echo $saksi1_nama; ?></strong></u></td>
    <td>&nbsp;</td>
    <td align="center"><strong><u><?php echo $bapak_nama; ?></strong></u></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center">NIK. <?php echo $saksi2_nik; ?></td>
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
    <td><div align="center">Saksi II </div></td>
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
    <td align="center"><strong><u><?php echo $saksi2_nama; ?></u></strong></td>
    <td>&nbsp;</td>
    <td align="center"><u><center></center></u></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center">NIK. <?php echo $saksi2_nik; ?></td>
    <td>&nbsp;</td>
  </tr>
</table>
<?php }  ?>
</body>
</html>