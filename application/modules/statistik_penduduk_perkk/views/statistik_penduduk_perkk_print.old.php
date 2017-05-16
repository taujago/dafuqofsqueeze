<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kartu Keluarga</title>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/print_style_laporan.css">

</head>

<body>
<center>
<h1>KARTU KELUARGA
</h1>
<H2><?php echo $kk['no_kk']; ?></H2>
 
</center>
 
 
<p>&nbsp;</p>
<table width="100%" border="0">
  <tr>
    <td width="15%">Nama Kepala Keluarga</td>
    <td width="1%">:</td>
    <td width="35%"><?php echo $kk['nama']; ?></td>
    <td width="10%">Kecamatan</td>
    <td width="1%">:</td>
    <td width="38%"><?php echo $kk['nama']; ?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><?php echo $kk['alamat']; ?></td>
    <td>Kota</td>
    <td>:</td>
    <td><?php echo $kk['kota']; ?></td>
  </tr>
  <tr>
    <td>RT/RW</td>
    <td>:</td>
    <td><?php echo $kk['rt'] . " / ".$kk['rw']; ?></td>
    <td>Kode Pos</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Kelurahan/Desa</td>
    <td>:</td>
    <td><?php echo $kk['desa']; ?></td>
    <td>Provinsi</td>
    <td>:</td>
    <td><?php echo $kk['provinsi']; ?></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="100%" border="0" class="tabel">
  <tr>
    <th width="4%" scope="col">NO.</th>
    <th width="18%" scope="col">NAMA</th>
    <th width="11%" scope="col">NIK</th>
    <th width="11%" scope="col">JK</th>
    <th width="10%" scope="col">TEMPAT LAHIR</th>
    <th width="8%" scope="col">TGL. LAHIR</th>
    <th width="8%" scope="col">AGAMA</th>
    <th width="13%" scope="col">PENDIDIKAN</th>
    <th width="17%" scope="col">PEKERJAAN</th>
  </tr>
  <?php 
  $i=0;
  foreach($record->result() as $row) : 
  $i++;
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row->nama; ?></td>
    <td><?php echo $row->nama; ?></td>
    <td><?php echo $row->jk; ?></td>
    <td><?php echo $row->tmp_lahir; ?></td>
    <td><?php echo $row->tgl_lahir; ?></td>
    <td><?php echo $row->agama; ?></td>
    <td><?php echo $row->pendidikan; ?></td>
    <td><?php echo $row->pekerjaan; ?></td>
  </tr>
  <?php endforeach; ?>
</table>
<p>&nbsp;</p>
<table width="100%" border="0"  class="tabel">
  <tr>
    <th width="5%" rowspan="2" scope="col">NO.</th>
    <th width="13%" rowspan="2" scope="col">STATUS PERKAWINAN</th>
    <th width="16%" rowspan="2" scope="col">STATUS HUBUGNAN KELUARGA</th>
    <th width="15%" rowspan="2" scope="col">KEWARGANEGARAN</th>
    <th colspan="2" scope="col">DOKUMEN IMIGRASI</th>
    <th colspan="2" scope="col">ORANGTUA</th>
  </tr>
  <tr>
    <th width="12%">NO. PASPORT</th>
    <th width="12%">NO. KITAS/KITAP</th>
    <th width="12%">AYAH</th>
    <th width="15%">IBU</th>
  </tr>
   <?php 
  $i=0;
  foreach($record->result() as $row) : 
  $i++;
  
  $arr_status = $this->cm->arr_status_kawin;
  $arr_hubungan = $this->cm->arr_hubungan;
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $arr_status[$row->status_kawin]; ?></td>
    <td><?php echo $arr_hubungan[$row->sebagai]; ?></td>
    <td><?php echo $row->warga_negara; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo $row->nama_ayah; ?></td>
    <td><?php echo $row->nama_ibu; ?></td>
  </tr>
  <?php endforeach; ?>
</table>
<p>&nbsp;</p>
</body>
</html>