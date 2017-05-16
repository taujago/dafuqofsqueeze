<html>
  <head>
    <title>
      <?php echo   $title; ?>
    </title>

  </head>
 <style>
* {
  font-size:8px;
}
p {
  margin:0px;
}

 </style>    

<body>
  <?php 
  $desa2 = $this->cm->data_desa();

  ?>

 
 
   <table width="100%" border="0" cellpadding="3">
     <tr>
        <td align="center"><b>SURAT PERNYATAAN PENGUASAAN FISIK BIDANG TANAH </b></td>
     </tr>
      <tr>
        <td align="center"><b>(SPPFBT) </b></td>
     </tr>
      <tr>
        <td align="center"><hr></td>
     </tr>
</table>

 

<p>Yang bertanda tangan di bawah ini menerangkan bahwa : </p>
    <table width="100%" cellpadding="3">
      <tr>
        <td width="10%" >&nbsp;</td>
        <td width="26%" >Nama </td><td width="64%">: <?php echo $nama; ?> </td></tr>
      <tr>
        <td>&nbsp;</td>
        <td>Tempat, Tgl lahir (Umur) </td>
        <td>: <?php echo $tmp_lahir . ", ".$tgl_lahir; ?> (<?php echo $umur; ?> ) </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>Pekerjaan </td><td>: <?php echo $pekerjaan; ?> </td></tr>
      <tr>
        <td>&nbsp;</td>
        <td>Alamat </td><td>: <?php echo $alamat. "  Rt $rt Rw $rw "; 
      echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lingkungan ":" Dusun "; echo " $dusun "; ?></td></tr>
    </table>
  
<p>Dengan ini menyatakan bahwa saya memiliki / menguasai sebidang tanah pertanian yang letaknya di : </p> 


 
<table width="100%">
      <tr>
        <td width="10%">&nbsp;</td>
        <td width="26%">Tempat  </td><td width="64%">: <?php echo $alamat_tanah; ?> </td></tr>
      <tr>
        <td>&nbsp;</td>
        <td>Kecamatan </td><td>: <?php echo $desa2->kecamatan; ?> </td></tr>
</table>
<p>Dengan batas &ndash; batas dan ukuran :</p>
<table width="100%">
  <tr>
    <td width="10%">&nbsp;</td>
    <td width="26%">Sebelah Utara </td>
    <td width="64%">: <?php echo $batas_utara; ?> </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Sebelah Selatan</td>
    <td>: <?php echo $batas_selatan; ?> </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Sebelah Barat</td>
    <td>: <?php echo $batas_barat; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Sebelah Timur </td>
    <td>: <?php echo $batas_timur; ?></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>Tanah <?php echo  $jenis_tanah; ?> tersebut saya peroleh dari <?php echo $status_perolehan_tanah; ?> pada tahun <?php echo $diperoleh_sejak; ?> yang terletak di <?php echo $alamat_tanah; ?>,yang sampai saat ini saya kuasai terus menerus dan tidak dijadikan jaminan suatu hutang dan tidak dalam keadaan sengketa dengan dikuatkan oleh saksi &ndash;saksi :</p>
<table width="100%">
  <tr>
    <td width="10%" align="right">1. </td>
    <td width="26%">Nama </td>
    <td width="64%">: <?php echo $saksi1_nama; ?> </td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>Tempat/tgl lahir(umur) </td>
    <td>: <?php echo $saksi1_tmp_lahir . ", ".$saksi1_tgl_lahir; ?> (<?php echo $saksi1_umur; ?> Tahun ) </td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>Pekerjaan</td>
    <td>: <?php echo $saksi1_pekerjaan; ?></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>Alamat</td>
    <td>: <?php echo $saksi1_alamat; ?></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
 <tr>
    <td width="10%" align="right">2. </td>
    <td width="26%">Nama </td>
    <td width="64%">: <?php echo $saksi2_nama; ?> </td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>Tempat/tgl lahir(umur) </td>
    <td>: <?php echo $saksi2_tmp_lahir . ", ".$saksi2_tgl_lahir; ?> (<?php echo $saksi2_umur; ?> Tahun) </td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>Pekerjaan</td>
    <td>: <?php echo $saksi2_pekerjaan; ?></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>Alamat</td>
    <td>: <?php echo $saksi2_alamat; ?></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>Dan sampai sekarang pada waktu keterangan ini dibuat masih tetap 
