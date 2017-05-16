<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Semua Penduduk</title>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/print_style_laporan.css">

</head>
<?php 
$desa2 = $this->cm->data_desa();

$arr_status_kependudukan = $this->cm->arr_status_kependudukan;
?>
<body>
<h1 class="judul">DATA PENDUDUK</h1>
<h1 class="judul">PEMERINTAH <?php echo  strtoupper($desa2->bentuk_lembaga. " " . $desa2->desa); ?></h1>

<h1 class="judul">KECAMATAN <?php echo  strtoupper($desa2->kecamatan ) ?></h1>
<h1 class="judul"> <?php echo  strtoupper($desa2->kota ) ?></h1>
<br />
<b>
<legend> Statistik Penduduk </legend>
<table>
<tr><td>Laki - Laki </td><td>: </td><td> <?php echo $l; ?></td></tr>
<tr><td>Perempuan  </td><td>: </td><td> <?php echo $p; ?></td></tr>
<tr><td>Total  </td><td>: </td><td> <?php echo ($p+$l); ?></td></tr>

</table></b>

<br />




<table width="100%" border="0" class="tabel">
<thead>
  <tr>
    <th width="3%" rowspan="2" scope="col">NO.</th>
    <th width="9%" rowspan="2" scope="col">NO. KK</th>
    <th width="2%" rowspan="2" scope="col">NIK</th>
    <th width="12%" rowspan="2" scope="col">NAMA</th>
    <th width="2%" rowspan="2" scope="col">JK</th>
    <th width="10%" rowspan="2" scope="col">STATUS KAWIN</th>
    <th colspan="2" scope="col">TEMPAT / TGL. LAHIR</th>
     <th width="4%" rowspan="2" scope="col">UMUR</th>
    <th width="5%" rowspan="2" scope="col">ALAMAT</th>
    <th width="3%" rowspan="2" scope="col">RT</th>
    <th width="3%" rowspan="2" scope="col">RW</th>
    <th width="7%" rowspan="2" scope="col">HUBUNGAN DALAM KELUARGA</th>
    <th width="12%" rowspan="2" scope="col">PENDIDIKAN</th>
    <th width="12%" rowspan="2" scope=  "col">PEKERJAAN</th>

  </tr>
 

  <tr>
    <th width="7%">TEMPAT</th>
    <th width="8%">TANGGAL</th>
  </tr>
  <tr>
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>
    <th>6</th>
    <th>7</th>
    <th>8</th>
    <th>9</th>
    <th>10</th>
    <th>11</th>
    <th>12</th>
    <th>13</th>
    <th>14</th>
    <th>15</th>
  </tr>
  </thead>
   <?php 
   $arr_status_kawin = $this->cm->arr_status_kawin;
 $i =  0; 
 foreach($record->result() as $row) :  
 $i++;
 ?>
  <tr>
    <td><center><?php echo $i;  ?></center></td>
    <td><?php echo  $row->no_kk; ?></td>
    <td><?php echo $row->nik ?></td>
    <td><?php echo $row->nama ?></td>
    <td><?php echo $row->jk ?></td>
    <td><?php echo $arr_status_kawin[$row->status_kawin] ?></td>
    <td><?php echo $row->tmp_lahir ?></td>
    <td><?php echo $row->tgl_lahir ?></td>
     <td><?php echo $row->umur ?> th</td>
    <td><?php echo $row->alamat ?></td>
    <td><?php echo $row->rt ?></td>
    <td><?php echo $row->rw ?></td>
    <td><?php echo $row->hubungan_dlm_keluarga ?></td>
    <td><?php echo $row->pendidikan ?></td>
  <!--   <td><?php echo $arr_status_kependudukan[$row->status_kependudukan] ?></td> -->
    <td><?php echo $row->pekerjaan ?></td>
   <!--  <td><?php echo $row->baca_tulis ?></td>
    <td><?php echo $row->warga_negara ?></td>
    <td><?php echo $row->alamat ?></td> -->
    
  <!--   <td><?php echo $row->nik ?></td>
    <td><?php echo $row->no_kk ?></td> -->
  </tr>
 <?php endforeach; ?>
 
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p></p>
 <?php
$this->load->view("pdf_ttd");
?>
<p>&nbsp;</p>
</body>
</html>