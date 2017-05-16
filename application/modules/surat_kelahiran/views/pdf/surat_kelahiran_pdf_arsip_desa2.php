<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Surat Keterangan Lahir</title>
<style type="text/css">
 *{
  font-size:9px;
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
<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	 <td>&nbsp;</td>
	  <td>&nbsp;</td>
    <td><strong>Kode : F-2.01</strong></td>
  </tr>
</table>

<table width="711" border="0">

  <tr>
    <td width="130">PEMERINTAH DESA </td>
    <td width="569">: <?php echo   $desa->desa ?></td>
  </tr>
  
  <tr>
    <td>KECAMATAN</td>
    <td>: <?php echo   $desa->kecamatan ?></td>
  </tr>
  <tr>
    <td>KABUPATEN</td>
    <td>: <?php echo   $desa->kota ?></td>
  </tr>
</table>
<p align="center">
  <!-- <?php $ket = ($jenis_cetak == "besangkutan")? "YANG BERSANGKUTAN":strtoupper($desa->bentuk_lembaga)  ?>
  ARSIP UNTUK <?php echo $ket  ?> <br /> -->
  <span class="judul">SURAT KETERANGAN KELAHIRAN </span><br />
  <!-- <span class="judul">No. : <?php echo $no_surat; ?></span> --> <hr />

</p>
<table width="100%"  class="label">
  <tr>
    <td width="25%" >Nama Kepala Keluarga </td>
    <td width="50%" > : <?php echo $bapak_nama ?></td>
    <td width="25%" > </td>
  </tr>
<TR>
<TD width="25%"><strong>BAYI / ANAK</strong>  </TD>
</TR>
  <tr>
  <td  width="3%" >1.</td>
    <td  width="21%" >Nama Lengkap </td>
    <td  width="70%" > : <?php echo $nama; ?></td>
  </tr>
  <tr>
  <td width="3%">2.</td>
    <td width="21%" >Jenis Kelamin </td>
    <td width="25%" > : <?php echo $jk ?></td>
  </tr>
  <tr>
   <td width="3%">3.</td>
    <td width="21%">Tempat Lahir </td>
    <td width="70%"> :  <?php echo $tmp_lahir ?></td>
  </tr>
  <tr>
   <td width="3%">4.</td>
    <td width="21%" >Hari &amp; Tanggal Lahir  </td>
    <td width="25%"> : <?php echo $this->am->hari(flipdate($tgl_lahir)) ?>, <?php echo $tgl_lahir ?></td>
  </tr>
   <tr>
   <td width="3%">5.</td>
    <td >Waktu </td>
    <td> : <?php echo $jam_lahir ?></td>
  </tr>
  <tr>
     <td width="3%">6.</td>
    <td  width="21%">Jenis Kelahiran </td>
    <td  width="25%"> : <?php echo $jenis_kelahiran ?></td>
  </tr>
  <tr>
   <td width="3%">7.</td>
    <td  width="21%">Berat/ Panjang Badan </td>
    <td  width="25%"> : <?php echo $berat ?> kg/ <?php echo $panjang_badan ?> cm</td>
  </tr>
  <tr>
   <td width="3%">8.</td>
    <td width="21%" >Anak Ke </td>
    <td width="25%"> : <i><?php echo $anak_ke ?></i></td>
  </tr>
 <!--  <tr>
     <td width="3%">9.</td>
    <td width="21%" >NIK</td>
    <td width="25%"> : <i><?php echo $nik ?></i></td>
  </tr> -->
<tr><td width="25%"><strong>IBU</strong></td></tr>
  <tr>
  <td width="3%">1.</td>
    <td width="21%" class="label">Nama Lengkap </td>
    <td width="70%"> : <?php echo $ibu_nama; ?></td>
  </tr>
  <tr>
  <td width="3%">2.</td>
    <td  width="21%" >NIK </td>
    <td  width="25%" > : <?php echo $ibu_nik; ?></td>
  </tr>
  <tr>
   <td width="3%">3.</td>
    <td width="21%">Tgl Lahir/Umur </td>
    <td width="25%"> : <?php echo flipdate($ibu_tgl_lahir); ?>/ <?php echo $ibu_umur; ?> Tahun </td>
  </tr>
  <tr>
   <td width="3%">4.</td>
    <td width="21%" >Pekerjaan </td>
    <td width="70%"> : <?php echo $ibu_pekerjaan; ?></td>
  </tr>
  <tr>
    <td width="3%">5.</td>
    <td  width="21%" >Alamat </td>
    <td  width="70%"> : <?php echo $ibu_alamat; ?></td>
  </tr>

<tr><td width="25%"><strong>AYAH</strong></td></tr>
  <tr>
  
  <td width="3%">1.</td>
    <td width="21%" class="label">Nama </td>
    <td width="70%"> : <?php echo $bapak_nama; ?></td>
  </tr>
  <tr>
  <td width="3%">2.</td>
    <td  width="21%" >NIK </td>
    <td width="25%"> : <?php echo $bapak_nik; ?></td>
  </tr>
  <tr>
   <td width="3%">3.</td>
    <td  width="21%"  >Tgl Lahir/Umur </td>
    <td  width="25%" > : <?php echo flipdate($bapak_tgl_lahir); ?>/ <?php echo $bapak_umur; ?> Tahun </td>
  </tr>
  <tr>
   <td width="3%">4.</td>
    <td  width="21%" >Pekerjaan </td>
    <td  width="70%"> : <?php echo $bapak_pekerjaan; ?></td>
  </tr>
  <tr>
    <td width="3%">5.</td>
    <td  width="21%">Alamat </td>
    <td  width="70%"> : <?php echo $bapak_alamat; ?></td>
  </tr>
</table>
<tr><td width="25%"><strong>PELAPOR</strong></td></tr>
  
  <tr>
   <td width="3%">1.</td>
    <td width="21%">Nama </td>
    <td width="70%"> : <?php echo $pelapor_nama; ?></td>
  </tr>
  <tr>
   <td width="3%">2.</td>
    <td width="21%"  >NIK </td>
    <td width="25%"> : <?php echo $pelapor_nik; ?></td>
  </tr>
  <tr>
  <td width="3%">3.</td>
    <td width="21%"  >Tgl Lahir /Umur </td>
    <td width="25%" > : <?php echo ($pelapor_tgl_lahir); ?>/ <?php echo $this->am->umur($pelapor_tgl_lahir); ?> tahun </td>
  </tr>
  <tr>
   <td width="3%">4.</td>
    <td width="21%">Pekerjaan </td>
    <td width="50%"> : <?php echo $pelapor_pekerjaan; ?></td>
  </tr>
  <tr>
   <td width="3%">5.</td>
    <td  width="21%">Alamat </td>
    <td  width="25%"> : <?php echo $pelapor_alamat; ?></td>
  </tr>
</table>
<br />
<br />
<table width="100%" border="">
  <tr>
    <td colspan="3"><div align="center">SAKSI I <br />
    </div></td>
    <td colspan="3"><div align="center">SAKSI II <br />
    </div></td>
  </tr>
  <tr>
    <td width="3%">1.</td>
    <td width="17%">Nama Lengkap </td>
    <td width="24%">: <?php echo $saksi1_nama; ?></td>
    <td width="3%">1.</td>
    <td width="23%">Nama Lengkap </td>
    <td width="30%">: <?php echo $saksi2_nama; ?></td>
  </tr>
  <tr>
    <td>2.</td>
    <td>NIK</td>
    <td>: <?php echo $saksi1_nik; ?></td>
    <td>2.</td>
    <td>NIK</td>
    <td>: <?php echo $saksi2_nik; ?></td>
  </tr>
  <tr>
    <td>3.</td>
    <td>Tgl Lahir</td>
    <td>: <?php echo flipdate($saksi1_tgl_lahir); ?> </td>
    <td>3.</td>
    <td>Tgl Lahir/ Umur</td>
    <td>: <?php echo flipdate($saksi2_tgl_lahir); ?></td>
  </tr>
  <tr>
    <td>4.</td>
    <td>Pekerjaan</td>
    <td>: <?php echo $saksi1_pekerjaan; ?></td>
    <td>4.</td>
    <td>Pekerjaan</td>
    <td>: <?php echo $saksi2_pekerjaan; ?></td>
  </tr>
  <tr>
    <td>5.</td>
    <td>Alamat</td>
    <td>: <?php echo $saksi1_alamat; ?></td>
    <td>5.</td>
    <td>Alamat</td>
    <td>: <?php echo $saksi2_alamat; ?></td>
  </tr>
</table>
<br />
<br /><br />
<table width="100%" border="0">
  <tr>
    <td width="7%">&nbsp;</td>
    <td width="29%"><div align="center">SAKSI I </div></td>
    <td width="64%"><div align="center">SAKSI II </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="center"><u><?php echo $saksi1_nama; ?></u></div></td>
    <td><div align="center"><u><?php echo $saksi2_nama; ?></u></div></td>
  </tr>
</table>

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
<table width="95%" border="0" cellpadding="0">
  <tr>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td width="2%" height="21" align="center">&nbsp;</td>
    <td width="41%" align="center">Mengetahui,</td>
    <td width="57%" align="center"><?php echo $desa2->desa.", ". flipdate($tanggal); ?></td>
  </tr>
  <?php 
    if($ttd <> "kepala") {  ?> 
  <tr>
    <td align="center">&nbsp;</td>
    <td align="center">a.n. KEPALA DESA </td>
    <td align="left">&nbsp;</td>
  </tr> <?php } ?>
  <tr>
    <td align="center">&nbsp;</td>
    <td align="center"><?php echo strtoupper($ttd_jabatan) ?></td>
    <td align="left"><div align="center">Pelapor</div></td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td align="center"><u><?php echo $ttd_nama; ?></u></td>
    <td align="center"><u><center><?php echo $pelapor_nama; ?></center></u></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td align="center"><?php if($ttd == "sek") {  ?>
	<table width="100%" border="0" cellpadding="0">
      
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