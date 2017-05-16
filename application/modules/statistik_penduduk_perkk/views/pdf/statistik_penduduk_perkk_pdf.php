<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Penduduk</title>
 <style>
  * {
  	font-size:8px;
  }
  .judul {
  	font-size:14px;
	font-weight:bold;
  }
  
  
table.cetak th {
	border : 1px solid #000;
	vertical-align:middle;
	font-weight:bold;
}

table.cetak td {
	/*border-left : 1px solid #000;
	border-right : 1px solid #000;*/
	border:1px solid #000;
	
}
</style>
</head>
<?php 
$desa2 = $this->cm->data_desa();

$arr_status_kependudukan = $this->cm->arr_status_kependudukan;
?>
<body>
<!--<h1 class="judul">DATA PENDUDUK PER KK <?php echo  strtoupper($desa2->bentuk_lembaga. " " . $desa2->desa); ?></h1>
<h1 class="judul">KECAMATAN <?php echo  strtoupper($desa2->kecamatan ) ?></h1>
<h1 class="judul"> <?php echo  strtoupper($desa2->kota ) ?></h1>
 -->
<p style="text-align:center">

<span class="judul">DATA PENDUDUK PER KK <?php echo  strtoupper($desa2->bentuk_lembaga. " " . $desa2->desa); ?></span><br />
<span class="judul"><?php echo  strtoupper($desa2->kota ) ?></span> <br />
<span class="judul">KECAMATAN <?php echo  strtoupper($desa2->kecamatan ) ?></span> <br />
<span class="judul"> <?php echo  strtoupper($desa2->bentuk_lembaga. " ". $desa2->desa) ?></span> <br />
</p>
 
 
<?php 
$arr_sebagai = $this->cm->arr_sebagai;
foreach($rec_kk->result() as $row_kk) :  ?>


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
</table>
 
 
<?php endforeach; ?>
</body>
</html>