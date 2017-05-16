<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Penduduk Sementara</title>
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
<!--<h1 class="judul">DATA PENDUDUK SEMENTARA <?php echo  strtoupper($desa2->bentuk_lembaga. " " . $desa2->desa); ?></h1>
<h1 class="judul">KECAMATAN <?php echo  strtoupper($desa2->kecamatan ) ?></h1>
<h1 class="judul"> <?php echo  strtoupper($desa2->kota ) ?></h1>
<br />-->
<br />

<p style="text-align:center">
<span class="judul">DATA PENDUDUK SEMENTARA </span><br />
<span class="judul"><?php echo  strtoupper($desa2->kota ) ?></span><BR />
<span class="judul">KECAMATAN <?php echo  strtoupper($desa2->kecamatan ) ?></span><br />
<span class="judul"> <?php echo  strtoupper($desa2->bentuk_lembaga." ".$desa2->desa ) ?></span><br />

 <br />
<br />
</p>
<b>

  Statistik Penduduk <bR />
<table width="321">
<tr><td width="114">Laki - Laki </td><td width="10">: </td><td width="181"> <?php echo $l; ?></td></tr>
<tr><td>Perempuan  </td><td>: </td><td> <?php echo $p; ?></td></tr>
<tr><td>Total  </td><td>: </td><td> <?php echo ($p+$l); ?></td></tr>

</table></b>
 
<br />
<br />



<table width="100%" border="0" cellpadding="3" class="tabel">
<thead>
  <tr>
    <th width="4%" scope="col">No.</th>
    <th width="15%" scope="col">NIP / Nama</th>
    <th width="15%" scope="col">Alamat</th>
    <th width="3%" scope="col">RT</th>
    <th width="3%" scope="col">RW</th>
    <th width="6%" scope="col">Dusun</th>
    <th width="3%" scope="col">JK</th>
    <th width="6%" scope="col">Agama</th>
    <th width="11%" scope="col">Tmp / Tgl Lahir</th>
    <th width="12%" scope="col">Pekerjaan</th>
    <th width="20%" scope="col">Pendidikan</th>
  </tr>
</thead>
 
 <?php 
 $i =  0; 
 
 $arr_status_kependudukan= $this->cm->arr_status_kependudukan;
 foreach($record->result() as $row) :  
 $i++;
 ?>
  <tr>
    <td width="4%"><?php echo $i;  ?></td>
    <td width="15%"><?php echo $row->nik . "<Br />" . $row->nama; ?></td>
    <td width="15%"><?php echo $row->alamat ?></td>
    <td width="3%"><?php echo $row->rt ?></td>
    <td width="3%"><?php echo $row->rw ?></td>
    <td width="6%"><?php echo $row->dusun ?></td>
    <td width="3%"><?php echo $row->jk ?></td>
    <td width="6%"><?php echo $row->agama ?></td>
    <td width="11%"><?php echo $row->tmp_lahir.", ".$row->tgl_lahir ?></td>
    <td width="12%"><?php echo $row->pekerjaan ?></td>
    <td width="20%"><?php echo $row->pendidikan ?></td>
  </tr>
 <?php endforeach; ?>
 
  
</table>
<p>&nbsp;</p>
 <?php  
 $this->load->view("pdf_ttd");

 ?>
</body>
</html>