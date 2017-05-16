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

 <?php 
 $this->load->view("kop_surat");
 ?>

<!-- <table border="0" width="100%">
	<tr>
		<td valign="top" align="right"> <img src="<?php echo base_url()."assets/images/$desa2->logo" ?>" width="100" height="128" /> </td>
		<td valign="top" width="70%">
			<center>
			<h1> PEMERINTAH <?php echo strtoupper($desa2->kota); ?> </h1>
			<h1> KECAMATAN <?php echo strtoupper($desa2->kecamatan); ?> </h1>
			<h1> <?php echo strtoupper($desa2->bentuk_lembaga. " ".$desa2->kecamatan); ?> </h1>
			<h3><?php echo $desa2->alamat . " " . $desa2->kodepos ?></h3>
			</center>

		</td>
	</tr>
	<tr><td colspan="2"><hr/></td></tr>
</table> -->

<br />
 
<center>
		<span id="judulsurat">SURAT KETERANGAN TIDAK MAMPU (SKTM) </span><br />
     	<span id="nomor_surat"> No : <?php echo $no_surat ?> </span>
<br /><br /><br /> </center>

<p>Yang bertanda tangan di bawah ini menerangkan bahwa ini, Kepala <?php echo $desa2->bentuk_lembaga. " ".$desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota  ?> menerangkan bahwa  :</p>
<table width="100%" border="0" class="tabel">
  <tr>
    <th width="3%" scope="col">No.</th>
    <th width="24%" scope="col">Nama</th>
    <th width="11%" scope="col">Tanggal Lahir</th>
    <th width="5%" scope="col">JK</th>
    <th width="22%" scope="col">Hub. Keluarga</th>
    <th width="13%" scope="col">NO. KK</th>
    <th width="14%" scope="col">NO KTP</th>
    <th width="8%" scope="col">KET</th>
  </tr>
  <tr>
    <td>1. </td>
    <td><?php echo $nama; ?></td>
    <td><?php echo $tgl_lahir; ?></td>
    <td><?php echo $jk; ?></td>
    <td><?php 
	$arr_hubungan = $this->cm->arr_hubungan;
?>      <?php echo $arr_hubungan[$hubungan]; ?></td>
    <td><?php echo $no_kk ?></td>
    <td><?php echo $nik ?></td>
    <td>&nbsp;</td>
  </tr>
  
 <?php 
 $sisa = 5;
 $n=1;
 if($record->num_rows() > 0 ) {	
	$baris = 3;
	$arr_hubungan = $this->cm->arr_hubungan;
	$i=0;
	foreach($record->result() as $row) :
 	$n++;
	$sisa--;
 ?>
  <tr>
    <td><?php echo $n; ?></td>
    <td><?php echo $row->nama; ?></td>
    <td><?php echo $row->tgl_lahir ?></td>
    <td><?php echo $row->jk ?></td>
    <td><?php echo $arr_hubungan[$row->hubungan]; ?></td>
    <td><?php echo $row->no_kk ?></td>
    <td><?php echo $row->nik ?></td>
    <td>&nbsp;</td>
  </tr>
  <?php endforeach;
     
 }
 for($i=0; $i<$sisa; $i++) :  
 $n++;
 ?>
    <tr>
    <td><?php echo $n; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
 <?php endfor; ?> 
</table>
<p>&nbsp;</p>
<table width="100%" border="0">
  <tr>
    <td width="12%">&nbsp;</td>
    <td width="17%">Alamat</td>
    <td width="71%">: <?php echo $alamat; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Nomor Rumah</td>
    <td>: </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Keterangan Lain</td>
    <td>:</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>Adalah benar nama keluarga di atas keluarga tidak mampu/penduduk yag tergolong miskin yang berdomisili di RT <?php echo $rt ?> Dusun  <?php echo $dusun." ".$desa2->bentuk_lembaga." ".$desa2->desa." Kecamatan  ". $desa2->kecamatan." ".$desa2->kota;   ?></p>
<p>Demikian Surat Keterangan Tidak Mampu ini diberikan kepada yang bersangkutan untuk dapat dipergunakan sebagaimana mestinya. </p>
<p>&nbsp;</p>
<table width="100%" border="0">
  <tr>
    <td width="49%" align="center" valign="top">Mengetahui 
      <br>
    Camat <?php echo $desa2->kecamatan ?><br>
    <br>
    <br>
    <br>
    <br><u><?php echo $desa2->nama_camat; ?> </u>   <br>
 </td>
    <td width="51%" align="center" valign="top"><span style="float:right; width:400px;"><?php echo $desa2->desa.", ". flipdate($tanggal); ?><br />
        <?php 
    if($ttd<>"kepala") {
      echo "a.n. Kepala ". $desa2->bentuk_lembaga."<br />";
    }
    
    echo $ttd_jabatan." ".$desa2->bentuk_lembaga ?>
        <br />
        <br />
        <br />
        <br />
    <?php echo "<u>$ttd_nama </u>";
    if($ttd=="sek") {
    echo "<br />NIP : ".$nip_sekretaris;
    }
    ?> </span></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><br />
</p>
</body>

</html>