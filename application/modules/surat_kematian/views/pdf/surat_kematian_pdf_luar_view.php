<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Surat Keterangan Lahir</title>
<style type="text/css">
<!--
.label {	width: 130px;
}
.label2 {	width: 120px;
}
-->
* {
	font-size:8px;
}
td { 

font-size:6px;
}
</style>
</head>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/print_style.css">
	<?php 
	$desa = $this->cm->data_desa();
  $desa2 = $this->cm->data_desa();
	?>

<body>KODE : F.217<br />
PEMERINTAH  <?php echo   $desa->kota ?> <br />
KECAMATAN <?php echo   $desa->kecamatan ?> <br />
<?php echo   strtoupper($desa->bentuk_lembaga) ?><?php echo   $desa->desa ?> <br />
<br />
<br /> <center>
ARSIP UNTUK KECAMATAN / PEREKAM DATA
<h1>SURAT KETERANGAN KEMATIAN DI LUAR DOMISILI</h1>
<h1>No. : <?php echo $no_surat; ?></h1> </center>
<table width="100%">
  <tr>
    <td width="210">Nama Kepala Keluarga </td>
    <td width="792"> : <?php echo isset($bapak_nama)?$nama_bapak:""; ?></td>
  </tr>
  <tr>
    <td>Nomor KK </td>
    <td>: <?php echo !empty($bapak_id_penduduk)?$this->am->no_kk($bapak_id_penduduk):""; ?></td>
  </tr>
</table>
<br />
JENAZAH :
<table width="100%">
  <tr>
    <td>1</td>
    <td align="left">NIKasdf </td>
    <td>: <?php echo $nik ?></td>
  </tr>
  <tr>
    <td width="30">2</td>
    <td width="144">Nama Lengkap</td>
    <td width="824">: <?php echo $nama ?></td>
  </tr>
  <tr>
    <td>3</td>
    <td>Jenis kelamin </td>
    <td>: <?php echo $this->cm->jk($jk); ?></td>
  </tr>
  <tr>
    <td>4</td>
    <td><span class="label">Tanggal Lahir/ Umur</span></td>
    <td>: <?php echo $tgl_lahir . " / ".$umur ?> tahun</td>
  </tr>
  <tr>
    <td>5</td>
    <td>Tempat lahir</td>
    <td>: <?php echo $tmp_lahir ?></td>
  </tr>
  <tr>
    <td>6</td>
    <td>Agama</td>
    <td>: <?php echo $agama ?></td>
  </tr>
  <tr>
    <td>7</td>
    <td>Pekerjaan </td>
    <td>: <?php echo $pekerjaan ?></td>
  </tr>
  <tr>
    <td>8</td>
    <td>Alamat</td>
    <td><table width="100%">
      <tr>
        <td width="42%">a. <?php echo $desa->bentuk_lembaga." ".$ibu_desa ?></td>
        <td width="58%">c.  <?php echo $ibu_kota ?></td>
      </tr>
      <tr>
        <td>b. Kecamatan <?php echo $ibu_kecamatan ?></td>
        <td>d. Provinsi <?php echo $ibu_provinsi ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>9</td>
    <td>Kewarganegaraan</td>
    <td>: <?php echo $warga_negara ?></td>
  </tr>
  <tr>
    <td>10</td>
    <td>Keturunan </td>
    <td>: <?php echo $keturunan ?></td>
  </tr>
  <tr>
    <td>11</td>
    <td>Kebangsaan</td>
    <td>: <?php echo $kebangsaan ?></td>
  </tr>
  <tr>
    <td>12</td>
    <td>Anak ke </td>
    <td>: -</td>
  </tr>
  <tr>
    <td>13</td>
    <td>Tanggal kematian</td>
    <td>: <?php echo isset($tgl_meninggal)?flipdate($tgl_meninggal):""; ?></td>
  </tr>
  <tr>
    <td>14</td>
    <td>Pukul</td>
    <td>: <?php echo $jam_meninggal; ?></td>
  </tr>
  <tr>
    <td>15</td>
    <td>Sebab kematian</td>
    <td>: <?php echo $penyebab_kematian; ?></td>
  </tr>
  <tr>
    <td>16</td>
    <td>Tempat kematian</td>
    <td>: <?php echo $tmp_meninggal; ?></td>
  </tr>
  <tr>
    <td>17</td>
    <td>Yang menerangkan</td>
    <td>: <?php echo $yang_menerangkan; ?></td>
  </tr>
