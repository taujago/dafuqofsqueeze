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
.judul {
	font-weight:bold;
}

#kop {
	text-align:center;
	
}

</style> 

		</head>

<body>
<?php 
$desa2 = $this->cm->data_desa(); 
$this->load->view("kop_surat");
?>
 
 
<p id="kop" align="center"> 
<b> 
<span id="judul">SURAT KETERANGAN KELAKUAN BAIK </span><br />  
<span id="judul"> No : <?php echo $no_surat ?> </span>   </b>
</p> 




<p align="justify">Yang bertanda tangan di bawah ini,   <?php echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lurah  ":" Kepala Desa  "; ?><?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?> menerangkan bahwa : </p>
 
		<table width="100%" align="left">
			<tr>
			  <td width="10%">&nbsp;</td>
		    <td width="16%">Nama </td><td width="74%">: <?php echo $nama; ?> </td></tr>
			<tr>
			  <td>&nbsp;</td>
		    <td>Tempat, Tgl lahir </td><td>: <?php echo $tmp_lahir . ", ".$tgl_lahir; ?> </td></tr>
			<tr>
			  <td>&nbsp;</td>
		    <td>Jenis kelamin </td><td>: <?php echo $this->cm->jk($jk); ?></td></tr>
			<tr>
			  <td>&nbsp;</td>
		    <td>Agama </td><td>: <?php echo $agama; ?> </td></tr>
			<tr>
			  <td>&nbsp;</td>
		    <td>Pekerjaan </td><td>: <?php echo $pekerjaan; ?> </td></tr>
			<tr>
			  <td>&nbsp;</td>
		    <td>Alamat </td><td>: <?php echo $alamat. "  Rt $rt Rw $rw "; 
			 if($dusun <> "") { 
      
      echo ($desa2->bentuk_lembaga == "Kelurahan")?" Lingkungan ":" Dusun ";
      echo $dusun; 
      }  ?></td></tr>
			<tr>
			  <td>&nbsp;</td>
		    <td>No. KTP / NIK </td><td>: <?php echo $nik; ?> </td></tr>
 		</table>
 
  
<p align="left">Selanjutnya kami juga mengetahui bahwa orang tersebut diatas benar- benar 
  membutuhkan surat keterangan 
  kelakuan baik untuk dipakai sebagai pelengkap berkas di dalam pengurusan administrasi.<br>
  <br>Demikian surat pengantar ini dibuat dan diberikan kepada
  yang bersangkutan untuk dipergunakan sebagaimana mestinya.	<br>
  <br>
  <?php  if($desa2->bentuk_lembaga=="Kelurahan")  {  ?>
</p>
<table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="58%">Mengetahui, </td>
    <td width="42%" colspan="2" rowspan="7" align="left" valign="top"><table width="100%" border="0" cellpadding="0">
      <tr>
        <td width="9%" align="left">&nbsp;</td>
        <td width="91%" align="left"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal)); ?></td>
      </tr>
       <?php 
		if($ttd <> "kepala") {  ?> 
      <tr>
        <td align="center">a.n. </td>
        <td align="left">LURAH </td>
      </tr>
      <?php } ?> 
      <tr>
        <td align="left">&nbsp;</td>
        <td align="left"><?php echo strtoupper($ttd_jabatan) ; ?></td>
      </tr>
      
      <tr>
        <td align="left">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
      <?php 
		if($ttd ==  "kepala") {  ?> 
      <tr>
        <td align="left">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>  <?php } ?> 
      <tr>
        <td align="left">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
      <tr>
        <td align="left">&nbsp;</td>
        <td align="left"><u><?php echo $ttd_nama; ?></u></td>
      </tr>
      <tr>
        <td align="left">&nbsp;</td>
        <td align="left"><table width="100%" border="0" cellpadding="0">
         
          <tr>
            <td align="left">NIP. <?php echo  $nip; ?></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>CAMAT  <?php echo $desa2->kecamatan ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><u><?php echo $desa2->nama_camat; ?></u></td>
  </tr>
  <tr>
    <td valign="top"><table width="100%" border="0" cellpadding="0">
      <tr>
        <td align="left">PANGKAT : <?php echo $desa2->pangkat_camat; ?></td>
        </tr>
      <tr>
        <td align="left">NIP : <?php echo $desa2->nip_camat; ?></td>
        </tr>
    </table></td>
  </tr>
</table>
<?php }  else { ?>
<table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="58%">Mengetahui, </td>
    <td colspan="2" rowspan="7" align="left" valign="top"><table width="100%" border="0" cellpadding="0">
      <tr>
        <td width="9%" align="left">&nbsp;</td>
        <td width="91%" align="left"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal)); ?></td>
      </tr>
      <?php 
		if($ttd <> "kepala") {  ?>
      <tr>
        <td align="center">a.n. </td>
        <td align="left">KEPALA DESA </td>
      </tr>
      <?php } ?>
      <tr>
        <td align="left">&nbsp;</td>
        <td align="left"><?php echo strtoupper($ttd_jabatan) ; ?></td>
      </tr>
      <tr>
        <td align="left">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
      <?php 
		if($ttd ==  "kepala") {  ?>
      <tr>
        <td align="left">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
      <?php } ?>
      <tr>
        <td align="left">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
      <tr>
        <td align="left">&nbsp;</td>
        <td align="left"><u><?php echo $ttd_nama; ?></u></td>
      </tr>
      <tr>
        <td align="left">&nbsp;</td>
        <td align="left"><?php if($ttd == "sek") {  ?><table width="100%" border="0" cellpadding="0">
           
            <tr>
              <td align="left">NIP. <?php echo  $nip; ?></td>
            </tr>
          </table>          <?php }  ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>CAMAT  <?php echo $desa2->kecamatan ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><u><?php echo $desa2->nama_camat; ?></u></td>
  </tr>
  <tr>
    <td align="left" valign="top"><table width="100%" border="0" cellpadding="0">
      <tr>
        <td align="left">PANGKAT: <?php echo $desa2->pangkat_camat; ?></td>
        </tr>
      <tr>
        <td align="left">NIP. <?php echo $desa2->nip_camat; ?></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td width="23%" align="left">&nbsp;</td>
    <td width="19%" align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
</table>
<?php }  ?>
<br>
 <br>
 <br>
<!--  <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
   <tr>
     <td width="41%">DANRAMIL <?php echo strtoupper($desa2->kota) ?></td>
     <td width="21%">&nbsp;</td>
     <td width="38%">KAPOLSEK  <?php echo strtoupper($desa2->kecamatan) ?></td>
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
     <td>(________________________)</td>
     <td>&nbsp;</td>
     <td>(________________________)</td>
   </tr>
 </table> -->
 <br>
<br>
<br>
<!-- </div> end of wrap -->
</body>

</html>