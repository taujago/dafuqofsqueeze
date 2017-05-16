<div id="detail" style="min-height: 400px;" >
   <div id="detail-head">
    <?php echo $title; ?>
   </div>
 
<p></p>
<p></p>
    <style type="text/css">
      .table1 {
    /*font-family: sans-serif;*/
    color: black;
    border-collapse: collapse;
    width: 100%;
    border: 1px solid black;
}

.table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
     border: 1px solid black;
}

.table1, th, td {
    padding: 8px 20px;
    /*text-align: center;*/
     border: 1px solid black;
}

.table1 tr:hover {
    background-color: #f5f5f5;
}

.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}
    </style>
   <div>
   <p><h3><center>Indikator Desa Membangun</center></h3></p>
   <form id="imd" name="imd" 
action="<?php echo site_url("indeks_desa_membangun/save"); ?>" method="post" > 
       <table width="100%" class="table1" >
         <tr>
           <td><div align="center"><strong>No</strong></div></td>
           <td><div align="center"><strong>Dimensi</strong></div></td>
           <td colspan="3"><div align="center"><strong>Variable</strong></div></td>
           <td>&nbsp;</td>
           <td><div align="center"><strong>Indikator</strong></div></td>
         </tr>
         <tr>
           <td rowspan="34">1.</td>
           <td rowspan="34"><div align="center"><strong>KETAHANAN SOSIAL</strong></div></td>
           <td rowspan="5"><strong>Kesehatan</strong></td>
           <td rowspan="2">1.</td>
           <td rowspan="2">Pelayanan masyarakat </td>
           <td>1.</td>
             <td><?php $arr = array(
                'Waktu Tempuh ke prasarana kesehatan < 30 menit'=>"Waktu Tempuh ke prasarana kesehatan < 30 menit",
                'Waktu Tempuh ke prasarana kesehatan > 30 menit'=>"Waktu Tempuh ke prasarana kesehatan > 30 menit");
                              echo form_dropdown("waktu_tempuh",$arr,$waktu_tempuh,'');
                  ?>           </td>
         </tr>
         <tr>
           <td>2.</td>
           <td><?php $arr = array(
                'Tersedia tenaga kesehatan, bidan, dokter dan nakes lain'=>"Tersedia tenaga kesehatan, bidan, dokter dan nakes lain",
                'Tidak tersedia tenaga kesehatan, bidan, dokter dan nakes lain'=>"Tidak tersedia tenaga kesehatan, bidan, dokter dan nakes lain");
                              echo form_dropdown("tenaga_kesehatan",$arr,$tenaga_kesehatan,'');
                  ?>           </td>
         </tr>
         <tr>
           <td rowspan="2">2.</td>
           <td rowspan="2">Keberdayaan Masyarakat Untuk Kesehatan </td>
           <td>3.</td>
           <td><?php $arr = array(
                'Akses ke poskesdes, polindes dan posyandu'=>"Akses ke poskesdes, polindes dan posyandu",
                'Tidak ada Akses ke poskesdes, polindes dan posyandu'=>"Tidak ada Akses ke poskesdes, polindes dan posyandu");
                              echo form_dropdown("akses_poskedes",$arr,$akses_poskedes,'');
                  ?>          </td>
         </tr>
         <tr>
           <td>4.</td>
           <td><?php $arr = array(
                'Tingkat aktivitas posyandu'=>"Tingkat aktivitas posyandu",
                'Tidak ada aktivitas posyandu'=>"Tidak ada aktivitas posyandu");
                              echo form_dropdown("aktivitas_posyandu",$arr,$aktivitas_posyandu,'');
                  ?>           </td>
         </tr>
         <tr>
           <td>3.</td>
           <td>Jaminan Kesehatan </td>
           <td>5.</td>
           <td><?php $arr = array(
                'Tingkat kepesertaan BPJS'=>"Tingkat kepesertaan BPJS",
                'Tidak ada kepesertaan BPJS'=>"Tidak ada kepesertaan BPJS");
                              echo form_dropdown("bpjs",$arr,$bpjs,'');
                  ?>           </td>
         </tr>
         <tr>
           <td rowspan="7"><strong>Pendidikan</strong></td>
           <td rowspan="3">4.</td>
           <td rowspan="3">Akses Pendidikan Dasar dan  Menengah</td>
           <td>6.</td>
           <td><?php $arr = array(
                'Akses ke Pendidikan Dasar SD/MI < 3 KM'=>"Akses ke Pendidikan Dasar SD/MI < 3 KM",
                'Akses ke Pendidikan Dasar SD/MI > 3 KM'=>"Akses ke Pendidikan Dasar SD/MI > 3  KM");
                              echo form_dropdown("akses_sd",$arr,$akses_sd,'');
                  ?></td>
         </tr>
         <tr>
           <td>7.</td>
           <td><?php $arr = array(
                'Akses ke SMP/MTS < 6 km'=>"Akses ke SMP/MTS < 6 km",
                'Akses ke SMP/MTS > 6 km'=>"Akses ke SMP/MTS > 6 km");
                              echo form_dropdown("akses_smp",$arr,$akses_smp,'');
                  ?></td>
         </tr>
         <tr>
           <td>8.</td>
           <td><?php $arr = array(
                'Akses ke SMU/SMK < 6 km'=>"Akses ke SMU/SMK < 6 km",
                'Akses ke SMU/SMK > 6 km'=>"Akses ke SMU/SMK > 6 km");
                              echo form_dropdown("akses_smu",$arr,$akses_smu,'');
                  ?></td>
         </tr>
         <tr>
           <td rowspan="3">5.</td>
           <td rowspan="3">Akses Pendidikan Non Formal</td>
           <td>9.</td>
           <td><?php $arr = array(
                'Kegiatan pemberantasan buta aksara'=>"Kegiatan pemberantasan buta aksara",
                'TIdak Ada Kegiatan pemberantasan buta aksara'=>"TIdak Ada Kegiatan pemberantasan buta aksara");
                              echo form_dropdown("buta_aksara",$arr,$buta_aksara,'');
                  ?></td>
         </tr>
         <tr>
           <td>10.</td>
           <td><?php $arr = array(
                'Kegiatan PAUD'=>"Kegiatan PAUD",
                'Tidak Ada Kegiatan PAUD'=>"Tidak Ada Kegiatan PAUD");
                              echo form_dropdown("paud",$arr,$paud,'');
                  ?></td>
         </tr>
         <tr>
           <td>11.</td>
           <td><?php $arr = array(
                'Kegiatan PKBM/Paket ABC'=>"Kegiatan PKBM/Paket ABC",
                'Tidak Ada Kegiatan PKBM/Paket ABC'=>"Tidak Ada Kegiatan PKBM/Paket ABC");
                              echo form_dropdown("pkbm",$arr,$pkbm,'');
                  ?></td>
         </tr>
         <tr>
           <td>6.</td>
           <td>Akses ke Pengetahuan </td>
           <td>12.</td>
           <td><?php $arr = array(
                'Taman Bacaan Masyarakat atau Perpustakaan Desa'=>"Taman Bacaan Masyarakat atau Perpustakaan Desa",
                'Tidak Ada Taman Bacaan Masyarakat atau Perpustakaan Desa
'=>"Tidak Ada Taman Bacaan Masyarakat atau Perpustakaan Desa
");
                              echo form_dropdown("taman_baca",$arr,$taman_baca,'');
                  ?></td>
         </tr>
         <tr>
           <td rowspan="14"><strong>Media Sosial </strong></td>
           <td rowspan="4">7.</td>
           <td rowspan="4">Memiliki Solidaritas Sosial</td>
           <td>13.</td>
           <td><?php $arr = array(
                'Kebiasaan gotong royong didesa'=>"Kebiasaan gotong royong didesa",
                'Tidak Ada Kebiasaan gotong royong didesa'=>"Tidak Ada Kebiasaan gotong royong didesa");
                              echo form_dropdown("gotong",$arr,$gotong,'');
                  ?></td>
         </tr>
         <tr>
           <td>14.</td>
           <td><?php $arr = array(
                'Keberadaan ruang publik terbuka bagi warga yg tidak berbayar'=>"Keberadaan ruang publik terbuka bagi warga yg tidak berbayar",
                'Tidak Ada ruang publik terbuka bagi warga yg tidak berbayar'=>"Tidak Ada ruang publik terbuka bagi warga yg tidak berbayar");
                              echo form_dropdown("ruang_publik",$arr,$ruang_publik,'');
                  ?></td>
         </tr>
         <tr>
           <td>15.</td>
           <td><?php $arr = array(
                'Ketersediaan fasilitas/lapangan olahraga'=>"Ketersediaan fasilitas/lapangan olahraga",
                'Tidak tersedia fasilitas/lapangan olahraga'=>"Tidak tersedia fasilitas/lapangan olahraga");
                              echo form_dropdown("olahraga",$arr,$olahraga,'');
                  ?></td>
         </tr>
         <tr>
           <td>16.</td>
           <td><?php $arr = array(
                'Terdapat kelompok kegiatan olahraga'=>"Terdapat kelompok kegiatan olahraga",
                'Tidak Terdapat kelompok kegiatan olahraga'=>"Tidak Terdapat kelompok kegiatan olahraga");
                              echo form_dropdown("kelompok_olahraga",$arr,$kelompok_olahraga,'');
                  ?></td>
         </tr>
         <tr>
           <td rowspan="3">8.</td>
           <td rowspan="3">Toleransi</td>
           <td>17.</td>
           <td><?php $arr = array(
                'Warga desa terdiri dari beberapa suku/etnis'=>"Warga desa terdiri dari beberapa suku/etnis",
                'Tidak terdiri dari beberapa suku/etnis'=>"Tidak terdiri dari beberapa suku/etnis");
                              echo form_dropdown("etnis",$arr,$etnis,'');
                  ?></td>
         </tr>
         <tr>
           <td>18.</td>
           <td><?php $arr = array(
                'Warga desa berkomunikasi sehari-hari menggunakan bahasa yang berbeda'=>"Warga desa berkomunikasi sehari-hari menggunakan bahasa yang berbeda",
                'Warga desa berkomunikasi sehari-hari menggunakan satu bahasa'=>"Warga desa berkomunikasi sehari-hari menggunakan satu bahasa");
                              echo form_dropdown("bahasa",$arr,$bahasa,'');
                  ?></td>
         </tr>
         <tr>
           <td>19.</td>
           <td><?php $arr = array(
                'Agama yang dianut sebagian besar warga di desa'=>"Agama yang dianut sebagian besar warga di desa",
                'Agama yang dianut sebagian besar warga di desa'=>"Agama yang dianut sebagian besar warga di desa");
                              echo form_dropdown("agama",$arr,$agama,'');
                  ?></td>
         </tr>
         <tr>
           <td rowspan="4">9.  </td>
           <td rowspan="4">Rasa Aman Penduduk </td>
           <td>20.</td>
           <td><?php $arr = array(
                'Warga desa membangun pemeliharaan poskamling lingkungan'=>"Warga desa membangun pemeliharaan poskamling lingkungan",
                'Warga desa tidak membangun pemeliharaan poskamling lingkungan'=>"Warga desa tidak membangun pemeliharaan poskamling lingkungan");
                              echo form_dropdown("poskamling",$arr,$poskamling,'');
                  ?></td>
         </tr>
         <tr>
           <td>21.</td>
           <td><?php $arr = array(
                'Partisipasi warga mengadakan siskamling'=>"Partisipasi warga mengadakan siskamling",
                'Tidak ada partisipasi warga mengadakan siskamling'=>"Tidak ada partisipasi warga mengadakan siskamling");
                              echo form_dropdown("siskamling",$arr,$siskamling,'');
                  ?></td>
         </tr>
         <tr>
           <td>22.</td>
           <td><?php $arr = array(
                'Tingkat kejadian perkelahian massal di desa'=>"Tingkat kejadian perkelahian massal di desa",
                'Tidak ada kejadian perkelahian massal di desa'=>"Tidak ada kejadian perkelahian massal di desa");
                              echo form_dropdown("perkelahian",$arr,$perkelahian,'');
                  ?></td>
         </tr>
         <tr>
           <td>23.</td>
           <td><?php $arr = array(
                'Penyelesaian/perdamaian perkelahian massal yg sering terjadi
'=>"Penyelesaian/perdamaian perkelahian massal yg sering terjadi
",
                'Tidak ada penyelesaian/perdamaian perkelahian massal yg sering terjadi'=>"Tidak ada penyelesaian/perdamaian perkelahian massal yg sering terjadi");
                              echo form_dropdown("penyelesaian",$arr,$penyelesaian,'');
                  ?></td>
         </tr>
         <tr>
           <td rowspan="3">10. </td>
           <td rowspan="3">Kesejahteraan Sosial </td>
           <td>24.</td>
           <td><?php $arr = array(
                'Terdapat akses ke Sekolah Luar Biasa'=>"Terdapat akses ke Sekolah Luar Biasa",
                'Tidak Terdapat akses ke Sekolah Luar Biasa'=>"Tidak Terdapat akses ke Sekolah Luar Biasa");
                              echo form_dropdown("slb",$arr,$slb,'');
                  ?></td>
         </tr>
         <tr>
           <td>25.</td>
           <td><?php $arr = array(
                'Terdapat penyandang Kesejahteraan sosial (anak jalanan, pekerja seks komersial dan pengemis)'=>"Terdapat penyandang Kesejahteraan sosial (anak jalanan, pekerja seks komersial dan pengemis)",
                'Tidak Terdapat penyandang Kesejahteraan sosial (anak jalanan, pekerja seks komersial dan pengemis'=>"Tidak Terdapat penyandang Kesejahteraan sosial (anak jalanan, pekerja seks komersial dan pengemis");
                              echo form_dropdown("kesejahteraan_sosial",$arr,$kesejahteraan_sosial,'');
                  ?></td>
         </tr>
         <tr>
           <td>26.</td>
           <td><?php $arr = array(
                'Terdapat Penduduk yang bunuh diri'=>"Terdapat Penduduk yang bunuh diri",
                'Tidak Terdapat Penduduk yang bunuh diri'=>"Tidak Terdapat Penduduk yang bunuh diri");
                              echo form_dropdown("bunuh_diri",$arr,$bunuh_diri,'');
                  ?></td>
         </tr>
         <tr>
           <td rowspan="8"><strong>Permukiman</strong></td>
           <td rowspan="2">11.</td>
           <td rowspan="2">Akses ke Air Bersih dan Air Minum  Layak </td>
           <td>27.</td>
           <td><?php $arr = array(
                'Mayoritas penduduk desa memiliki sumber air minum yang layak'=>"Mayoritas penduduk desa memiliki sumber air minum yang layak",
                'Mayoritas penduduk desa tidak memiliki sumber air minum yang layak'=>"Mayoritas penduduk desa tidak memiliki sumber air minum yang layak");
                              echo form_dropdown("sumber_air",$arr,$sumber_air,'');
                  ?></td>
         </tr>
         <tr>
           <td>28.</td>
           <td><?php $arr = array(
                'Akses Penduduk desa memiliki air untuk mandi dan mencuci'=>"Akses Penduduk desa memiliki air untuk mandi dan mencuci",
                'Tidak ada Akses Penduduk desa memiliki air untuk mandi dan mencuci'=>"Tidak ada Akses Penduduk desa memiliki air untuk mandi dan mencuci");
                              echo form_dropdown("air_mandi",$arr,$air_mandi,'');
                  ?></td>
         </tr>
         <tr>
           <td rowspan="2">12. </td>
           <td rowspan="2">Akses ke Sanitasi</td>
           <td>29.</td>
           <td><?php $arr = array(
                'Mayoritas penduduk desa memiliki Jamban'=>"Mayoritas penduduk desa memiliki Jamban",
                'Mayoritas penduduk desa tidak memiliki Jamban'=>"Mayoritas penduduk desa tidak memiliki Jamban");
                              echo form_dropdown("jamban",$arr,$jamban,'');
                  ?></td>
         </tr>
         <tr>
           <td>30.</td>
           <td><?php $arr = array(
                'Terdapat tempat pembuangan sampah'=>"Terdapat tempat pembuangan sampah",
                'Tidak Terdapat tempat pembuangan sampah.'=>"Tidak Terdapat tempat pembuangan sampah.");
                              echo form_dropdown("sampah",$arr,$sampah,'');
                  ?></td>
         </tr>
         <tr>
           <td>13.</td>
           <td>Akses ke Listrik</td>
           <td>31.</td>
           <td><input type="text" name="aliran_listrik" id="aliran_listrik" size="3px" value="<?php echo $aliran_listrik; ?>" /> Jumlah keluarga yang telah memiliki aliran listrik</td>
         </tr>
         <tr>
           <td rowspan="3">14.</td>
           <td rowspan="3">Akses Informasi dan Komunikasi</td>
           <td>32.</td>
           <td><?php $arr = array(
                'Penduduk desa memiliki telepon selular dan sinyal yang kuat.
'=>"Penduduk desa memiliki telepon selular dan sinyal yang kuat.
",
                'Penduduk desa memiliki telepon selular dan sinyal yang lemah.
'=>"Penduduk desa memiliki telepon selular dan sinyal yang lemah.
");
                              echo form_dropdown("sinyal",$arr,$sinyal,'');
                  ?></td>
         </tr>
         <tr>
           <td>33.</td>
           <td><?php $arr = array(
                'Terdapat siaran televisi lokal, nasional dan asing'=>"Terdapat siaran televisi lokal, nasional dan asing",
                'Tidak Terdapat siaran televisi lokal, nasional dan asing'=>"Tidak Terdapat siaran televisi lokal, nasional dan asing");
                              echo form_dropdown("tv",$arr,$tv,'');
                  ?></td>
         </tr>
         <tr>
           <td>34.</td>
           <td><?php $arr = array(
                'Terdapat akses internet'=>"Terdapat akses internet",
                'Tidak Terdapat akses internet'=>"Tidak Terdapat akses internet");
                              echo form_dropdown("internet",$arr,$internet,'');
                  ?></td>
         </tr>
         <tr>
           <td rowspan="12">2.</td>
           <td rowspan="12"><strong>KETAHANAN EKONOMI</strong> </td>
           <td rowspan="12">&nbsp;</td>
           <td>15.</td>
           <td>Keragaman Produksi Masyarakat  Desa </td>
           <td>35.</td>
           <td><?php $arr = array(
                'Terdapat lebih dari satu jenis kegiatan ekonomi penduduk'=>"Terdapat lebih dari satu jenis kegiatan ekonomi penduduk",
                'Tidak Terdapat jenis kegiatan ekonomi penduduk'=>"Tidak Terdapat jenis kegiatan ekonomi penduduk");
                              echo form_dropdown("jenis_ekonomi",$arr,$jenis_ekonomi,'');
                  ?></td>
         </tr>
         <tr>
           <td rowspan="2">16.</td>
           <td rowspan="2">Tersedia Pusat Pelayanan  Perdagangan </td>
           <td>36.</td>
           <td><?php $arr = array(
                'Akses penduduk ke pusat perdagangan (pertokoan, pasar permanen dan semi permanen)'=>"Akses penduduk ke pusat perdagangan (pertokoan, pasar permanen dan semi permanen)",
                'Tidak ada Akses penduduk ke pusat perdagangan (pertokoan, pasar permanen dan semi permanen)'=>"Tidak ada Akses penduduk ke pusat perdagangan (pertokoan, pasar permanen dan semi permanen)");
                              echo form_dropdown("pusat_perdagangan",$arr,$pusat_perdagangan,'');
                  ?></td>
         </tr>
         <tr>
           <td>37.</td>
           <td><?php $arr = array(
                'Terdapat sektor perdagangan di permukiman (warung dan minimarket)'=>"Terdapat sektor perdagangan di permukiman (warung dan minimarket)",
                'tidak Terdapat sektor perdagangan di permukiman (warung dan minimarket)'=>"tidak Terdapat sektor perdagangan di permukiman (warung dan minimarket)");
                              echo form_dropdown("minimarket",$arr,$minimarket,'');
                  ?></td>
         </tr>
         <tr>
           <td>17.</td>
           <td>Akses Distribusi/Logistik</td>
           <td>38.</td>
           <td><?php $arr = array(
                'Terdapat kantor pos dan jasa logistik'=>"Terdapat kantor pos dan jasa logistik",
                'Tidak Terdapat kantor pos dan jasa logistik'=>"Tidak Terdapat kantor pos dan jasa logistik");
                              echo form_dropdown("logistik",$arr,$logistik,'');
                  ?></td>
         </tr>
         <tr>
           <td rowspan="3">18.</td>
           <td rowspan="3">Akses ke Lembaga Keuangan dan  Perkreditan </td>
           <td>39.</td>
           <td><?php $arr = array(
                'Tersedianya lembaga perbankan umum (Pemerintah dan swasta)'=>"Tersedianya lembaga perbankan umum (Pemerintah dan swasta)",
                'Tidak Tersedianya lembaga perbankan umum (Pemerintah dan swasta)'=>"Tidak Tersedianya lembaga perbankan umum (Pemerintah dan swasta)");
                              echo form_dropdown("perbankan",$arr,$perbankan,'');
                  ?></td>
         </tr>
         <tr>
           <td>40.</td>
           <td><?php $arr = array(
                'Tersedianya BPR'=>"Tersedianya BPR",
                'Tidak Tersedianya BPR'=>"Tidak Tersedianya BPR");
                              echo form_dropdown("bpr",$arr,$bpr,'');
                  ?></td>
         </tr>
         <tr>
           <td>41.</td>
           <td><?php $arr = array(
                'Akses penduduk ke kredit'=>"Akses penduduk ke kredit",
                'Tidak Ada Akses penduduk ke kredit'=>"Tidak Ada Akses penduduk ke kredit");
                              echo form_dropdown("kredit",$arr,$kredit,'');
                  ?></td>
         </tr>
         <tr>
           <td rowspan="2">19.</td>
           <td rowspan="2">Lembaga Ekonomi </td>
           <td>42.</td>
           <td><?php $arr = array(
                'Tersedianya lembaga ekonomi rakyat (koperasi)'=>"Tersedianya lembaga ekonomi rakyat (koperasi)",
                'Tidak Tersedianya lembaga ekonomi rakyat (koperasi)'=>"Tidak Tersedianya lembaga ekonomi rakyat (koperasi)");
                              echo form_dropdown("koperasi",$arr,$koperasi,'');
                  ?></td>
         </tr>
         <tr>
           <td>43.</td>
           <td><?php $arr = array(
                'Terdapat usaha kedai makananan, restoran, hotel, dan penginapan'=>"Terdapat usaha kedai makananan, restoran, hotel, dan penginapan",
                'Tidak Terdapat usaha kedai makananan, restoran, hotel, dan penginapan'=>"Tidak Terdapat usaha kedai makananan, restoran, hotel, dan penginapan");
                              echo form_dropdown("penginapan",$arr,$penginapan,'');
                  ?></td>
         </tr>
         <tr>
           <td rowspan="3">20.</td>
           <td rowspan="3">Keterbukaan Wilayah</td>
           <td>44.</td>
           <td><?php $arr = array(
                'Terdapat modal transportasi umum (transportasi angkutan umum, trayek reguler, dan jam operasi angkutan umum)'=>"Terdapat modal transportasi umum (transportasi angkutan umum, trayek reguler, dan jam operasi angkutan umum)",
                'Tidak Terdapat modal transportasi umum (transportasi angkutan umum, trayek reguler, dan jam operasi angkutan umum)'=>"Tidak Terdapat modal transportasi umum (transportasi angkutan umum, trayek reguler, dan jam operasi angkutan umum)");
                              echo form_dropdown("transportasi",$arr,$transportasi,'');
                  ?></td>
         </tr>
         <tr>
           <td>45.</td>
           <td><?php $arr = array(
                'Jalan yang dapat dilalui oleh kendaraan bermotor roda empat atau lebih'=>"Jalan yang dapat dilalui oleh kendaraan bermotor roda empat atau lebih",
                'Tidak ada Jalan yang dapat dilalui oleh kendaraan bermotor roda empat atau lebih'=>"Tidak ada Jalan yang dapat dilalui oleh kendaraan bermotor roda empat atau lebih");
                              echo form_dropdown("bermotor",$arr,$bermotor,'');
                  ?></td>
         </tr>
         <tr>
           <td>46.</td>
           <td><input type="text" name="jalan" id="jalan" size="20px" value="<?php echo $jalan; ?>" /> Kualitas Jalan Desa (Jalan terluas di desa dengan aspal, kerikil, dan tanah)</td>
         </tr>
         <tr>
           <td rowspan="6">3.</td>
           <td rowspan="6">EKOLOGI</td>
           <td rowspan="6">&nbsp;</td>
           <td rowspan="2">21.</td>
           <td rowspan="2">Kualitas Lingkungan </td>
           <td>47.</td>
           <td><?php $arr = array(
                'Ada pencemaran air, tanah dan udara'=>"Ada pencemaran air, tanah dan udara",
                'Tidak Ada pencemaran air, tanah dan udara'=>"Tidak Ada pencemaran air, tanah dan udara");
                              echo form_dropdown("pencemaran",$arr,$pencemaran,'');
                  ?></td>
         </tr>
         <tr>
           <td>48.</td>
           <td><?php $arr = array(
                'Terdapat sungai yg terkena limbah'=>"Terdapat sungai yg terkena limbah",
                'Tidak Terdapat sungai yg terkena limbah'=>"Tidak Terdapat sungai yg terkena limbah");
                              echo form_dropdown("sungai",$arr,$sungai,'');
                  ?></td>
         </tr>
         <tr>
           <td rowspan="4">22.</td>
           <td rowspan="4">Potensi/Rawan Bencana Alam</td>
           <td>49.</td>
           <td><?php $arr = array(
                'Pencemaran air, tanah dan udara'=>"Pencemaran air, tanah dan udara",
                'Tidak ada Pencemaran air, tanah dan udara'=>"Tidak ada Pencemaran air, tanah dan udara");
                              echo form_dropdown("air",$arr,$air,'');
                  ?></td>
         </tr>
         <tr>
           <td>50.</td>
           <td><input type="text" name="bencanaalam" id="bencanaalam" size="20px" value="<?php echo $bencanaalam; ?>" /> kejadian Bencana Alam (banjir, tanah longsong,kebakaran hutan)</td>
         </tr>
         <tr>
           <td>51.</td>
            <td><input type="text" name="tindakanbencana" id="tindakanbencana" size="20px" value="<?php echo $tindakanbencana; ?>" /> Upaya/Tindakan terhadap potensi bencana alam(Tanggap bencana, jalur evakuasi, peringatan dinidan ketersediaan peralatan penanganan bencana)</td>
         </tr>
         <tr>
           <td>52.</td>
            <td><input type="text" name="upayaantisipasi" id="upayaantisipasi" size="20px" value="<?php echo $upayaantisipasi; ?>" /> Upaya Antisipasi,Mitigasi bencana alam yg ada didesa</td>
         </tr>
         <tr>
      
       </tr>
       </table>
       <p><center><a href="#" class="easyui-linkbutton" iconCls="icon-save"   onclick="simpan()" >Simpan</a>
<a class="easyui-linkbutton"  target="_blank"  iconCls="icon-print" href="<?php echo site_url("indeks_desa_membangun/cetak"); ?>" > Cetak </a></center></p>
       <p>&nbsp;</p>
</div>

</form>

<script type="text/javascript">
 

 function simpan(){
  // alert('bahlul');
    $.ajax({
      url : '<?php echo  site_url("indeks_desa_membangun/save") ?>',
      dataType : 'json',
      type : 'post',
      data : $("#imd").serialize(), 
      success : function(obj) {
          // alert('hafdfdj');
           if (obj.success == false ){
                $.messager.alert('Error',obj.pesan,'error');
              } else {
                $.messager.alert('Informasi',obj.pesan,'info');
                 
              }
      } 


    });
 }

  // function simpan(){
  //   $.ajax(function(){
  //     url : '<?php echo  site_url("cetak_monografi/save") ?>',
  //     data : $("#monografi").serialize() , 
  //     dataType : 'json',
  //     success: function(result){
  //          console.log(result);
  //          obj = $.parseJSON(result);
  //             if (obj.success == false ){
  //               $.messager.alert('Error',obj.pesan,'error');
  //             } else {
  //               $.messager.alert('Informasi',obj.pesan,'info');
                 
  //             }
  //       }
  //   });
 

</script>