<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Penduduk</title>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/print_style_laporan.css">

</head>
<?php 
$desa2 = $this->cm->data_desa();

$arr_bulan = $this->add->arr_bulan;
?>
<body>
<center>

<h1 class="judul">PEMERINTAH <?php echo  strtoupper($desa2->kota); ?></h1>
<h1 class="judul">KECAMATAN <?php echo  strtoupper($desa2->kecamatan); ?></h1>
<h1 class="judul"> <?php echo  strtoupper($desa2->bentuk_lembaga. " " . $desa2->desa); ?></h1>
<h1 class="judul">LAPORAN TRI WULAN </h1>
 
<p>&nbsp;</p><table width="43%" border="0" align="center">
  <tr>
    <td width="47%"><span class="judul"><?php echo  strtoupper($desa2->bentuk_lembaga); ?></span></td>
    <td width="2%">:</td>
    <td width="51%"><span class="judul"><?php echo  strtoupper($desa2->desa); ?></span></td>
  </tr>
  <tr>
    <td>Kecamatan</td>
    <td>:</td>
    <td><span class="judul"><?php echo  strtoupper($desa2->kecamatan); ?></span></td>
  </tr>
  <tr>
    <td>Laporan Periode</td>
    <td>:</td>
    <td><?php echo $periode. " ".date("Y"); ?></td>
  </tr>
