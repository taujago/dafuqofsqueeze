<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Surat Keterangan Lahir</title>
<style type="text/css">
<!--
.label {	width: 130px;
}
-->
</style>
</head>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/print_style.css">
	<?php 
	$desa = $this->cm->data_desa();
  $desa2 = $this->cm->data_desa();
	$ket = $jenis_cetak=="desa"?strtoupper($desa->bentuk_lembaga):" YANG BERSANGKUTAN";
	?>

<body>
Kode: F.2.17 <br />
Pemerintah Kabupaten <?php echo   $desa->kota ?> <br />
Kecamatan <?php echo   $desa->kecamatan ?> <br />
<?php echo   $desa->bentuk_lembaga ?> <?php echo   $desa->desa ?> <br />
<center>
  <h1>ARSIP UNTUK <?php echo $ket ?></h1>
  <h3>SURAT KETERANGAN KEMATIAN </h3>
  No. : <?php echo $no_surat; ?> <br />
  <br />
  <br />
  Yang bertanda tangan di bawah ini,
</center>
Menerangkan Bahwa : <br />
<table width="100%">
  <tr>
    <td width="285">Nama</td>
    <td width="709"> : <?php echo $nama; ?></td>
  </tr>
  <tr>
    <td>NIK </td>
    <td> : <?php echo $nik ?></td>
  </tr>
  <tr>
    <td>Jenis Kelamin </td>
    <td> : <?php echo $jk ?></td>
  </tr>
  <tr>
    <td>Tanggal Lahir/ Umur</td>
    <td> : <?php echo $tgl_lahir . " / ".$umur ?> tahun</td>
  </tr>
  <tr>
    <td>Agama</td>
    <td>: <?php echo $agama ?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>: <?php echo $alamat ?></td>
  </tr>
</table>
<br />
<br />
Telah meninggal dunia pada : <br />
<br />
<br />
<table width="100%">
  <tr>
    <td width="29%">Hari </td>
    <td width="71%"> : <?php echo $this->am->hari(flipdate($tgl_meninggal)); ?></td>
  </tr>
  <tr>
    <td>Tanggal </td>
    <td> : <?php echo isset($tgl_meninggal)?flipdate($tgl_meninggal):""; ?></td>
  </tr>
  <tr>
    <td>Bertempat di </td>
    <td> : <?php echo $tmp_meninggal; ?></td>
  </tr>
  <tr>
    <td>Penyebab Kematian</td>
    <td>: <?php echo $penyebab_kematian; ?></td>
  </tr>
</table>
<br />
<br />
<br />
<center>
  Surat keterangan ini dibuat berdasarkan keterangan pelapor
</center>
<table width="100%">
  <tr>
    <td width="29%">Nama </td>
    <td width="71%"> : <?php echo $pelapor_nama; ?></td>
  </tr>
  <tr>
    <td>NIK </td>
    <td> : <?php echo $pelapor_nik; ?></td>
  </tr>
  <tr>
    <td>Umur </td>
    <td> : <?php echo $this->am->umur($pelapor_tgl_lahir); ?> tahun </td>
  </tr>
  <tr>
    <td>Pekerjaan </td>
    <td> : <?php echo $pelapor_pekerjaan; ?></td>
  </tr>
  <tr>
    <td>Alamat </td>
    <td> : <?php echo $pelapor_alamat; ?></td>
  </tr>
</table>
<br />
<br />
<center>
 <?php echo $desa2->desa.", ". flipdate($tanggal); ?><br />
    <?php 
    if($ttd<>"kepala") {
      echo "a.n. Kepala ". $desa2->bentuk_lembaga."<br />";
    }
    
    echo $ttd_jabatan." ".$desa2->bentuk_lembaga ?>  <br /><br />
    <br /><br />
    <?php echo "<u>$ttd_nama </u>";
    if($ttd=="sek") {
    echo "<br />".$nip_sekretaris;
    }
    ?>
</center>
</body>
</html>