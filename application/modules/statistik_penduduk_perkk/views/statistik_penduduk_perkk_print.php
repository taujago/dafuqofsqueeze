<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Penduduk Per KK</title>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/print_style_laporan.css">

</head>
<?php 
$desa2 = $this->cm->data_desa();

$arr_status_kependudukan = $this->cm->arr_status_kependudukan;
?>
<body>
<h1 class="judul">DATA PENDUDUK PER KK <?php echo  strtoupper($desa2->bentuk_lembaga. " " . $desa2->desa); ?></h1>
<h1 class="judul">KECAMATAN <?php echo  strtoupper($desa2->kecamatan ) ?></h1>
<h1 class="judul"> <?php echo  strtoupper($desa2->kota ) ?></h1>
<p>
</p>
<?php foreach($rec_kk->result() as $row_kk) :  ?>

<div class="judul2">
<table width="41%" border="0">
  <tr>
    <td width="35%">No. KK</td>
    <td width="2%">:</td>
    <td width="63%"><?php echo $row_kk->no_kk; ?></td>
  </tr>
  <tr>
    <td>Kepala Keluarga</td>
    <td>:</td>
    <td><?php echo $row_kk->nama; ?></td>
  </tr>
  <tr>
    <td>Dusun</td>
    <td>:</td>
    <td><?php echo $row_kk->dusun; ?></td>
  </tr>
    <tr>
    <td>RT/RW</td>
    <td>:</td>
    <td><?php echo $row_kk->rt; ?>/<?php echo $row_kk->rw; ?></td>
  </tr>
</table>
</div>
 
<table width="100%" border="0" class="tabel">
  <tr>
    <th width="3%" scope="col">No.</th>
    <th width="14%" scope="col">No.KK</th>
     <th width="14%" scope="col">NIK</th>
      <th width="14%" scope="col">Nama</th>
    <th width="12%" scope="col">Alamat</th>
    <th width="8%" scope="col">Dusun</th>
    <th width="2%" scope="col">JK</th>
    <th width="8%" scope="col">Agama</th>
    <th width="17%" scope="col">Tmp / Tgl Lahir</th>
    <th width="4%" scope="col">Umur</th>
    <th width="9%" scope="col">Pekerjaan</th>
    <th width="9%" scope="col">Status Penduduk</th>
    <th width="14%" scope="col">Pendidikan</th>
  </tr>
  
  <?php 
 $i =  0; 
 $rec = $this->dm->data_perkk($row_kk->no_kk);
 foreach($rec->result()  as $row) :  
 $i++;
 ?>
  <tr>
    <td><center><?php echo $i;  ?></center></td>
    <td><?php echo $row->no_kk; ?></td>
    <td><?php echo $row->nik; ?></td>
    <td><?php echo $row->nama; ?></td>
    <td><?php echo $row->alamat ?></td>
    <td><?php echo $row->dusun ?></td>
    <td><?php echo $row->jk ?></td>
    <td><?php echo $row->agama ?></td>
    <td><?php echo $row->tmp_lahir.", ".$row->tgl_lahir ?></td>
    <td><?php echo $row->umur ?> Th</td>
    <td><?php echo $row->pekerjaan ?></td>
    <td><?php echo $arr_status_kependudukan[$row->status_kependudukan] ?></td>
    <td><?php echo $row->pendidikan ?></td>
  </tr>
 <?php endforeach; ?>
 

<p>
    
</p>
 <?php endforeach; 
 $this->load->view("pdf_ttd");

 ?>
</body>
</html>