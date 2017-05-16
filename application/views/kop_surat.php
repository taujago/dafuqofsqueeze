<style>
* {
	font-size:10px;
}
.judul {
	font-size:12px;
	font-weight:bold;
	 text-align:center;
}

#gambar {
	width:60px;
	position:fixed;
	top:10px;
	float:left;
}

#kop {
	text-align:center;
}
</style>

<?php 
	$desa2 = $this->cm->data_desa();

	?>

<!--<div id="logo">
<img src="<?php echo base_url()."assets/images/$desa2->logo" ?>" width="100" height="128" />
</div>

<div id="header">
			<center>
			<h1>&nbsp;</h1>
</center>	
	</div><br>
 

<div style="border-top:#000 solid 2px; border-bottom:#000 solid 1px; padding:1px;">

 </div>
<p>&nbsp;</p>-->
<table width="100%" border="0" cellpadding="3">
  
  <tr>
    <td width="20%" align="center"><img src="<?php echo base_url()."assets/images/kop.png" ?>" width="55" height="60" align="right" /></td>
    <td width="64%" align="center"><span class="judul">PEMERINTAH <?php echo strtoupper($desa2->kota); ?>
   <br />
      KECAMATAN <?php echo strtoupper($desa2->kecamatan); ?><br />
      <?php echo ($desa2->kop_surat=="1")?"KANTOR ":""; 
			echo strtoupper($desa2->bentuk_lembaga. " ".$desa2->desa); ?></span><br />
      <?php echo $desa2->alamat . " Kode Pos " . $desa2->kodepos ?> </td>
    <td width="23%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><hr width="93%"/></td>
  </tr>
</table>
