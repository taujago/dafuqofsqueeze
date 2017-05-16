<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Penduduk</title>
<style>
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
<p>&nbsp; </p>-->


<p style="text-align:center">
<span class="judul">DATA PENDUDUK MENURUT UMUR </span><br />
<span class="judul"><?php echo  strtoupper($desa2->kota ) ?></span> <br />
<span class="judul">KECAMATAN <?php echo  strtoupper($desa2->kecamatan ) ?></span> <br />
<span class="judul"> <?php echo  strtoupper($desa2->bentuk_lembaga. " ". $desa2->desa) ?></span> <br />
<br />
</p>

<table width="100%" border="0" cellpadding="3" class="cetak">
  <tr>
    <th width="4%" align="center" scope="col"><strong>No.</strong></th>
    <th width="75%" align="center" scope="col"><strong>Batasan Umur</strong></th>
    <th width="7%" align="center" scope="col"><strong>L</strong></th>
    <th width="6%" align="center" scope="col"><strong>P</strong></th>
    <th width="8%" align="center" scope="col"><strong>Jumlah</strong></th>
  </tr>
  <tr>
    <td>1</td>
    <td>0 - 5 Tahun</td>
    <td align="center"><?php echo $umur->u_0_5_l; ?></td>
    <td align="center"><?php echo $umur->u_0_5_p; ?></td>
    <td align="center"><?php echo $umur->u_0_5; ?></td>
  </tr>
  <tr>
    <td>2</td>
    <td>6 - 10 Tahun</td>
    <td align="center"><?php echo $umur->u_6_10_l; ?></td>
    <td align="center"><?php echo $umur->u_6_10_p; ?></td>
    <td align="center"><?php echo $umur->u_6_10; ?></td>
  </tr>
  <tr>
    <td>3</td>
    <td>11 - 20 Tahun</td>
    <td align="center"><?php echo $umur->u_11_20_l; ?></td>
    <td align="center"><?php echo $umur->u_11_20_p; ?></td>
    <td align="center"><?php echo $umur->u_11_20; ?></td>
  </tr>
  <tr>
    <td>4</td>
    <td>21 - 30 Tahun</td>
    <td align="center"><?php echo $umur->u_21_30_l; ?></td>
    <td align="center"><?php echo $umur->u_21_30_p; ?></td>
    <td align="center"><?php echo $umur->u_21_30; ?></td>
  </tr>
  <tr>
    <td>5</td>
    <td>31 - 40 Tahun</td>
    <td align="center"><?php echo $umur->u_31_40_l; ?></td>
    <td align="center"><?php echo $umur->u_31_40_p; ?></td>
    <td align="center"><?php echo $umur->u_31_40; ?></td>
  </tr>
  <tr>
    <td>6</td>
    <td>41 - 50 Tahun</td>
    <td align="center"><?php echo $umur->u_41_50_l; ?></td>
    <td align="center"><?php echo $umur->u_41_50_p; ?></td>
    <td align="center"><?php echo $umur->u_41_50; ?></td>
  </tr>
  <tr>
    <td>7</td>
    <td>51 - 60 Tahun</td>
    <td align="center"><?php echo $umur->u_51_60_l; ?></td>
    <td align="center"><?php echo $umur->u_51_60_p; ?></td>
    <td align="center"><?php echo $umur->u_51_60; ?></td>
  </tr>
  <tr>
    <td>8</td>
    <td>61 - 70 Tahun</td>
    <td align="center"><?php echo $umur->u_61_70_l; ?></td>
    <td align="center"><?php echo $umur->u_61_70_p; ?></td>
    <td align="center"><?php echo $umur->u_61_70; ?></td>
  </tr>
  <tr>
    <td>9</td>
    <td>&gt; 70 Tahun</td>
    <td align="center"><?php echo $umur->u_70_l; ?></td>
    <td align="center"><?php echo $umur->u_70_p; ?></td>
    <td align="center"><?php echo $umur->u_70; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <th>Jumlah</th>
    <th align="center"><?php  echo $jumlah_l = 
		$umur->u_0_5_l + 
		$umur->u_6_10_l +  
		$umur->u_11_20_l +
	 	$umur->u_21_30_l +
	 	$umur->u_31_40_l +
	   	$umur->u_41_50_l +
		$umur->u_51_60_l +
		$umur->u_61_70_l +
		$umur->u_70_l  ?></th>
    <th align="center"><?php  echo $jumlah_p = 
		$umur->u_0_5_p + 
		$umur->u_6_10_p +  
		$umur->u_11_20_p +
	 	$umur->u_21_30_p +
	 	$umur->u_31_40_p +
	   	$umur->u_41_50_p +
		$umur->u_51_60_p +
		$umur->u_61_70_p +
		$umur->u_70_p  ?></th>
    <th align="center"><?php echo $jumlah_l + $jumlah_p ?></th>
  </tr>
</table>
</body>
</html>