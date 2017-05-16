<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Penduduk Pindah</title>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/print_style_laporan.css">

 <!--  <style>
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
 
<!--<h1 class="judul">DATA PENDUDUK PINDAH <?php echo  strtoupper($desa2->bentuk_lembaga. " " . $desa2->desa); ?></h1>
<h1 class="judul">KECAMATAN <?php echo  strtoupper($desa2->kecamatan ) ?></h1>
<h1 class="judul"> <?php echo  strtoupper($desa2->kota ) ?></h1>
<br />
<br />
-->

<p style="text-align:center">
<span class="judul">DATA PENDUDUK PINDAH </span><br />
<span class="judul"><?php echo  strtoupper($desa2->kota ) ?></span> <br />
<span class="judul">KECAMATAN <?php echo  strtoupper($desa2->kecamatan ) ?></span> <br />
<span class="judul"> <?php echo  strtoupper($desa2->bentuk_lembaga. " ". $desa2->desa) ?></span> <br />
<br />
</p>
<b>
  Statistik Penduduk : <Br />
<table width="286">
<tr><td width="120">Laki - Laki </td><td width="10">: </td><td width="140"> <?php echo $l; ?></td></tr>
<tr><td>Perempuan  </td><td>: </td><td> <?php echo $p; ?></td></tr>
<tr><td>Total  </td><td>: </td><td> <?php echo ($p+$l); ?></td></tr>

</table></b>
 
<br />
<br />
<table width="100%" border="1" cellpadding="3" class="tabel">
<thead>
  <tr>
    <th width="5%" align="center" scope="col">No.</th>
    <th width="25%" align="center" scope="col">NIP / Nama</th>
    <th width="16%" align="center" scope="col">Dusun</th>
    <th width="4%" align="center" scope="col">JK</th>
    <th width="17%" align="center" scope="col">Tmp / Tgl Lahir</th>
    <th width="12%" align="center" scope="col">Tgl. Pindah</th>
    <th width="22%" align="center" scope="col">Tujuan Pindah</th>
  </tr>
 </thead>
  <?php 
 $i =  0; 
 foreach($record->result() as $row) :  
  $i++;
 ?>
  <tr>
    <td width="5%" height="26"><?php echo $i;  ?></td>
    <td width="25%"><?php echo $row->nik . "<Br />" . $row->nama; ?></td>
    <td width="16%"><?php echo $row->dusun ?></td>
    <td width="4%"><?php echo $row->jk ?></td>
    <td width="17%"><?php echo $row->tmp_lahir.", ".$row->tgl_lahir ?></td>
    <td width="12%"><?php echo flipdate($row->tgl_pindah); ?></td>
    <td width="22%"><?php echo ($row->pindah_jenis=="dn")?"$row->kota, $row->kecamatan, $row->provinsi":"Luar negeri : ".$row->pindah_negara; ?></td>
   
  </tr> <?php endforeach; ?>
</table>
 