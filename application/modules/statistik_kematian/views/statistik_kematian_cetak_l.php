<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Penduduk Mati</title>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/print_style_laporan.css">

  <!-- <style>
  * {
    font-size:10px;
  }
  .judul {
    font-size:14px;
    font-weight:bold;
  }
  
  
table.cetak th {
    border : 1px solid #000;
    vertical-align:middle;
    font-weight:bold;
    text-transform:capitalize;
}

table.cetak td {
    /*border-left : 1px solid #000;
    border-right : 1px solid #000;*/
    border:1px solid #000;
    
}
</style> -->
</head>
<?php 
$desa2 = $this->cm->data_desa();
?>
<body>
<!--<h1 class="judul">DATA KEMATIAN <?php echo  strtoupper($desa2->bentuk_lembaga. " " . $desa2->desa); ?></h1>
<h1 class="judul">KECAMATAN <?php echo  strtoupper($desa2->kecamatan ) ?></h1>
<h1 class="judul"> <?php echo  strtoupper($desa2->kota ) ?></h1>
<br />
<br />-->


<p style="text-align:center">
<span class="judul">DATA KEMATIAN </span><br />
<span class="judul"><?php echo  strtoupper($desa2->kota ) ?></span> <br />
<span class="judul">KECAMATAN <?php echo  strtoupper($desa2->kecamatan ) ?></span> <br />
<span class="judul"> <?php echo  strtoupper($desa2->bentuk_lembaga. " ". $desa2->desa) ?></span> <br />
</p>

 <b>
Statistik : <br />

<table width="326">
<tr><td width="127">Laki - Laki </td><td width="10">: </td><td width="173"> <?php echo $l; ?></td></tr>
<!-- <tr><td>Perempuan  </td><td>: </td><td> <?php echo $p; ?></td></tr>
<tr><td>Total  </td><td>: </td><td> <?php echo ($p+$l); ?></td></tr>
 -->
</table></b>
 
<br />
<br />



<table width="100%" border="0" cellpadding="3" class="tabel">
<thead>
  <tr>
    <th width="5%" align="center" scope="col">No.</th>
    <th width="16%" align="center" scope="col"> NIK/ Nama</th>
    <th width="3%" align="center" scope="col">JK</th>
    <th width="11%" align="center" scope="col">Tgl Lahir / Tgl Mati</th>
    <th width="15%" align="center" scope="col">NIK / Nama Ayah</th>
    <th width="15%" align="center" scope="col">NIK/Nama Ibu</th>
    <th width="23%" align="center" scope="col">Alamat</th>
    <th width="12%" align="center" scope="col">Dusun</th>
  </tr>
</thead>
 <?php 
 $i =  0; 
 foreach($record->result() as $row) :  
 $i++;
 ?>
  <tr>
    <td width="5%"><?php echo $i;  ?></td>
    <td width="16%"><?php echo $row->nik. "<br />". $row->nama; ?></td>
    <td width="3%"><?php echo $row->jk ?></td>
    <td width="11%"><?php echo $row->tgl_lahir. "<br />". flipdate($row->tgl_meninggal); ?></td>
    <td width="15%"><?php echo $row->bapak_nik . "<br />". $row->bapak_nama ?></td>
    <td width="15%"><?php echo $row->ibu_nik . "<br />". $row->ibu_nama ?></td>
    <td width="23%"><?php echo $row->alamat ?></td>
    <td width="12%"><?php echo $row->dusun ?></td>
  </tr>
 <?php endforeach; ?>
</table>
 
</body>
</html>