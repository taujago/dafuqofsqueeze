<html>
<style type="text/css">
 *{
  font-size:10px;
 }
 
 .judul {
    font-size:14px;
  font-weight:bold;
  }
</style>
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
  ?>
<!-- <div id="wrap" style="width:1024; margin:0px auto" >  -->

  <table width="100%" border="0">
    <tr>
      <td width="26%"><p><strong><em>Kode : F &ndash; 2. 17</em></strong></p></td>
      <td width="74%">&nbsp;</td>
    </tr>
    <tr>
      <td>PEMERINTAHAN KAB./KOTA </td>
      <td>: <?php echo   $desa->kota ?></td>
    </tr>
    <tr>
      <td>KECAMATAN</td>
      <td>: <?php echo   $desa->kecamatan ?></td>
    </tr>
    <tr>
      <td>DESA/ KELURAHAN </td>
      <td>: <?php echo   $desa->desa ?></td>
    </tr>
  </table>
  <p align="center">UNTUK YANG BERSANGKUTAN </p>
  <p align="center"><b> 
<span id="judulsurat"><center>SURAT  KETERANGAN KEMATIAN   </center> </span><br />
      <span id="nomor_surat"> No : <?php echo $no_surat ?> </span> </b>
<br />  </p>
<p align="justify">Yang bertanda tangan di bawah ini, <?php echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lurah  ":" Kepala Desa  "; ?><?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?> menerangkan bahwa : </p>
    <table width="100%">
  <tr>
        <td width="10%" >&nbsp;</td>
        <td width="20%" >Nama </td>
        <td width="70%">: <?php echo $nama; ?> </td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >No. KTP / NIK </td>
        <td>: <?php echo $nik; ?> </td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >Jenis kelamin</td>
        <td>: <?php echo $this->cm->jk($jk); ?>   </td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >Tempat, Tgl lahir </td>
        <td>: <?php echo $tempat_lahir; ?>, <?php echo flipdate($tanggal_lahir); ?></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >Agama </td>
        <td>: <?php echo $agama; ?> </td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >Pekerjaan </td>
        <td>: <?php echo $pekerjaan; ?> </td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >Alamat </td>
        <td>: <?php echo $alamat; ?></td>
      </tr>
      
     
    </table>
  
 

 
    <p>Telah Meninggal Dunia Pada 
     
</p>
    <table width="100%">
     <tr>
        <td width="10%" >&nbsp;</td>
        <td width="20%" >Hari</td>
        <td width="70%">: <?php echo $this->am->hari(flipdate($tgl_meninggal)); ?> </td></tr>
     <tr>
        <td >&nbsp;</td>
        <td >Tanggal</td>
        <td>: <?php echo isset($tgl_meninggal)?flipdate($tgl_meninggal):""; ?> </td></tr>
      <tr>
        <td >&nbsp;</td>
        <td >Bertempat di </td>
        <td>: <?php echo $tempat_meninggal; ?></td>
      </tr>
    <tr>
        <td >&nbsp;</td>
        <td >Pukul </td>
        <td>: <?php echo $jam_meninggal; ?> WIB </td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >Penyebab Kematian </td>
        <td>: <?php echo $penyebab_kematian; ?> </td>
      </tr>
    </table>
    <p>Surat  keterangan ini dibuat berdasarkan keterangan pelapor : </p>
    <table width="100%">
      <tr>
        <td width="10%" >&nbsp;</td>
        <td width="20%" >Nama</td>
        <td width="70%">: <?php echo $saksi1_nama; ?> </td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >NIK</td>
        <td>: <?php echo $saksi1_nik; ?> </td>
      </tr>
      <tr>
        <td width="10%" >&nbsp;</td>
        <td width="20%" >Pekerjaan</td>
        <td width="70%">: <?php echo $saksi2_nama; ?> </td>
      </tr>
     <tr>
        <td width="10%" >&nbsp;</td>
        <td width="20%" >Alamat </td>
        <td width="70%">: <?php echo $saksi2_nik; ?> </td>
      </tr>
      <tr>
    </table>
    <p>Hubungan  Pelapor dengan yang mati : <?php echo $hubungan_pelapor; ?></p>
    <table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="57%">&nbsp;</td>
    <td width="4%" align="left">&nbsp;</td>
     <?php  if($desa2->bentuk_lembaga=="Kelurahan")  {  ?>
    <td width="39%" align="left"><?php echo $desa2->desa.", ". flipdate($tanggal); ?></td>
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
<p>
  <?php }  ?>
  <!-- </div> end of wrap -->
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="100%" border="0">
    <tr>
      <td width="26%"><p><strong><em>Kode : F &ndash; 2. 17</em></strong></p></td>
      <td width="74%">&nbsp;</td>
    </tr>
    <tr>
      <td>PEMERINTAHAN KAB./KOTA </td>
      <td>: <?php echo   $desa->kota ?></td>
    </tr>
    <tr>
      <td>KECAMATAN</td>
      <td>: <?php echo   $desa->kecamatan ?></td>
    </tr>
    <tr>
      <td>DESA/ KELURAHAN </td>
      <td>: <?php echo   $desa->desa ?></td>
    </tr>
