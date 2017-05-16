<html>
  <head>
    <title>
      <?php echo   $title; ?>
    </title>

 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/print_style.css">


</head>
 <style>
* {
  font-size:10px;
}
p {
  margin:0px;
}

 </style>   
<body>
  <?php 
  $desa2 = $this->cm->data_desa();

  ?>

<!-- <div id="wrap" style="width:1024; margin:0px auto" >  -->
<table width="100%">
  <tr>
    <td width="37%">PEMERINTAH DESA </td>
    <td width="1%">:</td>
    <td width="62%"><?php echo $desa2->desa ?></td>
  </tr>
  <tr>
    <td>KECAMATAN</td>
    <td>:</td>
    <td><?php echo $desa2->kecamatan ?></td>
  </tr>
  <tr>
    <td>KABUPATEN</td>
    <td>:</td>
    <td><?php echo $desa2->kota ?></td>
  </tr>
</table>


<p align="center">
  <b>FORMULIR PELAPORAN KEMATIAN</b>
</p>


<p align="justify">Yang bertanda tangan di bawah ini : </p>
    <table width="100%">
	<tr>
        <td width="38%" >Nama </td>
        <td width="62%">: <?php echo $saksi1_nama; ?> </td>
  </tr>
      <tr>
        <td >No. KTP / NIK </td>
        <td>: <?php echo $saksi1_nik; ?> </td>
      </tr>
     
      <tr>
        <td >Pekerjaan </td>
        <td>: <?php echo $saksi2_nama; ?> </td>
      </tr>
      <tr>
        <td >Alamat </td>
        <td>: <?php echo $saksi2_nik; ?></td>
      </tr>
       <tr>
        <td >Hubungan dengan yang mati </td>
        <td>: <?php echo $hubungan_pelapor; ?> </td>
      </tr>
</table>
  
 

 
    <p>Melaporkan bahwa : </p>
    <table width="100%">
    <tr>
        <td width="38%" >Nama Lengkap </td>
        <td width="62%">: <?php echo $nama; ?> </td></tr><tr>
        <td >NIK </td>
        <td>: <?php echo $nik; ?> </td></tr><tr>
        <td >Jenis Kelamin </td>
        <td>: <?php echo $jk; ?> </td></tr>
    <tr>
        <td >Tanggal Lahir</td>
        <td>: <?php echo isset($tanggal_lahir)?flipdate($tanggal_lahir):""; ?> </td></tr>
      <tr>
        <td >Agama </td>
        <td>: <?php echo $agama; ?></td>
      </tr>
      <tr>
        <td >Alamat</td>
        <td>: <?php echo $alamat; ?> </td></tr>
    </table>
    <p>Telah meninggal dunia pada : </p>
     <table width="100%">
     <tr>
        <td width="38%" >Hari</td>
        <td width="1%">:</td>
        <td width="61%"><?php echo $this->am->hari(flipdate($tgl_meninggal)); ?> </td>
     </tr>
     <tr>
        <td >Tanggal kematian </td>
        <td>:</td>
        <td><?php echo isset($tgl_meninggal)?flipdate($tgl_meninggal):""; ?> </td>
     </tr>
      <tr>
        <td >Bertempat di </td>
        <td>:</td>
        <td><?php echo $tempat_meninggal; ?></td>
      </tr>
      <tr>
        <td >Penyebab kematian </td>
        <td>:</td>
        <td><?php echo $penyebab_kematian; ?> </td>
      </tr>
      <tr>
        <td >Bukti kematian </td>
        <td>:</td>
        <td>Surat Keterangn Kematian No :  </td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td>&nbsp;</td>
        <td><?php echo $no_surat; ?></td>
    </tr>
    </table>
   <p></p>
<table width="100%" border="0">
  <tr>
    <td width="51%">&nbsp;</td>
    <td width="49%"><div align="center"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal)); ?></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="center">Pelapor</div></td>
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
    <td>&nbsp;</td>
    <td><div align="center"><?php echo $saksi1_nama; ?></div></td>
  </tr>
</table>

<!-- </div> end of wrap -->
</body>

</html>