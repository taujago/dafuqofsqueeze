<html>
  <head>
    <title>
      <?php echo   $title; ?>
    </title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/print_formulir.css">

  </head>

<body>
  
  <?php 
  $desa2 = $this->cm->data_desa();

  ?>

  <div align="right"><h2>F-1.59</h2></div>
  <font size="10">
  <table width="100%">
      <tr>
        <td width="19%">
          PROVINSI        </td>
        <td width="2%">
          :        </td>
        <td width="11%"> 
          <table class="tabel">
            <tr>
                <?php
                  $arr1 = str_split($desa2->id_provinsi);
                  foreach ($arr1 as $v) {
                    echo "<td>&nbsp;".$v."&nbsp;</td>";
                  }
                ?>
            </tr>
          </table>  
        </td>
        <td width="68%">
          <table width="50%" class="tabel">
            <tr>
                <td>
                <?php echo $desa2->provinsi; ?>
                </td>
            </tr>
          </table>  
        </td>
      </tr>
      <tr>
        <td>KABUPATEN/KOTA</td>
        <td>:</td>
          <td>  
            <table class="tabel">
            <tr>
        <?php
          $arr1 = str_split($desa2->kode_kabupaten);
          foreach ($arr1 as $v) {
           echo "<td>&nbsp;".$v."&nbsp;</td>";

          }
        ?>
         </tr>
          </table>  
          </td>
          <td> 
          <table width="50%" class="tabel">
            <tr>
                <td>
                <?php echo $desa2->kota; ?> 
                </td>
            </tr>
          </table>  

          </td>

    </tr>
      <tr>
        <td >KECAMATAN</td>
        <td>:</td>
          <td> 
            <table class="tabel">
              <tr>
      <?php

        $arr1 = str_split($desa2->kode_kecamatan);
        foreach ($arr1 as $v) {
           echo "<td>&nbsp;".$v."&nbsp;</td>";

        }
      ?>
        
      
            </tr>
          </table></td>
            <td> 
             <table width="50%" class="tabel">
            <tr>
                <td>
                 <?php echo $desa2->kecamatan; ?>  
                </td>
            </tr>
          </table>  


           </td></tr>
      <tr>
        <td>KELURAHAN/DESA</td>
        <td>:</td>

           
        <td> 
           <table class="tabel">
            <tr>
      <?php

        $arr1 = str_split($desa2->kode_surat);
        foreach ($arr1 as $v) {
           echo "<td>&nbsp;".$v."&nbsp;</td>";

        }
      ?>
        
      
            </tr>
          </table></td>
        <td> 
         <table width="50%" class="tabel">
            <tr>
                <td>
                <?php echo $desa2->desa ?>  
                </td>
            </tr>
          </table> 

        </td>
    </tr>
            </td></tr>
     
      
</table>

