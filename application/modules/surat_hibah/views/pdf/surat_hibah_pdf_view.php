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
        <td align="center"><b>SURAT KETERANGAN HIBAH </b></td>
     </tr>
    
      <tr>
        <td align="center"><hr></td>
     </tr>
</table>
<p>Yang bertanda tangan dibawah ini, Menerangkan dengan sebenarnya bahwa :
</p>
<table width="100%" cellpadding="1">
	<tr>
        <td width="10%" >&nbsp;</td>
        <td width="20%" >Nama </td>
        <td width="70%">: <?php echo $nama_1; ?> </td>
  </tr>
    <!--   <tr>
        <td >&nbsp;</td>
        <td >No. KTP / NIK </td>
        <td>: <?php echo $nik_1; ?> </td>
      </tr> -->
      <tr>
        <td >&nbsp;</td>
        <td >Tempat, Tgl lahir </td>
        <td>: <?php echo $tempat_lahir_1; ?>, <?php echo ($tanggal_lahir_1); ?> </td>
      </tr>
     <!--  <tr>
        <td >&nbsp;</td>
        <td >Kewarganegaraan</td>
        <td>: <?php echo $warga_negara_1; ?></td>
      </tr> -->
      
      <tr>
        <td >&nbsp;</td>
        <td >Pekerjaan </td>
        <td>: <?php echo $pekerjaan_1; ?> </td>
      </tr>

          <tr>
        <td >&nbsp;</td>
        <td >Jenis Kelamin </td>
        <td>: <?php echo $jk_1; ?> </td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >Alamat </td>
        <td>: <?php echo $alamat_1; ?></td>
      </tr>
      
     
</table>
  
 

 
    <p>Selaku Pemilik Lahan <strong>“SELANJUTNYA DISEBUT PIHAK PERTAMA“</strong> Atas persetujuan istri/anak sebagai berikut:
 </p>
 <table width="100%" cellpadding="1">
  <tr>
        <td width="10%" >&nbsp;</td>
        <td width="20%" >Nama </td>
        <td width="70%">: <?php echo $nama; ?> </td>
  </tr>
    
      <tr>
        <td >&nbsp;</td>
        <td >Tempat, Tgl lahir </td>
        <td>: <?php echo $tempat_lahir; ?>, <?php echo flipdate($tanggal_lahir); ?> </td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >Pekerjaan </td>
        <td>: <?php echo $pekerjaan; ?> </td>
      </tr>
       <tr>
        <td >&nbsp;</td>
        <td >Jenis Kelamin </td>
        <td>: <?php echo $jk; ?></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >Alamat </td>
        <td>: <?php echo $alamat; ?></td>
      </tr>
      
     
</table>
<p>Benar memiliki lahan Pekarangan seluas <?php echo $luas; ?> yang terletak di <?php echo $alamat_tanah; ?> dan selanjutnya dihibahkan kepada <br>
<strong>“SELANJUTNYA DISEBUT PIHAK KEDUA“</strong> yaitu :

</p>


     <table width="100%" cellpadding="1">
	<tr>
        <td width="10%" >&nbsp;</td>
        <td width="20%" >Nama </td>
        <td width="70%">: <?php echo $nama_2; ?> </td>
  </tr>
   
      <tr>
        <td >&nbsp;</td>
        <td >Tempat, Tgl lahir </td>
        <td>: <?php echo $tempat_lahir_2; ?>, <?php echo ($tanggal_lahir_2); ?> </td>
      </tr>
     
      <tr>
        <td >&nbsp;</td>
        <td >Pekerjaan </td>
        <td>: <?php echo $pekerjaan_2; ?> </td>
      </tr>
       <tr>
        <td >&nbsp;</td>
        <td >Jenis Kelamin</td>
        <td>: <?php echo $jk_2; ?></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >Alamat </td>
        <td>: <?php echo $alamat_2; ?></td>
      </tr>
      
     
</table>
    <p>Adapun batas-batas tanah tersebut sebagai berikut  :</p>
    <table width="100%" cellpadding="1">
      <tr>
        <td width="10%" >&nbsp;</td>
        <td width="31%" >Sebelah Utara berbatas dengan</td>
        <td width="59%">: <?php echo $batas_utara; ?> </td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >Sebelah Selatan berbatas dengan</td>
        <td>: <?php echo $batas_selatan; ?> </td>
      </tr>
	   <tr>
        <td >&nbsp;</td>
        <td >Sebelah Barat berbatas dengan</td>
        <td>: <?php echo $batas_barat; ?> </td>
      </tr>
	   <tr>
        <td >&nbsp;</td>
        <td >Sebelah Timur berbatas dengan</td>
        <td>: <?php echo $batas_timur; ?> </td>
      </tr>
 <br>Demikian surat keterangan hibah ini kami buat bersama tanpa ada paksaan dan tekanan dari pihak mana lain dan untuk dipergunakan sebagaimana mestinya
      <br><br>
	  <table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="70%">&nbsp;</td>
    <td width="60%"> <?php echo $desa2->desa.", ". flipdate($tanggal); ?>;</td>
    
  </tr>
  </table>
  <br><br>
    
  <table width="100%">
      <tr>
        
        <td width="50%" align="center" ><strong>PIHAK PERTAMA</strong></td>
        <td width="40%" align="center"><strong>PIHAK KEDUA</strong> </td>
      </tr>
	  
   
    <br><br><br>
      <tr>
         <td width="50%" align="center" ><b><?php echo $nama_1; ?></b></td>
        <td width="40%" align="center"><b><?php echo $nama_2; ?></b> </td>
      </tr>
      
    </table>
	
	
  <br> <br>
     
	  
      <tr>
         <td width="95%" align="center" ><b>SAKSI SAKSI</b></td>
		
       
      </tr>
	  
      
    </table>
	<br><br><br>
	<table width="100%" border="0">
      <tr>
        <td>1. <b><?php echo $saksi_1; ?></b></td>
        <td>(.........................................)</td>
        <td>2. <b><?php echo $saksi_1; ?></b></td>
        <td>(.........................................)</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>3. <b><?php echo $saksi_3; ?></b></td>
        <td>(.........................................)</td>
        <td>4. <b><?php echo $saksi_4; ?></b></td>
        <td>(.........................................)</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
	<br><br><br>
   
<br>

 
    <br><br><br>
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
 </table>
    
<?php }  else { ?>
<table width="95%" border="0" cellpadding="0">
  <?php 
		if($ttd <> "kepala") {  ?> 
  <tr>
    <td align="center"></td>
  </tr>
  <tr>
    <td width="99%" align="left"> <div align="center">an : KEPALA DESA </div></td>
  </tr> <?php } ?>
  <tr>
    <td align="center"> <?php echo strtoupper($ttd_jabatan) ?></td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left"><div align="center"><u><?php echo $ttd_nama; ?></u></div></td>
  </tr>
  <tr>
    <td align="center">
      <?php if($ttd == "sek") {  ?>
   
      <table width="100%" border="0" cellpadding="0">
      
        <tr>
          <td align="center"><?php if(empty($nip)) 
                  echo '';
                else
                  echo 'NIP. ', ($nip);?></td>
        </tr>
    </table>      
      
        <?php }  ?>    </td>
  </tr>
</table>
<?php }  ?>
<!-- </div> end of wrap -->
</body>

</html>