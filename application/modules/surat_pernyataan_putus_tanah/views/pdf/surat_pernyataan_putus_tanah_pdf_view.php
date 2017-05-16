<html>
	<head>
		<title>
			<?php echo   $title; ?>
		</title>
<style>
*{
	font-size:10px;
}
</style>
 
 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/print_style.css">
		</head>

<body>
	<?php 
	$desa2 = $this->cm->data_desa();

	?>

 
<?php //$this->load->view("kop_surat"); ?>

<p align="center"><b> 
<center>
		<span id="judulsurat">SURAT PERNYATAAN PUTUS TANAH </span><br />
     	<span id="nomor_surat">No : <?php echo $no_surat ?> </span>
<br /></center></b></p>
<p align="justify">Yang bertanda tangan di bawah ini,   <?php echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lurah  ":" Kepala Desa  "; ?><?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?> menerangkan bahwa : </p>
<table width="100%" border="0">
  <tr>
    <td width="10%">&nbsp;</td>
    <td width="16%"><span class="label">Nama Lengkap</span></td>
    <td width="74%">: <?php echo $nama; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="label">Umur</span></td>
    <td>: <?php echo $umur; ?> tahun </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="label">Pekerjaan</span></td>
    <td>: <?php echo $pekerjaan; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="label">Alamat</span></td>
    <td>: <?php echo $alamat; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="label">No. KTP </span></td>
    <td>: <?php echo $nik; ?></td>
  </tr>
</table>
<p>Bahwa Sdr. <?php echo $pemilik_nama2 ?> benar memiliki / menguasai sebidang tanah yang terletak di <?php echo $alamat_tanah ?> RT <?php echo $rt_tanah  ?> <?php  if($id_dusun_tanah <> "") {  echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lingkungan ":" Dusun "; echo $id_dusun_tanah; }  ?> <!-- <?php echo ucwords(strtolower($id_dusun_tanah." ". $desa2->bentuk_lembaga." ". $desa2->desa)); ?> --> yang digarap sejak tahun <?php echo $tahun_tanah ?> dan sampai saat ini, belum pernah dibuatkan surat garapan  / penguasaan lahannya. </p>
<p>Dengan ukuran sebagai berikut : </p>
<table width="100%" border="0">
  <tr>
    <td width="10%">&nbsp;</td>
    <td width="10%">Panjang</td>
    <td width="17%">:<?php echo $panjang ?> Meter </td>
    <td width="12%">Luas </td>
    <td width="61%">: <?php echo ($panjang * $lebar) ?> Meter</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Lebar</td>
    <td>:<?php echo $lebar ?> Meter</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table><br>Batas - batas :  <br>
<br>

<table width="100%" border="0">
  <tr>
    <td width="10%">&nbsp;</td>
    <td width="38%">Ukuran</td>
    <td width="52%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Panjang</td>
    <td>: <?php echo $panjang ?> Meter</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Lebar </td>
    <td>:  <?php echo $lebar ?> Meter </td>
  </tr>
  <tr>
    <td colspan="3"><br>
      <br>
    Dengan saksi - saksi batas sebagai berikut : </td>
  </tr>
   <tr>
     <td>&nbsp;</td>
    <td>Sebelah Utara berbatasan dengan </td>
    <td>: <?php echo $batas_utara ?></td>
  </tr>
   <tr>
     <td>&nbsp;</td>
     <td>Sebelah Timur berbatasan dengan </td>
     <td>: <?php echo $batas_timur; ?></td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td>Sebelah Selatan berbatasan dengan </td>
     <td>: <?php echo $batas_selatan; ?></td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td>Sebelah Barat berbatasan dengan </td>
     <td>: <?php echo $batas_barat; ?></td>
   </tr>
</table>
<p>Apabila dikemudian hari saya terbukti memberi keterangan yang tidak benar, maka saya bersedia dituntut di muka hukum dan bersedia dikenakan sanksi hukum yang berlaku tanpa melibatkan pihak pemerintah. </p>
<p>Demikian surat pernyataan ini saya buat dengan sebenar - benarnya agar dapat dipergunakan sebagaimana mestinya. </p>
<p>&nbsp;</p>
<table width="100%" border="0">
  <tr>
    <td width="64%"></td>
    <td width="36%">  </td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td align="center"><?php echo $desa2->desa.", ". flipdate($tanggal); ?></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td align="center">Yang membuat pernyataan </td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td align="center"><?php echo $nama; ?></td>
  </tr>
</table>
  
Para Saksi <br>

<table width="100%" border="0">
<tr>
	    <td width="2%">1.</td>
	    <td width="21%"><?php echo $saksi_1; ?> </td>
	    <td width="25%">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; )</td>
	    <td width="2%">3.</td>
	    <td width="26%"><?php echo $saksi_3; ?></td>
	    <td width="24%">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; )</td>
  </tr>
	  <tr>
	    <td>2</td>
	    <td><?php echo $saksi_2; ?></td>
	    <td>(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; )</td>
	    <td>4.</td>
	    <td><?php echo $saksi_4; ?></td>
	    <td>(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; )</td>
      </tr>
</table><br>
<br>
<?php  if($desa2->bentuk_lembaga=="Kelurahan")  {  ?>
<table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="57%">&nbsp;</td>
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
        <td align="left">NIP. <?php echo  $nip; ?></td>
      </tr>
    </table></td>
  </tr>
</table>
<?php }  else { ?>
<table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="61%">&nbsp;</td>
    <td width="4%">&nbsp;</td>
    <td width="35%" align="left">&nbsp;</td>
  </tr>
  <?php 
		if($ttd <> "kepala") {  ?>
  <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">a.n KEPALA DESA </td>
  </tr>
  <?php } ?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><?php echo strtoupper($ttd_jabatan) ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
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
    <td align="center"><u><?php echo $ttd_nama; ?></u></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><?php if($ttd == "sek") {  ?><table width="100%" border="0" cellpadding="0">
        
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
<p>&nbsp;</p>
</body>

</html>

