<html>
  <head>
    <title>
      <?php echo   $title; ?>
    </title>

 
<style>
* {
  font-size:8px;
}
p {
  margin:0px;
}
</style>    </head>

<body>
  <?php 
  $desa2 = $this->cm->data_desa();

  ?>

 

 <?php 
$this->load->view("kop_surat");
?>
 <div align="center">
  <b> 
  <font size="11"><u>SURAT PENGANTAR PEMBUATAN SKCK</u> </font><br />
  <font size="10"> No : <?php echo $no_surat ?></font> </b>
</div>  
<p align="justify">Yang bertanda tangan di bawah ini,   <?php echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lurah  ":" Kepala Desa  "; ?><?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?> menerangkan bahwa : </p>
    <table width="100%">
     
      
      <tr>
        <td width="10%" >&nbsp;</td>
        <td width="18%" >Nama</td>
        <td width="72%">: <?php echo $nama; ?></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >Tempat, Tgl lahir </td>
        <td>: <?php echo $tmp_lahir . ", ".$tgl_lahir; ?></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >NIK</td>
        <td>: <?php echo $nik; ?></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >Jenia Kelamin </td>
        <td>: <?php echo strtoupper ($this->cm->jk($jk)); ?></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >Agama </td><td>: <?php echo $agama; ?> </td></tr>
      <tr>
        <td >&nbsp;</td>
        <td >Pekerjaan</td>
        <td>: <?php echo strtoupper($pekerjaan); ?></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >Alamat </td><td>: <?php echo $alamat. "  RT $rt RW $rw "; 
       if($dusun <> "") { 
      
      echo ($desa2->bentuk_lembaga == "Kelurahan")?" Lingkungan ":" Dusun ";
      echo $dusun; 
      }  ?></td></tr>
    
    </table>
  
 <p align="justify">Nama orang tersebut di atas adalah benar benar warga Desa <?php echo ucwords(strtolower($desa2->desa));  ?> sesuai identitas diatas, dan menurut sepengetahuan kami benar-benar berkelakuan baik, tidak pernah tersangkut perkara tindak kriminal, atau perkara pidana, serta tidak pernah ikut perkumpulan atau organisassi yang dilarang Pemerintah.
 </p>
  
<p align="justify">Demikian surat pengantar ini dibuat  dan diberikan kepada yang bersangkutan untuk dipergunakan sebagaimana mestinya.
</p>
<br />
 <?php
$this->load->view("ttd_pdf");
?>
</body>

</html>