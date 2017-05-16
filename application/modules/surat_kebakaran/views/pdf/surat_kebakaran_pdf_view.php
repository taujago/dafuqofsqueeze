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

<!-- <div id="wrap" style="width:1024; margin:0px auto" >  -->
 <?php 
$this->load->view("kop_surat");
?>
 <div align="center">
  <b> 
  <font size="11"><u>SURAT KETERANGAN LAPORAN KEBAKARAN </u></font><br />
  <font size="10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No : <?php echo $no_surat ?></font> </b>
</div>  
<p align="justify">Yang bertanda tangan di bawah ini :</p>
<table width="100%">
			<tr>
			  <td width="3%" >a.</td>
		    <td width="26%" >Nama </td>
		    <td width="71%">: <?php echo $ttd_nama; ?> </td></tr>
			<tr>
			  <td >b.</td>
		      <td >Jabatan</td>
		      <td>: <?php echo  ucwords(strtolower($ttd_jabatan)); ?> <?php echo ucwords(strtolower($desa2->desa));  ?> </td></tr>
</table>
<p>
Dengan ini menerangkan dengan sebenarnya bahwa</p>
<table width="100%">
			<tr>
			  <td width="3%" >a.</td>
		    <td width="26%" >Nama </td>
		    <td width="1%">:</td>
		    <td width="70%"><?php echo $nama; ?> </td>
			</tr>
			<tr>
			  <td >b.</td>
		      <td >Tempat, Tgl lahir </td>
		      <td>:</td>
		      <td><?php echo $tmp_lahir . ", ".$tgl_lahir; ?> </td>
			</tr>
			<tr>
			  <td >c.</td>
		      <td >Jenis kelamin </td>
		      <td>:</td>
		      <td><?php echo $this->cm->jk($jk); ?></td>
			</tr>
			<tr>
			  <td >d.</td>
		      <td >Agama </td>
		      <td>:</td>
		      <td><?php echo $agama; ?> </td>
			</tr>
			<tr>
			  <td >e.</td>
		      <td >Pekerjaan </td>
		      <td>:</td>
		      <td><?php echo $pekerjaan; ?> </td>
			</tr>
			<tr>
			  <td >f.</td>
		      <td >Alamat </td>
		      <td>:</td>
		      <td><?php echo $alamat. "  Rt $rt Rw $rw "; 
		if($dusun <> "") { 
      
      echo ($desa2->bentuk_lembaga == "Kelurahan")?" Lingkungan ":" Dusun ";
      echo $dusun; 
      }  ?> - Desa <?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kodepos ));  ?></td>
			</tr>
			<tr>
			  <td >g.</td>
		      <td >No. KTP / NIK </td>
		      <td>:</td>
		      <td><?php echo $nik; ?> </td>
			</tr>
</table>
<p>
Dan yang bersangkutan memang benar melapor kepada kami bahwa telah terjadi musibah kebakaran pada tanggal <?php echo flipdate($tgl_kebakaran);?> yang telah menghanguskan barang dan dokumen berharga berupa : <br>
<?php echo $isi_surat;?></p>
<p>Demikian surat keterangan ini dibuat sebagai laporan agar diketahui dan dipergunakan sebagaimana mestinya.</p>

<br /><br /><br />
 <?php
$this->load->view("ttd_pdf");
?>
<!-- </div> end of wrap -->
</body>

</html>