</table>
<br />
<br />
Ayah :
<table width="100%">
  <tr>
    <td width="6%">18</td>
    <td width="23%">NIK</td>
    <td width="71%"> : <?php echo $ayah_nik; ?></td>
  </tr>
  <tr>
    <td>19</td>
    <td> Nama</td>
    <td> : <?php echo $ayah_nama; ?></td>
  </tr>
  <tr>
    <td>20</td>
    <td>Umur </td>
    <td> : <?php echo isset($ayah_tgl_lahir)?$this->am->umur($ayah_tgl_lahir)." tahun":""; ?></td>
  </tr>
  <tr>
    <td>21</td>
    <td>Pekerjaan </td>
    <td> : <?php echo $ayah_pekerjaan; ?></td>
  </tr>
  <tr>
    <td valign="top">22</td>
    <td valign="top">Alamat </td>
    <td><table width="100%">
      <tr>
        <td width="42%">a. <?php echo $desa->bentuk_lembaga." ".$ayah_desa ?></td>
        <td width="58%">c.  <?php echo $ayah_kota ?></td>
      </tr>
      <tr>
        <td>b. Kecamatan <?php echo $ayah_kecamatan ?></td>
        <td>d. Provinsi <?php echo $ayah_provinsi ?></td>
      </tr>
    </table></td>
  </tr>
</table>
<br />
IBU :
<table width="100%">
  <tr>
    <td width="6%">23</td>
    <td width="23%"> NIK</td>
    <td width="71%"> : <?php echo $ibu_nik; ?></td>
  </tr>
  <tr>
    <td>24</td>
    <td>Nama</td>
    <td> : <?php echo $ibu_nama; ?></td>
  </tr>
  <tr>
    <td>25</td>
    <td>Umur </td>
    <td> : <?php echo $this->am->umur($ibu_tgl_lahir); ?> tahun </td>
  </tr>
  <tr>
    <td>26</td>
    <td>Pekerjaan </td>
    <td> : <?php echo $ibu_pekerjaan; ?></td>
  </tr>
  <tr>
    <td valign="top">27</td>
    <td valign="top">Alamat </td>
    <td><table width="100%">
      <tr>
        <td width="42%">a. <?php echo $desa->bentuk_lembaga." ".$ibu_desa ?></td>
        <td width="58%">c.  <?php echo $ibu_kota ?></td>
      </tr>
      <tr>
        <td>b. Kecamatan <?php echo $ibu_kecamatan ?></td>
        <td>d. Provinsi <?php echo $ibu_provinsi ?></td>
      </tr>
    </table></td>
  </tr>
</table>
<br />
PELAPOR :
<table width="100%">
  <tr>
    <td width="29%">NIK </td>
    <td width="71%"> : <?php echo $pelapor_nik; ?></td>
  </tr>
  <tr>
    <td>Nama </td>
    <td> : <?php echo $pelapor_nama; ?></td>
  </tr>
</table>
<br />
SAKSI I :
<table width="100%">
  <tr>
    <td width="29%">NIK </td>
    <td width="71%"> : <?php echo $saksi1_nik; ?></td>
  </tr>
  <tr>
    <td>Nama </td>
    <td> : <?php echo $saksi1_nama; ?></td>
  </tr>
</table>
<br />
SAKSI II :
<table width="100%">
  <tr>
    <td width="29%">NIK </td>
    <td width="71%"> : <?php echo $saksi2_nik; ?></td>
  </tr>
  <tr>
    <td>Nama </td>
    <td> : <?php echo $saksi2_nama; ?></td>
  </tr>
</table>
<br />
<br />
<?php  if($desa2->bentuk_lembaga=="Kelurahan")  {  ?>
<table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="57%">&nbsp;</td>
    <td width="4%" align="left">&nbsp;</td>
    <td width="39%" align="left"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal)); ?></td>
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
    <td align="left"><u><?php echo $ttd_nama; ?></u></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left"><table width="100%" border="0" cellpadding="0">
      <tr>
        <td align="left">PANGKAT : <?php echo  $pangkat; ?></td>
      </tr>
      <tr>
        <td align="left">NIP. <?php echo  $nip; ?></td>
      </tr>
    </table></td>
  </tr>
</table>
<?php }  else { ?>
<table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="57%">&nbsp;</td>
    <td width="4%">&nbsp;</td>
    <td width="39%" align="left"><?php echo $desa2->desa.", ". flipdate($tanggal); ?></td>
  </tr>
  <?php 
		if($ttd <> "kepala") {  ?>
  <tr>
    <td>&nbsp;</td>
    <td align="center">a.n. </td>
    <td align="left">KEPALA DESA </td>
  </tr>
  <?php } ?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left"><?php echo strtoupper($ttd_jabatan) ?></td>
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
    <td align="left"><u><?php echo $ttd_nama; ?></u></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left"><?php if($ttd == "sek") {  ?><table width="100%" border="0" cellpadding="0">
        <tr>
          <td align="left">PANGKAT : <?php echo  $pangkat; ?></td>
        </tr>
        <tr>
          <td align="left">NIP. <?php echo  $nip; ?></td>
        </tr>
    </table>      <?php }  ?></td>
  </tr>
</table>
<?php }  ?>
<br />
<center>
</center>
</body>
</html>