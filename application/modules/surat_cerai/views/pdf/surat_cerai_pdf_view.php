<html>
	<head>
		<title>
			<?php echo   $title; ?>
		</title>

   <style>
* {
	font-size:7px;
}
p {
	margin:0px;
}
</style> 

		</head>

<body>
	<?php 
	$desa2 = $this->cm->data_desa();

	?>

 
<?php
$this->load->view("kop_surat");
?><div align="center">
  <b> 
  <font size="11"><u>SURAT KETERANGAN CERAI</u> </font><br />
  <font size="10">&nbsp;&nbsp;&nbsp;No : <?php echo $no_surat ?></font> </b>
  </div>
<p align="justify">Yang bertanda tangan di bawah ini,   <?php echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lurah  ":" Kepala Desa  "; ?><?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?> menerangkan bahwa : </p>
 
<table width="100%">
   <tr>
     <td width="10%"  >&nbsp;</td>
 		    <td width="16%"  >Nama </td>
 		    <td width="74%">: <?php echo $laki_nama; ?></td>
   </tr>
 		  <tr>
 		    <td >&nbsp;</td>
 		    <td >Tempat, Tgl lahir </td>
 		    <td>: <?php echo $laki_tmp_lahir . ", ".$laki_tgl_lahir; ?></td>
	      </tr>
 		  <tr>
 		    <td >&nbsp;</td>
 		    <td >Jenis kelamin </td>
 		    <td>: <?php echo $this->cm->jk($laki_jk); ?></td>
	      </tr>
 		  <tr>
 		    <td >&nbsp;</td>
 		    <td >Agama </td>
 		    <td>: <?php echo $laki_agama; ?></td>
	      </tr>
 		  <!--			<tr><td  >Pekerjaan </td><td>: <?php echo $laki_pekerjaan; ?> </td></tr>
-->
 		  <tr>
 		    <td  >&nbsp;</td>
 		    <td  >Alamat </td>
 		    <td>: <?php echo $laki_alamat. " Rt $laki_rt Rw $laki_rw "; 
        if($laki_dusun <> "") { 
			echo ($desa2->bentuk_lembaga == "Kelurahan")?" Lingkungan ":" Dusun ";
			echo $laki_dusun;  } 
			?></td>




	      </tr>
 		  <tr>
 		    <td class="label">&nbsp;</td>
 		    <td class="label">No. KTP / NIK </td>
 		    <td>: <?php echo $laki_nik; ?></td>
	      </tr>
</table><br>
Yang selanjutnya disebut sebagai PIHAK PERTAMA<br>SELANJUTNYA <br>
<table width="100%">
			<tr>
			  <td width="11%"  >&nbsp;</td>
		    <td width="15%"  >Nama </td><td width="74%">: <?php echo $perempuan_nama; ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Tempat, Tgl lahir </td><td>: <?php echo $perempuan_tmp_lahir . ", ".$perempuan_tgl_lahir; ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Jenis kelamin </td><td>:  <?php echo $this->cm->jk($perempuan_jk); ?></td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Agama </td><td>: <?php echo $perempuan_agama; ?> </td></tr>
<!--			<tr><td  >Pekerjaan </td><td>: <?php echo $perempuan_pekerjaan; ?> </td></tr>
-->			<tr>
  <td  >&nbsp;</td>
  <td  >Alamat </td><td>:  <?php echo $perempuan_alamat. " Rt $perempuan_rt Rw $perempuan_rw "; 
    if($perempuan_dusun <> "") { 
			echo ($desa2->bentuk_lembaga == "Kelurahan")?" Lingkungan ":" Dusun ";
			echo $perempuan_dusun; }
			?></td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
		    <td class="label">No. KTP / NIK </td><td>: <?php echo $perempuan_nik; ?> </td></tr>
</table>
	   <div align="justify">Yang selanjutnya disebut sebagai PIHAK KEDUA <br>

         <br>Menerangkan dengan sebenarnya bahwa kami kedua belah pihak yang 
tersebut diatas, sudah sama - sama sepakat untuk saling membersihkan diri atas
 hubungan suami istri  (cerai) melalui jalan musyawarah yang juga telah disetujui oleh 	
 kedua rumpun. <br>
 <br>
Bahwa diantara kami kedua belah pihak sudah tidak ada lagi saling kecocokan dan sudah tidak hidup dalam satu rumah lagi sejak beberapa bulan terakhir.<br>
<br>
Kami kedua belah pihak sepakat untuk tidak saling menghalangi apabila dikemudian hari kami sama - sama menemukan jodoh untuk mengadakan perkawinan kembali. 
 <br>
 <br>
Demikianlah surat keterangan ini dibuat dan diberikan kepada yang berkepentingan. Surat pernyataan ini kami buat dalam keadaan 
 	sehat jasmani dan rohani serta ikhlas dalam membuat kesepakatan ini tanpa ada bujukan ataupun paksaan dari siapapun juga. <br>

    
  
    <!--<table width="100%" border=0>
<tr>
  <td>dfd</td><td align="center"><?php echo $desa2->
    desa.", ". flipdate($tanggal); ?> 
    </td>
       </div>
<tr><td aligh="center" valign="top" width="50%"><div align="justify"> 
	     
      PIHAK KEDUA <br />
      <br />
      <br />
      <br /> 
      <?php echo $perempuan_nama; ?>
	     
       </div></td>
	<td aligh="center" valign="top" width="50%"> 
	 PIHAK PERTAMA <br /><br /><br /><br /><?php echo $laki_nama; ?>
  </td>

	
</tr>
</table>-->


<table width="100%" border="0" cellpadding="3">
  <tr>
    <td width="46%" align="left">&nbsp;</td>
    <td width="54%" align="center"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal)); ?></td>
  </tr>
  
  <tr>
    <td align="left"><div align="center">PIHAK PERTAMA <br /> 
        <br />
        <br />
        <br />
        <br />
    <u><?php echo $laki_nama; ?></u></div></td>
    <td align="left"><div align="center">PIHAK KEDUA <br /> 
        <br />
        <br /> 
        <br>
        <br>
	    <u><?php echo $perempuan_nama; ?></u></div></td>
  </tr>
</table>

<?php  if($desa2->bentuk_lembaga=="Kelurahan")  {  ?>
<table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="57%">&nbsp;</td>
    <td width="4%" align="left">&nbsp;</td>
    <td width="39%" align="left"><?php // echo $desa2->desa.", ". tgl_indo(flipdate($tanggal)); ?></td>
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
    <td width="43%">&nbsp;</td>
    <td width="4%">&nbsp;</td>
    <td width="53%" align="left"><?php //echo $desa2->desa.", ". flipdate($tanggal); ?></td>
  </tr>
  <?php 
		if($ttd <> "kepala") {  ?>
  <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">a.n. KEPALA DESA </td>
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
    <td align="center"><u><?php echo $ttd_nama; ?></u></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><?php if($ttd == "sek") {  
	?><table width="100%" border="0" cellpadding="0">
        
        <tr>
          <td align="center">NIP. <?php echo  $nip; ?></td>
        </tr>
    </table>      <?php }  ?></td>
  </tr>
</table>
<?php }  ?>
</body>

</html>