<center>
  <h2>SURAT PENGANTAR PINDAH KE LUAR NEGERI<br>No. <?php echo $no_formulir ?></h2>
   </p></center>
   

 <table width="100%">
      <tr>
        <td colspan="3">Yang bertanda tangan dibawah ini, menerangkan bahwa</td>
      </tr>
      <tr>
        <td width="19%">
          <table width="95%" class="tabel">
                  <tr>
                    <td>
                      1. NIK                    </td>
                  </tr>
          </table>        </td>
        <td>
          :        </td>
        <td> 
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($nik);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
          </table>        </td>
      </tr>

      <tr>
        <td>
          <table width="95%" class="tabel">
                  <tr>
                    <td>
                      2. Nama Pemohon                    </td>
                  </tr>
          </table>        </td>
        <td>
          :        </td>
        <td>  
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($nama);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
          </table>        </td>
      </tr>


      <tr>
        <td>
          <table width="95%" class="tabel">
                  <tr>
                    <td>
                      3. Nomor Kartu Keluarga                    </td>
                  </tr>
          </table>        </td>
        <td>
          :        </td>
        <td>  
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($kepala_keluarga_kk);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
          </table>        </td>
      </tr>
      <tr>
        <td>
          <table width="95%" class="tabel">
                  <tr>
                    <td>
                      4. Nama Kepala Keluarga                  </td>
                  </tr>
          </table>        </td>
        <td>
          :        </td>
        <td>  
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($kepala_keluarga_nama);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
          </table>        </td>
      </tr>
       <tr>
        <td>
          <table width="95%" class="tabel">
                  <tr>
                    <td>
                      5. Jenis Kelamin                  </td>
                  </tr>
          </table>        </td>
        <td>
          :        </td>
        <td>  
          <table class="tabel">
            <tr>
             <td><?php echo strtoupper($this->cm->jk($jk)) ; ?></td>
            </tr>
          </table>        </td>
      </tr>

      <tr>
        <td>
          <table width="95%" class="tabel">
                  <tr>
                    <td>
                      6. Tempat Lahir                 </td>
                  </tr>
          </table>        </td>
        <td>
          :        </td>
        <td>  
          <table class="tabel">
            <tr>
             <td><?php echo $tmp_lahir; ?></td>
            </tr>
          </table>        </td>
      </tr>
        <tr>
        <td><table width="95%" class="tabel">
                  <tr>
                    <td>
                      7. Tanggal Lahir                 </td>
                  </tr>
          </table>  </td>
        <td>:</td>
        <td><table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($tgl_lahir);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
          </table>   </td>
      </tr>

      <tr>
        <td>
          <table width="95%" class="tabel">
                  <tr>
                    <td>
                      8. Agama                </td>
                  </tr>
          </table>        </td>
        <td>
          :        </td>
        <td>  
          <table class="tabel">
            <tr>
             <td><?php echo $agama; ?></td>
            </tr>
          </table>        </td>
      </tr>

      <tr>
        <td>
          <table width="95%" class="tabel">
                  <tr>
                    <td>
                      9. Status Perkawinan                 </td>
                  </tr>
          </table>        </td>
        <td>
          :        </td>
        <td>  
          <table class="tabel">
            <tr>
             <td> <?php 
        $arr_status_kawin = $this->cm->arr_status_kawin;
        echo strtoupper($arr_status_kawin[$status_kawin])  ?></td>
            </tr>
          </table>        </td>
      </tr>

    
      
       <td>
          <table width="95%" class="tabel">
            <tr>
              <td>
                10. Alamat Terakhir             </td>
            </tr>
          </table>        </td>
        <td>
          :        </td>  
        <td> 
           <table width="58%" class="tabel">
           <tr>
              <td>
                <?php echo $alamat ?>              </td>
            </tr>
          </table>        </td>
      
</table>
     
     
</table>
      <table width="100%">
       <tr>
         <td width="203">&nbsp;</td>
         <td width="14">&nbsp;</td>
       <td width="125">
         a. Desa/Kelurahan        </td>  
        <td width="285"> 
           <table width="96%" class="tabel">
           <tr>
              <td>
                <?php echo $desa2->desa ?>             </td>
            </tr>
          </table>
         <td width="80"></td>
        <td width="317"> 
            <table class="tabel">
            <tr>
      <?php

        $arr1 = str_split($desa2->kode_surat);
        foreach ($arr1 as $v) {
           echo "<td>&nbsp;".$v."&nbsp;</td>";

        }
      ?>
        
      
            </tr>
          </table>   </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
       <td>
         b. Kecamatan       </td>  
        <td> 
           <table width="96%" class="tabel">
           <tr>
              <td>
                 <?php echo $desa2->kecamatan ?>          </td>
            </tr>
          </table>        </td>
        <td>
        </td>
        <td> 
          <table class="tabel">
            <tr>
      <?php

        $arr1 = str_split($desa2->kode_kecamatan);
        foreach ($arr1 as $v) {
           echo "<td>&nbsp;".$v."&nbsp;</td>";

        }
      ?>
        
      
            </tr>
          </table>      </td>
      </tr>
       <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
       <td>
         c. Kode Pos       </td>  
        <td> 
           <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($desa2->kodepos);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
        </table>        </td>
        
       
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
       <td>
         d. Telepon/Hp.       </td>  
        <td> 
           <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($telepon_pemohon);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
        </table>        </td>
        
       
      </tr>
