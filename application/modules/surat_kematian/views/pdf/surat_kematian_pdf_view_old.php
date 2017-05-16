<html>
  <head>
    <title>
      <?php echo   $title; ?>
    </title>

 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/print_style.css">


</head>

<body>
  <?php 
  $desa2 = $this->cm->data_desa();

  ?>

<!-- <div id="wrap" style="width:1024; margin:0px auto" >  -->
 <?php 
$this->load->view("kop_surat");
?>
  <div align="center">
  <b> 
  <font size="11"><u>SURAT KETERANGAN KEMATIAN</u> </font><br />
  <font size="10"> No : <?php echo $no_surat ?></font> </b>
  </div>  


<p align="justify">Yang bertanda tangan di bawah ini,   <?php echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lurah  ":" Kepala Desa  "; ?><?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?> menerangkan bahwa : </p>
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
        <td >Tempat, Tgl lahir </td>
        <td>: <?php echo $tempat_lahir; ?>, <?php echo flipdate($tanggal_lahir); ?> </td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >Jenis kelamin </td>
        <td>: <?php echo $this->cm->jk($jk); ?></td>
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
        <td width="70%">: <?php echo $this->am->hari($tgl_meninggal); ?> </td></tr>
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
        <td >Penyebab Kematian </td>
        <td>: <?php echo $penyebab_kematian; ?> </td></tr>
		<tr>
        <td >&nbsp;</td>
        <td >Dimakamkan di</td>
        <td>: <?php echo $tempat_pemakaman; ?> </td></tr>
    </table>
    <p>Surat Keterangan ini dibuat berdasarkan pelapor</p>
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
        <td >&nbsp;</td>
        <td >Pekerjaan</td>
        <td>: <?php echo $saksi2_nama; ?> </td>
      </tr>
       <tr>
        <td >&nbsp;</td>
        <td >Alamat</td>
        <td>: <?php echo $saksi2_nik; ?> </td>
      </tr>
       <tr>
        <td >&nbsp;</td>
        <td >Hubungan pelapor dengan yang mati</td>
        <td>: <?php echo $hubungan_pelapor; ?> </td>
      </tr>
      
    </table>
    <p>&nbsp;</p>
    <?php 
$this->load->view("ttd_pdf");
?>
<!-- </div> end of wrap -->
</body>

</html>