<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Surat Keterangan Lahir</title>
<style type="text/css">
html {
margin-top : 0px;
}
 *{
 	font-size:8px;
 }
 
 .judul {
  	font-size:14px;
	font-weight:bold;
  }
</style>
</head>
  
	<?php 
	$desa = $this->cm->data_desa();
	$desa2 = $this->cm->data_desa();

	?>

<body>
<?php 
$this->load->view("kop_surat");
?><br />KODE: F.2.02 <br />
PEMERINTAH  <?php echo   $desa->kota ?> <br />
KECAMATAN <?php echo   $desa->kecamatan ?> <br />
<?php echo   strtoupper($desa->bentuk_lembaga) ?> <?php echo   $desa->desa ?> 
 <br>
 

 <div align="center">
ARSIP UNTUK KECAMATAN / PEREKAM DATA<br>

  <b> 
  <font size="11"><u>SURAT KETERANGAN KELAHIRAN</u> </font><br />
  <font size="10"> No : <?php echo $no_surat ?></font> </b>
  </div>  
  <br>

<table width="100%">
  <tr>
    <td width="136" class="label">Nama Kepala Keluarga </td>
    <td width="684"> : <?php echo $bapak_nama; ?></td>
  </tr>
  <tr>
    <td class="label">Nomor KK </td>
    <td> : <?php echo $this->am->no_kk($bapak_id_penduduk); ?></td>
  </tr>
</table>
<br /><br />

BAYI :
<table width="100%">
  <tr>
    <td width="20">1</td>
    <td width="120"  class="label2">Nama </td>
    <td width="857">: <?php echo $nama ?></td>
  </tr>
  <tr>
    <td>2</td>
    <td class="label2">Jenis kelamin </td>
    <td>: <?php echo $this->cm->jk($jk); ?></td>
  </tr>
  <tr>
    <td>3</td>
    <td class="label2">Tempat dilahirkan </td>
    <td>: <?php echo $tmp_lahir ?></td>
  </tr>
  <tr>
    <td>4</td>
    <td class="label2">Tempat kelahiran </td>
    <td>: <?php echo $tmp_kelahiran ?></td>
  </tr>
  <tr>
    <td>5</td>
    <td class="label2">Hari dan tanggal lahir </td>
    <td>: <?php echo $this->am->hari(flipdate($tgl_lahir)).", ". $tgl_lahir ?></td>
  </tr>
  <tr>
    <td>6</td>
    <td class="label2">Pukul </td>
    <td>: <?php echo $jam_lahir ?></td>
  </tr>
  <tr>
    <td>7</td>
    <td class="label2">Kelahiran ke </td>
    <td>: <?php echo $anak_ke ?></td>
  </tr>
  <tr>
    <td>8</td>
    <td class="label2">Penolong kelahiran </td>
    <td>: <?php echo $penolong_kelahiran ?></td>
  </tr>
  <tr>
    <td>9</td>
    <td class="label2">Berat bayi</td>
    <td>: <?php echo $berat ?> Kg</td>
  </tr>
</table>
<br />
<br />
IBU :
<table width="100%">
  <tr>
    <td width="143" >Nama </td>
    <td width="860"> : <?php echo $ibu_nama; ?></td>
  </tr>
  <tr>
    <td >NIK </td>
    <td> : <?php echo $ibu_nik; ?></td>
  </tr>
  <tr>
    <td  >Umur </td>
    <td> : <?php echo $ibu_umur; //$this->am->umur($ibu_tgl_lahir); ?> tahun </td>
  </tr>
  <tr>
    <td  >Pekerjaan </td>
    <td> : <?php echo $ibu_pekerjaan; ?></td>
  </tr>
  <tr>
    <td  valign="top">Alamat </td>
    <td><table width="64%">
      <tr>
        <td width="2%">&nbsp;</td>
        <td width="27%">a. <?php echo $desa->bentuk_lembaga." ".$ibu_desa ?></td>
        <td width="71%">c.  <?php echo $ibu_kota ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;b. Kecamatan <?php echo $ibu_kecamatan ?></td>
        <td>d. Provinsi <?php echo $ibu_provinsi ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td  >Kewarganegaraan</td>
    <td> : <?php echo $ibu_warga_negara ?></td>
  </tr>
  <tr>
    <td>Kebangsaan</td>
    <td> : <?php echo $ibu_keturunan ?></td>
  </tr>
  <tr>
    <td>Tgl. Pencatatan perkawinan</td>
    <td> : <?php echo flipdate($tgl_pernikahan) ?></td>
  </tr>
</table>
<br />
<br />
BAPAK :
<table width="100%">
  <tr>
    <td width="125" >Nama </td>
    <td width="878"> : <?php echo $bapak_nama; ?></td>
  </tr>
  <tr>
    <td >NIK </td>
    <td> : <?php echo $bapak_nik; ?></td>
  </tr>
  <tr>
    <td >Umur </td>
    <td> : <?php echo $bapak_umur; // $this->am->umur($bapak_tgl_lahir); ?> tahun </td>
  </tr>
  <tr>
    <td  >Pekerjaan </td>
    <td> : <?php echo $bapak_pekerjaan; ?></td>
  </tr>
  <tr>
    <td valign="top">Alamat </td>
    <td><table width="50%">
      <tr>
        <td width="10">&nbsp;</td>
        <td width="168">a. <?php echo $desa->bentuk_lembaga." ".$bapak_desa ?></td>
        <td width="326">c.  <?php echo $bapak_kota ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>b. Kecamatan <?php echo $bapak_kecamatan ?></td>
        <td>d. Provinsi <?php echo $bapak_provinsi ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td  >Kewarganegaraan</td>
    <td> : <?php echo $bapak_warga_negara ?></td>
  </tr>
  <tr>
    <td >Kebangsaan</td>
    <td> : <?php echo $bapak_keturunan ?></td>
  </tr>
</table>
<br />
<br />
SAKSI I :
<table width="100%">
  <tr>
    <td width="124" >NIK </td>
    <td width="877"> : <?php echo $saksi1_nik; ?></td>
  </tr>
  <tr>
    <td  >Nama </td>
    <td> : <?php echo $saksi1_nama; ?></td>
  </tr>
</table>
<br />
<br />
SAKSI II :
<table width="100%">
  <tr>
    <td width="123" >NIK </td>
    <td width="884"> : <?php echo $saksi2_nik; ?></td>
  </tr>
  <tr>
    <td >Nama </td>
    <td> : <?php echo $saksi2_nama; ?></td>
  </tr>
</table>
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
</body>
</html>