</table>


  <table width="100%">
      <tr>
        <td width="19%">
         <!--  <table width="95%" class="tabel">
                  <tr>
                    <td>
                      1. Nama Pemohon 
                    </td>
                  </tr>
          </table>  -->
        </td>
        
        <td> 
          <!-- <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($pemohon_nama);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
          </table> -->
        </td>
      </tr>

      <tr>
        <td>
          <table width="95%" class="tabel">
                 <!--  <tr>
                    <td>
                      2. NIK Pemohon 
                    </td>
                  </tr> -->
          </table> 
        </td>
        <td>
          
        </td>
        <td>  
        <!--   <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($pemohon_nik);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
          </table>   -->
        </td>
      </tr>

      <tr>
        <td>
          <table width="95%" class="tabel">
            <tr>
              <td>
                11. Pindah Ke Negara
              </td>
            </tr>
          </table> 
        </td>
        <td>
          :
        </td>
          <td width="48.5%"> 
          <table width="96%" class="tabel">
           <tr>
              <td>
                 <?php echo $pindah_negara ?>          </td>
            </tr>
          </table>      
          </td>
          <td width="31%"> 
           <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($kode_negara);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
        </table>        </td>

      </tr>


<table width="100%">
<tr>
       
     
</table>
        
      </tr>

      <table width="100%">
       <tr>
         <td width="203">&nbsp;</td>
         <td width="14">&nbsp;</td>
       <td width="125">
         a. Alamat      </td>  
        <td width="285"> 
           <table width="96%" class="tabel">
           <tr>
              <td>
                <?php echo $alamat_negara ?>             </td>
            </tr>
          </table>
         <td width="120">
         </td>
        <td width="317"> 
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
       <td>
         b. Penanggung Jawab          </td>  
        <td> 
           <table width="96%" class="tabel">
           <tr>
              <td>
                 <?php echo $penanggung_jawab ?>          </td>
            </tr>
          </table>        </td>
        <td>
        </td>
        <td> 
        </td>
      </tr>
</table>


</table>

<table width="100%">
	    <tr>
        <td><table width="95%" class="tabel">
                  <tr>
                    <td>
                      12. Alasan Pindah                </td>
                  </tr>
          </table>  </td>
        <td>:</td>
        <td><table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($alasan_pindah);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>

            </tr>
          </table>   </td>

      </tr>
      <tr>
        <td></td>
        <td>&nbsp;</td>
        <td>1. Pekerjaan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          3. Keamanan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          5. Keluarga &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <br>
          2. Pendidikan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          4. Kesehatan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          
          6. Lainnya &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	
       	</td>
      </tr>
        <tr>
        <td width="19%">                </td>
        <td width="2%">&nbsp;</td>
        <td width="79%"></td>
      </tr>
         <tr>
        <td><table width="95%" class="tabel">
                  <tr>
                    <td>
                      13. Rencana Pindah                 </td>
                  </tr>
          </table>  </td>
        <td>:</td>
        <td><table class="tabel">
            <tr>
              <?php
                $arr1 = str_split(flipdate($tgl_pindah));
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
          </table>   </td>
      </tr>

      <tr>
        <td><table width="95%" class="tabel">
                  <tr>
                    <td>
                      14. Bidang Pekerjaan              </td>
                  </tr>
          </table>  </td>
        <td>:</td>
        <td><table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($bid_pekerjaan);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>

            </tr>
          </table>   </td>

      </tr>
      <tr>
        <td></td>
        <td>&nbsp;</td>
        <td>1. Industri/Perdagangan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          7. Keuangan/Perbankan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

          
          <br>
          2. Kehutanan/Perkebunan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          8. Kesehatan/Sosial &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <br>
          3. Pertambangan/Energi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          9. Pariwisata &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <br>
          4. Pekerjaan Umum/Konstruksi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          10. Transportasi/Komunikasi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <br>
          5. Pertanian/Peternakan/Perikanan &nbsp;&nbsp;&nbsp;&nbsp;
          11. Pendidikan/Kebudayaan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
          <br>
          6. Keagamaan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          12. Jasa dan Lainnya  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          
        </td>
      </tr>
      
     
</table>
<p>15. Pengikut/Anggota Keluarga ** </p>
<table width="100%" border="0.5" cellpadding="3" class="tabel">
<tr><th   align="center">No.</th>
  <th width="20%" align="center">Nama</th>
  <th   align="center">NIK </th>
  <th width="10%"  align="center">JK </th>
