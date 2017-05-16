<html>
	<head>
		<title>
			SURAT IJIN ORANGTUA KE LUAR NEGERI
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
  <font size="11"><u>SURAT IZIN ORANG TUA KELUAR NEGERI</u> </font><br />
  <font size="10"> No : <?php echo $no_surat ?></font> </b>
</div>  

<p align="justify">Yang bertanda tangan di bawah ini,   <?php echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lurah  ":" Kepala Desa  "; ?><?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?> menerangkan bahwa : </p>
 
		<table width="100%">
			<tr>
			  <td width="10%">&nbsp;</td>
		    <td width="28%">Nama </td><td width="62%">: <?php echo $ayah_nama; ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Tempat, Tgl lahir </td><td>: <?php echo $ayah_tmp_lahir . ", ".$ayah_tgl_lahir; ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Jenis kelamin </td><td>:  <?php echo $this->cm->jk($ayah_jk); ?></td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Agama </td><td>: <?php echo $ayah_agama; ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Pekerjaan </td><td>: <?php echo $ayah_pekerjaan; ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Alamat </td><td>: <?php echo $ayah_alamat. "  Rt $ayah_rt Rw $ayah_rw "; 
			 if($dusun <> "") { 
      
      echo ($desa2->bentuk_lembaga == "Kelurahan")?" Lingkungan ":" Dusun ";
      echo $dusun; 
      } ?></td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >No. KTP / NIK </td><td>: <?php echo $ayah_nik; ?> </td></tr>
		</table>
 
 
 

 <p>&nbsp;
</p>
		<table width="100%">
			<tr>
			  <td width="10%" >&nbsp;</td>
		    <td width="28%" >Nama </td><td width="62%">: <?php echo $ibu_nama; ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Tempat, Tgl lahir </td><td>: <?php echo $ibu_tmp_lahir . ", ".$ibu_tgl_lahir; ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Jenis kelamin </td><td>:  <?php echo $this->cm->jk($ibu_jk); ?></td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Agama </td><td>: <?php echo $ibu_agama; ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Pekerjaan </td><td>: <?php echo $ibu_pekerjaan; ?> </td></tr>
			<tr>
			  <td>&nbsp;</td>
		    <td>Alamat </td><td>: <?php echo $ibu_alamat. "  Rt $ibu_rt Rw $ibu_rw "; 
			 if($dusun <> "") { 
      
      echo ($desa2->bentuk_lembaga == "Kelurahan")?" Lingkungan ":" Dusun ";
      echo $dusun; 
      }  ?></td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >No. KTP / NIK </td><td>: <?php echo $ibu_nik; ?> </td></tr>
		</table>
 

<p>Menyatakan dengan sebenarnya tidak keberatan dan memberikan izin kepada anak kami yang bernama:
</p>
 
		<table width="100%">
			<tr>
			  <td width="10%">&nbsp;</td>
		    <td width="28%">Nama </td><td width="62%">: <?php echo $nama; ?> </td></tr>
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
		    <td>Alamat </td><td>: <?php echo $alamat. "  Rt $rt Rw $rw "; 
			 if($dusun <> "") { 
      
      echo ($desa2->bentuk_lembaga == "Kelurahan")?" Lingkungan ":" Dusun ";
      echo $dusun; 
      }  ?></td></tr>
			<tr>
			  <td>&nbsp;</td>
		    <td>No. KTP / NIK </td><td>: <?php echo $nik; ?> </td></tr>
		</table>
 
<p>
Demikian surat izin ini kami buat dengan sebenarnya tanpa ada paksaan dan tekanan dari siapapun juga.
</p>	
 
 

<table width="100%" border=0 >

<tr>
  <td align="center" valign="top" aligh="center">&nbsp;</td>
  <td align="center" valign="top" aligh="center"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal)); ?></td>
</tr>
<tr>
  <td align="center" valign="top" aligh="center">Yang Memberi Izin </td>
  <td align="center" valign="top" aligh="center">Yang Memberi Izin</td>
</tr>
<tr>
  <td align="center" valign="top" aligh="center">&nbsp;</td>
  <td align="center" valign="top" aligh="center">&nbsp;</td>
</tr>
<tr>
  <td align="center" valign="top" aligh="center">&nbsp;</td>
  <td align="center" valign="top" aligh="center">&nbsp;</td>
</tr>
<tr>
  <td align="center" valign="top" aligh="center">&nbsp;</td>
  <td align="center" valign="top" aligh="center">&nbsp;</td>
</tr>
<tr>
  <td align="center" valign="top" aligh="center"><u><?php echo $ibu_nama; ?></u></td>
  <td align="center" valign="top" aligh="center"><u><?php echo $ayah_nama; ?></u></td>
</tr>
</table>
 

<br />
<?php  if($desa2->bentuk_lembaga=="Kelurahan")  {  ?>
<table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="57%">&nbsp;</td>
    <td width="4%" align="left">&nbsp;</td>
    <td width="39%" align="left">MENGETAHUI, </td>
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
    <td width="46%">&nbsp;</td>
    <td width="6%">&nbsp;</td>
    <td width="48%" align="left">&nbsp;</td>
  </tr>
  <?php 
		if($ttd <> "kepala") {  ?>
  <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center"> a.n. KEPALA DESA </td>
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
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
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
<br /><br /><br />
<br /> <br /><br />

<!-- </div> end of wrap -->
</body>

</html>