</table>
  <p align="center">ARSIP UNTUK DESA ATAU KELURAHAN</p>
  <p align="center"><b> 
<span id="judulsurat"><center>SURAT  KETERANGAN KEMATIAN   </center> </span><br />
      <span id="nomor_surat"> No : <?php echo $no_surat ?> </span> </b>
<br />  </p>
<p align="justify">Yang bertanda tangan di bawah ini, <?php echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lurah  ":" Kepala Desa  "; ?><?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?> menerangkan bahwa : </p>
    <table width="100%">
  <tr>
        <td width="10%" >&nbsp;</td>
        <td width="20%" >Nama </td>
        <td width="70%">: <?php echo $nama; ?> </td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >No. KTP / NIK </td>
        <td>: <?php echo $nik; ?> </td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >Jenis kelamin</td>
        <td>: <?php echo $this->cm->jk($jk); ?>   </td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >Tempat, Tgl lahir </td>
        <td>: <?php echo $tempat_lahir; ?>, <?php echo flipdate($tanggal_lahir); ?></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >Agama </td>
        <td>: <?php echo $agama; ?> </td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >Pekerjaan </td>
        <td>: <?php echo $pekerjaan; ?> </td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >Alamat </td>
        <td>: <?php echo $alamat; ?></td>
      </tr>
      
     
    </table>
  
 

 
    <p>Telah Meninggal Dunia Pada 
     
</p>
    <table width="100%">
     <tr>
        <td width="10%" >&nbsp;</td>
        <td width="20%" >Hari</td>
        <td width="70%">: <?php echo $this->am->hari(flipdate($tgl_meninggal)); ?> </td></tr>
     <tr>
        <td >&nbsp;</td>
        <td >Tanggal</td>
        <td>: <?php echo isset($tgl_meninggal)?flipdate($tgl_meninggal):""; ?> </td></tr>
      <tr>
        <td >&nbsp;</td>
        <td >Bertempat di </td>
        <td>: <?php echo $tempat_meninggal; ?></td>
      </tr>
    <tr>
        <td >&nbsp;</td>
        <td >Pukul </td>
        <td>: <?php echo $jam_meninggal; ?> WIB </td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >Penyebab Kematian </td>
        <td>: <?php echo $penyebab_kematian; ?> </td>
      </tr>
    </table>
    <p>Surat  keterangan ini dibuat berdasarkan keterangan pelapor : </p>
    <table width="100%">
      <tr>
        <td width="10%" >&nbsp;</td>
        <td width="20%" >Nama</td>
        <td width="70%">: <?php echo $saksi1_nama; ?> </td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >NIK</td>
        <td>: <?php echo $saksi1_nik; ?> </td>
      </tr>
      <tr>
        <td width="10%" >&nbsp;</td>
        <td width="20%" >Pekerjaan</td>
        <td width="70%">: <?php echo $saksi2_nama; ?> </td>
      </tr>
     <tr>
        <td width="10%" >&nbsp;</td>
        <td width="20%" >Alamat </td>
        <td width="70%">: <?php echo $saksi2_nik; ?> </td>
      </tr>
      <tr>
    </table>
    <p>Hubungan  Pelapor dengan yang mati : <?php echo $hubungan_pelapor; ?></p>
    <table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="57%">&nbsp;</td>
    <td width="4%" align="left">&nbsp;</td>
     <?php  if($desa2->bentuk_lembaga=="Kelurahan")  {  ?>
    <td width="39%" align="left"><?php echo $desa2->desa.", ". flipdate($tanggal); ?></td>
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