<th  align="center">Tempat Lahir</th>
<th  align="center">Tanggal Lahir</th>
<th width="20%"  align="center">Status Hubungan dengan Pemohon</th>


</tr>
<?php 
  
	 
$baris = 0; $i=0;
if($record->num_rows() > 0 ) {	
 
	foreach($record->result() as $row) :
		$baris--;

		$i++;
		echo "<tr>
		<td><center>$i.</center></td> 
    <td><center>$row->nama</center> </td> 
    <td><center>$row->nik </center></td>
    <td><center>$row->jk </center></td> 
    <td><center>$row->tmp_lahir</center></td>
    <td><center>$row->tgl_lahir</center></td>
    <td><center>$row->hubungan</center></td>


		
		</tr>";
	endforeach;	
}
for($x=0; $x<$baris; $x++) {
	$i++;
	echo "<tr>
		<td>$i</td> <td> </td><td> </td> <td> </td> <td> </td> <td> </td> <td> </td> 
		

		</tr>";
}
 
?>
</table>

<?php 
  $desa2 = $this->cm->data_desa();

  ?>
  <?php  if($desa2->bentuk_lembaga=="Kelurahan")  {  ?>
</p>

<?php }  else { ?>
<table width="100%" border="0" cellpadding="0">
 
  <tr>
    <td colspan="5" align="center"><div align="left">bermaksud pindah ke luar negeri</div></td>
  </tr>
  <tr>
    <td colspan="5" align="center"><div align="left">Surat Pengantar ini dibuat untuk keperluan pengurusan Surat Keterangan Pindah ke Luar Negeri (SKPLN)</div></td>
  </tr>
  <tr>
    <td width="28%" align="center">&nbsp;</td>
	
    <td width="23%" align="center"></td>
	
    <td width="0%" align="center"></td>
    <td width="21%" align="center"><font size="10"></td>
	  <td width="28%" align="center"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal)); ?></td>
  </tr>
  
  <tr>
    <td align="center">PEMOHON,</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td rowspan="2" align="center"><font size="10">      <div align="center"><img src="<?php echo base_url()."/foto/".$foto; ?>"width="60" height="80" border="1"/></div></td>
	   <td><div align="center"><?php echo strtoupper($ttd_jabatan) ; ?> </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
	<td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="center">Mengetahui : </div></td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
	<td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><?php echo $nama; ?><br></td>
    <td align="center">CAMAT </td>
    <td>&nbsp;</td>
    <td align="center"><font size="10"><br></td>
	 
 <td align="center"><?php echo $ttd_nama; ?> </td>
  </tr>
   <tr>
     <td align="center">&nbsp;</td>
     <td align="center">&nbsp;</td>
     <td>&nbsp;</td>
     <td align="center">&nbsp;</td>
     <td align="center">&nbsp;</td>
   </tr>
   <tr>
     <td align="center">&nbsp;</td>
     <td align="center">&nbsp;</td>
     <td>&nbsp;</td>
     <td align="center">&nbsp;</td>
     <td align="center">&nbsp;</td>
   </tr>
   <tr>
     <td align="center">&nbsp;</td>
     <td align="center">&nbsp;</td>
     <td>&nbsp;</td>
     <td align="center">&nbsp;</td>
     <td align="center">&nbsp;</td>
   </tr>
   <tr>
     <td align="center">&nbsp;</td>
     <td align="center">&nbsp;</td>
     <td>&nbsp;</td>
     <td align="center">&nbsp;</td>
     <td align="center">&nbsp;</td>
   </tr>
   <tr>
     <td align="center">&nbsp;</td>
     <td align="center"><?php echo $desa2->nama_camat; ?></td>
     <td>&nbsp;</td>
     <td align="center">&nbsp;</td>
     <td align="center">&nbsp;</td>
   </tr>
   <tr>
     <td align="center">&nbsp;</td>
     <td align="center"><?php echo $desa2->nip_camat; ?></td>
     <td>&nbsp;</td>
     <td align="center">&nbsp;</td>
     <td align="center">&nbsp;</td>
   </tr>
</table>


<?php }  ?>

</body>

</html>