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
	  <table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td><div align="right"><strong>F-1.21</strong></div></td>
  </tr>
</table>

  <div align="center">
  <b> 
  <font size="12"><u>FORMULIR PERMOHONAN KARTU TANDA PENDUDUK (KTP) WARGA NEGARA INDONESIA</u> </font></div>
</b> <br>
	<font size="10"><table width="100%">
			<tr>
			  <td class="tebal" width="37%" ><strong><font size="10px">PEMERINTAH PROPINSI</strong></font> </td>
		      <td > :
           <table width="30" border="0.5">
            <tr>
      <?php

        $arr1 = str_split($id_provinsi);
        foreach ($arr1 as $v) {
           echo "<td>&nbsp;".$v."</td>";

        }
      ?>
        
      
            </tr>
          </table>  
          </td>
		      <td width="74%"> <?php echo $provinsi; ?></td>
			</tr>
			<tr>
			  <td width="37%" ><strong><font size="10px">PEMERINTAH KABUPATEN/KOTA</strong></font></td>
		      <td> :
             <table width="30" border="0.5">
            <tr>
      <?php

        $arr1 = str_split($desa2->kode_kabupaten);
        foreach ($arr1 as $v) {
           echo "<td>&nbsp;".$v."</td>";

        }
      ?>
        
      
            </tr>
          </table>  
          </td>
		      <td> <?php echo $kota; ?> </td></tr>
			<tr>
			  <td ><strong><font size="10px">KECAMATAN</strong></font></td>
		      <td> :     <table width="30" border="0.5">
            <tr>
      <?php

        $arr1 = str_split($desa2->kode_kecamatan);
        foreach ($arr1 as $v) {
           echo "<td>&nbsp;".$v."</td>";

        }
      ?>
        
      
            </tr>
          </table></td>
	          <td> <?php echo $kecamatan; ?> </td></tr>
			<tr>
			  <td><strong><font size="10px">KELURAHAN/DESA</strong></font></td>

           
			  <td> :  <table width="60" border="0.5">
            <tr>
      <?php

        $arr1 = str_split($desa2->kode_surat);
        foreach ($arr1 as $v) {
           echo "<td>&nbsp;".$v."</td>";

        }
      ?>
        
      
            </tr>
          </table></td>
			  <td> <?php echo $desa2->desa ?> </td>
	  </tr>
			
			
</table>
	
	<table width="100%">
			
			<tr>
			  <td width="25%" >&nbsp;</td>
			  <td>&nbsp;</td>
	  </tr>
			<tr>
			  <td ><font size="12">PERMOHONAN KTP</font></td>
			  <td width="70%"><font size="12">: <?php echo $ktp; ?></font></td>
	  </tr>
			<tr>
			  <td >&nbsp;</td>
			  <td>&nbsp;</td>
	  </tr>
			<tr>
			  <td ><table width="100" border="0.5">
                <tr>
                  <td><font size="12">&nbsp;1. Nama Lengkap </font></td>
                </tr>
              </table></td>
			  <td>: <!-- <table width="100%" border="0.5">
            <tr>
      <?php

        $arr1 = str_split($nama);
        foreach ($arr1 as $v) {
           echo "<td>&nbsp;&nbsp;".$v."</td>";

        }
      ?>
            </tr>
          </table>  --><table width="346" border="0.5">
                <tr>
                  <td>&nbsp;<font size="12px"><?php echo $nama;?></font> </td>
                </tr>
              </table></td>
	  </tr>
			<br> 
		  
			<tr>
			  <td ><table width="100" border="0.5">
                  <tr>
                    <td><font size="12">&nbsp;2. No. KK </font></td>
                  </tr>
                </table></td>
		      <td>: <table width="331.5" border="0.5">
            <tr>
      <?php

        $arr1 = str_split($no_kk);
        foreach ($arr1 as $v) {
           echo "<td>&nbsp;&nbsp;".$v."</td>";

        }
      ?>
            </tr>
          </table>  </td></tr>
		  <br> 
			<tr>
			  <td ><table width="100" border="0.5">
                <tr>
                  <td><font size="12">&nbsp;3. NIK</font></td>
                </tr>
              </table></td>
		      <td>: <table width="331.5" border="0.5">
            <tr>
      <?php

        $arr1 = str_split($nik);
        foreach ($arr1 as $v) {
           echo "<td>&nbsp;&nbsp;".$v."</td>";

        }
      ?>
            </tr>
          </table> </td></tr>
		  <br> 
			<tr>
			  <td><table width="100" border="0.5">
                <tr>
                  <td><font size="12">&nbsp;4. Alamat</font></td>
                </tr>
              </table></td>
			  <td>:  
			    <table width="346" border="0.5">
                <tr>
                  <td><font size="12">&nbsp;DESA <?php echo $desa2->desa ?>, KECAMATAN <?php echo $desa2->kecamatan ?></font></td>
                </tr>
                <tr>
                  <td><font size="12">&nbsp;<?php echo $kota;
			?></font></td>
                </tr>
                
                <tr>
                  <td><font size="12"><?php echo " DUSUN ";
			echo $dusun;
			?></font></td>
                </tr>
                <tr>
                  <td><font size="12"><?php echo " RT $rt RW $rw ";
			?></font></td>
                </tr>
              </table></td>
    </tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
    </tr>
			<tr>
			  <td>&nbsp;</td>
		      <td>&nbsp;</td>
			</tr>
			
			<br>
			<br>