</table>
 <p>&nbsp;</p>
 <table width="100%" border="0" class="tabel">
 
   <tr>
     <th colspan="10" scope="col">JUMLAH PENDUDUK</th>
    </tr>
   <tr>
     <th width="6%" rowspan="2">NO.</th>
     <th width="32%" rowspan="2"><?php echo $this->dusun; ?>  </th>
     <th colspan="3">WNI</th>
     <th colspan="3">WNA</th>
     <th width="8%" rowspan="2">WNI + WNA</th>
     <th width="6%" rowspan="2">KET</th>
   </tr>
   <tr>
     <th width="8%">L</th>
     <th width="8%">P</th>
     <th width="8%">L+P</th>
     <th width="8%">L</th>
     <th width="8%">P</th>
     <th width="8%">L+P</th>
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
   </tr>
  
   <?php 
   $total_wni_l = 0; 
   $total_wni_p = 0;
   $total_wni = 0;
   
   $total_wna_l = 0; 
   $total_wna_p = 0;
   $total_wna = 0;
   $total = 0;
   $i=0;
   foreach($jumlah_penduduk->result() as $row) :  
   $i++; 
   $total_wni_l += $row->wni_l ; 
   $total_wni_p += $row->wni_p ; 
   $total_wni   += $row->wni_total; 
   
   $total_wna_l += $row->wna_l ; 
   $total_wna_p += $row->wna_p ; 
   $total_wna += $row->wna_total ; 
   $total +=  ($row->wni_total + $row->wna_total);
   ?>
   <tr>
     <td><?php echo $i; ?></td>
     <td><?php echo $row->dusun; ?></td>
     <td align="center"><?php echo $row->wni_l; ?></td>
     <td align="center"><?php echo $row->wni_p; ?></td>
     <td align="center"><?php echo $row->wni_total; ?></td>
     <td align="center"><?php echo $row->wna_l; ?></td>
     <td align="center"><?php echo $row->wna_p; ?></td>
     <td align="center"><?php echo $row->wna_total; ?></td>
     <td align="center"><?php echo $row->wni_total + $row->wna_total; ?></td>
     <td align="center">&nbsp;</td>
   </tr>
   
   <?php endforeach; ?>
   <tr>
     <th>&nbsp;</th>
     <th>Jumlah</th>
     <th align="center"><?php echo $total_wni_l; ?></th>
     <th align="center"><?php echo $total_wni_p; ?></th>
     <th align="center"><?php echo $total_wni; ?></th>
     <th align="center"><?php echo $total_wna_l; ?></th>
     <th align="center"><?php echo $total_wna_p; ?></th>
     <th align="center"><?php echo $total_wna; ?></th>
     <th align="center"><?php echo $total; ?></th>
     <th align="center">&nbsp;</th>
   </tr>
 </table>
 <p>&nbsp;</p>
 <table width="100%" border="0" class="tabel">
  
     <tr>
       <th colspan="10" scope="col">JUMLAH KEPALA KELUARGA</th>
     </tr>
     <tr>
       <th width="6%" rowspan="2">NO.</th>
       <th width="32%" rowspan="2"><?php echo $this->dusun; ?></th>
       <th colspan="3">WNI</th>
       <th colspan="3">WNA</th>
       <th width="8%" rowspan="2">WNI + WNA</th>
       <th width="6%" rowspan="2">KET</th>
     </tr>
     <tr>
       <th width="8%">L</th>
       <th width="8%">P</th>
       <th width="8%">L+P</th>
       <th width="8%">L</th>
       <th width="8%">P</th>
       <th width="8%">L+P</th>
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
     </tr>
  
  
    <?php 
   $total_wni_l = 0; 
   $total_wni_p = 0;
   $total_wni = 0;
   
   $total_wna_l = 0; 
   $total_wna_p = 0;
   $total_wna = 0;
   $total = 0;
   $i=0;
   foreach($jumlah_kk->result() as $row) :  
   $i++; 
   $total_wni_l += $row->wni_l ; 
   $total_wni_p += $row->wni_p ; 
   $total_wni   += $row->wni_total; 
   
   $total_wna_l += $row->wna_l ; 
   $total_wna_p += $row->wna_p ; 
   $total_wna += $row->wna_total ; 
   $total +=  ($row->wni_total + $row->wna_total);
   ?>
   <tr>
     <td><?php echo $i; ?></td>
     <td><?php echo $row->dusun; ?></td>
     <td align="center"><?php echo $row->wni_l; ?></td>
     <td align="center"><?php echo $row->wni_p; ?></td>
     <td align="center"><?php echo $row->wni_total; ?></td>
     <td align="center"><?php echo $row->wna_l; ?></td>
     <td align="center"><?php echo $row->wna_p; ?></td>
     <td align="center"><?php echo $row->wna_total; ?></td>
     <td align="center"><?php echo $row->wni_total + $row->wna_total; ?></td>
     <td align="center">&nbsp;</td>
   </tr>
   <?php endforeach; ?>
   <tr>
     <th>&nbsp;</th>
     <th>Jumlah</th>
     <th align="center"><?php echo $total_wni_l; ?></th>
     <th align="center"><?php echo $total_wni_p; ?></th>
     <th align="center"><?php echo $total_wni; ?></th>
     <th align="center"><?php echo $total_wna_l; ?></th>
     <th align="center"><?php echo $total_wna_p; ?></th>
     <th align="center"><?php echo $total_wna; ?></th>
     <th align="center"><?php echo $total; ?></th>
     <th align="center">&nbsp;</th>
   </tr>
 </table>
