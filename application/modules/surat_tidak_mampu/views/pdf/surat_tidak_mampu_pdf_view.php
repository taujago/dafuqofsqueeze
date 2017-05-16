<html>
	<head>
		<title>
			<?php echo   $title; ?>
		</title>

 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/print_style.css"></head>

<body>
	<?php 
	$desa2 = $this->cm->data_desa();

	?>

 <?php 
 $this->load->view("kop_surat");
 ?>
 <div align="center">
  <b> 
  <font size="11"><u>SURAT KETERANGAN TIDAK MAMPU (SKTM)</u> </font><br />
  <font size="10"> No : <?php echo $no_surat ?></font> </b>
  </div>  
<p>Yang bertanda tangan di bawah ini  
<?php echo ucwords(strtolower(($this->bentuk_lembaga=="Kelurahan")?"LURAH ". $desa2->desa : "Kepala ". $desa2->bentuk_lembaga. " ".$desa2->desa. " Kecamatan ".$desa2->kecamatan ." ".$desa2->kota))  ?> menerangkan bahwa  :</p>
<table width="100%" border="0">
  <tr>
    <td width="12%">&nbsp;</td>
    <td width="17%">Nama</td>
    <td width="71%">: <?php echo $nama; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Tanggal Lahir </td>
    <td>: <font size="10px"><?php echo $tgl_lahir; ?></font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Jenis Kelamin </td>
    <td>: <font size="10px"><?php echo $jk; ?></font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Pekerjaan</td>
    <td>: <font size="10px"> - <!-- <?php echo $pekerjaan; ?> --></font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Agama</td>
    <td>: <font size="10px"><?php echo $agama; ?></font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Alamat</td>
    <td>: <font size="10px"><?php echo $alamat; ?></font></td>
  </tr>
</table>
<p>Bahwa  benar nama tersebut diatas berasal dari <strong>Keluarga  Kurang mampu ( Miskin )</strong>, oleh karena itu mohon Kebijaksanaannya untuk  dibantu.</p>
<div align="center"><strong>DAFTAR</strong> <strong>KELUARGA</strong> <br>
</div>
<table width="100%" border="1" cellpadding="2"   class="tabel"  >
  <tr>
    <th width="11%" align="center" scope="col"><strong>No.</strong></th>
    <th width="37%" align="center" scope="col"><strong>Nama</strong></th>
    <th width="19%" align="center" scope="col"><strong>Status</strong></th>
    <th width="9%" align="center" scope="col"><strong>Umur</strong></th>
    <th width="24%" align="center" scope="col"><strong>Pekerjaan</strong></th>
    
  </tr>
  
  
 <?php 
 $sisa =3;
 $n=0;
 if($record->num_rows() > 0 ) {	
	$baris = 3;
	$arr_hubungan = $this->cm->arr_hubungan;
	$i=0;
	foreach($record->result() as $row) :
 	$n++;
	$sisa--;
 ?>
  <tr>
   <td align="center"><font size="10px"><?php echo $n; ?></font></td>
    <td><font size="10px"> <?php echo $row->nama; ?></font></td>
    <td><font size="10px"><?php echo $row->hubungan_pengikut ?></font></td>
    <td><font size="10px"> <?php echo $row->umur ?> tahun </font></td>
   
    <td><font size="10px"> <?php echo $row->pekerjaan ?></font></td>
   
  </tr>
  <?php endforeach;
     
 }
 for($i=0; $i<$sisa; $i++) :  
 $n++;
 ?>
    <tr>
    <td align="center"><font size="10px"><?php echo $n; ?></font></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    
  </tr>
 <?php endfor; ?> 
</table>
<p>&nbsp;</p>

<p>Demikian  Surat Keterangan ini dibuat dengan benar, dan untuk dipergunakan dimana  perlunya.</p>
<p>
  <?php  if($desa2->bentuk_lembaga=="Kelurahan")  {  ?>
</p>
<table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="50%" align="left" valign="top">
    <?php if($ttd_camat == 1 ) {  ?>
    <table width="100%" border="0" cellpadding="0">
      <tr>
        <td align="center">MENGETAHUI, </td>
      </tr>
      <tr>
        <td align="center">CAMAT <?php echo $desa2->kecamatan ?></td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center"><u><?php echo $desa2->nama_camat; ?></u></td>
      </tr>
      <tr>
        <td align="center"><table width="100%" border="0" cellpadding="0">
          <tr>
            <td align="center">PANGKAT:<?php echo $desa2->pangkat_camat; ?></td>
            </tr>
          <tr>
            <td align="center">NIP. <?php echo $desa2->nip_camat; ?>            </td>
            </tr>
        </table></td>
      </tr>
    </table> 
    <?php } ?>  </td>
    <td width="50%" align="center" valign="top"><table width="100%" border="0" cellpadding="0">
      <tr>
        <td width="9%" align="center">&nbsp;</td>
        <td width="91%" align="center"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal)); ?></td>
      </tr>
      <?php 
		if($ttd <> "kepala") {  ?>
      <tr>
        <td align="center">a.n. </td>
        <td align="center">LURAH </td>
      </tr>
      <?php } ?>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center"><?php echo strtoupper($ttd_jabatan) ; ?></td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
      <?php 
		if($ttd ==  "kepala") {  ?>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
      <?php } ?>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center"><u><?php echo $ttd_nama; ?></u></td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center"><table width="100%" border="0" cellpadding="0">
         
          <tr>
            <td align="center">NIP. <?php echo  $nip; ?></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<?php }  else { ?>
<table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="50%" align="center" valign="top"><?php if($ttd_camat == 1 ) {  ?>
    <table width="100%" border="0" cellpadding="0">
      <tr>
        <td align="center">MENGETAHUI, </td>
      </tr>
      <tr>
        <td align="center">CAMAT <?php echo $desa2->kecamatan ?></td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center"><u><?php echo $desa2->nama_camat; ?></u></td>
      </tr>
      <tr>
        <td align="center"><table width="100%" border="0" cellpadding="0">
          <tr>
            <td align="center">PANGKAT:<?php echo $desa2->pangkat_camat; ?></td>
            </tr>
          <tr>
            <td align="center">NIP. <?php echo $desa2->nip_camat; ?></td>
            </tr>
        </table></td>
      </tr>
    </table> 
    <?php } ?></td>
    <td width="50%" align="center" valign="top"><table width="100%" border="0" cellpadding="0">
      <tr>
        <td width="9%" align="center">&nbsp;</td>
        <td width="91%" align="center"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal)); ?></td>
      </tr>
      <?php 
		if($ttd <> "kepala") {  ?>
      <tr>
        <td align="center">a.n. </td>
        <td align="center">KEPALA DESA </td>
      </tr>
      <?php } ?>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center"><?php echo strtoupper($ttd_jabatan) ; ?></td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
      <?php 
		if($ttd ==  "kepala") {  ?>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
      <?php } ?>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center"><u><?php echo $ttd_nama; ?></u></td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center"><?php if($ttd == "sek") {  ?><table width="100%" border="0" cellpadding="0">
           
            <tr>
              <td align="center">NIP. <?php echo  $nip; ?></td>
            </tr>
          </table>          <?php } ?> </td>
      </tr>
    </table></td>
  </tr>
</table>
<?php }  ?>
<br />
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><br />
</p>
</body>

</html>