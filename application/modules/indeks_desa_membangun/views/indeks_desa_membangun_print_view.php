<!DOCTYPE html>
<html>
<head>
    <title>  <?php echo   $title; ?></title>
    <style type="text/css">
         * {
    font-family: verdana;
    font-size: 12px;
  }

 .tabel {
    border-collapse: collapse;
    border-spacing: 1px;
 }

 .tabel th, .tabel td {
    border-collapse:collapse;
border: 1px solid #000;     
    padding: 2px;
    font-family: verdana; 
    font-size : 12px;
 }


 h2 {
    font-size: 14px;
 }
  h2 {
    font-size: 13px;
 }
    </style>
</head>
<body>
<p><h2><center>INDIKATOR DESA MEMBANGUN</center></h2></p>
<table width="100%" class=tabel>
  <thead>
  <tr>
    <th width="3%">NO</th>
    <th>DIMENSI</th>
    <th colspan="3">VARIABEL</th>
    <th colspan="2">INDIKATOR </th>
  </tr>
  </thead>
  <tr>
    <td rowspan="34"><div align="center">1.</div>      <div align="center"></div></td>
    <td rowspan="34"><div align="center"><strong>KETAHANAN SOSIAL</strong></div></td>
    <td rowspan="5"><div align="center"><strong>KESEHATAN</strong></div></td>
    <td width="3%" rowspan="2"><div align="center">1.</div></td>
    <td rowspan="2">Pelayanan Kesehatan </td>
    <td width="3%"><div align="center">1.</div></td>
    <td><?php echo $waktu_tempuh; ?></td>
  </tr>
  <tr>
    <td><div align="center">2.</div></td>
    <td><?php echo $tenaga_kesehatan; ?></td>
  </tr>
  <tr>
    <td rowspan="2"><div align="center">2.</div>      <div align="center"></div></td>
    <td rowspan="2">Keberdayaan Masyarakat utk  Kesehatan</td>
    <td><div align="center">3.</div></td>
    <td><?php echo $akses_poskedes; ?></td>
  </tr>
  <tr>
    <td><div align="center">4.</div></td>
    <td><?php echo $aktivitas_posyandu; ?></td>
  </tr>
  <tr>
    <td><div align="center">3.</div></td>
    <td>Jaminan Kesehatan</td>
    <td><div align="center">5.</div></td>
    <td><?php echo $bpjs; ?></td>
  </tr>
  <tr>
    <td rowspan="7"><div align="center"><strong>PENDIDIKAN</strong></div></td>
    <td rowspan="3"><div align="center">4.</div></td>
    <td rowspan="3">Akses Pendidikan Dasar dan  Menengah </td>
    <td><div align="center">6.</div></td>
    <td><?php echo $akses_sd ?></td>
  </tr>
  <tr>
    <td><div align="center">7.</div></td>
    <td><?php echo $akses_smp ?></td>
  </tr>
  <tr>
    <td><div align="center">8.</div></td>
    <td><?php echo $akses_smu ?></td>
  </tr>
  <tr>
    <td rowspan="3"><div align="center">5.</div></td>
    <td rowspan="3">Akses Pendidikan Non Formal </td>
    <td><div align="center">9.</div></td>
    <td><?php echo $buta_aksara?></td>
  </tr>
  <tr>
    <td><div align="center">10.</div></td>
    <td><?php echo $paud?></td>
  </tr>
  <tr>
    <td><div align="center">11.</div></td>
    <td><?php echo $pkbm?></td>
  </tr>
  <tr>
    <td><div align="center">6.</div></td>
    <td>Akses ke Pengatahuan</td>
    <td><div align="center">12.</div></td>
    <td><?php echo $taman_baca?></td>
  </tr>
  <tr>
    <td rowspan="14"><div align="center"><strong>MODAL SOSIAL </strong></div></td>
    <td rowspan="4"><div align="center">7.</div></td>
    <td rowspan="4">Memiliki Solidaritas Sosial</td>
    <td><div align="center">13.</div></td>
    <td><?php echo $gotong?></td>
  </tr>
  <tr>
    <td><div align="center">14.</div></td>
    <td><?php echo $ruang_publik?></td>
  </tr>
  <tr>
    <td><div align="center">15.</div></td>
    <td><?php echo $olahraga?></td>
  </tr>
  <tr>
    <td><div align="center">16.</div></td>
    <td><?php echo $kelompok_olahraga?></td>
  </tr>
  <tr>
    <td rowspan="3"><div align="center">8.</div></td>
    <td rowspan="3">Toleransi </td>
    <td><div align="center">17.</div></td>
    <td><?php echo $etnis?></td>
  </tr>
  <tr>
    <td><div align="center">18.</div></td>
    <td><?php echo $bahasa?></td>
  </tr>
  <tr>
    <td><div align="center">19.</div></td>
    <td><?php echo $agama?></td>
  </tr>
    <tr>
      <td rowspan="4"><div align="center">9.</div></td>
      <td rowspan="4">Rasa Aman Penduduk </td>
      <td><div align="center">20.</div></td>
      <td><?php echo $poskamling?></td>
    </tr>
    <tr>
      <td><div align="center">21.</div></td>
      <td><?php echo $siskamling?></td>
    </tr>
    <tr>
      <td><div align="center">22.</div></td>
      <td><?php echo $perkelahian?></td>
    </tr>
    <tr>
      <td><div align="center">23.</div></td>
      <td><?php echo $penyelesaian?></td>
    </tr>
    <tr>
      <td rowspan="3"><div align="center">10.</div></td>
      <td rowspan="3">Kesejahteraan Sosial </td>
      <td><div align="center">24.</div></td>
      <td><?php echo $slb?></td>
    </tr>
    <tr>
      <td><div align="center">25.</div></td>
      <td><?php echo $kesejahteraan_sosial?></td>
    </tr>
    <tr>
      <td><div align="center">26.</div></td>
      <td><?php echo $bunuh_diri?></td>
    </tr>
    <tr>
      <td rowspan="8"><div align="center"><strong>PERMUKIMAN</strong></div></td>
      <td rowspan="2"><div align="center">11.</div></td>
      <td rowspan="2">Akses ke Air Bersih dan Air Minum  Layak</td>
      <td><div align="center">27.</div></td>
      <td><?php echo $sumber_air?></td>
    </tr>
    <tr>
      <td><div align="center">28.</div></td>
      <td><?php echo $air_mandi?></td>
    </tr>
    <tr>
      <td rowspan="2"><div align="center">12.</div></td>
      <td rowspan="2">Akses ke Sanitasi</td>
      <td><div align="center">29.</div></td>
      <td><?php echo $jamban?></td>
    </tr>
    <tr>
      <td><div align="center">30.</div></td>
      <td><?php echo $sampah?></td>
    </tr>
    <tr>
      <td><div align="center">13.</div></td>
      <td>Akses ke Listrik </td>
      <td><div align="center">31.</div></td>
      <td><?php echo $aliran_listrik?> Jumlah keluarga yang telah memiliki aliran listrik.</td>
    </tr>
    <tr>
      <td rowspan="3"><div align="center">14.</div></td>
      <td rowspan="3">Akses Informasi dan Komunikasi </td>
      <td><div align="center">32.</div></td>
      <td><?php echo $sinyal?></td>
    </tr>
    <tr>
      <td><div align="center">33.</div></td>
      <td><?php echo $tv?></td>
    </tr>
    <tr>
      <td><div align="center">34.</div></td>
      <td><?php echo $internet?></td>
    </tr>
    <tr>
      <td rowspan="12"><div align="center">2.</div></td>
      <td rowspan="12"><div align="center"><strong>KETAHANAN  EKONOMI </strong></div></td>
      <td rowspan="12"><div align="center"></div></td>
      <td><div align="center">15.</div></td>
      <td>Keragaman Produksi Masyarakat  Desa</td>
      <td><div align="center">35.</div></td>
      <td><?php echo $jenis_ekonomi?></td>
    </tr>
    <tr>
      <td rowspan="2"><div align="center">16.</div></td>
      <td rowspan="2">Tersedia Pusat Pelayanan  Perdagangan </td>
      <td><div align="center">36.</div></td>
      <td><?php echo $pusat_perdagangan?></td>
    </tr>
    <tr>
      <td><div align="center">37.</div></td>
      <td><?php echo $minimarket?></td>
    </tr>
    <tr>
      <td><div align="center">17.</div></td>
      <td>Akses Distribusi/Logistik</td>
      <td><div align="center">38.</div></td>
      <td><?php echo $logistik?></td>
    </tr>
    <tr>
      <td rowspan="3"><div align="center">18.</div></td>
      <td rowspan="3">Akses ke Lembaga Keuangan dan  Perkreditan</td>
      <td><div align="center">39.</div></td>
      <td><?php echo $perbankan?></td>
    </tr>
    <tr>
      <td><div align="center">40.</div></td>
      <td><?php echo $bpr?></td>
    </tr>
    <tr>
      <td><div align="center">41.</div></td>
      <td><?php echo $kredit?></td>
    </tr>
    <tr>
      <td rowspan="2"><div align="center">19.</div></td>
      <td rowspan="2">Lembaga Ekonomi </td>
      <td><div align="center">42.</div></td>
      <td><?php echo $koperasi?></td>
    </tr>
    <tr>
      <td><div align="center">43.</div></td>
      <td><?php echo $penginapan?></td>
    </tr>
    <tr>
      <td rowspan="3"><div align="center">20.</div></td>
      <td rowspan="3">Keterbukaan Wilayah </td>
      <td><div align="center">44.</div></td>
      <td><?php echo $transportasi?></td>
    </tr>
    <tr>
      <td><div align="center">45.</div></td>
      <td><?php echo $bermotor?></td>
    </tr>
    <tr>
      <td><div align="center">46.</div></td>
      <td><?php echo $jalan?> Kualitas Jalan Desa (Jalan terluas di desa dengan  aspal, kerikil, dan tanah)  </td>
    </tr>
    <tr>
      <td rowspan="6"><div align="center">3.</div></td>
      <td rowspan="6"><div align="center"><strong>EKOLOGI</strong></div></td>
      <td rowspan="6"><div align="center"></div></td>
      <td rowspan="2"><div align="center">21.</div></td>
      <td rowspan="2">Kualitas Lingkungan</td>
      <td><div align="center">47.</div></td>
      <td><?php echo $pencemaran?></td>
    </tr>
    <tr>
      <td><div align="center">48.</div></td>
      <td><?php echo $sungai?></td>
    </tr>
    <tr>
      <td rowspan="4"><div align="center">22.</div>        <div align="center"></div></td>
      <td rowspan="4">Potensi/Rawan Bencana Alam</td>
      <td><div align="center">49.</div></td>
      <td><?php echo $air?></td>
    </tr>
    <tr>
      <td><div align="center">50.</div></td>
      <td><?php echo $bencanaalam?> (kejadian Bencana Alam) </td>
    </tr>
    <tr>
      <td><div align="center">51.</div></td>
      <td><?php echo $tindakanbencana?> Upaya/Tindakan terh  adap potensi bencana alam  (Tanggap bencana, jalur evakuasi, peringatan dini  dan ketersediaan peralatan penanganan bencana)</td>
    </tr>
    <tr>
    <td><div align="center">52.</div></td>
	<td><?php echo $upayaantisipasi?> (Upaya Antisipasi,  Mitigasi bencana alam yg ada di  desa)</td>
  </tr>
</table>

</body>
</html>