<p>&nbsp;</p>
 <table width="100%" border="0" class="tabel">
  
     <tr>
       <th colspan="10" scope="col">JUMLAH PENDUDUK YANG WAJIB MEMILIKI KARTU KELUARGA</th>
     </tr>
     <tr>
       <th width="6%" rowspan="2">NO.</th>
       <th width="32%" rowspan="2"><?php echo $this->dusun; ?></th>
       <th colspan="3">WNI</th>
       <th colspan="3">WNA</th>
       <th width="8%" rowspan="2">WNI + WNA</th>
       <th width="6%" rowspan="2">KET</th>
     </tr>
     <tr>
       <th width="8%">L</th>
       <th width="8%">P</th>
       <th width="8%">L+P</th>
       <th width="8%">L</th>
       <th width="8%">P</th>
       <th width="8%">L+P</th>
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
     </tr>
  
   
    <?php 
   $total_wni_l = 0; 
   $total_wni_p = 0;
   $total_wni = 0;
   
   $total_wna_l = 0; 
   $total_wna_p = 0;
   $total_wna = 0;
   $total = 0;
   $i=0;
   foreach($jumlah_wajib_kk->result() as $row) :  
   $i++; 
   $total_wni_l += $row->wni_l ; 
   $total_wni_p += $row->wni_p ; 
   $total_wni   += $row->wni_total; 
   
   $total_wna_l += $row->wna_l ; 
   $total_wna_p += $row->wna_p ; 
   $total_wna += $row->wna_total ; 
   $total +=  ($row->wni_total + $row->wna_total);
   ?>
   <tr>
     <td><?php echo $i; ?></td>
     <td align="left"><?php echo $row->dusun; ?></td>
     <td align="center"><?php echo $row->wni_l; ?></td>
     <td align="center"><?php echo $row->wni_p; ?></td>
     <td align="center"><?php echo $row->wni_total; ?></td>
     <td align="center"><?php echo $row->wna_l; ?></td>
     <td align="center"><?php echo $row->wna_p; ?></td>
     <td align="center"><?php echo $row->wna_total; ?></td>
     <td align="center"><?php echo $row->wni_total + $row->wna_total; ?></td>
     <td align="center">&nbsp;</td>
   </tr>
   <?php endforeach; ?>
    <tr>
     <th>&nbsp;</th>
     <th align="right">Jumlah</th>
     <th align="center"><?php echo $total_wni_l; ?></th>
     <th align="center"><?php echo $total_wni_p; ?></th>
     <th align="center"><?php echo $total_wni; ?></th>
     <th align="center"><?php echo $total_wna_l; ?></th>
     <th align="center"><?php echo $total_wna_p; ?></th>
     <th align="center"><?php echo $total_wna; ?></th>
     <th align="center"><?php echo $total; ?></th>
     <th align="center">&nbsp;</th>
   </tr>
 </table>
 <p></p>
 <table width="100%" border="0" class="tabel">
  
     <tr>
       <th colspan="10" scope="col">JUMLAH PENDUDUK YANG BELUM MEMILIKI KARTU KELUARGA</th>
     </tr>
     <tr>
       <th width="6%" rowspan="2">NO.</th>
       <th width="32%" rowspan="2"><?php echo $this->dusun; ?></th>
       <th colspan="3">WNI</th>
       <th colspan="3">WNA</th>
       <th width="8%" rowspan="2">WNI + WNA</th>
       <th width="6%" rowspan="2">KET</th>
     </tr>
     <tr>
       <th width="8%">L</th>
       <th width="8%">P</th>
       <th width="8%">L+P</th>
       <th width="8%">L</th>
       <th width="8%">P</th>
       <th width="8%">L+P</th>
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
     </tr>
  
   <?php 
   $total_wni_l = 0; 
   $total_wni_p = 0;
   $total_wni = 0;
   
   $total_wna_l = 0; 
   $total_wna_p = 0;
   $total_wna = 0;
   $total = 0;
   $i=0;
   foreach($jumlah_belum_punya_kk->result() as $row) :  
   $i++; 
   $total_wni_l += $row->wni_l ; 
   $total_wni_p += $row->wni_p ; 
   $total_wni   += $row->wni_total; 
   
   $total_wna_l += $row->wna_l ; 
   $total_wna_p += $row->wna_p ; 
   $total_wna += $row->wna_total ; 
   $total +=  ($row->wni_total + $row->wna_total);
   ?> 
   <tr>
     <td><?php echo $i; ?></td>
     <td align="left"><?php echo $row->dusun; ?></td>
     <td align="center"><?php echo $row->wni_l; ?></td>
     <td align="center"><?php echo $row->wni_p; ?></td>
     <td align="center"><?php echo $row->wni_total; ?></td>
     <td align="center"><?php echo $row->wna_l; ?></td>
     <td align="center"><?php echo $row->wna_p; ?></td>
     <td align="center"><?php echo $row->wna_total; ?></td>
     <td align="center"><?php echo $row->wni_total + $row->wna_total; ?></td>
     <td align="center">&nbsp;</td>
   </tr>
   <?php endforeach; ?>
    <tr>
     <th>&nbsp;</th>
     <th align="right">Jumlah</th>
     <th align="center"><?php echo $total_wni_l; ?></th>
     <th align="center"><?php echo $total_wni_p; ?></th>
     <th align="center"><?php echo $total_wni; ?></th>
     <th align="center"><?php echo $total_wna_l; ?></th>
     <th align="center"><?php echo $total_wna_p; ?></th>
     <th align="center"><?php echo $total_wna; ?></th>
     <th align="center"><?php echo $total; ?></th>
     <th align="center">&nbsp;</th>
   </tr>
 </table>
 <p>&nbsp;</p>
 <table width="100%" border="0" class="tabel">
  
     <tr>
       <th colspan="10" scope="col">JUMLAH PENDUDUK YANG TELAH MEMILIKI KARTU KELUARGA</th>
     </tr>
     <tr>
       <th width="6%" rowspan="2">NO.</th>
       <th width="32%" rowspan="2"><?php echo $this->dusun; ?></th>
       <th colspan="3">WNI</th>
       <th colspan="3">WNA</th>
       <th width="8%" rowspan="2">WNI + WNA</th>
       <th width="6%" rowspan="2">KET</th>
     </tr>
     <tr>
       <th width="8%">L</th>
       <th width="8%">P</th>
       <th width="8%">L+P</th>
       <th width="8%">L</th>
       <th width="8%">P</th>
       <th width="8%">L+P</th>
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
     </tr>
  
   <?php 
   $total_wni_l = 0; 
   $total_wni_p = 0;
   $total_wni = 0;
   
   $total_wna_l = 0; 
   $total_wna_p = 0;
   $total_wna = 0;
   $total = 0;
   $i=0;
   foreach($jumlah_telah_punya_kk->result() as $row) :  
   $i++; 
   $total_wni_l += $row->wni_l ; 
   $total_wni_p += $row->wni_p ; 
   $total_wni   += $row->wni_total; 
   
   $total_wna_l += $row->wna_l ; 
   $total_wna_p += $row->wna_p ; 
   $total_wna += $row->wna_total ; 
   $total +=  ($row->wni_total + $row->wna_total);
   ?>
   <tr>
     <td><?php echo $i; ?></td>
     <td><?php echo $row->dusun; ?></td>
     <td align="center"><?php echo $row->wni_l; ?></td>
     <td align="center"><?php echo $row->wni_p; ?></td>
     <td align="center"><?php echo $row->wni_total; ?></td>
     <td align="center"><?php echo $row->wna_l; ?></td>
     <td align="center"><?php echo $row->wna_p; ?></td>
     <td align="center"><?php echo $row->wna_total; ?></td>
     <td align="center"><?php echo $row->wni_total + $row->wna_total; ?></td>
     <td align="center">&nbsp;</td>
   </tr>
   <?php endforeach; ?>
   <tr>
     <th>&nbsp;</th>
     <th>Jumlah</th>
     <th align="center"><?php echo $total_wni_l; ?></th>
     <th align="center"><?php echo $total_wni_p; ?></th>
     <th align="center"><?php echo $total_wni; ?></th>
     <th align="center"><?php echo $total_wna_l; ?></th>
     <th align="center"><?php echo $total_wna_p; ?></th>
     <th align="center"><?php echo $total_wna; ?></th>
     <th align="center"><?php echo $total; ?></th>
     <th align="center">&nbsp;</th>
   </tr>
 </table>
 <p>&nbsp;</p>
 <table width="100%" border="0" class="tabel">
  
     <tr>
       <th colspan="10" scope="col">JUMLAH PENDUDUK YANG WAJIB MEMILIKI KTP</th>
     </tr>
     <tr>
       <th width="6%" rowspan="2">NO.</th>
       <th width="32%" rowspan="2"><?php echo $this->dusun; ?></th>
       <th colspan="3">WNI</th>
       <th colspan="3">WNA</th>
       <th width="8%" rowspan="2">WNI + WNA</th>
       <th width="6%" rowspan="2">KET</th>
     </tr>
     <tr>
       <th width="8%">L</th>
       <th width="8%">P</th>
       <th width="8%">L+P</th>
       <th width="8%">L</th>
       <th width="8%">P</th>
       <th width="8%">L+P</th>
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
     </tr>
  
   <?php 
   $total_wni_l = 0; 
   $total_wni_p = 0;
   $total_wni = 0;
   
   $total_wna_l = 0; 
   $total_wna_p = 0;
   $total_wna = 0;
   $total = 0;
   $i=0;
   foreach($jumlah_wajib_ktp->result() as $row) :  
   $i++; 
   $total_wni_l += $row->wni_l ; 
   $total_wni_p += $row->wni_p ; 
   $total_wni   += $row->wni_total; 
   
   $total_wna_l += $row->wna_l ; 
   $total_wna_p += $row->wna_p ; 
   $total_wna += $row->wna_total ; 
   $total +=  ($row->wni_total + $row->wna_total);
   ?>
   <tr>
     <td><?php echo $i; ?></td>
     <td><?php echo $row->dusun; ?></td>
     <td align="right"><?php echo $row->wni_l; ?></td>
     <td align="right"><?php echo $row->wni_p; ?></td>
     <td align="right"><?php echo $row->wni_total; ?></td>
     <td align="right"><?php echo $row->wna_l; ?></td>
     <td align="right"><?php echo $row->wna_p; ?></td>
     <td align="right"><?php echo $row->wna_total; ?></td>
     <td align="right"><?php echo $row->wni_total + $row->wna_total; ?></td>
     <td align="right">&nbsp;</td>
   </tr>
   <?php endforeach; ?>
   <tr>
     <th>&nbsp;</th>
     <th>Jumlah</th>
     <th align="right"><?php echo $total_wni_l; ?></th>
     <th align="right"><?php echo $total_wni_p; ?></th>
     <th align="right"><?php echo $total_wni; ?></th>
     <th align="right"><?php echo $total_wna_l; ?></th>
     <th align="right"><?php echo $total_wna_p; ?></th>
     <th align="right"><?php echo $total_wna; ?></th>
     <th align="right"><?php echo $total; ?></th>
     <th align="right">&nbsp;</th>
   </tr>
 </table>
 <p></p>

 <table width="100%" border="0" class="tabel">
  
     <tr>
       <th colspan="10" scope="col">JUMLAH PENDUDUK YANG TELAH MEMILIKI KTP</th>
     </tr>
     <tr>
       <th width="6%" rowspan="2">NO.</th>
       <th width="32%" rowspan="2"><?php echo $this->dusun; ?></th>
       <th colspan="3">WNI</th>
       <th colspan="3">WNA</th>
       <th width="8%" rowspan="2">WNI + WNA</th>
       <th width="6%" rowspan="2">KET</th>
     </tr>
     <tr>
       <th width="8%">L</th>
       <th width="8%">P</th>
       <th width="8%">L+P</th>
       <th width="8%">L</th>
       <th width="8%">P</th>
       <th width="8%">L+P</th>
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
     </tr>
  
   <?php 
   $total_wni_l = 0; 
   $total_wni_p = 0;
   $total_wni = 0;
   
   $total_wna_l = 0; 
   $total_wna_p = 0;
   $total_wna = 0;
   $total = 0;
   $i=0;
   foreach($jumlah_punya_ktp->result() as $row) :  
   $i++; 
   $total_wni_l += $row->wni_l ; 
   $total_wni_p += $row->wni_p ; 
   $total_wni   += $row->wni_total; 
   
   $total_wna_l += $row->wna_l ; 
   $total_wna_p += $row->wna_p ; 
   $total_wna += $row->wna_total ; 
   $total +=  ($row->wni_total + $row->wna_total);
   ?>
   <tr>
     <td><?php echo $i; ?></td>
     <td><?php echo $row->dusun; ?></td>
     <td align="center"><?php echo $row->wni_l; ?></td>
     <td align="center"><?php echo $row->wni_p; ?></td>
     <td align="center"><?php echo $row->wni_total; ?></td>
     <td align="center"><?php echo $row->wna_l; ?></td>
     <td align="center"><?php echo $row->wna_p; ?></td>
     <td align="center"><?php echo $row->wna_total; ?></td>
     <td align="center"><?php echo $row->wni_total + $row->wna_total; ?></td>
     <td>&nbsp;</td>
   </tr>
   <?php endforeach; ?>
   <tr>
     <th>&nbsp;</th>
     <th>Jumlah</th>
     <th><?php echo $total_wni_l; ?></th>
     <th><?php echo $total_wni_p; ?></th>
     <th><?php echo $total_wni; ?></th>
     <th><?php echo $total_wna_l; ?></th>
     <th><?php echo $total_wna_p; ?></th>
     <th><?php echo $total_wna; ?></th>
     <th><?php echo $total; ?></th>
     <th>&nbsp;</th>
   </tr>
 </table>
 <p></p>

 <table width="100%" border="0" class="tabel">
  
     <tr>
       <th colspan="10" scope="col">JUMLAH PENDUDUK YANG BELUM MEMILIKI KTP</th>
     </tr>
     <tr>
       <th width="6%" rowspan="2">NO.</th>
       <th width="32%" rowspan="2"><?php echo $this->dusun; ?></th>
       <th colspan="3">WNI</th>
       <th colspan="3">WNA</th>
       <th width="8%" rowspan="2">WNI + WNA</th>
       <th width="6%" rowspan="2">KET</th>
     </tr>
     <tr>
       <th width="8%">L</th>
       <th width="8%">P</th>
       <th width="8%">L+P</th>
       <th width="8%">L</th>
       <th width="8%">P</th>
       <th width="8%">L+P</th>
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
     </tr>
  
   <?php 
   $total_wni_l = 0; 
   $total_wni_p = 0;
   $total_wni = 0;
   
   $total_wna_l = 0; 
   $total_wna_p = 0;
   $total_wna = 0;
   $total = 0;
   $i=0;
   foreach($jumlah_belum_punya_ktp->result() as $row) :  
   $i++; 
   $total_wni_l += $row->wni_l ; 
   $total_wni_p += $row->wni_p ; 
   $total_wni   += $row->wni_total; 
   
   $total_wna_l += $row->wna_l ; 
   $total_wna_p += $row->wna_p ; 
   $total_wna += $row->wna_total ; 
   $total +=  ($row->wni_total + $row->wna_total);
   ?>
   <tr>
     <td><?php echo $i; ?></td>
     <td><?php echo $row->dusun; ?></td>
     <td align="center"><?php echo $row->wni_l; ?></td>
     <td align="center"><?php echo $row->wni_p; ?></td>
     <td align="center"><?php echo $row->wni_total; ?></td>
     <td align="center"><?php echo $row->wna_l; ?></td>
     <td align="center"><?php echo $row->wna_p; ?></td>
     <td align="center"><?php echo $row->wna_total; ?></td>
     <td align="center"><?php echo $row->wni_total + $row->wna_total; ?></td>
     <td align="center">&nbsp;</td>
   </tr>
   <?php endforeach; ?>
   <tr>
     <th>&nbsp;</th>
     <th>Jumlah</th>
     <th><?php echo $total_wni_l; ?></th>
     <th><?php echo $total_wni_p; ?></th>
     <th><?php echo $total_wni; ?></th>
     <th><?php echo $total_wna_l; ?></th>
     <th><?php echo $total_wna_p; ?></th>
     <th><?php echo $total_wna; ?></th>
     <th><?php echo $total; ?></th>
     <th>&nbsp;</th>
   </tr>
 </table>
 <p></p>

 <table width="100%" border="0" class="tabel">
  
     <tr>
       <th colspan="10" scope="col">JUMLAH PENDUDUK YANG LAHIR</th>
     </tr>
     <tr>
       <th width="6%" rowspan="2">NO.</th>
       <th width="32%" rowspan="2"><?php echo $this->dusun; ?></th>
       <th colspan="3">WNI</th>
       <th colspan="3">WNA</th>
       <th width="8%" rowspan="2">WNI + WNA</th>
       <th width="6%" rowspan="2">KET</th>
     </tr>
     <tr>
       <th width="8%">L</th>
       <th width="8%">P</th>
       <th width="8%">L+P</th>
       <th width="8%">L</th>
       <th width="8%">P</th>
       <th width="8%">L+P</th>
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
     </tr>
  
   <?php 
   $total_wni_l = 0; 
   $total_wni_p = 0;
   $total_wni = 0;
   
   $total_wna_l = 0; 
   $total_wna_p = 0;
   $total_wna = 0;
   $total = 0;
   $i=0;
   foreach($jumlah_kelahiran->result() as $row) :  
   $i++; 
   $total_wni_l += $row->wni_l ; 
   $total_wni_p += $row->wni_p ; 
   $total_wni   += $row->wni_total; 
   
   $total_wna_l += $row->wna_l ; 
   $total_wna_p += $row->wna_p ; 
   $total_wna += $row->wna_total ; 
   $total +=  ($row->wni_total + $row->wna_total);
   ?>
   <tr>
     <td><?php echo $i; ?></td>
     <td><?php echo $row->dusun; ?></td>
     <td align="center"><?php echo $row->wni_l; ?></td>
     <td align="center"><?php echo $row->wni_p; ?></td>
     <td align="center"><?php echo $row->wni_total; ?></td>
     <td align="center"><?php echo $row->wna_l; ?></td>
     <td align="center"><?php echo $row->wna_p; ?></td>
     <td align="center"><?php echo $row->wna_total; ?></td>
     <td align="center"><?php echo $row->wni_total + $row->wna_total; ?></td>
     <td>&nbsp;</td>
   </tr>
   <?php endforeach; ?>
   <tr>
     <th>&nbsp;</th>
     <th>Jumlah</th>
     <th><?php echo $total_wni_l; ?></th>
     <th><?php echo $total_wni_p; ?></th>
     <th><?php echo $total_wni; ?></th>
     <th><?php echo $total_wna_l; ?></th>
     <th><?php echo $total_wna_p; ?></th>
     <th><?php echo $total_wna; ?></th>
     <th><?php echo $total; ?></th>
     <th>&nbsp;</th>
   </tr>
 </table>
 <p></p>
 
 <table width="100%" border="0" class="tabel">
  
     <tr>
       <th colspan="10" scope="col">JUMLAH PENDUDUK YANG MATI</th>
     </tr>
     <tr>
       <th width="6%" rowspan="2">NO.</th>
       <th width="32%" rowspan="2"><?php echo $this->dusun; ?></th>
       <th colspan="3">WNI</th>
       <th colspan="3">WNA</th>
       <th width="8%" rowspan="2">WNI + WNA</th>
       <th width="6%" rowspan="2">KET</th>
     </tr>
     <tr>
       <th width="8%">L</th>
       <th width="8%">P</th>
       <th width="8%">L+P</th>
       <th width="8%">L</th>
       <th width="8%">P</th>
       <th width="8%">L+P</th>
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
     </tr>
  
   <?php 
   $total_wni_l = 0; 
   $total_wni_p = 0;
   $total_wni = 0;
   
   $total_wna_l = 0; 
   $total_wna_p = 0;
   $total_wna = 0;
   $total = 0;
   $i=0;
   foreach($jumlah_kematian->result() as $row) :  
   $i++; 
   $total_wni_l += $row->wni_l ; 
   $total_wni_p += $row->wni_p ; 
   $total_wni   += $row->wni_total; 
   
   $total_wna_l += $row->wna_l ; 
   $total_wna_p += $row->wna_p ; 
   $total_wna += $row->wna_total ; 
   $total +=  ($row->wni_total + $row->wna_total);
   ?>
   <tr>
     <td><?php echo $i; ?></td>
     <td><?php echo $row->dusun; ?></td>
     <td align="center"><?php echo $row->wni_l; ?></td>
     <td align="center"><?php echo $row->wni_p; ?></td>
     <td align="center"><?php echo $row->wni_total; ?></td>
     <td align="center"><?php echo $row->wna_l; ?></td>
     <td align="center"><?php echo $row->wna_p; ?></td>
     <td align="center"><?php echo $row->wna_total; ?></td>
     <td align="center"><?php echo $row->wni_total + $row->wna_total; ?></td>
     <td>&nbsp;</td>
   </tr>
   <?php endforeach; ?>
   <tr>
     <th>&nbsp;</th>
     <th>Jumlah</th>
     <th><?php echo $total_wni_l; ?></th>
     <th><?php echo $total_wni_p; ?></th>
     <th><?php echo $total_wni; ?></th>
     <th><?php echo $total_wna_l; ?></th>
     <th><?php echo $total_wna_p; ?></th>
     <th><?php echo $total_wna; ?></th>
     <th><?php echo $total; ?></th>
     <th>&nbsp;</th>
   </tr>
 </table>
 <p></p>
