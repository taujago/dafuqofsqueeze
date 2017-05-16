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

  <?php 
$this->load->view("kop_surat");
?><br /><b>KODE: F.2.02</b><!--  <br />
  PEMERINTAH  <?php echo   $desa->kota ?> <br />
  KECAMATAN <?php echo   $desa->kecamatan ?> <br />
  <?php echo   strtoupper($desa->bentuk_lembaga); ?> <?php echo   $desa->desa ?> <br /> -->

<div align="center">
  <b> 
  <font size="11"><u>SURAT KETERANGAN KELAHIRAN</u> </font><br />
  <font size="10"> No : <?php echo $no_surat ?></font> </b>
  </div>  

<p align="justify">Yang bertanda tangan di bawah ini,   <?php echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lurah  ":" Kepala Desa  "; ?><?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?> menerangkan bahwa : </p>
</p>
<table width="711">
  <tr>
    <td width="130" class="label">Hari </td>
    <td width="569"> : <?php echo $this->am->hari(flipdate($tgl_lahir)) ?></td>
  </tr>
  <tr>
    <td >Tanggal </td>
    <td> : <?php echo $tgl_lahir ?></td>
  </tr>
  <tr>
    <td >Pukul </td>
    <td> : <?php echo $jam_lahir ?></td>
  </tr>
  <tr>
    <td  >Tempat Kelahiran </td>
    <td> : <?php echo $tmp_lahir ?></td>
  </tr>
</table>
<br />
Telah lahir seorang anak <?php echo $this->am->jk($jk); ?> <br />
bernama : <?php echo $nama; ?> <br />
<br />
Dari seorang Ibu : <br />
<table width="716">
  <tr>
    <td width="129" class="label">Nama </td>
    <td width="575"> : <?php echo $ibu_nama; ?></td>
  </tr>
  <tr>
    <td >NIK </td>
    <td> : <?php echo $ibu_nik; ?></td>
  </tr>
  <tr>
    <td >Umur </td>
    <td> : <?php echo $ibu_umur; // $this->am->umur($ibu_tgl_lahir); ?> tahun </td>
  </tr>
  <tr>
    <td >Pekerjaan </td>
    <td> : <?php echo $ibu_pekerjaan; ?></td>
  </tr>
  <tr>
    <td >Alamat </td>
    <td> : <?php echo $ibu_alamat; ?></td>
  </tr>
</table>
<br />
Istri dari  : <br />
<table width="717">
  <tr>
    <td width="131" class="label">Nama </td>
    <td width="574"> : <?php echo $bapak_nama; ?></td>
  </tr>
  <tr>
    <td  >NIK </td>
    <td> : <?php echo $bapak_nik; ?></td>
  </tr>
  <tr>
    <td  >Umur </td>
    <td> : <?php echo $bapak_umur; //$this->am->umur($bapak_tgl_lahir); ?> tahun </td>
  </tr>
  <tr>
    <td  >Pekerjaan </td>
    <td> : <?php echo $bapak_pekerjaan; ?></td>
  </tr>
  <tr>
    <td >Alamat </td>
    <td> : <?php echo $bapak_alamat; ?></td>
  </tr>
</table>
<br /><br />
Surat keterangan ini dibuat berdasarkan keterangan pelapor<br />
<table width="719">
  <tr>
    <td width="130" class="label">Nama </td>
    <td width="577"> : <?php echo $pelapor_nama; ?></td>
  </tr>
  <tr>
    <td  >NIK </td>
    <td> : <?php echo $pelapor_nik; ?></td>
  </tr>
  <tr>
    <td >Umur </td>
    <td> : <?php echo $this->am->umur($pelapor_tgl_lahir); ?> tahun </td>
  </tr>
  <tr>
    <td >Pekerjaan </td>
    <td> : <?php echo $pelapor_pekerjaan; ?></td>
  </tr>
  <tr>
    <td >Alamat </td>
    <td> : <?php echo $pelapor_alamat; ?></td>
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
  </tr> <?php 
		if($ttd <> "kepala") {  ?> 
 
  <tr>
    <td>&nbsp;</td>
    <td align="center">a.n. </td>
    <td align="left">LURAH </td>
  </tr> <?php   } 	
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
  </tr> <?php } ?>
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
          <td align="left">NIP. <?php echo  $nip; ?></td>
        </tr>
    </table>      <?php }  ?></td>
  </tr>
</table>
<?php }  ?>
</body>
</html>