atas namanya dan tidak menjadi perselisihan / sengketa 
dengan pihak lain baik mengenai hak maupun batas - batasnya.</p>
Dengan batasan - batasan : <br>
<table width="100%">
<tr>
  <td width="10%" class="label">&nbsp;</td>
  <td width="26%" class="label">Selatan </td><td width="64%">: <?php echo $batas_selatan; ?> </td></tr>
      <tr>
        <td>&nbsp;</td>
        <td>Utara </td><td>: <?php echo $batas_utara; ?> </td></tr>
      <tr>
        <td>&nbsp;</td>
        <td>Barat </td><td>: <?php echo $batas_barat; ?> </td></tr>
      <tr>
        <td>&nbsp;</td>
        <td>Timur </td><td>: <?php echo $batas_timur; ?> </td></tr>
      
</table>
 
<p><br />
 

  <br>
Demikian surat pernyataan ini saya buat dengan sebenar benarnya dan penuh tanggung jawab dan apabila pernyataan ini tidak benar,saya besedia dituntut dihadapan pihak berwenang. </p>
<p><br />
  <br />
  <?php  if($desa2->bentuk_lembaga=="Kelurahan")  {  ?>
</p>
<table width="100%" border="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left"><?php echo ucwords(strtolower($desa2->desa.", ". tgl_indo(flipdate($tanggal)) )); ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">Yang Membuat Pernyataan </td>
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
    <td align="left"><u><?php echo $nama; ?></u></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">Megetahui : </td>
  </tr>
  <tr>
    <td width="57%"> : </td>
    <td width="4%" align="left">&nbsp;</td>
    <td width="39%" align="left">&nbsp;</td>
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
   <td width="50%">&nbsp;</td>
    <td width="3%">&nbsp;</td>
    <td width="47%" align="center"><?php echo ucwords(strtolower($desa2->desa.", ". tgl_indo(flipdate($tanggal)) )); ?></td>
  </tr>
  <tr>
    <td align="center"><strong>Saksi - Saksi : </strong></td>
    <td>&nbsp;</td>
    <td align="center">Yang Membuat Pernyataan </td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">1. ..............................................</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">2. ..............................................</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td width="50%" align="center">&nbsp;</td>
    <td width="3%">&nbsp;</td>
    <td width="47%" align="center"><u><?php echo $nama; ?></u></td>
  </tr>
    <tr>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <?php 
    if($ttd <> "kepala") {  ?>
 
 
  <tr>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center"> a.n. KEPALA DESA <?php echo $desa2->desa; ?></td>
  </tr>
  <?php } ?>
  <tr>
    <td align="center">Mengetahui : </td>
    <td>&nbsp;</td>
    <td align="center"><?php echo ucwords(strtolower($ttd_jabatan." ".$desa2->desa)) ?></td>
  </tr>
  <tr>
    <td align="center">Ketua RT </td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">..............................................</td>
    <td>&nbsp;</td>
    <td align="center"><u><?php echo $ttd_nama; ?></u></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><?php if($ttd == "sek") {  
  ?>
        <table width="100%" border="0" cellpadding="0">
          <tr>
            <td align="center"><?php if(empty($desa2->pangkat_sek_desa)) 
                                    echo '';
                                 else
                                   echo 'PANGKAT. ', ($desa2->pangkat_sek_desa);?></td>
          </tr>
          <tr>
            <td align="center"><?php if(empty($nip)) 
                  echo '';
                else
                  echo 'NIP. ', ($nip);?></td>
          </tr>
        </table>
      <?php }  ?></td>
  </tr>
</table>
<?php }  ?>
</body>

</html>