</center>
<?php  if($desa2->bentuk_lembaga=="Kelurahan")  {  ?>
<table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="63%" align="left">MENGETAHUI,</td>
    <td width="37%" align="left"><?php echo $desa2->desa.", ".date("d-m-Y"); ?></td>
  </tr>
  <tr>
    <td align="left">LURAH <?php echo $desa2->desa; ?></td>
    <td align="left">SEKLUR </td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left"><u><?php echo  $desa2->nama_kepala_desa ?></u></td>
    <td align="left"><u><?php echo  $desa2->nama_sek_desa ?></u></td>
  </tr>
  <tr>
    <td align="left" valign="top"><table width="100%" border="0" cellpadding="0">
      <tr>
        <td width="8%" align="left">PANGKAT</td>
        <td width="92%" align="left">: <?php echo  $desa2->pangkat_kepala_desa ?></td>
      </tr>
      <tr>
        <td colspan="2" align="left">NIP. <?php echo  $desa2->nip_kepala_desa ?></td>
        </tr>
    </table></td>
    <td align="left"><table width="100%" border="0" cellpadding="0">
      <tr>
        <td width="14%" align="left">PANGKAT</td>
        <td width="86%" align="left">: <?php echo  $desa2->pangkat_sek_desa ?></td>
      </tr>
      <tr>
        <td colspan="2" align="left">NIP. <?php echo  $desa2->nip_sek_desa ?></td>
        </tr>
    </table></td>
  </tr>
</table>
<?php }  else { ?>
<table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="63%" align="left" valign="top">MENGETAHUI,</td>
    <td width="37%" align="left"><?php echo $desa2->desa.", ".date("d-m-Y"); ?></td>
  </tr>
  <tr>
    <td align="left" valign="top">KEPALA DESA <?php echo $desa2->desa; ?></td>
    <td align="left">SEKRETARIS DESA</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><u><?php echo  $desa2->nama_kepala_desa ?></u></td>
    <td align="left"><u><?php echo  $desa2->nama_sek_desa ?></u></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left"><table width="100%" border="0" cellpadding="0">
      <tr>
        <td width="14%" align="left">PANGKAT</td>
        <td width="86%" align="left">: <?php echo  $desa2->pangkat_sek_desa ?></td>
      </tr>
      <tr>
        <td colspan="2" align="left">NIP. <?php echo  $desa2->nip_sek_desa ?></td>
      </tr>
    </table></td>
  </tr>
</table>
<?php }  ?>
<p>&nbsp;</p>

</body>
</html>