</table>
	</font>
	<table width="100%" height="100%" border="1">
      <tr>
        <td width="16%"><div align="center"><font size="10">PAS PHOTO (2X3)</font></div></td>
        <td width="16%"><div align="center"><font size="10">Cap Jempol </font></div></td>
        <td width="25%"><div align="center"><font size="10">Specimen Tanda Tangan</font></div></td>
        <td width="43%"><div align="center"><font size="10">Kode Pos : <?php echo $desa2->kodepos ?></font></div></td>
      </tr>
      <tr>
        <td rowspan="2"><br>
<div align="center"><img src="<?php echo base_url()."/foto/".$foto; ?>"width="60" height="80" border="1"/></div></td>
        <td height="100%">&nbsp;</td>
        <td>&nbsp;</td>
        <td align="center"><p align="center"><font size="10">Pemohon,</font></p>
        <p>&nbsp;</p>
        <p align="center"><center><font size="10"><?php echo $nama;?></font></center></p></td>
      </tr>
	   <tr>
        <td colspan="2" align="center"><font size="10">Ket : Cap Jempol/Tanda Tangan</font></td>
		
      </tr>
</table>
<p></p>
	 
 <?php 
  $desa2 = $this->cm->data_desa();

  ?>
  <?php  if($desa2->bentuk_lembaga=="Kelurahan")  {  ?>
</p>
<table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="57%">&nbsp;</td>
    <td width="4%" align="left">&nbsp;</td>
    <td width="39%" align="left"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal)); ?></td>
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
        <td colspan="2" align="left">NIP. <?php echo  $nip; ?></td>
      </tr>
    </table></td>
  </tr>
</table>
<?php }  else { ?>
<table width="95%" border="0" cellpadding="0">
  <tr>
    <td width="53%" align="center"><font size="10">Mengetahui,</font></td>
    <td width="6%">&nbsp;</td>
    <td width="45%" align="center"><font size="10"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal)); ?></font></td>
  </tr>
  <?php 
    if($ttd <> "kepala") {  ?>
  <tr>
    <td align="center"></td>
    <td align="center"><font size="10"></font></td>
    <td align="center"><font size="10">a.n&nbsp;&nbsp;&nbsp;KEPALA DESA </font></td>
  </tr>
  <?php } ?>
  <tr>
    <td align="center"><font size="10">CAMAT <?php echo $desa2->kecamatan ?></font></td>
    <td>&nbsp;</td>
    <td align="center"><font size="10"><?php echo strtoupper($ttd_jabatan) ?></font></td>
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
    <td align="center"><br>
<font size="10"><u><?php echo $desa2->nama_camat; ?></u></font>
<font size="10"><br>
<?php echo $desa2->pangkat_camat; ?></font><br>
<font size="10"><?php echo $desa2->nip_camat; ?></font></td>
    <td>&nbsp;</td>
    <td align="center"><u><font size="10"><?php echo $ttd_nama; ?></font></u><br><?php if($ttd == "sek") {  ?>
<font size="10"><?php if(empty($nip)) 
                  echo '';
                else
                  echo 'NIP. ', ($nip);?></font></td>
  </tr>
  <tr>
    <td align="center"></td>
    <td>&nbsp;</td>
    <td align="center"></td>
  </tr>
  <tr>
    <td align="center"></td>
    <td>&nbsp;</td>
	
    <td align="center"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><table width="100%" border="0" cellpadding="0">
        
        <tr>
          <td align="center">&nbsp;</td>
        </tr>
      </table>
      <?php }  ?></td>
  </tr>
</table>
<?php }  ?>
<br /> <br /><br />
</body>

</html>