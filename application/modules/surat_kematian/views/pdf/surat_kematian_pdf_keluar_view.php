<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
 *{
 	font-size:8px;
 }
 
 .judul {
  	font-size:10px;
	font-weight:bold;
  }
</style> 
<?php 
	//$desa = $this->cm->data_desa();
  $desa2 = $this->cm->data_desa();
	?>
</head>

<body>
<p>KODE : F.2.17 <br />
  PEMERINTAH  <?php echo   $desa2->kota ?> <br />
  KECAMATAN <?php echo   $desa2->kecamatan ?> <br />
  <?php echo   strtoupper($desa2->bentuk_lembaga) ?><?php echo   $desa2->desa ?> <br />
</p>
 <br />
<br />
<br />
<br />

<p align="center">
  <span class="judul">ARSIP UNTUK KECAMATAN / PEREKAM DATA
</span> <br />
  <span class="judul">SURAT KETERANGAN KEMATIAN DI LUAR DOMISILI  </span> <br />
  <span class="judul">No. : <?php echo $no_surat; ?>  </span>  <br />
  <br />
  <br />
  Yang bertanda tangan di bawah ini,
</p>
 
 
 JENAZAH :<br />
<table width="100%">
  <tr>
    <td width="3%">1</td>
    <td width="20%"  align="left">NIK</td>
    <td width="77%">: <?php echo $nik ?></td>
  </tr>
  <tr>
    <td  >2</td>
    <td  >Nama Lengkap</td>
    <td  >: <?php echo $nama ?></td>
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
        <td width="42%">&nbsp; a. <?php echo ucwords(strtolower($desa2->bentuk_lembaga." ".$desa)); ?></td>
        <td width="58%">c.  <?php echo ucwords(strtolower($ibu_kota)) ?></td>
      </tr>
      <tr>
        <td>&nbsp; b. Kecamatan <?php echo ucwords(strtolower($kecamatan)) ?></td>
        <td>d. Provinsi <?php echo ucwords(strtolower($ibu_provinsi)) ?></td>
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
Ayah :<br />
<table width="100%">
  <tr>
    <td width="3%">18</td>
    <td width="20%">NIK</td>
    <td width="77%"> : <?php echo $ayah_nik; ?></td>
  </tr>
  <tr>
    <td>19</td>
    <td> Nama</td>
    <td> : <?php echo $ayah_nama; ?></td>
  </tr>
  <tr>
    <td>20</td>
    <td>Umur </td>
    <td> : <?php echo isset($ayah_tgl_lahir)?$this->am->umur(flipdate($ayah_tgl_lahir))." tahun":""; ?></td>
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
        <td width="42%"> &nbsp; a. <?php echo ucwords(strtolower($desa2->bentuk_lembaga." ".$ayah_desa)) ?></td>
        <td width="58%">c.  <?php echo ucwords(strtolower($ayah_kota)) ?></td>
      </tr>
      <tr>
        <td> &nbsp; b. Kecamatan <?php echo ucwords(strtolower($ayah_kecamatan)) ?></td>
        <td>d. Provinsi <?php echo ucwords(strtolower($ayah_provinsi)) ?> </td>
      </tr>
    </table></td>
  </tr>
</table>
<br />
<br />
Ibu : 
<br />
<table width="100%">
  <tr>
    <td width="3%">23</td>
    <td width="20%"> NIK</td>
    <td width="77%"> : <?php echo $ibu_nik; ?></td>
  </tr>
  <tr>
    <td>24</td>
    <td>Nama</td>
    <td> : <?php echo $ibu_nama; ?></td>
  </tr>
  <tr>
    <td>25</td>
    <td>Umur </td>
    <td> : <?php echo (isset($ibu_tgl_lahir))?$this->am->umur(flipdate($ibu_tgl_lahir))." tahun":""; ?>  </td>
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
        <td width="42%"> &nbsp; a. <?php echo ucwords(strtolower($desa2->bentuk_lembaga." ".$ibu_desa)) ?></td>
        <td width="58%">c.  <?php echo ucwords(strtolower($ibu_kota)) ?></td>
      </tr>
      <tr>
        <td> &nbsp; b. Kecamatan <?php echo ucwords(strtolower($ibu_kecamatan)) ?></td>
        <td>d. Provinsi <?php echo ucwords(strtolower($ibu_provinsi)) ?></td>
      </tr>
    </table></td>
  </tr>
</table>
<br />
 PELAPOR :<br />
<table width="100%">
  <tr>
    <td width="23%">NIK </td>
    <td width="77%"> : <?php echo $pelapor_nik; ?></td>
  </tr>
  <tr>
    <td>Nama </td>
    <td> : <?php echo $pelapor_nama; ?></td>
  </tr>
</table>
<br />
<br />
 SAKSI I :<br />
<table width="100%">
  <tr>
    <td width="23%">NIK </td>
    <td width="77%"> : <?php echo $saksi1_nik; ?></td>
  </tr>
  <tr>
    <td>Nama </td>
    <td> : <?php echo $saksi1_nama; ?></td>
  </tr>
</table>
<br />
<br />
SAKSI II :<br />
<table width="100%">
  <tr>
    <td width="23%">NIK </td>
    <td width="77%"> : <?php echo $saksi2_nik; ?></td>
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
        <td align="left">PANGKAT  : <?php echo  $pangkat; ?></td>
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
          <td align="left">PANGKAT  : <?php echo  $pangkat; ?></td>
        </tr>
        <tr>
          <td align="left">NIP. <?php echo  $nip; ?></td>
        </tr>
      </table>
      <?php }  ?></td>
  </tr>
</table>
<?php }  ?>
</body>
</html>